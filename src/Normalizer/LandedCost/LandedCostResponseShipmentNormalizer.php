<?php

namespace ShipStream\Ups\Normalizer\LandedCost;

use ShipStream\Ups\Api\Normalizer\LandedCostResponseShipmentNormalizer as BaseNormalizer;
use function array_is_list;
use function is_array;

class LandedCostResponseShipmentNormalizer extends BaseNormalizer
{
    /**
     * @inheritDoc
     */
    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if ($data === null || is_array($data) === false) {
            return parent::denormalize($data, $class, $format, $context);
        }

        // Force shipmentItems to always be an array even when the API returns a single value
        if (isset($data['shipmentItems']) && ! array_is_list($data['shipmentItems'])) {
            $data['shipmentItems'] = [$data['shipmentItems']];
        }
        return parent::denormalize($data, $class, $format, $context);
    }
}
