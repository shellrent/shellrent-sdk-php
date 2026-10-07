# AccountBilling

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_billing_id** | **int** |  |
**legal_entity** | [**\Shellrent\Sdk\Model\LegalEntity**](LegalEntity.md) |  |
**tax_regime** | [**\Shellrent\Sdk\Model\TaxRegime**](TaxRegime.md) | Tax regime of the profile, which sets the VAT of its documents |
**organization** | **string** |  |
**name** | **string** |  |
**surname** | **string** |  |
**address** | **string** |  |
**city** | **string** |  |
**state** | **string** | Province: the acronym of the Italian province, for example &#x60;VI&#x60;, or &#x60;EE&#x60; outside Italy |
**postal_code** | **string** |  |
**country** | [**\Shellrent\Sdk\Model\Country**](Country.md) |  |
**gender** | **string** | Gender of the holder: &#x60;M&#x60; or &#x60;F&#x60;; null when not given |
**birth_date** | **\DateTime** | Date of birth of the holder; null when not given |
**birth_place** | **string** | Place of birth of the holder; null when not given |
**phone** | **string** | Phone, usually in the form &#x60;0039.0123456789&#x60;: &#x60;00&#x60; and the international prefix, a dot, the number; null when not given |
**vat_number** | **string** | VAT number of the holder (&#x60;partita IVA&#x60; in Italy); null when it has none |
**is_vat_group** | **bool** | Whether the holder belongs to an Italian VAT group (&#x60;Gruppo IVA&#x60;), whose members share the VAT number and have each their own tax code |
**fiscal_code** | **string** | Tax code of the holder (&#x60;codice fiscale&#x60; in Italy) |
**edocument_pec** | **string** | PEC address (certified email, &#x60;Posta Elettronica Certificata&#x60;) to which SDI, the Italian e-invoicing exchange system, delivers the electronic invoices when there is no recipient code; null when not given |
**edocument_code** | **string** | Recipient code (&#x60;Codice Destinatario&#x60;) with which SDI, the Italian e-invoicing exchange system, delivers the electronic invoices: 7 characters, 6 for the public administration; null when not given |
**exporter_expiry** | **\DateTime** | Expiry date of the declaration of intent (&#x60;dichiarazione d&#39;intento&#x60;) of a habitual exporter, whose invoices are without VAT; null when not given |
**exporter_number** | **string** | Protocol number of the declaration of intent of a habitual exporter, written on the electronic invoices; null when not given |
**exporter_date** | **\DateTime** | Date of the electronic receipt of the declaration of intent, issued by the Italian Revenue Agency (&#x60;Agenzia delle Entrate&#x60;); null when not given |
**is_split_payment** | **bool** | Whether split payment (&#x60;scissione dei pagamenti&#x60;) applies: the tax regime is &#x60;SPLIT_PAYMENT&#x60;, and the customer pays the VAT of the invoices directly to the Italian State |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
