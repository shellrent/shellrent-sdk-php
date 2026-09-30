# Shellrent PHP SDK

[![CI](https://github.com/shellrent/shellrent-sdk-php/actions/workflows/ci.yml/badge.svg)](https://github.com/shellrent/shellrent-sdk-php/actions/workflows/ci.yml)

Official PHP SDK for the [Shellrent](https://www.shellrent.com) public API: domains, hosting, servers,
storage, SSL certificates, purchases and billing.

The API classes and models are generated from the OpenAPI specification with
[OpenAPI Generator](https://openapi-generator.tech); the SDK adds OAuth2 authentication, token caching
and retries on rate limits.

## Requirements

- PHP 8.1 or later, with the `curl`, `json` and `mbstring` extensions
- Composer 2

## Installation

```bash
composer require shellrent/sdk
```

<a id="oauth2"></a>
## Authentication

The API uses OAuth2 with the client credentials grant. Create a client with its ID and secret:

```php
use Shellrent\Sdk\Auth\ClientCredentials;
use Shellrent\Sdk\Client;

$client = Client::create(new ClientCredentials('your-client-id', 'your-client-secret'));
```

The SDK requests an access token on the first call, sends it with every request and gets a new one
shortly before it expires (tokens last 10 minutes). If the API answers 401, the SDK gets a new token
and retries the request once.

By default the token has every scope assigned to the client and the only audience of the client.
To request less, or to choose the audience of a client that has more than one:

```php
$credentials = new ClientCredentials(
    'your-client-id',
    'your-client-secret',
    scopes: ['purchases:read', 'billing:read'],
    audience: 'api-public',
);
```

`ClientCredentials::fromEnvironment()` reads the credentials from these environment variables, looking
also in `$_SERVER` and `$_ENV`, where Symfony loads the `.env` files:

| Variable | Value |
| --- | --- |
| `SHELLRENT_CLIENT_ID` | required |
| `SHELLRENT_CLIENT_SECRET` | required |
| `SHELLRENT_SCOPES` | optional, separated by spaces or commas |
| `SHELLRENT_API_URL` | optional, default `https://api.shellrent.com` |

To use another environment, such as staging, set `SHELLRENT_API_URL` or pass `apiUrl:` to
`ClientCredentials`: both the token and the API calls then go to that URL.

## Token cache

Tokens are kept in memory, which PHP clears at the end of every web request (PHP-FPM, Apache).
Pass a [PSR-16](https://www.php-fig.org/psr/psr-16/) cache to share the token between requests and
processes: this saves a token request per page and keeps you within the limit of the token endpoint
(5 requests every 15 seconds). The cache holds only the token, never the client secret.

Laravel, with the credentials in `config/services.php`:

```php
use Illuminate\Support\Facades\Cache;

$client = Client::create(
    new ClientCredentials(config('services.shellrent.client_id'), config('services.shellrent.client_secret')),
    Cache::store(),
);
```

Symfony, with any PSR-6 pool such as the `cache.app` service:

```php
use Symfony\Component\Cache\Psr16Cache;

$client = Client::create(ClientCredentials::fromEnvironment(), new Psr16Cache($cachePool));
```

## Usage

`Client` has one method per API class, named after the tag of the operations: `purchases()` returns
`PurchasesApi`, `billing()` returns `BillingApi`, and so on. Each method of an API class is named after
the `operationId` of the operation.

```php
$purchases = $client->purchases()->listPurchases(page: 1, per_page: 50);

foreach ($purchases->getData() as $purchase) {
    printf("%d %s\n", $purchase->getPurchaseId(), $purchase->getPurchaseName()->getFullName());
}
printf("Page %d of %d\n", $purchases->getMeta()->getPage(), $purchases->getMeta()->getPages());
```

Every JSON response has the envelope `{error, message, data, meta}`: `getData()` returns the payload,
`getMeta()` the pagination, if any. Each operation also has an `...Async()` variant, which returns a
Guzzle promise, and a `...WithHttpInfo()` variant, which also returns the status code and the headers.

Operations that download a file, such as `downloadInvoicePdf()`, return an `\SplFileObject` for a
temporary file: move or delete it when you are done. The file name is in the `Content-Disposition`
header returned by `downloadInvoicePdfWithHttpInfo()`.

`Client::create()` also takes these options:

```php
$client = Client::create($credentials, $cache, [
    'retry' => false,                          // do not retry the requests rejected with 429
    'guzzle' => ['timeout' => 30],             // other Guzzle client options: timeout, proxy, ...
    'handler' => $handler,                     // Guzzle handler that sends the requests
]);
```

## Error handling

```php
use Shellrent\Sdk\ApiException;
use Shellrent\Sdk\Auth\TokenException;
use Shellrent\Sdk\Model\ApiError;

try {
    $purchase = $client->purchases()->getPurchase(123);
} catch (ApiException $e) {
    $status = $e->getCode();              // HTTP status, such as 404
    $error = $e->getResponseObject();     // the envelope, for the status codes in the specification
    if ($error instanceof ApiError) {
        echo $error->getMessage();
    }
    $body = $e->getResponseBody();        // always available, as are getResponseHeaders()
} catch (TokenException $e) {
    echo $e->getError(), ': ', $e->getErrorDescription();  // such as invalid_client
}
```

- `ApiException` is thrown for every response outside 2xx and for network errors (code 0).
- `TokenException` is thrown when the token endpoint does not issue a token; `getError()` and
  `getErrorDescription()` return the OAuth2 `error` and `error_description`.
- The API accepts 60 requests a minute per client. Requests rejected with 429 Too Many Requests are
  retried up to twice, after the time given by `Retry-After` (up to 60 seconds). If they are rejected
  again, `ApiException` has code 429 and `getResponseHeaders()['Retry-After'][0]` says when to retry.

## API reference

The reference is generated from the specification together with the code.

### Endpoints

One page per API class in [`docs/Api`](docs/Api), for example [`PurchasesApi`](docs/Api/PurchasesApi.md),
with the parameters and the return type of each operation.

### Models

One page per model in [`docs/Model`](docs/Model).

## Regenerating the code

The code in `src/Api`, `src/Model`, the other files listed in `.openapi-generator/FILES` and `docs/` is
generated from `spec/openapi.yaml`: do not edit it by hand. To regenerate it, with Docker installed:

```bash
bin/generate
```

The script removes the files of the previous generation and runs OpenAPI Generator with
`openapi-generator.yaml`. CI fails if the committed code differs from the generated one.

## Versioning

The SDK follows [Semantic Versioning](https://semver.org):

- new operations or models: minor version;
- renamed or removed operations (`operationId`) or models: major version;
- fixes: patch version.

Changes are listed in [CHANGELOG.md](CHANGELOG.md).

## License

MIT, see [LICENSE](LICENSE).
