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
    class DropOffFacilitiesLocalizedInstructionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\DropOffFacilitiesLocalizedInstruction';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\DropOffFacilitiesLocalizedInstruction';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \ShipStream\Ups\Api\Model\DropOffFacilitiesLocalizedInstruction();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Locale', $data) && $data['Locale'] !== null) {
                $object->setLocale($data['Locale']);
                unset($data['Locale']);
            }
            elseif (\array_key_exists('Locale', $data) && $data['Locale'] === null) {
                $object->setLocale(null);
            }
            if (\array_key_exists('Last50ftInstruction', $data) && $data['Last50ftInstruction'] !== null) {
                $object->setLast50ftInstruction($data['Last50ftInstruction']);
                unset($data['Last50ftInstruction']);
            }
            elseif (\array_key_exists('Last50ftInstruction', $data) && $data['Last50ftInstruction'] === null) {
                $object->setLast50ftInstruction(null);
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
            if ($object->isInitialized('locale') && null !== $object->getLocale()) {
                $data['Locale'] = $object->getLocale();
            }
            if ($object->isInitialized('last50ftInstruction') && null !== $object->getLast50ftInstruction()) {
                $data['Last50ftInstruction'] = $object->getLast50ftInstruction();
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
            return ['ShipStream\\Ups\\Api\\Model\\DropOffFacilitiesLocalizedInstruction' => false];
        }
    }
} else {
    class DropOffFacilitiesLocalizedInstructionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\DropOffFacilitiesLocalizedInstruction';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\DropOffFacilitiesLocalizedInstruction';
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
            $object = new \ShipStream\Ups\Api\Model\DropOffFacilitiesLocalizedInstruction();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Locale', $data) && $data['Locale'] !== null) {
                $object->setLocale($data['Locale']);
                unset($data['Locale']);
            }
            elseif (\array_key_exists('Locale', $data) && $data['Locale'] === null) {
                $object->setLocale(null);
            }
            if (\array_key_exists('Last50ftInstruction', $data) && $data['Last50ftInstruction'] !== null) {
                $object->setLast50ftInstruction($data['Last50ftInstruction']);
                unset($data['Last50ftInstruction']);
            }
            elseif (\array_key_exists('Last50ftInstruction', $data) && $data['Last50ftInstruction'] === null) {
                $object->setLast50ftInstruction(null);
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
            if ($object->isInitialized('locale') && null !== $object->getLocale()) {
                $data['Locale'] = $object->getLocale();
            }
            if ($object->isInitialized('last50ftInstruction') && null !== $object->getLast50ftInstruction()) {
                $data['Last50ftInstruction'] = $object->getLast50ftInstruction();
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
            return ['ShipStream\\Ups\\Api\\Model\\DropOffFacilitiesLocalizedInstruction' => false];
        }
    }
}