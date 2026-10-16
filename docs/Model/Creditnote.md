# Creditnote

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**creditnote_id** | **int** |  |
**invoice_id** | **int** | Id of the invoice the credit note refers to (&#x60;GET /api/v3/invoices/{invoice_id}&#x60;); null when it refers to none |
**billing** | [**\Shellrent\Sdk\Model\AccountBilling**](AccountBilling.md) |  |
**sdi_document_status** | [**\Shellrent\Sdk\Model\SdiDocumentStatus**](SdiDocumentStatus.md) | Status of the credit note on SDI, the Italian e-invoicing exchange system; null for the credit notes not sent through SDI, issued before electronic invoicing |
**sdi_document_type** | [**\Shellrent\Sdk\Model\SdiDocumentType**](SdiDocumentType.md) |  |
**tax_regime** | [**\Shellrent\Sdk\Model\TaxRegime**](TaxRegime.md) | Tax regime set on the credit note; null when it uses the one of the billing profile (&#x60;billing.tax_regime&#x60;) |
**date_emitted** | **\DateTime** | Date of issue of the credit note |
**creditnote_year** | **int** | Year of the numbering of the credit note |
**creditnote_number** | **string** | Complete number of the credit note: the year followed by the number on 6 digits, for example &#x60;2025000123&#x60; |
**creditnote_caption** | **string** | Legal note of the tax regime printed on the credit note, in Italian, such as the law under which VAT is not applied; null when the regime has none |
**sdi_identifier** | **string** | Identifier assigned by SDI to the credit note; null when it has not been sent to SDI |
**sdi_filename** | **string** | Name of the file sent to SDI; null when not sent, and for the credit notes issued before November 2024 |
**total_amount** | [**\Shellrent\Sdk\Model\Amount**](Amount.md) |  |
**rows_count** | **int** | Number of rows of the credit note (&#x60;GET /api/v3/credit-notes/{credit_note_id}/rows&#x60;) |
**date_created** | **\DateTime** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
