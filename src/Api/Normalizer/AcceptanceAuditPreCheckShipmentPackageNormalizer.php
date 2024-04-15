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
    class AcceptanceAuditPreCheckShipmentPackageNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\AcceptanceAuditPreCheckShipmentPackage';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\AcceptanceAuditPreCheckShipmentPackage';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \ShipStream\Ups\Api\Model\AcceptanceAuditPreCheckShipmentPackage();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('PackageIdentifier', $data) && $data['PackageIdentifier'] !== null) {
                $object->setPackageIdentifier($data['PackageIdentifier']);
                unset($data['PackageIdentifier']);
            }
            elseif (\array_key_exists('PackageIdentifier', $data) && $data['PackageIdentifier'] === null) {
                $object->setPackageIdentifier(null);
            }
            if (\array_key_exists('PackageWeight', $data) && $data['PackageWeight'] !== null) {
                $object->setPackageWeight($this->denormalizer->denormalize($data['PackageWeight'], 'ShipStream\\Ups\\Api\\Model\\PackagePackageWeight', 'json', $context));
                unset($data['PackageWeight']);
            }
            elseif (\array_key_exists('PackageWeight', $data) && $data['PackageWeight'] === null) {
                $object->setPackageWeight(null);
            }
            if (\array_key_exists('QValue', $data) && $data['QValue'] !== null) {
                $object->setQValue($data['QValue']);
                unset($data['QValue']);
            }
            elseif (\array_key_exists('QValue', $data) && $data['QValue'] === null) {
                $object->setQValue(null);
            }
            if (\array_key_exists('OverPackedIndicator', $data) && $data['OverPackedIndicator'] !== null) {
                $object->setOverPackedIndicator($data['OverPackedIndicator']);
                unset($data['OverPackedIndicator']);
            }
            elseif (\array_key_exists('OverPackedIndicator', $data) && $data['OverPackedIndicator'] === null) {
                $object->setOverPackedIndicator(null);
            }
            if (\array_key_exists('TransportationMode', $data) && $data['TransportationMode'] !== null) {
                $object->setTransportationMode($data['TransportationMode']);
                unset($data['TransportationMode']);
            }
            elseif (\array_key_exists('TransportationMode', $data) && $data['TransportationMode'] === null) {
                $object->setTransportationMode(null);
            }
            if (\array_key_exists('EmergencyPhone', $data) && $data['EmergencyPhone'] !== null) {
                $object->setEmergencyPhone($data['EmergencyPhone']);
                unset($data['EmergencyPhone']);
            }
            elseif (\array_key_exists('EmergencyPhone', $data) && $data['EmergencyPhone'] === null) {
                $object->setEmergencyPhone(null);
            }
            if (\array_key_exists('EmergencyContact', $data) && $data['EmergencyContact'] !== null) {
                $object->setEmergencyContact($data['EmergencyContact']);
                unset($data['EmergencyContact']);
            }
            elseif (\array_key_exists('EmergencyContact', $data) && $data['EmergencyContact'] === null) {
                $object->setEmergencyContact(null);
            }
            if (\array_key_exists('ChemicalRecord', $data) && $data['ChemicalRecord'] !== null) {
                $values = [];
                foreach ($data['ChemicalRecord'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'ShipStream\\Ups\\Api\\Model\\PackageChemicalRecord', 'json', $context);
                }
                $object->setChemicalRecord($values);
                unset($data['ChemicalRecord']);
            }
            elseif (\array_key_exists('ChemicalRecord', $data) && $data['ChemicalRecord'] === null) {
                $object->setChemicalRecord(null);
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
            $data['PackageIdentifier'] = $object->getPackageIdentifier();
            $data['PackageWeight'] = $this->normalizer->normalize($object->getPackageWeight(), 'json', $context);
            if ($object->isInitialized('qValue') && null !== $object->getQValue()) {
                $data['QValue'] = $object->getQValue();
            }
            if ($object->isInitialized('overPackedIndicator') && null !== $object->getOverPackedIndicator()) {
                $data['OverPackedIndicator'] = $object->getOverPackedIndicator();
            }
            if ($object->isInitialized('transportationMode') && null !== $object->getTransportationMode()) {
                $data['TransportationMode'] = $object->getTransportationMode();
            }
            if ($object->isInitialized('emergencyPhone') && null !== $object->getEmergencyPhone()) {
                $data['EmergencyPhone'] = $object->getEmergencyPhone();
            }
            if ($object->isInitialized('emergencyContact') && null !== $object->getEmergencyContact()) {
                $data['EmergencyContact'] = $object->getEmergencyContact();
            }
            $values = [];
            foreach ($object->getChemicalRecord() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['ChemicalRecord'] = $values;
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['ShipStream\\Ups\\Api\\Model\\AcceptanceAuditPreCheckShipmentPackage' => false];
        }
    }
} else {
    class AcceptanceAuditPreCheckShipmentPackageNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\AcceptanceAuditPreCheckShipmentPackage';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\AcceptanceAuditPreCheckShipmentPackage';
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
            $object = new \ShipStream\Ups\Api\Model\AcceptanceAuditPreCheckShipmentPackage();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('PackageIdentifier', $data) && $data['PackageIdentifier'] !== null) {
                $object->setPackageIdentifier($data['PackageIdentifier']);
                unset($data['PackageIdentifier']);
            }
            elseif (\array_key_exists('PackageIdentifier', $data) && $data['PackageIdentifier'] === null) {
                $object->setPackageIdentifier(null);
            }
            if (\array_key_exists('PackageWeight', $data) && $data['PackageWeight'] !== null) {
                $object->setPackageWeight($this->denormalizer->denormalize($data['PackageWeight'], 'ShipStream\\Ups\\Api\\Model\\PackagePackageWeight', 'json', $context));
                unset($data['PackageWeight']);
            }
            elseif (\array_key_exists('PackageWeight', $data) && $data['PackageWeight'] === null) {
                $object->setPackageWeight(null);
            }
            if (\array_key_exists('QValue', $data) && $data['QValue'] !== null) {
                $object->setQValue($data['QValue']);
                unset($data['QValue']);
            }
            elseif (\array_key_exists('QValue', $data) && $data['QValue'] === null) {
                $object->setQValue(null);
            }
            if (\array_key_exists('OverPackedIndicator', $data) && $data['OverPackedIndicator'] !== null) {
                $object->setOverPackedIndicator($data['OverPackedIndicator']);
                unset($data['OverPackedIndicator']);
            }
            elseif (\array_key_exists('OverPackedIndicator', $data) && $data['OverPackedIndicator'] === null) {
                $object->setOverPackedIndicator(null);
            }
            if (\array_key_exists('TransportationMode', $data) && $data['TransportationMode'] !== null) {
                $object->setTransportationMode($data['TransportationMode']);
                unset($data['TransportationMode']);
            }
            elseif (\array_key_exists('TransportationMode', $data) && $data['TransportationMode'] === null) {
                $object->setTransportationMode(null);
            }
            if (\array_key_exists('EmergencyPhone', $data) && $data['EmergencyPhone'] !== null) {
                $object->setEmergencyPhone($data['EmergencyPhone']);
                unset($data['EmergencyPhone']);
            }
            elseif (\array_key_exists('EmergencyPhone', $data) && $data['EmergencyPhone'] === null) {
                $object->setEmergencyPhone(null);
            }
            if (\array_key_exists('EmergencyContact', $data) && $data['EmergencyContact'] !== null) {
                $object->setEmergencyContact($data['EmergencyContact']);
                unset($data['EmergencyContact']);
            }
            elseif (\array_key_exists('EmergencyContact', $data) && $data['EmergencyContact'] === null) {
                $object->setEmergencyContact(null);
            }
            if (\array_key_exists('ChemicalRecord', $data) && $data['ChemicalRecord'] !== null) {
                $values = [];
                foreach ($data['ChemicalRecord'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'ShipStream\\Ups\\Api\\Model\\PackageChemicalRecord', 'json', $context);
                }
                $object->setChemicalRecord($values);
                unset($data['ChemicalRecord']);
            }
            elseif (\array_key_exists('ChemicalRecord', $data) && $data['ChemicalRecord'] === null) {
                $object->setChemicalRecord(null);
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
            $data['PackageIdentifier'] = $object->getPackageIdentifier();
            $data['PackageWeight'] = $this->normalizer->normalize($object->getPackageWeight(), 'json', $context);
            if ($object->isInitialized('qValue') && null !== $object->getQValue()) {
                $data['QValue'] = $object->getQValue();
            }
            if ($object->isInitialized('overPackedIndicator') && null !== $object->getOverPackedIndicator()) {
                $data['OverPackedIndicator'] = $object->getOverPackedIndicator();
            }
            if ($object->isInitialized('transportationMode') && null !== $object->getTransportationMode()) {
                $data['TransportationMode'] = $object->getTransportationMode();
            }
            if ($object->isInitialized('emergencyPhone') && null !== $object->getEmergencyPhone()) {
                $data['EmergencyPhone'] = $object->getEmergencyPhone();
            }
            if ($object->isInitialized('emergencyContact') && null !== $object->getEmergencyContact()) {
                $data['EmergencyContact'] = $object->getEmergencyContact();
            }
            $values = [];
            foreach ($object->getChemicalRecord() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['ChemicalRecord'] = $values;
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['ShipStream\\Ups\\Api\\Model\\AcceptanceAuditPreCheckShipmentPackage' => false];
        }
    }
}