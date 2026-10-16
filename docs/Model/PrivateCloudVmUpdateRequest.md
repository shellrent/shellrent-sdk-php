# PrivateCloudVmUpdateRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**cpu** | **int** | Number of CPU cores. Omit it to keep the current value; the allowed range depends on the resources available on the private cloud | [optional]
**ram** | **int** | RAM of the virtual machine, in megabytes. Omit it to keep the current value; the allowed range depends on the resources available on the private cloud | [optional]
**disk** | **int** | Disk space of the virtual machine, in gigabytes: it cannot be lower than the current one. Omit it to keep the current value | [optional]
**note** | **string** | Note of the virtual machine. Omit it to keep the current note; send an empty string or null to remove it | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
