# OpenAPI\Client\DefaultApi

All URIs are relative to https://api.smaregi.dev.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createCustomers()**](DefaultApi.md#createCustomers) | **POST** /{contract_id}/pos/customers | 会員情報を登録します。
[**deleteCoupons()**](DefaultApi.md#deleteCoupons) | **DELETE** /{contract_id}/pos/coupons/{coupon_id} | 
[**getCoupons()**](DefaultApi.md#getCoupons) | **GET** /{contract_id}/pos/coupons | Your GET endpoint
[**getCustomerPointList()**](DefaultApi.md#getCustomerPointList) | **GET** /{contract_id}/pos/customers/point | 会員ポイント一覧取得
[**getCustomers()**](DefaultApi.md#getCustomers) | **GET** /{contract_id}/pos/customers | 会員情報一覧を取得します。
[**getLayawayById()**](DefaultApi.md#getLayawayById) | **GET** /{contract_id}/pos/transactions/layaways/{layaway_id} | Your GET endpoint
[**getLayawayList()**](DefaultApi.md#getLayawayList) | **GET** /{contract_id}/pos/transactions/layaways | 取置き一覧を取得します。
[**getStores()**](DefaultApi.md#getStores) | **GET** /{contract_id}/pos/stores | 店舗一覧取得
[**getTransaction()**](DefaultApi.md#getTransaction) | **GET** /{contract_id}/pos/transactions | 取引情報一覧を取得します。
[**getTransactionId()**](DefaultApi.md#getTransactionId) | **GET** /{contract_id}/pos/transactions/{transaction_id} | 取引情報を取得します。
[**postCreateCoupons()**](DefaultApi.md#postCreateCoupons) | **POST** /{contract_id}/pos/coupons | 
[**updateCustomerPoint()**](DefaultApi.md#updateCustomerPoint) | **PATCH** /{contract_id}/pos/customers/{customer_id}/point | 会員ポイント更新
[**updateCustomerPointRelative()**](DefaultApi.md#updateCustomerPointRelative) | **POST** /{contract_id}/pos/customers/{customer_id}/point/add | 
[**updateCustomers()**](DefaultApi.md#updateCustomers) | **PATCH** /{contract_id}/pos/customers/{customer_id} | 
[**updateStore()**](DefaultApi.md#updateStore) | **PATCH** /{contract_id}/pos/stores/{store_id} | 店舗更新


## `createCustomers()`

```php
createCustomers($contract_id, $create_customers): \OpenAPI\Client\Model\CustomersResponseOfCreate
```

会員情報を登録します。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: AccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contract_id = 'contract_id_example'; // string | 契約id
$create_customers = new \OpenAPI\Client\Model\CreateCustomers(); // \OpenAPI\Client\Model\CreateCustomers

try {
    $result = $apiInstance->createCustomers($contract_id, $create_customers);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createCustomers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contract_id** | **string**| 契約id |
 **create_customers** | [**\OpenAPI\Client\Model\CreateCustomers**](../Model/CreateCustomers.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\CustomersResponseOfCreate**](../Model/CustomersResponseOfCreate.md)

### Authorization

[AccessToken](../../README.md#AccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteCoupons()`

```php
deleteCoupons($contract_id, $coupon_id)
```



指定されたクーポンを削除します。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: AccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contract_id = 'contract_id_example'; // string | 契約id
$coupon_id = 'coupon_id_example'; // string | クーポンid

try {
    $apiInstance->deleteCoupons($contract_id, $coupon_id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteCoupons: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contract_id** | **string**| 契約id |
 **coupon_id** | **string**| クーポンid |

### Return type

void (empty response body)

### Authorization

[AccessToken](../../README.md#AccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCoupons()`

```php
getCoupons($contract_id): \OpenAPI\Client\Model\Coupon[]
```

Your GET endpoint

クーポンの一覧を取得します。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: AccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contract_id = 'contract_id_example'; // string | 契約id

try {
    $result = $apiInstance->getCoupons($contract_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getCoupons: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contract_id** | **string**| 契約id |

### Return type

[**\OpenAPI\Client\Model\Coupon[]**](../Model/Coupon.md)

### Authorization

[AccessToken](../../README.md#AccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCustomerPointList()`

```php
getCustomerPointList($contract_id, $limit, $page, $customer_id): \OpenAPI\Client\Model\GetCustomerPointListItem[]
```

会員ポイント一覧取得

会員ポイント情報一覧を取得します。 参照にあたりポイント有効期限を参照し、ポイント残高がありかつ期限が切れていれば期限切れ分のポイント失効処理を行ってから返します。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: AccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contract_id = 'contract_id_example'; // string | 契約id
$limit = 56; // int | 一度に返すアイテム数 (上限 1000)
$page = 56; // int | ページ
$customer_id = 'customer_id_example'; // string | 顧客id

try {
    $result = $apiInstance->getCustomerPointList($contract_id, $limit, $page, $customer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getCustomerPointList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contract_id** | **string**| 契約id |
 **limit** | **int**| 一度に返すアイテム数 (上限 1000) | [optional]
 **page** | **int**| ページ | [optional]
 **customer_id** | **string**| 顧客id | [optional]

### Return type

[**\OpenAPI\Client\Model\GetCustomerPointListItem[]**](../Model/GetCustomerPointListItem.md)

### Authorization

[AccessToken](../../README.md#AccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCustomers()`

```php
getCustomers($contract_id, $limit, $page, $customer_code): \OpenAPI\Client\Model\GetCustomersItem[]
```

会員情報一覧を取得します。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: AccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contract_id = 'contract_id_example'; // string | 契約id
$limit = 56; // int | 一度に返すアイテム数 (上限 1000)
$page = 56; // int | ページ
$customer_code = 'customer_code_example'; // string | 顧客コード

try {
    $result = $apiInstance->getCustomers($contract_id, $limit, $page, $customer_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getCustomers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contract_id** | **string**| 契約id |
 **limit** | **int**| 一度に返すアイテム数 (上限 1000) | [optional]
 **page** | **int**| ページ | [optional]
 **customer_code** | **string**| 顧客コード | [optional]

### Return type

[**\OpenAPI\Client\Model\GetCustomersItem[]**](../Model/GetCustomersItem.md)

### Authorization

[AccessToken](../../README.md#AccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLayawayById()`

```php
getLayawayById($contract_id, $layaway_id, $with_details, $with_store, $with_customer): \OpenAPI\Client\Model\GetLayawayById
```

Your GET endpoint

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: AccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contract_id = 'contract_id_example'; // string | 契約id
$layaway_id = 'layaway_id_example'; // string
$with_details = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\WithDetails(); // \OpenAPI\Client\Model\WithDetails | 取引明細情報を付加するか(全項目付加する場合はall, 一部項目を付加する場合はsummary, しない場合はnone)
$with_store = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\WithEnum(); // \OpenAPI\Client\Model\WithEnum | 店舗情報を付加するか(付加する場合はall, しない場合はnone)
$with_customer = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\WithEnum(); // \OpenAPI\Client\Model\WithEnum | 会員情報を付加するか(付加する場合はall, しない場合はnone)

try {
    $result = $apiInstance->getLayawayById($contract_id, $layaway_id, $with_details, $with_store, $with_customer);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getLayawayById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contract_id** | **string**| 契約id |
 **layaway_id** | **string**|  |
 **with_details** | [**\OpenAPI\Client\Model\WithDetails**](../Model/.md)| 取引明細情報を付加するか(全項目付加する場合はall, 一部項目を付加する場合はsummary, しない場合はnone) | [optional]
 **with_store** | [**\OpenAPI\Client\Model\WithEnum**](../Model/.md)| 店舗情報を付加するか(付加する場合はall, しない場合はnone) | [optional]
 **with_customer** | [**\OpenAPI\Client\Model\WithEnum**](../Model/.md)| 会員情報を付加するか(付加する場合はall, しない場合はnone) | [optional]

### Return type

[**\OpenAPI\Client\Model\GetLayawayById**](../Model/GetLayawayById.md)

### Authorization

[AccessToken](../../README.md#AccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLayawayList()`

```php
getLayawayList($contract_id, $sum_date, $with_layaway): \OpenAPI\Client\Model\GetLayawayListItem[]
```

取置き一覧を取得します。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: AccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contract_id = 'contract_id_example'; // string | 契約id
$sum_date = 'sum_date_example'; // string | 締め日 [YYYY-MM-DD]
$with_layaway = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\WithEnum(); // \OpenAPI\Client\Model\WithEnum | 取置き情報を付加するか(付加する場合はall, しない場合はnone)

try {
    $result = $apiInstance->getLayawayList($contract_id, $sum_date, $with_layaway);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getLayawayList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contract_id** | **string**| 契約id |
 **sum_date** | **string**| 締め日 [YYYY-MM-DD] | [optional]
 **with_layaway** | [**\OpenAPI\Client\Model\WithEnum**](../Model/.md)| 取置き情報を付加するか(付加する場合はall, しない場合はnone) | [optional]

### Return type

[**\OpenAPI\Client\Model\GetLayawayListItem[]**](../Model/GetLayawayListItem.md)

### Authorization

[AccessToken](../../README.md#AccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getStores()`

```php
getStores($contract_id, $limit, $with_point_condition): \OpenAPI\Client\Model\GetStoresResponseItem[]
```

店舗一覧取得

店舗情報一覧を取得します。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: AccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contract_id = 'contract_id_example'; // string | 契約id
$limit = 56; // int | 一度に返すアイテム数 (上限 1000)
$with_point_condition = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\WithEnum(); // \OpenAPI\Client\Model\WithEnum | ポイント情報を付加するか(付加する場合はall, しない場合はnone)

try {
    $result = $apiInstance->getStores($contract_id, $limit, $with_point_condition);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getStores: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contract_id** | **string**| 契約id |
 **limit** | **int**| 一度に返すアイテム数 (上限 1000) | [optional]
 **with_point_condition** | [**\OpenAPI\Client\Model\WithEnum**](../Model/.md)| ポイント情報を付加するか(付加する場合はall, しない場合はnone) | [optional]

### Return type

[**\OpenAPI\Client\Model\GetStoresResponseItem[]**](../Model/GetStoresResponseItem.md)

### Authorization

[AccessToken](../../README.md#AccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTransaction()`

```php
getTransaction($contract_id, $sum_date, $with_layaway, $limit, $page, $upd_date_time_to, $upd_date_time_from, $customer_code, $transaction_head_division, $sort, $terminal_tran_date_time_from, $terminal_tran_date_time_to): \OpenAPI\Client\Model\GetTransactionItem[]
```

取引情報一覧を取得します。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: AccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contract_id = 'contract_id_example'; // string | 契約id
$sum_date = 'sum_date_example'; // string | 締め日 [YYYY-MM-DD]
$with_layaway = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\WithEnum(); // \OpenAPI\Client\Model\WithEnum | 取置き情報を付加するか(付加する場合はall, しない場合はnone)
$limit = 56; // int | 一度に返すアイテム数 (上限 1000)
$page = 56; // int | ページ
$upd_date_time_to = 'upd_date_time_to_example'; // string | 更新日時(To)：登録時・更新時の日時。[YYYY-MM-DDThh:mm:ssTZD]
$upd_date_time_from = 'upd_date_time_from_example'; // string | 更新日時(From)：登録時・更新時の日時。[YYYY-MM-DDThh:mm:ssTZD]
$customer_code = 'customer_code_example'; // string | 会員コード
$transaction_head_division = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\TransactionHeadDivision(); // \OpenAPI\Client\Model\TransactionHeadDivision
$sort = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\Sort(); // \OpenAPI\Client\Model\Sort
$terminal_tran_date_time_from = 'terminal_tran_date_time_from_example'; // string | 端末取引日時(From)：端末で設定された取引日時。[YYYY-MM-DDThh:mm:ssTZD]
$terminal_tran_date_time_to = 'terminal_tran_date_time_to_example'; // string | 端末取引日時(To)：端末で設定された取引日時。[YYYY-MM-DDThh:mm:ssTZD]

try {
    $result = $apiInstance->getTransaction($contract_id, $sum_date, $with_layaway, $limit, $page, $upd_date_time_to, $upd_date_time_from, $customer_code, $transaction_head_division, $sort, $terminal_tran_date_time_from, $terminal_tran_date_time_to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getTransaction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contract_id** | **string**| 契約id |
 **sum_date** | **string**| 締め日 [YYYY-MM-DD] | [optional]
 **with_layaway** | [**\OpenAPI\Client\Model\WithEnum**](../Model/.md)| 取置き情報を付加するか(付加する場合はall, しない場合はnone) | [optional]
 **limit** | **int**| 一度に返すアイテム数 (上限 1000) | [optional]
 **page** | **int**| ページ | [optional]
 **upd_date_time_to** | **string**| 更新日時(To)：登録時・更新時の日時。[YYYY-MM-DDThh:mm:ssTZD] | [optional]
 **upd_date_time_from** | **string**| 更新日時(From)：登録時・更新時の日時。[YYYY-MM-DDThh:mm:ssTZD] | [optional]
 **customer_code** | **string**| 会員コード | [optional]
 **transaction_head_division** | [**\OpenAPI\Client\Model\TransactionHeadDivision**](../Model/.md)|  | [optional]
 **sort** | [**\OpenAPI\Client\Model\Sort**](../Model/.md)|  | [optional]
 **terminal_tran_date_time_from** | **string**| 端末取引日時(From)：端末で設定された取引日時。[YYYY-MM-DDThh:mm:ssTZD] | [optional]
 **terminal_tran_date_time_to** | **string**| 端末取引日時(To)：端末で設定された取引日時。[YYYY-MM-DDThh:mm:ssTZD] | [optional]

### Return type

[**\OpenAPI\Client\Model\GetTransactionItem[]**](../Model/GetTransactionItem.md)

### Authorization

[AccessToken](../../README.md#AccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTransactionId()`

```php
getTransactionId($contract_id, $transaction_id, $with_coupons, $with_details, $with_store, $with_customer): \OpenAPI\Client\Model\GetTransactionId
```

取引情報を取得します。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: AccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contract_id = 'contract_id_example'; // string | 契約id
$transaction_id = 'transaction_id_example'; // string | 取引id
$with_coupons = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\WithEnum(); // \OpenAPI\Client\Model\WithEnum | クーポン情報を付加するか(付加する場合はall, しない場合はnone)
$with_details = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\WithDetails(); // \OpenAPI\Client\Model\WithDetails | 取引明細情報を付加するか(全項目付加する場合はall, 一部項目を付加する場合はsummary, しない場合はnone)
$with_store = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\WithEnum(); // \OpenAPI\Client\Model\WithEnum | 店舗情報を付加するか(付加する場合はall, しない場合はnone)
$with_customer = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\WithEnum(); // \OpenAPI\Client\Model\WithEnum | 会員情報を付加するか(付加する場合はall, しない場合はnone)

try {
    $result = $apiInstance->getTransactionId($contract_id, $transaction_id, $with_coupons, $with_details, $with_store, $with_customer);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getTransactionId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contract_id** | **string**| 契約id |
 **transaction_id** | **string**| 取引id |
 **with_coupons** | [**\OpenAPI\Client\Model\WithEnum**](../Model/.md)| クーポン情報を付加するか(付加する場合はall, しない場合はnone) | [optional]
 **with_details** | [**\OpenAPI\Client\Model\WithDetails**](../Model/.md)| 取引明細情報を付加するか(全項目付加する場合はall, 一部項目を付加する場合はsummary, しない場合はnone) | [optional]
 **with_store** | [**\OpenAPI\Client\Model\WithEnum**](../Model/.md)| 店舗情報を付加するか(付加する場合はall, しない場合はnone) | [optional]
 **with_customer** | [**\OpenAPI\Client\Model\WithEnum**](../Model/.md)| 会員情報を付加するか(付加する場合はall, しない場合はnone) | [optional]

### Return type

[**\OpenAPI\Client\Model\GetTransactionId**](../Model/GetTransactionId.md)

### Authorization

[AccessToken](../../README.md#AccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postCreateCoupons()`

```php
postCreateCoupons($contract_id, $post_create_coupons): \OpenAPI\Client\Model\Coupon
```



クーポンを登録します。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: AccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contract_id = 'contract_id_example'; // string | 契約id
$post_create_coupons = new \OpenAPI\Client\Model\PostCreateCoupons(); // \OpenAPI\Client\Model\PostCreateCoupons

try {
    $result = $apiInstance->postCreateCoupons($contract_id, $post_create_coupons);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->postCreateCoupons: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contract_id** | **string**| 契約id |
 **post_create_coupons** | [**\OpenAPI\Client\Model\PostCreateCoupons**](../Model/PostCreateCoupons.md)|  |

### Return type

[**\OpenAPI\Client\Model\Coupon**](../Model/Coupon.md)

### Authorization

[AccessToken](../../README.md#AccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCustomerPoint()`

```php
updateCustomerPoint($contract_id, $customer_id, $update_customer_point_request): \OpenAPI\Client\Model\UpdateCustomerPointResponse
```

会員ポイント更新

会員ポイント情報を更新します。 ポイントおよびマイルは、入力された値と同じになるよう更新します。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: AccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contract_id = 'contract_id_example'; // string | 契約id
$customer_id = 'customer_id_example'; // string | 顧客id
$update_customer_point_request = new \OpenAPI\Client\Model\UpdateCustomerPointRequest(); // \OpenAPI\Client\Model\UpdateCustomerPointRequest

try {
    $result = $apiInstance->updateCustomerPoint($contract_id, $customer_id, $update_customer_point_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->updateCustomerPoint: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contract_id** | **string**| 契約id |
 **customer_id** | **string**| 顧客id |
 **update_customer_point_request** | [**\OpenAPI\Client\Model\UpdateCustomerPointRequest**](../Model/UpdateCustomerPointRequest.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\UpdateCustomerPointResponse**](../Model/UpdateCustomerPointResponse.md)

### Authorization

[AccessToken](../../README.md#AccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCustomerPointRelative()`

```php
updateCustomerPointRelative($contract_id, $customer_id, $update_customer_point_request): \OpenAPI\Client\Model\UpdateCustomerPointResponse
```



会員ポイント情報を更新します。 ポイントおよびマイルは、現在の値に対し、入力された値を加算（入力値が負の場合は減算）した値に更新します。 現在値参照にあたりポイント有効期限を参照し、ポイント残高がありかつ期限が切れていれば期限切れ分のポイント失効処理を行ってから加算を行います（失効で0になっているので減算はエラー）。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: AccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contract_id = 'contract_id_example'; // string | 契約id
$customer_id = 'customer_id_example'; // string | 顧客id
$update_customer_point_request = new \OpenAPI\Client\Model\UpdateCustomerPointRequest(); // \OpenAPI\Client\Model\UpdateCustomerPointRequest

try {
    $result = $apiInstance->updateCustomerPointRelative($contract_id, $customer_id, $update_customer_point_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->updateCustomerPointRelative: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contract_id** | **string**| 契約id |
 **customer_id** | **string**| 顧客id |
 **update_customer_point_request** | [**\OpenAPI\Client\Model\UpdateCustomerPointRequest**](../Model/UpdateCustomerPointRequest.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\UpdateCustomerPointResponse**](../Model/UpdateCustomerPointResponse.md)

### Authorization

[AccessToken](../../README.md#AccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCustomers()`

```php
updateCustomers($contract_id, $customer_id, $patch_customers): \OpenAPI\Client\Model\CustomersResponseOfCreate
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: AccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contract_id = 'contract_id_example'; // string | 契約id
$customer_id = 'customer_id_example'; // string | 顧客id
$patch_customers = new \OpenAPI\Client\Model\PatchCustomers(); // \OpenAPI\Client\Model\PatchCustomers

try {
    $result = $apiInstance->updateCustomers($contract_id, $customer_id, $patch_customers);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->updateCustomers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contract_id** | **string**| 契約id |
 **customer_id** | **string**| 顧客id |
 **patch_customers** | [**\OpenAPI\Client\Model\PatchCustomers**](../Model/PatchCustomers.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\CustomersResponseOfCreate**](../Model/CustomersResponseOfCreate.md)

### Authorization

[AccessToken](../../README.md#AccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateStore()`

```php
updateStore($contract_id, $store_id, $update_store_request): \OpenAPI\Client\Model\UpdateStoreResponse
```

店舗更新

店舗情報を更新します。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: AccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contract_id = 'contract_id_example'; // string | 契約id
$store_id = 'store_id_example'; // string | 店舗id
$update_store_request = new \OpenAPI\Client\Model\UpdateStoreRequest(); // \OpenAPI\Client\Model\UpdateStoreRequest

try {
    $result = $apiInstance->updateStore($contract_id, $store_id, $update_store_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->updateStore: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contract_id** | **string**| 契約id |
 **store_id** | **string**| 店舗id |
 **update_store_request** | [**\OpenAPI\Client\Model\UpdateStoreRequest**](../Model/UpdateStoreRequest.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\UpdateStoreResponse**](../Model/UpdateStoreResponse.md)

### Authorization

[AccessToken](../../README.md#AccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
