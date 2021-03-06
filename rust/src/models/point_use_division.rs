/*
 * スマレジ
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 1.0.0
 * 
 * Generated by: https://openapi-generator.tech
 */

/// PointUseDivision : ポイント機能を使用するか判断 (0：使用しない、1：使用する）

/// ポイント機能を使用するか判断 (0：使用しない、1：使用する）
#[derive(Clone, Copy, Debug, Eq, PartialEq, Ord, PartialOrd, Hash, Serialize, Deserialize)]
pub enum PointUseDivision {
    #[serde(rename = "0")]
    Disable,
    #[serde(rename = "1")]
    Enable,

}

impl ToString for PointUseDivision {
    fn to_string(&self) -> String {
        match self {
            Self::Disable => String::from("0"),
            Self::Enable => String::from("1"),
        }
    }
}




