<?php
/**
 * UnfulfillableQuantity
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
 * UnfulfillableQuantity Class Doc Comment
 *
 * @category Class
 * @description The quantity of unfulfillable inventory.
 * @package  B1\AmazonSPAPI
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UnfulfillableQuantity implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'UnfulfillableQuantity';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'totalUnfulfillableQuantity' => 'int',
        'customerDamagedQuantity' => 'int',
        'warehouseDamagedQuantity' => 'int',
        'distributorDamagedQuantity' => 'int',
        'carrierDamagedQuantity' => 'int',
        'defectiveQuantity' => 'int',
        'expiredQuantity' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'totalUnfulfillableQuantity' => null,
        'customerDamagedQuantity' => null,
        'warehouseDamagedQuantity' => null,
        'distributorDamagedQuantity' => null,
        'carrierDamagedQuantity' => null,
        'defectiveQuantity' => null,
        'expiredQuantity' => null
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
        'totalUnfulfillableQuantity' => 'totalUnfulfillableQuantity',
        'customerDamagedQuantity' => 'customerDamagedQuantity',
        'warehouseDamagedQuantity' => 'warehouseDamagedQuantity',
        'distributorDamagedQuantity' => 'distributorDamagedQuantity',
        'carrierDamagedQuantity' => 'carrierDamagedQuantity',
        'defectiveQuantity' => 'defectiveQuantity',
        'expiredQuantity' => 'expiredQuantity'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'totalUnfulfillableQuantity' => 'setTotalUnfulfillableQuantity',
        'customerDamagedQuantity' => 'setCustomerDamagedQuantity',
        'warehouseDamagedQuantity' => 'setWarehouseDamagedQuantity',
        'distributorDamagedQuantity' => 'setDistributorDamagedQuantity',
        'carrierDamagedQuantity' => 'setCarrierDamagedQuantity',
        'defectiveQuantity' => 'setDefectiveQuantity',
        'expiredQuantity' => 'setExpiredQuantity'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'totalUnfulfillableQuantity' => 'getTotalUnfulfillableQuantity',
        'customerDamagedQuantity' => 'getCustomerDamagedQuantity',
        'warehouseDamagedQuantity' => 'getWarehouseDamagedQuantity',
        'distributorDamagedQuantity' => 'getDistributorDamagedQuantity',
        'carrierDamagedQuantity' => 'getCarrierDamagedQuantity',
        'defectiveQuantity' => 'getDefectiveQuantity',
        'expiredQuantity' => 'getExpiredQuantity'
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
        $this->container['totalUnfulfillableQuantity'] = isset($data['totalUnfulfillableQuantity']) ? $data['totalUnfulfillableQuantity'] : null;
        $this->container['customerDamagedQuantity'] = isset($data['customerDamagedQuantity']) ? $data['customerDamagedQuantity'] : null;
        $this->container['warehouseDamagedQuantity'] = isset($data['warehouseDamagedQuantity']) ? $data['warehouseDamagedQuantity'] : null;
        $this->container['distributorDamagedQuantity'] = isset($data['distributorDamagedQuantity']) ? $data['distributorDamagedQuantity'] : null;
        $this->container['carrierDamagedQuantity'] = isset($data['carrierDamagedQuantity']) ? $data['carrierDamagedQuantity'] : null;
        $this->container['defectiveQuantity'] = isset($data['defectiveQuantity']) ? $data['defectiveQuantity'] : null;
        $this->container['expiredQuantity'] = isset($data['expiredQuantity']) ? $data['expiredQuantity'] : null;
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
     * Gets totalUnfulfillableQuantity
     *
     * @return int
     */
    public function getTotalUnfulfillableQuantity()
    {
        return $this->container['totalUnfulfillableQuantity'];
    }

    /**
     * Sets totalUnfulfillableQuantity
     *
     * @param int $totalUnfulfillableQuantity The total number of units in Amazon's fulfillment network in unsellable condition.
     *
     * @return $this
     */
    public function setTotalUnfulfillableQuantity($totalUnfulfillableQuantity)
    {
        $this->container['totalUnfulfillableQuantity'] = $totalUnfulfillableQuantity;

        return $this;
    }

    /**
     * Gets customerDamagedQuantity
     *
     * @return int
     */
    public function getCustomerDamagedQuantity()
    {
        return $this->container['customerDamagedQuantity'];
    }

    /**
     * Sets customerDamagedQuantity
     *
     * @param int $customerDamagedQuantity The number of units in customer damaged disposition.
     *
     * @return $this
     */
    public function setCustomerDamagedQuantity($customerDamagedQuantity)
    {
        $this->container['customerDamagedQuantity'] = $customerDamagedQuantity;

        return $this;
    }

    /**
     * Gets warehouseDamagedQuantity
     *
     * @return int
     */
    public function getWarehouseDamagedQuantity()
    {
        return $this->container['warehouseDamagedQuantity'];
    }

    /**
     * Sets warehouseDamagedQuantity
     *
     * @param int $warehouseDamagedQuantity The number of units in warehouse damaged disposition.
     *
     * @return $this
     */
    public function setWarehouseDamagedQuantity($warehouseDamagedQuantity)
    {
        $this->container['warehouseDamagedQuantity'] = $warehouseDamagedQuantity;

        return $this;
    }

    /**
     * Gets distributorDamagedQuantity
     *
     * @return int
     */
    public function getDistributorDamagedQuantity()
    {
        return $this->container['distributorDamagedQuantity'];
    }

    /**
     * Sets distributorDamagedQuantity
     *
     * @param int $distributorDamagedQuantity The number of units in distributor damaged disposition.
     *
     * @return $this
     */
    public function setDistributorDamagedQuantity($distributorDamagedQuantity)
    {
        $this->container['distributorDamagedQuantity'] = $distributorDamagedQuantity;

        return $this;
    }

    /**
     * Gets carrierDamagedQuantity
     *
     * @return int
     */
    public function getCarrierDamagedQuantity()
    {
        return $this->container['carrierDamagedQuantity'];
    }

    /**
     * Sets carrierDamagedQuantity
     *
     * @param int $carrierDamagedQuantity The number of units in carrier damaged disposition.
     *
     * @return $this
     */
    public function setCarrierDamagedQuantity($carrierDamagedQuantity)
    {
        $this->container['carrierDamagedQuantity'] = $carrierDamagedQuantity;

        return $this;
    }

    /**
     * Gets defectiveQuantity
     *
     * @return int
     */
    public function getDefectiveQuantity()
    {
        return $this->container['defectiveQuantity'];
    }

    /**
     * Sets defectiveQuantity
     *
     * @param int $defectiveQuantity The number of units in defective disposition.
     *
     * @return $this
     */
    public function setDefectiveQuantity($defectiveQuantity)
    {
        $this->container['defectiveQuantity'] = $defectiveQuantity;

        return $this;
    }

    /**
     * Gets expiredQuantity
     *
     * @return int
     */
    public function getExpiredQuantity()
    {
        return $this->container['expiredQuantity'];
    }

    /**
     * Sets expiredQuantity
     *
     * @param int $expiredQuantity The number of units in expired disposition.
     *
     * @return $this
     */
    public function setExpiredQuantity($expiredQuantity)
    {
        $this->container['expiredQuantity'] = $expiredQuantity;

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


