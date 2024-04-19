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
    class TrackSubsServiceErrorResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\TrackSubsServiceErrorResponse';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\TrackSubsServiceErrorResponse';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \ShipStream\Ups\Api\Model\TrackSubsServiceErrorResponse();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('response', $data)) {
                $object->setResponse($this->denormalizer->denormalize($data['response'], 'ShipStream\\Ups\\Api\\Model\\ErrorResponseWrapper', 'json', $context));
                unset($data['response']);
            }
            if (\array_key_exists('invalidTrackingNumbers', $data)) {
                $values = [];
                foreach ($data['invalidTrackingNumbers'] as $value) {
                    $values[] = $value;
                }
                $object->setInvalidTrackingNumbers($values);
                unset($data['invalidTrackingNumbers']);
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
            $data['response'] = $this->normalizer->normalize($object->getResponse(), 'json', $context);
            if ($object->isInitialized('invalidTrackingNumbers') && null !== $object->getInvalidTrackingNumbers()) {
                $values = [];
                foreach ($object->getInvalidTrackingNumbers() as $value) {
                    $values[] = $value;
                }
                $data['invalidTrackingNumbers'] = $values;
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
            return ['ShipStream\\Ups\\Api\\Model\\TrackSubsServiceErrorResponse' => false];
        }
    }
} else {
    class TrackSubsServiceErrorResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\TrackSubsServiceErrorResponse';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\TrackSubsServiceErrorResponse';
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
            $object = new \ShipStream\Ups\Api\Model\TrackSubsServiceErrorResponse();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('response', $data)) {
                $object->setResponse($this->denormalizer->denormalize($data['response'], 'ShipStream\\Ups\\Api\\Model\\ErrorResponseWrapper', 'json', $context));
                unset($data['response']);
            }
            if (\array_key_exists('invalidTrackingNumbers', $data)) {
                $values = [];
                foreach ($data['invalidTrackingNumbers'] as $value) {
                    $values[] = $value;
                }
                $object->setInvalidTrackingNumbers($values);
                unset($data['invalidTrackingNumbers']);
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
            $data['response'] = $this->normalizer->normalize($object->getResponse(), 'json', $context);
            if ($object->isInitialized('invalidTrackingNumbers') && null !== $object->getInvalidTrackingNumbers()) {
                $values = [];
                foreach ($object->getInvalidTrackingNumbers() as $value) {
                    $values[] = $value;
                }
                $data['invalidTrackingNumbers'] = $values;
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
            return ['ShipStream\\Ups\\Api\\Model\\TrackSubsServiceErrorResponse' => false];
        }
    }
}