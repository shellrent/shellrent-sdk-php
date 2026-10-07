# ObjectStorageIamUser

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**iam_user_id** | **int** |  |
**object_storage_id** | **int** | Id of the object storage (&#x60;GET /api/v3/object-storages/{object_storage_id}&#x60;) |
**sub_account_id** | **int** | Id of the sub-account of the object storage, the account at the storage that holds its buckets and IAM users (not the account id of the storage) |
**code** | **int** | Progressive number of the IAM user in the object storage |
**code_full** | **string** | Username of the IAM user on the storage |
**iam_id** | **string** | Id of the user in the IAM service of the storage |
**arn** | **string** | ARN (Amazon Resource Name) of the IAM user, used in the policies (&#x60;arn:aws:iam::&lt;account&gt;:user/&lt;username&gt;&#x60;) |
**active** | **bool** | Whether the IAM user is active: deleted users are not returned |
**date_created** | **\DateTime** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
