# Shellrent\Sdk\SslApi

SSL Certificates

All URIs are relative to https://api.shellrent.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**canReissueSslCertificate()**](SslApi.md#canReissueSslCertificate) | **GET** /api/v3/ssl-certificates/{ssl_certificate_id}/can-reissue | Can reissue certificate |
| [**exportSslCertificate()**](SslApi.md#exportSslCertificate) | **POST** /api/v3/ssl-certificates/{ssl_certificate_id}/exports | Export SSL certificate keys |
| [**getSslCertificate()**](SslApi.md#getSslCertificate) | **GET** /api/v3/ssl-certificates/{ssl_certificate_id} | Get SSL certificate |
| [**getSslCertificateKeys()**](SslApi.md#getSslCertificateKeys) | **GET** /api/v3/ssl-certificates/{ssl_certificate_id}/keys | Get SSL certificate keys |
| [**listSslApproverEmails()**](SslApi.md#listSslApproverEmails) | **GET** /api/v3/ssl-certificates/approver-emails | Get approver emails list |
| [**listSslCertificateExportFormats()**](SslApi.md#listSslCertificateExportFormats) | **GET** /api/v3/ssl-certificates/{ssl_certificate_id}/export-formats | Get export formats |
| [**listSslCertificates()**](SslApi.md#listSslCertificates) | **GET** /api/v3/ssl-certificates | List all SSL Certificates |
| [**reissueSslCertificate()**](SslApi.md#reissueSslCertificate) | **POST** /api/v3/ssl-certificates/{ssl_certificate_id}/reissues | Reissue certificate |
| [**updateSslCertificateCsr()**](SslApi.md#updateSslCertificateCsr) | **PUT** /api/v3/ssl-certificates/{ssl_certificate_id}/csr | Change SSL certificate CSR |
| [**updateSslCertificateOwner()**](SslApi.md#updateSslCertificateOwner) | **PATCH** /api/v3/ssl-certificates/{ssl_certificate_id} | Edit SSL certificate owner |


## `canReissueSslCertificate()`

```php
canReissueSslCertificate($ssl_certificate_id): \Shellrent\Sdk\Model\SslCertificateCanReissueResponse
```

Can reissue certificate

Know if it's possible to reissue the SSL Certificate

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
$ssl_certificate_id = 56; // int | ID of the SSL certificate

try {
    $result = $apiInstance->canReissueSslCertificate($ssl_certificate_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SslApi->canReissueSslCertificate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ssl_certificate_id** | **int**| ID of the SSL certificate | |

### Return type

[**\Shellrent\Sdk\Model\SslCertificateCanReissueResponse**](../Model/SslCertificateCanReissueResponse.md)

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
exportSslCertificate($ssl_certificate_id, $ssl_certificate_export_request): \Shellrent\Sdk\Model\SslCertificateExportResponse
```

Export SSL certificate keys

Exports the certificate and its keys in the requested format, as a base64 encoded file. The format and, when needed, the passphrases travel in the request body. The formats that include the private key (PK, PK_CERT_CA, MULTI_ZIP) also require the ssl:secrets scope, otherwise the response is 403.

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
$ssl_certificate_id = 56; // int | ID of the SSL certificate
$ssl_certificate_export_request = new \Shellrent\Sdk\Model\SslCertificateExportRequest(); // \Shellrent\Sdk\Model\SslCertificateExportRequest

try {
    $result = $apiInstance->exportSslCertificate($ssl_certificate_id, $ssl_certificate_export_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SslApi->exportSslCertificate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ssl_certificate_id** | **int**| ID of the SSL certificate | |
| **ssl_certificate_export_request** | [**\Shellrent\Sdk\Model\SslCertificateExportRequest**](../Model/SslCertificateExportRequest.md)|  | |

### Return type

[**\Shellrent\Sdk\Model\SslCertificateExportResponse**](../Model/SslCertificateExportResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
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
$ssl_certificate_id = 56; // int | ID of the SSL certificate

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
| **ssl_certificate_id** | **int**| ID of the SSL certificate | |

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
$ssl_certificate_id = 56; // int | ID of the SSL certificate

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
| **ssl_certificate_id** | **int**| ID of the SSL certificate | |

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
$domain_name = 'domain_name_example'; // string | Domain name of the certificate

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
| **domain_name** | **string**| Domain name of the certificate | |

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
$ssl_certificate_id = 56; // int | ID of the SSL certificate

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
| **ssl_certificate_id** | **int**| ID of the SSL certificate | |

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
$page = 1; // int | Page number, starting from 1. A page beyond the last one returns an empty `data` list (with the requested `page` in `meta`).
$per_page = 20; // int | Number of items per page. Values outside the allowed range are rejected with a validation error.

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
| **page** | **int**| Page number, starting from 1. A page beyond the last one returns an empty &#x60;data&#x60; list (with the requested &#x60;page&#x60; in &#x60;meta&#x60;). | [optional] [default to 1] |
| **per_page** | **int**| Number of items per page. Values outside the allowed range are rejected with a validation error. | [optional] [default to 20] |

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

## `reissueSslCertificate()`

```php
reissueSslCertificate($ssl_certificate_id, $ssl_certificate_reemit_request): \Shellrent\Sdk\Model\TaskResponse
```

Reissue certificate

Asks for the SSL certificate to be reissued, optionally with a custom CSR or private key. The reissue must be allowed (see `GET /api/v3/ssl-certificates/{ssl_certificate_id}/can-reissue`), otherwise the response is 409; the operation is asynchronous and is returned as a Task.

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
$ssl_certificate_id = 56; // int | ID of the SSL certificate
$ssl_certificate_reemit_request = new \Shellrent\Sdk\Model\SslCertificateReemitRequest(); // \Shellrent\Sdk\Model\SslCertificateReemitRequest

try {
    $result = $apiInstance->reissueSslCertificate($ssl_certificate_id, $ssl_certificate_reemit_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SslApi->reissueSslCertificate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ssl_certificate_id** | **int**| ID of the SSL certificate | |
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

Sets a custom CSR for the certificate, after verifying it with the certificate supplier, and returns the CSR of the certificate; sending the current CSR changes nothing. The certificate is not reissued: see `POST /api/v3/ssl-certificates/{ssl_certificate_id}/reissues`

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
$ssl_certificate_id = 56; // int | ID of the SSL certificate
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
| **ssl_certificate_id** | **int**| ID of the SSL certificate | |
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

Changes the administrative contact of the certificate (the `admin_*` fields) and returns the certificate; only the fields sent change. The certificate already issued does not change: the CSRs we generate afterwards take the organization, city, state and country of the contact

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
$ssl_certificate_id = 56; // int | ID of the SSL certificate
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
| **ssl_certificate_id** | **int**| ID of the SSL certificate | |
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
