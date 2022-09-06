# OpenapiClient::UpdateTransactionForCustomerRequest

## Properties

| Name | Type | Description | Notes |
| ---- | ---- | ----------- | ----- |
| **customer_id** | **String** |  | [optional] |
| **customer_code** | **String** |  | [optional] |
| **point_update_division** | [**PointUpdateDivision**](PointUpdateDivision.md) |  | [optional] |

## Example

```ruby
require 'openapi_client'

instance = OpenapiClient::UpdateTransactionForCustomerRequest.new(
  customer_id: null,
  customer_code: null,
  point_update_division: null
)
```

