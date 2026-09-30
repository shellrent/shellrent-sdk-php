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
| [**createPrivateCloudVirtualMachine()**](ServerApi.md#createPrivateCloudVirtualMachine) | **POST** /api/v3/servers/{server_id}/private_cloud/virtual-machines | Create private cloud VM |
| [**createServerAutomaticSnapshot()**](ServerApi.md#createServerAutomaticSnapshot) | **POST** /api/v3/servers/{server_id}/snapshots/automatic-snapshot | Create automatic snapshot settings |
| [**createServerNetworkInterface()**](ServerApi.md#createServerNetworkInterface) | **POST** /api/v3/servers/{server_id}/network-interfaces | Create server network interface |
| [**deletePrivateCloudVirtualMachine()**](ServerApi.md#deletePrivateCloudVirtualMachine) | **DELETE** /api/v3/servers/{server_id}/private_cloud/virtual-machines/{vm_id} | Delete private cloud VM |
| [**deleteServerAutomaticSnapshot()**](ServerApi.md#deleteServerAutomaticSnapshot) | **DELETE** /api/v3/servers/{server_id}/snapshots/automatic-snapshot | Delete automatic snapshot settings |
| [**deleteServerExposedBackups()**](ServerApi.md#deleteServerExposedBackups) | **DELETE** /api/v3/servers/{server_id}/backups/exhibitions | Delete exposed backups |
| [**deleteServerIpAddressReverseDns()**](ServerApi.md#deleteServerIpAddressReverseDns) | **DELETE** /api/v3/servers/{server_id}/ip_addresses/{ip_address_id}/rdns | Delete IP reverse DNS |
| [**deleteServerNetworkInterface()**](ServerApi.md#deleteServerNetworkInterface) | **DELETE** /api/v3/servers/{server_id}/network-interfaces/{network_interface_id} | Delete server network interface |
| [**deleteServerSnapshot()**](ServerApi.md#deleteServerSnapshot) | **DELETE** /api/v3/servers/{server_id}/snapshots/{snapshot_id} | Delete server snapshot |
| [**exposeServerBackup()**](ServerApi.md#exposeServerBackup) | **POST** /api/v3/servers/{server_id}/backups/exhibit | Expose a server backup |
| [**getServer()**](ServerApi.md#getServer) | **GET** /api/v3/servers/{server_id} | Get server |
| [**getServerAutomaticSnapshot()**](ServerApi.md#getServerAutomaticSnapshot) | **GET** /api/v3/servers/{server_id}/snapshots/automatic-snapshot | Get automatic snapshot settings |
| [**getServerBackup()**](ServerApi.md#getServerBackup) | **GET** /api/v3/servers/{server_id}/backups/{server_backup_id} | Get server backup |
| [**getServerIpAddress()**](ServerApi.md#getServerIpAddress) | **GET** /api/v3/servers/{server_id}/ip_addresses/{ip_address_id} | Get server IP address |
| [**getServerNetworkInterface()**](ServerApi.md#getServerNetworkInterface) | **GET** /api/v3/servers/{server_id}/network-interfaces/{network_interface_id} | Get server network interface |
| [**getServerPrivateCloud()**](ServerApi.md#getServerPrivateCloud) | **GET** /api/v3/servers/{server_id}/private_cloud | Get private cloud info |
| [**getServerSnapshot()**](ServerApi.md#getServerSnapshot) | **GET** /api/v3/servers/{server_id}/snapshots/{snapshot_id} | Get server snapshot |
| [**hardRebootServer()**](ServerApi.md#hardRebootServer) | **POST** /api/v3/servers/{server_id}/hard-reboot | Hard reboot server |
| [**hardStopServer()**](ServerApi.md#hardStopServer) | **POST** /api/v3/servers/{server_id}/hard-stop | Hard stop server |
| [**listServerBackups()**](ServerApi.md#listServerBackups) | **GET** /api/v3/servers/{server_id}/backups | List server backups |
| [**listServerCredentials()**](ServerApi.md#listServerCredentials) | **GET** /api/v3/servers/{server_id}/credentials | List server credentials |
| [**listServerExposedBackups()**](ServerApi.md#listServerExposedBackups) | **GET** /api/v3/servers/{server_id}/backups/exhibitions | List exposed server backups |
| [**listServerIpAddresses()**](ServerApi.md#listServerIpAddresses) | **GET** /api/v3/servers/{server_id}/ip_addresses | List server IP addresses |
| [**listServerNetworkInterfaces()**](ServerApi.md#listServerNetworkInterfaces) | **GET** /api/v3/servers/{server_id}/network-interfaces | List server network interfaces |
| [**listServerSnapshots()**](ServerApi.md#listServerSnapshots) | **GET** /api/v3/servers/{server_id}/snapshots | List server snapshots |
| [**listServers()**](ServerApi.md#listServers) | **GET** /api/v3/servers | List servers |
| [**rebootServer()**](ServerApi.md#rebootServer) | **POST** /api/v3/servers/{server_id}/reboot | Reboot server |
| [**reinstallServer()**](ServerApi.md#reinstallServer) | **POST** /api/v3/servers/{server_id}/reinstall | Reinstall server |
| [**restoreServerBackup()**](ServerApi.md#restoreServerBackup) | **POST** /api/v3/servers/{server_id}/backups/{server_backup_id}/restore | Restore server backup |
| [**restoreServerSnapshot()**](ServerApi.md#restoreServerSnapshot) | **POST** /api/v3/servers/{server_id}/snapshots/{snapshot_id}/restore | Restore server snapshot |
| [**startServer()**](ServerApi.md#startServer) | **POST** /api/v3/servers/{server_id}/start | Start server |
| [**startServerFirstBackup()**](ServerApi.md#startServerFirstBackup) | **POST** /api/v3/servers/{server_id}/backups/first-save | Start first backup save |
| [**stopServer()**](ServerApi.md#stopServer) | **POST** /api/v3/servers/{server_id}/stop | Stop server |
| [**updatePrivateCloudVirtualMachine()**](ServerApi.md#updatePrivateCloudVirtualMachine) | **PATCH** /api/v3/servers/{server_id}/private_cloud/virtual-machines/{vm_id} | Update private cloud VM |
| [**updateServerAutomaticSnapshot()**](ServerApi.md#updateServerAutomaticSnapshot) | **PATCH** /api/v3/servers/{server_id}/snapshots/automatic-snapshot | Update automatic snapshot settings |
| [**updateServerIpAddressReverseDns()**](ServerApi.md#updateServerIpAddressReverseDns) | **PATCH** /api/v3/servers/{server_id}/ip_addresses/{ip_address_id}/rdns | Update IP reverse DNS |


## `canHardRebootServer()`

```php
canHardRebootServer($server_id): \Shellrent\Sdk\Model\ServerCanActionResponse
```

Check if server can hard reboot

Check if server can hard reboot

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
$server_id = 56; // int

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
| **server_id** | **int**|  | |

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

Check if server can hard stop

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
$server_id = 56; // int

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
| **server_id** | **int**|  | |

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

Check if server can reboot

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
$server_id = 56; // int

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
| **server_id** | **int**|  | |

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

Check if server can start

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
$server_id = 56; // int

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
| **server_id** | **int**|  | |

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

Check if server can stop

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
$server_id = 56; // int

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
| **server_id** | **int**|  | |

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

Create private cloud VM

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
$server_id = 56; // int
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
| **server_id** | **int**|  | |
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

Create automatic snapshot settings

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
$server_id = 56; // int
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
| **server_id** | **int**|  | |
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
createServerNetworkInterface($server_id, $server_network_interface_create_request): \Shellrent\Sdk\Model\ServerNetworkInterfaceResponse
```

Create server network interface

Create server network interface

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
$server_id = 56; // int
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
| **server_id** | **int**|  | |
| **server_network_interface_create_request** | [**\Shellrent\Sdk\Model\ServerNetworkInterfaceCreateRequest**](../Model/ServerNetworkInterfaceCreateRequest.md)|  | |

### Return type

[**\Shellrent\Sdk\Model\ServerNetworkInterfaceResponse**](../Model/ServerNetworkInterfaceResponse.md)

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

Delete private cloud VM

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
$server_id = 56; // int
$vm_id = 56; // int

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
| **server_id** | **int**|  | |
| **vm_id** | **int**|  | |

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
deleteServerAutomaticSnapshot($server_id): \Shellrent\Sdk\Model\EmptyResponse
```

Delete automatic snapshot settings

Delete automatic snapshot settings

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
$server_id = 56; // int

try {
    $result = $apiInstance->deleteServerAutomaticSnapshot($server_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServerApi->deleteServerAutomaticSnapshot: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **server_id** | **int**|  | |

### Return type

[**\Shellrent\Sdk\Model\EmptyResponse**](../Model/EmptyResponse.md)

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

Delete exposed backups

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
$server_id = 56; // int

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
| **server_id** | **int**|  | |

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
$server_id = 56; // int
$ip_address_id = 56; // int

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
| **server_id** | **int**|  | |
| **ip_address_id** | **int**|  | |

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
deleteServerNetworkInterface($server_id, $network_interface_id): \Shellrent\Sdk\Model\EmptyResponse
```

Delete server network interface

Delete server network interface

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
$server_id = 56; // int
$network_interface_id = 56; // int

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
| **server_id** | **int**|  | |
| **network_interface_id** | **int**|  | |

### Return type

[**\Shellrent\Sdk\Model\EmptyResponse**](../Model/EmptyResponse.md)

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
$server_id = 56; // int
$snapshot_id = 56; // int

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
| **server_id** | **int**|  | |
| **snapshot_id** | **int**|  | |

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

Expose a server backup

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
$server_id = 56; // int
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
| **server_id** | **int**|  | |
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
$server_id = 56; // int

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
| **server_id** | **int**|  | |

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

Get automatic snapshot settings

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
$server_id = 56; // int

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
| **server_id** | **int**|  | |

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
$server_id = 56; // int
$server_backup_id = 56; // int

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
| **server_id** | **int**|  | |
| **server_backup_id** | **int**|  | |

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
$server_id = 56; // int
$ip_address_id = 56; // int

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
| **server_id** | **int**|  | |
| **ip_address_id** | **int**|  | |

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

Get server network interface

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
$server_id = 56; // int
$network_interface_id = 56; // int

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
| **server_id** | **int**|  | |
| **network_interface_id** | **int**|  | |

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
$server_id = 56; // int

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
| **server_id** | **int**|  | |

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
$server_id = 56; // int
$snapshot_id = 56; // int

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
| **server_id** | **int**|  | |
| **snapshot_id** | **int**|  | |

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

## `hardRebootServer()`

```php
hardRebootServer($server_id): \Shellrent\Sdk\Model\TaskResponse
```

Hard reboot server

Hard reboot a server

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
$server_id = 56; // int

try {
    $result = $apiInstance->hardRebootServer($server_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServerApi->hardRebootServer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **server_id** | **int**|  | |

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

## `hardStopServer()`

```php
hardStopServer($server_id): \Shellrent\Sdk\Model\TaskResponse
```

Hard stop server

Hard stop a server

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
$server_id = 56; // int

try {
    $result = $apiInstance->hardStopServer($server_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServerApi->hardStopServer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **server_id** | **int**|  | |

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
$server_id = 56; // int

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
| **server_id** | **int**|  | |

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
$server_id = 56; // int

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
| **server_id** | **int**|  | |

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

List exposed server backups

List server backups

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
$server_id = 56; // int

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
| **server_id** | **int**|  | |

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
$server_id = 56; // int

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
| **server_id** | **int**|  | |

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

List server network interfaces

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
$server_id = 56; // int

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
| **server_id** | **int**|  | |

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
$server_id = 56; // int
$page = 1; // int
$per_page = 20; // int

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
| **server_id** | **int**|  | |
| **page** | **int**|  | [optional] [default to 1] |
| **per_page** | **int**|  | [optional] [default to 20] |

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
$page = 1; // int
$per_page = 20; // int

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
| **page** | **int**|  | [optional] [default to 1] |
| **per_page** | **int**|  | [optional] [default to 20] |

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

## `rebootServer()`

```php
rebootServer($server_id): \Shellrent\Sdk\Model\TaskResponse
```

Reboot server

Reboot a server

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
$server_id = 56; // int

try {
    $result = $apiInstance->rebootServer($server_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServerApi->rebootServer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **server_id** | **int**|  | |

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

## `reinstallServer()`

```php
reinstallServer($server_id, $server_reinstall_request): \Shellrent\Sdk\Model\TaskResponse
```

Reinstall server

Reinstall server

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
$server_id = 56; // int
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
| **server_id** | **int**|  | |
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
$server_id = 56; // int
$server_backup_id = 56; // int

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
| **server_id** | **int**|  | |
| **server_backup_id** | **int**|  | |

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
$server_id = 56; // int
$snapshot_id = 56; // int

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
| **server_id** | **int**|  | |
| **snapshot_id** | **int**|  | |

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

## `startServer()`

```php
startServer($server_id): \Shellrent\Sdk\Model\TaskResponse
```

Start server

Start a server

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
$server_id = 56; // int

try {
    $result = $apiInstance->startServer($server_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServerApi->startServer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **server_id** | **int**|  | |

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

## `startServerFirstBackup()`

```php
startServerFirstBackup($server_id): \Shellrent\Sdk\Model\TaskResponse
```

Start first backup save

Start first backup save

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
$server_id = 56; // int

try {
    $result = $apiInstance->startServerFirstBackup($server_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServerApi->startServerFirstBackup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **server_id** | **int**|  | |

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

## `stopServer()`

```php
stopServer($server_id): \Shellrent\Sdk\Model\TaskResponse
```

Stop server

Stop a server

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
$server_id = 56; // int

try {
    $result = $apiInstance->stopServer($server_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServerApi->stopServer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **server_id** | **int**|  | |

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
updatePrivateCloudVirtualMachine($server_id, $vm_id, $private_cloud_vm_update_request): \Shellrent\Sdk\Model\TaskResponse
```

Update private cloud VM

Update private cloud VM

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
$server_id = 56; // int
$vm_id = 56; // int
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
| **server_id** | **int**|  | |
| **vm_id** | **int**|  | |
| **private_cloud_vm_update_request** | [**\Shellrent\Sdk\Model\PrivateCloudVmUpdateRequest**](../Model/PrivateCloudVmUpdateRequest.md)|  | |

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

## `updateServerAutomaticSnapshot()`

```php
updateServerAutomaticSnapshot($server_id, $server_automatic_snapshot_request): \Shellrent\Sdk\Model\ServerAutomaticSnapshotResponse
```

Update automatic snapshot settings

Update automatic snapshot settings

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
$server_id = 56; // int
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
| **server_id** | **int**|  | |
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
$server_id = 56; // int
$ip_address_id = 56; // int
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
| **server_id** | **int**|  | |
| **ip_address_id** | **int**|  | |
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
