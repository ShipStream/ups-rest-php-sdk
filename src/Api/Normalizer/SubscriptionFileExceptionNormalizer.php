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
class SubscriptionFileExceptionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = []) : bool
    {
        return $type === 'ShipStream\\Ups\\Api\\Model\\SubscriptionFileException';
    }
    public function supportsNormalization($data, $format = null, array $context = []) : bool
    {
        return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\SubscriptionFileException';
    }
    /**
     * @return mixed
     */
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
                $values[] = $this->denormalizer->denormalize($value, 'ShipStream\\Ups\\Api\\Model\\ExceptionPackageReferenceNumber', 'json', $context);
            }
            $object->setPackageReferenceNumber($values);
            unset($data['PackageReferenceNumber']);
        }
        if (\array_key_exists('ShipmentReferenceNumber', $data)) {
            $values_1 = [];
            foreach ($data['ShipmentReferenceNumber'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'ShipStream\\Ups\\Api\\Model\\ExceptionShipmentReferenceNumber', 'json', $context);
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
            $object->setUpdatedAddress($this->denormalizer->denormalize($data['UpdatedAddress'], 'ShipStream\\Ups\\Api\\Model\\ExceptionUpdatedAddress', 'json', $context));
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
            $object->setResolution($this->denormalizer->denormalize($data['Resolution'], 'ShipStream\\Ups\\Api\\Model\\ExceptionResolution', 'json', $context));
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
            $object->setActivityLocation($this->denormalizer->denormalize($data['ActivityLocation'], 'ShipStream\\Ups\\Api\\Model\\ExceptionActivityLocation', 'json', $context));
            unset($data['ActivityLocation']);
        }
        if (\array_key_exists('BillToAccount', $data)) {
            $object->setBillToAccount($this->denormalizer->denormalize($data['BillToAccount'], 'ShipStream\\Ups\\Api\\Model\\ExceptionBillToAccount', 'json', $context));
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
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize(mixed $object, ?string $format = null, array $context = []): \ArrayObject|array|string|int|float|bool|null
    {
        $data = [];
        if ($object->isInitialized('packageReferenceNumber') && null !== $object->getPackageReferenceNumber()) {
            $values = [];
            foreach ($object->getPackageReferenceNumber() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['PackageReferenceNumber'] = $values;
        }
        if ($object->isInitialized('shipmentReferenceNumber') && null !== $object->getShipmentReferenceNumber()) {
            $values_1 = [];
            foreach ($object->getShipmentReferenceNumber() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['ShipmentReferenceNumber'] = $values_1;
        }
        $data['ShipperNumber'] = $object->getShipperNumber();
        $data['TrackingNumber'] = $object->getTrackingNumber();
        $data['Date'] = $object->getDate();
        $data['Time'] = $object->getTime();
        if ($object->isInitialized('updatedAddress') && null !== $object->getUpdatedAddress()) {
            $data['UpdatedAddress'] = $this->normalizer->normalize($object->getUpdatedAddress(), 'json', $context);
        }
        if ($object->isInitialized('statusCode') && null !== $object->getStatusCode()) {
            $data['StatusCode'] = $object->getStatusCode();
        }
        if ($object->isInitialized('statusDescription') && null !== $object->getStatusDescription()) {
            $data['StatusDescription'] = $object->getStatusDescription();
        }
        if ($object->isInitialized('reasonCode') && null !== $object->getReasonCode()) {
            $data['ReasonCode'] = $object->getReasonCode();
        }
        if ($object->isInitialized('reasonDescription') && null !== $object->getReasonDescription()) {
            $data['ReasonDescription'] = $object->getReasonDescription();
        }
        if ($object->isInitialized('resolution') && null !== $object->getResolution()) {
            $data['Resolution'] = $this->normalizer->normalize($object->getResolution(), 'json', $context);
        }
        if ($object->isInitialized('rescheduledDeliveryDate') && null !== $object->getRescheduledDeliveryDate()) {
            $data['RescheduledDeliveryDate'] = $object->getRescheduledDeliveryDate();
        }
        if ($object->isInitialized('rescheduledDeliveryTime') && null !== $object->getRescheduledDeliveryTime()) {
            $data['RescheduledDeliveryTime'] = $object->getRescheduledDeliveryTime();
        }
        if ($object->isInitialized('activityLocation') && null !== $object->getActivityLocation()) {
            $data['ActivityLocation'] = $this->normalizer->normalize($object->getActivityLocation(), 'json', $context);
        }
        if ($object->isInitialized('billToAccount') && null !== $object->getBillToAccount()) {
            $data['BillToAccount'] = $this->normalizer->normalize($object->getBillToAccount(), 'json', $context);
        }
        if ($object->isInitialized('accessPointLocationID') && null !== $object->getAccessPointLocationID()) {
            $data['AccessPointLocationID'] = $object->getAccessPointLocationID();
        }
        foreach ($object as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value_2;
            }
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('ShipStream\\Ups\\Api\\Model\\SubscriptionFileException' => false);
    }
}