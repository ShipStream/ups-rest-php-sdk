<?php

namespace ShipStream\Ups\Normalizer\DangerousGoods;

use ShipStream\Ups\Api\Normalizer\ChemicalReferenceDataResponseNormalizer as BaseNormalizer;
use function array_is_list;
use function is_array;

class ChemicalReferenceDataResponseNormalizer extends BaseNormalizer
{
    /**
     * @inheritDoc
     */
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if ($data === null || is_array($data) === false) {
            return parent::denormalize($data, $type, $format, $context);
        }

        // Force ChemicalData to always be an array even when the API returns a single value
        if (isset($data['ChemicalData']) && ! array_is_list($data['ChemicalData'])) {
            $data['ChemicalData'] = [$data['ChemicalData']];
        }
        return parent::denormalize($data, $type, $format, $context);
    }
}
