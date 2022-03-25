/*
 * スマレジ
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 1.0.0
 * 
 * Generated by: https://openapi-generator.tech
 */


/// 
#[derive(Clone, Copy, Debug, Eq, PartialEq, Ord, PartialOrd, Hash, Serialize, Deserialize)]
pub enum WithEnum {
    #[serde(rename = "all")]
    All,
    #[serde(rename = "none")]
    None,

}

impl ToString for WithEnum {
    fn to_string(&self) -> String {
        match self {
            Self::All => String::from("all"),
            Self::None => String::from("none"),
        }
    }
}



