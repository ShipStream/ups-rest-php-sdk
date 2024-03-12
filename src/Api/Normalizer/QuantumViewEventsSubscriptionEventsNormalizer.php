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
    class QuantumViewEventsSubscriptionEventsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\QuantumViewEventsSubscriptionEvents';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\QuantumViewEventsSubscriptionEvents';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \ShipStream\Ups\Api\Model\QuantumViewEventsSubscriptionEvents();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Name', $data)) {
                $object->setName($data['Name']);
                unset($data['Name']);
            }
            if (\array_key_exists('Number', $data)) {
                $object->setNumber($data['Number']);
                unset($data['Number']);
            }
            if (\array_key_exists('SubscriptionStatus', $data)) {
                $object->setSubscriptionStatus($this->denormalizer->denormalize($data['SubscriptionStatus'], 'ShipStream\\Ups\\Api\\Model\\SubscriptionEventsSubscriptionStatus', 'json', $context));
                unset($data['SubscriptionStatus']);
            }
            if (\array_key_exists('DateRange', $data)) {
                $object->setDateRange($this->denormalizer->denormalize($data['DateRange'], 'ShipStream\\Ups\\Api\\Model\\SubscriptionEventsDateRange', 'json', $context));
                unset($data['DateRange']);
            }
            if (\array_key_exists('SubscriptionFile', $data)) {
                $values = [];
                foreach ($data['SubscriptionFile'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'ShipStream\\Ups\\Api\\Model\\SubscriptionEventsSubscriptionFile', 'json', $context);
                }
                $object->setSubscriptionFile($values);
                unset($data['SubscriptionFile']);
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
            if ($object->isInitialized('name') && null !== $object->getName()) {
                $data['Name'] = $object->getName();
            }
            if ($object->isInitialized('number') && null !== $object->getNumber()) {
                $data['Number'] = $object->getNumber();
            }
            $data['SubscriptionStatus'] = $this->normalizer->normalize($object->getSubscriptionStatus(), 'json', $context);
            if ($object->isInitialized('dateRange') && null !== $object->getDateRange()) {
                $data['DateRange'] = $this->normalizer->normalize($object->getDateRange(), 'json', $context);
            }
            if ($object->isInitialized('subscriptionFile') && null !== $object->getSubscriptionFile()) {
                $values = [];
                foreach ($object->getSubscriptionFile() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['SubscriptionFile'] = $values;
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
            return ['ShipStream\\Ups\\Api\\Model\\QuantumViewEventsSubscriptionEvents' => false];
        }
    }
} else {
    class QuantumViewEventsSubscriptionEventsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\QuantumViewEventsSubscriptionEvents';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\QuantumViewEventsSubscriptionEvents';
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
            $object = new \ShipStream\Ups\Api\Model\QuantumViewEventsSubscriptionEvents();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Name', $data)) {
                $object->setName($data['Name']);
                unset($data['Name']);
            }
            if (\array_key_exists('Number', $data)) {
                $object->setNumber($data['Number']);
                unset($data['Number']);
            }
            if (\array_key_exists('SubscriptionStatus', $data)) {
                $object->setSubscriptionStatus($this->denormalizer->denormalize($data['SubscriptionStatus'], 'ShipStream\\Ups\\Api\\Model\\SubscriptionEventsSubscriptionStatus', 'json', $context));
                unset($data['SubscriptionStatus']);
            }
            if (\array_key_exists('DateRange', $data)) {
                $object->setDateRange($this->denormalizer->denormalize($data['DateRange'], 'ShipStream\\Ups\\Api\\Model\\SubscriptionEventsDateRange', 'json', $context));
                unset($data['DateRange']);
            }
            if (\array_key_exists('SubscriptionFile', $data)) {
                $values = [];
                foreach ($data['SubscriptionFile'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'ShipStream\\Ups\\Api\\Model\\SubscriptionEventsSubscriptionFile', 'json', $context);
                }
                $object->setSubscriptionFile($values);
                unset($data['SubscriptionFile']);
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
            if ($object->isInitialized('name') && null !== $object->getName()) {
                $data['Name'] = $object->getName();
            }
            if ($object->isInitialized('number') && null !== $object->getNumber()) {
                $data['Number'] = $object->getNumber();
            }
            $data['SubscriptionStatus'] = $this->normalizer->normalize($object->getSubscriptionStatus(), 'json', $context);
            if ($object->isInitialized('dateRange') && null !== $object->getDateRange()) {
                $data['DateRange'] = $this->normalizer->normalize($object->getDateRange(), 'json', $context);
            }
            if ($object->isInitialized('subscriptionFile') && null !== $object->getSubscriptionFile()) {
                $values = [];
                foreach ($object->getSubscriptionFile() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['SubscriptionFile'] = $values;
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
            return ['ShipStream\\Ups\\Api\\Model\\QuantumViewEventsSubscriptionEvents' => false];
        }
    }
}