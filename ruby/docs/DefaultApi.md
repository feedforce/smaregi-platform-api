# OpenapiClient::DefaultApi

All URIs are relative to *https://api.smaregi.dev*

| Method | HTTP request | Description |
| ------ | ------------ | ----------- |
| [**create_customers**](DefaultApi.md#create_customers) | **POST** /{contract_id}/pos/customers | 会員情報を登録します。 |
| [**delete_coupons**](DefaultApi.md#delete_coupons) | **DELETE** /{contract_id}/pos/coupons/{coupon_id} |  |
| [**delete_customers**](DefaultApi.md#delete_customers) | **DELETE** /{contract_id}/pos/customers/{customer_id} | 会員情報を削除します。 |
| [**get_coupons**](DefaultApi.md#get_coupons) | **GET** /{contract_id}/pos/coupons | Your GET endpoint |
| [**get_customer_point_list**](DefaultApi.md#get_customer_point_list) | **GET** /{contract_id}/pos/customers/point | 会員ポイント一覧取得 |
| [**get_customer_required_column_setting**](DefaultApi.md#get_customer_required_column_setting) | **GET** /{contract_id}/pos/customer_required_column_setting | 会員必須項目設定取得 |
| [**get_customers**](DefaultApi.md#get_customers) | **GET** /{contract_id}/pos/customers | 会員情報一覧を取得します。 |
| [**get_layaway_by_id**](DefaultApi.md#get_layaway_by_id) | **GET** /{contract_id}/pos/transactions/layaways/{layaway_id} | Your GET endpoint |
| [**get_layaway_list**](DefaultApi.md#get_layaway_list) | **GET** /{contract_id}/pos/transactions/layaways | 取置き一覧を取得します。 |
| [**get_stores**](DefaultApi.md#get_stores) | **GET** /{contract_id}/pos/stores | 店舗一覧取得 |
| [**get_transaction**](DefaultApi.md#get_transaction) | **GET** /{contract_id}/pos/transactions | 取引情報一覧を取得します。 |
| [**get_transaction_id**](DefaultApi.md#get_transaction_id) | **GET** /{contract_id}/pos/transactions/{transaction_id} | 取引情報を取得します。 |
| [**post_create_coupons**](DefaultApi.md#post_create_coupons) | **POST** /{contract_id}/pos/coupons |  |
| [**update_customer_point**](DefaultApi.md#update_customer_point) | **PATCH** /{contract_id}/pos/customers/{customer_id}/point | 会員ポイント更新 |
| [**update_customer_point_relative**](DefaultApi.md#update_customer_point_relative) | **POST** /{contract_id}/pos/customers/{customer_id}/point/add |  |
| [**update_customers**](DefaultApi.md#update_customers) | **PATCH** /{contract_id}/pos/customers/{customer_id} |  |
| [**update_store**](DefaultApi.md#update_store) | **PATCH** /{contract_id}/pos/stores/{store_id} | 店舗更新 |
| [**update_transaction_for_customer**](DefaultApi.md#update_transaction_for_customer) | **PATCH** /{contract_id}/pos/transactions/{transaction_id}/customer | 取引会員更新 |


## create_customers

> <CustomersResponseOfCreate> create_customers(contract_id, opts)

会員情報を登録します。

### Examples

```ruby
require 'time'
require 'openapi_client'
# setup authorization
OpenapiClient.configure do |config|
  # Configure Bearer authorization: AccessToken
  config.access_token = 'YOUR_BEARER_TOKEN'
end

api_instance = OpenapiClient::DefaultApi.new
contract_id = 'contract_id_example' # String | 契約id
opts = {
  create_customers: OpenapiClient::CreateCustomers.new({customer_code: 'customer_code_example', first_name: 'first_name_example', last_name: 'last_name_example'}) # CreateCustomers | 
}

begin
  # 会員情報を登録します。
  result = api_instance.create_customers(contract_id, opts)
  p result
rescue OpenapiClient::ApiError => e
  puts "Error when calling DefaultApi->create_customers: #{e}"
end
```

#### Using the create_customers_with_http_info variant

This returns an Array which contains the response data, status code and headers.

> <Array(<CustomersResponseOfCreate>, Integer, Hash)> create_customers_with_http_info(contract_id, opts)

```ruby
begin
  # 会員情報を登録します。
  data, status_code, headers = api_instance.create_customers_with_http_info(contract_id, opts)
  p status_code # => 2xx
  p headers # => { ... }
  p data # => <CustomersResponseOfCreate>
rescue OpenapiClient::ApiError => e
  puts "Error when calling DefaultApi->create_customers_with_http_info: #{e}"
end
```

### Parameters

| Name | Type | Description | Notes |
| ---- | ---- | ----------- | ----- |
| **contract_id** | **String** | 契約id |  |
| **create_customers** | [**CreateCustomers**](CreateCustomers.md) |  | [optional] |

### Return type

[**CustomersResponseOfCreate**](CustomersResponseOfCreate.md)

### Authorization

[AccessToken](../README.md#AccessToken)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json


## delete_coupons

> delete_coupons(contract_id, coupon_id)



指定されたクーポンを削除します。 

### Examples

```ruby
require 'time'
require 'openapi_client'
# setup authorization
OpenapiClient.configure do |config|
  # Configure Bearer authorization: AccessToken
  config.access_token = 'YOUR_BEARER_TOKEN'
end

api_instance = OpenapiClient::DefaultApi.new
contract_id = 'contract_id_example' # String | 契約id
coupon_id = 'coupon_id_example' # String | クーポンid

begin
  
  api_instance.delete_coupons(contract_id, coupon_id)
rescue OpenapiClient::ApiError => e
  puts "Error when calling DefaultApi->delete_coupons: #{e}"
end
```

#### Using the delete_coupons_with_http_info variant

This returns an Array which contains the response data (`nil` in this case), status code and headers.

> <Array(nil, Integer, Hash)> delete_coupons_with_http_info(contract_id, coupon_id)

```ruby
begin
  
  data, status_code, headers = api_instance.delete_coupons_with_http_info(contract_id, coupon_id)
  p status_code # => 2xx
  p headers # => { ... }
  p data # => nil
rescue OpenapiClient::ApiError => e
  puts "Error when calling DefaultApi->delete_coupons_with_http_info: #{e}"
end
```

### Parameters

| Name | Type | Description | Notes |
| ---- | ---- | ----------- | ----- |
| **contract_id** | **String** | 契約id |  |
| **coupon_id** | **String** | クーポンid |  |

### Return type

nil (empty response body)

### Authorization

[AccessToken](../README.md#AccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined


## delete_customers

> delete_customers(contract_id, customer_id)

会員情報を削除します。

### Examples

```ruby
require 'time'
require 'openapi_client'
# setup authorization
OpenapiClient.configure do |config|
  # Configure Bearer authorization: AccessToken
  config.access_token = 'YOUR_BEARER_TOKEN'
end

api_instance = OpenapiClient::DefaultApi.new
contract_id = 'contract_id_example' # String | 契約id
customer_id = 'customer_id_example' # String | 顧客id

begin
  # 会員情報を削除します。
  api_instance.delete_customers(contract_id, customer_id)
rescue OpenapiClient::ApiError => e
  puts "Error when calling DefaultApi->delete_customers: #{e}"
end
```

#### Using the delete_customers_with_http_info variant

This returns an Array which contains the response data (`nil` in this case), status code and headers.

> <Array(nil, Integer, Hash)> delete_customers_with_http_info(contract_id, customer_id)

```ruby
begin
  # 会員情報を削除します。
  data, status_code, headers = api_instance.delete_customers_with_http_info(contract_id, customer_id)
  p status_code # => 2xx
  p headers # => { ... }
  p data # => nil
rescue OpenapiClient::ApiError => e
  puts "Error when calling DefaultApi->delete_customers_with_http_info: #{e}"
end
```

### Parameters

| Name | Type | Description | Notes |
| ---- | ---- | ----------- | ----- |
| **contract_id** | **String** | 契約id |  |
| **customer_id** | **String** | 顧客id |  |

### Return type

nil (empty response body)

### Authorization

[AccessToken](../README.md#AccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined


## get_coupons

> <Array<Coupon>> get_coupons(contract_id)

Your GET endpoint

クーポンの一覧を取得します。

### Examples

```ruby
require 'time'
require 'openapi_client'
# setup authorization
OpenapiClient.configure do |config|
  # Configure Bearer authorization: AccessToken
  config.access_token = 'YOUR_BEARER_TOKEN'
end

api_instance = OpenapiClient::DefaultApi.new
contract_id = 'contract_id_example' # String | 契約id

begin
  # Your GET endpoint
  result = api_instance.get_coupons(contract_id)
  p result
rescue OpenapiClient::ApiError => e
  puts "Error when calling DefaultApi->get_coupons: #{e}"
end
```

#### Using the get_coupons_with_http_info variant

This returns an Array which contains the response data, status code and headers.

> <Array(<Array<Coupon>>, Integer, Hash)> get_coupons_with_http_info(contract_id)

```ruby
begin
  # Your GET endpoint
  data, status_code, headers = api_instance.get_coupons_with_http_info(contract_id)
  p status_code # => 2xx
  p headers # => { ... }
  p data # => <Array<Coupon>>
rescue OpenapiClient::ApiError => e
  puts "Error when calling DefaultApi->get_coupons_with_http_info: #{e}"
end
```

### Parameters

| Name | Type | Description | Notes |
| ---- | ---- | ----------- | ----- |
| **contract_id** | **String** | 契約id |  |

### Return type

[**Array&lt;Coupon&gt;**](Coupon.md)

### Authorization

[AccessToken](../README.md#AccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json


## get_customer_point_list

> <Array<GetCustomerPointListItem>> get_customer_point_list(contract_id, opts)

会員ポイント一覧取得

会員ポイント情報一覧を取得します。 参照にあたりポイント有効期限を参照し、ポイント残高がありかつ期限が切れていれば期限切れ分のポイント失効処理を行ってから返します。

### Examples

```ruby
require 'time'
require 'openapi_client'
# setup authorization
OpenapiClient.configure do |config|
  # Configure Bearer authorization: AccessToken
  config.access_token = 'YOUR_BEARER_TOKEN'
end

api_instance = OpenapiClient::DefaultApi.new
contract_id = 'contract_id_example' # String | 契約id
opts = {
  limit: 56, # Integer | 一度に返すアイテム数 (上限 1000)
  page: 56, # Integer | ページ
  customer_id: 'customer_id_example' # String | 顧客id
}

begin
  # 会員ポイント一覧取得
  result = api_instance.get_customer_point_list(contract_id, opts)
  p result
rescue OpenapiClient::ApiError => e
  puts "Error when calling DefaultApi->get_customer_point_list: #{e}"
end
```

#### Using the get_customer_point_list_with_http_info variant

This returns an Array which contains the response data, status code and headers.

> <Array(<Array<GetCustomerPointListItem>>, Integer, Hash)> get_customer_point_list_with_http_info(contract_id, opts)

```ruby
begin
  # 会員ポイント一覧取得
  data, status_code, headers = api_instance.get_customer_point_list_with_http_info(contract_id, opts)
  p status_code # => 2xx
  p headers # => { ... }
  p data # => <Array<GetCustomerPointListItem>>
rescue OpenapiClient::ApiError => e
  puts "Error when calling DefaultApi->get_customer_point_list_with_http_info: #{e}"
end
```

### Parameters

| Name | Type | Description | Notes |
| ---- | ---- | ----------- | ----- |
| **contract_id** | **String** | 契約id |  |
| **limit** | **Integer** | 一度に返すアイテム数 (上限 1000) | [optional] |
| **page** | **Integer** | ページ | [optional] |
| **customer_id** | **String** | 顧客id | [optional] |

### Return type

[**Array&lt;GetCustomerPointListItem&gt;**](GetCustomerPointListItem.md)

### Authorization

[AccessToken](../README.md#AccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json


## get_customer_required_column_setting

> <Array<GetCustomerRequiredColumnSettingResponse>> get_customer_required_column_setting(contract_id)

会員必須項目設定取得

### Examples

```ruby
require 'time'
require 'openapi_client'
# setup authorization
OpenapiClient.configure do |config|
  # Configure Bearer authorization: AccessToken
  config.access_token = 'YOUR_BEARER_TOKEN'
end

api_instance = OpenapiClient::DefaultApi.new
contract_id = 'contract_id_example' # String | 契約id

begin
  # 会員必須項目設定取得
  result = api_instance.get_customer_required_column_setting(contract_id)
  p result
rescue OpenapiClient::ApiError => e
  puts "Error when calling DefaultApi->get_customer_required_column_setting: #{e}"
end
```

#### Using the get_customer_required_column_setting_with_http_info variant

This returns an Array which contains the response data, status code and headers.

> <Array(<Array<GetCustomerRequiredColumnSettingResponse>>, Integer, Hash)> get_customer_required_column_setting_with_http_info(contract_id)

```ruby
begin
  # 会員必須項目設定取得
  data, status_code, headers = api_instance.get_customer_required_column_setting_with_http_info(contract_id)
  p status_code # => 2xx
  p headers # => { ... }
  p data # => <Array<GetCustomerRequiredColumnSettingResponse>>
rescue OpenapiClient::ApiError => e
  puts "Error when calling DefaultApi->get_customer_required_column_setting_with_http_info: #{e}"
end
```

### Parameters

| Name | Type | Description | Notes |
| ---- | ---- | ----------- | ----- |
| **contract_id** | **String** | 契約id |  |

### Return type

[**Array&lt;GetCustomerRequiredColumnSettingResponse&gt;**](GetCustomerRequiredColumnSettingResponse.md)

### Authorization

[AccessToken](../README.md#AccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json


## get_customers

> <Array<GetCustomersItem>> get_customers(contract_id, opts)

会員情報一覧を取得します。

### Examples

```ruby
require 'time'
require 'openapi_client'
# setup authorization
OpenapiClient.configure do |config|
  # Configure Bearer authorization: AccessToken
  config.access_token = 'YOUR_BEARER_TOKEN'
end

api_instance = OpenapiClient::DefaultApi.new
contract_id = 'contract_id_example' # String | 契約id
opts = {
  limit: 56, # Integer | 一度に返すアイテム数 (上限 1000)
  page: 56, # Integer | ページ
  customer_code: 'customer_code_example' # String | 顧客コード
}

begin
  # 会員情報一覧を取得します。
  result = api_instance.get_customers(contract_id, opts)
  p result
rescue OpenapiClient::ApiError => e
  puts "Error when calling DefaultApi->get_customers: #{e}"
end
```

#### Using the get_customers_with_http_info variant

This returns an Array which contains the response data, status code and headers.

> <Array(<Array<GetCustomersItem>>, Integer, Hash)> get_customers_with_http_info(contract_id, opts)

```ruby
begin
  # 会員情報一覧を取得します。
  data, status_code, headers = api_instance.get_customers_with_http_info(contract_id, opts)
  p status_code # => 2xx
  p headers # => { ... }
  p data # => <Array<GetCustomersItem>>
rescue OpenapiClient::ApiError => e
  puts "Error when calling DefaultApi->get_customers_with_http_info: #{e}"
end
```

### Parameters

| Name | Type | Description | Notes |
| ---- | ---- | ----------- | ----- |
| **contract_id** | **String** | 契約id |  |
| **limit** | **Integer** | 一度に返すアイテム数 (上限 1000) | [optional] |
| **page** | **Integer** | ページ | [optional] |
| **customer_code** | **String** | 顧客コード | [optional] |

### Return type

[**Array&lt;GetCustomersItem&gt;**](GetCustomersItem.md)

### Authorization

[AccessToken](../README.md#AccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json


## get_layaway_by_id

> <GetLayawayById> get_layaway_by_id(contract_id, layaway_id, opts)

Your GET endpoint

### Examples

```ruby
require 'time'
require 'openapi_client'
# setup authorization
OpenapiClient.configure do |config|
  # Configure Bearer authorization: AccessToken
  config.access_token = 'YOUR_BEARER_TOKEN'
end

api_instance = OpenapiClient::DefaultApi.new
contract_id = 'contract_id_example' # String | 契約id
layaway_id = 'layaway_id_example' # String | 
opts = {
  with_details: OpenapiClient::WithDetails::ALL, # WithDetails | 取引明細情報を付加するか(全項目付加する場合はall, 一部項目を付加する場合はsummary, しない場合はnone)
  with_store: OpenapiClient::WithEnum::ALL, # WithEnum | 店舗情報を付加するか(付加する場合はall, しない場合はnone)
  with_customer: OpenapiClient::WithEnum::ALL # WithEnum | 会員情報を付加するか(付加する場合はall, しない場合はnone)
}

begin
  # Your GET endpoint
  result = api_instance.get_layaway_by_id(contract_id, layaway_id, opts)
  p result
rescue OpenapiClient::ApiError => e
  puts "Error when calling DefaultApi->get_layaway_by_id: #{e}"
end
```

#### Using the get_layaway_by_id_with_http_info variant

This returns an Array which contains the response data, status code and headers.

> <Array(<GetLayawayById>, Integer, Hash)> get_layaway_by_id_with_http_info(contract_id, layaway_id, opts)

```ruby
begin
  # Your GET endpoint
  data, status_code, headers = api_instance.get_layaway_by_id_with_http_info(contract_id, layaway_id, opts)
  p status_code # => 2xx
  p headers # => { ... }
  p data # => <GetLayawayById>
rescue OpenapiClient::ApiError => e
  puts "Error when calling DefaultApi->get_layaway_by_id_with_http_info: #{e}"
end
```

### Parameters

| Name | Type | Description | Notes |
| ---- | ---- | ----------- | ----- |
| **contract_id** | **String** | 契約id |  |
| **layaway_id** | **String** |  |  |
| **with_details** | [**WithDetails**](.md) | 取引明細情報を付加するか(全項目付加する場合はall, 一部項目を付加する場合はsummary, しない場合はnone) | [optional][default to &#39;none&#39;] |
| **with_store** | [**WithEnum**](.md) | 店舗情報を付加するか(付加する場合はall, しない場合はnone) | [optional][default to &#39;none&#39;] |
| **with_customer** | [**WithEnum**](.md) | 会員情報を付加するか(付加する場合はall, しない場合はnone) | [optional][default to &#39;none&#39;] |

### Return type

[**GetLayawayById**](GetLayawayById.md)

### Authorization

[AccessToken](../README.md#AccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json


## get_layaway_list

> <Array<GetLayawayListItem>> get_layaway_list(contract_id, opts)

取置き一覧を取得します。

### Examples

```ruby
require 'time'
require 'openapi_client'
# setup authorization
OpenapiClient.configure do |config|
  # Configure Bearer authorization: AccessToken
  config.access_token = 'YOUR_BEARER_TOKEN'
end

api_instance = OpenapiClient::DefaultApi.new
contract_id = 'contract_id_example' # String | 契約id
opts = {
  sum_date: 'sum_date_example', # String | 締め日 [YYYY-MM-DD]
  with_layaway: OpenapiClient::WithEnum::ALL # WithEnum | 取置き情報を付加するか(付加する場合はall, しない場合はnone)
}

begin
  # 取置き一覧を取得します。
  result = api_instance.get_layaway_list(contract_id, opts)
  p result
rescue OpenapiClient::ApiError => e
  puts "Error when calling DefaultApi->get_layaway_list: #{e}"
end
```

#### Using the get_layaway_list_with_http_info variant

This returns an Array which contains the response data, status code and headers.

> <Array(<Array<GetLayawayListItem>>, Integer, Hash)> get_layaway_list_with_http_info(contract_id, opts)

```ruby
begin
  # 取置き一覧を取得します。
  data, status_code, headers = api_instance.get_layaway_list_with_http_info(contract_id, opts)
  p status_code # => 2xx
  p headers # => { ... }
  p data # => <Array<GetLayawayListItem>>
rescue OpenapiClient::ApiError => e
  puts "Error when calling DefaultApi->get_layaway_list_with_http_info: #{e}"
end
```

### Parameters

| Name | Type | Description | Notes |
| ---- | ---- | ----------- | ----- |
| **contract_id** | **String** | 契約id |  |
| **sum_date** | **String** | 締め日 [YYYY-MM-DD] | [optional] |
| **with_layaway** | [**WithEnum**](.md) | 取置き情報を付加するか(付加する場合はall, しない場合はnone) | [optional][default to &#39;none&#39;] |

### Return type

[**Array&lt;GetLayawayListItem&gt;**](GetLayawayListItem.md)

### Authorization

[AccessToken](../README.md#AccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json


## get_stores

> <Array<GetStoresResponseItem>> get_stores(contract_id, opts)

店舗一覧取得

店舗情報一覧を取得します。 

### Examples

```ruby
require 'time'
require 'openapi_client'
# setup authorization
OpenapiClient.configure do |config|
  # Configure Bearer authorization: AccessToken
  config.access_token = 'YOUR_BEARER_TOKEN'
end

api_instance = OpenapiClient::DefaultApi.new
contract_id = 'contract_id_example' # String | 契約id
opts = {
  limit: 56, # Integer | 一度に返すアイテム数 (上限 1000)
  with_point_condition: OpenapiClient::WithEnum::ALL # WithEnum | ポイント情報を付加するか(付加する場合はall, しない場合はnone)
}

begin
  # 店舗一覧取得
  result = api_instance.get_stores(contract_id, opts)
  p result
rescue OpenapiClient::ApiError => e
  puts "Error when calling DefaultApi->get_stores: #{e}"
end
```

#### Using the get_stores_with_http_info variant

This returns an Array which contains the response data, status code and headers.

> <Array(<Array<GetStoresResponseItem>>, Integer, Hash)> get_stores_with_http_info(contract_id, opts)

```ruby
begin
  # 店舗一覧取得
  data, status_code, headers = api_instance.get_stores_with_http_info(contract_id, opts)
  p status_code # => 2xx
  p headers # => { ... }
  p data # => <Array<GetStoresResponseItem>>
rescue OpenapiClient::ApiError => e
  puts "Error when calling DefaultApi->get_stores_with_http_info: #{e}"
end
```

### Parameters

| Name | Type | Description | Notes |
| ---- | ---- | ----------- | ----- |
| **contract_id** | **String** | 契約id |  |
| **limit** | **Integer** | 一度に返すアイテム数 (上限 1000) | [optional] |
| **with_point_condition** | [**WithEnum**](.md) | ポイント情報を付加するか(付加する場合はall, しない場合はnone) | [optional][default to &#39;none&#39;] |

### Return type

[**Array&lt;GetStoresResponseItem&gt;**](GetStoresResponseItem.md)

### Authorization

[AccessToken](../README.md#AccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json


## get_transaction

> <Array<GetTransactionItem>> get_transaction(contract_id, opts)

取引情報一覧を取得します。

### Examples

```ruby
require 'time'
require 'openapi_client'
# setup authorization
OpenapiClient.configure do |config|
  # Configure Bearer authorization: AccessToken
  config.access_token = 'YOUR_BEARER_TOKEN'
end

api_instance = OpenapiClient::DefaultApi.new
contract_id = 'contract_id_example' # String | 契約id
opts = {
  sum_date: 'sum_date_example', # String | 締め日 [YYYY-MM-DD]
  with_layaway: OpenapiClient::WithEnum::ALL, # WithEnum | 取置き情報を付加するか(付加する場合はall, しない場合はnone)
  limit: 56, # Integer | 一度に返すアイテム数 (上限 1000)
  page: 56, # Integer | ページ
  upd_date_time_to: 'upd_date_time_to_example', # String | 更新日時(To)：登録時・更新時の日時。[YYYY-MM-DDThh:mm:ssTZD]
  upd_date_time_from: 'upd_date_time_from_example', # String | 更新日時(From)：登録時・更新時の日時。[YYYY-MM-DDThh:mm:ssTZD]
  customer_code: 'customer_code_example', # String | 会員コード
  transaction_head_division: OpenapiClient::TransactionHeadDivision::Normal, # TransactionHeadDivision | 
  sort: OpenapiClient::Sort::PRODUCT_CODEDESC, # Sort | 
  terminal_tran_date_time_from: 'terminal_tran_date_time_from_example', # String | 端末取引日時(From)：端末で設定された取引日時。[YYYY-MM-DDThh:mm:ssTZD]
  terminal_tran_date_time_to: 'terminal_tran_date_time_to_example', # String | 端末取引日時(To)：端末で設定された取引日時。[YYYY-MM-DDThh:mm:ssTZD]
  store_id: 56, # Integer | 店舗ID
  transaction_head_id_to: 'transaction_head_id_to_example', # String | 取引ID(To)
  transaction_head_id_from: 'transaction_head_id_from_example' # String | 取引ID(From)
}

begin
  # 取引情報一覧を取得します。
  result = api_instance.get_transaction(contract_id, opts)
  p result
rescue OpenapiClient::ApiError => e
  puts "Error when calling DefaultApi->get_transaction: #{e}"
end
```

#### Using the get_transaction_with_http_info variant

This returns an Array which contains the response data, status code and headers.

> <Array(<Array<GetTransactionItem>>, Integer, Hash)> get_transaction_with_http_info(contract_id, opts)

```ruby
begin
  # 取引情報一覧を取得します。
  data, status_code, headers = api_instance.get_transaction_with_http_info(contract_id, opts)
  p status_code # => 2xx
  p headers # => { ... }
  p data # => <Array<GetTransactionItem>>
rescue OpenapiClient::ApiError => e
  puts "Error when calling DefaultApi->get_transaction_with_http_info: #{e}"
end
```

### Parameters

| Name | Type | Description | Notes |
| ---- | ---- | ----------- | ----- |
| **contract_id** | **String** | 契約id |  |
| **sum_date** | **String** | 締め日 [YYYY-MM-DD] | [optional] |
| **with_layaway** | [**WithEnum**](.md) | 取置き情報を付加するか(付加する場合はall, しない場合はnone) | [optional][default to &#39;none&#39;] |
| **limit** | **Integer** | 一度に返すアイテム数 (上限 1000) | [optional] |
| **page** | **Integer** | ページ | [optional] |
| **upd_date_time_to** | **String** | 更新日時(To)：登録時・更新時の日時。[YYYY-MM-DDThh:mm:ssTZD] | [optional] |
| **upd_date_time_from** | **String** | 更新日時(From)：登録時・更新時の日時。[YYYY-MM-DDThh:mm:ssTZD] | [optional] |
| **customer_code** | **String** | 会員コード | [optional] |
| **transaction_head_division** | [**TransactionHeadDivision**](.md) |  | [optional] |
| **sort** | [**Sort**](.md) |  | [optional] |
| **terminal_tran_date_time_from** | **String** | 端末取引日時(From)：端末で設定された取引日時。[YYYY-MM-DDThh:mm:ssTZD] | [optional] |
| **terminal_tran_date_time_to** | **String** | 端末取引日時(To)：端末で設定された取引日時。[YYYY-MM-DDThh:mm:ssTZD] | [optional] |
| **store_id** | **Integer** | 店舗ID | [optional] |
| **transaction_head_id_to** | **String** | 取引ID(To) | [optional] |
| **transaction_head_id_from** | **String** | 取引ID(From) | [optional] |

### Return type

[**Array&lt;GetTransactionItem&gt;**](GetTransactionItem.md)

### Authorization

[AccessToken](../README.md#AccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json


## get_transaction_id

> <GetTransactionId> get_transaction_id(contract_id, transaction_id, opts)

取引情報を取得します。

### Examples

```ruby
require 'time'
require 'openapi_client'
# setup authorization
OpenapiClient.configure do |config|
  # Configure Bearer authorization: AccessToken
  config.access_token = 'YOUR_BEARER_TOKEN'
end

api_instance = OpenapiClient::DefaultApi.new
contract_id = 'contract_id_example' # String | 契約id
transaction_id = 'transaction_id_example' # String | 取引id
opts = {
  with_coupons: OpenapiClient::WithEnum::ALL, # WithEnum | クーポン情報を付加するか(付加する場合はall, しない場合はnone)
  with_details: OpenapiClient::WithDetails::ALL, # WithDetails | 取引明細情報を付加するか(全項目付加する場合はall, 一部項目を付加する場合はsummary, しない場合はnone)
  with_store: OpenapiClient::WithEnum::ALL, # WithEnum | 店舗情報を付加するか(付加する場合はall, しない場合はnone)
  with_customer: OpenapiClient::WithEnum::ALL # WithEnum | 会員情報を付加するか(付加する場合はall, しない場合はnone)
}

begin
  # 取引情報を取得します。
  result = api_instance.get_transaction_id(contract_id, transaction_id, opts)
  p result
rescue OpenapiClient::ApiError => e
  puts "Error when calling DefaultApi->get_transaction_id: #{e}"
end
```

#### Using the get_transaction_id_with_http_info variant

This returns an Array which contains the response data, status code and headers.

> <Array(<GetTransactionId>, Integer, Hash)> get_transaction_id_with_http_info(contract_id, transaction_id, opts)

```ruby
begin
  # 取引情報を取得します。
  data, status_code, headers = api_instance.get_transaction_id_with_http_info(contract_id, transaction_id, opts)
  p status_code # => 2xx
  p headers # => { ... }
  p data # => <GetTransactionId>
rescue OpenapiClient::ApiError => e
  puts "Error when calling DefaultApi->get_transaction_id_with_http_info: #{e}"
end
```

### Parameters

| Name | Type | Description | Notes |
| ---- | ---- | ----------- | ----- |
| **contract_id** | **String** | 契約id |  |
| **transaction_id** | **String** | 取引id |  |
| **with_coupons** | [**WithEnum**](.md) | クーポン情報を付加するか(付加する場合はall, しない場合はnone) | [optional][default to &#39;none&#39;] |
| **with_details** | [**WithDetails**](.md) | 取引明細情報を付加するか(全項目付加する場合はall, 一部項目を付加する場合はsummary, しない場合はnone) | [optional][default to &#39;none&#39;] |
| **with_store** | [**WithEnum**](.md) | 店舗情報を付加するか(付加する場合はall, しない場合はnone) | [optional][default to &#39;none&#39;] |
| **with_customer** | [**WithEnum**](.md) | 会員情報を付加するか(付加する場合はall, しない場合はnone) | [optional][default to &#39;none&#39;] |

### Return type

[**GetTransactionId**](GetTransactionId.md)

### Authorization

[AccessToken](../README.md#AccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json


## post_create_coupons

> <Coupon> post_create_coupons(contract_id, post_create_coupons)



クーポンを登録します。 

### Examples

```ruby
require 'time'
require 'openapi_client'
# setup authorization
OpenapiClient.configure do |config|
  # Configure Bearer authorization: AccessToken
  config.access_token = 'YOUR_BEARER_TOKEN'
end

api_instance = OpenapiClient::DefaultApi.new
contract_id = 'contract_id_example' # String | 契約id
post_create_coupons = OpenapiClient::PostCreateCoupons.new({coupon_name: 'coupon_name_example', serial_number: 'serial_number_example', award_type: OpenapiClient::AwardType::DiscountByFixed, award_value: 'award_value_example', apply_condition_division: OpenapiClient::ApplyConditionDivision::Always}) # PostCreateCoupons | 

begin
  
  result = api_instance.post_create_coupons(contract_id, post_create_coupons)
  p result
rescue OpenapiClient::ApiError => e
  puts "Error when calling DefaultApi->post_create_coupons: #{e}"
end
```

#### Using the post_create_coupons_with_http_info variant

This returns an Array which contains the response data, status code and headers.

> <Array(<Coupon>, Integer, Hash)> post_create_coupons_with_http_info(contract_id, post_create_coupons)

```ruby
begin
  
  data, status_code, headers = api_instance.post_create_coupons_with_http_info(contract_id, post_create_coupons)
  p status_code # => 2xx
  p headers # => { ... }
  p data # => <Coupon>
rescue OpenapiClient::ApiError => e
  puts "Error when calling DefaultApi->post_create_coupons_with_http_info: #{e}"
end
```

### Parameters

| Name | Type | Description | Notes |
| ---- | ---- | ----------- | ----- |
| **contract_id** | **String** | 契約id |  |
| **post_create_coupons** | [**PostCreateCoupons**](PostCreateCoupons.md) |  |  |

### Return type

[**Coupon**](Coupon.md)

### Authorization

[AccessToken](../README.md#AccessToken)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json


## update_customer_point

> <UpdateCustomerPointResponse> update_customer_point(contract_id, customer_id, opts)

会員ポイント更新

会員ポイント情報を更新します。 ポイントおよびマイルは、入力された値と同じになるよう更新します。

### Examples

```ruby
require 'time'
require 'openapi_client'
# setup authorization
OpenapiClient.configure do |config|
  # Configure Bearer authorization: AccessToken
  config.access_token = 'YOUR_BEARER_TOKEN'
end

api_instance = OpenapiClient::DefaultApi.new
contract_id = 'contract_id_example' # String | 契約id
customer_id = 'customer_id_example' # String | 顧客id
opts = {
  update_customer_point_request: OpenapiClient::UpdateCustomerPointRequest.new # UpdateCustomerPointRequest | 
}

begin
  # 会員ポイント更新
  result = api_instance.update_customer_point(contract_id, customer_id, opts)
  p result
rescue OpenapiClient::ApiError => e
  puts "Error when calling DefaultApi->update_customer_point: #{e}"
end
```

#### Using the update_customer_point_with_http_info variant

This returns an Array which contains the response data, status code and headers.

> <Array(<UpdateCustomerPointResponse>, Integer, Hash)> update_customer_point_with_http_info(contract_id, customer_id, opts)

```ruby
begin
  # 会員ポイント更新
  data, status_code, headers = api_instance.update_customer_point_with_http_info(contract_id, customer_id, opts)
  p status_code # => 2xx
  p headers # => { ... }
  p data # => <UpdateCustomerPointResponse>
rescue OpenapiClient::ApiError => e
  puts "Error when calling DefaultApi->update_customer_point_with_http_info: #{e}"
end
```

### Parameters

| Name | Type | Description | Notes |
| ---- | ---- | ----------- | ----- |
| **contract_id** | **String** | 契約id |  |
| **customer_id** | **String** | 顧客id |  |
| **update_customer_point_request** | [**UpdateCustomerPointRequest**](UpdateCustomerPointRequest.md) |  | [optional] |

### Return type

[**UpdateCustomerPointResponse**](UpdateCustomerPointResponse.md)

### Authorization

[AccessToken](../README.md#AccessToken)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json


## update_customer_point_relative

> <UpdateCustomerPointResponse> update_customer_point_relative(contract_id, customer_id, opts)



会員ポイント情報を更新します。 ポイントおよびマイルは、現在の値に対し、入力された値を加算（入力値が負の場合は減算）した値に更新します。 現在値参照にあたりポイント有効期限を参照し、ポイント残高がありかつ期限が切れていれば期限切れ分のポイント失効処理を行ってから加算を行います（失効で0になっているので減算はエラー）。

### Examples

```ruby
require 'time'
require 'openapi_client'
# setup authorization
OpenapiClient.configure do |config|
  # Configure Bearer authorization: AccessToken
  config.access_token = 'YOUR_BEARER_TOKEN'
end

api_instance = OpenapiClient::DefaultApi.new
contract_id = 'contract_id_example' # String | 契約id
customer_id = 'customer_id_example' # String | 顧客id
opts = {
  update_customer_point_request: OpenapiClient::UpdateCustomerPointRequest.new # UpdateCustomerPointRequest | 
}

begin
  
  result = api_instance.update_customer_point_relative(contract_id, customer_id, opts)
  p result
rescue OpenapiClient::ApiError => e
  puts "Error when calling DefaultApi->update_customer_point_relative: #{e}"
end
```

#### Using the update_customer_point_relative_with_http_info variant

This returns an Array which contains the response data, status code and headers.

> <Array(<UpdateCustomerPointResponse>, Integer, Hash)> update_customer_point_relative_with_http_info(contract_id, customer_id, opts)

```ruby
begin
  
  data, status_code, headers = api_instance.update_customer_point_relative_with_http_info(contract_id, customer_id, opts)
  p status_code # => 2xx
  p headers # => { ... }
  p data # => <UpdateCustomerPointResponse>
rescue OpenapiClient::ApiError => e
  puts "Error when calling DefaultApi->update_customer_point_relative_with_http_info: #{e}"
end
```

### Parameters

| Name | Type | Description | Notes |
| ---- | ---- | ----------- | ----- |
| **contract_id** | **String** | 契約id |  |
| **customer_id** | **String** | 顧客id |  |
| **update_customer_point_request** | [**UpdateCustomerPointRequest**](UpdateCustomerPointRequest.md) |  | [optional] |

### Return type

[**UpdateCustomerPointResponse**](UpdateCustomerPointResponse.md)

### Authorization

[AccessToken](../README.md#AccessToken)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json


## update_customers

> <CustomersResponseOfCreate> update_customers(contract_id, customer_id, opts)



### Examples

```ruby
require 'time'
require 'openapi_client'
# setup authorization
OpenapiClient.configure do |config|
  # Configure Bearer authorization: AccessToken
  config.access_token = 'YOUR_BEARER_TOKEN'
end

api_instance = OpenapiClient::DefaultApi.new
contract_id = 'contract_id_example' # String | 契約id
customer_id = 'customer_id_example' # String | 顧客id
opts = {
  patch_customers: OpenapiClient::PatchCustomers.new # PatchCustomers | 
}

begin
  
  result = api_instance.update_customers(contract_id, customer_id, opts)
  p result
rescue OpenapiClient::ApiError => e
  puts "Error when calling DefaultApi->update_customers: #{e}"
end
```

#### Using the update_customers_with_http_info variant

This returns an Array which contains the response data, status code and headers.

> <Array(<CustomersResponseOfCreate>, Integer, Hash)> update_customers_with_http_info(contract_id, customer_id, opts)

```ruby
begin
  
  data, status_code, headers = api_instance.update_customers_with_http_info(contract_id, customer_id, opts)
  p status_code # => 2xx
  p headers # => { ... }
  p data # => <CustomersResponseOfCreate>
rescue OpenapiClient::ApiError => e
  puts "Error when calling DefaultApi->update_customers_with_http_info: #{e}"
end
```

### Parameters

| Name | Type | Description | Notes |
| ---- | ---- | ----------- | ----- |
| **contract_id** | **String** | 契約id |  |
| **customer_id** | **String** | 顧客id |  |
| **patch_customers** | [**PatchCustomers**](PatchCustomers.md) |  | [optional] |

### Return type

[**CustomersResponseOfCreate**](CustomersResponseOfCreate.md)

### Authorization

[AccessToken](../README.md#AccessToken)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json


## update_store

> <UpdateStoreResponse> update_store(contract_id, store_id, opts)

店舗更新

店舗情報を更新します。 

### Examples

```ruby
require 'time'
require 'openapi_client'
# setup authorization
OpenapiClient.configure do |config|
  # Configure Bearer authorization: AccessToken
  config.access_token = 'YOUR_BEARER_TOKEN'
end

api_instance = OpenapiClient::DefaultApi.new
contract_id = 'contract_id_example' # String | 契約id
store_id = 'store_id_example' # String | 店舗id
opts = {
  update_store_request: OpenapiClient::UpdateStoreRequest.new # UpdateStoreRequest | 
}

begin
  # 店舗更新
  result = api_instance.update_store(contract_id, store_id, opts)
  p result
rescue OpenapiClient::ApiError => e
  puts "Error when calling DefaultApi->update_store: #{e}"
end
```

#### Using the update_store_with_http_info variant

This returns an Array which contains the response data, status code and headers.

> <Array(<UpdateStoreResponse>, Integer, Hash)> update_store_with_http_info(contract_id, store_id, opts)

```ruby
begin
  # 店舗更新
  data, status_code, headers = api_instance.update_store_with_http_info(contract_id, store_id, opts)
  p status_code # => 2xx
  p headers # => { ... }
  p data # => <UpdateStoreResponse>
rescue OpenapiClient::ApiError => e
  puts "Error when calling DefaultApi->update_store_with_http_info: #{e}"
end
```

### Parameters

| Name | Type | Description | Notes |
| ---- | ---- | ----------- | ----- |
| **contract_id** | **String** | 契約id |  |
| **store_id** | **String** | 店舗id |  |
| **update_store_request** | [**UpdateStoreRequest**](UpdateStoreRequest.md) |  | [optional] |

### Return type

[**UpdateStoreResponse**](UpdateStoreResponse.md)

### Authorization

[AccessToken](../README.md#AccessToken)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json


## update_transaction_for_customer

> <GetTransactionId> update_transaction_for_customer(contract_id, transaction_id, opts)

取引会員更新

取引の会員情報を更新します。 

### Examples

```ruby
require 'time'
require 'openapi_client'
# setup authorization
OpenapiClient.configure do |config|
  # Configure Bearer authorization: AccessToken
  config.access_token = 'YOUR_BEARER_TOKEN'
end

api_instance = OpenapiClient::DefaultApi.new
contract_id = 'contract_id_example' # String | 契約id
transaction_id = 'transaction_id_example' # String | 取引id
opts = {
  update_transaction_for_customer_request: OpenapiClient::UpdateTransactionForCustomerRequest.new # UpdateTransactionForCustomerRequest | 
}

begin
  # 取引会員更新
  result = api_instance.update_transaction_for_customer(contract_id, transaction_id, opts)
  p result
rescue OpenapiClient::ApiError => e
  puts "Error when calling DefaultApi->update_transaction_for_customer: #{e}"
end
```

#### Using the update_transaction_for_customer_with_http_info variant

This returns an Array which contains the response data, status code and headers.

> <Array(<GetTransactionId>, Integer, Hash)> update_transaction_for_customer_with_http_info(contract_id, transaction_id, opts)

```ruby
begin
  # 取引会員更新
  data, status_code, headers = api_instance.update_transaction_for_customer_with_http_info(contract_id, transaction_id, opts)
  p status_code # => 2xx
  p headers # => { ... }
  p data # => <GetTransactionId>
rescue OpenapiClient::ApiError => e
  puts "Error when calling DefaultApi->update_transaction_for_customer_with_http_info: #{e}"
end
```

### Parameters

| Name | Type | Description | Notes |
| ---- | ---- | ----------- | ----- |
| **contract_id** | **String** | 契約id |  |
| **transaction_id** | **String** | 取引id |  |
| **update_transaction_for_customer_request** | [**UpdateTransactionForCustomerRequest**](UpdateTransactionForCustomerRequest.md) |  | [optional] |

### Return type

[**GetTransactionId**](GetTransactionId.md)

### Authorization

[AccessToken](../README.md#AccessToken)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

