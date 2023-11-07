<?php declare(strict_types=1);
/**
 * Package
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for Easy Ship
 *
 * The Selling Partner API for Easy Ship helps you build applications that help sellers manage and ship Amazon Easy Ship orders. Your Easy Ship applications can: * Get available time slots for packages to be scheduled for delivery. * Schedule, reschedule, and cancel Easy Ship orders. * Print labels, invoices, and warranties. See the [Marketplace Support Table](https://developer-docs.amazon.com/sp-api/docs/easyship-api-v2022-03-23-use-case-guide#marketplace-support-table) for the differences in Easy Ship operations by marketplace.
 *
 * The version of the OpenAPI document: 2022-03-23
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SellingPartnerApi\Model\EasyShipV20220323;
use ArrayAccess;
use SellingPartnerApi\Model\BaseModel;
use SellingPartnerApi\Model\ModelInterface;
use SellingPartnerApi\ObjectSerializer;

/**
 * Package Class Doc Comment
 *
 * @category Class
 * @description A package. This object contains all the details of the scheduled Easy Ship package including the package identifier, physical attributes such as dimensions and weight, selected time slot to handover the package to carrier, status of the package, and tracking/invoice details.
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class Package extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Package';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'scheduled_package_id' => '\SellingPartnerApi\Model\EasyShipV20220323\ScheduledPackageId',
        'package_dimensions' => '\SellingPartnerApi\Model\EasyShipV20220323\Dimensions',
        'package_weight' => '\SellingPartnerApi\Model\EasyShipV20220323\Weight',
        'package_items' => '\SellingPartnerApi\Model\EasyShipV20220323\Item[]',
        'package_time_slot' => '\SellingPartnerApi\Model\EasyShipV20220323\TimeSlot',
        'package_identifier' => 'string',
        'invoice' => '\SellingPartnerApi\Model\EasyShipV20220323\InvoiceData',
        'package_status' => '\SellingPartnerApi\Model\EasyShipV20220323\PackageStatus',
        'tracking_details' => '\SellingPartnerApi\Model\EasyShipV20220323\TrackingDetails'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'scheduled_package_id' => null,
        'package_dimensions' => null,
        'package_weight' => null,
        'package_items' => null,
        'package_time_slot' => null,
        'package_identifier' => null,
        'invoice' => null,
        'package_status' => null,
        'tracking_details' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'headers' => 'headers',
        'scheduled_package_id' => 'scheduledPackageId',
        'package_dimensions' => 'packageDimensions',
        'package_weight' => 'packageWeight',
        'package_items' => 'packageItems',
        'package_time_slot' => 'packageTimeSlot',
        'package_identifier' => 'packageIdentifier',
        'invoice' => 'invoice',
        'package_status' => 'packageStatus',
        'tracking_details' => 'trackingDetails'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'headers' => 'setHeaders',
        'scheduled_package_id' => 'setScheduledPackageId',
        'package_dimensions' => 'setPackageDimensions',
        'package_weight' => 'setPackageWeight',
        'package_items' => 'setPackageItems',
        'package_time_slot' => 'setPackageTimeSlot',
        'package_identifier' => 'setPackageIdentifier',
        'invoice' => 'setInvoice',
        'package_status' => 'setPackageStatus',
        'tracking_details' => 'setTrackingDetails'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'headers' => 'getHeaders',
        'scheduled_package_id' => 'getScheduledPackageId',
        'package_dimensions' => 'getPackageDimensions',
        'package_weight' => 'getPackageWeight',
        'package_items' => 'getPackageItems',
        'package_time_slot' => 'getPackageTimeSlot',
        'package_identifier' => 'getPackageIdentifier',
        'invoice' => 'getInvoice',
        'package_status' => 'getPackageStatus',
        'tracking_details' => 'getTrackingDetails'
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
        $this->container['scheduled_package_id'] = $data['scheduled_package_id'] ?? null;
        $this->container['package_dimensions'] = $data['package_dimensions'] ?? null;
        $this->container['package_weight'] = $data['package_weight'] ?? null;
        $this->container['package_items'] = $data['package_items'] ?? null;
        $this->container['package_time_slot'] = $data['package_time_slot'] ?? null;
        $this->container['package_identifier'] = $data['package_identifier'] ?? null;
        $this->container['invoice'] = $data['invoice'] ?? null;
        $this->container['package_status'] = $data['package_status'] ?? null;
        $this->container['tracking_details'] = $data['tracking_details'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['scheduled_package_id'] === null) {
            $invalidProperties[] = "'scheduled_package_id' can't be null";
        }
        if ($this->container['package_dimensions'] === null) {
            $invalidProperties[] = "'package_dimensions' can't be null";
        }
        if ($this->container['package_weight'] === null) {
            $invalidProperties[] = "'package_weight' can't be null";
        }
        if (!is_null($this->container['package_items']) && (count($this->container['package_items']) > 500)) {
            $invalidProperties[] = "invalid value for 'package_items', number of items must be less than or equal to 500.";
        }

        if ($this->container['package_time_slot'] === null) {
            $invalidProperties[] = "'package_time_slot' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Gets API response headers
     *
     * @return array[string]
     */
    public function getHeaders()
    {
        return $this->container['headers'];
    }

    /**
     * Sets API response headers (only relevant to response models)
     *
     * @param array[string => string] $headers Associative array of response headers.
     *
     * @return self
     */
    public function setHeaders($headers)
    {
        $this->container['headers'] = $headers;
        return $this;
    }

    /**
     * Gets scheduled_package_id
     *
     * @return \SellingPartnerApi\Model\EasyShipV20220323\ScheduledPackageId
     */
    public function getScheduledPackageId()
    {
        return $this->container['scheduled_package_id'];
    }

    /**
     * Sets scheduled_package_id
     *
     * @param \SellingPartnerApi\Model\EasyShipV20220323\ScheduledPackageId $scheduled_package_id scheduled_package_id
     *
     * @return self
     */
    public function setScheduledPackageId($scheduled_package_id)
    {
        $this->container['scheduled_package_id'] = $scheduled_package_id;

        return $this;
    }
    /**
     * Gets package_dimensions
     *
     * @return \SellingPartnerApi\Model\EasyShipV20220323\Dimensions
     */
    public function getPackageDimensions()
    {
        return $this->container['package_dimensions'];
    }

    /**
     * Sets package_dimensions
     *
     * @param \SellingPartnerApi\Model\EasyShipV20220323\Dimensions $package_dimensions package_dimensions
     *
     * @return self
     */
    public function setPackageDimensions($package_dimensions)
    {
        $this->container['package_dimensions'] = $package_dimensions;

        return $this;
    }
    /**
     * Gets package_weight
     *
     * @return \SellingPartnerApi\Model\EasyShipV20220323\Weight
     */
    public function getPackageWeight()
    {
        return $this->container['package_weight'];
    }

    /**
     * Sets package_weight
     *
     * @param \SellingPartnerApi\Model\EasyShipV20220323\Weight $package_weight package_weight
     *
     * @return self
     */
    public function setPackageWeight($package_weight)
    {
        $this->container['package_weight'] = $package_weight;

        return $this;
    }
    /**
     * Gets package_items
     *
     * @return \SellingPartnerApi\Model\EasyShipV20220323\Item[]|null
     */
    public function getPackageItems()
    {
        return $this->container['package_items'];
    }

    /**
     * Sets package_items
     *
     * @param \SellingPartnerApi\Model\EasyShipV20220323\Item[]|null $package_items A list of items contained in the package.
     *
     * @return self
     */
    public function setPackageItems($package_items)
    {

        if (!is_null($package_items) && (count($package_items) > 500)) {
            throw new \InvalidArgumentException('invalid value for $package_items when calling Package., number of items must be less than or equal to 500.');
        }
        $this->container['package_items'] = $package_items;

        return $this;
    }
    /**
     * Gets package_time_slot
     *
     * @return \SellingPartnerApi\Model\EasyShipV20220323\TimeSlot
     */
    public function getPackageTimeSlot()
    {
        return $this->container['package_time_slot'];
    }

    /**
     * Sets package_time_slot
     *
     * @param \SellingPartnerApi\Model\EasyShipV20220323\TimeSlot $package_time_slot package_time_slot
     *
     * @return self
     */
    public function setPackageTimeSlot($package_time_slot)
    {
        $this->container['package_time_slot'] = $package_time_slot;

        return $this;
    }
    /**
     * Gets package_identifier
     *
     * @return string|null
     */
    public function getPackageIdentifier()
    {
        return $this->container['package_identifier'];
    }

    /**
     * Sets package_identifier
     *
     * @param string|null $package_identifier Optional seller-created identifier that is printed on the shipping label to help the seller identify the package.
     *
     * @return self
     */
    public function setPackageIdentifier($package_identifier)
    {
        $this->container['package_identifier'] = $package_identifier;

        return $this;
    }
    /**
     * Gets invoice
     *
     * @return \SellingPartnerApi\Model\EasyShipV20220323\InvoiceData|null
     */
    public function getInvoice()
    {
        return $this->container['invoice'];
    }

    /**
     * Sets invoice
     *
     * @param \SellingPartnerApi\Model\EasyShipV20220323\InvoiceData|null $invoice invoice
     *
     * @return self
     */
    public function setInvoice($invoice)
    {
        $this->container['invoice'] = $invoice;

        return $this;
    }
    /**
     * Gets package_status
     *
     * @return \SellingPartnerApi\Model\EasyShipV20220323\PackageStatus|null
     */
    public function getPackageStatus()
    {
        return $this->container['package_status'];
    }

    /**
     * Sets package_status
     *
     * @param \SellingPartnerApi\Model\EasyShipV20220323\PackageStatus|null $package_status package_status
     *
     * @return self
     */
    public function setPackageStatus($package_status)
    {
        $this->container['package_status'] = $package_status;

        return $this;
    }
    /**
     * Gets tracking_details
     *
     * @return \SellingPartnerApi\Model\EasyShipV20220323\TrackingDetails|null
     */
    public function getTrackingDetails()
    {
        return $this->container['tracking_details'];
    }

    /**
     * Sets tracking_details
     *
     * @param \SellingPartnerApi\Model\EasyShipV20220323\TrackingDetails|null $tracking_details tracking_details
     *
     * @return self
     */
    public function setTrackingDetails($tracking_details)
    {
        $this->container['tracking_details'] = $tracking_details;

        return $this;
    }
}


