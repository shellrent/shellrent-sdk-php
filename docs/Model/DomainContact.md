# DomainContact

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**domain_contact_id** | **int** |  |
**domain_id** | **int** | Id of the domain (&#x60;GET /api/v3/domains/{domain_id}&#x60;) |
**type** | **string** | Role of the contact: &#x60;R&#x60; (registrant), &#x60;A&#x60; (administrative), &#x60;T&#x60; (technical) or &#x60;O&#x60; (organization) |
**to_sync** | **bool** | Whether the contact has changes not yet sent to the registry (&#x60;POST /api/v3/domains/{domain_id}/contacts/synchronizations&#x60;) |
**contact_data** | [**\Shellrent\Sdk\Model\DomainContactData[]**](DomainContactData.md) | Data of the contact, one item per field |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
