# BuyServicePecRequestData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**box_name** | **string** | PEC mailbox local part, before the @ symbol |
**domain_select** | **int** | ID of the PEC domain to associate to the mailbox |
**password_recovery_email** | **string** | Email used for PEC password recovery |
**legal_entity** | **string** | Legal entity of the PEC owner | [optional]
**owner** | **int** | Id of the PEC owner, if it already exists | [optional]
**admin_first_name** | **string** | First name of the PEC owner | [optional]
**admin_last_name** | **string** | Last name of the PEC owner | [optional]
**admin_email** | **string** | Email of the PEC owner | [optional]
**admin_fiscal_code** | **string** | Fiscal code of the PEC owner | [optional]
**admin_post_code** | **string** | Post code of the PEC owner | [optional]
**admin_address** | **string** | Address of the PEC owner | [optional]
**admin_city** | **string** | City of the PEC owner | [optional]
**admin_province** | **string** | Province of the PEC owner | [optional]
**admin_phone** | **string** | Phone of the PEC owner | [optional]
**cellphone** | **string** | Cellphone of the PEC owner | [optional]
**admin_pec_country** | **string** | Country of the PEC owner | [optional]
**company_name** | **string** | Name of the company | [optional]
**company_fiscal_code** | **string** | Fiscal code of the company | [optional]
**admin_vat_number** | **string** | Vat number of the company | [optional]
**company_email** | **string** | Email of the company | [optional]
**company_address** | **string** | Address of the company | [optional]
**company_post_code** | **string** | Post code of the company | [optional]
**company_city** | **string** | City of the company | [optional]
**company_province** | **string** | Province of the company | [optional]
**company_phone** | **string** | Phone of the company | [optional]
**company_pec_country** | **string** | Country of the company | [optional]
**transferin_document** | **int** | ID of the uploaded file (first file, extension: \&quot;pdf\&quot;) Required only for transfer | [optional]
**transferin_contract** | **int** | ID of the uploaded file (first file, extension: \&quot;pdf\&quot;) Required only for transfer | [optional]
**transferin_identity_document** | **int** | ID of the uploaded file (first file, extension: \&quot;pdf\&quot;) Required only for transfer | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
