# HostingBackup

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**hosting_backup_id** | **int** | Id of the backup in the hosting (&#x60;GET /api/v3/hostings/{hosting_id}/backups/{hosting_backup_id}&#x60;) |
**hosting_id** | **int** | Id of the hosting (&#x60;GET /api/v3/hostings/{hosting_id}&#x60;) |
**backup_id** | **int** | Id of the server backup, which can include other hostings: send it to &#x60;POST /api/v3/hostings/{hosting_id}/backups/exhibitions&#x60; |
**category** | **string** | Category of the backed up server: &#x60;web&#x60; (web contents), &#x60;database&#x60; or &#x60;mail&#x60; |
**backup_type_code** | **string** | Type of the backup, for example &#x60;HOSTING_DAILY&#x60;, &#x60;HOSTING_WEEKLY&#x60;, &#x60;HOSTING_MONTHLY&#x60; or &#x60;HOSTING_UNA_TANTUM&#x60; (one-off backup) |
**backup_frequency_code** | **string** | Frequency of the backup: &#x60;D&#x60; daily, &#x60;W&#x60; weekly, &#x60;M&#x60; monthly, &#x60;C&#x60; one-off |
**backup_date** | **\DateTime** | When the server backup was taken |
**backup_size** | **int** | Size of the server backup, in MB: it can include other hostings |
**backup_duration** | **string** | Duration of the server backup, as &#x60;HH:MM:SS&#x60; |
**exit_status** | **int** | Exit code of the server backup: 0 when it succeeded |
**error_type** | **string** | Outcome message of the server backup, in Italian, for example &#x60;Tutto ok&#x60; (all fine) |
**mailbox_name** | **string** | Mailbox saved, for a backup of category &#x60;mail&#x60;; null for the other categories |
**database_name** | **string** | Database saved, for a backup of category &#x60;database&#x60;; null for the other categories |
**date_created** | **\DateTime** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
