<?php
/**
 * CouponItemsForTransactions
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
 * CouponItemsForTransactions Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class CouponItemsForTransactions implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'couponItemsForTransactions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'transaction_coupon_detail_id' => 'string',
        'transaction_coupon_id' => 'string',
        'terminal_tran_coupon_id' => 'string',
        'transaction_detail_id' => 'string',
        'coupon_item_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'transaction_coupon_detail_id' => null,
        'transaction_coupon_id' => null,
        'terminal_tran_coupon_id' => null,
        'transaction_detail_id' => null,
        'coupon_item_id' => null
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
        'transaction_coupon_detail_id' => 'transactionCouponDetailId',
        'transaction_coupon_id' => 'transactionCouponId',
        'terminal_tran_coupon_id' => 'terminalTranCouponId',
        'transaction_detail_id' => 'transactionDetailId',
        'coupon_item_id' => 'couponItemId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'transaction_coupon_detail_id' => 'setTransactionCouponDetailId',
        'transaction_coupon_id' => 'setTransactionCouponId',
        'terminal_tran_coupon_id' => 'setTerminalTranCouponId',
        'transaction_detail_id' => 'setTransactionDetailId',
        'coupon_item_id' => 'setCouponItemId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'transaction_coupon_detail_id' => 'getTransactionCouponDetailId',
        'transaction_coupon_id' => 'getTransactionCouponId',
        'terminal_tran_coupon_id' => 'getTerminalTranCouponId',
        'transaction_detail_id' => 'getTransactionDetailId',
        'coupon_item_id' => 'getCouponItemId'
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
        $this->container['transaction_coupon_detail_id'] = $data['transaction_coupon_detail_id'] ?? null;
        $this->container['transaction_coupon_id'] = $data['transaction_coupon_id'] ?? null;
        $this->container['terminal_tran_coupon_id'] = $data['terminal_tran_coupon_id'] ?? null;
        $this->container['transaction_detail_id'] = $data['transaction_detail_id'] ?? null;
        $this->container['coupon_item_id'] = $data['coupon_item_id'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['transaction_coupon_detail_id']) && (mb_strlen($this->container['transaction_coupon_detail_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'transaction_coupon_detail_id', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['transaction_coupon_id']) && (mb_strlen($this->container['transaction_coupon_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'transaction_coupon_id', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['terminal_tran_coupon_id']) && (mb_strlen($this->container['terminal_tran_coupon_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'terminal_tran_coupon_id', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['transaction_detail_id']) && (mb_strlen($this->container['transaction_detail_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'transaction_detail_id', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['coupon_item_id']) && (mb_strlen($this->container['coupon_item_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'coupon_item_id', the character length must be bigger than or equal to 1.";
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
     * Gets transaction_coupon_detail_id
     *
     * @return string|null
     */
    public function getTransactionCouponDetailId()
    {
        return $this->container['transaction_coupon_detail_id'];
    }

    /**
     * Sets transaction_coupon_detail_id
     *
     * @param string|null $transaction_coupon_detail_id transaction_coupon_detail_id
     *
     * @return self
     */
    public function setTransactionCouponDetailId($transaction_coupon_detail_id)
    {

        if (!is_null($transaction_coupon_detail_id) && (mb_strlen($transaction_coupon_detail_id) < 1)) {
            throw new \InvalidArgumentException('invalid length for $transaction_coupon_detail_id when calling CouponItemsForTransactions., must be bigger than or equal to 1.');
        }

        $this->container['transaction_coupon_detail_id'] = $transaction_coupon_detail_id;

        return $this;
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
            throw new \InvalidArgumentException('invalid length for $transaction_coupon_id when calling CouponItemsForTransactions., must be bigger than or equal to 1.');
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
            throw new \InvalidArgumentException('invalid length for $terminal_tran_coupon_id when calling CouponItemsForTransactions., must be bigger than or equal to 1.');
        }

        $this->container['terminal_tran_coupon_id'] = $terminal_tran_coupon_id;

        return $this;
    }

    /**
     * Gets transaction_detail_id
     *
     * @return string|null
     */
    public function getTransactionDetailId()
    {
        return $this->container['transaction_detail_id'];
    }

    /**
     * Sets transaction_detail_id
     *
     * @param string|null $transaction_detail_id transaction_detail_id
     *
     * @return self
     */
    public function setTransactionDetailId($transaction_detail_id)
    {

        if (!is_null($transaction_detail_id) && (mb_strlen($transaction_detail_id) < 1)) {
            throw new \InvalidArgumentException('invalid length for $transaction_detail_id when calling CouponItemsForTransactions., must be bigger than or equal to 1.');
        }

        $this->container['transaction_detail_id'] = $transaction_detail_id;

        return $this;
    }

    /**
     * Gets coupon_item_id
     *
     * @return string|null
     */
    public function getCouponItemId()
    {
        return $this->container['coupon_item_id'];
    }

    /**
     * Sets coupon_item_id
     *
     * @param string|null $coupon_item_id coupon_item_id
     *
     * @return self
     */
    public function setCouponItemId($coupon_item_id)
    {

        if (!is_null($coupon_item_id) && (mb_strlen($coupon_item_id) < 1)) {
            throw new \InvalidArgumentException('invalid length for $coupon_item_id when calling CouponItemsForTransactions., must be bigger than or equal to 1.');
        }

        $this->container['coupon_item_id'] = $coupon_item_id;

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


