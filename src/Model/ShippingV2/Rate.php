<?php declare(strict_types=1);
/**
 * Rate
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Amazon Shipping API
 *
 * The Amazon Shipping API is designed to support outbound shipping use cases both for orders originating on Amazon-owned marketplaces as well as external channels/marketplaces. With these APIs, you can request shipping rates, create shipments, cancel shipments, and track shipments.
 *
 * The version of the OpenAPI document: v2
 * Contact: swa-api-core@amazon.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SellingPartnerApi\Model\ShippingV2;
use ArrayAccess;
use SellingPartnerApi\Model\BaseModel;
use SellingPartnerApi\Model\ModelInterface;
use SellingPartnerApi\ObjectSerializer;

/**
 * Rate Class Doc Comment
 *
 * @category Class
 * @description The details of a shipping service offering.
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class Rate extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Rate';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'rate_id' => 'string',
        'carrier_id' => 'string',
        'carrier_name' => 'string',
        'service_id' => 'string',
        'service_name' => 'string',
        'billed_weight' => '\SellingPartnerApi\Model\ShippingV2\Weight',
        'total_charge' => '\SellingPartnerApi\Model\ShippingV2\Currency',
        'promise' => '\SellingPartnerApi\Model\ShippingV2\Promise',
        'supported_document_specifications' => '\SellingPartnerApi\Model\ShippingV2\SupportedDocumentSpecification[]',
        'available_value_added_service_groups' => '\SellingPartnerApi\Model\ShippingV2\AvailableValueAddedServiceGroup[]',
        'requires_additional_inputs' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'rate_id' => null,
        'carrier_id' => null,
        'carrier_name' => null,
        'service_id' => null,
        'service_name' => null,
        'billed_weight' => null,
        'total_charge' => null,
        'promise' => null,
        'supported_document_specifications' => null,
        'available_value_added_service_groups' => null,
        'requires_additional_inputs' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'rate_id' => 'rateId',
        'carrier_id' => 'carrierId',
        'carrier_name' => 'carrierName',
        'service_id' => 'serviceId',
        'service_name' => 'serviceName',
        'billed_weight' => 'billedWeight',
        'total_charge' => 'totalCharge',
        'promise' => 'promise',
        'supported_document_specifications' => 'supportedDocumentSpecifications',
        'available_value_added_service_groups' => 'availableValueAddedServiceGroups',
        'requires_additional_inputs' => 'requiresAdditionalInputs'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'rate_id' => 'setRateId',
        'carrier_id' => 'setCarrierId',
        'carrier_name' => 'setCarrierName',
        'service_id' => 'setServiceId',
        'service_name' => 'setServiceName',
        'billed_weight' => 'setBilledWeight',
        'total_charge' => 'setTotalCharge',
        'promise' => 'setPromise',
        'supported_document_specifications' => 'setSupportedDocumentSpecifications',
        'available_value_added_service_groups' => 'setAvailableValueAddedServiceGroups',
        'requires_additional_inputs' => 'setRequiresAdditionalInputs'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'rate_id' => 'getRateId',
        'carrier_id' => 'getCarrierId',
        'carrier_name' => 'getCarrierName',
        'service_id' => 'getServiceId',
        'service_name' => 'getServiceName',
        'billed_weight' => 'getBilledWeight',
        'total_charge' => 'getTotalCharge',
        'promise' => 'getPromise',
        'supported_document_specifications' => 'getSupportedDocumentSpecifications',
        'available_value_added_service_groups' => 'getAvailableValueAddedServiceGroups',
        'requires_additional_inputs' => 'getRequiresAdditionalInputs'
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
        $this->container['rate_id'] = $data['rate_id'] ?? null;
        $this->container['carrier_id'] = $data['carrier_id'] ?? null;
        $this->container['carrier_name'] = $data['carrier_name'] ?? null;
        $this->container['service_id'] = $data['service_id'] ?? null;
        $this->container['service_name'] = $data['service_name'] ?? null;
        $this->container['billed_weight'] = $data['billed_weight'] ?? null;
        $this->container['total_charge'] = $data['total_charge'] ?? null;
        $this->container['promise'] = $data['promise'] ?? null;
        $this->container['supported_document_specifications'] = $data['supported_document_specifications'] ?? null;
        $this->container['available_value_added_service_groups'] = $data['available_value_added_service_groups'] ?? null;
        $this->container['requires_additional_inputs'] = $data['requires_additional_inputs'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['rate_id'] === null) {
            $invalidProperties[] = "'rate_id' can't be null";
        }
        if ($this->container['carrier_id'] === null) {
            $invalidProperties[] = "'carrier_id' can't be null";
        }
        if ($this->container['carrier_name'] === null) {
            $invalidProperties[] = "'carrier_name' can't be null";
        }
        if ($this->container['service_id'] === null) {
            $invalidProperties[] = "'service_id' can't be null";
        }
        if ($this->container['service_name'] === null) {
            $invalidProperties[] = "'service_name' can't be null";
        }
        if ($this->container['total_charge'] === null) {
            $invalidProperties[] = "'total_charge' can't be null";
        }
        if ($this->container['promise'] === null) {
            $invalidProperties[] = "'promise' can't be null";
        }
        if ($this->container['supported_document_specifications'] === null) {
            $invalidProperties[] = "'supported_document_specifications' can't be null";
        }
        if ($this->container['requires_additional_inputs'] === null) {
            $invalidProperties[] = "'requires_additional_inputs' can't be null";
        }
        return $invalidProperties;
    }


    /**
     * Gets rate_id
     *
     * @return string
     */
    public function getRateId()
    {
        return $this->container['rate_id'];
    }

    /**
     * Sets rate_id
     *
     * @param string $rate_id An identifier for the rate (shipment offering) provided by a shipping service provider.
     *
     * @return self
     */
    public function setRateId($rate_id)
    {
        $this->container['rate_id'] = $rate_id;

        return $this;
    }
    /**
     * Gets carrier_id
     *
     * @return string
     */
    public function getCarrierId()
    {
        return $this->container['carrier_id'];
    }

    /**
     * Sets carrier_id
     *
     * @param string $carrier_id The carrier identifier for the offering, provided by the carrier.
     *
     * @return self
     */
    public function setCarrierId($carrier_id)
    {
        $this->container['carrier_id'] = $carrier_id;

        return $this;
    }
    /**
     * Gets carrier_name
     *
     * @return string
     */
    public function getCarrierName()
    {
        return $this->container['carrier_name'];
    }

    /**
     * Sets carrier_name
     *
     * @param string $carrier_name The carrier name for the offering.
     *
     * @return self
     */
    public function setCarrierName($carrier_name)
    {
        $this->container['carrier_name'] = $carrier_name;

        return $this;
    }
    /**
     * Gets service_id
     *
     * @return string
     */
    public function getServiceId()
    {
        return $this->container['service_id'];
    }

    /**
     * Sets service_id
     *
     * @param string $service_id An identifier for the shipping service.
     *
     * @return self
     */
    public function setServiceId($service_id)
    {
        $this->container['service_id'] = $service_id;

        return $this;
    }
    /**
     * Gets service_name
     *
     * @return string
     */
    public function getServiceName()
    {
        return $this->container['service_name'];
    }

    /**
     * Sets service_name
     *
     * @param string $service_name The name of the shipping service.
     *
     * @return self
     */
    public function setServiceName($service_name)
    {
        $this->container['service_name'] = $service_name;

        return $this;
    }
    /**
     * Gets billed_weight
     *
     * @return \SellingPartnerApi\Model\ShippingV2\Weight|null
     */
    public function getBilledWeight()
    {
        return $this->container['billed_weight'];
    }

    /**
     * Sets billed_weight
     *
     * @param \SellingPartnerApi\Model\ShippingV2\Weight|null $billed_weight billed_weight
     *
     * @return self
     */
    public function setBilledWeight($billed_weight)
    {
        $this->container['billed_weight'] = $billed_weight;

        return $this;
    }
    /**
     * Gets total_charge
     *
     * @return \SellingPartnerApi\Model\ShippingV2\Currency
     */
    public function getTotalCharge()
    {
        return $this->container['total_charge'];
    }

    /**
     * Sets total_charge
     *
     * @param \SellingPartnerApi\Model\ShippingV2\Currency $total_charge total_charge
     *
     * @return self
     */
    public function setTotalCharge($total_charge)
    {
        $this->container['total_charge'] = $total_charge;

        return $this;
    }
    /**
     * Gets promise
     *
     * @return \SellingPartnerApi\Model\ShippingV2\Promise
     */
    public function getPromise()
    {
        return $this->container['promise'];
    }

    /**
     * Sets promise
     *
     * @param \SellingPartnerApi\Model\ShippingV2\Promise $promise promise
     *
     * @return self
     */
    public function setPromise($promise)
    {
        $this->container['promise'] = $promise;

        return $this;
    }
    /**
     * Gets supported_document_specifications
     *
     * @return \SellingPartnerApi\Model\ShippingV2\SupportedDocumentSpecification[]
     */
    public function getSupportedDocumentSpecifications()
    {
        return $this->container['supported_document_specifications'];
    }

    /**
     * Sets supported_document_specifications
     *
     * @param \SellingPartnerApi\Model\ShippingV2\SupportedDocumentSpecification[] $supported_document_specifications A list of the document specifications supported for a shipment service offering.
     *
     * @return self
     */
    public function setSupportedDocumentSpecifications($supported_document_specifications)
    {
        $this->container['supported_document_specifications'] = $supported_document_specifications;

        return $this;
    }
    /**
     * Gets available_value_added_service_groups
     *
     * @return \SellingPartnerApi\Model\ShippingV2\AvailableValueAddedServiceGroup[]|null
     */
    public function getAvailableValueAddedServiceGroups()
    {
        return $this->container['available_value_added_service_groups'];
    }

    /**
     * Sets available_value_added_service_groups
     *
     * @param \SellingPartnerApi\Model\ShippingV2\AvailableValueAddedServiceGroup[]|null $available_value_added_service_groups A list of value-added services available for a shipping service offering.
     *
     * @return self
     */
    public function setAvailableValueAddedServiceGroups($available_value_added_service_groups)
    {
        $this->container['available_value_added_service_groups'] = $available_value_added_service_groups;

        return $this;
    }
    /**
     * Gets requires_additional_inputs
     *
     * @return bool
     */
    public function getRequiresAdditionalInputs()
    {
        return $this->container['requires_additional_inputs'];
    }

    /**
     * Sets requires_additional_inputs
     *
     * @param bool $requires_additional_inputs When true, indicates that additional inputs are required to purchase this shipment service. You must then call the getAdditionalInputs operation to return the JSON schema to use when providing the additional inputs to the purchaseShipment operation.
     *
     * @return self
     */
    public function setRequiresAdditionalInputs($requires_additional_inputs)
    {
        $this->container['requires_additional_inputs'] = $requires_additional_inputs;

        return $this;
    }
}


