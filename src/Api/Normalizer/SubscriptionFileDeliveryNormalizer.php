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
    class SubscriptionFileDeliveryNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\SubscriptionFileDelivery';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\SubscriptionFileDelivery';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
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
                    $values[] = $this->denormalizer->denormalize($value, 'ShipStream\\Ups\\Api\\Model\\DeliveryPackageReferenceNumber', 'json', $context);
                }
                $object->setPackageReferenceNumber($values);
                unset($data['PackageReferenceNumber']);
            }
            if (\array_key_exists('ShipmentReferenceNumber', $data)) {
                $values_1 = [];
                foreach ($data['ShipmentReferenceNumber'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'ShipStream\\Ups\\Api\\Model\\DeliveryShipmentReferenceNumber', 'json', $context);
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
                $object->setActivityLocation($this->denormalizer->denormalize($data['ActivityLocation'], 'ShipStream\\Ups\\Api\\Model\\DeliveryActivityLocation', 'json', $context));
                unset($data['ActivityLocation']);
            }
            if (\array_key_exists('DeliveryLocation', $data)) {
                $object->setDeliveryLocation($this->denormalizer->denormalize($data['DeliveryLocation'], 'ShipStream\\Ups\\Api\\Model\\DeliveryDeliveryLocation', 'json', $context));
                unset($data['DeliveryLocation']);
            }
            if (\array_key_exists('COD', $data)) {
                $object->setCOD($this->denormalizer->denormalize($data['COD'], 'ShipStream\\Ups\\Api\\Model\\DeliveryCOD', 'json', $context));
                unset($data['COD']);
            }
            if (\array_key_exists('BillToAccount', $data)) {
                $object->setBillToAccount($this->denormalizer->denormalize($data['BillToAccount'], 'ShipStream\\Ups\\Api\\Model\\DeliveryBillToAccount', 'json', $context));
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
            if ($object->isInitialized('driverRelease') && null !== $object->getDriverRelease()) {
                $data['DriverRelease'] = $object->getDriverRelease();
            }
            if ($object->isInitialized('activityLocation') && null !== $object->getActivityLocation()) {
                $data['ActivityLocation'] = $this->normalizer->normalize($object->getActivityLocation(), 'json', $context);
            }
            if ($object->isInitialized('deliveryLocation') && null !== $object->getDeliveryLocation()) {
                $data['DeliveryLocation'] = $this->normalizer->normalize($object->getDeliveryLocation(), 'json', $context);
            }
            if ($object->isInitialized('cOD') && null !== $object->getCOD()) {
                $data['COD'] = $this->normalizer->normalize($object->getCOD(), 'json', $context);
            }
            if ($object->isInitialized('billToAccount') && null !== $object->getBillToAccount()) {
                $data['BillToAccount'] = $this->normalizer->normalize($object->getBillToAccount(), 'json', $context);
            }
            if ($object->isInitialized('lastPickupDate') && null !== $object->getLastPickupDate()) {
                $data['LastPickupDate'] = $object->getLastPickupDate();
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
            return ['ShipStream\\Ups\\Api\\Model\\SubscriptionFileDelivery' => false];
        }
    }
} else {
    class SubscriptionFileDeliveryNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\SubscriptionFileDelivery';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\SubscriptionFileDelivery';
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
            $object = new \ShipStream\Ups\Api\Model\SubscriptionFileDelivery();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('PackageReferenceNumber', $data)) {
                $values = [];
                foreach ($data['PackageReferenceNumber'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'ShipStream\\Ups\\Api\\Model\\DeliveryPackageReferenceNumber', 'json', $context);
                }
                $object->setPackageReferenceNumber($values);
                unset($data['PackageReferenceNumber']);
            }
            if (\array_key_exists('ShipmentReferenceNumber', $data)) {
                $values_1 = [];
                foreach ($data['ShipmentReferenceNumber'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'ShipStream\\Ups\\Api\\Model\\DeliveryShipmentReferenceNumber', 'json', $context);
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
                $object->setActivityLocation($this->denormalizer->denormalize($data['ActivityLocation'], 'ShipStream\\Ups\\Api\\Model\\DeliveryActivityLocation', 'json', $context));
                unset($data['ActivityLocation']);
            }
            if (\array_key_exists('DeliveryLocation', $data)) {
                $object->setDeliveryLocation($this->denormalizer->denormalize($data['DeliveryLocation'], 'ShipStream\\Ups\\Api\\Model\\DeliveryDeliveryLocation', 'json', $context));
                unset($data['DeliveryLocation']);
            }
            if (\array_key_exists('COD', $data)) {
                $object->setCOD($this->denormalizer->denormalize($data['COD'], 'ShipStream\\Ups\\Api\\Model\\DeliveryCOD', 'json', $context));
                unset($data['COD']);
            }
            if (\array_key_exists('BillToAccount', $data)) {
                $object->setBillToAccount($this->denormalizer->denormalize($data['BillToAccount'], 'ShipStream\\Ups\\Api\\Model\\DeliveryBillToAccount', 'json', $context));
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
            if ($object->isInitialized('driverRelease') && null !== $object->getDriverRelease()) {
                $data['DriverRelease'] = $object->getDriverRelease();
            }
            if ($object->isInitialized('activityLocation') && null !== $object->getActivityLocation()) {
                $data['ActivityLocation'] = $this->normalizer->normalize($object->getActivityLocation(), 'json', $context);
            }
            if ($object->isInitialized('deliveryLocation') && null !== $object->getDeliveryLocation()) {
                $data['DeliveryLocation'] = $this->normalizer->normalize($object->getDeliveryLocation(), 'json', $context);
            }
            if ($object->isInitialized('cOD') && null !== $object->getCOD()) {
                $data['COD'] = $this->normalizer->normalize($object->getCOD(), 'json', $context);
            }
            if ($object->isInitialized('billToAccount') && null !== $object->getBillToAccount()) {
                $data['BillToAccount'] = $this->normalizer->normalize($object->getBillToAccount(), 'json', $context);
            }
            if ($object->isInitialized('lastPickupDate') && null !== $object->getLastPickupDate()) {
                $data['LastPickupDate'] = $object->getLastPickupDate();
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
            return ['ShipStream\\Ups\\Api\\Model\\SubscriptionFileDelivery' => false];
        }
    }
}