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
    class PickupCreationRequestShipperNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\PickupCreationRequestShipper';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\PickupCreationRequestShipper';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \ShipStream\Ups\Api\Model\PickupCreationRequestShipper();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Account', $data)) {
                $object->setAccount($this->denormalizer->denormalize($data['Account'], 'ShipStream\\Ups\\Api\\Model\\ShipperAccount', 'json', $context));
                unset($data['Account']);
            }
            if (\array_key_exists('ChargeCard', $data)) {
                $object->setChargeCard($this->denormalizer->denormalize($data['ChargeCard'], 'ShipStream\\Ups\\Api\\Model\\ShipperChargeCard', 'json', $context));
                unset($data['ChargeCard']);
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
            if ($object->isInitialized('account') && null !== $object->getAccount()) {
                $data['Account'] = $this->normalizer->normalize($object->getAccount(), 'json', $context);
            }
            if ($object->isInitialized('chargeCard') && null !== $object->getChargeCard()) {
                $data['ChargeCard'] = $this->normalizer->normalize($object->getChargeCard(), 'json', $context);
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
            return ['ShipStream\\Ups\\Api\\Model\\PickupCreationRequestShipper' => false];
        }
    }
} else {
    class PickupCreationRequestShipperNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\PickupCreationRequestShipper';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\PickupCreationRequestShipper';
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
            $object = new \ShipStream\Ups\Api\Model\PickupCreationRequestShipper();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Account', $data)) {
                $object->setAccount($this->denormalizer->denormalize($data['Account'], 'ShipStream\\Ups\\Api\\Model\\ShipperAccount', 'json', $context));
                unset($data['Account']);
            }
            if (\array_key_exists('ChargeCard', $data)) {
                $object->setChargeCard($this->denormalizer->denormalize($data['ChargeCard'], 'ShipStream\\Ups\\Api\\Model\\ShipperChargeCard', 'json', $context));
                unset($data['ChargeCard']);
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
            if ($object->isInitialized('account') && null !== $object->getAccount()) {
                $data['Account'] = $this->normalizer->normalize($object->getAccount(), 'json', $context);
            }
            if ($object->isInitialized('chargeCard') && null !== $object->getChargeCard()) {
                $data['ChargeCard'] = $this->normalizer->normalize($object->getChargeCard(), 'json', $context);
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
            return ['ShipStream\\Ups\\Api\\Model\\PickupCreationRequestShipper' => false];
        }
    }
}