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
class LocatorRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \ShipStream\Ups\Api\Model\LocatorRequest::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \ShipStream\Ups\Api\Model\LocatorRequest::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \ShipStream\Ups\Api\Model\LocatorRequest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('Request', $data)) {
            $object->setRequest($this->denormalizer->denormalize($data['Request'], \ShipStream\Ups\Api\Model\LocatorRequestRequest::class, 'json', $context));
            unset($data['Request']);
        }
        if (\array_key_exists('OriginAddress', $data)) {
            $object->setOriginAddress($this->denormalizer->denormalize($data['OriginAddress'], \ShipStream\Ups\Api\Model\LocatorRequestOriginAddress::class, 'json', $context));
            unset($data['OriginAddress']);
        }
        if (\array_key_exists('Translate', $data)) {
            $object->setTranslate($this->denormalizer->denormalize($data['Translate'], \ShipStream\Ups\Api\Model\LocatorRequestTranslate::class, 'json', $context));
            unset($data['Translate']);
        }
        if (\array_key_exists('UnitOfMeasurement', $data)) {
            $object->setUnitOfMeasurement($this->denormalizer->denormalize($data['UnitOfMeasurement'], \ShipStream\Ups\Api\Model\LocatorRequestUnitOfMeasurement::class, 'json', $context));
            unset($data['UnitOfMeasurement']);
        }
        if (\array_key_exists('LocationID', $data)) {
            $values = [];
            foreach ($data['LocationID'] as $value) {
                $values[] = $value;
            }
            $object->setLocationID($values);
            unset($data['LocationID']);
        }
        if (\array_key_exists('LocationSearchCriteria', $data)) {
            $object->setLocationSearchCriteria($this->denormalizer->denormalize($data['LocationSearchCriteria'], \ShipStream\Ups\Api\Model\LocatorRequestLocationSearchCriteria::class, 'json', $context));
            unset($data['LocationSearchCriteria']);
        }
        if (\array_key_exists('SortCriteria', $data)) {
            $object->setSortCriteria($this->denormalizer->denormalize($data['SortCriteria'], \ShipStream\Ups\Api\Model\LocatorRequestSortCriteria::class, 'json', $context));
            unset($data['SortCriteria']);
        }
        if (\array_key_exists('AllowAllConfidenceLevels', $data)) {
            $object->setAllowAllConfidenceLevels($data['AllowAllConfidenceLevels']);
            unset($data['AllowAllConfidenceLevels']);
        }
        if (\array_key_exists('SearchOptionCode', $data)) {
            $object->setSearchOptionCode($data['SearchOptionCode']);
            unset($data['SearchOptionCode']);
        }
        if (\array_key_exists('ServiceGeoUnit', $data)) {
            $object->setServiceGeoUnit($this->denormalizer->denormalize($data['ServiceGeoUnit'], \ShipStream\Ups\Api\Model\LocatorRequestServiceGeoUnit::class, 'json', $context));
            unset($data['ServiceGeoUnit']);
        }
        if (\array_key_exists('FreightIndicator', $data)) {
            $object->setFreightIndicator($data['FreightIndicator']);
            unset($data['FreightIndicator']);
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
        $dataArray['Request'] = $this->normalizer->normalize($data->getRequest(), 'json', $context);
        $dataArray['OriginAddress'] = $this->normalizer->normalize($data->getOriginAddress(), 'json', $context);
        $dataArray['Translate'] = $this->normalizer->normalize($data->getTranslate(), 'json', $context);
        if ($data->isInitialized('unitOfMeasurement') && null !== $data->getUnitOfMeasurement()) {
            $dataArray['UnitOfMeasurement'] = $this->normalizer->normalize($data->getUnitOfMeasurement(), 'json', $context);
        }
        if ($data->isInitialized('locationID') && null !== $data->getLocationID()) {
            $values = [];
            foreach ($data->getLocationID() as $value) {
                $values[] = $value;
            }
            $dataArray['LocationID'] = $values;
        }
        if ($data->isInitialized('locationSearchCriteria') && null !== $data->getLocationSearchCriteria()) {
            $dataArray['LocationSearchCriteria'] = $this->normalizer->normalize($data->getLocationSearchCriteria(), 'json', $context);
        }
        if ($data->isInitialized('sortCriteria') && null !== $data->getSortCriteria()) {
            $dataArray['SortCriteria'] = $this->normalizer->normalize($data->getSortCriteria(), 'json', $context);
        }
        if ($data->isInitialized('allowAllConfidenceLevels') && null !== $data->getAllowAllConfidenceLevels()) {
            $dataArray['AllowAllConfidenceLevels'] = $data->getAllowAllConfidenceLevels();
        }
        if ($data->isInitialized('searchOptionCode') && null !== $data->getSearchOptionCode()) {
            $dataArray['SearchOptionCode'] = $data->getSearchOptionCode();
        }
        if ($data->isInitialized('serviceGeoUnit') && null !== $data->getServiceGeoUnit()) {
            $dataArray['ServiceGeoUnit'] = $this->normalizer->normalize($data->getServiceGeoUnit(), 'json', $context);
        }
        if ($data->isInitialized('freightIndicator') && null !== $data->getFreightIndicator()) {
            $dataArray['FreightIndicator'] = $data->getFreightIndicator();
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
        return [\ShipStream\Ups\Api\Model\LocatorRequest::class => false];
    }
}