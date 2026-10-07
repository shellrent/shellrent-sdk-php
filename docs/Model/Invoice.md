# Invoice

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**invoice_id** | **int** |  |
**billing** | [**\Shellrent\Sdk\Model\AccountBilling**](AccountBilling.md) |  |
**type** | **string** | Type of the invoice: &#x60;NORMAL&#x60;, &#x60;DEPOSIT&#x60; (top-up of the prepaid credit) or &#x60;BALANCE&#x60; (paid with the prepaid credit: some rows deduct the deposit invoices) |
**sdi_document_status** | [**\Shellrent\Sdk\Model\SdiDocumentStatus**](SdiDocumentStatus.md) | Status of the invoice on SDI, the Italian e-invoicing exchange system; null for the invoices not sent through SDI, issued before electronic invoicing |
**sdi_document_type** | [**\Shellrent\Sdk\Model\SdiDocumentType**](SdiDocumentType.md) | Type of the electronic document on SDI; &#x60;TD01&#x60; (invoice) when the invoice has none |
**date_emitted** | **\DateTime** | Date of issue of the invoice |
**invoice_year** | **int** | Year of the numbering of the invoice |
**invoice_number** | **string** | Complete number of the invoice: the year followed by the number on 6 digits, for example &#x60;2025000123&#x60; |
**invoice_caption** | **string** | Legal note of the tax regime printed on the invoice, in Italian, such as the law under which VAT is not applied; null when the regime has none |
**invoice_caption_additional** | **string** | Additional reason (&#x60;Causale&#x60;) of the electronic invoice; null when there is none |
**payed** | **bool** | Whether the invoice is paid |
**sdi_identifier** | **string** | Identifier assigned by SDI to the invoice; null when it has not been sent to SDI |
**sdi_filename** | **string** | Name of the file sent to SDI; null when not sent, and for most invoices issued before November 2024 |
**total_amount** | [**\Shellrent\Sdk\Model\Amount**](Amount.md) |  |
**amount_no_balance** | [**\Shellrent\Sdk\Model\Amount**](Amount.md) | Total of the invoice without the rows that deduct deposit invoices; the same as &#x60;total_amount&#x60; except for &#x60;BALANCE&#x60; invoices |
**payment_amount** | [**\Shellrent\Sdk\Model\Amount**](Amount.md) | Amount to pay: the taxable amount in &#x60;amount&#x60;, with the VAT and the total to pay. With split payment the customer pays only the taxable amount, because the VAT goes to the State, so the VAT fields are null |
**orders** | **int[]** | Ids of the orders of the invoice (&#x60;GET /api/v3/orders/{order_id}&#x60;) |
**rows_count** | **int** | Number of rows of the invoice (&#x60;GET /api/v3/invoices/{invoice_id}/rows&#x60;) |
**date_created** | **\DateTime** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
