# DomainDnsRecordChangeRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**host** | **string** | Name of the record relative to the zone, &#x60;@&#x60; for the domain itself; for SRV and TLSA records, without the service and the protocol |
**service** | **string** | Service of SRV records (e.g. &#x60;_sip&#x60;) and port of TLSA records | [optional]
**protocol** | **string** | Protocol of SRV and TLSA records: &#x60;_tcp&#x60;, &#x60;_udp&#x60; or &#x60;_tls&#x60; | [optional]
**destination** | **string** | Value of the record: the IPv4 address for A, the IPv6 address for AAAA, the target hostname for CNAME, MX, NS, PTR and SRV, the text for TXT and SPF, the value of the tag for CAA, the certificate association data for TLSA |
**port** | **string** | Port of the service, required for SRV records | [optional]
**weight** | **string** | Weight of SRV records | [optional]
**priority** | **string** | Priority of MX and SRV records | [optional]
**ttl** | **int** | TTL of the record, in seconds, for the Cloudflare records that are not proxied (&#x60;0&#x60; or &#x60;1&#x60; for the automatic TTL); ignored with the standard and external nameservers, where the records have the TTL of the zone | [optional]
**proxied** | **bool** | Whether the traffic of the record goes through the Cloudflare proxy; only for the Cloudflare records that can be proxied | [optional]
**caa_data** | [**\Shellrent\Sdk\Model\DomainDnsRecordChangeRequestCaaData**](DomainDnsRecordChangeRequestCaaData.md) |  | [optional]
**tlsa_data** | [**\Shellrent\Sdk\Model\DomainDnsRecordChangeRequestTlsaData**](DomainDnsRecordChangeRequestTlsaData.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
