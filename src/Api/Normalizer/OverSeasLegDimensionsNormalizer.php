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
    class OverSeasLegDimensionsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\OverSeasLegDimensions';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\OverSeasLegDimensions';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \ShipStream\Ups\Api\Model\OverSeasLegDimensions();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Volume', $data)) {
                $object->setVolume($data['Volume']);
                unset($data['Volume']);
            }
            if (\array_key_exists('Height', $data)) {
                $object->setHeight($data['Height']);
                unset($data['Height']);
            }
            if (\array_key_exists('Length', $data)) {
                $object->setLength($data['Length']);
                unset($data['Length']);
            }
            if (\array_key_exists('Width', $data)) {
                $object->setWidth($data['Width']);
                unset($data['Width']);
            }
            if (\array_key_exists('UnitOfMeasurement', $data)) {
                $object->setUnitOfMeasurement($this->denormalizer->denormalize($data['UnitOfMeasurement'], 'ShipStream\\Ups\\Api\\Model\\DimensionsUnitOfMeasurement', 'json', $context));
                unset($data['UnitOfMeasurement']);
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
            if ($object->isInitialized('volume') && null !== $object->getVolume()) {
                $data['Volume'] = $object->getVolume();
            }
            $data['Height'] = $object->getHeight();
            $data['Length'] = $object->getLength();
            $data['Width'] = $object->getWidth();
            $data['UnitOfMeasurement'] = $this->normalizer->normalize($object->getUnitOfMeasurement(), 'json', $context);
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['ShipStream\\Ups\\Api\\Model\\OverSeasLegDimensions' => false];
        }
    }
} else {
    class OverSeasLegDimensionsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\OverSeasLegDimensions';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\OverSeasLegDimensions';
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
            $object = new \ShipStream\Ups\Api\Model\OverSeasLegDimensions();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Volume', $data)) {
                $object->setVolume($data['Volume']);
                unset($data['Volume']);
            }
            if (\array_key_exists('Height', $data)) {
                $object->setHeight($data['Height']);
                unset($data['Height']);
            }
            if (\array_key_exists('Length', $data)) {
                $object->setLength($data['Length']);
                unset($data['Length']);
            }
            if (\array_key_exists('Width', $data)) {
                $object->setWidth($data['Width']);
                unset($data['Width']);
            }
            if (\array_key_exists('UnitOfMeasurement', $data)) {
                $object->setUnitOfMeasurement($this->denormalizer->denormalize($data['UnitOfMeasurement'], 'ShipStream\\Ups\\Api\\Model\\DimensionsUnitOfMeasurement', 'json', $context));
                unset($data['UnitOfMeasurement']);
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
            if ($object->isInitialized('volume') && null !== $object->getVolume()) {
                $data['Volume'] = $object->getVolume();
            }
            $data['Height'] = $object->getHeight();
            $data['Length'] = $object->getLength();
            $data['Width'] = $object->getWidth();
            $data['UnitOfMeasurement'] = $this->normalizer->normalize($object->getUnitOfMeasurement(), 'json', $context);
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['ShipStream\\Ups\\Api\\Model\\OverSeasLegDimensions' => false];
        }
    }
}