# HostingEmailCatchAll

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**is_active** | **bool** | Whether the catch-all is set: mail sent to addresses of the domain that do not exist goes to &#x60;destinations&#x60; |
**address** | **string** | Address of the catch-all: &#x60;@&#x60; and the mail domain, in punycode |
**address_idna** | **string** | Address of the catch-all, with the domain in Unicode |
**destinations** | **string[]** | Destination addresses of the catch-all, with the domains in Unicode; empty when it is not set |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
