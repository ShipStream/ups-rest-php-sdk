<?php

namespace ShipStream\Ups\Normalizer\Locator;

use ShipStream\Ups\Api\Normalizer\StandardHoursDayOfWeekNormalizer as BaseNormalizer;
use function array_is_list;
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

        // Force DayOfWeek to always be an array even when the API returns a single value
        if (isset($data['DayOfWeek']) && ! array_is_list($data['DayOfWeek'])) {
            $data['DayOfWeek'] = [$data['DayOfWeek']];
        }
        return parent::denormalize($data, $class, $format, $context);
    }
}
