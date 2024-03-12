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
    class FreightShipmentServiceOptionsDeliveryOptionsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\FreightShipmentServiceOptionsDeliveryOptions';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\FreightShipmentServiceOptionsDeliveryOptions';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \ShipStream\Ups\Api\Model\FreightShipmentServiceOptionsDeliveryOptions();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('CallBeforeDeliveryIndicator', $data)) {
                $object->setCallBeforeDeliveryIndicator($data['CallBeforeDeliveryIndicator']);
                unset($data['CallBeforeDeliveryIndicator']);
            }
            if (\array_key_exists('HolidayDeliveryIndicator', $data)) {
                $object->setHolidayDeliveryIndicator($data['HolidayDeliveryIndicator']);
                unset($data['HolidayDeliveryIndicator']);
            }
            if (\array_key_exists('InsideDeliveryIndicator', $data)) {
                $object->setInsideDeliveryIndicator($data['InsideDeliveryIndicator']);
                unset($data['InsideDeliveryIndicator']);
            }
            if (\array_key_exists('ResidentialDeliveryIndicator', $data)) {
                $object->setResidentialDeliveryIndicator($data['ResidentialDeliveryIndicator']);
                unset($data['ResidentialDeliveryIndicator']);
            }
            if (\array_key_exists('WeekendDeliveryIndicator', $data)) {
                $object->setWeekendDeliveryIndicator($data['WeekendDeliveryIndicator']);
                unset($data['WeekendDeliveryIndicator']);
            }
            if (\array_key_exists('LiftGateRequiredIndicator', $data)) {
                $object->setLiftGateRequiredIndicator($data['LiftGateRequiredIndicator']);
                unset($data['LiftGateRequiredIndicator']);
            }
            if (\array_key_exists('LimitedAccessDeliveryIndicator', $data)) {
                $object->setLimitedAccessDeliveryIndicator($data['LimitedAccessDeliveryIndicator']);
                unset($data['LimitedAccessDeliveryIndicator']);
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
            if ($object->isInitialized('callBeforeDeliveryIndicator') && null !== $object->getCallBeforeDeliveryIndicator()) {
                $data['CallBeforeDeliveryIndicator'] = $object->getCallBeforeDeliveryIndicator();
            }
            if ($object->isInitialized('holidayDeliveryIndicator') && null !== $object->getHolidayDeliveryIndicator()) {
                $data['HolidayDeliveryIndicator'] = $object->getHolidayDeliveryIndicator();
            }
            if ($object->isInitialized('insideDeliveryIndicator') && null !== $object->getInsideDeliveryIndicator()) {
                $data['InsideDeliveryIndicator'] = $object->getInsideDeliveryIndicator();
            }
            if ($object->isInitialized('residentialDeliveryIndicator') && null !== $object->getResidentialDeliveryIndicator()) {
                $data['ResidentialDeliveryIndicator'] = $object->getResidentialDeliveryIndicator();
            }
            if ($object->isInitialized('weekendDeliveryIndicator') && null !== $object->getWeekendDeliveryIndicator()) {
                $data['WeekendDeliveryIndicator'] = $object->getWeekendDeliveryIndicator();
            }
            if ($object->isInitialized('liftGateRequiredIndicator') && null !== $object->getLiftGateRequiredIndicator()) {
                $data['LiftGateRequiredIndicator'] = $object->getLiftGateRequiredIndicator();
            }
            if ($object->isInitialized('limitedAccessDeliveryIndicator') && null !== $object->getLimitedAccessDeliveryIndicator()) {
                $data['LimitedAccessDeliveryIndicator'] = $object->getLimitedAccessDeliveryIndicator();
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
            return ['ShipStream\\Ups\\Api\\Model\\FreightShipmentServiceOptionsDeliveryOptions' => false];
        }
    }
} else {
    class FreightShipmentServiceOptionsDeliveryOptionsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\FreightShipmentServiceOptionsDeliveryOptions';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\FreightShipmentServiceOptionsDeliveryOptions';
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
            $object = new \ShipStream\Ups\Api\Model\FreightShipmentServiceOptionsDeliveryOptions();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('CallBeforeDeliveryIndicator', $data)) {
                $object->setCallBeforeDeliveryIndicator($data['CallBeforeDeliveryIndicator']);
                unset($data['CallBeforeDeliveryIndicator']);
            }
            if (\array_key_exists('HolidayDeliveryIndicator', $data)) {
                $object->setHolidayDeliveryIndicator($data['HolidayDeliveryIndicator']);
                unset($data['HolidayDeliveryIndicator']);
            }
            if (\array_key_exists('InsideDeliveryIndicator', $data)) {
                $object->setInsideDeliveryIndicator($data['InsideDeliveryIndicator']);
                unset($data['InsideDeliveryIndicator']);
            }
            if (\array_key_exists('ResidentialDeliveryIndicator', $data)) {
                $object->setResidentialDeliveryIndicator($data['ResidentialDeliveryIndicator']);
                unset($data['ResidentialDeliveryIndicator']);
            }
            if (\array_key_exists('WeekendDeliveryIndicator', $data)) {
                $object->setWeekendDeliveryIndicator($data['WeekendDeliveryIndicator']);
                unset($data['WeekendDeliveryIndicator']);
            }
            if (\array_key_exists('LiftGateRequiredIndicator', $data)) {
                $object->setLiftGateRequiredIndicator($data['LiftGateRequiredIndicator']);
                unset($data['LiftGateRequiredIndicator']);
            }
            if (\array_key_exists('LimitedAccessDeliveryIndicator', $data)) {
                $object->setLimitedAccessDeliveryIndicator($data['LimitedAccessDeliveryIndicator']);
                unset($data['LimitedAccessDeliveryIndicator']);
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
            if ($object->isInitialized('callBeforeDeliveryIndicator') && null !== $object->getCallBeforeDeliveryIndicator()) {
                $data['CallBeforeDeliveryIndicator'] = $object->getCallBeforeDeliveryIndicator();
            }
            if ($object->isInitialized('holidayDeliveryIndicator') && null !== $object->getHolidayDeliveryIndicator()) {
                $data['HolidayDeliveryIndicator'] = $object->getHolidayDeliveryIndicator();
            }
            if ($object->isInitialized('insideDeliveryIndicator') && null !== $object->getInsideDeliveryIndicator()) {
                $data['InsideDeliveryIndicator'] = $object->getInsideDeliveryIndicator();
            }
            if ($object->isInitialized('residentialDeliveryIndicator') && null !== $object->getResidentialDeliveryIndicator()) {
                $data['ResidentialDeliveryIndicator'] = $object->getResidentialDeliveryIndicator();
            }
            if ($object->isInitialized('weekendDeliveryIndicator') && null !== $object->getWeekendDeliveryIndicator()) {
                $data['WeekendDeliveryIndicator'] = $object->getWeekendDeliveryIndicator();
            }
            if ($object->isInitialized('liftGateRequiredIndicator') && null !== $object->getLiftGateRequiredIndicator()) {
                $data['LiftGateRequiredIndicator'] = $object->getLiftGateRequiredIndicator();
            }
            if ($object->isInitialized('limitedAccessDeliveryIndicator') && null !== $object->getLimitedAccessDeliveryIndicator()) {
                $data['LimitedAccessDeliveryIndicator'] = $object->getLimitedAccessDeliveryIndicator();
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
            return ['ShipStream\\Ups\\Api\\Model\\FreightShipmentServiceOptionsDeliveryOptions' => false];
        }
    }
}