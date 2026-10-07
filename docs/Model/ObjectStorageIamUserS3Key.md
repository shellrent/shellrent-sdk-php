# ObjectStorageIamUserS3Key

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**s3_key_id** | **int** |  |
**object_storage_id** | **int** | Id of the object storage (&#x60;GET /api/v3/object-storages/{object_storage_id}&#x60;) |
**iam_user_id** | **int** | Id of the IAM user (&#x60;GET /api/v3/object-storages/{object_storage_id}/iam-users/{iam_user_id}&#x60;) |
**access_key** | **string** | Access key ID, to use with &#x60;secret_key&#x60; in the S3 clients |
**secret_key** | **string** | Secret of the S3 key; returned when the key is created and, afterwards, only with the objectstorage:secrets scope (null otherwise) |
**status** | **string** | Status of the key in the IAM service of the storage, for example &#x60;Active&#x60; |
**active** | **bool** | Whether the key is active: deleted keys are not returned; its state on the storage is in &#x60;status&#x60; |
**date_created** | **\DateTime** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
