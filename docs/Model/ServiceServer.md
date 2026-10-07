# ServiceServer

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**service_id** | **int** |  |
**service_category** | [**\Shellrent\Sdk\Model\ServiceCategory**](ServiceCategory.md) |  |
**service_name** | **string** | Name of the service, in Italian |
**recurrence** | [**\Shellrent\Sdk\Model\Recurrence**](Recurrence.md) |  |
**recurrences_available** | [**\Shellrent\Sdk\Model\Recurrence[]**](Recurrence.md) | Recurrences that can be chosen when buying the service (&#x60;recurrence_id&#x60;) |
**tld_id** | **int** | Id of the TLD of a domain service (&#x60;GET /api/v3/tlds/{tld_id}&#x60;); null for the other services |
**service_code** | **string** | Code of the service, for example &#x60;DEDICATED_SERVER_ADVANCE&#x60; or &#x60;CLOUD_VPS_STD_IOPS&#x60; |
**service_url** | **string** | URL of the cart page of the service |
**activation_price** | [**\Shellrent\Sdk\Model\Amount**](Amount.md) | Activation price of the price list |
**renew_price** | [**\Shellrent\Sdk\Model\Amount**](Amount.md) | Renew price of the price list; null when the service has none |
**restore_price** | [**\Shellrent\Sdk\Model\Amount**](Amount.md) | Restore price of the price list; null when the service has none |
**transfer_price** | [**\Shellrent\Sdk\Model\Amount**](Amount.md) | Transfer price of the price list; null when the service has none |
**is_primary** | **bool** | Whether the service can be sold as a primary service |
**is_secondary** | **bool** | Whether the service is an additional service of a primary one |
**is_presale** | **bool** | Whether the service can be bought as an additional service together with its primary service (presale) |
**is_aftersale** | **bool** | Whether the service can be bought as an additional service after the activation of its primary service (aftersale) |
**is_quantifiable** | **bool** | Whether the service can be added to the cart more than once; the quantity of one purchase is set by &#x60;quantity_min&#x60; and &#x60;quantity_max&#x60; |
**quantity_min** | **int** | Minimum quantity of the service in one purchase |
**quantity_max** | **int** | Maximum quantity of the service in one purchase; null when the quantity cannot be chosen |
**templates** | [**\Shellrent\Sdk\Model\ServerTemplate[]**](ServerTemplate.md) | Server templates compatible with the service, with their operating systems: &#x60;template_code&#x60; and &#x60;os_code&#x60; are the values of &#x60;SERVER_CONFIGURATION_CODE&#x60; and &#x60;SERVER_TEMPLATE_CODE&#x60; when buying it |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
