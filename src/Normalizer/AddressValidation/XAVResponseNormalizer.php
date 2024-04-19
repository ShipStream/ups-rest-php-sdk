<?php

namespace ShipStream\Ups\Normalizer\AddressValidation;

use ShipStream\Ups\Api\Normalizer\XAVResponseNormalizer as BaseNormalizer;
use Symfony\Component\HttpKernel\Kernel;
use function is_array;

class XAVResponseNormalizer extends BaseNormalizer
{
    /**
     * @inheritDoc
     */
    public function denormalize($data, $type, $format = null, array $context = [])
    {
        if ($data === null || is_array($data) === false) {
            return parent::denormalize($data, $type, $format, $context);
        }

        // Force Candidate to always be an array even when the API returns a single value
        // @see https://github.com/UPS-API/api-documentation/issues/3
        if (isset($data['Candidate']) && !is_array($data['Candidate'])) {
            $data['Candidate'] = [$data['Candidate']];
        }
        return parent::denormalize($data, $type, $format, $context);
    }
}
