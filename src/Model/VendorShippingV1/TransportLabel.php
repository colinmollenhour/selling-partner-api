<?php declare(strict_types=1);
/**
 * TransportLabel
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
 * TransportLabel Class Doc Comment
 *
 * @category Class
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class TransportLabel extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'transportLabel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'label_create_date_time' => 'string',
        'shipment_information' => '\SellingPartnerApi\Model\VendorShippingV1\ShipmentInformation',
        'label_data' => '\SellingPartnerApi\Model\VendorShippingV1\LabelData[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'label_create_date_time' => null,
        'shipment_information' => null,
        'label_data' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'label_create_date_time' => 'labelCreateDateTime',
        'shipment_information' => 'shipmentInformation',
        'label_data' => 'labelData'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'label_create_date_time' => 'setLabelCreateDateTime',
        'shipment_information' => 'setShipmentInformation',
        'label_data' => 'setLabelData'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'label_create_date_time' => 'getLabelCreateDateTime',
        'shipment_information' => 'getShipmentInformation',
        'label_data' => 'getLabelData'
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
        $this->container['label_create_date_time'] = $data['label_create_date_time'] ?? null;
        $this->container['shipment_information'] = $data['shipment_information'] ?? null;
        $this->container['label_data'] = $data['label_data'] ?? null;
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
     * Gets label_create_date_time
     *
     * @return string|null
     */
    public function getLabelCreateDateTime()
    {
        return $this->container['label_create_date_time'];
    }

    /**
     * Sets label_create_date_time
     *
     * @param string|null $label_create_date_time Date on which label is created.
     *
     * @return self
     */
    public function setLabelCreateDateTime($label_create_date_time)
    {
        $this->container['label_create_date_time'] = $label_create_date_time;

        return $this;
    }
    /**
     * Gets shipment_information
     *
     * @return \SellingPartnerApi\Model\VendorShippingV1\ShipmentInformation|null
     */
    public function getShipmentInformation()
    {
        return $this->container['shipment_information'];
    }

    /**
     * Sets shipment_information
     *
     * @param \SellingPartnerApi\Model\VendorShippingV1\ShipmentInformation|null $shipment_information shipment_information
     *
     * @return self
     */
    public function setShipmentInformation($shipment_information)
    {
        $this->container['shipment_information'] = $shipment_information;

        return $this;
    }
    /**
     * Gets label_data
     *
     * @return \SellingPartnerApi\Model\VendorShippingV1\LabelData[]|null
     */
    public function getLabelData()
    {
        return $this->container['label_data'];
    }

    /**
     * Sets label_data
     *
     * @param \SellingPartnerApi\Model\VendorShippingV1\LabelData[]|null $label_data Indicates the label data,format and type associated .
     *
     * @return self
     */
    public function setLabelData($label_data)
    {
        $this->container['label_data'] = $label_data;

        return $this;
    }
}


