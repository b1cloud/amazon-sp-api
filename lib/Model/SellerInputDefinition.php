<?php
/**
 * SellerInputDefinition
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
 * SellerInputDefinition Class Doc Comment
 *
 * @category Class
 * @description Specifies characteristics that apply to a seller input.
 * @package  B1\AmazonSPAPI
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SellerInputDefinition  extends BaseModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SellerInputDefinition';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'isRequired' => 'bool',
        'dataType' => 'string',
        'constraints' => '\B1\AmazonSPAPI\Model\Constraints',
        'inputDisplayText' => 'string',
        'inputTarget' => '\B1\AmazonSPAPI\Model\InputTargetType',
        'storedValue' => '\B1\AmazonSPAPI\Model\AdditionalSellerInput',
        'restrictedSetValues' => '\B1\AmazonSPAPI\Model\RestrictedSetValues'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'isRequired' => null,
        'dataType' => null,
        'constraints' => null,
        'inputDisplayText' => null,
        'inputTarget' => null,
        'storedValue' => null,
        'restrictedSetValues' => null
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
        'isRequired' => 'IsRequired',
        'dataType' => 'DataType',
        'constraints' => 'Constraints',
        'inputDisplayText' => 'InputDisplayText',
        'inputTarget' => 'InputTarget',
        'storedValue' => 'StoredValue',
        'restrictedSetValues' => 'RestrictedSetValues'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'isRequired' => 'setIsRequired',
        'dataType' => 'setDataType',
        'constraints' => 'setConstraints',
        'inputDisplayText' => 'setInputDisplayText',
        'inputTarget' => 'setInputTarget',
        'storedValue' => 'setStoredValue',
        'restrictedSetValues' => 'setRestrictedSetValues'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'isRequired' => 'getIsRequired',
        'dataType' => 'getDataType',
        'constraints' => 'getConstraints',
        'inputDisplayText' => 'getInputDisplayText',
        'inputTarget' => 'getInputTarget',
        'storedValue' => 'getStoredValue',
        'restrictedSetValues' => 'getRestrictedSetValues'
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
        $this->container['isRequired'] = isset($data['isRequired']) ? $data['isRequired'] : null;
        $this->container['dataType'] = isset($data['dataType']) ? $data['dataType'] : null;
        $this->container['constraints'] = isset($data['constraints']) ? $data['constraints'] : null;
        $this->container['inputDisplayText'] = isset($data['inputDisplayText']) ? $data['inputDisplayText'] : null;
        $this->container['inputTarget'] = isset($data['inputTarget']) ? $data['inputTarget'] : null;
        $this->container['storedValue'] = isset($data['storedValue']) ? $data['storedValue'] : null;
        $this->container['restrictedSetValues'] = isset($data['restrictedSetValues']) ? $data['restrictedSetValues'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['isRequired'] === null) {
            $invalidProperties[] = "'isRequired' can't be null";
        }
        if ($this->container['dataType'] === null) {
            $invalidProperties[] = "'dataType' can't be null";
        }
        if ($this->container['constraints'] === null) {
            $invalidProperties[] = "'constraints' can't be null";
        }
        if ($this->container['inputDisplayText'] === null) {
            $invalidProperties[] = "'inputDisplayText' can't be null";
        }
        if ($this->container['storedValue'] === null) {
            $invalidProperties[] = "'storedValue' can't be null";
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
     * Gets isRequired
     *
     * @return bool
     */
    public function getIsRequired()
    {
        return $this->container['isRequired'];
    }

    /**
     * Sets isRequired
     *
     * @param bool $isRequired When true, the additional input field is required.
     *
     * @return $this
     */
    public function setIsRequired($isRequired)
    {
        $this->container['isRequired'] = $isRequired;

        return $this;
    }

    /**
     * Gets dataType
     *
     * @return string
     */
    public function getDataType()
    {
        return $this->container['dataType'];
    }

    /**
     * Sets dataType
     *
     * @param string $dataType The data type of the additional input field.
     *
     * @return $this
     */
    public function setDataType($dataType)
    {
        $this->container['dataType'] = $dataType;

        return $this;
    }

    /**
     * Gets constraints
     *
     * @return \B1\AmazonSPAPI\Model\Constraints
     */
    public function getConstraints()
    {
        return $this->container['constraints'];
    }

    /**
     * Sets constraints
     *
     * @param \B1\AmazonSPAPI\Model\Constraints $constraints constraints
     *
     * @return $this
     */
    public function setConstraints($constraints)
    {
        $this->container['constraints'] = $constraints;

        return $this;
    }

    /**
     * Gets inputDisplayText
     *
     * @return string
     */
    public function getInputDisplayText()
    {
        return $this->container['inputDisplayText'];
    }

    /**
     * Sets inputDisplayText
     *
     * @param string $inputDisplayText The display text for the additional input field.
     *
     * @return $this
     */
    public function setInputDisplayText($inputDisplayText)
    {
        $this->container['inputDisplayText'] = $inputDisplayText;

        return $this;
    }

    /**
     * Gets inputTarget
     *
     * @return \B1\AmazonSPAPI\Model\InputTargetType
     */
    public function getInputTarget()
    {
        return $this->container['inputTarget'];
    }

    /**
     * Sets inputTarget
     *
     * @param \B1\AmazonSPAPI\Model\InputTargetType $inputTarget Whether the seller input applies to the item or the shipment.
     *
     * @return $this
     */
    public function setInputTarget($inputTarget)
    {
        $this->container['inputTarget'] = $inputTarget;

        return $this;
    }

    /**
     * Gets storedValue
     *
     * @return \B1\AmazonSPAPI\Model\AdditionalSellerInput
     */
    public function getStoredValue()
    {
        return $this->container['storedValue'];
    }

    /**
     * Sets storedValue
     *
     * @param \B1\AmazonSPAPI\Model\AdditionalSellerInput $storedValue storedValue
     *
     * @return $this
     */
    public function setStoredValue($storedValue)
    {
        $this->container['storedValue'] = $storedValue;

        return $this;
    }

    /**
     * Gets restrictedSetValues
     *
     * @return \B1\AmazonSPAPI\Model\RestrictedSetValues
     */
    public function getRestrictedSetValues()
    {
        return $this->container['restrictedSetValues'];
    }

    /**
     * Sets restrictedSetValues
     *
     * @param \B1\AmazonSPAPI\Model\RestrictedSetValues $restrictedSetValues restrictedSetValues
     *
     * @return $this
     */
    public function setRestrictedSetValues($restrictedSetValues)
    {
        $this->container['restrictedSetValues'] = $restrictedSetValues;

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


