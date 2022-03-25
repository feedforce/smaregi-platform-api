<?php
/**
 * CouponsForTransactions
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
 * CouponsForTransactions Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class CouponsForTransactions implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'couponsForTransactions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'transaction_coupon_id' => 'string',
        'terminal_tran_coupon_id' => 'string',
        'coupon_id' => 'string',
        'coupon_name' => 'string',
        'coupon_division' => '\OpenAPI\Client\Model\CouponDivision',
        'serial_number' => 'string',
        'award_type' => '\OpenAPI\Client\Model\AwardType',
        'award_value' => 'string',
        'discount_price' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'transaction_coupon_id' => null,
        'terminal_tran_coupon_id' => null,
        'coupon_id' => null,
        'coupon_name' => null,
        'coupon_division' => null,
        'serial_number' => null,
        'award_type' => null,
        'award_value' => null,
        'discount_price' => null
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
        'transaction_coupon_id' => 'transactionCouponId',
        'terminal_tran_coupon_id' => 'terminalTranCouponId',
        'coupon_id' => 'couponId',
        'coupon_name' => 'couponName',
        'coupon_division' => 'couponDivision',
        'serial_number' => 'serialNumber',
        'award_type' => 'awardType',
        'award_value' => 'awardValue',
        'discount_price' => 'discountPrice'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'transaction_coupon_id' => 'setTransactionCouponId',
        'terminal_tran_coupon_id' => 'setTerminalTranCouponId',
        'coupon_id' => 'setCouponId',
        'coupon_name' => 'setCouponName',
        'coupon_division' => 'setCouponDivision',
        'serial_number' => 'setSerialNumber',
        'award_type' => 'setAwardType',
        'award_value' => 'setAwardValue',
        'discount_price' => 'setDiscountPrice'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'transaction_coupon_id' => 'getTransactionCouponId',
        'terminal_tran_coupon_id' => 'getTerminalTranCouponId',
        'coupon_id' => 'getCouponId',
        'coupon_name' => 'getCouponName',
        'coupon_division' => 'getCouponDivision',
        'serial_number' => 'getSerialNumber',
        'award_type' => 'getAwardType',
        'award_value' => 'getAwardValue',
        'discount_price' => 'getDiscountPrice'
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
        $this->container['transaction_coupon_id'] = $data['transaction_coupon_id'] ?? null;
        $this->container['terminal_tran_coupon_id'] = $data['terminal_tran_coupon_id'] ?? null;
        $this->container['coupon_id'] = $data['coupon_id'] ?? null;
        $this->container['coupon_name'] = $data['coupon_name'] ?? null;
        $this->container['coupon_division'] = $data['coupon_division'] ?? null;
        $this->container['serial_number'] = $data['serial_number'] ?? null;
        $this->container['award_type'] = $data['award_type'] ?? null;
        $this->container['award_value'] = $data['award_value'] ?? null;
        $this->container['discount_price'] = $data['discount_price'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['transaction_coupon_id']) && (mb_strlen($this->container['transaction_coupon_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'transaction_coupon_id', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['terminal_tran_coupon_id']) && (mb_strlen($this->container['terminal_tran_coupon_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'terminal_tran_coupon_id', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['coupon_id'] === null) {
            $invalidProperties[] = "'coupon_id' can't be null";
        }
        if ((mb_strlen($this->container['coupon_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'coupon_id', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['coupon_name']) && (mb_strlen($this->container['coupon_name']) < 1)) {
            $invalidProperties[] = "invalid value for 'coupon_name', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['serial_number']) && (mb_strlen($this->container['serial_number']) < 1)) {
            $invalidProperties[] = "invalid value for 'serial_number', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['award_value']) && (mb_strlen($this->container['award_value']) < 1)) {
            $invalidProperties[] = "invalid value for 'award_value', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['discount_price']) && (mb_strlen($this->container['discount_price']) < 1)) {
            $invalidProperties[] = "invalid value for 'discount_price', the character length must be bigger than or equal to 1.";
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
     * Gets transaction_coupon_id
     *
     * @return string|null
     */
    public function getTransactionCouponId()
    {
        return $this->container['transaction_coupon_id'];
    }

    /**
     * Sets transaction_coupon_id
     *
     * @param string|null $transaction_coupon_id transaction_coupon_id
     *
     * @return self
     */
    public function setTransactionCouponId($transaction_coupon_id)
    {

        if (!is_null($transaction_coupon_id) && (mb_strlen($transaction_coupon_id) < 1)) {
            throw new \InvalidArgumentException('invalid length for $transaction_coupon_id when calling CouponsForTransactions., must be bigger than or equal to 1.');
        }

        $this->container['transaction_coupon_id'] = $transaction_coupon_id;

        return $this;
    }

    /**
     * Gets terminal_tran_coupon_id
     *
     * @return string|null
     */
    public function getTerminalTranCouponId()
    {
        return $this->container['terminal_tran_coupon_id'];
    }

    /**
     * Sets terminal_tran_coupon_id
     *
     * @param string|null $terminal_tran_coupon_id terminal_tran_coupon_id
     *
     * @return self
     */
    public function setTerminalTranCouponId($terminal_tran_coupon_id)
    {

        if (!is_null($terminal_tran_coupon_id) && (mb_strlen($terminal_tran_coupon_id) < 1)) {
            throw new \InvalidArgumentException('invalid length for $terminal_tran_coupon_id when calling CouponsForTransactions., must be bigger than or equal to 1.');
        }

        $this->container['terminal_tran_coupon_id'] = $terminal_tran_coupon_id;

        return $this;
    }

    /**
     * Gets coupon_id
     *
     * @return string
     */
    public function getCouponId()
    {
        return $this->container['coupon_id'];
    }

    /**
     * Sets coupon_id
     *
     * @param string $coupon_id coupon_id
     *
     * @return self
     */
    public function setCouponId($coupon_id)
    {

        if ((mb_strlen($coupon_id) < 1)) {
            throw new \InvalidArgumentException('invalid length for $coupon_id when calling CouponsForTransactions., must be bigger than or equal to 1.');
        }

        $this->container['coupon_id'] = $coupon_id;

        return $this;
    }

    /**
     * Gets coupon_name
     *
     * @return string|null
     */
    public function getCouponName()
    {
        return $this->container['coupon_name'];
    }

    /**
     * Sets coupon_name
     *
     * @param string|null $coupon_name coupon_name
     *
     * @return self
     */
    public function setCouponName($coupon_name)
    {

        if (!is_null($coupon_name) && (mb_strlen($coupon_name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $coupon_name when calling CouponsForTransactions., must be bigger than or equal to 1.');
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
     * @return string|null
     */
    public function getSerialNumber()
    {
        return $this->container['serial_number'];
    }

    /**
     * Sets serial_number
     *
     * @param string|null $serial_number serial_number
     *
     * @return self
     */
    public function setSerialNumber($serial_number)
    {

        if (!is_null($serial_number) && (mb_strlen($serial_number) < 1)) {
            throw new \InvalidArgumentException('invalid length for $serial_number when calling CouponsForTransactions., must be bigger than or equal to 1.');
        }

        $this->container['serial_number'] = $serial_number;

        return $this;
    }

    /**
     * Gets award_type
     *
     * @return \OpenAPI\Client\Model\AwardType|null
     */
    public function getAwardType()
    {
        return $this->container['award_type'];
    }

    /**
     * Sets award_type
     *
     * @param \OpenAPI\Client\Model\AwardType|null $award_type award_type
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
     * @return string|null
     */
    public function getAwardValue()
    {
        return $this->container['award_value'];
    }

    /**
     * Sets award_value
     *
     * @param string|null $award_value award_value
     *
     * @return self
     */
    public function setAwardValue($award_value)
    {

        if (!is_null($award_value) && (mb_strlen($award_value) < 1)) {
            throw new \InvalidArgumentException('invalid length for $award_value when calling CouponsForTransactions., must be bigger than or equal to 1.');
        }

        $this->container['award_value'] = $award_value;

        return $this;
    }

    /**
     * Gets discount_price
     *
     * @return string|null
     */
    public function getDiscountPrice()
    {
        return $this->container['discount_price'];
    }

    /**
     * Sets discount_price
     *
     * @param string|null $discount_price discount_price
     *
     * @return self
     */
    public function setDiscountPrice($discount_price)
    {

        if (!is_null($discount_price) && (mb_strlen($discount_price) < 1)) {
            throw new \InvalidArgumentException('invalid length for $discount_price when calling CouponsForTransactions., must be bigger than or equal to 1.');
        }

        $this->container['discount_price'] = $discount_price;

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

