<?php declare(strict_types=1);
/**
 * GetSolicitationActionsForOrderResponse
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for Solicitations
 *
 * With the Solicitations API you can build applications that send non-critical solicitations to buyers. You can get a list of solicitation types that are available for an order that you specify, then call an operation that sends a solicitation to the buyer for that order. Buyers cannot respond to solicitations sent by this API, and these solicitations do not appear in the Messaging section of Seller Central or in the recipient's Message Center. The Solicitations API returns responses that are formed according to the <a href=https://tools.ietf.org/html/draft-kelly-json-hal-08>JSON Hypertext Application Language</a> (HAL) standard.
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

namespace SellingPartnerApi\Model\SolicitationsV1;
use ArrayAccess;
use SellingPartnerApi\Model\BaseModel;
use SellingPartnerApi\Model\ModelInterface;
use SellingPartnerApi\ObjectSerializer;

/**
 * GetSolicitationActionsForOrderResponse Class Doc Comment
 *
 * @category Class
 * @description The response schema for the getSolicitationActionsForOrder operation.
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class GetSolicitationActionsForOrderResponse extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GetSolicitationActionsForOrderResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        '_links' => '\SellingPartnerApi\Model\SolicitationsV1\GetSolicitationActionsForOrderResponseLinks',
        '_embedded' => '\SellingPartnerApi\Model\SolicitationsV1\GetSolicitationActionsForOrderResponseEmbedded',
        'errors' => '\SellingPartnerApi\Model\SolicitationsV1\Error[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        '_links' => null,
        '_embedded' => null,
        'errors' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'headers' => 'headers',
        '_links' => '_links',
        '_embedded' => '_embedded',
        'errors' => 'errors'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'headers' => 'setHeaders',
        '_links' => 'setLinks',
        '_embedded' => 'setEmbedded',
        'errors' => 'setErrors'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'headers' => 'getHeaders',
        '_links' => 'getLinks',
        '_embedded' => 'getEmbedded',
        'errors' => 'getErrors'
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
        $this->container['_links'] = $data['_links'] ?? null;
        $this->container['_embedded'] = $data['_embedded'] ?? null;
        $this->container['errors'] = $data['errors'] ?? null;
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
     * Gets API response headers
     *
     * @return array[string]
     */
    public function getHeaders()
    {
        return $this->container['headers'];
    }

    /**
     * Sets API response headers (only relevant to response models)
     *
     * @param array[string => string] $headers Associative array of response headers.
     *
     * @return self
     */
    public function setHeaders($headers)
    {
        $this->container['headers'] = $headers;
        return $this;
    }

    /**
     * Gets _links
     *
     * @return \SellingPartnerApi\Model\SolicitationsV1\GetSolicitationActionsForOrderResponseLinks|null
     */
    public function getLinks()
    {
        return $this->container['_links'];
    }

    /**
     * Sets _links
     *
     * @param \SellingPartnerApi\Model\SolicitationsV1\GetSolicitationActionsForOrderResponseLinks|null $_links _links
     *
     * @return self
     */
    public function setLinks($_links)
    {
        $this->container['_links'] = $_links;

        return $this;
    }
    /**
     * Gets _embedded
     *
     * @return \SellingPartnerApi\Model\SolicitationsV1\GetSolicitationActionsForOrderResponseEmbedded|null
     */
    public function getEmbedded()
    {
        return $this->container['_embedded'];
    }

    /**
     * Sets _embedded
     *
     * @param \SellingPartnerApi\Model\SolicitationsV1\GetSolicitationActionsForOrderResponseEmbedded|null $_embedded _embedded
     *
     * @return self
     */
    public function setEmbedded($_embedded)
    {
        $this->container['_embedded'] = $_embedded;

        return $this;
    }
    /**
     * Gets errors
     *
     * @return \SellingPartnerApi\Model\SolicitationsV1\Error[]|null
     */
    public function getErrors()
    {
        return $this->container['errors'];
    }

    /**
     * Sets errors
     *
     * @param \SellingPartnerApi\Model\SolicitationsV1\Error[]|null $errors A list of error responses returned when a request is unsuccessful.
     *
     * @return self
     */
    public function setErrors($errors)
    {
        $this->container['errors'] = $errors;

        return $this;
    }
}


