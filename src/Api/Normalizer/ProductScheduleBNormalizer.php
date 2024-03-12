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
    class ProductScheduleBNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\ProductScheduleB';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\ProductScheduleB';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \ShipStream\Ups\Api\Model\ProductScheduleB();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Number', $data)) {
                $object->setNumber($data['Number']);
                unset($data['Number']);
            }
            if (\array_key_exists('Quantity', $data)) {
                $values = [];
                foreach ($data['Quantity'] as $value) {
                    $values[] = $value;
                }
                $object->setQuantity($values);
                unset($data['Quantity']);
            }
            if (\array_key_exists('UnitOfMeasurement', $data)) {
                $values_1 = [];
                foreach ($data['UnitOfMeasurement'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'ShipStream\\Ups\\Api\\Model\\ScheduleBUnitOfMeasurement', 'json', $context);
                }
                $object->setUnitOfMeasurement($values_1);
                unset($data['UnitOfMeasurement']);
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
            $data['Number'] = $object->getNumber();
            if ($object->isInitialized('quantity') && null !== $object->getQuantity()) {
                $values = [];
                foreach ($object->getQuantity() as $value) {
                    $values[] = $value;
                }
                $data['Quantity'] = $values;
            }
            $values_1 = [];
            foreach ($object->getUnitOfMeasurement() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['UnitOfMeasurement'] = $values_1;
            foreach ($object as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_2;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['ShipStream\\Ups\\Api\\Model\\ProductScheduleB' => false];
        }
    }
} else {
    class ProductScheduleBNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\ProductScheduleB';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\ProductScheduleB';
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
            $object = new \ShipStream\Ups\Api\Model\ProductScheduleB();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Number', $data)) {
                $object->setNumber($data['Number']);
                unset($data['Number']);
            }
            if (\array_key_exists('Quantity', $data)) {
                $values = [];
                foreach ($data['Quantity'] as $value) {
                    $values[] = $value;
                }
                $object->setQuantity($values);
                unset($data['Quantity']);
            }
            if (\array_key_exists('UnitOfMeasurement', $data)) {
                $values_1 = [];
                foreach ($data['UnitOfMeasurement'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'ShipStream\\Ups\\Api\\Model\\ScheduleBUnitOfMeasurement', 'json', $context);
                }
                $object->setUnitOfMeasurement($values_1);
                unset($data['UnitOfMeasurement']);
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
            $data['Number'] = $object->getNumber();
            if ($object->isInitialized('quantity') && null !== $object->getQuantity()) {
                $values = [];
                foreach ($object->getQuantity() as $value) {
                    $values[] = $value;
                }
                $data['Quantity'] = $values;
            }
            $values_1 = [];
            foreach ($object->getUnitOfMeasurement() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['UnitOfMeasurement'] = $values_1;
            foreach ($object as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_2;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['ShipStream\\Ups\\Api\\Model\\ProductScheduleB' => false];
        }
    }
}