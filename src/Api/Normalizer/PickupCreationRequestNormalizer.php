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
    class PickupCreationRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\PickupCreationRequest';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\PickupCreationRequest';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \ShipStream\Ups\Api\Model\PickupCreationRequest();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Request', $data)) {
                $object->setRequest($this->denormalizer->denormalize($data['Request'], 'ShipStream\\Ups\\Api\\Model\\PickupCreationRequestRequest', 'json', $context));
                unset($data['Request']);
            }
            if (\array_key_exists('RatePickupIndicator', $data)) {
                $object->setRatePickupIndicator($data['RatePickupIndicator']);
                unset($data['RatePickupIndicator']);
            }
            if (\array_key_exists('RateChartType', $data)) {
                $object->setRateChartType($data['RateChartType']);
                unset($data['RateChartType']);
            }
            if (\array_key_exists('TaxInformationIndicator', $data)) {
                $object->setTaxInformationIndicator($data['TaxInformationIndicator']);
                unset($data['TaxInformationIndicator']);
            }
            if (\array_key_exists('UserLevelDiscountIndicator', $data)) {
                $object->setUserLevelDiscountIndicator($data['UserLevelDiscountIndicator']);
                unset($data['UserLevelDiscountIndicator']);
            }
            if (\array_key_exists('Shipper', $data)) {
                $object->setShipper($this->denormalizer->denormalize($data['Shipper'], 'ShipStream\\Ups\\Api\\Model\\PickupCreationRequestShipper', 'json', $context));
                unset($data['Shipper']);
            }
            if (\array_key_exists('PickupDateInfo', $data)) {
                $object->setPickupDateInfo($this->denormalizer->denormalize($data['PickupDateInfo'], 'ShipStream\\Ups\\Api\\Model\\PickupCreationRequestPickupDateInfo', 'json', $context));
                unset($data['PickupDateInfo']);
            }
            if (\array_key_exists('PickupAddress', $data)) {
                $object->setPickupAddress($this->denormalizer->denormalize($data['PickupAddress'], 'ShipStream\\Ups\\Api\\Model\\PickupCreationRequestPickupAddress', 'json', $context));
                unset($data['PickupAddress']);
            }
            if (\array_key_exists('AlternateAddressIndicator', $data)) {
                $object->setAlternateAddressIndicator($data['AlternateAddressIndicator']);
                unset($data['AlternateAddressIndicator']);
            }
            if (\array_key_exists('PickupPiece', $data)) {
                $values = [];
                foreach ($data['PickupPiece'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'ShipStream\\Ups\\Api\\Model\\PickupCreationRequestPickupPiece', 'json', $context);
                }
                $object->setPickupPiece($values);
                unset($data['PickupPiece']);
            }
            if (\array_key_exists('TotalWeight', $data)) {
                $object->setTotalWeight($this->denormalizer->denormalize($data['TotalWeight'], 'ShipStream\\Ups\\Api\\Model\\PickupCreationRequestTotalWeight', 'json', $context));
                unset($data['TotalWeight']);
            }
            if (\array_key_exists('OverweightIndicator', $data)) {
                $object->setOverweightIndicator($data['OverweightIndicator']);
                unset($data['OverweightIndicator']);
            }
            if (\array_key_exists('TrackingData', $data)) {
                $values_1 = [];
                foreach ($data['TrackingData'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'ShipStream\\Ups\\Api\\Model\\PickupCreationRequestTrackingData', 'json', $context);
                }
                $object->setTrackingData($values_1);
                unset($data['TrackingData']);
            }
            if (\array_key_exists('TrackingDataWithReferenceNumber', $data)) {
                $object->setTrackingDataWithReferenceNumber($this->denormalizer->denormalize($data['TrackingDataWithReferenceNumber'], 'ShipStream\\Ups\\Api\\Model\\PickupCreationRequestTrackingDataWithReferenceNumber', 'json', $context));
                unset($data['TrackingDataWithReferenceNumber']);
            }
            if (\array_key_exists('PaymentMethod', $data)) {
                $object->setPaymentMethod($data['PaymentMethod']);
                unset($data['PaymentMethod']);
            }
            if (\array_key_exists('SpecialInstruction', $data)) {
                $object->setSpecialInstruction($data['SpecialInstruction']);
                unset($data['SpecialInstruction']);
            }
            if (\array_key_exists('ReferenceNumber', $data)) {
                $object->setReferenceNumber($data['ReferenceNumber']);
                unset($data['ReferenceNumber']);
            }
            if (\array_key_exists('FreightOptions', $data)) {
                $object->setFreightOptions($this->denormalizer->denormalize($data['FreightOptions'], 'ShipStream\\Ups\\Api\\Model\\PickupCreationRequestFreightOptions', 'json', $context));
                unset($data['FreightOptions']);
            }
            if (\array_key_exists('ServiceCategory', $data)) {
                $object->setServiceCategory($data['ServiceCategory']);
                unset($data['ServiceCategory']);
            }
            if (\array_key_exists('CashType', $data)) {
                $object->setCashType($data['CashType']);
                unset($data['CashType']);
            }
            if (\array_key_exists('ShippingLabelsAvailable', $data)) {
                $object->setShippingLabelsAvailable($data['ShippingLabelsAvailable']);
                unset($data['ShippingLabelsAvailable']);
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
            $data['Request'] = $this->normalizer->normalize($object->getRequest(), 'json', $context);
            $data['RatePickupIndicator'] = $object->getRatePickupIndicator();
            if ($object->isInitialized('rateChartType') && null !== $object->getRateChartType()) {
                $data['RateChartType'] = $object->getRateChartType();
            }
            if ($object->isInitialized('taxInformationIndicator') && null !== $object->getTaxInformationIndicator()) {
                $data['TaxInformationIndicator'] = $object->getTaxInformationIndicator();
            }
            if ($object->isInitialized('userLevelDiscountIndicator') && null !== $object->getUserLevelDiscountIndicator()) {
                $data['UserLevelDiscountIndicator'] = $object->getUserLevelDiscountIndicator();
            }
            if ($object->isInitialized('shipper') && null !== $object->getShipper()) {
                $data['Shipper'] = $this->normalizer->normalize($object->getShipper(), 'json', $context);
            }
            $data['PickupDateInfo'] = $this->normalizer->normalize($object->getPickupDateInfo(), 'json', $context);
            $data['PickupAddress'] = $this->normalizer->normalize($object->getPickupAddress(), 'json', $context);
            $data['AlternateAddressIndicator'] = $object->getAlternateAddressIndicator();
            $values = [];
            foreach ($object->getPickupPiece() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['PickupPiece'] = $values;
            if ($object->isInitialized('totalWeight') && null !== $object->getTotalWeight()) {
                $data['TotalWeight'] = $this->normalizer->normalize($object->getTotalWeight(), 'json', $context);
            }
            if ($object->isInitialized('overweightIndicator') && null !== $object->getOverweightIndicator()) {
                $data['OverweightIndicator'] = $object->getOverweightIndicator();
            }
            if ($object->isInitialized('trackingData') && null !== $object->getTrackingData()) {
                $values_1 = [];
                foreach ($object->getTrackingData() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['TrackingData'] = $values_1;
            }
            if ($object->isInitialized('trackingDataWithReferenceNumber') && null !== $object->getTrackingDataWithReferenceNumber()) {
                $data['TrackingDataWithReferenceNumber'] = $this->normalizer->normalize($object->getTrackingDataWithReferenceNumber(), 'json', $context);
            }
            $data['PaymentMethod'] = $object->getPaymentMethod();
            if ($object->isInitialized('specialInstruction') && null !== $object->getSpecialInstruction()) {
                $data['SpecialInstruction'] = $object->getSpecialInstruction();
            }
            if ($object->isInitialized('referenceNumber') && null !== $object->getReferenceNumber()) {
                $data['ReferenceNumber'] = $object->getReferenceNumber();
            }
            if ($object->isInitialized('freightOptions') && null !== $object->getFreightOptions()) {
                $data['FreightOptions'] = $this->normalizer->normalize($object->getFreightOptions(), 'json', $context);
            }
            if ($object->isInitialized('serviceCategory') && null !== $object->getServiceCategory()) {
                $data['ServiceCategory'] = $object->getServiceCategory();
            }
            if ($object->isInitialized('cashType') && null !== $object->getCashType()) {
                $data['CashType'] = $object->getCashType();
            }
            if ($object->isInitialized('shippingLabelsAvailable') && null !== $object->getShippingLabelsAvailable()) {
                $data['ShippingLabelsAvailable'] = $object->getShippingLabelsAvailable();
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
            return ['ShipStream\\Ups\\Api\\Model\\PickupCreationRequest' => false];
        }
    }
} else {
    class PickupCreationRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\PickupCreationRequest';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\PickupCreationRequest';
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
            $object = new \ShipStream\Ups\Api\Model\PickupCreationRequest();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Request', $data)) {
                $object->setRequest($this->denormalizer->denormalize($data['Request'], 'ShipStream\\Ups\\Api\\Model\\PickupCreationRequestRequest', 'json', $context));
                unset($data['Request']);
            }
            if (\array_key_exists('RatePickupIndicator', $data)) {
                $object->setRatePickupIndicator($data['RatePickupIndicator']);
                unset($data['RatePickupIndicator']);
            }
            if (\array_key_exists('RateChartType', $data)) {
                $object->setRateChartType($data['RateChartType']);
                unset($data['RateChartType']);
            }
            if (\array_key_exists('TaxInformationIndicator', $data)) {
                $object->setTaxInformationIndicator($data['TaxInformationIndicator']);
                unset($data['TaxInformationIndicator']);
            }
            if (\array_key_exists('UserLevelDiscountIndicator', $data)) {
                $object->setUserLevelDiscountIndicator($data['UserLevelDiscountIndicator']);
                unset($data['UserLevelDiscountIndicator']);
            }
            if (\array_key_exists('Shipper', $data)) {
                $object->setShipper($this->denormalizer->denormalize($data['Shipper'], 'ShipStream\\Ups\\Api\\Model\\PickupCreationRequestShipper', 'json', $context));
                unset($data['Shipper']);
            }
            if (\array_key_exists('PickupDateInfo', $data)) {
                $object->setPickupDateInfo($this->denormalizer->denormalize($data['PickupDateInfo'], 'ShipStream\\Ups\\Api\\Model\\PickupCreationRequestPickupDateInfo', 'json', $context));
                unset($data['PickupDateInfo']);
            }
            if (\array_key_exists('PickupAddress', $data)) {
                $object->setPickupAddress($this->denormalizer->denormalize($data['PickupAddress'], 'ShipStream\\Ups\\Api\\Model\\PickupCreationRequestPickupAddress', 'json', $context));
                unset($data['PickupAddress']);
            }
            if (\array_key_exists('AlternateAddressIndicator', $data)) {
                $object->setAlternateAddressIndicator($data['AlternateAddressIndicator']);
                unset($data['AlternateAddressIndicator']);
            }
            if (\array_key_exists('PickupPiece', $data)) {
                $values = [];
                foreach ($data['PickupPiece'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'ShipStream\\Ups\\Api\\Model\\PickupCreationRequestPickupPiece', 'json', $context);
                }
                $object->setPickupPiece($values);
                unset($data['PickupPiece']);
            }
            if (\array_key_exists('TotalWeight', $data)) {
                $object->setTotalWeight($this->denormalizer->denormalize($data['TotalWeight'], 'ShipStream\\Ups\\Api\\Model\\PickupCreationRequestTotalWeight', 'json', $context));
                unset($data['TotalWeight']);
            }
            if (\array_key_exists('OverweightIndicator', $data)) {
                $object->setOverweightIndicator($data['OverweightIndicator']);
                unset($data['OverweightIndicator']);
            }
            if (\array_key_exists('TrackingData', $data)) {
                $values_1 = [];
                foreach ($data['TrackingData'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'ShipStream\\Ups\\Api\\Model\\PickupCreationRequestTrackingData', 'json', $context);
                }
                $object->setTrackingData($values_1);
                unset($data['TrackingData']);
            }
            if (\array_key_exists('TrackingDataWithReferenceNumber', $data)) {
                $object->setTrackingDataWithReferenceNumber($this->denormalizer->denormalize($data['TrackingDataWithReferenceNumber'], 'ShipStream\\Ups\\Api\\Model\\PickupCreationRequestTrackingDataWithReferenceNumber', 'json', $context));
                unset($data['TrackingDataWithReferenceNumber']);
            }
            if (\array_key_exists('PaymentMethod', $data)) {
                $object->setPaymentMethod($data['PaymentMethod']);
                unset($data['PaymentMethod']);
            }
            if (\array_key_exists('SpecialInstruction', $data)) {
                $object->setSpecialInstruction($data['SpecialInstruction']);
                unset($data['SpecialInstruction']);
            }
            if (\array_key_exists('ReferenceNumber', $data)) {
                $object->setReferenceNumber($data['ReferenceNumber']);
                unset($data['ReferenceNumber']);
            }
            if (\array_key_exists('FreightOptions', $data)) {
                $object->setFreightOptions($this->denormalizer->denormalize($data['FreightOptions'], 'ShipStream\\Ups\\Api\\Model\\PickupCreationRequestFreightOptions', 'json', $context));
                unset($data['FreightOptions']);
            }
            if (\array_key_exists('ServiceCategory', $data)) {
                $object->setServiceCategory($data['ServiceCategory']);
                unset($data['ServiceCategory']);
            }
            if (\array_key_exists('CashType', $data)) {
                $object->setCashType($data['CashType']);
                unset($data['CashType']);
            }
            if (\array_key_exists('ShippingLabelsAvailable', $data)) {
                $object->setShippingLabelsAvailable($data['ShippingLabelsAvailable']);
                unset($data['ShippingLabelsAvailable']);
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
            $data['Request'] = $this->normalizer->normalize($object->getRequest(), 'json', $context);
            $data['RatePickupIndicator'] = $object->getRatePickupIndicator();
            if ($object->isInitialized('rateChartType') && null !== $object->getRateChartType()) {
                $data['RateChartType'] = $object->getRateChartType();
            }
            if ($object->isInitialized('taxInformationIndicator') && null !== $object->getTaxInformationIndicator()) {
                $data['TaxInformationIndicator'] = $object->getTaxInformationIndicator();
            }
            if ($object->isInitialized('userLevelDiscountIndicator') && null !== $object->getUserLevelDiscountIndicator()) {
                $data['UserLevelDiscountIndicator'] = $object->getUserLevelDiscountIndicator();
            }
            if ($object->isInitialized('shipper') && null !== $object->getShipper()) {
                $data['Shipper'] = $this->normalizer->normalize($object->getShipper(), 'json', $context);
            }
            $data['PickupDateInfo'] = $this->normalizer->normalize($object->getPickupDateInfo(), 'json', $context);
            $data['PickupAddress'] = $this->normalizer->normalize($object->getPickupAddress(), 'json', $context);
            $data['AlternateAddressIndicator'] = $object->getAlternateAddressIndicator();
            $values = [];
            foreach ($object->getPickupPiece() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['PickupPiece'] = $values;
            if ($object->isInitialized('totalWeight') && null !== $object->getTotalWeight()) {
                $data['TotalWeight'] = $this->normalizer->normalize($object->getTotalWeight(), 'json', $context);
            }
            if ($object->isInitialized('overweightIndicator') && null !== $object->getOverweightIndicator()) {
                $data['OverweightIndicator'] = $object->getOverweightIndicator();
            }
            if ($object->isInitialized('trackingData') && null !== $object->getTrackingData()) {
                $values_1 = [];
                foreach ($object->getTrackingData() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['TrackingData'] = $values_1;
            }
            if ($object->isInitialized('trackingDataWithReferenceNumber') && null !== $object->getTrackingDataWithReferenceNumber()) {
                $data['TrackingDataWithReferenceNumber'] = $this->normalizer->normalize($object->getTrackingDataWithReferenceNumber(), 'json', $context);
            }
            $data['PaymentMethod'] = $object->getPaymentMethod();
            if ($object->isInitialized('specialInstruction') && null !== $object->getSpecialInstruction()) {
                $data['SpecialInstruction'] = $object->getSpecialInstruction();
            }
            if ($object->isInitialized('referenceNumber') && null !== $object->getReferenceNumber()) {
                $data['ReferenceNumber'] = $object->getReferenceNumber();
            }
            if ($object->isInitialized('freightOptions') && null !== $object->getFreightOptions()) {
                $data['FreightOptions'] = $this->normalizer->normalize($object->getFreightOptions(), 'json', $context);
            }
            if ($object->isInitialized('serviceCategory') && null !== $object->getServiceCategory()) {
                $data['ServiceCategory'] = $object->getServiceCategory();
            }
            if ($object->isInitialized('cashType') && null !== $object->getCashType()) {
                $data['CashType'] = $object->getCashType();
            }
            if ($object->isInitialized('shippingLabelsAvailable') && null !== $object->getShippingLabelsAvailable()) {
                $data['ShippingLabelsAvailable'] = $object->getShippingLabelsAvailable();
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
            return ['ShipStream\\Ups\\Api\\Model\\PickupCreationRequest' => false];
        }
    }
}