# CloudStorageAccess

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**access_id** | **string** | Id of the access, used in its path: the IPv4 address in &#x60;hostname&#x60; |
**cloud_storage_id** | **int** | Id of the cloud storage (&#x60;GET /api/v3/cloud-storages/{cloud_storage_id}&#x60;) |
**hostname** | **string** | IPv4 address allowed to mount the storage via NFS |
**username** | **string** | Username of the cloud storage user whose storage the address can mount (&#x60;GET /api/v3/cloud-storages/{cloud_storage_id}/users&#x60;) |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
