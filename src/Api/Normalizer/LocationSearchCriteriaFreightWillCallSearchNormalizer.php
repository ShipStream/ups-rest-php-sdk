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
class LocationSearchCriteriaFreightWillCallSearchNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \ShipStream\Ups\Api\Model\LocationSearchCriteriaFreightWillCallSearch::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \ShipStream\Ups\Api\Model\LocationSearchCriteriaFreightWillCallSearch::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \ShipStream\Ups\Api\Model\LocationSearchCriteriaFreightWillCallSearch();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('FreightWillCallRequestType', $data)) {
            $object->setFreightWillCallRequestType($data['FreightWillCallRequestType']);
            unset($data['FreightWillCallRequestType']);
        }
        if (\array_key_exists('FacilityAddress', $data)) {
            $values = [];
            foreach ($data['FacilityAddress'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \ShipStream\Ups\Api\Model\FreightWillCallSearchFacilityAddress::class, 'json', $context);
            }
            $object->setFacilityAddress($values);
            unset($data['FacilityAddress']);
        }
        if (\array_key_exists('OriginOrDestination', $data)) {
            $object->setOriginOrDestination($data['OriginOrDestination']);
            unset($data['OriginOrDestination']);
        }
        if (\array_key_exists('FormatPostalCode', $data)) {
            $object->setFormatPostalCode($data['FormatPostalCode']);
            unset($data['FormatPostalCode']);
        }
        if (\array_key_exists('DayOfWeekCode', $data)) {
            $object->setDayOfWeekCode($data['DayOfWeekCode']);
            unset($data['DayOfWeekCode']);
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_1;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['FreightWillCallRequestType'] = $data->getFreightWillCallRequestType();
        $values = [];
        foreach ($data->getFacilityAddress() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $dataArray['FacilityAddress'] = $values;
        $dataArray['OriginOrDestination'] = $data->getOriginOrDestination();
        $dataArray['FormatPostalCode'] = $data->getFormatPostalCode();
        if ($data->isInitialized('dayOfWeekCode') && null !== $data->getDayOfWeekCode()) {
            $dataArray['DayOfWeekCode'] = $data->getDayOfWeekCode();
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_1;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\ShipStream\Ups\Api\Model\LocationSearchCriteriaFreightWillCallSearch::class => false];
    }
}