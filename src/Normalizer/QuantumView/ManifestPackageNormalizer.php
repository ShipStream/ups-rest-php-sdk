<?php

namespace ShipStream\Ups\Normalizer\QuantumView;

use ShipStream\Ups\Api\Normalizer\ManifestPackageNormalizer as BaseNormalizer;
use function array_is_list;
use function is_array;

class ManifestPackageNormalizer extends BaseNormalizer
{
    /**
     * @inheritDoc
     */
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if ($data === null || is_array($data) === false) {
            return parent::denormalize($data, $type, $format, $context);
        }

        // Force Activity to always be an array even when the API returns a single value
        if (isset($data['Activity']) && ! array_is_list($data['Activity'])) {
            $data['Activity'] = [$data['Activity']];
        }
        return parent::denormalize($data, $type, $format, $context);
    }
}
