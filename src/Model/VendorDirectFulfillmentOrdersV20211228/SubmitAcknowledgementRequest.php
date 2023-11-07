<?php declare(strict_types=1);
/**
 * SubmitAcknowledgementRequest
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for Direct Fulfillment Orders
 *
 * The Selling Partner API for Direct Fulfillment Orders provides programmatic access to a direct fulfillment vendor's order data.
 *
 * The version of the OpenAPI document: 2021-12-28
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SellingPartnerApi\Model\VendorDirectFulfillmentOrdersV20211228;
use ArrayAccess;
use SellingPartnerApi\Model\BaseModel;
use SellingPartnerApi\Model\ModelInterface;
use SellingPartnerApi\ObjectSerializer;

/**
 * SubmitAcknowledgementRequest Class Doc Comment
 *
 * @category Class
 * @description The request schema for the submitAcknowledgement operation.
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class SubmitAcknowledgementRequest extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SubmitAcknowledgementRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'order_acknowledgements' => '\SellingPartnerApi\Model\VendorDirectFulfillmentOrdersV20211228\OrderAcknowledgementItem[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'order_acknowledgements' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'order_acknowledgements' => 'orderAcknowledgements'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'order_acknowledgements' => 'setOrderAcknowledgements'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'order_acknowledgements' => 'getOrderAcknowledgements'
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
        $this->container['order_acknowledgements'] = $data['order_acknowledgements'] ?? null;
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
     * Gets order_acknowledgements
     *
     * @return \SellingPartnerApi\Model\VendorDirectFulfillmentOrdersV20211228\OrderAcknowledgementItem[]|null
     */
    public function getOrderAcknowledgements()
    {
        return $this->container['order_acknowledgements'];
    }

    /**
     * Sets order_acknowledgements
     *
     * @param \SellingPartnerApi\Model\VendorDirectFulfillmentOrdersV20211228\OrderAcknowledgementItem[]|null $order_acknowledgements A list of one or more purchase orders.
     *
     * @return self
     */
    public function setOrderAcknowledgements($order_acknowledgements)
    {
        $this->container['order_acknowledgements'] = $order_acknowledgements;

        return $this;
    }
}


