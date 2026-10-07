# Shellrent\Sdk\OAuthApi

Authentication and JWKS

All URIs are relative to https://api.shellrent.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getJwks()**](OAuthApi.md#getJwks) | **GET** /.well-known/jwks.json | Get the JWKS |
| [**requestAccessToken()**](OAuthApi.md#requestAccessToken) | **POST** /oauth/token | Request an access token |


## `getJwks()`

```php
getJwks(): \Shellrent\Sdk\Model\JwksResponse
```

Get the JWKS

Returns the public keys used to sign the JWT access tokens.

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

Request an access token

Issues a JWT access token with the `client_credentials` grant. The `audience` and `scope` parameters are optional: without `audience`, or with an empty value, the token gets the only audience of the client (a client with more audiences must send it); without `scope` it gets all the scopes assigned to the client, as with `scope=api:full`. The internal scopes are granted only with the `api-internal` audience. The response reports the granted audience and scopes.

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
$client_id = 'client_id_example'; // string | Client ID, when it is not sent in the Basic Authorization header.
$client_secret = 'client_secret_example'; // string | Client secret, when it is not sent in the Basic Authorization header.
$scope = 'scope_example'; // string | Space-separated scopes. When omitted: all the scopes assigned to the client.
$audience = new \Shellrent\Sdk\Model\OAuthAudience(); // \Shellrent\Sdk\Model\OAuthAudience | When omitted or empty: the only audience of the client.

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
| **client_id** | **string**| Client ID, when it is not sent in the Basic Authorization header. | [optional] |
| **client_secret** | **string**| Client secret, when it is not sent in the Basic Authorization header. | [optional] |
| **scope** | **string**| Space-separated scopes. When omitted: all the scopes assigned to the client. | [optional] |
| **audience** | [**\Shellrent\Sdk\Model\OAuthAudience**](../Model/OAuthAudience.md)| When omitted or empty: the only audience of the client. | [optional] |

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
