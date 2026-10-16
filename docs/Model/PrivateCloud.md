# PrivateCloud

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**purchase_id** | **int** | Id of the purchase of the private cloud (&#x60;GET /api/v3/purchases/{purchase_id}&#x60;) |
**server_id** | **int** | Id of the server of the private cloud (&#x60;GET /api/v3/servers/{server_id}&#x60;) |
**max_vm** | **int** | Maximum number of virtual machines of the private cloud |
**available_vm** | **int** | Number of virtual machines that can still be created: &#x60;max_vm&#x60; minus the current ones |
**max_cpu** | **int** | Total vCPUs of the private cloud, &#x60;cpu_overallocation&#x60; included |
**cpu_overallocation** | **int** | vCPUs of &#x60;max_cpu&#x60; that come from overallocation (extra cores); null when the private cloud has none |
**min_vm_cpu** | **int** | Minimum vCPUs of a virtual machine |
**max_vm_cpu** | **int** | Maximum vCPUs of a virtual machine |
**max_ram** | **int** | Total RAM of the private cloud, in MB |
**min_vm_ram** | **int** | Minimum RAM of a virtual machine, in MB |
**max_vm_ram** | **int** | Maximum RAM of a virtual machine, in MB |
**max_disk** | **int** | Total disk space of the private cloud, in GB |
**min_vm_disk** | **int** | Minimum disk space of a virtual machine, in GB |
**max_vm_disk** | **int** | Maximum disk space of a virtual machine, in GB |
**max_backup** | **int** | Total backup space of the private cloud, in GB |
**max_disk_backup** | **int** | Daily backup space of the private cloud, in GB: the disk space of its virtual machines with the daily backup cannot go beyond it |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
