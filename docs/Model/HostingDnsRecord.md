# HostingDnsRecord

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**dns_record_id** | **int** |  |
**type** | **string** | Type of the record, for example &#x60;A&#x60;, &#x60;CNAME&#x60;, &#x60;MX&#x60;, &#x60;TXT&#x60; or &#x60;SRV&#x60; |
**host** | **string** | Name of the record relative to the domain: &#x60;@&#x60; for the domain itself, otherwise for example &#x60;www&#x60; or &#x60;mail&#x60; |
**destination** | **string** | Value of the record: the IP address of &#x60;A&#x60; records, the target host of &#x60;CNAME&#x60;, &#x60;MX&#x60; and &#x60;SRV&#x60; records, the text of &#x60;TXT&#x60; records |
**priority** | **int** | Priority of &#x60;MX&#x60; and &#x60;SRV&#x60; records |
**weight** | **int** | Weight of &#x60;SRV&#x60; records |
**port** | **int** | Port of &#x60;SRV&#x60; records |
**service** | **string** | Service of &#x60;SRV&#x60; records (for example &#x60;_autodiscover&#x60;) and port of &#x60;TLSA&#x60; records |
**protocol** | **string** | Protocol of &#x60;SRV&#x60; and &#x60;TLSA&#x60; records: &#x60;_tcp&#x60;, &#x60;_udp&#x60; or &#x60;_tls&#x60; |
**caa_flag** | **int** | Flag of &#x60;CAA&#x60; records |
**caa_tag** | **string** | Tag of &#x60;CAA&#x60; records: &#x60;issue&#x60;, &#x60;issuewild&#x60;, &#x60;iodef-http&#x60; or &#x60;iodef-mail&#x60; |
**caa_can_sign_http_exchanges** | **bool** | Whether the &#x60;CAA&#x60; record allows certificates for signed HTTP exchanges (&#x60;cansignhttpexchanges&#x3D;yes&#x60;) |
**tlsa_usage** | **int** | Certificate usage of &#x60;TLSA&#x60; records: 0 PKIX-TA, 1 PKIX-EE, 2 DANE-TA, 3 DANE-EE |
**tlsa_selector** | **int** | Selector of &#x60;TLSA&#x60; records: 0 for the full certificate, 1 for the public key |
**tlsa_matching_type** | **int** | Matching type of &#x60;TLSA&#x60; records: 0 for the exact data, 1 for SHA-256, 2 for SHA-512 |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
