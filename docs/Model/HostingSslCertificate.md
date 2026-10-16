# HostingSslCertificate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**hosting_ssl_certificate_id** | **int** |  |
**hosting_id** | **int** | Id of the hosting (&#x60;GET /api/v3/hostings/{hosting_id}&#x60;) |
**ssl_certificate_id** | **int** | Id of the purchased SSL certificate (&#x60;GET /api/v3/ssl-certificates/{ssl_certificate_id}&#x60;); null for the other certificates |
**lets_encrypt_id** | **int** | Id of the Let&#39;s Encrypt certificate; null for the other certificates |
**external_certificate_id** | **int** | Id of the external certificate, whose keys were uploaded by the customer; null for the other certificates |
**cn_type** | **string** | Type of the certificate: &#x60;NORMAL&#x60;, or &#x60;WILDCARD&#x60; for a wildcard certificate |
**installation_date** | **\DateTime** | When the certificate was installed; null until the installation completes |
**https_rewrite** | **bool** | Whether the visits over HTTP are redirected to HTTPS (301) |
**destination_type** | **string** | Where the certificate is installed: &#x60;web&#x60; for the website, &#x60;mail&#x60; for the mail servers |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
