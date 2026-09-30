# Shellrent\Sdk\PaymentApi

Payment

All URIs are relative to https://api.shellrent.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**activateOneClickAutorenew()**](PaymentApi.md#activateOneClickAutorenew) | **POST** /api/v3/one-clicks/autorenew | Activate One-Click autorenew |
| [**activatePrepaidCreditAutorenew()**](PaymentApi.md#activatePrepaidCreditAutorenew) | **POST** /api/v3/prepaid-credit/autorenew | Activate Prepaid credit autorenew |
| [**createPrepaidCreditTopup()**](PaymentApi.md#createPrepaidCreditTopup) | **POST** /api/v3/prepaid-credit/topups | Topup Prepaid credit |
| [**getOneClick()**](PaymentApi.md#getOneClick) | **GET** /api/v3/one-clicks/{one_click_id} | Get a One-Click |
| [**getOneClickAutorenew()**](PaymentApi.md#getOneClickAutorenew) | **GET** /api/v3/one-clicks/autorenew | Get autorenew status |
| [**getPayment()**](PaymentApi.md#getPayment) | **GET** /api/v3/payments/{payment_id} | Get a payment |
| [**getPrepaidCredit()**](PaymentApi.md#getPrepaidCredit) | **GET** /api/v3/prepaid-credit | Prepaid credit account |
| [**getPrepaidCreditOperation()**](PaymentApi.md#getPrepaidCreditOperation) | **GET** /api/v3/prepaid-credit/operations/{operation_id} | Get a Prepaid credit operation |
| [**getPrepaidCreditTopup()**](PaymentApi.md#getPrepaidCreditTopup) | **GET** /api/v3/prepaid-credit/topups/{topup_id} | Get a Prepaid credit topup |
| [**listOneClicks()**](PaymentApi.md#listOneClicks) | **GET** /api/v3/one-clicks | List all One-Clicks |
| [**listPayments()**](PaymentApi.md#listPayments) | **GET** /api/v3/payments | List all Payments |
| [**listPrepaidCreditOperations()**](PaymentApi.md#listPrepaidCreditOperations) | **GET** /api/v3/prepaid-credit/operations | List all Prepaid credit operations |
| [**listPrepaidCreditTopups()**](PaymentApi.md#listPrepaidCreditTopups) | **GET** /api/v3/prepaid-credit/topups | List all topups |
| [**revokeOneClickAutorenew()**](PaymentApi.md#revokeOneClickAutorenew) | **DELETE** /api/v3/one-clicks/autorenew | Revoke One-Click autorenew |
| [**revokePrepaidCreditAutorenew()**](PaymentApi.md#revokePrepaidCreditAutorenew) | **DELETE** /api/v3/prepaid-credit/autorenew | Revoke Prepaid credit autorenew |


## `activateOneClickAutorenew()`

```php
activateOneClickAutorenew(): \Shellrent\Sdk\Model\OneClickAutorenewResponse
```

Activate One-Click autorenew

Activate automatic renewal service with One-Click Payment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\PaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->activateOneClickAutorenew();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentApi->activateOneClickAutorenew: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Shellrent\Sdk\Model\OneClickAutorenewResponse**](../Model/OneClickAutorenewResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `activatePrepaidCreditAutorenew()`

```php
activatePrepaidCreditAutorenew(): \Shellrent\Sdk\Model\PrepaidCreditResponse
```

Activate Prepaid credit autorenew

Activate automatic renewal service with  Prepaid credit

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\PaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->activatePrepaidCreditAutorenew();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentApi->activatePrepaidCreditAutorenew: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Shellrent\Sdk\Model\PrepaidCreditResponse**](../Model/PrepaidCreditResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createPrepaidCreditTopup()`

```php
createPrepaidCreditTopup($buy_prepaid_credit_topup_request): \Shellrent\Sdk\Model\OrderListResponse
```

Topup Prepaid credit

Topup Prepaid credit

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\PaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$buy_prepaid_credit_topup_request = new \Shellrent\Sdk\Model\BuyPrepaidCreditTopupRequest(); // \Shellrent\Sdk\Model\BuyPrepaidCreditTopupRequest

try {
    $result = $apiInstance->createPrepaidCreditTopup($buy_prepaid_credit_topup_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentApi->createPrepaidCreditTopup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **buy_prepaid_credit_topup_request** | [**\Shellrent\Sdk\Model\BuyPrepaidCreditTopupRequest**](../Model/BuyPrepaidCreditTopupRequest.md)|  | |

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

## `getOneClick()`

```php
getOneClick($one_click_id): \Shellrent\Sdk\Model\OneClickResponse
```

Get a One-Click

Get details of an active One-Click Payment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\PaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$one_click_id = 56; // int

try {
    $result = $apiInstance->getOneClick($one_click_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentApi->getOneClick: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **one_click_id** | **int**|  | |

### Return type

[**\Shellrent\Sdk\Model\OneClickResponse**](../Model/OneClickResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOneClickAutorenew()`

```php
getOneClickAutorenew(): \Shellrent\Sdk\Model\OneClickAutorenewResponse
```

Get autorenew status

Get the status of the automatic renewal service with One-Click Payment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\PaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getOneClickAutorenew();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentApi->getOneClickAutorenew: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Shellrent\Sdk\Model\OneClickAutorenewResponse**](../Model/OneClickAutorenewResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPayment()`

```php
getPayment($payment_id): \Shellrent\Sdk\Model\PaymentResponse
```

Get a payment

Get details of a payment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\PaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payment_id = 56; // int

try {
    $result = $apiInstance->getPayment($payment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentApi->getPayment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **payment_id** | **int**|  | |

### Return type

[**\Shellrent\Sdk\Model\PaymentResponse**](../Model/PaymentResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPrepaidCredit()`

```php
getPrepaidCredit(): \Shellrent\Sdk\Model\PrepaidCreditResponse
```

Prepaid credit account

Get details of the Prepaid Credit for the account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\PaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getPrepaidCredit();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentApi->getPrepaidCredit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Shellrent\Sdk\Model\PrepaidCreditResponse**](../Model/PrepaidCreditResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPrepaidCreditOperation()`

```php
getPrepaidCreditOperation($operation_id): \Shellrent\Sdk\Model\PrepaidCreditOperationResponse
```

Get a Prepaid credit operation

Get details of a Prepaid credit operation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\PaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$operation_id = 56; // int

try {
    $result = $apiInstance->getPrepaidCreditOperation($operation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentApi->getPrepaidCreditOperation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **operation_id** | **int**|  | |

### Return type

[**\Shellrent\Sdk\Model\PrepaidCreditOperationResponse**](../Model/PrepaidCreditOperationResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPrepaidCreditTopup()`

```php
getPrepaidCreditTopup($topup_id): \Shellrent\Sdk\Model\PrepaidCreditTopupResponse
```

Get a Prepaid credit topup

Get details of a Prepaid credit topup

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\PaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$topup_id = 56; // int

try {
    $result = $apiInstance->getPrepaidCreditTopup($topup_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentApi->getPrepaidCreditTopup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **topup_id** | **int**|  | |

### Return type

[**\Shellrent\Sdk\Model\PrepaidCreditTopupResponse**](../Model/PrepaidCreditTopupResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listOneClicks()`

```php
listOneClicks($payment_method, $date_created_from, $date_created_to, $page, $per_page): \Shellrent\Sdk\Model\OneClickPaginatedListResponse
```

List all One-Clicks

Get a list of all active One-Click Payments

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\PaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payment_method = 'payment_method_example'; // string
$date_created_from = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$date_created_to = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$page = 1; // int
$per_page = 20; // int

try {
    $result = $apiInstance->listOneClicks($payment_method, $date_created_from, $date_created_to, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentApi->listOneClicks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **payment_method** | **string**|  | [optional] |
| **date_created_from** | **\DateTime**|  | [optional] |
| **date_created_to** | **\DateTime**|  | [optional] |
| **page** | **int**|  | [optional] [default to 1] |
| **per_page** | **int**|  | [optional] [default to 20] |

### Return type

[**\Shellrent\Sdk\Model\OneClickPaginatedListResponse**](../Model/OneClickPaginatedListResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listPayments()`

```php
listPayments($payment_method, $date_payment_from, $date_payment_to, $page, $per_page): \Shellrent\Sdk\Model\PaymentPaginatedListResponse
```

List all Payments

Get a list of all Payments

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\PaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payment_method = 'payment_method_example'; // string
$date_payment_from = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$date_payment_to = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$page = 1; // int
$per_page = 20; // int

try {
    $result = $apiInstance->listPayments($payment_method, $date_payment_from, $date_payment_to, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentApi->listPayments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **payment_method** | **string**|  | [optional] |
| **date_payment_from** | **\DateTime**|  | [optional] |
| **date_payment_to** | **\DateTime**|  | [optional] |
| **page** | **int**|  | [optional] [default to 1] |
| **per_page** | **int**|  | [optional] [default to 20] |

### Return type

[**\Shellrent\Sdk\Model\PaymentPaginatedListResponse**](../Model/PaymentPaginatedListResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listPrepaidCreditOperations()`

```php
listPrepaidCreditOperations($date_created_from, $date_created_to, $page, $per_page): \Shellrent\Sdk\Model\PrepaidCreditOperationPaginatedListResponse
```

List all Prepaid credit operations

Get a list of all Prepaid credit operations

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\PaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$date_created_from = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$date_created_to = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$page = 1; // int
$per_page = 20; // int

try {
    $result = $apiInstance->listPrepaidCreditOperations($date_created_from, $date_created_to, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentApi->listPrepaidCreditOperations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **date_created_from** | **\DateTime**|  | [optional] |
| **date_created_to** | **\DateTime**|  | [optional] |
| **page** | **int**|  | [optional] [default to 1] |
| **per_page** | **int**|  | [optional] [default to 20] |

### Return type

[**\Shellrent\Sdk\Model\PrepaidCreditOperationPaginatedListResponse**](../Model/PrepaidCreditOperationPaginatedListResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listPrepaidCreditTopups()`

```php
listPrepaidCreditTopups($invoice_id, $with_current_credit, $refund_expired, $credit_expired, $date_created_from, $date_created_to, $page, $per_page): \Shellrent\Sdk\Model\PrepaidCreditTopupPaginatedListResponse
```

List all topups

Get a list of all Prepaid credit topups

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\PaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invoice_id = 56; // int
$with_current_credit = True; // bool
$refund_expired = True; // bool
$credit_expired = True; // bool
$date_created_from = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$date_created_to = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$page = 1; // int
$per_page = 20; // int

try {
    $result = $apiInstance->listPrepaidCreditTopups($invoice_id, $with_current_credit, $refund_expired, $credit_expired, $date_created_from, $date_created_to, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentApi->listPrepaidCreditTopups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **invoice_id** | **int**|  | [optional] |
| **with_current_credit** | **bool**|  | [optional] |
| **refund_expired** | **bool**|  | [optional] |
| **credit_expired** | **bool**|  | [optional] |
| **date_created_from** | **\DateTime**|  | [optional] |
| **date_created_to** | **\DateTime**|  | [optional] |
| **page** | **int**|  | [optional] [default to 1] |
| **per_page** | **int**|  | [optional] [default to 20] |

### Return type

[**\Shellrent\Sdk\Model\PrepaidCreditTopupPaginatedListResponse**](../Model/PrepaidCreditTopupPaginatedListResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `revokeOneClickAutorenew()`

```php
revokeOneClickAutorenew(): \Shellrent\Sdk\Model\EmptyResponse
```

Revoke One-Click autorenew

Revoke automatic renewal service with One-Click Payment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\PaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->revokeOneClickAutorenew();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentApi->revokeOneClickAutorenew: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

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

## `revokePrepaidCreditAutorenew()`

```php
revokePrepaidCreditAutorenew(): \Shellrent\Sdk\Model\PrepaidCreditResponse
```

Revoke Prepaid credit autorenew

Revoke automatic renewal service with  Prepaid credit

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\PaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->revokePrepaidCreditAutorenew();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentApi->revokePrepaidCreditAutorenew: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Shellrent\Sdk\Model\PrepaidCreditResponse**](../Model/PrepaidCreditResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
