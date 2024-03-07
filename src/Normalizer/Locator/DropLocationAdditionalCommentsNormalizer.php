<?php

namespace ShipStream\Ups\Normalizer\Locator;

use ShipStream\Ups\Api\Normalizer\DropLocationAdditionalCommentsNormalizer as BaseNormalizer;
use function array_is_list;
use function is_array;

class DropLocationAdditionalCommentsNormalizer extends BaseNormalizer
{
    /**
     * @inheritDoc
     */
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if ($data === null || is_array($data) === false) {
            return parent::denormalize($data, $type, $format, $context);
        }

        // Force CommentType to always be an array even when the API returns a single value
        if (isset($data['CommentType']) && ! array_is_list($data['CommentType'])) {
            $data['CommentType'] = [$data['CommentType']];
        }
        return parent::denormalize($data, $type, $format, $context);
    }
}
