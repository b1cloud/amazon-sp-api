<?php
/**
 * GetEligibleShipmentServicesResult
 *
 * PHP version 5
 *
 * @category Class
 * @package  B1\AmazonSPAPI
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Selling Partner API for Merchant Fulfillment
 *
 * The Selling Partner API for Merchant Fulfillment helps you build applications that let sellers purchase shipping for non-Prime and Prime orders using Amazon’s Buy Shipping Services.
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
 * GetEligibleShipmentServicesResult Class Doc Comment
 *
 * @category Class
 * @description The payload for the getEligibleShipmentServices operation.
 * @package  B1\AmazonSPAPI
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GetEligibleShipmentServicesResult  extends BaseModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'GetEligibleShipmentServicesResult';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'shippingServiceList' => '\B1\AmazonSPAPI\Model\ShippingServiceList',
        'rejectedShippingServiceList' => '\B1\AmazonSPAPI\Model\RejectedShippingServiceList',
        'temporarilyUnavailableCarrierList' => '\B1\AmazonSPAPI\Model\TemporarilyUnavailableCarrierList',
        'termsAndConditionsNotAcceptedCarrierList' => '\B1\AmazonSPAPI\Model\TermsAndConditionsNotAcceptedCarrierList'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'shippingServiceList' => null,
        'rejectedShippingServiceList' => null,
        'temporarilyUnavailableCarrierList' => null,
        'termsAndConditionsNotAcceptedCarrierList' => null
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
        'shippingServiceList' => 'ShippingServiceList',
        'rejectedShippingServiceList' => 'RejectedShippingServiceList',
        'temporarilyUnavailableCarrierList' => 'TemporarilyUnavailableCarrierList',
        'termsAndConditionsNotAcceptedCarrierList' => 'TermsAndConditionsNotAcceptedCarrierList'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'shippingServiceList' => 'setShippingServiceList',
        'rejectedShippingServiceList' => 'setRejectedShippingServiceList',
        'temporarilyUnavailableCarrierList' => 'setTemporarilyUnavailableCarrierList',
        'termsAndConditionsNotAcceptedCarrierList' => 'setTermsAndConditionsNotAcceptedCarrierList'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'shippingServiceList' => 'getShippingServiceList',
        'rejectedShippingServiceList' => 'getRejectedShippingServiceList',
        'temporarilyUnavailableCarrierList' => 'getTemporarilyUnavailableCarrierList',
        'termsAndConditionsNotAcceptedCarrierList' => 'getTermsAndConditionsNotAcceptedCarrierList'
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
        $this->container['shippingServiceList'] = isset($data['shippingServiceList']) ? $data['shippingServiceList'] : null;
        $this->container['rejectedShippingServiceList'] = isset($data['rejectedShippingServiceList']) ? $data['rejectedShippingServiceList'] : null;
        $this->container['temporarilyUnavailableCarrierList'] = isset($data['temporarilyUnavailableCarrierList']) ? $data['temporarilyUnavailableCarrierList'] : null;
        $this->container['termsAndConditionsNotAcceptedCarrierList'] = isset($data['termsAndConditionsNotAcceptedCarrierList']) ? $data['termsAndConditionsNotAcceptedCarrierList'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['shippingServiceList'] === null) {
            $invalidProperties[] = "'shippingServiceList' can't be null";
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
     * Gets shippingServiceList
     *
     * @return \B1\AmazonSPAPI\Model\ShippingServiceList
     */
    public function getShippingServiceList()
    {
        return $this->container['shippingServiceList'];
    }

    /**
     * Sets shippingServiceList
     *
     * @param \B1\AmazonSPAPI\Model\ShippingServiceList $shippingServiceList A list of shipping services offers.
     *
     * @return $this
     */
    public function setShippingServiceList($shippingServiceList)
    {
        $this->container['shippingServiceList'] = $shippingServiceList;

        return $this;
    }

    /**
     * Gets rejectedShippingServiceList
     *
     * @return \B1\AmazonSPAPI\Model\RejectedShippingServiceList
     */
    public function getRejectedShippingServiceList()
    {
        return $this->container['rejectedShippingServiceList'];
    }

    /**
     * Sets rejectedShippingServiceList
     *
     * @param \B1\AmazonSPAPI\Model\RejectedShippingServiceList $rejectedShippingServiceList rejectedShippingServiceList
     *
     * @return $this
     */
    public function setRejectedShippingServiceList($rejectedShippingServiceList)
    {
        $this->container['rejectedShippingServiceList'] = $rejectedShippingServiceList;

        return $this;
    }

    /**
     * Gets temporarilyUnavailableCarrierList
     *
     * @return \B1\AmazonSPAPI\Model\TemporarilyUnavailableCarrierList
     */
    public function getTemporarilyUnavailableCarrierList()
    {
        return $this->container['temporarilyUnavailableCarrierList'];
    }

    /**
     * Sets temporarilyUnavailableCarrierList
     *
     * @param \B1\AmazonSPAPI\Model\TemporarilyUnavailableCarrierList $temporarilyUnavailableCarrierList temporarilyUnavailableCarrierList
     *
     * @return $this
     */
    public function setTemporarilyUnavailableCarrierList($temporarilyUnavailableCarrierList)
    {
        $this->container['temporarilyUnavailableCarrierList'] = $temporarilyUnavailableCarrierList;

        return $this;
    }

    /**
     * Gets termsAndConditionsNotAcceptedCarrierList
     *
     * @return \B1\AmazonSPAPI\Model\TermsAndConditionsNotAcceptedCarrierList
     */
    public function getTermsAndConditionsNotAcceptedCarrierList()
    {
        return $this->container['termsAndConditionsNotAcceptedCarrierList'];
    }

    /**
     * Sets termsAndConditionsNotAcceptedCarrierList
     *
     * @param \B1\AmazonSPAPI\Model\TermsAndConditionsNotAcceptedCarrierList $termsAndConditionsNotAcceptedCarrierList termsAndConditionsNotAcceptedCarrierList
     *
     * @return $this
     */
    public function setTermsAndConditionsNotAcceptedCarrierList($termsAndConditionsNotAcceptedCarrierList)
    {
        $this->container['termsAndConditionsNotAcceptedCarrierList'] = $termsAndConditionsNotAcceptedCarrierList;

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


