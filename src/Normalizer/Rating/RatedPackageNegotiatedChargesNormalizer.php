<?php

namespace ShipStream\Ups\Normalizer\Rating;

use ShipStream\Ups\Api\Normalizer\RatedPackageNegotiatedChargesNormalizer as BaseNormalizer;
use function array_is_list;
use function is_array;

class RatedPackageNegotiatedChargesNormalizer extends BaseNormalizer
{
    /**
     * @inheritDoc
     */
    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if ($data === null || is_array($data) === false) {
            return parent::denormalize($data, $class, $format, $context);
        }

        // Force ItemizedCharges to always be an array even when the API returns a single value
        if (isset($data['ItemizedCharges']) && ! array_is_list($data['ItemizedCharges'])) {
            $data['ItemizedCharges'] = [$data['ItemizedCharges']];
        }
        return parent::denormalize($data, $class, $format, $context);
    }
}
