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
    class PackageDimensionsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\PackageDimensions';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\PackageDimensions';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \ShipStream\Ups\Api\Model\PackageDimensions();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('UnitOfMeasurement', $data) && $data['UnitOfMeasurement'] !== null) {
                $object->setUnitOfMeasurement($this->denormalizer->denormalize($data['UnitOfMeasurement'], 'ShipStream\\Ups\\Api\\Model\\DimensionsUnitOfMeasurement', 'json', $context));
                unset($data['UnitOfMeasurement']);
            }
            elseif (\array_key_exists('UnitOfMeasurement', $data) && $data['UnitOfMeasurement'] === null) {
                $object->setUnitOfMeasurement(null);
            }
            if (\array_key_exists('Length', $data) && $data['Length'] !== null) {
                $object->setLength($data['Length']);
                unset($data['Length']);
            }
            elseif (\array_key_exists('Length', $data) && $data['Length'] === null) {
                $object->setLength(null);
            }
            if (\array_key_exists('Width', $data) && $data['Width'] !== null) {
                $object->setWidth($data['Width']);
                unset($data['Width']);
            }
            elseif (\array_key_exists('Width', $data) && $data['Width'] === null) {
                $object->setWidth(null);
            }
            if (\array_key_exists('Height', $data) && $data['Height'] !== null) {
                $object->setHeight($data['Height']);
                unset($data['Height']);
            }
            elseif (\array_key_exists('Height', $data) && $data['Height'] === null) {
                $object->setHeight(null);
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
            $data['UnitOfMeasurement'] = $this->normalizer->normalize($object->getUnitOfMeasurement(), 'json', $context);
            $data['Length'] = $object->getLength();
            $data['Width'] = $object->getWidth();
            $data['Height'] = $object->getHeight();
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['ShipStream\\Ups\\Api\\Model\\PackageDimensions' => false];
        }
    }
} else {
    class PackageDimensionsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\PackageDimensions';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\PackageDimensions';
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
            $object = new \ShipStream\Ups\Api\Model\PackageDimensions();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('UnitOfMeasurement', $data) && $data['UnitOfMeasurement'] !== null) {
                $object->setUnitOfMeasurement($this->denormalizer->denormalize($data['UnitOfMeasurement'], 'ShipStream\\Ups\\Api\\Model\\DimensionsUnitOfMeasurement', 'json', $context));
                unset($data['UnitOfMeasurement']);
            }
            elseif (\array_key_exists('UnitOfMeasurement', $data) && $data['UnitOfMeasurement'] === null) {
                $object->setUnitOfMeasurement(null);
            }
            if (\array_key_exists('Length', $data) && $data['Length'] !== null) {
                $object->setLength($data['Length']);
                unset($data['Length']);
            }
            elseif (\array_key_exists('Length', $data) && $data['Length'] === null) {
                $object->setLength(null);
            }
            if (\array_key_exists('Width', $data) && $data['Width'] !== null) {
                $object->setWidth($data['Width']);
                unset($data['Width']);
            }
            elseif (\array_key_exists('Width', $data) && $data['Width'] === null) {
                $object->setWidth(null);
            }
            if (\array_key_exists('Height', $data) && $data['Height'] !== null) {
                $object->setHeight($data['Height']);
                unset($data['Height']);
            }
            elseif (\array_key_exists('Height', $data) && $data['Height'] === null) {
                $object->setHeight(null);
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
            $data['UnitOfMeasurement'] = $this->normalizer->normalize($object->getUnitOfMeasurement(), 'json', $context);
            $data['Length'] = $object->getLength();
            $data['Width'] = $object->getWidth();
            $data['Height'] = $object->getHeight();
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['ShipStream\\Ups\\Api\\Model\\PackageDimensions' => false];
        }
    }
}