# Shellrent\Sdk\StorageApi

Storage

All URIs are relative to https://api.shellrent.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createCloudStorageAccess()**](StorageApi.md#createCloudStorageAccess) | **POST** /api/v3/cloud-storages/{cloud_storage_id}/accesses | Create cloud storage access |
| [**createObjectStorageBucketFirewallEntry()**](StorageApi.md#createObjectStorageBucketFirewallEntry) | **POST** /api/v3/object-storages/{object_storage_id}/buckets/{bucket_id}/firewall-entries | Create object storage bucket firewall entry |
| [**createObjectStorageIamUser()**](StorageApi.md#createObjectStorageIamUser) | **POST** /api/v3/object-storages/{object_storage_id}/iam-users | Create object storage IAM user |
| [**createObjectStorageIamUserS3Key()**](StorageApi.md#createObjectStorageIamUserS3Key) | **POST** /api/v3/object-storages/{object_storage_id}/iam-users/{iam_user_id}/s3-keys | Create object storage IAM user S3 key |
| [**deleteCloudStorageAccess()**](StorageApi.md#deleteCloudStorageAccess) | **DELETE** /api/v3/cloud-storages/{cloud_storage_id}/accesses/{access_id} | Delete cloud storage access |
| [**deleteCloudStorageUser()**](StorageApi.md#deleteCloudStorageUser) | **DELETE** /api/v3/cloud-storages/{cloud_storage_id}/users/{cloud_storage_user_id} | Delete cloud storage user |
| [**deleteObjectStorageBucketFirewallEntry()**](StorageApi.md#deleteObjectStorageBucketFirewallEntry) | **DELETE** /api/v3/object-storages/{object_storage_id}/buckets/{bucket_id}/firewall-entries/{entry_id} | Delete object storage bucket firewall entry |
| [**deleteObjectStorageIamUser()**](StorageApi.md#deleteObjectStorageIamUser) | **DELETE** /api/v3/object-storages/{object_storage_id}/iam-users/{iam_user_id} | Delete object storage IAM user |
| [**deleteObjectStorageIamUserS3Key()**](StorageApi.md#deleteObjectStorageIamUserS3Key) | **DELETE** /api/v3/object-storages/{object_storage_id}/iam-users/{iam_user_id}/s3-keys/{s3_key_id} | Delete object storage IAM user S3 key |
| [**downgradeCloudStorageSize()**](StorageApi.md#downgradeCloudStorageSize) | **POST** /api/v3/cloud-storages/{cloud_storage_id}/size-downgrades | Downgrade cloud storage size |
| [**getCloudStorage()**](StorageApi.md#getCloudStorage) | **GET** /api/v3/cloud-storages/{cloud_storage_id} | Get cloud storage |
| [**getCloudStorageAccess()**](StorageApi.md#getCloudStorageAccess) | **GET** /api/v3/cloud-storages/{cloud_storage_id}/accesses/{access_id} | Get cloud storage access |
| [**getCloudStorageUser()**](StorageApi.md#getCloudStorageUser) | **GET** /api/v3/cloud-storages/{cloud_storage_id}/users/{cloud_storage_user_id} | Get cloud storage user |
| [**getObjectStorage()**](StorageApi.md#getObjectStorage) | **GET** /api/v3/object-storages/{object_storage_id} | Get object storage |
| [**getObjectStorageBucket()**](StorageApi.md#getObjectStorageBucket) | **GET** /api/v3/object-storages/{object_storage_id}/buckets/{bucket_id} | Get object storage bucket |
| [**getObjectStorageBucketChart()**](StorageApi.md#getObjectStorageBucketChart) | **GET** /api/v3/object-storages/{object_storage_id}/buckets/{bucket_id}/chart | Get object storage bucket chart |
| [**getObjectStorageBucketFirewallEntry()**](StorageApi.md#getObjectStorageBucketFirewallEntry) | **GET** /api/v3/object-storages/{object_storage_id}/buckets/{bucket_id}/firewall-entries/{entry_id} | Get object storage bucket firewall entry |
| [**getObjectStorageIamUser()**](StorageApi.md#getObjectStorageIamUser) | **GET** /api/v3/object-storages/{object_storage_id}/iam-users/{iam_user_id} | Get object storage IAM user |
| [**getObjectStorageIamUserS3Key()**](StorageApi.md#getObjectStorageIamUserS3Key) | **GET** /api/v3/object-storages/{object_storage_id}/iam-users/{iam_user_id}/s3-keys/{s3_key_id} | Get object storage IAM user S3 key |
| [**getObjectStorageS3Key()**](StorageApi.md#getObjectStorageS3Key) | **GET** /api/v3/object-storages/{object_storage_id}/s3-key | Get object storage S3 key |
| [**listCloudStorageAccesses()**](StorageApi.md#listCloudStorageAccesses) | **GET** /api/v3/cloud-storages/{cloud_storage_id}/accesses | List cloud storage accesses |
| [**listCloudStorageUsers()**](StorageApi.md#listCloudStorageUsers) | **GET** /api/v3/cloud-storages/{cloud_storage_id}/users | List cloud storage users |
| [**listCloudStorages()**](StorageApi.md#listCloudStorages) | **GET** /api/v3/cloud-storages | List cloud storages |
| [**listObjectStorageBucketFirewallEntries()**](StorageApi.md#listObjectStorageBucketFirewallEntries) | **GET** /api/v3/object-storages/{object_storage_id}/buckets/{bucket_id}/firewall-entries | List object storage bucket firewall entries |
| [**listObjectStorageBuckets()**](StorageApi.md#listObjectStorageBuckets) | **GET** /api/v3/object-storages/{object_storage_id}/buckets | List object storage buckets |
| [**listObjectStorageIamUserS3Keys()**](StorageApi.md#listObjectStorageIamUserS3Keys) | **GET** /api/v3/object-storages/{object_storage_id}/iam-users/{iam_user_id}/s3-keys | List object storage IAM user S3 keys |
| [**listObjectStorageIamUsers()**](StorageApi.md#listObjectStorageIamUsers) | **GET** /api/v3/object-storages/{object_storage_id}/iam-users | List object storage IAM users |
| [**listObjectStorages()**](StorageApi.md#listObjectStorages) | **GET** /api/v3/object-storages | List object storages |
| [**updateCloudStorageUserSize()**](StorageApi.md#updateCloudStorageUserSize) | **PATCH** /api/v3/cloud-storages/{cloud_storage_id}/users/{cloud_storage_user_id} | Update cloud storage user size |
| [**upgradeCloudStorageSize()**](StorageApi.md#upgradeCloudStorageSize) | **POST** /api/v3/cloud-storages/{cloud_storage_id}/size-upgrades | Upgrade cloud storage size |


## `createCloudStorageAccess()`

```php
createCloudStorageAccess($cloud_storage_id, $cloud_storage_access_create_request): \Shellrent\Sdk\Model\CloudStorageAccessResponse
```

Create cloud storage access

Create a new cloud storage NFS access

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\StorageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_storage_id = 56; // int | ID of the cloud storage
$cloud_storage_access_create_request = new \Shellrent\Sdk\Model\CloudStorageAccessCreateRequest(); // \Shellrent\Sdk\Model\CloudStorageAccessCreateRequest

try {
    $result = $apiInstance->createCloudStorageAccess($cloud_storage_id, $cloud_storage_access_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorageApi->createCloudStorageAccess: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_storage_id** | **int**| ID of the cloud storage | |
| **cloud_storage_access_create_request** | [**\Shellrent\Sdk\Model\CloudStorageAccessCreateRequest**](../Model/CloudStorageAccessCreateRequest.md)|  | |

### Return type

[**\Shellrent\Sdk\Model\CloudStorageAccessResponse**](../Model/CloudStorageAccessResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createObjectStorageBucketFirewallEntry()`

```php
createObjectStorageBucketFirewallEntry($object_storage_id, $bucket_id, $object_storage_bucket_firewall_entry_create_request): \Shellrent\Sdk\Model\TaskResponse
```

Create object storage bucket firewall entry

Starts adding an IP address or a subnet (CIDR) to the firewall of the bucket, returned as a Task: the entry appears among the firewall entries when the operation is completed. Firewall operations on the buckets of an object storage run one at a time: while one is running, the request is rejected with 409.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\StorageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$object_storage_id = 56; // int | ID of the object storage
$bucket_id = 56; // int | ID of the bucket
$object_storage_bucket_firewall_entry_create_request = new \Shellrent\Sdk\Model\ObjectStorageBucketFirewallEntryCreateRequest(); // \Shellrent\Sdk\Model\ObjectStorageBucketFirewallEntryCreateRequest

try {
    $result = $apiInstance->createObjectStorageBucketFirewallEntry($object_storage_id, $bucket_id, $object_storage_bucket_firewall_entry_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorageApi->createObjectStorageBucketFirewallEntry: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **object_storage_id** | **int**| ID of the object storage | |
| **bucket_id** | **int**| ID of the bucket | |
| **object_storage_bucket_firewall_entry_create_request** | [**\Shellrent\Sdk\Model\ObjectStorageBucketFirewallEntryCreateRequest**](../Model/ObjectStorageBucketFirewallEntryCreateRequest.md)|  | |

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

## `createObjectStorageIamUser()`

```php
createObjectStorageIamUser($object_storage_id): \Shellrent\Sdk\Model\ObjectStorageIamUserResponse
```

Create object storage IAM user

Create a new object storage IAM user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\StorageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$object_storage_id = 56; // int | ID of the object storage

try {
    $result = $apiInstance->createObjectStorageIamUser($object_storage_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorageApi->createObjectStorageIamUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **object_storage_id** | **int**| ID of the object storage | |

### Return type

[**\Shellrent\Sdk\Model\ObjectStorageIamUserResponse**](../Model/ObjectStorageIamUserResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createObjectStorageIamUserS3Key()`

```php
createObjectStorageIamUserS3Key($object_storage_id, $iam_user_id): \Shellrent\Sdk\Model\ObjectStorageIamUserS3KeyResponse
```

Create object storage IAM user S3 key

Creates a new S3 key for the IAM user and returns it with its secret, which afterwards is returned only with the objectstorage:secrets scope. An IAM user has at most 2 keys: with 2 keys the request is rejected with 409, as when the object storage is not active or is under maintenance.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\StorageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$object_storage_id = 56; // int | ID of the object storage
$iam_user_id = 56; // int | ID of the IAM user

try {
    $result = $apiInstance->createObjectStorageIamUserS3Key($object_storage_id, $iam_user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorageApi->createObjectStorageIamUserS3Key: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **object_storage_id** | **int**| ID of the object storage | |
| **iam_user_id** | **int**| ID of the IAM user | |

### Return type

[**\Shellrent\Sdk\Model\ObjectStorageIamUserS3KeyResponse**](../Model/ObjectStorageIamUserS3KeyResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteCloudStorageAccess()`

```php
deleteCloudStorageAccess($cloud_storage_id, $access_id)
```

Delete cloud storage access

Delete a cloud storage NFS access

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\StorageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_storage_id = 56; // int | ID of the cloud storage
$access_id = 'access_id_example'; // string | Access of the cloud storage: the `access_id` field of the accesses list, that is the hostname allowed to mount the storage

try {
    $apiInstance->deleteCloudStorageAccess($cloud_storage_id, $access_id);
} catch (Exception $e) {
    echo 'Exception when calling StorageApi->deleteCloudStorageAccess: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_storage_id** | **int**| ID of the cloud storage | |
| **access_id** | **string**| Access of the cloud storage: the &#x60;access_id&#x60; field of the accesses list, that is the hostname allowed to mount the storage | |

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

## `deleteCloudStorageUser()`

```php
deleteCloudStorageUser($cloud_storage_id, $cloud_storage_user_id)
```

Delete cloud storage user

Suspend a cloud storage user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\StorageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_storage_id = 56; // int | ID of the cloud storage
$cloud_storage_user_id = 56; // int | ID of the cloud storage user

try {
    $apiInstance->deleteCloudStorageUser($cloud_storage_id, $cloud_storage_user_id);
} catch (Exception $e) {
    echo 'Exception when calling StorageApi->deleteCloudStorageUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_storage_id** | **int**| ID of the cloud storage | |
| **cloud_storage_user_id** | **int**| ID of the cloud storage user | |

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

## `deleteObjectStorageBucketFirewallEntry()`

```php
deleteObjectStorageBucketFirewallEntry($object_storage_id, $bucket_id, $entry_id): \Shellrent\Sdk\Model\TaskResponse
```

Delete object storage bucket firewall entry

Starts removing the entry from the firewall of the bucket, returned as a Task: the entry disappears when the operation is completed. Firewall operations on the buckets of an object storage run one at a time: while one is running, the request is rejected with 409.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\StorageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$object_storage_id = 56; // int | ID of the object storage
$bucket_id = 56; // int | ID of the bucket
$entry_id = 56; // int | ID of the firewall entry of the bucket

try {
    $result = $apiInstance->deleteObjectStorageBucketFirewallEntry($object_storage_id, $bucket_id, $entry_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorageApi->deleteObjectStorageBucketFirewallEntry: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **object_storage_id** | **int**| ID of the object storage | |
| **bucket_id** | **int**| ID of the bucket | |
| **entry_id** | **int**| ID of the firewall entry of the bucket | |

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

## `deleteObjectStorageIamUser()`

```php
deleteObjectStorageIamUser($object_storage_id, $iam_user_id)
```

Delete object storage IAM user

Delete an object storage IAM user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\StorageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$object_storage_id = 56; // int | ID of the object storage
$iam_user_id = 56; // int | ID of the IAM user

try {
    $apiInstance->deleteObjectStorageIamUser($object_storage_id, $iam_user_id);
} catch (Exception $e) {
    echo 'Exception when calling StorageApi->deleteObjectStorageIamUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **object_storage_id** | **int**| ID of the object storage | |
| **iam_user_id** | **int**| ID of the IAM user | |

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

## `deleteObjectStorageIamUserS3Key()`

```php
deleteObjectStorageIamUserS3Key($object_storage_id, $iam_user_id, $s3_key_id)
```

Delete object storage IAM user S3 key

Deletes the S3 key of the IAM user on the storage, so it can no longer be used. A key already deleted is not found (404); the request is rejected with 409 when the object storage is not active or is under maintenance.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\StorageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$object_storage_id = 56; // int | ID of the object storage
$iam_user_id = 56; // int | ID of the IAM user
$s3_key_id = 56; // int | ID of the S3 key

try {
    $apiInstance->deleteObjectStorageIamUserS3Key($object_storage_id, $iam_user_id, $s3_key_id);
} catch (Exception $e) {
    echo 'Exception when calling StorageApi->deleteObjectStorageIamUserS3Key: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **object_storage_id** | **int**| ID of the object storage | |
| **iam_user_id** | **int**| ID of the IAM user | |
| **s3_key_id** | **int**| ID of the S3 key | |

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

## `downgradeCloudStorageSize()`

```php
downgradeCloudStorageSize($cloud_storage_id): \Shellrent\Sdk\Model\TaskResponse
```

Downgrade cloud storage size

Downgrade the cloud storage size. Returns the background Task created for the downgrade.  Not available to sub-accounts: the response is 403 (error 1601).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\StorageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_storage_id = 56; // int | ID of the cloud storage

try {
    $result = $apiInstance->downgradeCloudStorageSize($cloud_storage_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorageApi->downgradeCloudStorageSize: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_storage_id** | **int**| ID of the cloud storage | |

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

## `getCloudStorage()`

```php
getCloudStorage($cloud_storage_id): \Shellrent\Sdk\Model\CloudStorageResponse
```

Get cloud storage

Get cloud storage details

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\StorageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_storage_id = 56; // int | ID of the cloud storage

try {
    $result = $apiInstance->getCloudStorage($cloud_storage_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorageApi->getCloudStorage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_storage_id** | **int**| ID of the cloud storage | |

### Return type

[**\Shellrent\Sdk\Model\CloudStorageResponse**](../Model/CloudStorageResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCloudStorageAccess()`

```php
getCloudStorageAccess($cloud_storage_id, $access_id): \Shellrent\Sdk\Model\CloudStorageAccessResponse
```

Get cloud storage access

Get details of a cloud storage NFS access

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\StorageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_storage_id = 56; // int | ID of the cloud storage
$access_id = 'access_id_example'; // string | Access of the cloud storage: the `access_id` field of the accesses list, that is the hostname allowed to mount the storage

try {
    $result = $apiInstance->getCloudStorageAccess($cloud_storage_id, $access_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorageApi->getCloudStorageAccess: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_storage_id** | **int**| ID of the cloud storage | |
| **access_id** | **string**| Access of the cloud storage: the &#x60;access_id&#x60; field of the accesses list, that is the hostname allowed to mount the storage | |

### Return type

[**\Shellrent\Sdk\Model\CloudStorageAccessResponse**](../Model/CloudStorageAccessResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCloudStorageUser()`

```php
getCloudStorageUser($cloud_storage_id, $cloud_storage_user_id): \Shellrent\Sdk\Model\CloudStorageUserResponse
```

Get cloud storage user

Get cloud storage user details

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\StorageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_storage_id = 56; // int | ID of the cloud storage
$cloud_storage_user_id = 56; // int | ID of the cloud storage user

try {
    $result = $apiInstance->getCloudStorageUser($cloud_storage_id, $cloud_storage_user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorageApi->getCloudStorageUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_storage_id** | **int**| ID of the cloud storage | |
| **cloud_storage_user_id** | **int**| ID of the cloud storage user | |

### Return type

[**\Shellrent\Sdk\Model\CloudStorageUserResponse**](../Model/CloudStorageUserResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getObjectStorage()`

```php
getObjectStorage($object_storage_id): \Shellrent\Sdk\Model\ObjectStorageResponse
```

Get object storage

Get object storage details

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\StorageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$object_storage_id = 56; // int | ID of the object storage

try {
    $result = $apiInstance->getObjectStorage($object_storage_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorageApi->getObjectStorage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **object_storage_id** | **int**| ID of the object storage | |

### Return type

[**\Shellrent\Sdk\Model\ObjectStorageResponse**](../Model/ObjectStorageResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getObjectStorageBucket()`

```php
getObjectStorageBucket($object_storage_id, $bucket_id): \Shellrent\Sdk\Model\ObjectStorageBucketResponse
```

Get object storage bucket

Get object storage bucket details

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\StorageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$object_storage_id = 56; // int | ID of the object storage
$bucket_id = 56; // int | ID of the bucket

try {
    $result = $apiInstance->getObjectStorageBucket($object_storage_id, $bucket_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorageApi->getObjectStorageBucket: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **object_storage_id** | **int**| ID of the object storage | |
| **bucket_id** | **int**| ID of the bucket | |

### Return type

[**\Shellrent\Sdk\Model\ObjectStorageBucketResponse**](../Model/ObjectStorageBucketResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getObjectStorageBucketChart()`

```php
getObjectStorageBucketChart($object_storage_id, $bucket_id): \Shellrent\Sdk\Model\ObjectStorageBucketChartResponse
```

Get object storage bucket chart

Get object storage bucket chart data

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\StorageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$object_storage_id = 56; // int | ID of the object storage
$bucket_id = 56; // int | ID of the bucket

try {
    $result = $apiInstance->getObjectStorageBucketChart($object_storage_id, $bucket_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorageApi->getObjectStorageBucketChart: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **object_storage_id** | **int**| ID of the object storage | |
| **bucket_id** | **int**| ID of the bucket | |

### Return type

[**\Shellrent\Sdk\Model\ObjectStorageBucketChartResponse**](../Model/ObjectStorageBucketChartResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getObjectStorageBucketFirewallEntry()`

```php
getObjectStorageBucketFirewallEntry($object_storage_id, $bucket_id, $entry_id): \Shellrent\Sdk\Model\ObjectStorageBucketFirewallEntryResponse
```

Get object storage bucket firewall entry

Get object storage bucket firewall entry details

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\StorageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$object_storage_id = 56; // int | ID of the object storage
$bucket_id = 56; // int | ID of the bucket
$entry_id = 56; // int | ID of the firewall entry of the bucket

try {
    $result = $apiInstance->getObjectStorageBucketFirewallEntry($object_storage_id, $bucket_id, $entry_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorageApi->getObjectStorageBucketFirewallEntry: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **object_storage_id** | **int**| ID of the object storage | |
| **bucket_id** | **int**| ID of the bucket | |
| **entry_id** | **int**| ID of the firewall entry of the bucket | |

### Return type

[**\Shellrent\Sdk\Model\ObjectStorageBucketFirewallEntryResponse**](../Model/ObjectStorageBucketFirewallEntryResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getObjectStorageIamUser()`

```php
getObjectStorageIamUser($object_storage_id, $iam_user_id): \Shellrent\Sdk\Model\ObjectStorageIamUserResponse
```

Get object storage IAM user

Get object storage IAM user details

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\StorageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$object_storage_id = 56; // int | ID of the object storage
$iam_user_id = 56; // int | ID of the IAM user

try {
    $result = $apiInstance->getObjectStorageIamUser($object_storage_id, $iam_user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorageApi->getObjectStorageIamUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **object_storage_id** | **int**| ID of the object storage | |
| **iam_user_id** | **int**| ID of the IAM user | |

### Return type

[**\Shellrent\Sdk\Model\ObjectStorageIamUserResponse**](../Model/ObjectStorageIamUserResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getObjectStorageIamUserS3Key()`

```php
getObjectStorageIamUserS3Key($object_storage_id, $iam_user_id, $s3_key_id): \Shellrent\Sdk\Model\ObjectStorageIamUserS3KeyResponse
```

Get object storage IAM user S3 key

Get object storage IAM user S3 key details

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\StorageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$object_storage_id = 56; // int | ID of the object storage
$iam_user_id = 56; // int | ID of the IAM user
$s3_key_id = 56; // int | ID of the S3 key

try {
    $result = $apiInstance->getObjectStorageIamUserS3Key($object_storage_id, $iam_user_id, $s3_key_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorageApi->getObjectStorageIamUserS3Key: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **object_storage_id** | **int**| ID of the object storage | |
| **iam_user_id** | **int**| ID of the IAM user | |
| **s3_key_id** | **int**| ID of the S3 key | |

### Return type

[**\Shellrent\Sdk\Model\ObjectStorageIamUserS3KeyResponse**](../Model/ObjectStorageIamUserS3KeyResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getObjectStorageS3Key()`

```php
getObjectStorageS3Key($object_storage_id): \Shellrent\Sdk\Model\ObjectStorageS3KeyResponse
```

Get object storage S3 key

Get S3 access key and secret for object storage

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\StorageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$object_storage_id = 56; // int | ID of the object storage

try {
    $result = $apiInstance->getObjectStorageS3Key($object_storage_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorageApi->getObjectStorageS3Key: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **object_storage_id** | **int**| ID of the object storage | |

### Return type

[**\Shellrent\Sdk\Model\ObjectStorageS3KeyResponse**](../Model/ObjectStorageS3KeyResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCloudStorageAccesses()`

```php
listCloudStorageAccesses($cloud_storage_id, $page, $per_page): \Shellrent\Sdk\Model\CloudStorageAccessPaginatedListResponse
```

List cloud storage accesses

Get list of cloud storage NFS accesses

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\StorageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_storage_id = 56; // int | ID of the cloud storage
$page = 1; // int | Page number, starting from 1. A page beyond the last one returns an empty `data` list (with the requested `page` in `meta`).
$per_page = 20; // int | Number of items per page. Values outside the allowed range are rejected with a validation error.

try {
    $result = $apiInstance->listCloudStorageAccesses($cloud_storage_id, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorageApi->listCloudStorageAccesses: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_storage_id** | **int**| ID of the cloud storage | |
| **page** | **int**| Page number, starting from 1. A page beyond the last one returns an empty &#x60;data&#x60; list (with the requested &#x60;page&#x60; in &#x60;meta&#x60;). | [optional] [default to 1] |
| **per_page** | **int**| Number of items per page. Values outside the allowed range are rejected with a validation error. | [optional] [default to 20] |

### Return type

[**\Shellrent\Sdk\Model\CloudStorageAccessPaginatedListResponse**](../Model/CloudStorageAccessPaginatedListResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCloudStorageUsers()`

```php
listCloudStorageUsers($cloud_storage_id): \Shellrent\Sdk\Model\CloudStorageUserListResponse
```

List cloud storage users

Get list of cloud storage users

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\StorageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_storage_id = 56; // int | ID of the cloud storage

try {
    $result = $apiInstance->listCloudStorageUsers($cloud_storage_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorageApi->listCloudStorageUsers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_storage_id** | **int**| ID of the cloud storage | |

### Return type

[**\Shellrent\Sdk\Model\CloudStorageUserListResponse**](../Model/CloudStorageUserListResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCloudStorages()`

```php
listCloudStorages($page, $per_page): \Shellrent\Sdk\Model\CloudStoragePaginatedListResponse
```

List cloud storages

Get a list of all cloud storages

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\StorageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | Page number, starting from 1. A page beyond the last one returns an empty `data` list (with the requested `page` in `meta`).
$per_page = 20; // int | Number of items per page. Values outside the allowed range are rejected with a validation error.

try {
    $result = $apiInstance->listCloudStorages($page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorageApi->listCloudStorages: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| Page number, starting from 1. A page beyond the last one returns an empty &#x60;data&#x60; list (with the requested &#x60;page&#x60; in &#x60;meta&#x60;). | [optional] [default to 1] |
| **per_page** | **int**| Number of items per page. Values outside the allowed range are rejected with a validation error. | [optional] [default to 20] |

### Return type

[**\Shellrent\Sdk\Model\CloudStoragePaginatedListResponse**](../Model/CloudStoragePaginatedListResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listObjectStorageBucketFirewallEntries()`

```php
listObjectStorageBucketFirewallEntries($object_storage_id, $bucket_id, $page, $per_page): \Shellrent\Sdk\Model\ObjectStorageBucketFirewallEntryPaginatedListResponse
```

List object storage bucket firewall entries

Get list of object storage bucket firewall entries

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\StorageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$object_storage_id = 56; // int | ID of the object storage
$bucket_id = 56; // int | ID of the bucket
$page = 1; // int | Page number, starting from 1. A page beyond the last one returns an empty `data` list (with the requested `page` in `meta`).
$per_page = 20; // int | Number of items per page. Values outside the allowed range are rejected with a validation error.

try {
    $result = $apiInstance->listObjectStorageBucketFirewallEntries($object_storage_id, $bucket_id, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorageApi->listObjectStorageBucketFirewallEntries: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **object_storage_id** | **int**| ID of the object storage | |
| **bucket_id** | **int**| ID of the bucket | |
| **page** | **int**| Page number, starting from 1. A page beyond the last one returns an empty &#x60;data&#x60; list (with the requested &#x60;page&#x60; in &#x60;meta&#x60;). | [optional] [default to 1] |
| **per_page** | **int**| Number of items per page. Values outside the allowed range are rejected with a validation error. | [optional] [default to 20] |

### Return type

[**\Shellrent\Sdk\Model\ObjectStorageBucketFirewallEntryPaginatedListResponse**](../Model/ObjectStorageBucketFirewallEntryPaginatedListResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listObjectStorageBuckets()`

```php
listObjectStorageBuckets($object_storage_id, $page, $per_page): \Shellrent\Sdk\Model\ObjectStorageBucketPaginatedListResponse
```

List object storage buckets

Get list of object storage buckets

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\StorageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$object_storage_id = 56; // int | ID of the object storage
$page = 1; // int | Page number, starting from 1. A page beyond the last one returns an empty `data` list (with the requested `page` in `meta`).
$per_page = 20; // int | Number of items per page. Values outside the allowed range are rejected with a validation error.

try {
    $result = $apiInstance->listObjectStorageBuckets($object_storage_id, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorageApi->listObjectStorageBuckets: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **object_storage_id** | **int**| ID of the object storage | |
| **page** | **int**| Page number, starting from 1. A page beyond the last one returns an empty &#x60;data&#x60; list (with the requested &#x60;page&#x60; in &#x60;meta&#x60;). | [optional] [default to 1] |
| **per_page** | **int**| Number of items per page. Values outside the allowed range are rejected with a validation error. | [optional] [default to 20] |

### Return type

[**\Shellrent\Sdk\Model\ObjectStorageBucketPaginatedListResponse**](../Model/ObjectStorageBucketPaginatedListResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listObjectStorageIamUserS3Keys()`

```php
listObjectStorageIamUserS3Keys($object_storage_id, $iam_user_id): \Shellrent\Sdk\Model\ObjectStorageIamUserS3KeyListResponse
```

List object storage IAM user S3 keys

Get list of object storage IAM user S3 keys

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\StorageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$object_storage_id = 56; // int | ID of the object storage
$iam_user_id = 56; // int | ID of the IAM user

try {
    $result = $apiInstance->listObjectStorageIamUserS3Keys($object_storage_id, $iam_user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorageApi->listObjectStorageIamUserS3Keys: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **object_storage_id** | **int**| ID of the object storage | |
| **iam_user_id** | **int**| ID of the IAM user | |

### Return type

[**\Shellrent\Sdk\Model\ObjectStorageIamUserS3KeyListResponse**](../Model/ObjectStorageIamUserS3KeyListResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listObjectStorageIamUsers()`

```php
listObjectStorageIamUsers($object_storage_id, $page, $per_page): \Shellrent\Sdk\Model\ObjectStorageIamUserPaginatedListResponse
```

List object storage IAM users

Get list of object storage IAM users

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\StorageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$object_storage_id = 56; // int | ID of the object storage
$page = 1; // int | Page number, starting from 1. A page beyond the last one returns an empty `data` list (with the requested `page` in `meta`).
$per_page = 20; // int | Number of items per page. Values outside the allowed range are rejected with a validation error.

try {
    $result = $apiInstance->listObjectStorageIamUsers($object_storage_id, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorageApi->listObjectStorageIamUsers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **object_storage_id** | **int**| ID of the object storage | |
| **page** | **int**| Page number, starting from 1. A page beyond the last one returns an empty &#x60;data&#x60; list (with the requested &#x60;page&#x60; in &#x60;meta&#x60;). | [optional] [default to 1] |
| **per_page** | **int**| Number of items per page. Values outside the allowed range are rejected with a validation error. | [optional] [default to 20] |

### Return type

[**\Shellrent\Sdk\Model\ObjectStorageIamUserPaginatedListResponse**](../Model/ObjectStorageIamUserPaginatedListResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listObjectStorages()`

```php
listObjectStorages($page, $per_page): \Shellrent\Sdk\Model\ObjectStoragePaginatedListResponse
```

List object storages

Get a list of all object storages

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\StorageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | Page number, starting from 1. A page beyond the last one returns an empty `data` list (with the requested `page` in `meta`).
$per_page = 20; // int | Number of items per page. Values outside the allowed range are rejected with a validation error.

try {
    $result = $apiInstance->listObjectStorages($page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorageApi->listObjectStorages: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| Page number, starting from 1. A page beyond the last one returns an empty &#x60;data&#x60; list (with the requested &#x60;page&#x60; in &#x60;meta&#x60;). | [optional] [default to 1] |
| **per_page** | **int**| Number of items per page. Values outside the allowed range are rejected with a validation error. | [optional] [default to 20] |

### Return type

[**\Shellrent\Sdk\Model\ObjectStoragePaginatedListResponse**](../Model/ObjectStoragePaginatedListResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCloudStorageUserSize()`

```php
updateCloudStorageUserSize($cloud_storage_id, $cloud_storage_user_id, $cloud_storage_user_size_update_request): \Shellrent\Sdk\Model\CloudStorageUserResponse
```

Update cloud storage user size

Update cloud storage user quota

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\StorageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_storage_id = 56; // int | ID of the cloud storage
$cloud_storage_user_id = 56; // int | ID of the cloud storage user
$cloud_storage_user_size_update_request = new \Shellrent\Sdk\Model\CloudStorageUserSizeUpdateRequest(); // \Shellrent\Sdk\Model\CloudStorageUserSizeUpdateRequest

try {
    $result = $apiInstance->updateCloudStorageUserSize($cloud_storage_id, $cloud_storage_user_id, $cloud_storage_user_size_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorageApi->updateCloudStorageUserSize: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_storage_id** | **int**| ID of the cloud storage | |
| **cloud_storage_user_id** | **int**| ID of the cloud storage user | |
| **cloud_storage_user_size_update_request** | [**\Shellrent\Sdk\Model\CloudStorageUserSizeUpdateRequest**](../Model/CloudStorageUserSizeUpdateRequest.md)|  | |

### Return type

[**\Shellrent\Sdk\Model\CloudStorageUserResponse**](../Model/CloudStorageUserResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `upgradeCloudStorageSize()`

```php
upgradeCloudStorageSize($cloud_storage_id): \Shellrent\Sdk\Model\OrderResponse
```

Upgrade cloud storage size

Upgrade the cloud storage size. Returns the generated Order to pay the additional size.  Not available to sub-accounts: the response is 403 (error 1601).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Shellrent\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Shellrent\Sdk\Api\StorageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_storage_id = 56; // int | ID of the cloud storage

try {
    $result = $apiInstance->upgradeCloudStorageSize($cloud_storage_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorageApi->upgradeCloudStorageSize: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_storage_id** | **int**| ID of the cloud storage | |

### Return type

[**\Shellrent\Sdk\Model\OrderResponse**](../Model/OrderResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
