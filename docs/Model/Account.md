# Account

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **int** |  |
**username** | **string** | Username assigned to the account when it is created, used to log in |
**username_alias** | **string** | Alternative username chosen for the account, also valid to log in; null when not set |
**account_name** | **string** | Display name of the account: first name and surname of the administrative contact, or its organization, or the username; empty when the account has no administrative contact |
**name** | **string** | First name of the administrative contact |
**surname** | **string** | Surname of the administrative contact |
**email** | **string** |  |
**phone** | **string** | Phone of the administrative contact, usually in the form &#x60;0039.0123456789&#x60;: &#x60;00&#x60; and the international prefix, a dot, the number |
**address** | **string** |  |
**city** | **string** |  |
**state** | **string** | Province of the administrative contact: the acronym of the Italian province, for example &#x60;VI&#x60;, or &#x60;EE&#x60; outside Italy |
**postal_code** | **string** |  |
**country** | [**\Shellrent\Sdk\Model\Country**](Country.md) |  |
**date_created** | **\DateTime** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
