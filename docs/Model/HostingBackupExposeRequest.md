# HostingBackupExposeRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**web_backup_id** | **int** | The &#x60;backup_id&#x60; of a backup with category &#x60;web&#x60; returned by &#x60;GET /api/v3/hostings/{hosting_id}/backups&#x60;. Send at least one of web_backup_id and db_backup_id | [optional]
**db_backup_id** | **int** | The &#x60;backup_id&#x60; of a backup with category &#x60;database&#x60; returned by &#x60;GET /api/v3/hostings/{hosting_id}/backups&#x60;. Send at least one of web_backup_id and db_backup_id | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
