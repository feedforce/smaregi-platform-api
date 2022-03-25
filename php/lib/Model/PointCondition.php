<?php
/**
 * PointCondition
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
 * PointCondition Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class PointCondition implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'pointCondition';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'store_id' => 'string',
        'point_use_division' => '\OpenAPI\Client\Model\PointUseDivision',
        'spend_rate' => 'string',
        'point_giving_unit_price' => 'string',
        'point_giving_unit' => 'string',
        'point_giving_division' => '\OpenAPI\Client\Model\PointGivingDivision',
        'point_use_unit' => 'string',
        'point_spend_division' => '\OpenAPI\Client\Model\PointSpendDivision',
        'point_spend_limit_division' => '\OpenAPI\Client\Model\PointSpendLimitDivision',
        'expire_division' => '\OpenAPI\Client\Model\ExpireDivision',
        'expire_limit' => 'string',
        'mileage_division' => '\OpenAPI\Client\Model\MileageDivision'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'store_id' => null,
        'point_use_division' => null,
        'spend_rate' => null,
        'point_giving_unit_price' => null,
        'point_giving_unit' => null,
        'point_giving_division' => null,
        'point_use_unit' => null,
        'point_spend_division' => null,
        'point_spend_limit_division' => null,
        'expire_division' => null,
        'expire_limit' => null,
        'mileage_division' => null
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
        'store_id' => 'storeId',
        'point_use_division' => 'pointUseDivision',
        'spend_rate' => 'spendRate',
        'point_giving_unit_price' => 'pointGivingUnitPrice',
        'point_giving_unit' => 'pointGivingUnit',
        'point_giving_division' => 'pointGivingDivision',
        'point_use_unit' => 'pointUseUnit',
        'point_spend_division' => 'pointSpendDivision',
        'point_spend_limit_division' => 'pointSpendLimitDivision',
        'expire_division' => 'expireDivision',
        'expire_limit' => 'expireLimit',
        'mileage_division' => 'mileageDivision'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'store_id' => 'setStoreId',
        'point_use_division' => 'setPointUseDivision',
        'spend_rate' => 'setSpendRate',
        'point_giving_unit_price' => 'setPointGivingUnitPrice',
        'point_giving_unit' => 'setPointGivingUnit',
        'point_giving_division' => 'setPointGivingDivision',
        'point_use_unit' => 'setPointUseUnit',
        'point_spend_division' => 'setPointSpendDivision',
        'point_spend_limit_division' => 'setPointSpendLimitDivision',
        'expire_division' => 'setExpireDivision',
        'expire_limit' => 'setExpireLimit',
        'mileage_division' => 'setMileageDivision'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'store_id' => 'getStoreId',
        'point_use_division' => 'getPointUseDivision',
        'spend_rate' => 'getSpendRate',
        'point_giving_unit_price' => 'getPointGivingUnitPrice',
        'point_giving_unit' => 'getPointGivingUnit',
        'point_giving_division' => 'getPointGivingDivision',
        'point_use_unit' => 'getPointUseUnit',
        'point_spend_division' => 'getPointSpendDivision',
        'point_spend_limit_division' => 'getPointSpendLimitDivision',
        'expire_division' => 'getExpireDivision',
        'expire_limit' => 'getExpireLimit',
        'mileage_division' => 'getMileageDivision'
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
        $this->container['store_id'] = $data['store_id'] ?? null;
        $this->container['point_use_division'] = $data['point_use_division'] ?? null;
        $this->container['spend_rate'] = $data['spend_rate'] ?? null;
        $this->container['point_giving_unit_price'] = $data['point_giving_unit_price'] ?? null;
        $this->container['point_giving_unit'] = $data['point_giving_unit'] ?? null;
        $this->container['point_giving_division'] = $data['point_giving_division'] ?? null;
        $this->container['point_use_unit'] = $data['point_use_unit'] ?? null;
        $this->container['point_spend_division'] = $data['point_spend_division'] ?? null;
        $this->container['point_spend_limit_division'] = $data['point_spend_limit_division'] ?? null;
        $this->container['expire_division'] = $data['expire_division'] ?? null;
        $this->container['expire_limit'] = $data['expire_limit'] ?? null;
        $this->container['mileage_division'] = $data['mileage_division'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['store_id']) && (mb_strlen($this->container['store_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'store_id', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['spend_rate']) && (mb_strlen($this->container['spend_rate']) < 1)) {
            $invalidProperties[] = "invalid value for 'spend_rate', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['point_giving_unit_price']) && (mb_strlen($this->container['point_giving_unit_price']) < 1)) {
            $invalidProperties[] = "invalid value for 'point_giving_unit_price', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['point_giving_unit']) && (mb_strlen($this->container['point_giving_unit']) < 1)) {
            $invalidProperties[] = "invalid value for 'point_giving_unit', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['point_use_unit']) && (mb_strlen($this->container['point_use_unit']) < 1)) {
            $invalidProperties[] = "invalid value for 'point_use_unit', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['expire_limit']) && (mb_strlen($this->container['expire_limit']) < 1)) {
            $invalidProperties[] = "invalid value for 'expire_limit', the character length must be bigger than or equal to 1.";
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
     * Gets store_id
     *
     * @return string|null
     */
    public function getStoreId()
    {
        return $this->container['store_id'];
    }

    /**
     * Sets store_id
     *
     * @param string|null $store_id store_id
     *
     * @return self
     */
    public function setStoreId($store_id)
    {

        if (!is_null($store_id) && (mb_strlen($store_id) < 1)) {
            throw new \InvalidArgumentException('invalid length for $store_id when calling PointCondition., must be bigger than or equal to 1.');
        }

        $this->container['store_id'] = $store_id;

        return $this;
    }

    /**
     * Gets point_use_division
     *
     * @return \OpenAPI\Client\Model\PointUseDivision|null
     */
    public function getPointUseDivision()
    {
        return $this->container['point_use_division'];
    }

    /**
     * Sets point_use_division
     *
     * @param \OpenAPI\Client\Model\PointUseDivision|null $point_use_division point_use_division
     *
     * @return self
     */
    public function setPointUseDivision($point_use_division)
    {
        $this->container['point_use_division'] = $point_use_division;

        return $this;
    }

    /**
     * Gets spend_rate
     *
     * @return string|null
     */
    public function getSpendRate()
    {
        return $this->container['spend_rate'];
    }

    /**
     * Sets spend_rate
     *
     * @param string|null $spend_rate spend_rate
     *
     * @return self
     */
    public function setSpendRate($spend_rate)
    {

        if (!is_null($spend_rate) && (mb_strlen($spend_rate) < 1)) {
            throw new \InvalidArgumentException('invalid length for $spend_rate when calling PointCondition., must be bigger than or equal to 1.');
        }

        $this->container['spend_rate'] = $spend_rate;

        return $this;
    }

    /**
     * Gets point_giving_unit_price
     *
     * @return string|null
     */
    public function getPointGivingUnitPrice()
    {
        return $this->container['point_giving_unit_price'];
    }

    /**
     * Sets point_giving_unit_price
     *
     * @param string|null $point_giving_unit_price point_giving_unit_price
     *
     * @return self
     */
    public function setPointGivingUnitPrice($point_giving_unit_price)
    {

        if (!is_null($point_giving_unit_price) && (mb_strlen($point_giving_unit_price) < 1)) {
            throw new \InvalidArgumentException('invalid length for $point_giving_unit_price when calling PointCondition., must be bigger than or equal to 1.');
        }

        $this->container['point_giving_unit_price'] = $point_giving_unit_price;

        return $this;
    }

    /**
     * Gets point_giving_unit
     *
     * @return string|null
     */
    public function getPointGivingUnit()
    {
        return $this->container['point_giving_unit'];
    }

    /**
     * Sets point_giving_unit
     *
     * @param string|null $point_giving_unit point_giving_unit
     *
     * @return self
     */
    public function setPointGivingUnit($point_giving_unit)
    {

        if (!is_null($point_giving_unit) && (mb_strlen($point_giving_unit) < 1)) {
            throw new \InvalidArgumentException('invalid length for $point_giving_unit when calling PointCondition., must be bigger than or equal to 1.');
        }

        $this->container['point_giving_unit'] = $point_giving_unit;

        return $this;
    }

    /**
     * Gets point_giving_division
     *
     * @return \OpenAPI\Client\Model\PointGivingDivision|null
     */
    public function getPointGivingDivision()
    {
        return $this->container['point_giving_division'];
    }

    /**
     * Sets point_giving_division
     *
     * @param \OpenAPI\Client\Model\PointGivingDivision|null $point_giving_division point_giving_division
     *
     * @return self
     */
    public function setPointGivingDivision($point_giving_division)
    {
        $this->container['point_giving_division'] = $point_giving_division;

        return $this;
    }

    /**
     * Gets point_use_unit
     *
     * @return string|null
     */
    public function getPointUseUnit()
    {
        return $this->container['point_use_unit'];
    }

    /**
     * Sets point_use_unit
     *
     * @param string|null $point_use_unit point_use_unit
     *
     * @return self
     */
    public function setPointUseUnit($point_use_unit)
    {

        if (!is_null($point_use_unit) && (mb_strlen($point_use_unit) < 1)) {
            throw new \InvalidArgumentException('invalid length for $point_use_unit when calling PointCondition., must be bigger than or equal to 1.');
        }

        $this->container['point_use_unit'] = $point_use_unit;

        return $this;
    }

    /**
     * Gets point_spend_division
     *
     * @return \OpenAPI\Client\Model\PointSpendDivision|null
     */
    public function getPointSpendDivision()
    {
        return $this->container['point_spend_division'];
    }

    /**
     * Sets point_spend_division
     *
     * @param \OpenAPI\Client\Model\PointSpendDivision|null $point_spend_division point_spend_division
     *
     * @return self
     */
    public function setPointSpendDivision($point_spend_division)
    {
        $this->container['point_spend_division'] = $point_spend_division;

        return $this;
    }

    /**
     * Gets point_spend_limit_division
     *
     * @return \OpenAPI\Client\Model\PointSpendLimitDivision|null
     */
    public function getPointSpendLimitDivision()
    {
        return $this->container['point_spend_limit_division'];
    }

    /**
     * Sets point_spend_limit_division
     *
     * @param \OpenAPI\Client\Model\PointSpendLimitDivision|null $point_spend_limit_division point_spend_limit_division
     *
     * @return self
     */
    public function setPointSpendLimitDivision($point_spend_limit_division)
    {
        $this->container['point_spend_limit_division'] = $point_spend_limit_division;

        return $this;
    }

    /**
     * Gets expire_division
     *
     * @return \OpenAPI\Client\Model\ExpireDivision|null
     */
    public function getExpireDivision()
    {
        return $this->container['expire_division'];
    }

    /**
     * Sets expire_division
     *
     * @param \OpenAPI\Client\Model\ExpireDivision|null $expire_division expire_division
     *
     * @return self
     */
    public function setExpireDivision($expire_division)
    {
        $this->container['expire_division'] = $expire_division;

        return $this;
    }

    /**
     * Gets expire_limit
     *
     * @return string|null
     */
    public function getExpireLimit()
    {
        return $this->container['expire_limit'];
    }

    /**
     * Sets expire_limit
     *
     * @param string|null $expire_limit expire_limit
     *
     * @return self
     */
    public function setExpireLimit($expire_limit)
    {

        if (!is_null($expire_limit) && (mb_strlen($expire_limit) < 1)) {
            throw new \InvalidArgumentException('invalid length for $expire_limit when calling PointCondition., must be bigger than or equal to 1.');
        }

        $this->container['expire_limit'] = $expire_limit;

        return $this;
    }

    /**
     * Gets mileage_division
     *
     * @return \OpenAPI\Client\Model\MileageDivision|null
     */
    public function getMileageDivision()
    {
        return $this->container['mileage_division'];
    }

    /**
     * Sets mileage_division
     *
     * @param \OpenAPI\Client\Model\MileageDivision|null $mileage_division mileage_division
     *
     * @return self
     */
    public function setMileageDivision($mileage_division)
    {
        $this->container['mileage_division'] = $mileage_division;

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


