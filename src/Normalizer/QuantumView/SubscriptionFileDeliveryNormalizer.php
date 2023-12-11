<?php

namespace ShipStream\Ups\Normalizer\QuantumView;

use ShipStream\Ups\Api\Normalizer\SubscriptionFileDeliveryNormalizer as BaseNormalizer;
use function array_is_list;
use function is_array;

class SubscriptionFileDeliveryNormalizer extends BaseNormalizer
{
    /**
     * @inheritDoc
     */
    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if ($data === null || is_array($data) === false) {
            return parent::denormalize($data, $class, $format, $context);
        }

        // Force fields to always be an array even when the API returns a single value
        if (isset($data['PackageReferenceNumber']) && ! array_is_list($data['PackageReferenceNumber'])) {
            $data['PackageReferenceNumber'] = [$data['PackageReferenceNumber']];
        }
        if (isset($data['ShipmentReferenceNumber']) && ! array_is_list($data['ShipmentReferenceNumber'])) {
            $data['ShipmentReferenceNumber'] = [$data['ShipmentReferenceNumber']];
        }
        return parent::denormalize($data, $class, $format, $context);
    }
}
