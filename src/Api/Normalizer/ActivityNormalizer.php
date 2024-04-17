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
    class ActivityNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\Activity';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\Activity';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \ShipStream\Ups\Api\Model\Activity();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('date', $data)) {
                $object->setDate($data['date']);
                unset($data['date']);
            }
            if (\array_key_exists('gmtDate', $data)) {
                $object->setGmtDate($data['gmtDate']);
                unset($data['gmtDate']);
            }
            if (\array_key_exists('gmtOffset', $data)) {
                $object->setGmtOffset($data['gmtOffset']);
                unset($data['gmtOffset']);
            }
            if (\array_key_exists('gmtTime', $data)) {
                $object->setGmtTime($data['gmtTime']);
                unset($data['gmtTime']);
            }
            if (\array_key_exists('location', $data)) {
                $object->setLocation($this->denormalizer->denormalize($data['location'], 'ShipStream\\Ups\\Api\\Model\\Location', 'json', $context));
                unset($data['location']);
            }
            if (\array_key_exists('status', $data)) {
                $object->setStatus($this->denormalizer->denormalize($data['status'], 'ShipStream\\Ups\\Api\\Model\\Status', 'json', $context));
                unset($data['status']);
            }
            if (\array_key_exists('time', $data)) {
                $object->setTime($data['time']);
                unset($data['time']);
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
            if ($object->isInitialized('date') && null !== $object->getDate()) {
                $data['date'] = $object->getDate();
            }
            if ($object->isInitialized('gmtDate') && null !== $object->getGmtDate()) {
                $data['gmtDate'] = $object->getGmtDate();
            }
            if ($object->isInitialized('gmtOffset') && null !== $object->getGmtOffset()) {
                $data['gmtOffset'] = $object->getGmtOffset();
            }
            if ($object->isInitialized('gmtTime') && null !== $object->getGmtTime()) {
                $data['gmtTime'] = $object->getGmtTime();
            }
            if ($object->isInitialized('location') && null !== $object->getLocation()) {
                $data['location'] = $this->normalizer->normalize($object->getLocation(), 'json', $context);
            }
            if ($object->isInitialized('status') && null !== $object->getStatus()) {
                $data['status'] = $this->normalizer->normalize($object->getStatus(), 'json', $context);
            }
            if ($object->isInitialized('time') && null !== $object->getTime()) {
                $data['time'] = $object->getTime();
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
            return ['ShipStream\\Ups\\Api\\Model\\Activity' => false];
        }
    }
} else {
    class ActivityNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\Activity';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\Activity';
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
            $object = new \ShipStream\Ups\Api\Model\Activity();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('date', $data)) {
                $object->setDate($data['date']);
                unset($data['date']);
            }
            if (\array_key_exists('gmtDate', $data)) {
                $object->setGmtDate($data['gmtDate']);
                unset($data['gmtDate']);
            }
            if (\array_key_exists('gmtOffset', $data)) {
                $object->setGmtOffset($data['gmtOffset']);
                unset($data['gmtOffset']);
            }
            if (\array_key_exists('gmtTime', $data)) {
                $object->setGmtTime($data['gmtTime']);
                unset($data['gmtTime']);
            }
            if (\array_key_exists('location', $data)) {
                $object->setLocation($this->denormalizer->denormalize($data['location'], 'ShipStream\\Ups\\Api\\Model\\Location', 'json', $context));
                unset($data['location']);
            }
            if (\array_key_exists('status', $data)) {
                $object->setStatus($this->denormalizer->denormalize($data['status'], 'ShipStream\\Ups\\Api\\Model\\Status', 'json', $context));
                unset($data['status']);
            }
            if (\array_key_exists('time', $data)) {
                $object->setTime($data['time']);
                unset($data['time']);
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
            if ($object->isInitialized('date') && null !== $object->getDate()) {
                $data['date'] = $object->getDate();
            }
            if ($object->isInitialized('gmtDate') && null !== $object->getGmtDate()) {
                $data['gmtDate'] = $object->getGmtDate();
            }
            if ($object->isInitialized('gmtOffset') && null !== $object->getGmtOffset()) {
                $data['gmtOffset'] = $object->getGmtOffset();
            }
            if ($object->isInitialized('gmtTime') && null !== $object->getGmtTime()) {
                $data['gmtTime'] = $object->getGmtTime();
            }
            if ($object->isInitialized('location') && null !== $object->getLocation()) {
                $data['location'] = $this->normalizer->normalize($object->getLocation(), 'json', $context);
            }
            if ($object->isInitialized('status') && null !== $object->getStatus()) {
                $data['status'] = $this->normalizer->normalize($object->getStatus(), 'json', $context);
            }
            if ($object->isInitialized('time') && null !== $object->getTime()) {
                $data['time'] = $object->getTime();
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
            return ['ShipStream\\Ups\\Api\\Model\\Activity' => false];
        }
    }
}