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
    class ShipmentPickupRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\ShipmentPickupRequest';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\ShipmentPickupRequest';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \ShipStream\Ups\Api\Model\ShipmentPickupRequest();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('AdditionalComments', $data)) {
                $object->setAdditionalComments($data['AdditionalComments']);
                unset($data['AdditionalComments']);
            }
            if (\array_key_exists('Requester', $data)) {
                $object->setRequester($this->denormalizer->denormalize($data['Requester'], 'ShipStream\\Ups\\Api\\Model\\PickupRequestRequester', 'json', $context));
                unset($data['Requester']);
            }
            if (\array_key_exists('PickupDate', $data)) {
                $object->setPickupDate($data['PickupDate']);
                unset($data['PickupDate']);
            }
            if (\array_key_exists('EarliestTimeReady', $data)) {
                $object->setEarliestTimeReady($data['EarliestTimeReady']);
                unset($data['EarliestTimeReady']);
            }
            if (\array_key_exists('LatestTimeReady', $data)) {
                $object->setLatestTimeReady($data['LatestTimeReady']);
                unset($data['LatestTimeReady']);
            }
            if (\array_key_exists('POM', $data)) {
                $object->setPOM($this->denormalizer->denormalize($data['POM'], 'ShipStream\\Ups\\Api\\Model\\PickupRequestPOM', 'json', $context));
                unset($data['POM']);
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
            if ($object->isInitialized('additionalComments') && null !== $object->getAdditionalComments()) {
                $data['AdditionalComments'] = $object->getAdditionalComments();
            }
            if ($object->isInitialized('requester') && null !== $object->getRequester()) {
                $data['Requester'] = $this->normalizer->normalize($object->getRequester(), 'json', $context);
            }
            $data['PickupDate'] = $object->getPickupDate();
            if ($object->isInitialized('earliestTimeReady') && null !== $object->getEarliestTimeReady()) {
                $data['EarliestTimeReady'] = $object->getEarliestTimeReady();
            }
            $data['LatestTimeReady'] = $object->getLatestTimeReady();
            if ($object->isInitialized('pOM') && null !== $object->getPOM()) {
                $data['POM'] = $this->normalizer->normalize($object->getPOM(), 'json', $context);
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
            return ['ShipStream\\Ups\\Api\\Model\\ShipmentPickupRequest' => false];
        }
    }
} else {
    class ShipmentPickupRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\ShipmentPickupRequest';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\ShipmentPickupRequest';
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
            $object = new \ShipStream\Ups\Api\Model\ShipmentPickupRequest();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('AdditionalComments', $data)) {
                $object->setAdditionalComments($data['AdditionalComments']);
                unset($data['AdditionalComments']);
            }
            if (\array_key_exists('Requester', $data)) {
                $object->setRequester($this->denormalizer->denormalize($data['Requester'], 'ShipStream\\Ups\\Api\\Model\\PickupRequestRequester', 'json', $context));
                unset($data['Requester']);
            }
            if (\array_key_exists('PickupDate', $data)) {
                $object->setPickupDate($data['PickupDate']);
                unset($data['PickupDate']);
            }
            if (\array_key_exists('EarliestTimeReady', $data)) {
                $object->setEarliestTimeReady($data['EarliestTimeReady']);
                unset($data['EarliestTimeReady']);
            }
            if (\array_key_exists('LatestTimeReady', $data)) {
                $object->setLatestTimeReady($data['LatestTimeReady']);
                unset($data['LatestTimeReady']);
            }
            if (\array_key_exists('POM', $data)) {
                $object->setPOM($this->denormalizer->denormalize($data['POM'], 'ShipStream\\Ups\\Api\\Model\\PickupRequestPOM', 'json', $context));
                unset($data['POM']);
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
            if ($object->isInitialized('additionalComments') && null !== $object->getAdditionalComments()) {
                $data['AdditionalComments'] = $object->getAdditionalComments();
            }
            if ($object->isInitialized('requester') && null !== $object->getRequester()) {
                $data['Requester'] = $this->normalizer->normalize($object->getRequester(), 'json', $context);
            }
            $data['PickupDate'] = $object->getPickupDate();
            if ($object->isInitialized('earliestTimeReady') && null !== $object->getEarliestTimeReady()) {
                $data['EarliestTimeReady'] = $object->getEarliestTimeReady();
            }
            $data['LatestTimeReady'] = $object->getLatestTimeReady();
            if ($object->isInitialized('pOM') && null !== $object->getPOM()) {
                $data['POM'] = $this->normalizer->normalize($object->getPOM(), 'json', $context);
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
            return ['ShipStream\\Ups\\Api\\Model\\ShipmentPickupRequest' => false];
        }
    }
}