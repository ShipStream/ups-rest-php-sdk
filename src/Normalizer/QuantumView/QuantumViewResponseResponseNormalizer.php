<?php

namespace ShipStream\Ups\Normalizer\QuantumView;

use ShipStream\Ups\Api\Normalizer\QuantumViewResponseResponseNormalizer as BaseNormalizer;
use function array_is_list;
use function is_array;

class QuantumViewResponseResponseNormalizer extends BaseNormalizer
{
    /**
     * @inheritDoc
     */
    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if ($data === null || is_array($data) === false) {
            return parent::denormalize($data, $class, $format, $context);
        }

        // Force Error to always be an array even when the API returns a single value
        if (isset($data['Error']) && ! array_is_list($data['Error'])) {
            $data['Error'] = [$data['Error']];
        }
        return parent::denormalize($data, $class, $format, $context);
    }
}
