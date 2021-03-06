<?php
/**
 * TransactionHeadDivision
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * スマレジ
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 1.0.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.1.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;
use \OpenAPI\Client\ObjectSerializer;

/**
 * TransactionHeadDivision Class Doc Comment
 *
 * @category Class
 * @description 取引区分：取引を識別する区分。 （1:通常、2:入金、3:出金、4:預かり金、 5:預かり金返金、6:ポイント加算、7:ポイント減算、8:ポイント失効、9:回数券、10:取置き、11:チップ、13:マイル加算、14:マイル減算、15:バリューカード入金、16:領収証）
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class TransactionHeadDivision
{
    /**
     * Possible values of this enum
     */
    const Normal = '1';
    const MoneyDeposit = '2';
    const MoneyWithdrawal = '3';
    const Deposit = '4';
    const DepositRefund = '5';
    const AddPoints = '6';
    const SubtractPoints = '7';
    const ExpirePoints = '8';
    const Coupon = '9';
    const Hold = '10';
    const Tip = '11';
    const AddMiles = '13';
    const SubtractMiles = '14';
    const ValueCardDeposit = '15';
    const Receipt = '16';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::Normal,
            self::MoneyDeposit,
            self::MoneyWithdrawal,
            self::Deposit,
            self::DepositRefund,
            self::AddPoints,
            self::SubtractPoints,
            self::ExpirePoints,
            self::Coupon,
            self::Hold,
            self::Tip,
            self::AddMiles,
            self::SubtractMiles,
            self::ValueCardDeposit,
            self::Receipt,
        ];
    }
}


