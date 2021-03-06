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
pub struct PointCondition {
    #[serde(rename = "storeId", skip_serializing_if = "Option::is_none")]
    pub store_id: Option<String>,
    #[serde(rename = "pointUseDivision", skip_serializing_if = "Option::is_none")]
    pub point_use_division: Option<crate::models::PointUseDivision>,
    #[serde(rename = "spendRate", skip_serializing_if = "Option::is_none")]
    pub spend_rate: Option<String>,
    #[serde(rename = "pointGivingUnitPrice", skip_serializing_if = "Option::is_none")]
    pub point_giving_unit_price: Option<String>,
    #[serde(rename = "pointGivingUnit", skip_serializing_if = "Option::is_none")]
    pub point_giving_unit: Option<String>,
    #[serde(rename = "pointGivingDivision", skip_serializing_if = "Option::is_none")]
    pub point_giving_division: Option<crate::models::PointGivingDivision>,
    #[serde(rename = "pointUseUnit", skip_serializing_if = "Option::is_none")]
    pub point_use_unit: Option<String>,
    #[serde(rename = "pointSpendDivision", skip_serializing_if = "Option::is_none")]
    pub point_spend_division: Option<crate::models::PointSpendDivision>,
    #[serde(rename = "pointSpendLimitDivision", skip_serializing_if = "Option::is_none")]
    pub point_spend_limit_division: Option<crate::models::PointSpendLimitDivision>,
    #[serde(rename = "expireDivision", skip_serializing_if = "Option::is_none")]
    pub expire_division: Option<crate::models::ExpireDivision>,
    #[serde(rename = "expireLimit", skip_serializing_if = "Option::is_none")]
    pub expire_limit: Option<String>,
    #[serde(rename = "mileageDivision", skip_serializing_if = "Option::is_none")]
    pub mileage_division: Option<crate::models::MileageDivision>,
}

impl PointCondition {
    pub fn new() -> PointCondition {
        PointCondition {
            store_id: None,
            point_use_division: None,
            spend_rate: None,
            point_giving_unit_price: None,
            point_giving_unit: None,
            point_giving_division: None,
            point_use_unit: None,
            point_spend_division: None,
            point_spend_limit_division: None,
            expire_division: None,
            expire_limit: None,
            mileage_division: None,
        }
    }
}


