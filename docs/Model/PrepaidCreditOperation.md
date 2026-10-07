# PrepaidCreditOperation

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**operation_id** | **int** |  |
**operation_id_related** | **int** | Id of the payment with the credit (&#x60;REDEMPTION&#x60;) that the operation cancels, for &#x60;REDEMPTION_CANCELLATION&#x60; (&#x60;GET /api/v3/prepaid-credit/operations/{operation_id}&#x60;); null for the other types |
**prepaid_credit_topup** | [**\Shellrent\Sdk\Model\PrepaidCreditTopup**](PrepaidCreditTopup.md) | Top-up whose credit the operation adds or uses |
**operation_type** | [**\Shellrent\Sdk\Model\PrepaidCreditOperationType**](PrepaidCreditOperationType.md) |  |
**creditnote** | [**\Shellrent\Sdk\Model\Creditnote**](Creditnote.md) | Credit note issued for the operation, for &#x60;REFUND&#x60; and &#x60;CREDIT_CANCELLATION&#x60;; null for the other types |
**amount** | [**\Shellrent\Sdk\Model\AmountSimple**](AmountSimple.md) | Amount of the operation: positive when it adds credit, negative when it uses or removes it |
**date_created** | **\DateTime** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
