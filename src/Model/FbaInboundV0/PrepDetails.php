<?php declare(strict_types=1);
/**
 * PrepDetails
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for Fulfillment Inbound
 *
 * The Selling Partner API for Fulfillment Inbound lets you create applications that create and update inbound shipments of inventory to Amazon's fulfillment network.
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

namespace SellingPartnerApi\Model\FbaInboundV0;
use ArrayAccess;
use SellingPartnerApi\Model\BaseModel;
use SellingPartnerApi\Model\ModelInterface;
use SellingPartnerApi\ObjectSerializer;

/**
 * PrepDetails Class Doc Comment
 *
 * @category Class
 * @description Preparation instructions and who is responsible for the preparation.
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class PrepDetails extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PrepDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'prep_instruction' => '\SellingPartnerApi\Model\FbaInboundV0\PrepInstruction',
        'prep_owner' => '\SellingPartnerApi\Model\FbaInboundV0\PrepOwner'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'prep_instruction' => null,
        'prep_owner' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'prep_instruction' => 'PrepInstruction',
        'prep_owner' => 'PrepOwner'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'prep_instruction' => 'setPrepInstruction',
        'prep_owner' => 'setPrepOwner'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'prep_instruction' => 'getPrepInstruction',
        'prep_owner' => 'getPrepOwner'
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
        $this->container['prep_instruction'] = $data['prep_instruction'] ?? null;
        $this->container['prep_owner'] = $data['prep_owner'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['prep_instruction'] === null) {
            $invalidProperties[] = "'prep_instruction' can't be null";
        }
        if ($this->container['prep_owner'] === null) {
            $invalidProperties[] = "'prep_owner' can't be null";
        }
        return $invalidProperties;
    }


    /**
     * Gets prep_instruction
     *
     * @return \SellingPartnerApi\Model\FbaInboundV0\PrepInstruction
     */
    public function getPrepInstruction()
    {
        return $this->container['prep_instruction'];
    }

    /**
     * Sets prep_instruction
     *
     * @param \SellingPartnerApi\Model\FbaInboundV0\PrepInstruction $prep_instruction prep_instruction
     *
     * @return self
     */
    public function setPrepInstruction($prep_instruction)
    {
        $this->container['prep_instruction'] = $prep_instruction;

        return $this;
    }
    /**
     * Gets prep_owner
     *
     * @return \SellingPartnerApi\Model\FbaInboundV0\PrepOwner
     */
    public function getPrepOwner()
    {
        return $this->container['prep_owner'];
    }

    /**
     * Sets prep_owner
     *
     * @param \SellingPartnerApi\Model\FbaInboundV0\PrepOwner $prep_owner prep_owner
     *
     * @return self
     */
    public function setPrepOwner($prep_owner)
    {
        $this->container['prep_owner'] = $prep_owner;

        return $this;
    }
}


