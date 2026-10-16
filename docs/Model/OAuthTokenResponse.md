# OAuthTokenResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**token_type** | **string** | Type of the token: always &#x60;Bearer&#x60; |
**expires_in** | **int** | Lifetime of the token, in seconds |
**access_token** | **string** | Access token, a JWT signed with the keys of &#x60;GET /.well-known/jwks.json&#x60;: send it in the &#x60;Authorization: Bearer&#x60; header |
**scope** | **string** | Space-separated list of the granted scopes |
**audience** | **string** | Audience of the token: &#x60;api-public&#x60; for the public API, &#x60;api-internal&#x60; for the internal one |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
