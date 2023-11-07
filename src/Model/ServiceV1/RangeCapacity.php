<?php declare(strict_types=1);
/**
 * RangeCapacity
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
 * RangeCapacity Class Doc Comment
 *
 * @category Class
 * @description Range capacity entity where each entry has a capacity type and corresponding slots.
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class RangeCapacity extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'RangeCapacity';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'capacity_type' => '\SellingPartnerApi\Model\ServiceV1\CapacityType',
        'slots' => '\SellingPartnerApi\Model\ServiceV1\RangeSlot[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'capacity_type' => null,
        'slots' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'capacity_type' => 'capacityType',
        'slots' => 'slots'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'capacity_type' => 'setCapacityType',
        'slots' => 'setSlots'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'capacity_type' => 'getCapacityType',
        'slots' => 'getSlots'
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
        $this->container['capacity_type'] = $data['capacity_type'] ?? null;
        $this->container['slots'] = $data['slots'] ?? null;
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
     * Gets capacity_type
     *
     * @return \SellingPartnerApi\Model\ServiceV1\CapacityType|null
     */
    public function getCapacityType()
    {
        return $this->container['capacity_type'];
    }

    /**
     * Sets capacity_type
     *
     * @param \SellingPartnerApi\Model\ServiceV1\CapacityType|null $capacity_type capacity_type
     *
     * @return self
     */
    public function setCapacityType($capacity_type)
    {
        $this->container['capacity_type'] = $capacity_type;

        return $this;
    }
    /**
     * Gets slots
     *
     * @return \SellingPartnerApi\Model\ServiceV1\RangeSlot[]|null
     */
    public function getSlots()
    {
        return $this->container['slots'];
    }

    /**
     * Sets slots
     *
     * @param \SellingPartnerApi\Model\ServiceV1\RangeSlot[]|null $slots Array of capacity slots in range slot format.
     *
     * @return self
     */
    public function setSlots($slots)
    {
        $this->container['slots'] = $slots;

        return $this;
    }
}


