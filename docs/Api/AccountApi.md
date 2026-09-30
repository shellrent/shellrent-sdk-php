# Shellrent\Sdk\AccountApi

Account

All URIs are relative to https://api.shellrent.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createSubAccount()**](AccountApi.md#createSubAccount) | **POST** /api/v3/account/sub-accounts | Create a user sub-account |
| [**deleteSubAccount()**](AccountApi.md#deleteSubAccount) | **DELETE** /api/v3/account/sub-accounts/{account_id} | Delete a user sub-account |
| [**getAccount()**](AccountApi.md#getAccount) | **GET** /api/v3/account | My user account |
| [**getSubAccount()**](AccountApi.md#getSubAccount) | **GET** /api/v3/account/sub-accounts/{account_id} | Get a user sub-account |
| [**listSubAccounts()**](AccountApi.md#listSubAccounts) | **GET** /api/v3/account/sub-accounts | List all sub accounts |
| [**updateSubAccount()**](AccountApi.md#updateSubAccount) | **PATCH** /api/v3/account/sub-accounts/{account_id} | Edit a user sub-account |
| [**uploadFile()**](AccountApi.md#uploadFile) | **POST** /api/v3/upload | Upload file |


## `createSubAccount()`

```php
createSubAccount($sub_account_create_request): \Shellrent\Sdk\Model\AccountResponse
```

Create a user sub-account

Create a new user sub-account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sub_account_create_request = new \Shellrent\Sdk\Model\SubAccountCreateRequest(); // \Shellrent\Sdk\Model\SubAccountCreateRequest

try {
    $result = $apiInstance->createSubAccount($sub_account_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->createSubAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sub_account_create_request** | [**\Shellrent\Sdk\Model\SubAccountCreateRequest**](../Model/SubAccountCreateRequest.md)|  | |

### Return type

[**\Shellrent\Sdk\Model\AccountResponse**](../Model/AccountResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteSubAccount()`

```php
deleteSubAccount($account_id): \Shellrent\Sdk\Model\EmptyResponse
```

Delete a user sub-account

Delete a user sub-account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 56; // int

try {
    $result = $apiInstance->deleteSubAccount($account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->deleteSubAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **int**|  | |

### Return type

[**\Shellrent\Sdk\Model\EmptyResponse**](../Model/EmptyResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAccount()`

```php
getAccount(): \Shellrent\Sdk\Model\AccountResponse
```

My user account

Get all details of my user account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAccount();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->getAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Shellrent\Sdk\Model\AccountResponse**](../Model/AccountResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSubAccount()`

```php
getSubAccount($account_id): \Shellrent\Sdk\Model\AccountResponse
```

Get a user sub-account

Get details of a user sub-account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 56; // int

try {
    $result = $apiInstance->getSubAccount($account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->getSubAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **int**|  | |

### Return type

[**\Shellrent\Sdk\Model\AccountResponse**](../Model/AccountResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listSubAccounts()`

```php
listSubAccounts($page, $per_page): \Shellrent\Sdk\Model\AccountPaginatedListResponse
```

List all sub accounts

Get a list of all user sub accounts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int
$per_page = 20; // int

try {
    $result = $apiInstance->listSubAccounts($page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->listSubAccounts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**|  | [optional] [default to 1] |
| **per_page** | **int**|  | [optional] [default to 20] |

### Return type

[**\Shellrent\Sdk\Model\AccountPaginatedListResponse**](../Model/AccountPaginatedListResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateSubAccount()`

```php
updateSubAccount($account_id, $sub_account_update_request): \Shellrent\Sdk\Model\AccountResponse
```

Edit a user sub-account

Edit an existing user sub-account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 56; // int
$sub_account_update_request = new \Shellrent\Sdk\Model\SubAccountUpdateRequest(); // \Shellrent\Sdk\Model\SubAccountUpdateRequest

try {
    $result = $apiInstance->updateSubAccount($account_id, $sub_account_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->updateSubAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **int**|  | |
| **sub_account_update_request** | [**\Shellrent\Sdk\Model\SubAccountUpdateRequest**](../Model/SubAccountUpdateRequest.md)|  | |

### Return type

[**\Shellrent\Sdk\Model\AccountResponse**](../Model/AccountResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `uploadFile()`

```php
uploadFile($body): \Shellrent\Sdk\Model\ApiUploadResponse
```

Upload file

Upload one or more files

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->uploadFile($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->uploadFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | **object**|  | [optional] |

### Return type

[**\Shellrent\Sdk\Model\ApiUploadResponse**](../Model/ApiUploadResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
