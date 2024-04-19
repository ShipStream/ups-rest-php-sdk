<?php

namespace ShipStream\Ups\Normalizer\Paperless;

use ShipStream\Ups\Api\Normalizer\UploadResponseFormsHistoryDocumentIDNormalizer as BaseNormalizer;
use Symfony\Component\HttpKernel\Kernel;
use function is_array;

class UploadResponseFormsHistoryDocumentIDNormalizer extends BaseNormalizer
{
    /**
     * @inheritDoc
     */
    public function denormalize($data, $type, $format = null, array $context = [])
    {
        if ($data === null || is_array($data) === false) {
            return parent::denormalize($data, $type, $format, $context);
        }

        // Force DocumentID to always be an array even when the API returns a single value
        if (isset($data['DocumentID']) && !is_array($data['DocumentID'])) {
            $data['DocumentID'] = [$data['DocumentID']];
        }
        return parent::denormalize($data, $type, $format, $context);
    }
}