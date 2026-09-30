# BuyServiceMicrosoft365RequestData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**tenant_choice** | **string** | Select whether to choose an existing tenant (\&quot;select\&quot;), transfer one (\&quot;transfer\&quot;) or create a new tenant (\&quot;new\&quot;). When transferring a tenant, approve the Microsoft Partner Relationship before sending API requests |
**tenant_select** | **int** | Tenant ID to which to assign the subscription when selecting an existing tenant | [optional]
**domain_prefix** | **string** | Prefix of the \&quot;.onmicrosoft.com\&quot; tenant domain when creating or transferring a tenant | [optional]
**first_name** | **string** | Contact first name for the tenant when not selecting an existing tenant | [optional]
**last_name** | **string** | Contact last name for the tenant when not selecting an existing tenant | [optional]
**company_name** | **string** | Company name for the tenant when not selecting an existing tenant | [optional]
**address** | **string** | Address for the tenant when not selecting an existing tenant | [optional]
**city** | **string** | City for the tenant when not selecting an existing tenant | [optional]
**state** | **string** | State/Province for the tenant address when not selecting an existing tenant | [optional]
**postal_code** | **string** | Postal code for the tenant address when not selecting an existing tenant | [optional]
**country** | **string** | ISO country code with 2 letters (e.g. \&quot;IT\&quot; or \&quot;ES\&quot;) when not selecting an existing tenant | [optional]
**email_address** | **string** | Administrative email address for the tenant when not selecting an existing tenant | [optional]
**phone_prefix** | **string** | Country code phone prefix with leading \&quot;+\&quot; sign when not selecting an existing tenant | [optional]
**phone_number** | **string** | Phone number for the tenant contact when not selecting an existing tenant | [optional]
**locale** | **string** | Locale to use for the tenant when not selecting an existing tenant | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
