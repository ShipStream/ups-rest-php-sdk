<?php

namespace ShipStream\Ups\Normalizer;

use ShipStream\Ups\Api\Normalizer\ShipmentResponseResponseNormalizer as BaseNormalizer;
use function is_array;

class ShipmentResponseResponseNormalizer extends BaseNormalizer
{
    /**
     * @inheritDoc
     */
    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if ($data === null || is_array($data) === false) {
            return parent::denormalize($data, $class, $format, $context);
        }

        // Force Alert to always be an array even when the API returns a single value
        // @see https://github.com/UPS-API/api-documentation/issues/3
        if (isset($data['Alert']) && ! array_is_list($data['Alert'])) {
            $data['Alert'] = [$data['Alert']];
        }
        return parent::denormalize($data, $class, $format, $context);
    }
}
