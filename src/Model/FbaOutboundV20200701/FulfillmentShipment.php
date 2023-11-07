<?php declare(strict_types=1);
/**
 * FulfillmentShipment
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner APIs for Fulfillment Outbound
 *
 * The Selling Partner API for Fulfillment Outbound lets you create applications that help a seller fulfill Multi-Channel Fulfillment orders using their inventory in Amazon's fulfillment network. You can get information on both potential and existing fulfillment orders.
 *
 * The version of the OpenAPI document: 2020-07-01
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SellingPartnerApi\Model\FbaOutboundV20200701;
use ArrayAccess;
use SellingPartnerApi\Model\BaseModel;
use SellingPartnerApi\Model\ModelInterface;
use SellingPartnerApi\ObjectSerializer;

/**
 * FulfillmentShipment Class Doc Comment
 *
 * @category Class
 * @description Delivery and item information for a shipment in a fulfillment order.
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class FulfillmentShipment extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'FulfillmentShipment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'amazon_shipment_id' => 'string',
        'fulfillment_center_id' => 'string',
        'fulfillment_shipment_status' => 'string',
        'shipping_date' => 'string',
        'estimated_arrival_date' => 'string',
        'shipping_notes' => 'string[]',
        'fulfillment_shipment_item' => '\SellingPartnerApi\Model\FbaOutboundV20200701\FulfillmentShipmentItem[]',
        'fulfillment_shipment_package' => '\SellingPartnerApi\Model\FbaOutboundV20200701\FulfillmentShipmentPackage[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'amazon_shipment_id' => null,
        'fulfillment_center_id' => null,
        'fulfillment_shipment_status' => null,
        'shipping_date' => null,
        'estimated_arrival_date' => null,
        'shipping_notes' => null,
        'fulfillment_shipment_item' => null,
        'fulfillment_shipment_package' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'amazon_shipment_id' => 'amazonShipmentId',
        'fulfillment_center_id' => 'fulfillmentCenterId',
        'fulfillment_shipment_status' => 'fulfillmentShipmentStatus',
        'shipping_date' => 'shippingDate',
        'estimated_arrival_date' => 'estimatedArrivalDate',
        'shipping_notes' => 'shippingNotes',
        'fulfillment_shipment_item' => 'fulfillmentShipmentItem',
        'fulfillment_shipment_package' => 'fulfillmentShipmentPackage'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'amazon_shipment_id' => 'setAmazonShipmentId',
        'fulfillment_center_id' => 'setFulfillmentCenterId',
        'fulfillment_shipment_status' => 'setFulfillmentShipmentStatus',
        'shipping_date' => 'setShippingDate',
        'estimated_arrival_date' => 'setEstimatedArrivalDate',
        'shipping_notes' => 'setShippingNotes',
        'fulfillment_shipment_item' => 'setFulfillmentShipmentItem',
        'fulfillment_shipment_package' => 'setFulfillmentShipmentPackage'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'amazon_shipment_id' => 'getAmazonShipmentId',
        'fulfillment_center_id' => 'getFulfillmentCenterId',
        'fulfillment_shipment_status' => 'getFulfillmentShipmentStatus',
        'shipping_date' => 'getShippingDate',
        'estimated_arrival_date' => 'getEstimatedArrivalDate',
        'shipping_notes' => 'getShippingNotes',
        'fulfillment_shipment_item' => 'getFulfillmentShipmentItem',
        'fulfillment_shipment_package' => 'getFulfillmentShipmentPackage'
    ];



    const FULFILLMENT_SHIPMENT_STATUS_PENDING = 'PENDING';
    const FULFILLMENT_SHIPMENT_STATUS_SHIPPED = 'SHIPPED';
    const FULFILLMENT_SHIPMENT_STATUS_CANCELLED_BY_FULFILLER = 'CANCELLED_BY_FULFILLER';
    const FULFILLMENT_SHIPMENT_STATUS_CANCELLED_BY_SELLER = 'CANCELLED_BY_SELLER';
    
    

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFulfillmentShipmentStatusAllowableValues()
    {
        $baseVals = [
            self::FULFILLMENT_SHIPMENT_STATUS_PENDING,
            self::FULFILLMENT_SHIPMENT_STATUS_SHIPPED,
            self::FULFILLMENT_SHIPMENT_STATUS_CANCELLED_BY_FULFILLER,
            self::FULFILLMENT_SHIPMENT_STATUS_CANCELLED_BY_SELLER,
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
        $this->container['amazon_shipment_id'] = $data['amazon_shipment_id'] ?? null;
        $this->container['fulfillment_center_id'] = $data['fulfillment_center_id'] ?? null;
        $this->container['fulfillment_shipment_status'] = $data['fulfillment_shipment_status'] ?? null;
        $this->container['shipping_date'] = $data['shipping_date'] ?? null;
        $this->container['estimated_arrival_date'] = $data['estimated_arrival_date'] ?? null;
        $this->container['shipping_notes'] = $data['shipping_notes'] ?? null;
        $this->container['fulfillment_shipment_item'] = $data['fulfillment_shipment_item'] ?? null;
        $this->container['fulfillment_shipment_package'] = $data['fulfillment_shipment_package'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['amazon_shipment_id'] === null) {
            $invalidProperties[] = "'amazon_shipment_id' can't be null";
        }
        if ($this->container['fulfillment_center_id'] === null) {
            $invalidProperties[] = "'fulfillment_center_id' can't be null";
        }
        if ($this->container['fulfillment_shipment_status'] === null) {
            $invalidProperties[] = "'fulfillment_shipment_status' can't be null";
        }
        $allowedValues = $this->getFulfillmentShipmentStatusAllowableValues();
        if (
            !is_null($this->container['fulfillment_shipment_status']) &&
            !in_array(strtoupper($this->container['fulfillment_shipment_status']), $allowedValues, true)
        ) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'fulfillment_shipment_status', must be one of '%s'",
                $this->container['fulfillment_shipment_status'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['fulfillment_shipment_item'] === null) {
            $invalidProperties[] = "'fulfillment_shipment_item' can't be null";
        }
        return $invalidProperties;
    }


    /**
     * Gets amazon_shipment_id
     *
     * @return string
     */
    public function getAmazonShipmentId()
    {
        return $this->container['amazon_shipment_id'];
    }

    /**
     * Sets amazon_shipment_id
     *
     * @param string $amazon_shipment_id A shipment identifier assigned by Amazon.
     *
     * @return self
     */
    public function setAmazonShipmentId($amazon_shipment_id)
    {
        $this->container['amazon_shipment_id'] = $amazon_shipment_id;

        return $this;
    }
    /**
     * Gets fulfillment_center_id
     *
     * @return string
     */
    public function getFulfillmentCenterId()
    {
        return $this->container['fulfillment_center_id'];
    }

    /**
     * Sets fulfillment_center_id
     *
     * @param string $fulfillment_center_id An identifier for the fulfillment center that the shipment will be sent from.
     *
     * @return self
     */
    public function setFulfillmentCenterId($fulfillment_center_id)
    {
        $this->container['fulfillment_center_id'] = $fulfillment_center_id;

        return $this;
    }
    /**
     * Gets fulfillment_shipment_status
     *
     * @return string
     */
    public function getFulfillmentShipmentStatus()
    {
        return $this->container['fulfillment_shipment_status'];
    }

    /**
     * Sets fulfillment_shipment_status
     *
     * @param string $fulfillment_shipment_status The current status of the shipment.
     *
     * @return self
     */
    public function setFulfillmentShipmentStatus($fulfillment_shipment_status)
    {
        $allowedValues = $this->getFulfillmentShipmentStatusAllowableValues();
        if (!in_array(strtoupper($fulfillment_shipment_status), $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'fulfillment_shipment_status', must be one of '%s'",
                    $fulfillment_shipment_status,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['fulfillment_shipment_status'] = $fulfillment_shipment_status;

        return $this;
    }
    /**
     * Gets shipping_date
     *
     * @return string|null
     */
    public function getShippingDate()
    {
        return $this->container['shipping_date'];
    }

    /**
     * Sets shipping_date
     *
     * @param string|null $shipping_date A datetime string in ISO 8601 format.
     *
     * @return self
     */
    public function setShippingDate($shipping_date)
    {
        $this->container['shipping_date'] = $shipping_date;

        return $this;
    }
    /**
     * Gets estimated_arrival_date
     *
     * @return string|null
     */
    public function getEstimatedArrivalDate()
    {
        return $this->container['estimated_arrival_date'];
    }

    /**
     * Sets estimated_arrival_date
     *
     * @param string|null $estimated_arrival_date A datetime string in ISO 8601 format.
     *
     * @return self
     */
    public function setEstimatedArrivalDate($estimated_arrival_date)
    {
        $this->container['estimated_arrival_date'] = $estimated_arrival_date;

        return $this;
    }
    /**
     * Gets shipping_notes
     *
     * @return string[]|null
     */
    public function getShippingNotes()
    {
        return $this->container['shipping_notes'];
    }

    /**
     * Sets shipping_notes
     *
     * @param string[]|null $shipping_notes Provides additional insight into shipment timeline. Primairly used to communicate that actual delivery dates aren't available.
     *
     * @return self
     */
    public function setShippingNotes($shipping_notes)
    {
        $this->container['shipping_notes'] = $shipping_notes;

        return $this;
    }
    /**
     * Gets fulfillment_shipment_item
     *
     * @return \SellingPartnerApi\Model\FbaOutboundV20200701\FulfillmentShipmentItem[]
     */
    public function getFulfillmentShipmentItem()
    {
        return $this->container['fulfillment_shipment_item'];
    }

    /**
     * Sets fulfillment_shipment_item
     *
     * @param \SellingPartnerApi\Model\FbaOutboundV20200701\FulfillmentShipmentItem[] $fulfillment_shipment_item An array of fulfillment shipment item information.
     *
     * @return self
     */
    public function setFulfillmentShipmentItem($fulfillment_shipment_item)
    {
        $this->container['fulfillment_shipment_item'] = $fulfillment_shipment_item;

        return $this;
    }
    /**
     * Gets fulfillment_shipment_package
     *
     * @return \SellingPartnerApi\Model\FbaOutboundV20200701\FulfillmentShipmentPackage[]|null
     */
    public function getFulfillmentShipmentPackage()
    {
        return $this->container['fulfillment_shipment_package'];
    }

    /**
     * Sets fulfillment_shipment_package
     *
     * @param \SellingPartnerApi\Model\FbaOutboundV20200701\FulfillmentShipmentPackage[]|null $fulfillment_shipment_package An array of fulfillment shipment package information.
     *
     * @return self
     */
    public function setFulfillmentShipmentPackage($fulfillment_shipment_package)
    {
        $this->container['fulfillment_shipment_package'] = $fulfillment_shipment_package;

        return $this;
    }
}


