# ServerTemplate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**template_code** | **string** | Code of the server template, to send as &#x60;SERVER_CONFIGURATION_CODE&#x60; in &#x60;data&#x60; when buying the service |
**template_name** | **string** | Short name of the server template |
**template_name_alternative** | **string** | Longer name of the server template; null when it has none |
**min_ram** | **int** | Min RAM (GB), for VPS/VM only |
**min_cpu** | **int** | Min vCPU, for VPS/VM only |
**min_disk** | **int** | Min disk (GB), for VPS/VM only |
**operative_systems** | [**\Shellrent\Sdk\Model\ServerOs[]**](ServerOs.md) | Compatible operative systems |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
