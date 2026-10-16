# Shellrent\Sdk\LicenseApi

License

All URIs are relative to https://api.shellrent.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**downgradeMicrosoft365SubscriptionQuantity()**](LicenseApi.md#downgradeMicrosoft365SubscriptionQuantity) | **POST** /api/v3/microsoft-365-subscriptions/{microsoft_365_subscription_id}/quantity-downgrades | Downgrade Microsoft 365 subscription quantity |
| [**getCpanelLicense()**](LicenseApi.md#getCpanelLicense) | **GET** /api/v3/licenses/cpanel/{license_id} | Get cPanel license |
| [**getMicrosoft365PartnerLink()**](LicenseApi.md#getMicrosoft365PartnerLink) | **GET** /api/v3/shop/microsoft-365/services/{service_id}/partner-link | Partner link |
| [**getMicrosoft365Subscription()**](LicenseApi.md#getMicrosoft365Subscription) | **GET** /api/v3/microsoft-365-subscriptions/{microsoft_365_subscription_id} | Get Microsoft 365 subscription |
| [**getMicrosoft365Tenant()**](LicenseApi.md#getMicrosoft365Tenant) | **GET** /api/v3/microsoft-365-tenants/{microsoft_365_tenant_id} | Get Microsoft 365 tenant |
| [**getPleskLicense()**](LicenseApi.md#getPleskLicense) | **GET** /api/v3/licenses/plesk/{license_id} | Get Plesk license |
| [**listCpanelLicenses()**](LicenseApi.md#listCpanelLicenses) | **GET** /api/v3/licenses/cpanel | List cPanel licenses |
| [**listMicrosoft365Subscriptions()**](LicenseApi.md#listMicrosoft365Subscriptions) | **GET** /api/v3/microsoft-365-subscriptions | List Microsoft 365 subscriptions |
| [**listMicrosoft365Tenants()**](LicenseApi.md#listMicrosoft365Tenants) | **GET** /api/v3/microsoft-365-tenants | List Microsoft 365 tenants |
| [**listPleskLicenses()**](LicenseApi.md#listPleskLicenses) | **GET** /api/v3/licenses/plesk | List Plesk licenses |
| [**upgradeMicrosoft365SubscriptionQuantity()**](LicenseApi.md#upgradeMicrosoft365SubscriptionQuantity) | **POST** /api/v3/microsoft-365-subscriptions/{microsoft_365_subscription_id}/quantity-upgrades | Upgrade Microsoft 365 subscription quantity |


## `downgradeMicrosoft365SubscriptionQuantity()`

```php
downgradeMicrosoft365SubscriptionQuantity($microsoft_365_subscription_id, $microsoft365_subscription_quantity_request): \Shellrent\Sdk\Model\TaskResponse
```

Downgrade Microsoft 365 subscription quantity

Decrease the Microsoft 365 seats quantity. Returns the background Task created for seat removal.  Not available to sub-accounts: the response is 403 (error 1601).

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
$microsoft_365_subscription_id = 56; // int | ID of the Microsoft 365 subscription
$microsoft365_subscription_quantity_request = new \Shellrent\Sdk\Model\Microsoft365SubscriptionQuantityRequest(); // \Shellrent\Sdk\Model\Microsoft365SubscriptionQuantityRequest

try {
    $result = $apiInstance->downgradeMicrosoft365SubscriptionQuantity($microsoft_365_subscription_id, $microsoft365_subscription_quantity_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LicenseApi->downgradeMicrosoft365SubscriptionQuantity: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **microsoft_365_subscription_id** | **int**| ID of the Microsoft 365 subscription | |
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

## `getCpanelLicense()`

```php
getCpanelLicense($license_id): \Shellrent\Sdk\Model\LicenseResponse
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
$license_id = 56; // int | ID of the license

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
| **license_id** | **int**| ID of the license | |

### Return type

[**\Shellrent\Sdk\Model\LicenseResponse**](../Model/LicenseResponse.md)

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

Get the partner authorization link for Microsoft 365 subscriptions  Not available to sub-accounts: the response is 403 (error 1601).

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
$service_id = 56; // int | ID of the Microsoft 365 service of the catalog

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
| **service_id** | **int**| ID of the Microsoft 365 service of the catalog | |

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
getMicrosoft365Subscription($microsoft_365_subscription_id): \Shellrent\Sdk\Model\Microsoft365Response
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
$microsoft_365_subscription_id = 56; // int | ID of the Microsoft 365 subscription

try {
    $result = $apiInstance->getMicrosoft365Subscription($microsoft_365_subscription_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LicenseApi->getMicrosoft365Subscription: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **microsoft_365_subscription_id** | **int**| ID of the Microsoft 365 subscription | |

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
$microsoft_365_tenant_id = 56; // int | ID of the Microsoft 365 tenant

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
| **microsoft_365_tenant_id** | **int**| ID of the Microsoft 365 tenant | |

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
getPleskLicense($license_id): \Shellrent\Sdk\Model\LicenseResponse
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
$license_id = 56; // int | ID of the license

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
| **license_id** | **int**| ID of the license | |

### Return type

[**\Shellrent\Sdk\Model\LicenseResponse**](../Model/LicenseResponse.md)

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
listCpanelLicenses($page, $per_page): \Shellrent\Sdk\Model\LicensePaginatedListResponse
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
$page = 1; // int | Page number, starting from 1. A page beyond the last one returns an empty `data` list (with the requested `page` in `meta`).
$per_page = 20; // int | Number of items per page. Values outside the allowed range are rejected with a validation error.

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
| **page** | **int**| Page number, starting from 1. A page beyond the last one returns an empty &#x60;data&#x60; list (with the requested &#x60;page&#x60; in &#x60;meta&#x60;). | [optional] [default to 1] |
| **per_page** | **int**| Number of items per page. Values outside the allowed range are rejected with a validation error. | [optional] [default to 20] |

### Return type

[**\Shellrent\Sdk\Model\LicensePaginatedListResponse**](../Model/LicensePaginatedListResponse.md)

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
$page = 1; // int | Page number, starting from 1. A page beyond the last one returns an empty `data` list (with the requested `page` in `meta`).
$per_page = 20; // int | Number of items per page. Values outside the allowed range are rejected with a validation error.

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
| **page** | **int**| Page number, starting from 1. A page beyond the last one returns an empty &#x60;data&#x60; list (with the requested &#x60;page&#x60; in &#x60;meta&#x60;). | [optional] [default to 1] |
| **per_page** | **int**| Number of items per page. Values outside the allowed range are rejected with a validation error. | [optional] [default to 20] |

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
$page = 1; // int | Page number, starting from 1. A page beyond the last one returns an empty `data` list (with the requested `page` in `meta`).
$per_page = 20; // int | Number of items per page. Values outside the allowed range are rejected with a validation error.

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
| **page** | **int**| Page number, starting from 1. A page beyond the last one returns an empty &#x60;data&#x60; list (with the requested &#x60;page&#x60; in &#x60;meta&#x60;). | [optional] [default to 1] |
| **per_page** | **int**| Number of items per page. Values outside the allowed range are rejected with a validation error. | [optional] [default to 20] |

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
listPleskLicenses($page, $per_page): \Shellrent\Sdk\Model\LicensePaginatedListResponse
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
$page = 1; // int | Page number, starting from 1. A page beyond the last one returns an empty `data` list (with the requested `page` in `meta`).
$per_page = 20; // int | Number of items per page. Values outside the allowed range are rejected with a validation error.

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
| **page** | **int**| Page number, starting from 1. A page beyond the last one returns an empty &#x60;data&#x60; list (with the requested &#x60;page&#x60; in &#x60;meta&#x60;). | [optional] [default to 1] |
| **per_page** | **int**| Number of items per page. Values outside the allowed range are rejected with a validation error. | [optional] [default to 20] |

### Return type

[**\Shellrent\Sdk\Model\LicensePaginatedListResponse**](../Model/LicensePaginatedListResponse.md)

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
upgradeMicrosoft365SubscriptionQuantity($microsoft_365_subscription_id, $microsoft365_subscription_quantity_request): \Shellrent\Sdk\Model\OrderResponse
```

Upgrade Microsoft 365 subscription quantity

Increase the Microsoft 365 seats quantity. Returns the generated Order to pay the additional seats.  Not available to sub-accounts: the response is 403 (error 1601).

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
$microsoft_365_subscription_id = 56; // int | ID of the Microsoft 365 subscription
$microsoft365_subscription_quantity_request = new \Shellrent\Sdk\Model\Microsoft365SubscriptionQuantityRequest(); // \Shellrent\Sdk\Model\Microsoft365SubscriptionQuantityRequest

try {
    $result = $apiInstance->upgradeMicrosoft365SubscriptionQuantity($microsoft_365_subscription_id, $microsoft365_subscription_quantity_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LicenseApi->upgradeMicrosoft365SubscriptionQuantity: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **microsoft_365_subscription_id** | **int**| ID of the Microsoft 365 subscription | |
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
