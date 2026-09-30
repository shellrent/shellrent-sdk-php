# Order

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**order_id** | **int** |  | [optional]
**type** | **string** |  | [optional]
**status** | [**\Shellrent\Sdk\Model\OrderStatus**](OrderStatus.md) |  | [optional]
**payment_status** | [**\Shellrent\Sdk\Model\OrderPaymentStatus**](OrderPaymentStatus.md) |  | [optional]
**invoice_status** | [**\Shellrent\Sdk\Model\OrderInvoiceStatus**](OrderInvoiceStatus.md) |  | [optional]
**invoice** | [**\Shellrent\Sdk\Model\Invoice**](Invoice.md) |  | [optional]
**billing** | [**\Shellrent\Sdk\Model\AccountBilling**](AccountBilling.md) |  | [optional]
**intent_type** | **string** |  | [optional]
**date_payed** | **\DateTime** |  | [optional]
**date_confirmed** | **\DateTime** |  | [optional]
**payed** | **bool** |  | [optional]
**total_amount** | [**\Shellrent\Sdk\Model\Amount**](Amount.md) |  | [optional]
**payment_amount** | [**\Shellrent\Sdk\Model\Amount**](Amount.md) |  | [optional]
**origin** | **string** |  | [optional]
**promotions** | [**\Shellrent\Sdk\Model\Promotion[]**](Promotion.md) |  | [optional]
**rows_count** | **int** |  | [optional]
**date_created** | **\DateTime** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
