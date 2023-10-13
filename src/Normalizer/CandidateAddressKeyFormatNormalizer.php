<?php

namespace ShipStream\Ups\Normalizer;

use ShipStream\Ups\Api\Normalizer\CandidateAddressKeyFormatNormalizer as BaseNormalizer;
use function is_array;

class CandidateAddressKeyFormatNormalizer extends BaseNormalizer
{
    /**
     * @inheritDoc
     */
    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if ($data === null || is_array($data) === false) {
            return parent::denormalize($data, $class, $format, $context);
        }

        // Force AddressLine to always be an array even when the API returns a single value
        // @see https://github.com/UPS-API/api-documentation/issues/3
        if (isset($data['AddressLine']) && ! is_array($data['AddressLine'])) {
            $data['AddressLine'] = [$data['AddressLine']];
        }
        return parent::denormalize($data, $class, $format, $context);
    }
}
