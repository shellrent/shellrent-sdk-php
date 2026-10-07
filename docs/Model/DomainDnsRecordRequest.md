# DomainDnsRecordRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | Type of the record. &#x60;NS&#x60; and &#x60;PTR&#x60; records cannot be created, as in the control panel |
**host** | **string** | Name of the record relative to the zone, &#x60;@&#x60; for the domain itself; for SRV and TLSA records, without the service and the protocol |
**service** | **string** | Service of SRV records (e.g. &#x60;_sip&#x60;) and port of TLSA records | [optional]
**protocol** | **string** | Protocol of SRV and TLSA records: &#x60;_tcp&#x60;, &#x60;_udp&#x60; or &#x60;_tls&#x60; | [optional]
**destination** | **string** | Value of the record: the IPv4 address for A, the IPv6 address for AAAA, the target hostname for CNAME, MX, NS, PTR and SRV, the text for TXT and SPF, the value of the tag for CAA, the certificate association data for TLSA |
**port** | **string** | Port of the service, required for SRV records | [optional]
**weight** | **string** | Weight of SRV records | [optional]
**priority** | **string** | Priority of MX and SRV records | [optional]
**ttl** | **int** | Ignored: a new record has the TTL of the zone with the standard and external nameservers, and the automatic TTL with Cloudflare, which &#x60;PATCH /api/v3/domains/{domain_id}/dns/records/{record_id}&#x60; can change | [optional]
**proxied** | **bool** | Whether the traffic of the record goes through the Cloudflare proxy; only with the Cloudflare nameservers | [optional]
**caa_data** | [**\Shellrent\Sdk\Model\DomainDnsRecordChangeRequestCaaData**](DomainDnsRecordChangeRequestCaaData.md) |  | [optional]
**tlsa_data** | [**\Shellrent\Sdk\Model\DomainDnsRecordChangeRequestTlsaData**](DomainDnsRecordChangeRequestTlsaData.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
