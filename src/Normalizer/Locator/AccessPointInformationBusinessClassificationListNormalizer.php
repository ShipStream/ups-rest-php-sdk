<?php

namespace ShipStream\Ups\Normalizer\Locator;

use ShipStream\Ups\Api\Normalizer\AccessPointInformationBusinessClassificationListNormalizer as BaseNormalizer;
use function array_is_list;
use function is_array;

class AccessPointInformationBusinessClassificationListNormalizer extends BaseNormalizer
{
    /**
     * @inheritDoc
     */
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if ($data === null || is_array($data) === false) {
            return parent::denormalize($data, $type, $format, $context);
        }

        // Force BusinessClassification to always be an array even when the API returns a single value
        if (isset($data['BusinessClassification']) && ! array_is_list($data['BusinessClassification'])) {
            $data['BusinessClassification'] = [$data['BusinessClassification']];
        }
        return parent::denormalize($data, $type, $format, $context);
    }
}
