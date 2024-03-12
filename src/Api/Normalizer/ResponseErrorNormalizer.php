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
    class ResponseErrorNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\ResponseError';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\ResponseError';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \ShipStream\Ups\Api\Model\ResponseError();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('ErrorSeverity', $data)) {
                $object->setErrorSeverity($data['ErrorSeverity']);
                unset($data['ErrorSeverity']);
            }
            if (\array_key_exists('ErrorCode', $data)) {
                $object->setErrorCode($data['ErrorCode']);
                unset($data['ErrorCode']);
            }
            if (\array_key_exists('ErrorDescription', $data)) {
                $object->setErrorDescription($data['ErrorDescription']);
                unset($data['ErrorDescription']);
            }
            if (\array_key_exists('MinimumRetrySeconds', $data)) {
                $object->setMinimumRetrySeconds($data['MinimumRetrySeconds']);
                unset($data['MinimumRetrySeconds']);
            }
            if (\array_key_exists('ErrorLocation', $data)) {
                $values = [];
                foreach ($data['ErrorLocation'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'ShipStream\\Ups\\Api\\Model\\ErrorErrorLocation', 'json', $context);
                }
                $object->setErrorLocation($values);
                unset($data['ErrorLocation']);
            }
            if (\array_key_exists('ErrorDigest', $data)) {
                $values_1 = [];
                foreach ($data['ErrorDigest'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setErrorDigest($values_1);
                unset($data['ErrorDigest']);
            }
            foreach ($data as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_2;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('errorSeverity') && null !== $object->getErrorSeverity()) {
                $data['ErrorSeverity'] = $object->getErrorSeverity();
            }
            if ($object->isInitialized('errorCode') && null !== $object->getErrorCode()) {
                $data['ErrorCode'] = $object->getErrorCode();
            }
            if ($object->isInitialized('errorDescription') && null !== $object->getErrorDescription()) {
                $data['ErrorDescription'] = $object->getErrorDescription();
            }
            if ($object->isInitialized('minimumRetrySeconds') && null !== $object->getMinimumRetrySeconds()) {
                $data['MinimumRetrySeconds'] = $object->getMinimumRetrySeconds();
            }
            $values = [];
            foreach ($object->getErrorLocation() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['ErrorLocation'] = $values;
            if ($object->isInitialized('errorDigest') && null !== $object->getErrorDigest()) {
                $values_1 = [];
                foreach ($object->getErrorDigest() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['ErrorDigest'] = $values_1;
            }
            foreach ($object as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_2;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['ShipStream\\Ups\\Api\\Model\\ResponseError' => false];
        }
    }
} else {
    class ResponseErrorNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\ResponseError';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\ResponseError';
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
            $object = new \ShipStream\Ups\Api\Model\ResponseError();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('ErrorSeverity', $data)) {
                $object->setErrorSeverity($data['ErrorSeverity']);
                unset($data['ErrorSeverity']);
            }
            if (\array_key_exists('ErrorCode', $data)) {
                $object->setErrorCode($data['ErrorCode']);
                unset($data['ErrorCode']);
            }
            if (\array_key_exists('ErrorDescription', $data)) {
                $object->setErrorDescription($data['ErrorDescription']);
                unset($data['ErrorDescription']);
            }
            if (\array_key_exists('MinimumRetrySeconds', $data)) {
                $object->setMinimumRetrySeconds($data['MinimumRetrySeconds']);
                unset($data['MinimumRetrySeconds']);
            }
            if (\array_key_exists('ErrorLocation', $data)) {
                $values = [];
                foreach ($data['ErrorLocation'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'ShipStream\\Ups\\Api\\Model\\ErrorErrorLocation', 'json', $context);
                }
                $object->setErrorLocation($values);
                unset($data['ErrorLocation']);
            }
            if (\array_key_exists('ErrorDigest', $data)) {
                $values_1 = [];
                foreach ($data['ErrorDigest'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setErrorDigest($values_1);
                unset($data['ErrorDigest']);
            }
            foreach ($data as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_2;
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
            if ($object->isInitialized('errorSeverity') && null !== $object->getErrorSeverity()) {
                $data['ErrorSeverity'] = $object->getErrorSeverity();
            }
            if ($object->isInitialized('errorCode') && null !== $object->getErrorCode()) {
                $data['ErrorCode'] = $object->getErrorCode();
            }
            if ($object->isInitialized('errorDescription') && null !== $object->getErrorDescription()) {
                $data['ErrorDescription'] = $object->getErrorDescription();
            }
            if ($object->isInitialized('minimumRetrySeconds') && null !== $object->getMinimumRetrySeconds()) {
                $data['MinimumRetrySeconds'] = $object->getMinimumRetrySeconds();
            }
            $values = [];
            foreach ($object->getErrorLocation() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['ErrorLocation'] = $values;
            if ($object->isInitialized('errorDigest') && null !== $object->getErrorDigest()) {
                $values_1 = [];
                foreach ($object->getErrorDigest() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['ErrorDigest'] = $values_1;
            }
            foreach ($object as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_2;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['ShipStream\\Ups\\Api\\Model\\ResponseError' => false];
        }
    }
}