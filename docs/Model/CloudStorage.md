# CloudStorage

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**cloud_storage_id** | **int** |  |
**purchase_id** | **int** | Id of the purchase of the cloud storage (&#x60;GET /api/v3/purchases/{purchase_id}&#x60;) |
**name** | **string** | Code of the cloud storage (7 hexadecimal characters), used in its hosts and in the username of its main user |
**read_write_host** | **string** | Host for the read-write access to the storage, without the domain: the full name is &#x60;&lt;read_write_host&gt;.serverlet.com&#x60; |
**read_only_host** | **string** | Host for the read-only access to the storage, served by its replica, without the domain: the full name is &#x60;&lt;read_only_host&gt;.serverlet.com&#x60; |
**app_host** | **string** | Host of the web file manager (Nextcloud), without the domain: it is reachable at &#x60;https://&lt;app_host&gt;.serverlet.com&#x60; |
**group_disk_used_bytes** | **int** | Space used by the cloud storage with all its users, those of the services included, in bytes, at the last sync (&#x60;date_sync&#x60;) |
**date_sync** | **\DateTime** | Date of the last sync of the used space with the storage server |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
