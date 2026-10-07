# DnsZone

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**zone_id** | **string** | Id of the zone on our nameservers or at Cloudflare |
**zone_name** | **string** | Name of the zone: the domain name in punycode |
**nameservers** | **string[]** | Hostnames of the nameservers of the zone; with Cloudflare, the ones that Cloudflare assigned to it |
**ttl** | **int** | TTL of the zone, in seconds, which with the standard and external nameservers is also the TTL of every record; null with Cloudflare, whose zones have no TTL |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
