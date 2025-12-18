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
class ShipmentRequestShipmentNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \ShipStream\Ups\Api\Model\ShipmentRequestShipment::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \ShipStream\Ups\Api\Model\ShipmentRequestShipment::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \ShipStream\Ups\Api\Model\ShipmentRequestShipment();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('Description', $data)) {
            $object->setDescription($data['Description']);
            unset($data['Description']);
        }
        if (\array_key_exists('ReturnService', $data)) {
            $object->setReturnService($this->denormalizer->denormalize($data['ReturnService'], \ShipStream\Ups\Api\Model\ShipmentReturnService::class, 'json', $context));
            unset($data['ReturnService']);
        }
        if (\array_key_exists('DocumentsOnlyIndicator', $data)) {
            $object->setDocumentsOnlyIndicator($data['DocumentsOnlyIndicator']);
            unset($data['DocumentsOnlyIndicator']);
        }
        if (\array_key_exists('Shipper', $data)) {
            $object->setShipper($this->denormalizer->denormalize($data['Shipper'], \ShipStream\Ups\Api\Model\ShipmentShipper::class, 'json', $context));
            unset($data['Shipper']);
        }
        if (\array_key_exists('ShipTo', $data)) {
            $object->setShipTo($this->denormalizer->denormalize($data['ShipTo'], \ShipStream\Ups\Api\Model\ShipmentShipTo::class, 'json', $context));
            unset($data['ShipTo']);
        }
        if (\array_key_exists('AlternateDeliveryAddress', $data)) {
            $object->setAlternateDeliveryAddress($this->denormalizer->denormalize($data['AlternateDeliveryAddress'], \ShipStream\Ups\Api\Model\ShipmentAlternateDeliveryAddress::class, 'json', $context));
            unset($data['AlternateDeliveryAddress']);
        }
        if (\array_key_exists('ShipFrom', $data)) {
            $object->setShipFrom($this->denormalizer->denormalize($data['ShipFrom'], \ShipStream\Ups\Api\Model\ShipmentShipFrom::class, 'json', $context));
            unset($data['ShipFrom']);
        }
        if (\array_key_exists('PaymentInformation', $data)) {
            $object->setPaymentInformation($this->denormalizer->denormalize($data['PaymentInformation'], \ShipStream\Ups\Api\Model\ShipmentPaymentInformation::class, 'json', $context));
            unset($data['PaymentInformation']);
        }
        if (\array_key_exists('FRSPaymentInformation', $data)) {
            $object->setFRSPaymentInformation($this->denormalizer->denormalize($data['FRSPaymentInformation'], \ShipStream\Ups\Api\Model\ShipmentFRSPaymentInformation::class, 'json', $context));
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
        if (\array_key_exists('PromotionalDiscountInformation', $data)) {
            $object->setPromotionalDiscountInformation($this->denormalizer->denormalize($data['PromotionalDiscountInformation'], \ShipStream\Ups\Api\Model\ShipmentPromotionalDiscountInformation::class, 'json', $context));
            unset($data['PromotionalDiscountInformation']);
        }
        if (\array_key_exists('DGSignatoryInfo', $data)) {
            $object->setDGSignatoryInfo($this->denormalizer->denormalize($data['DGSignatoryInfo'], \ShipStream\Ups\Api\Model\ShipmentDGSignatoryInfo::class, 'json', $context));
            unset($data['DGSignatoryInfo']);
        }
        if (\array_key_exists('ShipmentRatingOptions', $data)) {
            $object->setShipmentRatingOptions($this->denormalizer->denormalize($data['ShipmentRatingOptions'], \ShipStream\Ups\Api\Model\ShipmentShipmentRatingOptions::class, 'json', $context));
            unset($data['ShipmentRatingOptions']);
        }
        if (\array_key_exists('MovementReferenceNumber', $data)) {
            $object->setMovementReferenceNumber($data['MovementReferenceNumber']);
            unset($data['MovementReferenceNumber']);
        }
        if (\array_key_exists('ReferenceNumber', $data)) {
            $values = [];
            foreach ($data['ReferenceNumber'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \ShipStream\Ups\Api\Model\ShipmentReferenceNumber::class, 'json', $context);
            }
            $object->setReferenceNumber($values);
            unset($data['ReferenceNumber']);
        }
        if (\array_key_exists('Service', $data)) {
            $object->setService($this->denormalizer->denormalize($data['Service'], \ShipStream\Ups\Api\Model\ShipmentService::class, 'json', $context));
            unset($data['Service']);
        }
        if (\array_key_exists('InvoiceLineTotal', $data)) {
            $object->setInvoiceLineTotal($this->denormalizer->denormalize($data['InvoiceLineTotal'], \ShipStream\Ups\Api\Model\ShipmentInvoiceLineTotal::class, 'json', $context));
            unset($data['InvoiceLineTotal']);
        }
        if (\array_key_exists('NumOfPiecesInShipment', $data)) {
            $object->setNumOfPiecesInShipment($data['NumOfPiecesInShipment']);
            unset($data['NumOfPiecesInShipment']);
        }
        if (\array_key_exists('USPSEndorsement', $data)) {
            $object->setUSPSEndorsement($data['USPSEndorsement']);
            unset($data['USPSEndorsement']);
        }
        if (\array_key_exists('MILabelCN22Indicator', $data)) {
            $object->setMILabelCN22Indicator($data['MILabelCN22Indicator']);
            unset($data['MILabelCN22Indicator']);
        }
        if (\array_key_exists('SubClassification', $data)) {
            $object->setSubClassification($data['SubClassification']);
            unset($data['SubClassification']);
        }
        if (\array_key_exists('CostCenter', $data)) {
            $object->setCostCenter($data['CostCenter']);
            unset($data['CostCenter']);
        }
        if (\array_key_exists('CostCenterBarcodeIndicator', $data)) {
            $object->setCostCenterBarcodeIndicator($data['CostCenterBarcodeIndicator']);
            unset($data['CostCenterBarcodeIndicator']);
        }
        if (\array_key_exists('PackageID', $data)) {
            $object->setPackageID($data['PackageID']);
            unset($data['PackageID']);
        }
        if (\array_key_exists('PackageIDBarcodeIndicator', $data)) {
            $object->setPackageIDBarcodeIndicator($data['PackageIDBarcodeIndicator']);
            unset($data['PackageIDBarcodeIndicator']);
        }
        if (\array_key_exists('IrregularIndicator', $data)) {
            $object->setIrregularIndicator($data['IrregularIndicator']);
            unset($data['IrregularIndicator']);
        }
        if (\array_key_exists('ShipmentIndicationType', $data)) {
            $values_1 = [];
            foreach ($data['ShipmentIndicationType'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \ShipStream\Ups\Api\Model\ShipmentShipmentIndicationType::class, 'json', $context);
            }
            $object->setShipmentIndicationType($values_1);
            unset($data['ShipmentIndicationType']);
        }
        if (\array_key_exists('MIDualReturnShipmentKey', $data)) {
            $object->setMIDualReturnShipmentKey($data['MIDualReturnShipmentKey']);
            unset($data['MIDualReturnShipmentKey']);
        }
        if (\array_key_exists('MIDualReturnShipmentIndicator', $data)) {
            $object->setMIDualReturnShipmentIndicator($data['MIDualReturnShipmentIndicator']);
            unset($data['MIDualReturnShipmentIndicator']);
        }
        if (\array_key_exists('RatingMethodRequestedIndicator', $data)) {
            $object->setRatingMethodRequestedIndicator($data['RatingMethodRequestedIndicator']);
            unset($data['RatingMethodRequestedIndicator']);
        }
        if (\array_key_exists('TaxInformationIndicator', $data)) {
            $object->setTaxInformationIndicator($data['TaxInformationIndicator']);
            unset($data['TaxInformationIndicator']);
        }
        if (\array_key_exists('ShipmentServiceOptions', $data)) {
            $object->setShipmentServiceOptions($this->denormalizer->denormalize($data['ShipmentServiceOptions'], \ShipStream\Ups\Api\Model\ShipmentShipmentServiceOptions::class, 'json', $context));
            unset($data['ShipmentServiceOptions']);
        }
        if (\array_key_exists('Locale', $data)) {
            $object->setLocale($data['Locale']);
            unset($data['Locale']);
        }
        if (\array_key_exists('ShipmentValueThresholdCode', $data)) {
            $object->setShipmentValueThresholdCode($data['ShipmentValueThresholdCode']);
            unset($data['ShipmentValueThresholdCode']);
        }
        if (\array_key_exists('MasterCartonID', $data)) {
            $object->setMasterCartonID($data['MasterCartonID']);
            unset($data['MasterCartonID']);
        }
        if (\array_key_exists('MasterCartonIndicator', $data)) {
            $object->setMasterCartonIndicator($data['MasterCartonIndicator']);
            unset($data['MasterCartonIndicator']);
        }
        if (\array_key_exists('ShipmentDate', $data)) {
            $object->setShipmentDate($data['ShipmentDate']);
            unset($data['ShipmentDate']);
        }
        if (\array_key_exists('Package', $data)) {
            $values_2 = [];
            foreach ($data['Package'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \ShipStream\Ups\Api\Model\ShipmentPackage::class, 'json', $context);
            }
            $object->setPackage($values_2);
            unset($data['Package']);
        }
        foreach ($data as $key => $value_3) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_3;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('description') && null !== $data->getDescription()) {
            $dataArray['Description'] = $data->getDescription();
        }
        if ($data->isInitialized('returnService') && null !== $data->getReturnService()) {
            $dataArray['ReturnService'] = $this->normalizer->normalize($data->getReturnService(), 'json', $context);
        }
        if ($data->isInitialized('documentsOnlyIndicator') && null !== $data->getDocumentsOnlyIndicator()) {
            $dataArray['DocumentsOnlyIndicator'] = $data->getDocumentsOnlyIndicator();
        }
        $dataArray['Shipper'] = $this->normalizer->normalize($data->getShipper(), 'json', $context);
        $dataArray['ShipTo'] = $this->normalizer->normalize($data->getShipTo(), 'json', $context);
        if ($data->isInitialized('alternateDeliveryAddress') && null !== $data->getAlternateDeliveryAddress()) {
            $dataArray['AlternateDeliveryAddress'] = $this->normalizer->normalize($data->getAlternateDeliveryAddress(), 'json', $context);
        }
        if ($data->isInitialized('shipFrom') && null !== $data->getShipFrom()) {
            $dataArray['ShipFrom'] = $this->normalizer->normalize($data->getShipFrom(), 'json', $context);
        }
        if ($data->isInitialized('paymentInformation') && null !== $data->getPaymentInformation()) {
            $dataArray['PaymentInformation'] = $this->normalizer->normalize($data->getPaymentInformation(), 'json', $context);
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
        if ($data->isInitialized('promotionalDiscountInformation') && null !== $data->getPromotionalDiscountInformation()) {
            $dataArray['PromotionalDiscountInformation'] = $this->normalizer->normalize($data->getPromotionalDiscountInformation(), 'json', $context);
        }
        if ($data->isInitialized('dGSignatoryInfo') && null !== $data->getDGSignatoryInfo()) {
            $dataArray['DGSignatoryInfo'] = $this->normalizer->normalize($data->getDGSignatoryInfo(), 'json', $context);
        }
        if ($data->isInitialized('shipmentRatingOptions') && null !== $data->getShipmentRatingOptions()) {
            $dataArray['ShipmentRatingOptions'] = $this->normalizer->normalize($data->getShipmentRatingOptions(), 'json', $context);
        }
        if ($data->isInitialized('movementReferenceNumber') && null !== $data->getMovementReferenceNumber()) {
            $dataArray['MovementReferenceNumber'] = $data->getMovementReferenceNumber();
        }
        if ($data->isInitialized('referenceNumber') && null !== $data->getReferenceNumber()) {
            $values = [];
            foreach ($data->getReferenceNumber() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['ReferenceNumber'] = $values;
        }
        $dataArray['Service'] = $this->normalizer->normalize($data->getService(), 'json', $context);
        if ($data->isInitialized('invoiceLineTotal') && null !== $data->getInvoiceLineTotal()) {
            $dataArray['InvoiceLineTotal'] = $this->normalizer->normalize($data->getInvoiceLineTotal(), 'json', $context);
        }
        if ($data->isInitialized('numOfPiecesInShipment') && null !== $data->getNumOfPiecesInShipment()) {
            $dataArray['NumOfPiecesInShipment'] = $data->getNumOfPiecesInShipment();
        }
        if ($data->isInitialized('uSPSEndorsement') && null !== $data->getUSPSEndorsement()) {
            $dataArray['USPSEndorsement'] = $data->getUSPSEndorsement();
        }
        if ($data->isInitialized('mILabelCN22Indicator') && null !== $data->getMILabelCN22Indicator()) {
            $dataArray['MILabelCN22Indicator'] = $data->getMILabelCN22Indicator();
        }
        if ($data->isInitialized('subClassification') && null !== $data->getSubClassification()) {
            $dataArray['SubClassification'] = $data->getSubClassification();
        }
        if ($data->isInitialized('costCenter') && null !== $data->getCostCenter()) {
            $dataArray['CostCenter'] = $data->getCostCenter();
        }
        if ($data->isInitialized('costCenterBarcodeIndicator') && null !== $data->getCostCenterBarcodeIndicator()) {
            $dataArray['CostCenterBarcodeIndicator'] = $data->getCostCenterBarcodeIndicator();
        }
        if ($data->isInitialized('packageID') && null !== $data->getPackageID()) {
            $dataArray['PackageID'] = $data->getPackageID();
        }
        if ($data->isInitialized('packageIDBarcodeIndicator') && null !== $data->getPackageIDBarcodeIndicator()) {
            $dataArray['PackageIDBarcodeIndicator'] = $data->getPackageIDBarcodeIndicator();
        }
        if ($data->isInitialized('irregularIndicator') && null !== $data->getIrregularIndicator()) {
            $dataArray['IrregularIndicator'] = $data->getIrregularIndicator();
        }
        if ($data->isInitialized('shipmentIndicationType') && null !== $data->getShipmentIndicationType()) {
            $values_1 = [];
            foreach ($data->getShipmentIndicationType() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['ShipmentIndicationType'] = $values_1;
        }
        if ($data->isInitialized('mIDualReturnShipmentKey') && null !== $data->getMIDualReturnShipmentKey()) {
            $dataArray['MIDualReturnShipmentKey'] = $data->getMIDualReturnShipmentKey();
        }
        if ($data->isInitialized('mIDualReturnShipmentIndicator') && null !== $data->getMIDualReturnShipmentIndicator()) {
            $dataArray['MIDualReturnShipmentIndicator'] = $data->getMIDualReturnShipmentIndicator();
        }
        if ($data->isInitialized('ratingMethodRequestedIndicator') && null !== $data->getRatingMethodRequestedIndicator()) {
            $dataArray['RatingMethodRequestedIndicator'] = $data->getRatingMethodRequestedIndicator();
        }
        if ($data->isInitialized('taxInformationIndicator') && null !== $data->getTaxInformationIndicator()) {
            $dataArray['TaxInformationIndicator'] = $data->getTaxInformationIndicator();
        }
        if ($data->isInitialized('shipmentServiceOptions') && null !== $data->getShipmentServiceOptions()) {
            $dataArray['ShipmentServiceOptions'] = $this->normalizer->normalize($data->getShipmentServiceOptions(), 'json', $context);
        }
        if ($data->isInitialized('locale') && null !== $data->getLocale()) {
            $dataArray['Locale'] = $data->getLocale();
        }
        if ($data->isInitialized('shipmentValueThresholdCode') && null !== $data->getShipmentValueThresholdCode()) {
            $dataArray['ShipmentValueThresholdCode'] = $data->getShipmentValueThresholdCode();
        }
        if ($data->isInitialized('masterCartonID') && null !== $data->getMasterCartonID()) {
            $dataArray['MasterCartonID'] = $data->getMasterCartonID();
        }
        if ($data->isInitialized('masterCartonIndicator') && null !== $data->getMasterCartonIndicator()) {
            $dataArray['MasterCartonIndicator'] = $data->getMasterCartonIndicator();
        }
        if ($data->isInitialized('shipmentDate') && null !== $data->getShipmentDate()) {
            $dataArray['ShipmentDate'] = $data->getShipmentDate();
        }
        $values_2 = [];
        foreach ($data->getPackage() as $value_2) {
            $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
        }
        $dataArray['Package'] = $values_2;
        foreach ($data as $key => $value_3) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_3;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\ShipStream\Ups\Api\Model\ShipmentRequestShipment::class => false];
    }
}