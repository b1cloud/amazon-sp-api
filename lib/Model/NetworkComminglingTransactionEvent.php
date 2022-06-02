<?php
/**
 * NetworkComminglingTransactionEvent
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
 * NetworkComminglingTransactionEvent Class Doc Comment
 *
 * @category Class
 * @description A network commingling transaction event.
 * @package  B1\AmazonSPAPI
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class NetworkComminglingTransactionEvent  extends BaseModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'NetworkComminglingTransactionEvent';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'transactionType' => 'string',
        'postedDate' => 'string',
        'netCoTransactionID' => 'string',
        'swapReason' => 'string',
        'aSIN' => 'string',
        'marketplaceId' => 'string',
        'taxExclusiveAmount' => '\B1\AmazonSPAPI\Model\Currency',
        'taxAmount' => '\B1\AmazonSPAPI\Model\Currency'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'transactionType' => null,
        'postedDate' => null,
        'netCoTransactionID' => null,
        'swapReason' => null,
        'aSIN' => null,
        'marketplaceId' => null,
        'taxExclusiveAmount' => null,
        'taxAmount' => null
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
        'transactionType' => 'TransactionType',
        'postedDate' => 'PostedDate',
        'netCoTransactionID' => 'NetCoTransactionID',
        'swapReason' => 'SwapReason',
        'aSIN' => 'ASIN',
        'marketplaceId' => 'MarketplaceId',
        'taxExclusiveAmount' => 'TaxExclusiveAmount',
        'taxAmount' => 'TaxAmount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'transactionType' => 'setTransactionType',
        'postedDate' => 'setPostedDate',
        'netCoTransactionID' => 'setNetCoTransactionID',
        'swapReason' => 'setSwapReason',
        'aSIN' => 'setASIN',
        'marketplaceId' => 'setMarketplaceId',
        'taxExclusiveAmount' => 'setTaxExclusiveAmount',
        'taxAmount' => 'setTaxAmount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'transactionType' => 'getTransactionType',
        'postedDate' => 'getPostedDate',
        'netCoTransactionID' => 'getNetCoTransactionID',
        'swapReason' => 'getSwapReason',
        'aSIN' => 'getASIN',
        'marketplaceId' => 'getMarketplaceId',
        'taxExclusiveAmount' => 'getTaxExclusiveAmount',
        'taxAmount' => 'getTaxAmount'
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
        $this->container['transactionType'] = isset($data['transactionType']) ? $data['transactionType'] : null;
        $this->container['postedDate'] = isset($data['postedDate']) ? $data['postedDate'] : null;
        $this->container['netCoTransactionID'] = isset($data['netCoTransactionID']) ? $data['netCoTransactionID'] : null;
        $this->container['swapReason'] = isset($data['swapReason']) ? $data['swapReason'] : null;
        $this->container['aSIN'] = isset($data['aSIN']) ? $data['aSIN'] : null;
        $this->container['marketplaceId'] = isset($data['marketplaceId']) ? $data['marketplaceId'] : null;
        $this->container['taxExclusiveAmount'] = isset($data['taxExclusiveAmount']) ? $data['taxExclusiveAmount'] : null;
        $this->container['taxAmount'] = isset($data['taxAmount']) ? $data['taxAmount'] : null;
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
     * Gets transactionType
     *
     * @return string
     */
    public function getTransactionType()
    {
        return $this->container['transactionType'];
    }

    /**
     * Sets transactionType
     *
     * @param string $transactionType The type of network item swap.  Possible values:  * NetCo - A Fulfillment by Amazon inventory pooling transaction. Available only in the India marketplace.  * ComminglingVAT - A commingling VAT transaction. Available only in the UK, Spain, France, Germany, and Italy marketplaces.
     *
     * @return $this
     */
    public function setTransactionType($transactionType)
    {
        $this->container['transactionType'] = $transactionType;

        return $this;
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
     * Gets netCoTransactionID
     *
     * @return string
     */
    public function getNetCoTransactionID()
    {
        return $this->container['netCoTransactionID'];
    }

    /**
     * Sets netCoTransactionID
     *
     * @param string $netCoTransactionID The identifier for the network item swap.
     *
     * @return $this
     */
    public function setNetCoTransactionID($netCoTransactionID)
    {
        $this->container['netCoTransactionID'] = $netCoTransactionID;

        return $this;
    }

    /**
     * Gets swapReason
     *
     * @return string
     */
    public function getSwapReason()
    {
        return $this->container['swapReason'];
    }

    /**
     * Sets swapReason
     *
     * @param string $swapReason The reason for the network item swap.
     *
     * @return $this
     */
    public function setSwapReason($swapReason)
    {
        $this->container['swapReason'] = $swapReason;

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
     * @param string $aSIN The Amazon Standard Identification Number (ASIN) of the swapped item.
     *
     * @return $this
     */
    public function setASIN($aSIN)
    {
        $this->container['aSIN'] = $aSIN;

        return $this;
    }

    /**
     * Gets marketplaceId
     *
     * @return string
     */
    public function getMarketplaceId()
    {
        return $this->container['marketplaceId'];
    }

    /**
     * Sets marketplaceId
     *
     * @param string $marketplaceId The marketplace in which the event took place.
     *
     * @return $this
     */
    public function setMarketplaceId($marketplaceId)
    {
        $this->container['marketplaceId'] = $marketplaceId;

        return $this;
    }

    /**
     * Gets taxExclusiveAmount
     *
     * @return \B1\AmazonSPAPI\Model\Currency
     */
    public function getTaxExclusiveAmount()
    {
        return $this->container['taxExclusiveAmount'];
    }

    /**
     * Sets taxExclusiveAmount
     *
     * @param \B1\AmazonSPAPI\Model\Currency $taxExclusiveAmount The price of the swapped item minus TaxAmount.
     *
     * @return $this
     */
    public function setTaxExclusiveAmount($taxExclusiveAmount)
    {
        $this->container['taxExclusiveAmount'] = $taxExclusiveAmount;

        return $this;
    }

    /**
     * Gets taxAmount
     *
     * @return \B1\AmazonSPAPI\Model\Currency
     */
    public function getTaxAmount()
    {
        return $this->container['taxAmount'];
    }

    /**
     * Sets taxAmount
     *
     * @param \B1\AmazonSPAPI\Model\Currency $taxAmount The tax on the network item swap paid by the seller.
     *
     * @return $this
     */
    public function setTaxAmount($taxAmount)
    {
        $this->container['taxAmount'] = $taxAmount;

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


