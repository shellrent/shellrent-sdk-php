# HostingAntivirusRemovalScan

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**removal_scan_id** | **int** |  |
**hosting_id** | **int** | Id of the hosting (&#x60;GET /api/v3/hostings/{hosting_id}&#x60;) |
**task_id** | **int** | Id of the task of the cleaning (&#x60;GET /api/v3/tasks/{task_id}&#x60;); null when the task is not available |
**status** | **bool** | Whether the cleaning succeeded; null until the antivirus sends the result |
**error** | **string** | Error message of a failed cleaning; null otherwise |
**date_created** | **\DateTime** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
