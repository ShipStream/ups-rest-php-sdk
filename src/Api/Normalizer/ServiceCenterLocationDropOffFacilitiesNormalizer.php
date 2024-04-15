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
    class ServiceCenterLocationDropOffFacilitiesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\ServiceCenterLocationDropOffFacilities';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\ServiceCenterLocationDropOffFacilities';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \ShipStream\Ups\Api\Model\ServiceCenterLocationDropOffFacilities();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Name', $data) && $data['Name'] !== null) {
                $object->setName($data['Name']);
                unset($data['Name']);
            }
            elseif (\array_key_exists('Name', $data) && $data['Name'] === null) {
                $object->setName(null);
            }
            if (\array_key_exists('Address', $data) && $data['Address'] !== null) {
                $object->setAddress($this->denormalizer->denormalize($data['Address'], 'ShipStream\\Ups\\Api\\Model\\DropOffFacilitiesAddress', 'json', $context));
                unset($data['Address']);
            }
            elseif (\array_key_exists('Address', $data) && $data['Address'] === null) {
                $object->setAddress(null);
            }
            if (\array_key_exists('SLIC', $data) && $data['SLIC'] !== null) {
                $object->setSLIC($data['SLIC']);
                unset($data['SLIC']);
            }
            elseif (\array_key_exists('SLIC', $data) && $data['SLIC'] === null) {
                $object->setSLIC(null);
            }
            if (\array_key_exists('Type', $data) && $data['Type'] !== null) {
                $object->setType($data['Type']);
                unset($data['Type']);
            }
            elseif (\array_key_exists('Type', $data) && $data['Type'] === null) {
                $object->setType(null);
            }
            if (\array_key_exists('Timezone', $data) && $data['Timezone'] !== null) {
                $object->setTimezone($data['Timezone']);
                unset($data['Timezone']);
            }
            elseif (\array_key_exists('Timezone', $data) && $data['Timezone'] === null) {
                $object->setTimezone(null);
            }
            if (\array_key_exists('Phone', $data) && $data['Phone'] !== null) {
                $object->setPhone($data['Phone']);
                unset($data['Phone']);
            }
            elseif (\array_key_exists('Phone', $data) && $data['Phone'] === null) {
                $object->setPhone(null);
            }
            if (\array_key_exists('Fax', $data) && $data['Fax'] !== null) {
                $object->setFax($data['Fax']);
                unset($data['Fax']);
            }
            elseif (\array_key_exists('Fax', $data) && $data['Fax'] === null) {
                $object->setFax(null);
            }
            if (\array_key_exists('FacilityTime', $data) && $data['FacilityTime'] !== null) {
                $object->setFacilityTime($this->denormalizer->denormalize($data['FacilityTime'], 'ShipStream\\Ups\\Api\\Model\\DropOffFacilitiesFacilityTime', 'json', $context));
                unset($data['FacilityTime']);
            }
            elseif (\array_key_exists('FacilityTime', $data) && $data['FacilityTime'] === null) {
                $object->setFacilityTime(null);
            }
            if (\array_key_exists('OriginOrDestination', $data) && $data['OriginOrDestination'] !== null) {
                $object->setOriginOrDestination($data['OriginOrDestination']);
                unset($data['OriginOrDestination']);
            }
            elseif (\array_key_exists('OriginOrDestination', $data) && $data['OriginOrDestination'] === null) {
                $object->setOriginOrDestination(null);
            }
            if (\array_key_exists('LocalizedInstruction', $data) && $data['LocalizedInstruction'] !== null) {
                $values = [];
                foreach ($data['LocalizedInstruction'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'ShipStream\\Ups\\Api\\Model\\DropOffFacilitiesLocalizedInstruction', 'json', $context);
                }
                $object->setLocalizedInstruction($values);
                unset($data['LocalizedInstruction']);
            }
            elseif (\array_key_exists('LocalizedInstruction', $data) && $data['LocalizedInstruction'] === null) {
                $object->setLocalizedInstruction(null);
            }
            if (\array_key_exists('Distance', $data) && $data['Distance'] !== null) {
                $object->setDistance($this->denormalizer->denormalize($data['Distance'], 'ShipStream\\Ups\\Api\\Model\\DropOffFacilitiesDistance', 'json', $context));
                unset($data['Distance']);
            }
            elseif (\array_key_exists('Distance', $data) && $data['Distance'] === null) {
                $object->setDistance(null);
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
            $data['OriginOrDestination'] = $object->getOriginOrDestination();
            if ($object->isInitialized('localizedInstruction') && null !== $object->getLocalizedInstruction()) {
                $values = [];
                foreach ($object->getLocalizedInstruction() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['LocalizedInstruction'] = $values;
            }
            if ($object->isInitialized('distance') && null !== $object->getDistance()) {
                $data['Distance'] = $this->normalizer->normalize($object->getDistance(), 'json', $context);
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
            return ['ShipStream\\Ups\\Api\\Model\\ServiceCenterLocationDropOffFacilities' => false];
        }
    }
} else {
    class ServiceCenterLocationDropOffFacilitiesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\ServiceCenterLocationDropOffFacilities';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\ServiceCenterLocationDropOffFacilities';
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
            $object = new \ShipStream\Ups\Api\Model\ServiceCenterLocationDropOffFacilities();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Name', $data) && $data['Name'] !== null) {
                $object->setName($data['Name']);
                unset($data['Name']);
            }
            elseif (\array_key_exists('Name', $data) && $data['Name'] === null) {
                $object->setName(null);
            }
            if (\array_key_exists('Address', $data) && $data['Address'] !== null) {
                $object->setAddress($this->denormalizer->denormalize($data['Address'], 'ShipStream\\Ups\\Api\\Model\\DropOffFacilitiesAddress', 'json', $context));
                unset($data['Address']);
            }
            elseif (\array_key_exists('Address', $data) && $data['Address'] === null) {
                $object->setAddress(null);
            }
            if (\array_key_exists('SLIC', $data) && $data['SLIC'] !== null) {
                $object->setSLIC($data['SLIC']);
                unset($data['SLIC']);
            }
            elseif (\array_key_exists('SLIC', $data) && $data['SLIC'] === null) {
                $object->setSLIC(null);
            }
            if (\array_key_exists('Type', $data) && $data['Type'] !== null) {
                $object->setType($data['Type']);
                unset($data['Type']);
            }
            elseif (\array_key_exists('Type', $data) && $data['Type'] === null) {
                $object->setType(null);
            }
            if (\array_key_exists('Timezone', $data) && $data['Timezone'] !== null) {
                $object->setTimezone($data['Timezone']);
                unset($data['Timezone']);
            }
            elseif (\array_key_exists('Timezone', $data) && $data['Timezone'] === null) {
                $object->setTimezone(null);
            }
            if (\array_key_exists('Phone', $data) && $data['Phone'] !== null) {
                $object->setPhone($data['Phone']);
                unset($data['Phone']);
            }
            elseif (\array_key_exists('Phone', $data) && $data['Phone'] === null) {
                $object->setPhone(null);
            }
            if (\array_key_exists('Fax', $data) && $data['Fax'] !== null) {
                $object->setFax($data['Fax']);
                unset($data['Fax']);
            }
            elseif (\array_key_exists('Fax', $data) && $data['Fax'] === null) {
                $object->setFax(null);
            }
            if (\array_key_exists('FacilityTime', $data) && $data['FacilityTime'] !== null) {
                $object->setFacilityTime($this->denormalizer->denormalize($data['FacilityTime'], 'ShipStream\\Ups\\Api\\Model\\DropOffFacilitiesFacilityTime', 'json', $context));
                unset($data['FacilityTime']);
            }
            elseif (\array_key_exists('FacilityTime', $data) && $data['FacilityTime'] === null) {
                $object->setFacilityTime(null);
            }
            if (\array_key_exists('OriginOrDestination', $data) && $data['OriginOrDestination'] !== null) {
                $object->setOriginOrDestination($data['OriginOrDestination']);
                unset($data['OriginOrDestination']);
            }
            elseif (\array_key_exists('OriginOrDestination', $data) && $data['OriginOrDestination'] === null) {
                $object->setOriginOrDestination(null);
            }
            if (\array_key_exists('LocalizedInstruction', $data) && $data['LocalizedInstruction'] !== null) {
                $values = [];
                foreach ($data['LocalizedInstruction'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'ShipStream\\Ups\\Api\\Model\\DropOffFacilitiesLocalizedInstruction', 'json', $context);
                }
                $object->setLocalizedInstruction($values);
                unset($data['LocalizedInstruction']);
            }
            elseif (\array_key_exists('LocalizedInstruction', $data) && $data['LocalizedInstruction'] === null) {
                $object->setLocalizedInstruction(null);
            }
            if (\array_key_exists('Distance', $data) && $data['Distance'] !== null) {
                $object->setDistance($this->denormalizer->denormalize($data['Distance'], 'ShipStream\\Ups\\Api\\Model\\DropOffFacilitiesDistance', 'json', $context));
                unset($data['Distance']);
            }
            elseif (\array_key_exists('Distance', $data) && $data['Distance'] === null) {
                $object->setDistance(null);
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
            $data['OriginOrDestination'] = $object->getOriginOrDestination();
            if ($object->isInitialized('localizedInstruction') && null !== $object->getLocalizedInstruction()) {
                $values = [];
                foreach ($object->getLocalizedInstruction() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['LocalizedInstruction'] = $values;
            }
            if ($object->isInitialized('distance') && null !== $object->getDistance()) {
                $data['Distance'] = $this->normalizer->normalize($object->getDistance(), 'json', $context);
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
            return ['ShipStream\\Ups\\Api\\Model\\ServiceCenterLocationDropOffFacilities' => false];
        }
    }
}