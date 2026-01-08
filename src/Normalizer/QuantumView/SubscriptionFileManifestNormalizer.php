<?php

namespace ShipStream\Ups\Normalizer\QuantumView;

use ShipStream\Ups\Api\Normalizer\SubscriptionFileManifestNormalizer as BaseNormalizer;
use function array_is_list;
use function is_array;

class SubscriptionFileManifestNormalizer extends BaseNormalizer
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
        if (isset($data['ReferenceNumber']) && ! array_is_list($data['ReferenceNumber'])) {
            $data['ReferenceNumber'] = [$data['ReferenceNumber']];
        }
        if (isset($data['Package']) && ! array_is_list($data['Package'])) {
            $data['Package'] = [$data['Package']];
        }
        return parent::denormalize($data, $type, $format, $context);
    }
}
