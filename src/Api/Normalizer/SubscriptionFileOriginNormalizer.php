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
    class SubscriptionFileOriginNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\SubscriptionFileOrigin';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\SubscriptionFileOrigin';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \ShipStream\Ups\Api\Model\SubscriptionFileOrigin();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('PackageReferenceNumber', $data) && $data['PackageReferenceNumber'] !== null) {
                $values = [];
                foreach ($data['PackageReferenceNumber'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'ShipStream\\Ups\\Api\\Model\\OriginPackageReferenceNumber', 'json', $context);
                }
                $object->setPackageReferenceNumber($values);
                unset($data['PackageReferenceNumber']);
            }
            elseif (\array_key_exists('PackageReferenceNumber', $data) && $data['PackageReferenceNumber'] === null) {
                $object->setPackageReferenceNumber(null);
            }
            if (\array_key_exists('ShipmentReferenceNumber', $data) && $data['ShipmentReferenceNumber'] !== null) {
                $values_1 = [];
                foreach ($data['ShipmentReferenceNumber'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'ShipStream\\Ups\\Api\\Model\\OriginShipmentReferenceNumber', 'json', $context);
                }
                $object->setShipmentReferenceNumber($values_1);
                unset($data['ShipmentReferenceNumber']);
            }
            elseif (\array_key_exists('ShipmentReferenceNumber', $data) && $data['ShipmentReferenceNumber'] === null) {
                $object->setShipmentReferenceNumber(null);
            }
            if (\array_key_exists('ShipperNumber', $data) && $data['ShipperNumber'] !== null) {
                $object->setShipperNumber($data['ShipperNumber']);
                unset($data['ShipperNumber']);
            }
            elseif (\array_key_exists('ShipperNumber', $data) && $data['ShipperNumber'] === null) {
                $object->setShipperNumber(null);
            }
            if (\array_key_exists('TrackingNumber', $data) && $data['TrackingNumber'] !== null) {
                $object->setTrackingNumber($data['TrackingNumber']);
                unset($data['TrackingNumber']);
            }
            elseif (\array_key_exists('TrackingNumber', $data) && $data['TrackingNumber'] === null) {
                $object->setTrackingNumber(null);
            }
            if (\array_key_exists('Date', $data) && $data['Date'] !== null) {
                $object->setDate($data['Date']);
                unset($data['Date']);
            }
            elseif (\array_key_exists('Date', $data) && $data['Date'] === null) {
                $object->setDate(null);
            }
            if (\array_key_exists('Time', $data) && $data['Time'] !== null) {
                $object->setTime($data['Time']);
                unset($data['Time']);
            }
            elseif (\array_key_exists('Time', $data) && $data['Time'] === null) {
                $object->setTime(null);
            }
            if (\array_key_exists('ActivityLocation', $data) && $data['ActivityLocation'] !== null) {
                $object->setActivityLocation($this->denormalizer->denormalize($data['ActivityLocation'], 'ShipStream\\Ups\\Api\\Model\\OriginActivityLocation', 'json', $context));
                unset($data['ActivityLocation']);
            }
            elseif (\array_key_exists('ActivityLocation', $data) && $data['ActivityLocation'] === null) {
                $object->setActivityLocation(null);
            }
            if (\array_key_exists('BillToAccount', $data) && $data['BillToAccount'] !== null) {
                $object->setBillToAccount($this->denormalizer->denormalize($data['BillToAccount'], 'ShipStream\\Ups\\Api\\Model\\OriginBillToAccount', 'json', $context));
                unset($data['BillToAccount']);
            }
            elseif (\array_key_exists('BillToAccount', $data) && $data['BillToAccount'] === null) {
                $object->setBillToAccount(null);
            }
            if (\array_key_exists('ScheduledDeliveryDate', $data) && $data['ScheduledDeliveryDate'] !== null) {
                $object->setScheduledDeliveryDate($data['ScheduledDeliveryDate']);
                unset($data['ScheduledDeliveryDate']);
            }
            elseif (\array_key_exists('ScheduledDeliveryDate', $data) && $data['ScheduledDeliveryDate'] === null) {
                $object->setScheduledDeliveryDate(null);
            }
            if (\array_key_exists('ScheduledDeliveryTime', $data) && $data['ScheduledDeliveryTime'] !== null) {
                $object->setScheduledDeliveryTime($data['ScheduledDeliveryTime']);
                unset($data['ScheduledDeliveryTime']);
            }
            elseif (\array_key_exists('ScheduledDeliveryTime', $data) && $data['ScheduledDeliveryTime'] === null) {
                $object->setScheduledDeliveryTime(null);
            }
            foreach ($data as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_2;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
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
            if ($object->isInitialized('activityLocation') && null !== $object->getActivityLocation()) {
                $data['ActivityLocation'] = $this->normalizer->normalize($object->getActivityLocation(), 'json', $context);
            }
            if ($object->isInitialized('billToAccount') && null !== $object->getBillToAccount()) {
                $data['BillToAccount'] = $this->normalizer->normalize($object->getBillToAccount(), 'json', $context);
            }
            if ($object->isInitialized('scheduledDeliveryDate') && null !== $object->getScheduledDeliveryDate()) {
                $data['ScheduledDeliveryDate'] = $object->getScheduledDeliveryDate();
            }
            if ($object->isInitialized('scheduledDeliveryTime') && null !== $object->getScheduledDeliveryTime()) {
                $data['ScheduledDeliveryTime'] = $object->getScheduledDeliveryTime();
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
            return ['ShipStream\\Ups\\Api\\Model\\SubscriptionFileOrigin' => false];
        }
    }
} else {
    class SubscriptionFileOriginNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\SubscriptionFileOrigin';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\SubscriptionFileOrigin';
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
            $object = new \ShipStream\Ups\Api\Model\SubscriptionFileOrigin();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('PackageReferenceNumber', $data) && $data['PackageReferenceNumber'] !== null) {
                $values = [];
                foreach ($data['PackageReferenceNumber'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'ShipStream\\Ups\\Api\\Model\\OriginPackageReferenceNumber', 'json', $context);
                }
                $object->setPackageReferenceNumber($values);
                unset($data['PackageReferenceNumber']);
            }
            elseif (\array_key_exists('PackageReferenceNumber', $data) && $data['PackageReferenceNumber'] === null) {
                $object->setPackageReferenceNumber(null);
            }
            if (\array_key_exists('ShipmentReferenceNumber', $data) && $data['ShipmentReferenceNumber'] !== null) {
                $values_1 = [];
                foreach ($data['ShipmentReferenceNumber'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'ShipStream\\Ups\\Api\\Model\\OriginShipmentReferenceNumber', 'json', $context);
                }
                $object->setShipmentReferenceNumber($values_1);
                unset($data['ShipmentReferenceNumber']);
            }
            elseif (\array_key_exists('ShipmentReferenceNumber', $data) && $data['ShipmentReferenceNumber'] === null) {
                $object->setShipmentReferenceNumber(null);
            }
            if (\array_key_exists('ShipperNumber', $data) && $data['ShipperNumber'] !== null) {
                $object->setShipperNumber($data['ShipperNumber']);
                unset($data['ShipperNumber']);
            }
            elseif (\array_key_exists('ShipperNumber', $data) && $data['ShipperNumber'] === null) {
                $object->setShipperNumber(null);
            }
            if (\array_key_exists('TrackingNumber', $data) && $data['TrackingNumber'] !== null) {
                $object->setTrackingNumber($data['TrackingNumber']);
                unset($data['TrackingNumber']);
            }
            elseif (\array_key_exists('TrackingNumber', $data) && $data['TrackingNumber'] === null) {
                $object->setTrackingNumber(null);
            }
            if (\array_key_exists('Date', $data) && $data['Date'] !== null) {
                $object->setDate($data['Date']);
                unset($data['Date']);
            }
            elseif (\array_key_exists('Date', $data) && $data['Date'] === null) {
                $object->setDate(null);
            }
            if (\array_key_exists('Time', $data) && $data['Time'] !== null) {
                $object->setTime($data['Time']);
                unset($data['Time']);
            }
            elseif (\array_key_exists('Time', $data) && $data['Time'] === null) {
                $object->setTime(null);
            }
            if (\array_key_exists('ActivityLocation', $data) && $data['ActivityLocation'] !== null) {
                $object->setActivityLocation($this->denormalizer->denormalize($data['ActivityLocation'], 'ShipStream\\Ups\\Api\\Model\\OriginActivityLocation', 'json', $context));
                unset($data['ActivityLocation']);
            }
            elseif (\array_key_exists('ActivityLocation', $data) && $data['ActivityLocation'] === null) {
                $object->setActivityLocation(null);
            }
            if (\array_key_exists('BillToAccount', $data) && $data['BillToAccount'] !== null) {
                $object->setBillToAccount($this->denormalizer->denormalize($data['BillToAccount'], 'ShipStream\\Ups\\Api\\Model\\OriginBillToAccount', 'json', $context));
                unset($data['BillToAccount']);
            }
            elseif (\array_key_exists('BillToAccount', $data) && $data['BillToAccount'] === null) {
                $object->setBillToAccount(null);
            }
            if (\array_key_exists('ScheduledDeliveryDate', $data) && $data['ScheduledDeliveryDate'] !== null) {
                $object->setScheduledDeliveryDate($data['ScheduledDeliveryDate']);
                unset($data['ScheduledDeliveryDate']);
            }
            elseif (\array_key_exists('ScheduledDeliveryDate', $data) && $data['ScheduledDeliveryDate'] === null) {
                $object->setScheduledDeliveryDate(null);
            }
            if (\array_key_exists('ScheduledDeliveryTime', $data) && $data['ScheduledDeliveryTime'] !== null) {
                $object->setScheduledDeliveryTime($data['ScheduledDeliveryTime']);
                unset($data['ScheduledDeliveryTime']);
            }
            elseif (\array_key_exists('ScheduledDeliveryTime', $data) && $data['ScheduledDeliveryTime'] === null) {
                $object->setScheduledDeliveryTime(null);
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
        public function normalize($object, $format = null, array $context = [])
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
            if ($object->isInitialized('activityLocation') && null !== $object->getActivityLocation()) {
                $data['ActivityLocation'] = $this->normalizer->normalize($object->getActivityLocation(), 'json', $context);
            }
            if ($object->isInitialized('billToAccount') && null !== $object->getBillToAccount()) {
                $data['BillToAccount'] = $this->normalizer->normalize($object->getBillToAccount(), 'json', $context);
            }
            if ($object->isInitialized('scheduledDeliveryDate') && null !== $object->getScheduledDeliveryDate()) {
                $data['ScheduledDeliveryDate'] = $object->getScheduledDeliveryDate();
            }
            if ($object->isInitialized('scheduledDeliveryTime') && null !== $object->getScheduledDeliveryTime()) {
                $data['ScheduledDeliveryTime'] = $object->getScheduledDeliveryTime();
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
            return ['ShipStream\\Ups\\Api\\Model\\SubscriptionFileOrigin' => false];
        }
    }
}