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
    class ServiceSummaryEstimatedArrivalNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\ServiceSummaryEstimatedArrival';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\ServiceSummaryEstimatedArrival';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \ShipStream\Ups\Api\Model\ServiceSummaryEstimatedArrival();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Arrival', $data) && $data['Arrival'] !== null) {
                $object->setArrival($this->denormalizer->denormalize($data['Arrival'], 'ShipStream\\Ups\\Api\\Model\\EstimatedArrivalArrival', 'json', $context));
                unset($data['Arrival']);
            }
            elseif (\array_key_exists('Arrival', $data) && $data['Arrival'] === null) {
                $object->setArrival(null);
            }
            if (\array_key_exists('BusinessDaysInTransit', $data) && $data['BusinessDaysInTransit'] !== null) {
                $object->setBusinessDaysInTransit($data['BusinessDaysInTransit']);
                unset($data['BusinessDaysInTransit']);
            }
            elseif (\array_key_exists('BusinessDaysInTransit', $data) && $data['BusinessDaysInTransit'] === null) {
                $object->setBusinessDaysInTransit(null);
            }
            if (\array_key_exists('Pickup', $data) && $data['Pickup'] !== null) {
                $object->setPickup($this->denormalizer->denormalize($data['Pickup'], 'ShipStream\\Ups\\Api\\Model\\EstimatedArrivalPickup', 'json', $context));
                unset($data['Pickup']);
            }
            elseif (\array_key_exists('Pickup', $data) && $data['Pickup'] === null) {
                $object->setPickup(null);
            }
            if (\array_key_exists('DayOfWeek', $data) && $data['DayOfWeek'] !== null) {
                $object->setDayOfWeek($data['DayOfWeek']);
                unset($data['DayOfWeek']);
            }
            elseif (\array_key_exists('DayOfWeek', $data) && $data['DayOfWeek'] === null) {
                $object->setDayOfWeek(null);
            }
            if (\array_key_exists('CustomerCenterCutoff', $data) && $data['CustomerCenterCutoff'] !== null) {
                $object->setCustomerCenterCutoff($data['CustomerCenterCutoff']);
                unset($data['CustomerCenterCutoff']);
            }
            elseif (\array_key_exists('CustomerCenterCutoff', $data) && $data['CustomerCenterCutoff'] === null) {
                $object->setCustomerCenterCutoff(null);
            }
            if (\array_key_exists('DelayCount', $data) && $data['DelayCount'] !== null) {
                $object->setDelayCount($data['DelayCount']);
                unset($data['DelayCount']);
            }
            elseif (\array_key_exists('DelayCount', $data) && $data['DelayCount'] === null) {
                $object->setDelayCount(null);
            }
            if (\array_key_exists('HolidayCount', $data) && $data['HolidayCount'] !== null) {
                $object->setHolidayCount($data['HolidayCount']);
                unset($data['HolidayCount']);
            }
            elseif (\array_key_exists('HolidayCount', $data) && $data['HolidayCount'] === null) {
                $object->setHolidayCount(null);
            }
            if (\array_key_exists('RestDays', $data) && $data['RestDays'] !== null) {
                $object->setRestDays($data['RestDays']);
                unset($data['RestDays']);
            }
            elseif (\array_key_exists('RestDays', $data) && $data['RestDays'] === null) {
                $object->setRestDays(null);
            }
            if (\array_key_exists('TotalTransitDays', $data) && $data['TotalTransitDays'] !== null) {
                $object->setTotalTransitDays($data['TotalTransitDays']);
                unset($data['TotalTransitDays']);
            }
            elseif (\array_key_exists('TotalTransitDays', $data) && $data['TotalTransitDays'] === null) {
                $object->setTotalTransitDays(null);
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
            $data['Arrival'] = $this->normalizer->normalize($object->getArrival(), 'json', $context);
            $data['BusinessDaysInTransit'] = $object->getBusinessDaysInTransit();
            $data['Pickup'] = $this->normalizer->normalize($object->getPickup(), 'json', $context);
            $data['DayOfWeek'] = $object->getDayOfWeek();
            if ($object->isInitialized('customerCenterCutoff') && null !== $object->getCustomerCenterCutoff()) {
                $data['CustomerCenterCutoff'] = $object->getCustomerCenterCutoff();
            }
            if ($object->isInitialized('delayCount') && null !== $object->getDelayCount()) {
                $data['DelayCount'] = $object->getDelayCount();
            }
            if ($object->isInitialized('holidayCount') && null !== $object->getHolidayCount()) {
                $data['HolidayCount'] = $object->getHolidayCount();
            }
            if ($object->isInitialized('restDays') && null !== $object->getRestDays()) {
                $data['RestDays'] = $object->getRestDays();
            }
            if ($object->isInitialized('totalTransitDays') && null !== $object->getTotalTransitDays()) {
                $data['TotalTransitDays'] = $object->getTotalTransitDays();
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
            return ['ShipStream\\Ups\\Api\\Model\\ServiceSummaryEstimatedArrival' => false];
        }
    }
} else {
    class ServiceSummaryEstimatedArrivalNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\ServiceSummaryEstimatedArrival';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\ServiceSummaryEstimatedArrival';
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
            $object = new \ShipStream\Ups\Api\Model\ServiceSummaryEstimatedArrival();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Arrival', $data) && $data['Arrival'] !== null) {
                $object->setArrival($this->denormalizer->denormalize($data['Arrival'], 'ShipStream\\Ups\\Api\\Model\\EstimatedArrivalArrival', 'json', $context));
                unset($data['Arrival']);
            }
            elseif (\array_key_exists('Arrival', $data) && $data['Arrival'] === null) {
                $object->setArrival(null);
            }
            if (\array_key_exists('BusinessDaysInTransit', $data) && $data['BusinessDaysInTransit'] !== null) {
                $object->setBusinessDaysInTransit($data['BusinessDaysInTransit']);
                unset($data['BusinessDaysInTransit']);
            }
            elseif (\array_key_exists('BusinessDaysInTransit', $data) && $data['BusinessDaysInTransit'] === null) {
                $object->setBusinessDaysInTransit(null);
            }
            if (\array_key_exists('Pickup', $data) && $data['Pickup'] !== null) {
                $object->setPickup($this->denormalizer->denormalize($data['Pickup'], 'ShipStream\\Ups\\Api\\Model\\EstimatedArrivalPickup', 'json', $context));
                unset($data['Pickup']);
            }
            elseif (\array_key_exists('Pickup', $data) && $data['Pickup'] === null) {
                $object->setPickup(null);
            }
            if (\array_key_exists('DayOfWeek', $data) && $data['DayOfWeek'] !== null) {
                $object->setDayOfWeek($data['DayOfWeek']);
                unset($data['DayOfWeek']);
            }
            elseif (\array_key_exists('DayOfWeek', $data) && $data['DayOfWeek'] === null) {
                $object->setDayOfWeek(null);
            }
            if (\array_key_exists('CustomerCenterCutoff', $data) && $data['CustomerCenterCutoff'] !== null) {
                $object->setCustomerCenterCutoff($data['CustomerCenterCutoff']);
                unset($data['CustomerCenterCutoff']);
            }
            elseif (\array_key_exists('CustomerCenterCutoff', $data) && $data['CustomerCenterCutoff'] === null) {
                $object->setCustomerCenterCutoff(null);
            }
            if (\array_key_exists('DelayCount', $data) && $data['DelayCount'] !== null) {
                $object->setDelayCount($data['DelayCount']);
                unset($data['DelayCount']);
            }
            elseif (\array_key_exists('DelayCount', $data) && $data['DelayCount'] === null) {
                $object->setDelayCount(null);
            }
            if (\array_key_exists('HolidayCount', $data) && $data['HolidayCount'] !== null) {
                $object->setHolidayCount($data['HolidayCount']);
                unset($data['HolidayCount']);
            }
            elseif (\array_key_exists('HolidayCount', $data) && $data['HolidayCount'] === null) {
                $object->setHolidayCount(null);
            }
            if (\array_key_exists('RestDays', $data) && $data['RestDays'] !== null) {
                $object->setRestDays($data['RestDays']);
                unset($data['RestDays']);
            }
            elseif (\array_key_exists('RestDays', $data) && $data['RestDays'] === null) {
                $object->setRestDays(null);
            }
            if (\array_key_exists('TotalTransitDays', $data) && $data['TotalTransitDays'] !== null) {
                $object->setTotalTransitDays($data['TotalTransitDays']);
                unset($data['TotalTransitDays']);
            }
            elseif (\array_key_exists('TotalTransitDays', $data) && $data['TotalTransitDays'] === null) {
                $object->setTotalTransitDays(null);
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
            $data['Arrival'] = $this->normalizer->normalize($object->getArrival(), 'json', $context);
            $data['BusinessDaysInTransit'] = $object->getBusinessDaysInTransit();
            $data['Pickup'] = $this->normalizer->normalize($object->getPickup(), 'json', $context);
            $data['DayOfWeek'] = $object->getDayOfWeek();
            if ($object->isInitialized('customerCenterCutoff') && null !== $object->getCustomerCenterCutoff()) {
                $data['CustomerCenterCutoff'] = $object->getCustomerCenterCutoff();
            }
            if ($object->isInitialized('delayCount') && null !== $object->getDelayCount()) {
                $data['DelayCount'] = $object->getDelayCount();
            }
            if ($object->isInitialized('holidayCount') && null !== $object->getHolidayCount()) {
                $data['HolidayCount'] = $object->getHolidayCount();
            }
            if ($object->isInitialized('restDays') && null !== $object->getRestDays()) {
                $data['RestDays'] = $object->getRestDays();
            }
            if ($object->isInitialized('totalTransitDays') && null !== $object->getTotalTransitDays()) {
                $data['TotalTransitDays'] = $object->getTotalTransitDays();
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
            return ['ShipStream\\Ups\\Api\\Model\\ServiceSummaryEstimatedArrival' => false];
        }
    }
}