# SslCertificate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ssl_certificate_id** | **int** |  |
**purchase_id** | **int** | Id of the purchase of the certificate (&#x60;GET /api/v3/purchases/{purchase_id}&#x60;) |
**domain_name** | **string** |  |
**cn_type** | **string** | Type of the common name: &#x60;NORMAL&#x60; (a single name) or &#x60;WILDCARD&#x60; (a wildcard name, for the subdomains) |
**validation_type** | **string** | Validation level: &#x60;DV&#x60; (domain validation), &#x60;OV&#x60; (organization validation) or &#x60;EV&#x60; (extended validation) |
**san_max** | **int** | Maximum number of additional names (SAN, Subject Alternative Names) the certificate can include |
**can_reissue** | **bool** | Whether the certificate includes reissues; &#x60;GET /api/v3/ssl-certificates/{ssl_certificate_id}/can-reissue&#x60; tells whether one can start now |
**validation_method** | **string** | How the domain is validated: &#x60;APPROVER_EMAIL&#x60; (by email to &#x60;approver_email&#x60;) or &#x60;DNS&#x60; (with a CNAME record that we add to the zone of the domain, see &#x60;csr_md5_hash&#x60;) |
**valid_to** | **\DateTime** | Expiry of the certificate, at the end of the day (Italian time) |
**csr_md5_hash** | **string** | MD5 hash of the CSR for the DNS validation, in uppercase hexadecimal: the name of the CNAME record is &#x60;_&#x60; followed by this hash; null without a DNS validation |
**csr_sha256_hash** | **string** | SHA-256 hash of the CSR for the DNS validation, in uppercase hexadecimal split in two by a dot: the destination of the CNAME record starts with it; null without a DNS validation |
**certificate_status** | **string** | Status of the certificate at the certification authority, for example &#x60;Issued&#x60;, &#x60;Expired&#x60;, &#x60;Rejected&#x60; or &#x60;Revoked&#x60; |
**approver_email** | **string** | Address that receives the request to approve the validation of the domain, with the &#x60;APPROVER_EMAIL&#x60; method (see &#x60;GET /api/v3/ssl-certificates/approver-emails&#x60;) |
**admin_first_name** | **string** | First name of the administrative contact of the certificate |
**admin_last_name** | **string** | Last name of the administrative contact |
**admin_organization** | **string** | Organization of the administrative contact |
**admin_role** | **string** | Role of the administrative contact: &#x60;Business Owner&#x60;, &#x60;Website Owner&#x60;, &#x60;President&#x60; or &#x60;Company Director&#x60; |
**admin_email** | **string** | Email of the administrative contact |
**admin_phone_cc** | **string** | International dialling code of the phone of the administrative contact, for example &#x60;39&#x60; |
**admin_phone_number** | **string** | Phone number of the administrative contact, without the dialling code |
**admin_address** | **string** | Address of the administrative contact |
**admin_city** | **string** | City of the administrative contact |
**admin_state** | **string** | State or province of the administrative contact |
**admin_postal_code** | **string** | Postal code of the administrative contact |
**admin_country** | **string** | Country of the administrative contact, as ISO 3166-1 alpha-2 code (for example &#x60;IT&#x60;) |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
