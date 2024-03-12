<?php

namespace ShipStream\Ups\Normalizer\QuantumView;

use ShipStream\Ups\Api\Normalizer\ExceptionUpdatedAddressNormalizer as BaseNormalizer;
use function array_is_list;
use function is_array;

class ExceptionUpdatedAddressNormalizer extends BaseNormalizer
{
    /**
     * @inheritDoc
     */
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if ($data === null || is_array($data) === false) {
            return parent::denormalize($data, $type, $format, $context);
        }

        // Force AddressExtendedInformation to always be an array even when the API returns a single value
        if (isset($data['AddressExtendedInformation']) && ! array_is_list($data['AddressExtendedInformation'])) {
            $data['AddressExtendedInformation'] = [$data['AddressExtendedInformation']];
        }
        return parent::denormalize($data, $type, $format, $context);
    }
}
