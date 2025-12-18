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
class PickupCreationRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \ShipStream\Ups\Api\Model\PickupCreationRequest::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \ShipStream\Ups\Api\Model\PickupCreationRequest::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
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
            $object->setRequest($this->denormalizer->denormalize($data['Request'], \ShipStream\Ups\Api\Model\PickupCreationRequestRequest::class, 'json', $context));
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
            $object->setShipper($this->denormalizer->denormalize($data['Shipper'], \ShipStream\Ups\Api\Model\PickupCreationRequestShipper::class, 'json', $context));
            unset($data['Shipper']);
        }
        if (\array_key_exists('PickupDateInfo', $data)) {
            $object->setPickupDateInfo($this->denormalizer->denormalize($data['PickupDateInfo'], \ShipStream\Ups\Api\Model\PickupCreationRequestPickupDateInfo::class, 'json', $context));
            unset($data['PickupDateInfo']);
        }
        if (\array_key_exists('PickupAddress', $data)) {
            $object->setPickupAddress($this->denormalizer->denormalize($data['PickupAddress'], \ShipStream\Ups\Api\Model\PickupCreationRequestPickupAddress::class, 'json', $context));
            unset($data['PickupAddress']);
        }
        if (\array_key_exists('AlternateAddressIndicator', $data)) {
            $object->setAlternateAddressIndicator($data['AlternateAddressIndicator']);
            unset($data['AlternateAddressIndicator']);
        }
        if (\array_key_exists('PickupPiece', $data)) {
            $values = [];
            foreach ($data['PickupPiece'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \ShipStream\Ups\Api\Model\PickupCreationRequestPickupPiece::class, 'json', $context);
            }
            $object->setPickupPiece($values);
            unset($data['PickupPiece']);
        }
        if (\array_key_exists('TotalWeight', $data)) {
            $object->setTotalWeight($this->denormalizer->denormalize($data['TotalWeight'], \ShipStream\Ups\Api\Model\PickupCreationRequestTotalWeight::class, 'json', $context));
            unset($data['TotalWeight']);
        }
        if (\array_key_exists('OverweightIndicator', $data)) {
            $object->setOverweightIndicator($data['OverweightIndicator']);
            unset($data['OverweightIndicator']);
        }
        if (\array_key_exists('TrackingData', $data)) {
            $values_1 = [];
            foreach ($data['TrackingData'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \ShipStream\Ups\Api\Model\PickupCreationRequestTrackingData::class, 'json', $context);
            }
            $object->setTrackingData($values_1);
            unset($data['TrackingData']);
        }
        if (\array_key_exists('TrackingDataWithReferenceNumber', $data)) {
            $object->setTrackingDataWithReferenceNumber($this->denormalizer->denormalize($data['TrackingDataWithReferenceNumber'], \ShipStream\Ups\Api\Model\PickupCreationRequestTrackingDataWithReferenceNumber::class, 'json', $context));
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
            $object->setFreightOptions($this->denormalizer->denormalize($data['FreightOptions'], \ShipStream\Ups\Api\Model\PickupCreationRequestFreightOptions::class, 'json', $context));
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
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['Request'] = $this->normalizer->normalize($data->getRequest(), 'json', $context);
        $dataArray['RatePickupIndicator'] = $data->getRatePickupIndicator();
        if ($data->isInitialized('rateChartType') && null !== $data->getRateChartType()) {
            $dataArray['RateChartType'] = $data->getRateChartType();
        }
        if ($data->isInitialized('taxInformationIndicator') && null !== $data->getTaxInformationIndicator()) {
            $dataArray['TaxInformationIndicator'] = $data->getTaxInformationIndicator();
        }
        if ($data->isInitialized('userLevelDiscountIndicator') && null !== $data->getUserLevelDiscountIndicator()) {
            $dataArray['UserLevelDiscountIndicator'] = $data->getUserLevelDiscountIndicator();
        }
        if ($data->isInitialized('shipper') && null !== $data->getShipper()) {
            $dataArray['Shipper'] = $this->normalizer->normalize($data->getShipper(), 'json', $context);
        }
        $dataArray['PickupDateInfo'] = $this->normalizer->normalize($data->getPickupDateInfo(), 'json', $context);
        $dataArray['PickupAddress'] = $this->normalizer->normalize($data->getPickupAddress(), 'json', $context);
        $dataArray['AlternateAddressIndicator'] = $data->getAlternateAddressIndicator();
        $values = [];
        foreach ($data->getPickupPiece() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $dataArray['PickupPiece'] = $values;
        if ($data->isInitialized('totalWeight') && null !== $data->getTotalWeight()) {
            $dataArray['TotalWeight'] = $this->normalizer->normalize($data->getTotalWeight(), 'json', $context);
        }
        if ($data->isInitialized('overweightIndicator') && null !== $data->getOverweightIndicator()) {
            $dataArray['OverweightIndicator'] = $data->getOverweightIndicator();
        }
        if ($data->isInitialized('trackingData') && null !== $data->getTrackingData()) {
            $values_1 = [];
            foreach ($data->getTrackingData() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['TrackingData'] = $values_1;
        }
        if ($data->isInitialized('trackingDataWithReferenceNumber') && null !== $data->getTrackingDataWithReferenceNumber()) {
            $dataArray['TrackingDataWithReferenceNumber'] = $this->normalizer->normalize($data->getTrackingDataWithReferenceNumber(), 'json', $context);
        }
        $dataArray['PaymentMethod'] = $data->getPaymentMethod();
        if ($data->isInitialized('specialInstruction') && null !== $data->getSpecialInstruction()) {
            $dataArray['SpecialInstruction'] = $data->getSpecialInstruction();
        }
        if ($data->isInitialized('referenceNumber') && null !== $data->getReferenceNumber()) {
            $dataArray['ReferenceNumber'] = $data->getReferenceNumber();
        }
        if ($data->isInitialized('freightOptions') && null !== $data->getFreightOptions()) {
            $dataArray['FreightOptions'] = $this->normalizer->normalize($data->getFreightOptions(), 'json', $context);
        }
        if ($data->isInitialized('serviceCategory') && null !== $data->getServiceCategory()) {
            $dataArray['ServiceCategory'] = $data->getServiceCategory();
        }
        if ($data->isInitialized('cashType') && null !== $data->getCashType()) {
            $dataArray['CashType'] = $data->getCashType();
        }
        if ($data->isInitialized('shippingLabelsAvailable') && null !== $data->getShippingLabelsAvailable()) {
            $dataArray['ShippingLabelsAvailable'] = $data->getShippingLabelsAvailable();
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
        return [\ShipStream\Ups\Api\Model\PickupCreationRequest::class => false];
    }
}