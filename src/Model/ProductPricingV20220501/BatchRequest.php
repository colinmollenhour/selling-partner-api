<?php declare(strict_types=1);
/**
 * BatchRequest
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for Pricing
 *
 * The Selling Partner API for Pricing helps you programmatically retrieve product pricing and offer pricing information for Amazon Marketplace products. For more information, see the [Product Pricing v2022-05-01 Use Case Guide](https://developer-docs.amazon.com/sp-api/docs/product-pricing-api-v2022-05-01-use-case-guide).
 *
 * The version of the OpenAPI document: 2022-05-01
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SellingPartnerApi\Model\ProductPricingV20220501;
use ArrayAccess;
use SellingPartnerApi\Model\BaseModel;
use SellingPartnerApi\Model\ModelInterface;
use SellingPartnerApi\ObjectSerializer;

/**
 * BatchRequest Class Doc Comment
 *
 * @category Class
 * @description The common properties for individual requests within a batch.
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class BatchRequest extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'BatchRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'uri' => 'string',
        'method' => '\SellingPartnerApi\Model\ProductPricingV20220501\HttpMethod',
        'body' => 'map[string,object]',
        'headers' => 'map[string,string]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'uri' => null,
        'method' => null,
        'body' => null,
        'headers' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'uri' => 'uri',
        'method' => 'method',
        'body' => 'body',
        'headers' => 'headers'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'uri' => 'setUri',
        'method' => 'setMethod',
        'body' => 'setBody',
        'headers' => 'setHeaders'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'uri' => 'getUri',
        'method' => 'getMethod',
        'body' => 'getBody',
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
        $this->container['uri'] = $data['uri'] ?? null;
        $this->container['method'] = $data['method'] ?? null;
        $this->container['body'] = $data['body'] ?? null;
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
        if ($this->container['uri'] === null) {
            $invalidProperties[] = "'uri' can't be null";
        }
        if ($this->container['method'] === null) {
            $invalidProperties[] = "'method' can't be null";
        }
        return $invalidProperties;
    }


    /**
     * Gets uri
     *
     * @return string
     */
    public function getUri()
    {
        return $this->container['uri'];
    }

    /**
     * Sets uri
     *
     * @param string $uri The URI associated with an individual request within a batch. For FeaturedOfferExpectedPrice, this should be '/products/pricing/2022-05-01/offer/featuredOfferExpectedPrice'.
     *
     * @return self
     */
    public function setUri($uri)
    {
        $this->container['uri'] = $uri;

        return $this;
    }
    /**
     * Gets method
     *
     * @return \SellingPartnerApi\Model\ProductPricingV20220501\HttpMethod
     */
    public function getMethod()
    {
        return $this->container['method'];
    }

    /**
     * Sets method
     *
     * @param \SellingPartnerApi\Model\ProductPricingV20220501\HttpMethod $method method
     *
     * @return self
     */
    public function setMethod($method)
    {
        $this->container['method'] = $method;

        return $this;
    }
    /**
     * Gets body
     *
     * @return map[string,object]|null
     */
    public function getBody()
    {
        return $this->container['body'];
    }

    /**
     * Sets body
     *
     * @param map[string,object]|null $body Additional HTTP body information associated with an individual request within a batch.
     *
     * @return self
     */
    public function setBody($body)
    {
        $this->container['body'] = $body;

        return $this;
    }
    /**
     * Gets headers
     *
     * @return map[string,string]|null
     */
    public function getHeaders()
    {
        return $this->container['headers'];
    }

    /**
     * Sets headers
     *
     * @param map[string,string]|null $headers A mapping of additional HTTP headers to send/receive for an individual request within a batch.
     *
     * @return self
     */
    public function setHeaders($headers)
    {
        $this->container['headers'] = $headers;

        return $this;
    }
}


