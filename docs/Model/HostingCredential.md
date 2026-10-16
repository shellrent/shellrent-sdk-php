# HostingCredential

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**credential_id** | **int** |  |
**type** | **string** | Type of the account: &#x60;FTP&#x60; (main FTP account), &#x60;FTP_SECONDARY&#x60; (additional FTP account), &#x60;DATABASE_MYSQL&#x60; or &#x60;DATABASE_MSSQL&#x60; (database account) |
**username** | **string** |  |
**password** | **string** | Password of the account, in clear text, as in the control panel: a temporary random one while the account is suspended |
**root_path** | **string** | Root directory of an &#x60;FTP_SECONDARY&#x60; account; null for the other accounts |
**is_active** | **bool** | Whether the account is active |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
