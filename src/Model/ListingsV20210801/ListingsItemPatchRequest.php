<?php declare(strict_types=1);
/**
 * ListingsItemPatchRequest
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for Listings Items
 *
 * The Selling Partner API for Listings Items (Listings Items API) provides programmatic access to selling partner listings on Amazon. Use this API in collaboration with the Selling Partner API for Product Type Definitions, which you use to retrieve the information about Amazon product types needed to use the Listings Items API. For more information, see the [Listings Items API Use Case Guide](https://developer-docs.amazon.com/sp-api/docs/listings-items-api-v2021-08-01-use-case-guide).
 *
 * The version of the OpenAPI document: 2021-08-01
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SellingPartnerApi\Model\ListingsV20210801;
use ArrayAccess;
use SellingPartnerApi\Model\BaseModel;
use SellingPartnerApi\Model\ModelInterface;
use SellingPartnerApi\ObjectSerializer;

/**
 * ListingsItemPatchRequest Class Doc Comment
 *
 * @category Class
 * @description The request body schema for the patchListingsItem operation.
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class ListingsItemPatchRequest extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ListingsItemPatchRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'product_type' => 'string',
        'patches' => '\SellingPartnerApi\Model\ListingsV20210801\PatchOperation[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'product_type' => null,
        'patches' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'product_type' => 'productType',
        'patches' => 'patches'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'product_type' => 'setProductType',
        'patches' => 'setPatches'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'product_type' => 'getProductType',
        'patches' => 'getPatches'
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
        $this->container['product_type'] = $data['product_type'] ?? null;
        $this->container['patches'] = $data['patches'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['product_type'] === null) {
            $invalidProperties[] = "'product_type' can't be null";
        }
        if ($this->container['patches'] === null) {
            $invalidProperties[] = "'patches' can't be null";
        }
        if ((count($this->container['patches']) < 1)) {
            $invalidProperties[] = "invalid value for 'patches', number of items must be greater than or equal to 1.";
        }

        return $invalidProperties;
    }


    /**
     * Gets product_type
     *
     * @return string
     */
    public function getProductType()
    {
        return $this->container['product_type'];
    }

    /**
     * Sets product_type
     *
     * @param string $product_type The Amazon product type of the listings item.
     *
     * @return self
     */
    public function setProductType($product_type)
    {
        $this->container['product_type'] = $product_type;

        return $this;
    }
    /**
     * Gets patches
     *
     * @return \SellingPartnerApi\Model\ListingsV20210801\PatchOperation[]
     */
    public function getPatches()
    {
        return $this->container['patches'];
    }

    /**
     * Sets patches
     *
     * @param \SellingPartnerApi\Model\ListingsV20210801\PatchOperation[] $patches One or more JSON Patch operations to perform on the listings item.
     *
     * @return self
     */
    public function setPatches($patches)
    {


        if ((count($patches) < 1)) {
            throw new \InvalidArgumentException('invalid length for $patches when calling ListingsItemPatchRequest., number of items must be greater than or equal to 1.');
        }
        $this->container['patches'] = $patches;

        return $this;
    }
}


