<?php
/**
 * CreateRestrictedDataTokenRequest
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for Tokens
 *
 * The Selling Partner API for Tokens provides a secure way to access a customer's PII (Personally Identifiable Information). You can call the Tokens API to get a Restricted Data Token (RDT) for one or more restricted resources that you specify. The RDT authorizes subsequent calls to restricted operations that correspond to the restricted resources that you specified. For more information, see the [Tokens API Use Case Guide](https://developer-docs.amazon.com/sp-api/docs/tokens-api-use-case-guide).
 *
 * The version of the OpenAPI document: 2021-03-01
 *
 */


namespace B1\AmazonSPAPI\Model\Tokens;

use \ArrayAccess;
use B1\AmazonSPAPI\Model\BaseModel;
use \B1\AmazonSPAPI\ObjectSerializer;
use \B1\AmazonSPAPI\Model\ModelInterface;

/**
 * CreateRestrictedDataTokenRequest Class Doc Comment
 *
 * @category Class
 * @description The request schema for the createRestrictedDataToken operation.
 * @package  SellingPartnerApi
 * @group
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class CreateRestrictedDataTokenRequest extends BaseModel implements ModelInterface, ArrayAccess
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CreateRestrictedDataTokenRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'targetApplication' => 'string',
        'restrictedResources' => '\B1\AmazonSPAPI\Model\Tokens\RestrictedResource[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $swaggerFormats = [
        'targetApplication' => null,
        'restrictedResources' => null
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
        'targetApplication' => 'targetApplication',
        'restrictedResources' => 'restrictedResources'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'targetApplication' => 'setTargetApplication',
        'restrictedResources' => 'setRestrictedResources'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'targetApplication' => 'getTargetApplication',
        'restrictedResources' => 'getRestrictedResources'
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
        $this->container['targetApplication'] = $data['targetApplication'] ?? null;
        $this->container['restrictedResources'] = $data['restrictedResources'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['restrictedResources'] === null) {
            $invalidProperties[] = "'restrictedResources' can't be null";
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
     * Gets target_application
     *
     * @return string|null
     */
    public function getTargetApplication()
    {
        return $this->container['targetApplication'];
    }

    /**
     * Sets target_application
     *
     * @param string|null $target_application The application ID for the target application to which access is being delegated.
     *
     * @return self
     */
    public function setTargetApplication($target_application)
    {
        $this->container['targetApplication'] = $target_application;

        return $this;
    }
    /**
     * Gets restricted_resources
     *
     * @return \B1\AmazonSPAPI\Model\Tokens\RestrictedResource[]
     */
    public function getRestrictedResources()
    {
        return $this->container['restrictedResources'];
    }

    /**
     * Sets restricted_resources
     *
     * @param \B1\AmazonSPAPI\Model\Tokens\RestrictedResource[] $restricted_resources A list of restricted resources. Maximum: 50
     *
     * @return self
     */
    public function setRestrictedResources($restricted_resources)
    {
        $this->container['restrictedResources'] = $restricted_resources;

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
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
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
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

}


