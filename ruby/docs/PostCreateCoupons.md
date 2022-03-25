# OpenapiClient::PostCreateCoupons

## Properties

| Name | Type | Description | Notes |
| ---- | ---- | ----------- | ----- |
| **coupon_name** | **String** |  |  |
| **coupon_division** | [**CouponDivision**](CouponDivision.md) |  | [optional] |
| **serial_number** | **String** |  |  |
| **summary** | **String** |  | [optional] |
| **award_type** | [**AwardType**](AwardType.md) |  |  |
| **award_value** | **String** |  |  |
| **apply_condition_division** | [**ApplyConditionDivision**](ApplyConditionDivision.md) |  |  |
| **min_target_price** | **String** |  | [optional] |
| **max_target_price** | **String** |  | [optional] |
| **start_date** | **String** |  | [optional] |
| **end_date** | **String** |  | [optional] |

## Example

```ruby
require 'openapi_client'

instance = OpenapiClient::PostCreateCoupons.new(
  coupon_name: null,
  coupon_division: null,
  serial_number: null,
  summary: null,
  award_type: null,
  award_value: null,
  apply_condition_division: null,
  min_target_price: null,
  max_target_price: null,
  start_date: null,
  end_date: null
)
```

