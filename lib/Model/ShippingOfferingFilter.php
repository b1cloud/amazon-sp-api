<?php
/**
 * ShippingOfferingFilter
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
 * ShippingOfferingFilter Class Doc Comment
 *
 * @category Class
 * @description Filter for use when requesting eligible shipping services.
 * @package  B1\AmazonSPAPI
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ShippingOfferingFilter  extends BaseModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ShippingOfferingFilter';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'includePackingSlipWithLabel' => 'bool',
        'includeComplexShippingOptions' => 'bool',
        'carrierWillPickUp' => '\B1\AmazonSPAPI\Model\CarrierWillPickUpOption',
        'deliveryExperience' => '\B1\AmazonSPAPI\Model\DeliveryExperienceOption'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'includePackingSlipWithLabel' => null,
        'includeComplexShippingOptions' => null,
        'carrierWillPickUp' => null,
        'deliveryExperience' => null
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
        'includePackingSlipWithLabel' => 'IncludePackingSlipWithLabel',
        'includeComplexShippingOptions' => 'IncludeComplexShippingOptions',
        'carrierWillPickUp' => 'CarrierWillPickUp',
        'deliveryExperience' => 'DeliveryExperience'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'includePackingSlipWithLabel' => 'setIncludePackingSlipWithLabel',
        'includeComplexShippingOptions' => 'setIncludeComplexShippingOptions',
        'carrierWillPickUp' => 'setCarrierWillPickUp',
        'deliveryExperience' => 'setDeliveryExperience'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'includePackingSlipWithLabel' => 'getIncludePackingSlipWithLabel',
        'includeComplexShippingOptions' => 'getIncludeComplexShippingOptions',
        'carrierWillPickUp' => 'getCarrierWillPickUp',
        'deliveryExperience' => 'getDeliveryExperience'
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
        $this->container['includePackingSlipWithLabel'] = isset($data['includePackingSlipWithLabel']) ? $data['includePackingSlipWithLabel'] : null;
        $this->container['includeComplexShippingOptions'] = isset($data['includeComplexShippingOptions']) ? $data['includeComplexShippingOptions'] : null;
        $this->container['carrierWillPickUp'] = isset($data['carrierWillPickUp']) ? $data['carrierWillPickUp'] : null;
        $this->container['deliveryExperience'] = isset($data['deliveryExperience']) ? $data['deliveryExperience'] : null;
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
     * Gets includePackingSlipWithLabel
     *
     * @return bool
     */
    public function getIncludePackingSlipWithLabel()
    {
        return $this->container['includePackingSlipWithLabel'];
    }

    /**
     * Sets includePackingSlipWithLabel
     *
     * @param bool $includePackingSlipWithLabel When true, include a packing slip with the label.
     *
     * @return $this
     */
    public function setIncludePackingSlipWithLabel($includePackingSlipWithLabel)
    {
        $this->container['includePackingSlipWithLabel'] = $includePackingSlipWithLabel;

        return $this;
    }

    /**
     * Gets includeComplexShippingOptions
     *
     * @return bool
     */
    public function getIncludeComplexShippingOptions()
    {
        return $this->container['includeComplexShippingOptions'];
    }

    /**
     * Sets includeComplexShippingOptions
     *
     * @param bool $includeComplexShippingOptions When true, include complex shipping options.
     *
     * @return $this
     */
    public function setIncludeComplexShippingOptions($includeComplexShippingOptions)
    {
        $this->container['includeComplexShippingOptions'] = $includeComplexShippingOptions;

        return $this;
    }

    /**
     * Gets carrierWillPickUp
     *
     * @return \B1\AmazonSPAPI\Model\CarrierWillPickUpOption
     */
    public function getCarrierWillPickUp()
    {
        return $this->container['carrierWillPickUp'];
    }

    /**
     * Sets carrierWillPickUp
     *
     * @param \B1\AmazonSPAPI\Model\CarrierWillPickUpOption $carrierWillPickUp carrierWillPickUp
     *
     * @return $this
     */
    public function setCarrierWillPickUp($carrierWillPickUp)
    {
        $this->container['carrierWillPickUp'] = $carrierWillPickUp;

        return $this;
    }

    /**
     * Gets deliveryExperience
     *
     * @return \B1\AmazonSPAPI\Model\DeliveryExperienceOption
     */
    public function getDeliveryExperience()
    {
        return $this->container['deliveryExperience'];
    }

    /**
     * Sets deliveryExperience
     *
     * @param \B1\AmazonSPAPI\Model\DeliveryExperienceOption $deliveryExperience deliveryExperience
     *
     * @return $this
     */
    public function setDeliveryExperience($deliveryExperience)
    {
        $this->container['deliveryExperience'] = $deliveryExperience;

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


