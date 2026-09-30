# Shellrent\Sdk\SslApi

SSL Certificates

All URIs are relative to https://api.shellrent.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**canReemitSslCertificate()**](SslApi.md#canReemitSslCertificate) | **GET** /api/v3/ssl-certificates/{ssl_certificate_id}/can-reemit | Can re-emit certificate |
| [**exportSslCertificate()**](SslApi.md#exportSslCertificate) | **GET** /api/v3/ssl-certificates/{ssl_certificate_id}/export_format/{format} | Export SSL certificate keys |
| [**getSslCertificate()**](SslApi.md#getSslCertificate) | **GET** /api/v3/ssl-certificates/{ssl_certificate_id} | Get SSL certificate |
| [**getSslCertificateKeys()**](SslApi.md#getSslCertificateKeys) | **GET** /api/v3/ssl-certificates/{ssl_certificate_id}/keys | Get SSL certificate keys |
| [**listSslApproverEmails()**](SslApi.md#listSslApproverEmails) | **GET** /api/v3/ssl-certificates/approver-emails/{domain_name} | Get approver emails list |
| [**listSslCertificateExportFormats()**](SslApi.md#listSslCertificateExportFormats) | **GET** /api/v3/ssl-certificates/{ssl_certificate_id}/export_formats | Get export formats |
| [**listSslCertificates()**](SslApi.md#listSslCertificates) | **GET** /api/v3/ssl-certificates | List all SSL Certificates |
| [**reemitSslCertificate()**](SslApi.md#reemitSslCertificate) | **POST** /api/v3/ssl-certificates/{ssl_certificate_id}/reemit | Re-emit certificate |
| [**updateSslCertificateCsr()**](SslApi.md#updateSslCertificateCsr) | **PUT** /api/v3/ssl-certificates/{ssl_certificate_id}/csr | Change SSL certificate CSR |
| [**updateSslCertificateOwner()**](SslApi.md#updateSslCertificateOwner) | **PATCH** /api/v3/ssl-certificates/{ssl_certificate_id} | Edit SSL certificate owner |


## `canReemitSslCertificate()`

```php
canReemitSslCertificate($ssl_certificate_id): \Shellrent\Sdk\Model\SslCertificateCanReemitResponse
```

Can re-emit certificate

Know if it's possible to re-emit the SSL Certificate

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\SslApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ssl_certificate_id = 56; // int

try {
    $result = $apiInstance->canReemitSslCertificate($ssl_certificate_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SslApi->canReemitSslCertificate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ssl_certificate_id** | **int**|  | |

### Return type

[**\Shellrent\Sdk\Model\SslCertificateCanReemitResponse**](../Model/SslCertificateCanReemitResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `exportSslCertificate()`

```php
exportSslCertificate($ssl_certificate_id, $format): \Shellrent\Sdk\Model\SslCertificateExportResponse
```

Export SSL certificate keys

Export SSL certificate keys

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\SslApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ssl_certificate_id = 56; // int
$format = 'format_example'; // string

try {
    $result = $apiInstance->exportSslCertificate($ssl_certificate_id, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SslApi->exportSslCertificate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ssl_certificate_id** | **int**|  | |
| **format** | **string**|  | |

### Return type

[**\Shellrent\Sdk\Model\SslCertificateExportResponse**](../Model/SslCertificateExportResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSslCertificate()`

```php
getSslCertificate($ssl_certificate_id): \Shellrent\Sdk\Model\SslCertificateResponse
```

Get SSL certificate

Get details of an SSL Certificate

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\SslApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ssl_certificate_id = 56; // int

try {
    $result = $apiInstance->getSslCertificate($ssl_certificate_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SslApi->getSslCertificate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ssl_certificate_id** | **int**|  | |

### Return type

[**\Shellrent\Sdk\Model\SslCertificateResponse**](../Model/SslCertificateResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSslCertificateKeys()`

```php
getSslCertificateKeys($ssl_certificate_id): \Shellrent\Sdk\Model\SslCertificateKeysResponse
```

Get SSL certificate keys

Get the keys of an SSL Certificate

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\SslApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ssl_certificate_id = 56; // int

try {
    $result = $apiInstance->getSslCertificateKeys($ssl_certificate_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SslApi->getSslCertificateKeys: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ssl_certificate_id** | **int**|  | |

### Return type

[**\Shellrent\Sdk\Model\SslCertificateKeysResponse**](../Model/SslCertificateKeysResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listSslApproverEmails()`

```php
listSslApproverEmails($domain_name): \Shellrent\Sdk\Model\SslCertificateApproverEmailsResponse
```

Get approver emails list

Get a list of all acceptable approver emails for a domain name

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\SslApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain_name = 'domain_name_example'; // string

try {
    $result = $apiInstance->listSslApproverEmails($domain_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SslApi->listSslApproverEmails: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain_name** | **string**|  | |

### Return type

[**\Shellrent\Sdk\Model\SslCertificateApproverEmailsResponse**](../Model/SslCertificateApproverEmailsResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listSslCertificateExportFormats()`

```php
listSslCertificateExportFormats($ssl_certificate_id): \Shellrent\Sdk\Model\SslCertificateExportFormatListResponse
```

Get export formats

Get a list of all export formats available for SSL Certificate keys

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\SslApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ssl_certificate_id = 56; // int

try {
    $result = $apiInstance->listSslCertificateExportFormats($ssl_certificate_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SslApi->listSslCertificateExportFormats: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ssl_certificate_id** | **int**|  | |

### Return type

[**\Shellrent\Sdk\Model\SslCertificateExportFormatListResponse**](../Model/SslCertificateExportFormatListResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listSslCertificates()`

```php
listSslCertificates($domain_name, $san_domain_name, $page, $per_page): \Shellrent\Sdk\Model\SslCertificatePaginatedListResponse
```

List all SSL Certificates

Get a list of all SSL Certificates

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\SslApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain_name = 'domain_name_example'; // string | Certificate's main domain name
$san_domain_name = 'san_domain_name_example'; // string | One of the SANs domain name
$page = 1; // int
$per_page = 20; // int

try {
    $result = $apiInstance->listSslCertificates($domain_name, $san_domain_name, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SslApi->listSslCertificates: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain_name** | **string**| Certificate&#39;s main domain name | [optional] |
| **san_domain_name** | **string**| One of the SANs domain name | [optional] |
| **page** | **int**|  | [optional] [default to 1] |
| **per_page** | **int**|  | [optional] [default to 20] |

### Return type

[**\Shellrent\Sdk\Model\SslCertificatePaginatedListResponse**](../Model/SslCertificatePaginatedListResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reemitSslCertificate()`

```php
reemitSslCertificate($ssl_certificate_id, $ssl_certificate_reemit_request): \Shellrent\Sdk\Model\TaskResponse
```

Re-emit certificate

Ask for the SSL Certificate to be re-emitted

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\SslApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ssl_certificate_id = 56; // int
$ssl_certificate_reemit_request = new \Shellrent\Sdk\Model\SslCertificateReemitRequest(); // \Shellrent\Sdk\Model\SslCertificateReemitRequest

try {
    $result = $apiInstance->reemitSslCertificate($ssl_certificate_id, $ssl_certificate_reemit_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SslApi->reemitSslCertificate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ssl_certificate_id** | **int**|  | |
| **ssl_certificate_reemit_request** | [**\Shellrent\Sdk\Model\SslCertificateReemitRequest**](../Model/SslCertificateReemitRequest.md)|  | |

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

## `updateSslCertificateCsr()`

```php
updateSslCertificateCsr($ssl_certificate_id, $ssl_certificate_change_csr_request): \Shellrent\Sdk\Model\SslCertificateKeyResponse
```

Change SSL certificate CSR

Change SSL certificate CSR

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\SslApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ssl_certificate_id = 56; // int
$ssl_certificate_change_csr_request = new \Shellrent\Sdk\Model\SslCertificateChangeCsrRequest(); // \Shellrent\Sdk\Model\SslCertificateChangeCsrRequest

try {
    $result = $apiInstance->updateSslCertificateCsr($ssl_certificate_id, $ssl_certificate_change_csr_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SslApi->updateSslCertificateCsr: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ssl_certificate_id** | **int**|  | |
| **ssl_certificate_change_csr_request** | [**\Shellrent\Sdk\Model\SslCertificateChangeCsrRequest**](../Model/SslCertificateChangeCsrRequest.md)|  | |

### Return type

[**\Shellrent\Sdk\Model\SslCertificateKeyResponse**](../Model/SslCertificateKeyResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateSslCertificateOwner()`

```php
updateSslCertificateOwner($ssl_certificate_id, $ssl_certificate_owner_request): \Shellrent\Sdk\Model\SslCertificateResponse
```

Edit SSL certificate owner

Edit SSL certificate owner

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\SslApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ssl_certificate_id = 56; // int
$ssl_certificate_owner_request = new \Shellrent\Sdk\Model\SslCertificateOwnerRequest(); // \Shellrent\Sdk\Model\SslCertificateOwnerRequest

try {
    $result = $apiInstance->updateSslCertificateOwner($ssl_certificate_id, $ssl_certificate_owner_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SslApi->updateSslCertificateOwner: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ssl_certificate_id** | **int**|  | |
| **ssl_certificate_owner_request** | [**\Shellrent\Sdk\Model\SslCertificateOwnerRequest**](../Model/SslCertificateOwnerRequest.md)|  | |

### Return type

[**\Shellrent\Sdk\Model\SslCertificateResponse**](../Model/SslCertificateResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
