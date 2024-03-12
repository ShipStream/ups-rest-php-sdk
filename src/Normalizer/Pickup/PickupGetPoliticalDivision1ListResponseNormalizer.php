<?php

namespace ShipStream\Ups\Normalizer\Pickup;

use ShipStream\Ups\Api\Normalizer\PickupGetPoliticalDivision1ListResponseNormalizer as BaseNormalizer;
use function is_array;

class PickupGetPoliticalDivision1ListResponseNormalizer extends BaseNormalizer
{
    /**
     * @inheritDoc
     */
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if ($data === null || is_array($data) === false) {
            return parent::denormalize($data, $type, $format, $context);
        }

        // Force PoliticalDivision1 to always be an array even when the API returns a single value
        if (isset($data['PoliticalDivision1']) && ! is_array($data['PoliticalDivision1'])) {
            $data['PoliticalDivision1'] = [$data['PoliticalDivision1']];
        }
        return parent::denormalize($data, $type, $format, $context);
    }
}
