# Microsoft365

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**microsoft365_id** | **int** |  |
**purchase_id** | **int** | Id of the purchase of the subscription (&#x60;GET /api/v3/purchases/{purchase_id}&#x60;) |
**tenant_id** | **int** | Id of the tenant of the subscription (&#x60;GET /api/v3/microsoft-365-tenants/{microsoft_365_tenant_id}&#x60;) |
**service_name** | **string** | Name of the service of the purchase, in Italian |
**purchase_name** | **string** | Object name of the purchase (&#x60;purchase_name.object_name&#x60; of the purchase): the prefix of the tenant domain, null until it is set |
**supplier_code** | **string** | Reference of the subscription at the supplier; null until the supplier provisions it |
**supplier_status** | **string** | Status of the subscription as the supplier reports it, for example &#x60;active&#x60;, &#x60;suspended&#x60; or &#x60;canceled&#x60;; null until known |
**order_code** | **string** | Code of the order placed at the supplier for the subscription; null until it is placed |
**order_reference** | **string** | Reference of the order at the supplier; null until the supplier assigns it |
**order_status** | **string** | Status of the order at the supplier, for example &#x60;Order queued&#x60;, &#x60;Fulfilled&#x60; or &#x60;Archived&#x60;; null until the order is placed |
**order_need_submit** | **bool** | Whether the order at the supplier ended with a warning and must be submitted again |
**autorenew_enabled** | **bool** | Whether the subscription renews automatically at the supplier |
**is_trial** | **bool** | Whether the subscription is a trial |
**subscription_activation_date** | **\DateTime** | Activation date of the subscription at the supplier; null until known |
**subscription_expiry_date** | **\DateTime** | Expiry date of the subscription at the supplier; null until known |
**tenant** | [**\Shellrent\Sdk\Model\Microsoft365Tenant**](Microsoft365Tenant.md) | Tenant of the subscription |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
