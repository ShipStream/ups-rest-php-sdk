<?php

namespace ShipStream\Ups\Normalizer\QuantumView;

use ShipStream\Ups\Api\Normalizer\SubscriptionEventsSubscriptionFileNormalizer as BaseNormalizer;
use Symfony\Component\HttpKernel\Kernel;
use function array_is_list;
use function is_array;

if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class SubscriptionEventsSubscriptionFileNormalizer extends BaseNormalizer
    {
        /**
         * @inheritDoc
         */
        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if ($data === null || is_array($data) === false) {
                return parent::denormalize($data, $type, $format, $context);
            }

            // Force Manifest to always be an array even when the API returns a single value
            if (isset($data['Manifest']) && !array_is_list($data['Manifest'])) {
                $data['Manifest'] = [$data['Manifest']];
            }
            if (isset($data['Origin']) && !array_is_list($data['Origin'])) {
                $data['Origin'] = [$data['Origin']];
            }
            if (isset($data['Exception']) && !array_is_list($data['Exception'])) {
                $data['Exception'] = [$data['Exception']];
            }
            if (isset($data['Delivery']) && !array_is_list($data['Delivery'])) {
                $data['Delivery'] = [$data['Delivery']];
            }
            if (isset($data['Generic']) && !array_is_list($data['Generic'])) {
                $data['Generic'] = [$data['Generic']];
            }
            return parent::denormalize($data, $type, $format, $context);
        }
    }
} else {
    class SubscriptionEventsSubscriptionFileNormalizer extends BaseNormalizer
    {
        /**
         * @inheritDoc
         */
        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if ($data === null || is_array($data) === false) {
                return parent::denormalize($data, $type, $format, $context);
            }

            // Force Manifest to always be an array even when the API returns a single value
            if (isset($data['Manifest']) && !array_is_list($data['Manifest'])) {
                $data['Manifest'] = [$data['Manifest']];
            }
            if (isset($data['Origin']) && !array_is_list($data['Origin'])) {
                $data['Origin'] = [$data['Origin']];
            }
            if (isset($data['Exception']) && !array_is_list($data['Exception'])) {
                $data['Exception'] = [$data['Exception']];
            }
            if (isset($data['Delivery']) && !array_is_list($data['Delivery'])) {
                $data['Delivery'] = [$data['Delivery']];
            }
            if (isset($data['Generic']) && !array_is_list($data['Generic'])) {
                $data['Generic'] = [$data['Generic']];
            }
            return parent::denormalize($data, $type, $format, $context);
        }
    }
}