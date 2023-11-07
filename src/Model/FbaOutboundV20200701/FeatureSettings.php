<?php declare(strict_types=1);
/**
 * FeatureSettings
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner APIs for Fulfillment Outbound
 *
 * The Selling Partner API for Fulfillment Outbound lets you create applications that help a seller fulfill Multi-Channel Fulfillment orders using their inventory in Amazon's fulfillment network. You can get information on both potential and existing fulfillment orders.
 *
 * The version of the OpenAPI document: 2020-07-01
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SellingPartnerApi\Model\FbaOutboundV20200701;
use ArrayAccess;
use SellingPartnerApi\Model\BaseModel;
use SellingPartnerApi\Model\ModelInterface;
use SellingPartnerApi\ObjectSerializer;

/**
 * FeatureSettings Class Doc Comment
 *
 * @category Class
 * @description FeatureSettings allows users to apply fulfillment features to an order. To block an order from being shipped using Amazon Logistics (AMZL) and an AMZL tracking number, use featureName as BLOCK_AMZL and featureFulfillmentPolicy as Required. Blocking AMZL will incur an additional fee surcharge on your MCF orders and increase the risk of some of your orders being unfulfilled or delivered late if there are no alternative carriers available. Using BLOCK_AMZL in an order request will take precedence over your Seller Central account setting. To ship in non-Amazon branded packaging (blank boxes), use featureName BLANK_BOX.
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class FeatureSettings extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'FeatureSettings';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'feature_name' => 'string',
        'feature_fulfillment_policy' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'feature_name' => null,
        'feature_fulfillment_policy' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'feature_name' => 'featureName',
        'feature_fulfillment_policy' => 'featureFulfillmentPolicy'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'feature_name' => 'setFeatureName',
        'feature_fulfillment_policy' => 'setFeatureFulfillmentPolicy'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'feature_name' => 'getFeatureName',
        'feature_fulfillment_policy' => 'getFeatureFulfillmentPolicy'
    ];



    const FEATURE_FULFILLMENT_POLICY_REQUIRED = 'Required';
    const FEATURE_FULFILLMENT_POLICY_NOT_REQUIRED = 'NotRequired';
    
    

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFeatureFulfillmentPolicyAllowableValues()
    {
        $baseVals = [
            self::FEATURE_FULFILLMENT_POLICY_REQUIRED,
            self::FEATURE_FULFILLMENT_POLICY_NOT_REQUIRED,
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
        $this->container['feature_name'] = $data['feature_name'] ?? null;
        $this->container['feature_fulfillment_policy'] = $data['feature_fulfillment_policy'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        $allowedValues = $this->getFeatureFulfillmentPolicyAllowableValues();
        if (
            !is_null($this->container['feature_fulfillment_policy']) &&
            !in_array(strtoupper($this->container['feature_fulfillment_policy']), $allowedValues, true)
        ) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'feature_fulfillment_policy', must be one of '%s'",
                $this->container['feature_fulfillment_policy'],
                implode("', '", $allowedValues)
            );
        }

        return $invalidProperties;
    }


    /**
     * Gets feature_name
     *
     * @return string|null
     */
    public function getFeatureName()
    {
        return $this->container['feature_name'];
    }

    /**
     * Sets feature_name
     *
     * @param string|null $feature_name The name of the feature.
     *
     * @return self
     */
    public function setFeatureName($feature_name)
    {
        $this->container['feature_name'] = $feature_name;

        return $this;
    }
    /**
     * Gets feature_fulfillment_policy
     *
     * @return string|null
     */
    public function getFeatureFulfillmentPolicy()
    {
        return $this->container['feature_fulfillment_policy'];
    }

    /**
     * Sets feature_fulfillment_policy
     *
     * @param string|null $feature_fulfillment_policy Specifies the policy to use when fulfilling an order.
     *
     * @return self
     */
    public function setFeatureFulfillmentPolicy($feature_fulfillment_policy)
    {
        $allowedValues = $this->getFeatureFulfillmentPolicyAllowableValues();
        if (!is_null($feature_fulfillment_policy) &&!in_array(strtoupper($feature_fulfillment_policy), $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'feature_fulfillment_policy', must be one of '%s'",
                    $feature_fulfillment_policy,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['feature_fulfillment_policy'] = $feature_fulfillment_policy;

        return $this;
    }
}


