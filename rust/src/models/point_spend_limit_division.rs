/*
 * スマレジ
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 1.0.0
 * 
 * Generated by: https://openapi-generator.tech
 */

/// PointSpendLimitDivision : ポイント利用時にどこまで利用可能かを識別する区分 0: 保有ポイントまで利用可能 1: 値引き対象額以下で最小のポイントまで利用可能 2: 値引き対象額以上で最小のポイントまで利用可能 ポイント機能を使用しない場合は0 例）100ポイント単位利用可。300ポイント保有する会員が150円の会計を行った場合 0: 300ポイントまで利用可能 1: 100ポイントまで利用可能 2: 200ポイントまで利用可能

/// ポイント利用時にどこまで利用可能かを識別する区分 0: 保有ポイントまで利用可能 1: 値引き対象額以下で最小のポイントまで利用可能 2: 値引き対象額以上で最小のポイントまで利用可能 ポイント機能を使用しない場合は0 例）100ポイント単位利用可。300ポイント保有する会員が150円の会計を行った場合 0: 300ポイントまで利用可能 1: 100ポイントまで利用可能 2: 200ポイントまで利用可能
#[derive(Clone, Copy, Debug, Eq, PartialEq, Ord, PartialOrd, Hash, Serialize, Deserialize)]
pub enum PointSpendLimitDivision {
    #[serde(rename = "0")]
    UpToPoints,
    #[serde(rename = "1")]
    BelowPointUseUnit,
    #[serde(rename = "2")]
    AbovePointUseUnit,

}

impl ToString for PointSpendLimitDivision {
    fn to_string(&self) -> String {
        match self {
            Self::UpToPoints => String::from("0"),
            Self::BelowPointUseUnit => String::from("1"),
            Self::AbovePointUseUnit => String::from("2"),
        }
    }
}




