# DnsRecord

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**record_id** | **string** |  |
**type** | **string** | Type of the record, for example &#x60;A&#x60;, &#x60;CNAME&#x60;, &#x60;MX&#x60; or &#x60;TXT&#x60; |
**host** | **string** | Name of the record relative to the zone, &#x60;@&#x60; for the domain itself; for SRV and TLSA records, without the service and the protocol |
**service** | **string** | Service of SRV records (for example &#x60;_sip&#x60;) and port of TLSA records (for example &#x60;_443&#x60;), with the underscore; null for the other types |
**protocol** | **string** | Protocol of SRV and TLSA records: &#x60;_tcp&#x60;, &#x60;_udp&#x60; or &#x60;_tls&#x60;; null for the other types |
**destination** | **string** | Value of the record: the IPv4 address for A, the IPv6 address for AAAA, the target hostname for CNAME, MX, NS, PTR and SRV, the text for TXT and SPF, the value of the tag for CAA, the certificate association data for TLSA |
**port** | **string** | Port of the service, for SRV records; null for the other types |
**weight** | **int** | Weight of SRV records; &#x60;0&#x60; for the other types |
**priority** | **int** | Priority of MX and SRV records; null for the other types and, with the standard and external nameservers, when it is &#x60;0&#x60; |
**ttl** | **int** | TTL of the record, in seconds: with Cloudflare null means automatic, with the standard and external nameservers it is the TTL of the zone (&#x60;PATCH /api/v3/domains/{domain_id}/dns&#x60;) |
**proxied** | **bool** | Whether the traffic of the record goes through the Cloudflare proxy; always false with the other nameserver types |
**caa_data** | [**\Shellrent\Sdk\Model\DnsRecordCaaData**](DnsRecordCaaData.md) | Data of CAA records; null for the other types |
**tlsa_data** | [**\Shellrent\Sdk\Model\DnsRecordTlsaData**](DnsRecordTlsaData.md) | Data of TLSA records; null for the other types |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
