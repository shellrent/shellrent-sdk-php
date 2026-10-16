# BuyServiceCloudStorageRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**service_id** | **int** | ID of the Service to buy |
**recurrence_id** | **int** | ID of the billing recurrence of the purchased service: one of the &#x60;recurrences_available&#x60; of the chosen service, as listed by &#x60;GET /api/v3/shop/cloud-storage&#x60;. If omitted, the default recurrence of the service (&#x60;recurrence&#x60;) is used. | [optional]
**account_id** | **int** | ID of the account of the user that will be the owner of the purchase (available to Resellers only) | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
