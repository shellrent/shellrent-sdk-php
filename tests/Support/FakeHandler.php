<?php

declare(strict_types=1);

namespace Shellrent\Sdk\Tests\Support;

use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\Promise\PromiseInterface;
use GuzzleHttp\Psr7\Response;
use Psr\Http\Message\RequestInterface;

/**
 * Guzzle handler that answers with queued responses, records the requests with their
 * retry delay, and never sleeps.
 */
final class FakeHandler
{
    /** @var list<RequestInterface> */
    public array $requests = [];

    /** @var list<int|null> Value of the "delay" option of each request, in milliseconds. */
    public array $delays = [];

    private readonly MockHandler $mock;

    public function __construct(mixed ...$queue)
    {
        $this->mock = new MockHandler($queue);
    }

    public function __invoke(RequestInterface $request, array $options): PromiseInterface
    {
        $this->requests[] = $request;
        $this->delays[] = $options['delay'] ?? null;
        unset($options['delay']);

        return ($this->mock)($request, $options);
    }

    public static function token(string $accessToken = 'token-1', int $expiresIn = 600): Response
    {
        return self::json(200, [
            'token_type' => 'Bearer',
            'expires_in' => $expiresIn,
            'access_token' => $accessToken,
            'scope' => 'api:full',
            'audience' => 'api-public',
        ]);
    }

    public static function health(): Response
    {
        return self::json(200, ['error' => 0, 'message' => null, 'data' => ['status' => 'ok'], 'meta' => null]);
    }

    /**
     * @param array<string, string> $headers
     */
    public static function error(int $status, string $message, array $headers = []): Response
    {
        return self::json($status, ['error' => $status, 'message' => $message, 'data' => [], 'meta' => []], $headers);
    }

    /**
     * @param array<string, mixed>  $body
     * @param array<string, string> $headers
     */
    public static function json(int $status, array $body, array $headers = []): Response
    {
        return new Response($status, ['Content-Type' => 'application/json'] + $headers, json_encode($body, JSON_THROW_ON_ERROR));
    }
}
