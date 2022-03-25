# OpenapiClient::Coupon

## Properties

| Name | Type | Description | Notes |
| ---- | ---- | ----------- | ----- |
| **coupon_id** | **String** |  |  |
| **coupon_name** | **String** |  | [optional] |
| **coupon_division** | [**CouponDivision**](CouponDivision.md) |  | [optional] |
| **serial_number** | **String** |  |  |
| **summary** | **String** |  | [optional] |
| **award_type** | [**AwardType**](AwardType.md) |  | [optional] |
| **award_value** | **String** |  | [optional] |
| **apply_condition_division** | [**ApplyConditionDivision**](ApplyConditionDivision.md) |  | [optional] |
| **min_target_price** | **String** |  | [optional] |
| **max_target_price** | **String** |  | [optional] |
| **start_date** | **String** |  | [optional] |
| **end_date** | **String** |  | [optional] |
| **ins_date_time** | **String** |  | [optional] |
| **upd_date_time** | **String** |  | [optional] |

## Example

```ruby
require 'openapi_client'

instance = OpenapiClient::Coupon.new(
  coupon_id: null,
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
  end_date: null,
  ins_date_time: null,
  upd_date_time: null
)
```

