# InvoiceRow

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**invoice_row_id** | **int** |  |
**invoice_id** | **int** | Id of the invoice (&#x60;GET /api/v3/invoices/{invoice_id}&#x60;) |
**invoice_id_deposit** | **int** | Id of the deposit invoice that the row deducts, in a balance invoice (&#x60;GET /api/v3/invoices/{invoice_id}&#x60;); null for the other rows |
**service** | [**\Shellrent\Sdk\Model\Service**](Service.md) | Service of the row; null when the row is not for a service |
**purchase** | [**\Shellrent\Sdk\Model\Purchase**](Purchase.md) | Purchase of the row; null when the row is not for a purchase |
**description** | **string** |  |
**unit_description** | **string** | Unit of &#x60;unit_quantity&#x60;: &#x60;h&#x60; (hours) or &#x60;m&#x60; (minutes); null when the row is not priced by unit |
**unit_quantity** | **float** | Quantity, in the unit of &#x60;unit_description&#x60;; null when the row is not priced by unit |
**unit_amount** | [**\Shellrent\Sdk\Model\Amount**](Amount.md) | Price of one unit; its &#x60;amount&#x60; is null when the row is not priced by unit |
**amount** | [**\Shellrent\Sdk\Model\Amount**](Amount.md) |  |
**billing_data** | [**\Shellrent\Sdk\Model\BillingData**](BillingData.md) |  |
**is_recurring** | **bool** | Whether the row is for a recurring charge, such as a service renewed periodically, and not a one-time one |
**date_start** | **\DateTime** | Start of the period the row refers to; null when the row has no period |
**date_end** | **\DateTime** | End of the period the row refers to; null when the row has no period |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
