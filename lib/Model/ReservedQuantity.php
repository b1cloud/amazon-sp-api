<?php
/**
 * ReservedQuantity
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
 * ReservedQuantity Class Doc Comment
 *
 * @category Class
 * @description The quantity of reserved inventory.
 * @package  B1\AmazonSPAPI
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ReservedQuantity  extends BaseModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ReservedQuantity';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'totalReservedQuantity' => 'int',
        'pendingCustomerOrderQuantity' => 'int',
        'pendingTransshipmentQuantity' => 'int',
        'fcProcessingQuantity' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'totalReservedQuantity' => null,
        'pendingCustomerOrderQuantity' => null,
        'pendingTransshipmentQuantity' => null,
        'fcProcessingQuantity' => null
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
        'totalReservedQuantity' => 'totalReservedQuantity',
        'pendingCustomerOrderQuantity' => 'pendingCustomerOrderQuantity',
        'pendingTransshipmentQuantity' => 'pendingTransshipmentQuantity',
        'fcProcessingQuantity' => 'fcProcessingQuantity'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'totalReservedQuantity' => 'setTotalReservedQuantity',
        'pendingCustomerOrderQuantity' => 'setPendingCustomerOrderQuantity',
        'pendingTransshipmentQuantity' => 'setPendingTransshipmentQuantity',
        'fcProcessingQuantity' => 'setFcProcessingQuantity'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'totalReservedQuantity' => 'getTotalReservedQuantity',
        'pendingCustomerOrderQuantity' => 'getPendingCustomerOrderQuantity',
        'pendingTransshipmentQuantity' => 'getPendingTransshipmentQuantity',
        'fcProcessingQuantity' => 'getFcProcessingQuantity'
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
        $this->container['totalReservedQuantity'] = isset($data['totalReservedQuantity']) ? $data['totalReservedQuantity'] : null;
        $this->container['pendingCustomerOrderQuantity'] = isset($data['pendingCustomerOrderQuantity']) ? $data['pendingCustomerOrderQuantity'] : null;
        $this->container['pendingTransshipmentQuantity'] = isset($data['pendingTransshipmentQuantity']) ? $data['pendingTransshipmentQuantity'] : null;
        $this->container['fcProcessingQuantity'] = isset($data['fcProcessingQuantity']) ? $data['fcProcessingQuantity'] : null;
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
     * Gets totalReservedQuantity
     *
     * @return int
     */
    public function getTotalReservedQuantity()
    {
        return $this->container['totalReservedQuantity'];
    }

    /**
     * Sets totalReservedQuantity
     *
     * @param int $totalReservedQuantity The total number of units in Amazon's fulfillment network that are currently being picked, packed, and shipped; or are sidelined for measurement, sampling, or other internal processes.
     *
     * @return $this
     */
    public function setTotalReservedQuantity($totalReservedQuantity)
    {
        $this->container['totalReservedQuantity'] = $totalReservedQuantity;

        return $this;
    }

    /**
     * Gets pendingCustomerOrderQuantity
     *
     * @return int
     */
    public function getPendingCustomerOrderQuantity()
    {
        return $this->container['pendingCustomerOrderQuantity'];
    }

    /**
     * Sets pendingCustomerOrderQuantity
     *
     * @param int $pendingCustomerOrderQuantity The number of units reserved for customer orders.
     *
     * @return $this
     */
    public function setPendingCustomerOrderQuantity($pendingCustomerOrderQuantity)
    {
        $this->container['pendingCustomerOrderQuantity'] = $pendingCustomerOrderQuantity;

        return $this;
    }

    /**
     * Gets pendingTransshipmentQuantity
     *
     * @return int
     */
    public function getPendingTransshipmentQuantity()
    {
        return $this->container['pendingTransshipmentQuantity'];
    }

    /**
     * Sets pendingTransshipmentQuantity
     *
     * @param int $pendingTransshipmentQuantity The number of units being transferred from one fulfillment center to another.
     *
     * @return $this
     */
    public function setPendingTransshipmentQuantity($pendingTransshipmentQuantity)
    {
        $this->container['pendingTransshipmentQuantity'] = $pendingTransshipmentQuantity;

        return $this;
    }

    /**
     * Gets fcProcessingQuantity
     *
     * @return int
     */
    public function getFcProcessingQuantity()
    {
        return $this->container['fcProcessingQuantity'];
    }

    /**
     * Sets fcProcessingQuantity
     *
     * @param int $fcProcessingQuantity The number of units that have been sidelined at the fulfillment center for additional processing.
     *
     * @return $this
     */
    public function setFcProcessingQuantity($fcProcessingQuantity)
    {
        $this->container['fcProcessingQuantity'] = $fcProcessingQuantity;

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


