# BuyServiceSslCertificateRequestData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**domain** | **string** | Main domain for the SSL Certificate |
**approver_email** | **string** | One of the email addresses accepted as \&quot;approver\&quot; email for the SSL Certificate validation |
**admin_role** | **string** |  |
**admin_title** | **string** |  |
**admin_first_name** | **string** |  |
**admin_last_name** | **string** |  |
**admin_email** | **string** |  |
**admin_organization** | **string** |  |
**admin_phone_cc** | **string** | Country code phone prefix without leading \&quot;0\&quot; and without leading \&quot;+\&quot; sign; ie. \&quot;44\&quot; for UK or \&quot;39\&quot; for Italy |
**admin_phone_n** | **string** | Phone number without country code phone prefix |
**admin_address** | **string** |  |
**admin_city** | **string** |  |
**admin_state** | **string** | State/Province |
**admin_postcode** | **string** |  |
**admin_country** | **string** | ISO country code with 2 letters; ie. \&quot;IT\&quot; for Italy, \&quot;ES\&quot; for Spain |
**csr** | **string** | Use this only if you wish to provide your custom-generated CSR. If you specify your own generated CSR, you must provide the Private Key as well. | [optional]
**private_key** | **string** | Use this only if you wish to provide your custom-generated Private Key. If you specify your own generated Private Key, you must provide the CSR as well. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
