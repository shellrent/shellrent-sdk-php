# ServerMonitoring

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**server_monitoring_id** | **int** |  |
**purchase_monitoring_id** | **int** | Id of the purchase of the monitoring service (&#x60;GET /api/v3/purchases/{purchase_id}&#x60;) |
**purchase_server_id** | **int** | Id of the purchase of the monitored server (&#x60;GET /api/v3/purchases/{purchase_id}&#x60;); null when the monitoring checks a hostname or an IP address |
**service_name** | **string** | Name of the service of the monitoring purchase |
**purchase_name** | **string** | Name of the object of the monitoring purchase, usually the monitored hostname or IP address |
**purchase_status_code** | **string** | Status code of the monitoring purchase, for example &#x60;ACTIVE_V2&#x60; or &#x60;NEW_V2&#x60; (not active yet) |
**monitoring_key** | **string** | Host checked by the monitoring: the hostname of the monitored server, or the hostname or IP address given |
**is_server_monitored** | **bool** | Whether the monitoring checks a server, given by its purchase (&#x60;purchase_server_id&#x60;) or by its hostname |
**is_ip_monitored** | **bool** | Whether the monitoring checks an IP address |
**is_external_device_monitored** | **bool** | Whether the monitoring checks an external device, given by hostname or IP address instead of a server or an IP address of the account |
**monitoring_host_enabled** | **bool** | Whether the monitoring of the host is enabled |
**monitoring_type** | **string** | Type of the monitoring: &#x60;default&#x60; (Base) or &#x60;plus&#x60; (Managed), which can also run the automatic actions of the probes |
**probe_limit** | **int** | Maximum number of probes of the monitoring, counting the probes with &#x60;advanced_item&#x60; |
**severity_level** | **string** | Severity of the problems detected by the probes: &#x60;default&#x60;, &#x60;high&#x60; or &#x60;disaster&#x60; |
**email_notification** | **string** | Default email address for the notifications of the probes; each probe has its own (&#x60;notification_email&#x60;) |
**sms_notification** | **string** | Default phone number for the SMS notifications of the probes; each probe has its own (&#x60;notification_sms&#x60;) |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
