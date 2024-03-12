<?php

namespace ShipStream\Ups\Normalizer\QuantumView;

use ShipStream\Ups\Api\Normalizer\QuantumViewResponseQuantumViewEventsNormalizer as BaseNormalizer;
use function array_is_list;
use function is_array;

class QuantumViewResponseQuantumViewEventsNormalizer extends BaseNormalizer
{
    /**
     * @inheritDoc
     */
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if ($data === null || is_array($data) === false) {
            return parent::denormalize($data, $type, $format, $context);
        }

        // Force SubscriptionFile to always be an array even when the API returns a single value
        if (isset($data['SubscriptionEvents']) && ! array_is_list($data['SubscriptionEvents'])) {
            $data['SubscriptionEvents'] = [$data['SubscriptionEvents']];
        }
        return parent::denormalize($data, $type, $format, $context);
    }
}
