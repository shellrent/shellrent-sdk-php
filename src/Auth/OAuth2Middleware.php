<?php

declare(strict_types=1);

namespace Shellrent\Sdk\Auth;

use GuzzleHttp\Promise\PromiseInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

/**
 * Guzzle middleware that sends the access token as "Authorization: Bearer".
 *
 * When the API answers 401 it discards the token and sends the request once more with a new one.
 * It must sit inside "http_errors", to see the 401 response, and outside "allow_redirects",
 * so that redirects to other hosts do not get the token back.
 */
final class OAuth2Middleware
{
    public function __construct(private readonly TokenProvider $tokens)
    {
    }

    public function __invoke(callable $handler): callable
    {
        return function (RequestInterface $request, array $options) use ($handler): PromiseInterface {
            if ($request->hasHeader('Authorization')) {
                return $handler($request, $options);
            }

            return $handler($this->authorize($request), $options)->then(
                function (ResponseInterface $response) use ($handler, $request, $options) {
                    if ($response->getStatusCode() !== 401) {
                        return $response;
                    }

                    $this->tokens->invalidate();

                    return $handler($this->authorize($request), $options);
                },
            );
        };
    }

    private function authorize(RequestInterface $request): RequestInterface
    {
        return $request->withHeader('Authorization', 'Bearer ' . $this->tokens->getToken());
    }
}
