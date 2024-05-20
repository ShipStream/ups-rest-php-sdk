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
    class ShipmentNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\Shipment';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\Shipment';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \ShipStream\Ups\Api\Model\Shipment();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('inquiryNumber', $data)) {
                $object->setInquiryNumber($data['inquiryNumber']);
                unset($data['inquiryNumber']);
            }
            if (\array_key_exists('package', $data) && $data['package'] !== null) {
                $values = [];
                foreach ($data['package'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'ShipStream\\Ups\\Api\\Model\\Package', 'json', $context);
                }
                $object->setPackage($values);
                unset($data['package']);
            }
            elseif (\array_key_exists('package', $data) && $data['package'] === null) {
                $object->setPackage(null);
            }
            if (\array_key_exists('userRelation', $data)) {
                $values_1 = [];
                foreach ($data['userRelation'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setUserRelation($values_1);
                unset($data['userRelation']);
            }
            if (\array_key_exists('warnings', $data) && $data['warnings'] !== null) {
                $values_2 = [];
                foreach ($data['warnings'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, 'ShipStream\\Ups\\Api\\Model\\Warning', 'json', $context);
                }
                $object->setWarnings($values_2);
                unset($data['warnings']);
            }
            elseif (\array_key_exists('warnings', $data) && $data['warnings'] === null) {
                $object->setWarnings(null);
            }
            foreach ($data as $key => $value_3) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_3;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('inquiryNumber') && null !== $object->getInquiryNumber()) {
                $data['inquiryNumber'] = $object->getInquiryNumber();
            }
            if ($object->isInitialized('package') && null !== $object->getPackage()) {
                $values = [];
                foreach ($object->getPackage() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['package'] = $values;
            }
            if ($object->isInitialized('userRelation') && null !== $object->getUserRelation()) {
                $values_1 = [];
                foreach ($object->getUserRelation() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['userRelation'] = $values_1;
            }
            if ($object->isInitialized('warnings') && null !== $object->getWarnings()) {
                $values_2 = [];
                foreach ($object->getWarnings() as $value_2) {
                    $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
                }
                $data['warnings'] = $values_2;
            }
            foreach ($object as $key => $value_3) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_3;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['ShipStream\\Ups\\Api\\Model\\Shipment' => false];
        }
    }
} else {
    class ShipmentNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\Shipment';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\Shipment';
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
            $object = new \ShipStream\Ups\Api\Model\Shipment();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('inquiryNumber', $data)) {
                $object->setInquiryNumber($data['inquiryNumber']);
                unset($data['inquiryNumber']);
            }
            if (\array_key_exists('package', $data) && $data['package'] !== null) {
                $values = [];
                foreach ($data['package'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'ShipStream\\Ups\\Api\\Model\\Package', 'json', $context);
                }
                $object->setPackage($values);
                unset($data['package']);
            }
            elseif (\array_key_exists('package', $data) && $data['package'] === null) {
                $object->setPackage(null);
            }
            if (\array_key_exists('userRelation', $data)) {
                $values_1 = [];
                foreach ($data['userRelation'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setUserRelation($values_1);
                unset($data['userRelation']);
            }
            if (\array_key_exists('warnings', $data) && $data['warnings'] !== null) {
                $values_2 = [];
                foreach ($data['warnings'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, 'ShipStream\\Ups\\Api\\Model\\Warning', 'json', $context);
                }
                $object->setWarnings($values_2);
                unset($data['warnings']);
            }
            elseif (\array_key_exists('warnings', $data) && $data['warnings'] === null) {
                $object->setWarnings(null);
            }
            foreach ($data as $key => $value_3) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_3;
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
            if ($object->isInitialized('inquiryNumber') && null !== $object->getInquiryNumber()) {
                $data['inquiryNumber'] = $object->getInquiryNumber();
            }
            if ($object->isInitialized('package') && null !== $object->getPackage()) {
                $values = [];
                foreach ($object->getPackage() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['package'] = $values;
            }
            if ($object->isInitialized('userRelation') && null !== $object->getUserRelation()) {
                $values_1 = [];
                foreach ($object->getUserRelation() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['userRelation'] = $values_1;
            }
            if ($object->isInitialized('warnings') && null !== $object->getWarnings()) {
                $values_2 = [];
                foreach ($object->getWarnings() as $value_2) {
                    $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
                }
                $data['warnings'] = $values_2;
            }
            foreach ($object as $key => $value_3) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_3;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['ShipStream\\Ups\\Api\\Model\\Shipment' => false];
        }
    }
}