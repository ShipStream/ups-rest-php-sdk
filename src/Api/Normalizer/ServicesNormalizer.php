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
            if (\array_key_exists('serviceLevel', $data)) {
                $object->setServiceLevel($data['serviceLevel']);
                unset($data['serviceLevel']);
            }
            if (\array_key_exists('serviceLevelDescription', $data)) {
                $object->setServiceLevelDescription($data['serviceLevelDescription']);
                unset($data['serviceLevelDescription']);
            }
            if (\array_key_exists('shipDate', $data)) {
                $object->setShipDate($data['shipDate']);
                unset($data['shipDate']);
            }
            if (\array_key_exists('deliveryDate', $data)) {
                $object->setDeliveryDate($data['deliveryDate']);
                unset($data['deliveryDate']);
            }
            if (\array_key_exists('commitTime', $data)) {
                $object->setCommitTime($data['commitTime']);
                unset($data['commitTime']);
            }
            if (\array_key_exists('deliveryTime', $data)) {
                $object->setDeliveryTime($data['deliveryTime']);
                unset($data['deliveryTime']);
            }
            if (\array_key_exists('deliveryDayOfWeek', $data)) {
                $object->setDeliveryDayOfWeek($data['deliveryDayOfWeek']);
                unset($data['deliveryDayOfWeek']);
            }
            if (\array_key_exists('nextDayPickupIndicator', $data)) {
                $object->setNextDayPickupIndicator($data['nextDayPickupIndicator']);
                unset($data['nextDayPickupIndicator']);
            }
            if (\array_key_exists('saturdayPickupIndicator', $data)) {
                $object->setSaturdayPickupIndicator($data['saturdayPickupIndicator']);
                unset($data['saturdayPickupIndicator']);
            }
            if (\array_key_exists('saturdayDeliveryDate', $data)) {
                $object->setSaturdayDeliveryDate($data['saturdayDeliveryDate']);
                unset($data['saturdayDeliveryDate']);
            }
            if (\array_key_exists('saturdayDeliveryTime', $data)) {
                $object->setSaturdayDeliveryTime($data['saturdayDeliveryTime']);
                unset($data['saturdayDeliveryTime']);
            }
            if (\array_key_exists('serviceRemarksText', $data)) {
                $object->setServiceRemarksText($data['serviceRemarksText']);
                unset($data['serviceRemarksText']);
            }
            if (\array_key_exists('guaranteeIndicator', $data)) {
                $object->setGuaranteeIndicator($data['guaranteeIndicator']);
                unset($data['guaranteeIndicator']);
            }
            if (\array_key_exists('totalTransitDays', $data)) {
                $object->setTotalTransitDays($data['totalTransitDays']);
                unset($data['totalTransitDays']);
            }
            if (\array_key_exists('businessTransitDays', $data)) {
                $object->setBusinessTransitDays($data['businessTransitDays']);
                unset($data['businessTransitDays']);
            }
            if (\array_key_exists('restDaysCount', $data)) {
                $object->setRestDaysCount($data['restDaysCount']);
                unset($data['restDaysCount']);
            }
            if (\array_key_exists('holidayCount', $data)) {
                $object->setHolidayCount($data['holidayCount']);
                unset($data['holidayCount']);
            }
            if (\array_key_exists('delayCount', $data)) {
                $object->setDelayCount($data['delayCount']);
                unset($data['delayCount']);
            }
            if (\array_key_exists('pickupDate', $data)) {
                $object->setPickupDate($data['pickupDate']);
                unset($data['pickupDate']);
            }
            if (\array_key_exists('pickupTime', $data)) {
                $object->setPickupTime($data['pickupTime']);
                unset($data['pickupTime']);
            }
            if (\array_key_exists('cstccutoffTime', $data)) {
                $object->setCstccutoffTime($data['cstccutoffTime']);
                unset($data['cstccutoffTime']);
            }
            if (\array_key_exists('poddate', $data)) {
                $object->setPoddate($data['poddate']);
                unset($data['poddate']);
            }
            if (\array_key_exists('poddays', $data)) {
                $object->setPoddays($data['poddays']);
                unset($data['poddays']);
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
            if (\array_key_exists('serviceLevel', $data)) {
                $object->setServiceLevel($data['serviceLevel']);
                unset($data['serviceLevel']);
            }
            if (\array_key_exists('serviceLevelDescription', $data)) {
                $object->setServiceLevelDescription($data['serviceLevelDescription']);
                unset($data['serviceLevelDescription']);
            }
            if (\array_key_exists('shipDate', $data)) {
                $object->setShipDate($data['shipDate']);
                unset($data['shipDate']);
            }
            if (\array_key_exists('deliveryDate', $data)) {
                $object->setDeliveryDate($data['deliveryDate']);
                unset($data['deliveryDate']);
            }
            if (\array_key_exists('commitTime', $data)) {
                $object->setCommitTime($data['commitTime']);
                unset($data['commitTime']);
            }
            if (\array_key_exists('deliveryTime', $data)) {
                $object->setDeliveryTime($data['deliveryTime']);
                unset($data['deliveryTime']);
            }
            if (\array_key_exists('deliveryDayOfWeek', $data)) {
                $object->setDeliveryDayOfWeek($data['deliveryDayOfWeek']);
                unset($data['deliveryDayOfWeek']);
            }
            if (\array_key_exists('nextDayPickupIndicator', $data)) {
                $object->setNextDayPickupIndicator($data['nextDayPickupIndicator']);
                unset($data['nextDayPickupIndicator']);
            }
            if (\array_key_exists('saturdayPickupIndicator', $data)) {
                $object->setSaturdayPickupIndicator($data['saturdayPickupIndicator']);
                unset($data['saturdayPickupIndicator']);
            }
            if (\array_key_exists('saturdayDeliveryDate', $data)) {
                $object->setSaturdayDeliveryDate($data['saturdayDeliveryDate']);
                unset($data['saturdayDeliveryDate']);
            }
            if (\array_key_exists('saturdayDeliveryTime', $data)) {
                $object->setSaturdayDeliveryTime($data['saturdayDeliveryTime']);
                unset($data['saturdayDeliveryTime']);
            }
            if (\array_key_exists('serviceRemarksText', $data)) {
                $object->setServiceRemarksText($data['serviceRemarksText']);
                unset($data['serviceRemarksText']);
            }
            if (\array_key_exists('guaranteeIndicator', $data)) {
                $object->setGuaranteeIndicator($data['guaranteeIndicator']);
                unset($data['guaranteeIndicator']);
            }
            if (\array_key_exists('totalTransitDays', $data)) {
                $object->setTotalTransitDays($data['totalTransitDays']);
                unset($data['totalTransitDays']);
            }
            if (\array_key_exists('businessTransitDays', $data)) {
                $object->setBusinessTransitDays($data['businessTransitDays']);
                unset($data['businessTransitDays']);
            }
            if (\array_key_exists('restDaysCount', $data)) {
                $object->setRestDaysCount($data['restDaysCount']);
                unset($data['restDaysCount']);
            }
            if (\array_key_exists('holidayCount', $data)) {
                $object->setHolidayCount($data['holidayCount']);
                unset($data['holidayCount']);
            }
            if (\array_key_exists('delayCount', $data)) {
                $object->setDelayCount($data['delayCount']);
                unset($data['delayCount']);
            }
            if (\array_key_exists('pickupDate', $data)) {
                $object->setPickupDate($data['pickupDate']);
                unset($data['pickupDate']);
            }
            if (\array_key_exists('pickupTime', $data)) {
                $object->setPickupTime($data['pickupTime']);
                unset($data['pickupTime']);
            }
            if (\array_key_exists('cstccutoffTime', $data)) {
                $object->setCstccutoffTime($data['cstccutoffTime']);
                unset($data['cstccutoffTime']);
            }
            if (\array_key_exists('poddate', $data)) {
                $object->setPoddate($data['poddate']);
                unset($data['poddate']);
            }
            if (\array_key_exists('poddays', $data)) {
                $object->setPoddays($data['poddays']);
                unset($data['poddays']);
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