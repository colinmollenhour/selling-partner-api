<?php declare(strict_types=1);
/**
 * ServiceDocumentUploadDestination
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for Services
 *
 * With the Services API, you can build applications that help service providers get and modify their service orders and manage their resources.
 *
 * The version of the OpenAPI document: v1
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SellingPartnerApi\Model\ServiceV1;
use ArrayAccess;
use SellingPartnerApi\Model\BaseModel;
use SellingPartnerApi\Model\ModelInterface;
use SellingPartnerApi\ObjectSerializer;

/**
 * ServiceDocumentUploadDestination Class Doc Comment
 *
 * @category Class
 * @description Information about an upload destination.
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class ServiceDocumentUploadDestination extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ServiceDocumentUploadDestination';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'upload_destination_id' => 'string',
        'url' => 'string',
        'encryption_details' => '\SellingPartnerApi\Model\ServiceV1\EncryptionDetails',
        'headers' => 'object'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'upload_destination_id' => null,
        'url' => null,
        'encryption_details' => null,
        'headers' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'upload_destination_id' => 'uploadDestinationId',
        'url' => 'url',
        'encryption_details' => 'encryptionDetails',
        'headers' => 'headers'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'upload_destination_id' => 'setUploadDestinationId',
        'url' => 'setUrl',
        'encryption_details' => 'setEncryptionDetails',
        'headers' => 'setHeaders'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'upload_destination_id' => 'getUploadDestinationId',
        'url' => 'getUrl',
        'encryption_details' => 'getEncryptionDetails',
        'headers' => 'getHeaders'
    ];


    
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
        $this->container['upload_destination_id'] = $data['upload_destination_id'] ?? null;
        $this->container['url'] = $data['url'] ?? null;
        $this->container['encryption_details'] = $data['encryption_details'] ?? null;
        $this->container['headers'] = $data['headers'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['upload_destination_id'] === null) {
            $invalidProperties[] = "'upload_destination_id' can't be null";
        }
        if ($this->container['url'] === null) {
            $invalidProperties[] = "'url' can't be null";
        }
        if ($this->container['encryption_details'] === null) {
            $invalidProperties[] = "'encryption_details' can't be null";
        }
        return $invalidProperties;
    }


    /**
     * Gets upload_destination_id
     *
     * @return string
     */
    public function getUploadDestinationId()
    {
        return $this->container['upload_destination_id'];
    }

    /**
     * Sets upload_destination_id
     *
     * @param string $upload_destination_id The unique identifier to be used by APIs that reference the upload destination.
     *
     * @return self
     */
    public function setUploadDestinationId($upload_destination_id)
    {
        $this->container['upload_destination_id'] = $upload_destination_id;

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
     * @param string $url The URL to which to upload the file.
     *
     * @return self
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

        return $this;
    }
    /**
     * Gets encryption_details
     *
     * @return \SellingPartnerApi\Model\ServiceV1\EncryptionDetails
     */
    public function getEncryptionDetails()
    {
        return $this->container['encryption_details'];
    }

    /**
     * Sets encryption_details
     *
     * @param \SellingPartnerApi\Model\ServiceV1\EncryptionDetails $encryption_details encryption_details
     *
     * @return self
     */
    public function setEncryptionDetails($encryption_details)
    {
        $this->container['encryption_details'] = $encryption_details;

        return $this;
    }
    /**
     * Gets headers
     *
     * @return object|null
     */
    public function getHeaders()
    {
        return $this->container['headers'];
    }

    /**
     * Sets headers
     *
     * @param object|null $headers The headers to include in the upload request.
     *
     * @return self
     */
    public function setHeaders($headers)
    {
        $this->container['headers'] = $headers;

        return $this;
    }
}


