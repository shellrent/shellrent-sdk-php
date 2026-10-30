# HostingSslCertificateInstallRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ssl_certificate_id** | **int** | Id of a purchased SSL certificate to install (&#x60;GET /api/v3/ssl-certificates/{ssl_certificate_id}&#x60;): an active certificate of the owner of the hosting, a wildcard one or one with SAN to install it also on the mail servers. Omit it, or send null, to install a Let&#39;s Encrypt certificate, issued if the hosting has none: when the DNS of the domain are not on our nameservers, the issue requires the CNAME record that delegates the DNS validation (&#x60;GET /api/v3/hostings/{hosting_id}/ssl-certificates/can-install&#x60;) | [optional]
**destination_type** | **string** | Where to install the certificate: &#x60;web&#x60; for the website, &#x60;mail&#x60; for the mail servers, &#x60;all&#x60; for both. When omitted, &#x60;all&#x60; on a main hosting and &#x60;web&#x60; on a subdomain, where only &#x60;web&#x60; is allowed. &#x60;mail&#x60; and &#x60;all&#x60; require a Let&#39;s Encrypt &#x60;cn_type&#x60; &#x60;WILDCARD&#x60; | [optional]
**cn_type** | **string** | Type of the certificate: &#x60;NORMAL&#x60;, or &#x60;WILDCARD&#x60; for a wildcard certificate. Without &#x60;ssl_certificate_id&#x60; it chooses the Let&#39;s Encrypt certificate to install. Omit this field if you&#39;re sending &#x60;ssl_certificate_id&#x60;. | [optional] [default to 'WILDCARD']

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
