# SmsPhonebookContact

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  |
**phonebooks** | **int[]** | Ids of the phonebooks that contain the contact (&#x60;GET /api/v3/sms-phonebooks/{phonebook_id}&#x60;) |
**country** | [**\Shellrent\Sdk\Model\Country**](Country.md) |  |
**phone_number** | **string** | Phone number without the international prefix: the country is in &#x60;country&#x60; |
**name** | **string** |  |
**surname** | **string** |  |
**birth_date** | **\DateTime** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
