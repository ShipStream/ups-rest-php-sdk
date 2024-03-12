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
            if (\array_key_exists('Request', $data)) {
                $object->setRequest($this->denormalizer->denormalize($data['Request'], 'ShipStream\\Ups\\Api\\Model\\LocatorRequestRequest', 'json', $context));
                unset($data['Request']);
            }
            if (\array_key_exists('OriginAddress', $data)) {
                $object->setOriginAddress($this->denormalizer->denormalize($data['OriginAddress'], 'ShipStream\\Ups\\Api\\Model\\LocatorRequestOriginAddress', 'json', $context));
                unset($data['OriginAddress']);
            }
            if (\array_key_exists('Translate', $data)) {
                $object->setTranslate($this->denormalizer->denormalize($data['Translate'], 'ShipStream\\Ups\\Api\\Model\\LocatorRequestTranslate', 'json', $context));
                unset($data['Translate']);
            }
            if (\array_key_exists('UnitOfMeasurement', $data)) {
                $object->setUnitOfMeasurement($this->denormalizer->denormalize($data['UnitOfMeasurement'], 'ShipStream\\Ups\\Api\\Model\\LocatorRequestUnitOfMeasurement', 'json', $context));
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
                $object->setLocationSearchCriteria($this->denormalizer->denormalize($data['LocationSearchCriteria'], 'ShipStream\\Ups\\Api\\Model\\LocatorRequestLocationSearchCriteria', 'json', $context));
                unset($data['LocationSearchCriteria']);
            }
            if (\array_key_exists('SortCriteria', $data)) {
                $object->setSortCriteria($this->denormalizer->denormalize($data['SortCriteria'], 'ShipStream\\Ups\\Api\\Model\\LocatorRequestSortCriteria', 'json', $context));
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
                $object->setServiceGeoUnit($this->denormalizer->denormalize($data['ServiceGeoUnit'], 'ShipStream\\Ups\\Api\\Model\\LocatorRequestServiceGeoUnit', 'json', $context));
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
            if (\array_key_exists('Request', $data)) {
                $object->setRequest($this->denormalizer->denormalize($data['Request'], 'ShipStream\\Ups\\Api\\Model\\LocatorRequestRequest', 'json', $context));
                unset($data['Request']);
            }
            if (\array_key_exists('OriginAddress', $data)) {
                $object->setOriginAddress($this->denormalizer->denormalize($data['OriginAddress'], 'ShipStream\\Ups\\Api\\Model\\LocatorRequestOriginAddress', 'json', $context));
                unset($data['OriginAddress']);
            }
            if (\array_key_exists('Translate', $data)) {
                $object->setTranslate($this->denormalizer->denormalize($data['Translate'], 'ShipStream\\Ups\\Api\\Model\\LocatorRequestTranslate', 'json', $context));
                unset($data['Translate']);
            }
            if (\array_key_exists('UnitOfMeasurement', $data)) {
                $object->setUnitOfMeasurement($this->denormalizer->denormalize($data['UnitOfMeasurement'], 'ShipStream\\Ups\\Api\\Model\\LocatorRequestUnitOfMeasurement', 'json', $context));
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
                $object->setLocationSearchCriteria($this->denormalizer->denormalize($data['LocationSearchCriteria'], 'ShipStream\\Ups\\Api\\Model\\LocatorRequestLocationSearchCriteria', 'json', $context));
                unset($data['LocationSearchCriteria']);
            }
            if (\array_key_exists('SortCriteria', $data)) {
                $object->setSortCriteria($this->denormalizer->denormalize($data['SortCriteria'], 'ShipStream\\Ups\\Api\\Model\\LocatorRequestSortCriteria', 'json', $context));
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
                $object->setServiceGeoUnit($this->denormalizer->denormalize($data['ServiceGeoUnit'], 'ShipStream\\Ups\\Api\\Model\\LocatorRequestServiceGeoUnit', 'json', $context));
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