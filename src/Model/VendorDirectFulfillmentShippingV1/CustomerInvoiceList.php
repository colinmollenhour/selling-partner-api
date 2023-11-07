<?php declare(strict_types=1);
/**
 * CustomerInvoiceList
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for Direct Fulfillment Shipping
 *
 * The Selling Partner API for Direct Fulfillment Shipping provides programmatic access to a direct fulfillment vendor's shipping data.
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

namespace SellingPartnerApi\Model\VendorDirectFulfillmentShippingV1;
use ArrayAccess;
use SellingPartnerApi\Model\BaseModel;
use SellingPartnerApi\Model\ModelInterface;
use SellingPartnerApi\ObjectSerializer;

/**
 * CustomerInvoiceList Class Doc Comment
 *
 * @category Class
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class CustomerInvoiceList extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CustomerInvoiceList';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'pagination' => '\SellingPartnerApi\Model\VendorDirectFulfillmentShippingV1\Pagination',
        'customer_invoices' => '\SellingPartnerApi\Model\VendorDirectFulfillmentShippingV1\CustomerInvoice[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'pagination' => null,
        'customer_invoices' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'pagination' => 'pagination',
        'customer_invoices' => 'customerInvoices'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pagination' => 'setPagination',
        'customer_invoices' => 'setCustomerInvoices'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pagination' => 'getPagination',
        'customer_invoices' => 'getCustomerInvoices'
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
        $this->container['pagination'] = $data['pagination'] ?? null;
        $this->container['customer_invoices'] = $data['customer_invoices'] ?? null;
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
     * Gets pagination
     *
     * @return \SellingPartnerApi\Model\VendorDirectFulfillmentShippingV1\Pagination|null
     */
    public function getPagination()
    {
        return $this->container['pagination'];
    }

    /**
     * Sets pagination
     *
     * @param \SellingPartnerApi\Model\VendorDirectFulfillmentShippingV1\Pagination|null $pagination pagination
     *
     * @return self
     */
    public function setPagination($pagination)
    {
        $this->container['pagination'] = $pagination;

        return $this;
    }
    /**
     * Gets customer_invoices
     *
     * @return \SellingPartnerApi\Model\VendorDirectFulfillmentShippingV1\CustomerInvoice[]|null
     */
    public function getCustomerInvoices()
    {
        return $this->container['customer_invoices'];
    }

    /**
     * Sets customer_invoices
     *
     * @param \SellingPartnerApi\Model\VendorDirectFulfillmentShippingV1\CustomerInvoice[]|null $customer_invoices customer_invoices
     *
     * @return self
     */
    public function setCustomerInvoices($customer_invoices)
    {
        $this->container['customer_invoices'] = $customer_invoices;

        return $this;
    }
}


