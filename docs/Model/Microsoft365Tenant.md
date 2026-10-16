# Microsoft365Tenant

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**tenant_id** | **int** |  |
**microsoft_uuid** | **string** | Id of the tenant at Microsoft (tenant UUID); null until detected |
**domain_prefix** | **string** | Prefix of the &#x60;.onmicrosoft.com&#x60; domain of the tenant |
**microsoft_domain** | **string** | Full &#x60;.onmicrosoft.com&#x60; domain of the tenant |
**imported** | **bool** | Whether the tenant was transferred from another partner (&#x60;tenant_choice&#x60; &#x60;transfer&#x60;) instead of created new (&#x60;new&#x60;) |
**first_name** | **string** |  |
**last_name** | **string** |  |
**country** | **string** | Country of the tenant, as an ISO 3166-1 alpha-2 code, for example &#x60;IT&#x60; |
**company_name** | **string** |  |
**address** | **string** |  |
**city** | **string** |  |
**state** | **string** | State or province of the tenant address |
**postal_code** | **string** |  |
**email_address** | **string** |  |
**phone_prefix** | **string** | International phone prefix with the leading &#x60;+&#x60;, for example &#x60;+39&#x60; |
**phone_number** | **string** |  |
**locale** | **string** | Locale of the tenant, for example &#x60;it_IT&#x60; or &#x60;en_US&#x60; |
**account_login** | **string** | Username of the administrator account of the tenant, whose password is sent by email; null when not available |
**mca_compliant** | **bool** | Whether the Microsoft Customer Agreement (MCA) has been accepted for the tenant; null until checked |
**mca_sign_date** | **\DateTime** | Date and time the Microsoft Customer Agreement was accepted; null when not known |
**mca_template_id** | **string** | Template of the accepted Microsoft Customer Agreement, as an id or as the URL of the agreement; null when not accepted |
**mca_error** | **string** | Message of the supplier on the check of the Microsoft Customer Agreement, for example &#x60;customer is not provisioned yet&#x60;; null when there is none |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
