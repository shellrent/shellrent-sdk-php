# DomainCanChangeNameservers

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**domain_id** | **int** |  |
**can_activate_standard** | **bool** | Whether the standard nameservers can be activated (&#x60;PUT /api/v3/domains/{domain_id}/dns/standard&#x60;); false when they are the current ones |
**can_activate_cloudflare** | **bool** | Whether the Cloudflare nameservers can be activated (&#x60;PUT /api/v3/domains/{domain_id}/dns/cloudflare&#x60;); false when they are the current ones |
**can_activate_external** | **bool** | Whether the external nameservers can be activated (&#x60;PUT /api/v3/domains/{domain_id}/dns/external&#x60;); false when they are the current ones |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
