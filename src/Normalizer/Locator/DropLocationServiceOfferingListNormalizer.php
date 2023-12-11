<?php

namespace ShipStream\Ups\Normalizer\Locator;

use ShipStream\Ups\Api\Normalizer\DropLocationServiceOfferingListNormalizer as BaseNormalizer;
use function array_is_list;
use function is_array;

class DropLocationServiceOfferingListNormalizer extends BaseNormalizer
{
    /**
     * @inheritDoc
     */
    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if ($data === null || is_array($data) === false) {
            return parent::denormalize($data, $class, $format, $context);
        }

        // Force ServiceOffering to always be an array even when the API returns a single value
        if (isset($data['ServiceOffering']) && ! array_is_list($data['ServiceOffering'])) {
            $data['ServiceOffering'] = [$data['ServiceOffering']];
        }
        return parent::denormalize($data, $class, $format, $context);
    }
}
