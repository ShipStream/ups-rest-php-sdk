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
    class GenericShipmentReferenceNumberNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\GenericShipmentReferenceNumber';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\GenericShipmentReferenceNumber';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \ShipStream\Ups\Api\Model\GenericShipmentReferenceNumber();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('BarCodeIndicator', $data) && $data['BarCodeIndicator'] !== null) {
                $object->setBarCodeIndicator($data['BarCodeIndicator']);
                unset($data['BarCodeIndicator']);
            }
            elseif (\array_key_exists('BarCodeIndicator', $data) && $data['BarCodeIndicator'] === null) {
                $object->setBarCodeIndicator(null);
            }
            if (\array_key_exists('Number', $data) && $data['Number'] !== null) {
                $object->setNumber($data['Number']);
                unset($data['Number']);
            }
            elseif (\array_key_exists('Number', $data) && $data['Number'] === null) {
                $object->setNumber(null);
            }
            if (\array_key_exists('Code', $data) && $data['Code'] !== null) {
                $object->setCode($data['Code']);
                unset($data['Code']);
            }
            elseif (\array_key_exists('Code', $data) && $data['Code'] === null) {
                $object->setCode(null);
            }
            if (\array_key_exists('Value', $data) && $data['Value'] !== null) {
                $object->setValue($data['Value']);
                unset($data['Value']);
            }
            elseif (\array_key_exists('Value', $data) && $data['Value'] === null) {
                $object->setValue(null);
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
            if ($object->isInitialized('barCodeIndicator') && null !== $object->getBarCodeIndicator()) {
                $data['BarCodeIndicator'] = $object->getBarCodeIndicator();
            }
            if ($object->isInitialized('number') && null !== $object->getNumber()) {
                $data['Number'] = $object->getNumber();
            }
            if ($object->isInitialized('code') && null !== $object->getCode()) {
                $data['Code'] = $object->getCode();
            }
            $data['Value'] = $object->getValue();
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['ShipStream\\Ups\\Api\\Model\\GenericShipmentReferenceNumber' => false];
        }
    }
} else {
    class GenericShipmentReferenceNumberNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\GenericShipmentReferenceNumber';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\GenericShipmentReferenceNumber';
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
            $object = new \ShipStream\Ups\Api\Model\GenericShipmentReferenceNumber();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('BarCodeIndicator', $data) && $data['BarCodeIndicator'] !== null) {
                $object->setBarCodeIndicator($data['BarCodeIndicator']);
                unset($data['BarCodeIndicator']);
            }
            elseif (\array_key_exists('BarCodeIndicator', $data) && $data['BarCodeIndicator'] === null) {
                $object->setBarCodeIndicator(null);
            }
            if (\array_key_exists('Number', $data) && $data['Number'] !== null) {
                $object->setNumber($data['Number']);
                unset($data['Number']);
            }
            elseif (\array_key_exists('Number', $data) && $data['Number'] === null) {
                $object->setNumber(null);
            }
            if (\array_key_exists('Code', $data) && $data['Code'] !== null) {
                $object->setCode($data['Code']);
                unset($data['Code']);
            }
            elseif (\array_key_exists('Code', $data) && $data['Code'] === null) {
                $object->setCode(null);
            }
            if (\array_key_exists('Value', $data) && $data['Value'] !== null) {
                $object->setValue($data['Value']);
                unset($data['Value']);
            }
            elseif (\array_key_exists('Value', $data) && $data['Value'] === null) {
                $object->setValue(null);
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
            if ($object->isInitialized('barCodeIndicator') && null !== $object->getBarCodeIndicator()) {
                $data['BarCodeIndicator'] = $object->getBarCodeIndicator();
            }
            if ($object->isInitialized('number') && null !== $object->getNumber()) {
                $data['Number'] = $object->getNumber();
            }
            if ($object->isInitialized('code') && null !== $object->getCode()) {
                $data['Code'] = $object->getCode();
            }
            $data['Value'] = $object->getValue();
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['ShipStream\\Ups\\Api\\Model\\GenericShipmentReferenceNumber' => false];
        }
    }
}