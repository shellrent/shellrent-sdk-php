# SslCertificateExportRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**format** | **string** | Export format: one of the codes of &#x60;GET /api/v3/ssl-certificates/{ssl_certificate_id}/export-formats&#x60;, which lists the formats available for the certificate |
**current_passphrase** | **string** | Passphrase of the current private key, if it is protected by one | [optional]
**passphrase** | **string** | Passphrase that protects the exported file, for the formats that require it (see requires_passphrase in the export formats). If omitted, current_passphrase is used | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
