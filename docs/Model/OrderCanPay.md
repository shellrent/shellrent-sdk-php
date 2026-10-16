# OrderCanPay

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**order_id** | **int** | Id of the order (&#x60;GET /api/v3/orders/{order_id}&#x60;) |
**amount** | [**\Shellrent\Sdk\Model\AmountSimple**](AmountSimple.md) | Amount to pay with the payment method of the request, the commission of the method included; null when the order cannot be paid with it |
**orders** | [**\Shellrent\Sdk\Model\Order[]**](Order.md) | Orders paid together with this one; empty when the order cannot be paid |
**can_pay** | **bool** | Whether the order can be paid now with the payment method of the request, together with the orders in &#x60;orders&#x60;: the One-Click method is active and not expired, the prepaid credit can be used for these orders and is enough |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
