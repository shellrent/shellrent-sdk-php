# Shellrent\Sdk\BillingApi

Billing

All URIs are relative to https://api.shellrent.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**downloadCreditNotePdf()**](BillingApi.md#downloadCreditNotePdf) | **GET** /api/v3/credit-notes/{credit_note_id}/pdf | Download credit note PDF |
| [**downloadCreditNoteXml()**](BillingApi.md#downloadCreditNoteXml) | **GET** /api/v3/credit-notes/{credit_note_id}/xml | Download credit note XML |
| [**downloadInvoicePdf()**](BillingApi.md#downloadInvoicePdf) | **GET** /api/v3/invoices/{invoice_id}/pdf | Download invoice PDF |
| [**downloadInvoiceXml()**](BillingApi.md#downloadInvoiceXml) | **GET** /api/v3/invoices/{invoice_id}/xml | Download invoice XML |
| [**getCreditNote()**](BillingApi.md#getCreditNote) | **GET** /api/v3/credit-notes/{credit_note_id} | Get a Credit note |
| [**getCreditNoteRow()**](BillingApi.md#getCreditNoteRow) | **GET** /api/v3/credit-notes/{credit_note_id}/rows/{row_id} | Get a credit note row |
| [**getInvoice()**](BillingApi.md#getInvoice) | **GET** /api/v3/invoices/{invoice_id} | Get an invoice |
| [**getInvoiceRow()**](BillingApi.md#getInvoiceRow) | **GET** /api/v3/invoices/{invoice_id}/rows/{row_id} | Get an invoice row |
| [**listCreditNoteRows()**](BillingApi.md#listCreditNoteRows) | **GET** /api/v3/credit-notes/{credit_note_id}/rows | List all credit note rows |
| [**listCreditNotes()**](BillingApi.md#listCreditNotes) | **GET** /api/v3/credit-notes | List all Credit notes |
| [**listInvoiceRows()**](BillingApi.md#listInvoiceRows) | **GET** /api/v3/invoices/{invoice_id}/rows | List all invoice rows |
| [**listInvoices()**](BillingApi.md#listInvoices) | **GET** /api/v3/invoices | List all Invoices |


## `downloadCreditNotePdf()`

```php
downloadCreditNotePdf($credit_note_id): \SplFileObject
```

Download credit note PDF

Download the courtesy PDF file of a Credit note  Not available to sub-accounts: the response is 403 (error 1601).

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
$credit_note_id = 56; // int | ID of the credit note

try {
    $result = $apiInstance->downloadCreditNotePdf($credit_note_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->downloadCreditNotePdf: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **credit_note_id** | **int**| ID of the credit note | |

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
downloadCreditNoteXml($credit_note_id, $prefer_xml): \SplFileObject
```

Download credit note XML

Download the XML file of a Credit note  Not available to sub-accounts: the response is 403 (error 1601).

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
$credit_note_id = 56; // int | ID of the credit note
$prefer_xml = True; // bool | If the credit note is signed, the original p7m file is returned; to force the download of the XML version, set this parameter to true

try {
    $result = $apiInstance->downloadCreditNoteXml($credit_note_id, $prefer_xml);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->downloadCreditNoteXml: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **credit_note_id** | **int**| ID of the credit note | |
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

Download the courtesy PDF file of an Invoice  Not available to sub-accounts: the response is 403 (error 1601).

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
$invoice_id = 56; // int | ID of the invoice

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
| **invoice_id** | **int**| ID of the invoice | |

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

Download the XML file of an Invoice  Not available to sub-accounts: the response is 403 (error 1601).

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
$invoice_id = 56; // int | ID of the invoice
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
| **invoice_id** | **int**| ID of the invoice | |
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
getCreditNote($credit_note_id): \Shellrent\Sdk\Model\CreditnoteResponse
```

Get a Credit note

Get details of a credit note  Not available to sub-accounts: the response is 403 (error 1601).

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
$credit_note_id = 56; // int | ID of the credit note

try {
    $result = $apiInstance->getCreditNote($credit_note_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->getCreditNote: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **credit_note_id** | **int**| ID of the credit note | |

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
getCreditNoteRow($credit_note_id, $row_id): \Shellrent\Sdk\Model\CreditnoteRowResponse
```

Get a credit note row

Get details of a Credit note row  Not available to sub-accounts: the response is 403 (error 1601).

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
$credit_note_id = 56; // int | ID of the credit note
$row_id = 56; // int | ID of the row

try {
    $result = $apiInstance->getCreditNoteRow($credit_note_id, $row_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->getCreditNoteRow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **credit_note_id** | **int**| ID of the credit note | |
| **row_id** | **int**| ID of the row | |

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

Get details of an invoice  Not available to sub-accounts: the response is 403 (error 1601).

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
$invoice_id = 56; // int | ID of the invoice

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
| **invoice_id** | **int**| ID of the invoice | |

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

Get details of an Invoice row  Not available to sub-accounts: the response is 403 (error 1601).

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
$invoice_id = 56; // int | ID of the invoice
$row_id = 56; // int | ID of the row

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
| **invoice_id** | **int**| ID of the invoice | |
| **row_id** | **int**| ID of the row | |

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
listCreditNoteRows($credit_note_id): \Shellrent\Sdk\Model\CreditnoteRowListResponse
```

List all credit note rows

Get the list of all the rows of a Credit Note  Not available to sub-accounts: the response is 403 (error 1601).

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
$credit_note_id = 56; // int | ID of the credit note

try {
    $result = $apiInstance->listCreditNoteRows($credit_note_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->listCreditNoteRows: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **credit_note_id** | **int**| ID of the credit note | |

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

Get a list of all Credit notes  Not available to sub-accounts: the response is 403 (error 1601).

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
$date_emission_from = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Only the credit notes issued on or after this date (YYYY-MM-DD)
$date_emission_to = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Only the credit notes issued on or before this date (YYYY-MM-DD)
$page = 1; // int | Page number, starting from 1. A page beyond the last one returns an empty `data` list (with the requested `page` in `meta`).
$per_page = 20; // int | Number of items per page. Values outside the allowed range are rejected with a validation error.

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
| **date_emission_from** | **\DateTime**| Only the credit notes issued on or after this date (YYYY-MM-DD) | [optional] |
| **date_emission_to** | **\DateTime**| Only the credit notes issued on or before this date (YYYY-MM-DD) | [optional] |
| **page** | **int**| Page number, starting from 1. A page beyond the last one returns an empty &#x60;data&#x60; list (with the requested &#x60;page&#x60; in &#x60;meta&#x60;). | [optional] [default to 1] |
| **per_page** | **int**| Number of items per page. Values outside the allowed range are rejected with a validation error. | [optional] [default to 20] |

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

Get the list of all the rows of an Invoice  Not available to sub-accounts: the response is 403 (error 1601).

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
$invoice_id = 56; // int | ID of the invoice

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
| **invoice_id** | **int**| ID of the invoice | |

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

Get a list of all Invoices  Not available to sub-accounts: the response is 403 (error 1601).

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
$date_emission_from = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Only the invoices issued on or after this date (YYYY-MM-DD)
$date_emission_to = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Only the invoices issued on or before this date (YYYY-MM-DD)
$payed = True; // bool | true: only the paid invoices; false: only the unpaid ones
$page = 1; // int | Page number, starting from 1. A page beyond the last one returns an empty `data` list (with the requested `page` in `meta`).
$per_page = 20; // int | Number of items per page. Values outside the allowed range are rejected with a validation error.

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
| **date_emission_from** | **\DateTime**| Only the invoices issued on or after this date (YYYY-MM-DD) | [optional] |
| **date_emission_to** | **\DateTime**| Only the invoices issued on or before this date (YYYY-MM-DD) | [optional] |
| **payed** | **bool**| true: only the paid invoices; false: only the unpaid ones | [optional] |
| **page** | **int**| Page number, starting from 1. A page beyond the last one returns an empty &#x60;data&#x60; list (with the requested &#x60;page&#x60; in &#x60;meta&#x60;). | [optional] [default to 1] |
| **per_page** | **int**| Number of items per page. Values outside the allowed range are rejected with a validation error. | [optional] [default to 20] |

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
