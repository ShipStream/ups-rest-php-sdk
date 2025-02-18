<?php

namespace ShipStream\Ups\Normalizer\Shipping;

use ShipStream\Ups\Api\Normalizer\LabelRecoveryResponseNormalizer as BaseNormalizer;
use function array_is_list;
use function is_array;

class LabelRecoveryResponseNormalizer extends BaseNormalizer
{
    /**
     * @inheritDoc
     */
    public function denormalize($data, $type, $format = null, array $context = [])
    {
        if ($data === null || is_array($data) === false) {
            return parent::denormalize($data, $type, $format, $context);
        }

        // Force LabelResults to always be an array even when the API returns a single value
        if (isset($data['LabelResults']) && !array_is_list($data['LabelResults'])) {
            $data['LabelResults'] = [$data['LabelResults']];
        }
        return parent::denormalize($data, $type, $format, $context);
    }
}