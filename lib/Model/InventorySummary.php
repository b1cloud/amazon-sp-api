<?php
/**
 * InventorySummary
 *
 * PHP version 5
 *
 * @category Class
 * @package  B1\AmazonSPAPI
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Selling Partner API for FBA Inventory
 *
 * The Selling Partner API for FBA Inventory lets you programmatically retrieve information about inventory in Amazon's fulfillment network. Today this API is available only in the North America region. In 2021 we plan to release this API in the Europe and Far East regions.
 *
 * OpenAPI spec version: v1
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
 * InventorySummary Class Doc Comment
 *
 * @category Class
 * @description Inventory summary for a specific item.
 * @package  B1\AmazonSPAPI
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InventorySummary  extends BaseModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'InventorySummary';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'asin' => 'string',
        'fnSku' => 'string',
        'sellerSku' => 'string',
        'condition' => 'string',
        'inventoryDetails' => '\B1\AmazonSPAPI\Model\InventoryDetails',
        'lastUpdatedTime' => '\DateTime',
        'productName' => 'string',
        'totalQuantity' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'asin' => null,
        'fnSku' => null,
        'sellerSku' => null,
        'condition' => null,
        'inventoryDetails' => null,
        'lastUpdatedTime' => 'date-time',
        'productName' => null,
        'totalQuantity' => null
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
        'asin' => 'asin',
        'fnSku' => 'fnSku',
        'sellerSku' => 'sellerSku',
        'condition' => 'condition',
        'inventoryDetails' => 'inventoryDetails',
        'lastUpdatedTime' => 'lastUpdatedTime',
        'productName' => 'productName',
        'totalQuantity' => 'totalQuantity'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'asin' => 'setAsin',
        'fnSku' => 'setFnSku',
        'sellerSku' => 'setSellerSku',
        'condition' => 'setCondition',
        'inventoryDetails' => 'setInventoryDetails',
        'lastUpdatedTime' => 'setLastUpdatedTime',
        'productName' => 'setProductName',
        'totalQuantity' => 'setTotalQuantity'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'asin' => 'getAsin',
        'fnSku' => 'getFnSku',
        'sellerSku' => 'getSellerSku',
        'condition' => 'getCondition',
        'inventoryDetails' => 'getInventoryDetails',
        'lastUpdatedTime' => 'getLastUpdatedTime',
        'productName' => 'getProductName',
        'totalQuantity' => 'getTotalQuantity'
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
        $this->container['asin'] = isset($data['asin']) ? $data['asin'] : null;
        $this->container['fnSku'] = isset($data['fnSku']) ? $data['fnSku'] : null;
        $this->container['sellerSku'] = isset($data['sellerSku']) ? $data['sellerSku'] : null;
        $this->container['condition'] = isset($data['condition']) ? $data['condition'] : null;
        $this->container['inventoryDetails'] = isset($data['inventoryDetails']) ? $data['inventoryDetails'] : null;
        $this->container['lastUpdatedTime'] = isset($data['lastUpdatedTime']) ? $data['lastUpdatedTime'] : null;
        $this->container['productName'] = isset($data['productName']) ? $data['productName'] : null;
        $this->container['totalQuantity'] = isset($data['totalQuantity']) ? $data['totalQuantity'] : null;
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
     * Gets asin
     *
     * @return string
     */
    public function getAsin()
    {
        return $this->container['asin'];
    }

    /**
     * Sets asin
     *
     * @param string $asin The Amazon Standard Identification Number (ASIN) of an item.
     *
     * @return $this
     */
    public function setAsin($asin)
    {
        $this->container['asin'] = $asin;

        return $this;
    }

    /**
     * Gets fnSku
     *
     * @return string
     */
    public function getFnSku()
    {
        return $this->container['fnSku'];
    }

    /**
     * Sets fnSku
     *
     * @param string $fnSku Amazon's fulfillment network SKU identifier.
     *
     * @return $this
     */
    public function setFnSku($fnSku)
    {
        $this->container['fnSku'] = $fnSku;

        return $this;
    }

    /**
     * Gets sellerSku
     *
     * @return string
     */
    public function getSellerSku()
    {
        return $this->container['sellerSku'];
    }

    /**
     * Sets sellerSku
     *
     * @param string $sellerSku The seller SKU of the item.
     *
     * @return $this
     */
    public function setSellerSku($sellerSku)
    {
        $this->container['sellerSku'] = $sellerSku;

        return $this;
    }

    /**
     * Gets condition
     *
     * @return string
     */
    public function getCondition()
    {
        return $this->container['condition'];
    }

    /**
     * Sets condition
     *
     * @param string $condition The condition of the item as described by the seller (for example, New Item).
     *
     * @return $this
     */
    public function setCondition($condition)
    {
        $this->container['condition'] = $condition;

        return $this;
    }

    /**
     * Gets inventoryDetails
     *
     * @return \B1\AmazonSPAPI\Model\InventoryDetails
     */
    public function getInventoryDetails()
    {
        return $this->container['inventoryDetails'];
    }

    /**
     * Sets inventoryDetails
     *
     * @param \B1\AmazonSPAPI\Model\InventoryDetails $inventoryDetails inventoryDetails
     *
     * @return $this
     */
    public function setInventoryDetails($inventoryDetails)
    {
        $this->container['inventoryDetails'] = $inventoryDetails;

        return $this;
    }

    /**
     * Gets lastUpdatedTime
     *
     * @return \DateTime
     */
    public function getLastUpdatedTime()
    {
        return $this->container['lastUpdatedTime'];
    }

    /**
     * Sets lastUpdatedTime
     *
     * @param \DateTime $lastUpdatedTime The date and time that any quantity was last updated.
     *
     * @return $this
     */
    public function setLastUpdatedTime($lastUpdatedTime)
    {
        $this->container['lastUpdatedTime'] = $lastUpdatedTime;

        return $this;
    }

    /**
     * Gets productName
     *
     * @return string
     */
    public function getProductName()
    {
        return $this->container['productName'];
    }

    /**
     * Sets productName
     *
     * @param string $productName The localized language product title of the item within the specific marketplace.
     *
     * @return $this
     */
    public function setProductName($productName)
    {
        $this->container['productName'] = $productName;

        return $this;
    }

    /**
     * Gets totalQuantity
     *
     * @return int
     */
    public function getTotalQuantity()
    {
        return $this->container['totalQuantity'];
    }

    /**
     * Sets totalQuantity
     *
     * @param int $totalQuantity The total number of units in an inbound shipment or in Amazon fulfillment centers.
     *
     * @return $this
     */
    public function setTotalQuantity($totalQuantity)
    {
        $this->container['totalQuantity'] = $totalQuantity;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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


