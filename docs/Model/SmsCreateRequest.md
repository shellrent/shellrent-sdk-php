# SmsCreateRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**quality** | **string** | SMS delivery quality. |
**phone_numbers** | **string[]** | SMS recipients (mutually exclusive). Provide exactly one of: \&quot;phone_numbers\&quot; or \&quot;phonebooks\&quot;. Collection of one or more phone numbers in international format using the \&quot;00\&quot; prefix (digits only, no spaces/separators). Example: 00393331122444. | [optional]
**phonebooks** | **int[]** | SMS recipients (mutually exclusive). Provide exactly one of: \&quot;phone_numbers\&quot; or \&quot;phonebooks\&quot;. Collection of one or more phonebook IDs. | [optional]
**message** | **string** | Text of the SMS you want to send. It can contain emojis, but keep in mind that emojis take up more characters. GSM-7: max 160 chars (153 per part if concatenated). Unicode (UCS-2): max 70 chars (67 per part if concatenated). |
**sender** | **string** | Sender name. Required when \&quot;quality\&quot; is \&quot;PREMIUM\&quot;. |
**send_date** | **\DateTime** | Date and time from which to send the SMS. If not specified, the SMS is sent immediately. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
