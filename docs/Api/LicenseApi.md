# Shellrent\Sdk\LicenseApi

License

All URIs are relative to https://api.shellrent.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**downgradeMicrosoft365SubscriptionQuantity()**](LicenseApi.md#downgradeMicrosoft365SubscriptionQuantity) | **PATCH** /api/v3/microsoft365-subscriptions/{microsoft365_id}/quantity-downgrade | Downgrade Microsoft 365 subscription quantity |
| [**downgradeSecureMailQuantity()**](LicenseApi.md#downgradeSecureMailQuantity) | **PATCH** /api/v3/securemails/{securemail_id}/quantity-downgrade | Downgrade SecureMail quantity |
| [**getCpanelLicense()**](LicenseApi.md#getCpanelLicense) | **GET** /api/v3/licenses/cpanel/{license_id} | Get cPanel license |
| [**getMicrosoft365PartnerLink()**](LicenseApi.md#getMicrosoft365PartnerLink) | **GET** /api/v3/microsoft365-subscriptions/partner-link/{service_id} | Partner link |
| [**getMicrosoft365Subscription()**](LicenseApi.md#getMicrosoft365Subscription) | **GET** /api/v3/microsoft365-subscriptions/{microsoft365_id} | Get Microsoft 365 subscription |
| [**getMicrosoft365Tenant()**](LicenseApi.md#getMicrosoft365Tenant) | **GET** /api/v3/microsoft365-tenants/{microsoft_365_tenant_id} | Get Microsoft 365 tenant |
| [**getPleskLicense()**](LicenseApi.md#getPleskLicense) | **GET** /api/v3/licenses/plesk/{license_id} | Get Plesk license |
| [**getSecureMail()**](LicenseApi.md#getSecureMail) | **GET** /api/v3/securemails/{securemail_id} | Get SecureMail subscription |
| [**getSecureMailStatistics()**](LicenseApi.md#getSecureMailStatistics) | **GET** /api/v3/securemails/{securemail_id}/statistics | Get SecureMail statistics |
| [**listCpanelLicenses()**](LicenseApi.md#listCpanelLicenses) | **GET** /api/v3/licenses/cpanel | List cPanel licenses |
| [**listMicrosoft365Subscriptions()**](LicenseApi.md#listMicrosoft365Subscriptions) | **GET** /api/v3/microsoft365-subscriptions | List Microsoft 365 subscriptions |
| [**listMicrosoft365Tenants()**](LicenseApi.md#listMicrosoft365Tenants) | **GET** /api/v3/microsoft365-tenants | List Microsoft 365 tenants |
| [**listPleskLicenses()**](LicenseApi.md#listPleskLicenses) | **GET** /api/v3/licenses/plesk | List Plesk licenses |
| [**listSecureMailMailboxes()**](LicenseApi.md#listSecureMailMailboxes) | **GET** /api/v3/securemails/{securemail_id}/mailboxes | List SecureMail mailboxes |
| [**listSecureMails()**](LicenseApi.md#listSecureMails) | **GET** /api/v3/securemails | List SecureMail subscriptions |
| [**upgradeMicrosoft365SubscriptionQuantity()**](LicenseApi.md#upgradeMicrosoft365SubscriptionQuantity) | **POST** /api/v3/microsoft365-subscriptions/{microsoft365_id}/quantity-upgrade | Upgrade Microsoft 365 subscription quantity |
| [**upgradeSecureMailQuantity()**](LicenseApi.md#upgradeSecureMailQuantity) | **POST** /api/v3/securemails/{securemail_id}/quantity-upgrade | Upgrade SecureMail quantity |


## `downgradeMicrosoft365SubscriptionQuantity()`

```php
downgradeMicrosoft365SubscriptionQuantity($microsoft365_id, $microsoft365_subscription_quantity_request): \Shellrent\Sdk\Model\TaskResponse
```

Downgrade Microsoft 365 subscription quantity

Decrease the Microsoft 365 seats quantity. Returns the background Task created for seat removal.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\LicenseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$microsoft365_id = 56; // int
$microsoft365_subscription_quantity_request = new \Shellrent\Sdk\Model\Microsoft365SubscriptionQuantityRequest(); // \Shellrent\Sdk\Model\Microsoft365SubscriptionQuantityRequest

try {
    $result = $apiInstance->downgradeMicrosoft365SubscriptionQuantity($microsoft365_id, $microsoft365_subscription_quantity_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LicenseApi->downgradeMicrosoft365SubscriptionQuantity: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **microsoft365_id** | **int**|  | |
| **microsoft365_subscription_quantity_request** | [**\Shellrent\Sdk\Model\Microsoft365SubscriptionQuantityRequest**](../Model/Microsoft365SubscriptionQuantityRequest.md)|  | |

### Return type

[**\Shellrent\Sdk\Model\TaskResponse**](../Model/TaskResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `downgradeSecureMailQuantity()`

```php
downgradeSecureMailQuantity($securemail_id, $securemail_quantity_request): \Shellrent\Sdk\Model\TaskResponse
```

Downgrade SecureMail quantity

Decrease the SecureMail protected mailboxes quantity. Returns the background Task created for the alignment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\LicenseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$securemail_id = 56; // int
$securemail_quantity_request = new \Shellrent\Sdk\Model\SecuremailQuantityRequest(); // \Shellrent\Sdk\Model\SecuremailQuantityRequest

try {
    $result = $apiInstance->downgradeSecureMailQuantity($securemail_id, $securemail_quantity_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LicenseApi->downgradeSecureMailQuantity: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **securemail_id** | **int**|  | |
| **securemail_quantity_request** | [**\Shellrent\Sdk\Model\SecuremailQuantityRequest**](../Model/SecuremailQuantityRequest.md)|  | |

### Return type

[**\Shellrent\Sdk\Model\TaskResponse**](../Model/TaskResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCpanelLicense()`

```php
getCpanelLicense($license_id): \Shellrent\Sdk\Model\CpanelLicenseResponse
```

Get cPanel license

Get details of a cPanel license

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\LicenseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$license_id = 56; // int

try {
    $result = $apiInstance->getCpanelLicense($license_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LicenseApi->getCpanelLicense: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **license_id** | **int**|  | |

### Return type

[**\Shellrent\Sdk\Model\CpanelLicenseResponse**](../Model/CpanelLicenseResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMicrosoft365PartnerLink()`

```php
getMicrosoft365PartnerLink($service_id): \Shellrent\Sdk\Model\Microsoft365PartnerLinkResponse
```

Partner link

Get the partner authorization link for Microsoft 365 subscriptions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\LicenseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 56; // int

try {
    $result = $apiInstance->getMicrosoft365PartnerLink($service_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LicenseApi->getMicrosoft365PartnerLink: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **service_id** | **int**|  | |

### Return type

[**\Shellrent\Sdk\Model\Microsoft365PartnerLinkResponse**](../Model/Microsoft365PartnerLinkResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMicrosoft365Subscription()`

```php
getMicrosoft365Subscription($microsoft365_id): \Shellrent\Sdk\Model\Microsoft365Response
```

Get Microsoft 365 subscription

Get details of a Microsoft 365 subscription

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\LicenseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$microsoft365_id = 56; // int

try {
    $result = $apiInstance->getMicrosoft365Subscription($microsoft365_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LicenseApi->getMicrosoft365Subscription: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **microsoft365_id** | **int**|  | |

### Return type

[**\Shellrent\Sdk\Model\Microsoft365Response**](../Model/Microsoft365Response.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMicrosoft365Tenant()`

```php
getMicrosoft365Tenant($microsoft_365_tenant_id): \Shellrent\Sdk\Model\Microsoft365TenantResponse
```

Get Microsoft 365 tenant

Get details of a Microsoft 365 tenant

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\LicenseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$microsoft_365_tenant_id = 56; // int

try {
    $result = $apiInstance->getMicrosoft365Tenant($microsoft_365_tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LicenseApi->getMicrosoft365Tenant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **microsoft_365_tenant_id** | **int**|  | |

### Return type

[**\Shellrent\Sdk\Model\Microsoft365TenantResponse**](../Model/Microsoft365TenantResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPleskLicense()`

```php
getPleskLicense($license_id): \Shellrent\Sdk\Model\PleskLicenseResponse
```

Get Plesk license

Get details of a Plesk license

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\LicenseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$license_id = 56; // int

try {
    $result = $apiInstance->getPleskLicense($license_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LicenseApi->getPleskLicense: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **license_id** | **int**|  | |

### Return type

[**\Shellrent\Sdk\Model\PleskLicenseResponse**](../Model/PleskLicenseResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSecureMail()`

```php
getSecureMail($securemail_id): \Shellrent\Sdk\Model\SecuremailResponse
```

Get SecureMail subscription

Get details of a SecureMail by LibraESVA subscription

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\LicenseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$securemail_id = 56; // int

try {
    $result = $apiInstance->getSecureMail($securemail_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LicenseApi->getSecureMail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **securemail_id** | **int**|  | |

### Return type

[**\Shellrent\Sdk\Model\SecuremailResponse**](../Model/SecuremailResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSecureMailStatistics()`

```php
getSecureMailStatistics($securemail_id): \Shellrent\Sdk\Model\SecuremailStatisticsResponse
```

Get SecureMail statistics

Get statistics for a SecureMail by LibraESVA subscription

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\LicenseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$securemail_id = 56; // int

try {
    $result = $apiInstance->getSecureMailStatistics($securemail_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LicenseApi->getSecureMailStatistics: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **securemail_id** | **int**|  | |

### Return type

[**\Shellrent\Sdk\Model\SecuremailStatisticsResponse**](../Model/SecuremailStatisticsResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCpanelLicenses()`

```php
listCpanelLicenses($page, $per_page): \Shellrent\Sdk\Model\CpanelLicensePaginatedListResponse
```

List cPanel licenses

Get a paginated list of cPanel licenses for the authenticated account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\LicenseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int
$per_page = 20; // int

try {
    $result = $apiInstance->listCpanelLicenses($page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LicenseApi->listCpanelLicenses: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**|  | [optional] [default to 1] |
| **per_page** | **int**|  | [optional] [default to 20] |

### Return type

[**\Shellrent\Sdk\Model\CpanelLicensePaginatedListResponse**](../Model/CpanelLicensePaginatedListResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listMicrosoft365Subscriptions()`

```php
listMicrosoft365Subscriptions($page, $per_page): \Shellrent\Sdk\Model\Microsoft365PaginatedListResponse
```

List Microsoft 365 subscriptions

Get a paginated list of Microsoft 365 subscriptions for the authenticated account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\LicenseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int
$per_page = 20; // int

try {
    $result = $apiInstance->listMicrosoft365Subscriptions($page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LicenseApi->listMicrosoft365Subscriptions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**|  | [optional] [default to 1] |
| **per_page** | **int**|  | [optional] [default to 20] |

### Return type

[**\Shellrent\Sdk\Model\Microsoft365PaginatedListResponse**](../Model/Microsoft365PaginatedListResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listMicrosoft365Tenants()`

```php
listMicrosoft365Tenants($page, $per_page): \Shellrent\Sdk\Model\Microsoft365TenantPaginatedListResponse
```

List Microsoft 365 tenants

Get a paginated list of Microsoft 365 tenants for the authenticated account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\LicenseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int
$per_page = 20; // int

try {
    $result = $apiInstance->listMicrosoft365Tenants($page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LicenseApi->listMicrosoft365Tenants: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**|  | [optional] [default to 1] |
| **per_page** | **int**|  | [optional] [default to 20] |

### Return type

[**\Shellrent\Sdk\Model\Microsoft365TenantPaginatedListResponse**](../Model/Microsoft365TenantPaginatedListResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listPleskLicenses()`

```php
listPleskLicenses($page, $per_page): \Shellrent\Sdk\Model\PleskLicensePaginatedListResponse
```

List Plesk licenses

Get a paginated list of Plesk licenses for the authenticated account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\LicenseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int
$per_page = 20; // int

try {
    $result = $apiInstance->listPleskLicenses($page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LicenseApi->listPleskLicenses: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**|  | [optional] [default to 1] |
| **per_page** | **int**|  | [optional] [default to 20] |

### Return type

[**\Shellrent\Sdk\Model\PleskLicensePaginatedListResponse**](../Model/PleskLicensePaginatedListResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listSecureMailMailboxes()`

```php
listSecureMailMailboxes($securemail_id, $page, $per_page): \Shellrent\Sdk\Model\SecuremailMailboxPaginatedListResponse
```

List SecureMail mailboxes

Get a paginated list of primary mailboxes for a SecureMail by LibraESVA subscription

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\LicenseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$securemail_id = 56; // int
$page = 1; // int
$per_page = 20; // int

try {
    $result = $apiInstance->listSecureMailMailboxes($securemail_id, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LicenseApi->listSecureMailMailboxes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **securemail_id** | **int**|  | |
| **page** | **int**|  | [optional] [default to 1] |
| **per_page** | **int**|  | [optional] [default to 20] |

### Return type

[**\Shellrent\Sdk\Model\SecuremailMailboxPaginatedListResponse**](../Model/SecuremailMailboxPaginatedListResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listSecureMails()`

```php
listSecureMails($page, $per_page): \Shellrent\Sdk\Model\SecuremailPaginatedListResponse
```

List SecureMail subscriptions

Get a paginated list of SecureMail by LibraESVA subscriptions for the authenticated account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\LicenseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int
$per_page = 20; // int

try {
    $result = $apiInstance->listSecureMails($page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LicenseApi->listSecureMails: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**|  | [optional] [default to 1] |
| **per_page** | **int**|  | [optional] [default to 20] |

### Return type

[**\Shellrent\Sdk\Model\SecuremailPaginatedListResponse**](../Model/SecuremailPaginatedListResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `upgradeMicrosoft365SubscriptionQuantity()`

```php
upgradeMicrosoft365SubscriptionQuantity($microsoft365_id, $microsoft365_subscription_quantity_request): \Shellrent\Sdk\Model\OrderResponse
```

Upgrade Microsoft 365 subscription quantity

Increase the Microsoft 365 seats quantity. Returns the generated Order to pay the additional seats.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\LicenseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$microsoft365_id = 56; // int
$microsoft365_subscription_quantity_request = new \Shellrent\Sdk\Model\Microsoft365SubscriptionQuantityRequest(); // \Shellrent\Sdk\Model\Microsoft365SubscriptionQuantityRequest

try {
    $result = $apiInstance->upgradeMicrosoft365SubscriptionQuantity($microsoft365_id, $microsoft365_subscription_quantity_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LicenseApi->upgradeMicrosoft365SubscriptionQuantity: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **microsoft365_id** | **int**|  | |
| **microsoft365_subscription_quantity_request** | [**\Shellrent\Sdk\Model\Microsoft365SubscriptionQuantityRequest**](../Model/Microsoft365SubscriptionQuantityRequest.md)|  | |

### Return type

[**\Shellrent\Sdk\Model\OrderResponse**](../Model/OrderResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `upgradeSecureMailQuantity()`

```php
upgradeSecureMailQuantity($securemail_id, $securemail_quantity_request): \Shellrent\Sdk\Model\OrderResponse
```

Upgrade SecureMail quantity

Increase the SecureMail protected mailboxes quantity. Returns the generated Order to pay the additional mailboxes.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\LicenseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$securemail_id = 56; // int
$securemail_quantity_request = new \Shellrent\Sdk\Model\SecuremailQuantityRequest(); // \Shellrent\Sdk\Model\SecuremailQuantityRequest

try {
    $result = $apiInstance->upgradeSecureMailQuantity($securemail_id, $securemail_quantity_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LicenseApi->upgradeSecureMailQuantity: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **securemail_id** | **int**|  | |
| **securemail_quantity_request** | [**\Shellrent\Sdk\Model\SecuremailQuantityRequest**](../Model/SecuremailQuantityRequest.md)|  | |

### Return type

[**\Shellrent\Sdk\Model\OrderResponse**](../Model/OrderResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
