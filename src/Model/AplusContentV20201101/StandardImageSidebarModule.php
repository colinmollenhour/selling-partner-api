<?php declare(strict_types=1);
/**
 * StandardImageSidebarModule
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for A+ Content Management
 *
 * With the A+ Content API, you can build applications that help selling partners add rich marketing content to their Amazon product detail pages. A+ content helps selling partners share their brand and product story, which helps buyers make informed purchasing decisions. Selling partners assemble content by choosing from content modules and adding images and text.
 *
 * The version of the OpenAPI document: 2020-11-01
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SellingPartnerApi\Model\AplusContentV20201101;
use ArrayAccess;
use SellingPartnerApi\Model\BaseModel;
use SellingPartnerApi\Model\ModelInterface;
use SellingPartnerApi\ObjectSerializer;

/**
 * StandardImageSidebarModule Class Doc Comment
 *
 * @category Class
 * @description Two images, two paragraphs, and two bulleted lists. One image is smaller and displayed in the sidebar.
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class StandardImageSidebarModule extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'StandardImageSidebarModule';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'headline' => '\SellingPartnerApi\Model\AplusContentV20201101\TextComponent',
        'image_caption_block' => '\SellingPartnerApi\Model\AplusContentV20201101\StandardImageCaptionBlock',
        'description_text_block' => '\SellingPartnerApi\Model\AplusContentV20201101\StandardTextBlock',
        'description_list_block' => '\SellingPartnerApi\Model\AplusContentV20201101\StandardTextListBlock',
        'sidebar_image_text_block' => '\SellingPartnerApi\Model\AplusContentV20201101\StandardImageTextBlock',
        'sidebar_list_block' => '\SellingPartnerApi\Model\AplusContentV20201101\StandardTextListBlock'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'headline' => null,
        'image_caption_block' => null,
        'description_text_block' => null,
        'description_list_block' => null,
        'sidebar_image_text_block' => null,
        'sidebar_list_block' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'headline' => 'headline',
        'image_caption_block' => 'imageCaptionBlock',
        'description_text_block' => 'descriptionTextBlock',
        'description_list_block' => 'descriptionListBlock',
        'sidebar_image_text_block' => 'sidebarImageTextBlock',
        'sidebar_list_block' => 'sidebarListBlock'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'headline' => 'setHeadline',
        'image_caption_block' => 'setImageCaptionBlock',
        'description_text_block' => 'setDescriptionTextBlock',
        'description_list_block' => 'setDescriptionListBlock',
        'sidebar_image_text_block' => 'setSidebarImageTextBlock',
        'sidebar_list_block' => 'setSidebarListBlock'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'headline' => 'getHeadline',
        'image_caption_block' => 'getImageCaptionBlock',
        'description_text_block' => 'getDescriptionTextBlock',
        'description_list_block' => 'getDescriptionListBlock',
        'sidebar_image_text_block' => 'getSidebarImageTextBlock',
        'sidebar_list_block' => 'getSidebarListBlock'
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
        $this->container['headline'] = $data['headline'] ?? null;
        $this->container['image_caption_block'] = $data['image_caption_block'] ?? null;
        $this->container['description_text_block'] = $data['description_text_block'] ?? null;
        $this->container['description_list_block'] = $data['description_list_block'] ?? null;
        $this->container['sidebar_image_text_block'] = $data['sidebar_image_text_block'] ?? null;
        $this->container['sidebar_list_block'] = $data['sidebar_list_block'] ?? null;
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
     * Gets headline
     *
     * @return \SellingPartnerApi\Model\AplusContentV20201101\TextComponent|null
     */
    public function getHeadline()
    {
        return $this->container['headline'];
    }

    /**
     * Sets headline
     *
     * @param \SellingPartnerApi\Model\AplusContentV20201101\TextComponent|null $headline headline
     *
     * @return self
     */
    public function setHeadline($headline)
    {
        $this->container['headline'] = $headline;

        return $this;
    }
    /**
     * Gets image_caption_block
     *
     * @return \SellingPartnerApi\Model\AplusContentV20201101\StandardImageCaptionBlock|null
     */
    public function getImageCaptionBlock()
    {
        return $this->container['image_caption_block'];
    }

    /**
     * Sets image_caption_block
     *
     * @param \SellingPartnerApi\Model\AplusContentV20201101\StandardImageCaptionBlock|null $image_caption_block image_caption_block
     *
     * @return self
     */
    public function setImageCaptionBlock($image_caption_block)
    {
        $this->container['image_caption_block'] = $image_caption_block;

        return $this;
    }
    /**
     * Gets description_text_block
     *
     * @return \SellingPartnerApi\Model\AplusContentV20201101\StandardTextBlock|null
     */
    public function getDescriptionTextBlock()
    {
        return $this->container['description_text_block'];
    }

    /**
     * Sets description_text_block
     *
     * @param \SellingPartnerApi\Model\AplusContentV20201101\StandardTextBlock|null $description_text_block description_text_block
     *
     * @return self
     */
    public function setDescriptionTextBlock($description_text_block)
    {
        $this->container['description_text_block'] = $description_text_block;

        return $this;
    }
    /**
     * Gets description_list_block
     *
     * @return \SellingPartnerApi\Model\AplusContentV20201101\StandardTextListBlock|null
     */
    public function getDescriptionListBlock()
    {
        return $this->container['description_list_block'];
    }

    /**
     * Sets description_list_block
     *
     * @param \SellingPartnerApi\Model\AplusContentV20201101\StandardTextListBlock|null $description_list_block description_list_block
     *
     * @return self
     */
    public function setDescriptionListBlock($description_list_block)
    {
        $this->container['description_list_block'] = $description_list_block;

        return $this;
    }
    /**
     * Gets sidebar_image_text_block
     *
     * @return \SellingPartnerApi\Model\AplusContentV20201101\StandardImageTextBlock|null
     */
    public function getSidebarImageTextBlock()
    {
        return $this->container['sidebar_image_text_block'];
    }

    /**
     * Sets sidebar_image_text_block
     *
     * @param \SellingPartnerApi\Model\AplusContentV20201101\StandardImageTextBlock|null $sidebar_image_text_block sidebar_image_text_block
     *
     * @return self
     */
    public function setSidebarImageTextBlock($sidebar_image_text_block)
    {
        $this->container['sidebar_image_text_block'] = $sidebar_image_text_block;

        return $this;
    }
    /**
     * Gets sidebar_list_block
     *
     * @return \SellingPartnerApi\Model\AplusContentV20201101\StandardTextListBlock|null
     */
    public function getSidebarListBlock()
    {
        return $this->container['sidebar_list_block'];
    }

    /**
     * Sets sidebar_list_block
     *
     * @param \SellingPartnerApi\Model\AplusContentV20201101\StandardTextListBlock|null $sidebar_list_block sidebar_list_block
     *
     * @return self
     */
    public function setSidebarListBlock($sidebar_list_block)
    {
        $this->container['sidebar_list_block'] = $sidebar_list_block;

        return $this;
    }
}


