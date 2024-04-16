<?php

namespace ShipStream\Ups\Normalizer\Rating;

use ShipStream\Ups\Api\Normalizer\RatedShipmentRatedPackageNormalizer as BaseNormalizer;
use Symfony\Component\HttpKernel\Kernel;
use function array_is_list;
use function is_array;

if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class RatedShipmentRatedPackageNormalizer extends BaseNormalizer
    {
        /**
         * @inheritDoc
         */
        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if ($data === null || is_array($data) === false) {
                return parent::denormalize($data, $type, $format, $context);
            }

            // Force fields to always be an array even when the API returns a single value
            if (isset($data['Accessorial']) && !array_is_list($data['Accessorial'])) {
                $data['Accessorial'] = [$data['Accessorial']];
            }
            if (isset($data['ItemizedCharges']) && !array_is_list($data['ItemizedCharges'])) {
                $data['ItemizedCharges'] = [$data['ItemizedCharges']];
            }
            if (isset($data['RateModifier']) && !array_is_list($data['RateModifier'])) {
                $data['RateModifier'] = [$data['RateModifier']];
            }
            return parent::denormalize($data, $type, $format, $context);
        }
    }
} else {
    class RatedShipmentRatedPackageNormalizer extends BaseNormalizer
    {
        /**
         * @inheritDoc
         */
        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if ($data === null || is_array($data) === false) {
                return parent::denormalize($data, $type, $format, $context);
            }

            // Force fields to always be an array even when the API returns a single value
            if (isset($data['Accessorial']) && !array_is_list($data['Accessorial'])) {
                $data['Accessorial'] = [$data['Accessorial']];
            }
            if (isset($data['ItemizedCharges']) && !array_is_list($data['ItemizedCharges'])) {
                $data['ItemizedCharges'] = [$data['ItemizedCharges']];
            }
            if (isset($data['RateModifier']) && !array_is_list($data['RateModifier'])) {
                $data['RateModifier'] = [$data['RateModifier']];
            }
            return parent::denormalize($data, $type, $format, $context);
        }
    }
}