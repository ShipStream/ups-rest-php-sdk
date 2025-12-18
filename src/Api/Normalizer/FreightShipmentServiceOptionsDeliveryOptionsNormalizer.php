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
class FreightShipmentServiceOptionsDeliveryOptionsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \ShipStream\Ups\Api\Model\FreightShipmentServiceOptionsDeliveryOptions::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \ShipStream\Ups\Api\Model\FreightShipmentServiceOptionsDeliveryOptions::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \ShipStream\Ups\Api\Model\FreightShipmentServiceOptionsDeliveryOptions();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('CallBeforeDeliveryIndicator', $data)) {
            $object->setCallBeforeDeliveryIndicator($data['CallBeforeDeliveryIndicator']);
            unset($data['CallBeforeDeliveryIndicator']);
        }
        if (\array_key_exists('HolidayDeliveryIndicator', $data)) {
            $object->setHolidayDeliveryIndicator($data['HolidayDeliveryIndicator']);
            unset($data['HolidayDeliveryIndicator']);
        }
        if (\array_key_exists('InsideDeliveryIndicator', $data)) {
            $object->setInsideDeliveryIndicator($data['InsideDeliveryIndicator']);
            unset($data['InsideDeliveryIndicator']);
        }
        if (\array_key_exists('ResidentialDeliveryIndicator', $data)) {
            $object->setResidentialDeliveryIndicator($data['ResidentialDeliveryIndicator']);
            unset($data['ResidentialDeliveryIndicator']);
        }
        if (\array_key_exists('WeekendDeliveryIndicator', $data)) {
            $object->setWeekendDeliveryIndicator($data['WeekendDeliveryIndicator']);
            unset($data['WeekendDeliveryIndicator']);
        }
        if (\array_key_exists('LiftGateRequiredIndicator', $data)) {
            $object->setLiftGateRequiredIndicator($data['LiftGateRequiredIndicator']);
            unset($data['LiftGateRequiredIndicator']);
        }
        if (\array_key_exists('LimitedAccessDeliveryIndicator', $data)) {
            $object->setLimitedAccessDeliveryIndicator($data['LimitedAccessDeliveryIndicator']);
            unset($data['LimitedAccessDeliveryIndicator']);
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
        if ($data->isInitialized('callBeforeDeliveryIndicator') && null !== $data->getCallBeforeDeliveryIndicator()) {
            $dataArray['CallBeforeDeliveryIndicator'] = $data->getCallBeforeDeliveryIndicator();
        }
        if ($data->isInitialized('holidayDeliveryIndicator') && null !== $data->getHolidayDeliveryIndicator()) {
            $dataArray['HolidayDeliveryIndicator'] = $data->getHolidayDeliveryIndicator();
        }
        if ($data->isInitialized('insideDeliveryIndicator') && null !== $data->getInsideDeliveryIndicator()) {
            $dataArray['InsideDeliveryIndicator'] = $data->getInsideDeliveryIndicator();
        }
        if ($data->isInitialized('residentialDeliveryIndicator') && null !== $data->getResidentialDeliveryIndicator()) {
            $dataArray['ResidentialDeliveryIndicator'] = $data->getResidentialDeliveryIndicator();
        }
        if ($data->isInitialized('weekendDeliveryIndicator') && null !== $data->getWeekendDeliveryIndicator()) {
            $dataArray['WeekendDeliveryIndicator'] = $data->getWeekendDeliveryIndicator();
        }
        if ($data->isInitialized('liftGateRequiredIndicator') && null !== $data->getLiftGateRequiredIndicator()) {
            $dataArray['LiftGateRequiredIndicator'] = $data->getLiftGateRequiredIndicator();
        }
        if ($data->isInitialized('limitedAccessDeliveryIndicator') && null !== $data->getLimitedAccessDeliveryIndicator()) {
            $dataArray['LimitedAccessDeliveryIndicator'] = $data->getLimitedAccessDeliveryIndicator();
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
        return [\ShipStream\Ups\Api\Model\FreightShipmentServiceOptionsDeliveryOptions::class => false];
    }
}