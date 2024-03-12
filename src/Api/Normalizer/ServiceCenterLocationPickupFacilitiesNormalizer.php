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
    class ServiceCenterLocationPickupFacilitiesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\ServiceCenterLocationPickupFacilities';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\ServiceCenterLocationPickupFacilities';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \ShipStream\Ups\Api\Model\ServiceCenterLocationPickupFacilities();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Name', $data)) {
                $object->setName($data['Name']);
                unset($data['Name']);
            }
            if (\array_key_exists('Address', $data)) {
                $object->setAddress($this->denormalizer->denormalize($data['Address'], 'ShipStream\\Ups\\Api\\Model\\PickupFacilitiesAddress', 'json', $context));
                unset($data['Address']);
            }
            if (\array_key_exists('SLIC', $data)) {
                $object->setSLIC($data['SLIC']);
                unset($data['SLIC']);
            }
            if (\array_key_exists('Type', $data)) {
                $object->setType($data['Type']);
                unset($data['Type']);
            }
            if (\array_key_exists('Timezone', $data)) {
                $object->setTimezone($data['Timezone']);
                unset($data['Timezone']);
            }
            if (\array_key_exists('Phone', $data)) {
                $object->setPhone($data['Phone']);
                unset($data['Phone']);
            }
            if (\array_key_exists('Fax', $data)) {
                $object->setFax($data['Fax']);
                unset($data['Fax']);
            }
            if (\array_key_exists('FacilityTime', $data)) {
                $object->setFacilityTime($this->denormalizer->denormalize($data['FacilityTime'], 'ShipStream\\Ups\\Api\\Model\\PickupFacilitiesFacilityTime', 'json', $context));
                unset($data['FacilityTime']);
            }
            if (\array_key_exists('AirportCode', $data)) {
                $object->setAirportCode($data['AirportCode']);
                unset($data['AirportCode']);
            }
            if (\array_key_exists('SortCode', $data)) {
                $object->setSortCode($data['SortCode']);
                unset($data['SortCode']);
            }
            foreach ($data as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            $data['Name'] = $object->getName();
            $data['Address'] = $this->normalizer->normalize($object->getAddress(), 'json', $context);
            $data['SLIC'] = $object->getSLIC();
            $data['Type'] = $object->getType();
            $data['Timezone'] = $object->getTimezone();
            $data['Phone'] = $object->getPhone();
            $data['Fax'] = $object->getFax();
            if ($object->isInitialized('facilityTime') && null !== $object->getFacilityTime()) {
                $data['FacilityTime'] = $this->normalizer->normalize($object->getFacilityTime(), 'json', $context);
            }
            if ($object->isInitialized('airportCode') && null !== $object->getAirportCode()) {
                $data['AirportCode'] = $object->getAirportCode();
            }
            if ($object->isInitialized('sortCode') && null !== $object->getSortCode()) {
                $data['SortCode'] = $object->getSortCode();
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['ShipStream\\Ups\\Api\\Model\\ServiceCenterLocationPickupFacilities' => false];
        }
    }
} else {
    class ServiceCenterLocationPickupFacilitiesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\ServiceCenterLocationPickupFacilities';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\ServiceCenterLocationPickupFacilities';
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
            $object = new \ShipStream\Ups\Api\Model\ServiceCenterLocationPickupFacilities();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Name', $data)) {
                $object->setName($data['Name']);
                unset($data['Name']);
            }
            if (\array_key_exists('Address', $data)) {
                $object->setAddress($this->denormalizer->denormalize($data['Address'], 'ShipStream\\Ups\\Api\\Model\\PickupFacilitiesAddress', 'json', $context));
                unset($data['Address']);
            }
            if (\array_key_exists('SLIC', $data)) {
                $object->setSLIC($data['SLIC']);
                unset($data['SLIC']);
            }
            if (\array_key_exists('Type', $data)) {
                $object->setType($data['Type']);
                unset($data['Type']);
            }
            if (\array_key_exists('Timezone', $data)) {
                $object->setTimezone($data['Timezone']);
                unset($data['Timezone']);
            }
            if (\array_key_exists('Phone', $data)) {
                $object->setPhone($data['Phone']);
                unset($data['Phone']);
            }
            if (\array_key_exists('Fax', $data)) {
                $object->setFax($data['Fax']);
                unset($data['Fax']);
            }
            if (\array_key_exists('FacilityTime', $data)) {
                $object->setFacilityTime($this->denormalizer->denormalize($data['FacilityTime'], 'ShipStream\\Ups\\Api\\Model\\PickupFacilitiesFacilityTime', 'json', $context));
                unset($data['FacilityTime']);
            }
            if (\array_key_exists('AirportCode', $data)) {
                $object->setAirportCode($data['AirportCode']);
                unset($data['AirportCode']);
            }
            if (\array_key_exists('SortCode', $data)) {
                $object->setSortCode($data['SortCode']);
                unset($data['SortCode']);
            }
            foreach ($data as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value;
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
            $data['Name'] = $object->getName();
            $data['Address'] = $this->normalizer->normalize($object->getAddress(), 'json', $context);
            $data['SLIC'] = $object->getSLIC();
            $data['Type'] = $object->getType();
            $data['Timezone'] = $object->getTimezone();
            $data['Phone'] = $object->getPhone();
            $data['Fax'] = $object->getFax();
            if ($object->isInitialized('facilityTime') && null !== $object->getFacilityTime()) {
                $data['FacilityTime'] = $this->normalizer->normalize($object->getFacilityTime(), 'json', $context);
            }
            if ($object->isInitialized('airportCode') && null !== $object->getAirportCode()) {
                $data['AirportCode'] = $object->getAirportCode();
            }
            if ($object->isInitialized('sortCode') && null !== $object->getSortCode()) {
                $data['SortCode'] = $object->getSortCode();
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['ShipStream\\Ups\\Api\\Model\\ServiceCenterLocationPickupFacilities' => false];
        }
    }
}