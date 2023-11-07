<?php declare(strict_types=1);
/**
 * GetOffersResult
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for Pricing
 *
 * The Selling Partner API for Pricing helps you programmatically retrieve product pricing and offer information for Amazon Marketplace products.
 *
 * The version of the OpenAPI document: v0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SellingPartnerApi\Model\ProductPricingV0;
use ArrayAccess;
use SellingPartnerApi\Model\BaseModel;
use SellingPartnerApi\Model\ModelInterface;
use SellingPartnerApi\ObjectSerializer;

/**
 * GetOffersResult Class Doc Comment
 *
 * @category Class
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class GetOffersResult extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GetOffersResult';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'marketplace_id' => 'string',
        'asin' => 'string',
        'sku' => 'string',
        'item_condition' => '\SellingPartnerApi\Model\ProductPricingV0\ConditionType',
        'status' => 'string',
        'identifier' => '\SellingPartnerApi\Model\ProductPricingV0\ItemIdentifier',
        'summary' => '\SellingPartnerApi\Model\ProductPricingV0\Summary',
        'offers' => '\SellingPartnerApi\Model\ProductPricingV0\OfferDetail[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'marketplace_id' => null,
        'asin' => null,
        'sku' => null,
        'item_condition' => null,
        'status' => null,
        'identifier' => null,
        'summary' => null,
        'offers' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'marketplace_id' => 'MarketplaceID',
        'asin' => 'ASIN',
        'sku' => 'SKU',
        'item_condition' => 'ItemCondition',
        'status' => 'status',
        'identifier' => 'Identifier',
        'summary' => 'Summary',
        'offers' => 'Offers'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'marketplace_id' => 'setMarketplaceId',
        'asin' => 'setAsin',
        'sku' => 'setSku',
        'item_condition' => 'setItemCondition',
        'status' => 'setStatus',
        'identifier' => 'setIdentifier',
        'summary' => 'setSummary',
        'offers' => 'setOffers'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'marketplace_id' => 'getMarketplaceId',
        'asin' => 'getAsin',
        'sku' => 'getSku',
        'item_condition' => 'getItemCondition',
        'status' => 'getStatus',
        'identifier' => 'getIdentifier',
        'summary' => 'getSummary',
        'offers' => 'getOffers'
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
        $this->container['marketplace_id'] = $data['marketplace_id'] ?? null;
        $this->container['asin'] = $data['asin'] ?? null;
        $this->container['sku'] = $data['sku'] ?? null;
        $this->container['item_condition'] = $data['item_condition'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['identifier'] = $data['identifier'] ?? null;
        $this->container['summary'] = $data['summary'] ?? null;
        $this->container['offers'] = $data['offers'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['marketplace_id'] === null) {
            $invalidProperties[] = "'marketplace_id' can't be null";
        }
        if ($this->container['item_condition'] === null) {
            $invalidProperties[] = "'item_condition' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['identifier'] === null) {
            $invalidProperties[] = "'identifier' can't be null";
        }
        if ($this->container['summary'] === null) {
            $invalidProperties[] = "'summary' can't be null";
        }
        if ($this->container['offers'] === null) {
            $invalidProperties[] = "'offers' can't be null";
        }
        if ((count($this->container['offers']) > 20)) {
            $invalidProperties[] = "invalid value for 'offers', number of items must be less than or equal to 20.";
        }

        return $invalidProperties;
    }


    /**
     * Gets marketplace_id
     *
     * @return string
     */
    public function getMarketplaceId()
    {
        return $this->container['marketplace_id'];
    }

    /**
     * Sets marketplace_id
     *
     * @param string $marketplace_id A marketplace identifier.
     *
     * @return self
     */
    public function setMarketplaceId($marketplace_id)
    {
        $this->container['marketplace_id'] = $marketplace_id;

        return $this;
    }
    /**
     * Gets asin
     *
     * @return string|null
     */
    public function getAsin()
    {
        return $this->container['asin'];
    }

    /**
     * Sets asin
     *
     * @param string|null $asin The Amazon Standard Identification Number (ASIN) of the item.
     *
     * @return self
     */
    public function setAsin($asin)
    {
        $this->container['asin'] = $asin;

        return $this;
    }
    /**
     * Gets sku
     *
     * @return string|null
     */
    public function getSku()
    {
        return $this->container['sku'];
    }

    /**
     * Sets sku
     *
     * @param string|null $sku The stock keeping unit (SKU) of the item.
     *
     * @return self
     */
    public function setSku($sku)
    {
        $this->container['sku'] = $sku;

        return $this;
    }
    /**
     * Gets item_condition
     *
     * @return \SellingPartnerApi\Model\ProductPricingV0\ConditionType
     */
    public function getItemCondition()
    {
        return $this->container['item_condition'];
    }

    /**
     * Sets item_condition
     *
     * @param \SellingPartnerApi\Model\ProductPricingV0\ConditionType $item_condition item_condition
     *
     * @return self
     */
    public function setItemCondition($item_condition)
    {
        $this->container['item_condition'] = $item_condition;

        return $this;
    }
    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status The status of the operation.
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }
    /**
     * Gets identifier
     *
     * @return \SellingPartnerApi\Model\ProductPricingV0\ItemIdentifier
     */
    public function getIdentifier()
    {
        return $this->container['identifier'];
    }

    /**
     * Sets identifier
     *
     * @param \SellingPartnerApi\Model\ProductPricingV0\ItemIdentifier $identifier identifier
     *
     * @return self
     */
    public function setIdentifier($identifier)
    {
        $this->container['identifier'] = $identifier;

        return $this;
    }
    /**
     * Gets summary
     *
     * @return \SellingPartnerApi\Model\ProductPricingV0\Summary
     */
    public function getSummary()
    {
        return $this->container['summary'];
    }

    /**
     * Sets summary
     *
     * @param \SellingPartnerApi\Model\ProductPricingV0\Summary $summary summary
     *
     * @return self
     */
    public function setSummary($summary)
    {
        $this->container['summary'] = $summary;

        return $this;
    }
    /**
     * Gets offers
     *
     * @return \SellingPartnerApi\Model\ProductPricingV0\OfferDetail[]
     */
    public function getOffers()
    {
        return $this->container['offers'];
    }

    /**
     * Sets offers
     *
     * @param \SellingPartnerApi\Model\ProductPricingV0\OfferDetail[] $offers offers
     *
     * @return self
     */
    public function setOffers($offers)
    {

        if ((count($offers) > 20)) {
            throw new \InvalidArgumentException('invalid value for $offers when calling GetOffersResult., number of items must be less than or equal to 20.');
        }
        $this->container['offers'] = $offers;

        return $this;
    }
}


