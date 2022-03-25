/*
 * スマレジ
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 1.0.0
 * 
 * Generated by: https://openapi-generator.tech
 */

/// ApplyConditionDivision : 適用条件区分：クーポンの使用条件のうち、対象商品が含まれている必要があるか指定します。（0：全適用、1：対象商品が含まれる場合のみ適用）

/// 適用条件区分：クーポンの使用条件のうち、対象商品が含まれている必要があるか指定します。（0：全適用、1：対象商品が含まれる場合のみ適用）
#[derive(Clone, Copy, Debug, Eq, PartialEq, Ord, PartialOrd, Hash, Serialize, Deserialize)]
pub enum ApplyConditionDivision {
    #[serde(rename = "0")]
    Always,
    #[serde(rename = "1")]
    SpecifiedProductIncluded,

}

impl ToString for ApplyConditionDivision {
    fn to_string(&self) -> String {
        match self {
            Self::Always => String::from("0"),
            Self::SpecifiedProductIncluded => String::from("1"),
        }
    }
}




