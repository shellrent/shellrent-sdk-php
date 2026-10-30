# HostingSslCertificateCanInstall

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**hosting_id** | **int** | Id of the hosting (&#x60;GET /api/v3/hostings/{hosting_id}&#x60;) |
**can_install** | **bool** | Whether the installation can start now with &#x60;POST /api/v3/hostings/{hosting_id}/ssl-certificates&#x60; and the same fields |
**reason** | [**\Shellrent\Sdk\Model\HostingSslCertificateCanInstallReason**](HostingSslCertificateCanInstallReason.md) | Why the installation cannot start now; null when it can. &#x60;ALREADY_INSTALLED&#x60;: a certificate is already installed on the destination, remove it first. &#x60;CNAME_MISSING&#x60;: the DNS of the domain are not on our nameservers and the CNAME record in &#x60;dns_delegation&#x60; is missing. &#x60;LIMIT_REACHED&#x60;: too many Let&#39;s Encrypt installations on the hosting in the last days. &#x60;HOSTING_NOT_ACTIVE&#x60;: the activation of the hosting has not been completed yet. &#x60;MAIL_NOT_SUPPORTED&#x60;: the mail server of the hosting does not accept certificates. &#x60;OPERATION_RUNNING&#x60;: another installation or operation is running on the hosting |
**message** | **string** | Description of &#x60;reason&#x60;; null when the installation can start |
**dns_delegation** | [**\Shellrent\Sdk\Model\HostingSslDnsDelegation**](HostingSslDnsDelegation.md) | CNAME record that delegates the validation of the Let&#39;s Encrypt certificate; null when installing a purchased certificate (&#x60;ssl_certificate_id&#x60;) |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
