<?php declare(strict_types=1);
/**
 * AplusPaginatedResponse
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for A+ Content Management
 *
 * With the A+ Content API, you can build applications that help selling partners add rich marketing content to their Amazon product detail pages. A+ content helps selling partners share their brand and product story, which helps buyers make informed purchasing decisions. Selling partners assemble content by choosing from content modules and adding images and text.
 *
 * The version of the OpenAPI document: 2020-11-01
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SellingPartnerApi\Model\AplusContentV20201101;
use ArrayAccess;
use SellingPartnerApi\Model\BaseModel;
use SellingPartnerApi\Model\ModelInterface;
use SellingPartnerApi\ObjectSerializer;

/**
 * AplusPaginatedResponse Class Doc Comment
 *
 * @category Class
 * @description The base response data for paginated A+ Content operations. Individual operations may extend this with additional data. If nextPageToken is not returned, there are no more pages to return.
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class AplusPaginatedResponse extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AplusPaginatedResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'warnings' => '\SellingPartnerApi\Model\AplusContentV20201101\Error[]',
        'next_page_token' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'warnings' => null,
        'next_page_token' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'warnings' => 'warnings',
        'next_page_token' => 'nextPageToken'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'warnings' => 'setWarnings',
        'next_page_token' => 'setNextPageToken'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'warnings' => 'getWarnings',
        'next_page_token' => 'getNextPageToken'
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
        $this->container['warnings'] = $data['warnings'] ?? null;
        $this->container['next_page_token'] = $data['next_page_token'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if (!is_null($this->container['next_page_token']) && (mb_strlen($this->container['next_page_token']) < 1)) {
            $invalidProperties[] = "invalid value for 'next_page_token', the character length must be bigger than or equal to 1.";
        }

        return $invalidProperties;
    }


    /**
     * Gets warnings
     *
     * @return \SellingPartnerApi\Model\AplusContentV20201101\Error[]|null
     */
    public function getWarnings()
    {
        return $this->container['warnings'];
    }

    /**
     * Sets warnings
     *
     * @param \SellingPartnerApi\Model\AplusContentV20201101\Error[]|null $warnings A set of messages to the user, such as warnings or comments.
     *
     * @return self
     */
    public function setWarnings($warnings)
    {


        $this->container['warnings'] = $warnings;

        return $this;
    }
    /**
     * Gets next_page_token
     *
     * @return string|null
     */
    public function getNextPageToken()
    {
        return $this->container['next_page_token'];
    }

    /**
     * Sets next_page_token
     *
     * @param string|null $next_page_token A page token that is returned when the results of the call exceed the page size. To get another page of results, call the operation again, passing in this value with the pageToken parameter.
     *
     * @return self
     */
    public function setNextPageToken($next_page_token)
    {

        if (!is_null($next_page_token) && (mb_strlen($next_page_token) < 1)) {
            throw new \InvalidArgumentException('invalid length for $next_page_token when calling AplusPaginatedResponse., must be bigger than or equal to 1.');
        }

        $this->container['next_page_token'] = $next_page_token;

        return $this;
    }
}


