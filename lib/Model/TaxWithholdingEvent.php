<?php
/**
 * TaxWithholdingEvent
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
 * TaxWithholdingEvent Class Doc Comment
 *
 * @category Class
 * @description A TaxWithholding event on seller&#39;s account.
 * @package  B1\AmazonSPAPI
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TaxWithholdingEvent  extends BaseModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TaxWithholdingEvent';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'postedDate' => 'string',
        'baseAmount' => '\B1\AmazonSPAPI\Model\Currency',
        'withheldAmount' => '\B1\AmazonSPAPI\Model\Currency',
        'taxWithholdingPeriod' => '\B1\AmazonSPAPI\Model\TaxWithholdingPeriod'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'postedDate' => null,
        'baseAmount' => null,
        'withheldAmount' => null,
        'taxWithholdingPeriod' => null
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
        'postedDate' => 'PostedDate',
        'baseAmount' => 'BaseAmount',
        'withheldAmount' => 'WithheldAmount',
        'taxWithholdingPeriod' => 'TaxWithholdingPeriod'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'postedDate' => 'setPostedDate',
        'baseAmount' => 'setBaseAmount',
        'withheldAmount' => 'setWithheldAmount',
        'taxWithholdingPeriod' => 'setTaxWithholdingPeriod'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'postedDate' => 'getPostedDate',
        'baseAmount' => 'getBaseAmount',
        'withheldAmount' => 'getWithheldAmount',
        'taxWithholdingPeriod' => 'getTaxWithholdingPeriod'
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
        $this->container['postedDate'] = isset($data['postedDate']) ? $data['postedDate'] : null;
        $this->container['baseAmount'] = isset($data['baseAmount']) ? $data['baseAmount'] : null;
        $this->container['withheldAmount'] = isset($data['withheldAmount']) ? $data['withheldAmount'] : null;
        $this->container['taxWithholdingPeriod'] = isset($data['taxWithholdingPeriod']) ? $data['taxWithholdingPeriod'] : null;
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
     * Gets postedDate
     *
     * @return \B1\AmazonSPAPI\Model\\DateTime
     */
    public function getPostedDate()
    {
        return $this->container['postedDate'];
    }

    /**
     * Sets postedDate
     *
     * @param \B1\AmazonSPAPI\Model\\DateTime $postedDate The date and time when the financial event was posted.
     *
     * @return $this
     */
    public function setPostedDate($postedDate)
    {
        $this->container['postedDate'] = $postedDate;

        return $this;
    }

    /**
     * Gets baseAmount
     *
     * @return \B1\AmazonSPAPI\Model\Currency
     */
    public function getBaseAmount()
    {
        return $this->container['baseAmount'];
    }

    /**
     * Sets baseAmount
     *
     * @param \B1\AmazonSPAPI\Model\Currency $baseAmount The amount which tax was withheld against.
     *
     * @return $this
     */
    public function setBaseAmount($baseAmount)
    {
        $this->container['baseAmount'] = $baseAmount;

        return $this;
    }

    /**
     * Gets withheldAmount
     *
     * @return \B1\AmazonSPAPI\Model\Currency
     */
    public function getWithheldAmount()
    {
        return $this->container['withheldAmount'];
    }

    /**
     * Sets withheldAmount
     *
     * @param \B1\AmazonSPAPI\Model\Currency $withheldAmount The amount of the tax withholding deducted from seller's account.
     *
     * @return $this
     */
    public function setWithheldAmount($withheldAmount)
    {
        $this->container['withheldAmount'] = $withheldAmount;

        return $this;
    }

    /**
     * Gets taxWithholdingPeriod
     *
     * @return \B1\AmazonSPAPI\Model\TaxWithholdingPeriod
     */
    public function getTaxWithholdingPeriod()
    {
        return $this->container['taxWithholdingPeriod'];
    }

    /**
     * Sets taxWithholdingPeriod
     *
     * @param \B1\AmazonSPAPI\Model\TaxWithholdingPeriod $taxWithholdingPeriod Time period for which tax is withheld.
     *
     * @return $this
     */
    public function setTaxWithholdingPeriod($taxWithholdingPeriod)
    {
        $this->container['taxWithholdingPeriod'] = $taxWithholdingPeriod;

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


