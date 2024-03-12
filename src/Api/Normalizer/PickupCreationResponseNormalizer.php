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
    class PickupCreationResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\PickupCreationResponse';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\PickupCreationResponse';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \ShipStream\Ups\Api\Model\PickupCreationResponse();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Response', $data)) {
                $object->setResponse($this->denormalizer->denormalize($data['Response'], 'ShipStream\\Ups\\Api\\Model\\PickupCreationResponseResponse', 'json', $context));
                unset($data['Response']);
            }
            if (\array_key_exists('PRN', $data)) {
                $object->setPRN($data['PRN']);
                unset($data['PRN']);
            }
            if (\array_key_exists('WeekendServiceTerritory', $data)) {
                $object->setWeekendServiceTerritory($this->denormalizer->denormalize($data['WeekendServiceTerritory'], 'ShipStream\\Ups\\Api\\Model\\PickupCreationResponseWeekendServiceTerritory', 'json', $context));
                unset($data['WeekendServiceTerritory']);
            }
            if (\array_key_exists('WeekendServiceTerritoryIndicator', $data)) {
                $object->setWeekendServiceTerritoryIndicator($data['WeekendServiceTerritoryIndicator']);
                unset($data['WeekendServiceTerritoryIndicator']);
            }
            if (\array_key_exists('RateStatus', $data)) {
                $object->setRateStatus($this->denormalizer->denormalize($data['RateStatus'], 'ShipStream\\Ups\\Api\\Model\\PickupCreationResponseRateStatus', 'json', $context));
                unset($data['RateStatus']);
            }
            if (\array_key_exists('RateResult', $data)) {
                $object->setRateResult($this->denormalizer->denormalize($data['RateResult'], 'ShipStream\\Ups\\Api\\Model\\PickupCreationResponseRateResult', 'json', $context));
                unset($data['RateResult']);
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
            $data['Response'] = $this->normalizer->normalize($object->getResponse(), 'json', $context);
            if ($object->isInitialized('pRN') && null !== $object->getPRN()) {
                $data['PRN'] = $object->getPRN();
            }
            if ($object->isInitialized('weekendServiceTerritory') && null !== $object->getWeekendServiceTerritory()) {
                $data['WeekendServiceTerritory'] = $this->normalizer->normalize($object->getWeekendServiceTerritory(), 'json', $context);
            }
            if ($object->isInitialized('weekendServiceTerritoryIndicator') && null !== $object->getWeekendServiceTerritoryIndicator()) {
                $data['WeekendServiceTerritoryIndicator'] = $object->getWeekendServiceTerritoryIndicator();
            }
            $data['RateStatus'] = $this->normalizer->normalize($object->getRateStatus(), 'json', $context);
            if ($object->isInitialized('rateResult') && null !== $object->getRateResult()) {
                $data['RateResult'] = $this->normalizer->normalize($object->getRateResult(), 'json', $context);
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
            return ['ShipStream\\Ups\\Api\\Model\\PickupCreationResponse' => false];
        }
    }
} else {
    class PickupCreationResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\PickupCreationResponse';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\PickupCreationResponse';
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
            $object = new \ShipStream\Ups\Api\Model\PickupCreationResponse();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Response', $data)) {
                $object->setResponse($this->denormalizer->denormalize($data['Response'], 'ShipStream\\Ups\\Api\\Model\\PickupCreationResponseResponse', 'json', $context));
                unset($data['Response']);
            }
            if (\array_key_exists('PRN', $data)) {
                $object->setPRN($data['PRN']);
                unset($data['PRN']);
            }
            if (\array_key_exists('WeekendServiceTerritory', $data)) {
                $object->setWeekendServiceTerritory($this->denormalizer->denormalize($data['WeekendServiceTerritory'], 'ShipStream\\Ups\\Api\\Model\\PickupCreationResponseWeekendServiceTerritory', 'json', $context));
                unset($data['WeekendServiceTerritory']);
            }
            if (\array_key_exists('WeekendServiceTerritoryIndicator', $data)) {
                $object->setWeekendServiceTerritoryIndicator($data['WeekendServiceTerritoryIndicator']);
                unset($data['WeekendServiceTerritoryIndicator']);
            }
            if (\array_key_exists('RateStatus', $data)) {
                $object->setRateStatus($this->denormalizer->denormalize($data['RateStatus'], 'ShipStream\\Ups\\Api\\Model\\PickupCreationResponseRateStatus', 'json', $context));
                unset($data['RateStatus']);
            }
            if (\array_key_exists('RateResult', $data)) {
                $object->setRateResult($this->denormalizer->denormalize($data['RateResult'], 'ShipStream\\Ups\\Api\\Model\\PickupCreationResponseRateResult', 'json', $context));
                unset($data['RateResult']);
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
            $data['Response'] = $this->normalizer->normalize($object->getResponse(), 'json', $context);
            if ($object->isInitialized('pRN') && null !== $object->getPRN()) {
                $data['PRN'] = $object->getPRN();
            }
            if ($object->isInitialized('weekendServiceTerritory') && null !== $object->getWeekendServiceTerritory()) {
                $data['WeekendServiceTerritory'] = $this->normalizer->normalize($object->getWeekendServiceTerritory(), 'json', $context);
            }
            if ($object->isInitialized('weekendServiceTerritoryIndicator') && null !== $object->getWeekendServiceTerritoryIndicator()) {
                $data['WeekendServiceTerritoryIndicator'] = $object->getWeekendServiceTerritoryIndicator();
            }
            $data['RateStatus'] = $this->normalizer->normalize($object->getRateStatus(), 'json', $context);
            if ($object->isInitialized('rateResult') && null !== $object->getRateResult()) {
                $data['RateResult'] = $this->normalizer->normalize($object->getRateResult(), 'json', $context);
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
            return ['ShipStream\\Ups\\Api\\Model\\PickupCreationResponse' => false];
        }
    }
}