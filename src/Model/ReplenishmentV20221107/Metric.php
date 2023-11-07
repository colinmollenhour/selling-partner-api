<?php declare(strict_types=1);
/**
 * Metric
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for Replenishment
 *
 * The Selling Partner API for Replenishment (Replenishment API) provides programmatic access to replenishment program metrics and offers. These programs provide recurring delivery (automatic or manual) of any replenishable item at a frequency chosen by the customer.
 *
 * The version of the OpenAPI document: 2022-11-07
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SellingPartnerApi\Model\ReplenishmentV20221107;
use ArrayAccess;

use SellingPartnerApi\Model\ModelInterface;
use SellingPartnerApi\ObjectSerializer;

/**
 * Metric Class Doc Comment
 *
 * @category Class
 * @description The metric name and description.
 * @package  SellingPartnerApi
 * @group 
 */
class Metric
{
    public $value;

    /**
     * Possible values of this enum
     */
    const SHIPPED_SUBSCRIPTION_UNITS = 'SHIPPED_SUBSCRIPTION_UNITS';
    const TOTAL_SUBSCRIPTIONS_REVENUE = 'TOTAL_SUBSCRIPTIONS_REVENUE';
    const ACTIVE_SUBSCRIPTIONS = 'ACTIVE_SUBSCRIPTIONS';
    const NOT_DELIVERED_DUE_TO_OOS = 'NOT_DELIVERED_DUE_TO_OOS';
    const SUBSCRIBER_NON_SUBSCRIBER_AVERAGE_REVENUE = 'SUBSCRIBER_NON_SUBSCRIBER_AVERAGE_REVENUE';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        $baseVals = [
            self::SHIPPED_SUBSCRIPTION_UNITS,
            self::TOTAL_SUBSCRIPTIONS_REVENUE,
            self::ACTIVE_SUBSCRIPTIONS,
            self::NOT_DELIVERED_DUE_TO_OOS,
            self::SUBSCRIBER_NON_SUBSCRIBER_AVERAGE_REVENUE,
        ];
        // This is necessary because Amazon does not consistently capitalize their
        // enum values, so we do case-insensitive enum value validation in ObjectSerializer
        $ucVals = array_map(function ($val) { return strtoupper($val); }, $baseVals);
        return array_merge($baseVals, $ucVals);
    }

    public function __construct($value)
    {
        if (is_null($value) || !in_array($value, self::getAllowableEnumValues(), true)) {
            throw new \InvalidArgumentException(sprintf("Invalid value %s for enum 'Metric', must be one of '%s'", $value, implode("', '", self::getAllowableEnumValues())));
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


