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
    class AlertDetailElementLevelInformationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\AlertDetailElementLevelInformation';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\AlertDetailElementLevelInformation';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \ShipStream\Ups\Api\Model\AlertDetailElementLevelInformation();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Level', $data) && $data['Level'] !== null) {
                $object->setLevel($data['Level']);
                unset($data['Level']);
            }
            elseif (\array_key_exists('Level', $data) && $data['Level'] === null) {
                $object->setLevel(null);
            }
            if (\array_key_exists('ElementIdentifier', $data) && $data['ElementIdentifier'] !== null) {
                $values = [];
                foreach ($data['ElementIdentifier'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'ShipStream\\Ups\\Api\\Model\\ElementLevelInformationElementIdentifier', 'json', $context);
                }
                $object->setElementIdentifier($values);
                unset($data['ElementIdentifier']);
            }
            elseif (\array_key_exists('ElementIdentifier', $data) && $data['ElementIdentifier'] === null) {
                $object->setElementIdentifier(null);
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
            $data['Level'] = $object->getLevel();
            if ($object->isInitialized('elementIdentifier') && null !== $object->getElementIdentifier()) {
                $values = [];
                foreach ($object->getElementIdentifier() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['ElementIdentifier'] = $values;
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
            return ['ShipStream\\Ups\\Api\\Model\\AlertDetailElementLevelInformation' => false];
        }
    }
} else {
    class AlertDetailElementLevelInformationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\AlertDetailElementLevelInformation';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\AlertDetailElementLevelInformation';
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
            $object = new \ShipStream\Ups\Api\Model\AlertDetailElementLevelInformation();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Level', $data) && $data['Level'] !== null) {
                $object->setLevel($data['Level']);
                unset($data['Level']);
            }
            elseif (\array_key_exists('Level', $data) && $data['Level'] === null) {
                $object->setLevel(null);
            }
            if (\array_key_exists('ElementIdentifier', $data) && $data['ElementIdentifier'] !== null) {
                $values = [];
                foreach ($data['ElementIdentifier'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'ShipStream\\Ups\\Api\\Model\\ElementLevelInformationElementIdentifier', 'json', $context);
                }
                $object->setElementIdentifier($values);
                unset($data['ElementIdentifier']);
            }
            elseif (\array_key_exists('ElementIdentifier', $data) && $data['ElementIdentifier'] === null) {
                $object->setElementIdentifier(null);
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
            $data['Level'] = $object->getLevel();
            if ($object->isInitialized('elementIdentifier') && null !== $object->getElementIdentifier()) {
                $values = [];
                foreach ($object->getElementIdentifier() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['ElementIdentifier'] = $values;
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
            return ['ShipStream\\Ups\\Api\\Model\\AlertDetailElementLevelInformation' => false];
        }
    }
}