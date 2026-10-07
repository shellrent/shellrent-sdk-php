# HostingCronjobCreateRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**request_protocol** | **string** | http or https |
**request_url** | **string** | URL to call, without protocol (e.g. &#x60;www.example.com/cron.php&#x60;): a leading http:// or https:// is removed and request_protocol is used |
**http_request_method** | **string** | HTTP method of the call | [optional] [default to 'GET']
**plan_month** | **string** | Month in which the cronjob runs, from 1 (January) to 12 (December). Omit it, or send null or an empty string, to run it every month | [optional]
**plan_monthday** | **string** | Days of the month, as a comma-separated list of values from 1 to 31 (e.g. &#x60;1,15&#x60;). Omit it, or send null or an empty string, to run it every day | [optional]
**plan_weekday** | **string** | Day of the week, from 1 (Monday) to 7 (Sunday). Omit it, or send null or an empty string, to run it every day of the week | [optional]
**plan_hour** | **string** | Hours, as a comma-separated list of values from 0 to 23 (e.g. &#x60;0,12&#x60;). Omit it, or send null or an empty string, to run it every hour | [optional]
**plan_minute** | **string** | Minutes, as a comma-separated list of values from 0 to 59 (e.g. &#x60;0,30&#x60;). Omit it, or send null or an empty string, to run it every minute | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
