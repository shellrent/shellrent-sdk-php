# Domain

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**domain_id** | **int** |  |
**tld_id** | **int** | Id of the TLD of the domain (&#x60;GET /api/v3/tlds/{tld_id}&#x60;) |
**domain_name** | [**\Shellrent\Sdk\Model\DomainName**](DomainName.md) |  |
**dns_type** | [**\Shellrent\Sdk\Model\DnsType**](DnsType.md) |  |
**dns_account** | **string** | Email of the Cloudflare account that manages the DNS zone, with the Cloudflare nameservers; null with the other nameserver types, and when the zone is on our own Cloudflare account |
**nameservers** | [**\Shellrent\Sdk\Model\DomainNameserver[]**](DomainNameserver.md) | Nameservers of the domain; &#x60;sort&#x60; gives their order |
**domain_data** | [**\Shellrent\Sdk\Model\DomainData**](DomainData.md) | Data of the domain at the registry; null when there are none |
**contacts_count** | **int** | Number of active contacts of the domain |
**date_info_last** | **\DateTime** | When the data of the domain were last requested from the registry |
**date_dns_check** | **\DateTime** | When the DNS zone and the DNSSEC of the domain were last checked |
**vanity_nameserver_enabled** | **bool** | Whether the domain uses vanity nameservers: our nameservers with hostnames of the domain itself (for example &#x60;ns1.example.com&#x60;) |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
