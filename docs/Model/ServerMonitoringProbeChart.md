# ServerMonitoringProbeChart

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**server_monitoring_id** | **int** | Id of the server monitoring (&#x60;GET /api/v3/server-monitorings/{server_monitoring_id}&#x60;) |
**probe_id** | **int** | Id of the probe (&#x60;GET /api/v3/server-monitorings/{server_monitoring_id}/probes/{probe_id}&#x60;) |
**interval** | **string** | Period covered by the chart, as an ISO 8601 duration: always &#x60;P1D&#x60;, the last day |
**points** | [**\Shellrent\Sdk\Model\ServerMonitoringProbeChartPointsInner[]**](ServerMonitoringProbeChartPointsInner.md) | Values measured by the probe in the period, in time order |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
