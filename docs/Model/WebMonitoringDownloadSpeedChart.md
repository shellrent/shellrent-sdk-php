# WebMonitoringDownloadSpeedChart

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**web_monitoring_id** | **int** | Id of the web monitoring (&#x60;GET /api/v3/web-monitorings/{web_monitoring_id}&#x60;) |
**interval** | **string** | Period covered by the chart, as an ISO 8601 duration: always &#x60;PT1H&#x60;, the last hour |
**unit** | **string** | Unit of the &#x60;y&#x60; values: always &#x60;KB/s&#x60; |
**points** | [**\Shellrent\Sdk\Model\WebMonitoringDownloadSpeedChartPointsInner[]**](WebMonitoringDownloadSpeedChartPointsInner.md) | Download speeds measured in the last hour, one point per check |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
