<?php

namespace ShipStream\Ups\Normalizer\Locator;

use ShipStream\Ups\Api\Normalizer\DropLocationLocationAttributeNormalizer as BaseNormalizer;
use function array_is_list;
use function is_array;

class DropLocationLocationAttributeNormalizer extends BaseNormalizer
{
    /**
     * @inheritDoc
     */
    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if ($data === null || is_array($data) === false) {
            return parent::denormalize($data, $class, $format, $context);
        }

        // Force OptionCode to always be an array even when the API returns a single value
        if (isset($data['OptionCode']) && ! array_is_list($data['OptionCode'])) {
            $data['OptionCode'] = [$data['OptionCode']];
        }
        return parent::denormalize($data, $class, $format, $context);
    }
}
