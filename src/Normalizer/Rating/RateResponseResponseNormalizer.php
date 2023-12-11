<?php

namespace ShipStream\Ups\Normalizer\Rating;

use ShipStream\Ups\Api\Normalizer\RateResponseResponseNormalizer as BaseNormalizer;
use function array_is_list;
use function is_array;

class RateResponseResponseNormalizer extends BaseNormalizer
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
        if (isset($data['Alert']) && ! array_is_list($data['Alert'])) {
            $data['Alert'] = [$data['Alert']];
        }
        if (isset($data['AlertDetail']) && ! array_is_list($data['AlertDetail'])) {
            $data['AlertDetail'] = [$data['AlertDetail']];
        }
        return parent::denormalize($data, $class, $format, $context);
    }
}
