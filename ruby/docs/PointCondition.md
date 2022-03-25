# OpenapiClient::PointCondition

## Properties

| Name | Type | Description | Notes |
| ---- | ---- | ----------- | ----- |
| **store_id** | **String** |  | [optional] |
| **point_use_division** | [**PointUseDivision**](PointUseDivision.md) |  | [optional] |
| **spend_rate** | **String** |  | [optional] |
| **point_giving_unit_price** | **String** |  | [optional] |
| **point_giving_unit** | **String** |  | [optional] |
| **point_giving_division** | [**PointGivingDivision**](PointGivingDivision.md) |  | [optional] |
| **point_use_unit** | **String** |  | [optional] |
| **point_spend_division** | [**PointSpendDivision**](PointSpendDivision.md) |  | [optional] |
| **point_spend_limit_division** | [**PointSpendLimitDivision**](PointSpendLimitDivision.md) |  | [optional] |
| **expire_division** | [**ExpireDivision**](ExpireDivision.md) |  | [optional] |
| **expire_limit** | **String** |  | [optional] |
| **mileage_division** | [**MileageDivision**](MileageDivision.md) |  | [optional] |

## Example

```ruby
require 'openapi_client'

instance = OpenapiClient::PointCondition.new(
  store_id: null,
  point_use_division: null,
  spend_rate: null,
  point_giving_unit_price: null,
  point_giving_unit: null,
  point_giving_division: null,
  point_use_unit: null,
  point_spend_division: null,
  point_spend_limit_division: null,
  expire_division: null,
  expire_limit: null,
  mileage_division: null
)
```

