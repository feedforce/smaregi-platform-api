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
pub struct Customer {
    #[serde(rename = "customerId")]
    pub customer_id: String,
    #[serde(rename = "customerCode", skip_serializing_if = "Option::is_none")]
    pub customer_code: Option<String>,
    #[serde(rename = "customerNo", skip_serializing_if = "Option::is_none")]
    pub customer_no: Option<String>,
    #[serde(rename = "rank", skip_serializing_if = "Option::is_none")]
    pub rank: Option<String>,
    #[serde(rename = "staffRank", skip_serializing_if = "Option::is_none")]
    pub staff_rank: Option<String>,
    #[serde(rename = "firstName", skip_serializing_if = "Option::is_none")]
    pub first_name: Option<String>,
    #[serde(rename = "lastName", skip_serializing_if = "Option::is_none")]
    pub last_name: Option<String>,
    #[serde(rename = "firstKana", skip_serializing_if = "Option::is_none")]
    pub first_kana: Option<String>,
    #[serde(rename = "lastKana", skip_serializing_if = "Option::is_none")]
    pub last_kana: Option<String>,
    #[serde(rename = "sex", skip_serializing_if = "Option::is_none")]
    pub sex: Option<String>,
    #[serde(rename = "birthDate", skip_serializing_if = "Option::is_none")]
    pub birth_date: Option<String>,
    #[serde(rename = "pointExpireDate", skip_serializing_if = "Option::is_none")]
    pub point_expire_date: Option<String>,
    #[serde(rename = "lastComeDateTime", skip_serializing_if = "Option::is_none")]
    pub last_come_date_time: Option<String>,
    #[serde(rename = "entryDate", skip_serializing_if = "Option::is_none")]
    pub entry_date: Option<String>,
    #[serde(rename = "leaveDate", skip_serializing_if = "Option::is_none")]
    pub leave_date: Option<String>,
}

impl Customer {
    pub fn new(customer_id: String) -> Customer {
        Customer {
            customer_id,
            customer_code: None,
            customer_no: None,
            rank: None,
            staff_rank: None,
            first_name: None,
            last_name: None,
            first_kana: None,
            last_kana: None,
            sex: None,
            birth_date: None,
            point_expire_date: None,
            last_come_date_time: None,
            entry_date: None,
            leave_date: None,
        }
    }
}


