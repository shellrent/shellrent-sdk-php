# DomainData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**registry_status** | **string** | Status of the domain as the registry reports it, for example &#x60;ok&#x60;, &#x60;clientTransferProhibited&#x60; or &#x60;pendingDelete&#x60; |
**incoming_authcode** | **string** | Authcode given for the incoming transfer of the domain; null without the &#x60;domains:secrets&#x60; scope |
**outgoing_authcode** | **string** | Authcode to transfer the domain to another registrar; null without the &#x60;domains:secrets&#x60; scope |
**registry_nameservers** | **string** | Nameservers of the domain at the registry, as a text in the format of the registry (usually hostnames separated by commas) |
**registry_expiry** | **\DateTime** | Expiry of the domain at the registry |
**registry_created** | **\DateTime** | Registration of the domain at the registry |
**registry_updated** | **\DateTime** | Last update of the domain at the registry |
**registry_deletion** | **\DateTime** | Deletion of the domain at the registry, when the registry reports one |
**date_deactivation** | **\DateTime** | When these data were deactivated because the registrar no longer has the domain (for example after an outgoing transfer); null while they are active |
**identity_validation_status** | **string** | Status of the validation of the identity of the registrant: &#x60;VERIFIED&#x60;, &#x60;NOT_VERIFIED&#x60;, &#x60;PENDING&#x60; or &#x60;FAILED&#x60; |
**is_on_hold** | **bool** | Whether the domain is on hold at the registry (status &#x60;clientHold&#x60;) |
**transfer_wrong_authcode** | **bool** | Whether the incoming transfer failed because of a wrong authcode; null when not known |
**transfer_locked** | **bool** | Whether the incoming transfer failed because the domain is locked at the current registrar; null when not known |
**date_created** | **\DateTime** | When these data were recorded: a new version is recorded each time the data at the registry change |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
