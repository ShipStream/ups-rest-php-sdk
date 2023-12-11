<?php

namespace ShipStream\Ups\Normalizer\AddressValidation;

use ShipStream\Ups\Api\Normalizer\XAVResponseCandidateNormalizer as BaseNormalizer;
use function array_is_list;
use function is_array;

/**
 * Custom deserializer for "Candidate" object.
 */
class XAVResponseCandidateNormalizer extends BaseNormalizer
{
    /**
     * @inheritDoc
     */
    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if ($data === null || is_array($data) === false) {
            return parent::denormalize($data, $class, $format, $context);
        }

        // Force AddressKeyFormat to always be an array even when the API returns a single value
        // @see https://github.com/UPS-API/api-documentation/issues/3
        if (isset($data['AddressKeyFormat']) && ! array_is_list($data['AddressKeyFormat'])) {
            $data['AddressKeyFormat'] = [$data['AddressKeyFormat']];
        }
        return parent::denormalize($data, $class, $format, $context);
    }
}
