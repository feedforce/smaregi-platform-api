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
pub struct CouponItemsForTransactions {
    #[serde(rename = "transactionCouponDetailId", skip_serializing_if = "Option::is_none")]
    pub transaction_coupon_detail_id: Option<String>,
    #[serde(rename = "transactionCouponId", skip_serializing_if = "Option::is_none")]
    pub transaction_coupon_id: Option<String>,
    #[serde(rename = "terminalTranCouponId", skip_serializing_if = "Option::is_none")]
    pub terminal_tran_coupon_id: Option<String>,
    #[serde(rename = "transactionDetailId", skip_serializing_if = "Option::is_none")]
    pub transaction_detail_id: Option<String>,
    #[serde(rename = "couponItemId", skip_serializing_if = "Option::is_none")]
    pub coupon_item_id: Option<String>,
}

impl CouponItemsForTransactions {
    pub fn new() -> CouponItemsForTransactions {
        CouponItemsForTransactions {
            transaction_coupon_detail_id: None,
            transaction_coupon_id: None,
            terminal_tran_coupon_id: None,
            transaction_detail_id: None,
            coupon_item_id: None,
        }
    }
}


