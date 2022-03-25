# OpenapiClient::GetTransactionId

## Properties

| Name | Type | Description | Notes |
| ---- | ---- | ----------- | ----- |
| **transaction_head_id** | **String** |  |  |
| **transaction_date_time** | **String** |  | [optional] |
| **transaction_head_division** | [**TransactionHeadDivision**](TransactionHeadDivision.md) |  |  |
| **cancel_division** | [**CancelDivision**](CancelDivision.md) |  | [optional] |
| **unit_non_discountsubtotal** | **String** |  | [optional] |
| **unit_discountsubtotal** | **String** |  | [optional] |
| **unit_staff_discountsubtotal** | **String** |  | [optional] |
| **unit_bargain_discountsubtotal** | **String** |  | [optional] |
| **subtotal** | **String** |  | [optional] |
| **subtotal_for_discount** | **String** |  | [optional] |
| **subtotal_discount_price** | **String** |  | [optional] |
| **subtotal_discount_rate** | **String** |  | [optional] |
| **subtotal_discount_division** | **String** |  | [optional] |
| **point_discount** | **String** |  | [optional] |
| **coupon_discount** | **String** |  | [optional] |
| **total** | **String** |  | [optional] |
| **tax_include** | **String** |  | [optional] |
| **tax_exclude** | **String** |  | [optional] |
| **rounding_division** | **String** |  | [optional] |
| **rounding_price** | **String** |  | [optional] |
| **cash_total** | **String** |  | [optional] |
| **credit_total** | **String** |  | [optional] |
| **deposit** | **String** |  | [optional] |
| **deposit_cash** | **String** |  | [optional] |
| **deposit_credit** | **String** |  | [optional] |
| **change** | **String** |  | [optional] |
| **tip_cash** | **String** |  | [optional] |
| **tip_credit** | **String** |  | [optional] |
| **amount** | **String** |  | [optional] |
| **return_amount** | **String** |  | [optional] |
| **cost_total** | **String** |  | [optional] |
| **sales_head_division** | **String** |  | [optional] |
| **in_tax_sales_total** | **String** |  | [optional] |
| **out_tax_sales_total** | **String** |  | [optional] |
| **non_tax_sales_total** | **String** |  | [optional] |
| **non_sales_target_total** | **String** |  | [optional] |
| **non_sales_target_out_tax_total** | **String** |  | [optional] |
| **non_sales_target_in_tax_total** | **String** |  | [optional] |
| **non_sales_target_tax_free_total** | **String** |  | [optional] |
| **non_sales_target_cost_total** | **String** |  | [optional] |
| **non_sales_target_amount** | **String** |  | [optional] |
| **non_sales_target_return_amount** | **String** |  | [optional] |
| **new_point** | **String** | 付与ポイント：取引で付与されるポイント。 合計 * ポイント付与率 | [optional] |
| **spend_point** | **String** | 使用ポイント：取引で使用したポイント。 | [optional] |
| **point** | **String** | 現在ポイント：取引前のポイント。 ※ ポイント値の直接入力は9桁まで可能です。ただし、ポイントの加算により9桁を超える値が発生することもあり得ます。 | [optional] |
| **total_point** | **String** |   string  合計ポイント：取引後のポイント 現在ポイント + 付与ポイント - 使用ポイント。 ※ ポイント値の直接入力は9桁まで可能です。ただし、ポイントの加算により9桁を超える値が発生することもあり得ます。 | [optional] |
| **current_mile** | **String** |  | [optional] |
| **earn_mile** | **String** |  | [optional] |
| **total_mile** | **String** |  | [optional] |
| **adjustment_mile** | **String** |  | [optional] |
| **adjustment_mile_division** | **String** |  | [optional] |
| **adjustment_mile_value** | **String** |  | [optional] |
| **store_id** | **String** |  | [optional] |
| **terminal_id** | **String** |  | [optional] |
| **customer_id** | **String** |  | [optional] |
| **terminal_tran_id** | **String** |  | [optional] |
| **terminal_tran_date_time** | **String** |  |  |
| **sum_division** | **String** |  | [optional] |
| **adjustment_date_time** | **String** |  | [optional] |
| **sum_date** | **String** |  | [optional] |
| **customer_rank** | **String** |  | [optional] |
| **customer_group_id** | **String** |  | [optional] |
| **customer_group_id2** | **String** |  | [optional] |
| **customer_group_id3** | **String** |  | [optional] |
| **customer_group_id4** | **String** |  | [optional] |
| **customer_group_id5** | **String** |  | [optional] |
| **staff_id** | **String** |  | [optional] |
| **staff_name** | **String** |  | [optional] |
| **credit_division** | **String** |  | [optional] |
| **payment_count** | **String** |  | [optional] |
| **slip_number** | **String** |  | [optional] |
| **cancel_slip_number** | **String** |  | [optional] |
| **auth_number** | **String** |  | [optional] |
| **auth_date** | **String** |  | [optional] |
| **card_company** | **String** |  | [optional] |
| **denomination** | **String** |  | [optional] |
| **memo** | **String** |  | [optional] |
| **receipt_memo** | **String** |  | [optional] |
| **carriage** | **String** |  | [optional] |
| **commission** | **String** |  | [optional] |
| **guest_numbers** | **String** |  | [optional] |
| **guest_numbers_male** | **String** |  | [optional] |
| **guest_numbers_female** | **String** |  | [optional] |
| **guest_numbers_unknown** | **String** |  | [optional] |
| **enter_date_time** | **String** |  | [optional] |
| **tax_free_sales_division** | **String** |  | [optional] |
| **net_tax_free_general_tax_include** | **String** |  | [optional] |
| **net_tax_free_general_tax_exclude** | **String** |  | [optional] |
| **net_tax_free_consumable_tax_include** | **String** |  | [optional] |
| **net_tax_free_consumable_tax_exclude** | **String** |  | [optional] |
| **tags** | **String** |  | [optional] |
| **point_giving_division** | **String** |  | [optional] |
| **point_giving_unit_price** | **String** |  | [optional] |
| **point_giving_unit** | **String** |  | [optional] |
| **point_spend_division** | **String** |  | [optional] |
| **mileage_division** | **String** |  | [optional] |
| **mileage_label** | **String** |  | [optional] |
| **customer_pin_code** | **String** |  | [optional] |
| **return_sales** | [**ReturnSales**](ReturnSales.md) |  |  |
| **dispose_division** | [**DisposeDivision**](DisposeDivision.md) |  | [optional] |
| **dispose_server_transaction_head_id** | **String** |  | [optional] |
| **cancel_date_time** | **String** |  | [optional] |
| **sell_division** | **String** |  | [optional] |
| **tax_rate** | **String** |  | [optional] |
| **tax_rounding** | **String** |  | [optional] |
| **discount_rounding_division** | **String** |  | [optional] |
| **transaction_uuid** | **String** |  | [optional] |
| **exchange_ticket_no** | **String** |  | [optional] |
| **gift_receipt_valid_days** | **String** |  | [optional] |
| **barcode** | **String** |  | [optional] |
| **upd_date_time** | **String** |  | [optional] |
| **details** | [**Array&lt;TransactionDetail&gt;**](TransactionDetail.md) |  | [optional] |
| **deposit_others** | [**Array&lt;DepositOthers&gt;**](DepositOthers.md) |  | [optional] |
| **coupons** | [**Array&lt;CouponsForTransactions&gt;**](CouponsForTransactions.md) |  | [optional] |
| **coupon_items** | [**Array&lt;CouponItemsForTransactions&gt;**](CouponItemsForTransactions.md) |  | [optional] |
| **store** | [**Store**](Store.md) |  | [optional] |
| **customer** | [**Customer**](Customer.md) |  | [optional] |
| **customer_groups** | [**Array&lt;CustomerGroup&gt;**](CustomerGroup.md) |  | [optional] |
| **staff** | [**Staff**](Staff.md) |  | [optional] |
| **layaway** | [**Layaway**](Layaway.md) |  | [optional] |
| **layaway_pick_up** | [**LayawayPickUp**](LayawayPickUp.md) |  | [optional] |

