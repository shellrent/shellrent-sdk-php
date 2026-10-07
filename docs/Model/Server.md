# Server

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**server_id** | **int** |  |
**purchase_id** | **int** | Id of the purchase of the server (&#x60;GET /api/v3/purchases/{purchase_id}&#x60;) |
**hostname** | **string** |  |
**server_type** | **string** | Type of the server: &#x60;PH&#x60; for a dedicated (physical) server, &#x60;VM&#x60; for a virtual machine, &#x60;HV&#x60; for a hypervisor or a private cloud |
**active** | **bool** | Whether the server is active: false once it has been deleted |
**consolidated** | **bool** | Whether the server is ready, with its provisioning complete |
**ip_address_id** | **int** | Id of the primary IP address of the server (&#x60;GET /api/v3/servers/{server_id}/ip-addresses/{ip_address_id}&#x60;) |
**ip_address** | **string** | Primary IP address of the server |
**service_category_code** | **string** | Code of the service category of the server: &#x60;DEDICATED&#x60; (dedicated server), &#x60;CLOUD&#x60; (Cloud Server), &#x60;CLOUD_SERVER_IOPS&#x60; (Cloud VPS), &#x60;CLOUD_SERVER_HA&#x60; (Cloud Server HA), &#x60;PRIVATE_CLOUD&#x60; (private cloud) or &#x60;PRIVATE_CLOUD_VM&#x60; (virtual machine of a private cloud) |
**date_created** | **\DateTime** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
