# OpenapiClient::UpdateCustomerPointRequest

## Properties

| Name | Type | Description | Notes |
| ---- | ---- | ----------- | ----- |
| **mile** | **String** | マイル | [optional] |
| **point** | **String** | ポイント | [optional] |
| **point_expire_date** | **String** | ポイント失効予定日：指定しない場合ポイント失効日は更新されません。 | [optional] |

## Example

```ruby
require 'openapi_client'

instance = OpenapiClient::UpdateCustomerPointRequest.new(
  mile: null,
  point: null,
  point_expire_date: null
)
```