## Example

```ruby
require 'openapi_client'

instance = OpenapiClient::GetTransactionId.new(
  transaction_head_id: null,
  transaction_date_time: null,
  transaction_head_division: null,
  cancel_division: null,
  unit_non_discountsubtotal: null,
  unit_discountsubtotal: null,
  unit_staff_discountsubtotal: null,
  unit_bargain_discountsubtotal: null,
  subtotal: null,
  subtotal_for_discount: null,
  subtotal_discount_price: null,
  subtotal_discount_rate: null,
  subtotal_discount_division: null,
  point_discount: null,
  coupon_discount: null,
  total: null,
  tax_include: null,
  tax_exclude: null,
  rounding_division: null,
  rounding_price: null,
  cash_total: null,
  credit_total: null,
  deposit: null,
  deposit_cash: null,
  deposit_credit: null,
  change: null,
  tip_cash: null,
  tip_credit: null,
  amount: null,
  return_amount: null,
  cost_total: null,
  sales_head_division: null,
  in_tax_sales_total: null,
  out_tax_sales_total: null,
  non_tax_sales_total: null,
  non_sales_target_total: null,
  non_sales_target_out_tax_total: null,
  non_sales_target_in_tax_total: null,
  non_sales_target_tax_free_total: null,
  non_sales_target_cost_total: null,
  non_sales_target_amount: null,
  non_sales_target_return_amount: null,
  new_point: null,
  spend_point: null,
  point: null,
  total_point: null,
  current_mile: null,
  earn_mile: null,
  total_mile: null,
  adjustment_mile: null,
  adjustment_mile_division: null,
  adjustment_mile_value: null,
  store_id: null,
  terminal_id: null,
  customer_id: null,
  terminal_tran_id: null,
  terminal_tran_date_time: null,
  sum_division: null,
  adjustment_date_time: null,
  sum_date: null,
  customer_rank: null,
  customer_group_id: null,
  customer_group_id2: null,
  customer_group_id3: null,
  customer_group_id4: null,
  customer_group_id5: null,
  staff_id: null,
  staff_name: null,
  credit_division: null,
  payment_count: null,
  slip_number: null,
  cancel_slip_number: null,
  auth_number: null,
  auth_date: null,
  card_company: null,
  denomination: null,
  memo: null,
  receipt_memo: null,
  carriage: null,
  commission: null,
  guest_numbers: null,
  guest_numbers_male: null,
  guest_numbers_female: null,
  guest_numbers_unknown: null,
  enter_date_time: null,
  tax_free_sales_division: null,
  net_tax_free_general_tax_include: null,
  net_tax_free_general_tax_exclude: null,
  net_tax_free_consumable_tax_include: null,
  net_tax_free_consumable_tax_exclude: null,
  tags: null,
  point_giving_division: null,
  point_giving_unit_price: null,
  point_giving_unit: null,
  point_spend_division: null,
  mileage_division: null,
  mileage_label: null,
  customer_pin_code: null,
  return_sales: null,
  dispose_division: null,
  dispose_server_transaction_head_id: null,
  cancel_date_time: null,
  sell_division: null,
  tax_rate: null,
  tax_rounding: null,
  discount_rounding_division: null,
  transaction_uuid: null,
  exchange_ticket_no: null,
  gift_receipt_valid_days: null,
  barcode: null,
  upd_date_time: null,
  details: null,
  deposit_others: null,
  coupons: null,
  coupon_items: null,
  store: null,
  customer: null,
  customer_groups: null,
  staff: null,
  layaway: null,
  layaway_pick_up: null
)
```

