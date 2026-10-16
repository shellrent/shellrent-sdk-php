# DnssecDsData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**zone_ttl** | **int** | TTL of the zone, in seconds |
**key_tag** | **int** | Key tag of the DNSKEY the record refers to |
**key_algorithm** | **int** | DNSSEC algorithm of the key, for example &#x60;8&#x60; (RSA/SHA-256) or &#x60;13&#x60; (ECDSAP256SHA256) |
**digest_type** | **int** | Algorithm of the digest, for example &#x60;1&#x60; (SHA-1), &#x60;2&#x60; (SHA-256) or &#x60;4&#x60; (SHA-384) |
**digest_value** | **string** | Digest of the DNSKEY, in hexadecimal |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
