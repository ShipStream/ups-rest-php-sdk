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
    class PreNotificationShipmentPackageNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\PreNotificationShipmentPackage';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\PreNotificationShipmentPackage';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \ShipStream\Ups\Api\Model\PreNotificationShipmentPackage();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('TrackingNumber', $data) && $data['TrackingNumber'] !== null) {
                $object->setTrackingNumber($data['TrackingNumber']);
                unset($data['TrackingNumber']);
            }
            elseif (\array_key_exists('TrackingNumber', $data) && $data['TrackingNumber'] === null) {
                $object->setTrackingNumber(null);
            }
            if (\array_key_exists('PackageWeight', $data) && $data['PackageWeight'] !== null) {
                $object->setPackageWeight($this->denormalizer->denormalize($data['PackageWeight'], 'ShipStream\\Ups\\Api\\Model\\PackagePackageWeight', 'json', $context));
                unset($data['PackageWeight']);
            }
            elseif (\array_key_exists('PackageWeight', $data) && $data['PackageWeight'] === null) {
                $object->setPackageWeight(null);
            }
            if (\array_key_exists('TransportationMode', $data) && $data['TransportationMode'] !== null) {
                $object->setTransportationMode($data['TransportationMode']);
                unset($data['TransportationMode']);
            }
            elseif (\array_key_exists('TransportationMode', $data) && $data['TransportationMode'] === null) {
                $object->setTransportationMode(null);
            }
            if (\array_key_exists('VoidIndicator', $data) && $data['VoidIndicator'] !== null) {
                $object->setVoidIndicator($data['VoidIndicator']);
                unset($data['VoidIndicator']);
            }
            elseif (\array_key_exists('VoidIndicator', $data) && $data['VoidIndicator'] === null) {
                $object->setVoidIndicator(null);
            }
            if (\array_key_exists('PackagePoints', $data) && $data['PackagePoints'] !== null) {
                $object->setPackagePoints($data['PackagePoints']);
                unset($data['PackagePoints']);
            }
            elseif (\array_key_exists('PackagePoints', $data) && $data['PackagePoints'] === null) {
                $object->setPackagePoints(null);
            }
            if (\array_key_exists('ChemicalRecord', $data) && $data['ChemicalRecord'] !== null) {
                $values = [];
                foreach ($data['ChemicalRecord'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'ShipStream\\Ups\\Api\\Model\\PreNotificationPackageChemicalRecord', 'json', $context);
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
            $data['TrackingNumber'] = $object->getTrackingNumber();
            $data['PackageWeight'] = $this->normalizer->normalize($object->getPackageWeight(), 'json', $context);
            if ($object->isInitialized('transportationMode') && null !== $object->getTransportationMode()) {
                $data['TransportationMode'] = $object->getTransportationMode();
            }
            if ($object->isInitialized('voidIndicator') && null !== $object->getVoidIndicator()) {
                $data['VoidIndicator'] = $object->getVoidIndicator();
            }
            if ($object->isInitialized('packagePoints') && null !== $object->getPackagePoints()) {
                $data['PackagePoints'] = $object->getPackagePoints();
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
            return ['ShipStream\\Ups\\Api\\Model\\PreNotificationShipmentPackage' => false];
        }
    }
} else {
    class PreNotificationShipmentPackageNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\PreNotificationShipmentPackage';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\PreNotificationShipmentPackage';
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
            $object = new \ShipStream\Ups\Api\Model\PreNotificationShipmentPackage();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('TrackingNumber', $data) && $data['TrackingNumber'] !== null) {
                $object->setTrackingNumber($data['TrackingNumber']);
                unset($data['TrackingNumber']);
            }
            elseif (\array_key_exists('TrackingNumber', $data) && $data['TrackingNumber'] === null) {
                $object->setTrackingNumber(null);
            }
            if (\array_key_exists('PackageWeight', $data) && $data['PackageWeight'] !== null) {
                $object->setPackageWeight($this->denormalizer->denormalize($data['PackageWeight'], 'ShipStream\\Ups\\Api\\Model\\PackagePackageWeight', 'json', $context));
                unset($data['PackageWeight']);
            }
            elseif (\array_key_exists('PackageWeight', $data) && $data['PackageWeight'] === null) {
                $object->setPackageWeight(null);
            }
            if (\array_key_exists('TransportationMode', $data) && $data['TransportationMode'] !== null) {
                $object->setTransportationMode($data['TransportationMode']);
                unset($data['TransportationMode']);
            }
            elseif (\array_key_exists('TransportationMode', $data) && $data['TransportationMode'] === null) {
                $object->setTransportationMode(null);
            }
            if (\array_key_exists('VoidIndicator', $data) && $data['VoidIndicator'] !== null) {
                $object->setVoidIndicator($data['VoidIndicator']);
                unset($data['VoidIndicator']);
            }
            elseif (\array_key_exists('VoidIndicator', $data) && $data['VoidIndicator'] === null) {
                $object->setVoidIndicator(null);
            }
            if (\array_key_exists('PackagePoints', $data) && $data['PackagePoints'] !== null) {
                $object->setPackagePoints($data['PackagePoints']);
                unset($data['PackagePoints']);
            }
            elseif (\array_key_exists('PackagePoints', $data) && $data['PackagePoints'] === null) {
                $object->setPackagePoints(null);
            }
            if (\array_key_exists('ChemicalRecord', $data) && $data['ChemicalRecord'] !== null) {
                $values = [];
                foreach ($data['ChemicalRecord'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'ShipStream\\Ups\\Api\\Model\\PreNotificationPackageChemicalRecord', 'json', $context);
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
            $data['TrackingNumber'] = $object->getTrackingNumber();
            $data['PackageWeight'] = $this->normalizer->normalize($object->getPackageWeight(), 'json', $context);
            if ($object->isInitialized('transportationMode') && null !== $object->getTransportationMode()) {
                $data['TransportationMode'] = $object->getTransportationMode();
            }
            if ($object->isInitialized('voidIndicator') && null !== $object->getVoidIndicator()) {
                $data['VoidIndicator'] = $object->getVoidIndicator();
            }
            if ($object->isInitialized('packagePoints') && null !== $object->getPackagePoints()) {
                $data['PackagePoints'] = $object->getPackagePoints();
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
            return ['ShipStream\\Ups\\Api\\Model\\PreNotificationShipmentPackage' => false];
        }
    }
}