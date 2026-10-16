# Shellrent\Sdk\PaymentApi

Payment

All URIs are relative to https://api.shellrent.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**activateOneClickAutorenew()**](PaymentApi.md#activateOneClickAutorenew) | **POST** /api/v3/one-clicks/auto-renewal | Activate One-Click autorenew |
| [**activatePrepaidCreditAutorenew()**](PaymentApi.md#activatePrepaidCreditAutorenew) | **POST** /api/v3/prepaid-credit/auto-renewal | Activate Prepaid credit autorenew |
| [**createOneClickPayment()**](PaymentApi.md#createOneClickPayment) | **POST** /api/v3/payments/one-click | Pay orders with One-Click |
| [**createPrepaidCreditPayment()**](PaymentApi.md#createPrepaidCreditPayment) | **POST** /api/v3/payments/prepaid-credit | Pay orders with the prepaid credit |
| [**createPrepaidCreditTopup()**](PaymentApi.md#createPrepaidCreditTopup) | **POST** /api/v3/prepaid-credit/top-ups | Topup Prepaid credit |
| [**getOneClick()**](PaymentApi.md#getOneClick) | **GET** /api/v3/one-clicks/{one_click_id} | Get a One-Click |
| [**getOneClickAutorenew()**](PaymentApi.md#getOneClickAutorenew) | **GET** /api/v3/one-clicks/auto-renewal | Get autorenew status |
| [**getPayment()**](PaymentApi.md#getPayment) | **GET** /api/v3/payments/{payment_id} | Get a payment |
| [**getPrepaidCredit()**](PaymentApi.md#getPrepaidCredit) | **GET** /api/v3/prepaid-credit | Prepaid credit account |
| [**getPrepaidCreditOperation()**](PaymentApi.md#getPrepaidCreditOperation) | **GET** /api/v3/prepaid-credit/operations/{operation_id} | Get a Prepaid credit operation |
| [**getPrepaidCreditTopup()**](PaymentApi.md#getPrepaidCreditTopup) | **GET** /api/v3/prepaid-credit/top-ups/{top_up_id} | Get a Prepaid credit topup |
| [**listOneClicks()**](PaymentApi.md#listOneClicks) | **GET** /api/v3/one-clicks | List all One-Clicks |
| [**listPayments()**](PaymentApi.md#listPayments) | **GET** /api/v3/payments | List all Payments |
| [**listPrepaidCreditOperations()**](PaymentApi.md#listPrepaidCreditOperations) | **GET** /api/v3/prepaid-credit/operations | List all Prepaid credit operations |
| [**listPrepaidCreditTopups()**](PaymentApi.md#listPrepaidCreditTopups) | **GET** /api/v3/prepaid-credit/top-ups | List all topups |
| [**revokeOneClickAutorenew()**](PaymentApi.md#revokeOneClickAutorenew) | **DELETE** /api/v3/one-clicks/auto-renewal | Revoke One-Click autorenew |
| [**revokePrepaidCreditAutorenew()**](PaymentApi.md#revokePrepaidCreditAutorenew) | **DELETE** /api/v3/prepaid-credit/auto-renewal | Revoke Prepaid credit autorenew |


## `activateOneClickAutorenew()`

```php
activateOneClickAutorenew(): \Shellrent\Sdk\Model\OneClickAutorenewResponse
```

Activate One-Click autorenew

Activate automatic renewal service with One-Click Payment  Not available to sub-accounts: the response is 403 (error 1601).

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

Activate automatic renewal service with  Prepaid credit  Not available to sub-accounts: the response is 403 (error 1601).

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

## `createOneClickPayment()`

```php
createOneClickPayment($one_click_payment_create_request): \Shellrent\Sdk\Model\PaymentResponse
```

Pay orders with One-Click

Pays one or more orders together with a One-Click payment method: the one in `one_click_id` or, without it, the default one (the first active method in the order chosen by the customer). Only that method is tried: when the provider declines the payment the response is 402, with the message of the provider, and the orders are still to be paid. When there is nothing to pay (total 0.00) the orders are confirmed without a payment and the response is 204. The response is 409 when payments are not possible at this time, the orders cannot be paid together, there is no active One-Click payment method, or the payment exceeds the payment limits allowed at this time (for example in the evening).  Not available to sub-accounts: the response is 403 (error 1601).

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
$one_click_payment_create_request = new \Shellrent\Sdk\Model\OneClickPaymentCreateRequest(); // \Shellrent\Sdk\Model\OneClickPaymentCreateRequest

try {
    $result = $apiInstance->createOneClickPayment($one_click_payment_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentApi->createOneClickPayment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **one_click_payment_create_request** | [**\Shellrent\Sdk\Model\OneClickPaymentCreateRequest**](../Model/OneClickPaymentCreateRequest.md)|  | |

### Return type

[**\Shellrent\Sdk\Model\PaymentResponse**](../Model/PaymentResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createPrepaidCreditPayment()`

```php
createPrepaidCreditPayment($prepaid_credit_payment_create_request): \Shellrent\Sdk\Model\PaymentResponse
```

Pay orders with the prepaid credit

Pays one or more orders together with the prepaid credit. When there is nothing to pay (total 0.00) the orders are confirmed without a payment and the response is 204. The response is 409 when payments are not possible at this time, the orders cannot be paid together, the prepaid credit cannot be used for them (for example because it is not enough), or the payment exceeds the payment limits allowed at this time.  Not available to sub-accounts: the response is 403 (error 1601).

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
$prepaid_credit_payment_create_request = new \Shellrent\Sdk\Model\PrepaidCreditPaymentCreateRequest(); // \Shellrent\Sdk\Model\PrepaidCreditPaymentCreateRequest

try {
    $result = $apiInstance->createPrepaidCreditPayment($prepaid_credit_payment_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentApi->createPrepaidCreditPayment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **prepaid_credit_payment_create_request** | [**\Shellrent\Sdk\Model\PrepaidCreditPaymentCreateRequest**](../Model/PrepaidCreditPaymentCreateRequest.md)|  | |

### Return type

[**\Shellrent\Sdk\Model\PaymentResponse**](../Model/PaymentResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createPrepaidCreditTopup()`

```php
createPrepaidCreditTopup($buy_prepaid_credit_topup_request): \Shellrent\Sdk\Model\OrderListResponse
```

Topup Prepaid credit

Topup Prepaid credit  Not available to sub-accounts: the response is 403 (error 1601).

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

Get details of an active One-Click Payment  Not available to sub-accounts: the response is 403 (error 1601).

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
$one_click_id = 56; // int | ID of the One-Click payment

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
| **one_click_id** | **int**| ID of the One-Click payment | |

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

Get the status of the automatic renewal service with One-Click Payment  Not available to sub-accounts: the response is 403 (error 1601).

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

Get details of a payment  Not available to sub-accounts: the response is 403 (error 1601).

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
$payment_id = 56; // int | ID of the payment

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
| **payment_id** | **int**| ID of the payment | |

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

Get details of the Prepaid Credit for the account  Not available to sub-accounts: the response is 403 (error 1601).

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

Get details of a Prepaid credit operation  Not available to sub-accounts: the response is 403 (error 1601).

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
$operation_id = 56; // int | ID of the prepaid credit operation

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
| **operation_id** | **int**| ID of the prepaid credit operation | |

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
getPrepaidCreditTopup($top_up_id): \Shellrent\Sdk\Model\PrepaidCreditTopupResponse
```

Get a Prepaid credit topup

Get details of a Prepaid credit topup  Not available to sub-accounts: the response is 403 (error 1601).

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
$top_up_id = 56; // int | ID of the prepaid credit top-up

try {
    $result = $apiInstance->getPrepaidCreditTopup($top_up_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentApi->getPrepaidCreditTopup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **top_up_id** | **int**| ID of the prepaid credit top-up | |

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

Get a list of all active One-Click Payments  Not available to sub-accounts: the response is 403 (error 1601).

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
$payment_method = 'payment_method_example'; // string | Only the One-Clicks of this payment method, as in the `payment_method` field
$date_created_from = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Only the One-Clicks created at or after this time (ISO 8601 UTC: YYYY-MM-DDTHH:MM:SSZ)
$date_created_to = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Only the One-Clicks created at or before this time (ISO 8601 UTC: YYYY-MM-DDTHH:MM:SSZ)
$page = 1; // int | Page number, starting from 1. A page beyond the last one returns an empty `data` list (with the requested `page` in `meta`).
$per_page = 20; // int | Number of items per page. Values outside the allowed range are rejected with a validation error.

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
| **payment_method** | **string**| Only the One-Clicks of this payment method, as in the &#x60;payment_method&#x60; field | [optional] |
| **date_created_from** | **\DateTime**| Only the One-Clicks created at or after this time (ISO 8601 UTC: YYYY-MM-DDTHH:MM:SSZ) | [optional] |
| **date_created_to** | **\DateTime**| Only the One-Clicks created at or before this time (ISO 8601 UTC: YYYY-MM-DDTHH:MM:SSZ) | [optional] |
| **page** | **int**| Page number, starting from 1. A page beyond the last one returns an empty &#x60;data&#x60; list (with the requested &#x60;page&#x60; in &#x60;meta&#x60;). | [optional] [default to 1] |
| **per_page** | **int**| Number of items per page. Values outside the allowed range are rejected with a validation error. | [optional] [default to 20] |

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

Get a list of all Payments  Not available to sub-accounts: the response is 403 (error 1601).

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
$payment_method = 'payment_method_example'; // string | Only the payments made with this payment method, as in the `payment_method` field
$date_payment_from = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Only the payments made at or after this time (ISO 8601 UTC: YYYY-MM-DDTHH:MM:SSZ)
$date_payment_to = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Only the payments made at or before this time (ISO 8601 UTC: YYYY-MM-DDTHH:MM:SSZ)
$page = 1; // int | Page number, starting from 1. A page beyond the last one returns an empty `data` list (with the requested `page` in `meta`).
$per_page = 20; // int | Number of items per page. Values outside the allowed range are rejected with a validation error.

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
| **payment_method** | **string**| Only the payments made with this payment method, as in the &#x60;payment_method&#x60; field | [optional] |
| **date_payment_from** | **\DateTime**| Only the payments made at or after this time (ISO 8601 UTC: YYYY-MM-DDTHH:MM:SSZ) | [optional] |
| **date_payment_to** | **\DateTime**| Only the payments made at or before this time (ISO 8601 UTC: YYYY-MM-DDTHH:MM:SSZ) | [optional] |
| **page** | **int**| Page number, starting from 1. A page beyond the last one returns an empty &#x60;data&#x60; list (with the requested &#x60;page&#x60; in &#x60;meta&#x60;). | [optional] [default to 1] |
| **per_page** | **int**| Number of items per page. Values outside the allowed range are rejected with a validation error. | [optional] [default to 20] |

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

Get a list of all Prepaid credit operations  Not available to sub-accounts: the response is 403 (error 1601).

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
$date_created_from = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Only the operations made at or after this time (ISO 8601 UTC: YYYY-MM-DDTHH:MM:SSZ)
$date_created_to = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Only the operations made at or before this time (ISO 8601 UTC: YYYY-MM-DDTHH:MM:SSZ)
$page = 1; // int | Page number, starting from 1. A page beyond the last one returns an empty `data` list (with the requested `page` in `meta`).
$per_page = 20; // int | Number of items per page. Values outside the allowed range are rejected with a validation error.

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
| **date_created_from** | **\DateTime**| Only the operations made at or after this time (ISO 8601 UTC: YYYY-MM-DDTHH:MM:SSZ) | [optional] |
| **date_created_to** | **\DateTime**| Only the operations made at or before this time (ISO 8601 UTC: YYYY-MM-DDTHH:MM:SSZ) | [optional] |
| **page** | **int**| Page number, starting from 1. A page beyond the last one returns an empty &#x60;data&#x60; list (with the requested &#x60;page&#x60; in &#x60;meta&#x60;). | [optional] [default to 1] |
| **per_page** | **int**| Number of items per page. Values outside the allowed range are rejected with a validation error. | [optional] [default to 20] |

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

Get a list of all Prepaid credit topups  Not available to sub-accounts: the response is 403 (error 1601).

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
$invoice_id = 56; // int | Only the top-ups of the invoice with this ID
$with_current_credit = True; // bool | true: only the top-ups with credit left; false: only those used up
$refund_expired = True; // bool | true: only the top-ups that can no longer be refunded; false: only those that still can
$credit_expired = True; // bool | true: only the top-ups whose credit has expired; false: only those whose credit is still valid
$date_created_from = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Only the top-ups made at or after this time (ISO 8601 UTC: YYYY-MM-DDTHH:MM:SSZ)
$date_created_to = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Only the top-ups made at or before this time (ISO 8601 UTC: YYYY-MM-DDTHH:MM:SSZ)
$page = 1; // int | Page number, starting from 1. A page beyond the last one returns an empty `data` list (with the requested `page` in `meta`).
$per_page = 20; // int | Number of items per page. Values outside the allowed range are rejected with a validation error.

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
| **invoice_id** | **int**| Only the top-ups of the invoice with this ID | [optional] |
| **with_current_credit** | **bool**| true: only the top-ups with credit left; false: only those used up | [optional] |
| **refund_expired** | **bool**| true: only the top-ups that can no longer be refunded; false: only those that still can | [optional] |
| **credit_expired** | **bool**| true: only the top-ups whose credit has expired; false: only those whose credit is still valid | [optional] |
| **date_created_from** | **\DateTime**| Only the top-ups made at or after this time (ISO 8601 UTC: YYYY-MM-DDTHH:MM:SSZ) | [optional] |
| **date_created_to** | **\DateTime**| Only the top-ups made at or before this time (ISO 8601 UTC: YYYY-MM-DDTHH:MM:SSZ) | [optional] |
| **page** | **int**| Page number, starting from 1. A page beyond the last one returns an empty &#x60;data&#x60; list (with the requested &#x60;page&#x60; in &#x60;meta&#x60;). | [optional] [default to 1] |
| **per_page** | **int**| Number of items per page. Values outside the allowed range are rejected with a validation error. | [optional] [default to 20] |

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
revokeOneClickAutorenew()
```

Revoke One-Click autorenew

Revoke automatic renewal service with One-Click Payment  Not available to sub-accounts: the response is 403 (error 1601).

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
    $apiInstance->revokeOneClickAutorenew();
} catch (Exception $e) {
    echo 'Exception when calling PaymentApi->revokeOneClickAutorenew: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

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

## `revokePrepaidCreditAutorenew()`

```php
revokePrepaidCreditAutorenew(): \Shellrent\Sdk\Model\PrepaidCreditResponse
```

Revoke Prepaid credit autorenew

Revoke automatic renewal service with  Prepaid credit  Not available to sub-accounts: the response is 403 (error 1601).

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
