# DomainDnssecRequestDsData1

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**key_tag** | **int** | Key tag of the DNSKEY the record refers to |
**algorithm** | **int** | DNSSEC algorithm of the key, for example &#x60;8&#x60; (RSA/SHA-256) or &#x60;13&#x60; (ECDSAP256SHA256) |
**digest_type** | **int** | Algorithm of the digest: &#x60;1&#x60; (SHA-1), &#x60;2&#x60; (SHA-256) or &#x60;4&#x60; (SHA-384) |
**digest** | **string** | Digest of the DNSKEY, in hexadecimal |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
