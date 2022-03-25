<?php
/**
 * GetStoresResponseItemReceiptPrintInfo
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
 * GetStoresResponseItemReceiptPrintInfo Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class GetStoresResponseItemReceiptPrintInfo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'getStoresResponseItem_receiptPrintInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'store_id' => 'string',
        'header' => 'string',
        'footer' => 'string',
        'receipt_tax_office_stamp_comment' => 'string',
        'tax_office_name' => 'string',
        'air_print_logo' => 'string',
        'advertisement_image' => 'string',
        'gift_receipt_image' => 'string',
        'gift_receipt_note' => 'string',
        'discount_receipt_header' => 'string',
        'discount_receipt_footer' => 'string'
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
        'header' => null,
        'footer' => null,
        'receipt_tax_office_stamp_comment' => null,
        'tax_office_name' => null,
        'air_print_logo' => null,
        'advertisement_image' => null,
        'gift_receipt_image' => null,
        'gift_receipt_note' => null,
        'discount_receipt_header' => null,
        'discount_receipt_footer' => null
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
        'header' => 'header',
        'footer' => 'footer',
        'receipt_tax_office_stamp_comment' => 'receiptTaxOfficeStampComment',
        'tax_office_name' => 'taxOfficeName',
        'air_print_logo' => 'airPrintLogo',
        'advertisement_image' => 'advertisementImage',
        'gift_receipt_image' => 'giftReceiptImage',
        'gift_receipt_note' => 'giftReceiptNote',
        'discount_receipt_header' => 'discountReceiptHeader',
        'discount_receipt_footer' => 'discountReceiptFooter'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'store_id' => 'setStoreId',
        'header' => 'setHeader',
        'footer' => 'setFooter',
        'receipt_tax_office_stamp_comment' => 'setReceiptTaxOfficeStampComment',
        'tax_office_name' => 'setTaxOfficeName',
        'air_print_logo' => 'setAirPrintLogo',
        'advertisement_image' => 'setAdvertisementImage',
        'gift_receipt_image' => 'setGiftReceiptImage',
        'gift_receipt_note' => 'setGiftReceiptNote',
        'discount_receipt_header' => 'setDiscountReceiptHeader',
        'discount_receipt_footer' => 'setDiscountReceiptFooter'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'store_id' => 'getStoreId',
        'header' => 'getHeader',
        'footer' => 'getFooter',
        'receipt_tax_office_stamp_comment' => 'getReceiptTaxOfficeStampComment',
        'tax_office_name' => 'getTaxOfficeName',
        'air_print_logo' => 'getAirPrintLogo',
        'advertisement_image' => 'getAdvertisementImage',
        'gift_receipt_image' => 'getGiftReceiptImage',
        'gift_receipt_note' => 'getGiftReceiptNote',
        'discount_receipt_header' => 'getDiscountReceiptHeader',
        'discount_receipt_footer' => 'getDiscountReceiptFooter'
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
        $this->container['header'] = $data['header'] ?? null;
        $this->container['footer'] = $data['footer'] ?? null;
        $this->container['receipt_tax_office_stamp_comment'] = $data['receipt_tax_office_stamp_comment'] ?? null;
        $this->container['tax_office_name'] = $data['tax_office_name'] ?? null;
        $this->container['air_print_logo'] = $data['air_print_logo'] ?? null;
        $this->container['advertisement_image'] = $data['advertisement_image'] ?? null;
        $this->container['gift_receipt_image'] = $data['gift_receipt_image'] ?? null;
        $this->container['gift_receipt_note'] = $data['gift_receipt_note'] ?? null;
        $this->container['discount_receipt_header'] = $data['discount_receipt_header'] ?? null;
        $this->container['discount_receipt_footer'] = $data['discount_receipt_footer'] ?? null;
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

        if (!is_null($this->container['header']) && (mb_strlen($this->container['header']) < 1)) {
            $invalidProperties[] = "invalid value for 'header', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['footer']) && (mb_strlen($this->container['footer']) < 1)) {
            $invalidProperties[] = "invalid value for 'footer', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['receipt_tax_office_stamp_comment']) && (mb_strlen($this->container['receipt_tax_office_stamp_comment']) < 1)) {
            $invalidProperties[] = "invalid value for 'receipt_tax_office_stamp_comment', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['tax_office_name']) && (mb_strlen($this->container['tax_office_name']) < 1)) {
            $invalidProperties[] = "invalid value for 'tax_office_name', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['air_print_logo']) && (mb_strlen($this->container['air_print_logo']) < 1)) {
            $invalidProperties[] = "invalid value for 'air_print_logo', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['advertisement_image']) && (mb_strlen($this->container['advertisement_image']) < 1)) {
            $invalidProperties[] = "invalid value for 'advertisement_image', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['gift_receipt_image']) && (mb_strlen($this->container['gift_receipt_image']) < 1)) {
            $invalidProperties[] = "invalid value for 'gift_receipt_image', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['gift_receipt_note']) && (mb_strlen($this->container['gift_receipt_note']) < 1)) {
            $invalidProperties[] = "invalid value for 'gift_receipt_note', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['discount_receipt_header']) && (mb_strlen($this->container['discount_receipt_header']) < 1)) {
            $invalidProperties[] = "invalid value for 'discount_receipt_header', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['discount_receipt_footer']) && (mb_strlen($this->container['discount_receipt_footer']) < 1)) {
            $invalidProperties[] = "invalid value for 'discount_receipt_footer', the character length must be bigger than or equal to 1.";
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
            throw new \InvalidArgumentException('invalid length for $store_id when calling GetStoresResponseItemReceiptPrintInfo., must be bigger than or equal to 1.');
        }

        $this->container['store_id'] = $store_id;

        return $this;
    }

    /**
     * Gets header
     *
     * @return string|null
     */
    public function getHeader()
    {
        return $this->container['header'];
    }

    /**
     * Sets header
     *
     * @param string|null $header header
     *
     * @return self
     */
    public function setHeader($header)
    {

        if (!is_null($header) && (mb_strlen($header) < 1)) {
            throw new \InvalidArgumentException('invalid length for $header when calling GetStoresResponseItemReceiptPrintInfo., must be bigger than or equal to 1.');
        }

        $this->container['header'] = $header;

        return $this;
    }

    /**
     * Gets footer
     *
     * @return string|null
     */
    public function getFooter()
    {
        return $this->container['footer'];
    }

    /**
     * Sets footer
     *
     * @param string|null $footer footer
     *
     * @return self
     */
    public function setFooter($footer)
    {

        if (!is_null($footer) && (mb_strlen($footer) < 1)) {
            throw new \InvalidArgumentException('invalid length for $footer when calling GetStoresResponseItemReceiptPrintInfo., must be bigger than or equal to 1.');
        }

        $this->container['footer'] = $footer;

        return $this;
    }

    /**
     * Gets receipt_tax_office_stamp_comment
     *
     * @return string|null
     */
    public function getReceiptTaxOfficeStampComment()
    {
        return $this->container['receipt_tax_office_stamp_comment'];
    }

    /**
     * Sets receipt_tax_office_stamp_comment
     *
     * @param string|null $receipt_tax_office_stamp_comment receipt_tax_office_stamp_comment
     *
     * @return self
     */
    public function setReceiptTaxOfficeStampComment($receipt_tax_office_stamp_comment)
    {

        if (!is_null($receipt_tax_office_stamp_comment) && (mb_strlen($receipt_tax_office_stamp_comment) < 1)) {
            throw new \InvalidArgumentException('invalid length for $receipt_tax_office_stamp_comment when calling GetStoresResponseItemReceiptPrintInfo., must be bigger than or equal to 1.');
        }

        $this->container['receipt_tax_office_stamp_comment'] = $receipt_tax_office_stamp_comment;

        return $this;
    }

    /**
     * Gets tax_office_name
     *
     * @return string|null
     */
    public function getTaxOfficeName()
    {
        return $this->container['tax_office_name'];
    }

    /**
     * Sets tax_office_name
     *
     * @param string|null $tax_office_name tax_office_name
     *
     * @return self
     */
    public function setTaxOfficeName($tax_office_name)
    {

        if (!is_null($tax_office_name) && (mb_strlen($tax_office_name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $tax_office_name when calling GetStoresResponseItemReceiptPrintInfo., must be bigger than or equal to 1.');
        }

        $this->container['tax_office_name'] = $tax_office_name;

        return $this;
    }

    /**
     * Gets air_print_logo
     *
     * @return string|null
     */
    public function getAirPrintLogo()
    {
        return $this->container['air_print_logo'];
    }

    /**
     * Sets air_print_logo
     *
     * @param string|null $air_print_logo air_print_logo
     *
     * @return self
     */
    public function setAirPrintLogo($air_print_logo)
    {

        if (!is_null($air_print_logo) && (mb_strlen($air_print_logo) < 1)) {
            throw new \InvalidArgumentException('invalid length for $air_print_logo when calling GetStoresResponseItemReceiptPrintInfo., must be bigger than or equal to 1.');
        }

        $this->container['air_print_logo'] = $air_print_logo;

        return $this;
    }

    /**
     * Gets advertisement_image
     *
     * @return string|null
     */
    public function getAdvertisementImage()
    {
        return $this->container['advertisement_image'];
    }

    /**
     * Sets advertisement_image
     *
     * @param string|null $advertisement_image advertisement_image
     *
     * @return self
     */
    public function setAdvertisementImage($advertisement_image)
    {

        if (!is_null($advertisement_image) && (mb_strlen($advertisement_image) < 1)) {
            throw new \InvalidArgumentException('invalid length for $advertisement_image when calling GetStoresResponseItemReceiptPrintInfo., must be bigger than or equal to 1.');
        }

        $this->container['advertisement_image'] = $advertisement_image;

        return $this;
    }

    /**
     * Gets gift_receipt_image
     *
     * @return string|null
     */
    public function getGiftReceiptImage()
    {
        return $this->container['gift_receipt_image'];
    }

    /**
     * Sets gift_receipt_image
     *
     * @param string|null $gift_receipt_image gift_receipt_image
     *
     * @return self
     */
    public function setGiftReceiptImage($gift_receipt_image)
    {

        if (!is_null($gift_receipt_image) && (mb_strlen($gift_receipt_image) < 1)) {
            throw new \InvalidArgumentException('invalid length for $gift_receipt_image when calling GetStoresResponseItemReceiptPrintInfo., must be bigger than or equal to 1.');
        }

        $this->container['gift_receipt_image'] = $gift_receipt_image;

        return $this;
    }

    /**
     * Gets gift_receipt_note
     *
     * @return string|null
     */
    public function getGiftReceiptNote()
    {
        return $this->container['gift_receipt_note'];
    }

    /**
     * Sets gift_receipt_note
     *
     * @param string|null $gift_receipt_note gift_receipt_note
     *
     * @return self
     */
    public function setGiftReceiptNote($gift_receipt_note)
    {

        if (!is_null($gift_receipt_note) && (mb_strlen($gift_receipt_note) < 1)) {
            throw new \InvalidArgumentException('invalid length for $gift_receipt_note when calling GetStoresResponseItemReceiptPrintInfo., must be bigger than or equal to 1.');
        }

        $this->container['gift_receipt_note'] = $gift_receipt_note;

        return $this;
    }

    /**
     * Gets discount_receipt_header
     *
     * @return string|null
     */
    public function getDiscountReceiptHeader()
    {
        return $this->container['discount_receipt_header'];
    }

    /**
     * Sets discount_receipt_header
     *
     * @param string|null $discount_receipt_header discount_receipt_header
     *
     * @return self
     */
    public function setDiscountReceiptHeader($discount_receipt_header)
    {

        if (!is_null($discount_receipt_header) && (mb_strlen($discount_receipt_header) < 1)) {
            throw new \InvalidArgumentException('invalid length for $discount_receipt_header when calling GetStoresResponseItemReceiptPrintInfo., must be bigger than or equal to 1.');
        }

        $this->container['discount_receipt_header'] = $discount_receipt_header;

        return $this;
    }

    /**
     * Gets discount_receipt_footer
     *
     * @return string|null
     */
    public function getDiscountReceiptFooter()
    {
        return $this->container['discount_receipt_footer'];
    }

    /**
     * Sets discount_receipt_footer
     *
     * @param string|null $discount_receipt_footer discount_receipt_footer
     *
     * @return self
     */
    public function setDiscountReceiptFooter($discount_receipt_footer)
    {

        if (!is_null($discount_receipt_footer) && (mb_strlen($discount_receipt_footer) < 1)) {
            throw new \InvalidArgumentException('invalid length for $discount_receipt_footer when calling GetStoresResponseItemReceiptPrintInfo., must be bigger than or equal to 1.');
        }

        $this->container['discount_receipt_footer'] = $discount_receipt_footer;

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


