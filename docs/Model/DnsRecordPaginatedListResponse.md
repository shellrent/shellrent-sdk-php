# DnsRecordPaginatedListResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**error** | **int** | Always 0 in a successful response |
**message** | **string** | Always null in a successful response |
**data** | [**\Shellrent\Sdk\Model\DnsRecord[]**](DnsRecord.md) | Items of the page: an empty list beyond the last page |
**meta** | [**\Shellrent\Sdk\Model\SimplePaginationMeta**](SimplePaginationMeta.md) | Pagination of the list, without the totals |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
