<?php declare(strict_types=1);
/**
 * BuyerTaxInformation
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for Orders
 *
 * The Selling Partner API for Orders helps you programmatically retrieve order information. These APIs let you develop fast, flexible, custom applications in areas like order synchronization, order research, and demand-based decision support tools. The Orders API only supports orders that are less than two years old. Orders more than two years old will not show in the API response.
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

namespace SellingPartnerApi\Model\OrdersV0;
use ArrayAccess;
use SellingPartnerApi\Model\BaseModel;
use SellingPartnerApi\Model\ModelInterface;

/**
 * BuyerTaxInformation Class Doc Comment
 *
 * @category Class
 * @description Contains the business invoice tax information. Available only in the TR marketplace.
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class BuyerTaxInformation extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'BuyerTaxInformation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'buyer_legal_company_name' => 'string',
        'buyer_business_address' => 'string',
        'buyer_tax_registration_id' => 'string',
        'buyer_tax_office' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'buyer_legal_company_name' => null,
        'buyer_business_address' => null,
        'buyer_tax_registration_id' => null,
        'buyer_tax_office' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'buyer_legal_company_name' => 'BuyerLegalCompanyName',
        'buyer_business_address' => 'BuyerBusinessAddress',
        'buyer_tax_registration_id' => 'BuyerTaxRegistrationId',
        'buyer_tax_office' => 'BuyerTaxOffice'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'buyer_legal_company_name' => 'setBuyerLegalCompanyName',
        'buyer_business_address' => 'setBuyerBusinessAddress',
        'buyer_tax_registration_id' => 'setBuyerTaxRegistrationId',
        'buyer_tax_office' => 'setBuyerTaxOffice'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'buyer_legal_company_name' => 'getBuyerLegalCompanyName',
        'buyer_business_address' => 'getBuyerBusinessAddress',
        'buyer_tax_registration_id' => 'getBuyerTaxRegistrationId',
        'buyer_tax_office' => 'getBuyerTaxOffice'
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
        $this->container['buyer_legal_company_name'] = $data['buyer_legal_company_name'] ?? null;
        $this->container['buyer_business_address'] = $data['buyer_business_address'] ?? null;
        $this->container['buyer_tax_registration_id'] = $data['buyer_tax_registration_id'] ?? null;
        $this->container['buyer_tax_office'] = $data['buyer_tax_office'] ?? null;
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
     * Gets buyer_legal_company_name
     *
     * @return string|null
     */
    public function getBuyerLegalCompanyName()
    {
        return $this->container['buyer_legal_company_name'];
    }

    /**
     * Sets buyer_legal_company_name
     *
     * @param string|null $buyer_legal_company_name Business buyer's company legal name.
     *
     * @return self
     */
    public function setBuyerLegalCompanyName($buyer_legal_company_name)
    {
        $this->container['buyer_legal_company_name'] = $buyer_legal_company_name;

        return $this;
    }
    /**
     * Gets buyer_business_address
     *
     * @return string|null
     */
    public function getBuyerBusinessAddress()
    {
        return $this->container['buyer_business_address'];
    }

    /**
     * Sets buyer_business_address
     *
     * @param string|null $buyer_business_address Business buyer's address.
     *
     * @return self
     */
    public function setBuyerBusinessAddress($buyer_business_address)
    {
        $this->container['buyer_business_address'] = $buyer_business_address;

        return $this;
    }
    /**
     * Gets buyer_tax_registration_id
     *
     * @return string|null
     */
    public function getBuyerTaxRegistrationId()
    {
        return $this->container['buyer_tax_registration_id'];
    }

    /**
     * Sets buyer_tax_registration_id
     *
     * @param string|null $buyer_tax_registration_id Business buyer's tax registration ID.
     *
     * @return self
     */
    public function setBuyerTaxRegistrationId($buyer_tax_registration_id)
    {
        $this->container['buyer_tax_registration_id'] = $buyer_tax_registration_id;

        return $this;
    }
    /**
     * Gets buyer_tax_office
     *
     * @return string|null
     */
    public function getBuyerTaxOffice()
    {
        return $this->container['buyer_tax_office'];
    }

    /**
     * Sets buyer_tax_office
     *
     * @param string|null $buyer_tax_office Business buyer's tax office.
     *
     * @return self
     */
    public function setBuyerTaxOffice($buyer_tax_office)
    {
        $this->container['buyer_tax_office'] = $buyer_tax_office;

        return $this;
    }
}


