# HostingAntivirusScan

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**antivirus_id** | **int** |  |
**hosting_id** | **int** | Id of the main hosting (&#x60;GET /api/v3/hostings/{hosting_id}&#x60;): the scan covers its whole space, subdomains included |
**status_code** | **string** | Status of the scan: &#x60;RUNNING&#x60;, &#x60;FAILED&#x60;, &#x60;SUCCESS&#x60; (no infection found) or &#x60;PROBLEM&#x60; (infections found) |
**status_name** | **string** | Translated name of the status, for display |
**status_color** | **string** | Color of the status, in hexadecimal, for display |
**antivirus_type** | **string** | Type of the scan: &#x60;M&#x60; manual, &#x60;A&#x60; automatic |
**scan_id** | **string** | Id of the scan on the web server; null until the scan completes |
**date_started** | **\DateTime** | Start of the scan, as sent by the antivirus; null until the scan completes, and for a failed scan |
**date_completed** | **\DateTime** | End of the scan, as sent by the antivirus; null until the scan completes, and for a failed scan |
**date_timeout** | **\DateTime** | When the scan was marked as failed because it ran too long; null otherwise |
**date_created** | **\DateTime** |  |
**total_files** | **int** | Files scanned; null when zero, and until the scan completes |
**total_infected** | **int** | Infected files found; null when zero, and until the scan completes |
**total_cleaned** | **int** | Infected files cleaned by the antivirus; null when zero, and until the scan completes |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
