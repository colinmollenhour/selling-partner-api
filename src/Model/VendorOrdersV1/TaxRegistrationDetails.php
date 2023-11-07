<?php declare(strict_types=1);
/**
 * TaxRegistrationDetails
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
 * TaxRegistrationDetails Class Doc Comment
 *
 * @category Class
 * @description Tax registration details of the entity.
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class TaxRegistrationDetails extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'TaxRegistrationDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'tax_registration_type' => 'string',
        'tax_registration_number' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'tax_registration_type' => null,
        'tax_registration_number' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'tax_registration_type' => 'taxRegistrationType',
        'tax_registration_number' => 'taxRegistrationNumber'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'tax_registration_type' => 'setTaxRegistrationType',
        'tax_registration_number' => 'setTaxRegistrationNumber'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'tax_registration_type' => 'getTaxRegistrationType',
        'tax_registration_number' => 'getTaxRegistrationNumber'
    ];



    const TAX_REGISTRATION_TYPE_VAT = 'VAT';
    const TAX_REGISTRATION_TYPE_GST = 'GST';
    
    

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTaxRegistrationTypeAllowableValues()
    {
        $baseVals = [
            self::TAX_REGISTRATION_TYPE_VAT,
            self::TAX_REGISTRATION_TYPE_GST,
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
        $this->container['tax_registration_type'] = $data['tax_registration_type'] ?? null;
        $this->container['tax_registration_number'] = $data['tax_registration_number'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['tax_registration_type'] === null) {
            $invalidProperties[] = "'tax_registration_type' can't be null";
        }
        $allowedValues = $this->getTaxRegistrationTypeAllowableValues();
        if (
            !is_null($this->container['tax_registration_type']) &&
            !in_array(strtoupper($this->container['tax_registration_type']), $allowedValues, true)
        ) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'tax_registration_type', must be one of '%s'",
                $this->container['tax_registration_type'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['tax_registration_number'] === null) {
            $invalidProperties[] = "'tax_registration_number' can't be null";
        }
        return $invalidProperties;
    }


    /**
     * Gets tax_registration_type
     *
     * @return string
     */
    public function getTaxRegistrationType()
    {
        return $this->container['tax_registration_type'];
    }

    /**
     * Sets tax_registration_type
     *
     * @param string $tax_registration_type Tax registration type for the entity.
     *
     * @return self
     */
    public function setTaxRegistrationType($tax_registration_type)
    {
        $allowedValues = $this->getTaxRegistrationTypeAllowableValues();
        if (!in_array(strtoupper($tax_registration_type), $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'tax_registration_type', must be one of '%s'",
                    $tax_registration_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['tax_registration_type'] = $tax_registration_type;

        return $this;
    }
    /**
     * Gets tax_registration_number
     *
     * @return string
     */
    public function getTaxRegistrationNumber()
    {
        return $this->container['tax_registration_number'];
    }

    /**
     * Sets tax_registration_number
     *
     * @param string $tax_registration_number Tax registration number for the entity. For example, VAT ID.
     *
     * @return self
     */
    public function setTaxRegistrationNumber($tax_registration_number)
    {
        $this->container['tax_registration_number'] = $tax_registration_number;

        return $this;
    }
}


