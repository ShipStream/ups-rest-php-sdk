<?php

namespace ShipStream\Ups\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use ShipStream\Ups\Api\Runtime\Normalizer\CheckArray;
use ShipStream\Ups\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class ServicesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \ShipStream\Ups\Api\Model\Services::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \ShipStream\Ups\Api\Model\Services::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
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
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['serviceLevel'] = $data->getServiceLevel();
        $dataArray['serviceLevelDescription'] = $data->getServiceLevelDescription();
        $dataArray['shipDate'] = $data->getShipDate();
        $dataArray['deliveryDate'] = $data->getDeliveryDate();
        $dataArray['commitTime'] = $data->getCommitTime();
        $dataArray['deliveryTime'] = $data->getDeliveryTime();
        $dataArray['deliveryDayOfWeek'] = $data->getDeliveryDayOfWeek();
        $dataArray['nextDayPickupIndicator'] = $data->getNextDayPickupIndicator();
        $dataArray['saturdayPickupIndicator'] = $data->getSaturdayPickupIndicator();
        if ($data->isInitialized('saturdayDeliveryDate') && null !== $data->getSaturdayDeliveryDate()) {
            $dataArray['saturdayDeliveryDate'] = $data->getSaturdayDeliveryDate();
        }
        if ($data->isInitialized('saturdayDeliveryTime') && null !== $data->getSaturdayDeliveryTime()) {
            $dataArray['saturdayDeliveryTime'] = $data->getSaturdayDeliveryTime();
        }
        if ($data->isInitialized('serviceRemarksText') && null !== $data->getServiceRemarksText()) {
            $dataArray['serviceRemarksText'] = $data->getServiceRemarksText();
        }
        $dataArray['guaranteeIndicator'] = $data->getGuaranteeIndicator();
        $dataArray['totalTransitDays'] = $data->getTotalTransitDays();
        $dataArray['businessTransitDays'] = $data->getBusinessTransitDays();
        $dataArray['restDaysCount'] = $data->getRestDaysCount();
        $dataArray['holidayCount'] = $data->getHolidayCount();
        $dataArray['delayCount'] = $data->getDelayCount();
        $dataArray['pickupDate'] = $data->getPickupDate();
        $dataArray['pickupTime'] = $data->getPickupTime();
        $dataArray['cstccutoffTime'] = $data->getCstccutoffTime();
        if ($data->isInitialized('poddate') && null !== $data->getPoddate()) {
            $dataArray['poddate'] = $data->getPoddate();
        }
        if ($data->isInitialized('poddays') && null !== $data->getPoddays()) {
            $dataArray['poddays'] = $data->getPoddays();
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\ShipStream\Ups\Api\Model\Services::class => false];
    }
}