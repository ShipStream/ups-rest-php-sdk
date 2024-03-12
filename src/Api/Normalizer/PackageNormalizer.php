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
    class PackageNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\Package';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\Package';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
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
                $object->setAccessPointInformation($this->denormalizer->denormalize($data['accessPointInformation'], 'ShipStream\\Ups\\Api\\Model\\AccessPointInformation', 'json', $context));
                unset($data['accessPointInformation']);
            }
            if (\array_key_exists('activity', $data)) {
                $values = [];
                foreach ($data['activity'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'ShipStream\\Ups\\Api\\Model\\Activity', 'json', $context);
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
                    $values_3[] = $this->denormalizer->denormalize($value_3, 'ShipStream\\Ups\\Api\\Model\\AlternateTrackingNumber', 'json', $context);
                }
                $object->setAlternateTrackingNumber($values_3);
                unset($data['alternateTrackingNumber']);
            }
            if (\array_key_exists('currentStatus', $data)) {
                $object->setCurrentStatus($this->denormalizer->denormalize($data['currentStatus'], 'ShipStream\\Ups\\Api\\Model\\Status', 'json', $context));
                unset($data['currentStatus']);
            }
            if (\array_key_exists('deliveryDate', $data)) {
                $values_4 = [];
                foreach ($data['deliveryDate'] as $value_4) {
                    $values_4[] = $this->denormalizer->denormalize($value_4, 'ShipStream\\Ups\\Api\\Model\\DeliveryDate', 'json', $context);
                }
                $object->setDeliveryDate($values_4);
                unset($data['deliveryDate']);
            }
            if (\array_key_exists('deliveryInformation', $data)) {
                $object->setDeliveryInformation($this->denormalizer->denormalize($data['deliveryInformation'], 'ShipStream\\Ups\\Api\\Model\\DeliveryInformation', 'json', $context));
                unset($data['deliveryInformation']);
            }
            if (\array_key_exists('deliveryTime', $data)) {
                $object->setDeliveryTime($this->denormalizer->denormalize($data['deliveryTime'], 'ShipStream\\Ups\\Api\\Model\\DeliveryTime', 'json', $context));
                unset($data['deliveryTime']);
            }
            if (\array_key_exists('milestones', $data)) {
                $values_5 = [];
                foreach ($data['milestones'] as $value_5) {
                    $values_5[] = $this->denormalizer->denormalize($value_5, 'ShipStream\\Ups\\Api\\Model\\Milestones', 'json', $context);
                }
                $object->setMilestones($values_5);
                unset($data['milestones']);
            }
            if (\array_key_exists('packageAddress', $data)) {
                $values_6 = [];
                foreach ($data['packageAddress'] as $value_6) {
                    $values_6[] = $this->denormalizer->denormalize($value_6, 'ShipStream\\Ups\\Api\\Model\\PackageAddress', 'json', $context);
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
                    $values_7[] = $this->denormalizer->denormalize($value_7, 'ShipStream\\Ups\\Api\\Model\\PaymentInformation', 'json', $context);
                }
                $object->setPaymentInformation($values_7);
                unset($data['paymentInformation']);
            }
            if (\array_key_exists('referenceNumber', $data)) {
                $values_8 = [];
                foreach ($data['referenceNumber'] as $value_8) {
                    $values_8[] = $this->denormalizer->denormalize($value_8, 'ShipStream\\Ups\\Api\\Model\\ReferenceNumber', 'json', $context);
                }
                $object->setReferenceNumber($values_8);
                unset($data['referenceNumber']);
            }
            if (\array_key_exists('service', $data)) {
                $object->setService($this->denormalizer->denormalize($data['service'], 'ShipStream\\Ups\\Api\\Model\\Service', 'json', $context));
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
                $object->setWeight($this->denormalizer->denormalize($data['weight'], 'ShipStream\\Ups\\Api\\Model\\Weight', 'json', $context));
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
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('accessPointInformation') && null !== $object->getAccessPointInformation()) {
                $data['accessPointInformation'] = $this->normalizer->normalize($object->getAccessPointInformation(), 'json', $context);
            }
            if ($object->isInitialized('activity') && null !== $object->getActivity()) {
                $values = [];
                foreach ($object->getActivity() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['activity'] = $values;
            }
            if ($object->isInitialized('additionalAttributes') && null !== $object->getAdditionalAttributes()) {
                $values_1 = [];
                foreach ($object->getAdditionalAttributes() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['additionalAttributes'] = $values_1;
            }
            if ($object->isInitialized('additionalServices') && null !== $object->getAdditionalServices()) {
                $values_2 = [];
                foreach ($object->getAdditionalServices() as $value_2) {
                    $values_2[] = $value_2;
                }
                $data['additionalServices'] = $values_2;
            }
            if ($object->isInitialized('alternateTrackingNumber') && null !== $object->getAlternateTrackingNumber()) {
                $values_3 = [];
                foreach ($object->getAlternateTrackingNumber() as $value_3) {
                    $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
                }
                $data['alternateTrackingNumber'] = $values_3;
            }
            if ($object->isInitialized('currentStatus') && null !== $object->getCurrentStatus()) {
                $data['currentStatus'] = $this->normalizer->normalize($object->getCurrentStatus(), 'json', $context);
            }
            if ($object->isInitialized('deliveryDate') && null !== $object->getDeliveryDate()) {
                $values_4 = [];
                foreach ($object->getDeliveryDate() as $value_4) {
                    $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
                }
                $data['deliveryDate'] = $values_4;
            }
            if ($object->isInitialized('deliveryInformation') && null !== $object->getDeliveryInformation()) {
                $data['deliveryInformation'] = $this->normalizer->normalize($object->getDeliveryInformation(), 'json', $context);
            }
            if ($object->isInitialized('deliveryTime') && null !== $object->getDeliveryTime()) {
                $data['deliveryTime'] = $this->normalizer->normalize($object->getDeliveryTime(), 'json', $context);
            }
            if ($object->isInitialized('milestones') && null !== $object->getMilestones()) {
                $values_5 = [];
                foreach ($object->getMilestones() as $value_5) {
                    $values_5[] = $this->normalizer->normalize($value_5, 'json', $context);
                }
                $data['milestones'] = $values_5;
            }
            if ($object->isInitialized('packageAddress') && null !== $object->getPackageAddress()) {
                $values_6 = [];
                foreach ($object->getPackageAddress() as $value_6) {
                    $values_6[] = $this->normalizer->normalize($value_6, 'json', $context);
                }
                $data['packageAddress'] = $values_6;
            }
            if ($object->isInitialized('packageCount') && null !== $object->getPackageCount()) {
                $data['packageCount'] = $object->getPackageCount();
            }
            if ($object->isInitialized('paymentInformation') && null !== $object->getPaymentInformation()) {
                $values_7 = [];
                foreach ($object->getPaymentInformation() as $value_7) {
                    $values_7[] = $this->normalizer->normalize($value_7, 'json', $context);
                }
                $data['paymentInformation'] = $values_7;
            }
            if ($object->isInitialized('referenceNumber') && null !== $object->getReferenceNumber()) {
                $values_8 = [];
                foreach ($object->getReferenceNumber() as $value_8) {
                    $values_8[] = $this->normalizer->normalize($value_8, 'json', $context);
                }
                $data['referenceNumber'] = $values_8;
            }
            if ($object->isInitialized('service') && null !== $object->getService()) {
                $data['service'] = $this->normalizer->normalize($object->getService(), 'json', $context);
            }
            if ($object->isInitialized('statusCode') && null !== $object->getStatusCode()) {
                $data['statusCode'] = $object->getStatusCode();
            }
            if ($object->isInitialized('statusDescription') && null !== $object->getStatusDescription()) {
                $data['statusDescription'] = $object->getStatusDescription();
            }
            if ($object->isInitialized('suppressionIndicators') && null !== $object->getSuppressionIndicators()) {
                $values_9 = [];
                foreach ($object->getSuppressionIndicators() as $value_9) {
                    $values_9[] = $value_9;
                }
                $data['suppressionIndicators'] = $values_9;
            }
            if ($object->isInitialized('trackingNumber') && null !== $object->getTrackingNumber()) {
                $data['trackingNumber'] = $object->getTrackingNumber();
            }
            if ($object->isInitialized('weight') && null !== $object->getWeight()) {
                $data['weight'] = $this->normalizer->normalize($object->getWeight(), 'json', $context);
            }
            foreach ($object as $key => $value_10) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_10;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['ShipStream\\Ups\\Api\\Model\\Package' => false];
        }
    }
} else {
    class PackageNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\Package';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\Package';
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
            $object = new \ShipStream\Ups\Api\Model\Package();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('accessPointInformation', $data)) {
                $object->setAccessPointInformation($this->denormalizer->denormalize($data['accessPointInformation'], 'ShipStream\\Ups\\Api\\Model\\AccessPointInformation', 'json', $context));
                unset($data['accessPointInformation']);
            }
            if (\array_key_exists('activity', $data)) {
                $values = [];
                foreach ($data['activity'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'ShipStream\\Ups\\Api\\Model\\Activity', 'json', $context);
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
                    $values_3[] = $this->denormalizer->denormalize($value_3, 'ShipStream\\Ups\\Api\\Model\\AlternateTrackingNumber', 'json', $context);
                }
                $object->setAlternateTrackingNumber($values_3);
                unset($data['alternateTrackingNumber']);
            }
            if (\array_key_exists('currentStatus', $data)) {
                $object->setCurrentStatus($this->denormalizer->denormalize($data['currentStatus'], 'ShipStream\\Ups\\Api\\Model\\Status', 'json', $context));
                unset($data['currentStatus']);
            }
            if (\array_key_exists('deliveryDate', $data)) {
                $values_4 = [];
                foreach ($data['deliveryDate'] as $value_4) {
                    $values_4[] = $this->denormalizer->denormalize($value_4, 'ShipStream\\Ups\\Api\\Model\\DeliveryDate', 'json', $context);
                }
                $object->setDeliveryDate($values_4);
                unset($data['deliveryDate']);
            }
            if (\array_key_exists('deliveryInformation', $data)) {
                $object->setDeliveryInformation($this->denormalizer->denormalize($data['deliveryInformation'], 'ShipStream\\Ups\\Api\\Model\\DeliveryInformation', 'json', $context));
                unset($data['deliveryInformation']);
            }
            if (\array_key_exists('deliveryTime', $data)) {
                $object->setDeliveryTime($this->denormalizer->denormalize($data['deliveryTime'], 'ShipStream\\Ups\\Api\\Model\\DeliveryTime', 'json', $context));
                unset($data['deliveryTime']);
            }
            if (\array_key_exists('milestones', $data)) {
                $values_5 = [];
                foreach ($data['milestones'] as $value_5) {
                    $values_5[] = $this->denormalizer->denormalize($value_5, 'ShipStream\\Ups\\Api\\Model\\Milestones', 'json', $context);
                }
                $object->setMilestones($values_5);
                unset($data['milestones']);
            }
            if (\array_key_exists('packageAddress', $data)) {
                $values_6 = [];
                foreach ($data['packageAddress'] as $value_6) {
                    $values_6[] = $this->denormalizer->denormalize($value_6, 'ShipStream\\Ups\\Api\\Model\\PackageAddress', 'json', $context);
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
                    $values_7[] = $this->denormalizer->denormalize($value_7, 'ShipStream\\Ups\\Api\\Model\\PaymentInformation', 'json', $context);
                }
                $object->setPaymentInformation($values_7);
                unset($data['paymentInformation']);
            }
            if (\array_key_exists('referenceNumber', $data)) {
                $values_8 = [];
                foreach ($data['referenceNumber'] as $value_8) {
                    $values_8[] = $this->denormalizer->denormalize($value_8, 'ShipStream\\Ups\\Api\\Model\\ReferenceNumber', 'json', $context);
                }
                $object->setReferenceNumber($values_8);
                unset($data['referenceNumber']);
            }
            if (\array_key_exists('service', $data)) {
                $object->setService($this->denormalizer->denormalize($data['service'], 'ShipStream\\Ups\\Api\\Model\\Service', 'json', $context));
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
                $object->setWeight($this->denormalizer->denormalize($data['weight'], 'ShipStream\\Ups\\Api\\Model\\Weight', 'json', $context));
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
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('accessPointInformation') && null !== $object->getAccessPointInformation()) {
                $data['accessPointInformation'] = $this->normalizer->normalize($object->getAccessPointInformation(), 'json', $context);
            }
            if ($object->isInitialized('activity') && null !== $object->getActivity()) {
                $values = [];
                foreach ($object->getActivity() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['activity'] = $values;
            }
            if ($object->isInitialized('additionalAttributes') && null !== $object->getAdditionalAttributes()) {
                $values_1 = [];
                foreach ($object->getAdditionalAttributes() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['additionalAttributes'] = $values_1;
            }
            if ($object->isInitialized('additionalServices') && null !== $object->getAdditionalServices()) {
                $values_2 = [];
                foreach ($object->getAdditionalServices() as $value_2) {
                    $values_2[] = $value_2;
                }
                $data['additionalServices'] = $values_2;
            }
            if ($object->isInitialized('alternateTrackingNumber') && null !== $object->getAlternateTrackingNumber()) {
                $values_3 = [];
                foreach ($object->getAlternateTrackingNumber() as $value_3) {
                    $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
                }
                $data['alternateTrackingNumber'] = $values_3;
            }
            if ($object->isInitialized('currentStatus') && null !== $object->getCurrentStatus()) {
                $data['currentStatus'] = $this->normalizer->normalize($object->getCurrentStatus(), 'json', $context);
            }
            if ($object->isInitialized('deliveryDate') && null !== $object->getDeliveryDate()) {
                $values_4 = [];
                foreach ($object->getDeliveryDate() as $value_4) {
                    $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
                }
                $data['deliveryDate'] = $values_4;
            }
            if ($object->isInitialized('deliveryInformation') && null !== $object->getDeliveryInformation()) {
                $data['deliveryInformation'] = $this->normalizer->normalize($object->getDeliveryInformation(), 'json', $context);
            }
            if ($object->isInitialized('deliveryTime') && null !== $object->getDeliveryTime()) {
                $data['deliveryTime'] = $this->normalizer->normalize($object->getDeliveryTime(), 'json', $context);
            }
            if ($object->isInitialized('milestones') && null !== $object->getMilestones()) {
                $values_5 = [];
                foreach ($object->getMilestones() as $value_5) {
                    $values_5[] = $this->normalizer->normalize($value_5, 'json', $context);
                }
                $data['milestones'] = $values_5;
            }
            if ($object->isInitialized('packageAddress') && null !== $object->getPackageAddress()) {
                $values_6 = [];
                foreach ($object->getPackageAddress() as $value_6) {
                    $values_6[] = $this->normalizer->normalize($value_6, 'json', $context);
                }
                $data['packageAddress'] = $values_6;
            }
            if ($object->isInitialized('packageCount') && null !== $object->getPackageCount()) {
                $data['packageCount'] = $object->getPackageCount();
            }
            if ($object->isInitialized('paymentInformation') && null !== $object->getPaymentInformation()) {
                $values_7 = [];
                foreach ($object->getPaymentInformation() as $value_7) {
                    $values_7[] = $this->normalizer->normalize($value_7, 'json', $context);
                }
                $data['paymentInformation'] = $values_7;
            }
            if ($object->isInitialized('referenceNumber') && null !== $object->getReferenceNumber()) {
                $values_8 = [];
                foreach ($object->getReferenceNumber() as $value_8) {
                    $values_8[] = $this->normalizer->normalize($value_8, 'json', $context);
                }
                $data['referenceNumber'] = $values_8;
            }
            if ($object->isInitialized('service') && null !== $object->getService()) {
                $data['service'] = $this->normalizer->normalize($object->getService(), 'json', $context);
            }
            if ($object->isInitialized('statusCode') && null !== $object->getStatusCode()) {
                $data['statusCode'] = $object->getStatusCode();
            }
            if ($object->isInitialized('statusDescription') && null !== $object->getStatusDescription()) {
                $data['statusDescription'] = $object->getStatusDescription();
            }
            if ($object->isInitialized('suppressionIndicators') && null !== $object->getSuppressionIndicators()) {
                $values_9 = [];
                foreach ($object->getSuppressionIndicators() as $value_9) {
                    $values_9[] = $value_9;
                }
                $data['suppressionIndicators'] = $values_9;
            }
            if ($object->isInitialized('trackingNumber') && null !== $object->getTrackingNumber()) {
                $data['trackingNumber'] = $object->getTrackingNumber();
            }
            if ($object->isInitialized('weight') && null !== $object->getWeight()) {
                $data['weight'] = $this->normalizer->normalize($object->getWeight(), 'json', $context);
            }
            foreach ($object as $key => $value_10) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_10;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['ShipStream\\Ups\\Api\\Model\\Package' => false];
        }
    }
}