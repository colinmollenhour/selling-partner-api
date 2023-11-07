<?php declare(strict_types=1);
/**
 * ShipmentStatus
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

use SellingPartnerApi\Model\ModelInterface;
use SellingPartnerApi\ObjectSerializer;

/**
 * ShipmentStatus Class Doc Comment
 *
 * @category Class
 * @description Indicates the status of the inbound shipment. When used with the createInboundShipment operation, WORKING is the only valid value. When used with the updateInboundShipment operation, possible values are WORKING, SHIPPED or CANCELLED.
 * @package  SellingPartnerApi
 * @group 
 */
class ShipmentStatus
{
    public $value;

    /**
     * Possible values of this enum
     */
    const WORKING = 'WORKING';
    const SHIPPED = 'SHIPPED';
    const RECEIVING = 'RECEIVING';
    const CANCELLED = 'CANCELLED';
    const DELETED = 'DELETED';
    const CLOSED = 'CLOSED';
    const ERROR = 'ERROR';
    const IN_TRANSIT = 'IN_TRANSIT';
    const DELIVERED = 'DELIVERED';
    const CHECKED_IN = 'CHECKED_IN';
    const READY_TO_SHIP = 'READY_TO_SHIP';
    const CREATED = 'CREATED';
    const CREATING = 'CREATING';
    const ABANDONED = 'ABANDONED';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        $baseVals = [
            self::WORKING,
            self::SHIPPED,
            self::RECEIVING,
            self::CANCELLED,
            self::DELETED,
            self::CLOSED,
            self::ERROR,
            self::IN_TRANSIT,
            self::DELIVERED,
            self::CHECKED_IN,
            self::READY_TO_SHIP,
            self::CREATED,
            self::CREATING,
            self::ABANDONED,
        ];
        // This is necessary because Amazon does not consistently capitalize their
        // enum values, so we do case-insensitive enum value validation in ObjectSerializer
        $ucVals = array_map(function ($val) { return strtoupper($val); }, $baseVals);
        return array_merge($baseVals, $ucVals);
    }

    public function __construct($value)
    {
        if (is_null($value) || !in_array($value, self::getAllowableEnumValues(), true)) {
            throw new \InvalidArgumentException(sprintf("Invalid value %s for enum 'ShipmentStatus', must be one of '%s'", $value, implode("', '", self::getAllowableEnumValues())));
        }

        $this->value = $value;
    }

    /**
     * Convert the enum value to a string.
     *
     * @return string
     */
    public function __toString()
    {
        return $this->value;
    }
}


