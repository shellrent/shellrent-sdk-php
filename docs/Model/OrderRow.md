# OrderRow

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**order_row_id** | **int** |  |
**order_id** | **int** | Id of the order (&#x60;GET /api/v3/orders/{order_id}&#x60;) |
**service** | **int** | Id of the service ordered (&#x60;service_id&#x60; of &#x60;Service&#x60;) |
**purchase** | **int** | Id of the purchase (&#x60;GET /api/v3/purchases/{purchase_id}&#x60;) |
**recurrence** | **int** | Id of the recurrence, the billing period of the row (&#x60;recurrence_id&#x60; of &#x60;Recurrence&#x60;) |
**price** | [**\Shellrent\Sdk\Model\Amount**](Amount.md) | Price of the row, with the promotion applied |
**base_price** | [**\Shellrent\Sdk\Model\Amount**](Amount.md) | Price of the row before the promotion |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
