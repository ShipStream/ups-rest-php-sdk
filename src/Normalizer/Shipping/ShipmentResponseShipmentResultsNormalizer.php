<?php

namespace ShipStream\Ups\Normalizer\Shipping;

use ShipStream\Ups\Api\Normalizer\ShipmentResponseShipmentResultsNormalizer as BaseNormalizer;
use function array_is_list;
use function is_array;

class ShipmentResponseShipmentResultsNormalizer extends BaseNormalizer
{
    /**
     * @inheritDoc
     */
    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if ($data === null || is_array($data) === false) {
            return parent::denormalize($data, $class, $format, $context);
        }

        // Force PackageResults to always be an array even when the API returns a single value
        // @see https://github.com/UPS-API/api-documentation/issues/3
        if (isset($data['PackageResults']) && ! array_is_list($data['PackageResults'])) {
            $data['PackageResults'] = [$data['PackageResults']];
        }
        return parent::denormalize($data, $class, $format, $context);
    }
}
