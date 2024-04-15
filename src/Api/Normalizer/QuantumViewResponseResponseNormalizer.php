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
    class QuantumViewResponseResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\QuantumViewResponseResponse';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\QuantumViewResponseResponse';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \ShipStream\Ups\Api\Model\QuantumViewResponseResponse();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('TransactionReference', $data) && $data['TransactionReference'] !== null) {
                $object->setTransactionReference($this->denormalizer->denormalize($data['TransactionReference'], 'ShipStream\\Ups\\Api\\Model\\ResponseTransactionReference', 'json', $context));
                unset($data['TransactionReference']);
            }
            elseif (\array_key_exists('TransactionReference', $data) && $data['TransactionReference'] === null) {
                $object->setTransactionReference(null);
            }
            if (\array_key_exists('ResponseStatusCode', $data) && $data['ResponseStatusCode'] !== null) {
                $object->setResponseStatusCode($data['ResponseStatusCode']);
                unset($data['ResponseStatusCode']);
            }
            elseif (\array_key_exists('ResponseStatusCode', $data) && $data['ResponseStatusCode'] === null) {
                $object->setResponseStatusCode(null);
            }
            if (\array_key_exists('ResponseStatusDescription', $data) && $data['ResponseStatusDescription'] !== null) {
                $object->setResponseStatusDescription($data['ResponseStatusDescription']);
                unset($data['ResponseStatusDescription']);
            }
            elseif (\array_key_exists('ResponseStatusDescription', $data) && $data['ResponseStatusDescription'] === null) {
                $object->setResponseStatusDescription(null);
            }
            if (\array_key_exists('Error', $data) && $data['Error'] !== null) {
                $values = [];
                foreach ($data['Error'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'ShipStream\\Ups\\Api\\Model\\ResponseError', 'json', $context);
                }
                $object->setError($values);
                unset($data['Error']);
            }
            elseif (\array_key_exists('Error', $data) && $data['Error'] === null) {
                $object->setError(null);
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
            $data['TransactionReference'] = $this->normalizer->normalize($object->getTransactionReference(), 'json', $context);
            $data['ResponseStatusCode'] = $object->getResponseStatusCode();
            if ($object->isInitialized('responseStatusDescription') && null !== $object->getResponseStatusDescription()) {
                $data['ResponseStatusDescription'] = $object->getResponseStatusDescription();
            }
            if ($object->isInitialized('error') && null !== $object->getError()) {
                $values = [];
                foreach ($object->getError() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['Error'] = $values;
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
            return ['ShipStream\\Ups\\Api\\Model\\QuantumViewResponseResponse' => false];
        }
    }
} else {
    class QuantumViewResponseResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\QuantumViewResponseResponse';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\QuantumViewResponseResponse';
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
            $object = new \ShipStream\Ups\Api\Model\QuantumViewResponseResponse();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('TransactionReference', $data) && $data['TransactionReference'] !== null) {
                $object->setTransactionReference($this->denormalizer->denormalize($data['TransactionReference'], 'ShipStream\\Ups\\Api\\Model\\ResponseTransactionReference', 'json', $context));
                unset($data['TransactionReference']);
            }
            elseif (\array_key_exists('TransactionReference', $data) && $data['TransactionReference'] === null) {
                $object->setTransactionReference(null);
            }
            if (\array_key_exists('ResponseStatusCode', $data) && $data['ResponseStatusCode'] !== null) {
                $object->setResponseStatusCode($data['ResponseStatusCode']);
                unset($data['ResponseStatusCode']);
            }
            elseif (\array_key_exists('ResponseStatusCode', $data) && $data['ResponseStatusCode'] === null) {
                $object->setResponseStatusCode(null);
            }
            if (\array_key_exists('ResponseStatusDescription', $data) && $data['ResponseStatusDescription'] !== null) {
                $object->setResponseStatusDescription($data['ResponseStatusDescription']);
                unset($data['ResponseStatusDescription']);
            }
            elseif (\array_key_exists('ResponseStatusDescription', $data) && $data['ResponseStatusDescription'] === null) {
                $object->setResponseStatusDescription(null);
            }
            if (\array_key_exists('Error', $data) && $data['Error'] !== null) {
                $values = [];
                foreach ($data['Error'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'ShipStream\\Ups\\Api\\Model\\ResponseError', 'json', $context);
                }
                $object->setError($values);
                unset($data['Error']);
            }
            elseif (\array_key_exists('Error', $data) && $data['Error'] === null) {
                $object->setError(null);
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
            $data['TransactionReference'] = $this->normalizer->normalize($object->getTransactionReference(), 'json', $context);
            $data['ResponseStatusCode'] = $object->getResponseStatusCode();
            if ($object->isInitialized('responseStatusDescription') && null !== $object->getResponseStatusDescription()) {
                $data['ResponseStatusDescription'] = $object->getResponseStatusDescription();
            }
            if ($object->isInitialized('error') && null !== $object->getError()) {
                $values = [];
                foreach ($object->getError() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['Error'] = $values;
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
            return ['ShipStream\\Ups\\Api\\Model\\QuantumViewResponseResponse' => false];
        }
    }
}