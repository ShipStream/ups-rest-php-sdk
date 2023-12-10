<?php

namespace ShipStream\Ups\Normalizer\Rating;

use ShipStream\Ups\Api\Normalizer\RatedShipmentNegotiatedRateChargesNormalizer as BaseNormalizer;
use function array_is_list;
use function is_array;

class RatedShipmentNegotiatedRateChargesNormalizer extends BaseNormalizer
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
        if (isset($data['ItemizedCharges']) && ! array_is_list($data['ItemizedCharges'])) {
            $data['ItemizedCharges'] = [$data['ItemizedCharges']];
        }
        if (isset($data['TaxCharges']) && ! array_is_list($data['TaxCharges'])) {
            $data['TaxCharges'] = [$data['TaxCharges']];
        }
        return parent::denormalize($data, $class, $format, $context);
    }
}
