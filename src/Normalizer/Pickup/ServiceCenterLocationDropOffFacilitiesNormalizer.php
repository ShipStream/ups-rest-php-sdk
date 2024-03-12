<?php

namespace ShipStream\Ups\Normalizer\Pickup;

use ShipStream\Ups\Api\Normalizer\ServiceCenterLocationDropOffFacilitiesNormalizer as BaseNormalizer;
use function array_is_list;
use function is_array;

class ServiceCenterLocationDropOffFacilitiesNormalizer extends BaseNormalizer
{
    /**
     * @inheritDoc
     */
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if ($data === null || is_array($data) === false) {
            return parent::denormalize($data, $type, $format, $context);
        }

        // Force LocalizedInstruction to always be an array even when the API returns a single value
        if (isset($data['LocalizedInstruction']) && ! array_is_list($data['LocalizedInstruction'])) {
            $data['LocalizedInstruction'] = [$data['LocalizedInstruction']];
        }
        return parent::denormalize($data, $type, $format, $context);
    }
}
