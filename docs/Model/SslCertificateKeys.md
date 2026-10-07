# SslCertificateKeys

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ssl_certificate_id** | **int** |  |
**csr** | **string** | CSR of the certificate, in PEM format (the custom one, when set) |
**private_key** | **string** | Private key of the certificate, in PEM format (the custom one, when set) |
**public_key** | **string** | Certificate issued by the certification authority, in PEM format; empty until it is issued |
**certificate_authority** | **string** | Certificate of the intermediate certification authority, in PEM format; empty until the certificate is issued |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
