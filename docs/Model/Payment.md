# Payment

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**payment_id** | **int** |  |
**payment_method** | **string** | Name of the payment method, in Italian, for example &#x60;Carta di credito&#x60; or &#x60;Bonifico Bancario&#x60; |
**payment_code** | **string** | Unique code of the payment: &#x60;SR&#x60; followed by letters and digits, to write in the reason of a bank transfer |
**amount_total** | [**\Shellrent\Sdk\Model\AmountSimple**](AmountSimple.md) | Amount of the payment, commission of the payment method included |
**amount_payed** | [**\Shellrent\Sdk\Model\AmountSimple**](AmountSimple.md) | Amount paid so far |
**date_payment** | **\DateTime** | When the payment was made (the latest paid attempt); null when nothing has been paid |
**payed** | **bool** | Whether the payment is complete: &#x60;amount_payed&#x60; reaches &#x60;amount_total&#x60; |
**prepaid_credit_operations** | [**\Shellrent\Sdk\Model\PrepaidCreditOperation[]**](PrepaidCreditOperation.md) | Uses of the prepaid credit made by the payment; empty unless the payment is with the prepaid credit |
**provider_data** | [**\Shellrent\Sdk\Model\PaymentProviderData**](PaymentProviderData.md) | Data of the payment provider, from the paid attempt or the latest one; null when the payment has no attempts |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
