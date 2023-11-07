<?php declare(strict_types=1);
/**
 * ShippingPromiseSet
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for Shipping
 *
 * Provides programmatic access to Amazon Shipping APIs.  **Note:** If you are new to the Amazon Shipping API, refer to the latest version of <a href=\"https://developer-docs.amazon.com/amazon-shipping/docs/shipping-api-v2-reference\">Amazon Shipping API (v2)</a> on the <a href=\"https://developer-docs.amazon.com/amazon-shipping/\">Amazon Shipping Developer Documentation</a> site.
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

namespace SellingPartnerApi\Model\ShippingV1;
use ArrayAccess;
use SellingPartnerApi\Model\BaseModel;
use SellingPartnerApi\Model\ModelInterface;
use SellingPartnerApi\ObjectSerializer;

/**
 * ShippingPromiseSet Class Doc Comment
 *
 * @category Class
 * @description The promised delivery time and pickup time.
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class ShippingPromiseSet extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ShippingPromiseSet';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'delivery_window' => '\SellingPartnerApi\Model\ShippingV1\TimeRange',
        'receive_window' => '\SellingPartnerApi\Model\ShippingV1\TimeRange'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'delivery_window' => null,
        'receive_window' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'delivery_window' => 'deliveryWindow',
        'receive_window' => 'receiveWindow'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'delivery_window' => 'setDeliveryWindow',
        'receive_window' => 'setReceiveWindow'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'delivery_window' => 'getDeliveryWindow',
        'receive_window' => 'getReceiveWindow'
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
        $this->container['delivery_window'] = $data['delivery_window'] ?? null;
        $this->container['receive_window'] = $data['receive_window'] ?? null;
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
     * Gets delivery_window
     *
     * @return \SellingPartnerApi\Model\ShippingV1\TimeRange|null
     */
    public function getDeliveryWindow()
    {
        return $this->container['delivery_window'];
    }

    /**
     * Sets delivery_window
     *
     * @param \SellingPartnerApi\Model\ShippingV1\TimeRange|null $delivery_window delivery_window
     *
     * @return self
     */
    public function setDeliveryWindow($delivery_window)
    {
        $this->container['delivery_window'] = $delivery_window;

        return $this;
    }
    /**
     * Gets receive_window
     *
     * @return \SellingPartnerApi\Model\ShippingV1\TimeRange|null
     */
    public function getReceiveWindow()
    {
        return $this->container['receive_window'];
    }

    /**
     * Sets receive_window
     *
     * @param \SellingPartnerApi\Model\ShippingV1\TimeRange|null $receive_window receive_window
     *
     * @return self
     */
    public function setReceiveWindow($receive_window)
    {
        $this->container['receive_window'] = $receive_window;

        return $this;
    }
}


