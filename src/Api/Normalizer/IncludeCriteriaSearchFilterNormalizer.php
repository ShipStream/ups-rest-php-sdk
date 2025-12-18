<?php

namespace ShipStream\Ups\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use ShipStream\Ups\Api\Runtime\Normalizer\CheckArray;
use ShipStream\Ups\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class IncludeCriteriaSearchFilterNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \ShipStream\Ups\Api\Model\IncludeCriteriaSearchFilter::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \ShipStream\Ups\Api\Model\IncludeCriteriaSearchFilter::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \ShipStream\Ups\Api\Model\IncludeCriteriaSearchFilter();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('DCRIndicator', $data)) {
            $object->setDCRIndicator($data['DCRIndicator']);
            unset($data['DCRIndicator']);
        }
        if (\array_key_exists('ShippingAvailabilityIndicator', $data)) {
            $object->setShippingAvailabilityIndicator($data['ShippingAvailabilityIndicator']);
            unset($data['ShippingAvailabilityIndicator']);
        }
        if (\array_key_exists('ShipperPreparationDelay', $data)) {
            $object->setShipperPreparationDelay($data['ShipperPreparationDelay']);
            unset($data['ShipperPreparationDelay']);
        }
        if (\array_key_exists('ClickAndCollectSortWithDistance', $data)) {
            $object->setClickAndCollectSortWithDistance($data['ClickAndCollectSortWithDistance']);
            unset($data['ClickAndCollectSortWithDistance']);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('dCRIndicator') && null !== $data->getDCRIndicator()) {
            $dataArray['DCRIndicator'] = $data->getDCRIndicator();
        }
        if ($data->isInitialized('shippingAvailabilityIndicator') && null !== $data->getShippingAvailabilityIndicator()) {
            $dataArray['ShippingAvailabilityIndicator'] = $data->getShippingAvailabilityIndicator();
        }
        if ($data->isInitialized('shipperPreparationDelay') && null !== $data->getShipperPreparationDelay()) {
            $dataArray['ShipperPreparationDelay'] = $data->getShipperPreparationDelay();
        }
        if ($data->isInitialized('clickAndCollectSortWithDistance') && null !== $data->getClickAndCollectSortWithDistance()) {
            $dataArray['ClickAndCollectSortWithDistance'] = $data->getClickAndCollectSortWithDistance();
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\ShipStream\Ups\Api\Model\IncludeCriteriaSearchFilter::class => false];
    }
}