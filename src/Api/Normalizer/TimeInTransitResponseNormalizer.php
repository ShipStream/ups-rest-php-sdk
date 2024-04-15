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
    class TimeInTransitResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\TimeInTransitResponse';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\TimeInTransitResponse';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \ShipStream\Ups\Api\Model\TimeInTransitResponse();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('validationList', $data) && $data['validationList'] !== null) {
                $object->setValidationList($this->denormalizer->denormalize($data['validationList'], 'ShipStream\\Ups\\Api\\Model\\ValidationList', 'json', $context));
                unset($data['validationList']);
            }
            elseif (\array_key_exists('validationList', $data) && $data['validationList'] === null) {
                $object->setValidationList(null);
            }
            if (\array_key_exists('destinationPickList', $data) && $data['destinationPickList'] !== null) {
                $values = [];
                foreach ($data['destinationPickList'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'ShipStream\\Ups\\Api\\Model\\CandidateAddress', 'json', $context);
                }
                $object->setDestinationPickList($values);
                unset($data['destinationPickList']);
            }
            elseif (\array_key_exists('destinationPickList', $data) && $data['destinationPickList'] === null) {
                $object->setDestinationPickList(null);
            }
            if (\array_key_exists('originPickList', $data) && $data['originPickList'] !== null) {
                $values_1 = [];
                foreach ($data['originPickList'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'ShipStream\\Ups\\Api\\Model\\CandidateAddress', 'json', $context);
                }
                $object->setOriginPickList($values_1);
                unset($data['originPickList']);
            }
            elseif (\array_key_exists('originPickList', $data) && $data['originPickList'] === null) {
                $object->setOriginPickList(null);
            }
            if (\array_key_exists('emsResponse', $data) && $data['emsResponse'] !== null) {
                $object->setEmsResponse($this->denormalizer->denormalize($data['emsResponse'], 'ShipStream\\Ups\\Api\\Model\\EmsResponse', 'json', $context));
                unset($data['emsResponse']);
            }
            elseif (\array_key_exists('emsResponse', $data) && $data['emsResponse'] === null) {
                $object->setEmsResponse(null);
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
            if ($object->isInitialized('validationList') && null !== $object->getValidationList()) {
                $data['validationList'] = $this->normalizer->normalize($object->getValidationList(), 'json', $context);
            }
            if ($object->isInitialized('destinationPickList') && null !== $object->getDestinationPickList()) {
                $values = [];
                foreach ($object->getDestinationPickList() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['destinationPickList'] = $values;
            }
            if ($object->isInitialized('originPickList') && null !== $object->getOriginPickList()) {
                $values_1 = [];
                foreach ($object->getOriginPickList() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['originPickList'] = $values_1;
            }
            if ($object->isInitialized('emsResponse') && null !== $object->getEmsResponse()) {
                $data['emsResponse'] = $this->normalizer->normalize($object->getEmsResponse(), 'json', $context);
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
            return ['ShipStream\\Ups\\Api\\Model\\TimeInTransitResponse' => false];
        }
    }
} else {
    class TimeInTransitResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\TimeInTransitResponse';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\TimeInTransitResponse';
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
            $object = new \ShipStream\Ups\Api\Model\TimeInTransitResponse();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('validationList', $data) && $data['validationList'] !== null) {
                $object->setValidationList($this->denormalizer->denormalize($data['validationList'], 'ShipStream\\Ups\\Api\\Model\\ValidationList', 'json', $context));
                unset($data['validationList']);
            }
            elseif (\array_key_exists('validationList', $data) && $data['validationList'] === null) {
                $object->setValidationList(null);
            }
            if (\array_key_exists('destinationPickList', $data) && $data['destinationPickList'] !== null) {
                $values = [];
                foreach ($data['destinationPickList'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'ShipStream\\Ups\\Api\\Model\\CandidateAddress', 'json', $context);
                }
                $object->setDestinationPickList($values);
                unset($data['destinationPickList']);
            }
            elseif (\array_key_exists('destinationPickList', $data) && $data['destinationPickList'] === null) {
                $object->setDestinationPickList(null);
            }
            if (\array_key_exists('originPickList', $data) && $data['originPickList'] !== null) {
                $values_1 = [];
                foreach ($data['originPickList'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'ShipStream\\Ups\\Api\\Model\\CandidateAddress', 'json', $context);
                }
                $object->setOriginPickList($values_1);
                unset($data['originPickList']);
            }
            elseif (\array_key_exists('originPickList', $data) && $data['originPickList'] === null) {
                $object->setOriginPickList(null);
            }
            if (\array_key_exists('emsResponse', $data) && $data['emsResponse'] !== null) {
                $object->setEmsResponse($this->denormalizer->denormalize($data['emsResponse'], 'ShipStream\\Ups\\Api\\Model\\EmsResponse', 'json', $context));
                unset($data['emsResponse']);
            }
            elseif (\array_key_exists('emsResponse', $data) && $data['emsResponse'] === null) {
                $object->setEmsResponse(null);
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
            if ($object->isInitialized('validationList') && null !== $object->getValidationList()) {
                $data['validationList'] = $this->normalizer->normalize($object->getValidationList(), 'json', $context);
            }
            if ($object->isInitialized('destinationPickList') && null !== $object->getDestinationPickList()) {
                $values = [];
                foreach ($object->getDestinationPickList() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['destinationPickList'] = $values;
            }
            if ($object->isInitialized('originPickList') && null !== $object->getOriginPickList()) {
                $values_1 = [];
                foreach ($object->getOriginPickList() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['originPickList'] = $values_1;
            }
            if ($object->isInitialized('emsResponse') && null !== $object->getEmsResponse()) {
                $data['emsResponse'] = $this->normalizer->normalize($object->getEmsResponse(), 'json', $context);
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
            return ['ShipStream\\Ups\\Api\\Model\\TimeInTransitResponse' => false];
        }
    }
}