<?php
/**
 * PostCreateCoupons
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

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * PostCreateCoupons Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class PostCreateCoupons implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'postCreateCoupons';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'coupon_name' => 'string',
        'coupon_division' => '\OpenAPI\Client\Model\CouponDivision',
        'serial_number' => 'string',
        'summary' => 'string',
        'award_type' => '\OpenAPI\Client\Model\AwardType',
        'award_value' => 'string',
        'apply_condition_division' => '\OpenAPI\Client\Model\ApplyConditionDivision',
        'min_target_price' => 'string',
        'max_target_price' => 'string',
        'start_date' => 'string',
        'end_date' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'coupon_name' => null,
        'coupon_division' => null,
        'serial_number' => null,
        'summary' => null,
        'award_type' => null,
        'award_value' => null,
        'apply_condition_division' => null,
        'min_target_price' => null,
        'max_target_price' => null,
        'start_date' => null,
        'end_date' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'coupon_name' => 'couponName',
        'coupon_division' => 'couponDivision',
        'serial_number' => 'serialNumber',
        'summary' => 'summary',
        'award_type' => 'awardType',
        'award_value' => 'awardValue',
        'apply_condition_division' => 'applyConditionDivision',
        'min_target_price' => 'minTargetPrice',
        'max_target_price' => 'maxTargetPrice',
        'start_date' => 'startDate',
        'end_date' => 'endDate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'coupon_name' => 'setCouponName',
        'coupon_division' => 'setCouponDivision',
        'serial_number' => 'setSerialNumber',
        'summary' => 'setSummary',
        'award_type' => 'setAwardType',
        'award_value' => 'setAwardValue',
        'apply_condition_division' => 'setApplyConditionDivision',
        'min_target_price' => 'setMinTargetPrice',
        'max_target_price' => 'setMaxTargetPrice',
        'start_date' => 'setStartDate',
        'end_date' => 'setEndDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'coupon_name' => 'getCouponName',
        'coupon_division' => 'getCouponDivision',
        'serial_number' => 'getSerialNumber',
        'summary' => 'getSummary',
        'award_type' => 'getAwardType',
        'award_value' => 'getAwardValue',
        'apply_condition_division' => 'getApplyConditionDivision',
        'min_target_price' => 'getMinTargetPrice',
        'max_target_price' => 'getMaxTargetPrice',
        'start_date' => 'getStartDate',
        'end_date' => 'getEndDate'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['coupon_name'] = $data['coupon_name'] ?? null;
        $this->container['coupon_division'] = $data['coupon_division'] ?? null;
        $this->container['serial_number'] = $data['serial_number'] ?? null;
        $this->container['summary'] = $data['summary'] ?? null;
        $this->container['award_type'] = $data['award_type'] ?? null;
        $this->container['award_value'] = $data['award_value'] ?? null;
        $this->container['apply_condition_division'] = $data['apply_condition_division'] ?? null;
        $this->container['min_target_price'] = $data['min_target_price'] ?? null;
        $this->container['max_target_price'] = $data['max_target_price'] ?? null;
        $this->container['start_date'] = $data['start_date'] ?? null;
        $this->container['end_date'] = $data['end_date'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['coupon_name'] === null) {
            $invalidProperties[] = "'coupon_name' can't be null";
        }
        if ((mb_strlen($this->container['coupon_name']) < 1)) {
            $invalidProperties[] = "invalid value for 'coupon_name', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['serial_number'] === null) {
            $invalidProperties[] = "'serial_number' can't be null";
        }
        if ((mb_strlen($this->container['serial_number']) < 1)) {
            $invalidProperties[] = "invalid value for 'serial_number', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['summary']) && (mb_strlen($this->container['summary']) < 1)) {
            $invalidProperties[] = "invalid value for 'summary', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['award_type'] === null) {
            $invalidProperties[] = "'award_type' can't be null";
        }
        if ($this->container['award_value'] === null) {
            $invalidProperties[] = "'award_value' can't be null";
        }
        if ((mb_strlen($this->container['award_value']) < 1)) {
            $invalidProperties[] = "invalid value for 'award_value', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['apply_condition_division'] === null) {
            $invalidProperties[] = "'apply_condition_division' can't be null";
        }
        if (!is_null($this->container['min_target_price']) && (mb_strlen($this->container['min_target_price']) < 1)) {
            $invalidProperties[] = "invalid value for 'min_target_price', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['max_target_price']) && (mb_strlen($this->container['max_target_price']) < 1)) {
            $invalidProperties[] = "invalid value for 'max_target_price', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['start_date']) && (mb_strlen($this->container['start_date']) < 1)) {
            $invalidProperties[] = "invalid value for 'start_date', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['end_date']) && (mb_strlen($this->container['end_date']) < 1)) {
            $invalidProperties[] = "invalid value for 'end_date', the character length must be bigger than or equal to 1.";
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets coupon_name
     *
     * @return string
     */
    public function getCouponName()
    {
        return $this->container['coupon_name'];
    }

    /**
     * Sets coupon_name
     *
     * @param string $coupon_name coupon_name
     *
     * @return self
     */
    public function setCouponName($coupon_name)
    {

        if ((mb_strlen($coupon_name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $coupon_name when calling PostCreateCoupons., must be bigger than or equal to 1.');
        }

        $this->container['coupon_name'] = $coupon_name;

        return $this;
    }

    /**
     * Gets coupon_division
     *
     * @return \OpenAPI\Client\Model\CouponDivision|null
     */
    public function getCouponDivision()
    {
        return $this->container['coupon_division'];
    }

    /**
     * Sets coupon_division
     *
     * @param \OpenAPI\Client\Model\CouponDivision|null $coupon_division coupon_division
     *
     * @return self
     */
    public function setCouponDivision($coupon_division)
    {
        $this->container['coupon_division'] = $coupon_division;

        return $this;
    }

    /**
     * Gets serial_number
     *
     * @return string
     */
    public function getSerialNumber()
    {
        return $this->container['serial_number'];
    }

    /**
     * Sets serial_number
     *
     * @param string $serial_number serial_number
     *
     * @return self
     */
    public function setSerialNumber($serial_number)
    {

        if ((mb_strlen($serial_number) < 1)) {
            throw new \InvalidArgumentException('invalid length for $serial_number when calling PostCreateCoupons., must be bigger than or equal to 1.');
        }

        $this->container['serial_number'] = $serial_number;

        return $this;
    }

    /**
     * Gets summary
     *
     * @return string|null
     */
    public function getSummary()
    {
        return $this->container['summary'];
    }

    /**
     * Sets summary
     *
     * @param string|null $summary summary
     *
     * @return self
     */
    public function setSummary($summary)
    {

        if (!is_null($summary) && (mb_strlen($summary) < 1)) {
            throw new \InvalidArgumentException('invalid length for $summary when calling PostCreateCoupons., must be bigger than or equal to 1.');
        }

        $this->container['summary'] = $summary;

        return $this;
    }

    /**
     * Gets award_type
     *
     * @return \OpenAPI\Client\Model\AwardType
     */
    public function getAwardType()
    {
        return $this->container['award_type'];
    }

    /**
     * Sets award_type
     *
     * @param \OpenAPI\Client\Model\AwardType $award_type award_type
     *
     * @return self
     */
    public function setAwardType($award_type)
    {
        $this->container['award_type'] = $award_type;

        return $this;
    }

    /**
     * Gets award_value
     *
     * @return string
     */
    public function getAwardValue()
    {
        return $this->container['award_value'];
    }

    /**
     * Sets award_value
     *
     * @param string $award_value award_value
     *
     * @return self
     */
    public function setAwardValue($award_value)
    {

        if ((mb_strlen($award_value) < 1)) {
            throw new \InvalidArgumentException('invalid length for $award_value when calling PostCreateCoupons., must be bigger than or equal to 1.');
        }

        $this->container['award_value'] = $award_value;

        return $this;
    }

    /**
     * Gets apply_condition_division
     *
     * @return \OpenAPI\Client\Model\ApplyConditionDivision
     */
    public function getApplyConditionDivision()
    {
        return $this->container['apply_condition_division'];
    }

    /**
     * Sets apply_condition_division
     *
     * @param \OpenAPI\Client\Model\ApplyConditionDivision $apply_condition_division apply_condition_division
     *
     * @return self
     */
    public function setApplyConditionDivision($apply_condition_division)
    {
        $this->container['apply_condition_division'] = $apply_condition_division;

        return $this;
    }

    /**
     * Gets min_target_price
     *
     * @return string|null
     */
    public function getMinTargetPrice()
    {
        return $this->container['min_target_price'];
    }

    /**
     * Sets min_target_price
     *
     * @param string|null $min_target_price min_target_price
     *
     * @return self
     */
    public function setMinTargetPrice($min_target_price)
    {

        if (!is_null($min_target_price) && (mb_strlen($min_target_price) < 1)) {
            throw new \InvalidArgumentException('invalid length for $min_target_price when calling PostCreateCoupons., must be bigger than or equal to 1.');
        }

        $this->container['min_target_price'] = $min_target_price;

        return $this;
    }

    /**
     * Gets max_target_price
     *
     * @return string|null
     */
    public function getMaxTargetPrice()
    {
        return $this->container['max_target_price'];
    }

    /**
     * Sets max_target_price
     *
     * @param string|null $max_target_price max_target_price
     *
     * @return self
     */
    public function setMaxTargetPrice($max_target_price)
    {

        if (!is_null($max_target_price) && (mb_strlen($max_target_price) < 1)) {
            throw new \InvalidArgumentException('invalid length for $max_target_price when calling PostCreateCoupons., must be bigger than or equal to 1.');
        }

        $this->container['max_target_price'] = $max_target_price;

        return $this;
    }

    /**
     * Gets start_date
     *
     * @return string|null
     */
    public function getStartDate()
    {
        return $this->container['start_date'];
    }

    /**
     * Sets start_date
     *
     * @param string|null $start_date start_date
     *
     * @return self
     */
    public function setStartDate($start_date)
    {

        if (!is_null($start_date) && (mb_strlen($start_date) < 1)) {
            throw new \InvalidArgumentException('invalid length for $start_date when calling PostCreateCoupons., must be bigger than or equal to 1.');
        }

        $this->container['start_date'] = $start_date;

        return $this;
    }

    /**
     * Gets end_date
     *
     * @return string|null
     */
    public function getEndDate()
    {
        return $this->container['end_date'];
    }

    /**
     * Sets end_date
     *
     * @param string|null $end_date end_date
     *
     * @return self
     */
    public function setEndDate($end_date)
    {

        if (!is_null($end_date) && (mb_strlen($end_date) < 1)) {
            throw new \InvalidArgumentException('invalid length for $end_date when calling PostCreateCoupons., must be bigger than or equal to 1.');
        }

        $this->container['end_date'] = $end_date;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


