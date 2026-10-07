# TaxRegime

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**regime_code** | **string** | One of &#x60;ORDINARY&#x60;, &#x60;SPLIT_PAYMENT&#x60;, &#x60;EU_VIES&#x60;, &#x60;EU_EXPORTER&#x60; (habitual exporter), &#x60;EXTRA_EU&#x60;, &#x60;VATICAN&#x60;, &#x60;SANMARINO&#x60; or &#x60;ART_26&#x60; |
**regime_name** | **string** | Name of the regime, in Italian, for example &#x60;Ordinario&#x60; |
**code_edocument** | **string** | Nature code of the operation on the electronic invoice (&#x60;Natura&#x60;) when VAT is not applied, for example &#x60;N2.1&#x60;; null for the regimes with VAT |
**tax_rate** | **float** | VAT rate as a fraction, for example &#x60;0.22&#x60; for 22% |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
