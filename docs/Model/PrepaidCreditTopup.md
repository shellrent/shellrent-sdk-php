# PrepaidCreditTopup

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**topup_id** | **int** |  |
**invoice** | [**\Shellrent\Sdk\Model\Invoice**](Invoice.md) | Deposit invoice of the top-up; null until it is issued |
**initial_credit** | [**\Shellrent\Sdk\Model\AmountSimple**](AmountSimple.md) | Credit loaded by the top-up, VAT included |
**current_credit** | [**\Shellrent\Sdk\Model\AmountSimple**](AmountSimple.md) | Credit of the top-up not used yet |
**refund_expiry** | **\DateTime** | Last day on which the credit left can be refunded; null when there is no limit |
**credit_expiry** | **\DateTime** | Expiry date of the credit of the top-up; null when it does not expire |
**date_created** | **\DateTime** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
