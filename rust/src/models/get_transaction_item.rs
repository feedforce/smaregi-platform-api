/*
 * スマレジ
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 1.0.0
 * 
 * Generated by: https://openapi-generator.tech
 */




#[derive(Clone, Debug, PartialEq, Serialize, Deserialize)]
pub struct GetTransactionItem {
    #[serde(rename = "transactionHeadId")]
    pub transaction_head_id: String,
    #[serde(rename = "transactionDateTime", skip_serializing_if = "Option::is_none")]
    pub transaction_date_time: Option<String>,
    #[serde(rename = "transactionHeadDivision")]
    pub transaction_head_division: crate::models::TransactionHeadDivision,
    #[serde(rename = "cancelDivision", skip_serializing_if = "Option::is_none")]
    pub cancel_division: Option<crate::models::CancelDivision>,
    #[serde(rename = "unitNonDiscountsubtotal", skip_serializing_if = "Option::is_none")]
    pub unit_non_discountsubtotal: Option<String>,
    #[serde(rename = "unitDiscountsubtotal", skip_serializing_if = "Option::is_none")]
    pub unit_discountsubtotal: Option<String>,
    #[serde(rename = "unitStaffDiscountsubtotal", skip_serializing_if = "Option::is_none")]
    pub unit_staff_discountsubtotal: Option<String>,
    #[serde(rename = "unitBargainDiscountsubtotal", skip_serializing_if = "Option::is_none")]
    pub unit_bargain_discountsubtotal: Option<String>,
    #[serde(rename = "subtotal", skip_serializing_if = "Option::is_none")]
    pub subtotal: Option<String>,
    #[serde(rename = "subtotalForDiscount", skip_serializing_if = "Option::is_none")]
    pub subtotal_for_discount: Option<String>,
    #[serde(rename = "subtotalDiscountPrice", skip_serializing_if = "Option::is_none")]
    pub subtotal_discount_price: Option<String>,
    #[serde(rename = "subtotalDiscountRate", skip_serializing_if = "Option::is_none")]
    pub subtotal_discount_rate: Option<String>,
    #[serde(rename = "subtotalDiscountDivision", skip_serializing_if = "Option::is_none")]
    pub subtotal_discount_division: Option<String>,
    #[serde(rename = "pointDiscount", skip_serializing_if = "Option::is_none")]
    pub point_discount: Option<String>,
    #[serde(rename = "couponDiscount", skip_serializing_if = "Option::is_none")]
    pub coupon_discount: Option<String>,
    #[serde(rename = "total", skip_serializing_if = "Option::is_none")]
    pub total: Option<String>,
    #[serde(rename = "taxInclude", skip_serializing_if = "Option::is_none")]
    pub tax_include: Option<String>,
    #[serde(rename = "taxExclude", skip_serializing_if = "Option::is_none")]
    pub tax_exclude: Option<String>,
    #[serde(rename = "roundingDivision", skip_serializing_if = "Option::is_none")]
    pub rounding_division: Option<String>,
    #[serde(rename = "roundingPrice", skip_serializing_if = "Option::is_none")]
    pub rounding_price: Option<String>,
    #[serde(rename = "cashTotal", skip_serializing_if = "Option::is_none")]
    pub cash_total: Option<String>,
    #[serde(rename = "creditTotal", skip_serializing_if = "Option::is_none")]
    pub credit_total: Option<String>,
    #[serde(rename = "deposit", skip_serializing_if = "Option::is_none")]
    pub deposit: Option<String>,
    #[serde(rename = "depositCash", skip_serializing_if = "Option::is_none")]
    pub deposit_cash: Option<String>,
    #[serde(rename = "depositCredit", skip_serializing_if = "Option::is_none")]
    pub deposit_credit: Option<String>,
    #[serde(rename = "change", skip_serializing_if = "Option::is_none")]
    pub change: Option<String>,
    #[serde(rename = "tipCash", skip_serializing_if = "Option::is_none")]
    pub tip_cash: Option<String>,
    #[serde(rename = "tipCredit", skip_serializing_if = "Option::is_none")]
    pub tip_credit: Option<String>,
    #[serde(rename = "amount", skip_serializing_if = "Option::is_none")]
    pub amount: Option<String>,
    #[serde(rename = "returnAmount", skip_serializing_if = "Option::is_none")]
    pub return_amount: Option<String>,
    #[serde(rename = "costTotal", skip_serializing_if = "Option::is_none")]
    pub cost_total: Option<String>,
    #[serde(rename = "salesHeadDivision", skip_serializing_if = "Option::is_none")]
    pub sales_head_division: Option<String>,
    #[serde(rename = "inTaxSalesTotal", skip_serializing_if = "Option::is_none")]
    pub in_tax_sales_total: Option<String>,
    #[serde(rename = "outTaxSalesTotal", skip_serializing_if = "Option::is_none")]
    pub out_tax_sales_total: Option<String>,
    #[serde(rename = "nonTaxSalesTotal", skip_serializing_if = "Option::is_none")]
    pub non_tax_sales_total: Option<String>,
    #[serde(rename = "nonSalesTargetTotal", skip_serializing_if = "Option::is_none")]
    pub non_sales_target_total: Option<String>,
    #[serde(rename = "nonSalesTargetOutTaxTotal", skip_serializing_if = "Option::is_none")]
    pub non_sales_target_out_tax_total: Option<String>,
    #[serde(rename = "nonSalesTargetInTaxTotal", skip_serializing_if = "Option::is_none")]
    pub non_sales_target_in_tax_total: Option<String>,
    #[serde(rename = "nonSalesTargetTaxFreeTotal", skip_serializing_if = "Option::is_none")]
    pub non_sales_target_tax_free_total: Option<String>,
    #[serde(rename = "nonSalesTargetCostTotal", skip_serializing_if = "Option::is_none")]
    pub non_sales_target_cost_total: Option<String>,
    #[serde(rename = "nonSalesTargetAmount", skip_serializing_if = "Option::is_none")]
    pub non_sales_target_amount: Option<String>,
    #[serde(rename = "nonSalesTargetReturnAmount", skip_serializing_if = "Option::is_none")]
    pub non_sales_target_return_amount: Option<String>,
    #[serde(rename = "newPoint", skip_serializing_if = "Option::is_none")]
    pub new_point: Option<String>,
    #[serde(rename = "spendPoint", skip_serializing_if = "Option::is_none")]
    pub spend_point: Option<String>,
    #[serde(rename = "point", skip_serializing_if = "Option::is_none")]
    pub point: Option<String>,
    #[serde(rename = "totalPoint", skip_serializing_if = "Option::is_none")]
    pub total_point: Option<String>,
    #[serde(rename = "currentMile", skip_serializing_if = "Option::is_none")]
    pub current_mile: Option<String>,
    #[serde(rename = "earnMile", skip_serializing_if = "Option::is_none")]
    pub earn_mile: Option<String>,
    #[serde(rename = "totalMile", skip_serializing_if = "Option::is_none")]
    pub total_mile: Option<String>,
    #[serde(rename = "adjustmentMile", skip_serializing_if = "Option::is_none")]
    pub adjustment_mile: Option<String>,
    #[serde(rename = "adjustmentMileDivision", skip_serializing_if = "Option::is_none")]
    pub adjustment_mile_division: Option<String>,
    #[serde(rename = "adjustmentMileValue", skip_serializing_if = "Option::is_none")]
    pub adjustment_mile_value: Option<String>,
    #[serde(rename = "storeId", skip_serializing_if = "Option::is_none")]
    pub store_id: Option<String>,
    #[serde(rename = "storeCode", skip_serializing_if = "Option::is_none")]
    pub store_code: Option<String>,
    #[serde(rename = "terminalId", skip_serializing_if = "Option::is_none")]
    pub terminal_id: Option<String>,
    #[serde(rename = "customerId", skip_serializing_if = "Option::is_none")]
    pub customer_id: Option<String>,
    #[serde(rename = "customerCode", skip_serializing_if = "Option::is_none")]
    pub customer_code: Option<String>,
    #[serde(rename = "terminalTranId", skip_serializing_if = "Option::is_none")]
    pub terminal_tran_id: Option<String>,
    #[serde(rename = "terminalTranDateTime")]
    pub terminal_tran_date_time: String,
    #[serde(rename = "sumDivision", skip_serializing_if = "Option::is_none")]
    pub sum_division: Option<String>,
    #[serde(rename = "adjustmentDateTime", skip_serializing_if = "Option::is_none")]
    pub adjustment_date_time: Option<String>,
    #[serde(rename = "sumDate", skip_serializing_if = "Option::is_none")]
    pub sum_date: Option<String>,
    #[serde(rename = "customerRank", skip_serializing_if = "Option::is_none")]
    pub customer_rank: Option<String>,
    #[serde(rename = "customerGroupId", skip_serializing_if = "Option::is_none")]
    pub customer_group_id: Option<String>,
    #[serde(rename = "customerGroupId2", skip_serializing_if = "Option::is_none")]
    pub customer_group_id2: Option<String>,
    #[serde(rename = "customerGroupId3", skip_serializing_if = "Option::is_none")]
    pub customer_group_id3: Option<String>,
    #[serde(rename = "customerGroupId4", skip_serializing_if = "Option::is_none")]
    pub customer_group_id4: Option<String>,
    #[serde(rename = "customerGroupId5", skip_serializing_if = "Option::is_none")]
    pub customer_group_id5: Option<String>,
    #[serde(rename = "staffId", skip_serializing_if = "Option::is_none")]
    pub staff_id: Option<String>,
    #[serde(rename = "staffCode", skip_serializing_if = "Option::is_none")]
    pub staff_code: Option<String>,
    #[serde(rename = "staffName", skip_serializing_if = "Option::is_none")]
    pub staff_name: Option<String>,
    #[serde(rename = "creditDivision", skip_serializing_if = "Option::is_none")]
    pub credit_division: Option<String>,
    #[serde(rename = "paymentCount", skip_serializing_if = "Option::is_none")]
    pub payment_count: Option<String>,
    #[serde(rename = "slipNumber", skip_serializing_if = "Option::is_none")]
    pub slip_number: Option<String>,
    #[serde(rename = "cancelSlipNumber", skip_serializing_if = "Option::is_none")]
    pub cancel_slip_number: Option<String>,
    #[serde(rename = "authNumber", skip_serializing_if = "Option::is_none")]
    pub auth_number: Option<String>,
    #[serde(rename = "authDate", skip_serializing_if = "Option::is_none")]
    pub auth_date: Option<String>,
    #[serde(rename = "cardCompany", skip_serializing_if = "Option::is_none")]
    pub card_company: Option<String>,
    #[serde(rename = "denomination", skip_serializing_if = "Option::is_none")]
    pub denomination: Option<String>,
    #[serde(rename = "memo", skip_serializing_if = "Option::is_none")]
    pub memo: Option<String>,
    #[serde(rename = "receiptMemo", skip_serializing_if = "Option::is_none")]
    pub receipt_memo: Option<String>,
    #[serde(rename = "carriage", skip_serializing_if = "Option::is_none")]
    pub carriage: Option<String>,
    #[serde(rename = "commission", skip_serializing_if = "Option::is_none")]
    pub commission: Option<String>,
    #[serde(rename = "guestNumbers", skip_serializing_if = "Option::is_none")]
    pub guest_numbers: Option<String>,
    #[serde(rename = "guestNumbersMale", skip_serializing_if = "Option::is_none")]
    pub guest_numbers_male: Option<String>,
    #[serde(rename = "guestNumbersFemale", skip_serializing_if = "Option::is_none")]
    pub guest_numbers_female: Option<String>,
    #[serde(rename = "guestNumbersUnknown", skip_serializing_if = "Option::is_none")]
    pub guest_numbers_unknown: Option<String>,
    #[serde(rename = "enterDateTime", skip_serializing_if = "Option::is_none")]
    pub enter_date_time: Option<String>,
    #[serde(rename = "taxFreeSalesDivision", skip_serializing_if = "Option::is_none")]
    pub tax_free_sales_division: Option<String>,
    #[serde(rename = "netTaxFreeGeneralTaxInclude", skip_serializing_if = "Option::is_none")]
    pub net_tax_free_general_tax_include: Option<String>,
    #[serde(rename = "netTaxFreeGeneralTaxExclude", skip_serializing_if = "Option::is_none")]
    pub net_tax_free_general_tax_exclude: Option<String>,
    #[serde(rename = "netTaxFreeConsumableTaxInclude", skip_serializing_if = "Option::is_none")]
    pub net_tax_free_consumable_tax_include: Option<String>,
    #[serde(rename = "netTaxFreeConsumableTaxExclude", skip_serializing_if = "Option::is_none")]
    pub net_tax_free_consumable_tax_exclude: Option<String>,
    #[serde(rename = "tags", skip_serializing_if = "Option::is_none")]
    pub tags: Option<String>,
    #[serde(rename = "pointGivingDivision", skip_serializing_if = "Option::is_none")]
    pub point_giving_division: Option<String>,
    #[serde(rename = "pointGivingUnitPrice", skip_serializing_if = "Option::is_none")]
    pub point_giving_unit_price: Option<String>,
    #[serde(rename = "pointGivingUnit", skip_serializing_if = "Option::is_none")]
    pub point_giving_unit: Option<String>,
    #[serde(rename = "pointSpendDivision", skip_serializing_if = "Option::is_none")]
    pub point_spend_division: Option<String>,
    #[serde(rename = "mileageDivision", skip_serializing_if = "Option::is_none")]
    pub mileage_division: Option<String>,
    #[serde(rename = "mileageLabel", skip_serializing_if = "Option::is_none")]
    pub mileage_label: Option<String>,
    #[serde(rename = "customerPinCode", skip_serializing_if = "Option::is_none")]
    pub customer_pin_code: Option<String>,
    #[serde(rename = "returnSales")]
    pub return_sales: crate::models::ReturnSales,
    #[serde(rename = "disposeDivision", skip_serializing_if = "Option::is_none")]
    pub dispose_division: Option<crate::models::DisposeDivision>,
    #[serde(rename = "disposeServerTransactionHeadId", skip_serializing_if = "Option::is_none")]
    pub dispose_server_transaction_head_id: Option<String>,
    #[serde(rename = "cancelDateTime", skip_serializing_if = "Option::is_none")]
    pub cancel_date_time: Option<String>,
    #[serde(rename = "sellDivision", skip_serializing_if = "Option::is_none")]
    pub sell_division: Option<String>,
    #[serde(rename = "taxRate", skip_serializing_if = "Option::is_none")]
    pub tax_rate: Option<String>,
    #[serde(rename = "taxRounding", skip_serializing_if = "Option::is_none")]
    pub tax_rounding: Option<String>,
    #[serde(rename = "discountRoundingDivision", skip_serializing_if = "Option::is_none")]
    pub discount_rounding_division: Option<String>,
    #[serde(rename = "transactionUuid", skip_serializing_if = "Option::is_none")]
    pub transaction_uuid: Option<String>,
    #[serde(rename = "exchangeTicketNo", skip_serializing_if = "Option::is_none")]
    pub exchange_ticket_no: Option<String>,
    #[serde(rename = "giftReceiptValidDays", skip_serializing_if = "Option::is_none")]
    pub gift_receipt_valid_days: Option<String>,
    #[serde(rename = "barcode", skip_serializing_if = "Option::is_none")]
    pub barcode: Option<String>,
    #[serde(rename = "updDateTime", skip_serializing_if = "Option::is_none")]
    pub upd_date_time: Option<String>,
    #[serde(rename = "depositOthers", skip_serializing_if = "Option::is_none")]
    pub deposit_others: Option<Vec<crate::models::DepositOthers>>,
    #[serde(rename = "layaway", skip_serializing_if = "Option::is_none")]
    pub layaway: Option<Box<crate::models::Layaway>>,
    #[serde(rename = "layawayPickUp", skip_serializing_if = "Option::is_none")]
    pub layaway_pick_up: Option<Box<crate::models::LayawayPickUp>>,
}

