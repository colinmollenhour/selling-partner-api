<?php declare(strict_types=1);
/**
 * Shipment
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
 * Shipment Class Doc Comment
 *
 * @category Class
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class Shipment extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Shipment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'vendor_shipment_identifier' => 'string',
        'transaction_type' => 'string',
        'buyer_reference_number' => 'string',
        'transaction_date' => 'string',
        'current_shipment_status' => 'string',
        'currentshipment_status_date' => 'string',
        'shipment_status_details' => '\SellingPartnerApi\Model\VendorShippingV1\ShipmentStatusDetails[]',
        'shipment_create_date' => 'string',
        'shipment_confirm_date' => 'string',
        'package_label_create_date' => 'string',
        'shipment_freight_term' => 'string',
        'selling_party' => '\SellingPartnerApi\Model\VendorShippingV1\PartyIdentification',
        'ship_from_party' => '\SellingPartnerApi\Model\VendorShippingV1\PartyIdentification',
        'ship_to_party' => '\SellingPartnerApi\Model\VendorShippingV1\PartyIdentification',
        'shipment_measurements' => '\SellingPartnerApi\Model\VendorShippingV1\TransportShipmentMeasurements',
        'collect_freight_pickup_details' => '\SellingPartnerApi\Model\VendorShippingV1\CollectFreightPickupDetails',
        'purchase_orders' => '\SellingPartnerApi\Model\VendorShippingV1\PurchaseOrders[]',
        'import_details' => '\SellingPartnerApi\Model\VendorShippingV1\ImportDetails',
        'containers' => '\SellingPartnerApi\Model\VendorShippingV1\Containers[]',
        'transportation_details' => '\SellingPartnerApi\Model\VendorShippingV1\TransportationDetails'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'vendor_shipment_identifier' => null,
        'transaction_type' => null,
        'buyer_reference_number' => null,
        'transaction_date' => null,
        'current_shipment_status' => null,
        'currentshipment_status_date' => null,
        'shipment_status_details' => null,
        'shipment_create_date' => null,
        'shipment_confirm_date' => null,
        'package_label_create_date' => null,
        'shipment_freight_term' => null,
        'selling_party' => null,
        'ship_from_party' => null,
        'ship_to_party' => null,
        'shipment_measurements' => null,
        'collect_freight_pickup_details' => null,
        'purchase_orders' => null,
        'import_details' => null,
        'containers' => null,
        'transportation_details' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'vendor_shipment_identifier' => 'vendorShipmentIdentifier',
        'transaction_type' => 'transactionType',
        'buyer_reference_number' => 'buyerReferenceNumber',
        'transaction_date' => 'transactionDate',
        'current_shipment_status' => 'currentShipmentStatus',
        'currentshipment_status_date' => 'currentshipmentStatusDate',
        'shipment_status_details' => 'shipmentStatusDetails',
        'shipment_create_date' => 'shipmentCreateDate',
        'shipment_confirm_date' => 'shipmentConfirmDate',
        'package_label_create_date' => 'packageLabelCreateDate',
        'shipment_freight_term' => 'shipmentFreightTerm',
        'selling_party' => 'sellingParty',
        'ship_from_party' => 'shipFromParty',
        'ship_to_party' => 'shipToParty',
        'shipment_measurements' => 'shipmentMeasurements',
        'collect_freight_pickup_details' => 'collectFreightPickupDetails',
        'purchase_orders' => 'purchaseOrders',
        'import_details' => 'importDetails',
        'containers' => 'containers',
        'transportation_details' => 'transportationDetails'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'vendor_shipment_identifier' => 'setVendorShipmentIdentifier',
        'transaction_type' => 'setTransactionType',
        'buyer_reference_number' => 'setBuyerReferenceNumber',
        'transaction_date' => 'setTransactionDate',
        'current_shipment_status' => 'setCurrentShipmentStatus',
        'currentshipment_status_date' => 'setCurrentshipmentStatusDate',
        'shipment_status_details' => 'setShipmentStatusDetails',
        'shipment_create_date' => 'setShipmentCreateDate',
        'shipment_confirm_date' => 'setShipmentConfirmDate',
        'package_label_create_date' => 'setPackageLabelCreateDate',
        'shipment_freight_term' => 'setShipmentFreightTerm',
        'selling_party' => 'setSellingParty',
        'ship_from_party' => 'setShipFromParty',
        'ship_to_party' => 'setShipToParty',
        'shipment_measurements' => 'setShipmentMeasurements',
        'collect_freight_pickup_details' => 'setCollectFreightPickupDetails',
        'purchase_orders' => 'setPurchaseOrders',
        'import_details' => 'setImportDetails',
        'containers' => 'setContainers',
        'transportation_details' => 'setTransportationDetails'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'vendor_shipment_identifier' => 'getVendorShipmentIdentifier',
        'transaction_type' => 'getTransactionType',
        'buyer_reference_number' => 'getBuyerReferenceNumber',
        'transaction_date' => 'getTransactionDate',
        'current_shipment_status' => 'getCurrentShipmentStatus',
        'currentshipment_status_date' => 'getCurrentshipmentStatusDate',
        'shipment_status_details' => 'getShipmentStatusDetails',
        'shipment_create_date' => 'getShipmentCreateDate',
        'shipment_confirm_date' => 'getShipmentConfirmDate',
        'package_label_create_date' => 'getPackageLabelCreateDate',
        'shipment_freight_term' => 'getShipmentFreightTerm',
        'selling_party' => 'getSellingParty',
        'ship_from_party' => 'getShipFromParty',
        'ship_to_party' => 'getShipToParty',
        'shipment_measurements' => 'getShipmentMeasurements',
        'collect_freight_pickup_details' => 'getCollectFreightPickupDetails',
        'purchase_orders' => 'getPurchaseOrders',
        'import_details' => 'getImportDetails',
        'containers' => 'getContainers',
        'transportation_details' => 'getTransportationDetails'
    ];



    const TRANSACTION_TYPE__NEW = 'New';
    const TRANSACTION_TYPE_CANCEL = 'Cancel';
    

    const CURRENT_SHIPMENT_STATUS_CREATED = 'Created';
    const CURRENT_SHIPMENT_STATUS_TRANSPORTATION_REQUESTED = 'TransportationRequested';
    const CURRENT_SHIPMENT_STATUS_CARRIER_ASSIGNED = 'CarrierAssigned';
    const CURRENT_SHIPMENT_STATUS_SHIPPED = 'Shipped';
    

    const SHIPMENT_FREIGHT_TERM_COLLECT = 'Collect';
    const SHIPMENT_FREIGHT_TERM_PREPAID = 'Prepaid';
    
    

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTransactionTypeAllowableValues()
    {
        $baseVals = [
            self::TRANSACTION_TYPE__NEW,
            self::TRANSACTION_TYPE_CANCEL,
        ];

        // This is necessary because Amazon does not consistently capitalize their
        // enum values, so we do case-insensitive enum value validation in ObjectSerializer
        return array_map(function ($val) { return strtoupper($val); }, $baseVals);
    }
    

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCurrentShipmentStatusAllowableValues()
    {
        $baseVals = [
            self::CURRENT_SHIPMENT_STATUS_CREATED,
            self::CURRENT_SHIPMENT_STATUS_TRANSPORTATION_REQUESTED,
            self::CURRENT_SHIPMENT_STATUS_CARRIER_ASSIGNED,
            self::CURRENT_SHIPMENT_STATUS_SHIPPED,
        ];

        // This is necessary because Amazon does not consistently capitalize their
        // enum values, so we do case-insensitive enum value validation in ObjectSerializer
        return array_map(function ($val) { return strtoupper($val); }, $baseVals);
    }
    

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getShipmentFreightTermAllowableValues()
    {
        $baseVals = [
            self::SHIPMENT_FREIGHT_TERM_COLLECT,
            self::SHIPMENT_FREIGHT_TERM_PREPAID,
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
        $this->container['vendor_shipment_identifier'] = $data['vendor_shipment_identifier'] ?? null;
        $this->container['transaction_type'] = $data['transaction_type'] ?? null;
        $this->container['buyer_reference_number'] = $data['buyer_reference_number'] ?? null;
        $this->container['transaction_date'] = $data['transaction_date'] ?? null;
        $this->container['current_shipment_status'] = $data['current_shipment_status'] ?? null;
        $this->container['currentshipment_status_date'] = $data['currentshipment_status_date'] ?? null;
        $this->container['shipment_status_details'] = $data['shipment_status_details'] ?? null;
        $this->container['shipment_create_date'] = $data['shipment_create_date'] ?? null;
        $this->container['shipment_confirm_date'] = $data['shipment_confirm_date'] ?? null;
        $this->container['package_label_create_date'] = $data['package_label_create_date'] ?? null;
        $this->container['shipment_freight_term'] = $data['shipment_freight_term'] ?? null;
        $this->container['selling_party'] = $data['selling_party'] ?? null;
        $this->container['ship_from_party'] = $data['ship_from_party'] ?? null;
        $this->container['ship_to_party'] = $data['ship_to_party'] ?? null;
        $this->container['shipment_measurements'] = $data['shipment_measurements'] ?? null;
        $this->container['collect_freight_pickup_details'] = $data['collect_freight_pickup_details'] ?? null;
        $this->container['purchase_orders'] = $data['purchase_orders'] ?? null;
        $this->container['import_details'] = $data['import_details'] ?? null;
        $this->container['containers'] = $data['containers'] ?? null;
        $this->container['transportation_details'] = $data['transportation_details'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['vendor_shipment_identifier'] === null) {
            $invalidProperties[] = "'vendor_shipment_identifier' can't be null";
        }
        if ($this->container['transaction_type'] === null) {
            $invalidProperties[] = "'transaction_type' can't be null";
        }
        $allowedValues = $this->getTransactionTypeAllowableValues();
        if (
            !is_null($this->container['transaction_type']) &&
            !in_array(strtoupper($this->container['transaction_type']), $allowedValues, true)
        ) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'transaction_type', must be one of '%s'",
                $this->container['transaction_type'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['transaction_date'] === null) {
            $invalidProperties[] = "'transaction_date' can't be null";
        }
        $allowedValues = $this->getCurrentShipmentStatusAllowableValues();
        if (
            !is_null($this->container['current_shipment_status']) &&
            !in_array(strtoupper($this->container['current_shipment_status']), $allowedValues, true)
        ) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'current_shipment_status', must be one of '%s'",
                $this->container['current_shipment_status'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getShipmentFreightTermAllowableValues();
        if (
            !is_null($this->container['shipment_freight_term']) &&
            !in_array(strtoupper($this->container['shipment_freight_term']), $allowedValues, true)
        ) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'shipment_freight_term', must be one of '%s'",
                $this->container['shipment_freight_term'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['selling_party'] === null) {
            $invalidProperties[] = "'selling_party' can't be null";
        }
        if ($this->container['ship_from_party'] === null) {
            $invalidProperties[] = "'ship_from_party' can't be null";
        }
        if ($this->container['ship_to_party'] === null) {
            $invalidProperties[] = "'ship_to_party' can't be null";
        }
        return $invalidProperties;
    }


    /**
     * Gets vendor_shipment_identifier
     *
     * @return string
     */
    public function getVendorShipmentIdentifier()
    {
        return $this->container['vendor_shipment_identifier'];
    }

    /**
     * Sets vendor_shipment_identifier
     *
     * @param string $vendor_shipment_identifier Unique Transportation ID created by Vendor (Should not be used over the last 365 days).
     *
     * @return self
     */
    public function setVendorShipmentIdentifier($vendor_shipment_identifier)
    {
        $this->container['vendor_shipment_identifier'] = $vendor_shipment_identifier;

        return $this;
    }
    /**
     * Gets transaction_type
     *
     * @return string
     */
    public function getTransactionType()
    {
        return $this->container['transaction_type'];
    }

    /**
     * Sets transaction_type
     *
     * @param string $transaction_type Indicates the type of  transportation request such as (New,Cancel,Confirm and PackageLabelRequest). Each transactiontype has a unique set of operation and there are corresponding details to be populated for each operation.
     *
     * @return self
     */
    public function setTransactionType($transaction_type)
    {
        $allowedValues = $this->getTransactionTypeAllowableValues();
        if (!in_array(strtoupper($transaction_type), $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'transaction_type', must be one of '%s'",
                    $transaction_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['transaction_type'] = $transaction_type;

        return $this;
    }
    /**
     * Gets buyer_reference_number
     *
     * @return string|null
     */
    public function getBuyerReferenceNumber()
    {
        return $this->container['buyer_reference_number'];
    }

    /**
     * Sets buyer_reference_number
     *
     * @param string|null $buyer_reference_number The buyer Reference Number is a unique identifier generated by buyer for all Collect/WePay shipments when you submit a transportation request. This field is mandatory for Collect/WePay shipments.
     *
     * @return self
     */
    public function setBuyerReferenceNumber($buyer_reference_number)
    {
        $this->container['buyer_reference_number'] = $buyer_reference_number;

        return $this;
    }
    /**
     * Gets transaction_date
     *
     * @return string
     */
    public function getTransactionDate()
    {
        return $this->container['transaction_date'];
    }

    /**
     * Sets transaction_date
     *
     * @param string $transaction_date Date on which the transportation request was submitted.
     *
     * @return self
     */
    public function setTransactionDate($transaction_date)
    {
        $this->container['transaction_date'] = $transaction_date;

        return $this;
    }
    /**
     * Gets current_shipment_status
     *
     * @return string|null
     */
    public function getCurrentShipmentStatus()
    {
        return $this->container['current_shipment_status'];
    }

    /**
     * Sets current_shipment_status
     *
     * @param string|null $current_shipment_status Indicates the current shipment status.
     *
     * @return self
     */
    public function setCurrentShipmentStatus($current_shipment_status)
    {
        $allowedValues = $this->getCurrentShipmentStatusAllowableValues();
        if (!is_null($current_shipment_status) &&!in_array(strtoupper($current_shipment_status), $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'current_shipment_status', must be one of '%s'",
                    $current_shipment_status,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['current_shipment_status'] = $current_shipment_status;

        return $this;
    }
    /**
     * Gets currentshipment_status_date
     *
     * @return string|null
     */
    public function getCurrentshipmentStatusDate()
    {
        return $this->container['currentshipment_status_date'];
    }

    /**
     * Sets currentshipment_status_date
     *
     * @param string|null $currentshipment_status_date Date and time when the last status was updated.
     *
     * @return self
     */
    public function setCurrentshipmentStatusDate($currentshipment_status_date)
    {
        $this->container['currentshipment_status_date'] = $currentshipment_status_date;

        return $this;
    }
    /**
     * Gets shipment_status_details
     *
     * @return \SellingPartnerApi\Model\VendorShippingV1\ShipmentStatusDetails[]|null
     */
    public function getShipmentStatusDetails()
    {
        return $this->container['shipment_status_details'];
    }

    /**
     * Sets shipment_status_details
     *
     * @param \SellingPartnerApi\Model\VendorShippingV1\ShipmentStatusDetails[]|null $shipment_status_details Indicates the list of current shipment status details and when the last update was received from carrier this is available on shipment Details response.
     *
     * @return self
     */
    public function setShipmentStatusDetails($shipment_status_details)
    {
        $this->container['shipment_status_details'] = $shipment_status_details;

        return $this;
    }
    /**
     * Gets shipment_create_date
     *
     * @return string|null
     */
    public function getShipmentCreateDate()
    {
        return $this->container['shipment_create_date'];
    }

    /**
     * Sets shipment_create_date
     *
     * @param string|null $shipment_create_date The date and time of the shipment request created by vendor.
     *
     * @return self
     */
    public function setShipmentCreateDate($shipment_create_date)
    {
        $this->container['shipment_create_date'] = $shipment_create_date;

        return $this;
    }
    /**
     * Gets shipment_confirm_date
     *
     * @return string|null
     */
    public function getShipmentConfirmDate()
    {
        return $this->container['shipment_confirm_date'];
    }

    /**
     * Sets shipment_confirm_date
     *
     * @param string|null $shipment_confirm_date The date and time of the departure of the shipment from the vendor's location. Vendors are requested to send ASNs within 30 minutes of departure from their warehouse/distribution center or at least 6 hours prior to the appointment time at the Buyer destination warehouse, whichever is sooner. Shipped date mentioned in the shipment confirmation should not be in the future.
     *
     * @return self
     */
    public function setShipmentConfirmDate($shipment_confirm_date)
    {
        $this->container['shipment_confirm_date'] = $shipment_confirm_date;

        return $this;
    }
    /**
     * Gets package_label_create_date
     *
     * @return string|null
     */
    public function getPackageLabelCreateDate()
    {
        return $this->container['package_label_create_date'];
    }

    /**
     * Sets package_label_create_date
     *
     * @param string|null $package_label_create_date The date and time of the package label created for the shipment by buyer.
     *
     * @return self
     */
    public function setPackageLabelCreateDate($package_label_create_date)
    {
        $this->container['package_label_create_date'] = $package_label_create_date;

        return $this;
    }
    /**
     * Gets shipment_freight_term
     *
     * @return string|null
     */
    public function getShipmentFreightTerm()
    {
        return $this->container['shipment_freight_term'];
    }

    /**
     * Sets shipment_freight_term
     *
     * @param string|null $shipment_freight_term Indicates if this transportation request is WePay/Collect or TheyPay/Prepaid. This is a mandatory information.
     *
     * @return self
     */
    public function setShipmentFreightTerm($shipment_freight_term)
    {
        $allowedValues = $this->getShipmentFreightTermAllowableValues();
        if (!is_null($shipment_freight_term) &&!in_array(strtoupper($shipment_freight_term), $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'shipment_freight_term', must be one of '%s'",
                    $shipment_freight_term,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['shipment_freight_term'] = $shipment_freight_term;

        return $this;
    }
    /**
     * Gets selling_party
     *
     * @return \SellingPartnerApi\Model\VendorShippingV1\PartyIdentification
     */
    public function getSellingParty()
    {
        return $this->container['selling_party'];
    }

    /**
     * Sets selling_party
     *
     * @param \SellingPartnerApi\Model\VendorShippingV1\PartyIdentification $selling_party selling_party
     *
     * @return self
     */
    public function setSellingParty($selling_party)
    {
        $this->container['selling_party'] = $selling_party;

        return $this;
    }
    /**
     * Gets ship_from_party
     *
     * @return \SellingPartnerApi\Model\VendorShippingV1\PartyIdentification
     */
    public function getShipFromParty()
    {
        return $this->container['ship_from_party'];
    }

    /**
     * Sets ship_from_party
     *
     * @param \SellingPartnerApi\Model\VendorShippingV1\PartyIdentification $ship_from_party ship_from_party
     *
     * @return self
     */
    public function setShipFromParty($ship_from_party)
    {
        $this->container['ship_from_party'] = $ship_from_party;

        return $this;
    }
    /**
     * Gets ship_to_party
     *
     * @return \SellingPartnerApi\Model\VendorShippingV1\PartyIdentification
     */
    public function getShipToParty()
    {
        return $this->container['ship_to_party'];
    }

    /**
     * Sets ship_to_party
     *
     * @param \SellingPartnerApi\Model\VendorShippingV1\PartyIdentification $ship_to_party ship_to_party
     *
     * @return self
     */
    public function setShipToParty($ship_to_party)
    {
        $this->container['ship_to_party'] = $ship_to_party;

        return $this;
    }
    /**
     * Gets shipment_measurements
     *
     * @return \SellingPartnerApi\Model\VendorShippingV1\TransportShipmentMeasurements|null
     */
    public function getShipmentMeasurements()
    {
        return $this->container['shipment_measurements'];
    }

    /**
     * Sets shipment_measurements
     *
     * @param \SellingPartnerApi\Model\VendorShippingV1\TransportShipmentMeasurements|null $shipment_measurements shipment_measurements
     *
     * @return self
     */
    public function setShipmentMeasurements($shipment_measurements)
    {
        $this->container['shipment_measurements'] = $shipment_measurements;

        return $this;
    }
    /**
     * Gets collect_freight_pickup_details
     *
     * @return \SellingPartnerApi\Model\VendorShippingV1\CollectFreightPickupDetails|null
     */
    public function getCollectFreightPickupDetails()
    {
        return $this->container['collect_freight_pickup_details'];
    }

    /**
     * Sets collect_freight_pickup_details
     *
     * @param \SellingPartnerApi\Model\VendorShippingV1\CollectFreightPickupDetails|null $collect_freight_pickup_details collect_freight_pickup_details
     *
     * @return self
     */
    public function setCollectFreightPickupDetails($collect_freight_pickup_details)
    {
        $this->container['collect_freight_pickup_details'] = $collect_freight_pickup_details;

        return $this;
    }
    /**
     * Gets purchase_orders
     *
     * @return \SellingPartnerApi\Model\VendorShippingV1\PurchaseOrders[]|null
     */
    public function getPurchaseOrders()
    {
        return $this->container['purchase_orders'];
    }

    /**
     * Sets purchase_orders
     *
     * @param \SellingPartnerApi\Model\VendorShippingV1\PurchaseOrders[]|null $purchase_orders Indicates the purchase orders involved for the transportation request. This group is an array create 1 for each PO and list their corresponding items. This information is used for deciding the route,truck allocation and storage efficiently. This is a mandatory information for Buyer performing transportation from vendor warehouse (WePay/Collect)
     *
     * @return self
     */
    public function setPurchaseOrders($purchase_orders)
    {
        $this->container['purchase_orders'] = $purchase_orders;

        return $this;
    }
    /**
     * Gets import_details
     *
     * @return \SellingPartnerApi\Model\VendorShippingV1\ImportDetails|null
     */
    public function getImportDetails()
    {
        return $this->container['import_details'];
    }

    /**
     * Sets import_details
     *
     * @param \SellingPartnerApi\Model\VendorShippingV1\ImportDetails|null $import_details import_details
     *
     * @return self
     */
    public function setImportDetails($import_details)
    {
        $this->container['import_details'] = $import_details;

        return $this;
    }
    /**
     * Gets containers
     *
     * @return \SellingPartnerApi\Model\VendorShippingV1\Containers[]|null
     */
    public function getContainers()
    {
        return $this->container['containers'];
    }

    /**
     * Sets containers
     *
     * @param \SellingPartnerApi\Model\VendorShippingV1\Containers[]|null $containers A list of the items in this transportation and their associated inner container details. If any of the item detail fields are common at a carton or a pallet level, provide them at the corresponding carton or pallet level.
     *
     * @return self
     */
    public function setContainers($containers)
    {
        $this->container['containers'] = $containers;

        return $this;
    }
    /**
     * Gets transportation_details
     *
     * @return \SellingPartnerApi\Model\VendorShippingV1\TransportationDetails|null
     */
    public function getTransportationDetails()
    {
        return $this->container['transportation_details'];
    }

    /**
     * Sets transportation_details
     *
     * @param \SellingPartnerApi\Model\VendorShippingV1\TransportationDetails|null $transportation_details transportation_details
     *
     * @return self
     */
    public function setTransportationDetails($transportation_details)
    {
        $this->container['transportation_details'] = $transportation_details;

        return $this;
    }
}


