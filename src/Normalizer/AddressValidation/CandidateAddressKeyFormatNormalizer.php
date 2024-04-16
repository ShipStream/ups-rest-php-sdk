<?php

namespace ShipStream\Ups\Normalizer\AddressValidation;

use ShipStream\Ups\Api\Normalizer\CandidateAddressKeyFormatNormalizer as BaseNormalizer;
use Symfony\Component\HttpKernel\Kernel;
use function is_array;

if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class CandidateAddressKeyFormatNormalizer extends BaseNormalizer
    {
        /**
         * @inheritDoc
         */
        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if ($data === null || is_array($data) === false) {
                return parent::denormalize($data, $type, $format, $context);
            }

            // Force AddressLine to always be an array even when the API returns a single value
            // @see https://github.com/UPS-API/api-documentation/issues/3
            if (isset($data['AddressLine']) && ! is_array($data['AddressLine'])) {
                $data['AddressLine'] = [$data['AddressLine']];
            }
            return parent::denormalize($data, $type, $format, $context);
        }
    }
} else {
    class CandidateAddressKeyFormatNormalizer extends BaseNormalizer
    {
        /**
         * @inheritDoc
         */
        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if ($data === null || is_array($data) === false) {
                return parent::denormalize($data, $type, $format, $context);
            }

            // Force AddressLine to always be an array even when the API returns a single value
            // @see https://github.com/UPS-API/api-documentation/issues/3
            if (isset($data['AddressLine']) && ! is_array($data['AddressLine'])) {
                $data['AddressLine'] = [$data['AddressLine']];
            }
            return parent::denormalize($data, $type, $format, $context);
        }
    }
}