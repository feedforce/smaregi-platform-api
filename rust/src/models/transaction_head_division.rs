/*
 * スマレジ
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 1.0.0
 * 
 * Generated by: https://openapi-generator.tech
 */

/// TransactionHeadDivision : 取引区分：取引を識別する区分。 （1:通常、2:入金、3:出金、4:預かり金、 5:預かり金返金、6:ポイント加算、7:ポイント減算、8:ポイント失効、9:回数券、10:取置き、11:チップ、13:マイル加算、14:マイル減算、15:バリューカード入金、16:領収証）

/// 取引区分：取引を識別する区分。 （1:通常、2:入金、3:出金、4:預かり金、 5:預かり金返金、6:ポイント加算、7:ポイント減算、8:ポイント失効、9:回数券、10:取置き、11:チップ、13:マイル加算、14:マイル減算、15:バリューカード入金、16:領収証）
#[derive(Clone, Copy, Debug, Eq, PartialEq, Ord, PartialOrd, Hash, Serialize, Deserialize)]
pub enum TransactionHeadDivision {
    #[serde(rename = "1")]
    Normal,
    #[serde(rename = "2")]
    MoneyDeposit,
    #[serde(rename = "3")]
    MoneyWithdrawal,
    #[serde(rename = "4")]
    Deposit,
    #[serde(rename = "5")]
    DepositRefund,
    #[serde(rename = "6")]
    AddPoints,
    #[serde(rename = "7")]
    SubtractPoints,
    #[serde(rename = "8")]
    ExpirePoints,
    #[serde(rename = "9")]
    Coupon,
    #[serde(rename = "10")]
    Hold,
    #[serde(rename = "11")]
    Tip,
    #[serde(rename = "13")]
    AddMiles,
    #[serde(rename = "14")]
    SubtractMiles,
    #[serde(rename = "15")]
    ValueCardDeposit,
    #[serde(rename = "16")]
    Receipt,

}

impl ToString for TransactionHeadDivision {
    fn to_string(&self) -> String {
        match self {
            Self::Normal => String::from("1"),
            Self::MoneyDeposit => String::from("2"),
            Self::MoneyWithdrawal => String::from("3"),
            Self::Deposit => String::from("4"),
            Self::DepositRefund => String::from("5"),
            Self::AddPoints => String::from("6"),
            Self::SubtractPoints => String::from("7"),
            Self::ExpirePoints => String::from("8"),
            Self::Coupon => String::from("9"),
            Self::Hold => String::from("10"),
            Self::Tip => String::from("11"),
            Self::AddMiles => String::from("13"),
            Self::SubtractMiles => String::from("14"),
            Self::ValueCardDeposit => String::from("15"),
            Self::Receipt => String::from("16"),
        }
    }
}




