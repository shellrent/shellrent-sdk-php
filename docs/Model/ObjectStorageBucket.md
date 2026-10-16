# ObjectStorageBucket

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**bucket_id** | **int** |  |
**object_storage_id** | **int** | Id of the object storage (&#x60;GET /api/v3/object-storages/{object_storage_id}&#x60;) |
**sub_account_id** | **int** | Id of the sub-account of the object storage, the account at the storage that holds its buckets and IAM users (not the account id of the storage) |
**region_id** | **int** | Id of the storage region of the bucket |
**bucket_remote_id** | **int** |  |
**code** | **int** | Progressive number of the bucket in the object storage |
**code_full** | **string** | Same value as &#x60;name&#x60; |
**bucket_number** | **string** |  |
**name** | **string** |  |
**versioning** | **string** | Versioning status of the bucket: &#x60;ENABLED&#x60;, &#x60;SUSPENDED&#x60;, or &#x60;DISABLED&#x60; if it has never been enabled |
**creation_date** | **\DateTime** | Date the bucket was created on the storage |
**arn** | **string** | ARN (Amazon Resource Name) of the bucket, used in the policies (&#x60;arn:aws:s3:::&lt;name&gt;&#x60;) |
**policy_json** | **string** | Policy of the bucket on the storage, as a JSON string, with the firewall entries; null if the bucket has none |
**active_storage_bytes** | **int** | Space used by the active objects, in bytes |
**deleted_storage_bytes** | **int** | Space of the deleted objects that still counts toward the purchased space, in bytes |
**active_objects** | **int** | Number of active objects |
**deleted_objects** | **int** | Number of deleted objects still counted in &#x60;deleted_storage_bytes&#x60; |
**api_calls_count** | **int** | Number of API calls in the day of the latest usage data |
**storage_wrote_bytes** | **int** | Data written in the day of the latest usage data, in bytes |
**storage_read_bytes** | **int** | Data read in the day of the latest usage data, in bytes |
**egress_traffic_bytes** | **int** | Outgoing traffic in the day of the latest usage data, in bytes |
**ingress_traffic_bytes** | **int** | Incoming traffic in the day of the latest usage data, in bytes |
**reference_date** | **\DateTime** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
