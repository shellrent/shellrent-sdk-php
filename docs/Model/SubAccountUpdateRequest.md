# SubAccountUpdateRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**person_password** | **string** | New password of the account: at least 13 characters, with at least one uppercase letter, one lowercase letter, one number and one symbol | [optional]
**username_alias** | **string** | Alternative username of the account, also valid to log in; null or empty to remove it | [optional]
**administrative_person_name** | **string** | First name of the administrative contact of the account | [optional]
**administrative_person_surname** | **string** | Surname of the administrative contact | [optional]
**administrative_address** | **string** | Address of the administrative contact | [optional]
**administrative_city** | **string** | City of the administrative contact | [optional]
**administrative_state** | **string** | Acronym of the Italian province, ie. \&quot;VI\&quot; for Vicenza, or \&quot;EE\&quot; for an address outside Italy | [optional]
**administrative_country** | **string** | Country ISO code with 2 letters, ie. \&quot;IT\&quot; for Italy, \&quot;ES\&quot; for Spain, etc. | [optional]
**administrative_postal_code** | **string** | Postal code of the administrative contact | [optional]
**administrative_phone_prefix** | **string** | International phone code (prefix) for \&quot;Phone\&quot;, ie. \&quot;39\&quot; for Italy, \&quot;44\&quot; for United Kingdom; empty for Italy. Required with &#x60;administrative_phone&#x60; | [optional]
**administrative_phone** | **string** | Phone number without international phone code, digits only. Required with &#x60;administrative_phone_prefix&#x60; | [optional]
**administrative_mobile_prefix** | **string** | International phone code (prefix) for \&quot;Mobile\&quot;, ie. \&quot;39\&quot; for Italy, \&quot;44\&quot; for United Kingdom; empty for Italy. Required with &#x60;administrative_mobile&#x60; | [optional]
**administrative_mobile** | **string** | Mobile phone number without international phone code, digits only. Required with &#x60;administrative_mobile_prefix&#x60; | [optional]
**administrative_email** | **string** | Email address of the administrative contact | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
