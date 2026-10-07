# ServerNetworkInterfaceCreateRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**network_id** | **int** | For a local network interface: ID of an active local network of the cluster where the server resides (for a private cloud VM, a local network of the private cloud). Send either network_id or ip_address_id | [optional]
**ip_address_id** | **int** | For a public network interface: ID of an IP address without an active network interface. For a private cloud VM it is a free and available IP address of the private cloud, which is assigned to the VM; for the other servers an available IP address of the server. Send either network_id or ip_address_id | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
