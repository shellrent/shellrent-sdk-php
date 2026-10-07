# PecOwnerChange

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**owner_change_id** | **int** |  |
**pec_id** | **int** | Id of the PEC mailbox of the request (&#x60;GET /api/v3/pec-mailboxes/{pec_id}&#x60;); null for the requests of a PEC domain |
**pec_domain_id** | **int** | Id of the PEC domain of the request (&#x60;GET /api/v3/pec-domains/{pec_domain_id}&#x60;); null for the requests of a mailbox |
**status_code** | **string** | Status of the request: &#x60;PENDENT&#x60; (documents not sent yet), &#x60;PENDENT_APPROVAL&#x60; (waiting for our approval), &#x60;APPROVED&#x60; or &#x60;REJECTED&#x60; |
**rejection_reason** | **string** | Reason of the rejection; null unless the request was rejected |
**submission_date** | **\DateTime** | When the documents were sent; null until they are |
**acceptance_date** | **\DateTime** | When the request was approved |
**rejection_date** | **\DateTime** | When the request was rejected |
**has_identity_document** | **bool** | Whether the request has the identity document |
**has_contract_document** | **bool** | Whether the request has the contract |
**has_order_module_document** | **bool** | Whether the request has the order form |
**owner_old** | [**\Shellrent\Sdk\Model\PecOwnerSummary**](PecOwnerSummary.md) |  |
**owner_new** | [**\Shellrent\Sdk\Model\PecOwnerSummary**](PecOwnerSummary.md) |  |
**date_created** | **\DateTime** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
