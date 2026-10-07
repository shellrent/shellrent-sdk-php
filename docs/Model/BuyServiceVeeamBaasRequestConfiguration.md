# BuyServiceVeeamBaasRequestConfiguration

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**cloud_connect_gb** | **int** | Veeam Cloud Connect: size of the backup storage, in GB. It must be one of the storage sizes offered for the service: any other value is rejected with a validation error that lists the allowed sizes. If omitted, the default storage option of the service is used. | [optional]
**agent_server** | **int** | Veeam Agent: number of \&quot;Server\&quot; workloads. | [optional]
**agent_workstation** | **int** | Veeam Agent: number of \&quot;Workstation\&quot; workloads. | [optional]
**vbr_entplus_vm** | **int** | Veeam Backup &amp; Replication (VBR) Enterprise Plus: number of \&quot;VM in VMware/Hyper-V\&quot; workloads. | [optional]
**vbr_entplus_server** | **int** | Veeam Backup &amp; Replication (VBR) Enterprise Plus: number of \&quot;Server\&quot; workloads. | [optional]
**vbr_entplus_workstation** | **int** | Veeam Backup &amp; Replication (VBR) Enterprise Plus: number of \&quot;Workstation\&quot; workloads. | [optional]
**vbr_entplus_gb** | **int** | Veeam Backup &amp; Replication (VBR) Enterprise Plus: NAS backup storage, as a number of slots of 250 GB each. Despite the name, the value is a number of slots, not of GB: 1 &#x3D; 250 GB, 2 &#x3D; 500 GB, up to 9 &#x3D; 2,250 GB. Use 0 or omit the field for no NAS storage. | [optional]
**vbr_standard_vm** | **int** | Veeam Backup &amp; Replication (VBR) Standard: number of \&quot;VM in VMware/Hyper-V\&quot; workloads. | [optional]
**vbr_standard_server** | **int** | Veeam Backup &amp; Replication (VBR) Standard: number of \&quot;Server\&quot; workloads. | [optional]
**vbr_standard_workstation** | **int** | Veeam Backup &amp; Replication (VBR) Standard: number of \&quot;Workstation\&quot; workloads. | [optional]
**vb365_users** | **int** | Veeam Backup for Microsoft 365: number of users. | [optional]
**cc_license_vm** | **int** | Veeam Cloud Connect license: number of \&quot;VM in VMware/Hyper-V\&quot; workloads. | [optional]
**cc_license_server** | **int** | Veeam Cloud Connect license: number of \&quot;Server\&quot; workloads. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
