# ObjectStorageBucketChart

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**object_storage_id** | **int** | Id of the object storage (&#x60;GET /api/v3/object-storages/{object_storage_id}&#x60;) |
**bucket_id** | **int** | Id of the bucket (&#x60;GET /api/v3/object-storages/{object_storage_id}/buckets/{bucket_id}&#x60;) |
**interval** | **string** | Interval between two points, as an ISO 8601 duration: always &#x60;P1D&#x60;, one point per day |
**points** | [**\Shellrent\Sdk\Model\ObjectStorageBucketChartPointsInner[]**](ObjectStorageBucketChartPointsInner.md) | Usage of the bucket day by day, oldest first |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
