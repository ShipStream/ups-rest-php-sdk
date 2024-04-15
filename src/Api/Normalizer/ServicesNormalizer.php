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
    class ServicesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\Services';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\Services';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \ShipStream\Ups\Api\Model\Services();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('serviceLevel', $data) && $data['serviceLevel'] !== null) {
                $object->setServiceLevel($data['serviceLevel']);
                unset($data['serviceLevel']);
            }
            elseif (\array_key_exists('serviceLevel', $data) && $data['serviceLevel'] === null) {
                $object->setServiceLevel(null);
            }
            if (\array_key_exists('serviceLevelDescription', $data) && $data['serviceLevelDescription'] !== null) {
                $object->setServiceLevelDescription($data['serviceLevelDescription']);
                unset($data['serviceLevelDescription']);
            }
            elseif (\array_key_exists('serviceLevelDescription', $data) && $data['serviceLevelDescription'] === null) {
                $object->setServiceLevelDescription(null);
            }
            if (\array_key_exists('shipDate', $data) && $data['shipDate'] !== null) {
                $object->setShipDate($data['shipDate']);
                unset($data['shipDate']);
            }
            elseif (\array_key_exists('shipDate', $data) && $data['shipDate'] === null) {
                $object->setShipDate(null);
            }
            if (\array_key_exists('deliveryDate', $data) && $data['deliveryDate'] !== null) {
                $object->setDeliveryDate($data['deliveryDate']);
                unset($data['deliveryDate']);
            }
            elseif (\array_key_exists('deliveryDate', $data) && $data['deliveryDate'] === null) {
                $object->setDeliveryDate(null);
            }
            if (\array_key_exists('commitTime', $data) && $data['commitTime'] !== null) {
                $object->setCommitTime($data['commitTime']);
                unset($data['commitTime']);
            }
            elseif (\array_key_exists('commitTime', $data) && $data['commitTime'] === null) {
                $object->setCommitTime(null);
            }
            if (\array_key_exists('deliveryTime', $data) && $data['deliveryTime'] !== null) {
                $object->setDeliveryTime($data['deliveryTime']);
                unset($data['deliveryTime']);
            }
            elseif (\array_key_exists('deliveryTime', $data) && $data['deliveryTime'] === null) {
                $object->setDeliveryTime(null);
            }
            if (\array_key_exists('deliveryDayOfWeek', $data) && $data['deliveryDayOfWeek'] !== null) {
                $object->setDeliveryDayOfWeek($data['deliveryDayOfWeek']);
                unset($data['deliveryDayOfWeek']);
            }
            elseif (\array_key_exists('deliveryDayOfWeek', $data) && $data['deliveryDayOfWeek'] === null) {
                $object->setDeliveryDayOfWeek(null);
            }
            if (\array_key_exists('nextDayPickupIndicator', $data) && $data['nextDayPickupIndicator'] !== null) {
                $object->setNextDayPickupIndicator($data['nextDayPickupIndicator']);
                unset($data['nextDayPickupIndicator']);
            }
            elseif (\array_key_exists('nextDayPickupIndicator', $data) && $data['nextDayPickupIndicator'] === null) {
                $object->setNextDayPickupIndicator(null);
            }
            if (\array_key_exists('saturdayPickupIndicator', $data) && $data['saturdayPickupIndicator'] !== null) {
                $object->setSaturdayPickupIndicator($data['saturdayPickupIndicator']);
                unset($data['saturdayPickupIndicator']);
            }
            elseif (\array_key_exists('saturdayPickupIndicator', $data) && $data['saturdayPickupIndicator'] === null) {
                $object->setSaturdayPickupIndicator(null);
            }
            if (\array_key_exists('saturdayDeliveryDate', $data) && $data['saturdayDeliveryDate'] !== null) {
                $object->setSaturdayDeliveryDate($data['saturdayDeliveryDate']);
                unset($data['saturdayDeliveryDate']);
            }
            elseif (\array_key_exists('saturdayDeliveryDate', $data) && $data['saturdayDeliveryDate'] === null) {
                $object->setSaturdayDeliveryDate(null);
            }
            if (\array_key_exists('saturdayDeliveryTime', $data) && $data['saturdayDeliveryTime'] !== null) {
                $object->setSaturdayDeliveryTime($data['saturdayDeliveryTime']);
                unset($data['saturdayDeliveryTime']);
            }
            elseif (\array_key_exists('saturdayDeliveryTime', $data) && $data['saturdayDeliveryTime'] === null) {
                $object->setSaturdayDeliveryTime(null);
            }
            if (\array_key_exists('serviceRemarksText', $data) && $data['serviceRemarksText'] !== null) {
                $object->setServiceRemarksText($data['serviceRemarksText']);
                unset($data['serviceRemarksText']);
            }
            elseif (\array_key_exists('serviceRemarksText', $data) && $data['serviceRemarksText'] === null) {
                $object->setServiceRemarksText(null);
            }
            if (\array_key_exists('guaranteeIndicator', $data) && $data['guaranteeIndicator'] !== null) {
                $object->setGuaranteeIndicator($data['guaranteeIndicator']);
                unset($data['guaranteeIndicator']);
            }
            elseif (\array_key_exists('guaranteeIndicator', $data) && $data['guaranteeIndicator'] === null) {
                $object->setGuaranteeIndicator(null);
            }
            if (\array_key_exists('totalTransitDays', $data) && $data['totalTransitDays'] !== null) {
                $object->setTotalTransitDays($data['totalTransitDays']);
                unset($data['totalTransitDays']);
            }
            elseif (\array_key_exists('totalTransitDays', $data) && $data['totalTransitDays'] === null) {
                $object->setTotalTransitDays(null);
            }
            if (\array_key_exists('businessTransitDays', $data) && $data['businessTransitDays'] !== null) {
                $object->setBusinessTransitDays($data['businessTransitDays']);
                unset($data['businessTransitDays']);
            }
            elseif (\array_key_exists('businessTransitDays', $data) && $data['businessTransitDays'] === null) {
                $object->setBusinessTransitDays(null);
            }
            if (\array_key_exists('restDaysCount', $data) && $data['restDaysCount'] !== null) {
                $object->setRestDaysCount($data['restDaysCount']);
                unset($data['restDaysCount']);
            }
            elseif (\array_key_exists('restDaysCount', $data) && $data['restDaysCount'] === null) {
                $object->setRestDaysCount(null);
            }
            if (\array_key_exists('holidayCount', $data) && $data['holidayCount'] !== null) {
                $object->setHolidayCount($data['holidayCount']);
                unset($data['holidayCount']);
            }
            elseif (\array_key_exists('holidayCount', $data) && $data['holidayCount'] === null) {
                $object->setHolidayCount(null);
            }
            if (\array_key_exists('delayCount', $data) && $data['delayCount'] !== null) {
                $object->setDelayCount($data['delayCount']);
                unset($data['delayCount']);
            }
            elseif (\array_key_exists('delayCount', $data) && $data['delayCount'] === null) {
                $object->setDelayCount(null);
            }
            if (\array_key_exists('pickupDate', $data) && $data['pickupDate'] !== null) {
                $object->setPickupDate($data['pickupDate']);
                unset($data['pickupDate']);
            }
            elseif (\array_key_exists('pickupDate', $data) && $data['pickupDate'] === null) {
                $object->setPickupDate(null);
            }
            if (\array_key_exists('pickupTime', $data) && $data['pickupTime'] !== null) {
                $object->setPickupTime($data['pickupTime']);
                unset($data['pickupTime']);
            }
            elseif (\array_key_exists('pickupTime', $data) && $data['pickupTime'] === null) {
                $object->setPickupTime(null);
            }
            if (\array_key_exists('cstccutoffTime', $data) && $data['cstccutoffTime'] !== null) {
                $object->setCstccutoffTime($data['cstccutoffTime']);
                unset($data['cstccutoffTime']);
            }
            elseif (\array_key_exists('cstccutoffTime', $data) && $data['cstccutoffTime'] === null) {
                $object->setCstccutoffTime(null);
            }
            if (\array_key_exists('poddate', $data) && $data['poddate'] !== null) {
                $object->setPoddate($data['poddate']);
                unset($data['poddate']);
            }
            elseif (\array_key_exists('poddate', $data) && $data['poddate'] === null) {
                $object->setPoddate(null);
            }
            if (\array_key_exists('poddays', $data) && $data['poddays'] !== null) {
                $object->setPoddays($data['poddays']);
                unset($data['poddays']);
            }
            elseif (\array_key_exists('poddays', $data) && $data['poddays'] === null) {
                $object->setPoddays(null);
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
            $data['serviceLevel'] = $object->getServiceLevel();
            $data['serviceLevelDescription'] = $object->getServiceLevelDescription();
            $data['shipDate'] = $object->getShipDate();
            $data['deliveryDate'] = $object->getDeliveryDate();
            $data['commitTime'] = $object->getCommitTime();
            $data['deliveryTime'] = $object->getDeliveryTime();
            $data['deliveryDayOfWeek'] = $object->getDeliveryDayOfWeek();
            $data['nextDayPickupIndicator'] = $object->getNextDayPickupIndicator();
            $data['saturdayPickupIndicator'] = $object->getSaturdayPickupIndicator();
            if ($object->isInitialized('saturdayDeliveryDate') && null !== $object->getSaturdayDeliveryDate()) {
                $data['saturdayDeliveryDate'] = $object->getSaturdayDeliveryDate();
            }
            if ($object->isInitialized('saturdayDeliveryTime') && null !== $object->getSaturdayDeliveryTime()) {
                $data['saturdayDeliveryTime'] = $object->getSaturdayDeliveryTime();
            }
            if ($object->isInitialized('serviceRemarksText') && null !== $object->getServiceRemarksText()) {
                $data['serviceRemarksText'] = $object->getServiceRemarksText();
            }
            $data['guaranteeIndicator'] = $object->getGuaranteeIndicator();
            $data['totalTransitDays'] = $object->getTotalTransitDays();
            $data['businessTransitDays'] = $object->getBusinessTransitDays();
            $data['restDaysCount'] = $object->getRestDaysCount();
            $data['holidayCount'] = $object->getHolidayCount();
            $data['delayCount'] = $object->getDelayCount();
            $data['pickupDate'] = $object->getPickupDate();
            $data['pickupTime'] = $object->getPickupTime();
            $data['cstccutoffTime'] = $object->getCstccutoffTime();
            if ($object->isInitialized('poddate') && null !== $object->getPoddate()) {
                $data['poddate'] = $object->getPoddate();
            }
            if ($object->isInitialized('poddays') && null !== $object->getPoddays()) {
                $data['poddays'] = $object->getPoddays();
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
            return ['ShipStream\\Ups\\Api\\Model\\Services' => false];
        }
    }
} else {
    class ServicesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\Services';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\Services';
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
            $object = new \ShipStream\Ups\Api\Model\Services();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('serviceLevel', $data) && $data['serviceLevel'] !== null) {
                $object->setServiceLevel($data['serviceLevel']);
                unset($data['serviceLevel']);
            }
            elseif (\array_key_exists('serviceLevel', $data) && $data['serviceLevel'] === null) {
                $object->setServiceLevel(null);
            }
            if (\array_key_exists('serviceLevelDescription', $data) && $data['serviceLevelDescription'] !== null) {
                $object->setServiceLevelDescription($data['serviceLevelDescription']);
                unset($data['serviceLevelDescription']);
            }
            elseif (\array_key_exists('serviceLevelDescription', $data) && $data['serviceLevelDescription'] === null) {
                $object->setServiceLevelDescription(null);
            }
            if (\array_key_exists('shipDate', $data) && $data['shipDate'] !== null) {
                $object->setShipDate($data['shipDate']);
                unset($data['shipDate']);
            }
            elseif (\array_key_exists('shipDate', $data) && $data['shipDate'] === null) {
                $object->setShipDate(null);
            }
            if (\array_key_exists('deliveryDate', $data) && $data['deliveryDate'] !== null) {
                $object->setDeliveryDate($data['deliveryDate']);
                unset($data['deliveryDate']);
            }
            elseif (\array_key_exists('deliveryDate', $data) && $data['deliveryDate'] === null) {
                $object->setDeliveryDate(null);
            }
            if (\array_key_exists('commitTime', $data) && $data['commitTime'] !== null) {
                $object->setCommitTime($data['commitTime']);
                unset($data['commitTime']);
            }
            elseif (\array_key_exists('commitTime', $data) && $data['commitTime'] === null) {
                $object->setCommitTime(null);
            }
            if (\array_key_exists('deliveryTime', $data) && $data['deliveryTime'] !== null) {
                $object->setDeliveryTime($data['deliveryTime']);
                unset($data['deliveryTime']);
            }
            elseif (\array_key_exists('deliveryTime', $data) && $data['deliveryTime'] === null) {
                $object->setDeliveryTime(null);
            }
            if (\array_key_exists('deliveryDayOfWeek', $data) && $data['deliveryDayOfWeek'] !== null) {
                $object->setDeliveryDayOfWeek($data['deliveryDayOfWeek']);
                unset($data['deliveryDayOfWeek']);
            }
            elseif (\array_key_exists('deliveryDayOfWeek', $data) && $data['deliveryDayOfWeek'] === null) {
                $object->setDeliveryDayOfWeek(null);
            }
            if (\array_key_exists('nextDayPickupIndicator', $data) && $data['nextDayPickupIndicator'] !== null) {
                $object->setNextDayPickupIndicator($data['nextDayPickupIndicator']);
                unset($data['nextDayPickupIndicator']);
            }
            elseif (\array_key_exists('nextDayPickupIndicator', $data) && $data['nextDayPickupIndicator'] === null) {
                $object->setNextDayPickupIndicator(null);
            }
            if (\array_key_exists('saturdayPickupIndicator', $data) && $data['saturdayPickupIndicator'] !== null) {
                $object->setSaturdayPickupIndicator($data['saturdayPickupIndicator']);
                unset($data['saturdayPickupIndicator']);
            }
            elseif (\array_key_exists('saturdayPickupIndicator', $data) && $data['saturdayPickupIndicator'] === null) {
                $object->setSaturdayPickupIndicator(null);
            }
            if (\array_key_exists('saturdayDeliveryDate', $data) && $data['saturdayDeliveryDate'] !== null) {
                $object->setSaturdayDeliveryDate($data['saturdayDeliveryDate']);
                unset($data['saturdayDeliveryDate']);
            }
            elseif (\array_key_exists('saturdayDeliveryDate', $data) && $data['saturdayDeliveryDate'] === null) {
                $object->setSaturdayDeliveryDate(null);
            }
            if (\array_key_exists('saturdayDeliveryTime', $data) && $data['saturdayDeliveryTime'] !== null) {
                $object->setSaturdayDeliveryTime($data['saturdayDeliveryTime']);
                unset($data['saturdayDeliveryTime']);
            }
            elseif (\array_key_exists('saturdayDeliveryTime', $data) && $data['saturdayDeliveryTime'] === null) {
                $object->setSaturdayDeliveryTime(null);
            }
            if (\array_key_exists('serviceRemarksText', $data) && $data['serviceRemarksText'] !== null) {
                $object->setServiceRemarksText($data['serviceRemarksText']);
                unset($data['serviceRemarksText']);
            }
            elseif (\array_key_exists('serviceRemarksText', $data) && $data['serviceRemarksText'] === null) {
                $object->setServiceRemarksText(null);
            }
            if (\array_key_exists('guaranteeIndicator', $data) && $data['guaranteeIndicator'] !== null) {
                $object->setGuaranteeIndicator($data['guaranteeIndicator']);
                unset($data['guaranteeIndicator']);
            }
            elseif (\array_key_exists('guaranteeIndicator', $data) && $data['guaranteeIndicator'] === null) {
                $object->setGuaranteeIndicator(null);
            }
            if (\array_key_exists('totalTransitDays', $data) && $data['totalTransitDays'] !== null) {
                $object->setTotalTransitDays($data['totalTransitDays']);
                unset($data['totalTransitDays']);
            }
            elseif (\array_key_exists('totalTransitDays', $data) && $data['totalTransitDays'] === null) {
                $object->setTotalTransitDays(null);
            }
            if (\array_key_exists('businessTransitDays', $data) && $data['businessTransitDays'] !== null) {
                $object->setBusinessTransitDays($data['businessTransitDays']);
                unset($data['businessTransitDays']);
            }
            elseif (\array_key_exists('businessTransitDays', $data) && $data['businessTransitDays'] === null) {
                $object->setBusinessTransitDays(null);
            }
            if (\array_key_exists('restDaysCount', $data) && $data['restDaysCount'] !== null) {
                $object->setRestDaysCount($data['restDaysCount']);
                unset($data['restDaysCount']);
            }
            elseif (\array_key_exists('restDaysCount', $data) && $data['restDaysCount'] === null) {
                $object->setRestDaysCount(null);
            }
            if (\array_key_exists('holidayCount', $data) && $data['holidayCount'] !== null) {
                $object->setHolidayCount($data['holidayCount']);
                unset($data['holidayCount']);
            }
            elseif (\array_key_exists('holidayCount', $data) && $data['holidayCount'] === null) {
                $object->setHolidayCount(null);
            }
            if (\array_key_exists('delayCount', $data) && $data['delayCount'] !== null) {
                $object->setDelayCount($data['delayCount']);
                unset($data['delayCount']);
            }
            elseif (\array_key_exists('delayCount', $data) && $data['delayCount'] === null) {
                $object->setDelayCount(null);
            }
            if (\array_key_exists('pickupDate', $data) && $data['pickupDate'] !== null) {
                $object->setPickupDate($data['pickupDate']);
                unset($data['pickupDate']);
            }
            elseif (\array_key_exists('pickupDate', $data) && $data['pickupDate'] === null) {
                $object->setPickupDate(null);
            }
            if (\array_key_exists('pickupTime', $data) && $data['pickupTime'] !== null) {
                $object->setPickupTime($data['pickupTime']);
                unset($data['pickupTime']);
            }
            elseif (\array_key_exists('pickupTime', $data) && $data['pickupTime'] === null) {
                $object->setPickupTime(null);
            }
            if (\array_key_exists('cstccutoffTime', $data) && $data['cstccutoffTime'] !== null) {
                $object->setCstccutoffTime($data['cstccutoffTime']);
                unset($data['cstccutoffTime']);
            }
            elseif (\array_key_exists('cstccutoffTime', $data) && $data['cstccutoffTime'] === null) {
                $object->setCstccutoffTime(null);
            }
            if (\array_key_exists('poddate', $data) && $data['poddate'] !== null) {
                $object->setPoddate($data['poddate']);
                unset($data['poddate']);
            }
            elseif (\array_key_exists('poddate', $data) && $data['poddate'] === null) {
                $object->setPoddate(null);
            }
            if (\array_key_exists('poddays', $data) && $data['poddays'] !== null) {
                $object->setPoddays($data['poddays']);
                unset($data['poddays']);
            }
            elseif (\array_key_exists('poddays', $data) && $data['poddays'] === null) {
                $object->setPoddays(null);
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
            $data['serviceLevel'] = $object->getServiceLevel();
            $data['serviceLevelDescription'] = $object->getServiceLevelDescription();
            $data['shipDate'] = $object->getShipDate();
            $data['deliveryDate'] = $object->getDeliveryDate();
            $data['commitTime'] = $object->getCommitTime();
            $data['deliveryTime'] = $object->getDeliveryTime();
            $data['deliveryDayOfWeek'] = $object->getDeliveryDayOfWeek();
            $data['nextDayPickupIndicator'] = $object->getNextDayPickupIndicator();
            $data['saturdayPickupIndicator'] = $object->getSaturdayPickupIndicator();
            if ($object->isInitialized('saturdayDeliveryDate') && null !== $object->getSaturdayDeliveryDate()) {
                $data['saturdayDeliveryDate'] = $object->getSaturdayDeliveryDate();
            }
            if ($object->isInitialized('saturdayDeliveryTime') && null !== $object->getSaturdayDeliveryTime()) {
                $data['saturdayDeliveryTime'] = $object->getSaturdayDeliveryTime();
            }
            if ($object->isInitialized('serviceRemarksText') && null !== $object->getServiceRemarksText()) {
                $data['serviceRemarksText'] = $object->getServiceRemarksText();
            }
            $data['guaranteeIndicator'] = $object->getGuaranteeIndicator();
            $data['totalTransitDays'] = $object->getTotalTransitDays();
            $data['businessTransitDays'] = $object->getBusinessTransitDays();
            $data['restDaysCount'] = $object->getRestDaysCount();
            $data['holidayCount'] = $object->getHolidayCount();
            $data['delayCount'] = $object->getDelayCount();
            $data['pickupDate'] = $object->getPickupDate();
            $data['pickupTime'] = $object->getPickupTime();
            $data['cstccutoffTime'] = $object->getCstccutoffTime();
            if ($object->isInitialized('poddate') && null !== $object->getPoddate()) {
                $data['poddate'] = $object->getPoddate();
            }
            if ($object->isInitialized('poddays') && null !== $object->getPoddays()) {
                $data['poddays'] = $object->getPoddays();
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
            return ['ShipStream\\Ups\\Api\\Model\\Services' => false];
        }
    }
}