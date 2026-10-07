# Task

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**task_id** | **int** |  |
**purchase_id** | **int** | Id of the purchase the task works on (&#x60;GET /api/v3/purchases/{purchase_id}&#x60;) |
**task_status** | [**\Shellrent\Sdk\Model\TaskStatus**](TaskStatus.md) |  |
**executed_instructions** | **int** | Number of the step reached by the task, out of &#x60;total_instructions&#x60;: equal to it when the task is done or failed |
**total_instructions** | **int** | Total number of steps of the task |
**is_started** | **bool** | Whether the execution of the task has started |
**ask_user_error** | **string** | Error found in the data provided for the task, null when there is none: the corrected data are sent with &#x60;POST /api/v3/tasks/{task_id}/data&#x60; |
**date_started** | **\DateTime** | Date and time the task was created |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
