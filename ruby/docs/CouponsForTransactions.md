# OpenapiClient::CouponsForTransactions

## Properties

| Name | Type | Description | Notes |
| ---- | ---- | ----------- | ----- |
| **transaction_coupon_id** | **String** |  | [optional] |
| **terminal_tran_coupon_id** | **String** |  | [optional] |
| **coupon_id** | **String** |  |  |
| **coupon_name** | **String** |  | [optional] |
| **coupon_division** | [**CouponDivision**](CouponDivision.md) |  | [optional] |
| **serial_number** | **String** |  | [optional] |
| **award_type** | [**AwardType**](AwardType.md) |  | [optional] |
| **award_value** | **String** |  | [optional] |
| **discount_price** | **String** |  | [optional] |

## Example

```ruby
require 'openapi_client'

instance = OpenapiClient::CouponsForTransactions.new(
  transaction_coupon_id: null,
  terminal_tran_coupon_id: null,
  coupon_id: null,
  coupon_name: null,
  coupon_division: null,
  serial_number: null,
  award_type: null,
  award_value: null,
  discount_price: null
)
```

