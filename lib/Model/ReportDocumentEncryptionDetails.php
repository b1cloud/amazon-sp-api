<?php

namespace B1\AmazonSPAPI\Model;

use B1\AmazonSPAPI\ObjectSerializer;

/**
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ReportDocumentEncryptionDetails implements \ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    public const STANDARD_AES = 'AES';

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'ReportDocumentEncryptionDetails';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'standard' => 'string',
        'initialization_vector' => 'string',
        'key' => 'string',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $swaggerFormats = [
        'standard' => null,
        'initialization_vector' => null,
        'key' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'standard' => 'standard',
        'initialization_vector' => 'initializationVector',
        'key' => 'key',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'standard' => 'setStandard',
        'initialization_vector' => 'setInitializationVector',
        'key' => 'setKey',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'standard' => 'getStandard',
        'initialization_vector' => 'getInitializationVector',
        'key' => 'getKey',
    ];

    /**
     * Associative array for storing property values.
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor.
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['standard'] = $data['standard'] ?? null;
        $this->container['initialization_vector'] = $data['initialization_vector'] ?? null;
        $this->container['key'] = $data['key'] ?? null;
    }

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @return string[]
     */
    public static function swaggerTypes() : array
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @return null[]|string[]
     */
    public static function swaggerFormats() : array
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @return string[]
     */
    public static function attributeMap() : array
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @return string[]
     */
    public static function setters() : array
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @return string[]
     */
    public static function getters() : array
    {
        return self::$getters;
    }

    /**
     * Gets the string presentation of the object.
     */
    public function __toString() : string
    {
        return \json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * The original name of the model.
     */
    public function getModelName() : string
    {
        return self::$swaggerModelName;
    }

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public function getStandardAllowableValues() : array
    {
        return [
            self::STANDARD_AES,
        ];
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties() : array
    {
        $invalidProperties = [];

        if ($this->container['standard'] === null) {
            $invalidProperties[] = "'standard' can't be null";
        }
        $allowedValues = $this->getStandardAllowableValues();

        if (null !== $this->container['standard'] && !\in_array($this->container['standard'], $allowedValues, true)) {
            $invalidProperties[] = \sprintf(
                "invalid value '%s' for 'standard', must be one of '%s'",
                $this->container['standard'],
                \implode("', '", $allowedValues)
            );
        }

        if ($this->container['initialization_vector'] === null) {
            $invalidProperties[] = "'initialization_vector' can't be null";
        }

        if ($this->container['key'] === null) {
            $invalidProperties[] = "'key' can't be null";
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed.
     *
     * @return bool True if all properties are valid
     */
    public function valid() : bool
    {
        return \count($this->listInvalidProperties()) === 0;
    }

    /**
     * Gets standard.
     */
    public function getStandard() : string
    {
        return $this->container['standard'];
    }

    /**
     * Sets standard.
     *
     * @param string $standard the encryption standard required to decrypt the document contents
     */
    public function setStandard(string $standard) : self
    {
        $allowedValues = $this->getStandardAllowableValues();

        if (!\in_array($standard, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                \sprintf(
                    "Invalid value '%s' for 'standard', must be one of '%s'",
                    $standard,
                    \implode("', '", $allowedValues)
                )
            );
        }
        $this->container['standard'] = $standard;

        return $this;
    }

    /**
     * Gets initialization_vector.
     */
    public function getInitializationVector() : string
    {
        return $this->container['initialization_vector'];
    }

    /**
     * Sets initialization_vector.
     *
     * @param string $initialization_vector the vector to decrypt the document contents using Cipher Block Chaining (CBC)
     */
    public function setInitializationVector(string $initialization_vector) : self
    {
        $this->container['initialization_vector'] = $initialization_vector;

        return $this;
    }

    /**
     * Gets key.
     */
    public function getKey() : string
    {
        return $this->container['key'];
    }

    /**
     * Sets key.
     *
     * @param string $key the encryption key used to decrypt the document contents
     */
    public function setKey(string $key) : self
    {
        $this->container['key'] = $key;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param int $offset Offset
     */
    #[\ReturnTypeWillChange]
    public function offsetExists($offset) : bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param int $offset Offset
     *
     * @return null|mixed
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param null|int $offset Offset
     * @param mixed $value Value to be set
     */
    #[\ReturnTypeWillChange]
    public function offsetSet($offset, $value) : void
    {
        if (null === $offset) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param int $offset Offset
     */
    #[\ReturnTypeWillChange]
    public function offsetUnset($offset) : void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     *
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed returns data which can be serialized by json_encode(), which is a value
     *               of any type other than a resource
     */
    public function jsonSerialize() : string
    {
        return \json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }

    /**
     * Gets a header-safe presentation of the object.
     */
    public function toHeaderValue() : string
    {
        return \json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
