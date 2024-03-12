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
    class VoidShipmentRequestVoidShipmentNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\VoidShipmentRequestVoidShipment';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\VoidShipmentRequestVoidShipment';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \ShipStream\Ups\Api\Model\VoidShipmentRequestVoidShipment();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('ShippingHistoryUserKey', $data)) {
                $object->setShippingHistoryUserKey($data['ShippingHistoryUserKey']);
                unset($data['ShippingHistoryUserKey']);
            }
            if (\array_key_exists('ShipmentIdentificationNumber', $data)) {
                $object->setShipmentIdentificationNumber($data['ShipmentIdentificationNumber']);
                unset($data['ShipmentIdentificationNumber']);
            }
            if (\array_key_exists('TrackingNumber', $data)) {
                $values = [];
                foreach ($data['TrackingNumber'] as $value) {
                    $values[] = $value;
                }
                $object->setTrackingNumber($values);
                unset($data['TrackingNumber']);
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
            if ($object->isInitialized('shippingHistoryUserKey') && null !== $object->getShippingHistoryUserKey()) {
                $data['ShippingHistoryUserKey'] = $object->getShippingHistoryUserKey();
            }
            $data['ShipmentIdentificationNumber'] = $object->getShipmentIdentificationNumber();
            if ($object->isInitialized('trackingNumber') && null !== $object->getTrackingNumber()) {
                $values = [];
                foreach ($object->getTrackingNumber() as $value) {
                    $values[] = $value;
                }
                $data['TrackingNumber'] = $values;
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
            return ['ShipStream\\Ups\\Api\\Model\\VoidShipmentRequestVoidShipment' => false];
        }
    }
} else {
    class VoidShipmentRequestVoidShipmentNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\VoidShipmentRequestVoidShipment';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\VoidShipmentRequestVoidShipment';
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
            $object = new \ShipStream\Ups\Api\Model\VoidShipmentRequestVoidShipment();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('ShippingHistoryUserKey', $data)) {
                $object->setShippingHistoryUserKey($data['ShippingHistoryUserKey']);
                unset($data['ShippingHistoryUserKey']);
            }
            if (\array_key_exists('ShipmentIdentificationNumber', $data)) {
                $object->setShipmentIdentificationNumber($data['ShipmentIdentificationNumber']);
                unset($data['ShipmentIdentificationNumber']);
            }
            if (\array_key_exists('TrackingNumber', $data)) {
                $values = [];
                foreach ($data['TrackingNumber'] as $value) {
                    $values[] = $value;
                }
                $object->setTrackingNumber($values);
                unset($data['TrackingNumber']);
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
            if ($object->isInitialized('shippingHistoryUserKey') && null !== $object->getShippingHistoryUserKey()) {
                $data['ShippingHistoryUserKey'] = $object->getShippingHistoryUserKey();
            }
            $data['ShipmentIdentificationNumber'] = $object->getShipmentIdentificationNumber();
            if ($object->isInitialized('trackingNumber') && null !== $object->getTrackingNumber()) {
                $values = [];
                foreach ($object->getTrackingNumber() as $value) {
                    $values[] = $value;
                }
                $data['TrackingNumber'] = $values;
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
            return ['ShipStream\\Ups\\Api\\Model\\VoidShipmentRequestVoidShipment' => false];
        }
    }
}