# Tld

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**tld_id** | **int** |  |
**extension** | **string** | Extension without the leading dot, in Unicode (for example &#x60;it&#x60; or &#x60;co.uk&#x60;) |
**punycode** | **string** | Extension in punycode |
**country** | [**\Shellrent\Sdk\Model\Country**](Country.md) | Country of the TLD, for the country-code TLDs (ccTLD); null for the others |
**char_min** | **int** | Minimum length of the name, without the extension |
**char_max** | **int** | Maximum length of the name, without the extension |
**hyphen_allowed** | **bool** | Whether the name can contain hyphens |
**number_allowed** | **bool** | Whether the name can contain numbers |
**punycode_allowed** | **bool** | Whether the name can contain international characters (IDN) |
**dnssec_enabled** | **bool** | Whether the TLD supports DNSSEC |
**rdap_enabled** | **bool** | Whether the availability of the names is checked with RDAP |
**rdap_url** | **string** | URL of the RDAP service used for the TLD; null when not set |
**contact_data** | [**\Shellrent\Sdk\Model\TldContactSpecification[]**](TldContactSpecification.md) | Fields of the contact data of the domains of the TLD, with their type and allowed values (the authcode excluded) |
**update_contact_r** | **bool** | Whether the registrant contact (&#x60;R&#x60;) can be changed (&#x60;PATCH /api/v3/domains/{domain_id}/contacts/{domain_contact_id}&#x60;) |
**update_contact_a** | **bool** | Whether the administrative contact (&#x60;A&#x60;) can be changed |
**update_contact_t** | **bool** | Whether the technical contact (&#x60;T&#x60;) can be changed |
**update_contact_o** | **bool** | Whether the organization contact (&#x60;O&#x60;) can be changed |
**update_contact_additional** | **bool** | Whether a change of the contacts must also send the additional data of the TLD to the registry |
**update_contact_transfer** | **bool** | Whether a transfer must also send the additional data of the TLD to the registry |
**transfer_authcode** | **bool** | Whether the transfer of a domain of the TLD requires the authcode |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
