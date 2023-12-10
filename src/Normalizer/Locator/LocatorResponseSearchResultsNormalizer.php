<?php

namespace ShipStream\Ups\Normalizer\Locator;

use ShipStream\Ups\Api\Normalizer\LocatorResponseSearchResultsNormalizer as BaseNormalizer;
use function array_is_list;
use function is_array;

class LocatorResponseSearchResultsNormalizer extends BaseNormalizer
{
    /**
     * @inheritDoc
     */
    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if ($data === null || is_array($data) === false) {
            return parent::denormalize($data, $class, $format, $context);
        }

        // Force attributes to always be an array even when the API returns a single value
        if (isset($data['GeocodeCandidate']) && ! array_is_list($data['GeocodeCandidate'])) {
            $data['GeocodeCandidate'] = [$data['GeocodeCandidate']];
        }
        if (isset($data['Disclaimer']) && ! array_is_list($data['Disclaimer'])) {
            $data['Disclaimer'] = [$data['Disclaimer']];
        }
        if (isset($data['AvailableLocationAttributes']) && ! array_is_list($data['AvailableLocationAttributes'])) {
            $data['AvailableLocationAttributes'] = [$data['AvailableLocationAttributes']];
        }
        return parent::denormalize($data, $class, $format, $context);
    }
}
