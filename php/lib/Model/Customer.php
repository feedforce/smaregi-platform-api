<?php
/**
 * Customer
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
 * Customer Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Customer implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'customer';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'customer_id' => 'string',
        'customer_code' => 'string',
        'customer_no' => 'string',
        'rank' => 'string',
        'staff_rank' => 'string',
        'first_name' => 'string',
        'last_name' => 'string',
        'first_kana' => 'string',
        'last_kana' => 'string',
        'sex' => 'string',
        'birth_date' => 'string',
        'point_expire_date' => 'string',
        'last_come_date_time' => 'string',
        'entry_date' => 'string',
        'leave_date' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'customer_id' => null,
        'customer_code' => null,
        'customer_no' => null,
        'rank' => null,
        'staff_rank' => null,
        'first_name' => null,
        'last_name' => null,
        'first_kana' => null,
        'last_kana' => null,
        'sex' => null,
        'birth_date' => null,
        'point_expire_date' => null,
        'last_come_date_time' => null,
        'entry_date' => null,
        'leave_date' => null
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
        'customer_id' => 'customerId',
        'customer_code' => 'customerCode',
        'customer_no' => 'customerNo',
        'rank' => 'rank',
        'staff_rank' => 'staffRank',
        'first_name' => 'firstName',
        'last_name' => 'lastName',
        'first_kana' => 'firstKana',
        'last_kana' => 'lastKana',
        'sex' => 'sex',
        'birth_date' => 'birthDate',
        'point_expire_date' => 'pointExpireDate',
        'last_come_date_time' => 'lastComeDateTime',
        'entry_date' => 'entryDate',
        'leave_date' => 'leaveDate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'customer_id' => 'setCustomerId',
        'customer_code' => 'setCustomerCode',
        'customer_no' => 'setCustomerNo',
        'rank' => 'setRank',
        'staff_rank' => 'setStaffRank',
        'first_name' => 'setFirstName',
        'last_name' => 'setLastName',
        'first_kana' => 'setFirstKana',
        'last_kana' => 'setLastKana',
        'sex' => 'setSex',
        'birth_date' => 'setBirthDate',
        'point_expire_date' => 'setPointExpireDate',
        'last_come_date_time' => 'setLastComeDateTime',
        'entry_date' => 'setEntryDate',
        'leave_date' => 'setLeaveDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'customer_id' => 'getCustomerId',
        'customer_code' => 'getCustomerCode',
        'customer_no' => 'getCustomerNo',
        'rank' => 'getRank',
        'staff_rank' => 'getStaffRank',
        'first_name' => 'getFirstName',
        'last_name' => 'getLastName',
        'first_kana' => 'getFirstKana',
        'last_kana' => 'getLastKana',
        'sex' => 'getSex',
        'birth_date' => 'getBirthDate',
        'point_expire_date' => 'getPointExpireDate',
        'last_come_date_time' => 'getLastComeDateTime',
        'entry_date' => 'getEntryDate',
        'leave_date' => 'getLeaveDate'
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
        $this->container['customer_id'] = $data['customer_id'] ?? null;
        $this->container['customer_code'] = $data['customer_code'] ?? null;
        $this->container['customer_no'] = $data['customer_no'] ?? null;
        $this->container['rank'] = $data['rank'] ?? null;
        $this->container['staff_rank'] = $data['staff_rank'] ?? null;
        $this->container['first_name'] = $data['first_name'] ?? null;
        $this->container['last_name'] = $data['last_name'] ?? null;
        $this->container['first_kana'] = $data['first_kana'] ?? null;
        $this->container['last_kana'] = $data['last_kana'] ?? null;
        $this->container['sex'] = $data['sex'] ?? null;
        $this->container['birth_date'] = $data['birth_date'] ?? null;
        $this->container['point_expire_date'] = $data['point_expire_date'] ?? null;
        $this->container['last_come_date_time'] = $data['last_come_date_time'] ?? null;
        $this->container['entry_date'] = $data['entry_date'] ?? null;
        $this->container['leave_date'] = $data['leave_date'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['customer_id'] === null) {
            $invalidProperties[] = "'customer_id' can't be null";
        }
        if ((mb_strlen($this->container['customer_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'customer_id', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['customer_code']) && (mb_strlen($this->container['customer_code']) < 1)) {
            $invalidProperties[] = "invalid value for 'customer_code', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['customer_no']) && (mb_strlen($this->container['customer_no']) < 1)) {
            $invalidProperties[] = "invalid value for 'customer_no', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['rank']) && (mb_strlen($this->container['rank']) < 1)) {
            $invalidProperties[] = "invalid value for 'rank', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['staff_rank']) && (mb_strlen($this->container['staff_rank']) < 1)) {
            $invalidProperties[] = "invalid value for 'staff_rank', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['first_name']) && (mb_strlen($this->container['first_name']) < 1)) {
            $invalidProperties[] = "invalid value for 'first_name', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['last_name']) && (mb_strlen($this->container['last_name']) < 1)) {
            $invalidProperties[] = "invalid value for 'last_name', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['first_kana']) && (mb_strlen($this->container['first_kana']) < 1)) {
            $invalidProperties[] = "invalid value for 'first_kana', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['last_kana']) && (mb_strlen($this->container['last_kana']) < 1)) {
            $invalidProperties[] = "invalid value for 'last_kana', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['sex']) && (mb_strlen($this->container['sex']) < 1)) {
            $invalidProperties[] = "invalid value for 'sex', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['birth_date']) && (mb_strlen($this->container['birth_date']) < 1)) {
            $invalidProperties[] = "invalid value for 'birth_date', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['point_expire_date']) && (mb_strlen($this->container['point_expire_date']) < 1)) {
            $invalidProperties[] = "invalid value for 'point_expire_date', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['last_come_date_time']) && (mb_strlen($this->container['last_come_date_time']) < 1)) {
            $invalidProperties[] = "invalid value for 'last_come_date_time', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['entry_date']) && (mb_strlen($this->container['entry_date']) < 1)) {
            $invalidProperties[] = "invalid value for 'entry_date', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['leave_date']) && (mb_strlen($this->container['leave_date']) < 1)) {
            $invalidProperties[] = "invalid value for 'leave_date', the character length must be bigger than or equal to 1.";
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
     * Gets customer_id
     *
     * @return string
     */
    public function getCustomerId()
    {
        return $this->container['customer_id'];
    }

    /**
     * Sets customer_id
     *
     * @param string $customer_id customer_id
     *
     * @return self
     */
    public function setCustomerId($customer_id)
    {

        if ((mb_strlen($customer_id) < 1)) {
            throw new \InvalidArgumentException('invalid length for $customer_id when calling Customer., must be bigger than or equal to 1.');
        }

        $this->container['customer_id'] = $customer_id;

        return $this;
    }

    /**
     * Gets customer_code
     *
     * @return string|null
     */
    public function getCustomerCode()
    {
        return $this->container['customer_code'];
    }

    /**
     * Sets customer_code
     *
     * @param string|null $customer_code customer_code
     *
     * @return self
     */
    public function setCustomerCode($customer_code)
    {

        if (!is_null($customer_code) && (mb_strlen($customer_code) < 1)) {
            throw new \InvalidArgumentException('invalid length for $customer_code when calling Customer., must be bigger than or equal to 1.');
        }

        $this->container['customer_code'] = $customer_code;

        return $this;
    }

    /**
     * Gets customer_no
     *
     * @return string|null
     */
    public function getCustomerNo()
    {
        return $this->container['customer_no'];
    }

    /**
     * Sets customer_no
     *
     * @param string|null $customer_no customer_no
     *
     * @return self
     */
    public function setCustomerNo($customer_no)
    {

        if (!is_null($customer_no) && (mb_strlen($customer_no) < 1)) {
            throw new \InvalidArgumentException('invalid length for $customer_no when calling Customer., must be bigger than or equal to 1.');
        }

        $this->container['customer_no'] = $customer_no;

        return $this;
    }

    /**
     * Gets rank
     *
     * @return string|null
     */
    public function getRank()
    {
        return $this->container['rank'];
    }

    /**
     * Sets rank
     *
     * @param string|null $rank rank
     *
     * @return self
     */
    public function setRank($rank)
    {

        if (!is_null($rank) && (mb_strlen($rank) < 1)) {
            throw new \InvalidArgumentException('invalid length for $rank when calling Customer., must be bigger than or equal to 1.');
        }

        $this->container['rank'] = $rank;

        return $this;
    }

    /**
     * Gets staff_rank
     *
     * @return string|null
     */
    public function getStaffRank()
    {
        return $this->container['staff_rank'];
    }

    /**
     * Sets staff_rank
     *
     * @param string|null $staff_rank staff_rank
     *
     * @return self
     */
    public function setStaffRank($staff_rank)
    {

        if (!is_null($staff_rank) && (mb_strlen($staff_rank) < 1)) {
            throw new \InvalidArgumentException('invalid length for $staff_rank when calling Customer., must be bigger than or equal to 1.');
        }

        $this->container['staff_rank'] = $staff_rank;

        return $this;
    }

    /**
     * Gets first_name
     *
     * @return string|null
     */
    public function getFirstName()
    {
        return $this->container['first_name'];
    }

    /**
     * Sets first_name
     *
     * @param string|null $first_name first_name
     *
     * @return self
     */
    public function setFirstName($first_name)
    {

        if (!is_null($first_name) && (mb_strlen($first_name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $first_name when calling Customer., must be bigger than or equal to 1.');
        }

        $this->container['first_name'] = $first_name;

        return $this;
    }

    /**
     * Gets last_name
     *
     * @return string|null
     */
    public function getLastName()
    {
        return $this->container['last_name'];
    }

    /**
     * Sets last_name
     *
     * @param string|null $last_name last_name
     *
     * @return self
     */
    public function setLastName($last_name)
    {

        if (!is_null($last_name) && (mb_strlen($last_name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $last_name when calling Customer., must be bigger than or equal to 1.');
        }

        $this->container['last_name'] = $last_name;

        return $this;
    }

    /**
     * Gets first_kana
     *
     * @return string|null
     */
    public function getFirstKana()
    {
        return $this->container['first_kana'];
    }

    /**
     * Sets first_kana
     *
     * @param string|null $first_kana first_kana
     *
     * @return self
     */
    public function setFirstKana($first_kana)
    {

        if (!is_null($first_kana) && (mb_strlen($first_kana) < 1)) {
            throw new \InvalidArgumentException('invalid length for $first_kana when calling Customer., must be bigger than or equal to 1.');
        }

        $this->container['first_kana'] = $first_kana;

        return $this;
    }

    /**
     * Gets last_kana
     *
     * @return string|null
     */
    public function getLastKana()
    {
        return $this->container['last_kana'];
    }

    /**
     * Sets last_kana
     *
     * @param string|null $last_kana last_kana
     *
     * @return self
     */
    public function setLastKana($last_kana)
    {

        if (!is_null($last_kana) && (mb_strlen($last_kana) < 1)) {
            throw new \InvalidArgumentException('invalid length for $last_kana when calling Customer., must be bigger than or equal to 1.');
        }

        $this->container['last_kana'] = $last_kana;

        return $this;
    }

    /**
     * Gets sex
     *
     * @return string|null
     */
    public function getSex()
    {
        return $this->container['sex'];
    }

    /**
     * Sets sex
     *
     * @param string|null $sex sex
     *
     * @return self
     */
    public function setSex($sex)
    {

        if (!is_null($sex) && (mb_strlen($sex) < 1)) {
            throw new \InvalidArgumentException('invalid length for $sex when calling Customer., must be bigger than or equal to 1.');
        }

        $this->container['sex'] = $sex;

        return $this;
    }

    /**
     * Gets birth_date
     *
     * @return string|null
     */
    public function getBirthDate()
    {
        return $this->container['birth_date'];
    }

    /**
     * Sets birth_date
     *
     * @param string|null $birth_date birth_date
     *
     * @return self
     */
    public function setBirthDate($birth_date)
    {

        if (!is_null($birth_date) && (mb_strlen($birth_date) < 1)) {
            throw new \InvalidArgumentException('invalid length for $birth_date when calling Customer., must be bigger than or equal to 1.');
        }

        $this->container['birth_date'] = $birth_date;

        return $this;
    }

    /**
     * Gets point_expire_date
     *
     * @return string|null
     */
    public function getPointExpireDate()
    {
        return $this->container['point_expire_date'];
    }

    /**
     * Sets point_expire_date
     *
     * @param string|null $point_expire_date point_expire_date
     *
     * @return self
     */
    public function setPointExpireDate($point_expire_date)
    {

        if (!is_null($point_expire_date) && (mb_strlen($point_expire_date) < 1)) {
            throw new \InvalidArgumentException('invalid length for $point_expire_date when calling Customer., must be bigger than or equal to 1.');
        }

        $this->container['point_expire_date'] = $point_expire_date;

        return $this;
    }

    /**
     * Gets last_come_date_time
     *
     * @return string|null
     */
    public function getLastComeDateTime()
    {
        return $this->container['last_come_date_time'];
    }

    /**
     * Sets last_come_date_time
     *
     * @param string|null $last_come_date_time last_come_date_time
     *
     * @return self
     */
    public function setLastComeDateTime($last_come_date_time)
    {

        if (!is_null($last_come_date_time) && (mb_strlen($last_come_date_time) < 1)) {
            throw new \InvalidArgumentException('invalid length for $last_come_date_time when calling Customer., must be bigger than or equal to 1.');
        }

        $this->container['last_come_date_time'] = $last_come_date_time;

        return $this;
    }

    /**
     * Gets entry_date
     *
     * @return string|null
     */
    public function getEntryDate()
    {
        return $this->container['entry_date'];
    }

    /**
     * Sets entry_date
     *
     * @param string|null $entry_date entry_date
     *
     * @return self
     */
    public function setEntryDate($entry_date)
    {

        if (!is_null($entry_date) && (mb_strlen($entry_date) < 1)) {
            throw new \InvalidArgumentException('invalid length for $entry_date when calling Customer., must be bigger than or equal to 1.');
        }

        $this->container['entry_date'] = $entry_date;

        return $this;
    }

    /**
     * Gets leave_date
     *
     * @return string|null
     */
    public function getLeaveDate()
    {
        return $this->container['leave_date'];
    }

    /**
     * Sets leave_date
     *
     * @param string|null $leave_date leave_date
     *
     * @return self
     */
    public function setLeaveDate($leave_date)
    {

        if (!is_null($leave_date) && (mb_strlen($leave_date) < 1)) {
            throw new \InvalidArgumentException('invalid length for $leave_date when calling Customer., must be bigger than or equal to 1.');
        }

        $this->container['leave_date'] = $leave_date;

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


