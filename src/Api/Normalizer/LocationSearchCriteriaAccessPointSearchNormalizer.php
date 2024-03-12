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
    class LocationSearchCriteriaAccessPointSearchNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\LocationSearchCriteriaAccessPointSearch';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\LocationSearchCriteriaAccessPointSearch';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \ShipStream\Ups\Api\Model\LocationSearchCriteriaAccessPointSearch();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('PublicAccessPointID', $data)) {
                $object->setPublicAccessPointID($data['PublicAccessPointID']);
                unset($data['PublicAccessPointID']);
            }
            if (\array_key_exists('AccessPointStatus', $data)) {
                $object->setAccessPointStatus($data['AccessPointStatus']);
                unset($data['AccessPointStatus']);
            }
            if (\array_key_exists('AccountNumber', $data)) {
                $object->setAccountNumber($data['AccountNumber']);
                unset($data['AccountNumber']);
            }
            if (\array_key_exists('IncludeCriteria', $data)) {
                $object->setIncludeCriteria($this->denormalizer->denormalize($data['IncludeCriteria'], 'ShipStream\\Ups\\Api\\Model\\AccessPointSearchIncludeCriteria', 'json', $context));
                unset($data['IncludeCriteria']);
            }
            if (\array_key_exists('ExcludeFromResult', $data)) {
                $object->setExcludeFromResult($this->denormalizer->denormalize($data['ExcludeFromResult'], 'ShipStream\\Ups\\Api\\Model\\AccessPointSearchExcludeFromResult', 'json', $context));
                unset($data['ExcludeFromResult']);
            }
            if (\array_key_exists('ExactMatchIndicator', $data)) {
                $object->setExactMatchIndicator($data['ExactMatchIndicator']);
                unset($data['ExactMatchIndicator']);
            }
            if (\array_key_exists('ExistIndicator', $data)) {
                $object->setExistIndicator($data['ExistIndicator']);
                unset($data['ExistIndicator']);
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
            if ($object->isInitialized('publicAccessPointID') && null !== $object->getPublicAccessPointID()) {
                $data['PublicAccessPointID'] = $object->getPublicAccessPointID();
            }
            if ($object->isInitialized('accessPointStatus') && null !== $object->getAccessPointStatus()) {
                $data['AccessPointStatus'] = $object->getAccessPointStatus();
            }
            if ($object->isInitialized('accountNumber') && null !== $object->getAccountNumber()) {
                $data['AccountNumber'] = $object->getAccountNumber();
            }
            if ($object->isInitialized('includeCriteria') && null !== $object->getIncludeCriteria()) {
                $data['IncludeCriteria'] = $this->normalizer->normalize($object->getIncludeCriteria(), 'json', $context);
            }
            if ($object->isInitialized('excludeFromResult') && null !== $object->getExcludeFromResult()) {
                $data['ExcludeFromResult'] = $this->normalizer->normalize($object->getExcludeFromResult(), 'json', $context);
            }
            if ($object->isInitialized('exactMatchIndicator') && null !== $object->getExactMatchIndicator()) {
                $data['ExactMatchIndicator'] = $object->getExactMatchIndicator();
            }
            if ($object->isInitialized('existIndicator') && null !== $object->getExistIndicator()) {
                $data['ExistIndicator'] = $object->getExistIndicator();
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['ShipStream\\Ups\\Api\\Model\\LocationSearchCriteriaAccessPointSearch' => false];
        }
    }
} else {
    class LocationSearchCriteriaAccessPointSearchNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\LocationSearchCriteriaAccessPointSearch';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\LocationSearchCriteriaAccessPointSearch';
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
            $object = new \ShipStream\Ups\Api\Model\LocationSearchCriteriaAccessPointSearch();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('PublicAccessPointID', $data)) {
                $object->setPublicAccessPointID($data['PublicAccessPointID']);
                unset($data['PublicAccessPointID']);
            }
            if (\array_key_exists('AccessPointStatus', $data)) {
                $object->setAccessPointStatus($data['AccessPointStatus']);
                unset($data['AccessPointStatus']);
            }
            if (\array_key_exists('AccountNumber', $data)) {
                $object->setAccountNumber($data['AccountNumber']);
                unset($data['AccountNumber']);
            }
            if (\array_key_exists('IncludeCriteria', $data)) {
                $object->setIncludeCriteria($this->denormalizer->denormalize($data['IncludeCriteria'], 'ShipStream\\Ups\\Api\\Model\\AccessPointSearchIncludeCriteria', 'json', $context));
                unset($data['IncludeCriteria']);
            }
            if (\array_key_exists('ExcludeFromResult', $data)) {
                $object->setExcludeFromResult($this->denormalizer->denormalize($data['ExcludeFromResult'], 'ShipStream\\Ups\\Api\\Model\\AccessPointSearchExcludeFromResult', 'json', $context));
                unset($data['ExcludeFromResult']);
            }
            if (\array_key_exists('ExactMatchIndicator', $data)) {
                $object->setExactMatchIndicator($data['ExactMatchIndicator']);
                unset($data['ExactMatchIndicator']);
            }
            if (\array_key_exists('ExistIndicator', $data)) {
                $object->setExistIndicator($data['ExistIndicator']);
                unset($data['ExistIndicator']);
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
            if ($object->isInitialized('publicAccessPointID') && null !== $object->getPublicAccessPointID()) {
                $data['PublicAccessPointID'] = $object->getPublicAccessPointID();
            }
            if ($object->isInitialized('accessPointStatus') && null !== $object->getAccessPointStatus()) {
                $data['AccessPointStatus'] = $object->getAccessPointStatus();
            }
            if ($object->isInitialized('accountNumber') && null !== $object->getAccountNumber()) {
                $data['AccountNumber'] = $object->getAccountNumber();
            }
            if ($object->isInitialized('includeCriteria') && null !== $object->getIncludeCriteria()) {
                $data['IncludeCriteria'] = $this->normalizer->normalize($object->getIncludeCriteria(), 'json', $context);
            }
            if ($object->isInitialized('excludeFromResult') && null !== $object->getExcludeFromResult()) {
                $data['ExcludeFromResult'] = $this->normalizer->normalize($object->getExcludeFromResult(), 'json', $context);
            }
            if ($object->isInitialized('exactMatchIndicator') && null !== $object->getExactMatchIndicator()) {
                $data['ExactMatchIndicator'] = $object->getExactMatchIndicator();
            }
            if ($object->isInitialized('existIndicator') && null !== $object->getExistIndicator()) {
                $data['ExistIndicator'] = $object->getExistIndicator();
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['ShipStream\\Ups\\Api\\Model\\LocationSearchCriteriaAccessPointSearch' => false];
        }
    }
}