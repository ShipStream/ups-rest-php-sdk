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
    class AcceptanceAuditPreCheckRequestShipmentNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\AcceptanceAuditPreCheckRequestShipment';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\AcceptanceAuditPreCheckRequestShipment';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \ShipStream\Ups\Api\Model\AcceptanceAuditPreCheckRequestShipment();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('ShipperNumber', $data)) {
                $object->setShipperNumber($data['ShipperNumber']);
                unset($data['ShipperNumber']);
            }
            if (\array_key_exists('ShipFromAddress', $data)) {
                $object->setShipFromAddress($this->denormalizer->denormalize($data['ShipFromAddress'], 'ShipStream\\Ups\\Api\\Model\\AcceptanceAuditPreCheckShipmentShipFromAddress', 'json', $context));
                unset($data['ShipFromAddress']);
            }
            if (\array_key_exists('ShipToAddress', $data)) {
                $object->setShipToAddress($this->denormalizer->denormalize($data['ShipToAddress'], 'ShipStream\\Ups\\Api\\Model\\AcceptanceAuditPreCheckShipmentShipToAddress', 'json', $context));
                unset($data['ShipToAddress']);
            }
            if (\array_key_exists('Service', $data)) {
                $object->setService($this->denormalizer->denormalize($data['Service'], 'ShipStream\\Ups\\Api\\Model\\ShipmentService', 'json', $context));
                unset($data['Service']);
            }
            if (\array_key_exists('RegulationSet', $data)) {
                $object->setRegulationSet($data['RegulationSet']);
                unset($data['RegulationSet']);
            }
            if (\array_key_exists('Package', $data)) {
                $values = [];
                foreach ($data['Package'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'ShipStream\\Ups\\Api\\Model\\AcceptanceAuditPreCheckShipmentPackage', 'json', $context);
                }
                $object->setPackage($values);
                unset($data['Package']);
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
            $data['ShipperNumber'] = $object->getShipperNumber();
            $data['ShipFromAddress'] = $this->normalizer->normalize($object->getShipFromAddress(), 'json', $context);
            $data['ShipToAddress'] = $this->normalizer->normalize($object->getShipToAddress(), 'json', $context);
            $data['Service'] = $this->normalizer->normalize($object->getService(), 'json', $context);
            if ($object->isInitialized('regulationSet') && null !== $object->getRegulationSet()) {
                $data['RegulationSet'] = $object->getRegulationSet();
            }
            $values = [];
            foreach ($object->getPackage() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['Package'] = $values;
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['ShipStream\\Ups\\Api\\Model\\AcceptanceAuditPreCheckRequestShipment' => false];
        }
    }
} else {
    class AcceptanceAuditPreCheckRequestShipmentNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\AcceptanceAuditPreCheckRequestShipment';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\AcceptanceAuditPreCheckRequestShipment';
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
            $object = new \ShipStream\Ups\Api\Model\AcceptanceAuditPreCheckRequestShipment();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('ShipperNumber', $data)) {
                $object->setShipperNumber($data['ShipperNumber']);
                unset($data['ShipperNumber']);
            }
            if (\array_key_exists('ShipFromAddress', $data)) {
                $object->setShipFromAddress($this->denormalizer->denormalize($data['ShipFromAddress'], 'ShipStream\\Ups\\Api\\Model\\AcceptanceAuditPreCheckShipmentShipFromAddress', 'json', $context));
                unset($data['ShipFromAddress']);
            }
            if (\array_key_exists('ShipToAddress', $data)) {
                $object->setShipToAddress($this->denormalizer->denormalize($data['ShipToAddress'], 'ShipStream\\Ups\\Api\\Model\\AcceptanceAuditPreCheckShipmentShipToAddress', 'json', $context));
                unset($data['ShipToAddress']);
            }
            if (\array_key_exists('Service', $data)) {
                $object->setService($this->denormalizer->denormalize($data['Service'], 'ShipStream\\Ups\\Api\\Model\\ShipmentService', 'json', $context));
                unset($data['Service']);
            }
            if (\array_key_exists('RegulationSet', $data)) {
                $object->setRegulationSet($data['RegulationSet']);
                unset($data['RegulationSet']);
            }
            if (\array_key_exists('Package', $data)) {
                $values = [];
                foreach ($data['Package'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'ShipStream\\Ups\\Api\\Model\\AcceptanceAuditPreCheckShipmentPackage', 'json', $context);
                }
                $object->setPackage($values);
                unset($data['Package']);
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
            $data['ShipperNumber'] = $object->getShipperNumber();
            $data['ShipFromAddress'] = $this->normalizer->normalize($object->getShipFromAddress(), 'json', $context);
            $data['ShipToAddress'] = $this->normalizer->normalize($object->getShipToAddress(), 'json', $context);
            $data['Service'] = $this->normalizer->normalize($object->getService(), 'json', $context);
            if ($object->isInitialized('regulationSet') && null !== $object->getRegulationSet()) {
                $data['RegulationSet'] = $object->getRegulationSet();
            }
            $values = [];
            foreach ($object->getPackage() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['Package'] = $values;
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['ShipStream\\Ups\\Api\\Model\\AcceptanceAuditPreCheckRequestShipment' => false];
        }
    }
}