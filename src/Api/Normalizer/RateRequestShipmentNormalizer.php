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
class RateRequestShipmentNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \ShipStream\Ups\Api\Model\RateRequestShipment::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \ShipStream\Ups\Api\Model\RateRequestShipment::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \ShipStream\Ups\Api\Model\RateRequestShipment();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('OriginRecordTransactionTimestamp', $data)) {
            $object->setOriginRecordTransactionTimestamp($data['OriginRecordTransactionTimestamp']);
            unset($data['OriginRecordTransactionTimestamp']);
        }
        if (\array_key_exists('Shipper', $data)) {
            $object->setShipper($this->denormalizer->denormalize($data['Shipper'], \ShipStream\Ups\Api\Model\RateShipmentShipper::class, 'json', $context));
            unset($data['Shipper']);
        }
        if (\array_key_exists('ShipTo', $data)) {
            $object->setShipTo($this->denormalizer->denormalize($data['ShipTo'], \ShipStream\Ups\Api\Model\RateShipmentShipTo::class, 'json', $context));
            unset($data['ShipTo']);
        }
        if (\array_key_exists('ShipFrom', $data)) {
            $object->setShipFrom($this->denormalizer->denormalize($data['ShipFrom'], \ShipStream\Ups\Api\Model\RateShipmentShipFrom::class, 'json', $context));
            unset($data['ShipFrom']);
        }
        if (\array_key_exists('AlternateDeliveryAddress', $data)) {
            $object->setAlternateDeliveryAddress($this->denormalizer->denormalize($data['AlternateDeliveryAddress'], \ShipStream\Ups\Api\Model\RateShipmentAlternateDeliveryAddress::class, 'json', $context));
            unset($data['AlternateDeliveryAddress']);
        }
        if (\array_key_exists('ShipmentIndicationType', $data)) {
            $values = [];
            foreach ($data['ShipmentIndicationType'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \ShipStream\Ups\Api\Model\ShipmentShipmentIndicationType::class, 'json', $context);
            }
            $object->setShipmentIndicationType($values);
            unset($data['ShipmentIndicationType']);
        }
        if (\array_key_exists('PaymentDetails', $data)) {
            $object->setPaymentDetails($this->denormalizer->denormalize($data['PaymentDetails'], \ShipStream\Ups\Api\Model\ShipmentPaymentDetails::class, 'json', $context));
            unset($data['PaymentDetails']);
        }
        if (\array_key_exists('FRSPaymentInformation', $data)) {
            $object->setFRSPaymentInformation($this->denormalizer->denormalize($data['FRSPaymentInformation'], \ShipStream\Ups\Api\Model\RateShipmentFRSPaymentInformation::class, 'json', $context));
            unset($data['FRSPaymentInformation']);
        }
        if (\array_key_exists('FreightShipmentInformation', $data)) {
            $object->setFreightShipmentInformation($this->denormalizer->denormalize($data['FreightShipmentInformation'], \ShipStream\Ups\Api\Model\ShipmentFreightShipmentInformation::class, 'json', $context));
            unset($data['FreightShipmentInformation']);
        }
        if (\array_key_exists('GoodsNotInFreeCirculationIndicator', $data)) {
            $object->setGoodsNotInFreeCirculationIndicator($data['GoodsNotInFreeCirculationIndicator']);
            unset($data['GoodsNotInFreeCirculationIndicator']);
        }
        if (\array_key_exists('Service', $data)) {
            $object->setService($this->denormalizer->denormalize($data['Service'], \ShipStream\Ups\Api\Model\ShipmentService::class, 'json', $context));
            unset($data['Service']);
        }
        if (\array_key_exists('NumOfPieces', $data)) {
            $object->setNumOfPieces($data['NumOfPieces']);
            unset($data['NumOfPieces']);
        }
        if (\array_key_exists('ShipmentTotalWeight', $data)) {
            $object->setShipmentTotalWeight($this->denormalizer->denormalize($data['ShipmentTotalWeight'], \ShipStream\Ups\Api\Model\ShipmentShipmentTotalWeight::class, 'json', $context));
            unset($data['ShipmentTotalWeight']);
        }
        if (\array_key_exists('DocumentsOnlyIndicator', $data)) {
            $object->setDocumentsOnlyIndicator($data['DocumentsOnlyIndicator']);
            unset($data['DocumentsOnlyIndicator']);
        }
        if (\array_key_exists('Package', $data)) {
            $values_1 = [];
            foreach ($data['Package'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \ShipStream\Ups\Api\Model\RateShipmentPackage::class, 'json', $context);
            }
            $object->setPackage($values_1);
            unset($data['Package']);
        }
        if (\array_key_exists('ShipmentServiceOptions', $data)) {
            $object->setShipmentServiceOptions($this->denormalizer->denormalize($data['ShipmentServiceOptions'], \ShipStream\Ups\Api\Model\RateShipmentShipmentServiceOptions::class, 'json', $context));
            unset($data['ShipmentServiceOptions']);
        }
        if (\array_key_exists('ShipmentRatingOptions', $data)) {
            $object->setShipmentRatingOptions($this->denormalizer->denormalize($data['ShipmentRatingOptions'], \ShipStream\Ups\Api\Model\ShipmentShipmentRatingOptions::class, 'json', $context));
            unset($data['ShipmentRatingOptions']);
        }
        if (\array_key_exists('InvoiceLineTotal', $data)) {
            $object->setInvoiceLineTotal($this->denormalizer->denormalize($data['InvoiceLineTotal'], \ShipStream\Ups\Api\Model\ShipmentInvoiceLineTotal::class, 'json', $context));
            unset($data['InvoiceLineTotal']);
        }
        if (\array_key_exists('RatingMethodRequestedIndicator', $data)) {
            $object->setRatingMethodRequestedIndicator($data['RatingMethodRequestedIndicator']);
            unset($data['RatingMethodRequestedIndicator']);
        }
        if (\array_key_exists('TaxInformationIndicator', $data)) {
            $object->setTaxInformationIndicator($data['TaxInformationIndicator']);
            unset($data['TaxInformationIndicator']);
        }
        if (\array_key_exists('PromotionalDiscountInformation', $data)) {
            $object->setPromotionalDiscountInformation($this->denormalizer->denormalize($data['PromotionalDiscountInformation'], \ShipStream\Ups\Api\Model\ShipmentPromotionalDiscountInformation::class, 'json', $context));
            unset($data['PromotionalDiscountInformation']);
        }
        if (\array_key_exists('DeliveryTimeInformation', $data)) {
            $object->setDeliveryTimeInformation($this->denormalizer->denormalize($data['DeliveryTimeInformation'], \ShipStream\Ups\Api\Model\ShipmentDeliveryTimeInformation::class, 'json', $context));
            unset($data['DeliveryTimeInformation']);
        }
        if (\array_key_exists('MasterCartonIndicator', $data)) {
            $object->setMasterCartonIndicator($data['MasterCartonIndicator']);
            unset($data['MasterCartonIndicator']);
        }
        if (\array_key_exists('WWEShipmentIndicator', $data)) {
            $object->setWWEShipmentIndicator($data['WWEShipmentIndicator']);
            unset($data['WWEShipmentIndicator']);
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
        if ($data->isInitialized('originRecordTransactionTimestamp') && null !== $data->getOriginRecordTransactionTimestamp()) {
            $dataArray['OriginRecordTransactionTimestamp'] = $data->getOriginRecordTransactionTimestamp();
        }
        $dataArray['Shipper'] = $this->normalizer->normalize($data->getShipper(), 'json', $context);
        $dataArray['ShipTo'] = $this->normalizer->normalize($data->getShipTo(), 'json', $context);
        if ($data->isInitialized('shipFrom') && null !== $data->getShipFrom()) {
            $dataArray['ShipFrom'] = $this->normalizer->normalize($data->getShipFrom(), 'json', $context);
        }
        if ($data->isInitialized('alternateDeliveryAddress') && null !== $data->getAlternateDeliveryAddress()) {
            $dataArray['AlternateDeliveryAddress'] = $this->normalizer->normalize($data->getAlternateDeliveryAddress(), 'json', $context);
        }
        if ($data->isInitialized('shipmentIndicationType') && null !== $data->getShipmentIndicationType()) {
            $values = [];
            foreach ($data->getShipmentIndicationType() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['ShipmentIndicationType'] = $values;
        }
        if ($data->isInitialized('paymentDetails') && null !== $data->getPaymentDetails()) {
            $dataArray['PaymentDetails'] = $this->normalizer->normalize($data->getPaymentDetails(), 'json', $context);
        }
        if ($data->isInitialized('fRSPaymentInformation') && null !== $data->getFRSPaymentInformation()) {
            $dataArray['FRSPaymentInformation'] = $this->normalizer->normalize($data->getFRSPaymentInformation(), 'json', $context);
        }
        if ($data->isInitialized('freightShipmentInformation') && null !== $data->getFreightShipmentInformation()) {
            $dataArray['FreightShipmentInformation'] = $this->normalizer->normalize($data->getFreightShipmentInformation(), 'json', $context);
        }
        if ($data->isInitialized('goodsNotInFreeCirculationIndicator') && null !== $data->getGoodsNotInFreeCirculationIndicator()) {
            $dataArray['GoodsNotInFreeCirculationIndicator'] = $data->getGoodsNotInFreeCirculationIndicator();
        }
        if ($data->isInitialized('service') && null !== $data->getService()) {
            $dataArray['Service'] = $this->normalizer->normalize($data->getService(), 'json', $context);
        }
        if ($data->isInitialized('numOfPieces') && null !== $data->getNumOfPieces()) {
            $dataArray['NumOfPieces'] = $data->getNumOfPieces();
        }
        if ($data->isInitialized('shipmentTotalWeight') && null !== $data->getShipmentTotalWeight()) {
            $dataArray['ShipmentTotalWeight'] = $this->normalizer->normalize($data->getShipmentTotalWeight(), 'json', $context);
        }
        if ($data->isInitialized('documentsOnlyIndicator') && null !== $data->getDocumentsOnlyIndicator()) {
            $dataArray['DocumentsOnlyIndicator'] = $data->getDocumentsOnlyIndicator();
        }
        $values_1 = [];
        foreach ($data->getPackage() as $value_1) {
            $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
        }
        $dataArray['Package'] = $values_1;
        if ($data->isInitialized('shipmentServiceOptions') && null !== $data->getShipmentServiceOptions()) {
            $dataArray['ShipmentServiceOptions'] = $this->normalizer->normalize($data->getShipmentServiceOptions(), 'json', $context);
        }
        if ($data->isInitialized('shipmentRatingOptions') && null !== $data->getShipmentRatingOptions()) {
            $dataArray['ShipmentRatingOptions'] = $this->normalizer->normalize($data->getShipmentRatingOptions(), 'json', $context);
        }
        if ($data->isInitialized('invoiceLineTotal') && null !== $data->getInvoiceLineTotal()) {
            $dataArray['InvoiceLineTotal'] = $this->normalizer->normalize($data->getInvoiceLineTotal(), 'json', $context);
        }
        if ($data->isInitialized('ratingMethodRequestedIndicator') && null !== $data->getRatingMethodRequestedIndicator()) {
            $dataArray['RatingMethodRequestedIndicator'] = $data->getRatingMethodRequestedIndicator();
        }
        if ($data->isInitialized('taxInformationIndicator') && null !== $data->getTaxInformationIndicator()) {
            $dataArray['TaxInformationIndicator'] = $data->getTaxInformationIndicator();
        }
        if ($data->isInitialized('promotionalDiscountInformation') && null !== $data->getPromotionalDiscountInformation()) {
            $dataArray['PromotionalDiscountInformation'] = $this->normalizer->normalize($data->getPromotionalDiscountInformation(), 'json', $context);
        }
        if ($data->isInitialized('deliveryTimeInformation') && null !== $data->getDeliveryTimeInformation()) {
            $dataArray['DeliveryTimeInformation'] = $this->normalizer->normalize($data->getDeliveryTimeInformation(), 'json', $context);
        }
        if ($data->isInitialized('masterCartonIndicator') && null !== $data->getMasterCartonIndicator()) {
            $dataArray['MasterCartonIndicator'] = $data->getMasterCartonIndicator();
        }
        if ($data->isInitialized('wWEShipmentIndicator') && null !== $data->getWWEShipmentIndicator()) {
            $dataArray['WWEShipmentIndicator'] = $data->getWWEShipmentIndicator();
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
        return [\ShipStream\Ups\Api\Model\RateRequestShipment::class => false];
    }
}