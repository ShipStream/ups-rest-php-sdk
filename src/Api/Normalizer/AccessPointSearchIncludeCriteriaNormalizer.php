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
    class AccessPointSearchIncludeCriteriaNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\AccessPointSearchIncludeCriteria';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\AccessPointSearchIncludeCriteria';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \ShipStream\Ups\Api\Model\AccessPointSearchIncludeCriteria();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('MerchantAccountNumberList', $data)) {
                $object->setMerchantAccountNumberList($this->denormalizer->denormalize($data['MerchantAccountNumberList'], 'ShipStream\\Ups\\Api\\Model\\IncludeCriteriaMerchantAccountNumberList', 'json', $context));
                unset($data['MerchantAccountNumberList']);
            }
            if (\array_key_exists('SearchFilter', $data)) {
                $object->setSearchFilter($this->denormalizer->denormalize($data['SearchFilter'], 'ShipStream\\Ups\\Api\\Model\\IncludeCriteriaSearchFilter', 'json', $context));
                unset($data['SearchFilter']);
            }
            if (\array_key_exists('ServiceOfferingList', $data)) {
                $object->setServiceOfferingList($this->denormalizer->denormalize($data['ServiceOfferingList'], 'ShipStream\\Ups\\Api\\Model\\IncludeCriteriaServiceOfferingList', 'json', $context));
                unset($data['ServiceOfferingList']);
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
            if ($object->isInitialized('merchantAccountNumberList') && null !== $object->getMerchantAccountNumberList()) {
                $data['MerchantAccountNumberList'] = $this->normalizer->normalize($object->getMerchantAccountNumberList(), 'json', $context);
            }
            if ($object->isInitialized('searchFilter') && null !== $object->getSearchFilter()) {
                $data['SearchFilter'] = $this->normalizer->normalize($object->getSearchFilter(), 'json', $context);
            }
            if ($object->isInitialized('serviceOfferingList') && null !== $object->getServiceOfferingList()) {
                $data['ServiceOfferingList'] = $this->normalizer->normalize($object->getServiceOfferingList(), 'json', $context);
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
            return ['ShipStream\\Ups\\Api\\Model\\AccessPointSearchIncludeCriteria' => false];
        }
    }
} else {
    class AccessPointSearchIncludeCriteriaNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\AccessPointSearchIncludeCriteria';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\AccessPointSearchIncludeCriteria';
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
            $object = new \ShipStream\Ups\Api\Model\AccessPointSearchIncludeCriteria();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('MerchantAccountNumberList', $data)) {
                $object->setMerchantAccountNumberList($this->denormalizer->denormalize($data['MerchantAccountNumberList'], 'ShipStream\\Ups\\Api\\Model\\IncludeCriteriaMerchantAccountNumberList', 'json', $context));
                unset($data['MerchantAccountNumberList']);
            }
            if (\array_key_exists('SearchFilter', $data)) {
                $object->setSearchFilter($this->denormalizer->denormalize($data['SearchFilter'], 'ShipStream\\Ups\\Api\\Model\\IncludeCriteriaSearchFilter', 'json', $context));
                unset($data['SearchFilter']);
            }
            if (\array_key_exists('ServiceOfferingList', $data)) {
                $object->setServiceOfferingList($this->denormalizer->denormalize($data['ServiceOfferingList'], 'ShipStream\\Ups\\Api\\Model\\IncludeCriteriaServiceOfferingList', 'json', $context));
                unset($data['ServiceOfferingList']);
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
            if ($object->isInitialized('merchantAccountNumberList') && null !== $object->getMerchantAccountNumberList()) {
                $data['MerchantAccountNumberList'] = $this->normalizer->normalize($object->getMerchantAccountNumberList(), 'json', $context);
            }
            if ($object->isInitialized('searchFilter') && null !== $object->getSearchFilter()) {
                $data['SearchFilter'] = $this->normalizer->normalize($object->getSearchFilter(), 'json', $context);
            }
            if ($object->isInitialized('serviceOfferingList') && null !== $object->getServiceOfferingList()) {
                $data['ServiceOfferingList'] = $this->normalizer->normalize($object->getServiceOfferingList(), 'json', $context);
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
            return ['ShipStream\\Ups\\Api\\Model\\AccessPointSearchIncludeCriteria' => false];
        }
    }
}