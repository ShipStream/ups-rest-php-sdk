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
    class SubscriptionFileGenericNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\SubscriptionFileGeneric';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\SubscriptionFileGeneric';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
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
                    $values[] = $this->denormalizer->denormalize($value, 'ShipStream\\Ups\\Api\\Model\\GenericShipmentReferenceNumber', 'json', $context);
                }
                $object->setShipmentReferenceNumber($values);
                unset($data['ShipmentReferenceNumber']);
            }
            if (\array_key_exists('PackageReferenceNumber', $data)) {
                $values_1 = [];
                foreach ($data['PackageReferenceNumber'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'ShipStream\\Ups\\Api\\Model\\GenericPackageReferenceNumber', 'json', $context);
                }
                $object->setPackageReferenceNumber($values_1);
                unset($data['PackageReferenceNumber']);
            }
            if (\array_key_exists('Service', $data)) {
                $object->setService($this->denormalizer->denormalize($data['Service'], 'ShipStream\\Ups\\Api\\Model\\GenericService', 'json', $context));
                unset($data['Service']);
            }
            if (\array_key_exists('Activity', $data)) {
                $object->setActivity($this->denormalizer->denormalize($data['Activity'], 'ShipStream\\Ups\\Api\\Model\\GenericActivity', 'json', $context));
                unset($data['Activity']);
            }
            if (\array_key_exists('BillToAccount', $data)) {
                $object->setBillToAccount($this->denormalizer->denormalize($data['BillToAccount'], 'ShipStream\\Ups\\Api\\Model\\GenericBillToAccount', 'json', $context));
                unset($data['BillToAccount']);
            }
            if (\array_key_exists('ShipTo', $data)) {
                $object->setShipTo($this->denormalizer->denormalize($data['ShipTo'], 'ShipStream\\Ups\\Api\\Model\\GenericShipTo', 'json', $context));
                unset($data['ShipTo']);
            }
            if (\array_key_exists('RescheduledDeliveryDate', $data)) {
                $object->setRescheduledDeliveryDate($data['RescheduledDeliveryDate']);
                unset($data['RescheduledDeliveryDate']);
            }
            if (\array_key_exists('FailureNotification', $data)) {
                $object->setFailureNotification($this->denormalizer->denormalize($data['FailureNotification'], 'ShipStream\\Ups\\Api\\Model\\GenericFailureNotification', 'json', $context));
                unset($data['FailureNotification']);
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
            $data['ActivityType'] = $object->getActivityType();
            $data['TrackingNumber'] = $object->getTrackingNumber();
            if ($object->isInitialized('shipperNumber') && null !== $object->getShipperNumber()) {
                $data['ShipperNumber'] = $object->getShipperNumber();
            }
            if ($object->isInitialized('shipmentReferenceNumber') && null !== $object->getShipmentReferenceNumber()) {
                $values = [];
                foreach ($object->getShipmentReferenceNumber() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['ShipmentReferenceNumber'] = $values;
            }
            if ($object->isInitialized('packageReferenceNumber') && null !== $object->getPackageReferenceNumber()) {
                $values_1 = [];
                foreach ($object->getPackageReferenceNumber() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['PackageReferenceNumber'] = $values_1;
            }
            if ($object->isInitialized('service') && null !== $object->getService()) {
                $data['Service'] = $this->normalizer->normalize($object->getService(), 'json', $context);
            }
            if ($object->isInitialized('activity') && null !== $object->getActivity()) {
                $data['Activity'] = $this->normalizer->normalize($object->getActivity(), 'json', $context);
            }
            if ($object->isInitialized('billToAccount') && null !== $object->getBillToAccount()) {
                $data['BillToAccount'] = $this->normalizer->normalize($object->getBillToAccount(), 'json', $context);
            }
            if ($object->isInitialized('shipTo') && null !== $object->getShipTo()) {
                $data['ShipTo'] = $this->normalizer->normalize($object->getShipTo(), 'json', $context);
            }
            if ($object->isInitialized('rescheduledDeliveryDate') && null !== $object->getRescheduledDeliveryDate()) {
                $data['RescheduledDeliveryDate'] = $object->getRescheduledDeliveryDate();
            }
            if ($object->isInitialized('failureNotification') && null !== $object->getFailureNotification()) {
                $data['FailureNotification'] = $this->normalizer->normalize($object->getFailureNotification(), 'json', $context);
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
            return ['ShipStream\\Ups\\Api\\Model\\SubscriptionFileGeneric' => false];
        }
    }
} else {
    class SubscriptionFileGenericNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\SubscriptionFileGeneric';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\SubscriptionFileGeneric';
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
                    $values[] = $this->denormalizer->denormalize($value, 'ShipStream\\Ups\\Api\\Model\\GenericShipmentReferenceNumber', 'json', $context);
                }
                $object->setShipmentReferenceNumber($values);
                unset($data['ShipmentReferenceNumber']);
            }
            if (\array_key_exists('PackageReferenceNumber', $data)) {
                $values_1 = [];
                foreach ($data['PackageReferenceNumber'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'ShipStream\\Ups\\Api\\Model\\GenericPackageReferenceNumber', 'json', $context);
                }
                $object->setPackageReferenceNumber($values_1);
                unset($data['PackageReferenceNumber']);
            }
            if (\array_key_exists('Service', $data)) {
                $object->setService($this->denormalizer->denormalize($data['Service'], 'ShipStream\\Ups\\Api\\Model\\GenericService', 'json', $context));
                unset($data['Service']);
            }
            if (\array_key_exists('Activity', $data)) {
                $object->setActivity($this->denormalizer->denormalize($data['Activity'], 'ShipStream\\Ups\\Api\\Model\\GenericActivity', 'json', $context));
                unset($data['Activity']);
            }
            if (\array_key_exists('BillToAccount', $data)) {
                $object->setBillToAccount($this->denormalizer->denormalize($data['BillToAccount'], 'ShipStream\\Ups\\Api\\Model\\GenericBillToAccount', 'json', $context));
                unset($data['BillToAccount']);
            }
            if (\array_key_exists('ShipTo', $data)) {
                $object->setShipTo($this->denormalizer->denormalize($data['ShipTo'], 'ShipStream\\Ups\\Api\\Model\\GenericShipTo', 'json', $context));
                unset($data['ShipTo']);
            }
            if (\array_key_exists('RescheduledDeliveryDate', $data)) {
                $object->setRescheduledDeliveryDate($data['RescheduledDeliveryDate']);
                unset($data['RescheduledDeliveryDate']);
            }
            if (\array_key_exists('FailureNotification', $data)) {
                $object->setFailureNotification($this->denormalizer->denormalize($data['FailureNotification'], 'ShipStream\\Ups\\Api\\Model\\GenericFailureNotification', 'json', $context));
                unset($data['FailureNotification']);
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
            $data['ActivityType'] = $object->getActivityType();
            $data['TrackingNumber'] = $object->getTrackingNumber();
            if ($object->isInitialized('shipperNumber') && null !== $object->getShipperNumber()) {
                $data['ShipperNumber'] = $object->getShipperNumber();
            }
            if ($object->isInitialized('shipmentReferenceNumber') && null !== $object->getShipmentReferenceNumber()) {
                $values = [];
                foreach ($object->getShipmentReferenceNumber() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['ShipmentReferenceNumber'] = $values;
            }
            if ($object->isInitialized('packageReferenceNumber') && null !== $object->getPackageReferenceNumber()) {
                $values_1 = [];
                foreach ($object->getPackageReferenceNumber() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['PackageReferenceNumber'] = $values_1;
            }
            if ($object->isInitialized('service') && null !== $object->getService()) {
                $data['Service'] = $this->normalizer->normalize($object->getService(), 'json', $context);
            }
            if ($object->isInitialized('activity') && null !== $object->getActivity()) {
                $data['Activity'] = $this->normalizer->normalize($object->getActivity(), 'json', $context);
            }
            if ($object->isInitialized('billToAccount') && null !== $object->getBillToAccount()) {
                $data['BillToAccount'] = $this->normalizer->normalize($object->getBillToAccount(), 'json', $context);
            }
            if ($object->isInitialized('shipTo') && null !== $object->getShipTo()) {
                $data['ShipTo'] = $this->normalizer->normalize($object->getShipTo(), 'json', $context);
            }
            if ($object->isInitialized('rescheduledDeliveryDate') && null !== $object->getRescheduledDeliveryDate()) {
                $data['RescheduledDeliveryDate'] = $object->getRescheduledDeliveryDate();
            }
            if ($object->isInitialized('failureNotification') && null !== $object->getFailureNotification()) {
                $data['FailureNotification'] = $this->normalizer->normalize($object->getFailureNotification(), 'json', $context);
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
            return ['ShipStream\\Ups\\Api\\Model\\SubscriptionFileGeneric' => false];
        }
    }
}