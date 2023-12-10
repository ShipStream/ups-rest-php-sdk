<?php

namespace ShipStream\Ups\Normalizer\Paperless;

use ShipStream\Ups\Api\Normalizer\UploadResponseResponseNormalizer as BaseNormalizer;
use function array_is_list;
use function is_array;

class UploadResponseResponseNormalizer extends BaseNormalizer
{
    /**
     * @inheritDoc
     */
    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if ($data === null || is_array($data) === false) {
            return parent::denormalize($data, $class, $format, $context);
        }

        // Force Alert to always be an array even when the API returns a single value
        if (isset($data['Alert']) && ! array_is_list($data['Alert'])) {
            $data['Alert'] = [$data['Alert']];
        }
        return parent::denormalize($data, $class, $format, $context);
    }
}
