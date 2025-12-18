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
class SubscriptionFileDeliveryNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \ShipStream\Ups\Api\Model\SubscriptionFileDelivery::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \ShipStream\Ups\Api\Model\SubscriptionFileDelivery::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \ShipStream\Ups\Api\Model\SubscriptionFileDelivery();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('PackageReferenceNumber', $data)) {
            $values = [];
            foreach ($data['PackageReferenceNumber'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \ShipStream\Ups\Api\Model\DeliveryPackageReferenceNumber::class, 'json', $context);
            }
            $object->setPackageReferenceNumber($values);
            unset($data['PackageReferenceNumber']);
        }
        if (\array_key_exists('ShipmentReferenceNumber', $data)) {
            $values_1 = [];
            foreach ($data['ShipmentReferenceNumber'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \ShipStream\Ups\Api\Model\DeliveryShipmentReferenceNumber::class, 'json', $context);
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
        if (\array_key_exists('DriverRelease', $data)) {
            $object->setDriverRelease($data['DriverRelease']);
            unset($data['DriverRelease']);
        }
        if (\array_key_exists('ActivityLocation', $data)) {
            $object->setActivityLocation($this->denormalizer->denormalize($data['ActivityLocation'], \ShipStream\Ups\Api\Model\DeliveryActivityLocation::class, 'json', $context));
            unset($data['ActivityLocation']);
        }
        if (\array_key_exists('DeliveryLocation', $data)) {
            $object->setDeliveryLocation($this->denormalizer->denormalize($data['DeliveryLocation'], \ShipStream\Ups\Api\Model\DeliveryDeliveryLocation::class, 'json', $context));
            unset($data['DeliveryLocation']);
        }
        if (\array_key_exists('COD', $data)) {
            $object->setCOD($this->denormalizer->denormalize($data['COD'], \ShipStream\Ups\Api\Model\DeliveryCOD::class, 'json', $context));
            unset($data['COD']);
        }
        if (\array_key_exists('BillToAccount', $data)) {
            $object->setBillToAccount($this->denormalizer->denormalize($data['BillToAccount'], \ShipStream\Ups\Api\Model\DeliveryBillToAccount::class, 'json', $context));
            unset($data['BillToAccount']);
        }
        if (\array_key_exists('LastPickupDate', $data)) {
            $object->setLastPickupDate($data['LastPickupDate']);
            unset($data['LastPickupDate']);
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
        if ($data->isInitialized('driverRelease') && null !== $data->getDriverRelease()) {
            $dataArray['DriverRelease'] = $data->getDriverRelease();
        }
        if ($data->isInitialized('activityLocation') && null !== $data->getActivityLocation()) {
            $dataArray['ActivityLocation'] = $this->normalizer->normalize($data->getActivityLocation(), 'json', $context);
        }
        if ($data->isInitialized('deliveryLocation') && null !== $data->getDeliveryLocation()) {
            $dataArray['DeliveryLocation'] = $this->normalizer->normalize($data->getDeliveryLocation(), 'json', $context);
        }
        if ($data->isInitialized('cOD') && null !== $data->getCOD()) {
            $dataArray['COD'] = $this->normalizer->normalize($data->getCOD(), 'json', $context);
        }
        if ($data->isInitialized('billToAccount') && null !== $data->getBillToAccount()) {
            $dataArray['BillToAccount'] = $this->normalizer->normalize($data->getBillToAccount(), 'json', $context);
        }
        if ($data->isInitialized('lastPickupDate') && null !== $data->getLastPickupDate()) {
            $dataArray['LastPickupDate'] = $data->getLastPickupDate();
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
        return [\ShipStream\Ups\Api\Model\SubscriptionFileDelivery::class => false];
    }
}