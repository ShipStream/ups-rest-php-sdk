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
class SubscriptionFileExceptionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \ShipStream\Ups\Api\Model\SubscriptionFileException::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \ShipStream\Ups\Api\Model\SubscriptionFileException::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \ShipStream\Ups\Api\Model\SubscriptionFileException();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('PackageReferenceNumber', $data)) {
            $values = [];
            foreach ($data['PackageReferenceNumber'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \ShipStream\Ups\Api\Model\ExceptionPackageReferenceNumber::class, 'json', $context);
            }
            $object->setPackageReferenceNumber($values);
            unset($data['PackageReferenceNumber']);
        }
        if (\array_key_exists('ShipmentReferenceNumber', $data)) {
            $values_1 = [];
            foreach ($data['ShipmentReferenceNumber'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \ShipStream\Ups\Api\Model\ExceptionShipmentReferenceNumber::class, 'json', $context);
            }
            $object->setShipmentReferenceNumber($values_1);
            unset($data['ShipmentReferenceNumber']);
        }
        if (\array_key_exists('ShipperNumber', $data)) {
            $object->setShipperNumber($data['ShipperNumber']);
            unset($data['ShipperNumber']);
        }
        if (\array_key_exists('TrackingNumber', $data)) {
            $object->setTrackingNumber($data['TrackingNumber']);
            unset($data['TrackingNumber']);
        }
        if (\array_key_exists('Date', $data)) {
            $object->setDate($data['Date']);
            unset($data['Date']);
        }
        if (\array_key_exists('Time', $data)) {
            $object->setTime($data['Time']);
            unset($data['Time']);
        }
        if (\array_key_exists('UpdatedAddress', $data)) {
            $object->setUpdatedAddress($this->denormalizer->denormalize($data['UpdatedAddress'], \ShipStream\Ups\Api\Model\ExceptionUpdatedAddress::class, 'json', $context));
            unset($data['UpdatedAddress']);
        }
        if (\array_key_exists('StatusCode', $data)) {
            $object->setStatusCode($data['StatusCode']);
            unset($data['StatusCode']);
        }
        if (\array_key_exists('StatusDescription', $data)) {
            $object->setStatusDescription($data['StatusDescription']);
            unset($data['StatusDescription']);
        }
        if (\array_key_exists('ReasonCode', $data)) {
            $object->setReasonCode($data['ReasonCode']);
            unset($data['ReasonCode']);
        }
        if (\array_key_exists('ReasonDescription', $data)) {
            $object->setReasonDescription($data['ReasonDescription']);
            unset($data['ReasonDescription']);
        }
        if (\array_key_exists('Resolution', $data)) {
            $object->setResolution($this->denormalizer->denormalize($data['Resolution'], \ShipStream\Ups\Api\Model\ExceptionResolution::class, 'json', $context));
            unset($data['Resolution']);
        }
        if (\array_key_exists('RescheduledDeliveryDate', $data)) {
            $object->setRescheduledDeliveryDate($data['RescheduledDeliveryDate']);
            unset($data['RescheduledDeliveryDate']);
        }
        if (\array_key_exists('RescheduledDeliveryTime', $data)) {
            $object->setRescheduledDeliveryTime($data['RescheduledDeliveryTime']);
            unset($data['RescheduledDeliveryTime']);
        }
        if (\array_key_exists('ActivityLocation', $data)) {
            $object->setActivityLocation($this->denormalizer->denormalize($data['ActivityLocation'], \ShipStream\Ups\Api\Model\ExceptionActivityLocation::class, 'json', $context));
            unset($data['ActivityLocation']);
        }
        if (\array_key_exists('BillToAccount', $data)) {
            $object->setBillToAccount($this->denormalizer->denormalize($data['BillToAccount'], \ShipStream\Ups\Api\Model\ExceptionBillToAccount::class, 'json', $context));
            unset($data['BillToAccount']);
        }
        if (\array_key_exists('AccessPointLocationID', $data)) {
            $object->setAccessPointLocationID($data['AccessPointLocationID']);
            unset($data['AccessPointLocationID']);
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
        if ($data->isInitialized('packageReferenceNumber') && null !== $data->getPackageReferenceNumber()) {
            $values = [];
            foreach ($data->getPackageReferenceNumber() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['PackageReferenceNumber'] = $values;
        }
        if ($data->isInitialized('shipmentReferenceNumber') && null !== $data->getShipmentReferenceNumber()) {
            $values_1 = [];
            foreach ($data->getShipmentReferenceNumber() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['ShipmentReferenceNumber'] = $values_1;
        }
        $dataArray['ShipperNumber'] = $data->getShipperNumber();
        $dataArray['TrackingNumber'] = $data->getTrackingNumber();
        $dataArray['Date'] = $data->getDate();
        $dataArray['Time'] = $data->getTime();
        if ($data->isInitialized('updatedAddress') && null !== $data->getUpdatedAddress()) {
            $dataArray['UpdatedAddress'] = $this->normalizer->normalize($data->getUpdatedAddress(), 'json', $context);
        }
        if ($data->isInitialized('statusCode') && null !== $data->getStatusCode()) {
            $dataArray['StatusCode'] = $data->getStatusCode();
        }
        if ($data->isInitialized('statusDescription') && null !== $data->getStatusDescription()) {
            $dataArray['StatusDescription'] = $data->getStatusDescription();
        }
        if ($data->isInitialized('reasonCode') && null !== $data->getReasonCode()) {
            $dataArray['ReasonCode'] = $data->getReasonCode();
        }
        if ($data->isInitialized('reasonDescription') && null !== $data->getReasonDescription()) {
            $dataArray['ReasonDescription'] = $data->getReasonDescription();
        }
        if ($data->isInitialized('resolution') && null !== $data->getResolution()) {
            $dataArray['Resolution'] = $this->normalizer->normalize($data->getResolution(), 'json', $context);
        }
        if ($data->isInitialized('rescheduledDeliveryDate') && null !== $data->getRescheduledDeliveryDate()) {
            $dataArray['RescheduledDeliveryDate'] = $data->getRescheduledDeliveryDate();
        }
        if ($data->isInitialized('rescheduledDeliveryTime') && null !== $data->getRescheduledDeliveryTime()) {
            $dataArray['RescheduledDeliveryTime'] = $data->getRescheduledDeliveryTime();
        }
        if ($data->isInitialized('activityLocation') && null !== $data->getActivityLocation()) {
            $dataArray['ActivityLocation'] = $this->normalizer->normalize($data->getActivityLocation(), 'json', $context);
        }
        if ($data->isInitialized('billToAccount') && null !== $data->getBillToAccount()) {
            $dataArray['BillToAccount'] = $this->normalizer->normalize($data->getBillToAccount(), 'json', $context);
        }
        if ($data->isInitialized('accessPointLocationID') && null !== $data->getAccessPointLocationID()) {
            $dataArray['AccessPointLocationID'] = $data->getAccessPointLocationID();
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
        return [\ShipStream\Ups\Api\Model\SubscriptionFileException::class => false];
    }
}