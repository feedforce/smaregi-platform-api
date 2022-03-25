/*
 * スマレジ
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 1.0.0
 * 
 * Generated by: https://openapi-generator.tech
 */

/// StoreDivision : 店舗区分：店舗区分。（1：通常店舗、2：倉庫）

/// 店舗区分：店舗区分。（1：通常店舗、2：倉庫）
#[derive(Clone, Copy, Debug, Eq, PartialEq, Ord, PartialOrd, Hash, Serialize, Deserialize)]
pub enum StoreDivision {
    #[serde(rename = "1")]
    Normal,
    #[serde(rename = "2")]
    Warehouse,

}

impl ToString for StoreDivision {
    fn to_string(&self) -> String {
        match self {
            Self::Normal => String::from("1"),
            Self::Warehouse => String::from("2"),
        }
    }
}




