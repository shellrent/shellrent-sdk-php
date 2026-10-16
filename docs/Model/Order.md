# Order

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**order_id** | **int** |  |
**type** | **string** | Type of the order: &#x60;P&#x60; (purchase), &#x60;R&#x60; (renewal) or &#x60;U&#x60; (update) |
**status** | [**\Shellrent\Sdk\Model\OrderStatus**](OrderStatus.md) |  |
**payment_status** | [**\Shellrent\Sdk\Model\OrderPaymentStatus**](OrderPaymentStatus.md) |  |
**invoice_status** | [**\Shellrent\Sdk\Model\OrderInvoiceStatus**](OrderInvoiceStatus.md) |  |
**invoice** | [**\Shellrent\Sdk\Model\Invoice**](Invoice.md) | Invoice of the order; null while the order is not invoiced |
**billing** | [**\Shellrent\Sdk\Model\AccountBilling**](AccountBilling.md) |  |
**intent_type** | **string** | Intent of the order: &#x60;DEFAULT&#x60;, &#x60;DEPOSIT&#x60; (top-up of the prepaid credit) or &#x60;BALANCE&#x60; (paid with the prepaid credit) |
**date_payed** | **\DateTime** | Date on which the order was fully paid; null while it is not |
**date_confirmed** | **\DateTime** | When the order was confirmed with deferred payment, to be paid later; null otherwise |
**payed** | **bool** | Whether the order is fully paid |
**total_amount** | [**\Shellrent\Sdk\Model\Amount**](Amount.md) | Total of the order and of the orders paid together with it |
**payment_amount** | [**\Shellrent\Sdk\Model\Amount**](Amount.md) | Amount still to pay for the order and the orders paid together with it, VAT included except in split payment; only &#x60;amount&#x60; is set |
**origin** | **string** | Where the order was created: &#x60;web&#x60; (control panel or cart), &#x60;api&#x60; (this API), &#x60;api2&#x60; (API v2) or &#x60;cli&#x60; (automatic procedures, such as the renewals) |
**promotions** | [**\Shellrent\Sdk\Model\Promotion[]**](Promotion.md) | Promotions applied to the rows of the order; those that increase the price are shown only to administrators |
**rows_count** | **int** | Number of rows of the order (&#x60;GET /api/v3/orders/{order_id}/rows&#x60;) |
**date_created** | **\DateTime** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
