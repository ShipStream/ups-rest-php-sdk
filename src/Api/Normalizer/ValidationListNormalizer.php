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
    class ValidationListNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\ValidationList';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\ValidationList';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \ShipStream\Ups\Api\Model\ValidationList();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('invalidFieldList', $data)) {
                $values = [];
                foreach ($data['invalidFieldList'] as $value) {
                    $values[] = $value;
                }
                $object->setInvalidFieldList($values);
                unset($data['invalidFieldList']);
            }
            if (\array_key_exists('invalidFieldListCodes', $data)) {
                $values_1 = [];
                foreach ($data['invalidFieldListCodes'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setInvalidFieldListCodes($values_1);
                unset($data['invalidFieldListCodes']);
            }
            if (\array_key_exists('destinationAmbiguous', $data)) {
                $object->setDestinationAmbiguous($data['destinationAmbiguous']);
                unset($data['destinationAmbiguous']);
            }
            if (\array_key_exists('originAmbiguous', $data)) {
                $object->setOriginAmbiguous($data['originAmbiguous']);
                unset($data['originAmbiguous']);
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
            if ($object->isInitialized('invalidFieldList') && null !== $object->getInvalidFieldList()) {
                $values = [];
                foreach ($object->getInvalidFieldList() as $value) {
                    $values[] = $value;
                }
                $data['invalidFieldList'] = $values;
            }
            if ($object->isInitialized('invalidFieldListCodes') && null !== $object->getInvalidFieldListCodes()) {
                $values_1 = [];
                foreach ($object->getInvalidFieldListCodes() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['invalidFieldListCodes'] = $values_1;
            }
            if ($object->isInitialized('destinationAmbiguous') && null !== $object->getDestinationAmbiguous()) {
                $data['destinationAmbiguous'] = $object->getDestinationAmbiguous();
            }
            if ($object->isInitialized('originAmbiguous') && null !== $object->getOriginAmbiguous()) {
                $data['originAmbiguous'] = $object->getOriginAmbiguous();
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
            return ['ShipStream\\Ups\\Api\\Model\\ValidationList' => false];
        }
    }
} else {
    class ValidationListNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\ValidationList';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\ValidationList';
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
            $object = new \ShipStream\Ups\Api\Model\ValidationList();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('invalidFieldList', $data)) {
                $values = [];
                foreach ($data['invalidFieldList'] as $value) {
                    $values[] = $value;
                }
                $object->setInvalidFieldList($values);
                unset($data['invalidFieldList']);
            }
            if (\array_key_exists('invalidFieldListCodes', $data)) {
                $values_1 = [];
                foreach ($data['invalidFieldListCodes'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setInvalidFieldListCodes($values_1);
                unset($data['invalidFieldListCodes']);
            }
            if (\array_key_exists('destinationAmbiguous', $data)) {
                $object->setDestinationAmbiguous($data['destinationAmbiguous']);
                unset($data['destinationAmbiguous']);
            }
            if (\array_key_exists('originAmbiguous', $data)) {
                $object->setOriginAmbiguous($data['originAmbiguous']);
                unset($data['originAmbiguous']);
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
            if ($object->isInitialized('invalidFieldList') && null !== $object->getInvalidFieldList()) {
                $values = [];
                foreach ($object->getInvalidFieldList() as $value) {
                    $values[] = $value;
                }
                $data['invalidFieldList'] = $values;
            }
            if ($object->isInitialized('invalidFieldListCodes') && null !== $object->getInvalidFieldListCodes()) {
                $values_1 = [];
                foreach ($object->getInvalidFieldListCodes() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['invalidFieldListCodes'] = $values_1;
            }
            if ($object->isInitialized('destinationAmbiguous') && null !== $object->getDestinationAmbiguous()) {
                $data['destinationAmbiguous'] = $object->getDestinationAmbiguous();
            }
            if ($object->isInitialized('originAmbiguous') && null !== $object->getOriginAmbiguous()) {
                $data['originAmbiguous'] = $object->getOriginAmbiguous();
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
            return ['ShipStream\\Ups\\Api\\Model\\ValidationList' => false];
        }
    }
}