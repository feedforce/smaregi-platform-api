# OpenapiClient::TransactionDetail

## Properties

| Name | Type | Description | Notes |
| ---- | ---- | ----------- | ----- |
| **transaction_head_id** | **String** |  |  |
| **transaction_detail_id** | **String** |  |  |
| **parent_transaction_detail_id** | **String** |  | [optional] |
| **transaction_detail_division** | [**TransactionDetailDivision**](TransactionDetailDivision.md) |  |  |
| **product_id** | **String** |  | [optional] |
| **product_code** | **String** |  | [optional] |
| **product_name** | **String** |  | [optional] |
| **print_receipt_product_name** | **String** |  | [optional] |
| **color** | **String** |  | [optional] |
| **size** | **String** |  | [optional] |
| **group_code** | **String** |  | [optional] |
| **tax_division** | [**TaxDivision**](TaxDivision.md) |  | [optional] |
| **price** | **String** |  | [optional] |
| **sales_price** | **String** |  | [optional] |
| **unit_discount_price** | **String** |  | [optional] |
| **unit_discount_rate** | **String** |  | [optional] |
| **unit_discount_division** | **String** |  | [optional] |
| **cost** | **String** |  | [optional] |
| **quantity** | **String** |  |  |
| **unit_non_discount_sum** | **String** |  | [optional] |
| **unit_discount_sum** | **String** |  | [optional] |
| **unit_discounted_sum** | **String** |  | [optional] |
| **cost_sum** | **String** |  | [optional] |
| **category_id** | **String** |  | [optional] |
| **category_name** | **String** |  | [optional] |
| **discrimination_no** | **String** |  | [optional] |
| **sales_division** | [**SalesDivision**](SalesDivision.md) |  | [optional] |
| **product_division** | [**ProductDivision**](ProductDivision.md) |  | [optional] |
| **inventory_reservation_division** | **String** |  | [optional] |
| **point_not_applicable** | **String** |  | [optional] |
| **calc_discount** | **String** |  | [optional] |
| **tax_free_division** | **String** |  | [optional] |
| **tax_free_commodity_price** | **String** |  | [optional] |
| **tax_free** | **String** |  | [optional] |
| **product_bundle_group_id** | **String** |  | [optional] |
| **discount_price_proportional** | **String** |  | [optional] |
| **discount_point_proportional** | **String** |  | [optional] |
| **discount_coupon_proportional** | **String** |  | [optional] |
| **tax_include_proportional** | **String** |  | [optional] |
| **tax_exclude_proportional** | **String** |  | [optional] |
| **product_bundle_proportional** | **String** |  | [optional] |
| **staff_discount_proportional** | **String** |  | [optional] |
| **bargain_discount_proportional** | **String** |  | [optional] |
| **rounding_price_proportional** | **String** |  | [optional] |
| **product_staff_discount_rate** | **String** |  | [optional] |
| **staff_rank** | **String** |  | [optional] |
| **staff_rank_name** | **String** |  | [optional] |
| **staff_discount_rate** | **String** |  | [optional] |
| **staff_discount_division** | **String** |  | [optional] |
| **apply_staff_discount_rate** | **String** |  | [optional] |
| **apply_staff_discount_price** | **String** |  | [optional] |
| **bargain_id** | **String** |  | [optional] |
| **bargain_name** | **String** |  | [optional] |
| **bargain_division** | **String** |  | [optional] |
| **bargain_value** | **String** |  | [optional] |
| **apply_bargain_value** | **String** |  | [optional] |
| **apply_bargain_discount_price** | **String** |  | [optional] |
| **tax_rate** | **String** |  | [optional] |
| **standard_tax_rate** | **String** |  | [optional] |
| **modified_tax_rate** | **String** |  | [optional] |
| **reduce_tax_id** | **String** |  | [optional] |
| **reduce_tax_name** | **String** |  | [optional] |
| **reduce_tax_rate** | **String** |  | [optional] |
| **reduce_tax_price** | **String** |  | [optional] |
| **reduce_tax_member_price** | **String** |  | [optional] |

## Example

```ruby
require 'openapi_client'

instance = OpenapiClient::TransactionDetail.new(
  transaction_head_id: null,
  transaction_detail_id: null,
  parent_transaction_detail_id: null,
  transaction_detail_division: null,
  product_id: null,
  product_code: null,
  product_name: null,
  print_receipt_product_name: null,
  color: null,
  size: null,
  group_code: null,
  tax_division: null,
  price: null,
  sales_price: null,
  unit_discount_price: null,
  unit_discount_rate: null,
  unit_discount_division: null,
  cost: null,
  quantity: null,
  unit_non_discount_sum: null,
  unit_discount_sum: null,
  unit_discounted_sum: null,
  cost_sum: null,
  category_id: null,
  category_name: null,
  discrimination_no: null,
  sales_division: null,
  product_division: null,
  inventory_reservation_division: null,
  point_not_applicable: null,
  calc_discount: null,
  tax_free_division: null,
  tax_free_commodity_price: null,
  tax_free: null,
  product_bundle_group_id: null,
  discount_price_proportional: null,
  discount_point_proportional: null,
  discount_coupon_proportional: null,
  tax_include_proportional: null,
  tax_exclude_proportional: null,
  product_bundle_proportional: null,
  staff_discount_proportional: null,
  bargain_discount_proportional: null,
  rounding_price_proportional: null,
  product_staff_discount_rate: null,
  staff_rank: null,
  staff_rank_name: null,
  staff_discount_rate: null,
  staff_discount_division: null,
  apply_staff_discount_rate: null,
  apply_staff_discount_price: null,
  bargain_id: null,
  bargain_name: null,
  bargain_division: null,
  bargain_value: null,
  apply_bargain_value: null,
  apply_bargain_discount_price: null,
  tax_rate: null,
  standard_tax_rate: null,
  modified_tax_rate: null,
  reduce_tax_id: null,
  reduce_tax_name: null,
  reduce_tax_rate: null,
  reduce_tax_price: null,
  reduce_tax_member_price: null
)
```

