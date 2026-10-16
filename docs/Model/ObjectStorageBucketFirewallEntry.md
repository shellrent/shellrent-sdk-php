# ObjectStorageBucketFirewallEntry

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**entry_id** | **int** |  |
**object_storage_id** | **int** | Id of the object storage (&#x60;GET /api/v3/object-storages/{object_storage_id}&#x60;) |
**bucket_id** | **int** | Id of the bucket (&#x60;GET /api/v3/object-storages/{object_storage_id}/buckets/{bucket_id}&#x60;) |
**ip** | **string** | IPv4 or IPv6 address, or subnet in CIDR notation, allowed to access the bucket |
**active** | **bool** | Whether the entry is active: removed entries are not returned |
**date_created** | **\DateTime** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
