# WebMonitoring

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**web_monitoring_id** | **int** |  |
**purchase_id** | **int** | Id of the purchase of the monitoring (&#x60;GET /api/v3/purchases/{purchase_id}&#x60;) |
**service_name** | **string** | Name of the service of the purchase |
**purchase_name** | **string** | Name of the object of the purchase: the monitored domain |
**purchase_status_code** | **string** | Status code of the purchase, for example &#x60;ACTIVE_V2&#x60; or &#x60;DISMISSED_V2&#x60; |
**monitored_domain** | **string** |  |
**host_ref** | **string** | Id of the monitored host on the monitoring system |
**web_scenario_ref** | **string** | Id of the check of the site (web scenario) on the monitoring system |
**status** | **string** | Status of the site: &#x60;healthy&#x60;, &#x60;problem&#x60; (a recent check got an HTTP status outside 2xx) or &#x60;frequent_problem&#x60; |
**email_notification** | **string** | Email address for the notices of the monitoring (site down or back up, SSL expiry); without it no email notice is sent |
**sms_notification** | **string** | Italian mobile number for the SMS notices, without the international prefix; without it no SMS is sent |
**ips** | **string** | IP address the monitored domain resolves to |
**ip_isp** | **string** | Internet service provider of the IP address |
**ip_location** | **string** | Country of the IP address, as ISO 3166-1 alpha-2 code (for example &#x60;IT&#x60;) |
**last_http_response** | **int** | HTTP status code of the last check, for example &#x60;200&#x60; |
**last_down_date** | **\DateTime** | Last time a check found the site down (HTTP status outside 2xx) |
**send_ssl_notify** | **bool** | Whether the notices of the expiry of the SSL certificate of the site are sent |
**active** | **bool** | Whether the monitoring is active |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
