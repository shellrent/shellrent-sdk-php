# Shellrent\Sdk\ShopApi

Shop

All URIs are relative to https://api.shellrent.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**buyActiveMonitoring()**](ShopApi.md#buyActiveMonitoring) | **POST** /api/v3/shop/active-monitoring | Buy Active Monitoring |
| [**buyCloudStorage()**](ShopApi.md#buyCloudStorage) | **POST** /api/v3/shop/cloud-storage | Buy Cloud Storage |
| [**buyCloudVps()**](ShopApi.md#buyCloudVps) | **POST** /api/v3/shop/cloud-vps | Buy Cloud VPS |
| [**buyCpanelLicense()**](ShopApi.md#buyCpanelLicense) | **POST** /api/v3/shop/cpanel-license | Buy cPanel license |
| [**buyDedicatedServer()**](ShopApi.md#buyDedicatedServer) | **POST** /api/v3/shop/dedicated-server | Buy Dedicated Server |
| [**buyDomain()**](ShopApi.md#buyDomain) | **POST** /api/v3/shop/domain | Buy Domain |
| [**buyMicrosoft365Subscription()**](ShopApi.md#buyMicrosoft365Subscription) | **POST** /api/v3/shop/microsoft-365 | Buy Microsoft 365 subscription |
| [**buyObjectStorage()**](ShopApi.md#buyObjectStorage) | **POST** /api/v3/shop/object-storage | Buy Object Storage |
| [**buyPec()**](ShopApi.md#buyPec) | **POST** /api/v3/shop/pec | Buy PEC |
| [**buyPecDomain()**](ShopApi.md#buyPecDomain) | **POST** /api/v3/shop/pec-domain | Buy PEC Domain |
| [**buyPleskLicense()**](ShopApi.md#buyPleskLicense) | **POST** /api/v3/shop/plesk-license | Buy Plesk license |
| [**buyPrivateCloudSv()**](ShopApi.md#buyPrivateCloudSv) | **POST** /api/v3/shop/private-cloud-sv | Buy Private Cloud SV |
| [**buySmsTopup()**](ShopApi.md#buySmsTopup) | **POST** /api/v3/shop/sms-top-up | Buy SMS topup |
| [**buySslCertificate()**](ShopApi.md#buySslCertificate) | **POST** /api/v3/shop/ssl-certificate | Buy SSL/TLS Certificate |
| [**buyVeeamBaas()**](ShopApi.md#buyVeeamBaas) | **POST** /api/v3/shop/veeam-baas | Buy Veeam BaaS |
| [**canCancelOrder()**](ShopApi.md#canCancelOrder) | **GET** /api/v3/orders/{order_id}/can-cancel | Can cancel order |
| [**canPayOrder()**](ShopApi.md#canPayOrder) | **GET** /api/v3/orders/{order_id}/can-pay | Can pay Order |
| [**cancelOrder()**](ShopApi.md#cancelOrder) | **DELETE** /api/v3/orders/{order_id} | Cancel order |
| [**checkMicrosoft365DomainAvailability()**](ShopApi.md#checkMicrosoft365DomainAvailability) | **GET** /api/v3/shop/microsoft-365/domain-availability | Check Microsoft 365 domain availability |
| [**getOrder()**](ShopApi.md#getOrder) | **GET** /api/v3/orders/{order_id} | Get an order |
| [**getOrderRow()**](ShopApi.md#getOrderRow) | **GET** /api/v3/orders/{order_id}/rows/{row_id} | Get an order row |
| [**getTld()**](ShopApi.md#getTld) | **GET** /api/v3/tlds/{tld_id} | Get a TLD |
| [**listActiveMonitoringProducts()**](ShopApi.md#listActiveMonitoringProducts) | **GET** /api/v3/shop/active-monitoring | Active Monitoring products |
| [**listCloudStorageProducts()**](ShopApi.md#listCloudStorageProducts) | **GET** /api/v3/shop/cloud-storage | Cloud Storage products |
| [**listCloudVpsProducts()**](ShopApi.md#listCloudVpsProducts) | **GET** /api/v3/shop/cloud-vps | Cloud VPS products |
| [**listCpanelLicenseProducts()**](ShopApi.md#listCpanelLicenseProducts) | **GET** /api/v3/shop/cpanel-license | cPanel licenses products |
| [**listDedicatedServerProducts()**](ShopApi.md#listDedicatedServerProducts) | **GET** /api/v3/shop/dedicated-server | Dedicated Servers products |
| [**listMicrosoft365Products()**](ShopApi.md#listMicrosoft365Products) | **GET** /api/v3/shop/microsoft-365/services | Microsoft 365 subscriptions |
| [**listOrderRows()**](ShopApi.md#listOrderRows) | **GET** /api/v3/orders/{order_id}/rows | List all Order rows |
| [**listOrders()**](ShopApi.md#listOrders) | **GET** /api/v3/orders | List all Orders |
| [**listPecProducts()**](ShopApi.md#listPecProducts) | **GET** /api/v3/shop/pec | PEC products |
| [**listPleskLicenseProducts()**](ShopApi.md#listPleskLicenseProducts) | **GET** /api/v3/shop/plesk-license | Plesk licenses products |
| [**listPrivateCloudSvProducts()**](ShopApi.md#listPrivateCloudSvProducts) | **GET** /api/v3/shop/private-cloud-sv | Private Cloud SV products |
| [**listShopMicrosoft365Tenants()**](ShopApi.md#listShopMicrosoft365Tenants) | **GET** /api/v3/shop/microsoft-365/tenants | Microsoft 365 tenants |
| [**listSmsTopupProducts()**](ShopApi.md#listSmsTopupProducts) | **GET** /api/v3/shop/sms-top-up | SMS topups products |
| [**listSslCertificateProducts()**](ShopApi.md#listSslCertificateProducts) | **GET** /api/v3/shop/ssl-certificate | SSL/TLS Certificates products |
| [**listTlds()**](ShopApi.md#listTlds) | **GET** /api/v3/tlds | List all TLDs |


## `buyActiveMonitoring()`

```php
buyActiveMonitoring($buy_service_active_monitoring_request): \Shellrent\Sdk\Model\OrderListResponse
```

Buy Active Monitoring

Buy a new Active Monitoring product  Not available to sub-accounts: the response is 403 (error 1601).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\ShopApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$buy_service_active_monitoring_request = new \Shellrent\Sdk\Model\BuyServiceActiveMonitoringRequest(); // \Shellrent\Sdk\Model\BuyServiceActiveMonitoringRequest

try {
    $result = $apiInstance->buyActiveMonitoring($buy_service_active_monitoring_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShopApi->buyActiveMonitoring: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **buy_service_active_monitoring_request** | [**\Shellrent\Sdk\Model\BuyServiceActiveMonitoringRequest**](../Model/BuyServiceActiveMonitoringRequest.md)|  | |

### Return type

[**\Shellrent\Sdk\Model\OrderListResponse**](../Model/OrderListResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `buyCloudStorage()`

```php
buyCloudStorage($buy_service_cloud_storage_request): \Shellrent\Sdk\Model\OrderListResponse
```

Buy Cloud Storage

Buy a new Cloud Storage product  Not available to sub-accounts: the response is 403 (error 1601).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\ShopApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$buy_service_cloud_storage_request = new \Shellrent\Sdk\Model\BuyServiceCloudStorageRequest(); // \Shellrent\Sdk\Model\BuyServiceCloudStorageRequest

try {
    $result = $apiInstance->buyCloudStorage($buy_service_cloud_storage_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShopApi->buyCloudStorage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **buy_service_cloud_storage_request** | [**\Shellrent\Sdk\Model\BuyServiceCloudStorageRequest**](../Model/BuyServiceCloudStorageRequest.md)|  | |

### Return type

[**\Shellrent\Sdk\Model\OrderListResponse**](../Model/OrderListResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `buyCloudVps()`

```php
buyCloudVps($buy_service_cloud_vps_request): \Shellrent\Sdk\Model\OrderListResponse
```

Buy Cloud VPS

Buy a new Cloud VPS product  Not available to sub-accounts: the response is 403 (error 1601).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\ShopApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$buy_service_cloud_vps_request = new \Shellrent\Sdk\Model\BuyServiceCloudVpsRequest(); // \Shellrent\Sdk\Model\BuyServiceCloudVpsRequest

try {
    $result = $apiInstance->buyCloudVps($buy_service_cloud_vps_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShopApi->buyCloudVps: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **buy_service_cloud_vps_request** | [**\Shellrent\Sdk\Model\BuyServiceCloudVpsRequest**](../Model/BuyServiceCloudVpsRequest.md)|  | |

### Return type

[**\Shellrent\Sdk\Model\OrderListResponse**](../Model/OrderListResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `buyCpanelLicense()`

```php
buyCpanelLicense($buy_service_cpanel_license_request): \Shellrent\Sdk\Model\OrderListResponse
```

Buy cPanel license

Buy a new cPanel license product  Not available to sub-accounts: the response is 403 (error 1601).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\ShopApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$buy_service_cpanel_license_request = new \Shellrent\Sdk\Model\BuyServiceCpanelLicenseRequest(); // \Shellrent\Sdk\Model\BuyServiceCpanelLicenseRequest

try {
    $result = $apiInstance->buyCpanelLicense($buy_service_cpanel_license_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShopApi->buyCpanelLicense: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **buy_service_cpanel_license_request** | [**\Shellrent\Sdk\Model\BuyServiceCpanelLicenseRequest**](../Model/BuyServiceCpanelLicenseRequest.md)|  | |

### Return type

[**\Shellrent\Sdk\Model\OrderListResponse**](../Model/OrderListResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `buyDedicatedServer()`

```php
buyDedicatedServer($buy_service_dedicated_server_request): \Shellrent\Sdk\Model\OrderListResponse
```

Buy Dedicated Server

Buy a new Dedicated Server product  Not available to sub-accounts: the response is 403 (error 1601).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\ShopApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$buy_service_dedicated_server_request = new \Shellrent\Sdk\Model\BuyServiceDedicatedServerRequest(); // \Shellrent\Sdk\Model\BuyServiceDedicatedServerRequest

try {
    $result = $apiInstance->buyDedicatedServer($buy_service_dedicated_server_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShopApi->buyDedicatedServer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **buy_service_dedicated_server_request** | [**\Shellrent\Sdk\Model\BuyServiceDedicatedServerRequest**](../Model/BuyServiceDedicatedServerRequest.md)|  | |

### Return type

[**\Shellrent\Sdk\Model\OrderListResponse**](../Model/OrderListResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `buyDomain()`

```php
buyDomain($buy_service_domain_request): \Shellrent\Sdk\Model\OrderListResponse
```

Buy Domain

Buy a new Domain. A premium domain is ordered at the prices given by `GET /api/v3/domains/availability`; when the registry gives no price, it cannot be bought (409)  Not available to sub-accounts: the response is 403 (error 1601).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\ShopApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$buy_service_domain_request = new \Shellrent\Sdk\Model\BuyServiceDomainRequest(); // \Shellrent\Sdk\Model\BuyServiceDomainRequest

try {
    $result = $apiInstance->buyDomain($buy_service_domain_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShopApi->buyDomain: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **buy_service_domain_request** | [**\Shellrent\Sdk\Model\BuyServiceDomainRequest**](../Model/BuyServiceDomainRequest.md)|  | |

### Return type

[**\Shellrent\Sdk\Model\OrderListResponse**](../Model/OrderListResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `buyMicrosoft365Subscription()`

```php
buyMicrosoft365Subscription($buy_service_microsoft365_request): \Shellrent\Sdk\Model\OrderListResponse
```

Buy Microsoft 365 subscription

Buy a new Microsoft 365 subscription. The tenant data is checked before the order is created: a tenant chosen with \"select\" that is not one of the account is 404, a choice that cannot be applied (too many subscriptions of the service on the tenant, domain prefix of an existing tenant, domain to transfer that does not exist or new domain already registered at Microsoft) is 409.  Not available to sub-accounts: the response is 403 (error 1601).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\ShopApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$buy_service_microsoft365_request = new \Shellrent\Sdk\Model\BuyServiceMicrosoft365Request(); // \Shellrent\Sdk\Model\BuyServiceMicrosoft365Request

try {
    $result = $apiInstance->buyMicrosoft365Subscription($buy_service_microsoft365_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShopApi->buyMicrosoft365Subscription: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **buy_service_microsoft365_request** | [**\Shellrent\Sdk\Model\BuyServiceMicrosoft365Request**](../Model/BuyServiceMicrosoft365Request.md)|  | |

### Return type

[**\Shellrent\Sdk\Model\OrderListResponse**](../Model/OrderListResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `buyObjectStorage()`

```php
buyObjectStorage($buy_service_object_storage_request): \Shellrent\Sdk\Model\OrderListResponse
```

Buy Object Storage

Buy a new Object Storage product  Not available to sub-accounts: the response is 403 (error 1601).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\ShopApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$buy_service_object_storage_request = new \Shellrent\Sdk\Model\BuyServiceObjectStorageRequest(); // \Shellrent\Sdk\Model\BuyServiceObjectStorageRequest

try {
    $result = $apiInstance->buyObjectStorage($buy_service_object_storage_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShopApi->buyObjectStorage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **buy_service_object_storage_request** | [**\Shellrent\Sdk\Model\BuyServiceObjectStorageRequest**](../Model/BuyServiceObjectStorageRequest.md)|  | |

### Return type

[**\Shellrent\Sdk\Model\OrderListResponse**](../Model/OrderListResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `buyPec()`

```php
buyPec($buy_service_pec_request): \Shellrent\Sdk\Model\OrderListResponse
```

Buy PEC

Buy a new PEC product  Not available to sub-accounts: the response is 403 (error 1601).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\ShopApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$buy_service_pec_request = new \Shellrent\Sdk\Model\BuyServicePecRequest(); // \Shellrent\Sdk\Model\BuyServicePecRequest

try {
    $result = $apiInstance->buyPec($buy_service_pec_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShopApi->buyPec: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **buy_service_pec_request** | [**\Shellrent\Sdk\Model\BuyServicePecRequest**](../Model/BuyServicePecRequest.md)|  | |

### Return type

[**\Shellrent\Sdk\Model\OrderListResponse**](../Model/OrderListResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `buyPecDomain()`

```php
buyPecDomain($buy_service_pec_domain_request): \Shellrent\Sdk\Model\OrderListResponse
```

Buy PEC Domain

Buy a new PEC Domain product  Not available to sub-accounts: the response is 403 (error 1601).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\ShopApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$buy_service_pec_domain_request = new \Shellrent\Sdk\Model\BuyServicePecDomainRequest(); // \Shellrent\Sdk\Model\BuyServicePecDomainRequest

try {
    $result = $apiInstance->buyPecDomain($buy_service_pec_domain_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShopApi->buyPecDomain: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **buy_service_pec_domain_request** | [**\Shellrent\Sdk\Model\BuyServicePecDomainRequest**](../Model/BuyServicePecDomainRequest.md)|  | |

### Return type

[**\Shellrent\Sdk\Model\OrderListResponse**](../Model/OrderListResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `buyPleskLicense()`

```php
buyPleskLicense($buy_service_plesk_license_request): \Shellrent\Sdk\Model\OrderListResponse
```

Buy Plesk license

Buy a new Plesk license product  Not available to sub-accounts: the response is 403 (error 1601).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\ShopApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$buy_service_plesk_license_request = new \Shellrent\Sdk\Model\BuyServicePleskLicenseRequest(); // \Shellrent\Sdk\Model\BuyServicePleskLicenseRequest

try {
    $result = $apiInstance->buyPleskLicense($buy_service_plesk_license_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShopApi->buyPleskLicense: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **buy_service_plesk_license_request** | [**\Shellrent\Sdk\Model\BuyServicePleskLicenseRequest**](../Model/BuyServicePleskLicenseRequest.md)|  | |

### Return type

[**\Shellrent\Sdk\Model\OrderListResponse**](../Model/OrderListResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `buyPrivateCloudSv()`

```php
buyPrivateCloudSv($buy_service_private_cloud_sv_request): \Shellrent\Sdk\Model\OrderListResponse
```

Buy Private Cloud SV

Buy a new Private Cloud SV product  Not available to sub-accounts: the response is 403 (error 1601).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\ShopApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$buy_service_private_cloud_sv_request = new \Shellrent\Sdk\Model\BuyServicePrivateCloudSvRequest(); // \Shellrent\Sdk\Model\BuyServicePrivateCloudSvRequest

try {
    $result = $apiInstance->buyPrivateCloudSv($buy_service_private_cloud_sv_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShopApi->buyPrivateCloudSv: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **buy_service_private_cloud_sv_request** | [**\Shellrent\Sdk\Model\BuyServicePrivateCloudSvRequest**](../Model/BuyServicePrivateCloudSvRequest.md)|  | |

### Return type

[**\Shellrent\Sdk\Model\OrderListResponse**](../Model/OrderListResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `buySmsTopup()`

```php
buySmsTopup($buy_service_sms_request): \Shellrent\Sdk\Model\OrderListResponse
```

Buy SMS topup

Buy a new SMS topup product  Not available to sub-accounts: the response is 403 (error 1601).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\ShopApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$buy_service_sms_request = new \Shellrent\Sdk\Model\BuyServiceSmsRequest(); // \Shellrent\Sdk\Model\BuyServiceSmsRequest

try {
    $result = $apiInstance->buySmsTopup($buy_service_sms_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShopApi->buySmsTopup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **buy_service_sms_request** | [**\Shellrent\Sdk\Model\BuyServiceSmsRequest**](../Model/BuyServiceSmsRequest.md)|  | |

### Return type

[**\Shellrent\Sdk\Model\OrderListResponse**](../Model/OrderListResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `buySslCertificate()`

```php
buySslCertificate($buy_service_ssl_certificate_request): \Shellrent\Sdk\Model\OrderListResponse
```

Buy SSL/TLS Certificate

Buy a new SSL/TLS Certificate product  Not available to sub-accounts: the response is 403 (error 1601).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\ShopApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$buy_service_ssl_certificate_request = new \Shellrent\Sdk\Model\BuyServiceSslCertificateRequest(); // \Shellrent\Sdk\Model\BuyServiceSslCertificateRequest

try {
    $result = $apiInstance->buySslCertificate($buy_service_ssl_certificate_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShopApi->buySslCertificate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **buy_service_ssl_certificate_request** | [**\Shellrent\Sdk\Model\BuyServiceSslCertificateRequest**](../Model/BuyServiceSslCertificateRequest.md)|  | |

### Return type

[**\Shellrent\Sdk\Model\OrderListResponse**](../Model/OrderListResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `buyVeeamBaas()`

```php
buyVeeamBaas($buy_service_veeam_baas_request): \Shellrent\Sdk\Model\OrderListResponse
```

Buy Veeam BaaS

Buy a new Veeam Backup as a Service product  Not available to sub-accounts: the response is 403 (error 1601).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\ShopApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$buy_service_veeam_baas_request = new \Shellrent\Sdk\Model\BuyServiceVeeamBaasRequest(); // \Shellrent\Sdk\Model\BuyServiceVeeamBaasRequest

try {
    $result = $apiInstance->buyVeeamBaas($buy_service_veeam_baas_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShopApi->buyVeeamBaas: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **buy_service_veeam_baas_request** | [**\Shellrent\Sdk\Model\BuyServiceVeeamBaasRequest**](../Model/BuyServiceVeeamBaasRequest.md)|  | |

### Return type

[**\Shellrent\Sdk\Model\OrderListResponse**](../Model/OrderListResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `canCancelOrder()`

```php
canCancelOrder($order_id): \Shellrent\Sdk\Model\OrderCanCancelResponse
```

Can cancel order

Know if it's possible to cancel an Order  Not available to sub-accounts: the response is 403 (error 1601).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\ShopApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int | ID of the order

try {
    $result = $apiInstance->canCancelOrder($order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShopApi->canCancelOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **int**| ID of the order | |

### Return type

[**\Shellrent\Sdk\Model\OrderCanCancelResponse**](../Model/OrderCanCancelResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `canPayOrder()`

```php
canPayOrder($order_id, $one_click_id, $prepaid_credit): \Shellrent\Sdk\Model\OrderCanPayResponse
```

Can pay Order

Whether the order can be paid now with a payment method, with the amount to pay, commission of the method included, and the orders paid together with it. Send either `one_click_id` or `prepaid_credit=true` (400 otherwise). `can_pay` is false when the order cannot be paid now, when the One-Click method is not active or has expired, or when the prepaid credit cannot be used for these orders or is not enough. 404 when the One-Click method does not exist or belongs to another account  Not available to sub-accounts: the response is 403 (error 1601).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\ShopApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int | ID of the order
$one_click_id = 56; // int | Id of the One-Click payment method to pay with (`GET /api/v3/one-clicks`); send it or `prepaid_credit`, not both
$prepaid_credit = True; // bool | `true` to pay with the prepaid credit; send it or `one_click_id`, not both

try {
    $result = $apiInstance->canPayOrder($order_id, $one_click_id, $prepaid_credit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShopApi->canPayOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **int**| ID of the order | |
| **one_click_id** | **int**| Id of the One-Click payment method to pay with (&#x60;GET /api/v3/one-clicks&#x60;); send it or &#x60;prepaid_credit&#x60;, not both | [optional] |
| **prepaid_credit** | **bool**| &#x60;true&#x60; to pay with the prepaid credit; send it or &#x60;one_click_id&#x60;, not both | [optional] |

### Return type

[**\Shellrent\Sdk\Model\OrderCanPayResponse**](../Model/OrderCanPayResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cancelOrder()`

```php
cancelOrder($order_id)
```

Cancel order

Cancel an Order  Not available to sub-accounts: the response is 403 (error 1601).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\ShopApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int | ID of the order

try {
    $apiInstance->cancelOrder($order_id);
} catch (Exception $e) {
    echo 'Exception when calling ShopApi->cancelOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **int**| ID of the order | |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `checkMicrosoft365DomainAvailability()`

```php
checkMicrosoft365DomainAvailability($domain_prefix): \Shellrent\Sdk\Model\Microsoft365DomainAvailableResponse
```

Check Microsoft 365 domain availability

Check if a new Microsoft 365 tenant domain is available  Not available to sub-accounts: the response is 403 (error 1601).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\ShopApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain_prefix = mycompany; // string | Prefix to search for (for \".onmicrosoft.com\" tenant domains): lowercase letters and digits, at most 27 characters

try {
    $result = $apiInstance->checkMicrosoft365DomainAvailability($domain_prefix);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShopApi->checkMicrosoft365DomainAvailability: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain_prefix** | **string**| Prefix to search for (for \&quot;.onmicrosoft.com\&quot; tenant domains): lowercase letters and digits, at most 27 characters | |

### Return type

[**\Shellrent\Sdk\Model\Microsoft365DomainAvailableResponse**](../Model/Microsoft365DomainAvailableResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrder()`

```php
getOrder($order_id): \Shellrent\Sdk\Model\OrderResponse
```

Get an order

Get details of an order  Not available to sub-accounts: the response is 403 (error 1601).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\ShopApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int | ID of the order

try {
    $result = $apiInstance->getOrder($order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShopApi->getOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **int**| ID of the order | |

### Return type

[**\Shellrent\Sdk\Model\OrderResponse**](../Model/OrderResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrderRow()`

```php
getOrderRow($order_id, $row_id): \Shellrent\Sdk\Model\OrderRowResponse
```

Get an order row

Get details of an Order row  Not available to sub-accounts: the response is 403 (error 1601).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\ShopApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int | ID of the order
$row_id = 56; // int | ID of the row

try {
    $result = $apiInstance->getOrderRow($order_id, $row_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShopApi->getOrderRow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **int**| ID of the order | |
| **row_id** | **int**| ID of the row | |

### Return type

[**\Shellrent\Sdk\Model\OrderRowResponse**](../Model/OrderRowResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTld()`

```php
getTld($tld_id): \Shellrent\Sdk\Model\TldResponse
```

Get a TLD

Get details of a TLD extension  Not available to sub-accounts: the response is 403 (error 1601).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\ShopApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tld_id = 56; // int | ID of the TLD

try {
    $result = $apiInstance->getTld($tld_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShopApi->getTld: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tld_id** | **int**| ID of the TLD | |

### Return type

[**\Shellrent\Sdk\Model\TldResponse**](../Model/TldResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listActiveMonitoringProducts()`

```php
listActiveMonitoringProducts($page, $per_page): \Shellrent\Sdk\Model\ServicePaginatedListResponse
```

Active Monitoring products

Get a list of all Active Monitoring products that can be ordered  Not available to sub-accounts: the response is 403 (error 1601).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\ShopApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | Page number, starting from 1. A page beyond the last one returns an empty `data` list (with the requested `page` in `meta`).
$per_page = 20; // int | Number of items per page. Values outside the allowed range are rejected with a validation error.

try {
    $result = $apiInstance->listActiveMonitoringProducts($page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShopApi->listActiveMonitoringProducts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| Page number, starting from 1. A page beyond the last one returns an empty &#x60;data&#x60; list (with the requested &#x60;page&#x60; in &#x60;meta&#x60;). | [optional] [default to 1] |
| **per_page** | **int**| Number of items per page. Values outside the allowed range are rejected with a validation error. | [optional] [default to 20] |

### Return type

[**\Shellrent\Sdk\Model\ServicePaginatedListResponse**](../Model/ServicePaginatedListResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCloudStorageProducts()`

```php
listCloudStorageProducts($page, $per_page): \Shellrent\Sdk\Model\ServicePaginatedListResponse
```

Cloud Storage products

Get a list of all Cloud Storage products that can be ordered  Not available to sub-accounts: the response is 403 (error 1601).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\ShopApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | Page number, starting from 1. A page beyond the last one returns an empty `data` list (with the requested `page` in `meta`).
$per_page = 20; // int | Number of items per page. Values outside the allowed range are rejected with a validation error.

try {
    $result = $apiInstance->listCloudStorageProducts($page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShopApi->listCloudStorageProducts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| Page number, starting from 1. A page beyond the last one returns an empty &#x60;data&#x60; list (with the requested &#x60;page&#x60; in &#x60;meta&#x60;). | [optional] [default to 1] |
| **per_page** | **int**| Number of items per page. Values outside the allowed range are rejected with a validation error. | [optional] [default to 20] |

### Return type

[**\Shellrent\Sdk\Model\ServicePaginatedListResponse**](../Model/ServicePaginatedListResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCloudVpsProducts()`

```php
listCloudVpsProducts($page, $per_page): \Shellrent\Sdk\Model\ServiceServerPaginatedListResponse
```

Cloud VPS products

Get a list of all Cloud VPS products that can be ordered  Not available to sub-accounts: the response is 403 (error 1601).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\ShopApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | Page number, starting from 1. A page beyond the last one returns an empty `data` list (with the requested `page` in `meta`).
$per_page = 20; // int | Number of items per page. Values outside the allowed range are rejected with a validation error.

try {
    $result = $apiInstance->listCloudVpsProducts($page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShopApi->listCloudVpsProducts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| Page number, starting from 1. A page beyond the last one returns an empty &#x60;data&#x60; list (with the requested &#x60;page&#x60; in &#x60;meta&#x60;). | [optional] [default to 1] |
| **per_page** | **int**| Number of items per page. Values outside the allowed range are rejected with a validation error. | [optional] [default to 20] |

### Return type

[**\Shellrent\Sdk\Model\ServiceServerPaginatedListResponse**](../Model/ServiceServerPaginatedListResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCpanelLicenseProducts()`

```php
listCpanelLicenseProducts($page, $per_page): \Shellrent\Sdk\Model\ServicePaginatedListResponse
```

cPanel licenses products

Get a list of all cPanel license products that can be ordered  Not available to sub-accounts: the response is 403 (error 1601).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\ShopApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | Page number, starting from 1. A page beyond the last one returns an empty `data` list (with the requested `page` in `meta`).
$per_page = 20; // int | Number of items per page. Values outside the allowed range are rejected with a validation error.

try {
    $result = $apiInstance->listCpanelLicenseProducts($page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShopApi->listCpanelLicenseProducts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| Page number, starting from 1. A page beyond the last one returns an empty &#x60;data&#x60; list (with the requested &#x60;page&#x60; in &#x60;meta&#x60;). | [optional] [default to 1] |
| **per_page** | **int**| Number of items per page. Values outside the allowed range are rejected with a validation error. | [optional] [default to 20] |

### Return type

[**\Shellrent\Sdk\Model\ServicePaginatedListResponse**](../Model/ServicePaginatedListResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listDedicatedServerProducts()`

```php
listDedicatedServerProducts($page, $per_page): \Shellrent\Sdk\Model\ServiceServerPaginatedListResponse
```

Dedicated Servers products

Get a list of all Dedicated Server products that can be ordered  Not available to sub-accounts: the response is 403 (error 1601).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\ShopApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | Page number, starting from 1. A page beyond the last one returns an empty `data` list (with the requested `page` in `meta`).
$per_page = 20; // int | Number of items per page. Values outside the allowed range are rejected with a validation error.

try {
    $result = $apiInstance->listDedicatedServerProducts($page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShopApi->listDedicatedServerProducts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| Page number, starting from 1. A page beyond the last one returns an empty &#x60;data&#x60; list (with the requested &#x60;page&#x60; in &#x60;meta&#x60;). | [optional] [default to 1] |
| **per_page** | **int**| Number of items per page. Values outside the allowed range are rejected with a validation error. | [optional] [default to 20] |

### Return type

[**\Shellrent\Sdk\Model\ServiceServerPaginatedListResponse**](../Model/ServiceServerPaginatedListResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listMicrosoft365Products()`

```php
listMicrosoft365Products($page, $per_page): \Shellrent\Sdk\Model\ServicePaginatedListResponse
```

Microsoft 365 subscriptions

Get a list of all Microsoft 365 subscriptions that can be ordered  Not available to sub-accounts: the response is 403 (error 1601).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\ShopApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | Page number, starting from 1. A page beyond the last one returns an empty `data` list (with the requested `page` in `meta`).
$per_page = 20; // int | Number of items per page. Values outside the allowed range are rejected with a validation error.

try {
    $result = $apiInstance->listMicrosoft365Products($page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShopApi->listMicrosoft365Products: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| Page number, starting from 1. A page beyond the last one returns an empty &#x60;data&#x60; list (with the requested &#x60;page&#x60; in &#x60;meta&#x60;). | [optional] [default to 1] |
| **per_page** | **int**| Number of items per page. Values outside the allowed range are rejected with a validation error. | [optional] [default to 20] |

### Return type

[**\Shellrent\Sdk\Model\ServicePaginatedListResponse**](../Model/ServicePaginatedListResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listOrderRows()`

```php
listOrderRows($order_id): \Shellrent\Sdk\Model\OrderRowListResponse
```

List all Order rows

Get the list of all the rows of an Order  Not available to sub-accounts: the response is 403 (error 1601).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\ShopApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int | ID of the order

try {
    $result = $apiInstance->listOrderRows($order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShopApi->listOrderRows: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **int**| ID of the order | |

### Return type

[**\Shellrent\Sdk\Model\OrderRowListResponse**](../Model/OrderRowListResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listOrders()`

```php
listOrders($order_status, $type, $invoice_id, $purchase_id, $payed, $date_created_from, $date_created_to, $page, $per_page): \Shellrent\Sdk\Model\OrderPaginatedListResponse
```

List all Orders

Get a list of all Orders  Not available to sub-accounts: the response is 403 (error 1601).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\ShopApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_status = 'order_status_example'; // string | Filter by order status (status_code)
$type = 'type_example'; // string | Filter by order type (\"P\" - purchase or \"R\" - renew)
$invoice_id = 56; // int | Only the orders of the invoice with this ID
$purchase_id = 56; // int | Only the orders that include the purchase with this ID
$payed = True; // bool | true: only the paid orders; false: only those not paid yet
$date_created_from = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Only the orders created at or after this time (ISO 8601 UTC: YYYY-MM-DDTHH:MM:SSZ)
$date_created_to = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Only the orders created at or before this time (ISO 8601 UTC: YYYY-MM-DDTHH:MM:SSZ)
$page = 1; // int | Page number, starting from 1. A page beyond the last one returns an empty `data` list (with the requested `page` in `meta`).
$per_page = 20; // int | Number of items per page. Values outside the allowed range are rejected with a validation error.

try {
    $result = $apiInstance->listOrders($order_status, $type, $invoice_id, $purchase_id, $payed, $date_created_from, $date_created_to, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShopApi->listOrders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_status** | **string**| Filter by order status (status_code) | [optional] |
| **type** | **string**| Filter by order type (\&quot;P\&quot; - purchase or \&quot;R\&quot; - renew) | [optional] |
| **invoice_id** | **int**| Only the orders of the invoice with this ID | [optional] |
| **purchase_id** | **int**| Only the orders that include the purchase with this ID | [optional] |
| **payed** | **bool**| true: only the paid orders; false: only those not paid yet | [optional] |
| **date_created_from** | **\DateTime**| Only the orders created at or after this time (ISO 8601 UTC: YYYY-MM-DDTHH:MM:SSZ) | [optional] |
| **date_created_to** | **\DateTime**| Only the orders created at or before this time (ISO 8601 UTC: YYYY-MM-DDTHH:MM:SSZ) | [optional] |
| **page** | **int**| Page number, starting from 1. A page beyond the last one returns an empty &#x60;data&#x60; list (with the requested &#x60;page&#x60; in &#x60;meta&#x60;). | [optional] [default to 1] |
| **per_page** | **int**| Number of items per page. Values outside the allowed range are rejected with a validation error. | [optional] [default to 20] |

### Return type

[**\Shellrent\Sdk\Model\OrderPaginatedListResponse**](../Model/OrderPaginatedListResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listPecProducts()`

```php
listPecProducts($page, $per_page): \Shellrent\Sdk\Model\ServicePaginatedListResponse
```

PEC products

Get a list of all PEC products that can be ordered  Not available to sub-accounts: the response is 403 (error 1601).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\ShopApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | Page number, starting from 1. A page beyond the last one returns an empty `data` list (with the requested `page` in `meta`).
$per_page = 20; // int | Number of items per page. Values outside the allowed range are rejected with a validation error.

try {
    $result = $apiInstance->listPecProducts($page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShopApi->listPecProducts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| Page number, starting from 1. A page beyond the last one returns an empty &#x60;data&#x60; list (with the requested &#x60;page&#x60; in &#x60;meta&#x60;). | [optional] [default to 1] |
| **per_page** | **int**| Number of items per page. Values outside the allowed range are rejected with a validation error. | [optional] [default to 20] |

### Return type

[**\Shellrent\Sdk\Model\ServicePaginatedListResponse**](../Model/ServicePaginatedListResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listPleskLicenseProducts()`

```php
listPleskLicenseProducts($page, $per_page): \Shellrent\Sdk\Model\ServicePaginatedListResponse
```

Plesk licenses products

Get a list of all Plesk license products that can be ordered  Not available to sub-accounts: the response is 403 (error 1601).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\ShopApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | Page number, starting from 1. A page beyond the last one returns an empty `data` list (with the requested `page` in `meta`).
$per_page = 20; // int | Number of items per page. Values outside the allowed range are rejected with a validation error.

try {
    $result = $apiInstance->listPleskLicenseProducts($page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShopApi->listPleskLicenseProducts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| Page number, starting from 1. A page beyond the last one returns an empty &#x60;data&#x60; list (with the requested &#x60;page&#x60; in &#x60;meta&#x60;). | [optional] [default to 1] |
| **per_page** | **int**| Number of items per page. Values outside the allowed range are rejected with a validation error. | [optional] [default to 20] |

### Return type

[**\Shellrent\Sdk\Model\ServicePaginatedListResponse**](../Model/ServicePaginatedListResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listPrivateCloudSvProducts()`

```php
listPrivateCloudSvProducts($page, $per_page): \Shellrent\Sdk\Model\ServicePaginatedListResponse
```

Private Cloud SV products

Get a list of all Private Cloud SV products that can be ordered  Not available to sub-accounts: the response is 403 (error 1601).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\ShopApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | Page number, starting from 1. A page beyond the last one returns an empty `data` list (with the requested `page` in `meta`).
$per_page = 20; // int | Number of items per page. Values outside the allowed range are rejected with a validation error.

try {
    $result = $apiInstance->listPrivateCloudSvProducts($page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShopApi->listPrivateCloudSvProducts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| Page number, starting from 1. A page beyond the last one returns an empty &#x60;data&#x60; list (with the requested &#x60;page&#x60; in &#x60;meta&#x60;). | [optional] [default to 1] |
| **per_page** | **int**| Number of items per page. Values outside the allowed range are rejected with a validation error. | [optional] [default to 20] |

### Return type

[**\Shellrent\Sdk\Model\ServicePaginatedListResponse**](../Model/ServicePaginatedListResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listShopMicrosoft365Tenants()`

```php
listShopMicrosoft365Tenants($account_id, $page, $per_page): \Shellrent\Sdk\Model\Microsoft365TenantPaginatedListResponse
```

Microsoft 365 tenants

Get a list of all Microsoft 365 already existing tenants  Not available to sub-accounts: the response is 403 (error 1601).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\ShopApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 56; // int | ID of the account owner of the Microsoft 365 subscription used to search for existing tenants. Available to Resellers only.
$page = 1; // int | Page number, starting from 1. A page beyond the last one returns an empty `data` list (with the requested `page` in `meta`).
$per_page = 20; // int | Number of items per page. Values outside the allowed range are rejected with a validation error.

try {
    $result = $apiInstance->listShopMicrosoft365Tenants($account_id, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShopApi->listShopMicrosoft365Tenants: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **int**| ID of the account owner of the Microsoft 365 subscription used to search for existing tenants. Available to Resellers only. | [optional] |
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

## `listSmsTopupProducts()`

```php
listSmsTopupProducts($page, $per_page): \Shellrent\Sdk\Model\ServicePaginatedListResponse
```

SMS topups products

Get a list of all SMS topup products that can be ordered  Not available to sub-accounts: the response is 403 (error 1601).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\ShopApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | Page number, starting from 1. A page beyond the last one returns an empty `data` list (with the requested `page` in `meta`).
$per_page = 20; // int | Number of items per page. Values outside the allowed range are rejected with a validation error.

try {
    $result = $apiInstance->listSmsTopupProducts($page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShopApi->listSmsTopupProducts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| Page number, starting from 1. A page beyond the last one returns an empty &#x60;data&#x60; list (with the requested &#x60;page&#x60; in &#x60;meta&#x60;). | [optional] [default to 1] |
| **per_page** | **int**| Number of items per page. Values outside the allowed range are rejected with a validation error. | [optional] [default to 20] |

### Return type

[**\Shellrent\Sdk\Model\ServicePaginatedListResponse**](../Model/ServicePaginatedListResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listSslCertificateProducts()`

```php
listSslCertificateProducts($page, $per_page): \Shellrent\Sdk\Model\ServicePaginatedListResponse
```

SSL/TLS Certificates products

Get a list of all SSL/TLS Certificate products that can be ordered  Not available to sub-accounts: the response is 403 (error 1601).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\ShopApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | Page number, starting from 1. A page beyond the last one returns an empty `data` list (with the requested `page` in `meta`).
$per_page = 20; // int | Number of items per page. Values outside the allowed range are rejected with a validation error.

try {
    $result = $apiInstance->listSslCertificateProducts($page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShopApi->listSslCertificateProducts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| Page number, starting from 1. A page beyond the last one returns an empty &#x60;data&#x60; list (with the requested &#x60;page&#x60; in &#x60;meta&#x60;). | [optional] [default to 1] |
| **per_page** | **int**| Number of items per page. Values outside the allowed range are rejected with a validation error. | [optional] [default to 20] |

### Return type

[**\Shellrent\Sdk\Model\ServicePaginatedListResponse**](../Model/ServicePaginatedListResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listTlds()`

```php
listTlds($extension, $extension_exact, $is_it, $country, $page, $per_page): \Shellrent\Sdk\Model\TldPaginatedListResponse
```

List all TLDs

Get a list of all TLD extensions for domains  Not available to sub-accounts: the response is 403 (error 1601).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\ShopApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$extension = 'extension_example'; // string | TLD extension (partial match); ie. searching \"uk\", it will extract \"uk\", \"co.uk\", \"org.uk\", etc.
$extension_exact = 'extension_exact_example'; // string | TLD extension (exact match)
$is_it = True; // bool | Returns \"it\" TLD extensions only (IT Register)
$country = 'country_example'; // string | ISO country code with 2 letters to extract Country Code TLDs (ccTLD); ie. \"IT\" for Italy, \"ES\" for Spain
$page = 1; // int | Page number, starting from 1. A page beyond the last one returns an empty `data` list (with the requested `page` in `meta`).
$per_page = 20; // int | Number of items per page. Values outside the allowed range are rejected with a validation error.

try {
    $result = $apiInstance->listTlds($extension, $extension_exact, $is_it, $country, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShopApi->listTlds: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **extension** | **string**| TLD extension (partial match); ie. searching \&quot;uk\&quot;, it will extract \&quot;uk\&quot;, \&quot;co.uk\&quot;, \&quot;org.uk\&quot;, etc. | [optional] |
| **extension_exact** | **string**| TLD extension (exact match) | [optional] |
| **is_it** | **bool**| Returns \&quot;it\&quot; TLD extensions only (IT Register) | [optional] |
| **country** | **string**| ISO country code with 2 letters to extract Country Code TLDs (ccTLD); ie. \&quot;IT\&quot; for Italy, \&quot;ES\&quot; for Spain | [optional] |
| **page** | **int**| Page number, starting from 1. A page beyond the last one returns an empty &#x60;data&#x60; list (with the requested &#x60;page&#x60; in &#x60;meta&#x60;). | [optional] [default to 1] |
| **per_page** | **int**| Number of items per page. Values outside the allowed range are rejected with a validation error. | [optional] [default to 20] |

### Return type

[**\Shellrent\Sdk\Model\TldPaginatedListResponse**](../Model/TldPaginatedListResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
