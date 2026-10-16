# ApiError

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**error** | **int** | Error code: 1000 validation failed (details in &#x60;meta.errors&#x60;), 1001 bad request, 1100 access token missing, invalid, expired or revoked (HTTP 401: request a new token and retry once), 1101 insufficient scope (HTTP 403: the token lacks a scope listed in the &#x60;WWW-Authenticate&#x60; header), 1102 the access token audience is not valid for this API (HTTP 403), 1200 not found, 1201 not implemented, 1202 method not allowed, 1300 rate limited, 1400 conflict with a business rule or with the state of the resource, 1500 server error, 1601 forbidden (for example a feature not included in the plan, an operation not available to sub-accounts, the internal API without administrator privileges, or a request from an IP address not allowed for the account), 1700 payment declined by the payment provider (HTTP 402: the orders are still to be paid), 1 other errors. Do not retry 403 responses with a new token: the result does not change. |
**message** | **string** | Description of the error, for the developers of the client |
**data** | **mixed** | Always null in error responses |
**meta** | [**\Shellrent\Sdk\Model\ApiErrorMeta**](ApiErrorMeta.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
