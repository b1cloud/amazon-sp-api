<?php
/**
 * ReportDocument
 *
 * PHP version 5
 *
 * @category Class
 * @package  B1\AmazonSPAPI
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Selling Partner API for Reports
 *
 * The Selling Partner API for Reports lets you retrieve and manage a variety of reports that can help selling partners manage their businesses.
 *
 * OpenAPI spec version: 2021-06-30
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
 * ReportDocument Class Doc Comment
 *
 * @category Class
 * @description Information required for the report document.
 * @package  B1\AmazonSPAPI
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 *
 * @property string $reportDocumentId
 * @property string $url
 * @property ReportDocumentEncryptionDetails $encryptionDetails
 * @property string $compressionAlgorithm
 */
class ReportDocument  extends BaseModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ReportDocument';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'reportDocumentId' => 'string',
        'url' => 'string',
        'encryptionDetails' => '\B1\AmazonSPAPI\Model\ReportDocumentEncryptionDetails',
        'compressionAlgorithm' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'reportDocumentId' => null,
        'url' => null,
        'encryptionDetails' => null,
        'compressionAlgorithm' => null
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
        'reportDocumentId' => 'reportDocumentId',
        'url' => 'url',
        'encryptionDetails' => 'encryptionDetails',
        'compressionAlgorithm' => 'compressionAlgorithm'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'reportDocumentId' => 'setReportDocumentId',
        'url' => 'setUrl',
        'encryptionDetails' => 'setEncryptionDetails',
        'compressionAlgorithm' => 'setCompressionAlgorithm'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'reportDocumentId' => 'getReportDocumentId',
        'url' => 'getUrl',
        'encryptionDetails' => 'getEncryptionDetails',
        'compressionAlgorithm' => 'getCompressionAlgorithm'
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

    const COMPRESSION_ALGORITHM_GZIP = 'GZIP';



    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCompressionAlgorithmAllowableValues()
    {
        return [
            self::COMPRESSION_ALGORITHM_GZIP,
        ];
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
        $this->container['reportDocumentId'] = isset($data['reportDocumentId']) ? $data['reportDocumentId'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['encryptionDetails'] = isset($data['encryptionDetails']) ? $data['encryptionDetails'] : null;
        $this->container['compressionAlgorithm'] = isset($data['compressionAlgorithm']) ? $data['compressionAlgorithm'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['reportDocumentId'] === null) {
            $invalidProperties[] = "'reportDocumentId' can't be null";
        }
        if ($this->container['url'] === null) {
            $invalidProperties[] = "'url' can't be null";
        }
        $allowedValues = $this->getCompressionAlgorithmAllowableValues();
        if (!is_null($this->container['compressionAlgorithm']) && !in_array($this->container['compressionAlgorithm'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'compressionAlgorithm', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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
     * Gets reportDocumentId
     *
     * @return string
     */
    public function getReportDocumentId()
    {
        return $this->container['reportDocumentId'];
    }

    /**
     * Sets reportDocumentId
     *
     * @param string $reportDocumentId The identifier for the report document. This identifier is unique only in combination with a seller ID.
     *
     * @return $this
     */
    public function setReportDocumentId($reportDocumentId)
    {
        $this->container['reportDocumentId'] = $reportDocumentId;

        return $this;
    }

    /**
     * Gets url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string $url A presigned URL for the report document. This URL expires after 5 minutes.
     *
     * @return $this
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets compressionAlgorithm
     *
     * @return string
     */
    public function getCompressionAlgorithm()
    {
        return $this->container['compressionAlgorithm'];
    }

    /**
     * Sets compressionAlgorithm
     *
     * @param string $compressionAlgorithm If present, the report document contents have been compressed with the provided algorithm.
     *
     * @return $this
     */
    public function setCompressionAlgorithm($compressionAlgorithm)
    {
        $allowedValues = $this->getCompressionAlgorithmAllowableValues();
        if (!is_null($compressionAlgorithm) && !in_array($compressionAlgorithm, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'compressionAlgorithm', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['compressionAlgorithm'] = $compressionAlgorithm;

        return $this;
    }
    /**
     * Gets encryption_details.
     */
    public function getEncryptionDetails()
    {
        return $this->container['encryptionDetails'];
    }

    /**
     * Sets encryption_details.
     *
     * @param \B1\AmazonSPAPI\Model\ReportDocumentEncryptionDetails $encryption_details encryption_details
     */
    public function setEncryptionDetails($encryption_details) : self
    {
        $this->container['encryptionDetails'] = $encryption_details;

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


