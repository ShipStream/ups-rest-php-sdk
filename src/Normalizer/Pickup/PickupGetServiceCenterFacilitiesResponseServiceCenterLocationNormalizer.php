<?php

namespace ShipStream\Ups\Normalizer\Pickup;

use ShipStream\Ups\Api\Normalizer\PickupGetServiceCenterFacilitiesResponseServiceCenterLocationNormalizer as BaseNormalizer;
use function array_is_list;
use function is_array;

class PickupGetServiceCenterFacilitiesResponseServiceCenterLocationNormalizer extends BaseNormalizer
{
    /**
     * @inheritDoc
     */
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if ($data === null || is_array($data) === false) {
            return parent::denormalize($data, $type, $format, $context);
        }

        // Force DropOffFacilities to always be an array even when the API returns a single value
        if (isset($data['DropOffFacilities']) && ! array_is_list($data['DropOffFacilities'])) {
            $data['DropOffFacilities'] = [$data['DropOffFacilities']];
        }
        return parent::denormalize($data, $type, $format, $context);
    }
}
