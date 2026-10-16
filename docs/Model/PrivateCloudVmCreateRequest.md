# PrivateCloudVmCreateRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**cpu** | **int** | Number of CPU cores (vCPUs) of the virtual machine: between &#x60;min_vm_cpu&#x60; and &#x60;max_vm_cpu&#x60; of &#x60;GET /api/v3/servers/{server_id}/private-cloud&#x60;, and within the vCPUs still free on the private cloud |
**ram** | **int** | RAM of the virtual machine, in MB: between &#x60;min_vm_ram&#x60; and &#x60;max_vm_ram&#x60; of &#x60;GET /api/v3/servers/{server_id}/private-cloud&#x60;, and within the RAM still free on the private cloud |
**disk** | **int** | Disk space of the virtual machine, in GB: between &#x60;min_vm_disk&#x60; and &#x60;max_vm_disk&#x60; of &#x60;GET /api/v3/servers/{server_id}/private-cloud&#x60;, within the disk and backup space still free on the private cloud and, with &#x60;template_vm_id&#x60;, not lower than the disk of the template VM |
**server_configuration_id** | **int** | Server configuration ID | [optional]
**template_id** | **int** | Server template ID (OS) | [optional]
**template_vm_id** | **int** | Template VM ID (optional alternative to configuration/template) | [optional]
**ip_address_id** | **int** | Primary IP address ID | [optional]
**use_local_ip** | **bool** | Use local IP instead of public IP | [optional] [default to false]
**ssh_key_id** | **int** | SSH key ID to associate with the VM | [optional]
**note** | **string** | Optional note | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
