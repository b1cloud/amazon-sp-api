<?php
/**
 * ShipmentItem
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
 * ShipmentItem Class Doc Comment
 *
 * @category Class
 * @description An item of a shipment, refund, guarantee claim, or chargeback.
 * @package  B1\AmazonSPAPI
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ShipmentItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ShipmentItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'sellerSKU' => 'string',
        'orderItemId' => 'string',
        'orderAdjustmentItemId' => 'string',
        'quantityShipped' => 'int',
        'itemChargeList' => '\B1\AmazonSPAPI\Model\ChargeComponent[]',
        'itemChargeAdjustmentList' => '\B1\AmazonSPAPI\Model\ChargeComponent[]',
        'itemFeeList' => '\B1\AmazonSPAPI\Model\FeeComponent[]',
        'itemFeeAdjustmentList' => '\B1\AmazonSPAPI\Model\FeeComponent[]',
        'itemTaxWithheldList' => '\B1\AmazonSPAPI\Model\TaxWithheldComponent[]',
        'promotionList' => '\B1\AmazonSPAPI\Model\Promotion[]',
        'promotionAdjustmentList' => '\B1\AmazonSPAPI\Model\Promotion[]',
        'costOfPointsGranted' => '\B1\AmazonSPAPI\Model\Currency',
        'costOfPointsReturned' => '\B1\AmazonSPAPI\Model\Currency'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'sellerSKU' => null,
        'orderItemId' => null,
        'orderAdjustmentItemId' => null,
        'quantityShipped' => 'int32',
        'itemChargeList' => null,
        'itemChargeAdjustmentList' => null,
        'itemFeeList' => null,
        'itemFeeAdjustmentList' => null,
        'itemTaxWithheldList' => null,
        'promotionList' => null,
        'promotionAdjustmentList' => null,
        'costOfPointsGranted' => null,
        'costOfPointsReturned' => null
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
        'sellerSKU' => 'SellerSKU',
        'orderItemId' => 'OrderItemId',
        'orderAdjustmentItemId' => 'OrderAdjustmentItemId',
        'quantityShipped' => 'QuantityShipped',
        'itemChargeList' => 'ItemChargeList',
        'itemChargeAdjustmentList' => 'ItemChargeAdjustmentList',
        'itemFeeList' => 'ItemFeeList',
        'itemFeeAdjustmentList' => 'ItemFeeAdjustmentList',
        'itemTaxWithheldList' => 'ItemTaxWithheldList',
        'promotionList' => 'PromotionList',
        'promotionAdjustmentList' => 'PromotionAdjustmentList',
        'costOfPointsGranted' => 'CostOfPointsGranted',
        'costOfPointsReturned' => 'CostOfPointsReturned'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'sellerSKU' => 'setSellerSKU',
        'orderItemId' => 'setOrderItemId',
        'orderAdjustmentItemId' => 'setOrderAdjustmentItemId',
        'quantityShipped' => 'setQuantityShipped',
        'itemChargeList' => 'setItemChargeList',
        'itemChargeAdjustmentList' => 'setItemChargeAdjustmentList',
        'itemFeeList' => 'setItemFeeList',
        'itemFeeAdjustmentList' => 'setItemFeeAdjustmentList',
        'itemTaxWithheldList' => 'setItemTaxWithheldList',
        'promotionList' => 'setPromotionList',
        'promotionAdjustmentList' => 'setPromotionAdjustmentList',
        'costOfPointsGranted' => 'setCostOfPointsGranted',
        'costOfPointsReturned' => 'setCostOfPointsReturned'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'sellerSKU' => 'getSellerSKU',
        'orderItemId' => 'getOrderItemId',
        'orderAdjustmentItemId' => 'getOrderAdjustmentItemId',
        'quantityShipped' => 'getQuantityShipped',
        'itemChargeList' => 'getItemChargeList',
        'itemChargeAdjustmentList' => 'getItemChargeAdjustmentList',
        'itemFeeList' => 'getItemFeeList',
        'itemFeeAdjustmentList' => 'getItemFeeAdjustmentList',
        'itemTaxWithheldList' => 'getItemTaxWithheldList',
        'promotionList' => 'getPromotionList',
        'promotionAdjustmentList' => 'getPromotionAdjustmentList',
        'costOfPointsGranted' => 'getCostOfPointsGranted',
        'costOfPointsReturned' => 'getCostOfPointsReturned'
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
        $this->container['sellerSKU'] = isset($data['sellerSKU']) ? $data['sellerSKU'] : null;
        $this->container['orderItemId'] = isset($data['orderItemId']) ? $data['orderItemId'] : null;
        $this->container['orderAdjustmentItemId'] = isset($data['orderAdjustmentItemId']) ? $data['orderAdjustmentItemId'] : null;
        $this->container['quantityShipped'] = isset($data['quantityShipped']) ? $data['quantityShipped'] : null;
        $this->container['itemChargeList'] = isset($data['itemChargeList']) ? $data['itemChargeList'] : null;
        $this->container['itemChargeAdjustmentList'] = isset($data['itemChargeAdjustmentList']) ? $data['itemChargeAdjustmentList'] : null;
        $this->container['itemFeeList'] = isset($data['itemFeeList']) ? $data['itemFeeList'] : null;
        $this->container['itemFeeAdjustmentList'] = isset($data['itemFeeAdjustmentList']) ? $data['itemFeeAdjustmentList'] : null;
        $this->container['itemTaxWithheldList'] = isset($data['itemTaxWithheldList']) ? $data['itemTaxWithheldList'] : null;
        $this->container['promotionList'] = isset($data['promotionList']) ? $data['promotionList'] : null;
        $this->container['promotionAdjustmentList'] = isset($data['promotionAdjustmentList']) ? $data['promotionAdjustmentList'] : null;
        $this->container['costOfPointsGranted'] = isset($data['costOfPointsGranted']) ? $data['costOfPointsGranted'] : null;
        $this->container['costOfPointsReturned'] = isset($data['costOfPointsReturned']) ? $data['costOfPointsReturned'] : null;
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
     * Gets sellerSKU
     *
     * @return string
     */
    public function getSellerSKU()
    {
        return $this->container['sellerSKU'];
    }

    /**
     * Sets sellerSKU
     *
     * @param string $sellerSKU The seller SKU of the item. The seller SKU is qualified by the seller's seller ID, which is included with every call to the Selling Partner API.
     *
     * @return $this
     */
    public function setSellerSKU($sellerSKU)
    {
        $this->container['sellerSKU'] = $sellerSKU;

        return $this;
    }

    /**
     * Gets orderItemId
     *
     * @return string
     */
    public function getOrderItemId()
    {
        return $this->container['orderItemId'];
    }

    /**
     * Sets orderItemId
     *
     * @param string $orderItemId An Amazon-defined order item identifier.
     *
     * @return $this
     */
    public function setOrderItemId($orderItemId)
    {
        $this->container['orderItemId'] = $orderItemId;

        return $this;
    }

    /**
     * Gets orderAdjustmentItemId
     *
     * @return string
     */
    public function getOrderAdjustmentItemId()
    {
        return $this->container['orderAdjustmentItemId'];
    }

    /**
     * Sets orderAdjustmentItemId
     *
     * @param string $orderAdjustmentItemId An Amazon-defined order adjustment identifier defined for refunds, guarantee claims, and chargeback events.
     *
     * @return $this
     */
    public function setOrderAdjustmentItemId($orderAdjustmentItemId)
    {
        $this->container['orderAdjustmentItemId'] = $orderAdjustmentItemId;

        return $this;
    }

    /**
     * Gets quantityShipped
     *
     * @return int
     */
    public function getQuantityShipped()
    {
        return $this->container['quantityShipped'];
    }

    /**
     * Sets quantityShipped
     *
     * @param int $quantityShipped The number of items shipped.
     *
     * @return $this
     */
    public function setQuantityShipped($quantityShipped)
    {
        $this->container['quantityShipped'] = $quantityShipped;

        return $this;
    }

    /**
     * Gets itemChargeList
     *
     * @return \B1\AmazonSPAPI\Model\ChargeComponent[]
     */
    public function getItemChargeList()
    {
        return $this->container['itemChargeList'];
    }

    /**
     * Sets itemChargeList
     *
     * @param \B1\AmazonSPAPI\Model\ChargeComponent[] $itemChargeList A list of charges associated with the shipment item.
     *
     * @return $this
     */
    public function setItemChargeList($itemChargeList)
    {
        $this->container['itemChargeList'] = $itemChargeList;

        return $this;
    }

    /**
     * Gets itemChargeAdjustmentList
     *
     * @return \B1\AmazonSPAPI\Model\ChargeComponent[]
     */
    public function getItemChargeAdjustmentList()
    {
        return $this->container['itemChargeAdjustmentList'];
    }

    /**
     * Sets itemChargeAdjustmentList
     *
     * @param \B1\AmazonSPAPI\Model\ChargeComponent[] $itemChargeAdjustmentList A list of charge adjustments associated with the shipment item. This value is only returned for refunds, guarantee claims, and chargeback events.
     *
     * @return $this
     */
    public function setItemChargeAdjustmentList($itemChargeAdjustmentList)
    {
        $this->container['itemChargeAdjustmentList'] = $itemChargeAdjustmentList;

        return $this;
    }

    /**
     * Gets itemFeeList
     *
     * @return \B1\AmazonSPAPI\Model\FeeComponent[]
     */
    public function getItemFeeList()
    {
        return $this->container['itemFeeList'];
    }

    /**
     * Sets itemFeeList
     *
     * @param \B1\AmazonSPAPI\Model\FeeComponent[] $itemFeeList A list of fees associated with the shipment item.
     *
     * @return $this
     */
    public function setItemFeeList($itemFeeList)
    {
        $this->container['itemFeeList'] = $itemFeeList;

        return $this;
    }

    /**
     * Gets itemFeeAdjustmentList
     *
     * @return \B1\AmazonSPAPI\Model\FeeComponent[]
     */
    public function getItemFeeAdjustmentList()
    {
        return $this->container['itemFeeAdjustmentList'];
    }

    /**
     * Sets itemFeeAdjustmentList
     *
     * @param \B1\AmazonSPAPI\Model\FeeComponent[] $itemFeeAdjustmentList A list of fee adjustments associated with the shipment item. This value is only returned for refunds, guarantee claims, and chargeback events.
     *
     * @return $this
     */
    public function setItemFeeAdjustmentList($itemFeeAdjustmentList)
    {
        $this->container['itemFeeAdjustmentList'] = $itemFeeAdjustmentList;

        return $this;
    }

    /**
     * Gets itemTaxWithheldList
     *
     * @return \B1\AmazonSPAPI\Model\TaxWithheldComponent[]
     */
    public function getItemTaxWithheldList()
    {
        return $this->container['itemTaxWithheldList'];
    }

    /**
     * Sets itemTaxWithheldList
     *
     * @param \B1\AmazonSPAPI\Model\TaxWithheldComponent[] $itemTaxWithheldList A list of taxes withheld information for a shipment item.
     *
     * @return $this
     */
    public function setItemTaxWithheldList($itemTaxWithheldList)
    {
        $this->container['itemTaxWithheldList'] = $itemTaxWithheldList;

        return $this;
    }

    /**
     * Gets promotionList
     *
     * @return \B1\AmazonSPAPI\Model\Promotion[]
     */
    public function getPromotionList()
    {
        return $this->container['promotionList'];
    }

    /**
     * Sets promotionList
     *
     * @param \B1\AmazonSPAPI\Model\Promotion[] $promotionList promotionList
     *
     * @return $this
     */
    public function setPromotionList($promotionList)
    {
        $this->container['promotionList'] = $promotionList;

        return $this;
    }

    /**
     * Gets promotionAdjustmentList
     *
     * @return \B1\AmazonSPAPI\Model\Promotion[]
     */
    public function getPromotionAdjustmentList()
    {
        return $this->container['promotionAdjustmentList'];
    }

    /**
     * Sets promotionAdjustmentList
     *
     * @param \B1\AmazonSPAPI\Model\Promotion[] $promotionAdjustmentList A list of promotion adjustments associated with the shipment item. This value is only returned for refunds, guarantee claims, and chargeback events.
     *
     * @return $this
     */
    public function setPromotionAdjustmentList($promotionAdjustmentList)
    {
        $this->container['promotionAdjustmentList'] = $promotionAdjustmentList;

        return $this;
    }

    /**
     * Gets costOfPointsGranted
     *
     * @return \B1\AmazonSPAPI\Model\Currency
     */
    public function getCostOfPointsGranted()
    {
        return $this->container['costOfPointsGranted'];
    }

    /**
     * Sets costOfPointsGranted
     *
     * @param \B1\AmazonSPAPI\Model\Currency $costOfPointsGranted The cost of Amazon Points granted for a shipment item.
     *
     * @return $this
     */
    public function setCostOfPointsGranted($costOfPointsGranted)
    {
        $this->container['costOfPointsGranted'] = $costOfPointsGranted;

        return $this;
    }

    /**
     * Gets costOfPointsReturned
     *
     * @return \B1\AmazonSPAPI\Model\Currency
     */
    public function getCostOfPointsReturned()
    {
        return $this->container['costOfPointsReturned'];
    }

    /**
     * Sets costOfPointsReturned
     *
     * @param \B1\AmazonSPAPI\Model\Currency $costOfPointsReturned The cost of Amazon Points returned for a shipment item. This value is only returned for refunds, guarantee claims, and chargeback events.
     *
     * @return $this
     */
    public function setCostOfPointsReturned($costOfPointsReturned)
    {
        $this->container['costOfPointsReturned'] = $costOfPointsReturned;

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


