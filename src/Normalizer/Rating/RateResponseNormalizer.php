<?php

namespace ShipStream\Ups\Normalizer\Rating;

use ShipStream\Ups\Api\Normalizer\RateResponseNormalizer as BaseNormalizer;
use function array_is_list;
use function is_array;

class RateResponseNormalizer extends BaseNormalizer
{
    /**
     * @inheritDoc
     */
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if ($data === null || is_array($data) === false) {
            return parent::denormalize($data, $type, $format, $context);
        }

        // Force RatedShipment to always be an array even when the API returns a single value
        if (isset($data['RatedShipment']) && ! array_is_list($data['RatedShipment'])) {
            $data['RatedShipment'] = [$data['RatedShipment']];
        }
        return parent::denormalize($data, $type, $format, $context);
    }
}
