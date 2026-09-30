# PrivateCloudVmCreateRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**cpu** | **int** |  |
**ram** | **int** |  |
**disk** | **int** |  |
**server_configuration_id** | **int** | Server configuration ID | [optional]
**template_id** | **int** | Server template ID (OS) | [optional]
**template_vm_id** | **int** | Template VM ID (optional alternative to configuration/template) | [optional]
**ip_address_id** | **int** | Primary IP address ID | [optional]
**use_local_ip** | **bool** | Use local IP instead of public IP | [optional]
**ssh_key_id** | **int** | SSH key ID to associate with the VM | [optional]
**note** | **string** | Optional note | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
