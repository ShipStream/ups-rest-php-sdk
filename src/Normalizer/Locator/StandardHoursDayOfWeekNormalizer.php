<?php

namespace ShipStream\Ups\Normalizer\Locator;

use ShipStream\Ups\Api\Normalizer\StandardHoursDayOfWeekNormalizer as BaseNormalizer;
use function is_array;

class StandardHoursDayOfWeekNormalizer extends BaseNormalizer
{
    /**
     * @inheritDoc
     */
    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if ($data === null || is_array($data) === false) {
            return parent::denormalize($data, $class, $format, $context);
        }

        // Force OpenHours and CloseHours to always be an array even when the API returns a single value
        if (isset($data['OpenHours']) && !is_array($data['OpenHours'])) {
            $data['OpenHours'] = [$data['OpenHours']];
        }
        if (isset($data['CloseHours']) && !is_array($data['CloseHours'])) {
            $data['CloseHours'] = [$data['CloseHours']];
        }
        return parent::denormalize($data, $class, $format, $context);
    }
}
