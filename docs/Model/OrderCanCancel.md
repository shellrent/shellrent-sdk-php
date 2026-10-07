# OrderCanCancel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**order_id** | **int** | Id of the order (&#x60;GET /api/v3/orders/{order_id}&#x60;) |
**can_cancel** | **bool** | Whether the order can be cancelled with &#x60;DELETE /api/v3/orders/{order_id}&#x60;: not when it is completed, closed or cancelled, or when one of its purchases does not allow it |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
