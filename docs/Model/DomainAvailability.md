# DomainAvailability

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**domain_name** | [**\Shellrent\Sdk\Model\DomainName**](DomainName.md) |  |
**availability** | **string** | How the domain can be bought: &#x60;A&#x60; (available: it can be registered), &#x60;T&#x60; (already registered: it can be transferred) or &#x60;R&#x60; (expired with us: it can be restored) |
**premium** | **bool** | Whether the registry sells the domain at a premium price, which it sets itself |
**premium_prices** | [**\Shellrent\Sdk\Model\DomainPremiumPrices**](DomainPremiumPrices.md) | Our prices for the premium domain; null when the domain is not premium, when the registry gave no price (the domain cannot be bought) and for sub-accounts |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
