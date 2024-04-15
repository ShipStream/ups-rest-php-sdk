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
    class RateRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\RateRequest';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\RateRequest';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \ShipStream\Ups\Api\Model\RateRequest();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Request', $data) && $data['Request'] !== null) {
                $object->setRequest($this->denormalizer->denormalize($data['Request'], 'ShipStream\\Ups\\Api\\Model\\RateRequestRequest', 'json', $context));
                unset($data['Request']);
            }
            elseif (\array_key_exists('Request', $data) && $data['Request'] === null) {
                $object->setRequest(null);
            }
            if (\array_key_exists('PickupType', $data) && $data['PickupType'] !== null) {
                $object->setPickupType($this->denormalizer->denormalize($data['PickupType'], 'ShipStream\\Ups\\Api\\Model\\RateRequestPickupType', 'json', $context));
                unset($data['PickupType']);
            }
            elseif (\array_key_exists('PickupType', $data) && $data['PickupType'] === null) {
                $object->setPickupType(null);
            }
            if (\array_key_exists('CustomerClassification', $data) && $data['CustomerClassification'] !== null) {
                $object->setCustomerClassification($this->denormalizer->denormalize($data['CustomerClassification'], 'ShipStream\\Ups\\Api\\Model\\RateRequestCustomerClassification', 'json', $context));
                unset($data['CustomerClassification']);
            }
            elseif (\array_key_exists('CustomerClassification', $data) && $data['CustomerClassification'] === null) {
                $object->setCustomerClassification(null);
            }
            if (\array_key_exists('Shipment', $data) && $data['Shipment'] !== null) {
                $object->setShipment($this->denormalizer->denormalize($data['Shipment'], 'ShipStream\\Ups\\Api\\Model\\RateRequestShipment', 'json', $context));
                unset($data['Shipment']);
            }
            elseif (\array_key_exists('Shipment', $data) && $data['Shipment'] === null) {
                $object->setShipment(null);
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
            $data['Request'] = $this->normalizer->normalize($object->getRequest(), 'json', $context);
            if ($object->isInitialized('pickupType') && null !== $object->getPickupType()) {
                $data['PickupType'] = $this->normalizer->normalize($object->getPickupType(), 'json', $context);
            }
            if ($object->isInitialized('customerClassification') && null !== $object->getCustomerClassification()) {
                $data['CustomerClassification'] = $this->normalizer->normalize($object->getCustomerClassification(), 'json', $context);
            }
            $data['Shipment'] = $this->normalizer->normalize($object->getShipment(), 'json', $context);
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['ShipStream\\Ups\\Api\\Model\\RateRequest' => false];
        }
    }
} else {
    class RateRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\RateRequest';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\RateRequest';
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
            $object = new \ShipStream\Ups\Api\Model\RateRequest();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Request', $data) && $data['Request'] !== null) {
                $object->setRequest($this->denormalizer->denormalize($data['Request'], 'ShipStream\\Ups\\Api\\Model\\RateRequestRequest', 'json', $context));
                unset($data['Request']);
            }
            elseif (\array_key_exists('Request', $data) && $data['Request'] === null) {
                $object->setRequest(null);
            }
            if (\array_key_exists('PickupType', $data) && $data['PickupType'] !== null) {
                $object->setPickupType($this->denormalizer->denormalize($data['PickupType'], 'ShipStream\\Ups\\Api\\Model\\RateRequestPickupType', 'json', $context));
                unset($data['PickupType']);
            }
            elseif (\array_key_exists('PickupType', $data) && $data['PickupType'] === null) {
                $object->setPickupType(null);
            }
            if (\array_key_exists('CustomerClassification', $data) && $data['CustomerClassification'] !== null) {
                $object->setCustomerClassification($this->denormalizer->denormalize($data['CustomerClassification'], 'ShipStream\\Ups\\Api\\Model\\RateRequestCustomerClassification', 'json', $context));
                unset($data['CustomerClassification']);
            }
            elseif (\array_key_exists('CustomerClassification', $data) && $data['CustomerClassification'] === null) {
                $object->setCustomerClassification(null);
            }
            if (\array_key_exists('Shipment', $data) && $data['Shipment'] !== null) {
                $object->setShipment($this->denormalizer->denormalize($data['Shipment'], 'ShipStream\\Ups\\Api\\Model\\RateRequestShipment', 'json', $context));
                unset($data['Shipment']);
            }
            elseif (\array_key_exists('Shipment', $data) && $data['Shipment'] === null) {
                $object->setShipment(null);
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
            $data['Request'] = $this->normalizer->normalize($object->getRequest(), 'json', $context);
            if ($object->isInitialized('pickupType') && null !== $object->getPickupType()) {
                $data['PickupType'] = $this->normalizer->normalize($object->getPickupType(), 'json', $context);
            }
            if ($object->isInitialized('customerClassification') && null !== $object->getCustomerClassification()) {
                $data['CustomerClassification'] = $this->normalizer->normalize($object->getCustomerClassification(), 'json', $context);
            }
            $data['Shipment'] = $this->normalizer->normalize($object->getShipment(), 'json', $context);
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['ShipStream\\Ups\\Api\\Model\\RateRequest' => false];
        }
    }
}