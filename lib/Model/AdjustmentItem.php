<?php
/**
 * AdjustmentItem
 *
 * PHP version 5
 *
 * @category Class
 * @package  B1\AmazonSPAPI
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Selling Partner API for Finances
 *
 * The Selling Partner API for Finances helps you obtain financial information relevant to a seller's business. You can obtain financial events for a given order, financial event group, or date range without having to wait until a statement period closes. You can also obtain financial event groups for a given date range.
 *
 * OpenAPI spec version: v0
 *
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.25
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace B1\AmazonSPAPI\Model;

use \ArrayAccess;
use \B1\AmazonSPAPI\ObjectSerializer;

/**
 * AdjustmentItem Class Doc Comment
 *
 * @category Class
 * @description An item in an adjustment to the seller&#39;s account.
 * @package  B1\AmazonSPAPI
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AdjustmentItem  extends BaseModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AdjustmentItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'quantity' => 'string',
        'perUnitAmount' => '\B1\AmazonSPAPI\Model\Currency',
        'totalAmount' => '\B1\AmazonSPAPI\Model\Currency',
        'sellerSKU' => 'string',
        'fnSKU' => 'string',
        'productDescription' => 'string',
        'aSIN' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'quantity' => null,
        'perUnitAmount' => null,
        'totalAmount' => null,
        'sellerSKU' => null,
        'fnSKU' => null,
        'productDescription' => null,
        'aSIN' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'quantity' => 'Quantity',
        'perUnitAmount' => 'PerUnitAmount',
        'totalAmount' => 'TotalAmount',
        'sellerSKU' => 'SellerSKU',
        'fnSKU' => 'FnSKU',
        'productDescription' => 'ProductDescription',
        'aSIN' => 'ASIN'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'quantity' => 'setQuantity',
        'perUnitAmount' => 'setPerUnitAmount',
        'totalAmount' => 'setTotalAmount',
        'sellerSKU' => 'setSellerSKU',
        'fnSKU' => 'setFnSKU',
        'productDescription' => 'setProductDescription',
        'aSIN' => 'setASIN'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'quantity' => 'getQuantity',
        'perUnitAmount' => 'getPerUnitAmount',
        'totalAmount' => 'getTotalAmount',
        'sellerSKU' => 'getSellerSKU',
        'fnSKU' => 'getFnSKU',
        'productDescription' => 'getProductDescription',
        'aSIN' => 'getASIN'
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
        return self::$swaggerModelName;
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
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['perUnitAmount'] = isset($data['perUnitAmount']) ? $data['perUnitAmount'] : null;
        $this->container['totalAmount'] = isset($data['totalAmount']) ? $data['totalAmount'] : null;
        $this->container['sellerSKU'] = isset($data['sellerSKU']) ? $data['sellerSKU'] : null;
        $this->container['fnSKU'] = isset($data['fnSKU']) ? $data['fnSKU'] : null;
        $this->container['productDescription'] = isset($data['productDescription']) ? $data['productDescription'] : null;
        $this->container['aSIN'] = isset($data['aSIN']) ? $data['aSIN'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets quantity
     *
     * @return string
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param string $quantity Represents the number of units in the seller's inventory when the AdustmentType is FBAInventoryReimbursement.
     *
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets perUnitAmount
     *
     * @return \B1\AmazonSPAPI\Model\Currency
     */
    public function getPerUnitAmount()
    {
        return $this->container['perUnitAmount'];
    }

    /**
     * Sets perUnitAmount
     *
     * @param \B1\AmazonSPAPI\Model\Currency $perUnitAmount The per unit value of the item.
     *
     * @return $this
     */
    public function setPerUnitAmount($perUnitAmount)
    {
        $this->container['perUnitAmount'] = $perUnitAmount;

        return $this;
    }

    /**
     * Gets totalAmount
     *
     * @return \B1\AmazonSPAPI\Model\Currency
     */
    public function getTotalAmount()
    {
        return $this->container['totalAmount'];
    }

    /**
     * Sets totalAmount
     *
     * @param \B1\AmazonSPAPI\Model\Currency $totalAmount The total value of the item.
     *
     * @return $this
     */
    public function setTotalAmount($totalAmount)
    {
        $this->container['totalAmount'] = $totalAmount;

        return $this;
    }

    /**
     * Gets sellerSKU
     *
     * @return string
     */
    public function getSellerSKU()
    {
        return $this->container['sellerSKU'];
    }

    /**
     * Sets sellerSKU
     *
     * @param string $sellerSKU The seller SKU of the item. The seller SKU is qualified by the seller's seller ID, which is included with every call to the Selling Partner API.
     *
     * @return $this
     */
    public function setSellerSKU($sellerSKU)
    {
        $this->container['sellerSKU'] = $sellerSKU;

        return $this;
    }

    /**
     * Gets fnSKU
     *
     * @return string
     */
    public function getFnSKU()
    {
        return $this->container['fnSKU'];
    }

    /**
     * Sets fnSKU
     *
     * @param string $fnSKU A unique identifier assigned to products stored in and fulfilled from a fulfillment center.
     *
     * @return $this
     */
    public function setFnSKU($fnSKU)
    {
        $this->container['fnSKU'] = $fnSKU;

        return $this;
    }

    /**
     * Gets productDescription
     *
     * @return string
     */
    public function getProductDescription()
    {
        return $this->container['productDescription'];
    }

    /**
     * Sets productDescription
     *
     * @param string $productDescription A short description of the item.
     *
     * @return $this
     */
    public function setProductDescription($productDescription)
    {
        $this->container['productDescription'] = $productDescription;

        return $this;
    }

    /**
     * Gets aSIN
     *
     * @return string
     */
    public function getASIN()
    {
        return $this->container['aSIN'];
    }

    /**
     * Sets aSIN
     *
     * @param string $aSIN The Amazon Standard Identification Number (ASIN) of the item.
     *
     * @return $this
     */
    public function setASIN($aSIN)
    {
        $this->container['aSIN'] = $aSIN;

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
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
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
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


