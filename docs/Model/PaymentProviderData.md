# PaymentProviderData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**payed** | **bool** | Whether the attempt was paid |
**authorization_token** | **string** | Id of the authorization or of the order at the provider |
**authorization_code** | **string** | Authorization code of the transaction at the provider |
**status** | **string** | Status of the attempt at the provider, for example &#x60;OK&#x60; or &#x60;COMPLETED&#x60; |
**status_code** | **string** | Result code of the provider, for example &#x60;0&#x60; or &#x60;DECLINED&#x60;; &#x60;THRESHOLD_EXCEEDED&#x60; when the attempt was refused for the payment limits |
**message** | **string** | Message of the provider about the result |
**payer_name** | **string** | First name of the payer, as given by the provider |
**payer_surname** | **string** | Surname of the payer, as given by the provider |
**payer_email** | **string** | Email address of the payer, as given by the provider |
**bank_issuer** | **string** | Bank of the payer: the issuer of the card or the bank of the transfer |
**creditcard_pan** | **string** | Number of the card, masked or reduced to the last digits |
**creditcard_issuer** | **string** | Brand of the card, for example &#x60;VISA&#x60;, &#x60;MASTERCARD&#x60; or &#x60;AMEX&#x60; |
**creditcard_expiration** | **string** | Expiry of the card as &#x60;YYYY-MM-DD&#x60;, the last day of its month; for the methods without a card, the expiry set for the authorization |
**region** | **string** | Area of the card or of the payment, for example &#x60;EUROPE&#x60; or &#x60;SEPA&#x60; |
**transaction_type** | **string** | Type of the transaction at the provider, for example &#x60;NO_3DSECURE&#x60;, &#x60;DEBIT&#x60; or &#x60;TRF&#x60; (transfer) |
**payment_type** | **string** | Type of the payment at the provider, for example &#x60;PAYMENT_METHOD_TOKEN&#x60; or &#x60;CARD&#x60;; &#x60;Storno&#x60; for a payment created by the cancellation of another one |
**payment_date** | **\DateTime** | When the transaction took place at the provider |
**product_type** | **string** | Product of the card as given by the provider, for example &#x60;VISA&#x60; |
**nationality** | **string** | Country of the card or of the payer, as an ISO 3166-1 alpha-2 or alpha-3 code depending on the provider |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
