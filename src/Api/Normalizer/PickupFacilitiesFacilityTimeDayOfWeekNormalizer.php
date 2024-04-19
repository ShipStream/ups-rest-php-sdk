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
    class PickupFacilitiesFacilityTimeDayOfWeekNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\PickupFacilitiesFacilityTimeDayOfWeek';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\PickupFacilitiesFacilityTimeDayOfWeek';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \ShipStream\Ups\Api\Model\PickupFacilitiesFacilityTimeDayOfWeek();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Day', $data)) {
                $object->setDay($data['Day']);
                unset($data['Day']);
            }
            if (\array_key_exists('EarliestDropOfforPickup', $data)) {
                $object->setEarliestDropOfforPickup($data['EarliestDropOfforPickup']);
                unset($data['EarliestDropOfforPickup']);
            }
            if (\array_key_exists('LatestDropOfforPickup', $data)) {
                $object->setLatestDropOfforPickup($data['LatestDropOfforPickup']);
                unset($data['LatestDropOfforPickup']);
            }
            if (\array_key_exists('OpenHours', $data)) {
                $object->setOpenHours($data['OpenHours']);
                unset($data['OpenHours']);
            }
            if (\array_key_exists('CloseHours', $data)) {
                $object->setCloseHours($data['CloseHours']);
                unset($data['CloseHours']);
            }
            if (\array_key_exists('PrepTime', $data)) {
                $object->setPrepTime($data['PrepTime']);
                unset($data['PrepTime']);
            }
            if (\array_key_exists('LastDrop', $data)) {
                $object->setLastDrop($data['LastDrop']);
                unset($data['LastDrop']);
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
            $data['Day'] = $object->getDay();
            if ($object->isInitialized('earliestDropOfforPickup') && null !== $object->getEarliestDropOfforPickup()) {
                $data['EarliestDropOfforPickup'] = $object->getEarliestDropOfforPickup();
            }
            if ($object->isInitialized('latestDropOfforPickup') && null !== $object->getLatestDropOfforPickup()) {
                $data['LatestDropOfforPickup'] = $object->getLatestDropOfforPickup();
            }
            $data['OpenHours'] = $object->getOpenHours();
            $data['CloseHours'] = $object->getCloseHours();
            if ($object->isInitialized('prepTime') && null !== $object->getPrepTime()) {
                $data['PrepTime'] = $object->getPrepTime();
            }
            if ($object->isInitialized('lastDrop') && null !== $object->getLastDrop()) {
                $data['LastDrop'] = $object->getLastDrop();
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
            return ['ShipStream\\Ups\\Api\\Model\\PickupFacilitiesFacilityTimeDayOfWeek' => false];
        }
    }
} else {
    class PickupFacilitiesFacilityTimeDayOfWeekNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\PickupFacilitiesFacilityTimeDayOfWeek';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\PickupFacilitiesFacilityTimeDayOfWeek';
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
            $object = new \ShipStream\Ups\Api\Model\PickupFacilitiesFacilityTimeDayOfWeek();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Day', $data)) {
                $object->setDay($data['Day']);
                unset($data['Day']);
            }
            if (\array_key_exists('EarliestDropOfforPickup', $data)) {
                $object->setEarliestDropOfforPickup($data['EarliestDropOfforPickup']);
                unset($data['EarliestDropOfforPickup']);
            }
            if (\array_key_exists('LatestDropOfforPickup', $data)) {
                $object->setLatestDropOfforPickup($data['LatestDropOfforPickup']);
                unset($data['LatestDropOfforPickup']);
            }
            if (\array_key_exists('OpenHours', $data)) {
                $object->setOpenHours($data['OpenHours']);
                unset($data['OpenHours']);
            }
            if (\array_key_exists('CloseHours', $data)) {
                $object->setCloseHours($data['CloseHours']);
                unset($data['CloseHours']);
            }
            if (\array_key_exists('PrepTime', $data)) {
                $object->setPrepTime($data['PrepTime']);
                unset($data['PrepTime']);
            }
            if (\array_key_exists('LastDrop', $data)) {
                $object->setLastDrop($data['LastDrop']);
                unset($data['LastDrop']);
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
            $data['Day'] = $object->getDay();
            if ($object->isInitialized('earliestDropOfforPickup') && null !== $object->getEarliestDropOfforPickup()) {
                $data['EarliestDropOfforPickup'] = $object->getEarliestDropOfforPickup();
            }
            if ($object->isInitialized('latestDropOfforPickup') && null !== $object->getLatestDropOfforPickup()) {
                $data['LatestDropOfforPickup'] = $object->getLatestDropOfforPickup();
            }
            $data['OpenHours'] = $object->getOpenHours();
            $data['CloseHours'] = $object->getCloseHours();
            if ($object->isInitialized('prepTime') && null !== $object->getPrepTime()) {
                $data['PrepTime'] = $object->getPrepTime();
            }
            if ($object->isInitialized('lastDrop') && null !== $object->getLastDrop()) {
                $data['LastDrop'] = $object->getLastDrop();
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
            return ['ShipStream\\Ups\\Api\\Model\\PickupFacilitiesFacilityTimeDayOfWeek' => false];
        }
    }
}