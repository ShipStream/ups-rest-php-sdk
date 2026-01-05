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
class FreightShipmentServiceOptionsPickupOptionsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \ShipStream\Ups\Api\Model\FreightShipmentServiceOptionsPickupOptions::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \ShipStream\Ups\Api\Model\FreightShipmentServiceOptionsPickupOptions::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \ShipStream\Ups\Api\Model\FreightShipmentServiceOptionsPickupOptions();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('HolidayPickupIndicator', $data)) {
            $object->setHolidayPickupIndicator($data['HolidayPickupIndicator']);
            unset($data['HolidayPickupIndicator']);
        }
        if (\array_key_exists('InsidePickupIndicator', $data)) {
            $object->setInsidePickupIndicator($data['InsidePickupIndicator']);
            unset($data['InsidePickupIndicator']);
        }
        if (\array_key_exists('ResidentialPickupIndicator', $data)) {
            $object->setResidentialPickupIndicator($data['ResidentialPickupIndicator']);
            unset($data['ResidentialPickupIndicator']);
        }
        if (\array_key_exists('WeekendPickupIndicator', $data)) {
            $object->setWeekendPickupIndicator($data['WeekendPickupIndicator']);
            unset($data['WeekendPickupIndicator']);
        }
        if (\array_key_exists('LiftGateRequiredIndicator', $data)) {
            $object->setLiftGateRequiredIndicator($data['LiftGateRequiredIndicator']);
            unset($data['LiftGateRequiredIndicator']);
        }
        if (\array_key_exists('LimitedAccessPickupIndicator', $data)) {
            $object->setLimitedAccessPickupIndicator($data['LimitedAccessPickupIndicator']);
            unset($data['LimitedAccessPickupIndicator']);
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
        if ($data->isInitialized('holidayPickupIndicator') && null !== $data->getHolidayPickupIndicator()) {
            $dataArray['HolidayPickupIndicator'] = $data->getHolidayPickupIndicator();
        }
        if ($data->isInitialized('insidePickupIndicator') && null !== $data->getInsidePickupIndicator()) {
            $dataArray['InsidePickupIndicator'] = $data->getInsidePickupIndicator();
        }
        if ($data->isInitialized('residentialPickupIndicator') && null !== $data->getResidentialPickupIndicator()) {
            $dataArray['ResidentialPickupIndicator'] = $data->getResidentialPickupIndicator();
        }
        if ($data->isInitialized('weekendPickupIndicator') && null !== $data->getWeekendPickupIndicator()) {
            $dataArray['WeekendPickupIndicator'] = $data->getWeekendPickupIndicator();
        }
        if ($data->isInitialized('liftGateRequiredIndicator') && null !== $data->getLiftGateRequiredIndicator()) {
            $dataArray['LiftGateRequiredIndicator'] = $data->getLiftGateRequiredIndicator();
        }
        if ($data->isInitialized('limitedAccessPickupIndicator') && null !== $data->getLimitedAccessPickupIndicator()) {
            $dataArray['LimitedAccessPickupIndicator'] = $data->getLimitedAccessPickupIndicator();
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
        return [\ShipStream\Ups\Api\Model\FreightShipmentServiceOptionsPickupOptions::class => false];
    }
}