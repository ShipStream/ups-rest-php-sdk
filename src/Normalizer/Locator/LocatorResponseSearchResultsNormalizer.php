<?php

namespace ShipStream\Ups\Normalizer\Locator;

use ShipStream\Ups\Api\Normalizer\LocatorResponseSearchResultsNormalizer as BaseNormalizer;
use Symfony\Component\HttpKernel\Kernel;
use function array_is_list;
use function is_array;

if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class LocatorResponseSearchResultsNormalizer extends BaseNormalizer
    {
        /**
         * @inheritDoc
         */
        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if ($data === null || is_array($data) === false) {
                return parent::denormalize($data, $type, $format, $context);
            }

            // Force attributes to always be an array even when the API returns a single value
            if (isset($data['GeocodeCandidate']) && !array_is_list($data['GeocodeCandidate'])) {
                $data['GeocodeCandidate'] = [$data['GeocodeCandidate']];
            }
            if (isset($data['Disclaimer']) && !array_is_list($data['Disclaimer'])) {
                $data['Disclaimer'] = [$data['Disclaimer']];
            }
            if (isset($data['AvailableLocationAttributes']) && !array_is_list($data['AvailableLocationAttributes'])) {
                $data['AvailableLocationAttributes'] = [$data['AvailableLocationAttributes']];
            }
            return parent::denormalize($data, $type, $format, $context);
        }
    }
} else {
    class LocatorResponseSearchResultsNormalizer extends BaseNormalizer
    {
        /**
         * @inheritDoc
         */
        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if ($data === null || is_array($data) === false) {
                return parent::denormalize($data, $type, $format, $context);
            }

            // Force attributes to always be an array even when the API returns a single value
            if (isset($data['GeocodeCandidate']) && !array_is_list($data['GeocodeCandidate'])) {
                $data['GeocodeCandidate'] = [$data['GeocodeCandidate']];
            }
            if (isset($data['Disclaimer']) && !array_is_list($data['Disclaimer'])) {
                $data['Disclaimer'] = [$data['Disclaimer']];
            }
            if (isset($data['AvailableLocationAttributes']) && !array_is_list($data['AvailableLocationAttributes'])) {
                $data['AvailableLocationAttributes'] = [$data['AvailableLocationAttributes']];
            }
            return parent::denormalize($data, $type, $format, $context);
        }
    }
}