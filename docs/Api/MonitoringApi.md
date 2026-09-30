# Shellrent\Sdk\MonitoringApi

Monitoring

All URIs are relative to https://api.shellrent.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createServerMonitoringProbe()**](MonitoringApi.md#createServerMonitoringProbe) | **POST** /api/v3/server-monitorings/{server_monitoring_id}/probes | Create server monitoring probe |
| [**deleteServerMonitoringProbe()**](MonitoringApi.md#deleteServerMonitoringProbe) | **DELETE** /api/v3/server-monitorings/{server_monitoring_id}/probes/{probe_id} | Delete server monitoring probe |
| [**getServerMonitoring()**](MonitoringApi.md#getServerMonitoring) | **GET** /api/v3/server-monitorings/{server_monitoring_id} | Get server monitoring |
| [**getServerMonitoringProbe()**](MonitoringApi.md#getServerMonitoringProbe) | **GET** /api/v3/server-monitorings/{server_monitoring_id}/probes/{probe_id} | Get server monitoring probe |
| [**getServerMonitoringProbeChart()**](MonitoringApi.md#getServerMonitoringProbeChart) | **GET** /api/v3/server-monitorings/{server_monitoring_id}/probes/{probe_id}/chart | Get server monitoring probe chart |
| [**getWebMonitoring()**](MonitoringApi.md#getWebMonitoring) | **GET** /api/v3/web-monitorings/{web_monitoring_id} | Get web monitoring |
| [**getWebMonitoringAvailabilityChart()**](MonitoringApi.md#getWebMonitoringAvailabilityChart) | **GET** /api/v3/web-monitorings/{web_monitoring_id}/charts/availability | Get web monitoring availability chart |
| [**getWebMonitoringDownloadSpeedChart()**](MonitoringApi.md#getWebMonitoringDownloadSpeedChart) | **GET** /api/v3/web-monitorings/{web_monitoring_id}/charts/download-speed | Get web monitoring download speed chart |
| [**getWebMonitoringNotices()**](MonitoringApi.md#getWebMonitoringNotices) | **GET** /api/v3/web-monitorings/{web_monitoring_id}/notices | Get web monitoring notices |
| [**getWebMonitoringResponseTimeChart()**](MonitoringApi.md#getWebMonitoringResponseTimeChart) | **GET** /api/v3/web-monitorings/{web_monitoring_id}/charts/response-time | Get web monitoring response time chart |
| [**listServerMonitoringProbes()**](MonitoringApi.md#listServerMonitoringProbes) | **GET** /api/v3/server-monitorings/{server_monitoring_id}/probes | List server monitoring probes |
| [**listServerMonitorings()**](MonitoringApi.md#listServerMonitorings) | **GET** /api/v3/server-monitorings | List server monitorings |
| [**listWebMonitorings()**](MonitoringApi.md#listWebMonitorings) | **GET** /api/v3/web-monitorings | List web monitorings |
| [**updateServerMonitoringProbe()**](MonitoringApi.md#updateServerMonitoringProbe) | **PATCH** /api/v3/server-monitorings/{server_monitoring_id}/probes/{probe_id} | Update server monitoring probe |
| [**updateWebMonitoringNotices()**](MonitoringApi.md#updateWebMonitoringNotices) | **PUT** /api/v3/web-monitorings/{web_monitoring_id}/notices | Update web monitoring notices |


## `createServerMonitoringProbe()`

```php
createServerMonitoringProbe($server_monitoring_id, $server_monitoring_probe_create_request): \Shellrent\Sdk\Model\ServerMonitoringProbeResponse
```

Create server monitoring probe

Create a probe associated with a server monitoring

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\MonitoringApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_monitoring_id = 56; // int
$server_monitoring_probe_create_request = new \Shellrent\Sdk\Model\ServerMonitoringProbeCreateRequest(); // \Shellrent\Sdk\Model\ServerMonitoringProbeCreateRequest

try {
    $result = $apiInstance->createServerMonitoringProbe($server_monitoring_id, $server_monitoring_probe_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MonitoringApi->createServerMonitoringProbe: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **server_monitoring_id** | **int**|  | |
| **server_monitoring_probe_create_request** | [**\Shellrent\Sdk\Model\ServerMonitoringProbeCreateRequest**](../Model/ServerMonitoringProbeCreateRequest.md)|  | |

### Return type

[**\Shellrent\Sdk\Model\ServerMonitoringProbeResponse**](../Model/ServerMonitoringProbeResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteServerMonitoringProbe()`

```php
deleteServerMonitoringProbe($server_monitoring_id, $probe_id): \Shellrent\Sdk\Model\EmptyResponse
```

Delete server monitoring probe

Delete a probe associated with a server monitoring

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\MonitoringApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_monitoring_id = 56; // int
$probe_id = 56; // int

try {
    $result = $apiInstance->deleteServerMonitoringProbe($server_monitoring_id, $probe_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MonitoringApi->deleteServerMonitoringProbe: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **server_monitoring_id** | **int**|  | |
| **probe_id** | **int**|  | |

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

## `getServerMonitoring()`

```php
getServerMonitoring($server_monitoring_id): \Shellrent\Sdk\Model\ServerMonitoringResponse
```

Get server monitoring

Get details of a server monitoring for the authenticated account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\MonitoringApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_monitoring_id = 56; // int

try {
    $result = $apiInstance->getServerMonitoring($server_monitoring_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MonitoringApi->getServerMonitoring: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **server_monitoring_id** | **int**|  | |

### Return type

[**\Shellrent\Sdk\Model\ServerMonitoringResponse**](../Model/ServerMonitoringResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getServerMonitoringProbe()`

```php
getServerMonitoringProbe($server_monitoring_id, $probe_id): \Shellrent\Sdk\Model\ServerMonitoringProbeResponse
```

Get server monitoring probe

Get details of a probe associated with a server monitoring

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\MonitoringApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_monitoring_id = 56; // int
$probe_id = 56; // int

try {
    $result = $apiInstance->getServerMonitoringProbe($server_monitoring_id, $probe_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MonitoringApi->getServerMonitoringProbe: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **server_monitoring_id** | **int**|  | |
| **probe_id** | **int**|  | |

### Return type

[**\Shellrent\Sdk\Model\ServerMonitoringProbeResponse**](../Model/ServerMonitoringProbeResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getServerMonitoringProbeChart()`

```php
getServerMonitoringProbeChart($server_monitoring_id, $probe_id): \Shellrent\Sdk\Model\ServerMonitoringProbeChartResponse
```

Get server monitoring probe chart

Get chart data points for a probe associated with a server monitoring

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\MonitoringApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_monitoring_id = 56; // int
$probe_id = 56; // int

try {
    $result = $apiInstance->getServerMonitoringProbeChart($server_monitoring_id, $probe_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MonitoringApi->getServerMonitoringProbeChart: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **server_monitoring_id** | **int**|  | |
| **probe_id** | **int**|  | |

### Return type

[**\Shellrent\Sdk\Model\ServerMonitoringProbeChartResponse**](../Model/ServerMonitoringProbeChartResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWebMonitoring()`

```php
getWebMonitoring($web_monitoring_id): \Shellrent\Sdk\Model\WebMonitoringResponse
```

Get web monitoring

Get details of a web monitoring for the authenticated account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\MonitoringApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$web_monitoring_id = 56; // int

try {
    $result = $apiInstance->getWebMonitoring($web_monitoring_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MonitoringApi->getWebMonitoring: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **web_monitoring_id** | **int**|  | |

### Return type

[**\Shellrent\Sdk\Model\WebMonitoringResponse**](../Model/WebMonitoringResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWebMonitoringAvailabilityChart()`

```php
getWebMonitoringAvailabilityChart($web_monitoring_id): \Shellrent\Sdk\Model\WebMonitoringAvailabilityChartResponse
```

Get web monitoring availability chart

Get availability chart points for a web monitoring service

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\MonitoringApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$web_monitoring_id = 56; // int

try {
    $result = $apiInstance->getWebMonitoringAvailabilityChart($web_monitoring_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MonitoringApi->getWebMonitoringAvailabilityChart: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **web_monitoring_id** | **int**|  | |

### Return type

[**\Shellrent\Sdk\Model\WebMonitoringAvailabilityChartResponse**](../Model/WebMonitoringAvailabilityChartResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWebMonitoringDownloadSpeedChart()`

```php
getWebMonitoringDownloadSpeedChart($web_monitoring_id): \Shellrent\Sdk\Model\WebMonitoringDownloadSpeedChartResponse
```

Get web monitoring download speed chart

Get download speed chart points for a web monitoring service

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\MonitoringApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$web_monitoring_id = 56; // int

try {
    $result = $apiInstance->getWebMonitoringDownloadSpeedChart($web_monitoring_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MonitoringApi->getWebMonitoringDownloadSpeedChart: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **web_monitoring_id** | **int**|  | |

### Return type

[**\Shellrent\Sdk\Model\WebMonitoringDownloadSpeedChartResponse**](../Model/WebMonitoringDownloadSpeedChartResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWebMonitoringNotices()`

```php
getWebMonitoringNotices($web_monitoring_id): \Shellrent\Sdk\Model\WebMonitoringNoticesResponse
```

Get web monitoring notices

Get notification notices configuration for a web monitoring

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\MonitoringApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$web_monitoring_id = 56; // int

try {
    $result = $apiInstance->getWebMonitoringNotices($web_monitoring_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MonitoringApi->getWebMonitoringNotices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **web_monitoring_id** | **int**|  | |

### Return type

[**\Shellrent\Sdk\Model\WebMonitoringNoticesResponse**](../Model/WebMonitoringNoticesResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWebMonitoringResponseTimeChart()`

```php
getWebMonitoringResponseTimeChart($web_monitoring_id): \Shellrent\Sdk\Model\WebMonitoringResponseTimeChartResponse
```

Get web monitoring response time chart

Get response time chart points for a web monitoring service

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\MonitoringApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$web_monitoring_id = 56; // int

try {
    $result = $apiInstance->getWebMonitoringResponseTimeChart($web_monitoring_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MonitoringApi->getWebMonitoringResponseTimeChart: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **web_monitoring_id** | **int**|  | |

### Return type

[**\Shellrent\Sdk\Model\WebMonitoringResponseTimeChartResponse**](../Model/WebMonitoringResponseTimeChartResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listServerMonitoringProbes()`

```php
listServerMonitoringProbes($server_monitoring_id): \Shellrent\Sdk\Model\ServerMonitoringProbeListResponse
```

List server monitoring probes

Get the probes associated with a server monitoring

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\MonitoringApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_monitoring_id = 56; // int

try {
    $result = $apiInstance->listServerMonitoringProbes($server_monitoring_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MonitoringApi->listServerMonitoringProbes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **server_monitoring_id** | **int**|  | |

### Return type

[**\Shellrent\Sdk\Model\ServerMonitoringProbeListResponse**](../Model/ServerMonitoringProbeListResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listServerMonitorings()`

```php
listServerMonitorings($page, $per_page): \Shellrent\Sdk\Model\ServerMonitoringPaginatedListResponse
```

List server monitorings

Get a paginated list of server monitorings for the authenticated account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\MonitoringApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int
$per_page = 20; // int

try {
    $result = $apiInstance->listServerMonitorings($page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MonitoringApi->listServerMonitorings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**|  | [optional] [default to 1] |
| **per_page** | **int**|  | [optional] [default to 20] |

### Return type

[**\Shellrent\Sdk\Model\ServerMonitoringPaginatedListResponse**](../Model/ServerMonitoringPaginatedListResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listWebMonitorings()`

```php
listWebMonitorings($page, $per_page): \Shellrent\Sdk\Model\WebMonitoringPaginatedListResponse
```

List web monitorings

Get a paginated list of web monitorings for the authenticated account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\MonitoringApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int
$per_page = 20; // int

try {
    $result = $apiInstance->listWebMonitorings($page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MonitoringApi->listWebMonitorings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**|  | [optional] [default to 1] |
| **per_page** | **int**|  | [optional] [default to 20] |

### Return type

[**\Shellrent\Sdk\Model\WebMonitoringPaginatedListResponse**](../Model/WebMonitoringPaginatedListResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateServerMonitoringProbe()`

```php
updateServerMonitoringProbe($server_monitoring_id, $probe_id, $server_monitoring_probe_update_request): \Shellrent\Sdk\Model\ServerMonitoringProbeResponse
```

Update server monitoring probe

Update a probe associated with a server monitoring

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\MonitoringApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_monitoring_id = 56; // int
$probe_id = 56; // int
$server_monitoring_probe_update_request = new \Shellrent\Sdk\Model\ServerMonitoringProbeUpdateRequest(); // \Shellrent\Sdk\Model\ServerMonitoringProbeUpdateRequest

try {
    $result = $apiInstance->updateServerMonitoringProbe($server_monitoring_id, $probe_id, $server_monitoring_probe_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MonitoringApi->updateServerMonitoringProbe: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **server_monitoring_id** | **int**|  | |
| **probe_id** | **int**|  | |
| **server_monitoring_probe_update_request** | [**\Shellrent\Sdk\Model\ServerMonitoringProbeUpdateRequest**](../Model/ServerMonitoringProbeUpdateRequest.md)|  | |

### Return type

[**\Shellrent\Sdk\Model\ServerMonitoringProbeResponse**](../Model/ServerMonitoringProbeResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateWebMonitoringNotices()`

```php
updateWebMonitoringNotices($web_monitoring_id, $web_monitoring_notices_update_request): \Shellrent\Sdk\Model\WebMonitoringNoticesResponse
```

Update web monitoring notices

Update notification notices configuration for a web monitoring

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\MonitoringApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$web_monitoring_id = 56; // int
$web_monitoring_notices_update_request = new \Shellrent\Sdk\Model\WebMonitoringNoticesUpdateRequest(); // \Shellrent\Sdk\Model\WebMonitoringNoticesUpdateRequest

try {
    $result = $apiInstance->updateWebMonitoringNotices($web_monitoring_id, $web_monitoring_notices_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MonitoringApi->updateWebMonitoringNotices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **web_monitoring_id** | **int**|  | |
| **web_monitoring_notices_update_request** | [**\Shellrent\Sdk\Model\WebMonitoringNoticesUpdateRequest**](../Model/WebMonitoringNoticesUpdateRequest.md)|  | |

### Return type

[**\Shellrent\Sdk\Model\WebMonitoringNoticesResponse**](../Model/WebMonitoringNoticesResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
