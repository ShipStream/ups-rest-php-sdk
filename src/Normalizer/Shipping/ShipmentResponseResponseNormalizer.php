<?php

namespace ShipStream\Ups\Normalizer\Shipping;

use ShipStream\Ups\Api\Normalizer\ShipmentResponseResponseNormalizer as BaseNormalizer;
use function array_is_list;
use function is_array;

class ShipmentResponseResponseNormalizer extends BaseNormalizer
{
    /**
     * @inheritDoc
     */
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if ($data === null || is_array($data) === false) {
            return parent::denormalize($data, $type, $format, $context);
        }

        // Force Alert to always be an array even when the API returns a single value
        // @see https://github.com/UPS-API/api-documentation/issues/3
        if (isset($data['Alert']) && ! array_is_list($data['Alert'])) {
            $data['Alert'] = [$data['Alert']];
        }
        return parent::denormalize($data, $type, $format, $context);
    }
}
