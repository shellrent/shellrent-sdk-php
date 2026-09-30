# Shellrent\Sdk\OAuthApi

Autenticazione e JWKS

All URIs are relative to https://api.shellrent.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getJwks()**](OAuthApi.md#getJwks) | **GET** /.well-known/jwks.json | Esponi JWKS |
| [**requestAccessToken()**](OAuthApi.md#requestAccessToken) | **POST** /oauth/token | Richiedi un access token |


## `getJwks()`

```php
getJwks(): \Shellrent\Sdk\Model\JwksResponse
```

Esponi JWKS

Restituisce le chiavi pubbliche usate per firmare gli access token JWT.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Shellrent\Sdk\Api\OAuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getJwks();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OAuthApi->getJwks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Shellrent\Sdk\Model\JwksResponse**](../Model/JwksResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `requestAccessToken()`

```php
requestAccessToken($grant_type, $client_id, $client_secret, $scope, $audience): \Shellrent\Sdk\Model\OAuthTokenResponse
```

Richiedi un access token

Eroga un access token JWT tramite grant `client_credentials`. I parametri `audience` e `scope` sono opzionali: senza `audience` il token usa l'unica audience del client (un client con più audience deve indicarla), senza `scope` riceve tutti gli scope assegnati al client, come con `scope=api:full`. Gli scope interni sono concessi solo con audience `api-internal`. La risposta riporta l'audience e gli scope concessi.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Shellrent\Sdk\Api\OAuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$grant_type = 'grant_type_example'; // string
$client_id = 'client_id_example'; // string | Client ID se non fornito tramite Authorization header Basic.
$client_secret = 'client_secret_example'; // string | Client secret se non fornito tramite Authorization header Basic.
$scope = 'scope_example'; // string | Scope separati da spazio. Se omesso: tutti gli scope assegnati al client.
$audience = new \Shellrent\Sdk\Model\OAuthAudience(); // \Shellrent\Sdk\Model\OAuthAudience | Se omessa: l'unica audience del client.

try {
    $result = $apiInstance->requestAccessToken($grant_type, $client_id, $client_secret, $scope, $audience);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OAuthApi->requestAccessToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **grant_type** | **string**|  | |
| **client_id** | **string**| Client ID se non fornito tramite Authorization header Basic. | [optional] |
| **client_secret** | **string**| Client secret se non fornito tramite Authorization header Basic. | [optional] |
| **scope** | **string**| Scope separati da spazio. Se omesso: tutti gli scope assegnati al client. | [optional] |
| **audience** | [**\Shellrent\Sdk\Model\OAuthAudience**](../Model/OAuthAudience.md)| Se omessa: l&#39;unica audience del client. | [optional] |

### Return type

[**\Shellrent\Sdk\Model\OAuthTokenResponse**](../Model/OAuthTokenResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
