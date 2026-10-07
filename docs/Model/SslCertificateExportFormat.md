# SslCertificateExportFormat

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**format** | **string** | Code of the format, for &#x60;format&#x60; of the export: one of &#x60;PK&#x60;, &#x60;CERT&#x60;, &#x60;CERT_PEM&#x60;, &#x60;CA&#x60;, &#x60;CA_PEM&#x60;, &#x60;CERT_CA&#x60;, &#x60;CERT_CA_PEM&#x60;, &#x60;PK_CERT_CA&#x60;, &#x60;MULTI_ZIP&#x60;, &#x60;HASH_SHA256&#x60; or &#x60;HASH_SHA512&#x60; |
**name** | **string** |  |
**description** | **string** |  |
**filename** | **string** | Name of the exported file, for example &#x60;certificate.pem&#x60; |
**available** | **bool** | Whether the certificate can be exported in this format; otherwise the export is rejected with 409 |
**requires_passphrase** | **bool** | Whether the format takes &#x60;passphrase&#x60; of the export request, which protects the file: true for &#x60;PK&#x60; and &#x60;PK_CERT_CA&#x60; |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
