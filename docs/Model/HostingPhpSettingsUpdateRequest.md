# HostingPhpSettingsUpdateRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**setting** | **string** | PHP directive to change |
**value** | **string** | New value of the directive. Suggested values: opcache.enable 1 or 0; display_errors On or Off; memory_limit from 64M to 512M (64M, 96M, 128M, 160M, 192M, 224M, 256M, 288M, 320M, 384M, 448M, 512M); post_max_size and upload_max_filesize from 1M to 512M (1M, 2M, 4M, 8M, 16M, 24M, 32M, 40M, 48M, 64M, 80M, 96M, 112M, 128M, 160M, 192M, 224M, 256M, 512M); max_execution_time and max_input_time in seconds, from 10 to 600. Other values are accepted if they are numbers, optionally followed by M, between the smallest and the largest suggested value |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
