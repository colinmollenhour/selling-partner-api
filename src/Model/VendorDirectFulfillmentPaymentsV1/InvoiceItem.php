<?php declare(strict_types=1);
/**
 * InvoiceItem
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for Direct Fulfillment Payments
 *
 * The Selling Partner API for Direct Fulfillment Payments provides programmatic access to a direct fulfillment vendor's invoice data.
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

namespace SellingPartnerApi\Model\VendorDirectFulfillmentPaymentsV1;
use ArrayAccess;
use SellingPartnerApi\Model\BaseModel;
use SellingPartnerApi\Model\ModelInterface;
use SellingPartnerApi\ObjectSerializer;

/**
 * InvoiceItem Class Doc Comment
 *
 * @category Class
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class InvoiceItem extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'InvoiceItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'item_sequence_number' => 'string',
        'buyer_product_identifier' => 'string',
        'vendor_product_identifier' => 'string',
        'invoiced_quantity' => '\SellingPartnerApi\Model\VendorDirectFulfillmentPaymentsV1\ItemQuantity',
        'net_cost' => '\SellingPartnerApi\Model\VendorDirectFulfillmentPaymentsV1\Money',
        'purchase_order_number' => 'string',
        'vendor_order_number' => 'string',
        'hsn_code' => 'string',
        'tax_details' => '\SellingPartnerApi\Model\VendorDirectFulfillmentPaymentsV1\TaxDetail[]',
        'charge_details' => '\SellingPartnerApi\Model\VendorDirectFulfillmentPaymentsV1\ChargeDetails[]'
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
        'invoiced_quantity' => null,
        'net_cost' => null,
        'purchase_order_number' => null,
        'vendor_order_number' => null,
        'hsn_code' => null,
        'tax_details' => null,
        'charge_details' => null
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
        'invoiced_quantity' => 'invoicedQuantity',
        'net_cost' => 'netCost',
        'purchase_order_number' => 'purchaseOrderNumber',
        'vendor_order_number' => 'vendorOrderNumber',
        'hsn_code' => 'hsnCode',
        'tax_details' => 'taxDetails',
        'charge_details' => 'chargeDetails'
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
        'invoiced_quantity' => 'setInvoicedQuantity',
        'net_cost' => 'setNetCost',
        'purchase_order_number' => 'setPurchaseOrderNumber',
        'vendor_order_number' => 'setVendorOrderNumber',
        'hsn_code' => 'setHsnCode',
        'tax_details' => 'setTaxDetails',
        'charge_details' => 'setChargeDetails'
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
        'invoiced_quantity' => 'getInvoicedQuantity',
        'net_cost' => 'getNetCost',
        'purchase_order_number' => 'getPurchaseOrderNumber',
        'vendor_order_number' => 'getVendorOrderNumber',
        'hsn_code' => 'getHsnCode',
        'tax_details' => 'getTaxDetails',
        'charge_details' => 'getChargeDetails'
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
        $this->container['invoiced_quantity'] = $data['invoiced_quantity'] ?? null;
        $this->container['net_cost'] = $data['net_cost'] ?? null;
        $this->container['purchase_order_number'] = $data['purchase_order_number'] ?? null;
        $this->container['vendor_order_number'] = $data['vendor_order_number'] ?? null;
        $this->container['hsn_code'] = $data['hsn_code'] ?? null;
        $this->container['tax_details'] = $data['tax_details'] ?? null;
        $this->container['charge_details'] = $data['charge_details'] ?? null;
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
        if ($this->container['invoiced_quantity'] === null) {
            $invalidProperties[] = "'invoiced_quantity' can't be null";
        }
        if ($this->container['net_cost'] === null) {
            $invalidProperties[] = "'net_cost' can't be null";
        }
        if ($this->container['purchase_order_number'] === null) {
            $invalidProperties[] = "'purchase_order_number' can't be null";
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
     * @param string|null $buyer_product_identifier Buyer's standard identification number (ASIN) of an item.
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
     * Gets invoiced_quantity
     *
     * @return \SellingPartnerApi\Model\VendorDirectFulfillmentPaymentsV1\ItemQuantity
     */
    public function getInvoicedQuantity()
    {
        return $this->container['invoiced_quantity'];
    }

    /**
     * Sets invoiced_quantity
     *
     * @param \SellingPartnerApi\Model\VendorDirectFulfillmentPaymentsV1\ItemQuantity $invoiced_quantity invoiced_quantity
     *
     * @return self
     */
    public function setInvoicedQuantity($invoiced_quantity)
    {
        $this->container['invoiced_quantity'] = $invoiced_quantity;

        return $this;
    }
    /**
     * Gets net_cost
     *
     * @return \SellingPartnerApi\Model\VendorDirectFulfillmentPaymentsV1\Money
     */
    public function getNetCost()
    {
        return $this->container['net_cost'];
    }

    /**
     * Sets net_cost
     *
     * @param \SellingPartnerApi\Model\VendorDirectFulfillmentPaymentsV1\Money $net_cost net_cost
     *
     * @return self
     */
    public function setNetCost($net_cost)
    {
        $this->container['net_cost'] = $net_cost;

        return $this;
    }
    /**
     * Gets purchase_order_number
     *
     * @return string
     */
    public function getPurchaseOrderNumber()
    {
        return $this->container['purchase_order_number'];
    }

    /**
     * Sets purchase_order_number
     *
     * @param string $purchase_order_number The purchase order number for this order. Formatting Notes: 8-character alpha-numeric code.
     *
     * @return self
     */
    public function setPurchaseOrderNumber($purchase_order_number)
    {
        $this->container['purchase_order_number'] = $purchase_order_number;

        return $this;
    }
    /**
     * Gets vendor_order_number
     *
     * @return string|null
     */
    public function getVendorOrderNumber()
    {
        return $this->container['vendor_order_number'];
    }

    /**
     * Sets vendor_order_number
     *
     * @param string|null $vendor_order_number The vendor's order number for this order.
     *
     * @return self
     */
    public function setVendorOrderNumber($vendor_order_number)
    {
        $this->container['vendor_order_number'] = $vendor_order_number;

        return $this;
    }
    /**
     * Gets hsn_code
     *
     * @return string|null
     */
    public function getHsnCode()
    {
        return $this->container['hsn_code'];
    }

    /**
     * Sets hsn_code
     *
     * @param string|null $hsn_code Harmonized System of Nomenclature (HSN) tax code. The HSN number cannot contain alphabets.
     *
     * @return self
     */
    public function setHsnCode($hsn_code)
    {
        $this->container['hsn_code'] = $hsn_code;

        return $this;
    }
    /**
     * Gets tax_details
     *
     * @return \SellingPartnerApi\Model\VendorDirectFulfillmentPaymentsV1\TaxDetail[]|null
     */
    public function getTaxDetails()
    {
        return $this->container['tax_details'];
    }

    /**
     * Sets tax_details
     *
     * @param \SellingPartnerApi\Model\VendorDirectFulfillmentPaymentsV1\TaxDetail[]|null $tax_details Individual tax details per line item.
     *
     * @return self
     */
    public function setTaxDetails($tax_details)
    {
        $this->container['tax_details'] = $tax_details;

        return $this;
    }
    /**
     * Gets charge_details
     *
     * @return \SellingPartnerApi\Model\VendorDirectFulfillmentPaymentsV1\ChargeDetails[]|null
     */
    public function getChargeDetails()
    {
        return $this->container['charge_details'];
    }

    /**
     * Sets charge_details
     *
     * @param \SellingPartnerApi\Model\VendorDirectFulfillmentPaymentsV1\ChargeDetails[]|null $charge_details Individual charge details per line item.
     *
     * @return self
     */
    public function setChargeDetails($charge_details)
    {
        $this->container['charge_details'] = $charge_details;

        return $this;
    }
}


