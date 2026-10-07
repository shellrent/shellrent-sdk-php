# Service

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**service_id** | **int** |  |
**service_category** | [**\Shellrent\Sdk\Model\ServiceCategory**](ServiceCategory.md) |  |
**service_name** | **string** | Name of the service, in Italian |
**recurrence** | [**\Shellrent\Sdk\Model\Recurrence**](Recurrence.md) |  |
**recurrences_available** | [**\Shellrent\Sdk\Model\Recurrence[]**](Recurrence.md) | Recurrences that can be chosen when buying the service (&#x60;recurrence_id&#x60;) |
**tld_id** | **int** | Id of the TLD of a domain service (&#x60;GET /api/v3/tlds/{tld_id}&#x60;); null for the other services |
**service_code** | **string** | Code of the service, for example &#x60;CLOUD_STORAGE_100&#x60; or &#x60;BOX_PEC&#x60; |
**service_url** | **string** | URL of the cart page of the service |
**activation_price** | [**\Shellrent\Sdk\Model\Amount**](Amount.md) | Activation price of the price list; null for sub-accounts |
**renew_price** | [**\Shellrent\Sdk\Model\Amount**](Amount.md) | Renew price of the price list; null when the service has none and for sub-accounts |
**restore_price** | [**\Shellrent\Sdk\Model\Amount**](Amount.md) | Restore price of the price list; null when the service has none and for sub-accounts |
**transfer_price** | [**\Shellrent\Sdk\Model\Amount**](Amount.md) | Transfer price of the price list; null when the service has none and for sub-accounts |
**is_primary** | **bool** | Whether the service can be sold as a primary service |
**is_secondary** | **bool** | Whether the service is an additional service of a primary one |
**is_presale** | **bool** | Whether the service can be bought as an additional service together with its primary service (presale) |
**is_aftersale** | **bool** | Whether the service can be bought as an additional service after the activation of its primary service (aftersale) |
**is_quantifiable** | **bool** | Whether the service can be added to the cart more than once; the quantity of one purchase is set by &#x60;quantity_min&#x60; and &#x60;quantity_max&#x60; |
**quantity_min** | **int** | Minimum quantity of the service in one purchase |
**quantity_max** | **int** | Maximum quantity of the service in one purchase; null when the quantity cannot be chosen |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
