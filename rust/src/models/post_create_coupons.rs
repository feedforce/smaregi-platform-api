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
pub struct PostCreateCoupons {
    #[serde(rename = "couponName")]
    pub coupon_name: String,
    #[serde(rename = "couponDivision", skip_serializing_if = "Option::is_none")]
    pub coupon_division: Option<crate::models::CouponDivision>,
    #[serde(rename = "serialNumber")]
    pub serial_number: String,
    #[serde(rename = "summary", skip_serializing_if = "Option::is_none")]
    pub summary: Option<String>,
    #[serde(rename = "awardType")]
    pub award_type: crate::models::AwardType,
    #[serde(rename = "awardValue")]
    pub award_value: String,
    #[serde(rename = "applyConditionDivision")]
    pub apply_condition_division: crate::models::ApplyConditionDivision,
    #[serde(rename = "minTargetPrice", skip_serializing_if = "Option::is_none")]
    pub min_target_price: Option<String>,
    #[serde(rename = "maxTargetPrice", skip_serializing_if = "Option::is_none")]
    pub max_target_price: Option<String>,
    #[serde(rename = "startDate", skip_serializing_if = "Option::is_none")]
    pub start_date: Option<String>,
    #[serde(rename = "endDate", skip_serializing_if = "Option::is_none")]
    pub end_date: Option<String>,
}

impl PostCreateCoupons {
    pub fn new(coupon_name: String, serial_number: String, award_type: crate::models::AwardType, award_value: String, apply_condition_division: crate::models::ApplyConditionDivision) -> PostCreateCoupons {
        PostCreateCoupons {
            coupon_name,
            coupon_division: None,
            serial_number,
            summary: None,
            award_type,
            award_value,
            apply_condition_division,
            min_target_price: None,
            max_target_price: None,
            start_date: None,
            end_date: None,
        }
    }
}


