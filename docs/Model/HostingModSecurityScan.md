# HostingModSecurityScan

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**scan_id** | **int** |  |
**hosting_id** | **int** | Id of the hosting (&#x60;GET /api/v3/hostings/{hosting_id}&#x60;) |
**date_created** | **\DateTime** |  |
**error** | **string** | Error of the scan; null when it succeeded |
**rules_found** | **int** | Number of rules found by the scan: those that generated errors or blocks on the day of the scan |
**rules_excluded** | **int** | Number of rules found by the scan that are disabled on the hosting now (&#x60;included&#x60; true in &#x60;GET /api/v3/hostings/{hosting_id}/modsecurity/rules&#x60;) |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
