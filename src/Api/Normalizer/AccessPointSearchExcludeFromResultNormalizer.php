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
    class AccessPointSearchExcludeFromResultNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\AccessPointSearchExcludeFromResult';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\AccessPointSearchExcludeFromResult';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \ShipStream\Ups\Api\Model\AccessPointSearchExcludeFromResult();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('BusinessClassificationCode', $data)) {
                $values = [];
                foreach ($data['BusinessClassificationCode'] as $value) {
                    $values[] = $value;
                }
                $object->setBusinessClassificationCode($values);
                unset($data['BusinessClassificationCode']);
            }
            if (\array_key_exists('BusinessName', $data)) {
                $object->setBusinessName($data['BusinessName']);
                unset($data['BusinessName']);
            }
            if (\array_key_exists('Radius', $data)) {
                $object->setRadius($data['Radius']);
                unset($data['Radius']);
            }
            if (\array_key_exists('PostalCodeList', $data)) {
                $object->setPostalCodeList($this->denormalizer->denormalize($data['PostalCodeList'], 'ShipStream\\Ups\\Api\\Model\\ExcludeFromResultPostalCodeList', 'json', $context));
                unset($data['PostalCodeList']);
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
            if ($object->isInitialized('businessClassificationCode') && null !== $object->getBusinessClassificationCode()) {
                $values = [];
                foreach ($object->getBusinessClassificationCode() as $value) {
                    $values[] = $value;
                }
                $data['BusinessClassificationCode'] = $values;
            }
            if ($object->isInitialized('businessName') && null !== $object->getBusinessName()) {
                $data['BusinessName'] = $object->getBusinessName();
            }
            if ($object->isInitialized('radius') && null !== $object->getRadius()) {
                $data['Radius'] = $object->getRadius();
            }
            if ($object->isInitialized('postalCodeList') && null !== $object->getPostalCodeList()) {
                $data['PostalCodeList'] = $this->normalizer->normalize($object->getPostalCodeList(), 'json', $context);
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
            return ['ShipStream\\Ups\\Api\\Model\\AccessPointSearchExcludeFromResult' => false];
        }
    }
} else {
    class AccessPointSearchExcludeFromResultNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\AccessPointSearchExcludeFromResult';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\AccessPointSearchExcludeFromResult';
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
            $object = new \ShipStream\Ups\Api\Model\AccessPointSearchExcludeFromResult();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('BusinessClassificationCode', $data)) {
                $values = [];
                foreach ($data['BusinessClassificationCode'] as $value) {
                    $values[] = $value;
                }
                $object->setBusinessClassificationCode($values);
                unset($data['BusinessClassificationCode']);
            }
            if (\array_key_exists('BusinessName', $data)) {
                $object->setBusinessName($data['BusinessName']);
                unset($data['BusinessName']);
            }
            if (\array_key_exists('Radius', $data)) {
                $object->setRadius($data['Radius']);
                unset($data['Radius']);
            }
            if (\array_key_exists('PostalCodeList', $data)) {
                $object->setPostalCodeList($this->denormalizer->denormalize($data['PostalCodeList'], 'ShipStream\\Ups\\Api\\Model\\ExcludeFromResultPostalCodeList', 'json', $context));
                unset($data['PostalCodeList']);
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
            if ($object->isInitialized('businessClassificationCode') && null !== $object->getBusinessClassificationCode()) {
                $values = [];
                foreach ($object->getBusinessClassificationCode() as $value) {
                    $values[] = $value;
                }
                $data['BusinessClassificationCode'] = $values;
            }
            if ($object->isInitialized('businessName') && null !== $object->getBusinessName()) {
                $data['BusinessName'] = $object->getBusinessName();
            }
            if ($object->isInitialized('radius') && null !== $object->getRadius()) {
                $data['Radius'] = $object->getRadius();
            }
            if ($object->isInitialized('postalCodeList') && null !== $object->getPostalCodeList()) {
                $data['PostalCodeList'] = $this->normalizer->normalize($object->getPostalCodeList(), 'json', $context);
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
            return ['ShipStream\\Ups\\Api\\Model\\AccessPointSearchExcludeFromResult' => false];
        }
    }
}