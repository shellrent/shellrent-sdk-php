# Shellrent\Sdk\HostingApi

Web Hosting

All URIs are relative to https://api.shellrent.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**canInstallHostingSslCertificate()**](HostingApi.md#canInstallHostingSslCertificate) | **GET** /api/v3/hostings/{hosting_id}/ssl-certificates/can-install | Can install SSL certificate on hosting |
| [**createHostingAllowListEntry()**](HostingApi.md#createHostingAllowListEntry) | **POST** /api/v3/hostings/{hosting_id}/allow-lists | Create allow list entry |
| [**createHostingBlockListEntry()**](HostingApi.md#createHostingBlockListEntry) | **POST** /api/v3/hostings/{hosting_id}/block-lists | Create block list entry |
| [**createHostingCronjob()**](HostingApi.md#createHostingCronjob) | **POST** /api/v3/hostings/{hosting_id}/cron-jobs | Create hosting cronjob |
| [**createHostingDatabase()**](HostingApi.md#createHostingDatabase) | **POST** /api/v3/hostings/{hosting_id}/databases | Create hosting database |
| [**createHostingEmailAlias()**](HostingApi.md#createHostingEmailAlias) | **POST** /api/v3/hostings/{hosting_id}/email/aliases | Create hosting email alias |
| [**createHostingModSecurityRule()**](HostingApi.md#createHostingModSecurityRule) | **POST** /api/v3/hostings/{hosting_id}/modsecurity/rules | Create ModSecurity rule |
| [**createHostingSubdomain()**](HostingApi.md#createHostingSubdomain) | **POST** /api/v3/hostings/{hosting_id}/subdomains | Create subdomain |
| [**deleteAllHostingModSecurityRules()**](HostingApi.md#deleteAllHostingModSecurityRules) | **DELETE** /api/v3/hostings/{hosting_id}/modsecurity/rules | Delete all ModSecurity rules |
| [**deleteHostingAllowListEntry()**](HostingApi.md#deleteHostingAllowListEntry) | **DELETE** /api/v3/hostings/{hosting_id}/allow-lists/{allow_list_id} | Delete allow list entry |
| [**deleteHostingBlockListEntry()**](HostingApi.md#deleteHostingBlockListEntry) | **DELETE** /api/v3/hostings/{hosting_id}/block-lists/{block_list_id} | Delete block list entry |
| [**deleteHostingCatchAll()**](HostingApi.md#deleteHostingCatchAll) | **DELETE** /api/v3/hostings/{hosting_id}/email/catch-all | Delete catch-all alias |
| [**deleteHostingCronjob()**](HostingApi.md#deleteHostingCronjob) | **DELETE** /api/v3/hostings/{hosting_id}/cron-jobs/{cron_job_id} | Delete hosting cronjob |
| [**deleteHostingEmailAlias()**](HostingApi.md#deleteHostingEmailAlias) | **DELETE** /api/v3/hostings/{hosting_id}/email/aliases/{alias_id} | Delete hosting email alias |
| [**deleteHostingExposedBackup()**](HostingApi.md#deleteHostingExposedBackup) | **DELETE** /api/v3/hostings/{hosting_id}/backups/exhibitions/{hosting_backup_id} | Delete exposed backup |
| [**deleteHostingModSecurityRule()**](HostingApi.md#deleteHostingModSecurityRule) | **DELETE** /api/v3/hostings/{hosting_id}/modsecurity/rules/{rule_id} | Delete ModSecurity rule |
| [**deleteHostingSubdomain()**](HostingApi.md#deleteHostingSubdomain) | **DELETE** /api/v3/hostings/{hosting_id} | Delete subdomain |
| [**enableHostingModSecurityRules()**](HostingApi.md#enableHostingModSecurityRules) | **PUT** /api/v3/hostings/{hosting_id}/modsecurity/rules | Enable ModSecurity rules |
| [**exposeHostingBackups()**](HostingApi.md#exposeHostingBackups) | **POST** /api/v3/hostings/{hosting_id}/backups/exhibitions | Expose hosting backups |
| [**getHosting()**](HostingApi.md#getHosting) | **GET** /api/v3/hostings/{hosting_id} | Get hosting |
| [**getHostingAllowListEntry()**](HostingApi.md#getHostingAllowListEntry) | **GET** /api/v3/hostings/{hosting_id}/allow-lists/{allow_list_id} | Get hosting allow list entry |
| [**getHostingAntivirus()**](HostingApi.md#getHostingAntivirus) | **GET** /api/v3/hostings/{hosting_id}/antivirus | Get antivirus status |
| [**getHostingAntivirusRemovalScan()**](HostingApi.md#getHostingAntivirusRemovalScan) | **GET** /api/v3/hostings/{hosting_id}/antivirus/removal-scans/{removal_scan_id} | Get antivirus removal scan |
| [**getHostingAntivirusScan()**](HostingApi.md#getHostingAntivirusScan) | **GET** /api/v3/hostings/{hosting_id}/antivirus/scans/{antivirus_id} | Get antivirus scan |
| [**getHostingBackup()**](HostingApi.md#getHostingBackup) | **GET** /api/v3/hostings/{hosting_id}/backups/{hosting_backup_id} | Get hosting backup |
| [**getHostingBlockListEntry()**](HostingApi.md#getHostingBlockListEntry) | **GET** /api/v3/hostings/{hosting_id}/block-lists/{block_list_id} | Get hosting block list entry |
| [**getHostingCatchAll()**](HostingApi.md#getHostingCatchAll) | **GET** /api/v3/hostings/{hosting_id}/email/catch-all | Get catch-all alias |
| [**getHostingCredentials()**](HostingApi.md#getHostingCredentials) | **GET** /api/v3/hostings/{hosting_id}/credentials | Get hosting credentials |
| [**getHostingCronjob()**](HostingApi.md#getHostingCronjob) | **GET** /api/v3/hostings/{hosting_id}/cron-jobs/{cron_job_id} | Get hosting cronjob |
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
| [**listHostingCronjobs()**](HostingApi.md#listHostingCronjobs) | **GET** /api/v3/hostings/{hosting_id}/cron-jobs | List hosting cronjobs |
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
| [**restoreHostingBackup()**](HostingApi.md#restoreHostingBackup) | **POST** /api/v3/hostings/{hosting_id}/backups/{hosting_backup_id}/restores | Restore hosting backup |
| [**startHostingAntivirusRemovalScan()**](HostingApi.md#startHostingAntivirusRemovalScan) | **POST** /api/v3/hostings/{hosting_id}/antivirus/removal-scans | Start antivirus removal scan |
| [**startHostingAntivirusScan()**](HostingApi.md#startHostingAntivirusScan) | **POST** /api/v3/hostings/{hosting_id}/antivirus/scans | Start antivirus scan |
| [**startHostingFirstBackup()**](HostingApi.md#startHostingFirstBackup) | **POST** /api/v3/hostings/{hosting_id}/backups | Start hosting backup |
| [**updateHostingCatchAll()**](HostingApi.md#updateHostingCatchAll) | **PUT** /api/v3/hostings/{hosting_id}/email/catch-all | Create or replace catch-all alias |
| [**updateHostingFileProtection()**](HostingApi.md#updateHostingFileProtection) | **PATCH** /api/v3/hostings/{hosting_id}/file-protection | Update file protection status |
| [**updateHostingHttpVersion()**](HostingApi.md#updateHostingHttpVersion) | **PATCH** /api/v3/hostings/{hosting_id}/http-version | Update HTTP version |
| [**updateHostingModSecurity()**](HostingApi.md#updateHostingModSecurity) | **PATCH** /api/v3/hostings/{hosting_id}/modsecurity | Update ModSecurity status |
| [**updateHostingPhpSettings()**](HostingApi.md#updateHostingPhpSettings) | **PATCH** /api/v3/hostings/{hosting_id}/php-settings | Update PHP settings |
| [**updateHostingPhpVersion()**](HostingApi.md#updateHostingPhpVersion) | **PATCH** /api/v3/hostings/{hosting_id}/php-version | Update PHP version |


## `canInstallHostingSslCertificate()`

```php
canInstallHostingSslCertificate($hosting_id, $ssl_certificate_id, $destination_type, $cn_type): \Shellrent\Sdk\Model\HostingSslCertificateCanInstallResponse
```

Can install SSL certificate on hosting

Checks, with the rules of the installation (`POST /api/v3/hostings/{hosting_id}/ssl-certificates`) and its fields in the query, whether the SSL certificate can be installed on the hosting now, and why not: a certificate already installed, the CNAME record that delegates the validation of Let's Encrypt missing from DNS that are not on our nameservers (`dns_delegation` has the record to create), the limit of Let's Encrypt installations, the hosting not active yet, an operation running. With DNS on our nameservers the installation creates the CNAME record by itself. Invalid fields respond 400, as in the installation

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
$hosting_id = 56; // int | ID of the hosting
$ssl_certificate_id = 56; // int | Id of the purchased SSL certificate to install (`GET /api/v3/ssl-certificates/{ssl_certificate_id}`); omit it for a Let's Encrypt certificate
$destination_type = 'destination_type_example'; // string | Where to install the certificate: `web` for the website, `mail` for the mail servers, `all` for both. When omitted, `all` on a main hosting and `web` on a subdomain, where only `web` is allowed
$cn_type = 'WILDCARD'; // string | Type of the Let's Encrypt certificate: `NORMAL`, or `WILDCARD` for a wildcard certificate. Omit this parameter if you're sending `ssl_certificate_id`.

try {
    $result = $apiInstance->canInstallHostingSslCertificate($hosting_id, $ssl_certificate_id, $destination_type, $cn_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostingApi->canInstallHostingSslCertificate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **hosting_id** | **int**| ID of the hosting | |
| **ssl_certificate_id** | **int**| Id of the purchased SSL certificate to install (&#x60;GET /api/v3/ssl-certificates/{ssl_certificate_id}&#x60;); omit it for a Let&#39;s Encrypt certificate | [optional] |
| **destination_type** | **string**| Where to install the certificate: &#x60;web&#x60; for the website, &#x60;mail&#x60; for the mail servers, &#x60;all&#x60; for both. When omitted, &#x60;all&#x60; on a main hosting and &#x60;web&#x60; on a subdomain, where only &#x60;web&#x60; is allowed | [optional] |
| **cn_type** | **string**| Type of the Let&#39;s Encrypt certificate: &#x60;NORMAL&#x60;, or &#x60;WILDCARD&#x60; for a wildcard certificate. Omit this parameter if you&#39;re sending &#x60;ssl_certificate_id&#x60;. | [optional] [default to &#39;WILDCARD&#39;] |

### Return type

[**\Shellrent\Sdk\Model\HostingSslCertificateCanInstallResponse**](../Model/HostingSslCertificateCanInstallResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

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
$hosting_id = 56; // int | ID of the hosting
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
| **hosting_id** | **int**| ID of the hosting | |
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
createHostingBlockListEntry($hosting_id, $hosting_email_wblist_request): \Shellrent\Sdk\Model\HostingEmailBlockListResponse
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
$hosting_id = 56; // int | ID of the hosting
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
| **hosting_id** | **int**| ID of the hosting | |
| **hosting_email_wblist_request** | [**\Shellrent\Sdk\Model\HostingEmailWblistRequest**](../Model/HostingEmailWblistRequest.md)|  | |

### Return type

[**\Shellrent\Sdk\Model\HostingEmailBlockListResponse**](../Model/HostingEmailBlockListResponse.md)

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
$hosting_id = 56; // int | ID of the hosting
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
| **hosting_id** | **int**| ID of the hosting | |
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
createHostingDatabase($hosting_id): \Shellrent\Sdk\Model\HostingDatabaseResponse
```

Create hosting database

Create a database of the hosting. The request has no body: as in the control panel, the name is `<username of the database account>_<n>`, with the first free n. If the database server already uses that name for another account, it adds a suffix: the response has the actual name

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
$hosting_id = 56; // int | ID of the hosting

try {
    $result = $apiInstance->createHostingDatabase($hosting_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostingApi->createHostingDatabase: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **hosting_id** | **int**| ID of the hosting | |

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
$hosting_id = 56; // int | ID of the hosting
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
| **hosting_id** | **int**| ID of the hosting | |
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

Disables the ModSecurity rule `rule_number` on the hosting, so that ModSecurity no longer applies it, and returns the rule with `included` true. Responds 200 instead of 201 when the hosting already had the rule, found by a scan or added before

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
$hosting_id = 56; // int | ID of the hosting
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
| **hosting_id** | **int**| ID of the hosting | |
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

Creates a subdomain of a main hosting and returns it. When the DNS of the domain is a purchase of the same account, it also adds the A record of the subdomain. Not available (403) when the plan does not include subdomains; 409 on a subdomain, when the limit is reached or when the subdomain or its DNS record already exists

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
$hosting_id = 56; // int | ID of the hosting
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
| **hosting_id** | **int**| ID of the hosting | |
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
deleteAllHostingModSecurityRules($hosting_id)
```

Delete all ModSecurity rules

Enables again all the ModSecurity rules disabled on the hosting: ModSecurity applies them again and their `included` becomes false. The rules stay in the list

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
$hosting_id = 56; // int | ID of the hosting

try {
    $apiInstance->deleteAllHostingModSecurityRules($hosting_id);
} catch (Exception $e) {
    echo 'Exception when calling HostingApi->deleteAllHostingModSecurityRules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **hosting_id** | **int**| ID of the hosting | |

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

## `deleteHostingAllowListEntry()`

```php
deleteHostingAllowListEntry($hosting_id, $allow_list_id)
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
$hosting_id = 56; // int | ID of the hosting
$allow_list_id = 56; // int | ID of the allow list entry

try {
    $apiInstance->deleteHostingAllowListEntry($hosting_id, $allow_list_id);
} catch (Exception $e) {
    echo 'Exception when calling HostingApi->deleteHostingAllowListEntry: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **hosting_id** | **int**| ID of the hosting | |
| **allow_list_id** | **int**| ID of the allow list entry | |

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

## `deleteHostingBlockListEntry()`

```php
deleteHostingBlockListEntry($hosting_id, $block_list_id)
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
$hosting_id = 56; // int | ID of the hosting
$block_list_id = 56; // int | ID of the block list entry

try {
    $apiInstance->deleteHostingBlockListEntry($hosting_id, $block_list_id);
} catch (Exception $e) {
    echo 'Exception when calling HostingApi->deleteHostingBlockListEntry: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **hosting_id** | **int**| ID of the hosting | |
| **block_list_id** | **int**| ID of the block list entry | |

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

## `deleteHostingCatchAll()`

```php
deleteHostingCatchAll($hosting_id)
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
$hosting_id = 56; // int | ID of the hosting

try {
    $apiInstance->deleteHostingCatchAll($hosting_id);
} catch (Exception $e) {
    echo 'Exception when calling HostingApi->deleteHostingCatchAll: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **hosting_id** | **int**| ID of the hosting | |

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

## `deleteHostingCronjob()`

```php
deleteHostingCronjob($hosting_id, $cron_job_id)
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
$hosting_id = 56; // int | ID of the hosting
$cron_job_id = 56; // int | ID of the cron job

try {
    $apiInstance->deleteHostingCronjob($hosting_id, $cron_job_id);
} catch (Exception $e) {
    echo 'Exception when calling HostingApi->deleteHostingCronjob: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **hosting_id** | **int**| ID of the hosting | |
| **cron_job_id** | **int**| ID of the cron job | |

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

## `deleteHostingEmailAlias()`

```php
deleteHostingEmailAlias($hosting_id, $alias_id)
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
$hosting_id = 56; // int | ID of the hosting
$alias_id = 'alias_id_example'; // string | Email alias: the `alias_id` field of the aliases list, that is the address of the alias

try {
    $apiInstance->deleteHostingEmailAlias($hosting_id, $alias_id);
} catch (Exception $e) {
    echo 'Exception when calling HostingApi->deleteHostingEmailAlias: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **hosting_id** | **int**| ID of the hosting | |
| **alias_id** | **string**| Email alias: the &#x60;alias_id&#x60; field of the aliases list, that is the address of the alias | |

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
$hosting_id = 56; // int | ID of the hosting
$hosting_backup_id = 56; // int | ID of the hosting backup

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
| **hosting_id** | **int**| ID of the hosting | |
| **hosting_backup_id** | **int**| ID of the hosting backup | |

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
deleteHostingModSecurityRule($hosting_id, $rule_id)
```

Delete ModSecurity rule

Enables again the ModSecurity rule `rule_id` on the hosting: ModSecurity applies it again and its `included` becomes false. The rule stays in the list

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
$hosting_id = 56; // int | ID of the hosting
$rule_id = 56; // int | ID of the ModSecurity rule

try {
    $apiInstance->deleteHostingModSecurityRule($hosting_id, $rule_id);
} catch (Exception $e) {
    echo 'Exception when calling HostingApi->deleteHostingModSecurityRule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **hosting_id** | **int**| ID of the hosting | |
| **rule_id** | **int**| ID of the ModSecurity rule | |

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

## `deleteHostingSubdomain()`

```php
deleteHostingSubdomain($hosting_id)
```

Delete subdomain

Deletes a subdomain: it removes it from the web server, uninstalls its SSL certificates and, when the DNS of the domain is a purchase of the same account, deletes its DNS record. Not available (403) when the plan does not include subdomains; 409 on a main hosting

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
$hosting_id = 56; // int | ID of the hosting

try {
    $apiInstance->deleteHostingSubdomain($hosting_id);
} catch (Exception $e) {
    echo 'Exception when calling HostingApi->deleteHostingSubdomain: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **hosting_id** | **int**| ID of the hosting | |

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

## `enableHostingModSecurityRules()`

```php
enableHostingModSecurityRules($hosting_id, $hosting_mod_security_rule_bulk_request): \Shellrent\Sdk\Model\HostingModSecurityRuleListResponse
```

Enable ModSecurity rules

Disables on the hosting the ModSecurity rules with the given ids (`rule_id`), so that ModSecurity no longer applies them, and returns them with `included` true

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
$hosting_id = 56; // int | ID of the hosting
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
| **hosting_id** | **int**| ID of the hosting | |
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

Exposes a web backup, a database backup or both, chosen among those of the backup list by `backup_id` and `category`. The exposure is asynchronous and is returned as a Task.

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
$hosting_id = 56; // int | ID of the hosting
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
| **hosting_id** | **int**| ID of the hosting | |
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
$hosting_id = 56; // int | ID of the hosting

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
| **hosting_id** | **int**| ID of the hosting | |

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
$hosting_id = 56; // int | ID of the hosting
$allow_list_id = 56; // int | ID of the allow list entry

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
| **hosting_id** | **int**| ID of the hosting | |
| **allow_list_id** | **int**| ID of the allow list entry | |

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
getHostingAntivirus($hosting_id): \Shellrent\Sdk\Model\HostingAntivirusNullableResponse
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
$hosting_id = 56; // int | ID of the hosting

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
| **hosting_id** | **int**| ID of the hosting | |

### Return type

[**\Shellrent\Sdk\Model\HostingAntivirusNullableResponse**](../Model/HostingAntivirusNullableResponse.md)

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
$hosting_id = 56; // int | ID of the hosting
$removal_scan_id = 56; // int | ID of the antivirus removal scan

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
| **hosting_id** | **int**| ID of the hosting | |
| **removal_scan_id** | **int**| ID of the antivirus removal scan | |

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
$hosting_id = 56; // int | ID of the hosting
$antivirus_id = 56; // int | ID of the antivirus scan

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
| **hosting_id** | **int**| ID of the hosting | |
| **antivirus_id** | **int**| ID of the antivirus scan | |

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

Returns a backup among those of the backup list (active, successful and completed backups); any other backup responds 404.

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
$hosting_id = 56; // int | ID of the hosting
$hosting_backup_id = 56; // int | ID of the hosting backup

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
| **hosting_id** | **int**| ID of the hosting | |
| **hosting_backup_id** | **int**| ID of the hosting backup | |

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
getHostingBlockListEntry($hosting_id, $block_list_id): \Shellrent\Sdk\Model\HostingEmailBlockListResponse
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
$hosting_id = 56; // int | ID of the hosting
$block_list_id = 56; // int | ID of the block list entry

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
| **hosting_id** | **int**| ID of the hosting | |
| **block_list_id** | **int**| ID of the block list entry | |

### Return type

[**\Shellrent\Sdk\Model\HostingEmailBlockListResponse**](../Model/HostingEmailBlockListResponse.md)

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
$hosting_id = 56; // int | ID of the hosting

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
| **hosting_id** | **int**| ID of the hosting | |

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

Lists the active FTP, secondary FTP, MySQL and MSSQL accounts of the hosting, with their passwords. The accounts belong to the purchase: a subdomain returns those of its main hosting

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
$hosting_id = 56; // int | ID of the hosting

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
| **hosting_id** | **int**| ID of the hosting | |

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
getHostingCronjob($hosting_id, $cron_job_id): \Shellrent\Sdk\Model\HostingCronjobResponse
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
$hosting_id = 56; // int | ID of the hosting
$cron_job_id = 56; // int | ID of the cron job

try {
    $result = $apiInstance->getHostingCronjob($hosting_id, $cron_job_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostingApi->getHostingCronjob: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **hosting_id** | **int**| ID of the hosting | |
| **cron_job_id** | **int**| ID of the cron job | |

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

Returns a database of the hosting, read from the database servers: `database_id` is the name of the database. 404 when the hosting has no database with that name

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
$hosting_id = 56; // int | ID of the hosting
$database_id = 'database_id_example'; // string | Database of the hosting: the `database_id` field of the databases list, that is the name of the database

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
| **hosting_id** | **int**| ID of the hosting | |
| **database_id** | **string**| Database of the hosting: the &#x60;database_id&#x60; field of the databases list, that is the name of the database | |

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
$hosting_id = 56; // int | ID of the hosting
$alias_id = 'alias_id_example'; // string | Email alias: the `alias_id` field of the aliases list, that is the address of the alias

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
| **hosting_id** | **int**| ID of the hosting | |
| **alias_id** | **string**| Email alias: the &#x60;alias_id&#x60; field of the aliases list, that is the address of the alias | |

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
$hosting_id = 56; // int | ID of the hosting

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
| **hosting_id** | **int**| ID of the hosting | |

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
$hosting_id = 56; // int | ID of the hosting
$rule_id = 56; // int | ID of the ModSecurity rule

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
| **hosting_id** | **int**| ID of the hosting | |
| **rule_id** | **int**| ID of the ModSecurity rule | |

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
$hosting_id = 56; // int | ID of the hosting
$scan_id = 56; // int | ID of the ModSecurity scan

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
| **hosting_id** | **int**| ID of the hosting | |
| **scan_id** | **int**| ID of the ModSecurity scan | |

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
$hosting_id = 56; // int | ID of the hosting
$hosting_ssl_certificate_id = 56; // int | ID of the SSL certificate of the hosting

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
| **hosting_id** | **int**| ID of the hosting | |
| **hosting_ssl_certificate_id** | **int**| ID of the SSL certificate of the hosting | |

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

Installs a purchased SSL certificate on the hosting, or issues and installs a Let's Encrypt certificate, with the rules of the control panel. With DNS that are not on our nameservers, Let's Encrypt requires the CNAME record that delegates its DNS validation: `GET /api/v3/hostings/{hosting_id}/ssl-certificates/can-install` tells whether the installation can start, and which record to create. 409 when a certificate is already installed on the destination, the CNAME record is missing, the limit of Let's Encrypt installations is reached, the hosting is not active yet or an operation is running; 403 when the mail server of the hosting does not accept certificates

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
$hosting_id = 56; // int | ID of the hosting
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
| **hosting_id** | **int**| ID of the hosting | |
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
$hosting_id = 56; // int | ID of the hosting
$page = 1; // int | Page number, starting from 1. A page beyond the last one returns an empty `data` list (with the requested `page` in `meta`).
$per_page = 20; // int | Number of items per page. Values outside the allowed range are rejected with a validation error.

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
| **hosting_id** | **int**| ID of the hosting | |
| **page** | **int**| Page number, starting from 1. A page beyond the last one returns an empty &#x60;data&#x60; list (with the requested &#x60;page&#x60; in &#x60;meta&#x60;). | [optional] [default to 1] |
| **per_page** | **int**| Number of items per page. Values outside the allowed range are rejected with a validation error. | [optional] [default to 20] |

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
$hosting_id = 56; // int | ID of the hosting
$page = 1; // int | Page number, starting from 1. A page beyond the last one returns an empty `data` list (with the requested `page` in `meta`).
$per_page = 20; // int | Number of items per page. Values outside the allowed range are rejected with a validation error.

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
| **hosting_id** | **int**| ID of the hosting | |
| **page** | **int**| Page number, starting from 1. A page beyond the last one returns an empty &#x60;data&#x60; list (with the requested &#x60;page&#x60; in &#x60;meta&#x60;). | [optional] [default to 1] |
| **per_page** | **int**| Number of items per page. Values outside the allowed range are rejected with a validation error. | [optional] [default to 20] |

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
$hosting_id = 56; // int | ID of the hosting
$page = 1; // int | Page number, starting from 1. A page beyond the last one returns an empty `data` list (with the requested `page` in `meta`).
$per_page = 20; // int | Number of items per page. Values outside the allowed range are rejected with a validation error.

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
| **hosting_id** | **int**| ID of the hosting | |
| **page** | **int**| Page number, starting from 1. A page beyond the last one returns an empty &#x60;data&#x60; list (with the requested &#x60;page&#x60; in &#x60;meta&#x60;). | [optional] [default to 1] |
| **per_page** | **int**| Number of items per page. Values outside the allowed range are rejected with a validation error. | [optional] [default to 20] |

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
$hosting_id = 56; // int | ID of the hosting

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
| **hosting_id** | **int**| ID of the hosting | |

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
listHostingBlockListEntries($hosting_id, $page, $per_page): \Shellrent\Sdk\Model\HostingEmailBlockListPaginatedListResponse
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
$hosting_id = 56; // int | ID of the hosting
$page = 1; // int | Page number, starting from 1. A page beyond the last one returns an empty `data` list (with the requested `page` in `meta`).
$per_page = 20; // int | Number of items per page. Values outside the allowed range are rejected with a validation error.

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
| **hosting_id** | **int**| ID of the hosting | |
| **page** | **int**| Page number, starting from 1. A page beyond the last one returns an empty &#x60;data&#x60; list (with the requested &#x60;page&#x60; in &#x60;meta&#x60;). | [optional] [default to 1] |
| **per_page** | **int**| Number of items per page. Values outside the allowed range are rejected with a validation error. | [optional] [default to 20] |

### Return type

[**\Shellrent\Sdk\Model\HostingEmailBlockListPaginatedListResponse**](../Model/HostingEmailBlockListPaginatedListResponse.md)

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
$hosting_id = 56; // int | ID of the hosting
$page = 1; // int | Page number, starting from 1. A page beyond the last one returns an empty `data` list (with the requested `page` in `meta`).
$per_page = 20; // int | Number of items per page. Values outside the allowed range are rejected with a validation error.

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
| **hosting_id** | **int**| ID of the hosting | |
| **page** | **int**| Page number, starting from 1. A page beyond the last one returns an empty &#x60;data&#x60; list (with the requested &#x60;page&#x60; in &#x60;meta&#x60;). | [optional] [default to 1] |
| **per_page** | **int**| Number of items per page. Values outside the allowed range are rejected with a validation error. | [optional] [default to 20] |

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

Lists the MySQL and MSSQL databases of the hosting, read from the database servers, with the account that owns them. The databases belong to the purchase: a subdomain returns those of its main hosting

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
$hosting_id = 56; // int | ID of the hosting

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
| **hosting_id** | **int**| ID of the hosting | |

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

Lists the default DNS records of the hosting: those of its web server and of its mail server, which point the domain to the hosting. They are not read from the DNS zone of the domain; a subdomain returns those of its main hosting

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
$hosting_id = 56; // int | ID of the hosting

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
| **hosting_id** | **int**| ID of the hosting | |

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
$hosting_id = 56; // int | ID of the hosting

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
| **hosting_id** | **int**| ID of the hosting | |

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
$hosting_id = 56; // int | ID of the hosting

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
| **hosting_id** | **int**| ID of the hosting | |

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

Lists the ModSecurity rules of the hosting, found by the scans or added by hand. A rule with `included` true is disabled on the hosting: ModSecurity does not apply it

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
$hosting_id = 56; // int | ID of the hosting

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
| **hosting_id** | **int**| ID of the hosting | |

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
$hosting_id = 56; // int | ID of the hosting
$page = 1; // int | Page number, starting from 1. A page beyond the last one returns an empty `data` list (with the requested `page` in `meta`).
$per_page = 20; // int | Number of items per page. Values outside the allowed range are rejected with a validation error.

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
| **hosting_id** | **int**| ID of the hosting | |
| **page** | **int**| Page number, starting from 1. A page beyond the last one returns an empty &#x60;data&#x60; list (with the requested &#x60;page&#x60; in &#x60;meta&#x60;). | [optional] [default to 1] |
| **per_page** | **int**| Number of items per page. Values outside the allowed range are rejected with a validation error. | [optional] [default to 20] |

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
$hosting_id = 56; // int | ID of the hosting

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
| **hosting_id** | **int**| ID of the hosting | |

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
$hosting_id = 56; // int | ID of the hosting

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
| **hosting_id** | **int**| ID of the hosting | |

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

Lists the active main hostings of the account, one for each hosting purchase; their subdomains are not included

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
$page = 1; // int | Page number, starting from 1. A page beyond the last one returns an empty `data` list (with the requested `page` in `meta`).
$per_page = 20; // int | Number of items per page. Values outside the allowed range are rejected with a validation error.

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
| **page** | **int**| Page number, starting from 1. A page beyond the last one returns an empty &#x60;data&#x60; list (with the requested &#x60;page&#x60; in &#x60;meta&#x60;). | [optional] [default to 1] |
| **per_page** | **int**| Number of items per page. Values outside the allowed range are rejected with a validation error. | [optional] [default to 20] |

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
$hosting_id = 56; // int | ID of the hosting
$hosting_ssl_certificate_id = 56; // int | ID of the SSL certificate of the hosting

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
| **hosting_id** | **int**| ID of the hosting | |
| **hosting_ssl_certificate_id** | **int**| ID of the SSL certificate of the hosting | |

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

Starts the restore of the web contents of a backup among those of the backup list. The restore is asynchronous and is returned as a Task.

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
$hosting_id = 56; // int | ID of the hosting
$hosting_backup_id = 56; // int | ID of the hosting backup

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
| **hosting_id** | **int**| ID of the hosting | |
| **hosting_backup_id** | **int**| ID of the hosting backup | |

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
$hosting_id = 56; // int | ID of the hosting

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
| **hosting_id** | **int**| ID of the hosting | |

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
$hosting_id = 56; // int | ID of the hosting

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
| **hosting_id** | **int**| ID of the hosting | |

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
$hosting_id = 56; // int | ID of the hosting

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
| **hosting_id** | **int**| ID of the hosting | |

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

Create or replace catch-all alias

Sets the destinations of the catch-all alias: the response is 201 when the alias is created, 200 when it replaces the current one

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
$hosting_id = 56; // int | ID of the hosting
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
| **hosting_id** | **int**| ID of the hosting | |
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

Enable or disable file protection. Returns the updated hosting, with `file_protection_enabled`

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
$hosting_id = 56; // int | ID of the hosting
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
| **hosting_id** | **int**| ID of the hosting | |
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

Change HTTP version for hosting. Returns the updated hosting, with `http_version`. Not available (403) on a dedicated web server, on a non-Linux hosting or without multi-PHP; 409 while the purchase is suspended or the hosting is under maintenance

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
$hosting_id = 56; // int | ID of the hosting
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
| **hosting_id** | **int**| ID of the hosting | |
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
$hosting_id = 56; // int | ID of the hosting
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
| **hosting_id** | **int**| ID of the hosting | |
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

Update a PHP setting for hosting. Returns the updated hosting: `php_settings` lists the directives changed from the default value of the web server. Not available (403) on a dedicated web server, on a non-Linux hosting or without multi-PHP; 409 while the purchase is suspended or the hosting is under maintenance

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
$hosting_id = 56; // int | ID of the hosting
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
| **hosting_id** | **int**| ID of the hosting | |
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

Change PHP version for hosting. Returns the updated hosting, with `php_version`. Not available (403) on a dedicated web server, on a non-Linux hosting or without multi-PHP; 409 while the purchase is suspended or the hosting is under maintenance

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
$hosting_id = 56; // int | ID of the hosting
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
| **hosting_id** | **int**| ID of the hosting | |
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
