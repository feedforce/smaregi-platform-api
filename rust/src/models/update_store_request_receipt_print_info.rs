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
pub struct UpdateStoreRequestReceiptPrintInfo {
    #[serde(rename = "header", skip_serializing_if = "Option::is_none")]
    pub header: Option<String>,
    #[serde(rename = "footer", skip_serializing_if = "Option::is_none")]
    pub footer: Option<String>,
    #[serde(rename = "receiptTaxOfficeStampComment", skip_serializing_if = "Option::is_none")]
    pub receipt_tax_office_stamp_comment: Option<String>,
    #[serde(rename = "taxOfficeName", skip_serializing_if = "Option::is_none")]
    pub tax_office_name: Option<String>,
    #[serde(rename = "discountReceiptHeader", skip_serializing_if = "Option::is_none")]
    pub discount_receipt_header: Option<String>,
    #[serde(rename = "discountReceiptFooter", skip_serializing_if = "Option::is_none")]
    pub discount_receipt_footer: Option<String>,
}

impl UpdateStoreRequestReceiptPrintInfo {
    pub fn new() -> UpdateStoreRequestReceiptPrintInfo {
        UpdateStoreRequestReceiptPrintInfo {
            header: None,
            footer: None,
            receipt_tax_office_stamp_comment: None,
            tax_office_name: None,
            discount_receipt_header: None,
            discount_receipt_footer: None,
        }
    }
}


