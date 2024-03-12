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
    class SubscriptionEventsSubscriptionFileNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\SubscriptionEventsSubscriptionFile';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\SubscriptionEventsSubscriptionFile';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \ShipStream\Ups\Api\Model\SubscriptionEventsSubscriptionFile();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('FileName', $data)) {
                $object->setFileName($data['FileName']);
                unset($data['FileName']);
            }
            if (\array_key_exists('StatusType', $data)) {
                $object->setStatusType($this->denormalizer->denormalize($data['StatusType'], 'ShipStream\\Ups\\Api\\Model\\SubscriptionFileStatusType', 'json', $context));
                unset($data['StatusType']);
            }
            if (\array_key_exists('Manifest', $data)) {
                $values = [];
                foreach ($data['Manifest'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'ShipStream\\Ups\\Api\\Model\\SubscriptionFileManifest', 'json', $context);
                }
                $object->setManifest($values);
                unset($data['Manifest']);
            }
            if (\array_key_exists('Origin', $data)) {
                $values_1 = [];
                foreach ($data['Origin'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'ShipStream\\Ups\\Api\\Model\\SubscriptionFileOrigin', 'json', $context);
                }
                $object->setOrigin($values_1);
                unset($data['Origin']);
            }
            if (\array_key_exists('Exception', $data)) {
                $values_2 = [];
                foreach ($data['Exception'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, 'ShipStream\\Ups\\Api\\Model\\SubscriptionFileException', 'json', $context);
                }
                $object->setException($values_2);
                unset($data['Exception']);
            }
            if (\array_key_exists('Delivery', $data)) {
                $values_3 = [];
                foreach ($data['Delivery'] as $value_3) {
                    $values_3[] = $this->denormalizer->denormalize($value_3, 'ShipStream\\Ups\\Api\\Model\\SubscriptionFileDelivery', 'json', $context);
                }
                $object->setDelivery($values_3);
                unset($data['Delivery']);
            }
            if (\array_key_exists('Generic', $data)) {
                $values_4 = [];
                foreach ($data['Generic'] as $value_4) {
                    $values_4[] = $this->denormalizer->denormalize($value_4, 'ShipStream\\Ups\\Api\\Model\\SubscriptionFileGeneric', 'json', $context);
                }
                $object->setGeneric($values_4);
                unset($data['Generic']);
            }
            foreach ($data as $key => $value_5) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_5;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            $data['FileName'] = $object->getFileName();
            $data['StatusType'] = $this->normalizer->normalize($object->getStatusType(), 'json', $context);
            if ($object->isInitialized('manifest') && null !== $object->getManifest()) {
                $values = [];
                foreach ($object->getManifest() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['Manifest'] = $values;
            }
            if ($object->isInitialized('origin') && null !== $object->getOrigin()) {
                $values_1 = [];
                foreach ($object->getOrigin() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['Origin'] = $values_1;
            }
            if ($object->isInitialized('exception') && null !== $object->getException()) {
                $values_2 = [];
                foreach ($object->getException() as $value_2) {
                    $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
                }
                $data['Exception'] = $values_2;
            }
            if ($object->isInitialized('delivery') && null !== $object->getDelivery()) {
                $values_3 = [];
                foreach ($object->getDelivery() as $value_3) {
                    $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
                }
                $data['Delivery'] = $values_3;
            }
            if ($object->isInitialized('generic') && null !== $object->getGeneric()) {
                $values_4 = [];
                foreach ($object->getGeneric() as $value_4) {
                    $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
                }
                $data['Generic'] = $values_4;
            }
            foreach ($object as $key => $value_5) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_5;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['ShipStream\\Ups\\Api\\Model\\SubscriptionEventsSubscriptionFile' => false];
        }
    }
} else {
    class SubscriptionEventsSubscriptionFileNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\SubscriptionEventsSubscriptionFile';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\SubscriptionEventsSubscriptionFile';
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
            $object = new \ShipStream\Ups\Api\Model\SubscriptionEventsSubscriptionFile();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('FileName', $data)) {
                $object->setFileName($data['FileName']);
                unset($data['FileName']);
            }
            if (\array_key_exists('StatusType', $data)) {
                $object->setStatusType($this->denormalizer->denormalize($data['StatusType'], 'ShipStream\\Ups\\Api\\Model\\SubscriptionFileStatusType', 'json', $context));
                unset($data['StatusType']);
            }
            if (\array_key_exists('Manifest', $data)) {
                $values = [];
                foreach ($data['Manifest'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'ShipStream\\Ups\\Api\\Model\\SubscriptionFileManifest', 'json', $context);
                }
                $object->setManifest($values);
                unset($data['Manifest']);
            }
            if (\array_key_exists('Origin', $data)) {
                $values_1 = [];
                foreach ($data['Origin'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'ShipStream\\Ups\\Api\\Model\\SubscriptionFileOrigin', 'json', $context);
                }
                $object->setOrigin($values_1);
                unset($data['Origin']);
            }
            if (\array_key_exists('Exception', $data)) {
                $values_2 = [];
                foreach ($data['Exception'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, 'ShipStream\\Ups\\Api\\Model\\SubscriptionFileException', 'json', $context);
                }
                $object->setException($values_2);
                unset($data['Exception']);
            }
            if (\array_key_exists('Delivery', $data)) {
                $values_3 = [];
                foreach ($data['Delivery'] as $value_3) {
                    $values_3[] = $this->denormalizer->denormalize($value_3, 'ShipStream\\Ups\\Api\\Model\\SubscriptionFileDelivery', 'json', $context);
                }
                $object->setDelivery($values_3);
                unset($data['Delivery']);
            }
            if (\array_key_exists('Generic', $data)) {
                $values_4 = [];
                foreach ($data['Generic'] as $value_4) {
                    $values_4[] = $this->denormalizer->denormalize($value_4, 'ShipStream\\Ups\\Api\\Model\\SubscriptionFileGeneric', 'json', $context);
                }
                $object->setGeneric($values_4);
                unset($data['Generic']);
            }
            foreach ($data as $key => $value_5) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_5;
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
            $data['FileName'] = $object->getFileName();
            $data['StatusType'] = $this->normalizer->normalize($object->getStatusType(), 'json', $context);
            if ($object->isInitialized('manifest') && null !== $object->getManifest()) {
                $values = [];
                foreach ($object->getManifest() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['Manifest'] = $values;
            }
            if ($object->isInitialized('origin') && null !== $object->getOrigin()) {
                $values_1 = [];
                foreach ($object->getOrigin() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['Origin'] = $values_1;
            }
            if ($object->isInitialized('exception') && null !== $object->getException()) {
                $values_2 = [];
                foreach ($object->getException() as $value_2) {
                    $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
                }
                $data['Exception'] = $values_2;
            }
            if ($object->isInitialized('delivery') && null !== $object->getDelivery()) {
                $values_3 = [];
                foreach ($object->getDelivery() as $value_3) {
                    $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
                }
                $data['Delivery'] = $values_3;
            }
            if ($object->isInitialized('generic') && null !== $object->getGeneric()) {
                $values_4 = [];
                foreach ($object->getGeneric() as $value_4) {
                    $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
                }
                $data['Generic'] = $values_4;
            }
            foreach ($object as $key => $value_5) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_5;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['ShipStream\\Ups\\Api\\Model\\SubscriptionEventsSubscriptionFile' => false];
        }
    }
}