# SmsMessage

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  |
**sms_id** | **int** | Id of the SMS sending (&#x60;GET /api/v3/sms/{sms_id}&#x60;) |
**sms_price** | [**\Shellrent\Sdk\Model\SmsPrice**](SmsPrice.md) | Price list of the destination country; null for sub-accounts |
**contact_name** | **string** | Surname and name of the recipient, when taken from a phonebook; otherwise empty or null |
**phone_number** | **string** | Phone number of the recipient in international format with the &#x60;00&#x60; prefix, for example &#x60;00393331122444&#x60; |
**date_sent** | **\DateTime** | Date and time the message was sent; null until it is sent |
**date_delivered** | **\DateTime** | Date and time the message was delivered; null until the delivery is confirmed |
**error** | **string** | Error code if the SMS was not delivered |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
