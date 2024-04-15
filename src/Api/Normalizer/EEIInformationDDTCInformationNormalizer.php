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
    class EEIInformationDDTCInformationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\EEIInformationDDTCInformation';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\EEIInformationDDTCInformation';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \ShipStream\Ups\Api\Model\EEIInformationDDTCInformation();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('ITARExemptionNumber', $data) && $data['ITARExemptionNumber'] !== null) {
                $object->setITARExemptionNumber($data['ITARExemptionNumber']);
                unset($data['ITARExemptionNumber']);
            }
            elseif (\array_key_exists('ITARExemptionNumber', $data) && $data['ITARExemptionNumber'] === null) {
                $object->setITARExemptionNumber(null);
            }
            if (\array_key_exists('USMLCategoryCode', $data) && $data['USMLCategoryCode'] !== null) {
                $object->setUSMLCategoryCode($data['USMLCategoryCode']);
                unset($data['USMLCategoryCode']);
            }
            elseif (\array_key_exists('USMLCategoryCode', $data) && $data['USMLCategoryCode'] === null) {
                $object->setUSMLCategoryCode(null);
            }
            if (\array_key_exists('EligiblePartyIndicator', $data) && $data['EligiblePartyIndicator'] !== null) {
                $object->setEligiblePartyIndicator($data['EligiblePartyIndicator']);
                unset($data['EligiblePartyIndicator']);
            }
            elseif (\array_key_exists('EligiblePartyIndicator', $data) && $data['EligiblePartyIndicator'] === null) {
                $object->setEligiblePartyIndicator(null);
            }
            if (\array_key_exists('RegistrationNumber', $data) && $data['RegistrationNumber'] !== null) {
                $object->setRegistrationNumber($data['RegistrationNumber']);
                unset($data['RegistrationNumber']);
            }
            elseif (\array_key_exists('RegistrationNumber', $data) && $data['RegistrationNumber'] === null) {
                $object->setRegistrationNumber(null);
            }
            if (\array_key_exists('Quantity', $data) && $data['Quantity'] !== null) {
                $object->setQuantity($data['Quantity']);
                unset($data['Quantity']);
            }
            elseif (\array_key_exists('Quantity', $data) && $data['Quantity'] === null) {
                $object->setQuantity(null);
            }
            if (\array_key_exists('UnitOfMeasurement', $data) && $data['UnitOfMeasurement'] !== null) {
                $object->setUnitOfMeasurement($this->denormalizer->denormalize($data['UnitOfMeasurement'], 'ShipStream\\Ups\\Api\\Model\\DDTCInformationUnitOfMeasurement', 'json', $context));
                unset($data['UnitOfMeasurement']);
            }
            elseif (\array_key_exists('UnitOfMeasurement', $data) && $data['UnitOfMeasurement'] === null) {
                $object->setUnitOfMeasurement(null);
            }
            if (\array_key_exists('SignificantMilitaryEquipmentIndicator', $data) && $data['SignificantMilitaryEquipmentIndicator'] !== null) {
                $object->setSignificantMilitaryEquipmentIndicator($data['SignificantMilitaryEquipmentIndicator']);
                unset($data['SignificantMilitaryEquipmentIndicator']);
            }
            elseif (\array_key_exists('SignificantMilitaryEquipmentIndicator', $data) && $data['SignificantMilitaryEquipmentIndicator'] === null) {
                $object->setSignificantMilitaryEquipmentIndicator(null);
            }
            if (\array_key_exists('ACMNumber', $data) && $data['ACMNumber'] !== null) {
                $object->setACMNumber($data['ACMNumber']);
                unset($data['ACMNumber']);
            }
            elseif (\array_key_exists('ACMNumber', $data) && $data['ACMNumber'] === null) {
                $object->setACMNumber(null);
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
            if ($object->isInitialized('iTARExemptionNumber') && null !== $object->getITARExemptionNumber()) {
                $data['ITARExemptionNumber'] = $object->getITARExemptionNumber();
            }
            if ($object->isInitialized('uSMLCategoryCode') && null !== $object->getUSMLCategoryCode()) {
                $data['USMLCategoryCode'] = $object->getUSMLCategoryCode();
            }
            if ($object->isInitialized('eligiblePartyIndicator') && null !== $object->getEligiblePartyIndicator()) {
                $data['EligiblePartyIndicator'] = $object->getEligiblePartyIndicator();
            }
            if ($object->isInitialized('registrationNumber') && null !== $object->getRegistrationNumber()) {
                $data['RegistrationNumber'] = $object->getRegistrationNumber();
            }
            if ($object->isInitialized('quantity') && null !== $object->getQuantity()) {
                $data['Quantity'] = $object->getQuantity();
            }
            if ($object->isInitialized('unitOfMeasurement') && null !== $object->getUnitOfMeasurement()) {
                $data['UnitOfMeasurement'] = $this->normalizer->normalize($object->getUnitOfMeasurement(), 'json', $context);
            }
            if ($object->isInitialized('significantMilitaryEquipmentIndicator') && null !== $object->getSignificantMilitaryEquipmentIndicator()) {
                $data['SignificantMilitaryEquipmentIndicator'] = $object->getSignificantMilitaryEquipmentIndicator();
            }
            if ($object->isInitialized('aCMNumber') && null !== $object->getACMNumber()) {
                $data['ACMNumber'] = $object->getACMNumber();
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
            return ['ShipStream\\Ups\\Api\\Model\\EEIInformationDDTCInformation' => false];
        }
    }
} else {
    class EEIInformationDDTCInformationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\EEIInformationDDTCInformation';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\EEIInformationDDTCInformation';
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
            $object = new \ShipStream\Ups\Api\Model\EEIInformationDDTCInformation();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('ITARExemptionNumber', $data) && $data['ITARExemptionNumber'] !== null) {
                $object->setITARExemptionNumber($data['ITARExemptionNumber']);
                unset($data['ITARExemptionNumber']);
            }
            elseif (\array_key_exists('ITARExemptionNumber', $data) && $data['ITARExemptionNumber'] === null) {
                $object->setITARExemptionNumber(null);
            }
            if (\array_key_exists('USMLCategoryCode', $data) && $data['USMLCategoryCode'] !== null) {
                $object->setUSMLCategoryCode($data['USMLCategoryCode']);
                unset($data['USMLCategoryCode']);
            }
            elseif (\array_key_exists('USMLCategoryCode', $data) && $data['USMLCategoryCode'] === null) {
                $object->setUSMLCategoryCode(null);
            }
            if (\array_key_exists('EligiblePartyIndicator', $data) && $data['EligiblePartyIndicator'] !== null) {
                $object->setEligiblePartyIndicator($data['EligiblePartyIndicator']);
                unset($data['EligiblePartyIndicator']);
            }
            elseif (\array_key_exists('EligiblePartyIndicator', $data) && $data['EligiblePartyIndicator'] === null) {
                $object->setEligiblePartyIndicator(null);
            }
            if (\array_key_exists('RegistrationNumber', $data) && $data['RegistrationNumber'] !== null) {
                $object->setRegistrationNumber($data['RegistrationNumber']);
                unset($data['RegistrationNumber']);
            }
            elseif (\array_key_exists('RegistrationNumber', $data) && $data['RegistrationNumber'] === null) {
                $object->setRegistrationNumber(null);
            }
            if (\array_key_exists('Quantity', $data) && $data['Quantity'] !== null) {
                $object->setQuantity($data['Quantity']);
                unset($data['Quantity']);
            }
            elseif (\array_key_exists('Quantity', $data) && $data['Quantity'] === null) {
                $object->setQuantity(null);
            }
            if (\array_key_exists('UnitOfMeasurement', $data) && $data['UnitOfMeasurement'] !== null) {
                $object->setUnitOfMeasurement($this->denormalizer->denormalize($data['UnitOfMeasurement'], 'ShipStream\\Ups\\Api\\Model\\DDTCInformationUnitOfMeasurement', 'json', $context));
                unset($data['UnitOfMeasurement']);
            }
            elseif (\array_key_exists('UnitOfMeasurement', $data) && $data['UnitOfMeasurement'] === null) {
                $object->setUnitOfMeasurement(null);
            }
            if (\array_key_exists('SignificantMilitaryEquipmentIndicator', $data) && $data['SignificantMilitaryEquipmentIndicator'] !== null) {
                $object->setSignificantMilitaryEquipmentIndicator($data['SignificantMilitaryEquipmentIndicator']);
                unset($data['SignificantMilitaryEquipmentIndicator']);
            }
            elseif (\array_key_exists('SignificantMilitaryEquipmentIndicator', $data) && $data['SignificantMilitaryEquipmentIndicator'] === null) {
                $object->setSignificantMilitaryEquipmentIndicator(null);
            }
            if (\array_key_exists('ACMNumber', $data) && $data['ACMNumber'] !== null) {
                $object->setACMNumber($data['ACMNumber']);
                unset($data['ACMNumber']);
            }
            elseif (\array_key_exists('ACMNumber', $data) && $data['ACMNumber'] === null) {
                $object->setACMNumber(null);
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
            if ($object->isInitialized('iTARExemptionNumber') && null !== $object->getITARExemptionNumber()) {
                $data['ITARExemptionNumber'] = $object->getITARExemptionNumber();
            }
            if ($object->isInitialized('uSMLCategoryCode') && null !== $object->getUSMLCategoryCode()) {
                $data['USMLCategoryCode'] = $object->getUSMLCategoryCode();
            }
            if ($object->isInitialized('eligiblePartyIndicator') && null !== $object->getEligiblePartyIndicator()) {
                $data['EligiblePartyIndicator'] = $object->getEligiblePartyIndicator();
            }
            if ($object->isInitialized('registrationNumber') && null !== $object->getRegistrationNumber()) {
                $data['RegistrationNumber'] = $object->getRegistrationNumber();
            }
            if ($object->isInitialized('quantity') && null !== $object->getQuantity()) {
                $data['Quantity'] = $object->getQuantity();
            }
            if ($object->isInitialized('unitOfMeasurement') && null !== $object->getUnitOfMeasurement()) {
                $data['UnitOfMeasurement'] = $this->normalizer->normalize($object->getUnitOfMeasurement(), 'json', $context);
            }
            if ($object->isInitialized('significantMilitaryEquipmentIndicator') && null !== $object->getSignificantMilitaryEquipmentIndicator()) {
                $data['SignificantMilitaryEquipmentIndicator'] = $object->getSignificantMilitaryEquipmentIndicator();
            }
            if ($object->isInitialized('aCMNumber') && null !== $object->getACMNumber()) {
                $data['ACMNumber'] = $object->getACMNumber();
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
            return ['ShipStream\\Ups\\Api\\Model\\EEIInformationDDTCInformation' => false];
        }
    }
}