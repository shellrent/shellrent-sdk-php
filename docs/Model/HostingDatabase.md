# HostingDatabase

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**database_id** | **string** | Id of the database: its name |
**name** | **string** |  |
**type** | **string** | Type of the database: &#x60;MYSQL&#x60; or &#x60;MSSQL&#x60; (Microsoft SQL Server) |
**credential_id** | **int** | Id of the database account that owns the database, as in &#x60;GET /api/v3/hostings/{hosting_id}/credentials&#x60; |
**username** | **string** | Username of the database account |
**supplier_code** | **string** | Id of the database on Plesk, for the hostings managed with Plesk; null for the others |
**table_count** | **int** | Number of tables in the database; null for the databases on Plesk |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
