<?php
/**
 * DebtRecoveryEvent
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
 * DebtRecoveryEvent Class Doc Comment
 *
 * @category Class
 * @description A debt payment or debt adjustment.
 * @package  B1\AmazonSPAPI
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DebtRecoveryEvent implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DebtRecoveryEvent';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'debtRecoveryType' => 'string',
        'recoveryAmount' => '\B1\AmazonSPAPI\Model\Currency',
        'overPaymentCredit' => '\B1\AmazonSPAPI\Model\Currency',
        'debtRecoveryItemList' => '\B1\AmazonSPAPI\Model\DebtRecoveryItemList',
        'chargeInstrumentList' => '\B1\AmazonSPAPI\Model\ChargeInstrumentList'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'debtRecoveryType' => null,
        'recoveryAmount' => null,
        'overPaymentCredit' => null,
        'debtRecoveryItemList' => null,
        'chargeInstrumentList' => null
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
        'debtRecoveryType' => 'DebtRecoveryType',
        'recoveryAmount' => 'RecoveryAmount',
        'overPaymentCredit' => 'OverPaymentCredit',
        'debtRecoveryItemList' => 'DebtRecoveryItemList',
        'chargeInstrumentList' => 'ChargeInstrumentList'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'debtRecoveryType' => 'setDebtRecoveryType',
        'recoveryAmount' => 'setRecoveryAmount',
        'overPaymentCredit' => 'setOverPaymentCredit',
        'debtRecoveryItemList' => 'setDebtRecoveryItemList',
        'chargeInstrumentList' => 'setChargeInstrumentList'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'debtRecoveryType' => 'getDebtRecoveryType',
        'recoveryAmount' => 'getRecoveryAmount',
        'overPaymentCredit' => 'getOverPaymentCredit',
        'debtRecoveryItemList' => 'getDebtRecoveryItemList',
        'chargeInstrumentList' => 'getChargeInstrumentList'
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
        $this->container['debtRecoveryType'] = isset($data['debtRecoveryType']) ? $data['debtRecoveryType'] : null;
        $this->container['recoveryAmount'] = isset($data['recoveryAmount']) ? $data['recoveryAmount'] : null;
        $this->container['overPaymentCredit'] = isset($data['overPaymentCredit']) ? $data['overPaymentCredit'] : null;
        $this->container['debtRecoveryItemList'] = isset($data['debtRecoveryItemList']) ? $data['debtRecoveryItemList'] : null;
        $this->container['chargeInstrumentList'] = isset($data['chargeInstrumentList']) ? $data['chargeInstrumentList'] : null;
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
     * Gets debtRecoveryType
     *
     * @return string
     */
    public function getDebtRecoveryType()
    {
        return $this->container['debtRecoveryType'];
    }

    /**
     * Sets debtRecoveryType
     *
     * @param string $debtRecoveryType The debt recovery type.  Possible values:  * DebtPayment  * DebtPaymentFailure  *DebtAdjustment
     *
     * @return $this
     */
    public function setDebtRecoveryType($debtRecoveryType)
    {
        $this->container['debtRecoveryType'] = $debtRecoveryType;

        return $this;
    }

    /**
     * Gets recoveryAmount
     *
     * @return \B1\AmazonSPAPI\Model\Currency
     */
    public function getRecoveryAmount()
    {
        return $this->container['recoveryAmount'];
    }

    /**
     * Sets recoveryAmount
     *
     * @param \B1\AmazonSPAPI\Model\Currency $recoveryAmount The amount applied for recovery.
     *
     * @return $this
     */
    public function setRecoveryAmount($recoveryAmount)
    {
        $this->container['recoveryAmount'] = $recoveryAmount;

        return $this;
    }

    /**
     * Gets overPaymentCredit
     *
     * @return \B1\AmazonSPAPI\Model\Currency
     */
    public function getOverPaymentCredit()
    {
        return $this->container['overPaymentCredit'];
    }

    /**
     * Sets overPaymentCredit
     *
     * @param \B1\AmazonSPAPI\Model\Currency $overPaymentCredit The amount returned for overpayment.
     *
     * @return $this
     */
    public function setOverPaymentCredit($overPaymentCredit)
    {
        $this->container['overPaymentCredit'] = $overPaymentCredit;

        return $this;
    }

    /**
     * Gets debtRecoveryItemList
     *
     * @return \B1\AmazonSPAPI\Model\DebtRecoveryItemList
     */
    public function getDebtRecoveryItemList()
    {
        return $this->container['debtRecoveryItemList'];
    }

    /**
     * Sets debtRecoveryItemList
     *
     * @param \B1\AmazonSPAPI\Model\DebtRecoveryItemList $debtRecoveryItemList debtRecoveryItemList
     *
     * @return $this
     */
    public function setDebtRecoveryItemList($debtRecoveryItemList)
    {
        $this->container['debtRecoveryItemList'] = $debtRecoveryItemList;

        return $this;
    }

    /**
     * Gets chargeInstrumentList
     *
     * @return \B1\AmazonSPAPI\Model\ChargeInstrumentList
     */
    public function getChargeInstrumentList()
    {
        return $this->container['chargeInstrumentList'];
    }

    /**
     * Sets chargeInstrumentList
     *
     * @param \B1\AmazonSPAPI\Model\ChargeInstrumentList $chargeInstrumentList chargeInstrumentList
     *
     * @return $this
     */
    public function setChargeInstrumentList($chargeInstrumentList)
    {
        $this->container['chargeInstrumentList'] = $chargeInstrumentList;

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

