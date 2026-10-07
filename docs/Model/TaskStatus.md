# TaskStatus

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**status_code** | **string** | Status code: &#x60;TO_EXECUTE&#x60; (queued), &#x60;MACHINE&#x60; (running), &#x60;WAIT&#x60; (paused), &#x60;HUMAN_INTERVENTION&#x60; (checked by an operator), &#x60;ASK_USER&#x60; (waiting for data, &#x60;POST /api/v3/tasks/{task_id}/data&#x60;), &#x60;DONE&#x60; (completed) or &#x60;FAIL&#x60; (failed) |
**status_name** | **string** | Name of the status for the customers, in Italian, as in the control panel (for example &#x60;In verifica&#x60; for &#x60;HUMAN_INTERVENTION&#x60;) |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
