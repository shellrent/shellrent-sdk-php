# WebMonitoringNotices

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**web_monitoring_id** | **int** | Id of the web monitoring (&#x60;GET /api/v3/web-monitorings/{web_monitoring_id}&#x60;) |
**notification_email** | **string** | Email address for the notices of the monitoring (site down or back up, SSL expiry); without it no email notice is sent |
**notification_sms** | **string** | Italian mobile number for the SMS notices, without the international prefix; without it no SMS is sent |
**send_ssl_notify** | **bool** | Whether the notices of the expiry of the SSL certificate of the site are sent |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
