<?php
/**
 * ServiceFeeEvent
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
 * ServiceFeeEvent Class Doc Comment
 *
 * @category Class
 * @description A service fee on the seller&#39;s account.
 * @package  B1\AmazonSPAPI
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ServiceFeeEvent  extends BaseModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ServiceFeeEvent';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'amazonOrderId' => 'string',
        'feeReason' => 'string',
        'feeList' => '\B1\AmazonSPAPI\Model\FeeComponentList',
        'sellerSKU' => 'string',
        'fnSKU' => 'string',
        'feeDescription' => 'string',
        'aSIN' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'amazonOrderId' => null,
        'feeReason' => null,
        'feeList' => null,
        'sellerSKU' => null,
        'fnSKU' => null,
        'feeDescription' => null,
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
        'amazonOrderId' => 'AmazonOrderId',
        'feeReason' => 'FeeReason',
        'feeList' => 'FeeList',
        'sellerSKU' => 'SellerSKU',
        'fnSKU' => 'FnSKU',
        'feeDescription' => 'FeeDescription',
        'aSIN' => 'ASIN'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'amazonOrderId' => 'setAmazonOrderId',
        'feeReason' => 'setFeeReason',
        'feeList' => 'setFeeList',
        'sellerSKU' => 'setSellerSKU',
        'fnSKU' => 'setFnSKU',
        'feeDescription' => 'setFeeDescription',
        'aSIN' => 'setASIN'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'amazonOrderId' => 'getAmazonOrderId',
        'feeReason' => 'getFeeReason',
        'feeList' => 'getFeeList',
        'sellerSKU' => 'getSellerSKU',
        'fnSKU' => 'getFnSKU',
        'feeDescription' => 'getFeeDescription',
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
        $this->container['amazonOrderId'] = isset($data['amazonOrderId']) ? $data['amazonOrderId'] : null;
        $this->container['feeReason'] = isset($data['feeReason']) ? $data['feeReason'] : null;
        $this->container['feeList'] = isset($data['feeList']) ? $data['feeList'] : null;
        $this->container['sellerSKU'] = isset($data['sellerSKU']) ? $data['sellerSKU'] : null;
        $this->container['fnSKU'] = isset($data['fnSKU']) ? $data['fnSKU'] : null;
        $this->container['feeDescription'] = isset($data['feeDescription']) ? $data['feeDescription'] : null;
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
     * Gets amazonOrderId
     *
     * @return string
     */
    public function getAmazonOrderId()
    {
        return $this->container['amazonOrderId'];
    }

    /**
     * Sets amazonOrderId
     *
     * @param string $amazonOrderId An Amazon-defined identifier for an order.
     *
     * @return $this
     */
    public function setAmazonOrderId($amazonOrderId)
    {
        $this->container['amazonOrderId'] = $amazonOrderId;

        return $this;
    }

    /**
     * Gets feeReason
     *
     * @return string
     */
    public function getFeeReason()
    {
        return $this->container['feeReason'];
    }

    /**
     * Sets feeReason
     *
     * @param string $feeReason A short description of the service fee reason.
     *
     * @return $this
     */
    public function setFeeReason($feeReason)
    {
        $this->container['feeReason'] = $feeReason;

        return $this;
    }

    /**
     * Gets feeList
     *
     * @return \B1\AmazonSPAPI\Model\FeeComponentList
     */
    public function getFeeList()
    {
        return $this->container['feeList'];
    }

    /**
     * Sets feeList
     *
     * @param \B1\AmazonSPAPI\Model\FeeComponentList $feeList A list of fee components associated with the service fee.
     *
     * @return $this
     */
    public function setFeeList($feeList)
    {
        $this->container['feeList'] = $feeList;

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
     * @param string $fnSKU A unique identifier assigned by Amazon to products stored in and fulfilled from an Amazon fulfillment center.
     *
     * @return $this
     */
    public function setFnSKU($fnSKU)
    {
        $this->container['fnSKU'] = $fnSKU;

        return $this;
    }

    /**
     * Gets feeDescription
     *
     * @return string
     */
    public function getFeeDescription()
    {
        return $this->container['feeDescription'];
    }

    /**
     * Sets feeDescription
     *
     * @param string $feeDescription A short description of the service fee event.
     *
     * @return $this
     */
    public function setFeeDescription($feeDescription)
    {
        $this->container['feeDescription'] = $feeDescription;

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


