# ObjectStorageS3Key

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**object_storage_id** | **int** | Id of the object storage (&#x60;GET /api/v3/object-storages/{object_storage_id}&#x60;) |
**sub_account_id** | **int** | Id of the sub-account of the object storage, the account at the storage that holds its buckets and IAM users (not the account id of the storage) |
**username** | **string** | Name of the sub-account at the storage |
**user_id** | **string** | Id of the root user of the sub-account in the IAM service of the storage |
**arn** | **string** | ARN (Amazon Resource Name) of the root user of the sub-account, used in the policies (&#x60;arn:aws:iam::&lt;account&gt;:root&#x60;) |
**access_key** | **string** | Access key ID, to use with &#x60;secret_key&#x60; in the S3 clients; null if the sub-account has no key saved |
**secret_key** | **string** | Secret of the key; null if the sub-account has no key saved |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