impl GetTransactionItem {
    pub fn new(transaction_head_id: String, transaction_head_division: crate::models::TransactionHeadDivision, terminal_tran_date_time: String, return_sales: crate::models::ReturnSales) -> GetTransactionItem {
        GetTransactionItem {
            transaction_head_id,
            transaction_date_time: None,
            transaction_head_division,
            cancel_division: None,
            unit_non_discountsubtotal: None,
            unit_discountsubtotal: None,
            unit_staff_discountsubtotal: None,
            unit_bargain_discountsubtotal: None,
            subtotal: None,
            subtotal_for_discount: None,
            subtotal_discount_price: None,
            subtotal_discount_rate: None,
            subtotal_discount_division: None,
            point_discount: None,
            coupon_discount: None,
            total: None,
            tax_include: None,
            tax_exclude: None,
            rounding_division: None,
            rounding_price: None,
            cash_total: None,
            credit_total: None,
            deposit: None,
            deposit_cash: None,
            deposit_credit: None,
            change: None,
            tip_cash: None,
            tip_credit: None,
            amount: None,
            return_amount: None,
            cost_total: None,
            sales_head_division: None,
            in_tax_sales_total: None,
            out_tax_sales_total: None,
            non_tax_sales_total: None,
            non_sales_target_total: None,
            non_sales_target_out_tax_total: None,
            non_sales_target_in_tax_total: None,
            non_sales_target_tax_free_total: None,
            non_sales_target_cost_total: None,
            non_sales_target_amount: None,
            non_sales_target_return_amount: None,
            new_point: None,
            spend_point: None,
            point: None,
            total_point: None,
            current_mile: None,
            earn_mile: None,
            total_mile: None,
            adjustment_mile: None,
            adjustment_mile_division: None,
            adjustment_mile_value: None,
            store_id: None,
            store_code: None,
            terminal_id: None,
            customer_id: None,
            customer_code: None,
            terminal_tran_id: None,
            terminal_tran_date_time,
            sum_division: None,
            adjustment_date_time: None,
            sum_date: None,
            customer_rank: None,
            customer_group_id: None,
            customer_group_id2: None,
            customer_group_id3: None,
            customer_group_id4: None,
            customer_group_id5: None,
            staff_id: None,
            staff_code: None,
            staff_name: None,
            credit_division: None,
            payment_count: None,
            slip_number: None,
            cancel_slip_number: None,
            auth_number: None,
            auth_date: None,
            card_company: None,
            denomination: None,
            memo: None,
            receipt_memo: None,
            carriage: None,
            commission: None,
            guest_numbers: None,
            guest_numbers_male: None,
            guest_numbers_female: None,
            guest_numbers_unknown: None,
            enter_date_time: None,
            tax_free_sales_division: None,
            net_tax_free_general_tax_include: None,
            net_tax_free_general_tax_exclude: None,
            net_tax_free_consumable_tax_include: None,
            net_tax_free_consumable_tax_exclude: None,
            tags: None,
            point_giving_division: None,
            point_giving_unit_price: None,
            point_giving_unit: None,
            point_spend_division: None,
            mileage_division: None,
            mileage_label: None,
            customer_pin_code: None,
            return_sales,
            dispose_division: None,
            dispose_server_transaction_head_id: None,
            cancel_date_time: None,
            sell_division: None,
            tax_rate: None,
            tax_rounding: None,
            discount_rounding_division: None,
            transaction_uuid: None,
            exchange_ticket_no: None,
            gift_receipt_valid_days: None,
            barcode: None,
            upd_date_time: None,
            deposit_others: None,
            layaway: None,
            layaway_pick_up: None,
        }
    }
}


