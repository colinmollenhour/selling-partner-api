<?php declare(strict_types=1);
/**
 * Price
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
 * Price Class Doc Comment
 *
 * @category Class
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class Price extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Price';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'listing_price' => '\SellingPartnerApi\Model\ProductPricingV20220501\MoneyType',
        'shipping_price' => '\SellingPartnerApi\Model\ProductPricingV20220501\MoneyType',
        'points' => '\SellingPartnerApi\Model\ProductPricingV20220501\Points'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'listing_price' => null,
        'shipping_price' => null,
        'points' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'listing_price' => 'listingPrice',
        'shipping_price' => 'shippingPrice',
        'points' => 'points'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'listing_price' => 'setListingPrice',
        'shipping_price' => 'setShippingPrice',
        'points' => 'setPoints'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'listing_price' => 'getListingPrice',
        'shipping_price' => 'getShippingPrice',
        'points' => 'getPoints'
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
        $this->container['listing_price'] = $data['listing_price'] ?? null;
        $this->container['shipping_price'] = $data['shipping_price'] ?? null;
        $this->container['points'] = $data['points'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['listing_price'] === null) {
            $invalidProperties[] = "'listing_price' can't be null";
        }
        return $invalidProperties;
    }


    /**
     * Gets listing_price
     *
     * @return \SellingPartnerApi\Model\ProductPricingV20220501\MoneyType
     */
    public function getListingPrice()
    {
        return $this->container['listing_price'];
    }

    /**
     * Sets listing_price
     *
     * @param \SellingPartnerApi\Model\ProductPricingV20220501\MoneyType $listing_price listing_price
     *
     * @return self
     */
    public function setListingPrice($listing_price)
    {
        $this->container['listing_price'] = $listing_price;

        return $this;
    }
    /**
     * Gets shipping_price
     *
     * @return \SellingPartnerApi\Model\ProductPricingV20220501\MoneyType|null
     */
    public function getShippingPrice()
    {
        return $this->container['shipping_price'];
    }

    /**
     * Sets shipping_price
     *
     * @param \SellingPartnerApi\Model\ProductPricingV20220501\MoneyType|null $shipping_price shipping_price
     *
     * @return self
     */
    public function setShippingPrice($shipping_price)
    {
        $this->container['shipping_price'] = $shipping_price;

        return $this;
    }
    /**
     * Gets points
     *
     * @return \SellingPartnerApi\Model\ProductPricingV20220501\Points|null
     */
    public function getPoints()
    {
        return $this->container['points'];
    }

    /**
     * Sets points
     *
     * @param \SellingPartnerApi\Model\ProductPricingV20220501\Points|null $points points
     *
     * @return self
     */
    public function setPoints($points)
    {
        $this->container['points'] = $points;

        return $this;
    }
}


