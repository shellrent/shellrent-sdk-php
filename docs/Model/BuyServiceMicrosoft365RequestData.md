# BuyServiceMicrosoft365RequestData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**tenant_choice** | **string** | Select whether to choose an existing tenant (\&quot;select\&quot;), transfer one (\&quot;transfer\&quot;) or create a new tenant (\&quot;new\&quot;). When transferring a tenant, approve the Microsoft Partner Relationship before sending API requests |
**tenant_select** | **int** | ID of the tenant to which to assign the subscription, as listed by &#x60;GET /api/v3/shop/microsoft-365/tenants&#x60;. Required with \&quot;select\&quot;, not allowed otherwise | [optional]
**domain_prefix** | **string** | Prefix of the \&quot;.onmicrosoft.com\&quot; tenant domain: lowercase letters and digits, at most 27 characters. Required with \&quot;transfer\&quot; and \&quot;new\&quot;, not allowed otherwise | [optional]
**first_name** | **string** | Contact first name for the tenant: letters, spaces and hyphens. Required with \&quot;transfer\&quot; and \&quot;new\&quot;, not allowed otherwise | [optional]
**last_name** | **string** | Contact last name for the tenant: letters, spaces and hyphens. Required with \&quot;transfer\&quot; and \&quot;new\&quot;, not allowed otherwise | [optional]
**company_name** | **string** | Company name for the tenant: letters, digits and spaces. Required with \&quot;transfer\&quot; and \&quot;new\&quot;, not allowed otherwise | [optional]
**address** | **string** | Address for the tenant. Required with \&quot;transfer\&quot; and \&quot;new\&quot;, not allowed otherwise | [optional]
**city** | **string** | City for the tenant address: letters, spaces and hyphens. Required with \&quot;transfer\&quot; and \&quot;new\&quot;, not allowed otherwise | [optional]
**state** | **string** | State/Province for the tenant address: letters, spaces and hyphens. Required with \&quot;transfer\&quot; and \&quot;new\&quot;, not allowed otherwise | [optional]
**postal_code** | **string** | Postal code for the tenant address: letters, digits and spaces. Required with \&quot;transfer\&quot; and \&quot;new\&quot;, not allowed otherwise | [optional]
**country** | **string** | ISO country code with 2 letters (e.g. \&quot;IT\&quot; or \&quot;ES\&quot;). Required with \&quot;transfer\&quot; and \&quot;new\&quot;, not allowed otherwise | [optional]
**email_address** | **string** | Administrative email address for the tenant. Required with \&quot;transfer\&quot; and \&quot;new\&quot;, not allowed otherwise | [optional]
**phone_prefix** | **string** | International phone prefix of a country, with the leading \&quot;+\&quot; sign (e.g. \&quot;+44\&quot; for UK or \&quot;+39\&quot; for Italy). Required with \&quot;transfer\&quot; and \&quot;new\&quot;, not allowed otherwise | [optional]
**phone_number** | **string** | Phone number for the tenant contact: from 3 to 25 digits, spaces, dots, hyphens and parentheses. Required with \&quot;transfer\&quot; and \&quot;new\&quot;, not allowed otherwise | [optional]
**locale** | **string** | Locale to use for the tenant. Required with \&quot;transfer\&quot; and \&quot;new\&quot;, not allowed otherwise | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
