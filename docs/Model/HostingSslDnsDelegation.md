# HostingSslDnsDelegation

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**managed_dns** | **bool** | Whether the DNS zone of the domain is on our nameservers: the installation creates the CNAME record by itself. When false the record must be created on the nameservers of the domain before the installation |
**host** | **string** | Name of the CNAME record, in punycode |
**target** | **string** | Target of the CNAME record; null when no delegation is required |
**present** | **bool** | Whether the public DNS resolvers return the CNAME record with &#x60;target&#x60;; null when the DNS zone is on our nameservers, where it is not checked, or when no delegation is required |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
