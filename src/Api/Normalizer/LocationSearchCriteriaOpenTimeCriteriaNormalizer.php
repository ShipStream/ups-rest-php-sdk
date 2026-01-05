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
class LocationSearchCriteriaOpenTimeCriteriaNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \ShipStream\Ups\Api\Model\LocationSearchCriteriaOpenTimeCriteria::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \ShipStream\Ups\Api\Model\LocationSearchCriteriaOpenTimeCriteria::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \ShipStream\Ups\Api\Model\LocationSearchCriteriaOpenTimeCriteria();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('DayOfWeekCode', $data)) {
            $object->setDayOfWeekCode($data['DayOfWeekCode']);
            unset($data['DayOfWeekCode']);
        }
        if (\array_key_exists('FromTime', $data)) {
            $object->setFromTime($data['FromTime']);
            unset($data['FromTime']);
        }
        if (\array_key_exists('ToTime', $data)) {
            $object->setToTime($data['ToTime']);
            unset($data['ToTime']);
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
        if ($data->isInitialized('dayOfWeekCode') && null !== $data->getDayOfWeekCode()) {
            $dataArray['DayOfWeekCode'] = $data->getDayOfWeekCode();
        }
        if ($data->isInitialized('fromTime') && null !== $data->getFromTime()) {
            $dataArray['FromTime'] = $data->getFromTime();
        }
        if ($data->isInitialized('toTime') && null !== $data->getToTime()) {
            $dataArray['ToTime'] = $data->getToTime();
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
        return [\ShipStream\Ups\Api\Model\LocationSearchCriteriaOpenTimeCriteria::class => false];
    }
}