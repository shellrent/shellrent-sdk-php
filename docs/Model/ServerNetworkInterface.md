# ServerNetworkInterface

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**network_interface_id** | **int** |  |
**server_id** | **int** | Id of the server of the interface (&#x60;GET /api/v3/servers/{server_id}&#x60;) |
**network_id** | **int** | Id of the network of the interface: for a local network, the &#x60;network_id&#x60; accepted by &#x60;POST /api/v3/servers/{server_id}/network-interfaces&#x60; |
**ip_address_id** | **int** | Id of the IP address of the interface (&#x60;GET /api/v3/servers/{server_id}/ip-addresses/{ip_address_id}&#x60;); always null on a local network |
**vif_uuid** | **string** | UUID of the interface on the hypervisor |
**device_name** | **string** | Device of the interface: usually its number (&#x60;0&#x60; for &#x60;eth0&#x60;), otherwise a name such as &#x60;ens3&#x60; |
**mac_address** | **string** | MAC address of the interface |
**is_default** | **bool** | Whether it is the default interface of the server, which cannot be deleted |
**is_active** | **bool** | Whether the interface is active: the endpoints return only active interfaces |
**network_type** | **string** | Type of the network: &#x60;P&#x60; for public, &#x60;L&#x60; for local |
**network_label** | **string** | Name of the network |
**network_bridge** | **string** | Bridge of the network on the hypervisor, for example &#x60;xenbr0&#x60;; &#x60;N.D.&#x60; when the hypervisor does not report it |
**ip_address** | **string** | IP address of the interface; null when &#x60;ip_address_id&#x60; is null |
**date_created** | **\DateTime** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
