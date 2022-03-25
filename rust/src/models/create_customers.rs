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
pub struct CreateCustomers {
    #[serde(rename = "customerCode")]
    pub customer_code: String,
    #[serde(rename = "customerNo", skip_serializing_if = "Option::is_none")]
    pub customer_no: Option<String>,
    #[serde(rename = "rank", skip_serializing_if = "Option::is_none")]
    pub rank: Option<String>,
    #[serde(rename = "staffRank", skip_serializing_if = "Option::is_none")]
    pub staff_rank: Option<String>,
    #[serde(rename = "firstName")]
    pub first_name: String,
    #[serde(rename = "lastName")]
    pub last_name: String,
    #[serde(rename = "firstKana", skip_serializing_if = "Option::is_none")]
    pub first_kana: Option<String>,
    #[serde(rename = "lastKana", skip_serializing_if = "Option::is_none")]
    pub last_kana: Option<String>,
    #[serde(rename = "postCode", skip_serializing_if = "Option::is_none")]
    pub post_code: Option<String>,
    #[serde(rename = "address", skip_serializing_if = "Option::is_none")]
    pub address: Option<String>,
    #[serde(rename = "phoneNumber", skip_serializing_if = "Option::is_none")]
    pub phone_number: Option<String>,
    #[serde(rename = "faxNumber", skip_serializing_if = "Option::is_none")]
    pub fax_number: Option<String>,
    #[serde(rename = "mobileNumber", skip_serializing_if = "Option::is_none")]
    pub mobile_number: Option<String>,
    #[serde(rename = "mailAddress", skip_serializing_if = "Option::is_none")]
    pub mail_address: Option<String>,
    #[serde(rename = "mailAddress2", skip_serializing_if = "Option::is_none")]
    pub mail_address2: Option<String>,
    #[serde(rename = "mailAddress3", skip_serializing_if = "Option::is_none")]
    pub mail_address3: Option<String>,
    #[serde(rename = "companyName", skip_serializing_if = "Option::is_none")]
    pub company_name: Option<String>,
    #[serde(rename = "departmentName", skip_serializing_if = "Option::is_none")]
    pub department_name: Option<String>,
    #[serde(rename = "managerialPosition", skip_serializing_if = "Option::is_none")]
    pub managerial_position: Option<String>,
    #[serde(rename = "sex", skip_serializing_if = "Option::is_none")]
    pub sex: Option<crate::models::Sex>,
    #[serde(rename = "birthDate", skip_serializing_if = "Option::is_none")]
    pub birth_date: Option<String>,
    #[serde(rename = "pointExpireDate", skip_serializing_if = "Option::is_none")]
    pub point_expire_date: Option<String>,
    #[serde(rename = "entryDate", skip_serializing_if = "Option::is_none")]
    pub entry_date: Option<String>,
    #[serde(rename = "leaveDate", skip_serializing_if = "Option::is_none")]
    pub leave_date: Option<String>,
    #[serde(rename = "pointGivingUnitPrice", skip_serializing_if = "Option::is_none")]
    pub point_giving_unit_price: Option<String>,
    #[serde(rename = "pointGivingUnit", skip_serializing_if = "Option::is_none")]
    pub point_giving_unit: Option<String>,
    #[serde(rename = "pinCode", skip_serializing_if = "Option::is_none")]
    pub pin_code: Option<String>,
    #[serde(rename = "passportNo", skip_serializing_if = "Option::is_none")]
    pub passport_no: Option<String>,
    #[serde(rename = "nationality", skip_serializing_if = "Option::is_none")]
    pub nationality: Option<String>,
    #[serde(rename = "alphabetName", skip_serializing_if = "Option::is_none")]
    pub alphabet_name: Option<String>,
    #[serde(rename = "mailReceiveFlag", skip_serializing_if = "Option::is_none")]
    pub mail_receive_flag: Option<crate::models::MailReceiveFlag>,
    #[serde(rename = "note", skip_serializing_if = "Option::is_none")]
    pub note: Option<String>,
    #[serde(rename = "note2", skip_serializing_if = "Option::is_none")]
    pub note2: Option<String>,
    #[serde(rename = "favoriteList", skip_serializing_if = "Option::is_none")]
    pub favorite_list: Option<String>,
    #[serde(rename = "browsingList", skip_serializing_if = "Option::is_none")]
    pub browsing_list: Option<String>,
    #[serde(rename = "status", skip_serializing_if = "Option::is_none")]
    pub status: Option<crate::models::Status>,
    #[serde(rename = "storeId", skip_serializing_if = "Option::is_none")]
    pub store_id: Option<String>,
}

impl CreateCustomers {
    pub fn new(customer_code: String, first_name: String, last_name: String) -> CreateCustomers {
        CreateCustomers {
            customer_code,
            customer_no: None,
            rank: None,
            staff_rank: None,
            first_name,
            last_name,
            first_kana: None,
            last_kana: None,
            post_code: None,
            address: None,
            phone_number: None,
            fax_number: None,
            mobile_number: None,
            mail_address: None,
            mail_address2: None,
            mail_address3: None,
            company_name: None,
            department_name: None,
            managerial_position: None,
            sex: None,
            birth_date: None,
            point_expire_date: None,
            entry_date: None,
            leave_date: None,
            point_giving_unit_price: None,
            point_giving_unit: None,
            pin_code: None,
            passport_no: None,
            nationality: None,
            alphabet_name: None,
            mail_receive_flag: None,
            note: None,
            note2: None,
            favorite_list: None,
            browsing_list: None,
            status: None,
            store_id: None,
        }
    }
}


