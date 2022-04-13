<?php
/**
 * SellerReviewEnrollmentPaymentEvent
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
 * SellerReviewEnrollmentPaymentEvent Class Doc Comment
 *
 * @category Class
 * @description A fee payment event for the Early Reviewer Program.
 * @package  B1\AmazonSPAPI
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SellerReviewEnrollmentPaymentEvent implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SellerReviewEnrollmentPaymentEvent';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'postedDate' => 'string',
        'enrollmentId' => 'string',
        'parentASIN' => 'string',
        'feeComponent' => '\B1\AmazonSPAPI\Model\FeeComponent',
        'chargeComponent' => '\B1\AmazonSPAPI\Model\ChargeComponent',
        'totalAmount' => '\B1\AmazonSPAPI\Model\Currency'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'postedDate' => null,
        'enrollmentId' => null,
        'parentASIN' => null,
        'feeComponent' => null,
        'chargeComponent' => null,
        'totalAmount' => null
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
        'enrollmentId' => 'EnrollmentId',
        'parentASIN' => 'ParentASIN',
        'feeComponent' => 'FeeComponent',
        'chargeComponent' => 'ChargeComponent',
        'totalAmount' => 'TotalAmount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'postedDate' => 'setPostedDate',
        'enrollmentId' => 'setEnrollmentId',
        'parentASIN' => 'setParentASIN',
        'feeComponent' => 'setFeeComponent',
        'chargeComponent' => 'setChargeComponent',
        'totalAmount' => 'setTotalAmount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'postedDate' => 'getPostedDate',
        'enrollmentId' => 'getEnrollmentId',
        'parentASIN' => 'getParentASIN',
        'feeComponent' => 'getFeeComponent',
        'chargeComponent' => 'getChargeComponent',
        'totalAmount' => 'getTotalAmount'
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
        $this->container['enrollmentId'] = isset($data['enrollmentId']) ? $data['enrollmentId'] : null;
        $this->container['parentASIN'] = isset($data['parentASIN']) ? $data['parentASIN'] : null;
        $this->container['feeComponent'] = isset($data['feeComponent']) ? $data['feeComponent'] : null;
        $this->container['chargeComponent'] = isset($data['chargeComponent']) ? $data['chargeComponent'] : null;
        $this->container['totalAmount'] = isset($data['totalAmount']) ? $data['totalAmount'] : null;
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
     * Gets enrollmentId
     *
     * @return string
     */
    public function getEnrollmentId()
    {
        return $this->container['enrollmentId'];
    }

    /**
     * Sets enrollmentId
     *
     * @param string $enrollmentId An enrollment identifier.
     *
     * @return $this
     */
    public function setEnrollmentId($enrollmentId)
    {
        $this->container['enrollmentId'] = $enrollmentId;

        return $this;
    }

    /**
     * Gets parentASIN
     *
     * @return string
     */
    public function getParentASIN()
    {
        return $this->container['parentASIN'];
    }

    /**
     * Sets parentASIN
     *
     * @param string $parentASIN The Amazon Standard Identification Number (ASIN) of the item that was enrolled in the Early Reviewer Program.
     *
     * @return $this
     */
    public function setParentASIN($parentASIN)
    {
        $this->container['parentASIN'] = $parentASIN;

        return $this;
    }

    /**
     * Gets feeComponent
     *
     * @return \B1\AmazonSPAPI\Model\FeeComponent
     */
    public function getFeeComponent()
    {
        return $this->container['feeComponent'];
    }

    /**
     * Sets feeComponent
     *
     * @param \B1\AmazonSPAPI\Model\FeeComponent $feeComponent feeComponent
     *
     * @return $this
     */
    public function setFeeComponent($feeComponent)
    {
        $this->container['feeComponent'] = $feeComponent;

        return $this;
    }

    /**
     * Gets chargeComponent
     *
     * @return \B1\AmazonSPAPI\Model\ChargeComponent
     */
    public function getChargeComponent()
    {
        return $this->container['chargeComponent'];
    }

    /**
     * Sets chargeComponent
     *
     * @param \B1\AmazonSPAPI\Model\ChargeComponent $chargeComponent chargeComponent
     *
     * @return $this
     */
    public function setChargeComponent($chargeComponent)
    {
        $this->container['chargeComponent'] = $chargeComponent;

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
     * @param \B1\AmazonSPAPI\Model\Currency $totalAmount The FeeComponent value plus the ChargeComponent value.
     *
     * @return $this
     */
    public function setTotalAmount($totalAmount)
    {
        $this->container['totalAmount'] = $totalAmount;

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


