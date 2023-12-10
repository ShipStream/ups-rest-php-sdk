<?php

namespace ShipStream\Ups\Normalizer\Rating;

use ShipStream\Ups\Api\Normalizer\RatedShipmentRatedPackageNormalizer as BaseNormalizer;
use function array_is_list;
use function is_array;

class RatedShipmentRatedPackageNormalizer extends BaseNormalizer
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
        if (isset($data['Accessorial']) && ! array_is_list($data['Accessorial'])) {
            $data['Accessorial'] = [$data['Accessorial']];
        }
        if (isset($data['ItemizedCharges']) && ! array_is_list($data['ItemizedCharges'])) {
            $data['ItemizedCharges'] = [$data['ItemizedCharges']];
        }
        if (isset($data['RateModifier']) && ! array_is_list($data['RateModifier'])) {
            $data['RateModifier'] = [$data['RateModifier']];
        }
        return parent::denormalize($data, $class, $format, $context);
    }
}
