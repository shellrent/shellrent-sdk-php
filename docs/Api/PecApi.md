# Shellrent\Sdk\PecApi

PEC

All URIs are relative to https://api.shellrent.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createPecDomainOwnerChange()**](PecApi.md#createPecDomainOwnerChange) | **POST** /api/v3/pec-domains/{pec_domain_id}/owner-changes | Create PEC domain owner change |
| [**createPecMailboxOwnerChange()**](PecApi.md#createPecMailboxOwnerChange) | **POST** /api/v3/pec-mailboxes/{pec_id}/owner-changes | Create PEC mailbox owner change |
| [**getPecDomain()**](PecApi.md#getPecDomain) | **GET** /api/v3/pec-domains/{pec_domain_id} | Get PEC domain |
| [**getPecDomainOwnerChange()**](PecApi.md#getPecDomainOwnerChange) | **GET** /api/v3/pec-domains/{pec_domain_id}/owner-changes/{owner_change_id} | Get PEC domain owner change |
| [**getPecMailbox()**](PecApi.md#getPecMailbox) | **GET** /api/v3/pec-mailboxes/{pec_id} | Get PEC mailbox |
| [**listPecDomainOwnerChanges()**](PecApi.md#listPecDomainOwnerChanges) | **GET** /api/v3/pec-domains/{pec_domain_id}/owner-changes | List PEC domain owner changes |
| [**listPecDomains()**](PecApi.md#listPecDomains) | **GET** /api/v3/pec-domains | List PEC domains |
| [**listPecMailboxOwnerChanges()**](PecApi.md#listPecMailboxOwnerChanges) | **GET** /api/v3/pec-mailboxes/{pec_id}/owner-changes | List PEC mailbox owner changes |
| [**listPecMailboxes()**](PecApi.md#listPecMailboxes) | **GET** /api/v3/pec-mailboxes | List PEC mailboxes |
| [**updatePecMailbox()**](PecApi.md#updatePecMailbox) | **PATCH** /api/v3/pec-mailboxes/{pec_id} | Update PEC mailbox |


## `createPecDomainOwnerChange()`

```php
createPecDomainOwnerChange($pec_domain_id, $pec_mailbox_owner_change_create_request): \Shellrent\Sdk\Model\PecOwnerChangeResponse
```

Create PEC domain owner change

Create a new owner change request for a PEC domain

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\PecApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pec_domain_id = 56; // int
$pec_mailbox_owner_change_create_request = new \Shellrent\Sdk\Model\PecMailboxOwnerChangeCreateRequest(); // \Shellrent\Sdk\Model\PecMailboxOwnerChangeCreateRequest

try {
    $result = $apiInstance->createPecDomainOwnerChange($pec_domain_id, $pec_mailbox_owner_change_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PecApi->createPecDomainOwnerChange: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pec_domain_id** | **int**|  | |
| **pec_mailbox_owner_change_create_request** | [**\Shellrent\Sdk\Model\PecMailboxOwnerChangeCreateRequest**](../Model/PecMailboxOwnerChangeCreateRequest.md)|  | |

### Return type

[**\Shellrent\Sdk\Model\PecOwnerChangeResponse**](../Model/PecOwnerChangeResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createPecMailboxOwnerChange()`

```php
createPecMailboxOwnerChange($pec_id, $pec_mailbox_owner_change_create_request): \Shellrent\Sdk\Model\PecOwnerChangeResponse
```

Create PEC mailbox owner change

Create a new owner change request for a PEC mailbox

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\PecApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pec_id = 56; // int
$pec_mailbox_owner_change_create_request = new \Shellrent\Sdk\Model\PecMailboxOwnerChangeCreateRequest(); // \Shellrent\Sdk\Model\PecMailboxOwnerChangeCreateRequest

try {
    $result = $apiInstance->createPecMailboxOwnerChange($pec_id, $pec_mailbox_owner_change_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PecApi->createPecMailboxOwnerChange: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pec_id** | **int**|  | |
| **pec_mailbox_owner_change_create_request** | [**\Shellrent\Sdk\Model\PecMailboxOwnerChangeCreateRequest**](../Model/PecMailboxOwnerChangeCreateRequest.md)|  | |

### Return type

[**\Shellrent\Sdk\Model\PecOwnerChangeResponse**](../Model/PecOwnerChangeResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPecDomain()`

```php
getPecDomain($pec_domain_id): \Shellrent\Sdk\Model\PecDomainResponse
```

Get PEC domain

Get details of a PEC domain for the authenticated account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\PecApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pec_domain_id = 56; // int

try {
    $result = $apiInstance->getPecDomain($pec_domain_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PecApi->getPecDomain: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pec_domain_id** | **int**|  | |

### Return type

[**\Shellrent\Sdk\Model\PecDomainResponse**](../Model/PecDomainResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPecDomainOwnerChange()`

```php
getPecDomainOwnerChange($pec_domain_id, $owner_change_id): \Shellrent\Sdk\Model\PecOwnerChangeResponse
```

Get PEC domain owner change

Get details of a specific owner change request for a PEC domain

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\PecApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pec_domain_id = 56; // int
$owner_change_id = 56; // int

try {
    $result = $apiInstance->getPecDomainOwnerChange($pec_domain_id, $owner_change_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PecApi->getPecDomainOwnerChange: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pec_domain_id** | **int**|  | |
| **owner_change_id** | **int**|  | |

### Return type

[**\Shellrent\Sdk\Model\PecOwnerChangeResponse**](../Model/PecOwnerChangeResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPecMailbox()`

```php
getPecMailbox($pec_id): \Shellrent\Sdk\Model\PecResponse
```

Get PEC mailbox

Get details of a PEC mailbox for the authenticated account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\PecApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pec_id = 56; // int

try {
    $result = $apiInstance->getPecMailbox($pec_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PecApi->getPecMailbox: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pec_id** | **int**|  | |

### Return type

[**\Shellrent\Sdk\Model\PecResponse**](../Model/PecResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listPecDomainOwnerChanges()`

```php
listPecDomainOwnerChanges($pec_domain_id, $page, $per_page): \Shellrent\Sdk\Model\PecOwnerChangePaginatedListResponse
```

List PEC domain owner changes

Get a paginated list of owner change requests for a PEC domain

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\PecApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pec_domain_id = 56; // int
$page = 1; // int
$per_page = 20; // int

try {
    $result = $apiInstance->listPecDomainOwnerChanges($pec_domain_id, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PecApi->listPecDomainOwnerChanges: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pec_domain_id** | **int**|  | |
| **page** | **int**|  | [optional] [default to 1] |
| **per_page** | **int**|  | [optional] [default to 20] |

### Return type

[**\Shellrent\Sdk\Model\PecOwnerChangePaginatedListResponse**](../Model/PecOwnerChangePaginatedListResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listPecDomains()`

```php
listPecDomains($page, $per_page): \Shellrent\Sdk\Model\PecDomainPaginatedListResponse
```

List PEC domains

Get a paginated list of PEC domains for the authenticated account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\PecApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int
$per_page = 20; // int

try {
    $result = $apiInstance->listPecDomains($page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PecApi->listPecDomains: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**|  | [optional] [default to 1] |
| **per_page** | **int**|  | [optional] [default to 20] |

### Return type

[**\Shellrent\Sdk\Model\PecDomainPaginatedListResponse**](../Model/PecDomainPaginatedListResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listPecMailboxOwnerChanges()`

```php
listPecMailboxOwnerChanges($pec_id, $page, $per_page): \Shellrent\Sdk\Model\PecOwnerChangePaginatedListResponse
```

List PEC mailbox owner changes

Get a paginated list of owner change requests for a PEC mailbox

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\PecApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pec_id = 56; // int
$page = 1; // int
$per_page = 20; // int

try {
    $result = $apiInstance->listPecMailboxOwnerChanges($pec_id, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PecApi->listPecMailboxOwnerChanges: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pec_id** | **int**|  | |
| **page** | **int**|  | [optional] [default to 1] |
| **per_page** | **int**|  | [optional] [default to 20] |

### Return type

[**\Shellrent\Sdk\Model\PecOwnerChangePaginatedListResponse**](../Model/PecOwnerChangePaginatedListResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listPecMailboxes()`

```php
listPecMailboxes($page, $per_page): \Shellrent\Sdk\Model\PecPaginatedListResponse
```

List PEC mailboxes

Get a paginated list of PEC mailboxes for the authenticated account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\PecApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int
$per_page = 20; // int

try {
    $result = $apiInstance->listPecMailboxes($page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PecApi->listPecMailboxes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**|  | [optional] [default to 1] |
| **per_page** | **int**|  | [optional] [default to 20] |

### Return type

[**\Shellrent\Sdk\Model\PecPaginatedListResponse**](../Model/PecPaginatedListResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updatePecMailbox()`

```php
updatePecMailbox($pec_id, $pec_mailbox_update_request): \Shellrent\Sdk\Model\PecResponse
```

Update PEC mailbox

Update PEC mailbox settings for the authenticated account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\PecApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pec_id = 56; // int
$pec_mailbox_update_request = new \Shellrent\Sdk\Model\PecMailboxUpdateRequest(); // \Shellrent\Sdk\Model\PecMailboxUpdateRequest

try {
    $result = $apiInstance->updatePecMailbox($pec_id, $pec_mailbox_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PecApi->updatePecMailbox: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pec_id** | **int**|  | |
| **pec_mailbox_update_request** | [**\Shellrent\Sdk\Model\PecMailboxUpdateRequest**](../Model/PecMailboxUpdateRequest.md)|  | |

### Return type

[**\Shellrent\Sdk\Model\PecResponse**](../Model/PecResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
