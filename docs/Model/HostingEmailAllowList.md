# HostingEmailAllowList

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**allow_list_id** | **int** |  |
**hosting_id** | **int** | Id of the hosting (&#x60;GET /api/v3/hostings/{hosting_id}&#x60;) |
**sender** | **string** | Sender of the entry: the domain or the address |
**domain** | **string** | Sender domain; null when the entry is for an address |
**mailbox** | **string** | Sender address; null when the entry is for a whole domain |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
