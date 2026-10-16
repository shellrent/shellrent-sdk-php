# HostingSslCertificateInstallRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ssl_certificate_id** | **int** | Id of a purchased SSL certificate to install (&#x60;GET /api/v3/ssl-certificates/{ssl_certificate_id}&#x60;); omit it, or send null, to install a Let&#39;s Encrypt certificate, issued if the hosting has none | [optional]
**destination_type** | **string** | Where to install the certificate: &#x60;web&#x60; for the website, &#x60;mail&#x60; for the mail servers, &#x60;all&#x60; for both. &#x60;mail&#x60; and &#x60;all&#x60; require &#x60;cn_type&#x60; &#x60;WILDCARD&#x60;; on a subdomain only &#x60;web&#x60; is allowed | [optional] [default to 'web']
**cn_type** | **string** | Type of the certificate: &#x60;NORMAL&#x60;, or &#x60;WILDCARD&#x60; for a wildcard certificate. Without &#x60;ssl_certificate_id&#x60; it chooses the Let&#39;s Encrypt certificate to install | [optional] [default to 'NORMAL']

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
