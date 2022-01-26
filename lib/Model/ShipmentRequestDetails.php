<?php
/**
 * ShipmentRequestDetails
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
 * ShipmentRequestDetails Class Doc Comment
 *
 * @category Class
 * @description Shipment information required for requesting shipping service offers or for creating a shipment.
 * @package  B1\AmazonSPAPI
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ShipmentRequestDetails implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ShipmentRequestDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'amazonOrderId' => '\B1\AmazonSPAPI\Model\AmazonOrderId',
        'sellerOrderId' => '\B1\AmazonSPAPI\Model\SellerOrderId',
        'itemList' => '\B1\AmazonSPAPI\Model\ItemList',
        'shipFromAddress' => '\B1\AmazonSPAPI\Model\Address',
        'packageDimensions' => '\B1\AmazonSPAPI\Model\PackageDimensions',
        'weight' => '\B1\AmazonSPAPI\Model\Weight',
        'mustArriveByDate' => '\B1\AmazonSPAPI\Model\Timestamp',
        'shipDate' => '\B1\AmazonSPAPI\Model\Timestamp',
        'shippingServiceOptions' => '\B1\AmazonSPAPI\Model\ShippingServiceOptions',
        'labelCustomization' => '\B1\AmazonSPAPI\Model\LabelCustomization'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'amazonOrderId' => null,
        'sellerOrderId' => null,
        'itemList' => null,
        'shipFromAddress' => null,
        'packageDimensions' => null,
        'weight' => null,
        'mustArriveByDate' => null,
        'shipDate' => null,
        'shippingServiceOptions' => null,
        'labelCustomization' => null
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
        'itemList' => 'ItemList',
        'shipFromAddress' => 'ShipFromAddress',
        'packageDimensions' => 'PackageDimensions',
        'weight' => 'Weight',
        'mustArriveByDate' => 'MustArriveByDate',
        'shipDate' => 'ShipDate',
        'shippingServiceOptions' => 'ShippingServiceOptions',
        'labelCustomization' => 'LabelCustomization'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'amazonOrderId' => 'setAmazonOrderId',
        'sellerOrderId' => 'setSellerOrderId',
        'itemList' => 'setItemList',
        'shipFromAddress' => 'setShipFromAddress',
        'packageDimensions' => 'setPackageDimensions',
        'weight' => 'setWeight',
        'mustArriveByDate' => 'setMustArriveByDate',
        'shipDate' => 'setShipDate',
        'shippingServiceOptions' => 'setShippingServiceOptions',
        'labelCustomization' => 'setLabelCustomization'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'amazonOrderId' => 'getAmazonOrderId',
        'sellerOrderId' => 'getSellerOrderId',
        'itemList' => 'getItemList',
        'shipFromAddress' => 'getShipFromAddress',
        'packageDimensions' => 'getPackageDimensions',
        'weight' => 'getWeight',
        'mustArriveByDate' => 'getMustArriveByDate',
        'shipDate' => 'getShipDate',
        'shippingServiceOptions' => 'getShippingServiceOptions',
        'labelCustomization' => 'getLabelCustomization'
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
        $this->container['itemList'] = isset($data['itemList']) ? $data['itemList'] : null;
        $this->container['shipFromAddress'] = isset($data['shipFromAddress']) ? $data['shipFromAddress'] : null;
        $this->container['packageDimensions'] = isset($data['packageDimensions']) ? $data['packageDimensions'] : null;
        $this->container['weight'] = isset($data['weight']) ? $data['weight'] : null;
        $this->container['mustArriveByDate'] = isset($data['mustArriveByDate']) ? $data['mustArriveByDate'] : null;
        $this->container['shipDate'] = isset($data['shipDate']) ? $data['shipDate'] : null;
        $this->container['shippingServiceOptions'] = isset($data['shippingServiceOptions']) ? $data['shippingServiceOptions'] : null;
        $this->container['labelCustomization'] = isset($data['labelCustomization']) ? $data['labelCustomization'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['amazonOrderId'] === null) {
            $invalidProperties[] = "'amazonOrderId' can't be null";
        }
        if ($this->container['itemList'] === null) {
            $invalidProperties[] = "'itemList' can't be null";
        }
        if ($this->container['shipFromAddress'] === null) {
            $invalidProperties[] = "'shipFromAddress' can't be null";
        }
        if ($this->container['packageDimensions'] === null) {
            $invalidProperties[] = "'packageDimensions' can't be null";
        }
        if ($this->container['weight'] === null) {
            $invalidProperties[] = "'weight' can't be null";
        }
        if ($this->container['shippingServiceOptions'] === null) {
            $invalidProperties[] = "'shippingServiceOptions' can't be null";
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
     * @return \B1\AmazonSPAPI\Model\AmazonOrderId
     */
    public function getAmazonOrderId()
    {
        return $this->container['amazonOrderId'];
    }

    /**
     * Sets amazonOrderId
     *
     * @param \B1\AmazonSPAPI\Model\AmazonOrderId $amazonOrderId An Amazon-defined order identifier in 3-7-7 format.
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
     * @return \B1\AmazonSPAPI\Model\SellerOrderId
     */
    public function getSellerOrderId()
    {
        return $this->container['sellerOrderId'];
    }

    /**
     * Sets sellerOrderId
     *
     * @param \B1\AmazonSPAPI\Model\SellerOrderId $sellerOrderId A seller-defined order identifier.
     *
     * @return $this
     */
    public function setSellerOrderId($sellerOrderId)
    {
        $this->container['sellerOrderId'] = $sellerOrderId;

        return $this;
    }

    /**
     * Gets itemList
     *
     * @return \B1\AmazonSPAPI\Model\ItemList
     */
    public function getItemList()
    {
        return $this->container['itemList'];
    }

    /**
     * Sets itemList
     *
     * @param \B1\AmazonSPAPI\Model\ItemList $itemList itemList
     *
     * @return $this
     */
    public function setItemList($itemList)
    {
        $this->container['itemList'] = $itemList;

        return $this;
    }

    /**
     * Gets shipFromAddress
     *
     * @return \B1\AmazonSPAPI\Model\Address
     */
    public function getShipFromAddress()
    {
        return $this->container['shipFromAddress'];
    }

    /**
     * Sets shipFromAddress
     *
     * @param \B1\AmazonSPAPI\Model\Address $shipFromAddress The address of the sender.
     *
     * @return $this
     */
    public function setShipFromAddress($shipFromAddress)
    {
        $this->container['shipFromAddress'] = $shipFromAddress;

        return $this;
    }

    /**
     * Gets packageDimensions
     *
     * @return \B1\AmazonSPAPI\Model\PackageDimensions
     */
    public function getPackageDimensions()
    {
        return $this->container['packageDimensions'];
    }

    /**
     * Sets packageDimensions
     *
     * @param \B1\AmazonSPAPI\Model\PackageDimensions $packageDimensions The package dimensions.
     *
     * @return $this
     */
    public function setPackageDimensions($packageDimensions)
    {
        $this->container['packageDimensions'] = $packageDimensions;

        return $this;
    }

    /**
     * Gets weight
     *
     * @return \B1\AmazonSPAPI\Model\Weight
     */
    public function getWeight()
    {
        return $this->container['weight'];
    }

    /**
     * Sets weight
     *
     * @param \B1\AmazonSPAPI\Model\Weight $weight The package weight.
     *
     * @return $this
     */
    public function setWeight($weight)
    {
        $this->container['weight'] = $weight;

        return $this;
    }

    /**
     * Gets mustArriveByDate
     *
     * @return \B1\AmazonSPAPI\Model\Timestamp
     */
    public function getMustArriveByDate()
    {
        return $this->container['mustArriveByDate'];
    }

    /**
     * Sets mustArriveByDate
     *
     * @param \B1\AmazonSPAPI\Model\Timestamp $mustArriveByDate The date by which the package must arrive to keep the promise to the customer, in ISO 8601 datetime format. If MustArriveByDate is specified, only shipping service offers that can be delivered by that date are returned.
     *
     * @return $this
     */
    public function setMustArriveByDate($mustArriveByDate)
    {
        $this->container['mustArriveByDate'] = $mustArriveByDate;

        return $this;
    }

    /**
     * Gets shipDate
     *
     * @return \B1\AmazonSPAPI\Model\Timestamp
     */
    public function getShipDate()
    {
        return $this->container['shipDate'];
    }

    /**
     * Sets shipDate
     *
     * @param \B1\AmazonSPAPI\Model\Timestamp $shipDate When used in a request, this is the date and time that the seller wants to ship the package. When used in a response, this is the date and time that the package can be shipped by the indicated method.
     *
     * @return $this
     */
    public function setShipDate($shipDate)
    {
        $this->container['shipDate'] = $shipDate;

        return $this;
    }

    /**
     * Gets shippingServiceOptions
     *
     * @return \B1\AmazonSPAPI\Model\ShippingServiceOptions
     */
    public function getShippingServiceOptions()
    {
        return $this->container['shippingServiceOptions'];
    }

    /**
     * Sets shippingServiceOptions
     *
     * @param \B1\AmazonSPAPI\Model\ShippingServiceOptions $shippingServiceOptions Extra services offered by the carrier.
     *
     * @return $this
     */
    public function setShippingServiceOptions($shippingServiceOptions)
    {
        $this->container['shippingServiceOptions'] = $shippingServiceOptions;

        return $this;
    }

    /**
     * Gets labelCustomization
     *
     * @return \B1\AmazonSPAPI\Model\LabelCustomization
     */
    public function getLabelCustomization()
    {
        return $this->container['labelCustomization'];
    }

    /**
     * Sets labelCustomization
     *
     * @param \B1\AmazonSPAPI\Model\LabelCustomization $labelCustomization Label customization options.
     *
     * @return $this
     */
    public function setLabelCustomization($labelCustomization)
    {
        $this->container['labelCustomization'] = $labelCustomization;

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


