<?php declare(strict_types=1);
/**
 * ListingsItemPutRequest
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for Listings Items
 *
 * The Selling Partner API for Listings Items (Listings Items API) provides programmatic access to selling partner listings on Amazon. Use this API in collaboration with the Selling Partner API for Product Type Definitions, which you use to retrieve the information about Amazon product types needed to use the Listings Items API. For more information, see the [Listing Items API Use Case Guide](https://developer-docs.amazon.com/sp-api/docs/listings-items-api-v2020-09-01-use-case-guide).
 *
 * The version of the OpenAPI document: 2020-09-01
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SellingPartnerApi\Model\ListingsV20200901;
use ArrayAccess;
use SellingPartnerApi\Model\BaseModel;
use SellingPartnerApi\Model\ModelInterface;
use SellingPartnerApi\ObjectSerializer;

/**
 * ListingsItemPutRequest Class Doc Comment
 *
 * @category Class
 * @description The request body schema for the putListingsItem operation.
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class ListingsItemPutRequest extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ListingsItemPutRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'product_type' => 'string',
        'requirements' => 'string',
        'attributes' => 'object'
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
        'requirements' => null,
        'attributes' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'product_type' => 'productType',
        'requirements' => 'requirements',
        'attributes' => 'attributes'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'product_type' => 'setProductType',
        'requirements' => 'setRequirements',
        'attributes' => 'setAttributes'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'product_type' => 'getProductType',
        'requirements' => 'getRequirements',
        'attributes' => 'getAttributes'
    ];



    const REQUIREMENTS_LISTING = 'LISTING';
    const REQUIREMENTS_LISTING_PRODUCT_ONLY = 'LISTING_PRODUCT_ONLY';
    const REQUIREMENTS_LISTING_OFFER_ONLY = 'LISTING_OFFER_ONLY';
    
    

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRequirementsAllowableValues()
    {
        $baseVals = [
            self::REQUIREMENTS_LISTING,
            self::REQUIREMENTS_LISTING_PRODUCT_ONLY,
            self::REQUIREMENTS_LISTING_OFFER_ONLY,
        ];

        // This is necessary because Amazon does not consistently capitalize their
        // enum values, so we do case-insensitive enum value validation in ObjectSerializer
        return array_map(function ($val) { return strtoupper($val); }, $baseVals);
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
        $this->container['product_type'] = $data['product_type'] ?? null;
        $this->container['requirements'] = $data['requirements'] ?? null;
        $this->container['attributes'] = $data['attributes'] ?? null;
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
        $allowedValues = $this->getRequirementsAllowableValues();
        if (
            !is_null($this->container['requirements']) &&
            !in_array(strtoupper($this->container['requirements']), $allowedValues, true)
        ) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'requirements', must be one of '%s'",
                $this->container['requirements'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['attributes'] === null) {
            $invalidProperties[] = "'attributes' can't be null";
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
     * Gets requirements
     *
     * @return string|null
     */
    public function getRequirements()
    {
        return $this->container['requirements'];
    }

    /**
     * Sets requirements
     *
     * @param string|null $requirements The name of the requirements set for the provided data.
     *
     * @return self
     */
    public function setRequirements($requirements)
    {
        $allowedValues = $this->getRequirementsAllowableValues();
        if (!is_null($requirements) &&!in_array(strtoupper($requirements), $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'requirements', must be one of '%s'",
                    $requirements,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['requirements'] = $requirements;

        return $this;
    }
    /**
     * Gets attributes
     *
     * @return object
     */
    public function getAttributes()
    {
        return $this->container['attributes'];
    }

    /**
     * Sets attributes
     *
     * @param object $attributes JSON object containing structured listings item attribute data keyed by attribute name.
     *
     * @return self
     */
    public function setAttributes($attributes)
    {
        $this->container['attributes'] = $attributes;

        return $this;
    }
}


