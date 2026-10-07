# ServerAutomaticSnapshot

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**snapshot_id** | **int** | Id of the schedule (not of a snapshot) |
**server_id** | **int** | Id of the server (&#x60;GET /api/v3/servers/{server_id}&#x60;) |
**name** | **string** | Name of the snapshots that the schedule creates |
**days_of_week** | **int[]** | Days of the week of the snapshots, from 1 (Monday) to 7 (Sunday) |
**hour_of_day** | **string** | Time of the snapshots, in 24-hour &#x60;HH:MM&#x60; format |
**is_active** | **bool** | Whether the schedule is active |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
