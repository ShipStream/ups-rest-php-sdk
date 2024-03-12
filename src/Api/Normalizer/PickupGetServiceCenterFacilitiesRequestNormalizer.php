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
    class PickupGetServiceCenterFacilitiesRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\PickupGetServiceCenterFacilitiesRequest';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\PickupGetServiceCenterFacilitiesRequest';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \ShipStream\Ups\Api\Model\PickupGetServiceCenterFacilitiesRequest();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Request', $data)) {
                $object->setRequest($this->denormalizer->denormalize($data['Request'], 'ShipStream\\Ups\\Api\\Model\\PickupGetServiceCenterFacilitiesRequestRequest', 'json', $context));
                unset($data['Request']);
            }
            if (\array_key_exists('PickupPiece', $data)) {
                $values = [];
                foreach ($data['PickupPiece'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'ShipStream\\Ups\\Api\\Model\\PickupGetServiceCenterFacilitiesRequestPickupPiece', 'json', $context);
                }
                $object->setPickupPiece($values);
                unset($data['PickupPiece']);
            }
            if (\array_key_exists('OriginAddress', $data)) {
                $object->setOriginAddress($this->denormalizer->denormalize($data['OriginAddress'], 'ShipStream\\Ups\\Api\\Model\\PickupGetServiceCenterFacilitiesRequestOriginAddress', 'json', $context));
                unset($data['OriginAddress']);
            }
            if (\array_key_exists('DestinationAddress', $data)) {
                $object->setDestinationAddress($this->denormalizer->denormalize($data['DestinationAddress'], 'ShipStream\\Ups\\Api\\Model\\PickupGetServiceCenterFacilitiesRequestDestinationAddress', 'json', $context));
                unset($data['DestinationAddress']);
            }
            if (\array_key_exists('Locale', $data)) {
                $object->setLocale($data['Locale']);
                unset($data['Locale']);
            }
            if (\array_key_exists('ProximitySearchIndicator', $data)) {
                $object->setProximitySearchIndicator($data['ProximitySearchIndicator']);
                unset($data['ProximitySearchIndicator']);
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
            $data['Request'] = $this->normalizer->normalize($object->getRequest(), 'json', $context);
            $values = [];
            foreach ($object->getPickupPiece() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['PickupPiece'] = $values;
            if ($object->isInitialized('originAddress') && null !== $object->getOriginAddress()) {
                $data['OriginAddress'] = $this->normalizer->normalize($object->getOriginAddress(), 'json', $context);
            }
            if ($object->isInitialized('destinationAddress') && null !== $object->getDestinationAddress()) {
                $data['DestinationAddress'] = $this->normalizer->normalize($object->getDestinationAddress(), 'json', $context);
            }
            $data['Locale'] = $object->getLocale();
            if ($object->isInitialized('proximitySearchIndicator') && null !== $object->getProximitySearchIndicator()) {
                $data['ProximitySearchIndicator'] = $object->getProximitySearchIndicator();
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
            return ['ShipStream\\Ups\\Api\\Model\\PickupGetServiceCenterFacilitiesRequest' => false];
        }
    }
} else {
    class PickupGetServiceCenterFacilitiesRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\PickupGetServiceCenterFacilitiesRequest';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\PickupGetServiceCenterFacilitiesRequest';
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
            $object = new \ShipStream\Ups\Api\Model\PickupGetServiceCenterFacilitiesRequest();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Request', $data)) {
                $object->setRequest($this->denormalizer->denormalize($data['Request'], 'ShipStream\\Ups\\Api\\Model\\PickupGetServiceCenterFacilitiesRequestRequest', 'json', $context));
                unset($data['Request']);
            }
            if (\array_key_exists('PickupPiece', $data)) {
                $values = [];
                foreach ($data['PickupPiece'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'ShipStream\\Ups\\Api\\Model\\PickupGetServiceCenterFacilitiesRequestPickupPiece', 'json', $context);
                }
                $object->setPickupPiece($values);
                unset($data['PickupPiece']);
            }
            if (\array_key_exists('OriginAddress', $data)) {
                $object->setOriginAddress($this->denormalizer->denormalize($data['OriginAddress'], 'ShipStream\\Ups\\Api\\Model\\PickupGetServiceCenterFacilitiesRequestOriginAddress', 'json', $context));
                unset($data['OriginAddress']);
            }
            if (\array_key_exists('DestinationAddress', $data)) {
                $object->setDestinationAddress($this->denormalizer->denormalize($data['DestinationAddress'], 'ShipStream\\Ups\\Api\\Model\\PickupGetServiceCenterFacilitiesRequestDestinationAddress', 'json', $context));
                unset($data['DestinationAddress']);
            }
            if (\array_key_exists('Locale', $data)) {
                $object->setLocale($data['Locale']);
                unset($data['Locale']);
            }
            if (\array_key_exists('ProximitySearchIndicator', $data)) {
                $object->setProximitySearchIndicator($data['ProximitySearchIndicator']);
                unset($data['ProximitySearchIndicator']);
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
            $data['Request'] = $this->normalizer->normalize($object->getRequest(), 'json', $context);
            $values = [];
            foreach ($object->getPickupPiece() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['PickupPiece'] = $values;
            if ($object->isInitialized('originAddress') && null !== $object->getOriginAddress()) {
                $data['OriginAddress'] = $this->normalizer->normalize($object->getOriginAddress(), 'json', $context);
            }
            if ($object->isInitialized('destinationAddress') && null !== $object->getDestinationAddress()) {
                $data['DestinationAddress'] = $this->normalizer->normalize($object->getDestinationAddress(), 'json', $context);
            }
            $data['Locale'] = $object->getLocale();
            if ($object->isInitialized('proximitySearchIndicator') && null !== $object->getProximitySearchIndicator()) {
                $data['ProximitySearchIndicator'] = $object->getProximitySearchIndicator();
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
            return ['ShipStream\\Ups\\Api\\Model\\PickupGetServiceCenterFacilitiesRequest' => false];
        }
    }
}