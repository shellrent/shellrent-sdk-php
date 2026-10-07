# Promotion

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**promocode** | **string** | Promotional code used; null when the promotion applies without a code |
**description** | **string** | Promotion description; null when the promotion has none |
**percentage_increase** | **float** | Price increase, in percent; null for the other types |
**percentage_decrease** | **float** | Discount, in percent; null for the other types |
**amount_increase** | [**\Shellrent\Sdk\Model\Amount**](Amount.md) | Price increase, as an amount before VAT; null for the other types |
**amount_decrease** | [**\Shellrent\Sdk\Model\Amount**](Amount.md) | Discount, as an amount before VAT; null for the other types |
**amount_fixed** | [**\Shellrent\Sdk\Model\Amount**](Amount.md) | Fixed price set by the promotion, before VAT; null for the other types |
**applied_amount** | [**\Shellrent\Sdk\Model\Amount**](Amount.md) | Difference between the base price and the price of the order row (&#x60;base_price&#x60; and &#x60;price&#x60; of &#x60;OrderRow&#x60;): negative when the promotion increases the price |
**date_applied** | **\DateTime** | When the promotion was applied to the order |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
