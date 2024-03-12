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
    class ShipmentResponseResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\ShipmentResponseResponse';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\ShipmentResponseResponse';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \ShipStream\Ups\Api\Model\ShipmentResponseResponse();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('ResponseStatus', $data)) {
                $object->setResponseStatus($this->denormalizer->denormalize($data['ResponseStatus'], 'ShipStream\\Ups\\Api\\Model\\ResponseResponseStatus', 'json', $context));
                unset($data['ResponseStatus']);
            }
            if (\array_key_exists('Alert', $data) && $data['Alert'] !== null) {
                $values = [];
                foreach ($data['Alert'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'ShipStream\\Ups\\Api\\Model\\ResponseAlert', 'json', $context);
                }
                $object->setAlert($values);
                unset($data['Alert']);
            }
            elseif (\array_key_exists('Alert', $data) && $data['Alert'] === null) {
                $object->setAlert(null);
            }
            if (\array_key_exists('TransactionReference', $data)) {
                $object->setTransactionReference($this->denormalizer->denormalize($data['TransactionReference'], 'ShipStream\\Ups\\Api\\Model\\ResponseTransactionReference', 'json', $context));
                unset($data['TransactionReference']);
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
            $data['ResponseStatus'] = $this->normalizer->normalize($object->getResponseStatus(), 'json', $context);
            if ($object->isInitialized('alert') && null !== $object->getAlert()) {
                $values = [];
                foreach ($object->getAlert() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['Alert'] = $values;
            }
            if ($object->isInitialized('transactionReference') && null !== $object->getTransactionReference()) {
                $data['TransactionReference'] = $this->normalizer->normalize($object->getTransactionReference(), 'json', $context);
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
            return ['ShipStream\\Ups\\Api\\Model\\ShipmentResponseResponse' => false];
        }
    }
} else {
    class ShipmentResponseResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\ShipmentResponseResponse';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\ShipmentResponseResponse';
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
            $object = new \ShipStream\Ups\Api\Model\ShipmentResponseResponse();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('ResponseStatus', $data)) {
                $object->setResponseStatus($this->denormalizer->denormalize($data['ResponseStatus'], 'ShipStream\\Ups\\Api\\Model\\ResponseResponseStatus', 'json', $context));
                unset($data['ResponseStatus']);
            }
            if (\array_key_exists('Alert', $data) && $data['Alert'] !== null) {
                $values = [];
                foreach ($data['Alert'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'ShipStream\\Ups\\Api\\Model\\ResponseAlert', 'json', $context);
                }
                $object->setAlert($values);
                unset($data['Alert']);
            }
            elseif (\array_key_exists('Alert', $data) && $data['Alert'] === null) {
                $object->setAlert(null);
            }
            if (\array_key_exists('TransactionReference', $data)) {
                $object->setTransactionReference($this->denormalizer->denormalize($data['TransactionReference'], 'ShipStream\\Ups\\Api\\Model\\ResponseTransactionReference', 'json', $context));
                unset($data['TransactionReference']);
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
            $data['ResponseStatus'] = $this->normalizer->normalize($object->getResponseStatus(), 'json', $context);
            if ($object->isInitialized('alert') && null !== $object->getAlert()) {
                $values = [];
                foreach ($object->getAlert() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['Alert'] = $values;
            }
            if ($object->isInitialized('transactionReference') && null !== $object->getTransactionReference()) {
                $data['TransactionReference'] = $this->normalizer->normalize($object->getTransactionReference(), 'json', $context);
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
            return ['ShipStream\\Ups\\Api\\Model\\ShipmentResponseResponse' => false];
        }
    }
}