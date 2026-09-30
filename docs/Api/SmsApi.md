# Shellrent\Sdk\SmsApi

SMS

All URIs are relative to https://api.shellrent.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addSmsPhonebookContacts()**](SmsApi.md#addSmsPhonebookContacts) | **POST** /api/v3/sms/phonebooks/{phonebook_id}/contacts | Add contacts to Phonebook |
| [**canCancelSms()**](SmsApi.md#canCancelSms) | **GET** /api/v3/sms/{sms_id}/can-cancel | Can cancel SMS |
| [**canDeleteSms()**](SmsApi.md#canDeleteSms) | **GET** /api/v3/sms/{sms_id}/can-delete | Can delete SMS |
| [**cancelSms()**](SmsApi.md#cancelSms) | **PATCH** /api/v3/sms/{sms_id}/cancel | Cancel SMS sending |
| [**createSmsPhonebook()**](SmsApi.md#createSmsPhonebook) | **POST** /api/v3/sms/phonebooks | Create a Phonebook |
| [**deleteAllSmsPhonebookContacts()**](SmsApi.md#deleteAllSmsPhonebookContacts) | **DELETE** /api/v3/sms/phonebooks/{phonebook_id}/contacts | Remove all Contacts from Phonebook |
| [**deleteSms()**](SmsApi.md#deleteSms) | **DELETE** /api/v3/sms/{sms_id} | Delete SMS |
| [**deleteSmsPhonebook()**](SmsApi.md#deleteSmsPhonebook) | **DELETE** /api/v3/sms/phonebooks/{phonebook_id} | Delete a Phonebook |
| [**deleteSmsPhonebookContact()**](SmsApi.md#deleteSmsPhonebookContact) | **DELETE** /api/v3/sms/phonebooks/{phonebook_id}/contacts/{contact_id} | Remove a Contact from a Phonebook |
| [**getSms()**](SmsApi.md#getSms) | **GET** /api/v3/sms/{sms_id} | Get an SMS |
| [**getSmsCredit()**](SmsApi.md#getSmsCredit) | **GET** /api/v3/sms/account | SMS credit |
| [**getSmsMessage()**](SmsApi.md#getSmsMessage) | **GET** /api/v3/sms/{sms_id}/messages/{message_id} | Get an SMS message |
| [**getSmsPhonebook()**](SmsApi.md#getSmsPhonebook) | **GET** /api/v3/sms/phonebooks/{phonebook_id} | Get a Phonebook |
| [**getSmsPrice()**](SmsApi.md#getSmsPrice) | **GET** /api/v3/sms/countries/{country_code} | Get SMS price |
| [**listSms()**](SmsApi.md#listSms) | **GET** /api/v3/sms | List all SMS |
| [**listSmsMessages()**](SmsApi.md#listSmsMessages) | **GET** /api/v3/sms/{sms_id}/messages | List all messages of an SMS |
| [**listSmsPhonebookContacts()**](SmsApi.md#listSmsPhonebookContacts) | **GET** /api/v3/sms/phonebooks/{phonebook_id}/contacts | Phonebook Contacts |
| [**listSmsPhonebooks()**](SmsApi.md#listSmsPhonebooks) | **GET** /api/v3/sms/phonebooks | List all Phonebooks |
| [**listSmsPrices()**](SmsApi.md#listSmsPrices) | **GET** /api/v3/sms/countries | List SMS prices |
| [**replaceSmsPhonebookContacts()**](SmsApi.md#replaceSmsPhonebookContacts) | **PUT** /api/v3/sms/phonebooks/{phonebook_id}/contacts | Replace all Contacts in Phonebook |
| [**sendSms()**](SmsApi.md#sendSms) | **POST** /api/v3/sms | Send an SMS |
| [**updateSmsPhonebook()**](SmsApi.md#updateSmsPhonebook) | **PATCH** /api/v3/sms/phonebooks/{phonebook_id} | Edit a Phonebook |


## `addSmsPhonebookContacts()`

```php
addSmsPhonebookContacts($phonebook_id, $sms_phonebook_add_contacts_request): \Shellrent\Sdk\Model\SmsPhonebookResponse
```

Add contacts to Phonebook

Add one or more contacts to a Phonebook

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\SmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$phonebook_id = 56; // int
$sms_phonebook_add_contacts_request = new \Shellrent\Sdk\Model\SmsPhonebookAddContactsRequest(); // \Shellrent\Sdk\Model\SmsPhonebookAddContactsRequest

try {
    $result = $apiInstance->addSmsPhonebookContacts($phonebook_id, $sms_phonebook_add_contacts_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmsApi->addSmsPhonebookContacts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **phonebook_id** | **int**|  | |
| **sms_phonebook_add_contacts_request** | [**\Shellrent\Sdk\Model\SmsPhonebookAddContactsRequest**](../Model/SmsPhonebookAddContactsRequest.md)|  | |

### Return type

[**\Shellrent\Sdk\Model\SmsPhonebookResponse**](../Model/SmsPhonebookResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `canCancelSms()`

```php
canCancelSms($sms_id): \Shellrent\Sdk\Model\SmsCanCancelResponse
```

Can cancel SMS

Know if it's possible to cancel the sending of an SMS

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\SmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sms_id = 56; // int

try {
    $result = $apiInstance->canCancelSms($sms_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmsApi->canCancelSms: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sms_id** | **int**|  | |

### Return type

[**\Shellrent\Sdk\Model\SmsCanCancelResponse**](../Model/SmsCanCancelResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `canDeleteSms()`

```php
canDeleteSms($sms_id): \Shellrent\Sdk\Model\SmsCanDeleteResponse
```

Can delete SMS

Know if it's possible to permanently delete an SMS

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\SmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sms_id = 56; // int

try {
    $result = $apiInstance->canDeleteSms($sms_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmsApi->canDeleteSms: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sms_id** | **int**|  | |

### Return type

[**\Shellrent\Sdk\Model\SmsCanDeleteResponse**](../Model/SmsCanDeleteResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cancelSms()`

```php
cancelSms($sms_id): \Shellrent\Sdk\Model\SmsResponse
```

Cancel SMS sending

Cancel the sending of an SMS

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\SmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sms_id = 56; // int

try {
    $result = $apiInstance->cancelSms($sms_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmsApi->cancelSms: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sms_id** | **int**|  | |

### Return type

[**\Shellrent\Sdk\Model\SmsResponse**](../Model/SmsResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createSmsPhonebook()`

```php
createSmsPhonebook($sms_phonebook_create_request): \Shellrent\Sdk\Model\SmsPhonebookResponse
```

Create a Phonebook

Create a new Phonebook

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\SmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sms_phonebook_create_request = new \Shellrent\Sdk\Model\SmsPhonebookCreateRequest(); // \Shellrent\Sdk\Model\SmsPhonebookCreateRequest

try {
    $result = $apiInstance->createSmsPhonebook($sms_phonebook_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmsApi->createSmsPhonebook: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sms_phonebook_create_request** | [**\Shellrent\Sdk\Model\SmsPhonebookCreateRequest**](../Model/SmsPhonebookCreateRequest.md)|  | |

### Return type

[**\Shellrent\Sdk\Model\SmsPhonebookResponse**](../Model/SmsPhonebookResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAllSmsPhonebookContacts()`

```php
deleteAllSmsPhonebookContacts($phonebook_id): \Shellrent\Sdk\Model\EmptyResponse
```

Remove all Contacts from Phonebook

Removes all the Contacts from an existing Phonebook

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\SmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$phonebook_id = 56; // int

try {
    $result = $apiInstance->deleteAllSmsPhonebookContacts($phonebook_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmsApi->deleteAllSmsPhonebookContacts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **phonebook_id** | **int**|  | |

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

## `deleteSms()`

```php
deleteSms($sms_id): \Shellrent\Sdk\Model\EmptyResponse
```

Delete SMS

Permanently delete an SMS

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\SmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sms_id = 56; // int

try {
    $result = $apiInstance->deleteSms($sms_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmsApi->deleteSms: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sms_id** | **int**|  | |

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

## `deleteSmsPhonebook()`

```php
deleteSmsPhonebook($phonebook_id): \Shellrent\Sdk\Model\EmptyResponse
```

Delete a Phonebook

Delete a Phonebook

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\SmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$phonebook_id = 56; // int

try {
    $result = $apiInstance->deleteSmsPhonebook($phonebook_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmsApi->deleteSmsPhonebook: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **phonebook_id** | **int**|  | |

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

## `deleteSmsPhonebookContact()`

```php
deleteSmsPhonebookContact($phonebook_id, $contact_id): \Shellrent\Sdk\Model\EmptyResponse
```

Remove a Contact from a Phonebook

Remove a Contact from a Phonebook

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\SmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$phonebook_id = 56; // int
$contact_id = 56; // int

try {
    $result = $apiInstance->deleteSmsPhonebookContact($phonebook_id, $contact_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmsApi->deleteSmsPhonebookContact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **phonebook_id** | **int**|  | |
| **contact_id** | **int**|  | |

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

## `getSms()`

```php
getSms($sms_id): \Shellrent\Sdk\Model\SmsResponse
```

Get an SMS

Get details of an SMS

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\SmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sms_id = 56; // int

try {
    $result = $apiInstance->getSms($sms_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmsApi->getSms: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sms_id** | **int**|  | |

### Return type

[**\Shellrent\Sdk\Model\SmsResponse**](../Model/SmsResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSmsCredit()`

```php
getSmsCredit(): \Shellrent\Sdk\Model\SmsAccountResponse
```

SMS credit

Get SMS account credit details

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\SmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getSmsCredit();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmsApi->getSmsCredit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Shellrent\Sdk\Model\SmsAccountResponse**](../Model/SmsAccountResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSmsMessage()`

```php
getSmsMessage($sms_id, $message_id): \Shellrent\Sdk\Model\SmsMessageResponse
```

Get an SMS message

Get an SMS message details

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\SmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sms_id = 56; // int
$message_id = 56; // int

try {
    $result = $apiInstance->getSmsMessage($sms_id, $message_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmsApi->getSmsMessage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sms_id** | **int**|  | |
| **message_id** | **int**|  | |

### Return type

[**\Shellrent\Sdk\Model\SmsMessageResponse**](../Model/SmsMessageResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSmsPhonebook()`

```php
getSmsPhonebook($phonebook_id): \Shellrent\Sdk\Model\SmsPhonebookResponse
```

Get a Phonebook

Get details of a Phonebook

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\SmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$phonebook_id = 56; // int

try {
    $result = $apiInstance->getSmsPhonebook($phonebook_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmsApi->getSmsPhonebook: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **phonebook_id** | **int**|  | |

### Return type

[**\Shellrent\Sdk\Model\SmsPhonebookResponse**](../Model/SmsPhonebookResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSmsPrice()`

```php
getSmsPrice($country_code): \Shellrent\Sdk\Model\SmsPriceResponse
```

Get SMS price

Get the SMS price for a specific Country

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\SmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$country_code = 'country_code_example'; // string | Country ISO code, ie. \"IT\" for Italy, \"ES\" for Spain, etc.

try {
    $result = $apiInstance->getSmsPrice($country_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmsApi->getSmsPrice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **country_code** | **string**| Country ISO code, ie. \&quot;IT\&quot; for Italy, \&quot;ES\&quot; for Spain, etc. | |

### Return type

[**\Shellrent\Sdk\Model\SmsPriceResponse**](../Model/SmsPriceResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listSms()`

```php
listSms($sms_status, $date_created_from, $date_created_to, $page, $per_page): \Shellrent\Sdk\Model\SmsPaginatedListResponse
```

List all SMS

Get a list of all SMS

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\SmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sms_status = 'sms_status_example'; // string | Filter by SMS status
$date_created_from = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$date_created_to = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$page = 1; // int
$per_page = 20; // int

try {
    $result = $apiInstance->listSms($sms_status, $date_created_from, $date_created_to, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmsApi->listSms: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sms_status** | **string**| Filter by SMS status | [optional] |
| **date_created_from** | **\DateTime**|  | [optional] |
| **date_created_to** | **\DateTime**|  | [optional] |
| **page** | **int**|  | [optional] [default to 1] |
| **per_page** | **int**|  | [optional] [default to 20] |

### Return type

[**\Shellrent\Sdk\Model\SmsPaginatedListResponse**](../Model/SmsPaginatedListResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listSmsMessages()`

```php
listSmsMessages($sms_id): \Shellrent\Sdk\Model\SmsMessagePaginatedListResponse
```

List all messages of an SMS

Get a list of all messages of an SMS

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\SmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sms_id = 56; // int

try {
    $result = $apiInstance->listSmsMessages($sms_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmsApi->listSmsMessages: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sms_id** | **int**|  | |

### Return type

[**\Shellrent\Sdk\Model\SmsMessagePaginatedListResponse**](../Model/SmsMessagePaginatedListResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listSmsPhonebookContacts()`

```php
listSmsPhonebookContacts($phonebook_id, $page, $per_page): \Shellrent\Sdk\Model\SmsPhonebookContactPaginatedListResponse
```

Phonebook Contacts

Get a list of all Contacts of a Phonebook

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\SmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$phonebook_id = 56; // int
$page = 1; // int
$per_page = 20; // int

try {
    $result = $apiInstance->listSmsPhonebookContacts($phonebook_id, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmsApi->listSmsPhonebookContacts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **phonebook_id** | **int**|  | |
| **page** | **int**|  | [optional] [default to 1] |
| **per_page** | **int**|  | [optional] [default to 20] |

### Return type

[**\Shellrent\Sdk\Model\SmsPhonebookContactPaginatedListResponse**](../Model/SmsPhonebookContactPaginatedListResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listSmsPhonebooks()`

```php
listSmsPhonebooks($page, $per_page): \Shellrent\Sdk\Model\SmsPhonebookPaginatedListResponse
```

List all Phonebooks

Get a list of all Phonebooks

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\SmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int
$per_page = 20; // int

try {
    $result = $apiInstance->listSmsPhonebooks($page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmsApi->listSmsPhonebooks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**|  | [optional] [default to 1] |
| **per_page** | **int**|  | [optional] [default to 20] |

### Return type

[**\Shellrent\Sdk\Model\SmsPhonebookPaginatedListResponse**](../Model/SmsPhonebookPaginatedListResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listSmsPrices()`

```php
listSmsPrices(): \Shellrent\Sdk\Model\SmsPricePaginatedListResponse
```

List SMS prices

Get a list of all SMS prices for all supported Countries

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\SmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listSmsPrices();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmsApi->listSmsPrices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Shellrent\Sdk\Model\SmsPricePaginatedListResponse**](../Model/SmsPricePaginatedListResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `replaceSmsPhonebookContacts()`

```php
replaceSmsPhonebookContacts($phonebook_id, $sms_phonebook_add_contacts_request): \Shellrent\Sdk\Model\SmsPhonebookResponse
```

Replace all Contacts in Phonebook

Replaces all the Contacts in a Phonebook

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\SmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$phonebook_id = 56; // int
$sms_phonebook_add_contacts_request = new \Shellrent\Sdk\Model\SmsPhonebookAddContactsRequest(); // \Shellrent\Sdk\Model\SmsPhonebookAddContactsRequest

try {
    $result = $apiInstance->replaceSmsPhonebookContacts($phonebook_id, $sms_phonebook_add_contacts_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmsApi->replaceSmsPhonebookContacts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **phonebook_id** | **int**|  | |
| **sms_phonebook_add_contacts_request** | [**\Shellrent\Sdk\Model\SmsPhonebookAddContactsRequest**](../Model/SmsPhonebookAddContactsRequest.md)|  | |

### Return type

[**\Shellrent\Sdk\Model\SmsPhonebookResponse**](../Model/SmsPhonebookResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendSms()`

```php
sendSms($sms_create_request): \Shellrent\Sdk\Model\SmsResponse
```

Send an SMS

Send a new SMS

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\SmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sms_create_request = new \Shellrent\Sdk\Model\SmsCreateRequest(); // \Shellrent\Sdk\Model\SmsCreateRequest

try {
    $result = $apiInstance->sendSms($sms_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmsApi->sendSms: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sms_create_request** | [**\Shellrent\Sdk\Model\SmsCreateRequest**](../Model/SmsCreateRequest.md)|  | |

### Return type

[**\Shellrent\Sdk\Model\SmsResponse**](../Model/SmsResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateSmsPhonebook()`

```php
updateSmsPhonebook($phonebook_id, $sms_phonebook_edit_request): \Shellrent\Sdk\Model\SmsPhonebookResponse
```

Edit a Phonebook

Edit a Phonebook details

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\SmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$phonebook_id = 56; // int
$sms_phonebook_edit_request = new \Shellrent\Sdk\Model\SmsPhonebookEditRequest(); // \Shellrent\Sdk\Model\SmsPhonebookEditRequest

try {
    $result = $apiInstance->updateSmsPhonebook($phonebook_id, $sms_phonebook_edit_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmsApi->updateSmsPhonebook: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **phonebook_id** | **int**|  | |
| **sms_phonebook_edit_request** | [**\Shellrent\Sdk\Model\SmsPhonebookEditRequest**](../Model/SmsPhonebookEditRequest.md)|  | |

### Return type

[**\Shellrent\Sdk\Model\SmsPhonebookResponse**](../Model/SmsPhonebookResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
