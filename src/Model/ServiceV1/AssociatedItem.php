<?php declare(strict_types=1);
/**
 * AssociatedItem
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
 * AssociatedItem Class Doc Comment
 *
 * @category Class
 * @description Information about an item associated with the service job.
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class AssociatedItem extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AssociatedItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'asin' => 'string',
        'title' => 'string',
        'quantity' => 'int',
        'order_id' => 'string',
        'item_status' => 'string',
        'brand_name' => 'string',
        'item_delivery' => '\SellingPartnerApi\Model\ServiceV1\ItemDelivery'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'asin' => null,
        'title' => null,
        'quantity' => null,
        'order_id' => null,
        'item_status' => null,
        'brand_name' => null,
        'item_delivery' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'asin' => 'asin',
        'title' => 'title',
        'quantity' => 'quantity',
        'order_id' => 'orderId',
        'item_status' => 'itemStatus',
        'brand_name' => 'brandName',
        'item_delivery' => 'itemDelivery'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'asin' => 'setAsin',
        'title' => 'setTitle',
        'quantity' => 'setQuantity',
        'order_id' => 'setOrderId',
        'item_status' => 'setItemStatus',
        'brand_name' => 'setBrandName',
        'item_delivery' => 'setItemDelivery'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'asin' => 'getAsin',
        'title' => 'getTitle',
        'quantity' => 'getQuantity',
        'order_id' => 'getOrderId',
        'item_status' => 'getItemStatus',
        'brand_name' => 'getBrandName',
        'item_delivery' => 'getItemDelivery'
    ];



    const ITEM_STATUS_ACTIVE = 'ACTIVE';
    const ITEM_STATUS_CANCELLED = 'CANCELLED';
    const ITEM_STATUS_SHIPPED = 'SHIPPED';
    const ITEM_STATUS_DELIVERED = 'DELIVERED';
    
    

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getItemStatusAllowableValues()
    {
        $baseVals = [
            self::ITEM_STATUS_ACTIVE,
            self::ITEM_STATUS_CANCELLED,
            self::ITEM_STATUS_SHIPPED,
            self::ITEM_STATUS_DELIVERED,
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
        $this->container['asin'] = $data['asin'] ?? null;
        $this->container['title'] = $data['title'] ?? null;
        $this->container['quantity'] = $data['quantity'] ?? null;
        $this->container['order_id'] = $data['order_id'] ?? null;
        $this->container['item_status'] = $data['item_status'] ?? null;
        $this->container['brand_name'] = $data['brand_name'] ?? null;
        $this->container['item_delivery'] = $data['item_delivery'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if (!is_null($this->container['order_id']) && (mb_strlen($this->container['order_id']) > 20)) {
            $invalidProperties[] = "invalid value for 'order_id', the character length must be smaller than or equal to 20.";
        }

        if (!is_null($this->container['order_id']) && (mb_strlen($this->container['order_id']) < 5)) {
            $invalidProperties[] = "invalid value for 'order_id', the character length must be bigger than or equal to 5.";
        }

        $allowedValues = $this->getItemStatusAllowableValues();
        if (
            !is_null($this->container['item_status']) &&
            !in_array(strtoupper($this->container['item_status']), $allowedValues, true)
        ) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'item_status', must be one of '%s'",
                $this->container['item_status'],
                implode("', '", $allowedValues)
            );
        }

        return $invalidProperties;
    }


    /**
     * Gets asin
     *
     * @return string|null
     */
    public function getAsin()
    {
        return $this->container['asin'];
    }

    /**
     * Sets asin
     *
     * @param string|null $asin The Amazon Standard Identification Number (ASIN) of the item.
     *
     * @return self
     */
    public function setAsin($asin)
    {
        $this->container['asin'] = $asin;

        return $this;
    }
    /**
     * Gets title
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string|null $title The title of the item.
     *
     * @return self
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }
    /**
     * Gets quantity
     *
     * @return int|null
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param int|null $quantity The total number of items included in the order.
     *
     * @return self
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

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
     * @param string|null $order_id The Amazon-defined identifier for an order placed by the buyer, in 3-7-7 format.
     *
     * @return self
     */
    public function setOrderId($order_id)
    {
        if (!is_null($order_id) && (mb_strlen($order_id) > 20)) {
            throw new \InvalidArgumentException('invalid length for $order_id when calling AssociatedItem., must be smaller than or equal to 20.');
        }
        if (!is_null($order_id) && (mb_strlen($order_id) < 5)) {
            throw new \InvalidArgumentException('invalid length for $order_id when calling AssociatedItem., must be bigger than or equal to 5.');
        }

        $this->container['order_id'] = $order_id;

        return $this;
    }
    /**
     * Gets item_status
     *
     * @return string|null
     */
    public function getItemStatus()
    {
        return $this->container['item_status'];
    }

    /**
     * Sets item_status
     *
     * @param string|null $item_status The status of the item.
     *
     * @return self
     */
    public function setItemStatus($item_status)
    {
        $allowedValues = $this->getItemStatusAllowableValues();
        if (!is_null($item_status) &&!in_array(strtoupper($item_status), $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'item_status', must be one of '%s'",
                    $item_status,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['item_status'] = $item_status;

        return $this;
    }
    /**
     * Gets brand_name
     *
     * @return string|null
     */
    public function getBrandName()
    {
        return $this->container['brand_name'];
    }

    /**
     * Sets brand_name
     *
     * @param string|null $brand_name The brand name of the item.
     *
     * @return self
     */
    public function setBrandName($brand_name)
    {
        $this->container['brand_name'] = $brand_name;

        return $this;
    }
    /**
     * Gets item_delivery
     *
     * @return \SellingPartnerApi\Model\ServiceV1\ItemDelivery|null
     */
    public function getItemDelivery()
    {
        return $this->container['item_delivery'];
    }

    /**
     * Sets item_delivery
     *
     * @param \SellingPartnerApi\Model\ServiceV1\ItemDelivery|null $item_delivery item_delivery
     *
     * @return self
     */
    public function setItemDelivery($item_delivery)
    {
        $this->container['item_delivery'] = $item_delivery;

        return $this;
    }
}


