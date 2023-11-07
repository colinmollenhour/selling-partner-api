<?php declare(strict_types=1);
/**
 * Containers
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for Retail Procurement Shipments
 *
 * The Selling Partner API for Retail Procurement Shipments provides programmatic access to retail shipping data for vendors.
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

namespace SellingPartnerApi\Model\VendorShippingV1;
use ArrayAccess;
use SellingPartnerApi\Model\BaseModel;
use SellingPartnerApi\Model\ModelInterface;
use SellingPartnerApi\ObjectSerializer;

/**
 * Containers Class Doc Comment
 *
 * @category Class
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class Containers extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'containers';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'container_type' => 'string',
        'container_sequence_number' => 'string',
        'container_identifiers' => '\SellingPartnerApi\Model\VendorShippingV1\ContainerIdentification[]',
        'tracking_number' => 'string',
        'dimensions' => '\SellingPartnerApi\Model\VendorShippingV1\Dimensions',
        'weight' => '\SellingPartnerApi\Model\VendorShippingV1\Weight',
        'tier' => 'int',
        'block' => 'int',
        'inner_containers_details' => '\SellingPartnerApi\Model\VendorShippingV1\InnerContainersDetails',
        'packed_items' => '\SellingPartnerApi\Model\VendorShippingV1\PackedItems[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'container_type' => null,
        'container_sequence_number' => null,
        'container_identifiers' => null,
        'tracking_number' => null,
        'dimensions' => null,
        'weight' => null,
        'tier' => null,
        'block' => null,
        'inner_containers_details' => null,
        'packed_items' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'container_type' => 'containerType',
        'container_sequence_number' => 'containerSequenceNumber',
        'container_identifiers' => 'containerIdentifiers',
        'tracking_number' => 'trackingNumber',
        'dimensions' => 'dimensions',
        'weight' => 'weight',
        'tier' => 'tier',
        'block' => 'block',
        'inner_containers_details' => 'innerContainersDetails',
        'packed_items' => 'packedItems'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'container_type' => 'setContainerType',
        'container_sequence_number' => 'setContainerSequenceNumber',
        'container_identifiers' => 'setContainerIdentifiers',
        'tracking_number' => 'setTrackingNumber',
        'dimensions' => 'setDimensions',
        'weight' => 'setWeight',
        'tier' => 'setTier',
        'block' => 'setBlock',
        'inner_containers_details' => 'setInnerContainersDetails',
        'packed_items' => 'setPackedItems'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'container_type' => 'getContainerType',
        'container_sequence_number' => 'getContainerSequenceNumber',
        'container_identifiers' => 'getContainerIdentifiers',
        'tracking_number' => 'getTrackingNumber',
        'dimensions' => 'getDimensions',
        'weight' => 'getWeight',
        'tier' => 'getTier',
        'block' => 'getBlock',
        'inner_containers_details' => 'getInnerContainersDetails',
        'packed_items' => 'getPackedItems'
    ];



    const CONTAINER_TYPE_CARTON = 'carton';
    const CONTAINER_TYPE_PALLET = 'pallet';
    
    

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getContainerTypeAllowableValues()
    {
        $baseVals = [
            self::CONTAINER_TYPE_CARTON,
            self::CONTAINER_TYPE_PALLET,
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
        $this->container['container_type'] = $data['container_type'] ?? null;
        $this->container['container_sequence_number'] = $data['container_sequence_number'] ?? null;
        $this->container['container_identifiers'] = $data['container_identifiers'] ?? null;
        $this->container['tracking_number'] = $data['tracking_number'] ?? null;
        $this->container['dimensions'] = $data['dimensions'] ?? null;
        $this->container['weight'] = $data['weight'] ?? null;
        $this->container['tier'] = $data['tier'] ?? null;
        $this->container['block'] = $data['block'] ?? null;
        $this->container['inner_containers_details'] = $data['inner_containers_details'] ?? null;
        $this->container['packed_items'] = $data['packed_items'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['container_type'] === null) {
            $invalidProperties[] = "'container_type' can't be null";
        }
        $allowedValues = $this->getContainerTypeAllowableValues();
        if (
            !is_null($this->container['container_type']) &&
            !in_array(strtoupper($this->container['container_type']), $allowedValues, true)
        ) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'container_type', must be one of '%s'",
                $this->container['container_type'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['container_identifiers'] === null) {
            $invalidProperties[] = "'container_identifiers' can't be null";
        }
        return $invalidProperties;
    }


    /**
     * Gets container_type
     *
     * @return string
     */
    public function getContainerType()
    {
        return $this->container['container_type'];
    }

    /**
     * Sets container_type
     *
     * @param string $container_type The type of container.
     *
     * @return self
     */
    public function setContainerType($container_type)
    {
        $allowedValues = $this->getContainerTypeAllowableValues();
        if (!in_array(strtoupper($container_type), $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'container_type', must be one of '%s'",
                    $container_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['container_type'] = $container_type;

        return $this;
    }
    /**
     * Gets container_sequence_number
     *
     * @return string|null
     */
    public function getContainerSequenceNumber()
    {
        return $this->container['container_sequence_number'];
    }

    /**
     * Sets container_sequence_number
     *
     * @param string|null $container_sequence_number An integer that must be submitted for multi-box shipments only, where one item may come in separate packages.
     *
     * @return self
     */
    public function setContainerSequenceNumber($container_sequence_number)
    {
        $this->container['container_sequence_number'] = $container_sequence_number;

        return $this;
    }
    /**
     * Gets container_identifiers
     *
     * @return \SellingPartnerApi\Model\VendorShippingV1\ContainerIdentification[]
     */
    public function getContainerIdentifiers()
    {
        return $this->container['container_identifiers'];
    }

    /**
     * Sets container_identifiers
     *
     * @param \SellingPartnerApi\Model\VendorShippingV1\ContainerIdentification[] $container_identifiers A list of carton identifiers.
     *
     * @return self
     */
    public function setContainerIdentifiers($container_identifiers)
    {
        $this->container['container_identifiers'] = $container_identifiers;

        return $this;
    }
    /**
     * Gets tracking_number
     *
     * @return string|null
     */
    public function getTrackingNumber()
    {
        return $this->container['tracking_number'];
    }

    /**
     * Sets tracking_number
     *
     * @param string|null $tracking_number The tracking number used for identifying the shipment.
     *
     * @return self
     */
    public function setTrackingNumber($tracking_number)
    {
        $this->container['tracking_number'] = $tracking_number;

        return $this;
    }
    /**
     * Gets dimensions
     *
     * @return \SellingPartnerApi\Model\VendorShippingV1\Dimensions|null
     */
    public function getDimensions()
    {
        return $this->container['dimensions'];
    }

    /**
     * Sets dimensions
     *
     * @param \SellingPartnerApi\Model\VendorShippingV1\Dimensions|null $dimensions dimensions
     *
     * @return self
     */
    public function setDimensions($dimensions)
    {
        $this->container['dimensions'] = $dimensions;

        return $this;
    }
    /**
     * Gets weight
     *
     * @return \SellingPartnerApi\Model\VendorShippingV1\Weight|null
     */
    public function getWeight()
    {
        return $this->container['weight'];
    }

    /**
     * Sets weight
     *
     * @param \SellingPartnerApi\Model\VendorShippingV1\Weight|null $weight weight
     *
     * @return self
     */
    public function setWeight($weight)
    {
        $this->container['weight'] = $weight;

        return $this;
    }
    /**
     * Gets tier
     *
     * @return int|null
     */
    public function getTier()
    {
        return $this->container['tier'];
    }

    /**
     * Sets tier
     *
     * @param int|null $tier Number of layers per pallet.
     *
     * @return self
     */
    public function setTier($tier)
    {
        $this->container['tier'] = $tier;

        return $this;
    }
    /**
     * Gets block
     *
     * @return int|null
     */
    public function getBlock()
    {
        return $this->container['block'];
    }

    /**
     * Sets block
     *
     * @param int|null $block Number of cartons per layer on the pallet.
     *
     * @return self
     */
    public function setBlock($block)
    {
        $this->container['block'] = $block;

        return $this;
    }
    /**
     * Gets inner_containers_details
     *
     * @return \SellingPartnerApi\Model\VendorShippingV1\InnerContainersDetails|null
     */
    public function getInnerContainersDetails()
    {
        return $this->container['inner_containers_details'];
    }

    /**
     * Sets inner_containers_details
     *
     * @param \SellingPartnerApi\Model\VendorShippingV1\InnerContainersDetails|null $inner_containers_details inner_containers_details
     *
     * @return self
     */
    public function setInnerContainersDetails($inner_containers_details)
    {
        $this->container['inner_containers_details'] = $inner_containers_details;

        return $this;
    }
    /**
     * Gets packed_items
     *
     * @return \SellingPartnerApi\Model\VendorShippingV1\PackedItems[]|null
     */
    public function getPackedItems()
    {
        return $this->container['packed_items'];
    }

    /**
     * Sets packed_items
     *
     * @param \SellingPartnerApi\Model\VendorShippingV1\PackedItems[]|null $packed_items A list of packed items.
     *
     * @return self
     */
    public function setPackedItems($packed_items)
    {
        $this->container['packed_items'] = $packed_items;

        return $this;
    }
}


