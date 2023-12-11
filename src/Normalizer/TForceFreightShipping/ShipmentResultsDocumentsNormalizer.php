<?php

namespace ShipStream\Ups\Normalizer\TForceFreightShipping;

use ShipStream\Ups\Api\Normalizer\ShipmentResultsDocumentsNormalizer as BaseNormalizer;
use function array_is_list;
use function is_array;

class ShipmentResultsDocumentsNormalizer extends BaseNormalizer
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
        if (isset($data['Image']) && ! array_is_list($data['Image'])) {
            $data['Image'] = [$data['Image']];
        }
        if (isset($data['Forms']) && ! array_is_list($data['Forms'])) {
            $data['Forms'] = [$data['Forms']];
        }
        return parent::denormalize($data, $class, $format, $context);
    }
}
