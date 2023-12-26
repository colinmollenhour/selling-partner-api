<?php

namespace SellingPartnerApi\Seller\SellersV1\Dto;

class Marketplace
{
    /**
     * @param  string  $id The encrypted marketplace value.
     * @param  string  $name Marketplace name.
     * @param  string  $countryCode The ISO 3166-1 alpha-2 format country code of the marketplace.
     * @param  string  $defaultCurrencyCode The ISO 4217 format currency code of the marketplace.
     * @param  string  $defaultLanguageCode The ISO 639-1 format language code of the marketplace.
     * @param  string  $domainName The domain name of the marketplace.
     */
    public function __construct(
        public string $id,
        public string $name,
        public string $countryCode,
        public string $defaultCurrencyCode,
        public string $defaultLanguageCode,
        public string $domainName,
    ) {
    }
}