# HostingModSecurityRule

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**rule_id** | **int** |  |
**hosting_id** | **int** | Id of the hosting (&#x60;GET /api/v3/hostings/{hosting_id}&#x60;) |
**rule_number** | **string** | Number of the rule in ModSecurity |
**description** | **string** | Message of the rule found by the scan, or the description given when it was added |
**included** | **bool** | Whether the rule is disabled on the hosting: it is in the list of rules that ModSecurity does not apply |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
