# DomainContactRequestContactDataInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**data_field** | **string** | Code of the field, as in &#x60;contact_data&#x60; of the contact (for example &#x60;EMAIL&#x60;) |
**data_value** | **string** | New value of the field; for &#x60;PHONE_PREFIX&#x60; and &#x60;FAX_PREFIX&#x60;, the id of the country of the prefix, one of the &#x60;enum&#x60; of the field in &#x60;contact_data&#x60; of &#x60;GET /api/v3/tlds/{tld_id}&#x60;; for &#x60;BIRTHDAY&#x60;, a date &#x60;YYYY-MM-DD&#x60; |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
