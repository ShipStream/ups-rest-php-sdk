<?php

namespace ShipStream\Ups\Normalizer\TForceFreightShipping;

use ShipStream\Ups\Api\Normalizer\FreightShipResponseShipmentResultsNormalizer as BaseNormalizer;
use function array_is_list;
use function is_array;

class FreightShipResponseShipmentResultsNormalizer extends BaseNormalizer
{
    /**
     * @inheritDoc
     */
    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if ($data === null || is_array($data) === false) {
            return parent::denormalize($data, $class, $format, $context);
        }

        // Force Rate to always be an array even when the API returns a single value
        if (isset($data['Rate']) && ! array_is_list($data['Rate'])) {
            $data['Rate'] = [$data['Rate']];
        }
        return parent::denormalize($data, $class, $format, $context);
    }
}
