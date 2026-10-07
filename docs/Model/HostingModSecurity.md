# HostingModSecurity

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**hosting_id** | **int** | Id of the hosting (&#x60;GET /api/v3/hostings/{hosting_id}&#x60;) |
**is_available** | **bool** | Whether ModSecurity can be managed: only on Linux hostings, and not while the purchase is suspended or in maintenance |
**is_active** | **bool** | Whether ModSecurity is enabled (&#x60;PATCH /api/v3/hostings/{hosting_id}/modsecurity&#x60;) |
**firewall_compatible** | **bool** | Whether the rules of ModSecurity can be managed on the web server of the hosting: false on dedicated web servers and when ModSecurity is not available |
**full_strict** | **bool** | Whether ModSecurity filters all the traffic, with no disabled rule; null when &#x60;firewall_compatible&#x60; is false |
**custom_rules** | **string[]** | Numbers of the rules disabled on the hosting, as read from the web server; null when the hosting has no custom configuration |
**custom_set** | **string[]** | Rule sets of the custom configuration of the hosting, as read from the web server; null when the hosting has no custom configuration |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
