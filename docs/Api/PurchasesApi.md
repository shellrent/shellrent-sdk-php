# Shellrent\Sdk\PurchasesApi

Purchases

All URIs are relative to https://api.shellrent.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**canAddPurchaseAdditional()**](PurchasesApi.md#canAddPurchaseAdditional) | **GET** /api/v3/purchases/{purchase_id}/can-add-additional | Can add additional purchase |
| [**canCancelPurchase()**](PurchasesApi.md#canCancelPurchase) | **GET** /api/v3/purchases/{purchase_id}/can-cancel | Can cancel |
| [**canChangePurchaseRecurrence()**](PurchasesApi.md#canChangePurchaseRecurrence) | **GET** /api/v3/purchases/{purchase_id}/can-change-recurrence | Can change recurrence |
| [**canChangePurchaseRenewStatus()**](PurchasesApi.md#canChangePurchaseRenewStatus) | **GET** /api/v3/purchases/{purchase_id}/can-change-renew-status | Can change \&quot;to renew\&quot; status |
| [**canChangePurchaseService()**](PurchasesApi.md#canChangePurchaseService) | **GET** /api/v3/purchases/{purchase_id}/can-change-service | Can change Service |
| [**canRenewPurchase()**](PurchasesApi.md#canRenewPurchase) | **GET** /api/v3/purchases/{purchase_id}/can-renew | Can renew |
| [**cancelPurchase()**](PurchasesApi.md#cancelPurchase) | **DELETE** /api/v3/purchases/{purchase_id} | Cancel purchase |
| [**changePurchaseRecurrence()**](PurchasesApi.md#changePurchaseRecurrence) | **PATCH** /api/v3/purchases/{purchase_id}/recurrence | Change recurrence |
| [**changePurchaseRenewStatus()**](PurchasesApi.md#changePurchaseRenewStatus) | **PATCH** /api/v3/purchases/{purchase_id}/renew-status | Change \&quot;to renew\&quot; status |
| [**completeTaskData()**](PurchasesApi.md#completeTaskData) | **POST** /api/v3/tasks/{task_id}/data | Complete task data |
| [**deletePurchaseBillingInfo()**](PurchasesApi.md#deletePurchaseBillingInfo) | **DELETE** /api/v3/purchases/{purchase_id}/billing-info | Delete billing info |
| [**deletePurchaseComment()**](PurchasesApi.md#deletePurchaseComment) | **DELETE** /api/v3/purchases/{purchase_id}/comment | Delete comment |
| [**getPurchase()**](PurchasesApi.md#getPurchase) | **GET** /api/v3/purchases/{purchase_id} | Get purchase |
| [**getTask()**](PurchasesApi.md#getTask) | **GET** /api/v3/tasks/{task_id} | Get task |
| [**listPurchases()**](PurchasesApi.md#listPurchases) | **GET** /api/v3/purchases | List purchases |
| [**listTasks()**](PurchasesApi.md#listTasks) | **GET** /api/v3/tasks | List purchases tasks |
| [**renewPurchase()**](PurchasesApi.md#renewPurchase) | **POST** /api/v3/purchases/{purchase_id}/renewals | Renew |
| [**updatePurchaseBillingInfo()**](PurchasesApi.md#updatePurchaseBillingInfo) | **PATCH** /api/v3/purchases/{purchase_id}/billing-info | Change billing info |
| [**updatePurchaseComment()**](PurchasesApi.md#updatePurchaseComment) | **PATCH** /api/v3/purchases/{purchase_id}/comment | Change comment |


## `canAddPurchaseAdditional()`

```php
canAddPurchaseAdditional($purchase_id): \Shellrent\Sdk\Model\PurchaseCanAddAdditionalResponse
```

Can add additional purchase

Know if it's possible to buy an additional purchase for the purchase.  Not available to sub-accounts: the response is 403 (error 1601).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\PurchasesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$purchase_id = 56; // int | ID of the purchase

try {
    $result = $apiInstance->canAddPurchaseAdditional($purchase_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchasesApi->canAddPurchaseAdditional: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **purchase_id** | **int**| ID of the purchase | |

### Return type

[**\Shellrent\Sdk\Model\PurchaseCanAddAdditionalResponse**](../Model/PurchaseCanAddAdditionalResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `canCancelPurchase()`

```php
canCancelPurchase($purchase_id): \Shellrent\Sdk\Model\PurchaseCanCancelResponse
```

Can cancel

Know if it's possible to cancel a purchase

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\PurchasesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$purchase_id = 56; // int | ID of the purchase

try {
    $result = $apiInstance->canCancelPurchase($purchase_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchasesApi->canCancelPurchase: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **purchase_id** | **int**| ID of the purchase | |

### Return type

[**\Shellrent\Sdk\Model\PurchaseCanCancelResponse**](../Model/PurchaseCanCancelResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `canChangePurchaseRecurrence()`

```php
canChangePurchaseRecurrence($purchase_id, $recurrence_id): \Shellrent\Sdk\Model\PurchaseCanChangeRecurrenceResponse
```

Can change recurrence

Know if it's possible to change the recurrence on purchase  Not available to sub-accounts: the response is 403 (error 1601).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\PurchasesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$purchase_id = 56; // int | ID of the purchase
$recurrence_id = 56; // int | ID of the recurrence to check

try {
    $result = $apiInstance->canChangePurchaseRecurrence($purchase_id, $recurrence_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchasesApi->canChangePurchaseRecurrence: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **purchase_id** | **int**| ID of the purchase | |
| **recurrence_id** | **int**| ID of the recurrence to check | |

### Return type

[**\Shellrent\Sdk\Model\PurchaseCanChangeRecurrenceResponse**](../Model/PurchaseCanChangeRecurrenceResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `canChangePurchaseRenewStatus()`

```php
canChangePurchaseRenewStatus($purchase_id, $status): \Shellrent\Sdk\Model\PurchaseCanChangeRenewStatusResponse
```

Can change \"to renew\" status

Know if it's possible to change the status of \"do_not_renew\" on purchase

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\PurchasesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$purchase_id = 56; // int | ID of the purchase
$status = True; // bool | Renew status to check: `true` to renew the purchase at expiry, `false` not to renew it (1/0, yes/no and on/off are accepted too)

try {
    $result = $apiInstance->canChangePurchaseRenewStatus($purchase_id, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchasesApi->canChangePurchaseRenewStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **purchase_id** | **int**| ID of the purchase | |
| **status** | **bool**| Renew status to check: &#x60;true&#x60; to renew the purchase at expiry, &#x60;false&#x60; not to renew it (1/0, yes/no and on/off are accepted too) | |

### Return type

[**\Shellrent\Sdk\Model\PurchaseCanChangeRenewStatusResponse**](../Model/PurchaseCanChangeRenewStatusResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `canChangePurchaseService()`

```php
canChangePurchaseService($purchase_id): \Shellrent\Sdk\Model\PurchaseCanChangeServiceResponse
```

Can change Service

Know if it's possible to change the service of the purchase. It also returns the collection of Services to which it is possible to make the change.  Not available to sub-accounts: the response is 403 (error 1601).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\PurchasesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$purchase_id = 56; // int | ID of the purchase

try {
    $result = $apiInstance->canChangePurchaseService($purchase_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchasesApi->canChangePurchaseService: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **purchase_id** | **int**| ID of the purchase | |

### Return type

[**\Shellrent\Sdk\Model\PurchaseCanChangeServiceResponse**](../Model/PurchaseCanChangeServiceResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `canRenewPurchase()`

```php
canRenewPurchase($purchase_id): \Shellrent\Sdk\Model\PurchaseCanRenewResponse
```

Can renew

Know if it's possible to renew a purchase  Not available to sub-accounts: the response is 403 (error 1601).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\PurchasesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$purchase_id = 56; // int | ID of the purchase

try {
    $result = $apiInstance->canRenewPurchase($purchase_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchasesApi->canRenewPurchase: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **purchase_id** | **int**| ID of the purchase | |

### Return type

[**\Shellrent\Sdk\Model\PurchaseCanRenewResponse**](../Model/PurchaseCanRenewResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cancelPurchase()`

```php
cancelPurchase($purchase_id)
```

Cancel purchase

Cancel a purchase (only on a \"New\" status purchase)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\PurchasesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$purchase_id = 56; // int | ID of the purchase

try {
    $apiInstance->cancelPurchase($purchase_id);
} catch (Exception $e) {
    echo 'Exception when calling PurchasesApi->cancelPurchase: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **purchase_id** | **int**| ID of the purchase | |

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

## `changePurchaseRecurrence()`

```php
changePurchaseRecurrence($purchase_id, $purchase_recurrence_change_request): \Shellrent\Sdk\Model\PurchaseResponse
```

Change recurrence

Change the recurrence on purchase  Not available to sub-accounts: the response is 403 (error 1601).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\PurchasesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$purchase_id = 56; // int | ID of the purchase
$purchase_recurrence_change_request = new \Shellrent\Sdk\Model\PurchaseRecurrenceChangeRequest(); // \Shellrent\Sdk\Model\PurchaseRecurrenceChangeRequest

try {
    $result = $apiInstance->changePurchaseRecurrence($purchase_id, $purchase_recurrence_change_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchasesApi->changePurchaseRecurrence: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **purchase_id** | **int**| ID of the purchase | |
| **purchase_recurrence_change_request** | [**\Shellrent\Sdk\Model\PurchaseRecurrenceChangeRequest**](../Model/PurchaseRecurrenceChangeRequest.md)|  | |

### Return type

[**\Shellrent\Sdk\Model\PurchaseResponse**](../Model/PurchaseResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `changePurchaseRenewStatus()`

```php
changePurchaseRenewStatus($purchase_id, $purchase_renew_status_change_request): \Shellrent\Sdk\Model\PurchaseResponse
```

Change \"to renew\" status

Change the status of \"do_not_renew\" on purchase

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\PurchasesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$purchase_id = 56; // int | ID of the purchase
$purchase_renew_status_change_request = new \Shellrent\Sdk\Model\PurchaseRenewStatusChangeRequest(); // \Shellrent\Sdk\Model\PurchaseRenewStatusChangeRequest

try {
    $result = $apiInstance->changePurchaseRenewStatus($purchase_id, $purchase_renew_status_change_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchasesApi->changePurchaseRenewStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **purchase_id** | **int**| ID of the purchase | |
| **purchase_renew_status_change_request** | [**\Shellrent\Sdk\Model\PurchaseRenewStatusChangeRequest**](../Model/PurchaseRenewStatusChangeRequest.md)|  | |

### Return type

[**\Shellrent\Sdk\Model\PurchaseResponse**](../Model/PurchaseResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `completeTaskData()`

```php
completeTaskData($task_id, $complete_task_data_request): \Shellrent\Sdk\Model\TaskResponse
```

Complete task data

Complete task with extra data

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\PurchasesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_id = 56; // int | ID of the task
$complete_task_data_request = new \Shellrent\Sdk\Model\CompleteTaskDataRequest(); // \Shellrent\Sdk\Model\CompleteTaskDataRequest

try {
    $result = $apiInstance->completeTaskData($task_id, $complete_task_data_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchasesApi->completeTaskData: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **task_id** | **int**| ID of the task | |
| **complete_task_data_request** | [**\Shellrent\Sdk\Model\CompleteTaskDataRequest**](../Model/CompleteTaskDataRequest.md)|  | |

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

## `deletePurchaseBillingInfo()`

```php
deletePurchaseBillingInfo($purchase_id): \Shellrent\Sdk\Model\PurchaseResponse
```

Delete billing info

Deletes all billing infos from purchase (ODA, CIG, CUP).  Not available to sub-accounts: the response is 403 (error 1601).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\PurchasesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$purchase_id = 56; // int | ID of the purchase

try {
    $result = $apiInstance->deletePurchaseBillingInfo($purchase_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchasesApi->deletePurchaseBillingInfo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **purchase_id** | **int**| ID of the purchase | |

### Return type

[**\Shellrent\Sdk\Model\PurchaseResponse**](../Model/PurchaseResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deletePurchaseComment()`

```php
deletePurchaseComment($purchase_id): \Shellrent\Sdk\Model\PurchaseResponse
```

Delete comment

Deletes the user's comment from purchase.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\PurchasesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$purchase_id = 56; // int | ID of the purchase

try {
    $result = $apiInstance->deletePurchaseComment($purchase_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchasesApi->deletePurchaseComment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **purchase_id** | **int**| ID of the purchase | |

### Return type

[**\Shellrent\Sdk\Model\PurchaseResponse**](../Model/PurchaseResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPurchase()`

```php
getPurchase($purchase_id): \Shellrent\Sdk\Model\PurchaseResponse
```

Get purchase

Get a purchase

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\PurchasesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$purchase_id = 56; // int | ID of the purchase

try {
    $result = $apiInstance->getPurchase($purchase_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchasesApi->getPurchase: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **purchase_id** | **int**| ID of the purchase | |

### Return type

[**\Shellrent\Sdk\Model\PurchaseResponse**](../Model/PurchaseResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTask()`

```php
getTask($task_id): \Shellrent\Sdk\Model\TaskResponse
```

Get task

Get a task

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\PurchasesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_id = 56; // int | ID of the task

try {
    $result = $apiInstance->getTask($task_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchasesApi->getTask: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **task_id** | **int**| ID of the task | |

### Return type

[**\Shellrent\Sdk\Model\TaskResponse**](../Model/TaskResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listPurchases()`

```php
listPurchases($alive_only, $suspended, $do_not_renew, $purchase_id_primary, $activation_date_from, $activation_date_to, $expire_date_from, $expire_date_to, $purchase_ids, $service_code, $service_category_code, $search, $page, $per_page): \Shellrent\Sdk\Model\PurchasePaginatedListResponse
```

List purchases

Get a list of all purchases

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\PurchasesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$alive_only = true; // bool | Only the alive purchases, not cancelled or terminated (default); false lists every purchase
$suspended = True; // bool | true: only the suspended purchases; false: only those not suspended
$do_not_renew = True; // bool | true: only the purchases that will not renew at expiry; false: only those that will
$purchase_id_primary = 56; // int | Only the secondary purchases of the primary purchase with this ID
$activation_date_from = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Only the purchases activated on or after this date (YYYY-MM-DD)
$activation_date_to = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Only the purchases activated on or before this date (YYYY-MM-DD)
$expire_date_from = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Only the purchases expiring on or after this date (YYYY-MM-DD)
$expire_date_to = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Only the purchases expiring on or before this date (YYYY-MM-DD)
$purchase_ids = array(56); // int[] | Comma-separated list of purchase IDs (e.g. `purchase_ids=1,2,3`)
$service_code = 'service_code_example'; // string | Only the purchases of the service with this code; 404 if the service does not exist
$service_category_code = 'service_category_code_example'; // string | Only the purchases of the services in the category with this code; 404 if the category does not exist
$search = 'search_example'; // string | Text to look for, also partially, in the name of the purchase, in the customer note and in the name of the service
$page = 1; // int | Page number, starting from 1. A page beyond the last one returns an empty `data` list (with the requested `page` in `meta`).
$per_page = 20; // int | Number of items per page. Values outside the allowed range are rejected with a validation error.

try {
    $result = $apiInstance->listPurchases($alive_only, $suspended, $do_not_renew, $purchase_id_primary, $activation_date_from, $activation_date_to, $expire_date_from, $expire_date_to, $purchase_ids, $service_code, $service_category_code, $search, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchasesApi->listPurchases: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **alive_only** | **bool**| Only the alive purchases, not cancelled or terminated (default); false lists every purchase | [optional] [default to true] |
| **suspended** | **bool**| true: only the suspended purchases; false: only those not suspended | [optional] |
| **do_not_renew** | **bool**| true: only the purchases that will not renew at expiry; false: only those that will | [optional] |
| **purchase_id_primary** | **int**| Only the secondary purchases of the primary purchase with this ID | [optional] |
| **activation_date_from** | **\DateTime**| Only the purchases activated on or after this date (YYYY-MM-DD) | [optional] |
| **activation_date_to** | **\DateTime**| Only the purchases activated on or before this date (YYYY-MM-DD) | [optional] |
| **expire_date_from** | **\DateTime**| Only the purchases expiring on or after this date (YYYY-MM-DD) | [optional] |
| **expire_date_to** | **\DateTime**| Only the purchases expiring on or before this date (YYYY-MM-DD) | [optional] |
| **purchase_ids** | [**int[]**](../Model/int.md)| Comma-separated list of purchase IDs (e.g. &#x60;purchase_ids&#x3D;1,2,3&#x60;) | [optional] |
| **service_code** | **string**| Only the purchases of the service with this code; 404 if the service does not exist | [optional] |
| **service_category_code** | **string**| Only the purchases of the services in the category with this code; 404 if the category does not exist | [optional] |
| **search** | **string**| Text to look for, also partially, in the name of the purchase, in the customer note and in the name of the service | [optional] |
| **page** | **int**| Page number, starting from 1. A page beyond the last one returns an empty &#x60;data&#x60; list (with the requested &#x60;page&#x60; in &#x60;meta&#x60;). | [optional] [default to 1] |
| **per_page** | **int**| Number of items per page. Values outside the allowed range are rejected with a validation error. | [optional] [default to 20] |

### Return type

[**\Shellrent\Sdk\Model\PurchasePaginatedListResponse**](../Model/PurchasePaginatedListResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listTasks()`

```php
listTasks($alive_only, $ask_user_error, $purchase_id, $page, $per_page): \Shellrent\Sdk\Model\TaskPaginatedListResponse
```

List purchases tasks

Get a list of all tasks on purchases

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\PurchasesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$alive_only = true; // bool | Only the tasks of alive purchases, not cancelled or terminated (default); false includes the tasks of every purchase
$ask_user_error = 'ask_user_error_example'; // string | Only the tasks whose `ask_user_error` is exactly this text: the error found in the data provided by the customer
$purchase_id = 56; // int | Only the tasks of the purchase with this ID
$page = 1; // int | Page number, starting from 1. A page beyond the last one returns an empty `data` list (with the requested `page` in `meta`).
$per_page = 20; // int | Number of items per page. Values outside the allowed range are rejected with a validation error.

try {
    $result = $apiInstance->listTasks($alive_only, $ask_user_error, $purchase_id, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchasesApi->listTasks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **alive_only** | **bool**| Only the tasks of alive purchases, not cancelled or terminated (default); false includes the tasks of every purchase | [optional] [default to true] |
| **ask_user_error** | **string**| Only the tasks whose &#x60;ask_user_error&#x60; is exactly this text: the error found in the data provided by the customer | [optional] |
| **purchase_id** | **int**| Only the tasks of the purchase with this ID | [optional] |
| **page** | **int**| Page number, starting from 1. A page beyond the last one returns an empty &#x60;data&#x60; list (with the requested &#x60;page&#x60; in &#x60;meta&#x60;). | [optional] [default to 1] |
| **per_page** | **int**| Number of items per page. Values outside the allowed range are rejected with a validation error. | [optional] [default to 20] |

### Return type

[**\Shellrent\Sdk\Model\TaskPaginatedListResponse**](../Model/TaskPaginatedListResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `renewPurchase()`

```php
renewPurchase($purchase_id): \Shellrent\Sdk\Model\OrderListResponse
```

Renew

Renew a purchase. It returns the orders created to renew the purchase (usually one order).  Not available to sub-accounts: the response is 403 (error 1601).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\PurchasesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$purchase_id = 56; // int | ID of the purchase

try {
    $result = $apiInstance->renewPurchase($purchase_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchasesApi->renewPurchase: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **purchase_id** | **int**| ID of the purchase | |

### Return type

[**\Shellrent\Sdk\Model\OrderListResponse**](../Model/OrderListResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updatePurchaseBillingInfo()`

```php
updatePurchaseBillingInfo($purchase_id, $purchase_billing_info_change_request): \Shellrent\Sdk\Model\PurchaseResponse
```

Change billing info

Changes the billing info on purchase (ODA, CIG, CUP, ...)  Not available to sub-accounts: the response is 403 (error 1601).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\PurchasesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$purchase_id = 56; // int | ID of the purchase
$purchase_billing_info_change_request = new \Shellrent\Sdk\Model\PurchaseBillingInfoChangeRequest(); // \Shellrent\Sdk\Model\PurchaseBillingInfoChangeRequest

try {
    $result = $apiInstance->updatePurchaseBillingInfo($purchase_id, $purchase_billing_info_change_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchasesApi->updatePurchaseBillingInfo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **purchase_id** | **int**| ID of the purchase | |
| **purchase_billing_info_change_request** | [**\Shellrent\Sdk\Model\PurchaseBillingInfoChangeRequest**](../Model/PurchaseBillingInfoChangeRequest.md)|  | |

### Return type

[**\Shellrent\Sdk\Model\PurchaseResponse**](../Model/PurchaseResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updatePurchaseComment()`

```php
updatePurchaseComment($purchase_id, $purchase_comment_change_request): \Shellrent\Sdk\Model\PurchaseResponse
```

Change comment

Change the user's comment on purchase (it is also reported on purchase's invoices).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\PurchasesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$purchase_id = 56; // int | ID of the purchase
$purchase_comment_change_request = new \Shellrent\Sdk\Model\PurchaseCommentChangeRequest(); // \Shellrent\Sdk\Model\PurchaseCommentChangeRequest

try {
    $result = $apiInstance->updatePurchaseComment($purchase_id, $purchase_comment_change_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchasesApi->updatePurchaseComment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **purchase_id** | **int**| ID of the purchase | |
| **purchase_comment_change_request** | [**\Shellrent\Sdk\Model\PurchaseCommentChangeRequest**](../Model/PurchaseCommentChangeRequest.md)|  | |

### Return type

[**\Shellrent\Sdk\Model\PurchaseResponse**](../Model/PurchaseResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
