<?php
/**
 * ShipmentEvent
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
 * ShipmentEvent Class Doc Comment
 *
 * @category Class
 * @description A shipment, refund, guarantee claim, or chargeback.
 * @package  B1\AmazonSPAPI
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ShipmentEvent implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ShipmentEvent';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'amazonOrderId' => 'string',
        'sellerOrderId' => 'string',
        'marketplaceName' => 'string',
        'orderChargeList' => '\B1\AmazonSPAPI\Model\ChargeComponent[]',
        'orderChargeAdjustmentList' => '\B1\AmazonSPAPI\Model\ChargeComponent[]',
        'shipmentFeeList' => '\B1\AmazonSPAPI\Model\FeeComponent[]',
        'shipmentFeeAdjustmentList' => '\B1\AmazonSPAPI\Model\FeeComponent[]',
        'orderFeeList' => '\B1\AmazonSPAPI\Model\FeeComponent[]',
        'orderFeeAdjustmentList' => '\B1\AmazonSPAPI\Model\FeeComponent[]',
        'directPaymentList' => '\B1\AmazonSPAPI\Model\DirectPayment[]',
        'postedDate' => 'string',
        'shipmentItemList' => '\B1\AmazonSPAPI\Model\ShipmentItem[]',
        'shipmentItemAdjustmentList' => '\B1\AmazonSPAPI\Model\ShipmentItem[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'amazonOrderId' => null,
        'sellerOrderId' => null,
        'marketplaceName' => null,
        'orderChargeList' => null,
        'orderChargeAdjustmentList' => null,
        'shipmentFeeList' => null,
        'shipmentFeeAdjustmentList' => null,
        'orderFeeList' => null,
        'orderFeeAdjustmentList' => null,
        'directPaymentList' => null,
        'postedDate' => null,
        'shipmentItemList' => null,
        'shipmentItemAdjustmentList' => null
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
        'sellerOrderId' => 'SellerOrderId',
        'marketplaceName' => 'MarketplaceName',
        'orderChargeList' => 'OrderChargeList',
        'orderChargeAdjustmentList' => 'OrderChargeAdjustmentList',
        'shipmentFeeList' => 'ShipmentFeeList',
        'shipmentFeeAdjustmentList' => 'ShipmentFeeAdjustmentList',
        'orderFeeList' => 'OrderFeeList',
        'orderFeeAdjustmentList' => 'OrderFeeAdjustmentList',
        'directPaymentList' => 'DirectPaymentList',
        'postedDate' => 'PostedDate',
        'shipmentItemList' => 'ShipmentItemList',
        'shipmentItemAdjustmentList' => 'ShipmentItemAdjustmentList'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'amazonOrderId' => 'setAmazonOrderId',
        'sellerOrderId' => 'setSellerOrderId',
        'marketplaceName' => 'setMarketplaceName',
        'orderChargeList' => 'setOrderChargeList',
        'orderChargeAdjustmentList' => 'setOrderChargeAdjustmentList',
        'shipmentFeeList' => 'setShipmentFeeList',
        'shipmentFeeAdjustmentList' => 'setShipmentFeeAdjustmentList',
        'orderFeeList' => 'setOrderFeeList',
        'orderFeeAdjustmentList' => 'setOrderFeeAdjustmentList',
        'directPaymentList' => 'setDirectPaymentList',
        'postedDate' => 'setPostedDate',
        'shipmentItemList' => 'setShipmentItemList',
        'shipmentItemAdjustmentList' => 'setShipmentItemAdjustmentList'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'amazonOrderId' => 'getAmazonOrderId',
        'sellerOrderId' => 'getSellerOrderId',
        'marketplaceName' => 'getMarketplaceName',
        'orderChargeList' => 'getOrderChargeList',
        'orderChargeAdjustmentList' => 'getOrderChargeAdjustmentList',
        'shipmentFeeList' => 'getShipmentFeeList',
        'shipmentFeeAdjustmentList' => 'getShipmentFeeAdjustmentList',
        'orderFeeList' => 'getOrderFeeList',
        'orderFeeAdjustmentList' => 'getOrderFeeAdjustmentList',
        'directPaymentList' => 'getDirectPaymentList',
        'postedDate' => 'getPostedDate',
        'shipmentItemList' => 'getShipmentItemList',
        'shipmentItemAdjustmentList' => 'getShipmentItemAdjustmentList'
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
        $this->container['sellerOrderId'] = isset($data['sellerOrderId']) ? $data['sellerOrderId'] : null;
        $this->container['marketplaceName'] = isset($data['marketplaceName']) ? $data['marketplaceName'] : null;
        $this->container['orderChargeList'] = isset($data['orderChargeList']) ? $data['orderChargeList'] : null;
        $this->container['orderChargeAdjustmentList'] = isset($data['orderChargeAdjustmentList']) ? $data['orderChargeAdjustmentList'] : null;
        $this->container['shipmentFeeList'] = isset($data['shipmentFeeList']) ? $data['shipmentFeeList'] : null;
        $this->container['shipmentFeeAdjustmentList'] = isset($data['shipmentFeeAdjustmentList']) ? $data['shipmentFeeAdjustmentList'] : null;
        $this->container['orderFeeList'] = isset($data['orderFeeList']) ? $data['orderFeeList'] : null;
        $this->container['orderFeeAdjustmentList'] = isset($data['orderFeeAdjustmentList']) ? $data['orderFeeAdjustmentList'] : null;
        $this->container['directPaymentList'] = isset($data['directPaymentList']) ? $data['directPaymentList'] : null;
        $this->container['postedDate'] = isset($data['postedDate']) ? $data['postedDate'] : null;
        $this->container['shipmentItemList'] = isset($data['shipmentItemList']) ? $data['shipmentItemList'] : null;
        $this->container['shipmentItemAdjustmentList'] = isset($data['shipmentItemAdjustmentList']) ? $data['shipmentItemAdjustmentList'] : null;
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
     * Gets sellerOrderId
     *
     * @return string
     */
    public function getSellerOrderId()
    {
        return $this->container['sellerOrderId'];
    }

    /**
     * Sets sellerOrderId
     *
     * @param string $sellerOrderId A seller-defined identifier for an order.
     *
     * @return $this
     */
    public function setSellerOrderId($sellerOrderId)
    {
        $this->container['sellerOrderId'] = $sellerOrderId;

        return $this;
    }

    /**
     * Gets marketplaceName
     *
     * @return string
     */
    public function getMarketplaceName()
    {
        return $this->container['marketplaceName'];
    }

    /**
     * Sets marketplaceName
     *
     * @param string $marketplaceName The name of the marketplace where the event occurred.
     *
     * @return $this
     */
    public function setMarketplaceName($marketplaceName)
    {
        $this->container['marketplaceName'] = $marketplaceName;

        return $this;
    }

    /**
     * Gets orderChargeList
     *
     * @return \B1\AmazonSPAPI\Model\ChargeComponent[]
     */
    public function getOrderChargeList()
    {
        return $this->container['orderChargeList'];
    }

    /**
     * Sets orderChargeList
     *
     * @param \B1\AmazonSPAPI\Model\ChargeComponent[] $orderChargeList A list of order-level charges. These charges are applicable to Multi-Channel Fulfillment COD orders.
     *
     * @return $this
     */
    public function setOrderChargeList($orderChargeList)
    {
        $this->container['orderChargeList'] = $orderChargeList;

        return $this;
    }

    /**
     * Gets orderChargeAdjustmentList
     *
     * @return \B1\AmazonSPAPI\Model\ChargeComponent[]
     */
    public function getOrderChargeAdjustmentList()
    {
        return $this->container['orderChargeAdjustmentList'];
    }

    /**
     * Sets orderChargeAdjustmentList
     *
     * @param \B1\AmazonSPAPI\Model\ChargeComponent[] $orderChargeAdjustmentList A list of order-level charge adjustments. These adjustments are applicable to Multi-Channel Fulfillment COD orders.
     *
     * @return $this
     */
    public function setOrderChargeAdjustmentList($orderChargeAdjustmentList)
    {
        $this->container['orderChargeAdjustmentList'] = $orderChargeAdjustmentList;

        return $this;
    }

    /**
     * Gets shipmentFeeList
     *
     * @return \B1\AmazonSPAPI\Model\FeeComponent[]
     */
    public function getShipmentFeeList()
    {
        return $this->container['shipmentFeeList'];
    }

    /**
     * Sets shipmentFeeList
     *
     * @param \B1\AmazonSPAPI\Model\FeeComponent[] $shipmentFeeList A list of shipment-level fees.
     *
     * @return $this
     */
    public function setShipmentFeeList($shipmentFeeList)
    {
        $this->container['shipmentFeeList'] = $shipmentFeeList;

        return $this;
    }

    /**
     * Gets shipmentFeeAdjustmentList
     *
     * @return \B1\AmazonSPAPI\Model\FeeComponent[]
     */
    public function getShipmentFeeAdjustmentList()
    {
        return $this->container['shipmentFeeAdjustmentList'];
    }

    /**
     * Sets shipmentFeeAdjustmentList
     *
     * @param \B1\AmazonSPAPI\Model\FeeComponent[] $shipmentFeeAdjustmentList A list of shipment-level fee adjustments.
     *
     * @return $this
     */
    public function setShipmentFeeAdjustmentList($shipmentFeeAdjustmentList)
    {
        $this->container['shipmentFeeAdjustmentList'] = $shipmentFeeAdjustmentList;

        return $this;
    }

    /**
     * Gets orderFeeList
     *
     * @return \B1\AmazonSPAPI\Model\FeeComponent[]
     */
    public function getOrderFeeList()
    {
        return $this->container['orderFeeList'];
    }

    /**
     * Sets orderFeeList
     *
     * @param \B1\AmazonSPAPI\Model\FeeComponent[] $orderFeeList A list of order-level fees. These charges are applicable to Multi-Channel Fulfillment orders.
     *
     * @return $this
     */
    public function setOrderFeeList($orderFeeList)
    {
        $this->container['orderFeeList'] = $orderFeeList;

        return $this;
    }

    /**
     * Gets orderFeeAdjustmentList
     *
     * @return \B1\AmazonSPAPI\Model\FeeComponent[]
     */
    public function getOrderFeeAdjustmentList()
    {
        return $this->container['orderFeeAdjustmentList'];
    }

    /**
     * Sets orderFeeAdjustmentList
     *
     * @param \B1\AmazonSPAPI\Model\FeeComponent[] $orderFeeAdjustmentList A list of order-level fee adjustments. These adjustments are applicable to Multi-Channel Fulfillment orders.
     *
     * @return $this
     */
    public function setOrderFeeAdjustmentList($orderFeeAdjustmentList)
    {
        $this->container['orderFeeAdjustmentList'] = $orderFeeAdjustmentList;

        return $this;
    }

    /**
     * Gets directPaymentList
     *
     * @return \B1\AmazonSPAPI\Model\DirectPayment[]
     */
    public function getDirectPaymentList()
    {
        return $this->container['directPaymentList'];
    }

    /**
     * Sets directPaymentList
     *
     * @param \B1\AmazonSPAPI\Model\DirectPayment[] $directPaymentList A list of transactions where buyers pay Amazon through one of the credit cards offered by Amazon or where buyers pay a seller directly through COD.
     *
     * @return $this
     */
    public function setDirectPaymentList($directPaymentList)
    {
        $this->container['directPaymentList'] = $directPaymentList;

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
     * Gets shipmentItemList
     *
     * @return \B1\AmazonSPAPI\Model\ShipmentItem[]
     */
    public function getShipmentItemList()
    {
        return $this->container['shipmentItemList'];
    }

    /**
     * Sets shipmentItemList
     *
     * @param \B1\AmazonSPAPI\Model\ShipmentItem[] $shipmentItemList shipmentItemList
     *
     * @return $this
     */
    public function setShipmentItemList($shipmentItemList)
    {
        $this->container['shipmentItemList'] = $shipmentItemList;

        return $this;
    }

    /**
     * Gets shipmentItemAdjustmentList
     *
     * @return \B1\AmazonSPAPI\Model\ShipmentItem[]
     */
    public function getShipmentItemAdjustmentList()
    {
        return $this->container['shipmentItemAdjustmentList'];
    }

    /**
     * Sets shipmentItemAdjustmentList
     *
     * @param \B1\AmazonSPAPI\Model\ShipmentItem[] $shipmentItemAdjustmentList A list of shipment item adjustments.
     *
     * @return $this
     */
    public function setShipmentItemAdjustmentList($shipmentItemAdjustmentList)
    {
        $this->container['shipmentItemAdjustmentList'] = $shipmentItemAdjustmentList;

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


