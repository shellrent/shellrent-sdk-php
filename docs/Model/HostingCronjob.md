# HostingCronjob

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**cronjob_id** | **int** |  |
**hosting_id** | **int** | Id of the hosting of the request: cron jobs belong to the purchase, so a subdomain lists those of its main hosting |
**purchase_id** | **int** | Id of the purchase of the hosting (&#x60;GET /api/v3/purchases/{purchase_id}&#x60;) |
**request_url** | **string** | URL called by the cron job, with the protocol |
**http_request_method** | **string** | HTTP method of the call: &#x60;GET&#x60; or &#x60;POST&#x60; |
**plan_month** | **string** | Months, from 1 (January) to 12 (December), as a comma-separated list like in the creation (for example &#x60;1,6&#x60;); null for every month |
**plan_monthday** | **string** | Days of the month, from 1 to 31, as a comma-separated list like in the creation (for example &#x60;1,15&#x60;); null for every day |
**plan_weekday** | **string** | Days of the week, from 1 (Monday) to 7 (Sunday), as a comma-separated list like in the creation (for example &#x60;1,5&#x60;); null for every day of the week |
**plan_hour** | **string** | Hours, from 0 to 23, as a comma-separated list like in the creation (for example &#x60;0,12&#x60;); null for every hour |
**plan_minute** | **string** | Minutes, from 0 to 59, as a comma-separated list like in the creation (for example &#x60;0,30&#x60;); null for every minute |
**active** | **bool** | Whether the cron job is active: deleted cron jobs, and the old versions of changed ones, stay in the list as inactive |
**date_created** | **\DateTime** |  |
**date_disabled** | **\DateTime** | When the cron job was deleted or replaced by a new version; null while it is active |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
