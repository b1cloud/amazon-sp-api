<?php
/**
 * ShippingService
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
 * ShippingService Class Doc Comment
 *
 * @category Class
 * @description A shipping service offer made by a carrier.
 * @package  B1\AmazonSPAPI
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ShippingService  extends BaseModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ShippingService';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'shippingServiceName' => 'string',
        'carrierName' => 'string',
        'shippingServiceId' => '\B1\AmazonSPAPI\Model\ShippingServiceIdentifier',
        'shippingServiceOfferId' => 'string',
        'shipDate' => '\B1\AmazonSPAPI\Model\Timestamp',
        'earliestEstimatedDeliveryDate' => '\B1\AmazonSPAPI\Model\Timestamp',
        'latestEstimatedDeliveryDate' => '\B1\AmazonSPAPI\Model\Timestamp',
        'rate' => '\B1\AmazonSPAPI\Model\CurrencyAmount',
        'shippingServiceOptions' => '\B1\AmazonSPAPI\Model\ShippingServiceOptions',
        'availableShippingServiceOptions' => '\B1\AmazonSPAPI\Model\AvailableShippingServiceOptions',
        'availableLabelFormats' => '\B1\AmazonSPAPI\Model\LabelFormatList',
        'availableFormatOptionsForLabel' => '\B1\AmazonSPAPI\Model\AvailableFormatOptionsForLabelList',
        'requiresAdditionalSellerInputs' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'shippingServiceName' => null,
        'carrierName' => null,
        'shippingServiceId' => null,
        'shippingServiceOfferId' => null,
        'shipDate' => null,
        'earliestEstimatedDeliveryDate' => null,
        'latestEstimatedDeliveryDate' => null,
        'rate' => null,
        'shippingServiceOptions' => null,
        'availableShippingServiceOptions' => null,
        'availableLabelFormats' => null,
        'availableFormatOptionsForLabel' => null,
        'requiresAdditionalSellerInputs' => null
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
        'shippingServiceName' => 'ShippingServiceName',
        'carrierName' => 'CarrierName',
        'shippingServiceId' => 'ShippingServiceId',
        'shippingServiceOfferId' => 'ShippingServiceOfferId',
        'shipDate' => 'ShipDate',
        'earliestEstimatedDeliveryDate' => 'EarliestEstimatedDeliveryDate',
        'latestEstimatedDeliveryDate' => 'LatestEstimatedDeliveryDate',
        'rate' => 'Rate',
        'shippingServiceOptions' => 'ShippingServiceOptions',
        'availableShippingServiceOptions' => 'AvailableShippingServiceOptions',
        'availableLabelFormats' => 'AvailableLabelFormats',
        'availableFormatOptionsForLabel' => 'AvailableFormatOptionsForLabel',
        'requiresAdditionalSellerInputs' => 'RequiresAdditionalSellerInputs'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'shippingServiceName' => 'setShippingServiceName',
        'carrierName' => 'setCarrierName',
        'shippingServiceId' => 'setShippingServiceId',
        'shippingServiceOfferId' => 'setShippingServiceOfferId',
        'shipDate' => 'setShipDate',
        'earliestEstimatedDeliveryDate' => 'setEarliestEstimatedDeliveryDate',
        'latestEstimatedDeliveryDate' => 'setLatestEstimatedDeliveryDate',
        'rate' => 'setRate',
        'shippingServiceOptions' => 'setShippingServiceOptions',
        'availableShippingServiceOptions' => 'setAvailableShippingServiceOptions',
        'availableLabelFormats' => 'setAvailableLabelFormats',
        'availableFormatOptionsForLabel' => 'setAvailableFormatOptionsForLabel',
        'requiresAdditionalSellerInputs' => 'setRequiresAdditionalSellerInputs'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'shippingServiceName' => 'getShippingServiceName',
        'carrierName' => 'getCarrierName',
        'shippingServiceId' => 'getShippingServiceId',
        'shippingServiceOfferId' => 'getShippingServiceOfferId',
        'shipDate' => 'getShipDate',
        'earliestEstimatedDeliveryDate' => 'getEarliestEstimatedDeliveryDate',
        'latestEstimatedDeliveryDate' => 'getLatestEstimatedDeliveryDate',
        'rate' => 'getRate',
        'shippingServiceOptions' => 'getShippingServiceOptions',
        'availableShippingServiceOptions' => 'getAvailableShippingServiceOptions',
        'availableLabelFormats' => 'getAvailableLabelFormats',
        'availableFormatOptionsForLabel' => 'getAvailableFormatOptionsForLabel',
        'requiresAdditionalSellerInputs' => 'getRequiresAdditionalSellerInputs'
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
        $this->container['shippingServiceName'] = isset($data['shippingServiceName']) ? $data['shippingServiceName'] : null;
        $this->container['carrierName'] = isset($data['carrierName']) ? $data['carrierName'] : null;
        $this->container['shippingServiceId'] = isset($data['shippingServiceId']) ? $data['shippingServiceId'] : null;
        $this->container['shippingServiceOfferId'] = isset($data['shippingServiceOfferId']) ? $data['shippingServiceOfferId'] : null;
        $this->container['shipDate'] = isset($data['shipDate']) ? $data['shipDate'] : null;
        $this->container['earliestEstimatedDeliveryDate'] = isset($data['earliestEstimatedDeliveryDate']) ? $data['earliestEstimatedDeliveryDate'] : null;
        $this->container['latestEstimatedDeliveryDate'] = isset($data['latestEstimatedDeliveryDate']) ? $data['latestEstimatedDeliveryDate'] : null;
        $this->container['rate'] = isset($data['rate']) ? $data['rate'] : null;
        $this->container['shippingServiceOptions'] = isset($data['shippingServiceOptions']) ? $data['shippingServiceOptions'] : null;
        $this->container['availableShippingServiceOptions'] = isset($data['availableShippingServiceOptions']) ? $data['availableShippingServiceOptions'] : null;
        $this->container['availableLabelFormats'] = isset($data['availableLabelFormats']) ? $data['availableLabelFormats'] : null;
        $this->container['availableFormatOptionsForLabel'] = isset($data['availableFormatOptionsForLabel']) ? $data['availableFormatOptionsForLabel'] : null;
        $this->container['requiresAdditionalSellerInputs'] = isset($data['requiresAdditionalSellerInputs']) ? $data['requiresAdditionalSellerInputs'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['shippingServiceName'] === null) {
            $invalidProperties[] = "'shippingServiceName' can't be null";
        }
        if ($this->container['carrierName'] === null) {
            $invalidProperties[] = "'carrierName' can't be null";
        }
        if ($this->container['shippingServiceId'] === null) {
            $invalidProperties[] = "'shippingServiceId' can't be null";
        }
        if ($this->container['shippingServiceOfferId'] === null) {
            $invalidProperties[] = "'shippingServiceOfferId' can't be null";
        }
        if ($this->container['shipDate'] === null) {
            $invalidProperties[] = "'shipDate' can't be null";
        }
        if ($this->container['rate'] === null) {
            $invalidProperties[] = "'rate' can't be null";
        }
        if ($this->container['shippingServiceOptions'] === null) {
            $invalidProperties[] = "'shippingServiceOptions' can't be null";
        }
        if ($this->container['requiresAdditionalSellerInputs'] === null) {
            $invalidProperties[] = "'requiresAdditionalSellerInputs' can't be null";
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
     * Gets shippingServiceName
     *
     * @return string
     */
    public function getShippingServiceName()
    {
        return $this->container['shippingServiceName'];
    }

    /**
     * Sets shippingServiceName
     *
     * @param string $shippingServiceName A plain text representation of a carrier's shipping service. For example, \"UPS Ground\" or \"FedEx Standard Overnight\".
     *
     * @return $this
     */
    public function setShippingServiceName($shippingServiceName)
    {
        $this->container['shippingServiceName'] = $shippingServiceName;

        return $this;
    }

    /**
     * Gets carrierName
     *
     * @return string
     */
    public function getCarrierName()
    {
        return $this->container['carrierName'];
    }

    /**
     * Sets carrierName
     *
     * @param string $carrierName The name of the carrier.
     *
     * @return $this
     */
    public function setCarrierName($carrierName)
    {
        $this->container['carrierName'] = $carrierName;

        return $this;
    }

    /**
     * Gets shippingServiceId
     *
     * @return \B1\AmazonSPAPI\Model\ShippingServiceIdentifier
     */
    public function getShippingServiceId()
    {
        return $this->container['shippingServiceId'];
    }

    /**
     * Sets shippingServiceId
     *
     * @param \B1\AmazonSPAPI\Model\ShippingServiceIdentifier $shippingServiceId shippingServiceId
     *
     * @return $this
     */
    public function setShippingServiceId($shippingServiceId)
    {
        $this->container['shippingServiceId'] = $shippingServiceId;

        return $this;
    }

    /**
     * Gets shippingServiceOfferId
     *
     * @return string
     */
    public function getShippingServiceOfferId()
    {
        return $this->container['shippingServiceOfferId'];
    }

    /**
     * Sets shippingServiceOfferId
     *
     * @param string $shippingServiceOfferId An Amazon-defined shipping service offer identifier.
     *
     * @return $this
     */
    public function setShippingServiceOfferId($shippingServiceOfferId)
    {
        $this->container['shippingServiceOfferId'] = $shippingServiceOfferId;

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
     * @param \B1\AmazonSPAPI\Model\Timestamp $shipDate The date that the carrier will ship the package.
     *
     * @return $this
     */
    public function setShipDate($shipDate)
    {
        $this->container['shipDate'] = $shipDate;

        return $this;
    }

    /**
     * Gets earliestEstimatedDeliveryDate
     *
     * @return \B1\AmazonSPAPI\Model\Timestamp
     */
    public function getEarliestEstimatedDeliveryDate()
    {
        return $this->container['earliestEstimatedDeliveryDate'];
    }

    /**
     * Sets earliestEstimatedDeliveryDate
     *
     * @param \B1\AmazonSPAPI\Model\Timestamp $earliestEstimatedDeliveryDate The earliest date by which the shipment will be delivered.
     *
     * @return $this
     */
    public function setEarliestEstimatedDeliveryDate($earliestEstimatedDeliveryDate)
    {
        $this->container['earliestEstimatedDeliveryDate'] = $earliestEstimatedDeliveryDate;

        return $this;
    }

    /**
     * Gets latestEstimatedDeliveryDate
     *
     * @return \B1\AmazonSPAPI\Model\Timestamp
     */
    public function getLatestEstimatedDeliveryDate()
    {
        return $this->container['latestEstimatedDeliveryDate'];
    }

    /**
     * Sets latestEstimatedDeliveryDate
     *
     * @param \B1\AmazonSPAPI\Model\Timestamp $latestEstimatedDeliveryDate The latest date by which the shipment will be delivered.
     *
     * @return $this
     */
    public function setLatestEstimatedDeliveryDate($latestEstimatedDeliveryDate)
    {
        $this->container['latestEstimatedDeliveryDate'] = $latestEstimatedDeliveryDate;

        return $this;
    }

    /**
     * Gets rate
     *
     * @return \B1\AmazonSPAPI\Model\CurrencyAmount
     */
    public function getRate()
    {
        return $this->container['rate'];
    }

    /**
     * Sets rate
     *
     * @param \B1\AmazonSPAPI\Model\CurrencyAmount $rate The amount that the carrier will charge for the shipment.
     *
     * @return $this
     */
    public function setRate($rate)
    {
        $this->container['rate'] = $rate;

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
     * Gets availableShippingServiceOptions
     *
     * @return \B1\AmazonSPAPI\Model\AvailableShippingServiceOptions
     */
    public function getAvailableShippingServiceOptions()
    {
        return $this->container['availableShippingServiceOptions'];
    }

    /**
     * Sets availableShippingServiceOptions
     *
     * @param \B1\AmazonSPAPI\Model\AvailableShippingServiceOptions $availableShippingServiceOptions availableShippingServiceOptions
     *
     * @return $this
     */
    public function setAvailableShippingServiceOptions($availableShippingServiceOptions)
    {
        $this->container['availableShippingServiceOptions'] = $availableShippingServiceOptions;

        return $this;
    }

    /**
     * Gets availableLabelFormats
     *
     * @return \B1\AmazonSPAPI\Model\LabelFormatList
     */
    public function getAvailableLabelFormats()
    {
        return $this->container['availableLabelFormats'];
    }

    /**
     * Sets availableLabelFormats
     *
     * @param \B1\AmazonSPAPI\Model\LabelFormatList $availableLabelFormats availableLabelFormats
     *
     * @return $this
     */
    public function setAvailableLabelFormats($availableLabelFormats)
    {
        $this->container['availableLabelFormats'] = $availableLabelFormats;

        return $this;
    }

    /**
     * Gets availableFormatOptionsForLabel
     *
     * @return \B1\AmazonSPAPI\Model\AvailableFormatOptionsForLabelList
     */
    public function getAvailableFormatOptionsForLabel()
    {
        return $this->container['availableFormatOptionsForLabel'];
    }

    /**
     * Sets availableFormatOptionsForLabel
     *
     * @param \B1\AmazonSPAPI\Model\AvailableFormatOptionsForLabelList $availableFormatOptionsForLabel availableFormatOptionsForLabel
     *
     * @return $this
     */
    public function setAvailableFormatOptionsForLabel($availableFormatOptionsForLabel)
    {
        $this->container['availableFormatOptionsForLabel'] = $availableFormatOptionsForLabel;

        return $this;
    }

    /**
     * Gets requiresAdditionalSellerInputs
     *
     * @return bool
     */
    public function getRequiresAdditionalSellerInputs()
    {
        return $this->container['requiresAdditionalSellerInputs'];
    }

    /**
     * Sets requiresAdditionalSellerInputs
     *
     * @param bool $requiresAdditionalSellerInputs When true, additional seller inputs are required.
     *
     * @return $this
     */
    public function setRequiresAdditionalSellerInputs($requiresAdditionalSellerInputs)
    {
        $this->container['requiresAdditionalSellerInputs'] = $requiresAdditionalSellerInputs;

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


