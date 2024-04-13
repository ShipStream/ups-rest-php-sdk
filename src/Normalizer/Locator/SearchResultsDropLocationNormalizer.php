<?php

namespace ShipStream\Ups\Normalizer\Locator;

use ShipStream\Ups\Api\Normalizer\SearchResultsDropLocationNormalizer as BaseNormalizer;
use Symfony\Component\HttpKernel\Kernel;
use function array_is_list;
use function is_array;

if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class SearchResultsDropLocationNormalizer extends BaseNormalizer
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
            if (isset($data['PhoneNumber']) && !is_array($data['PhoneNumber'])) {
                $data['PhoneNumber'] = [$data['PhoneNumber']];
            }
            if (isset($data['LocationAttribute']) && !array_is_list($data['LocationAttribute'])) {
                $data['LocationAttribute'] = [$data['LocationAttribute']];
            }
            if (isset($data['SpecialInstructions']) && !array_is_list($data['SpecialInstructions'])) {
                $data['SpecialInstructions'] = [$data['SpecialInstructions']];
            }
            if (isset($data['LatestGroundDropOffTime']) && !is_array($data['LatestGroundDropOffTime'])) {
                $data['LatestGroundDropOffTime'] = [$data['LatestGroundDropOffTime']];
            }
            if (isset($data['LatestAirDropOffTime']) && !is_array($data['LatestAirDropOffTime'])) {
                $data['LatestAirDropOffTime'] = [$data['LatestAirDropOffTime']];
            }
            if (isset($data['Disclaimer']) && !is_array($data['Disclaimer'])) {
                $data['Disclaimer'] = [$data['Disclaimer']];
            }
            if (isset($data['LocalizedInstruction']) && !array_is_list($data['LocalizedInstruction'])) {
                $data['LocalizedInstruction'] = [$data['LocalizedInstruction']];
            }
            if (isset($data['PromotionInformation']) && !array_is_list($data['PromotionInformation'])) {
                $data['PromotionInformation'] = [$data['PromotionInformation']];
            }
            return parent::denormalize($data, $type, $format, $context);
        }
    }
} else {
    class SearchResultsDropLocationNormalizer extends BaseNormalizer
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
            if (isset($data['PhoneNumber']) && !is_array($data['PhoneNumber'])) {
                $data['PhoneNumber'] = [$data['PhoneNumber']];
            }
            if (isset($data['LocationAttribute']) && !array_is_list($data['LocationAttribute'])) {
                $data['LocationAttribute'] = [$data['LocationAttribute']];
            }
            if (isset($data['SpecialInstructions']) && !array_is_list($data['SpecialInstructions'])) {
                $data['SpecialInstructions'] = [$data['SpecialInstructions']];
            }
            if (isset($data['LatestGroundDropOffTime']) && !is_array($data['LatestGroundDropOffTime'])) {
                $data['LatestGroundDropOffTime'] = [$data['LatestGroundDropOffTime']];
            }
            if (isset($data['LatestAirDropOffTime']) && !is_array($data['LatestAirDropOffTime'])) {
                $data['LatestAirDropOffTime'] = [$data['LatestAirDropOffTime']];
            }
            if (isset($data['Disclaimer']) && !is_array($data['Disclaimer'])) {
                $data['Disclaimer'] = [$data['Disclaimer']];
            }
            if (isset($data['LocalizedInstruction']) && !array_is_list($data['LocalizedInstruction'])) {
                $data['LocalizedInstruction'] = [$data['LocalizedInstruction']];
            }
            if (isset($data['PromotionInformation']) && !array_is_list($data['PromotionInformation'])) {
                $data['PromotionInformation'] = [$data['PromotionInformation']];
            }
            return parent::denormalize($data, $type, $format, $context);
        }
    }
}