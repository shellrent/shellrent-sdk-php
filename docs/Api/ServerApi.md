# Shellrent\Sdk\ServerApi

Server

All URIs are relative to https://api.shellrent.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**canHardRebootServer()**](ServerApi.md#canHardRebootServer) | **GET** /api/v3/servers/{server_id}/can-hard-reboot | Check if server can hard reboot |
| [**canHardStopServer()**](ServerApi.md#canHardStopServer) | **GET** /api/v3/servers/{server_id}/can-hard-stop | Check if server can hard stop |
| [**canRebootServer()**](ServerApi.md#canRebootServer) | **GET** /api/v3/servers/{server_id}/can-reboot | Check if server can reboot |
| [**canStartServer()**](ServerApi.md#canStartServer) | **GET** /api/v3/servers/{server_id}/can-start | Check if server can start |
| [**canStopServer()**](ServerApi.md#canStopServer) | **GET** /api/v3/servers/{server_id}/can-stop | Check if server can stop |
| [**createPrivateCloudVirtualMachine()**](ServerApi.md#createPrivateCloudVirtualMachine) | **POST** /api/v3/servers/{server_id}/private-cloud/virtual-machines | Create private cloud VM |
| [**createServerAutomaticSnapshot()**](ServerApi.md#createServerAutomaticSnapshot) | **POST** /api/v3/servers/{server_id}/snapshot-schedule | Create automatic snapshot settings |
| [**createServerNetworkInterface()**](ServerApi.md#createServerNetworkInterface) | **POST** /api/v3/servers/{server_id}/network-interfaces | Create server network interface |
| [**createServerPowerAction()**](ServerApi.md#createServerPowerAction) | **POST** /api/v3/servers/{server_id}/power-actions | Start, stop or reboot a server |
| [**deletePrivateCloudVirtualMachine()**](ServerApi.md#deletePrivateCloudVirtualMachine) | **DELETE** /api/v3/servers/{server_id}/private-cloud/virtual-machines/{vm_id} | Delete private cloud VM |
| [**deleteServerAutomaticSnapshot()**](ServerApi.md#deleteServerAutomaticSnapshot) | **DELETE** /api/v3/servers/{server_id}/snapshot-schedule | Delete automatic snapshot settings |
| [**deleteServerExposedBackups()**](ServerApi.md#deleteServerExposedBackups) | **DELETE** /api/v3/servers/{server_id}/backups/exhibitions | Delete exposed backups |
| [**deleteServerIpAddressReverseDns()**](ServerApi.md#deleteServerIpAddressReverseDns) | **DELETE** /api/v3/servers/{server_id}/ip-addresses/{ip_address_id}/rdns | Delete IP reverse DNS |
| [**deleteServerNetworkInterface()**](ServerApi.md#deleteServerNetworkInterface) | **DELETE** /api/v3/servers/{server_id}/network-interfaces/{network_interface_id} | Delete server network interface |
| [**deleteServerSnapshot()**](ServerApi.md#deleteServerSnapshot) | **DELETE** /api/v3/servers/{server_id}/snapshots/{snapshot_id} | Delete server snapshot |
| [**exposeServerBackup()**](ServerApi.md#exposeServerBackup) | **POST** /api/v3/servers/{server_id}/backups/exhibitions | Expose a server backup |
| [**getServer()**](ServerApi.md#getServer) | **GET** /api/v3/servers/{server_id} | Get server |
| [**getServerAutomaticSnapshot()**](ServerApi.md#getServerAutomaticSnapshot) | **GET** /api/v3/servers/{server_id}/snapshot-schedule | Get automatic snapshot settings |
| [**getServerBackup()**](ServerApi.md#getServerBackup) | **GET** /api/v3/servers/{server_id}/backups/{server_backup_id} | Get server backup |
| [**getServerIpAddress()**](ServerApi.md#getServerIpAddress) | **GET** /api/v3/servers/{server_id}/ip-addresses/{ip_address_id} | Get server IP address |
| [**getServerNetworkInterface()**](ServerApi.md#getServerNetworkInterface) | **GET** /api/v3/servers/{server_id}/network-interfaces/{network_interface_id} | Get server network interface |
| [**getServerPrivateCloud()**](ServerApi.md#getServerPrivateCloud) | **GET** /api/v3/servers/{server_id}/private-cloud | Get private cloud info |
| [**getServerSnapshot()**](ServerApi.md#getServerSnapshot) | **GET** /api/v3/servers/{server_id}/snapshots/{snapshot_id} | Get server snapshot |
| [**listPrivateCloudAvailableIpAddresses()**](ServerApi.md#listPrivateCloudAvailableIpAddresses) | **GET** /api/v3/servers/{server_id}/private-cloud/available-ip-addresses | List free IP addresses of a private cloud |
| [**listServerBackups()**](ServerApi.md#listServerBackups) | **GET** /api/v3/servers/{server_id}/backups | List server backups |
| [**listServerCredentials()**](ServerApi.md#listServerCredentials) | **GET** /api/v3/servers/{server_id}/credentials | List server credentials |
| [**listServerExposedBackups()**](ServerApi.md#listServerExposedBackups) | **GET** /api/v3/servers/{server_id}/backups/exhibitions | List exposable server backups |
| [**listServerIpAddresses()**](ServerApi.md#listServerIpAddresses) | **GET** /api/v3/servers/{server_id}/ip-addresses | List server IP addresses |
| [**listServerNetworkInterfaces()**](ServerApi.md#listServerNetworkInterfaces) | **GET** /api/v3/servers/{server_id}/network-interfaces | List server network interfaces |
| [**listServerSnapshots()**](ServerApi.md#listServerSnapshots) | **GET** /api/v3/servers/{server_id}/snapshots | List server snapshots |
| [**listServers()**](ServerApi.md#listServers) | **GET** /api/v3/servers | List servers |
| [**reinstallServer()**](ServerApi.md#reinstallServer) | **POST** /api/v3/servers/{server_id}/reinstallations | Reinstall server |
| [**restoreServerBackup()**](ServerApi.md#restoreServerBackup) | **POST** /api/v3/servers/{server_id}/backups/{server_backup_id}/restores | Restore server backup |
| [**restoreServerSnapshot()**](ServerApi.md#restoreServerSnapshot) | **POST** /api/v3/servers/{server_id}/snapshots/{snapshot_id}/restores | Restore server snapshot |
| [**updatePrivateCloudVirtualMachine()**](ServerApi.md#updatePrivateCloudVirtualMachine) | **PATCH** /api/v3/servers/{server_id}/private-cloud/virtual-machines/{vm_id} | Update private cloud VM |
| [**updateServerAutomaticSnapshot()**](ServerApi.md#updateServerAutomaticSnapshot) | **PATCH** /api/v3/servers/{server_id}/snapshot-schedule | Update automatic snapshot settings |
| [**updateServerIpAddressReverseDns()**](ServerApi.md#updateServerIpAddressReverseDns) | **PATCH** /api/v3/servers/{server_id}/ip-addresses/{ip_address_id}/rdns | Update IP reverse DNS |


## `canHardRebootServer()`

```php
canHardRebootServer($server_id): \Shellrent\Sdk\Model\ServerCanActionResponse
```

Check if server can hard reboot

Whether the server can be forcibly rebooted now with `POST /api/v3/servers/{server_id}/power-actions` and `action` `hard_reboot`. `can_action` is false for a physical server, which only has `reboot`, and for the server of a private cloud; also while the server is not ready, its service is not active or is under maintenance, another operation does not allow the action, or the virtual machine is not running

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\ServerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 56; // int | ID of the server

try {
    $result = $apiInstance->canHardRebootServer($server_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServerApi->canHardRebootServer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **server_id** | **int**| ID of the server | |

### Return type

[**\Shellrent\Sdk\Model\ServerCanActionResponse**](../Model/ServerCanActionResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `canHardStopServer()`

```php
canHardStopServer($server_id): \Shellrent\Sdk\Model\ServerCanActionResponse
```

Check if server can hard stop

Whether the server can be forcibly stopped now with `POST /api/v3/servers/{server_id}/power-actions` and `action` `hard_stop`. `can_action` is false for a physical server, which only has `reboot`, and for the server of a private cloud; also while the server is not ready, its service is not active or is under maintenance, another operation does not allow the action, or the virtual machine is already stopped

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\ServerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 56; // int | ID of the server

try {
    $result = $apiInstance->canHardStopServer($server_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServerApi->canHardStopServer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **server_id** | **int**| ID of the server | |

### Return type

[**\Shellrent\Sdk\Model\ServerCanActionResponse**](../Model/ServerCanActionResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `canRebootServer()`

```php
canRebootServer($server_id): \Shellrent\Sdk\Model\ServerCanActionResponse
```

Check if server can reboot

Whether the server can be rebooted now with `POST /api/v3/servers/{server_id}/power-actions` and `action` `reboot`, the only power action of the physical servers. `can_action` is false for the server of a private cloud, and while the server is not ready, its service is not active or is under maintenance, another operation does not allow the action, the virtual machine is not running, or the physical server cannot be managed at its supplier

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\ServerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 56; // int | ID of the server

try {
    $result = $apiInstance->canRebootServer($server_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServerApi->canRebootServer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **server_id** | **int**| ID of the server | |

### Return type

[**\Shellrent\Sdk\Model\ServerCanActionResponse**](../Model/ServerCanActionResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `canStartServer()`

```php
canStartServer($server_id): \Shellrent\Sdk\Model\ServerCanActionResponse
```

Check if server can start

Whether the server can be started now with `POST /api/v3/servers/{server_id}/power-actions` and `action` `start`. `can_action` is false for a physical server, which only has `reboot`, and for the server of a private cloud; also while the server is not ready, its service is not active or is under maintenance, another operation does not allow the action, or the virtual machine is already running

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\ServerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 56; // int | ID of the server

try {
    $result = $apiInstance->canStartServer($server_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServerApi->canStartServer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **server_id** | **int**| ID of the server | |

### Return type

[**\Shellrent\Sdk\Model\ServerCanActionResponse**](../Model/ServerCanActionResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `canStopServer()`

```php
canStopServer($server_id): \Shellrent\Sdk\Model\ServerCanActionResponse
```

Check if server can stop

Whether the server can be stopped now with `POST /api/v3/servers/{server_id}/power-actions` and `action` `stop`. `can_action` is false for a physical server, which only has `reboot`, and for the server of a private cloud; also while the server is not ready, its service is not active or is under maintenance, another operation does not allow the action, or the virtual machine is already stopped

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\ServerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 56; // int | ID of the server

try {
    $result = $apiInstance->canStopServer($server_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServerApi->canStopServer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **server_id** | **int**| ID of the server | |

### Return type

[**\Shellrent\Sdk\Model\ServerCanActionResponse**](../Model/ServerCanActionResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createPrivateCloudVirtualMachine()`

```php
createPrivateCloudVirtualMachine($server_id, $private_cloud_vm_create_request): \Shellrent\Sdk\Model\TaskResponse
```

Create private cloud VM

Create private cloud VM. The response is 409 when the private cloud already has the maximum number of virtual machines, its daily backup space is already in use, it has no licences left for the template, or another operation is in progress.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\ServerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 56; // int | ID of the server
$private_cloud_vm_create_request = new \Shellrent\Sdk\Model\PrivateCloudVmCreateRequest(); // \Shellrent\Sdk\Model\PrivateCloudVmCreateRequest

try {
    $result = $apiInstance->createPrivateCloudVirtualMachine($server_id, $private_cloud_vm_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServerApi->createPrivateCloudVirtualMachine: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **server_id** | **int**| ID of the server | |
| **private_cloud_vm_create_request** | [**\Shellrent\Sdk\Model\PrivateCloudVmCreateRequest**](../Model/PrivateCloudVmCreateRequest.md)|  | |

### Return type

[**\Shellrent\Sdk\Model\TaskResponse**](../Model/TaskResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createServerAutomaticSnapshot()`

```php
createServerAutomaticSnapshot($server_id, $server_automatic_snapshot_request): \Shellrent\Sdk\Model\ServerAutomaticSnapshotResponse
```

Create automatic snapshot settings

Configures the automatic snapshot of the server. A server has at most one automatic snapshot: if one is already configured the response is 409 and the configuration is changed with PATCH. Automatic snapshots must be included in the service plan, otherwise the response is 403.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\ServerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 56; // int | ID of the server
$server_automatic_snapshot_request = new \Shellrent\Sdk\Model\ServerAutomaticSnapshotRequest(); // \Shellrent\Sdk\Model\ServerAutomaticSnapshotRequest

try {
    $result = $apiInstance->createServerAutomaticSnapshot($server_id, $server_automatic_snapshot_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServerApi->createServerAutomaticSnapshot: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **server_id** | **int**| ID of the server | |
| **server_automatic_snapshot_request** | [**\Shellrent\Sdk\Model\ServerAutomaticSnapshotRequest**](../Model/ServerAutomaticSnapshotRequest.md)|  | |

### Return type

[**\Shellrent\Sdk\Model\ServerAutomaticSnapshotResponse**](../Model/ServerAutomaticSnapshotResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createServerNetworkInterface()`

```php
createServerNetworkInterface($server_id, $server_network_interface_create_request): \Shellrent\Sdk\Model\TaskResponse
```

Create server network interface

Starts the creation of a network interface: local, on an active local network of the cluster where the server resides, or public, on an IP address. The creation is asynchronous and is returned as a Task.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\ServerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 56; // int | ID of the server
$server_network_interface_create_request = new \Shellrent\Sdk\Model\ServerNetworkInterfaceCreateRequest(); // \Shellrent\Sdk\Model\ServerNetworkInterfaceCreateRequest

try {
    $result = $apiInstance->createServerNetworkInterface($server_id, $server_network_interface_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServerApi->createServerNetworkInterface: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **server_id** | **int**| ID of the server | |
| **server_network_interface_create_request** | [**\Shellrent\Sdk\Model\ServerNetworkInterfaceCreateRequest**](../Model/ServerNetworkInterfaceCreateRequest.md)|  | |

### Return type

[**\Shellrent\Sdk\Model\TaskResponse**](../Model/TaskResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createServerPowerAction()`

```php
createServerPowerAction($server_id, $server_power_action_request): \Shellrent\Sdk\Model\TaskResponse
```

Start, stop or reboot a server

Starts a power action on the server, chosen with `action`; the operation goes on in the background as the returned Task. 403 for an action that the server does not have (physical servers only have `reboot`); 409 while the server is not ready, its service is not active or is under maintenance, or another operation does not allow the action. Before, each action had its own path (`…/start`, `…/reboot`, `…/stop`, `…/hard-reboot`, `…/hard-stop`)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\ServerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 56; // int | ID of the server
$server_power_action_request = new \Shellrent\Sdk\Model\ServerPowerActionRequest(); // \Shellrent\Sdk\Model\ServerPowerActionRequest

try {
    $result = $apiInstance->createServerPowerAction($server_id, $server_power_action_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServerApi->createServerPowerAction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **server_id** | **int**| ID of the server | |
| **server_power_action_request** | [**\Shellrent\Sdk\Model\ServerPowerActionRequest**](../Model/ServerPowerActionRequest.md)|  | |

### Return type

[**\Shellrent\Sdk\Model\TaskResponse**](../Model/TaskResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deletePrivateCloudVirtualMachine()`

```php
deletePrivateCloudVirtualMachine($server_id, $vm_id): \Shellrent\Sdk\Model\TaskResponse
```

Delete private cloud VM

Deletes a virtual machine of the private cloud `server_id`, dismissing its purchase; the operation goes on in the background as the returned Task. 404 when the virtual machine is not on the private cloud; 409 when `server_id` is not a private cloud, while the private cloud is not active or is suspended, or while the purchase of the virtual machine cannot be dismissed or another operation does not allow it

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\ServerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 56; // int | ID of the server
$vm_id = 56; // int | ID of the virtual machine

try {
    $result = $apiInstance->deletePrivateCloudVirtualMachine($server_id, $vm_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServerApi->deletePrivateCloudVirtualMachine: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **server_id** | **int**| ID of the server | |
| **vm_id** | **int**| ID of the virtual machine | |

### Return type

[**\Shellrent\Sdk\Model\TaskResponse**](../Model/TaskResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteServerAutomaticSnapshot()`

```php
deleteServerAutomaticSnapshot($server_id)
```

Delete automatic snapshot settings

Removes the automatic snapshot of the server (404 if none is configured). The snapshots it created that have no expiry date receive the default expiry of the plan.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\ServerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 56; // int | ID of the server

try {
    $apiInstance->deleteServerAutomaticSnapshot($server_id);
} catch (Exception $e) {
    echo 'Exception when calling ServerApi->deleteServerAutomaticSnapshot: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **server_id** | **int**| ID of the server | |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteServerExposedBackups()`

```php
deleteServerExposedBackups($server_id): \Shellrent\Sdk\Model\TaskResponse
```

Delete exposed backups

Removes the backups exposed on the virtual machine with `POST /api/v3/servers/{server_id}/backups/exhibitions`; the operation goes on in the background as the returned Task. 409 while a backup is being exposed, for a physical server or a virtual machine that is not on oVirt, while the server is not ready, its service is not active or is under maintenance, or another operation does not allow it

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\ServerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 56; // int | ID of the server

try {
    $result = $apiInstance->deleteServerExposedBackups($server_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServerApi->deleteServerExposedBackups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **server_id** | **int**| ID of the server | |

### Return type

[**\Shellrent\Sdk\Model\TaskResponse**](../Model/TaskResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteServerIpAddressReverseDns()`

```php
deleteServerIpAddressReverseDns($server_id, $ip_address_id): \Shellrent\Sdk\Model\IpAddressResponse
```

Delete IP reverse DNS

Delete reverse DNS for an IP address

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\ServerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 56; // int | ID of the server
$ip_address_id = 56; // int | ID of the IP address of the server

try {
    $result = $apiInstance->deleteServerIpAddressReverseDns($server_id, $ip_address_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServerApi->deleteServerIpAddressReverseDns: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **server_id** | **int**| ID of the server | |
| **ip_address_id** | **int**| ID of the IP address of the server | |

### Return type

[**\Shellrent\Sdk\Model\IpAddressResponse**](../Model/IpAddressResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteServerNetworkInterface()`

```php
deleteServerNetworkInterface($server_id, $network_interface_id): \Shellrent\Sdk\Model\TaskResponse
```

Delete server network interface

Starts the deletion of an active network interface, returned as a Task. The default interface and the one of the primary IP address cannot be deleted.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\ServerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 56; // int | ID of the server
$network_interface_id = 56; // int | ID of the network interface

try {
    $result = $apiInstance->deleteServerNetworkInterface($server_id, $network_interface_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServerApi->deleteServerNetworkInterface: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **server_id** | **int**| ID of the server | |
| **network_interface_id** | **int**| ID of the network interface | |

### Return type

[**\Shellrent\Sdk\Model\TaskResponse**](../Model/TaskResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteServerSnapshot()`

```php
deleteServerSnapshot($server_id, $snapshot_id): \Shellrent\Sdk\Model\TaskResponse
```

Delete server snapshot

Delete a server snapshot

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\ServerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 56; // int | ID of the server
$snapshot_id = 56; // int | ID of the snapshot

try {
    $result = $apiInstance->deleteServerSnapshot($server_id, $snapshot_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServerApi->deleteServerSnapshot: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **server_id** | **int**| ID of the server | |
| **snapshot_id** | **int**| ID of the snapshot | |

### Return type

[**\Shellrent\Sdk\Model\TaskResponse**](../Model/TaskResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `exposeServerBackup()`

```php
exposeServerBackup($server_id, $server_backup_exhibit_request): \Shellrent\Sdk\Model\TaskResponse
```

Expose a server backup

Exposes a backup of the virtual machine (`backup_id`, one of `GET /api/v3/servers/{server_id}/backups/exhibitions`) as an additional disk, to read its files without restoring it: it replaces the backup exposed before, the server may restart, and the operation goes on in the background as the returned Task. Exposed backups are removed after a few days, or with `DELETE /api/v3/servers/{server_id}/backups/exhibitions`. 409 for a physical server or a virtual machine that is not on oVirt, while the exposed backups are being deleted, while the server is not ready, its service is not active or is under maintenance, or another operation does not allow it

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\ServerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 56; // int | ID of the server
$server_backup_exhibit_request = new \Shellrent\Sdk\Model\ServerBackupExhibitRequest(); // \Shellrent\Sdk\Model\ServerBackupExhibitRequest

try {
    $result = $apiInstance->exposeServerBackup($server_id, $server_backup_exhibit_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServerApi->exposeServerBackup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **server_id** | **int**| ID of the server | |
| **server_backup_exhibit_request** | [**\Shellrent\Sdk\Model\ServerBackupExhibitRequest**](../Model/ServerBackupExhibitRequest.md)|  | |

### Return type

[**\Shellrent\Sdk\Model\TaskResponse**](../Model/TaskResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getServer()`

```php
getServer($server_id): \Shellrent\Sdk\Model\ServerResponse
```

Get server

Get server details

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\ServerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 56; // int | ID of the server

try {
    $result = $apiInstance->getServer($server_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServerApi->getServer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **server_id** | **int**| ID of the server | |

### Return type

[**\Shellrent\Sdk\Model\ServerResponse**](../Model/ServerResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getServerAutomaticSnapshot()`

```php
getServerAutomaticSnapshot($server_id): \Shellrent\Sdk\Model\ServerAutomaticSnapshotResponse
```

Get automatic snapshot settings

Returns the automatic snapshot of the server (404 if none is configured). Automatic snapshots must be included in the service plan (for a private cloud VM, in the plan of the private cloud), otherwise the response is 403.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\ServerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 56; // int | ID of the server

try {
    $result = $apiInstance->getServerAutomaticSnapshot($server_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServerApi->getServerAutomaticSnapshot: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **server_id** | **int**| ID of the server | |

### Return type

[**\Shellrent\Sdk\Model\ServerAutomaticSnapshotResponse**](../Model/ServerAutomaticSnapshotResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getServerBackup()`

```php
getServerBackup($server_id, $server_backup_id): \Shellrent\Sdk\Model\ServerBackupResponse
```

Get server backup

Get backup details for server

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\ServerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 56; // int | ID of the server
$server_backup_id = 56; // int | ID of the server backup

try {
    $result = $apiInstance->getServerBackup($server_id, $server_backup_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServerApi->getServerBackup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **server_id** | **int**| ID of the server | |
| **server_backup_id** | **int**| ID of the server backup | |

### Return type

[**\Shellrent\Sdk\Model\ServerBackupResponse**](../Model/ServerBackupResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getServerIpAddress()`

```php
getServerIpAddress($server_id, $ip_address_id): \Shellrent\Sdk\Model\IpAddressResponse
```

Get server IP address

Get IP address details for server

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\ServerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 56; // int | ID of the server
$ip_address_id = 56; // int | ID of the IP address of the server

try {
    $result = $apiInstance->getServerIpAddress($server_id, $ip_address_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServerApi->getServerIpAddress: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **server_id** | **int**| ID of the server | |
| **ip_address_id** | **int**| ID of the IP address of the server | |

### Return type

[**\Shellrent\Sdk\Model\IpAddressResponse**](../Model/IpAddressResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getServerNetworkInterface()`

```php
getServerNetworkInterface($server_id, $network_interface_id): \Shellrent\Sdk\Model\ServerNetworkInterfaceResponse
```

Get server network interface

Returns an active network interface (VIF) of the server; a deleted interface responds 404

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\ServerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 56; // int | ID of the server
$network_interface_id = 56; // int | ID of the network interface

try {
    $result = $apiInstance->getServerNetworkInterface($server_id, $network_interface_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServerApi->getServerNetworkInterface: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **server_id** | **int**| ID of the server | |
| **network_interface_id** | **int**| ID of the network interface | |

### Return type

[**\Shellrent\Sdk\Model\ServerNetworkInterfaceResponse**](../Model/ServerNetworkInterfaceResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getServerPrivateCloud()`

```php
getServerPrivateCloud($server_id): \Shellrent\Sdk\Model\PrivateCloudResponse
```

Get private cloud info

Get private cloud details for server

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\ServerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 56; // int | ID of the server

try {
    $result = $apiInstance->getServerPrivateCloud($server_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServerApi->getServerPrivateCloud: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **server_id** | **int**| ID of the server | |

### Return type

[**\Shellrent\Sdk\Model\PrivateCloudResponse**](../Model/PrivateCloudResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getServerSnapshot()`

```php
getServerSnapshot($server_id, $snapshot_id): \Shellrent\Sdk\Model\ServerSnapshotResponse
```

Get server snapshot

Get snapshot details for server

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\ServerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 56; // int | ID of the server
$snapshot_id = 56; // int | ID of the snapshot

try {
    $result = $apiInstance->getServerSnapshot($server_id, $snapshot_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServerApi->getServerSnapshot: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **server_id** | **int**| ID of the server | |
| **snapshot_id** | **int**| ID of the snapshot | |

### Return type

[**\Shellrent\Sdk\Model\ServerSnapshotResponse**](../Model/ServerSnapshotResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listPrivateCloudAvailableIpAddresses()`

```php
listPrivateCloudAvailableIpAddresses($server_id, $page, $per_page): \Shellrent\Sdk\Model\IpAddressPaginatedListResponse
```

List free IP addresses of a private cloud

Free and available IP addresses of the pool of the private cloud, the ones to use as `ip_address_id` to create a VM of the private cloud or a public network interface of one of its VMs. The server can be the private cloud or one of its VMs.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\ServerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 56; // int | ID of the server
$page = 1; // int | Page number, starting from 1. A page beyond the last one returns an empty `data` list (with the requested `page` in `meta`).
$per_page = 20; // int | Number of items per page. Values outside the allowed range are rejected with a validation error.

try {
    $result = $apiInstance->listPrivateCloudAvailableIpAddresses($server_id, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServerApi->listPrivateCloudAvailableIpAddresses: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **server_id** | **int**| ID of the server | |
| **page** | **int**| Page number, starting from 1. A page beyond the last one returns an empty &#x60;data&#x60; list (with the requested &#x60;page&#x60; in &#x60;meta&#x60;). | [optional] [default to 1] |
| **per_page** | **int**| Number of items per page. Values outside the allowed range are rejected with a validation error. | [optional] [default to 20] |

### Return type

[**\Shellrent\Sdk\Model\IpAddressPaginatedListResponse**](../Model/IpAddressPaginatedListResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listServerBackups()`

```php
listServerBackups($server_id): \Shellrent\Sdk\Model\ServerBackupListResponse
```

List server backups

Get list of backups for server

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\ServerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 56; // int | ID of the server

try {
    $result = $apiInstance->listServerBackups($server_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServerApi->listServerBackups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **server_id** | **int**| ID of the server | |

### Return type

[**\Shellrent\Sdk\Model\ServerBackupListResponse**](../Model/ServerBackupListResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listServerCredentials()`

```php
listServerCredentials($server_id): \Shellrent\Sdk\Model\ServerCredentialResponse
```

List server credentials

Get credentials for a server

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\ServerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 56; // int | ID of the server

try {
    $result = $apiInstance->listServerCredentials($server_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServerApi->listServerCredentials: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **server_id** | **int**| ID of the server | |

### Return type

[**\Shellrent\Sdk\Model\ServerCredentialResponse**](../Model/ServerCredentialResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listServerExposedBackups()`

```php
listServerExposedBackups($server_id): \Shellrent\Sdk\Model\ServerBackupListResponse
```

List exposable server backups

Lists the backups of the server that can be exposed with `POST /api/v3/servers/{server_id}/backups/exhibitions`: the restorable backups visible to the customer, one-off backups included. It does not tell which backup is exposed now

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\ServerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 56; // int | ID of the server

try {
    $result = $apiInstance->listServerExposedBackups($server_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServerApi->listServerExposedBackups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **server_id** | **int**| ID of the server | |

### Return type

[**\Shellrent\Sdk\Model\ServerBackupListResponse**](../Model/ServerBackupListResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listServerIpAddresses()`

```php
listServerIpAddresses($server_id): \Shellrent\Sdk\Model\IpAddressListResponse
```

List server IP addresses

Get list of IP addresses for server

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\ServerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 56; // int | ID of the server

try {
    $result = $apiInstance->listServerIpAddresses($server_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServerApi->listServerIpAddresses: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **server_id** | **int**| ID of the server | |

### Return type

[**\Shellrent\Sdk\Model\IpAddressListResponse**](../Model/IpAddressListResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listServerNetworkInterfaces()`

```php
listServerNetworkInterfaces($server_id): \Shellrent\Sdk\Model\ServerNetworkInterfaceListResponse
```

List server network interfaces

Lists the active network interfaces (VIF) of the server, on public and local networks; the deleted interfaces are not returned

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\ServerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 56; // int | ID of the server

try {
    $result = $apiInstance->listServerNetworkInterfaces($server_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServerApi->listServerNetworkInterfaces: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **server_id** | **int**| ID of the server | |

### Return type

[**\Shellrent\Sdk\Model\ServerNetworkInterfaceListResponse**](../Model/ServerNetworkInterfaceListResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listServerSnapshots()`

```php
listServerSnapshots($server_id, $page, $per_page): \Shellrent\Sdk\Model\ServerSnapshotPaginatedListResponse
```

List server snapshots

Get list of snapshots for server

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\ServerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 56; // int | ID of the server
$page = 1; // int | Page number, starting from 1. A page beyond the last one returns an empty `data` list (with the requested `page` in `meta`).
$per_page = 20; // int | Number of items per page. Values outside the allowed range are rejected with a validation error.

try {
    $result = $apiInstance->listServerSnapshots($server_id, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServerApi->listServerSnapshots: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **server_id** | **int**| ID of the server | |
| **page** | **int**| Page number, starting from 1. A page beyond the last one returns an empty &#x60;data&#x60; list (with the requested &#x60;page&#x60; in &#x60;meta&#x60;). | [optional] [default to 1] |
| **per_page** | **int**| Number of items per page. Values outside the allowed range are rejected with a validation error. | [optional] [default to 20] |

### Return type

[**\Shellrent\Sdk\Model\ServerSnapshotPaginatedListResponse**](../Model/ServerSnapshotPaginatedListResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listServers()`

```php
listServers($page, $per_page): \Shellrent\Sdk\Model\ServerPaginatedListResponse
```

List servers

Get list of servers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\ServerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | Page number, starting from 1. A page beyond the last one returns an empty `data` list (with the requested `page` in `meta`).
$per_page = 20; // int | Number of items per page. Values outside the allowed range are rejected with a validation error.

try {
    $result = $apiInstance->listServers($page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServerApi->listServers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| Page number, starting from 1. A page beyond the last one returns an empty &#x60;data&#x60; list (with the requested &#x60;page&#x60; in &#x60;meta&#x60;). | [optional] [default to 1] |
| **per_page** | **int**| Number of items per page. Values outside the allowed range are rejected with a validation error. | [optional] [default to 20] |

### Return type

[**\Shellrent\Sdk\Model\ServerPaginatedListResponse**](../Model/ServerPaginatedListResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reinstallServer()`

```php
reinstallServer($server_id, $server_reinstall_request): \Shellrent\Sdk\Model\TaskResponse
```

Reinstall server

Reinstalls the virtual machine with its current template and operating system: it deletes the virtual machine and its snapshots and creates it again, after a safety backup unless `safety_backup_enabled` is false. The operation goes on in the background as the returned Task. 409 for a physical server, while the server is not ready, its service is not active or is under maintenance, or another operation does not allow it

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\ServerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 56; // int | ID of the server
$server_reinstall_request = new \Shellrent\Sdk\Model\ServerReinstallRequest(); // \Shellrent\Sdk\Model\ServerReinstallRequest

try {
    $result = $apiInstance->reinstallServer($server_id, $server_reinstall_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServerApi->reinstallServer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **server_id** | **int**| ID of the server | |
| **server_reinstall_request** | [**\Shellrent\Sdk\Model\ServerReinstallRequest**](../Model/ServerReinstallRequest.md)|  | [optional] |

### Return type

[**\Shellrent\Sdk\Model\TaskResponse**](../Model/TaskResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restoreServerBackup()`

```php
restoreServerBackup($server_id, $server_backup_id): \Shellrent\Sdk\Model\TaskResponse
```

Restore server backup

Restore a server backup

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\ServerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 56; // int | ID of the server
$server_backup_id = 56; // int | ID of the server backup

try {
    $result = $apiInstance->restoreServerBackup($server_id, $server_backup_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServerApi->restoreServerBackup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **server_id** | **int**| ID of the server | |
| **server_backup_id** | **int**| ID of the server backup | |

### Return type

[**\Shellrent\Sdk\Model\TaskResponse**](../Model/TaskResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restoreServerSnapshot()`

```php
restoreServerSnapshot($server_id, $snapshot_id): \Shellrent\Sdk\Model\TaskResponse
```

Restore server snapshot

Restore a server snapshot

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\ServerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 56; // int | ID of the server
$snapshot_id = 56; // int | ID of the snapshot

try {
    $result = $apiInstance->restoreServerSnapshot($server_id, $snapshot_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServerApi->restoreServerSnapshot: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **server_id** | **int**| ID of the server | |
| **snapshot_id** | **int**| ID of the snapshot | |

### Return type

[**\Shellrent\Sdk\Model\TaskResponse**](../Model/TaskResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updatePrivateCloudVirtualMachine()`

```php
updatePrivateCloudVirtualMachine($server_id, $vm_id, $private_cloud_vm_update_request): \Shellrent\Sdk\Model\EmptyResponse
```

Update private cloud VM

Updates the note and the resources of a private cloud VM. The change of cpu, ram or disk starts an asynchronous operation, returned as a Task; when none of them differs from the current value no operation starts and `data` is null.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\ServerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 56; // int | ID of the server
$vm_id = 56; // int | ID of the virtual machine
$private_cloud_vm_update_request = new \Shellrent\Sdk\Model\PrivateCloudVmUpdateRequest(); // \Shellrent\Sdk\Model\PrivateCloudVmUpdateRequest

try {
    $result = $apiInstance->updatePrivateCloudVirtualMachine($server_id, $vm_id, $private_cloud_vm_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServerApi->updatePrivateCloudVirtualMachine: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **server_id** | **int**| ID of the server | |
| **vm_id** | **int**| ID of the virtual machine | |
| **private_cloud_vm_update_request** | [**\Shellrent\Sdk\Model\PrivateCloudVmUpdateRequest**](../Model/PrivateCloudVmUpdateRequest.md)|  | |

### Return type

[**\Shellrent\Sdk\Model\EmptyResponse**](../Model/EmptyResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateServerAutomaticSnapshot()`

```php
updateServerAutomaticSnapshot($server_id, $server_automatic_snapshot_request): \Shellrent\Sdk\Model\ServerAutomaticSnapshotResponse
```

Update automatic snapshot settings

Replaces the configuration of the automatic snapshot of the server (404 if none is configured). Automatic snapshots must be included in the service plan, otherwise the response is 403.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\ServerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 56; // int | ID of the server
$server_automatic_snapshot_request = new \Shellrent\Sdk\Model\ServerAutomaticSnapshotRequest(); // \Shellrent\Sdk\Model\ServerAutomaticSnapshotRequest

try {
    $result = $apiInstance->updateServerAutomaticSnapshot($server_id, $server_automatic_snapshot_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServerApi->updateServerAutomaticSnapshot: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **server_id** | **int**| ID of the server | |
| **server_automatic_snapshot_request** | [**\Shellrent\Sdk\Model\ServerAutomaticSnapshotRequest**](../Model/ServerAutomaticSnapshotRequest.md)|  | |

### Return type

[**\Shellrent\Sdk\Model\ServerAutomaticSnapshotResponse**](../Model/ServerAutomaticSnapshotResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateServerIpAddressReverseDns()`

```php
updateServerIpAddressReverseDns($server_id, $ip_address_id, $server_ip_address_reverse_update_request): \Shellrent\Sdk\Model\IpAddressResponse
```

Update IP reverse DNS

Update reverse DNS for an IP address

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\ServerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 56; // int | ID of the server
$ip_address_id = 56; // int | ID of the IP address of the server
$server_ip_address_reverse_update_request = new \Shellrent\Sdk\Model\ServerIpAddressReverseUpdateRequest(); // \Shellrent\Sdk\Model\ServerIpAddressReverseUpdateRequest

try {
    $result = $apiInstance->updateServerIpAddressReverseDns($server_id, $ip_address_id, $server_ip_address_reverse_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServerApi->updateServerIpAddressReverseDns: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **server_id** | **int**| ID of the server | |
| **ip_address_id** | **int**| ID of the IP address of the server | |
| **server_ip_address_reverse_update_request** | [**\Shellrent\Sdk\Model\ServerIpAddressReverseUpdateRequest**](../Model/ServerIpAddressReverseUpdateRequest.md)|  | |

### Return type

[**\Shellrent\Sdk\Model\IpAddressResponse**](../Model/IpAddressResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
