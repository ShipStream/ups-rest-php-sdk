<?php

namespace ShipStream\Ups\Normalizer\QuantumView;

use ShipStream\Ups\Api\Normalizer\DeliveryLocationAddressArtifactFormatNormalizer as BaseNormalizer;
use function array_is_list;
use function is_array;

class DeliveryLocationAddressArtifactFormatNormalizer extends BaseNormalizer
{
    /**
     * @inheritDoc
     */
    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if ($data === null || is_array($data) === false) {
            return parent::denormalize($data, $class, $format, $context);
        }

        // Force AddressExtendedInformation to always be an array even when the API returns a single value
        if (isset($data['AddressExtendedInformation']) && ! array_is_list($data['AddressExtendedInformation'])) {
            $data['AddressExtendedInformation'] = [$data['AddressExtendedInformation']];
        }
        return parent::denormalize($data, $class, $format, $context);
    }
}
