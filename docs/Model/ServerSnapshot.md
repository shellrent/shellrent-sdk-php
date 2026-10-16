# ServerSnapshot

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**snapshot_id** | **int** |  |
**server_id** | **int** | Id of the server (&#x60;GET /api/v3/servers/{server_id}&#x60;) |
**snapshot_name** | **string** |  |
**snapshot_reference** | **string** | Id of the snapshot on the virtualization platform; null until the snapshot is created |
**active** | **bool** | Whether the snapshot is active: false once it is deleted or expired. The list returns only active snapshots |
**date_expiry** | **\DateTime** | Date after which the snapshot is deleted automatically; null if it does not expire |
**date_created** | **\DateTime** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
