# CreditnoteRow

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**creditnote_row_id** | **int** |  |
**creditnote_id** | **int** | Id of the credit note (&#x60;GET /api/v3/credit-notes/{credit_note_id}&#x60;) |
**invoice_row_id** | **int** | Id of the invoice row that the credit note row refers to (&#x60;GET /api/v3/invoices/{invoice_id}/rows/{row_id}&#x60;); null when it refers to none |
**reason** | **string** | Reason of the row, in Italian, for example &#x60;Errato Addebito&#x60; (wrong charge) or &#x60;Servizio non Erogato&#x60; (service not provided) |
**description** | **string** |  |
**amount** | [**\Shellrent\Sdk\Model\Amount**](Amount.md) |  |
**billing_data** | [**\Shellrent\Sdk\Model\BillingData**](BillingData.md) |  |
**date_start** | **\DateTime** | Start of the period the row refers to; null when the row has no period |
**date_end** | **\DateTime** | End of the period the row refers to; null when the row has no period |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
