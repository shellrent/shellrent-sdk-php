<?php

declare(strict_types=1);

namespace Shellrent\Sdk\Auth;

/**
 * The token endpoint did not issue an access token.
 *
 * The code is the HTTP status of the token endpoint, or 0 when it could not be reached.
 */
final class TokenException extends \RuntimeException
{
    public function __construct(
        string $message,
        private readonly ?string $error = null,
        private readonly ?string $errorDescription = null,
        int $code = 0,
        ?\Throwable $previous = null,
    ) {
        parent::__construct($message, $code, $previous);
    }

    /**
     * OAuth2 error code, such as "invalid_client", "invalid_scope" or "rate_limited".
     */
    public function getError(): ?string
    {
        return $this->error;
    }

    public function getErrorDescription(): ?string
    {
        return $this->errorDescription;
    }
}
