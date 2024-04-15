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
    class PrivateNetworkListPrivateNetworkNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\PrivateNetworkListPrivateNetwork';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\PrivateNetworkListPrivateNetwork';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \ShipStream\Ups\Api\Model\PrivateNetworkListPrivateNetwork();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('NetworkID', $data) && $data['NetworkID'] !== null) {
                $object->setNetworkID($data['NetworkID']);
                unset($data['NetworkID']);
            }
            elseif (\array_key_exists('NetworkID', $data) && $data['NetworkID'] === null) {
                $object->setNetworkID(null);
            }
            if (\array_key_exists('NetworkDescription', $data) && $data['NetworkDescription'] !== null) {
                $object->setNetworkDescription($data['NetworkDescription']);
                unset($data['NetworkDescription']);
            }
            elseif (\array_key_exists('NetworkDescription', $data) && $data['NetworkDescription'] === null) {
                $object->setNetworkDescription(null);
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
            $data['NetworkID'] = $object->getNetworkID();
            $data['NetworkDescription'] = $object->getNetworkDescription();
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['ShipStream\\Ups\\Api\\Model\\PrivateNetworkListPrivateNetwork' => false];
        }
    }
} else {
    class PrivateNetworkListPrivateNetworkNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\PrivateNetworkListPrivateNetwork';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\PrivateNetworkListPrivateNetwork';
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
            $object = new \ShipStream\Ups\Api\Model\PrivateNetworkListPrivateNetwork();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('NetworkID', $data) && $data['NetworkID'] !== null) {
                $object->setNetworkID($data['NetworkID']);
                unset($data['NetworkID']);
            }
            elseif (\array_key_exists('NetworkID', $data) && $data['NetworkID'] === null) {
                $object->setNetworkID(null);
            }
            if (\array_key_exists('NetworkDescription', $data) && $data['NetworkDescription'] !== null) {
                $object->setNetworkDescription($data['NetworkDescription']);
                unset($data['NetworkDescription']);
            }
            elseif (\array_key_exists('NetworkDescription', $data) && $data['NetworkDescription'] === null) {
                $object->setNetworkDescription(null);
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
            $data['NetworkID'] = $object->getNetworkID();
            $data['NetworkDescription'] = $object->getNetworkDescription();
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['ShipStream\\Ups\\Api\\Model\\PrivateNetworkListPrivateNetwork' => false];
        }
    }
}