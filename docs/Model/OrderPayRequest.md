# OrderPayRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**use_prepaid_credit** | **bool** | Set to true to use available Prepaid Credit for the payment | [optional]
**use_one_click** | **bool** | Set to true to use One-Click payment methods. Payment will be attempted using saved methods in priority order until one is successfully authorized. | [optional]
**one_click_id** | **int** | Identifier of the One-Click payment method to use. Use this if you wish to use only one specific One-Click payment method. | [optional]
**order_ids** | **int[]** | IDs of the orders to be paid (1 ID or more order IDs to pay together) |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
