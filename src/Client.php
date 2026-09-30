<?php

declare(strict_types=1);

namespace Shellrent\Sdk;

use GuzzleHttp\ClientInterface;
use Psr\SimpleCache\CacheInterface;
use Shellrent\Sdk\Auth\ClientCredentials;
use Shellrent\Sdk\Http\HttpClientFactory;

/**
 * Entry point of the SDK: one accessor per API class, such as purchases() for PurchasesApi.
 *
 * @phpstan-import-type Options from HttpClientFactory
 */
final class Client
{
    use ApiAccessors;

    public function __construct(
        private readonly ClientInterface $httpClient,
        private readonly Configuration $config,
    ) {
    }

    /**
     * @param CacheInterface|null $cache   Cache shared by the processes to reuse the access token.
     * @param Options             $options See {@see HttpClientFactory}.
     */
    public static function create(ClientCredentials $credentials, ?CacheInterface $cache = null, array $options = []): self
    {
        $options['user_agent'] ??= HttpClientFactory::userAgent();

        $config = (new Configuration())
            ->setHost($credentials->apiUrl)
            ->setUserAgent($options['user_agent']);

        return new self(HttpClientFactory::create($credentials, $cache, $options), $config);
    }

    public function getHttpClient(): ClientInterface
    {
        return $this->httpClient;
    }

    public function getConfig(): Configuration
    {
        return $this->config;
    }
}
