<?php declare(strict_types=1);
/**
 * TransportDetailInput
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for Fulfillment Inbound
 *
 * The Selling Partner API for Fulfillment Inbound lets you create applications that create and update inbound shipments of inventory to Amazon's fulfillment network.
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

namespace SellingPartnerApi\Model\FbaInboundV0;
use ArrayAccess;
use SellingPartnerApi\Model\BaseModel;
use SellingPartnerApi\Model\ModelInterface;
use SellingPartnerApi\ObjectSerializer;

/**
 * TransportDetailInput Class Doc Comment
 *
 * @category Class
 * @description Information required to create an Amazon-partnered carrier shipping estimate, or to alert the Amazon fulfillment center to the arrival of an inbound shipment by a non-Amazon-partnered carrier.
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class TransportDetailInput extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'TransportDetailInput';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'partnered_small_parcel_data' => '\SellingPartnerApi\Model\FbaInboundV0\PartneredSmallParcelDataInput',
        'non_partnered_small_parcel_data' => '\SellingPartnerApi\Model\FbaInboundV0\NonPartneredSmallParcelDataInput',
        'partnered_ltl_data' => '\SellingPartnerApi\Model\FbaInboundV0\PartneredLtlDataInput',
        'non_partnered_ltl_data' => '\SellingPartnerApi\Model\FbaInboundV0\NonPartneredLtlDataInput'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'partnered_small_parcel_data' => null,
        'non_partnered_small_parcel_data' => null,
        'partnered_ltl_data' => null,
        'non_partnered_ltl_data' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'partnered_small_parcel_data' => 'PartneredSmallParcelData',
        'non_partnered_small_parcel_data' => 'NonPartneredSmallParcelData',
        'partnered_ltl_data' => 'PartneredLtlData',
        'non_partnered_ltl_data' => 'NonPartneredLtlData'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'partnered_small_parcel_data' => 'setPartneredSmallParcelData',
        'non_partnered_small_parcel_data' => 'setNonPartneredSmallParcelData',
        'partnered_ltl_data' => 'setPartneredLtlData',
        'non_partnered_ltl_data' => 'setNonPartneredLtlData'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'partnered_small_parcel_data' => 'getPartneredSmallParcelData',
        'non_partnered_small_parcel_data' => 'getNonPartneredSmallParcelData',
        'partnered_ltl_data' => 'getPartneredLtlData',
        'non_partnered_ltl_data' => 'getNonPartneredLtlData'
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
        $this->container['partnered_small_parcel_data'] = $data['partnered_small_parcel_data'] ?? null;
        $this->container['non_partnered_small_parcel_data'] = $data['non_partnered_small_parcel_data'] ?? null;
        $this->container['partnered_ltl_data'] = $data['partnered_ltl_data'] ?? null;
        $this->container['non_partnered_ltl_data'] = $data['non_partnered_ltl_data'] ?? null;
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
     * Gets partnered_small_parcel_data
     *
     * @return \SellingPartnerApi\Model\FbaInboundV0\PartneredSmallParcelDataInput|null
     */
    public function getPartneredSmallParcelData()
    {
        return $this->container['partnered_small_parcel_data'];
    }

    /**
     * Sets partnered_small_parcel_data
     *
     * @param \SellingPartnerApi\Model\FbaInboundV0\PartneredSmallParcelDataInput|null $partnered_small_parcel_data partnered_small_parcel_data
     *
     * @return self
     */
    public function setPartneredSmallParcelData($partnered_small_parcel_data)
    {
        $this->container['partnered_small_parcel_data'] = $partnered_small_parcel_data;

        return $this;
    }
    /**
     * Gets non_partnered_small_parcel_data
     *
     * @return \SellingPartnerApi\Model\FbaInboundV0\NonPartneredSmallParcelDataInput|null
     */
    public function getNonPartneredSmallParcelData()
    {
        return $this->container['non_partnered_small_parcel_data'];
    }

    /**
     * Sets non_partnered_small_parcel_data
     *
     * @param \SellingPartnerApi\Model\FbaInboundV0\NonPartneredSmallParcelDataInput|null $non_partnered_small_parcel_data non_partnered_small_parcel_data
     *
     * @return self
     */
    public function setNonPartneredSmallParcelData($non_partnered_small_parcel_data)
    {
        $this->container['non_partnered_small_parcel_data'] = $non_partnered_small_parcel_data;

        return $this;
    }
    /**
     * Gets partnered_ltl_data
     *
     * @return \SellingPartnerApi\Model\FbaInboundV0\PartneredLtlDataInput|null
     */
    public function getPartneredLtlData()
    {
        return $this->container['partnered_ltl_data'];
    }

    /**
     * Sets partnered_ltl_data
     *
     * @param \SellingPartnerApi\Model\FbaInboundV0\PartneredLtlDataInput|null $partnered_ltl_data partnered_ltl_data
     *
     * @return self
     */
    public function setPartneredLtlData($partnered_ltl_data)
    {
        $this->container['partnered_ltl_data'] = $partnered_ltl_data;

        return $this;
    }
    /**
     * Gets non_partnered_ltl_data
     *
     * @return \SellingPartnerApi\Model\FbaInboundV0\NonPartneredLtlDataInput|null
     */
    public function getNonPartneredLtlData()
    {
        return $this->container['non_partnered_ltl_data'];
    }

    /**
     * Sets non_partnered_ltl_data
     *
     * @param \SellingPartnerApi\Model\FbaInboundV0\NonPartneredLtlDataInput|null $non_partnered_ltl_data non_partnered_ltl_data
     *
     * @return self
     */
    public function setNonPartneredLtlData($non_partnered_ltl_data)
    {
        $this->container['non_partnered_ltl_data'] = $non_partnered_ltl_data;

        return $this;
    }
}


