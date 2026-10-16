# ServerMonitoringProbe

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**probe_id** | **int** |  |
**server_monitoring_id** | **int** | Id of the server monitoring of the probe (&#x60;GET /api/v3/server-monitorings/{server_monitoring_id}&#x60;) |
**template_id** | **int** | Id of the probe template, the &#x60;server_monitoring_item_template_id&#x60; of &#x60;POST /api/v3/server-monitorings/{server_monitoring_id}/probes&#x60; |
**template_code** | **string** | Code of the probe template, for example &#x60;SERVER_DOWN&#x60;, &#x60;HTTP_SERVICE_DOWN&#x60; or &#x60;FREE_DISK_SPACE&#x60; |
**template_name** | **string** | Name of the probe template |
**monitoring_item_id** | **int** | Id of the item of the probe in the monitoring system (Zabbix); null until the probe is created there |
**monitoring_trigger_id** | **int** | Id of the trigger of the probe in the monitoring system (Zabbix); null until it is created there |
**is_default** | **bool** | Whether it is the default probe of the monitoring, the ICMP check of the host (template &#x60;SERVER_DOWN&#x60;) |
**advanced_item** | **bool** | Whether the probe counts towards &#x60;probe_limit&#x60; of the monitoring, like the probes added with &#x60;POST /api/v3/server-monitorings/{server_monitoring_id}/probes&#x60;; the statistics probes do not |
**is_error** | **bool** | Whether the probe is in error; null when no problem was detected or the solved problem has already been notified |
**monitoring_item_disabled** | **bool** | Whether the probe is disabled in the monitoring system |
**action_enabled** | **bool** | Whether the automatic action of the probe is enabled; the actions run only on the &#x60;plus&#x60; monitorings |
**notification_email** | **string** | Email address that receives the notifications of the probe; empty or null when the probe sends no email |
**notification_sms** | **string** | Phone number that receives the notifications of the probe by SMS, an Italian number without the international prefix; empty or null when the probe sends no SMS |
**date_problem** | **\DateTime** | When the last problem detected by the probe started; null when there is no problem |
**date_last_notification** | **\DateTime** | When the last notification of the problem was sent; null when none was sent for the current problem |
**active** | **bool** | Whether the probe is active: the endpoints return only active probes |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
