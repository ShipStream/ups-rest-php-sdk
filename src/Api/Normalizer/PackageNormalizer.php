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
class PackageNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \ShipStream\Ups\Api\Model\Package::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \ShipStream\Ups\Api\Model\Package::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \ShipStream\Ups\Api\Model\Package();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('accessPointInformation', $data)) {
            $object->setAccessPointInformation($this->denormalizer->denormalize($data['accessPointInformation'], \ShipStream\Ups\Api\Model\AccessPointInformation::class, 'json', $context));
            unset($data['accessPointInformation']);
        }
        if (\array_key_exists('activity', $data)) {
            $values = [];
            foreach ($data['activity'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \ShipStream\Ups\Api\Model\Activity::class, 'json', $context);
            }
            $object->setActivity($values);
            unset($data['activity']);
        }
        if (\array_key_exists('additionalAttributes', $data)) {
            $values_1 = [];
            foreach ($data['additionalAttributes'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setAdditionalAttributes($values_1);
            unset($data['additionalAttributes']);
        }
        if (\array_key_exists('additionalServices', $data)) {
            $values_2 = [];
            foreach ($data['additionalServices'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setAdditionalServices($values_2);
            unset($data['additionalServices']);
        }
        if (\array_key_exists('alternateTrackingNumber', $data)) {
            $values_3 = [];
            foreach ($data['alternateTrackingNumber'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, \ShipStream\Ups\Api\Model\AlternateTrackingNumber::class, 'json', $context);
            }
            $object->setAlternateTrackingNumber($values_3);
            unset($data['alternateTrackingNumber']);
        }
        if (\array_key_exists('currentStatus', $data)) {
            $object->setCurrentStatus($this->denormalizer->denormalize($data['currentStatus'], \ShipStream\Ups\Api\Model\Status::class, 'json', $context));
            unset($data['currentStatus']);
        }
        if (\array_key_exists('deliveryDate', $data)) {
            $values_4 = [];
            foreach ($data['deliveryDate'] as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, \ShipStream\Ups\Api\Model\DeliveryDate::class, 'json', $context);
            }
            $object->setDeliveryDate($values_4);
            unset($data['deliveryDate']);
        }
        if (\array_key_exists('deliveryInformation', $data)) {
            $object->setDeliveryInformation($this->denormalizer->denormalize($data['deliveryInformation'], \ShipStream\Ups\Api\Model\DeliveryInformation::class, 'json', $context));
            unset($data['deliveryInformation']);
        }
        if (\array_key_exists('deliveryTime', $data)) {
            $object->setDeliveryTime($this->denormalizer->denormalize($data['deliveryTime'], \ShipStream\Ups\Api\Model\DeliveryTime::class, 'json', $context));
            unset($data['deliveryTime']);
        }
        if (\array_key_exists('milestones', $data)) {
            $values_5 = [];
            foreach ($data['milestones'] as $value_5) {
                $values_5[] = $this->denormalizer->denormalize($value_5, \ShipStream\Ups\Api\Model\Milestones::class, 'json', $context);
            }
            $object->setMilestones($values_5);
            unset($data['milestones']);
        }
        if (\array_key_exists('packageAddress', $data)) {
            $values_6 = [];
            foreach ($data['packageAddress'] as $value_6) {
                $values_6[] = $this->denormalizer->denormalize($value_6, \ShipStream\Ups\Api\Model\PackageAddress::class, 'json', $context);
            }
            $object->setPackageAddress($values_6);
            unset($data['packageAddress']);
        }
        if (\array_key_exists('packageCount', $data)) {
            $object->setPackageCount($data['packageCount']);
            unset($data['packageCount']);
        }
        if (\array_key_exists('paymentInformation', $data)) {
            $values_7 = [];
            foreach ($data['paymentInformation'] as $value_7) {
                $values_7[] = $this->denormalizer->denormalize($value_7, \ShipStream\Ups\Api\Model\PaymentInformation::class, 'json', $context);
            }
            $object->setPaymentInformation($values_7);
            unset($data['paymentInformation']);
        }
        if (\array_key_exists('referenceNumber', $data)) {
            $values_8 = [];
            foreach ($data['referenceNumber'] as $value_8) {
                $values_8[] = $this->denormalizer->denormalize($value_8, \ShipStream\Ups\Api\Model\ReferenceNumber::class, 'json', $context);
            }
            $object->setReferenceNumber($values_8);
            unset($data['referenceNumber']);
        }
        if (\array_key_exists('service', $data)) {
            $object->setService($this->denormalizer->denormalize($data['service'], \ShipStream\Ups\Api\Model\Service::class, 'json', $context));
            unset($data['service']);
        }
        if (\array_key_exists('statusCode', $data)) {
            $object->setStatusCode($data['statusCode']);
            unset($data['statusCode']);
        }
        if (\array_key_exists('statusDescription', $data)) {
            $object->setStatusDescription($data['statusDescription']);
            unset($data['statusDescription']);
        }
        if (\array_key_exists('suppressionIndicators', $data)) {
            $values_9 = [];
            foreach ($data['suppressionIndicators'] as $value_9) {
                $values_9[] = $value_9;
            }
            $object->setSuppressionIndicators($values_9);
            unset($data['suppressionIndicators']);
        }
        if (\array_key_exists('trackingNumber', $data)) {
            $object->setTrackingNumber($data['trackingNumber']);
            unset($data['trackingNumber']);
        }
        if (\array_key_exists('weight', $data) && $data['weight'] !== null) {
            $object->setWeight($this->denormalizer->denormalize($data['weight'], \ShipStream\Ups\Api\Model\Weight::class, 'json', $context));
            unset($data['weight']);
        }
        elseif (\array_key_exists('weight', $data) && $data['weight'] === null) {
            $object->setWeight(null);
        }
        foreach ($data as $key => $value_10) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_10;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('accessPointInformation') && null !== $data->getAccessPointInformation()) {
            $dataArray['accessPointInformation'] = $this->normalizer->normalize($data->getAccessPointInformation(), 'json', $context);
        }
        if ($data->isInitialized('activity') && null !== $data->getActivity()) {
            $values = [];
            foreach ($data->getActivity() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['activity'] = $values;
        }
        if ($data->isInitialized('additionalAttributes') && null !== $data->getAdditionalAttributes()) {
            $values_1 = [];
            foreach ($data->getAdditionalAttributes() as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['additionalAttributes'] = $values_1;
        }
        if ($data->isInitialized('additionalServices') && null !== $data->getAdditionalServices()) {
            $values_2 = [];
            foreach ($data->getAdditionalServices() as $value_2) {
                $values_2[] = $value_2;
            }
            $dataArray['additionalServices'] = $values_2;
        }
        if ($data->isInitialized('alternateTrackingNumber') && null !== $data->getAlternateTrackingNumber()) {
            $values_3 = [];
            foreach ($data->getAlternateTrackingNumber() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $dataArray['alternateTrackingNumber'] = $values_3;
        }
        if ($data->isInitialized('currentStatus') && null !== $data->getCurrentStatus()) {
            $dataArray['currentStatus'] = $this->normalizer->normalize($data->getCurrentStatus(), 'json', $context);
        }
        if ($data->isInitialized('deliveryDate') && null !== $data->getDeliveryDate()) {
            $values_4 = [];
            foreach ($data->getDeliveryDate() as $value_4) {
                $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
            }
            $dataArray['deliveryDate'] = $values_4;
        }
        if ($data->isInitialized('deliveryInformation') && null !== $data->getDeliveryInformation()) {
            $dataArray['deliveryInformation'] = $this->normalizer->normalize($data->getDeliveryInformation(), 'json', $context);
        }
        if ($data->isInitialized('deliveryTime') && null !== $data->getDeliveryTime()) {
            $dataArray['deliveryTime'] = $this->normalizer->normalize($data->getDeliveryTime(), 'json', $context);
        }
        if ($data->isInitialized('milestones') && null !== $data->getMilestones()) {
            $values_5 = [];
            foreach ($data->getMilestones() as $value_5) {
                $values_5[] = $this->normalizer->normalize($value_5, 'json', $context);
            }
            $dataArray['milestones'] = $values_5;
        }
        if ($data->isInitialized('packageAddress') && null !== $data->getPackageAddress()) {
            $values_6 = [];
            foreach ($data->getPackageAddress() as $value_6) {
                $values_6[] = $this->normalizer->normalize($value_6, 'json', $context);
            }
            $dataArray['packageAddress'] = $values_6;
        }
        if ($data->isInitialized('packageCount') && null !== $data->getPackageCount()) {
            $dataArray['packageCount'] = $data->getPackageCount();
        }
        if ($data->isInitialized('paymentInformation') && null !== $data->getPaymentInformation()) {
            $values_7 = [];
            foreach ($data->getPaymentInformation() as $value_7) {
                $values_7[] = $this->normalizer->normalize($value_7, 'json', $context);
            }
            $dataArray['paymentInformation'] = $values_7;
        }
        if ($data->isInitialized('referenceNumber') && null !== $data->getReferenceNumber()) {
            $values_8 = [];
            foreach ($data->getReferenceNumber() as $value_8) {
                $values_8[] = $this->normalizer->normalize($value_8, 'json', $context);
            }
            $dataArray['referenceNumber'] = $values_8;
        }
        if ($data->isInitialized('service') && null !== $data->getService()) {
            $dataArray['service'] = $this->normalizer->normalize($data->getService(), 'json', $context);
        }
        if ($data->isInitialized('statusCode') && null !== $data->getStatusCode()) {
            $dataArray['statusCode'] = $data->getStatusCode();
        }
        if ($data->isInitialized('statusDescription') && null !== $data->getStatusDescription()) {
            $dataArray['statusDescription'] = $data->getStatusDescription();
        }
        if ($data->isInitialized('suppressionIndicators') && null !== $data->getSuppressionIndicators()) {
            $values_9 = [];
            foreach ($data->getSuppressionIndicators() as $value_9) {
                $values_9[] = $value_9;
            }
            $dataArray['suppressionIndicators'] = $values_9;
        }
        if ($data->isInitialized('trackingNumber') && null !== $data->getTrackingNumber()) {
            $dataArray['trackingNumber'] = $data->getTrackingNumber();
        }
        if ($data->isInitialized('weight')) {
            $dataArray['weight'] = $this->normalizer->normalize($data->getWeight(), 'json', $context);
        }
        foreach ($data as $key => $value_10) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_10;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\ShipStream\Ups\Api\Model\Package::class => false];
    }
}