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
class SubscriptionFileGenericNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \ShipStream\Ups\Api\Model\SubscriptionFileGeneric::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \ShipStream\Ups\Api\Model\SubscriptionFileGeneric::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \ShipStream\Ups\Api\Model\SubscriptionFileGeneric();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('ActivityType', $data)) {
            $object->setActivityType($data['ActivityType']);
            unset($data['ActivityType']);
        }
        if (\array_key_exists('TrackingNumber', $data)) {
            $object->setTrackingNumber($data['TrackingNumber']);
            unset($data['TrackingNumber']);
        }
        if (\array_key_exists('ShipperNumber', $data)) {
            $object->setShipperNumber($data['ShipperNumber']);
            unset($data['ShipperNumber']);
        }
        if (\array_key_exists('ShipmentReferenceNumber', $data)) {
            $values = [];
            foreach ($data['ShipmentReferenceNumber'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \ShipStream\Ups\Api\Model\GenericShipmentReferenceNumber::class, 'json', $context);
            }
            $object->setShipmentReferenceNumber($values);
            unset($data['ShipmentReferenceNumber']);
        }
        if (\array_key_exists('PackageReferenceNumber', $data)) {
            $values_1 = [];
            foreach ($data['PackageReferenceNumber'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \ShipStream\Ups\Api\Model\GenericPackageReferenceNumber::class, 'json', $context);
            }
            $object->setPackageReferenceNumber($values_1);
            unset($data['PackageReferenceNumber']);
        }
        if (\array_key_exists('Service', $data)) {
            $object->setService($this->denormalizer->denormalize($data['Service'], \ShipStream\Ups\Api\Model\GenericService::class, 'json', $context));
            unset($data['Service']);
        }
        if (\array_key_exists('Activity', $data)) {
            $object->setActivity($this->denormalizer->denormalize($data['Activity'], \ShipStream\Ups\Api\Model\GenericActivity::class, 'json', $context));
            unset($data['Activity']);
        }
        if (\array_key_exists('BillToAccount', $data)) {
            $object->setBillToAccount($this->denormalizer->denormalize($data['BillToAccount'], \ShipStream\Ups\Api\Model\GenericBillToAccount::class, 'json', $context));
            unset($data['BillToAccount']);
        }
        if (\array_key_exists('ShipTo', $data)) {
            $object->setShipTo($this->denormalizer->denormalize($data['ShipTo'], \ShipStream\Ups\Api\Model\GenericShipTo::class, 'json', $context));
            unset($data['ShipTo']);
        }
        if (\array_key_exists('RescheduledDeliveryDate', $data)) {
            $object->setRescheduledDeliveryDate($data['RescheduledDeliveryDate']);
            unset($data['RescheduledDeliveryDate']);
        }
        if (\array_key_exists('FailureNotification', $data)) {
            $object->setFailureNotification($this->denormalizer->denormalize($data['FailureNotification'], \ShipStream\Ups\Api\Model\GenericFailureNotification::class, 'json', $context));
            unset($data['FailureNotification']);
        }
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_2;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['ActivityType'] = $data->getActivityType();
        $dataArray['TrackingNumber'] = $data->getTrackingNumber();
        if ($data->isInitialized('shipperNumber') && null !== $data->getShipperNumber()) {
            $dataArray['ShipperNumber'] = $data->getShipperNumber();
        }
        if ($data->isInitialized('shipmentReferenceNumber') && null !== $data->getShipmentReferenceNumber()) {
            $values = [];
            foreach ($data->getShipmentReferenceNumber() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['ShipmentReferenceNumber'] = $values;
        }
        if ($data->isInitialized('packageReferenceNumber') && null !== $data->getPackageReferenceNumber()) {
            $values_1 = [];
            foreach ($data->getPackageReferenceNumber() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['PackageReferenceNumber'] = $values_1;
        }
        if ($data->isInitialized('service') && null !== $data->getService()) {
            $dataArray['Service'] = $this->normalizer->normalize($data->getService(), 'json', $context);
        }
        if ($data->isInitialized('activity') && null !== $data->getActivity()) {
            $dataArray['Activity'] = $this->normalizer->normalize($data->getActivity(), 'json', $context);
        }
        if ($data->isInitialized('billToAccount') && null !== $data->getBillToAccount()) {
            $dataArray['BillToAccount'] = $this->normalizer->normalize($data->getBillToAccount(), 'json', $context);
        }
        if ($data->isInitialized('shipTo') && null !== $data->getShipTo()) {
            $dataArray['ShipTo'] = $this->normalizer->normalize($data->getShipTo(), 'json', $context);
        }
        if ($data->isInitialized('rescheduledDeliveryDate') && null !== $data->getRescheduledDeliveryDate()) {
            $dataArray['RescheduledDeliveryDate'] = $data->getRescheduledDeliveryDate();
        }
        if ($data->isInitialized('failureNotification') && null !== $data->getFailureNotification()) {
            $dataArray['FailureNotification'] = $this->normalizer->normalize($data->getFailureNotification(), 'json', $context);
        }
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_2;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\ShipStream\Ups\Api\Model\SubscriptionFileGeneric::class => false];
    }
}