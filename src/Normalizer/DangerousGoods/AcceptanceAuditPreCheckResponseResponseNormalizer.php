<?php

namespace ShipStream\Ups\Normalizer\DangerousGoods;

use ShipStream\Ups\Api\Normalizer\AcceptanceAuditPreCheckResponseResponseNormalizer as BaseNormalizer;
use function array_is_list;
use function is_array;

class AcceptanceAuditPreCheckResponseResponseNormalizer extends BaseNormalizer
{
    /**
     * @inheritDoc
     */
    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if ($data === null || is_array($data) === false) {
            return parent::denormalize($data, $class, $format, $context);
        }

        // Force Alert & AlertDetail to always be an array even when the API returns a single value
        if (isset($data['Alert']) && ! array_is_list($data['Alert'])) {
            $data['Alert'] = [$data['Alert']];
        }
        if (isset($data['AlertDetail']) && ! array_is_list($data['AlertDetail'])) {
            $data['AlertDetail'] = [$data['AlertDetail']];
        }
        return parent::denormalize($data, $class, $format, $context);
    }
}
