# DnssecKeyData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**zone_ttl** | **int** | TTL of the zone, in seconds |
**flags** | **int** | Flags of the key: &#x60;256&#x60; for a zone signing key (ZSK), &#x60;257&#x60; for a key signing key (KSK) |
**key_protocol** | **int** | Protocol of the key, &#x60;3&#x60; for DNSSEC |
**key_algorithm** | **int** | DNSSEC algorithm of the key, for example &#x60;8&#x60; (RSA/SHA-256) or &#x60;13&#x60; (ECDSAP256SHA256) |
**public_key** | **string** | Public key, in base64 |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
