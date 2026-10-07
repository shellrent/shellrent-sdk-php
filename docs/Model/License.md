# License

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**license_id** | **int** |  |
**purchase_id** | **int** | Id of the purchase of the license (&#x60;GET /api/v3/purchases/{purchase_id}&#x60;) |
**purchase_server_id** | **int** | Id of the purchase of the server where the license is installed (&#x60;GET /api/v3/purchases/{purchase_id}&#x60;); null for a license on an external host (&#x60;ip_address&#x60;) or without a server |
**service_name** | **string** | Name of the service of the purchase, in Italian |
**purchase_name** | **string** | Object name of the purchase, as &#x60;purchase_name.object_name&#x60; of the purchase |
**key_number** | **string** | Key number of a Plesk license; null for cPanel licenses |
**ip_address** | **string** | IP address of the external host where the license is installed, instead of a server (&#x60;purchase_server_id&#x60;) |
**is_els** | **bool** | Whether the server runs an obsolete operating system, covered by the Extended Lifecycle Support (ELS) of the supplier and charged as an additional fee |
**operative_system** | **string** | Operating system of the server, as reported by the license supplier; null until reported |
**purchase_status_code** | **string** | Status code of the purchase (&#x60;status_code&#x60; of &#x60;PurchaseStatus&#x60;): &#x60;NEW_V2&#x60;, &#x60;ACTIVE_V2&#x60; or &#x60;DELIVERED_V2&#x60; |
**date_activation** | **\DateTime** | Activation date of the purchase (&#x60;date_activation&#x60; of the purchase) |
**date_expiry** | **\DateTime** | Expiry date of the purchase (&#x60;date_expiry&#x60; of the purchase) |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
