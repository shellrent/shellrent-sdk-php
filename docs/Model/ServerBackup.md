# ServerBackup

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**server_backup_id** | **int** |  |
**backup_recurrent_id** | **int** | Id of the run of the recurrent backup that made the backup; null for a one-off backup |
**backup_server_id_parent** | **int** | Id of the backup this one is based on, for incremental backups; null otherwise |
**server_id** | **int** | Id of the backed up server (&#x60;GET /api/v3/servers/{server_id}&#x60;) |
**cluster_id_server_residence** | **int** | Id of the cluster where the server resides |
**cluster_id_backup_residence** | **int** | Id of the cluster where the backup is kept |
**backup_type_id** | **int** | Id of the backup type |
**backup_mode** | **string** | Strategy of the backup type: &#x60;FULL&#x60;, &#x60;INC&#x60; (incremental) or &#x60;DIFF&#x60; (differential) |
**backup_frequency_id** | **int** | Id of the frequency of the backup type |
**backup_type_code** | **string** | Code of the backup type, for example &#x60;CLOUD_DAILY&#x60;, &#x60;CLOUD_WEEKLY&#x60; or &#x60;CLOUD_UNA_TANTUM&#x60; (one-off) |
**backup_frequency_code** | **string** | Frequency of the backup type: &#x60;D&#x60; daily, &#x60;W&#x60; weekly, &#x60;HM&#x60; twice a month, &#x60;M&#x60; monthly, &#x60;HY&#x60; every six months, &#x60;Y&#x60; yearly, &#x60;C&#x60; one-off, &#x60;R&#x60; private cloud replication |
**backup_date** | **\DateTime** | Date the backup was taken |
**backup_size** | **int** | Size of the backup, in MB |
**backup_duration** | **string** | Duration of the backup, as text in the &#x60;H:MM:SS&#x60; form, preceded by the days for longer backups (for example &#x60;1 day, 2:03:04&#x60;) |
**exit_status** | **int** | Exit status of the backup: &#x60;0&#x60; if it succeeded |
**error_type** | **string** | Error of the backup, as a code or a message (for example &#x60;DOWNLOAD_DISK_FAILED&#x60;); &#x60;N.A.&#x60; when it succeeded |
**date_created** | **\DateTime** |  |
**checksum** | **string** | Checksum of the backup, sent by the backup scripts; null if not sent |
**backup_user_visibility** | **bool** | Whether the customer can see the backup: only the most recent successful backups of each type are visible, as many as the retention of the type, and only those are returned |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
