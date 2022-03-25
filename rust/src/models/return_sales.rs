/*
 * スマレジ
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 1.0.0
 * 
 * Generated by: https://openapi-generator.tech
 */

/// ReturnSales : 返品取引区分：(0:通常、1:返品販売) 

/// 返品取引区分：(0:通常、1:返品販売) 
#[derive(Clone, Copy, Debug, Eq, PartialEq, Ord, PartialOrd, Hash, Serialize, Deserialize)]
pub enum ReturnSales {
    #[serde(rename = "0")]
    Normal,
    #[serde(rename = "1")]
    ReturnSales,

}

impl ToString for ReturnSales {
    fn to_string(&self) -> String {
        match self {
            Self::Normal => String::from("0"),
            Self::ReturnSales => String::from("1"),
        }
    }
}



