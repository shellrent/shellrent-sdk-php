# Purchase

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**purchase_id** | **int** | ID of purchase |
**account** | [**\Shellrent\Sdk\Model\Account**](Account.md) | Account information of the user owner of the purchase. NULL if the purchase is not billed to a Reseller. |
**service** | [**\Shellrent\Sdk\Model\Service**](Service.md) | Service information of the purchase |
**billing** | [**\Shellrent\Sdk\Model\AccountBilling**](AccountBilling.md) | Billing information of the owner of the purchase. |
**recurrence** | [**\Shellrent\Sdk\Model\Recurrence**](Recurrence.md) | Recurrence frequency information. |
**recurrence_default** | [**\Shellrent\Sdk\Model\Recurrence**](Recurrence.md) | Recurrence applied to the prices of the purchase, ie. \&quot;EUR 100,00/month\&quot;. |
**purchase_id_primary** | **int** | ID of primary purchase if this is an additional purchase. |
**purchase_status** | [**\Shellrent\Sdk\Model\PurchaseStatus**](PurchaseStatus.md) | Status of the purchase. |
**purchase_provisioning_status** | [**\Shellrent\Sdk\Model\PurchaseProvisioningStatus**](PurchaseProvisioningStatus.md) | Current provisioning status of purchase (changes during activation, renews, etc.). |
**purchase_name** | [**\Shellrent\Sdk\Model\PurchaseName**](PurchaseName.md) | Name of the purchase. |
**activation_quantity** | **int** | Quantity (instances) purchased. |
**quantity** | **int** | Current purchase quantity (instances). |
**activation_price** | [**\Shellrent\Sdk\Model\Amount**](Amount.md) | Purchase price. |
**renew_price** | [**\Shellrent\Sdk\Model\Amount**](Amount.md) | Renew price (applied on recurring purchases only). |
**restore_price** | [**\Shellrent\Sdk\Model\Amount**](Amount.md) | Restore/reactivation price (applied on domains only). |
**date_activation** | **\DateTime** | Purchase date. |
**date_activation_start** | **\DateTime** | Date when the activation started. |
**date_expiry** | **\DateTime** | Purchase expiration date (applied on recurring purchases only). |
**date_dismission** | **\DateTime** | Purchase dismission date. |
**do_not_renew** | **bool** | Tells if purchase has to be renewed. |
**suspended** | **bool** | Tells if purchase is currently suspended. |
**comment** | **string** | User comment (will be included in invoice description). |
**billing_data** | [**\Shellrent\Sdk\Model\BillingData**](BillingData.md) | Billing data (ODA, CIG, CUP...). |
**tasks** | [**\Shellrent\Sdk\Model\Task[]**](Task.md) | Tasks currently running on the purchase. |
**purchase_additionals** | **int[]** | Collection of IDs of active additional purchases for this purchase. |
**domain_id** | **int** | ID of the domain associated with this purchase. |
**server_id** | **int** | ID of the server associated with this purchase. |
**ssl_certificate_id** | **int** | ID of the SSL certificate associated with this purchase. |
**pec_id** | **int** | ID of the PEC associated with this purchase. |
**pec_domain_id** | **int** | ID of the PEC domain associated with this purchase. |
**hosting_id** | **int** | ID of the web hosting associated with this purchase. |
**monitoring_id** | **int** | ID of the monitoring service associated with this purchase. |
**license_id** | **int** | ID of the license associated with this purchase. |
**microsoft365_id** | **int** | ID of the Microsoft 365 subscription associated with this purchase. |
**securemail_id** | **int** | ID of the SecureMail by LibraESVA associated with this purchase. |
**cloud_storage_id** | **int** | ID of the cloud storage associated with this purchase. |
**object_storage_id** | **int** | ID of the object storage associated with this purchase. |
**veeam_baas_id** | **int** | ID of the Veeam Backup as a Service associated with this purchase. |
**date_created** | **\DateTime** | Datetime when the purchase was first created. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
