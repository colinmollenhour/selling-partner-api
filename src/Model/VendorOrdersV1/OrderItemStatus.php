<?php declare(strict_types=1);
/**
 * OrderItemStatus
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for Retail Procurement Orders
 *
 * The Selling Partner API for Retail Procurement Orders provides programmatic access to vendor orders data.
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

namespace SellingPartnerApi\Model\VendorOrdersV1;
use ArrayAccess;
use SellingPartnerApi\Model\BaseModel;
use SellingPartnerApi\Model\ModelInterface;
use SellingPartnerApi\ObjectSerializer;

/**
 * OrderItemStatus Class Doc Comment
 *
 * @category Class
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class OrderItemStatus extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'OrderItemStatus';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'item_sequence_number' => 'string',
        'buyer_product_identifier' => 'string',
        'vendor_product_identifier' => 'string',
        'net_cost' => '\SellingPartnerApi\Model\VendorOrdersV1\Money',
        'list_price' => '\SellingPartnerApi\Model\VendorOrdersV1\Money',
        'ordered_quantity' => '\SellingPartnerApi\Model\VendorOrdersV1\OrderItemStatusOrderedQuantity',
        'acknowledgement_status' => '\SellingPartnerApi\Model\VendorOrdersV1\OrderItemStatusAcknowledgementStatus',
        'receiving_status' => '\SellingPartnerApi\Model\VendorOrdersV1\OrderItemStatusReceivingStatus'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'item_sequence_number' => null,
        'buyer_product_identifier' => null,
        'vendor_product_identifier' => null,
        'net_cost' => null,
        'list_price' => null,
        'ordered_quantity' => null,
        'acknowledgement_status' => null,
        'receiving_status' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'item_sequence_number' => 'itemSequenceNumber',
        'buyer_product_identifier' => 'buyerProductIdentifier',
        'vendor_product_identifier' => 'vendorProductIdentifier',
        'net_cost' => 'netCost',
        'list_price' => 'listPrice',
        'ordered_quantity' => 'orderedQuantity',
        'acknowledgement_status' => 'acknowledgementStatus',
        'receiving_status' => 'receivingStatus'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'item_sequence_number' => 'setItemSequenceNumber',
        'buyer_product_identifier' => 'setBuyerProductIdentifier',
        'vendor_product_identifier' => 'setVendorProductIdentifier',
        'net_cost' => 'setNetCost',
        'list_price' => 'setListPrice',
        'ordered_quantity' => 'setOrderedQuantity',
        'acknowledgement_status' => 'setAcknowledgementStatus',
        'receiving_status' => 'setReceivingStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'item_sequence_number' => 'getItemSequenceNumber',
        'buyer_product_identifier' => 'getBuyerProductIdentifier',
        'vendor_product_identifier' => 'getVendorProductIdentifier',
        'net_cost' => 'getNetCost',
        'list_price' => 'getListPrice',
        'ordered_quantity' => 'getOrderedQuantity',
        'acknowledgement_status' => 'getAcknowledgementStatus',
        'receiving_status' => 'getReceivingStatus'
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
        $this->container['item_sequence_number'] = $data['item_sequence_number'] ?? null;
        $this->container['buyer_product_identifier'] = $data['buyer_product_identifier'] ?? null;
        $this->container['vendor_product_identifier'] = $data['vendor_product_identifier'] ?? null;
        $this->container['net_cost'] = $data['net_cost'] ?? null;
        $this->container['list_price'] = $data['list_price'] ?? null;
        $this->container['ordered_quantity'] = $data['ordered_quantity'] ?? null;
        $this->container['acknowledgement_status'] = $data['acknowledgement_status'] ?? null;
        $this->container['receiving_status'] = $data['receiving_status'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['item_sequence_number'] === null) {
            $invalidProperties[] = "'item_sequence_number' can't be null";
        }
        return $invalidProperties;
    }


    /**
     * Gets item_sequence_number
     *
     * @return string
     */
    public function getItemSequenceNumber()
    {
        return $this->container['item_sequence_number'];
    }

    /**
     * Sets item_sequence_number
     *
     * @param string $item_sequence_number Numbering of the item on the purchase order. The first item will be 1, the second 2, and so on.
     *
     * @return self
     */
    public function setItemSequenceNumber($item_sequence_number)
    {
        $this->container['item_sequence_number'] = $item_sequence_number;

        return $this;
    }
    /**
     * Gets buyer_product_identifier
     *
     * @return string|null
     */
    public function getBuyerProductIdentifier()
    {
        return $this->container['buyer_product_identifier'];
    }

    /**
     * Sets buyer_product_identifier
     *
     * @param string|null $buyer_product_identifier Buyer's Standard Identification Number (ASIN) of an item.
     *
     * @return self
     */
    public function setBuyerProductIdentifier($buyer_product_identifier)
    {
        $this->container['buyer_product_identifier'] = $buyer_product_identifier;

        return $this;
    }
    /**
     * Gets vendor_product_identifier
     *
     * @return string|null
     */
    public function getVendorProductIdentifier()
    {
        return $this->container['vendor_product_identifier'];
    }

    /**
     * Sets vendor_product_identifier
     *
     * @param string|null $vendor_product_identifier The vendor selected product identification of the item.
     *
     * @return self
     */
    public function setVendorProductIdentifier($vendor_product_identifier)
    {
        $this->container['vendor_product_identifier'] = $vendor_product_identifier;

        return $this;
    }
    /**
     * Gets net_cost
     *
     * @return \SellingPartnerApi\Model\VendorOrdersV1\Money|null
     */
    public function getNetCost()
    {
        return $this->container['net_cost'];
    }

    /**
     * Sets net_cost
     *
     * @param \SellingPartnerApi\Model\VendorOrdersV1\Money|null $net_cost net_cost
     *
     * @return self
     */
    public function setNetCost($net_cost)
    {
        $this->container['net_cost'] = $net_cost;

        return $this;
    }
    /**
     * Gets list_price
     *
     * @return \SellingPartnerApi\Model\VendorOrdersV1\Money|null
     */
    public function getListPrice()
    {
        return $this->container['list_price'];
    }

    /**
     * Sets list_price
     *
     * @param \SellingPartnerApi\Model\VendorOrdersV1\Money|null $list_price list_price
     *
     * @return self
     */
    public function setListPrice($list_price)
    {
        $this->container['list_price'] = $list_price;

        return $this;
    }
    /**
     * Gets ordered_quantity
     *
     * @return \SellingPartnerApi\Model\VendorOrdersV1\OrderItemStatusOrderedQuantity|null
     */
    public function getOrderedQuantity()
    {
        return $this->container['ordered_quantity'];
    }

    /**
     * Sets ordered_quantity
     *
     * @param \SellingPartnerApi\Model\VendorOrdersV1\OrderItemStatusOrderedQuantity|null $ordered_quantity ordered_quantity
     *
     * @return self
     */
    public function setOrderedQuantity($ordered_quantity)
    {
        $this->container['ordered_quantity'] = $ordered_quantity;

        return $this;
    }
    /**
     * Gets acknowledgement_status
     *
     * @return \SellingPartnerApi\Model\VendorOrdersV1\OrderItemStatusAcknowledgementStatus|null
     */
    public function getAcknowledgementStatus()
    {
        return $this->container['acknowledgement_status'];
    }

    /**
     * Sets acknowledgement_status
     *
     * @param \SellingPartnerApi\Model\VendorOrdersV1\OrderItemStatusAcknowledgementStatus|null $acknowledgement_status acknowledgement_status
     *
     * @return self
     */
    public function setAcknowledgementStatus($acknowledgement_status)
    {
        $this->container['acknowledgement_status'] = $acknowledgement_status;

        return $this;
    }
    /**
     * Gets receiving_status
     *
     * @return \SellingPartnerApi\Model\VendorOrdersV1\OrderItemStatusReceivingStatus|null
     */
    public function getReceivingStatus()
    {
        return $this->container['receiving_status'];
    }

    /**
     * Sets receiving_status
     *
     * @param \SellingPartnerApi\Model\VendorOrdersV1\OrderItemStatusReceivingStatus|null $receiving_status receiving_status
     *
     * @return self
     */
    public function setReceivingStatus($receiving_status)
    {
        $this->container['receiving_status'] = $receiving_status;

        return $this;
    }
}


