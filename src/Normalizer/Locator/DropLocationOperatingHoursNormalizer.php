<?php

namespace ShipStream\Ups\Normalizer\Locator;

use ShipStream\Ups\Api\Normalizer\DropLocationOperatingHoursNormalizer as BaseNormalizer;
use function array_is_list;
use function is_array;

class DropLocationOperatingHoursNormalizer extends BaseNormalizer
{
    /**
     * @inheritDoc
     */
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if ($data === null || is_array($data) === false) {
            return parent::denormalize($data, $type, $format, $context);
        }

        // Force StandardHours to always be an array even when the API returns a single value
        if (isset($data['StandardHours']) && ! array_is_list($data['StandardHours'])) {
            $data['StandardHours'] = [$data['StandardHours']];
        }
        return parent::denormalize($data, $type, $format, $context);
    }
}
