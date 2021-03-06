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
pub struct UpdateCustomerPointResponse {
    /// 会員ID
    #[serde(rename = "customerId", skip_serializing_if = "Option::is_none")]
    pub customer_id: Option<String>,
    /// マイル
    #[serde(rename = "mile", skip_serializing_if = "Option::is_none")]
    pub mile: Option<String>,
    /// ポイント
    #[serde(rename = "point", skip_serializing_if = "Option::is_none")]
    pub point: Option<String>,
    /// ポイント失効予定日：会員必須項目設定で必須項目に設定されている場合必須
    #[serde(rename = "pointExpireDate", skip_serializing_if = "Option::is_none")]
    pub point_expire_date: Option<String>,
    /// 更新日時：登録時・更新時の日時。[YYYY-MM-DDThh:mm:ssTZD]
    #[serde(rename = "updDateTime", skip_serializing_if = "Option::is_none")]
    pub upd_date_time: Option<String>,
}

impl UpdateCustomerPointResponse {
    pub fn new() -> UpdateCustomerPointResponse {
        UpdateCustomerPointResponse {
            customer_id: None,
            mile: None,
            point: None,
            point_expire_date: None,
            upd_date_time: None,
        }
    }
}


