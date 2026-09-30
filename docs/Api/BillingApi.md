# Shellrent\Sdk\BillingApi

Billing

All URIs are relative to https://api.shellrent.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**downloadCreditNotePdf()**](BillingApi.md#downloadCreditNotePdf) | **GET** /api/v3/creditnotes/{creditnote_id}/download/pdf | Download credit note PDF |
| [**downloadCreditNoteXml()**](BillingApi.md#downloadCreditNoteXml) | **GET** /api/v3/creditnotes/{creditnote_id}/download | Download credit note XML |
| [**downloadInvoicePdf()**](BillingApi.md#downloadInvoicePdf) | **GET** /api/v3/invoices/{invoice_id}/download/pdf | Download invoice PDF |
| [**downloadInvoiceXml()**](BillingApi.md#downloadInvoiceXml) | **GET** /api/v3/invoices/{invoice_id}/download | Download invoice XML |
| [**getCreditNote()**](BillingApi.md#getCreditNote) | **GET** /api/v3/creditnotes/{creditnote_id} | Get a Credit note |
| [**getCreditNoteRow()**](BillingApi.md#getCreditNoteRow) | **GET** /api/v3/creditnotes/{creditnote_id}/rows/{row_id} | Get a credit note row |
| [**getInvoice()**](BillingApi.md#getInvoice) | **GET** /api/v3/invoices/{invoice_id} | Get an invoice |
| [**getInvoiceRow()**](BillingApi.md#getInvoiceRow) | **GET** /api/v3/invoices/{invoice_id}/rows/{row_id} | Get an invoice row |
| [**listCreditNoteRows()**](BillingApi.md#listCreditNoteRows) | **GET** /api/v3/creditnotes/{creditnote_id}/rows | List all credit note rows |
| [**listCreditNotes()**](BillingApi.md#listCreditNotes) | **GET** /api/v3/creditnotes | List all Credit notes |
| [**listInvoiceRows()**](BillingApi.md#listInvoiceRows) | **GET** /api/v3/invoices/{invoice_id}/rows | List all invoice rows |
| [**listInvoices()**](BillingApi.md#listInvoices) | **GET** /api/v3/invoices | List all Invoices |


## `downloadCreditNotePdf()`

```php
downloadCreditNotePdf($creditnote_id): \SplFileObject
```

Download credit note PDF

Download the courtesy PDF file of a Credit note

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$creditnote_id = 56; // int

try {
    $result = $apiInstance->downloadCreditNotePdf($creditnote_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->downloadCreditNotePdf: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **creditnote_id** | **int**|  | |

### Return type

**\SplFileObject**

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/pdf`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `downloadCreditNoteXml()`

```php
downloadCreditNoteXml($creditnote_id, $prefer_xml): \SplFileObject
```

Download credit note XML

Download the XML file of a Credit note

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$creditnote_id = 56; // int
$prefer_xml = True; // bool | If the credit note is signed, the original p7m file is returned; to force the download of the XML version, set this parameter to true

try {
    $result = $apiInstance->downloadCreditNoteXml($creditnote_id, $prefer_xml);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->downloadCreditNoteXml: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **creditnote_id** | **int**|  | |
| **prefer_xml** | **bool**| If the credit note is signed, the original p7m file is returned; to force the download of the XML version, set this parameter to true | [optional] |

### Return type

**\SplFileObject**

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/xml`, `application/x-pkcs7-mime`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `downloadInvoicePdf()`

```php
downloadInvoicePdf($invoice_id): \SplFileObject
```

Download invoice PDF

Download the courtesy PDF file of an Invoice

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invoice_id = 56; // int

try {
    $result = $apiInstance->downloadInvoicePdf($invoice_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->downloadInvoicePdf: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **invoice_id** | **int**|  | |

### Return type

**\SplFileObject**

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/pdf`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `downloadInvoiceXml()`

```php
downloadInvoiceXml($invoice_id, $prefer_xml): \SplFileObject
```

Download invoice XML

Download the XML file of an Invoice

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invoice_id = 56; // int
$prefer_xml = True; // bool | If the invoice is signed, the original p7m file is returned; to force the download of the XML version, set this parameter to true

try {
    $result = $apiInstance->downloadInvoiceXml($invoice_id, $prefer_xml);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->downloadInvoiceXml: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **invoice_id** | **int**|  | |
| **prefer_xml** | **bool**| If the invoice is signed, the original p7m file is returned; to force the download of the XML version, set this parameter to true | [optional] |

### Return type

**\SplFileObject**

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/xml`, `application/x-pkcs7-mime`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCreditNote()`

```php
getCreditNote($creditnote_id): \Shellrent\Sdk\Model\CreditnoteResponse
```

Get a Credit note

Get details of a credit note

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$creditnote_id = 56; // int

try {
    $result = $apiInstance->getCreditNote($creditnote_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->getCreditNote: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **creditnote_id** | **int**|  | |

### Return type

[**\Shellrent\Sdk\Model\CreditnoteResponse**](../Model/CreditnoteResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCreditNoteRow()`

```php
getCreditNoteRow($creditnote_id, $row_id): \Shellrent\Sdk\Model\CreditnoteRowResponse
```

Get a credit note row

Get details of a Credit note row

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$creditnote_id = 56; // int
$row_id = 56; // int

try {
    $result = $apiInstance->getCreditNoteRow($creditnote_id, $row_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->getCreditNoteRow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **creditnote_id** | **int**|  | |
| **row_id** | **int**|  | |

### Return type

[**\Shellrent\Sdk\Model\CreditnoteRowResponse**](../Model/CreditnoteRowResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getInvoice()`

```php
getInvoice($invoice_id): \Shellrent\Sdk\Model\InvoiceResponse
```

Get an invoice

Get details of an invoice

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invoice_id = 56; // int

try {
    $result = $apiInstance->getInvoice($invoice_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->getInvoice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **invoice_id** | **int**|  | |

### Return type

[**\Shellrent\Sdk\Model\InvoiceResponse**](../Model/InvoiceResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getInvoiceRow()`

```php
getInvoiceRow($invoice_id, $row_id): \Shellrent\Sdk\Model\InvoiceRowResponse
```

Get an invoice row

Get details of an Invoice row

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invoice_id = 56; // int
$row_id = 56; // int

try {
    $result = $apiInstance->getInvoiceRow($invoice_id, $row_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->getInvoiceRow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **invoice_id** | **int**|  | |
| **row_id** | **int**|  | |

### Return type

[**\Shellrent\Sdk\Model\InvoiceRowResponse**](../Model/InvoiceRowResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCreditNoteRows()`

```php
listCreditNoteRows($creditnote_id): \Shellrent\Sdk\Model\CreditnoteRowListResponse
```

List all credit note rows

Get the list of all the rows of a Credit Note

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$creditnote_id = 56; // int

try {
    $result = $apiInstance->listCreditNoteRows($creditnote_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->listCreditNoteRows: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **creditnote_id** | **int**|  | |

### Return type

[**\Shellrent\Sdk\Model\CreditnoteRowListResponse**](../Model/CreditnoteRowListResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCreditNotes()`

```php
listCreditNotes($date_emission_from, $date_emission_to, $page, $per_page): \Shellrent\Sdk\Model\CreditnotePaginatedListResponse
```

List all Credit notes

Get a list of all Credit notes

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$date_emission_from = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$date_emission_to = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$page = 1; // int
$per_page = 20; // int

try {
    $result = $apiInstance->listCreditNotes($date_emission_from, $date_emission_to, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->listCreditNotes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **date_emission_from** | **\DateTime**|  | [optional] |
| **date_emission_to** | **\DateTime**|  | [optional] |
| **page** | **int**|  | [optional] [default to 1] |
| **per_page** | **int**|  | [optional] [default to 20] |

### Return type

[**\Shellrent\Sdk\Model\CreditnotePaginatedListResponse**](../Model/CreditnotePaginatedListResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listInvoiceRows()`

```php
listInvoiceRows($invoice_id): \Shellrent\Sdk\Model\InvoiceRowListResponse
```

List all invoice rows

Get the list of all the rows of an Invoice

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invoice_id = 56; // int

try {
    $result = $apiInstance->listInvoiceRows($invoice_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->listInvoiceRows: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **invoice_id** | **int**|  | |

### Return type

[**\Shellrent\Sdk\Model\InvoiceRowListResponse**](../Model/InvoiceRowListResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listInvoices()`

```php
listInvoices($date_emission_from, $date_emission_to, $payed, $page, $per_page): \Shellrent\Sdk\Model\InvoicePaginatedListResponse
```

List all Invoices

Get a list of all Invoices

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$date_emission_from = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$date_emission_to = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$payed = True; // bool
$page = 1; // int
$per_page = 20; // int

try {
    $result = $apiInstance->listInvoices($date_emission_from, $date_emission_to, $payed, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->listInvoices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **date_emission_from** | **\DateTime**|  | [optional] |
| **date_emission_to** | **\DateTime**|  | [optional] |
| **payed** | **bool**|  | [optional] |
| **page** | **int**|  | [optional] [default to 1] |
| **per_page** | **int**|  | [optional] [default to 20] |

### Return type

[**\Shellrent\Sdk\Model\InvoicePaginatedListResponse**](../Model/InvoicePaginatedListResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
