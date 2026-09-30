# OrderPayRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**use_prepaid_credit** | **bool** | Payment mode 1: set to true to pay with the available Prepaid Credit. Takes precedence over use_one_click and one_click_id. | [optional]
**use_one_click** | **bool** | Payment mode 2: set to true to use the saved One-Click payment methods. Payment will be attempted using saved methods in priority order until one is successfully authorized. Ignored if use_prepaid_credit is true; takes precedence over one_click_id. | [optional]
**one_click_id** | **int** | Payment mode 3: identifier of the One-Click payment method to use, to pay only with that specific method. Ignored if use_prepaid_credit or use_one_click is true. | [optional]
**order_ids** | **int[]** | IDs of the orders to be paid (1 ID or more order IDs to pay together) |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
