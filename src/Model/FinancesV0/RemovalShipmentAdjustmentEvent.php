<?php declare(strict_types=1);
/**
 * RemovalShipmentAdjustmentEvent
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for Finances
 *
 * The Selling Partner API for Finances helps you obtain financial information relevant to a seller's business. You can obtain financial events for a given order, financial event group, or date range without having to wait until a statement period closes. You can also obtain financial event groups for a given date range.
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

namespace SellingPartnerApi\Model\FinancesV0;
use ArrayAccess;
use SellingPartnerApi\Model\BaseModel;
use SellingPartnerApi\Model\ModelInterface;
use SellingPartnerApi\ObjectSerializer;

/**
 * RemovalShipmentAdjustmentEvent Class Doc Comment
 *
 * @category Class
 * @description A financial adjustment event for FBA liquidated inventory. A positive value indicates money owed to Amazon by the buyer (for example, when the charge was incorrectly calculated as less than it should be). A negative value indicates a full or partial refund owed to the buyer (for example, when the buyer receives damaged items or fewer items than ordered).
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class RemovalShipmentAdjustmentEvent extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'RemovalShipmentAdjustmentEvent';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'posted_date' => 'string',
        'adjustment_event_id' => 'string',
        'merchant_order_id' => 'string',
        'order_id' => 'string',
        'transaction_type' => 'string',
        'removal_shipment_item_adjustment_list' => '\SellingPartnerApi\Model\FinancesV0\RemovalShipmentItemAdjustment[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'posted_date' => null,
        'adjustment_event_id' => null,
        'merchant_order_id' => null,
        'order_id' => null,
        'transaction_type' => null,
        'removal_shipment_item_adjustment_list' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'posted_date' => 'PostedDate',
        'adjustment_event_id' => 'AdjustmentEventId',
        'merchant_order_id' => 'MerchantOrderId',
        'order_id' => 'OrderId',
        'transaction_type' => 'TransactionType',
        'removal_shipment_item_adjustment_list' => 'RemovalShipmentItemAdjustmentList'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'posted_date' => 'setPostedDate',
        'adjustment_event_id' => 'setAdjustmentEventId',
        'merchant_order_id' => 'setMerchantOrderId',
        'order_id' => 'setOrderId',
        'transaction_type' => 'setTransactionType',
        'removal_shipment_item_adjustment_list' => 'setRemovalShipmentItemAdjustmentList'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'posted_date' => 'getPostedDate',
        'adjustment_event_id' => 'getAdjustmentEventId',
        'merchant_order_id' => 'getMerchantOrderId',
        'order_id' => 'getOrderId',
        'transaction_type' => 'getTransactionType',
        'removal_shipment_item_adjustment_list' => 'getRemovalShipmentItemAdjustmentList'
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
        $this->container['posted_date'] = $data['posted_date'] ?? null;
        $this->container['adjustment_event_id'] = $data['adjustment_event_id'] ?? null;
        $this->container['merchant_order_id'] = $data['merchant_order_id'] ?? null;
        $this->container['order_id'] = $data['order_id'] ?? null;
        $this->container['transaction_type'] = $data['transaction_type'] ?? null;
        $this->container['removal_shipment_item_adjustment_list'] = $data['removal_shipment_item_adjustment_list'] ?? null;
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
     * Gets posted_date
     *
     * @return string|null
     */
    public function getPostedDate()
    {
        return $this->container['posted_date'];
    }

    /**
     * Sets posted_date
     *
     * @param string|null $posted_date A date string in ISO 8601 format.
     *
     * @return self
     */
    public function setPostedDate($posted_date)
    {
        $this->container['posted_date'] = $posted_date;

        return $this;
    }
    /**
     * Gets adjustment_event_id
     *
     * @return string|null
     */
    public function getAdjustmentEventId()
    {
        return $this->container['adjustment_event_id'];
    }

    /**
     * Sets adjustment_event_id
     *
     * @param string|null $adjustment_event_id The unique identifier for the adjustment event.
     *
     * @return self
     */
    public function setAdjustmentEventId($adjustment_event_id)
    {
        $this->container['adjustment_event_id'] = $adjustment_event_id;

        return $this;
    }
    /**
     * Gets merchant_order_id
     *
     * @return string|null
     */
    public function getMerchantOrderId()
    {
        return $this->container['merchant_order_id'];
    }

    /**
     * Sets merchant_order_id
     *
     * @param string|null $merchant_order_id The merchant removal orderId.
     *
     * @return self
     */
    public function setMerchantOrderId($merchant_order_id)
    {
        $this->container['merchant_order_id'] = $merchant_order_id;

        return $this;
    }
    /**
     * Gets order_id
     *
     * @return string|null
     */
    public function getOrderId()
    {
        return $this->container['order_id'];
    }

    /**
     * Sets order_id
     *
     * @param string|null $order_id The orderId for shipping inventory.
     *
     * @return self
     */
    public function setOrderId($order_id)
    {
        $this->container['order_id'] = $order_id;

        return $this;
    }
    /**
     * Gets transaction_type
     *
     * @return string|null
     */
    public function getTransactionType()
    {
        return $this->container['transaction_type'];
    }

    /**
     * Sets transaction_type
     *
     * @param string|null $transaction_type The type of removal order.
     *   Possible values:
     *   * WHOLESALE_LIQUIDATION.
     *
     * @return self
     */
    public function setTransactionType($transaction_type)
    {
        $this->container['transaction_type'] = $transaction_type;

        return $this;
    }
    /**
     * Gets removal_shipment_item_adjustment_list
     *
     * @return \SellingPartnerApi\Model\FinancesV0\RemovalShipmentItemAdjustment[]|null
     */
    public function getRemovalShipmentItemAdjustmentList()
    {
        return $this->container['removal_shipment_item_adjustment_list'];
    }

    /**
     * Sets removal_shipment_item_adjustment_list
     *
     * @param \SellingPartnerApi\Model\FinancesV0\RemovalShipmentItemAdjustment[]|null $removal_shipment_item_adjustment_list A comma-delimited list of Removal shipmentItemAdjustment details for FBA inventory.
     *
     * @return self
     */
    public function setRemovalShipmentItemAdjustmentList($removal_shipment_item_adjustment_list)
    {
        $this->container['removal_shipment_item_adjustment_list'] = $removal_shipment_item_adjustment_list;

        return $this;
    }
}


