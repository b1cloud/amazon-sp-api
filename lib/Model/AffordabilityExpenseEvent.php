<?php
/**
 * AffordabilityExpenseEvent
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
 * AffordabilityExpenseEvent Class Doc Comment
 *
 * @category Class
 * @description An expense related to an affordability promotion.
 * @package  B1\AmazonSPAPI
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AffordabilityExpenseEvent  extends BaseModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AffordabilityExpenseEvent';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'amazonOrderId' => 'string',
        'postedDate' => 'string',
        'marketplaceId' => 'string',
        'transactionType' => 'string',
        'baseExpense' => '\B1\AmazonSPAPI\Model\Currency',
        'taxTypeCGST' => '\B1\AmazonSPAPI\Model\Currency',
        'taxTypeSGST' => '\B1\AmazonSPAPI\Model\Currency',
        'taxTypeIGST' => '\B1\AmazonSPAPI\Model\Currency',
        'totalExpense' => '\B1\AmazonSPAPI\Model\Currency'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'amazonOrderId' => null,
        'postedDate' => null,
        'marketplaceId' => null,
        'transactionType' => null,
        'baseExpense' => null,
        'taxTypeCGST' => null,
        'taxTypeSGST' => null,
        'taxTypeIGST' => null,
        'totalExpense' => null
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
        'postedDate' => 'PostedDate',
        'marketplaceId' => 'MarketplaceId',
        'transactionType' => 'TransactionType',
        'baseExpense' => 'BaseExpense',
        'taxTypeCGST' => 'TaxTypeCGST',
        'taxTypeSGST' => 'TaxTypeSGST',
        'taxTypeIGST' => 'TaxTypeIGST',
        'totalExpense' => 'TotalExpense'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'amazonOrderId' => 'setAmazonOrderId',
        'postedDate' => 'setPostedDate',
        'marketplaceId' => 'setMarketplaceId',
        'transactionType' => 'setTransactionType',
        'baseExpense' => 'setBaseExpense',
        'taxTypeCGST' => 'setTaxTypeCGST',
        'taxTypeSGST' => 'setTaxTypeSGST',
        'taxTypeIGST' => 'setTaxTypeIGST',
        'totalExpense' => 'setTotalExpense'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'amazonOrderId' => 'getAmazonOrderId',
        'postedDate' => 'getPostedDate',
        'marketplaceId' => 'getMarketplaceId',
        'transactionType' => 'getTransactionType',
        'baseExpense' => 'getBaseExpense',
        'taxTypeCGST' => 'getTaxTypeCGST',
        'taxTypeSGST' => 'getTaxTypeSGST',
        'taxTypeIGST' => 'getTaxTypeIGST',
        'totalExpense' => 'getTotalExpense'
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
        $this->container['postedDate'] = isset($data['postedDate']) ? $data['postedDate'] : null;
        $this->container['marketplaceId'] = isset($data['marketplaceId']) ? $data['marketplaceId'] : null;
        $this->container['transactionType'] = isset($data['transactionType']) ? $data['transactionType'] : null;
        $this->container['baseExpense'] = isset($data['baseExpense']) ? $data['baseExpense'] : null;
        $this->container['taxTypeCGST'] = isset($data['taxTypeCGST']) ? $data['taxTypeCGST'] : null;
        $this->container['taxTypeSGST'] = isset($data['taxTypeSGST']) ? $data['taxTypeSGST'] : null;
        $this->container['taxTypeIGST'] = isset($data['taxTypeIGST']) ? $data['taxTypeIGST'] : null;
        $this->container['totalExpense'] = isset($data['totalExpense']) ? $data['totalExpense'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['taxTypeCGST'] === null) {
            $invalidProperties[] = "'taxTypeCGST' can't be null";
        }
        if ($this->container['taxTypeSGST'] === null) {
            $invalidProperties[] = "'taxTypeSGST' can't be null";
        }
        if ($this->container['taxTypeIGST'] === null) {
            $invalidProperties[] = "'taxTypeIGST' can't be null";
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
     * @param \B1\AmazonSPAPI\Model\\DateTime $postedDate The date and time when the financial event was created.
     *
     * @return $this
     */
    public function setPostedDate($postedDate)
    {
        $this->container['postedDate'] = $postedDate;

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
     * @param string $marketplaceId An encrypted, Amazon-defined marketplace identifier.
     *
     * @return $this
     */
    public function setMarketplaceId($marketplaceId)
    {
        $this->container['marketplaceId'] = $marketplaceId;

        return $this;
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
     * @param string $transactionType Indicates the type of transaction.   Possible values:  * Charge - For an affordability promotion expense.  * Refund - For an affordability promotion expense reversal.
     *
     * @return $this
     */
    public function setTransactionType($transactionType)
    {
        $this->container['transactionType'] = $transactionType;

        return $this;
    }

    /**
     * Gets baseExpense
     *
     * @return \B1\AmazonSPAPI\Model\Currency
     */
    public function getBaseExpense()
    {
        return $this->container['baseExpense'];
    }

    /**
     * Sets baseExpense
     *
     * @param \B1\AmazonSPAPI\Model\Currency $baseExpense The amount charged for clicks incurred under the Sponsored Products program.
     *
     * @return $this
     */
    public function setBaseExpense($baseExpense)
    {
        $this->container['baseExpense'] = $baseExpense;

        return $this;
    }

    /**
     * Gets taxTypeCGST
     *
     * @return \B1\AmazonSPAPI\Model\Currency
     */
    public function getTaxTypeCGST()
    {
        return $this->container['taxTypeCGST'];
    }

    /**
     * Sets taxTypeCGST
     *
     * @param \B1\AmazonSPAPI\Model\Currency $taxTypeCGST Central Goods and Service Tax, charged and collected by the central government.
     *
     * @return $this
     */
    public function setTaxTypeCGST($taxTypeCGST)
    {
        $this->container['taxTypeCGST'] = $taxTypeCGST;

        return $this;
    }

    /**
     * Gets taxTypeSGST
     *
     * @return \B1\AmazonSPAPI\Model\Currency
     */
    public function getTaxTypeSGST()
    {
        return $this->container['taxTypeSGST'];
    }

    /**
     * Sets taxTypeSGST
     *
     * @param \B1\AmazonSPAPI\Model\Currency $taxTypeSGST State Goods and Service Tax, charged and collected by the state government.
     *
     * @return $this
     */
    public function setTaxTypeSGST($taxTypeSGST)
    {
        $this->container['taxTypeSGST'] = $taxTypeSGST;

        return $this;
    }

    /**
     * Gets taxTypeIGST
     *
     * @return \B1\AmazonSPAPI\Model\Currency
     */
    public function getTaxTypeIGST()
    {
        return $this->container['taxTypeIGST'];
    }

    /**
     * Sets taxTypeIGST
     *
     * @param \B1\AmazonSPAPI\Model\Currency $taxTypeIGST Integrated Goods and Service Tax, charged and collected by the central government.
     *
     * @return $this
     */
    public function setTaxTypeIGST($taxTypeIGST)
    {
        $this->container['taxTypeIGST'] = $taxTypeIGST;

        return $this;
    }

    /**
     * Gets totalExpense
     *
     * @return \B1\AmazonSPAPI\Model\Currency
     */
    public function getTotalExpense()
    {
        return $this->container['totalExpense'];
    }

    /**
     * Sets totalExpense
     *
     * @param \B1\AmazonSPAPI\Model\Currency $totalExpense The total amount charged to the seller. TotalExpense = BaseExpense + TaxTypeIGST + TaxTypeCGST + TaxTypeSGST.
     *
     * @return $this
     */
    public function setTotalExpense($totalExpense)
    {
        $this->container['totalExpense'] = $totalExpense;

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


