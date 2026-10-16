# BuyServiceCpanelLicenseRequestData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**installation_type** | **string** | Choose to install the license on an active server or on external IP address |
**purchase_server** | **int** | Id of the purchase of the server where the license will be installed (&#x60;purchase_id&#x60; of &#x60;GET /api/v3/servers/{server_id}&#x60;), not the id of the server. Required only if \&quot;installation_type\&quot; has value \&quot;internal_installation_type\&quot; | [optional]
**ip_address** | **string** | IP address of the external host where the license will be installed to. Required only if \&quot;installation_type\&quot; has value \&quot;external_installation_type\&quot; | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
