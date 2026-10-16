# PurchaseCanRenew

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**purchase_id** | **int** | Id of the purchase (&#x60;GET /api/v3/purchases/{purchase_id}&#x60;) |
**can_renew** | **bool** | Whether the purchase can be renewed now: possible from &#x60;recurrence.days_renew&#x60; days before the expiry, when it is set to renew and has no pending order |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
