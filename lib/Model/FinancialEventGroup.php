<?php
/**
 * FinancialEventGroup
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
 * FinancialEventGroup Class Doc Comment
 *
 * @category Class
 * @description Information related to a financial event group.
 * @package  B1\AmazonSPAPI
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class FinancialEventGroup  extends BaseModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'FinancialEventGroup';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'financialEventGroupId' => 'string',
        'processingStatus' => 'string',
        'fundTransferStatus' => 'string',
        'originalTotal' => '\B1\AmazonSPAPI\Model\Currency',
        'convertedTotal' => '\B1\AmazonSPAPI\Model\Currency',
        'fundTransferDate' => 'string',
        'traceId' => 'string',
        'accountTail' => 'string',
        'beginningBalance' => '\B1\AmazonSPAPI\Model\Currency',
        'financialEventGroupStart' => 'string',
        'financialEventGroupEnd' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'financialEventGroupId' => null,
        'processingStatus' => null,
        'fundTransferStatus' => null,
        'originalTotal' => null,
        'convertedTotal' => null,
        'fundTransferDate' => null,
        'traceId' => null,
        'accountTail' => null,
        'beginningBalance' => null,
        'financialEventGroupStart' => null,
        'financialEventGroupEnd' => null
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
        'financialEventGroupId' => 'FinancialEventGroupId',
        'processingStatus' => 'ProcessingStatus',
        'fundTransferStatus' => 'FundTransferStatus',
        'originalTotal' => 'OriginalTotal',
        'convertedTotal' => 'ConvertedTotal',
        'fundTransferDate' => 'FundTransferDate',
        'traceId' => 'TraceId',
        'accountTail' => 'AccountTail',
        'beginningBalance' => 'BeginningBalance',
        'financialEventGroupStart' => 'FinancialEventGroupStart',
        'financialEventGroupEnd' => 'FinancialEventGroupEnd'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'financialEventGroupId' => 'setFinancialEventGroupId',
        'processingStatus' => 'setProcessingStatus',
        'fundTransferStatus' => 'setFundTransferStatus',
        'originalTotal' => 'setOriginalTotal',
        'convertedTotal' => 'setConvertedTotal',
        'fundTransferDate' => 'setFundTransferDate',
        'traceId' => 'setTraceId',
        'accountTail' => 'setAccountTail',
        'beginningBalance' => 'setBeginningBalance',
        'financialEventGroupStart' => 'setFinancialEventGroupStart',
        'financialEventGroupEnd' => 'setFinancialEventGroupEnd'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'financialEventGroupId' => 'getFinancialEventGroupId',
        'processingStatus' => 'getProcessingStatus',
        'fundTransferStatus' => 'getFundTransferStatus',
        'originalTotal' => 'getOriginalTotal',
        'convertedTotal' => 'getConvertedTotal',
        'fundTransferDate' => 'getFundTransferDate',
        'traceId' => 'getTraceId',
        'accountTail' => 'getAccountTail',
        'beginningBalance' => 'getBeginningBalance',
        'financialEventGroupStart' => 'getFinancialEventGroupStart',
        'financialEventGroupEnd' => 'getFinancialEventGroupEnd'
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
        $this->container['financialEventGroupId'] = isset($data['financialEventGroupId']) ? $data['financialEventGroupId'] : null;
        $this->container['processingStatus'] = isset($data['processingStatus']) ? $data['processingStatus'] : null;
        $this->container['fundTransferStatus'] = isset($data['fundTransferStatus']) ? $data['fundTransferStatus'] : null;
        $this->container['originalTotal'] = isset($data['originalTotal']) ? $data['originalTotal'] : null;
        $this->container['convertedTotal'] = isset($data['convertedTotal']) ? $data['convertedTotal'] : null;
        $this->container['fundTransferDate'] = isset($data['fundTransferDate']) ? $data['fundTransferDate'] : null;
        $this->container['traceId'] = isset($data['traceId']) ? $data['traceId'] : null;
        $this->container['accountTail'] = isset($data['accountTail']) ? $data['accountTail'] : null;
        $this->container['beginningBalance'] = isset($data['beginningBalance']) ? $data['beginningBalance'] : null;
        $this->container['financialEventGroupStart'] = isset($data['financialEventGroupStart']) ? $data['financialEventGroupStart'] : null;
        $this->container['financialEventGroupEnd'] = isset($data['financialEventGroupEnd']) ? $data['financialEventGroupEnd'] : null;
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
     * Gets financialEventGroupId
     *
     * @return string
     */
    public function getFinancialEventGroupId()
    {
        return $this->container['financialEventGroupId'];
    }

    /**
     * Sets financialEventGroupId
     *
     * @param string $financialEventGroupId A unique identifier for the financial event group.
     *
     * @return $this
     */
    public function setFinancialEventGroupId($financialEventGroupId)
    {
        $this->container['financialEventGroupId'] = $financialEventGroupId;

        return $this;
    }

    /**
     * Gets processingStatus
     *
     * @return string
     */
    public function getProcessingStatus()
    {
        return $this->container['processingStatus'];
    }

    /**
     * Sets processingStatus
     *
     * @param string $processingStatus The processing status of the financial event group indicates whether the balance of the financial event group is settled.  Possible values:  * Open  * Closed
     *
     * @return $this
     */
    public function setProcessingStatus($processingStatus)
    {
        $this->container['processingStatus'] = $processingStatus;

        return $this;
    }

    /**
     * Gets fundTransferStatus
     *
     * @return string
     */
    public function getFundTransferStatus()
    {
        return $this->container['fundTransferStatus'];
    }

    /**
     * Sets fundTransferStatus
     *
     * @param string $fundTransferStatus The status of the fund transfer.
     *
     * @return $this
     */
    public function setFundTransferStatus($fundTransferStatus)
    {
        $this->container['fundTransferStatus'] = $fundTransferStatus;

        return $this;
    }

    /**
     * Gets originalTotal
     *
     * @return \B1\AmazonSPAPI\Model\Currency
     */
    public function getOriginalTotal()
    {
        return $this->container['originalTotal'];
    }

    /**
     * Sets originalTotal
     *
     * @param \B1\AmazonSPAPI\Model\Currency $originalTotal The total amount in the currency of the marketplace in which the transactions occurred.
     *
     * @return $this
     */
    public function setOriginalTotal($originalTotal)
    {
        $this->container['originalTotal'] = $originalTotal;

        return $this;
    }

    /**
     * Gets convertedTotal
     *
     * @return \B1\AmazonSPAPI\Model\Currency
     */
    public function getConvertedTotal()
    {
        return $this->container['convertedTotal'];
    }

    /**
     * Sets convertedTotal
     *
     * @param \B1\AmazonSPAPI\Model\Currency $convertedTotal The total amount in the currency of the marketplace in which the funds were disbursed.
     *
     * @return $this
     */
    public function setConvertedTotal($convertedTotal)
    {
        $this->container['convertedTotal'] = $convertedTotal;

        return $this;
    }

    /**
     * Gets fundTransferDate
     *
     * @return \B1\AmazonSPAPI\Model\\DateTime
     */
    public function getFundTransferDate()
    {
        return $this->container['fundTransferDate'];
    }

    /**
     * Sets fundTransferDate
     *
     * @param \B1\AmazonSPAPI\Model\\DateTime $fundTransferDate The date and time when the disbursement or charge was initiated. Only present for closed settlements. In ISO 8601 date time format.
     *
     * @return $this
     */
    public function setFundTransferDate($fundTransferDate)
    {
        $this->container['fundTransferDate'] = $fundTransferDate;

        return $this;
    }

    /**
     * Gets traceId
     *
     * @return string
     */
    public function getTraceId()
    {
        return $this->container['traceId'];
    }

    /**
     * Sets traceId
     *
     * @param string $traceId The trace identifier used by sellers to look up transactions externally.
     *
     * @return $this
     */
    public function setTraceId($traceId)
    {
        $this->container['traceId'] = $traceId;

        return $this;
    }

    /**
     * Gets accountTail
     *
     * @return string
     */
    public function getAccountTail()
    {
        return $this->container['accountTail'];
    }

    /**
     * Sets accountTail
     *
     * @param string $accountTail The account tail of the payment instrument.
     *
     * @return $this
     */
    public function setAccountTail($accountTail)
    {
        $this->container['accountTail'] = $accountTail;

        return $this;
    }

    /**
     * Gets beginningBalance
     *
     * @return \B1\AmazonSPAPI\Model\Currency
     */
    public function getBeginningBalance()
    {
        return $this->container['beginningBalance'];
    }

    /**
     * Sets beginningBalance
     *
     * @param \B1\AmazonSPAPI\Model\Currency $beginningBalance The balance at the beginning of the settlement period.
     *
     * @return $this
     */
    public function setBeginningBalance($beginningBalance)
    {
        $this->container['beginningBalance'] = $beginningBalance;

        return $this;
    }

    /**
     * Gets financialEventGroupStart
     *
     * @return \B1\AmazonSPAPI\Model\\DateTime
     */
    public function getFinancialEventGroupStart()
    {
        return $this->container['financialEventGroupStart'];
    }

    /**
     * Sets financialEventGroupStart
     *
     * @param \B1\AmazonSPAPI\Model\\DateTime $financialEventGroupStart The date and time at which the financial event group is opened. In ISO 8601 date time format.
     *
     * @return $this
     */
    public function setFinancialEventGroupStart($financialEventGroupStart)
    {
        $this->container['financialEventGroupStart'] = $financialEventGroupStart;

        return $this;
    }

    /**
     * Gets financialEventGroupEnd
     *
     * @return \B1\AmazonSPAPI\Model\\DateTime
     */
    public function getFinancialEventGroupEnd()
    {
        return $this->container['financialEventGroupEnd'];
    }

    /**
     * Sets financialEventGroupEnd
     *
     * @param \B1\AmazonSPAPI\Model\\DateTime $financialEventGroupEnd The date and time at which the financial event group is closed. In ISO 8601 date time format.
     *
     * @return $this
     */
    public function setFinancialEventGroupEnd($financialEventGroupEnd)
    {
        $this->container['financialEventGroupEnd'] = $financialEventGroupEnd;

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


