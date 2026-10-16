# DnsRecordCaaData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**flag** | **int** | Flags of the CAA record; the API writes only &#x60;0&#x60; |
**tag_value** | **string** | Tag of the CAA record, for example &#x60;issue&#x60; or &#x60;issuewild&#x60; |
**can_sign_http_exchanges** | **bool** | Whether the value of the tag has the parameter &#x60;cansignhttpexchanges&#x3D;yes&#x60;; null when the parameter is missing |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
