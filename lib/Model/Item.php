<?php
/**
 * Item
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
 * Item Class Doc Comment
 *
 * @category Class
 * @description An Amazon order item identifier and a quantity.
 * @package  B1\AmazonSPAPI
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Item  extends BaseModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Item';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'orderItemId' => '\B1\AmazonSPAPI\Model\OrderItemId',
        'quantity' => '\B1\AmazonSPAPI\Model\ItemQuantity',
        'itemWeight' => '\B1\AmazonSPAPI\Model\Weight',
        'itemDescription' => '\B1\AmazonSPAPI\Model\ItemDescription',
        'transparencyCodeList' => '\B1\AmazonSPAPI\Model\TransparencyCodeList',
        'itemLevelSellerInputsList' => '\B1\AmazonSPAPI\Model\AdditionalSellerInputsList'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'orderItemId' => null,
        'quantity' => null,
        'itemWeight' => null,
        'itemDescription' => null,
        'transparencyCodeList' => null,
        'itemLevelSellerInputsList' => null
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
        'orderItemId' => 'OrderItemId',
        'quantity' => 'Quantity',
        'itemWeight' => 'ItemWeight',
        'itemDescription' => 'ItemDescription',
        'transparencyCodeList' => 'TransparencyCodeList',
        'itemLevelSellerInputsList' => 'ItemLevelSellerInputsList'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'orderItemId' => 'setOrderItemId',
        'quantity' => 'setQuantity',
        'itemWeight' => 'setItemWeight',
        'itemDescription' => 'setItemDescription',
        'transparencyCodeList' => 'setTransparencyCodeList',
        'itemLevelSellerInputsList' => 'setItemLevelSellerInputsList'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'orderItemId' => 'getOrderItemId',
        'quantity' => 'getQuantity',
        'itemWeight' => 'getItemWeight',
        'itemDescription' => 'getItemDescription',
        'transparencyCodeList' => 'getTransparencyCodeList',
        'itemLevelSellerInputsList' => 'getItemLevelSellerInputsList'
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
        $this->container['orderItemId'] = isset($data['orderItemId']) ? $data['orderItemId'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['itemWeight'] = isset($data['itemWeight']) ? $data['itemWeight'] : null;
        $this->container['itemDescription'] = isset($data['itemDescription']) ? $data['itemDescription'] : null;
        $this->container['transparencyCodeList'] = isset($data['transparencyCodeList']) ? $data['transparencyCodeList'] : null;
        $this->container['itemLevelSellerInputsList'] = isset($data['itemLevelSellerInputsList']) ? $data['itemLevelSellerInputsList'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['orderItemId'] === null) {
            $invalidProperties[] = "'orderItemId' can't be null";
        }
        if ($this->container['quantity'] === null) {
            $invalidProperties[] = "'quantity' can't be null";
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
     * Gets orderItemId
     *
     * @return \B1\AmazonSPAPI\Model\OrderItemId
     */
    public function getOrderItemId()
    {
        return $this->container['orderItemId'];
    }

    /**
     * Sets orderItemId
     *
     * @param \B1\AmazonSPAPI\Model\OrderItemId $orderItemId orderItemId
     *
     * @return $this
     */
    public function setOrderItemId($orderItemId)
    {
        $this->container['orderItemId'] = $orderItemId;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return \B1\AmazonSPAPI\Model\ItemQuantity
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param \B1\AmazonSPAPI\Model\ItemQuantity $quantity quantity
     *
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets itemWeight
     *
     * @return \B1\AmazonSPAPI\Model\Weight
     */
    public function getItemWeight()
    {
        return $this->container['itemWeight'];
    }

    /**
     * Sets itemWeight
     *
     * @param \B1\AmazonSPAPI\Model\Weight $itemWeight itemWeight
     *
     * @return $this
     */
    public function setItemWeight($itemWeight)
    {
        $this->container['itemWeight'] = $itemWeight;

        return $this;
    }

    /**
     * Gets itemDescription
     *
     * @return \B1\AmazonSPAPI\Model\ItemDescription
     */
    public function getItemDescription()
    {
        return $this->container['itemDescription'];
    }

    /**
     * Sets itemDescription
     *
     * @param \B1\AmazonSPAPI\Model\ItemDescription $itemDescription itemDescription
     *
     * @return $this
     */
    public function setItemDescription($itemDescription)
    {
        $this->container['itemDescription'] = $itemDescription;

        return $this;
    }

    /**
     * Gets transparencyCodeList
     *
     * @return \B1\AmazonSPAPI\Model\TransparencyCodeList
     */
    public function getTransparencyCodeList()
    {
        return $this->container['transparencyCodeList'];
    }

    /**
     * Sets transparencyCodeList
     *
     * @param \B1\AmazonSPAPI\Model\TransparencyCodeList $transparencyCodeList transparencyCodeList
     *
     * @return $this
     */
    public function setTransparencyCodeList($transparencyCodeList)
    {
        $this->container['transparencyCodeList'] = $transparencyCodeList;

        return $this;
    }

    /**
     * Gets itemLevelSellerInputsList
     *
     * @return \B1\AmazonSPAPI\Model\AdditionalSellerInputsList
     */
    public function getItemLevelSellerInputsList()
    {
        return $this->container['itemLevelSellerInputsList'];
    }

    /**
     * Sets itemLevelSellerInputsList
     *
     * @param \B1\AmazonSPAPI\Model\AdditionalSellerInputsList $itemLevelSellerInputsList A list of additional seller inputs required to ship this item using the chosen shipping service.
     *
     * @return $this
     */
    public function setItemLevelSellerInputsList($itemLevelSellerInputsList)
    {
        $this->container['itemLevelSellerInputsList'] = $itemLevelSellerInputsList;

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


