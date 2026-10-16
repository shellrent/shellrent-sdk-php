# PecDomain

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**pec_domain_id** | **int** |  |
**purchase_id** | **int** | Id of the purchase of the PEC domain (&#x60;GET /api/v3/purchases/{purchase_id}&#x60;) |
**purchase_name** | **string** | Name of the purchase object, as &#x60;purchase_name.object_name&#x60; of the purchase |
**purchase_status_code** | **string** | Status code of the purchase, for example &#x60;DELIVERED_V2&#x60; or &#x60;NEW_V2&#x60; (not active yet) |
**purchase_pec_owner_id** | **int** | Id of the current owner of the PEC domain, as &#x60;pec_owner_id&#x60; in the owner changes |
**domain** | **string** |  |
**provider_domain_id** | **string** | Id of the domain at Aruba, the PEC provider; null until the domain is certified there |
**transfer_in** | **bool** | Whether the PEC domain already existed at the provider and was transferred to us (incoming transfer) |
**force_decertify_domain** | **bool** | Whether the activation is stopped because the provider refused to certify the domain: the domain must be decertified first |
**aruba_public** | **bool** | Whether it is a public PEC domain of Aruba, shared by many customers (for example &#x60;pec.it&#x60;) |
**shellrent_public** | **bool** | Whether it is one of our public PEC domains, shared by many customers (for example &#x60;postacert.eu&#x60;) |
**can_require_owner_change** | **bool** | Whether an owner change can be requested now (&#x60;POST /api/v3/pec-domains/{pec_domain_id}/owner-changes&#x60;): false when the purchase is not active, when another request was not approved or when the domain is not at the provider yet |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
