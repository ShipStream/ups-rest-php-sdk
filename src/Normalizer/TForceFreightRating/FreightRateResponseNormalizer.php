<?php

namespace ShipStream\Ups\Normalizer\TForceFreightRating;

use ShipStream\Ups\Api\Normalizer\FreightRateResponseNormalizer as BaseNormalizer;
use function array_is_list;
use function is_array;

class FreightRateResponseNormalizer extends BaseNormalizer
{
    /**
     * @inheritDoc
     */
    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if ($data === null || is_array($data) === false) {
            return parent::denormalize($data, $class, $format, $context);
        }

        // Force fields to always be an array even when the API returns a single value
        if (isset($data['Rate']) && ! array_is_list($data['Rate'])) {
            $data['Rate'] = [$data['Rate']];
        }
        if (isset($data['Commodity']) && ! array_is_list($data['Commodity'])) {
            $data['Commodity'] = [$data['Commodity']];
        }
        if (isset($data['AlternateRatesResponse']) && ! array_is_list($data['AlternateRatesResponse'])) {
            $data['AlternateRatesResponse'] = [$data['AlternateRatesResponse']];
        }
        return parent::denormalize($data, $class, $format, $context);
    }
}
