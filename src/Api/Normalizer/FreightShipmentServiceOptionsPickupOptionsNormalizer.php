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
    class FreightShipmentServiceOptionsPickupOptionsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\FreightShipmentServiceOptionsPickupOptions';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\FreightShipmentServiceOptionsPickupOptions';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \ShipStream\Ups\Api\Model\FreightShipmentServiceOptionsPickupOptions();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('HolidayPickupIndicator', $data)) {
                $object->setHolidayPickupIndicator($data['HolidayPickupIndicator']);
                unset($data['HolidayPickupIndicator']);
            }
            if (\array_key_exists('InsidePickupIndicator', $data)) {
                $object->setInsidePickupIndicator($data['InsidePickupIndicator']);
                unset($data['InsidePickupIndicator']);
            }
            if (\array_key_exists('ResidentialPickupIndicator', $data)) {
                $object->setResidentialPickupIndicator($data['ResidentialPickupIndicator']);
                unset($data['ResidentialPickupIndicator']);
            }
            if (\array_key_exists('WeekendPickupIndicator', $data)) {
                $object->setWeekendPickupIndicator($data['WeekendPickupIndicator']);
                unset($data['WeekendPickupIndicator']);
            }
            if (\array_key_exists('LiftGateRequiredIndicator', $data)) {
                $object->setLiftGateRequiredIndicator($data['LiftGateRequiredIndicator']);
                unset($data['LiftGateRequiredIndicator']);
            }
            if (\array_key_exists('LimitedAccessPickupIndicator', $data)) {
                $object->setLimitedAccessPickupIndicator($data['LimitedAccessPickupIndicator']);
                unset($data['LimitedAccessPickupIndicator']);
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
            if ($object->isInitialized('holidayPickupIndicator') && null !== $object->getHolidayPickupIndicator()) {
                $data['HolidayPickupIndicator'] = $object->getHolidayPickupIndicator();
            }
            if ($object->isInitialized('insidePickupIndicator') && null !== $object->getInsidePickupIndicator()) {
                $data['InsidePickupIndicator'] = $object->getInsidePickupIndicator();
            }
            if ($object->isInitialized('residentialPickupIndicator') && null !== $object->getResidentialPickupIndicator()) {
                $data['ResidentialPickupIndicator'] = $object->getResidentialPickupIndicator();
            }
            if ($object->isInitialized('weekendPickupIndicator') && null !== $object->getWeekendPickupIndicator()) {
                $data['WeekendPickupIndicator'] = $object->getWeekendPickupIndicator();
            }
            if ($object->isInitialized('liftGateRequiredIndicator') && null !== $object->getLiftGateRequiredIndicator()) {
                $data['LiftGateRequiredIndicator'] = $object->getLiftGateRequiredIndicator();
            }
            if ($object->isInitialized('limitedAccessPickupIndicator') && null !== $object->getLimitedAccessPickupIndicator()) {
                $data['LimitedAccessPickupIndicator'] = $object->getLimitedAccessPickupIndicator();
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
            return ['ShipStream\\Ups\\Api\\Model\\FreightShipmentServiceOptionsPickupOptions' => false];
        }
    }
} else {
    class FreightShipmentServiceOptionsPickupOptionsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\FreightShipmentServiceOptionsPickupOptions';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\FreightShipmentServiceOptionsPickupOptions';
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
            $object = new \ShipStream\Ups\Api\Model\FreightShipmentServiceOptionsPickupOptions();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('HolidayPickupIndicator', $data)) {
                $object->setHolidayPickupIndicator($data['HolidayPickupIndicator']);
                unset($data['HolidayPickupIndicator']);
            }
            if (\array_key_exists('InsidePickupIndicator', $data)) {
                $object->setInsidePickupIndicator($data['InsidePickupIndicator']);
                unset($data['InsidePickupIndicator']);
            }
            if (\array_key_exists('ResidentialPickupIndicator', $data)) {
                $object->setResidentialPickupIndicator($data['ResidentialPickupIndicator']);
                unset($data['ResidentialPickupIndicator']);
            }
            if (\array_key_exists('WeekendPickupIndicator', $data)) {
                $object->setWeekendPickupIndicator($data['WeekendPickupIndicator']);
                unset($data['WeekendPickupIndicator']);
            }
            if (\array_key_exists('LiftGateRequiredIndicator', $data)) {
                $object->setLiftGateRequiredIndicator($data['LiftGateRequiredIndicator']);
                unset($data['LiftGateRequiredIndicator']);
            }
            if (\array_key_exists('LimitedAccessPickupIndicator', $data)) {
                $object->setLimitedAccessPickupIndicator($data['LimitedAccessPickupIndicator']);
                unset($data['LimitedAccessPickupIndicator']);
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
            if ($object->isInitialized('holidayPickupIndicator') && null !== $object->getHolidayPickupIndicator()) {
                $data['HolidayPickupIndicator'] = $object->getHolidayPickupIndicator();
            }
            if ($object->isInitialized('insidePickupIndicator') && null !== $object->getInsidePickupIndicator()) {
                $data['InsidePickupIndicator'] = $object->getInsidePickupIndicator();
            }
            if ($object->isInitialized('residentialPickupIndicator') && null !== $object->getResidentialPickupIndicator()) {
                $data['ResidentialPickupIndicator'] = $object->getResidentialPickupIndicator();
            }
            if ($object->isInitialized('weekendPickupIndicator') && null !== $object->getWeekendPickupIndicator()) {
                $data['WeekendPickupIndicator'] = $object->getWeekendPickupIndicator();
            }
            if ($object->isInitialized('liftGateRequiredIndicator') && null !== $object->getLiftGateRequiredIndicator()) {
                $data['LiftGateRequiredIndicator'] = $object->getLiftGateRequiredIndicator();
            }
            if ($object->isInitialized('limitedAccessPickupIndicator') && null !== $object->getLimitedAccessPickupIndicator()) {
                $data['LimitedAccessPickupIndicator'] = $object->getLimitedAccessPickupIndicator();
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
            return ['ShipStream\\Ups\\Api\\Model\\FreightShipmentServiceOptionsPickupOptions' => false];
        }
    }
}