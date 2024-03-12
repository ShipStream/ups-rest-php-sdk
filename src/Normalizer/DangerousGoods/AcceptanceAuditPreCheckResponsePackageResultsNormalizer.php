<?php

namespace ShipStream\Ups\Normalizer\DangerousGoods;

use ShipStream\Ups\Api\Normalizer\AcceptanceAuditPreCheckResponsePackageResultsNormalizer as BaseNormalizer;
use function array_is_list;
use function is_array;

class AcceptanceAuditPreCheckResponsePackageResultsNormalizer extends BaseNormalizer
{
    /**
     * @inheritDoc
     */
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if ($data === null || is_array($data) === false) {
            return parent::denormalize($data, $type, $format, $context);
        }

        // Force ChemicalRecordResults to always be an array even when the API returns a single value
        if (isset($data['ChemicalRecordResults']) && ! array_is_list($data['ChemicalRecordResults'])) {
            $data['ChemicalRecordResults'] = [$data['ChemicalRecordResults']];
        }
        return parent::denormalize($data, $type, $format, $context);
    }
}
