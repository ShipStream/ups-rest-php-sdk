<?php

namespace ShipStream\Ups\Normalizer;

use ShipStream\Ups\Api\Normalizer\ResponseErrorNormalizer as BaseNormalizer;
use function array_is_list;
use function is_array;

class ResponseErrorNormalizer extends BaseNormalizer
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
        if (isset($data['ErrorLocation']) && ! array_is_list($data['ErrorLocation'])) {
            $data['ErrorLocation'] = [$data['ErrorLocation']];
        }
        if (isset($data['ErrorDigest']) && ! is_array($data['ErrorDigest'])) {
            $data['ErrorDigest'] = [$data['ErrorDigest']];
        }
        return parent::denormalize($data, $class, $format, $context);
    }
}
