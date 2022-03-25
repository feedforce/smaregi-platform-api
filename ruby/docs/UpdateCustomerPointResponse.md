# OpenapiClient::UpdateCustomerPointResponse

## Properties

| Name | Type | Description | Notes |
| ---- | ---- | ----------- | ----- |
| **customer_id** | **String** | 会員ID | [optional] |
| **mile** | **String** | マイル | [optional] |
| **point** | **String** | ポイント | [optional] |
| **point_expire_date** | **String** | ポイント失効予定日：会員必須項目設定で必須項目に設定されている場合必須 | [optional] |
| **upd_date_time** | **String** | 更新日時：登録時・更新時の日時。[YYYY-MM-DDThh:mm:ssTZD] | [optional] |

## Example

```ruby
require 'openapi_client'

instance = OpenapiClient::UpdateCustomerPointResponse.new(
  customer_id: null,
  mile: null,
  point: null,
  point_expire_date: null,
  upd_date_time: null
)
```

