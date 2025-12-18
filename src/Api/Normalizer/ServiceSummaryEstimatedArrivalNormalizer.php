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
class ServiceSummaryEstimatedArrivalNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \ShipStream\Ups\Api\Model\ServiceSummaryEstimatedArrival::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \ShipStream\Ups\Api\Model\ServiceSummaryEstimatedArrival::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \ShipStream\Ups\Api\Model\ServiceSummaryEstimatedArrival();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('Arrival', $data)) {
            $object->setArrival($this->denormalizer->denormalize($data['Arrival'], \ShipStream\Ups\Api\Model\EstimatedArrivalArrival::class, 'json', $context));
            unset($data['Arrival']);
        }
        if (\array_key_exists('BusinessDaysInTransit', $data)) {
            $object->setBusinessDaysInTransit($data['BusinessDaysInTransit']);
            unset($data['BusinessDaysInTransit']);
        }
        if (\array_key_exists('Pickup', $data)) {
            $object->setPickup($this->denormalizer->denormalize($data['Pickup'], \ShipStream\Ups\Api\Model\EstimatedArrivalPickup::class, 'json', $context));
            unset($data['Pickup']);
        }
        if (\array_key_exists('DayOfWeek', $data)) {
            $object->setDayOfWeek($data['DayOfWeek']);
            unset($data['DayOfWeek']);
        }
        if (\array_key_exists('CustomerCenterCutoff', $data)) {
            $object->setCustomerCenterCutoff($data['CustomerCenterCutoff']);
            unset($data['CustomerCenterCutoff']);
        }
        if (\array_key_exists('DelayCount', $data)) {
            $object->setDelayCount($data['DelayCount']);
            unset($data['DelayCount']);
        }
        if (\array_key_exists('HolidayCount', $data)) {
            $object->setHolidayCount($data['HolidayCount']);
            unset($data['HolidayCount']);
        }
        if (\array_key_exists('RestDays', $data)) {
            $object->setRestDays($data['RestDays']);
            unset($data['RestDays']);
        }
        if (\array_key_exists('TotalTransitDays', $data)) {
            $object->setTotalTransitDays($data['TotalTransitDays']);
            unset($data['TotalTransitDays']);
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
        $dataArray['Arrival'] = $this->normalizer->normalize($data->getArrival(), 'json', $context);
        $dataArray['BusinessDaysInTransit'] = $data->getBusinessDaysInTransit();
        $dataArray['Pickup'] = $this->normalizer->normalize($data->getPickup(), 'json', $context);
        $dataArray['DayOfWeek'] = $data->getDayOfWeek();
        if ($data->isInitialized('customerCenterCutoff') && null !== $data->getCustomerCenterCutoff()) {
            $dataArray['CustomerCenterCutoff'] = $data->getCustomerCenterCutoff();
        }
        if ($data->isInitialized('delayCount') && null !== $data->getDelayCount()) {
            $dataArray['DelayCount'] = $data->getDelayCount();
        }
        if ($data->isInitialized('holidayCount') && null !== $data->getHolidayCount()) {
            $dataArray['HolidayCount'] = $data->getHolidayCount();
        }
        if ($data->isInitialized('restDays') && null !== $data->getRestDays()) {
            $dataArray['RestDays'] = $data->getRestDays();
        }
        if ($data->isInitialized('totalTransitDays') && null !== $data->getTotalTransitDays()) {
            $dataArray['TotalTransitDays'] = $data->getTotalTransitDays();
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
        return [\ShipStream\Ups\Api\Model\ServiceSummaryEstimatedArrival::class => false];
    }
}