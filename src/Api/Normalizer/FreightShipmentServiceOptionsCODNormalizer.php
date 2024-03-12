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
    class FreightShipmentServiceOptionsCODNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\FreightShipmentServiceOptionsCOD';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\FreightShipmentServiceOptionsCOD';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \ShipStream\Ups\Api\Model\FreightShipmentServiceOptionsCOD();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('CODValue', $data)) {
                $object->setCODValue($this->denormalizer->denormalize($data['CODValue'], 'ShipStream\\Ups\\Api\\Model\\CODCODValue', 'json', $context));
                unset($data['CODValue']);
            }
            if (\array_key_exists('CODPaymentMethod', $data)) {
                $object->setCODPaymentMethod($this->denormalizer->denormalize($data['CODPaymentMethod'], 'ShipStream\\Ups\\Api\\Model\\CODCODPaymentMethod', 'json', $context));
                unset($data['CODPaymentMethod']);
            }
            if (\array_key_exists('CODBillingOption', $data)) {
                $object->setCODBillingOption($this->denormalizer->denormalize($data['CODBillingOption'], 'ShipStream\\Ups\\Api\\Model\\CODCODBillingOption', 'json', $context));
                unset($data['CODBillingOption']);
            }
            if (\array_key_exists('RemitTo', $data)) {
                $object->setRemitTo($this->denormalizer->denormalize($data['RemitTo'], 'ShipStream\\Ups\\Api\\Model\\CODRemitTo', 'json', $context));
                unset($data['RemitTo']);
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
            $data['CODValue'] = $this->normalizer->normalize($object->getCODValue(), 'json', $context);
            $data['CODPaymentMethod'] = $this->normalizer->normalize($object->getCODPaymentMethod(), 'json', $context);
            $data['CODBillingOption'] = $this->normalizer->normalize($object->getCODBillingOption(), 'json', $context);
            $data['RemitTo'] = $this->normalizer->normalize($object->getRemitTo(), 'json', $context);
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['ShipStream\\Ups\\Api\\Model\\FreightShipmentServiceOptionsCOD' => false];
        }
    }
} else {
    class FreightShipmentServiceOptionsCODNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\FreightShipmentServiceOptionsCOD';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\FreightShipmentServiceOptionsCOD';
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
            $object = new \ShipStream\Ups\Api\Model\FreightShipmentServiceOptionsCOD();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('CODValue', $data)) {
                $object->setCODValue($this->denormalizer->denormalize($data['CODValue'], 'ShipStream\\Ups\\Api\\Model\\CODCODValue', 'json', $context));
                unset($data['CODValue']);
            }
            if (\array_key_exists('CODPaymentMethod', $data)) {
                $object->setCODPaymentMethod($this->denormalizer->denormalize($data['CODPaymentMethod'], 'ShipStream\\Ups\\Api\\Model\\CODCODPaymentMethod', 'json', $context));
                unset($data['CODPaymentMethod']);
            }
            if (\array_key_exists('CODBillingOption', $data)) {
                $object->setCODBillingOption($this->denormalizer->denormalize($data['CODBillingOption'], 'ShipStream\\Ups\\Api\\Model\\CODCODBillingOption', 'json', $context));
                unset($data['CODBillingOption']);
            }
            if (\array_key_exists('RemitTo', $data)) {
                $object->setRemitTo($this->denormalizer->denormalize($data['RemitTo'], 'ShipStream\\Ups\\Api\\Model\\CODRemitTo', 'json', $context));
                unset($data['RemitTo']);
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
            $data['CODValue'] = $this->normalizer->normalize($object->getCODValue(), 'json', $context);
            $data['CODPaymentMethod'] = $this->normalizer->normalize($object->getCODPaymentMethod(), 'json', $context);
            $data['CODBillingOption'] = $this->normalizer->normalize($object->getCODBillingOption(), 'json', $context);
            $data['RemitTo'] = $this->normalizer->normalize($object->getRemitTo(), 'json', $context);
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['ShipStream\\Ups\\Api\\Model\\FreightShipmentServiceOptionsCOD' => false];
        }
    }
}