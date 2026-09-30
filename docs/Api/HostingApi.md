# Shellrent\Sdk\HostingApi

Web Hosting

All URIs are relative to https://api.shellrent.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createHostingAllowListEntry()**](HostingApi.md#createHostingAllowListEntry) | **POST** /api/v3/hostings/{hosting_id}/allow-lists | Create allow list entry |
| [**createHostingBlockListEntry()**](HostingApi.md#createHostingBlockListEntry) | **POST** /api/v3/hostings/{hosting_id}/block-lists | Create block list entry |
| [**createHostingCatchAll()**](HostingApi.md#createHostingCatchAll) | **POST** /api/v3/hostings/{hosting_id}/email/catch-all | Create catch-all alias |
| [**createHostingCronjob()**](HostingApi.md#createHostingCronjob) | **POST** /api/v3/hostings/{hosting_id}/cronjobs | Create hosting cronjob |
| [**createHostingDatabase()**](HostingApi.md#createHostingDatabase) | **POST** /api/v3/hostings/{hosting_id}/databases | Create hosting database |
| [**createHostingEmailAlias()**](HostingApi.md#createHostingEmailAlias) | **POST** /api/v3/hostings/{hosting_id}/email/aliases | Create hosting email alias |
| [**createHostingModSecurityRule()**](HostingApi.md#createHostingModSecurityRule) | **POST** /api/v3/hostings/{hosting_id}/modsecurity/rules | Create ModSecurity rule |
| [**createHostingSubdomain()**](HostingApi.md#createHostingSubdomain) | **POST** /api/v3/hostings/{hosting_id} | Create subdomain |
| [**deleteAllHostingModSecurityRules()**](HostingApi.md#deleteAllHostingModSecurityRules) | **DELETE** /api/v3/hostings/{hosting_id}/modsecurity/rules | Delete all ModSecurity rules |
| [**deleteHostingAllowListEntry()**](HostingApi.md#deleteHostingAllowListEntry) | **DELETE** /api/v3/hostings/{hosting_id}/allow-lists/{allow_list_id} | Delete allow list entry |
| [**deleteHostingBlockListEntry()**](HostingApi.md#deleteHostingBlockListEntry) | **DELETE** /api/v3/hostings/{hosting_id}/block-lists/{block_list_id} | Delete block list entry |
| [**deleteHostingCatchAll()**](HostingApi.md#deleteHostingCatchAll) | **DELETE** /api/v3/hostings/{hosting_id}/email/catch-all | Delete catch-all alias |
| [**deleteHostingCronjob()**](HostingApi.md#deleteHostingCronjob) | **DELETE** /api/v3/hostings/{hosting_id}/cronjobs/{cronjob_id} | Delete hosting cronjob |
| [**deleteHostingEmailAlias()**](HostingApi.md#deleteHostingEmailAlias) | **DELETE** /api/v3/hostings/{hosting_id}/email/aliases/{alias_id} | Delete hosting email alias |
| [**deleteHostingExposedBackup()**](HostingApi.md#deleteHostingExposedBackup) | **DELETE** /api/v3/hostings/{hosting_id}/backups/exhibitions/{hosting_backup_id} | Delete exposed backup |
| [**deleteHostingModSecurityRule()**](HostingApi.md#deleteHostingModSecurityRule) | **DELETE** /api/v3/hostings/{hosting_id}/modsecurity/rules/{rule_id} | Delete ModSecurity rule |
| [**deleteHostingSubdomain()**](HostingApi.md#deleteHostingSubdomain) | **DELETE** /api/v3/hostings/{hosting_id} | Delete subdomain |
| [**enableHostingModSecurityRules()**](HostingApi.md#enableHostingModSecurityRules) | **PUT** /api/v3/hostings/{hosting_id}/modsecurity/rules | Enable ModSecurity rules |
| [**exposeHostingBackups()**](HostingApi.md#exposeHostingBackups) | **POST** /api/v3/hostings/{hosting_id}/backups/exhibit | Expose hosting backups |
| [**getHosting()**](HostingApi.md#getHosting) | **GET** /api/v3/hostings/{hosting_id} | Get hosting |
| [**getHostingAllowListEntry()**](HostingApi.md#getHostingAllowListEntry) | **GET** /api/v3/hostings/{hosting_id}/allow-lists/{allow_list_id} | Get hosting allow list entry |
| [**getHostingAntivirus()**](HostingApi.md#getHostingAntivirus) | **GET** /api/v3/hostings/{hosting_id}/antivirus | Get antivirus status |
| [**getHostingAntivirusRemovalScan()**](HostingApi.md#getHostingAntivirusRemovalScan) | **GET** /api/v3/hostings/{hosting_id}/antivirus/removal-scans/{removal_scan_id} | Get antivirus removal scan |
| [**getHostingAntivirusScan()**](HostingApi.md#getHostingAntivirusScan) | **GET** /api/v3/hostings/{hosting_id}/antivirus/scans/{antivirus_id} | Get antivirus scan |
| [**getHostingBackup()**](HostingApi.md#getHostingBackup) | **GET** /api/v3/hostings/{hosting_id}/backups/{hosting_backup_id} | Get hosting backup |
| [**getHostingBlockListEntry()**](HostingApi.md#getHostingBlockListEntry) | **GET** /api/v3/hostings/{hosting_id}/block-lists/{block_list_id} | Get hosting block list entry |
| [**getHostingCatchAll()**](HostingApi.md#getHostingCatchAll) | **GET** /api/v3/hostings/{hosting_id}/email/catch-all | Get catch-all alias |
| [**getHostingCredentials()**](HostingApi.md#getHostingCredentials) | **GET** /api/v3/hostings/{hosting_id}/credentials | Get hosting credentials |
| [**getHostingCronjob()**](HostingApi.md#getHostingCronjob) | **GET** /api/v3/hostings/{hosting_id}/cronjobs/{cronjob_id} | Get hosting cronjob |
| [**getHostingDatabase()**](HostingApi.md#getHostingDatabase) | **GET** /api/v3/hostings/{hosting_id}/databases/{database_id} | Get hosting database |
| [**getHostingEmailAlias()**](HostingApi.md#getHostingEmailAlias) | **GET** /api/v3/hostings/{hosting_id}/email/aliases/{alias_id} | Get hosting email alias |
| [**getHostingModSecurity()**](HostingApi.md#getHostingModSecurity) | **GET** /api/v3/hostings/{hosting_id}/modsecurity | Get ModSecurity status |
| [**getHostingModSecurityRule()**](HostingApi.md#getHostingModSecurityRule) | **GET** /api/v3/hostings/{hosting_id}/modsecurity/rules/{rule_id} | Get ModSecurity rule |
| [**getHostingModSecurityScan()**](HostingApi.md#getHostingModSecurityScan) | **GET** /api/v3/hostings/{hosting_id}/modsecurity/scans/{scan_id} | Get ModSecurity scan |
| [**getHostingSslCertificate()**](HostingApi.md#getHostingSslCertificate) | **GET** /api/v3/hostings/{hosting_id}/ssl-certificates/{hosting_ssl_certificate_id} | Get hosting SSL certificate |
| [**installHostingSslCertificate()**](HostingApi.md#installHostingSslCertificate) | **POST** /api/v3/hostings/{hosting_id}/ssl-certificates | Install SSL certificate on hosting |
| [**listHostingAllowListEntries()**](HostingApi.md#listHostingAllowListEntries) | **GET** /api/v3/hostings/{hosting_id}/allow-lists | List hosting allow list |
| [**listHostingAntivirusRemovalScans()**](HostingApi.md#listHostingAntivirusRemovalScans) | **GET** /api/v3/hostings/{hosting_id}/antivirus/removal-scans | List antivirus removal scans |
| [**listHostingAntivirusScans()**](HostingApi.md#listHostingAntivirusScans) | **GET** /api/v3/hostings/{hosting_id}/antivirus/scans | List antivirus scans |
| [**listHostingBackups()**](HostingApi.md#listHostingBackups) | **GET** /api/v3/hostings/{hosting_id}/backups | List hosting backups |
| [**listHostingBlockListEntries()**](HostingApi.md#listHostingBlockListEntries) | **GET** /api/v3/hostings/{hosting_id}/block-lists | List hosting block list |
| [**listHostingCronjobs()**](HostingApi.md#listHostingCronjobs) | **GET** /api/v3/hostings/{hosting_id}/cronjobs | List hosting cronjobs |
| [**listHostingDatabases()**](HostingApi.md#listHostingDatabases) | **GET** /api/v3/hostings/{hosting_id}/databases | Get hosting databases |
| [**listHostingDnsRecords()**](HostingApi.md#listHostingDnsRecords) | **GET** /api/v3/hostings/{hosting_id}/dns-records | Get hosting DNS records |
| [**listHostingEmailAliases()**](HostingApi.md#listHostingEmailAliases) | **GET** /api/v3/hostings/{hosting_id}/email/aliases | List hosting email aliases |
| [**listHostingExposedBackups()**](HostingApi.md#listHostingExposedBackups) | **GET** /api/v3/hostings/{hosting_id}/backups/exhibitions | List exposed backups |
| [**listHostingModSecurityRules()**](HostingApi.md#listHostingModSecurityRules) | **GET** /api/v3/hostings/{hosting_id}/modsecurity/rules | List ModSecurity rules |
| [**listHostingModSecurityScans()**](HostingApi.md#listHostingModSecurityScans) | **GET** /api/v3/hostings/{hosting_id}/modsecurity/scans | List ModSecurity scans |
| [**listHostingPhpVersions()**](HostingApi.md#listHostingPhpVersions) | **GET** /api/v3/hostings/{hosting_id}/php-versions | List PHP versions |
| [**listHostingSslCertificates()**](HostingApi.md#listHostingSslCertificates) | **GET** /api/v3/hostings/{hosting_id}/ssl-certificates | List hosting SSL certificates |
| [**listHostings()**](HostingApi.md#listHostings) | **GET** /api/v3/hostings | List all hostings |
| [**removeHostingSslCertificate()**](HostingApi.md#removeHostingSslCertificate) | **DELETE** /api/v3/hostings/{hosting_id}/ssl-certificates/{hosting_ssl_certificate_id} | Remove hosting SSL certificate |
| [**restoreHostingBackup()**](HostingApi.md#restoreHostingBackup) | **POST** /api/v3/hostings/{hosting_id}/backups/{hosting_backup_id}/restore | Restore hosting backup |
| [**startHostingAntivirusRemovalScan()**](HostingApi.md#startHostingAntivirusRemovalScan) | **POST** /api/v3/hostings/{hosting_id}/antivirus/removal-scans | Start antivirus removal scan |
| [**startHostingAntivirusScan()**](HostingApi.md#startHostingAntivirusScan) | **POST** /api/v3/hostings/{hosting_id}/antivirus/scans | Start antivirus scan |
| [**startHostingFirstBackup()**](HostingApi.md#startHostingFirstBackup) | **POST** /api/v3/hostings/{hosting_id}/backups/first-save | Start hosting backup |
| [**updateHostingCatchAll()**](HostingApi.md#updateHostingCatchAll) | **PUT** /api/v3/hostings/{hosting_id}/email/catch-all | Update catch-all alias |
| [**updateHostingFileProtection()**](HostingApi.md#updateHostingFileProtection) | **PATCH** /api/v3/hostings/{hosting_id}/file-protection | Update file protection status |
| [**updateHostingHttpVersion()**](HostingApi.md#updateHostingHttpVersion) | **PATCH** /api/v3/hostings/{hosting_id}/http-version | Update HTTP version |
| [**updateHostingModSecurity()**](HostingApi.md#updateHostingModSecurity) | **PATCH** /api/v3/hostings/{hosting_id}/modsecurity | Update ModSecurity status |
| [**updateHostingPhpSettings()**](HostingApi.md#updateHostingPhpSettings) | **PATCH** /api/v3/hostings/{hosting_id}/php-settings | Update PHP settings |
| [**updateHostingPhpVersion()**](HostingApi.md#updateHostingPhpVersion) | **PATCH** /api/v3/hostings/{hosting_id}/php-version | Update PHP version |


## `createHostingAllowListEntry()`

```php
createHostingAllowListEntry($hosting_id, $hosting_email_wblist_request): \Shellrent\Sdk\Model\HostingEmailAllowListResponse
```

Create allow list entry

Create a new allow list entry for hosting

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\HostingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$hosting_id = 56; // int
$hosting_email_wblist_request = new \Shellrent\Sdk\Model\HostingEmailWblistRequest(); // \Shellrent\Sdk\Model\HostingEmailWblistRequest

try {
    $result = $apiInstance->createHostingAllowListEntry($hosting_id, $hosting_email_wblist_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostingApi->createHostingAllowListEntry: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **hosting_id** | **int**|  | |
| **hosting_email_wblist_request** | [**\Shellrent\Sdk\Model\HostingEmailWblistRequest**](../Model/HostingEmailWblistRequest.md)|  | |

### Return type

[**\Shellrent\Sdk\Model\HostingEmailAllowListResponse**](../Model/HostingEmailAllowListResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createHostingBlockListEntry()`

```php
createHostingBlockListEntry($hosting_id, $hosting_email_wblist_request): \Shellrent\Sdk\Model\HostingEmailBlocListResponse
```

Create block list entry

Create a new block list entry for hosting

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\HostingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$hosting_id = 56; // int
$hosting_email_wblist_request = new \Shellrent\Sdk\Model\HostingEmailWblistRequest(); // \Shellrent\Sdk\Model\HostingEmailWblistRequest

try {
    $result = $apiInstance->createHostingBlockListEntry($hosting_id, $hosting_email_wblist_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostingApi->createHostingBlockListEntry: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **hosting_id** | **int**|  | |
| **hosting_email_wblist_request** | [**\Shellrent\Sdk\Model\HostingEmailWblistRequest**](../Model/HostingEmailWblistRequest.md)|  | |

### Return type

[**\Shellrent\Sdk\Model\HostingEmailBlocListResponse**](../Model/HostingEmailBlocListResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createHostingCatchAll()`

```php
createHostingCatchAll($hosting_id, $hosting_email_catch_all_request): \Shellrent\Sdk\Model\HostingEmailCatchAllResponse
```

Create catch-all alias

Create a catch-all alias with destinations

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\HostingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$hosting_id = 56; // int
$hosting_email_catch_all_request = new \Shellrent\Sdk\Model\HostingEmailCatchAllRequest(); // \Shellrent\Sdk\Model\HostingEmailCatchAllRequest

try {
    $result = $apiInstance->createHostingCatchAll($hosting_id, $hosting_email_catch_all_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostingApi->createHostingCatchAll: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **hosting_id** | **int**|  | |
| **hosting_email_catch_all_request** | [**\Shellrent\Sdk\Model\HostingEmailCatchAllRequest**](../Model/HostingEmailCatchAllRequest.md)|  | |

### Return type

[**\Shellrent\Sdk\Model\HostingEmailCatchAllResponse**](../Model/HostingEmailCatchAllResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createHostingCronjob()`

```php
createHostingCronjob($hosting_id, $hosting_cronjob_create_request): \Shellrent\Sdk\Model\HostingCronjobResponse
```

Create hosting cronjob

Create a new cronjob for hosting

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\HostingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$hosting_id = 56; // int
$hosting_cronjob_create_request = new \Shellrent\Sdk\Model\HostingCronjobCreateRequest(); // \Shellrent\Sdk\Model\HostingCronjobCreateRequest

try {
    $result = $apiInstance->createHostingCronjob($hosting_id, $hosting_cronjob_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostingApi->createHostingCronjob: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **hosting_id** | **int**|  | |
| **hosting_cronjob_create_request** | [**\Shellrent\Sdk\Model\HostingCronjobCreateRequest**](../Model/HostingCronjobCreateRequest.md)|  | |

### Return type

[**\Shellrent\Sdk\Model\HostingCronjobResponse**](../Model/HostingCronjobResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createHostingDatabase()`

```php
createHostingDatabase($hosting_id, $hosting_database_create_request): \Shellrent\Sdk\Model\HostingDatabaseResponse
```

Create hosting database

Create hosting database

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\HostingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$hosting_id = 56; // int
$hosting_database_create_request = new \Shellrent\Sdk\Model\HostingDatabaseCreateRequest(); // \Shellrent\Sdk\Model\HostingDatabaseCreateRequest

try {
    $result = $apiInstance->createHostingDatabase($hosting_id, $hosting_database_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostingApi->createHostingDatabase: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **hosting_id** | **int**|  | |
| **hosting_database_create_request** | [**\Shellrent\Sdk\Model\HostingDatabaseCreateRequest**](../Model/HostingDatabaseCreateRequest.md)|  | |

### Return type

[**\Shellrent\Sdk\Model\HostingDatabaseResponse**](../Model/HostingDatabaseResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createHostingEmailAlias()`

```php
createHostingEmailAlias($hosting_id, $hosting_email_alias_create_request): \Shellrent\Sdk\Model\HostingEmailAliasResponse
```

Create hosting email alias

Create a new email alias for the hosting

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\HostingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$hosting_id = 56; // int
$hosting_email_alias_create_request = new \Shellrent\Sdk\Model\HostingEmailAliasCreateRequest(); // \Shellrent\Sdk\Model\HostingEmailAliasCreateRequest

try {
    $result = $apiInstance->createHostingEmailAlias($hosting_id, $hosting_email_alias_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostingApi->createHostingEmailAlias: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **hosting_id** | **int**|  | |
| **hosting_email_alias_create_request** | [**\Shellrent\Sdk\Model\HostingEmailAliasCreateRequest**](../Model/HostingEmailAliasCreateRequest.md)|  | |

### Return type

[**\Shellrent\Sdk\Model\HostingEmailAliasResponse**](../Model/HostingEmailAliasResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createHostingModSecurityRule()`

```php
createHostingModSecurityRule($hosting_id, $hosting_mod_security_rule_create_request): \Shellrent\Sdk\Model\HostingModSecurityRuleResponse
```

Create ModSecurity rule

Add a ModSecurity rule by rule number

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\HostingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$hosting_id = 56; // int
$hosting_mod_security_rule_create_request = new \Shellrent\Sdk\Model\HostingModSecurityRuleCreateRequest(); // \Shellrent\Sdk\Model\HostingModSecurityRuleCreateRequest

try {
    $result = $apiInstance->createHostingModSecurityRule($hosting_id, $hosting_mod_security_rule_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostingApi->createHostingModSecurityRule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **hosting_id** | **int**|  | |
| **hosting_mod_security_rule_create_request** | [**\Shellrent\Sdk\Model\HostingModSecurityRuleCreateRequest**](../Model/HostingModSecurityRuleCreateRequest.md)|  | |

### Return type

[**\Shellrent\Sdk\Model\HostingModSecurityRuleResponse**](../Model/HostingModSecurityRuleResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createHostingSubdomain()`

```php
createHostingSubdomain($hosting_id, $hosting_subdomain_create_request): \Shellrent\Sdk\Model\HostingResponse
```

Create subdomain

Create subdomain

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\HostingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$hosting_id = 56; // int
$hosting_subdomain_create_request = new \Shellrent\Sdk\Model\HostingSubdomainCreateRequest(); // \Shellrent\Sdk\Model\HostingSubdomainCreateRequest

try {
    $result = $apiInstance->createHostingSubdomain($hosting_id, $hosting_subdomain_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostingApi->createHostingSubdomain: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **hosting_id** | **int**|  | |
| **hosting_subdomain_create_request** | [**\Shellrent\Sdk\Model\HostingSubdomainCreateRequest**](../Model/HostingSubdomainCreateRequest.md)|  | |

### Return type

[**\Shellrent\Sdk\Model\HostingResponse**](../Model/HostingResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAllHostingModSecurityRules()`

```php
deleteAllHostingModSecurityRules($hosting_id): \Shellrent\Sdk\Model\EmptyResponse
```

Delete all ModSecurity rules

Disable all ModSecurity rules for a hosting

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\HostingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$hosting_id = 56; // int

try {
    $result = $apiInstance->deleteAllHostingModSecurityRules($hosting_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostingApi->deleteAllHostingModSecurityRules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **hosting_id** | **int**|  | |

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

## `deleteHostingAllowListEntry()`

```php
deleteHostingAllowListEntry($hosting_id, $allow_list_id): \Shellrent\Sdk\Model\EmptyResponse
```

Delete allow list entry

Delete an allow list entry for hosting

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\HostingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$hosting_id = 56; // int
$allow_list_id = 56; // int

try {
    $result = $apiInstance->deleteHostingAllowListEntry($hosting_id, $allow_list_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostingApi->deleteHostingAllowListEntry: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **hosting_id** | **int**|  | |
| **allow_list_id** | **int**|  | |

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

## `deleteHostingBlockListEntry()`

```php
deleteHostingBlockListEntry($hosting_id, $block_list_id): \Shellrent\Sdk\Model\EmptyResponse
```

Delete block list entry

Delete a block list entry for hosting

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\HostingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$hosting_id = 56; // int
$block_list_id = 56; // int

try {
    $result = $apiInstance->deleteHostingBlockListEntry($hosting_id, $block_list_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostingApi->deleteHostingBlockListEntry: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **hosting_id** | **int**|  | |
| **block_list_id** | **int**|  | |

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

## `deleteHostingCatchAll()`

```php
deleteHostingCatchAll($hosting_id): \Shellrent\Sdk\Model\EmptyResponse
```

Delete catch-all alias

Delete the catch-all alias

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\HostingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$hosting_id = 56; // int

try {
    $result = $apiInstance->deleteHostingCatchAll($hosting_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostingApi->deleteHostingCatchAll: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **hosting_id** | **int**|  | |

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

## `deleteHostingCronjob()`

```php
deleteHostingCronjob($hosting_id, $cronjob_id): \Shellrent\Sdk\Model\EmptyResponse
```

Delete hosting cronjob

Delete a cronjob for hosting

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\HostingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$hosting_id = 56; // int
$cronjob_id = 56; // int

try {
    $result = $apiInstance->deleteHostingCronjob($hosting_id, $cronjob_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostingApi->deleteHostingCronjob: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **hosting_id** | **int**|  | |
| **cronjob_id** | **int**|  | |

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

## `deleteHostingEmailAlias()`

```php
deleteHostingEmailAlias($hosting_id, $alias_id): \Shellrent\Sdk\Model\EmptyResponse
```

Delete hosting email alias

Delete an email alias

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\HostingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$hosting_id = 56; // int
$alias_id = 'alias_id_example'; // string

try {
    $result = $apiInstance->deleteHostingEmailAlias($hosting_id, $alias_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostingApi->deleteHostingEmailAlias: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **hosting_id** | **int**|  | |
| **alias_id** | **string**|  | |

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

## `deleteHostingExposedBackup()`

```php
deleteHostingExposedBackup($hosting_id, $hosting_backup_id): \Shellrent\Sdk\Model\TaskResponse
```

Delete exposed backup

Delete a single exposed backup for hosting

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\HostingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$hosting_id = 56; // int
$hosting_backup_id = 56; // int

try {
    $result = $apiInstance->deleteHostingExposedBackup($hosting_id, $hosting_backup_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostingApi->deleteHostingExposedBackup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **hosting_id** | **int**|  | |
| **hosting_backup_id** | **int**|  | |

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

## `deleteHostingModSecurityRule()`

```php
deleteHostingModSecurityRule($hosting_id, $rule_id): \Shellrent\Sdk\Model\EmptyResponse
```

Delete ModSecurity rule

Disable a ModSecurity rule by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\HostingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$hosting_id = 56; // int
$rule_id = 56; // int

try {
    $result = $apiInstance->deleteHostingModSecurityRule($hosting_id, $rule_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostingApi->deleteHostingModSecurityRule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **hosting_id** | **int**|  | |
| **rule_id** | **int**|  | |

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

## `deleteHostingSubdomain()`

```php
deleteHostingSubdomain($hosting_id): \Shellrent\Sdk\Model\EmptyResponse
```

Delete subdomain

Delete subdomain

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\HostingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$hosting_id = 56; // int

try {
    $result = $apiInstance->deleteHostingSubdomain($hosting_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostingApi->deleteHostingSubdomain: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **hosting_id** | **int**|  | |

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

## `enableHostingModSecurityRules()`

```php
enableHostingModSecurityRules($hosting_id, $hosting_mod_security_rule_bulk_request): \Shellrent\Sdk\Model\HostingModSecurityRuleListResponse
```

Enable ModSecurity rules

Enable multiple ModSecurity rules by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\HostingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$hosting_id = 56; // int
$hosting_mod_security_rule_bulk_request = new \Shellrent\Sdk\Model\HostingModSecurityRuleBulkRequest(); // \Shellrent\Sdk\Model\HostingModSecurityRuleBulkRequest

try {
    $result = $apiInstance->enableHostingModSecurityRules($hosting_id, $hosting_mod_security_rule_bulk_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostingApi->enableHostingModSecurityRules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **hosting_id** | **int**|  | |
| **hosting_mod_security_rule_bulk_request** | [**\Shellrent\Sdk\Model\HostingModSecurityRuleBulkRequest**](../Model/HostingModSecurityRuleBulkRequest.md)|  | |

### Return type

[**\Shellrent\Sdk\Model\HostingModSecurityRuleListResponse**](../Model/HostingModSecurityRuleListResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `exposeHostingBackups()`

```php
exposeHostingBackups($hosting_id, $hosting_backup_expose_request): \Shellrent\Sdk\Model\TaskResponse
```

Expose hosting backups

Expose backups for hosting

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\HostingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$hosting_id = 56; // int
$hosting_backup_expose_request = new \Shellrent\Sdk\Model\HostingBackupExposeRequest(); // \Shellrent\Sdk\Model\HostingBackupExposeRequest

try {
    $result = $apiInstance->exposeHostingBackups($hosting_id, $hosting_backup_expose_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostingApi->exposeHostingBackups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **hosting_id** | **int**|  | |
| **hosting_backup_expose_request** | [**\Shellrent\Sdk\Model\HostingBackupExposeRequest**](../Model/HostingBackupExposeRequest.md)|  | |

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

## `getHosting()`

```php
getHosting($hosting_id): \Shellrent\Sdk\Model\HostingResponse
```

Get hosting

Get details of a hosting

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\HostingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$hosting_id = 56; // int

try {
    $result = $apiInstance->getHosting($hosting_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostingApi->getHosting: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **hosting_id** | **int**|  | |

### Return type

[**\Shellrent\Sdk\Model\HostingResponse**](../Model/HostingResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getHostingAllowListEntry()`

```php
getHostingAllowListEntry($hosting_id, $allow_list_id): \Shellrent\Sdk\Model\HostingEmailAllowListResponse
```

Get hosting allow list entry

Get allow list entry details for hosting

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\HostingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$hosting_id = 56; // int
$allow_list_id = 56; // int

try {
    $result = $apiInstance->getHostingAllowListEntry($hosting_id, $allow_list_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostingApi->getHostingAllowListEntry: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **hosting_id** | **int**|  | |
| **allow_list_id** | **int**|  | |

### Return type

[**\Shellrent\Sdk\Model\HostingEmailAllowListResponse**](../Model/HostingEmailAllowListResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getHostingAntivirus()`

```php
getHostingAntivirus($hosting_id): \Shellrent\Sdk\Model\GetHostingAntivirus200Response
```

Get antivirus status

Get latest antivirus scan status for hosting

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\HostingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$hosting_id = 56; // int

try {
    $result = $apiInstance->getHostingAntivirus($hosting_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostingApi->getHostingAntivirus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **hosting_id** | **int**|  | |

### Return type

[**\Shellrent\Sdk\Model\GetHostingAntivirus200Response**](../Model/GetHostingAntivirus200Response.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getHostingAntivirusRemovalScan()`

```php
getHostingAntivirusRemovalScan($hosting_id, $removal_scan_id): \Shellrent\Sdk\Model\HostingAntivirusRemovalScanResponse
```

Get antivirus removal scan

Get antivirus removal scan details

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\HostingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$hosting_id = 56; // int
$removal_scan_id = 56; // int

try {
    $result = $apiInstance->getHostingAntivirusRemovalScan($hosting_id, $removal_scan_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostingApi->getHostingAntivirusRemovalScan: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **hosting_id** | **int**|  | |
| **removal_scan_id** | **int**|  | |

### Return type

[**\Shellrent\Sdk\Model\HostingAntivirusRemovalScanResponse**](../Model/HostingAntivirusRemovalScanResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getHostingAntivirusScan()`

```php
getHostingAntivirusScan($hosting_id, $antivirus_id): \Shellrent\Sdk\Model\HostingAntivirusScanResponse
```

Get antivirus scan

Get antivirus scan details

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\HostingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$hosting_id = 56; // int
$antivirus_id = 56; // int

try {
    $result = $apiInstance->getHostingAntivirusScan($hosting_id, $antivirus_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostingApi->getHostingAntivirusScan: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **hosting_id** | **int**|  | |
| **antivirus_id** | **int**|  | |

### Return type

[**\Shellrent\Sdk\Model\HostingAntivirusScanResponse**](../Model/HostingAntivirusScanResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getHostingBackup()`

```php
getHostingBackup($hosting_id, $hosting_backup_id): \Shellrent\Sdk\Model\HostingBackupResponse
```

Get hosting backup

Get details of a hosting backup

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\HostingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$hosting_id = 56; // int
$hosting_backup_id = 56; // int

try {
    $result = $apiInstance->getHostingBackup($hosting_id, $hosting_backup_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostingApi->getHostingBackup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **hosting_id** | **int**|  | |
| **hosting_backup_id** | **int**|  | |

### Return type

[**\Shellrent\Sdk\Model\HostingBackupResponse**](../Model/HostingBackupResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getHostingBlockListEntry()`

```php
getHostingBlockListEntry($hosting_id, $block_list_id): \Shellrent\Sdk\Model\HostingEmailBlocListResponse
```

Get hosting block list entry

Get block list entry details for hosting

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\HostingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$hosting_id = 56; // int
$block_list_id = 56; // int

try {
    $result = $apiInstance->getHostingBlockListEntry($hosting_id, $block_list_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostingApi->getHostingBlockListEntry: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **hosting_id** | **int**|  | |
| **block_list_id** | **int**|  | |

### Return type

[**\Shellrent\Sdk\Model\HostingEmailBlocListResponse**](../Model/HostingEmailBlocListResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getHostingCatchAll()`

```php
getHostingCatchAll($hosting_id): \Shellrent\Sdk\Model\HostingEmailCatchAllResponse
```

Get catch-all alias

Get catch-all alias status and destinations

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\HostingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$hosting_id = 56; // int

try {
    $result = $apiInstance->getHostingCatchAll($hosting_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostingApi->getHostingCatchAll: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **hosting_id** | **int**|  | |

### Return type

[**\Shellrent\Sdk\Model\HostingEmailCatchAllResponse**](../Model/HostingEmailCatchAllResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getHostingCredentials()`

```php
getHostingCredentials($hosting_id): \Shellrent\Sdk\Model\HostingCredentialListResponse
```

Get hosting credentials

Get hosting credentials

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\HostingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$hosting_id = 56; // int

try {
    $result = $apiInstance->getHostingCredentials($hosting_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostingApi->getHostingCredentials: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **hosting_id** | **int**|  | |

### Return type

[**\Shellrent\Sdk\Model\HostingCredentialListResponse**](../Model/HostingCredentialListResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getHostingCronjob()`

```php
getHostingCronjob($hosting_id, $cronjob_id): \Shellrent\Sdk\Model\HostingCronjobResponse
```

Get hosting cronjob

Get a cronjob details for hosting

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\HostingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$hosting_id = 56; // int
$cronjob_id = 56; // int

try {
    $result = $apiInstance->getHostingCronjob($hosting_id, $cronjob_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostingApi->getHostingCronjob: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **hosting_id** | **int**|  | |
| **cronjob_id** | **int**|  | |

### Return type

[**\Shellrent\Sdk\Model\HostingCronjobResponse**](../Model/HostingCronjobResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getHostingDatabase()`

```php
getHostingDatabase($hosting_id, $database_id): \Shellrent\Sdk\Model\HostingDatabaseResponse
```

Get hosting database

Get hosting database

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\HostingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$hosting_id = 56; // int
$database_id = 'database_id_example'; // string

try {
    $result = $apiInstance->getHostingDatabase($hosting_id, $database_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostingApi->getHostingDatabase: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **hosting_id** | **int**|  | |
| **database_id** | **string**|  | |

### Return type

[**\Shellrent\Sdk\Model\HostingDatabaseResponse**](../Model/HostingDatabaseResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getHostingEmailAlias()`

```php
getHostingEmailAlias($hosting_id, $alias_id): \Shellrent\Sdk\Model\HostingEmailAliasResponse
```

Get hosting email alias

Get details of a single email alias

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\HostingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$hosting_id = 56; // int
$alias_id = 'alias_id_example'; // string

try {
    $result = $apiInstance->getHostingEmailAlias($hosting_id, $alias_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostingApi->getHostingEmailAlias: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **hosting_id** | **int**|  | |
| **alias_id** | **string**|  | |

### Return type

[**\Shellrent\Sdk\Model\HostingEmailAliasResponse**](../Model/HostingEmailAliasResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getHostingModSecurity()`

```php
getHostingModSecurity($hosting_id): \Shellrent\Sdk\Model\HostingModSecurityResponse
```

Get ModSecurity status

Get ModSecurity configuration status

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\HostingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$hosting_id = 56; // int

try {
    $result = $apiInstance->getHostingModSecurity($hosting_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostingApi->getHostingModSecurity: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **hosting_id** | **int**|  | |

### Return type

[**\Shellrent\Sdk\Model\HostingModSecurityResponse**](../Model/HostingModSecurityResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getHostingModSecurityRule()`

```php
getHostingModSecurityRule($hosting_id, $rule_id): \Shellrent\Sdk\Model\HostingModSecurityRuleResponse
```

Get ModSecurity rule

Get a ModSecurity rule details

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\HostingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$hosting_id = 56; // int
$rule_id = 56; // int

try {
    $result = $apiInstance->getHostingModSecurityRule($hosting_id, $rule_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostingApi->getHostingModSecurityRule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **hosting_id** | **int**|  | |
| **rule_id** | **int**|  | |

### Return type

[**\Shellrent\Sdk\Model\HostingModSecurityRuleResponse**](../Model/HostingModSecurityRuleResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getHostingModSecurityScan()`

```php
getHostingModSecurityScan($hosting_id, $scan_id): \Shellrent\Sdk\Model\HostingModSecurityScanResponse
```

Get ModSecurity scan

Get ModSecurity scan details

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\HostingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$hosting_id = 56; // int
$scan_id = 56; // int

try {
    $result = $apiInstance->getHostingModSecurityScan($hosting_id, $scan_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostingApi->getHostingModSecurityScan: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **hosting_id** | **int**|  | |
| **scan_id** | **int**|  | |

### Return type

[**\Shellrent\Sdk\Model\HostingModSecurityScanResponse**](../Model/HostingModSecurityScanResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getHostingSslCertificate()`

```php
getHostingSslCertificate($hosting_id, $hosting_ssl_certificate_id): \Shellrent\Sdk\Model\HostingSslCertificateResponse
```

Get hosting SSL certificate

Get details of a hosting SSL certificate installation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\HostingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$hosting_id = 56; // int
$hosting_ssl_certificate_id = 56; // int

try {
    $result = $apiInstance->getHostingSslCertificate($hosting_id, $hosting_ssl_certificate_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostingApi->getHostingSslCertificate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **hosting_id** | **int**|  | |
| **hosting_ssl_certificate_id** | **int**|  | |

### Return type

[**\Shellrent\Sdk\Model\HostingSslCertificateResponse**](../Model/HostingSslCertificateResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `installHostingSslCertificate()`

```php
installHostingSslCertificate($hosting_id, $hosting_ssl_certificate_install_request): \Shellrent\Sdk\Model\TaskResponse
```

Install SSL certificate on hosting

Install an SSL certificate on hosting or create and install Let's Encrypt

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\HostingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$hosting_id = 56; // int
$hosting_ssl_certificate_install_request = new \Shellrent\Sdk\Model\HostingSslCertificateInstallRequest(); // \Shellrent\Sdk\Model\HostingSslCertificateInstallRequest

try {
    $result = $apiInstance->installHostingSslCertificate($hosting_id, $hosting_ssl_certificate_install_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostingApi->installHostingSslCertificate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **hosting_id** | **int**|  | |
| **hosting_ssl_certificate_install_request** | [**\Shellrent\Sdk\Model\HostingSslCertificateInstallRequest**](../Model/HostingSslCertificateInstallRequest.md)|  | [optional] |

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

## `listHostingAllowListEntries()`

```php
listHostingAllowListEntries($hosting_id, $page, $per_page): \Shellrent\Sdk\Model\HostingEmailAllowListPaginatedListResponse
```

List hosting allow list

Get list of allow list entries for hosting

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\HostingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$hosting_id = 56; // int
$page = 1; // int
$per_page = 20; // int

try {
    $result = $apiInstance->listHostingAllowListEntries($hosting_id, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostingApi->listHostingAllowListEntries: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **hosting_id** | **int**|  | |
| **page** | **int**|  | [optional] [default to 1] |
| **per_page** | **int**|  | [optional] [default to 20] |

### Return type

[**\Shellrent\Sdk\Model\HostingEmailAllowListPaginatedListResponse**](../Model/HostingEmailAllowListPaginatedListResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listHostingAntivirusRemovalScans()`

```php
listHostingAntivirusRemovalScans($hosting_id, $page, $per_page): \Shellrent\Sdk\Model\HostingAntivirusRemovalScanPaginatedListResponse
```

List antivirus removal scans

Get a list of antivirus removal scans for hosting

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\HostingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$hosting_id = 56; // int
$page = 1; // int
$per_page = 20; // int

try {
    $result = $apiInstance->listHostingAntivirusRemovalScans($hosting_id, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostingApi->listHostingAntivirusRemovalScans: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **hosting_id** | **int**|  | |
| **page** | **int**|  | [optional] [default to 1] |
| **per_page** | **int**|  | [optional] [default to 20] |

### Return type

[**\Shellrent\Sdk\Model\HostingAntivirusRemovalScanPaginatedListResponse**](../Model/HostingAntivirusRemovalScanPaginatedListResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listHostingAntivirusScans()`

```php
listHostingAntivirusScans($hosting_id, $page, $per_page): \Shellrent\Sdk\Model\HostingAntivirusScanPaginatedListResponse
```

List antivirus scans

Get a list of antivirus scans for hosting

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\HostingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$hosting_id = 56; // int
$page = 1; // int
$per_page = 20; // int

try {
    $result = $apiInstance->listHostingAntivirusScans($hosting_id, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostingApi->listHostingAntivirusScans: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **hosting_id** | **int**|  | |
| **page** | **int**|  | [optional] [default to 1] |
| **per_page** | **int**|  | [optional] [default to 20] |

### Return type

[**\Shellrent\Sdk\Model\HostingAntivirusScanPaginatedListResponse**](../Model/HostingAntivirusScanPaginatedListResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listHostingBackups()`

```php
listHostingBackups($hosting_id): \Shellrent\Sdk\Model\HostingBackupListResponse
```

List hosting backups

Get list of backups for hosting

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\HostingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$hosting_id = 56; // int

try {
    $result = $apiInstance->listHostingBackups($hosting_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostingApi->listHostingBackups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **hosting_id** | **int**|  | |

### Return type

[**\Shellrent\Sdk\Model\HostingBackupListResponse**](../Model/HostingBackupListResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listHostingBlockListEntries()`

```php
listHostingBlockListEntries($hosting_id, $page, $per_page): \Shellrent\Sdk\Model\HostingEmailBlocListPaginatedListResponse
```

List hosting block list

Get list of block list entries for hosting

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\HostingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$hosting_id = 56; // int
$page = 1; // int
$per_page = 20; // int

try {
    $result = $apiInstance->listHostingBlockListEntries($hosting_id, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostingApi->listHostingBlockListEntries: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **hosting_id** | **int**|  | |
| **page** | **int**|  | [optional] [default to 1] |
| **per_page** | **int**|  | [optional] [default to 20] |

### Return type

[**\Shellrent\Sdk\Model\HostingEmailBlocListPaginatedListResponse**](../Model/HostingEmailBlocListPaginatedListResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listHostingCronjobs()`

```php
listHostingCronjobs($hosting_id, $page, $per_page): \Shellrent\Sdk\Model\HostingCronjobPaginatedListResponse
```

List hosting cronjobs

Get list of cronjobs for a hosting

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\HostingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$hosting_id = 56; // int
$page = 1; // int
$per_page = 20; // int

try {
    $result = $apiInstance->listHostingCronjobs($hosting_id, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostingApi->listHostingCronjobs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **hosting_id** | **int**|  | |
| **page** | **int**|  | [optional] [default to 1] |
| **per_page** | **int**|  | [optional] [default to 20] |

### Return type

[**\Shellrent\Sdk\Model\HostingCronjobPaginatedListResponse**](../Model/HostingCronjobPaginatedListResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listHostingDatabases()`

```php
listHostingDatabases($hosting_id): \Shellrent\Sdk\Model\HostingDatabaseListResponse
```

Get hosting databases

Get hosting databases

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\HostingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$hosting_id = 56; // int

try {
    $result = $apiInstance->listHostingDatabases($hosting_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostingApi->listHostingDatabases: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **hosting_id** | **int**|  | |

### Return type

[**\Shellrent\Sdk\Model\HostingDatabaseListResponse**](../Model/HostingDatabaseListResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listHostingDnsRecords()`

```php
listHostingDnsRecords($hosting_id): \Shellrent\Sdk\Model\HostingDnsRecordListResponse
```

Get hosting DNS records

Get hosting DNS records

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\HostingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$hosting_id = 56; // int

try {
    $result = $apiInstance->listHostingDnsRecords($hosting_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostingApi->listHostingDnsRecords: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **hosting_id** | **int**|  | |

### Return type

[**\Shellrent\Sdk\Model\HostingDnsRecordListResponse**](../Model/HostingDnsRecordListResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listHostingEmailAliases()`

```php
listHostingEmailAliases($hosting_id): \Shellrent\Sdk\Model\HostingEmailAliasListResponse
```

List hosting email aliases

Get list of email aliases for a hosting (excluding catch-all)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\HostingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$hosting_id = 56; // int

try {
    $result = $apiInstance->listHostingEmailAliases($hosting_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostingApi->listHostingEmailAliases: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **hosting_id** | **int**|  | |

### Return type

[**\Shellrent\Sdk\Model\HostingEmailAliasListResponse**](../Model/HostingEmailAliasListResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listHostingExposedBackups()`

```php
listHostingExposedBackups($hosting_id): \Shellrent\Sdk\Model\HostingBackupListResponse
```

List exposed backups

Get list of exposed backups for hosting

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\HostingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$hosting_id = 56; // int

try {
    $result = $apiInstance->listHostingExposedBackups($hosting_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostingApi->listHostingExposedBackups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **hosting_id** | **int**|  | |

### Return type

[**\Shellrent\Sdk\Model\HostingBackupListResponse**](../Model/HostingBackupListResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listHostingModSecurityRules()`

```php
listHostingModSecurityRules($hosting_id): \Shellrent\Sdk\Model\HostingModSecurityRuleListResponse
```

List ModSecurity rules

Get ModSecurity rules for a hosting

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\HostingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$hosting_id = 56; // int

try {
    $result = $apiInstance->listHostingModSecurityRules($hosting_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostingApi->listHostingModSecurityRules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **hosting_id** | **int**|  | |

### Return type

[**\Shellrent\Sdk\Model\HostingModSecurityRuleListResponse**](../Model/HostingModSecurityRuleListResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listHostingModSecurityScans()`

```php
listHostingModSecurityScans($hosting_id, $page, $per_page): \Shellrent\Sdk\Model\HostingModSecurityScanPaginatedListResponse
```

List ModSecurity scans

Get ModSecurity scan history

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\HostingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$hosting_id = 56; // int
$page = 1; // int
$per_page = 20; // int

try {
    $result = $apiInstance->listHostingModSecurityScans($hosting_id, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostingApi->listHostingModSecurityScans: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **hosting_id** | **int**|  | |
| **page** | **int**|  | [optional] [default to 1] |
| **per_page** | **int**|  | [optional] [default to 20] |

### Return type

[**\Shellrent\Sdk\Model\HostingModSecurityScanPaginatedListResponse**](../Model/HostingModSecurityScanPaginatedListResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listHostingPhpVersions()`

```php
listHostingPhpVersions($hosting_id): \Shellrent\Sdk\Model\HostingPhpVersionListResponse
```

List PHP versions

Get available PHP versions for hosting

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\HostingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$hosting_id = 56; // int

try {
    $result = $apiInstance->listHostingPhpVersions($hosting_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostingApi->listHostingPhpVersions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **hosting_id** | **int**|  | |

### Return type

[**\Shellrent\Sdk\Model\HostingPhpVersionListResponse**](../Model/HostingPhpVersionListResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listHostingSslCertificates()`

```php
listHostingSslCertificates($hosting_id): \Shellrent\Sdk\Model\HostingSslCertificateListResponse
```

List hosting SSL certificates

Get list of SSL certificates installed on hosting

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\HostingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$hosting_id = 56; // int

try {
    $result = $apiInstance->listHostingSslCertificates($hosting_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostingApi->listHostingSslCertificates: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **hosting_id** | **int**|  | |

### Return type

[**\Shellrent\Sdk\Model\HostingSslCertificateListResponse**](../Model/HostingSslCertificateListResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listHostings()`

```php
listHostings($page, $per_page): \Shellrent\Sdk\Model\HostingPaginatedListResponse
```

List all hostings

Get a list of all hostings

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\HostingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int
$per_page = 20; // int

try {
    $result = $apiInstance->listHostings($page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostingApi->listHostings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**|  | [optional] [default to 1] |
| **per_page** | **int**|  | [optional] [default to 20] |

### Return type

[**\Shellrent\Sdk\Model\HostingPaginatedListResponse**](../Model/HostingPaginatedListResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeHostingSslCertificate()`

```php
removeHostingSslCertificate($hosting_id, $hosting_ssl_certificate_id): \Shellrent\Sdk\Model\TaskResponse
```

Remove hosting SSL certificate

Remove an SSL certificate installation from hosting

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\HostingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$hosting_id = 56; // int
$hosting_ssl_certificate_id = 56; // int

try {
    $result = $apiInstance->removeHostingSslCertificate($hosting_id, $hosting_ssl_certificate_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostingApi->removeHostingSslCertificate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **hosting_id** | **int**|  | |
| **hosting_ssl_certificate_id** | **int**|  | |

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

## `restoreHostingBackup()`

```php
restoreHostingBackup($hosting_id, $hosting_backup_id): \Shellrent\Sdk\Model\TaskResponse
```

Restore hosting backup

Start a restore of a hosting backup (web contents)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\HostingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$hosting_id = 56; // int
$hosting_backup_id = 56; // int

try {
    $result = $apiInstance->restoreHostingBackup($hosting_id, $hosting_backup_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostingApi->restoreHostingBackup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **hosting_id** | **int**|  | |
| **hosting_backup_id** | **int**|  | |

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

## `startHostingAntivirusRemovalScan()`

```php
startHostingAntivirusRemovalScan($hosting_id): \Shellrent\Sdk\Model\HostingAntivirusRemovalScanResponse
```

Start antivirus removal scan

Start an antivirus removal scan for hosting

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\HostingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$hosting_id = 56; // int

try {
    $result = $apiInstance->startHostingAntivirusRemovalScan($hosting_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostingApi->startHostingAntivirusRemovalScan: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **hosting_id** | **int**|  | |

### Return type

[**\Shellrent\Sdk\Model\HostingAntivirusRemovalScanResponse**](../Model/HostingAntivirusRemovalScanResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `startHostingAntivirusScan()`

```php
startHostingAntivirusScan($hosting_id): \Shellrent\Sdk\Model\HostingAntivirusScanResponse
```

Start antivirus scan

Start a manual antivirus scan for hosting

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\HostingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$hosting_id = 56; // int

try {
    $result = $apiInstance->startHostingAntivirusScan($hosting_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostingApi->startHostingAntivirusScan: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **hosting_id** | **int**|  | |

### Return type

[**\Shellrent\Sdk\Model\HostingAntivirusScanResponse**](../Model/HostingAntivirusScanResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `startHostingFirstBackup()`

```php
startHostingFirstBackup($hosting_id): \Shellrent\Sdk\Model\TaskResponse
```

Start hosting backup

Start a backup for hosting

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\HostingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$hosting_id = 56; // int

try {
    $result = $apiInstance->startHostingFirstBackup($hosting_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostingApi->startHostingFirstBackup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **hosting_id** | **int**|  | |

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

## `updateHostingCatchAll()`

```php
updateHostingCatchAll($hosting_id, $hosting_email_catch_all_request): \Shellrent\Sdk\Model\HostingEmailCatchAllResponse
```

Update catch-all alias

Update a catch-all alias destinations

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\HostingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$hosting_id = 56; // int
$hosting_email_catch_all_request = new \Shellrent\Sdk\Model\HostingEmailCatchAllRequest(); // \Shellrent\Sdk\Model\HostingEmailCatchAllRequest

try {
    $result = $apiInstance->updateHostingCatchAll($hosting_id, $hosting_email_catch_all_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostingApi->updateHostingCatchAll: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **hosting_id** | **int**|  | |
| **hosting_email_catch_all_request** | [**\Shellrent\Sdk\Model\HostingEmailCatchAllRequest**](../Model/HostingEmailCatchAllRequest.md)|  | |

### Return type

[**\Shellrent\Sdk\Model\HostingEmailCatchAllResponse**](../Model/HostingEmailCatchAllResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateHostingFileProtection()`

```php
updateHostingFileProtection($hosting_id, $hosting_file_protection_update_request): \Shellrent\Sdk\Model\HostingResponse
```

Update file protection status

Enable or disable file protection

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\HostingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$hosting_id = 56; // int
$hosting_file_protection_update_request = new \Shellrent\Sdk\Model\HostingFileProtectionUpdateRequest(); // \Shellrent\Sdk\Model\HostingFileProtectionUpdateRequest

try {
    $result = $apiInstance->updateHostingFileProtection($hosting_id, $hosting_file_protection_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostingApi->updateHostingFileProtection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **hosting_id** | **int**|  | |
| **hosting_file_protection_update_request** | [**\Shellrent\Sdk\Model\HostingFileProtectionUpdateRequest**](../Model/HostingFileProtectionUpdateRequest.md)|  | |

### Return type

[**\Shellrent\Sdk\Model\HostingResponse**](../Model/HostingResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateHostingHttpVersion()`

```php
updateHostingHttpVersion($hosting_id, $hosting_http_version_update_request): \Shellrent\Sdk\Model\HostingResponse
```

Update HTTP version

Change HTTP version for hosting

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\HostingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$hosting_id = 56; // int
$hosting_http_version_update_request = new \Shellrent\Sdk\Model\HostingHttpVersionUpdateRequest(); // \Shellrent\Sdk\Model\HostingHttpVersionUpdateRequest

try {
    $result = $apiInstance->updateHostingHttpVersion($hosting_id, $hosting_http_version_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostingApi->updateHostingHttpVersion: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **hosting_id** | **int**|  | |
| **hosting_http_version_update_request** | [**\Shellrent\Sdk\Model\HostingHttpVersionUpdateRequest**](../Model/HostingHttpVersionUpdateRequest.md)|  | |

### Return type

[**\Shellrent\Sdk\Model\HostingResponse**](../Model/HostingResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateHostingModSecurity()`

```php
updateHostingModSecurity($hosting_id, $hosting_mod_security_update_request): \Shellrent\Sdk\Model\HostingModSecurityResponse
```

Update ModSecurity status

Enable or disable ModSecurity

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\HostingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$hosting_id = 56; // int
$hosting_mod_security_update_request = new \Shellrent\Sdk\Model\HostingModSecurityUpdateRequest(); // \Shellrent\Sdk\Model\HostingModSecurityUpdateRequest

try {
    $result = $apiInstance->updateHostingModSecurity($hosting_id, $hosting_mod_security_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostingApi->updateHostingModSecurity: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **hosting_id** | **int**|  | |
| **hosting_mod_security_update_request** | [**\Shellrent\Sdk\Model\HostingModSecurityUpdateRequest**](../Model/HostingModSecurityUpdateRequest.md)|  | |

### Return type

[**\Shellrent\Sdk\Model\HostingModSecurityResponse**](../Model/HostingModSecurityResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateHostingPhpSettings()`

```php
updateHostingPhpSettings($hosting_id, $hosting_php_settings_update_request): \Shellrent\Sdk\Model\HostingResponse
```

Update PHP settings

Update a PHP setting for hosting

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\HostingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$hosting_id = 56; // int
$hosting_php_settings_update_request = new \Shellrent\Sdk\Model\HostingPhpSettingsUpdateRequest(); // \Shellrent\Sdk\Model\HostingPhpSettingsUpdateRequest

try {
    $result = $apiInstance->updateHostingPhpSettings($hosting_id, $hosting_php_settings_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostingApi->updateHostingPhpSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **hosting_id** | **int**|  | |
| **hosting_php_settings_update_request** | [**\Shellrent\Sdk\Model\HostingPhpSettingsUpdateRequest**](../Model/HostingPhpSettingsUpdateRequest.md)|  | |

### Return type

[**\Shellrent\Sdk\Model\HostingResponse**](../Model/HostingResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateHostingPhpVersion()`

```php
updateHostingPhpVersion($hosting_id, $hosting_php_version_update_request): \Shellrent\Sdk\Model\HostingResponse
```

Update PHP version

Change PHP version for hosting

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\HostingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$hosting_id = 56; // int
$hosting_php_version_update_request = new \Shellrent\Sdk\Model\HostingPhpVersionUpdateRequest(); // \Shellrent\Sdk\Model\HostingPhpVersionUpdateRequest

try {
    $result = $apiInstance->updateHostingPhpVersion($hosting_id, $hosting_php_version_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostingApi->updateHostingPhpVersion: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **hosting_id** | **int**|  | |
| **hosting_php_version_update_request** | [**\Shellrent\Sdk\Model\HostingPhpVersionUpdateRequest**](../Model/HostingPhpVersionUpdateRequest.md)|  | |

### Return type

[**\Shellrent\Sdk\Model\HostingResponse**](../Model/HostingResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
