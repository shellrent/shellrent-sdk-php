<?php

declare(strict_types=1);

namespace Shellrent\Sdk\Auth;

/**
 * OAuth2 client credentials of a Shellrent API client.
 */
final class ClientCredentials
{
    public const DEFAULT_API_URL = 'https://api.shellrent.com';

    /**
     * Scopes to request; null lets the server grant every scope of the client.
     *
     * @var list<string>|null
     */
    public readonly ?array $scopes;

    /** Base URL of the API, without trailing slash. */
    public readonly string $apiUrl;

    public readonly string $tokenUrl;

    private readonly string $clientSecret;

    /**
     * @param list<string>|null $scopes   Scopes to request; null (or an empty list) lets the server grant every scope of the client.
     * @param string|null       $audience Audience to request; null lets the server use the only audience of the client.
     * @param string|null       $tokenUrl Token endpoint; null means "{$apiUrl}/oauth/token".
     * @param string            $apiUrl   Base URL of the API, to be changed only to use another environment such as staging.
     */
    public function __construct(
        public readonly string $clientId,
        #[\SensitiveParameter] string $clientSecret,
        ?array $scopes = null,
        public readonly ?string $audience = null,
        ?string $tokenUrl = null,
        string $apiUrl = self::DEFAULT_API_URL,
    ) {
        if ($clientId === '' || $clientSecret === '') {
            throw new \InvalidArgumentException('The client ID and the client secret must not be empty.');
        }

        $this->clientSecret = $clientSecret;
        $this->scopes = $scopes === null || $scopes === [] ? null : array_values($scopes);
        $this->apiUrl = rtrim($apiUrl, '/');
        $this->tokenUrl = $tokenUrl ?? $this->apiUrl . '/oauth/token';
    }

    /**
     * Reads SHELLRENT_CLIENT_ID and SHELLRENT_CLIENT_SECRET, plus the optional SHELLRENT_SCOPES
     * (separated by spaces or commas) and SHELLRENT_API_URL.
     */
    public static function fromEnvironment(): self
    {
        $clientId = self::env('SHELLRENT_CLIENT_ID');
        $clientSecret = self::env('SHELLRENT_CLIENT_SECRET');

        if ($clientId === null || $clientSecret === null) {
            throw new \InvalidArgumentException('The SHELLRENT_CLIENT_ID and SHELLRENT_CLIENT_SECRET environment variables must be set.');
        }

        $scopes = self::env('SHELLRENT_SCOPES');

        return new self(
            $clientId,
            $clientSecret,
            scopes: $scopes === null ? null : preg_split('/[\s,]+/', $scopes, -1, PREG_SPLIT_NO_EMPTY),
            apiUrl: self::env('SHELLRENT_API_URL') ?? self::DEFAULT_API_URL,
        );
    }

    public function getClientSecret(): string
    {
        return $this->clientSecret;
    }

    /**
     * Keeps the secret out of var_dump() and print_r().
     *
     * @return array<string, mixed>
     */
    public function __debugInfo(): array
    {
        return [
            'clientId' => $this->clientId,
            'clientSecret' => '********',
            'scopes' => $this->scopes,
            'audience' => $this->audience,
            'tokenUrl' => $this->tokenUrl,
            'apiUrl' => $this->apiUrl,
        ];
    }

    /**
     * Frameworks such as Symfony and Laravel load .env files into $_SERVER and $_ENV, not into getenv().
     */
    private static function env(string $name): ?string
    {
        $value = $_SERVER[$name] ?? $_ENV[$name] ?? getenv($name);

        return is_string($value) && $value !== '' ? $value : null;
    }
}
