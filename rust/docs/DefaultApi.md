# \DefaultApi

All URIs are relative to *https://api.smaregi.dev*

Method | HTTP request | Description
------------- | ------------- | -------------
[**create_customers**](DefaultApi.md#create_customers) | **post** /{contract_id}/pos/customers | 会員情報を登録します。
[**delete_coupons**](DefaultApi.md#delete_coupons) | **delete** /{contract_id}/pos/coupons/{coupon_id} | 
[**get_coupons**](DefaultApi.md#get_coupons) | **get** /{contract_id}/pos/coupons | Your GET endpoint
[**get_customer_point_list**](DefaultApi.md#get_customer_point_list) | **get** /{contract_id}/pos/customers/point | 会員ポイント一覧取得
[**get_customers**](DefaultApi.md#get_customers) | **get** /{contract_id}/pos/customers | 会員情報一覧を取得します。
[**get_layaway_by_id**](DefaultApi.md#get_layaway_by_id) | **get** /{contract_id}/pos/transactions/layaways/{layaway_id} | Your GET endpoint
[**get_layaway_list**](DefaultApi.md#get_layaway_list) | **get** /{contract_id}/pos/transactions/layaways | 取置き一覧を取得します。
[**get_stores**](DefaultApi.md#get_stores) | **get** /{contract_id}/pos/stores | 店舗一覧取得
[**get_transaction**](DefaultApi.md#get_transaction) | **get** /{contract_id}/pos/transactions | 取引情報一覧を取得します。
[**get_transaction_id**](DefaultApi.md#get_transaction_id) | **get** /{contract_id}/pos/transactions/{transaction_id} | 取引情報を取得します。
[**post_create_coupons**](DefaultApi.md#post_create_coupons) | **post** /{contract_id}/pos/coupons | 
[**update_customer_point**](DefaultApi.md#update_customer_point) | **patch** /{contract_id}/pos/customers/{customer_id}/point | 会員ポイント更新
[**update_customer_point_relative**](DefaultApi.md#update_customer_point_relative) | **post** /{contract_id}/pos/customers/{customer_id}/point/add | 
[**update_customers**](DefaultApi.md#update_customers) | **patch** /{contract_id}/pos/customers/{customer_id} | 
[**update_store**](DefaultApi.md#update_store) | **patch** /{contract_id}/pos/stores/{store_id} | 店舗更新



## create_customers

> crate::models::CustomersResponseOfCreate create_customers(contract_id, create_customers)
会員情報を登録します。

### Parameters


Name | Type | Description  | Required | Notes
------------- | ------------- | ------------- | ------------- | -------------
**contract_id** | **String** | 契約id | [required] |
**create_customers** | Option<[**CreateCustomers**](CreateCustomers.md)> |  |  |

### Return type

[**crate::models::CustomersResponseOfCreate**](CustomersResponseOfCreate.md)

### Authorization

[AccessToken](../README.md#AccessToken)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)


## delete_coupons

> delete_coupons(contract_id, coupon_id)


指定されたクーポンを削除します。 

### Parameters


Name | Type | Description  | Required | Notes
------------- | ------------- | ------------- | ------------- | -------------
**contract_id** | **String** | 契約id | [required] |
**coupon_id** | **String** | クーポンid | [required] |

### Return type

 (empty response body)

### Authorization

[AccessToken](../README.md#AccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)


## get_coupons

> Vec<crate::models::Coupon> get_coupons(contract_id)
Your GET endpoint

クーポンの一覧を取得します。

### Parameters


Name | Type | Description  | Required | Notes
------------- | ------------- | ------------- | ------------- | -------------
**contract_id** | **String** | 契約id | [required] |

### Return type

[**Vec<crate::models::Coupon>**](coupon.md)

### Authorization

[AccessToken](../README.md#AccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)


## get_customer_point_list

> Vec<crate::models::GetCustomerPointListItem> get_customer_point_list(contract_id, limit, page, customer_id)
会員ポイント一覧取得

会員ポイント情報一覧を取得します。 参照にあたりポイント有効期限を参照し、ポイント残高がありかつ期限が切れていれば期限切れ分のポイント失効処理を行ってから返します。

### Parameters


Name | Type | Description  | Required | Notes
------------- | ------------- | ------------- | ------------- | -------------
**contract_id** | **String** | 契約id | [required] |
**limit** | Option<**i32**> | 一度に返すアイテム数 (上限 1000) |  |
**page** | Option<**i32**> | ページ |  |
**customer_id** | Option<**String**> | 顧客id |  |

### Return type

[**Vec<crate::models::GetCustomerPointListItem>**](getCustomerPointListItem.md)

### Authorization

[AccessToken](../README.md#AccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)


## get_customers

> Vec<crate::models::GetCustomersItem> get_customers(contract_id, limit, page, customer_code)
会員情報一覧を取得します。

### Parameters


Name | Type | Description  | Required | Notes
------------- | ------------- | ------------- | ------------- | -------------
**contract_id** | **String** | 契約id | [required] |
**limit** | Option<**i32**> | 一度に返すアイテム数 (上限 1000) |  |
**page** | Option<**i32**> | ページ |  |
**customer_code** | Option<**String**> | 顧客コード |  |

### Return type

[**Vec<crate::models::GetCustomersItem>**](getCustomersItem.md)

### Authorization

[AccessToken](../README.md#AccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)


## get_layaway_by_id

> crate::models::GetLayawayById get_layaway_by_id(contract_id, layaway_id, with_details, with_store, with_customer)
Your GET endpoint

### Parameters


Name | Type | Description  | Required | Notes
------------- | ------------- | ------------- | ------------- | -------------
**contract_id** | **String** | 契約id | [required] |
**layaway_id** | **String** |  | [required] |
**with_details** | Option<[**crate::models::WithDetails**](.md)> | 取引明細情報を付加するか(全項目付加する場合はall, 一部項目を付加する場合はsummary, しない場合はnone) |  |
**with_store** | Option<[**crate::models::WithEnum**](.md)> | 店舗情報を付加するか(付加する場合はall, しない場合はnone) |  |
**with_customer** | Option<[**crate::models::WithEnum**](.md)> | 会員情報を付加するか(付加する場合はall, しない場合はnone) |  |

### Return type

[**crate::models::GetLayawayById**](getLayawayById.md)

### Authorization

[AccessToken](../README.md#AccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)


## get_layaway_list

> Vec<crate::models::GetLayawayListItem> get_layaway_list(contract_id, sum_date, with_layaway)
取置き一覧を取得します。

### Parameters


Name | Type | Description  | Required | Notes
------------- | ------------- | ------------- | ------------- | -------------
**contract_id** | **String** | 契約id | [required] |
**sum_date** | Option<**String**> | 締め日 [YYYY-MM-DD] |  |
**with_layaway** | Option<[**crate::models::WithEnum**](.md)> | 取置き情報を付加するか(付加する場合はall, しない場合はnone) |  |

### Return type

[**Vec<crate::models::GetLayawayListItem>**](getLayawayListItem.md)

### Authorization

[AccessToken](../README.md#AccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)


## get_stores

> Vec<crate::models::GetStoresResponseItem> get_stores(contract_id, limit, with_point_condition)
店舗一覧取得

店舗情報一覧を取得します。 

### Parameters


Name | Type | Description  | Required | Notes
------------- | ------------- | ------------- | ------------- | -------------
**contract_id** | **String** | 契約id | [required] |
**limit** | Option<**i32**> | 一度に返すアイテム数 (上限 1000) |  |
**with_point_condition** | Option<[**crate::models::WithEnum**](.md)> | ポイント情報を付加するか(付加する場合はall, しない場合はnone) |  |

### Return type

[**Vec<crate::models::GetStoresResponseItem>**](getStoresResponseItem.md)

### Authorization

[AccessToken](../README.md#AccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)


## get_transaction

> Vec<crate::models::GetTransactionItem> get_transaction(contract_id, sum_date, with_layaway, limit, page, upd_date_time_to, upd_date_time_from, customer_code, transaction_head_division, sort, terminal_tran_date_time_from, terminal_tran_date_time_to)
取引情報一覧を取得します。

### Parameters


Name | Type | Description  | Required | Notes
------------- | ------------- | ------------- | ------------- | -------------
**contract_id** | **String** | 契約id | [required] |
**sum_date** | Option<**String**> | 締め日 [YYYY-MM-DD] |  |
**with_layaway** | Option<[**crate::models::WithEnum**](.md)> | 取置き情報を付加するか(付加する場合はall, しない場合はnone) |  |
**limit** | Option<**i32**> | 一度に返すアイテム数 (上限 1000) |  |
**page** | Option<**i32**> | ページ |  |
**upd_date_time_to** | Option<**String**> | 更新日時(To)：登録時・更新時の日時。[YYYY-MM-DDThh:mm:ssTZD] |  |
**upd_date_time_from** | Option<**String**> | 更新日時(From)：登録時・更新時の日時。[YYYY-MM-DDThh:mm:ssTZD] |  |
**customer_code** | Option<**String**> | 会員コード |  |
**transaction_head_division** | Option<[**crate::models::TransactionHeadDivision**](.md)> |  |  |
**sort** | Option<[**crate::models::Sort**](.md)> |  |  |
**terminal_tran_date_time_from** | Option<**String**> | 端末取引日時(From)：端末で設定された取引日時。[YYYY-MM-DDThh:mm:ssTZD] |  |
**terminal_tran_date_time_to** | Option<**String**> | 端末取引日時(To)：端末で設定された取引日時。[YYYY-MM-DDThh:mm:ssTZD] |  |

### Return type

[**Vec<crate::models::GetTransactionItem>**](getTransactionItem.md)

### Authorization

[AccessToken](../README.md#AccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)


## get_transaction_id

> crate::models::GetTransactionId get_transaction_id(contract_id, transaction_id, with_coupons, with_details, with_store, with_customer)
取引情報を取得します。

### Parameters


Name | Type | Description  | Required | Notes
------------- | ------------- | ------------- | ------------- | -------------
**contract_id** | **String** | 契約id | [required] |
**transaction_id** | **String** | 取引id | [required] |
**with_coupons** | Option<[**crate::models::WithEnum**](.md)> | クーポン情報を付加するか(付加する場合はall, しない場合はnone) |  |
**with_details** | Option<[**crate::models::WithDetails**](.md)> | 取引明細情報を付加するか(全項目付加する場合はall, 一部項目を付加する場合はsummary, しない場合はnone) |  |
**with_store** | Option<[**crate::models::WithEnum**](.md)> | 店舗情報を付加するか(付加する場合はall, しない場合はnone) |  |
**with_customer** | Option<[**crate::models::WithEnum**](.md)> | 会員情報を付加するか(付加する場合はall, しない場合はnone) |  |

### Return type

[**crate::models::GetTransactionId**](getTransactionId.md)

### Authorization

[AccessToken](../README.md#AccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)


## post_create_coupons

> crate::models::Coupon post_create_coupons(contract_id, post_create_coupons)


クーポンを登録します。 

### Parameters


Name | Type | Description  | Required | Notes
------------- | ------------- | ------------- | ------------- | -------------
**contract_id** | **String** | 契約id | [required] |
**post_create_coupons** | [**PostCreateCoupons**](PostCreateCoupons.md) |  | [required] |

### Return type

[**crate::models::Coupon**](coupon.md)

### Authorization

[AccessToken](../README.md#AccessToken)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)


## update_customer_point

> crate::models::UpdateCustomerPointResponse update_customer_point(contract_id, customer_id, update_customer_point_request)
会員ポイント更新

会員ポイント情報を更新します。 ポイントおよびマイルは、入力された値と同じになるよう更新します。

### Parameters


Name | Type | Description  | Required | Notes
------------- | ------------- | ------------- | ------------- | -------------
**contract_id** | **String** | 契約id | [required] |
**customer_id** | **String** | 顧客id | [required] |
**update_customer_point_request** | Option<[**UpdateCustomerPointRequest**](UpdateCustomerPointRequest.md)> |  |  |

### Return type

[**crate::models::UpdateCustomerPointResponse**](updateCustomerPointResponse.md)

### Authorization

[AccessToken](../README.md#AccessToken)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)


## update_customer_point_relative

> crate::models::UpdateCustomerPointResponse update_customer_point_relative(contract_id, customer_id, update_customer_point_request)


会員ポイント情報を更新します。 ポイントおよびマイルは、現在の値に対し、入力された値を加算（入力値が負の場合は減算）した値に更新します。 現在値参照にあたりポイント有効期限を参照し、ポイント残高がありかつ期限が切れていれば期限切れ分のポイント失効処理を行ってから加算を行います（失効で0になっているので減算はエラー）。

### Parameters


Name | Type | Description  | Required | Notes
------------- | ------------- | ------------- | ------------- | -------------
**contract_id** | **String** | 契約id | [required] |
**customer_id** | **String** | 顧客id | [required] |
**update_customer_point_request** | Option<[**UpdateCustomerPointRequest**](UpdateCustomerPointRequest.md)> |  |  |

### Return type

[**crate::models::UpdateCustomerPointResponse**](updateCustomerPointResponse.md)

### Authorization

[AccessToken](../README.md#AccessToken)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)


## update_customers

> crate::models::CustomersResponseOfCreate update_customers(contract_id, customer_id, patch_customers)


### Parameters


Name | Type | Description  | Required | Notes
------------- | ------------- | ------------- | ------------- | -------------
**contract_id** | **String** | 契約id | [required] |
**customer_id** | **String** | 顧客id | [required] |
**patch_customers** | Option<[**PatchCustomers**](PatchCustomers.md)> |  |  |

### Return type

[**crate::models::CustomersResponseOfCreate**](CustomersResponseOfCreate.md)

### Authorization

[AccessToken](../README.md#AccessToken)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)


## update_store

> crate::models::UpdateStoreResponse update_store(contract_id, store_id, update_store_request)
店舗更新

店舗情報を更新します。 

### Parameters


Name | Type | Description  | Required | Notes
------------- | ------------- | ------------- | ------------- | -------------
**contract_id** | **String** | 契約id | [required] |
**store_id** | **String** | 店舗id | [required] |
**update_store_request** | Option<[**UpdateStoreRequest**](UpdateStoreRequest.md)> |  |  |

### Return type

[**crate::models::UpdateStoreResponse**](updateStoreResponse.md)

### Authorization

[AccessToken](../README.md#AccessToken)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

