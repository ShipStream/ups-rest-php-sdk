<?php

namespace ShipStream\Ups\Normalizer\Pickup;

use ShipStream\Ups\Api\Normalizer\PickupRateResponseRateResultNormalizer as BaseNormalizer;
use function array_is_list;
use function is_array;

class PickupRateResponseRateResultNormalizer extends BaseNormalizer
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
        if (isset($data['ChargeDetail']) && ! array_is_list($data['ChargeDetail'])) {
            $data['ChargeDetail'] = [$data['ChargeDetail']];
        }
        if (isset($data['TaxCharges']) && ! array_is_list($data['TaxCharges'])) {
            $data['TaxCharges'] = [$data['TaxCharges']];
        }
        return parent::denormalize($data, $class, $format, $context);
    }
}
