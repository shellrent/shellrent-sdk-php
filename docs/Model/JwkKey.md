# JwkKey

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**kid** | **string** | Id of the key: the &#x60;kid&#x60; in the header of the tokens it signs |
**kty** | **string** | Key type: &#x60;RSA&#x60; |
**alg** | **string** | Signature algorithm: &#x60;RS256&#x60; |
**use** | **string** | Use of the key: &#x60;sig&#x60;, signature |
**n** | **string** | RSA modulus, base64url-encoded |
**e** | **string** | RSA public exponent, base64url-encoded |
**status** | **string** | &#x60;active&#x60;: signs the new tokens; &#x60;trusted&#x60;: no longer signs, but verifies the tokens already issued; &#x60;retired&#x60;: verifies the tokens already issued until they expire, then leaves the set | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
