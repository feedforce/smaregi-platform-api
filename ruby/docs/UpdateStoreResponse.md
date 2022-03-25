# OpenapiClient::UpdateStoreResponse

## Properties

| Name | Type | Description | Notes |
| ---- | ---- | ----------- | ----- |
| **store_id** | **String** |  |  |
| **store_code** | **String** |  | [optional] |
| **store_name** | **String** |  | [optional] |
| **store_abbr** | **String** |  | [optional] |
| **print_receipt_store_name** | **String** |  | [optional] |
| **print_stock_receipt_store_name** | **String** |  | [optional] |
| **division** | [**StoreDivision**](StoreDivision.md) |  |  |
| **post_code** | **String** |  | [optional] |
| **address** | **String** |  | [optional] |
| **phone_number** | **String** |  | [optional] |
| **fax_number** | **String** |  | [optional] |
| **mail_address** | **String** |  | [optional] |
| **homepage** | **String** |  | [optional] |
| **temp_tran_mail_address** | **String** |  | [optional] |
| **price_change_flag** | **String** |  | [optional] |
| **sell_division** | **Float** |  | [optional] |
| **sum_proc_division** | **Float** |  | [optional] |
| **sum_date_change_time** | **String** |  | [optional] |
| **sum_ref_column** | **Float** |  | [optional] |
| **point_not_applicable** | **Float** |  | [optional] |
| **tax_free_division** | **Float** |  | [optional] |
| **max_bundle_product_count** | **String** |  | [optional] |
| **max_discount_rate** | **String** |  | [optional] |
| **carriage_display_flag** | **Float** |  | [optional] |
| **terminal_adjustment_cash_flag** | **Float** |  | [optional] |
| **terminal_check_cash_flag** | **Float** |  | [optional] |
| **waiter_adjustment_division** | **Float** |  | [optional] |
| **saving_auto_division** | **Float** |  | [optional] |
| **saving_auto_price** | **String** |  | [optional] |
| **cancel_setting_division** | **Float** |  | [optional] |
| **rounding_division** | **String** |  | [optional] |
| **discount_rounding_division** | **Float** |  | [optional] |
| **card_company_select_division** | **Float** |  | [optional] |
| **gift_receipt_valid_days** | **String** |  | [optional] |
| **tax_label_normal** | **String** |  | [optional] |
| **tax_label_reduce** | **String** |  | [optional] |
| **display_sequence** | **String** |  | [optional] |
| **face_payment_use_division** | **String** |  | [optional] |
| **ins_date_time** | **String** |  | [optional] |
| **upd_date_time** | **String** |  | [optional] |
| **point_condition** | [**PointCondition**](PointCondition.md) |  | [optional] |
| **receipt_print_info** | [**UpdateStoreResponseReceiptPrintInfo**](UpdateStoreResponseReceiptPrintInfo.md) |  | [optional] |

## Example

```ruby
require 'openapi_client'

instance = OpenapiClient::UpdateStoreResponse.new(
  store_id: null,
  store_code: null,
  store_name: null,
  store_abbr: null,
  print_receipt_store_name: null,
  print_stock_receipt_store_name: null,
  division: null,
  post_code: null,
  address: null,
  phone_number: null,
  fax_number: null,
  mail_address: null,
  homepage: null,
  temp_tran_mail_address: null,
  price_change_flag: null,
  sell_division: null,
  sum_proc_division: null,
  sum_date_change_time: null,
  sum_ref_column: null,
  point_not_applicable: null,
  tax_free_division: null,
  max_bundle_product_count: null,
  max_discount_rate: null,
  carriage_display_flag: null,
  terminal_adjustment_cash_flag: null,
  terminal_check_cash_flag: null,
  waiter_adjustment_division: null,
  saving_auto_division: null,
  saving_auto_price: null,
  cancel_setting_division: null,
  rounding_division: null,
  discount_rounding_division: null,
  card_company_select_division: null,
  gift_receipt_valid_days: null,
  tax_label_normal: null,
  tax_label_reduce: null,
  display_sequence: null,
  face_payment_use_division: null,
  ins_date_time: null,
  upd_date_time: null,
  point_condition: null,
  receipt_print_info: null
)
```

