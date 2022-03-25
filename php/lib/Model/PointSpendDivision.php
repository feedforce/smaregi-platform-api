<?php
/**
 * PointSpendDivision
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
 * PointSpendDivision Class Doc Comment
 *
 * @category Class
 * @description 1：外税を含む合計からポイント利用分を差し引く 2：外税を含まない合計からポイント利用分を差し引く ポイント機能を使用しない場合は1
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PointSpendDivision
{
    /**
     * Possible values of this enum
     */
    const FromTaxIncluded = '1';
    const FromTaxExcluded = '2';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::FromTaxIncluded,
            self::FromTaxExcluded,
        ];
    }
}

