# OneClick

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**one_click_id** | **int** |  |
**payment_method** | **string** | Name of the payment method, in Italian, for example &#x60;Carta di credito&#x60; or &#x60;PayPal&#x60; |
**description** | **string** | Description of the method: the name of the payment method followed by the card (brand, last digits and expiry) or the email of the account |
**method_type** | **string** | Type of the method: &#x60;VISA&#x60;, &#x60;MASTERCARD&#x60;, &#x60;MAESTRO&#x60;, &#x60;AMERICAN_EXPRESS&#x60;, &#x60;PAYPAL&#x60;, &#x60;APPLEPAY&#x60;, &#x60;GOOGLEPAY&#x60;, &#x60;AMAZONPAY&#x60; or &#x60;SATISPAY&#x60;; null when unknown |
**creditcard_pan** | **string** | Number of the card, masked or reduced to the last digits; null for the methods without a card |
**date_expiry** | **\DateTime** | Expiry of the method: the expiry of the card or, without a card, four years after the activation |
**date_created** | **\DateTime** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
