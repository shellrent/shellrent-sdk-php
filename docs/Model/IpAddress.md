# IpAddress

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ip_address_id** | **int** |  |
**server_id** | **int** | Id of the server the IP address is assigned to (&#x60;GET /api/v3/servers/{server_id}&#x60;); null for the free IP addresses of a private cloud (&#x60;GET /api/v3/servers/{server_id}/private-cloud/available-ip-addresses&#x60;) |
**ip_address** | **string** |  |
**reverse_dns** | **string** | Reverse DNS set on the IP address, changed with &#x60;PATCH /api/v3/servers/{server_id}/ip-addresses/{ip_address_id}/rdns&#x60;; null when it is not set |
**reverse_dns_external** | **string** | Reverse DNS of the IP address as last read from its supplier; null when the supplier has none |
**mac_address** | **string** | MAC address associated with the IP address, such as the virtual MAC of the supplier or the one of its network interface; null when there is none |
**blocked_for_spam** | **bool** | Whether the supplier blocked the IP address for spam |
**active** | **bool** | Whether the IP address is active: false once it has been revoked or cancelled at the supplier |
**available** | **bool** | Whether the IP address can be used: an address that is not available, such as the gateway of its block, cannot be assigned to a network interface or to a virtual machine |
**date_created** | **\DateTime** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
