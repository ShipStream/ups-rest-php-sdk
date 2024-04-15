<?php

namespace ShipStream\Ups\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use ShipStream\Ups\Api\Runtime\Normalizer\CheckArray;
use ShipStream\Ups\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\HttpKernel\Kernel;
if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class LocatorRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\LocatorRequest';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\LocatorRequest';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
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
            if (\array_key_exists('Request', $data) && $data['Request'] !== null) {
                $object->setRequest($this->denormalizer->denormalize($data['Request'], 'ShipStream\\Ups\\Api\\Model\\LocatorRequestRequest', 'json', $context));
                unset($data['Request']);
            }
            elseif (\array_key_exists('Request', $data) && $data['Request'] === null) {
                $object->setRequest(null);
            }
            if (\array_key_exists('OriginAddress', $data) && $data['OriginAddress'] !== null) {
                $object->setOriginAddress($this->denormalizer->denormalize($data['OriginAddress'], 'ShipStream\\Ups\\Api\\Model\\LocatorRequestOriginAddress', 'json', $context));
                unset($data['OriginAddress']);
            }
            elseif (\array_key_exists('OriginAddress', $data) && $data['OriginAddress'] === null) {
                $object->setOriginAddress(null);
            }
            if (\array_key_exists('Translate', $data) && $data['Translate'] !== null) {
                $object->setTranslate($this->denormalizer->denormalize($data['Translate'], 'ShipStream\\Ups\\Api\\Model\\LocatorRequestTranslate', 'json', $context));
                unset($data['Translate']);
            }
            elseif (\array_key_exists('Translate', $data) && $data['Translate'] === null) {
                $object->setTranslate(null);
            }
            if (\array_key_exists('UnitOfMeasurement', $data) && $data['UnitOfMeasurement'] !== null) {
                $object->setUnitOfMeasurement($this->denormalizer->denormalize($data['UnitOfMeasurement'], 'ShipStream\\Ups\\Api\\Model\\LocatorRequestUnitOfMeasurement', 'json', $context));
                unset($data['UnitOfMeasurement']);
            }
            elseif (\array_key_exists('UnitOfMeasurement', $data) && $data['UnitOfMeasurement'] === null) {
                $object->setUnitOfMeasurement(null);
            }
            if (\array_key_exists('LocationID', $data) && $data['LocationID'] !== null) {
                $values = [];
                foreach ($data['LocationID'] as $value) {
                    $values[] = $value;
                }
                $object->setLocationID($values);
                unset($data['LocationID']);
            }
            elseif (\array_key_exists('LocationID', $data) && $data['LocationID'] === null) {
                $object->setLocationID(null);
            }
            if (\array_key_exists('LocationSearchCriteria', $data) && $data['LocationSearchCriteria'] !== null) {
                $object->setLocationSearchCriteria($this->denormalizer->denormalize($data['LocationSearchCriteria'], 'ShipStream\\Ups\\Api\\Model\\LocatorRequestLocationSearchCriteria', 'json', $context));
                unset($data['LocationSearchCriteria']);
            }
            elseif (\array_key_exists('LocationSearchCriteria', $data) && $data['LocationSearchCriteria'] === null) {
                $object->setLocationSearchCriteria(null);
            }
            if (\array_key_exists('SortCriteria', $data) && $data['SortCriteria'] !== null) {
                $object->setSortCriteria($this->denormalizer->denormalize($data['SortCriteria'], 'ShipStream\\Ups\\Api\\Model\\LocatorRequestSortCriteria', 'json', $context));
                unset($data['SortCriteria']);
            }
            elseif (\array_key_exists('SortCriteria', $data) && $data['SortCriteria'] === null) {
                $object->setSortCriteria(null);
            }
            if (\array_key_exists('AllowAllConfidenceLevels', $data) && $data['AllowAllConfidenceLevels'] !== null) {
                $object->setAllowAllConfidenceLevels($data['AllowAllConfidenceLevels']);
                unset($data['AllowAllConfidenceLevels']);
            }
            elseif (\array_key_exists('AllowAllConfidenceLevels', $data) && $data['AllowAllConfidenceLevels'] === null) {
                $object->setAllowAllConfidenceLevels(null);
            }
            if (\array_key_exists('SearchOptionCode', $data) && $data['SearchOptionCode'] !== null) {
                $object->setSearchOptionCode($data['SearchOptionCode']);
                unset($data['SearchOptionCode']);
            }
            elseif (\array_key_exists('SearchOptionCode', $data) && $data['SearchOptionCode'] === null) {
                $object->setSearchOptionCode(null);
            }
            if (\array_key_exists('ServiceGeoUnit', $data) && $data['ServiceGeoUnit'] !== null) {
                $object->setServiceGeoUnit($this->denormalizer->denormalize($data['ServiceGeoUnit'], 'ShipStream\\Ups\\Api\\Model\\LocatorRequestServiceGeoUnit', 'json', $context));
                unset($data['ServiceGeoUnit']);
            }
            elseif (\array_key_exists('ServiceGeoUnit', $data) && $data['ServiceGeoUnit'] === null) {
                $object->setServiceGeoUnit(null);
            }
            if (\array_key_exists('FreightIndicator', $data) && $data['FreightIndicator'] !== null) {
                $object->setFreightIndicator($data['FreightIndicator']);
                unset($data['FreightIndicator']);
            }
            elseif (\array_key_exists('FreightIndicator', $data) && $data['FreightIndicator'] === null) {
                $object->setFreightIndicator(null);
            }
            foreach ($data as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_1;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            $data['Request'] = $this->normalizer->normalize($object->getRequest(), 'json', $context);
            $data['OriginAddress'] = $this->normalizer->normalize($object->getOriginAddress(), 'json', $context);
            $data['Translate'] = $this->normalizer->normalize($object->getTranslate(), 'json', $context);
            if ($object->isInitialized('unitOfMeasurement') && null !== $object->getUnitOfMeasurement()) {
                $data['UnitOfMeasurement'] = $this->normalizer->normalize($object->getUnitOfMeasurement(), 'json', $context);
            }
            if ($object->isInitialized('locationID') && null !== $object->getLocationID()) {
                $values = [];
                foreach ($object->getLocationID() as $value) {
                    $values[] = $value;
                }
                $data['LocationID'] = $values;
            }
            if ($object->isInitialized('locationSearchCriteria') && null !== $object->getLocationSearchCriteria()) {
                $data['LocationSearchCriteria'] = $this->normalizer->normalize($object->getLocationSearchCriteria(), 'json', $context);
            }
            if ($object->isInitialized('sortCriteria') && null !== $object->getSortCriteria()) {
                $data['SortCriteria'] = $this->normalizer->normalize($object->getSortCriteria(), 'json', $context);
            }
            if ($object->isInitialized('allowAllConfidenceLevels') && null !== $object->getAllowAllConfidenceLevels()) {
                $data['AllowAllConfidenceLevels'] = $object->getAllowAllConfidenceLevels();
            }
            if ($object->isInitialized('searchOptionCode') && null !== $object->getSearchOptionCode()) {
                $data['SearchOptionCode'] = $object->getSearchOptionCode();
            }
            if ($object->isInitialized('serviceGeoUnit') && null !== $object->getServiceGeoUnit()) {
                $data['ServiceGeoUnit'] = $this->normalizer->normalize($object->getServiceGeoUnit(), 'json', $context);
            }
            if ($object->isInitialized('freightIndicator') && null !== $object->getFreightIndicator()) {
                $data['FreightIndicator'] = $object->getFreightIndicator();
            }
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['ShipStream\\Ups\\Api\\Model\\LocatorRequest' => false];
        }
    }
} else {
    class LocatorRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\LocatorRequest';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\LocatorRequest';
        }
        /**
         * @return mixed
         */
        public function denormalize($data, $type, $format = null, array $context = [])
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
            if (\array_key_exists('Request', $data) && $data['Request'] !== null) {
                $object->setRequest($this->denormalizer->denormalize($data['Request'], 'ShipStream\\Ups\\Api\\Model\\LocatorRequestRequest', 'json', $context));
                unset($data['Request']);
            }
            elseif (\array_key_exists('Request', $data) && $data['Request'] === null) {
                $object->setRequest(null);
            }
            if (\array_key_exists('OriginAddress', $data) && $data['OriginAddress'] !== null) {
                $object->setOriginAddress($this->denormalizer->denormalize($data['OriginAddress'], 'ShipStream\\Ups\\Api\\Model\\LocatorRequestOriginAddress', 'json', $context));
                unset($data['OriginAddress']);
            }
            elseif (\array_key_exists('OriginAddress', $data) && $data['OriginAddress'] === null) {
                $object->setOriginAddress(null);
            }
            if (\array_key_exists('Translate', $data) && $data['Translate'] !== null) {
                $object->setTranslate($this->denormalizer->denormalize($data['Translate'], 'ShipStream\\Ups\\Api\\Model\\LocatorRequestTranslate', 'json', $context));
                unset($data['Translate']);
            }
            elseif (\array_key_exists('Translate', $data) && $data['Translate'] === null) {
                $object->setTranslate(null);
            }
            if (\array_key_exists('UnitOfMeasurement', $data) && $data['UnitOfMeasurement'] !== null) {
                $object->setUnitOfMeasurement($this->denormalizer->denormalize($data['UnitOfMeasurement'], 'ShipStream\\Ups\\Api\\Model\\LocatorRequestUnitOfMeasurement', 'json', $context));
                unset($data['UnitOfMeasurement']);
            }
            elseif (\array_key_exists('UnitOfMeasurement', $data) && $data['UnitOfMeasurement'] === null) {
                $object->setUnitOfMeasurement(null);
            }
            if (\array_key_exists('LocationID', $data) && $data['LocationID'] !== null) {
                $values = [];
                foreach ($data['LocationID'] as $value) {
                    $values[] = $value;
                }
                $object->setLocationID($values);
                unset($data['LocationID']);
            }
            elseif (\array_key_exists('LocationID', $data) && $data['LocationID'] === null) {
                $object->setLocationID(null);
            }
            if (\array_key_exists('LocationSearchCriteria', $data) && $data['LocationSearchCriteria'] !== null) {
                $object->setLocationSearchCriteria($this->denormalizer->denormalize($data['LocationSearchCriteria'], 'ShipStream\\Ups\\Api\\Model\\LocatorRequestLocationSearchCriteria', 'json', $context));
                unset($data['LocationSearchCriteria']);
            }
            elseif (\array_key_exists('LocationSearchCriteria', $data) && $data['LocationSearchCriteria'] === null) {
                $object->setLocationSearchCriteria(null);
            }
            if (\array_key_exists('SortCriteria', $data) && $data['SortCriteria'] !== null) {
                $object->setSortCriteria($this->denormalizer->denormalize($data['SortCriteria'], 'ShipStream\\Ups\\Api\\Model\\LocatorRequestSortCriteria', 'json', $context));
                unset($data['SortCriteria']);
            }
            elseif (\array_key_exists('SortCriteria', $data) && $data['SortCriteria'] === null) {
                $object->setSortCriteria(null);
            }
            if (\array_key_exists('AllowAllConfidenceLevels', $data) && $data['AllowAllConfidenceLevels'] !== null) {
                $object->setAllowAllConfidenceLevels($data['AllowAllConfidenceLevels']);
                unset($data['AllowAllConfidenceLevels']);
            }
            elseif (\array_key_exists('AllowAllConfidenceLevels', $data) && $data['AllowAllConfidenceLevels'] === null) {
                $object->setAllowAllConfidenceLevels(null);
            }
            if (\array_key_exists('SearchOptionCode', $data) && $data['SearchOptionCode'] !== null) {
                $object->setSearchOptionCode($data['SearchOptionCode']);
                unset($data['SearchOptionCode']);
            }
            elseif (\array_key_exists('SearchOptionCode', $data) && $data['SearchOptionCode'] === null) {
                $object->setSearchOptionCode(null);
            }
            if (\array_key_exists('ServiceGeoUnit', $data) && $data['ServiceGeoUnit'] !== null) {
                $object->setServiceGeoUnit($this->denormalizer->denormalize($data['ServiceGeoUnit'], 'ShipStream\\Ups\\Api\\Model\\LocatorRequestServiceGeoUnit', 'json', $context));
                unset($data['ServiceGeoUnit']);
            }
            elseif (\array_key_exists('ServiceGeoUnit', $data) && $data['ServiceGeoUnit'] === null) {
                $object->setServiceGeoUnit(null);
            }
            if (\array_key_exists('FreightIndicator', $data) && $data['FreightIndicator'] !== null) {
                $object->setFreightIndicator($data['FreightIndicator']);
                unset($data['FreightIndicator']);
            }
            elseif (\array_key_exists('FreightIndicator', $data) && $data['FreightIndicator'] === null) {
                $object->setFreightIndicator(null);
            }
            foreach ($data as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_1;
                }
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            $data['Request'] = $this->normalizer->normalize($object->getRequest(), 'json', $context);
            $data['OriginAddress'] = $this->normalizer->normalize($object->getOriginAddress(), 'json', $context);
            $data['Translate'] = $this->normalizer->normalize($object->getTranslate(), 'json', $context);
            if ($object->isInitialized('unitOfMeasurement') && null !== $object->getUnitOfMeasurement()) {
                $data['UnitOfMeasurement'] = $this->normalizer->normalize($object->getUnitOfMeasurement(), 'json', $context);
            }
            if ($object->isInitialized('locationID') && null !== $object->getLocationID()) {
                $values = [];
                foreach ($object->getLocationID() as $value) {
                    $values[] = $value;
                }
                $data['LocationID'] = $values;
            }
            if ($object->isInitialized('locationSearchCriteria') && null !== $object->getLocationSearchCriteria()) {
                $data['LocationSearchCriteria'] = $this->normalizer->normalize($object->getLocationSearchCriteria(), 'json', $context);
            }
            if ($object->isInitialized('sortCriteria') && null !== $object->getSortCriteria()) {
                $data['SortCriteria'] = $this->normalizer->normalize($object->getSortCriteria(), 'json', $context);
            }
            if ($object->isInitialized('allowAllConfidenceLevels') && null !== $object->getAllowAllConfidenceLevels()) {
                $data['AllowAllConfidenceLevels'] = $object->getAllowAllConfidenceLevels();
            }
            if ($object->isInitialized('searchOptionCode') && null !== $object->getSearchOptionCode()) {
                $data['SearchOptionCode'] = $object->getSearchOptionCode();
            }
            if ($object->isInitialized('serviceGeoUnit') && null !== $object->getServiceGeoUnit()) {
                $data['ServiceGeoUnit'] = $this->normalizer->normalize($object->getServiceGeoUnit(), 'json', $context);
            }
            if ($object->isInitialized('freightIndicator') && null !== $object->getFreightIndicator()) {
                $data['FreightIndicator'] = $object->getFreightIndicator();
            }
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['ShipStream\\Ups\\Api\\Model\\LocatorRequest' => false];
        }
    }
}