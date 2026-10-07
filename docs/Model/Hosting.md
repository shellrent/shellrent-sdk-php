# Hosting

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**hosting_id** | **int** |  |
**purchase_id** | **int** | Id of the purchase of the hosting (&#x60;GET /api/v3/purchases/{purchase_id}&#x60;); null for a subdomain, which belongs to the purchase of its main hosting |
**parent_hosting_id** | **int** | Id of the main hosting of a subdomain (&#x60;GET /api/v3/hostings/{hosting_id}&#x60;); null for a main hosting |
**is_primary** | **bool** | Whether it is a main hosting; false for a subdomain (&#x60;POST /api/v3/hostings/{hosting_id}/subdomains&#x60;) |
**host_name** | **string** | Host name, in Unicode: the hostname of a main hosting (usually its domain), the level name of a subdomain (for example &#x60;blog&#x60;) |
**host_name_idna** | **string** | &#x60;host_name&#x60; in punycode |
**full_name** | **string** | Full hostname, in Unicode: for a subdomain, the level name followed by the hostname of the main hosting |
**full_name_idna** | **string** | &#x60;full_name&#x60; in punycode |
**domain_full_name** | **string** | Hostname on the domain of the purchase, in Unicode: the domain for a main hosting, the subdomain of the domain for a subdomain |
**domain_full_name_idna** | **string** | &#x60;domain_full_name&#x60; in punycode |
**php_version** | **string** | PHP version of the hosting, for example &#x60;8.3&#x60; (&#x60;PATCH /api/v3/hostings/{hosting_id}/php-version&#x60;); null or empty when not set |
**http_version** | **string** | HTTP version of the hosting: 1 for HTTP/1.1, 2 for HTTP/2 (&#x60;PATCH /api/v3/hostings/{hosting_id}/http-version&#x60;) |
**file_protection_enabled** | **bool** | Whether the file protection is enabled (&#x60;PATCH /api/v3/hostings/{hosting_id}/file-protection&#x60;) |
**php_settings** | [**\Shellrent\Sdk\Model\HostingPhpSetting[]**](HostingPhpSetting.md) | PHP directives changed on the hosting (&#x60;PATCH /api/v3/hostings/{hosting_id}/php-settings&#x60;): the others have the default value of the web server |
**is_active** | **bool** | Whether the hosting is active: always true, since deleted subdomains are not returned |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
