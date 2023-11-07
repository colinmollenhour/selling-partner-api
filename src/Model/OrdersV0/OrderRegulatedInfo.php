<?php declare(strict_types=1);
/**
 * OrderRegulatedInfo
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
 * OrderRegulatedInfo Class Doc Comment
 *
 * @category Class
 * @description The order's regulated information along with its verification status.
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class OrderRegulatedInfo extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'OrderRegulatedInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'amazon_order_id' => 'string',
        'regulated_information' => '\SellingPartnerApi\Model\OrdersV0\RegulatedInformation',
        'requires_dosage_label' => 'bool',
        'regulated_order_verification_status' => '\SellingPartnerApi\Model\OrdersV0\RegulatedOrderVerificationStatus'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'amazon_order_id' => null,
        'regulated_information' => null,
        'requires_dosage_label' => null,
        'regulated_order_verification_status' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'amazon_order_id' => 'AmazonOrderId',
        'regulated_information' => 'RegulatedInformation',
        'requires_dosage_label' => 'RequiresDosageLabel',
        'regulated_order_verification_status' => 'RegulatedOrderVerificationStatus'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'amazon_order_id' => 'setAmazonOrderId',
        'regulated_information' => 'setRegulatedInformation',
        'requires_dosage_label' => 'setRequiresDosageLabel',
        'regulated_order_verification_status' => 'setRegulatedOrderVerificationStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'amazon_order_id' => 'getAmazonOrderId',
        'regulated_information' => 'getRegulatedInformation',
        'requires_dosage_label' => 'getRequiresDosageLabel',
        'regulated_order_verification_status' => 'getRegulatedOrderVerificationStatus'
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
        $this->container['amazon_order_id'] = $data['amazon_order_id'] ?? null;
        $this->container['regulated_information'] = $data['regulated_information'] ?? null;
        $this->container['requires_dosage_label'] = $data['requires_dosage_label'] ?? null;
        $this->container['regulated_order_verification_status'] = $data['regulated_order_verification_status'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['amazon_order_id'] === null) {
            $invalidProperties[] = "'amazon_order_id' can't be null";
        }
        if ($this->container['regulated_information'] === null) {
            $invalidProperties[] = "'regulated_information' can't be null";
        }
        if ($this->container['requires_dosage_label'] === null) {
            $invalidProperties[] = "'requires_dosage_label' can't be null";
        }
        if ($this->container['regulated_order_verification_status'] === null) {
            $invalidProperties[] = "'regulated_order_verification_status' can't be null";
        }
        return $invalidProperties;
    }


    /**
     * Gets amazon_order_id
     *
     * @return string
     */
    public function getAmazonOrderId()
    {
        return $this->container['amazon_order_id'];
    }

    /**
     * Sets amazon_order_id
     *
     * @param string $amazon_order_id An Amazon-defined order identifier, in 3-7-7 format.
     *
     * @return self
     */
    public function setAmazonOrderId($amazon_order_id)
    {
        $this->container['amazon_order_id'] = $amazon_order_id;

        return $this;
    }
    /**
     * Gets regulated_information
     *
     * @return \SellingPartnerApi\Model\OrdersV0\RegulatedInformation
     */
    public function getRegulatedInformation()
    {
        return $this->container['regulated_information'];
    }

    /**
     * Sets regulated_information
     *
     * @param \SellingPartnerApi\Model\OrdersV0\RegulatedInformation $regulated_information regulated_information
     *
     * @return self
     */
    public function setRegulatedInformation($regulated_information)
    {
        $this->container['regulated_information'] = $regulated_information;

        return $this;
    }
    /**
     * Gets requires_dosage_label
     *
     * @return bool
     */
    public function getRequiresDosageLabel()
    {
        return $this->container['requires_dosage_label'];
    }

    /**
     * Sets requires_dosage_label
     *
     * @param bool $requires_dosage_label When true, the order requires attaching a dosage information label when shipped.
     *
     * @return self
     */
    public function setRequiresDosageLabel($requires_dosage_label)
    {
        $this->container['requires_dosage_label'] = $requires_dosage_label;

        return $this;
    }
    /**
     * Gets regulated_order_verification_status
     *
     * @return \SellingPartnerApi\Model\OrdersV0\RegulatedOrderVerificationStatus
     */
    public function getRegulatedOrderVerificationStatus()
    {
        return $this->container['regulated_order_verification_status'];
    }

    /**
     * Sets regulated_order_verification_status
     *
     * @param \SellingPartnerApi\Model\OrdersV0\RegulatedOrderVerificationStatus $regulated_order_verification_status regulated_order_verification_status
     *
     * @return self
     */
    public function setRegulatedOrderVerificationStatus($regulated_order_verification_status)
    {
        $this->container['regulated_order_verification_status'] = $regulated_order_verification_status;

        return $this;
    }
}


