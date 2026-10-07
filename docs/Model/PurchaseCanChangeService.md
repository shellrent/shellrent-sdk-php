# PurchaseCanChangeService

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**purchase_id** | **int** | Id of the purchase (&#x60;GET /api/v3/purchases/{purchase_id}&#x60;) |
**can_change_service** | **bool** | Whether the purchase allows a change of service now |
**services** | [**\Shellrent\Sdk\Model\ServiceChange[]**](ServiceChange.md) | Collection of Services to which it is possible to make the change. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
