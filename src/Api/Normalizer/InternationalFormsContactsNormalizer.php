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
    class InternationalFormsContactsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\InternationalFormsContacts';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\InternationalFormsContacts';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \ShipStream\Ups\Api\Model\InternationalFormsContacts();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('ForwardAgent', $data)) {
                $object->setForwardAgent($this->denormalizer->denormalize($data['ForwardAgent'], 'ShipStream\\Ups\\Api\\Model\\ContactsForwardAgent', 'json', $context));
                unset($data['ForwardAgent']);
            }
            if (\array_key_exists('UltimateConsignee', $data)) {
                $object->setUltimateConsignee($this->denormalizer->denormalize($data['UltimateConsignee'], 'ShipStream\\Ups\\Api\\Model\\ContactsUltimateConsignee', 'json', $context));
                unset($data['UltimateConsignee']);
            }
            if (\array_key_exists('IntermediateConsignee', $data)) {
                $object->setIntermediateConsignee($this->denormalizer->denormalize($data['IntermediateConsignee'], 'ShipStream\\Ups\\Api\\Model\\ContactsIntermediateConsignee', 'json', $context));
                unset($data['IntermediateConsignee']);
            }
            if (\array_key_exists('Producer', $data)) {
                $object->setProducer($this->denormalizer->denormalize($data['Producer'], 'ShipStream\\Ups\\Api\\Model\\ContactsProducer', 'json', $context));
                unset($data['Producer']);
            }
            if (\array_key_exists('SoldTo', $data)) {
                $object->setSoldTo($this->denormalizer->denormalize($data['SoldTo'], 'ShipStream\\Ups\\Api\\Model\\ContactsSoldTo', 'json', $context));
                unset($data['SoldTo']);
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
            if ($object->isInitialized('forwardAgent') && null !== $object->getForwardAgent()) {
                $data['ForwardAgent'] = $this->normalizer->normalize($object->getForwardAgent(), 'json', $context);
            }
            if ($object->isInitialized('ultimateConsignee') && null !== $object->getUltimateConsignee()) {
                $data['UltimateConsignee'] = $this->normalizer->normalize($object->getUltimateConsignee(), 'json', $context);
            }
            if ($object->isInitialized('intermediateConsignee') && null !== $object->getIntermediateConsignee()) {
                $data['IntermediateConsignee'] = $this->normalizer->normalize($object->getIntermediateConsignee(), 'json', $context);
            }
            if ($object->isInitialized('producer') && null !== $object->getProducer()) {
                $data['Producer'] = $this->normalizer->normalize($object->getProducer(), 'json', $context);
            }
            if ($object->isInitialized('soldTo') && null !== $object->getSoldTo()) {
                $data['SoldTo'] = $this->normalizer->normalize($object->getSoldTo(), 'json', $context);
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
            return ['ShipStream\\Ups\\Api\\Model\\InternationalFormsContacts' => false];
        }
    }
} else {
    class InternationalFormsContactsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\InternationalFormsContacts';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\InternationalFormsContacts';
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
            $object = new \ShipStream\Ups\Api\Model\InternationalFormsContacts();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('ForwardAgent', $data)) {
                $object->setForwardAgent($this->denormalizer->denormalize($data['ForwardAgent'], 'ShipStream\\Ups\\Api\\Model\\ContactsForwardAgent', 'json', $context));
                unset($data['ForwardAgent']);
            }
            if (\array_key_exists('UltimateConsignee', $data)) {
                $object->setUltimateConsignee($this->denormalizer->denormalize($data['UltimateConsignee'], 'ShipStream\\Ups\\Api\\Model\\ContactsUltimateConsignee', 'json', $context));
                unset($data['UltimateConsignee']);
            }
            if (\array_key_exists('IntermediateConsignee', $data)) {
                $object->setIntermediateConsignee($this->denormalizer->denormalize($data['IntermediateConsignee'], 'ShipStream\\Ups\\Api\\Model\\ContactsIntermediateConsignee', 'json', $context));
                unset($data['IntermediateConsignee']);
            }
            if (\array_key_exists('Producer', $data)) {
                $object->setProducer($this->denormalizer->denormalize($data['Producer'], 'ShipStream\\Ups\\Api\\Model\\ContactsProducer', 'json', $context));
                unset($data['Producer']);
            }
            if (\array_key_exists('SoldTo', $data)) {
                $object->setSoldTo($this->denormalizer->denormalize($data['SoldTo'], 'ShipStream\\Ups\\Api\\Model\\ContactsSoldTo', 'json', $context));
                unset($data['SoldTo']);
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
            if ($object->isInitialized('forwardAgent') && null !== $object->getForwardAgent()) {
                $data['ForwardAgent'] = $this->normalizer->normalize($object->getForwardAgent(), 'json', $context);
            }
            if ($object->isInitialized('ultimateConsignee') && null !== $object->getUltimateConsignee()) {
                $data['UltimateConsignee'] = $this->normalizer->normalize($object->getUltimateConsignee(), 'json', $context);
            }
            if ($object->isInitialized('intermediateConsignee') && null !== $object->getIntermediateConsignee()) {
                $data['IntermediateConsignee'] = $this->normalizer->normalize($object->getIntermediateConsignee(), 'json', $context);
            }
            if ($object->isInitialized('producer') && null !== $object->getProducer()) {
                $data['Producer'] = $this->normalizer->normalize($object->getProducer(), 'json', $context);
            }
            if ($object->isInitialized('soldTo') && null !== $object->getSoldTo()) {
                $data['SoldTo'] = $this->normalizer->normalize($object->getSoldTo(), 'json', $context);
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
            return ['ShipStream\\Ups\\Api\\Model\\InternationalFormsContacts' => false];
        }
    }
}