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
    class ShipmentReferenceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\ShipmentReference';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\ShipmentReference';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \ShipStream\Ups\Api\Model\ShipmentReference();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Number', $data) && $data['Number'] !== null) {
                $object->setNumber($this->denormalizer->denormalize($data['Number'], 'ShipStream\\Ups\\Api\\Model\\ReferenceNumber', 'json', $context));
                unset($data['Number']);
            }
            elseif (\array_key_exists('Number', $data) && $data['Number'] === null) {
                $object->setNumber(null);
            }
            if (\array_key_exists('BarCodeIndicator', $data) && $data['BarCodeIndicator'] !== null) {
                $object->setBarCodeIndicator($data['BarCodeIndicator']);
                unset($data['BarCodeIndicator']);
            }
            elseif (\array_key_exists('BarCodeIndicator', $data) && $data['BarCodeIndicator'] === null) {
                $object->setBarCodeIndicator(null);
            }
            if (\array_key_exists('NumberOfCartons', $data) && $data['NumberOfCartons'] !== null) {
                $object->setNumberOfCartons($data['NumberOfCartons']);
                unset($data['NumberOfCartons']);
            }
            elseif (\array_key_exists('NumberOfCartons', $data) && $data['NumberOfCartons'] === null) {
                $object->setNumberOfCartons(null);
            }
            if (\array_key_exists('Weight', $data) && $data['Weight'] !== null) {
                $object->setWeight($this->denormalizer->denormalize($data['Weight'], 'ShipStream\\Ups\\Api\\Model\\ReferenceWeight', 'json', $context));
                unset($data['Weight']);
            }
            elseif (\array_key_exists('Weight', $data) && $data['Weight'] === null) {
                $object->setWeight(null);
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
            $data['Number'] = $this->normalizer->normalize($object->getNumber(), 'json', $context);
            if ($object->isInitialized('barCodeIndicator') && null !== $object->getBarCodeIndicator()) {
                $data['BarCodeIndicator'] = $object->getBarCodeIndicator();
            }
            if ($object->isInitialized('numberOfCartons') && null !== $object->getNumberOfCartons()) {
                $data['NumberOfCartons'] = $object->getNumberOfCartons();
            }
            if ($object->isInitialized('weight') && null !== $object->getWeight()) {
                $data['Weight'] = $this->normalizer->normalize($object->getWeight(), 'json', $context);
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
            return ['ShipStream\\Ups\\Api\\Model\\ShipmentReference' => false];
        }
    }
} else {
    class ShipmentReferenceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\ShipmentReference';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\ShipmentReference';
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
            $object = new \ShipStream\Ups\Api\Model\ShipmentReference();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Number', $data) && $data['Number'] !== null) {
                $object->setNumber($this->denormalizer->denormalize($data['Number'], 'ShipStream\\Ups\\Api\\Model\\ReferenceNumber', 'json', $context));
                unset($data['Number']);
            }
            elseif (\array_key_exists('Number', $data) && $data['Number'] === null) {
                $object->setNumber(null);
            }
            if (\array_key_exists('BarCodeIndicator', $data) && $data['BarCodeIndicator'] !== null) {
                $object->setBarCodeIndicator($data['BarCodeIndicator']);
                unset($data['BarCodeIndicator']);
            }
            elseif (\array_key_exists('BarCodeIndicator', $data) && $data['BarCodeIndicator'] === null) {
                $object->setBarCodeIndicator(null);
            }
            if (\array_key_exists('NumberOfCartons', $data) && $data['NumberOfCartons'] !== null) {
                $object->setNumberOfCartons($data['NumberOfCartons']);
                unset($data['NumberOfCartons']);
            }
            elseif (\array_key_exists('NumberOfCartons', $data) && $data['NumberOfCartons'] === null) {
                $object->setNumberOfCartons(null);
            }
            if (\array_key_exists('Weight', $data) && $data['Weight'] !== null) {
                $object->setWeight($this->denormalizer->denormalize($data['Weight'], 'ShipStream\\Ups\\Api\\Model\\ReferenceWeight', 'json', $context));
                unset($data['Weight']);
            }
            elseif (\array_key_exists('Weight', $data) && $data['Weight'] === null) {
                $object->setWeight(null);
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
            $data['Number'] = $this->normalizer->normalize($object->getNumber(), 'json', $context);
            if ($object->isInitialized('barCodeIndicator') && null !== $object->getBarCodeIndicator()) {
                $data['BarCodeIndicator'] = $object->getBarCodeIndicator();
            }
            if ($object->isInitialized('numberOfCartons') && null !== $object->getNumberOfCartons()) {
                $data['NumberOfCartons'] = $object->getNumberOfCartons();
            }
            if ($object->isInitialized('weight') && null !== $object->getWeight()) {
                $data['Weight'] = $this->normalizer->normalize($object->getWeight(), 'json', $context);
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
            return ['ShipStream\\Ups\\Api\\Model\\ShipmentReference' => false];
        }
    }
}