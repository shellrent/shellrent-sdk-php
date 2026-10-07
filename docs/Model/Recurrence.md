# Recurrence

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**recurrence_id** | **int** |  |
**frequency** | [**\Shellrent\Sdk\Model\RecurrenceFrequency**](RecurrenceFrequency.md) |  |
**days_renew** | **int** | Days before the expiry from which the purchase can be renewed and the renewal order is created |
**days_autorenew** | **int** | Days before the expiry when the automatic renewal is attempted |
**days_suspension** | **int** | Days after the expiry when a purchase not renewed is suspended; null if it is not suspended |
**days_restore** | **int** | Days after the expiry from which the restore price is charged in addition to the renewal price |
**days_dismission** | **int** | Days after the expiry when a purchase not renewed is dismissed |
**days_cancel** | **int** | Days after the start of the activation when a purchase never activated is cancelled automatically |
**days_renew_dismission** | **int** | Days after the expiry when a purchase whose renewal was not completed is dismissed automatically |
**days_no_secondary** | **int** | Days before the expiry from which additional services can no longer be bought for the purchase |
**days_no_service_change** | **int** | Days before the expiry from which the service of the purchase can no longer be changed |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
