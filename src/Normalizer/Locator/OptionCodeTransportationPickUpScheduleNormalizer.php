<?php

namespace ShipStream\Ups\Normalizer\Locator;

use ShipStream\Ups\Api\Normalizer\OptionCodeTransportationPickUpScheduleNormalizer as BaseNormalizer;
use function array_is_list;
use function is_array;

class OptionCodeTransportationPickUpScheduleNormalizer extends BaseNormalizer
{
    /**
     * @inheritDoc
     */
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if ($data === null || is_array($data) === false) {
            return parent::denormalize($data, $type, $format, $context);
        }

        // Force PickUp to always be an array even when the API returns a single value
        if (isset($data['PickUp']) && ! array_is_list($data['PickUp'])) {
            $data['PickUp'] = [$data['PickUp']];
        }
        return parent::denormalize($data, $type, $format, $context);
    }
}
