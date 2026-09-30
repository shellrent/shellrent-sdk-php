<?php

declare(strict_types=1);

namespace Shellrent\Sdk\Http;

use Composer\InstalledVersions;
use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Middleware;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\SimpleCache\CacheInterface;
use Shellrent\Sdk\Auth\ClientCredentials;
use Shellrent\Sdk\Auth\OAuth2Middleware;
use Shellrent\Sdk\Auth\TokenProvider;

/**
 * Creates the Guzzle client for the Shellrent APIs: OAuth2 authentication plus retries on 429.
 *
 * It does not depend on the generated classes, so that SDKs with other generated classes can use it too.
 *
 * Options:
 * - retry:      retry the requests rejected with 429 Too Many Requests (default true);
 * - user_agent: User-Agent header (default "shellrent-sdk-php/<version>");
 * - handler:    Guzzle handler that sends the requests (default: cURL);
 * - guzzle:     other Guzzle client options, such as "timeout" or "proxy".
 *
 * @phpstan-type Options array{retry?: bool, user_agent?: string, handler?: callable, guzzle?: array<string, mixed>}
 */
final class HttpClientFactory
{
    /** Retries of a request rejected with 429 Too Many Requests. */
    public const MAX_RETRIES = 2;

    /** Longest wait, in seconds, before a retry: a longer Retry-After returns the 429 to the caller. */
    public const MAX_RETRY_DELAY = 60;

    /**
     * @param Options $options
     */
    public static function create(ClientCredentials $credentials, ?CacheInterface $cache = null, array $options = []): ClientInterface
    {
        // The token endpoint is called by a client of its own, without the OAuth2 middleware.
        $tokens = new TokenProvider($credentials, self::client(self::handlerStack($options), $options), $cache);

        $stack = self::handlerStack($options);
        $stack->after('http_errors', new OAuth2Middleware($tokens), 'oauth2');

        return self::client($stack, $options);
    }

    public static function userAgent(): string
    {
        $version = InstalledVersions::isInstalled('shellrent/sdk') ? InstalledVersions::getPrettyVersion('shellrent/sdk') : null;

        return 'shellrent-sdk-php/' . ($version !== null ? ltrim($version, 'v') : 'unknown');
    }

    /**
     * @param Options $options
     */
    private static function handlerStack(array $options): HandlerStack
    {
        $stack = HandlerStack::create($options['handler'] ?? null);

        if ($options['retry'] ?? true) {
            // Inside "http_errors", which would turn the 429 response into an exception.
            $stack->after('http_errors', Middleware::retry(self::shouldRetry(...), self::retryDelay(...)), 'retry');
        }

        return $stack;
    }

    /**
     * @param Options $options
     */
    private static function client(HandlerStack $stack, array $options): Client
    {
        $config = $options['guzzle'] ?? [];
        $config['handler'] = $stack;
        $config['headers'] = ($config['headers'] ?? []) + ['User-Agent' => $options['user_agent'] ?? self::userAgent()];

        return new Client($config);
    }

    private static function shouldRetry(int $retries, RequestInterface $request, ?ResponseInterface $response = null): bool
    {
        return $retries < self::MAX_RETRIES
            && $response?->getStatusCode() === 429
            && self::retryDelay($retries + 1, $response) <= self::MAX_RETRY_DELAY * 1000;
    }

    /**
     * Milliseconds to wait before a retry: Retry-After (seconds or HTTP date), else 1 s, 2 s, ...
     */
    private static function retryDelay(int $retries, ?ResponseInterface $response = null): int
    {
        $retryAfter = $response?->getHeaderLine('Retry-After') ?? '';

        if (ctype_digit($retryAfter)) {
            return (int) $retryAfter * 1000;
        }
        if ($retryAfter !== '' && ($time = strtotime($retryAfter)) !== false) {
            return max(0, $time - time()) * 1000;
        }

        return 2 ** ($retries - 1) * 1000;
    }
}
