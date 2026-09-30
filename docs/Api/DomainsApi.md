# Shellrent\Sdk\DomainsApi

Domains

All URIs are relative to https://api.shellrent.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**activateDomainDnssec()**](DomainsApi.md#activateDomainDnssec) | **POST** /api/v3/domains/{domain_id}/dnssec | Activate DNSSEC |
| [**applyDomainContactChanges()**](DomainsApi.md#applyDomainContactChanges) | **POST** /api/v3/domains/{domain_id}/contacts/apply | Apply contacts changes |
| [**canActivateDomainDnssec()**](DomainsApi.md#canActivateDomainDnssec) | **GET** /api/v3/domains/{domain_id}/dnssec/can-activate | Can activate DNSSEC |
| [**canChangeDomainNameservers()**](DomainsApi.md#canChangeDomainNameservers) | **GET** /api/v3/domains/{domain_id}/dns/can-change-nameservers | Can change Nameservers |
| [**canDeactivateDomainDnssec()**](DomainsApi.md#canDeactivateDomainDnssec) | **GET** /api/v3/domains/{domain_id}/dnssec/can-deactivate | Can deactivate DNSSEC |
| [**checkDomainAvailability()**](DomainsApi.md#checkDomainAvailability) | **GET** /api/v3/domains/availability | Domain whois |
| [**createDomainDnsRecord()**](DomainsApi.md#createDomainDnsRecord) | **POST** /api/v3/domains/{domain_id}/dns/records | Create DNS record |
| [**deactivateDomainDnssec()**](DomainsApi.md#deactivateDomainDnssec) | **DELETE** /api/v3/domains/{domain_id}/dnssec | Deactivate DNSSEC |
| [**deleteDomainDnsRecord()**](DomainsApi.md#deleteDomainDnsRecord) | **DELETE** /api/v3/domains/{domain_id}/dns/records/{record_id} | Delete DNS record |
| [**getDomain()**](DomainsApi.md#getDomain) | **GET** /api/v3/domains/{domain_id} | Get domain |
| [**getDomainContact()**](DomainsApi.md#getDomainContact) | **GET** /api/v3/domains/{domain_id}/contacts/{domain_contact_id} | Get a contact |
| [**getDomainDnsRecord()**](DomainsApi.md#getDomainDnsRecord) | **GET** /api/v3/domains/{domain_id}/dns/records/{record_id} | Get DNS record |
| [**getDomainDnsZone()**](DomainsApi.md#getDomainDnsZone) | **GET** /api/v3/domains/{domain_id}/dns | DNS Zone |
| [**getDomainDnssec()**](DomainsApi.md#getDomainDnssec) | **GET** /api/v3/domains/{domain_id}/dnssec | DNSSEC |
| [**listDomainContacts()**](DomainsApi.md#listDomainContacts) | **GET** /api/v3/domains/{domain_id}/contacts | List domain contacts |
| [**listDomainDnsRecords()**](DomainsApi.md#listDomainDnsRecords) | **GET** /api/v3/domains/{domain_id}/dns/records | List DNS records |
| [**listDomains()**](DomainsApi.md#listDomains) | **GET** /api/v3/domains | List domains |
| [**setDomainCloudflareNameservers()**](DomainsApi.md#setDomainCloudflareNameservers) | **PUT** /api/v3/domains/{domain_id}/dns/cloudflare | Nameservers: Cloudflare |
| [**setDomainExternalNameservers()**](DomainsApi.md#setDomainExternalNameservers) | **PATCH** /api/v3/domains/{domain_id}/dns/change-nameservers | Nameservers: external |
| [**setDomainStandardNameservers()**](DomainsApi.md#setDomainStandardNameservers) | **PUT** /api/v3/domains/{domain_id}/dns/standard | Nameservers: standard |
| [**updateDomainContact()**](DomainsApi.md#updateDomainContact) | **PATCH** /api/v3/domains/{domain_id}/contacts/{domain_contact_id} | Modify contact |
| [**updateDomainDnsRecord()**](DomainsApi.md#updateDomainDnsRecord) | **PATCH** /api/v3/domains/{domain_id}/dns/records/{record_id} | Modify DNS record |
| [**updateDomainDnsZone()**](DomainsApi.md#updateDomainDnsZone) | **PATCH** /api/v3/domains/{domain_id}/dns | Change DNS Zone data |
| [**updateDomainDnssec()**](DomainsApi.md#updateDomainDnssec) | **PATCH** /api/v3/domains/{domain_id}/dnssec | Change DNSSEC data |


## `activateDomainDnssec()`

```php
activateDomainDnssec($domain_id): \Shellrent\Sdk\Model\TaskResponse
```

Activate DNSSEC

Activate DNSSEC (for domains with \"standard\" nameservers only)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\DomainsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain_id = 56; // int

try {
    $result = $apiInstance->activateDomainDnssec($domain_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainsApi->activateDomainDnssec: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain_id** | **int**|  | |

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

## `applyDomainContactChanges()`

```php
applyDomainContactChanges($domain_id): \Shellrent\Sdk\Model\EmptyResponse
```

Apply contacts changes

Apply changes made on contacts to the domain (send changes to domain's Registry)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\DomainsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain_id = 56; // int

try {
    $result = $apiInstance->applyDomainContactChanges($domain_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainsApi->applyDomainContactChanges: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain_id** | **int**|  | |

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

## `canActivateDomainDnssec()`

```php
canActivateDomainDnssec($domain_id): \Shellrent\Sdk\Model\DomainDnssecCanActivateResponse
```

Can activate DNSSEC

Know if it's possible to activate DNSSEC

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\DomainsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain_id = 56; // int

try {
    $result = $apiInstance->canActivateDomainDnssec($domain_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainsApi->canActivateDomainDnssec: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain_id** | **int**|  | |

### Return type

[**\Shellrent\Sdk\Model\DomainDnssecCanActivateResponse**](../Model/DomainDnssecCanActivateResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `canChangeDomainNameservers()`

```php
canChangeDomainNameservers($domain_id): \Shellrent\Sdk\Model\DomainCanChangeNameserversResponse
```

Can change Nameservers

Know if it's possible to change Nameservers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\DomainsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain_id = 56; // int

try {
    $result = $apiInstance->canChangeDomainNameservers($domain_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainsApi->canChangeDomainNameservers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain_id** | **int**|  | |

### Return type

[**\Shellrent\Sdk\Model\DomainCanChangeNameserversResponse**](../Model/DomainCanChangeNameserversResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `canDeactivateDomainDnssec()`

```php
canDeactivateDomainDnssec($domain_id): \Shellrent\Sdk\Model\DomainDnssecCanDeactivateResponse
```

Can deactivate DNSSEC

Know if it's possible to deactivate DNSSEC

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\DomainsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain_id = 56; // int

try {
    $result = $apiInstance->canDeactivateDomainDnssec($domain_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainsApi->canDeactivateDomainDnssec: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain_id** | **int**|  | |

### Return type

[**\Shellrent\Sdk\Model\DomainDnssecCanDeactivateResponse**](../Model/DomainDnssecCanDeactivateResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `checkDomainAvailability()`

```php
checkDomainAvailability($domain_full_name): \Shellrent\Sdk\Model\DomainAvailabilityResponse
```

Domain whois

Search availability status for a domain (whois)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\DomainsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain_full_name = 'domain_full_name_example'; // string | Punycode full domain name (with TLD extension)

try {
    $result = $apiInstance->checkDomainAvailability($domain_full_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainsApi->checkDomainAvailability: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain_full_name** | **string**| Punycode full domain name (with TLD extension) | [optional] |

### Return type

[**\Shellrent\Sdk\Model\DomainAvailabilityResponse**](../Model/DomainAvailabilityResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createDomainDnsRecord()`

```php
createDomainDnsRecord($domain_id, $domain_dns_record_request): \Shellrent\Sdk\Model\DnsRecordResponse
```

Create DNS record

Create a new DNS record

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\DomainsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain_id = 56; // int
$domain_dns_record_request = new \Shellrent\Sdk\Model\DomainDnsRecordRequest(); // \Shellrent\Sdk\Model\DomainDnsRecordRequest

try {
    $result = $apiInstance->createDomainDnsRecord($domain_id, $domain_dns_record_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainsApi->createDomainDnsRecord: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain_id** | **int**|  | |
| **domain_dns_record_request** | [**\Shellrent\Sdk\Model\DomainDnsRecordRequest**](../Model/DomainDnsRecordRequest.md)|  | |

### Return type

[**\Shellrent\Sdk\Model\DnsRecordResponse**](../Model/DnsRecordResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deactivateDomainDnssec()`

```php
deactivateDomainDnssec($domain_id): \Shellrent\Sdk\Model\TaskResponse
```

Deactivate DNSSEC

Deactivate DNSSEC (for domains with \"standard\" nameservers) or remove all DNSSEC data records (for domains with \"external\" nameservers)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\DomainsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain_id = 56; // int

try {
    $result = $apiInstance->deactivateDomainDnssec($domain_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainsApi->deactivateDomainDnssec: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain_id** | **int**|  | |

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

## `deleteDomainDnsRecord()`

```php
deleteDomainDnsRecord($domain_id, $record_id): \Shellrent\Sdk\Model\EmptyResponse
```

Delete DNS record

Delete an existing DNS record

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\DomainsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain_id = 56; // int
$record_id = 'record_id_example'; // string

try {
    $result = $apiInstance->deleteDomainDnsRecord($domain_id, $record_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainsApi->deleteDomainDnsRecord: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain_id** | **int**|  | |
| **record_id** | **string**|  | |

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

## `getDomain()`

```php
getDomain($domain_id): \Shellrent\Sdk\Model\DomainResponse
```

Get domain

Get a domain

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\DomainsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain_id = 56; // int

try {
    $result = $apiInstance->getDomain($domain_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainsApi->getDomain: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain_id** | **int**|  | |

### Return type

[**\Shellrent\Sdk\Model\DomainResponse**](../Model/DomainResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDomainContact()`

```php
getDomainContact($domain_id, $domain_contact_id): \Shellrent\Sdk\Model\DomainContactResponse
```

Get a contact

Get a contact of domain

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\DomainsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain_id = 56; // int
$domain_contact_id = 56; // int

try {
    $result = $apiInstance->getDomainContact($domain_id, $domain_contact_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainsApi->getDomainContact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain_id** | **int**|  | |
| **domain_contact_id** | **int**|  | |

### Return type

[**\Shellrent\Sdk\Model\DomainContactResponse**](../Model/DomainContactResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDomainDnsRecord()`

```php
getDomainDnsRecord($domain_id, $record_id): \Shellrent\Sdk\Model\DnsRecordResponse
```

Get DNS record

Get a DNS record

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\DomainsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain_id = 56; // int
$record_id = 'record_id_example'; // string

try {
    $result = $apiInstance->getDomainDnsRecord($domain_id, $record_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainsApi->getDomainDnsRecord: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain_id** | **int**|  | |
| **record_id** | **string**|  | |

### Return type

[**\Shellrent\Sdk\Model\DnsRecordResponse**](../Model/DnsRecordResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDomainDnsZone()`

```php
getDomainDnsZone($domain_id): \Shellrent\Sdk\Model\DnsZoneResponse
```

DNS Zone

DNS Zone details

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\DomainsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain_id = 56; // int

try {
    $result = $apiInstance->getDomainDnsZone($domain_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainsApi->getDomainDnsZone: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain_id** | **int**|  | |

### Return type

[**\Shellrent\Sdk\Model\DnsZoneResponse**](../Model/DnsZoneResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDomainDnssec()`

```php
getDomainDnssec($domain_id): \Shellrent\Sdk\Model\DomainDnssecResponse
```

DNSSEC

Get DNSSEC data records

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\DomainsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain_id = 56; // int

try {
    $result = $apiInstance->getDomainDnssec($domain_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainsApi->getDomainDnssec: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain_id** | **int**|  | |

### Return type

[**\Shellrent\Sdk\Model\DomainDnssecResponse**](../Model/DomainDnssecResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listDomainContacts()`

```php
listDomainContacts($domain_id): \Shellrent\Sdk\Model\DomainContactListResponse
```

List domain contacts

Get all contacts of domain

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\DomainsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain_id = 56; // int

try {
    $result = $apiInstance->listDomainContacts($domain_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainsApi->listDomainContacts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain_id** | **int**|  | |

### Return type

[**\Shellrent\Sdk\Model\DomainContactListResponse**](../Model/DomainContactListResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listDomainDnsRecords()`

```php
listDomainDnsRecords($domain_id, $type, $host, $destination, $page, $per_page): \Shellrent\Sdk\Model\DnsRecordPaginatedListResponse
```

List DNS records

Get a list of all DNS Records. The results are paginated but the pagination does not have information about the total number of items and the total number of pages. Only forward pages navigation is supported.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\DomainsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain_id = 56; // int
$type = 'type_example'; // string | Search by record type
$host = 'host_example'; // string | Search by record host (partial match)
$destination = 'destination_example'; // string | Search by record destination (partial match)
$page = 1; // int
$per_page = 20; // int

try {
    $result = $apiInstance->listDomainDnsRecords($domain_id, $type, $host, $destination, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainsApi->listDomainDnsRecords: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain_id** | **int**|  | |
| **type** | **string**| Search by record type | [optional] |
| **host** | **string**| Search by record host (partial match) | [optional] |
| **destination** | **string**| Search by record destination (partial match) | [optional] |
| **page** | **int**|  | [optional] [default to 1] |
| **per_page** | **int**|  | [optional] [default to 20] |

### Return type

[**\Shellrent\Sdk\Model\DnsRecordPaginatedListResponse**](../Model/DnsRecordPaginatedListResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listDomains()`

```php
listDomains($domain_full_name, $domain_name, $tld_id, $tld_extension, $page, $per_page): \Shellrent\Sdk\Model\DomainPaginatedListResponse
```

List domains

Get a list of all Domains

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\DomainsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain_full_name = 'domain_full_name_example'; // string | Search by punycode domain name (exact match)
$domain_name = 'domain_name_example'; // string | Search by punycode domain name (partial)
$tld_id = 56; // int | Obtain all domains by ID of TLD
$tld_extension = 'tld_extension_example'; // string | Obtain all domains by TLD extension (punycode)
$page = 1; // int
$per_page = 20; // int

try {
    $result = $apiInstance->listDomains($domain_full_name, $domain_name, $tld_id, $tld_extension, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainsApi->listDomains: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain_full_name** | **string**| Search by punycode domain name (exact match) | [optional] |
| **domain_name** | **string**| Search by punycode domain name (partial) | [optional] |
| **tld_id** | **int**| Obtain all domains by ID of TLD | [optional] |
| **tld_extension** | **string**| Obtain all domains by TLD extension (punycode) | [optional] |
| **page** | **int**|  | [optional] [default to 1] |
| **per_page** | **int**|  | [optional] [default to 20] |

### Return type

[**\Shellrent\Sdk\Model\DomainPaginatedListResponse**](../Model/DomainPaginatedListResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setDomainCloudflareNameservers()`

```php
setDomainCloudflareNameservers($domain_id, $domain_dns_nameservers_cloudflare_request): \Shellrent\Sdk\Model\TaskResponse
```

Nameservers: Cloudflare

Activate \"Cloudflare\" nameservers on domain

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\DomainsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain_id = 56; // int
$domain_dns_nameservers_cloudflare_request = new \Shellrent\Sdk\Model\DomainDnsNameserversCloudflareRequest(); // \Shellrent\Sdk\Model\DomainDnsNameserversCloudflareRequest

try {
    $result = $apiInstance->setDomainCloudflareNameservers($domain_id, $domain_dns_nameservers_cloudflare_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainsApi->setDomainCloudflareNameservers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain_id** | **int**|  | |
| **domain_dns_nameservers_cloudflare_request** | [**\Shellrent\Sdk\Model\DomainDnsNameserversCloudflareRequest**](../Model/DomainDnsNameserversCloudflareRequest.md)|  | |

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

## `setDomainExternalNameservers()`

```php
setDomainExternalNameservers($domain_id, $domain_dns_nameservers_change_request): \Shellrent\Sdk\Model\TaskResponse
```

Nameservers: external

Activate \"external\" nameservers or change current \"external\" nameservers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\DomainsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain_id = 56; // int
$domain_dns_nameservers_change_request = new \Shellrent\Sdk\Model\DomainDnsNameserversChangeRequest(); // \Shellrent\Sdk\Model\DomainDnsNameserversChangeRequest

try {
    $result = $apiInstance->setDomainExternalNameservers($domain_id, $domain_dns_nameservers_change_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainsApi->setDomainExternalNameservers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain_id** | **int**|  | |
| **domain_dns_nameservers_change_request** | [**\Shellrent\Sdk\Model\DomainDnsNameserversChangeRequest**](../Model/DomainDnsNameserversChangeRequest.md)|  | |

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

## `setDomainStandardNameservers()`

```php
setDomainStandardNameservers($domain_id): \Shellrent\Sdk\Model\TaskResponse
```

Nameservers: standard

Activate \"standard\" nameservers on domain

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\DomainsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain_id = 56; // int

try {
    $result = $apiInstance->setDomainStandardNameservers($domain_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainsApi->setDomainStandardNameservers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain_id** | **int**|  | |

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

## `updateDomainContact()`

```php
updateDomainContact($domain_id, $domain_contact_id, $domain_contact_request): \Shellrent\Sdk\Model\DomainContactResponse
```

Modify contact

Modify a contact's data

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\DomainsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain_id = 56; // int
$domain_contact_id = 56; // int
$domain_contact_request = new \Shellrent\Sdk\Model\DomainContactRequest(); // \Shellrent\Sdk\Model\DomainContactRequest

try {
    $result = $apiInstance->updateDomainContact($domain_id, $domain_contact_id, $domain_contact_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainsApi->updateDomainContact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain_id** | **int**|  | |
| **domain_contact_id** | **int**|  | |
| **domain_contact_request** | [**\Shellrent\Sdk\Model\DomainContactRequest**](../Model/DomainContactRequest.md)|  | |

### Return type

[**\Shellrent\Sdk\Model\DomainContactResponse**](../Model/DomainContactResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateDomainDnsRecord()`

```php
updateDomainDnsRecord($domain_id, $record_id, $domain_dns_record_change_request): \Shellrent\Sdk\Model\DnsRecordResponse
```

Modify DNS record

Modify an existing DNS record

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\DomainsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain_id = 56; // int
$record_id = 'record_id_example'; // string
$domain_dns_record_change_request = new \Shellrent\Sdk\Model\DomainDnsRecordChangeRequest(); // \Shellrent\Sdk\Model\DomainDnsRecordChangeRequest

try {
    $result = $apiInstance->updateDomainDnsRecord($domain_id, $record_id, $domain_dns_record_change_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainsApi->updateDomainDnsRecord: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain_id** | **int**|  | |
| **record_id** | **string**|  | |
| **domain_dns_record_change_request** | [**\Shellrent\Sdk\Model\DomainDnsRecordChangeRequest**](../Model/DomainDnsRecordChangeRequest.md)|  | |

### Return type

[**\Shellrent\Sdk\Model\DnsRecordResponse**](../Model/DnsRecordResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateDomainDnsZone()`

```php
updateDomainDnsZone($domain_id, $domain_dns_zone_request): \Shellrent\Sdk\Model\DnsZoneResponse
```

Change DNS Zone data

Change DNS Zone data

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\DomainsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain_id = 56; // int
$domain_dns_zone_request = new \Shellrent\Sdk\Model\DomainDnsZoneRequest(); // \Shellrent\Sdk\Model\DomainDnsZoneRequest

try {
    $result = $apiInstance->updateDomainDnsZone($domain_id, $domain_dns_zone_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainsApi->updateDomainDnsZone: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain_id** | **int**|  | |
| **domain_dns_zone_request** | [**\Shellrent\Sdk\Model\DomainDnsZoneRequest**](../Model/DomainDnsZoneRequest.md)|  | |

### Return type

[**\Shellrent\Sdk\Model\DnsZoneResponse**](../Model/DnsZoneResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateDomainDnssec()`

```php
updateDomainDnssec($domain_id, $domain_dnssec_request): \Shellrent\Sdk\Model\TaskResponse
```

Change DNSSEC data

Add or change DNSSEC data records (for domains with \"external\" nameservers only)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\DomainsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain_id = 56; // int
$domain_dnssec_request = new \Shellrent\Sdk\Model\DomainDnssecRequest(); // \Shellrent\Sdk\Model\DomainDnssecRequest

try {
    $result = $apiInstance->updateDomainDnssec($domain_id, $domain_dnssec_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainsApi->updateDomainDnssec: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain_id** | **int**|  | |
| **domain_dnssec_request** | [**\Shellrent\Sdk\Model\DomainDnssecRequest**](../Model/DomainDnssecRequest.md)|  | |

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
