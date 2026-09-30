<?php

declare(strict_types=1);

namespace Shellrent\Sdk\Auth;

use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Psr7\Message;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Psr\Http\Message\ResponseInterface;
use Psr\SimpleCache\CacheInterface;

/**
 * Obtains access tokens with the client credentials grant and reuses them until shortly before they expire.
 *
 * Tokens are kept in memory for the life of the process and, when a PSR-16 cache is given,
 * shared with the other processes through it. The client secret is never cached.
 */
final class TokenProvider
{
    /** Seconds before the expiry after which a token is no longer used. */
    private const EXPIRY_MARGIN = 60;

    /** @var array{access_token: string, expires_at: int}|null */
    private ?array $token = null;

    private readonly string $cacheKey;

    /** @var \Closure(): int */
    private readonly \Closure $clock;

    /**
     * @param ClientInterface        $httpClient Client for the token endpoint, without the OAuth2 middleware.
     * @param (\Closure(): int)|null $clock      Current Unix time, replaceable in tests.
     */
    public function __construct(
        private readonly ClientCredentials $credentials,
        private readonly ClientInterface $httpClient,
        private readonly ?CacheInterface $cache = null,
        ?\Closure $clock = null,
    ) {
        $this->clock = $clock ?? time(...);

        $scopes = $credentials->scopes;
        if ($scopes !== null) {
            sort($scopes);
        }
        // xxh128 keeps the key within the 64 characters every PSR-16 implementation supports.
        $this->cacheKey = 'shellrent_sdk.token.' . hash('xxh128', json_encode(
            [$credentials->tokenUrl, $credentials->clientId, $credentials->audience, $scopes],
            JSON_THROW_ON_ERROR,
        ));
    }

    /**
     * @throws TokenException
     */
    public function getToken(): string
    {
        $now = ($this->clock)();

        if ($this->token === null || $this->token['expires_at'] <= $now) {
            $this->token = $this->cachedToken($now) ?? $this->requestToken($now);
        }

        return $this->token['access_token'];
    }

    /**
     * Forgets the current token, for example after the API rejected it.
     */
    public function invalidate(): void
    {
        $this->token = null;

        try {
            $this->cache?->delete($this->cacheKey);
        } catch (\Exception) {
            // Without the cache, other processes request a token on their own.
        }
    }

    /**
     * @return array{access_token: string, expires_at: int}|null
     */
    private function cachedToken(int $now): ?array
    {
        try {
            $token = $this->cache?->get($this->cacheKey);
        } catch (\Exception) {
            return null;
        }

        if (!is_array($token) || !is_string($token['access_token'] ?? null) || !is_int($token['expires_at'] ?? null)) {
            return null;
        }

        return $token['expires_at'] > $now ? ['access_token' => $token['access_token'], 'expires_at' => $token['expires_at']] : null;
    }

    /**
     * @return array{access_token: string, expires_at: int}
     */
    private function requestToken(int $now): array
    {
        $params = [
            'grant_type' => 'client_credentials',
            'client_id' => $this->credentials->clientId,
            'client_secret' => $this->credentials->getClientSecret(),
        ];
        if ($this->credentials->scopes !== null) {
            $params['scope'] = implode(' ', $this->credentials->scopes);
        }
        if ($this->credentials->audience !== null) {
            $params['audience'] = $this->credentials->audience;
        }

        // The body is built here, not passed as "form_params", so that the secret never appears in stack traces.
        $request = new Request('POST', $this->credentials->tokenUrl, [
            'Accept' => 'application/json',
            'Content-Type' => 'application/x-www-form-urlencoded',
        ], http_build_query($params, '', '&', PHP_QUERY_RFC1738));

        try {
            $response = $this->httpClient->send($request, [
                RequestOptions::HTTP_ERRORS => false,
                RequestOptions::ALLOW_REDIRECTS => false,
            ]);
        } catch (GuzzleException $e) {
            throw new TokenException(
                sprintf('Unable to request an access token from %s: %s', $this->credentials->tokenUrl, $e->getMessage()),
                previous: $e,
            );
        }

        $body = json_decode((string) $response->getBody(), true);
        $body = is_array($body) ? $body : [];

        if ($response->getStatusCode() !== 200 || !is_string($body['access_token'] ?? null) || !is_int($body['expires_in'] ?? null)) {
            throw $this->tokenException($response, $body);
        }

        $token = ['access_token' => $body['access_token'], 'expires_at' => $now + $body['expires_in'] - self::EXPIRY_MARGIN];

        $ttl = $token['expires_at'] - $now;
        if ($ttl > 0) {
            try {
                $this->cache?->set($this->cacheKey, $token, $ttl);
            } catch (\Exception) {
                // The token is still reused in memory.
            }
        }

        return $token;
    }

    /**
     * @param array<mixed> $body
     */
    private function tokenException(ResponseInterface $response, array $body): TokenException
    {
        $error = is_string($body['error'] ?? null) ? $body['error'] : null;
        $description = is_string($body['error_description'] ?? null) ? $body['error_description'] : null;

        $message = sprintf('The token endpoint %s answered HTTP %d', $this->credentials->tokenUrl, $response->getStatusCode());
        if ($error !== null) {
            $message .= ': ' . $error . ($description !== null ? ' (' . $description . ')' : '');
        } elseif ($response->getStatusCode() === 200) {
            $message .= ' without a valid access token';
        } elseif (($summary = Message::bodySummary($response)) !== null) {
            // Not an OAuth2 error, for example a page of a proxy: show the start of it.
            $message .= ': ' . $summary;
        }

        return new TokenException($message, $error, $description, $response->getStatusCode());
    }
}
