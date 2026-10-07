# Sms

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  |
**quality** | **string** | Delivery quality: &#x60;STANDARD&#x60; or &#x60;PREMIUM&#x60; |
**status** | **string** | Status of the sending: &#x60;DRAFT&#x60; (not confirmed), &#x60;PROCESSING&#x60; (being sent), &#x60;ACCOMPLISHED&#x60; (all the messages sent) or &#x60;CANCELLED&#x60; (sending stopped) |
**sender** | **string** | Sender name, for the &#x60;PREMIUM&#x60; quality |
**message** | **string** |  |
**send_from** | **\DateTime** | Date and time from which the messages are sent |
**date_approved** | **\DateTime** | Date and time the sending was confirmed; null for a &#x60;DRAFT&#x60; |
**stop_date** | **\DateTime** | Date and time the sending was stopped; null if it was not |
**sms_count** | **int** | Number of SMS the message takes for each recipient: a long text is split into several SMS |
**date_created** | **\DateTime** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
