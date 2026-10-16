# CloudStorageUser

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**cloud_storage_user_id** | **int** |  |
**cloud_storage_id** | **int** | Id of the cloud storage (&#x60;GET /api/v3/cloud-storages/{cloud_storage_id}&#x60;) |
**purchase_id** | **int** | Id of the purchase of the user (&#x60;GET /api/v3/purchases/{purchase_id}&#x60;): the cloud storage purchase, or the own purchase of an &#x60;ADDITIONAL&#x60; user |
**type** | **string** | Type of the user: &#x60;PRIMARY&#x60; (main user), &#x60;ADDITIONAL&#x60; (additional user, with its own purchase), or &#x60;DISASTER_RECOVERY&#x60;, &#x60;TEMPLATE_VM&#x60; and &#x60;SELF_CLOUD&#x60; for the users managed by those services |
**username** | **string** |  |
**password** | **string** | Password of the user; null without the cloudstorage:secrets scope |
**path** | **string** | Home path of the user on the storage |
**soft_quota_gb** | **float** | Soft quota of the user, in GB (1 GB &#x3D; 1024 MB): it can be exceeded, up to the hard quota, for a grace period |
**hard_quota_gb** | **float** | Hard quota of the user, in GB (1 GB &#x3D; 1024 MB): the limit that the used space cannot exceed |
**used_space_bytes** | **int** | Space used by the user at the last sync of the cloud storage, in bytes; null before the first sync |
**allocated_space_bytes** | **int** | Space allocated to the user, that is its hard quota at the last sync of the cloud storage, in bytes; null before the first sync |
**grace_period_seconds** | **int** | Grace period left to go back under the soft quota, in seconds, saved the last time the user was found over quota; &#x60;0&#x60; if never. Only &#x60;PRIMARY&#x60; users are checked: &#x60;0&#x60; for the &#x60;ADDITIONAL&#x60; ones, null for the users of the services |
**last_alert** | **\DateTime** | Date of the last email that warned the customer that the user is over its soft quota, sent at most once a week and only for &#x60;PRIMARY&#x60; users; null if it was not over quota at the last check |
**active** | **bool** | Whether the user is active: deleted users are not returned |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
