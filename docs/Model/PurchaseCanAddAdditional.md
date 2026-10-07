# PurchaseCanAddAdditional

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**purchase_id** | **int** | Id of the purchase (&#x60;GET /api/v3/purchases/{purchase_id}&#x60;) |
**can_add_additional** | **bool** | Whether additional services can be bought for the purchase now |
**services** | [**\Shellrent\Sdk\Model\Service[]**](Service.md) | Additional services that can be bought for the purchase; empty when &#x60;can_add_additional&#x60; is false |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
