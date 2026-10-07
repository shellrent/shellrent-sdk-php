# BuyServiceMicrosoft365Request

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**service_id** | **int** | ID of the Service to buy |
**quantity** | **int** | Number of seats (user licenses) to purchase. It must be between &#x60;quantity_min&#x60; and &#x60;quantity_max&#x60; of the chosen service, as listed by &#x60;GET /api/v3/shop/microsoft-365/services&#x60;. If omitted, &#x60;quantity_min&#x60; is used. Ignored for the services without &#x60;quantity_max&#x60;. | [optional]
**account_id** | **int** | ID of the account of the user that will be the owner of the purchase (available to Resellers only) | [optional]
**data** | [**\Shellrent\Sdk\Model\BuyServiceMicrosoft365RequestData**](BuyServiceMicrosoft365RequestData.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
