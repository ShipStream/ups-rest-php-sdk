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
    class ShipmentRequestShipmentNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\ShipmentRequestShipment';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\ShipmentRequestShipment';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
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
            if (\array_key_exists('Description', $data) && $data['Description'] !== null) {
                $object->setDescription($data['Description']);
                unset($data['Description']);
            }
            elseif (\array_key_exists('Description', $data) && $data['Description'] === null) {
                $object->setDescription(null);
            }
            if (\array_key_exists('ReturnService', $data) && $data['ReturnService'] !== null) {
                $object->setReturnService($this->denormalizer->denormalize($data['ReturnService'], 'ShipStream\\Ups\\Api\\Model\\ShipmentReturnService', 'json', $context));
                unset($data['ReturnService']);
            }
            elseif (\array_key_exists('ReturnService', $data) && $data['ReturnService'] === null) {
                $object->setReturnService(null);
            }
            if (\array_key_exists('DocumentsOnlyIndicator', $data) && $data['DocumentsOnlyIndicator'] !== null) {
                $object->setDocumentsOnlyIndicator($data['DocumentsOnlyIndicator']);
                unset($data['DocumentsOnlyIndicator']);
            }
            elseif (\array_key_exists('DocumentsOnlyIndicator', $data) && $data['DocumentsOnlyIndicator'] === null) {
                $object->setDocumentsOnlyIndicator(null);
            }
            if (\array_key_exists('Shipper', $data) && $data['Shipper'] !== null) {
                $object->setShipper($this->denormalizer->denormalize($data['Shipper'], 'ShipStream\\Ups\\Api\\Model\\ShipmentShipper', 'json', $context));
                unset($data['Shipper']);
            }
            elseif (\array_key_exists('Shipper', $data) && $data['Shipper'] === null) {
                $object->setShipper(null);
            }
            if (\array_key_exists('ShipTo', $data) && $data['ShipTo'] !== null) {
                $object->setShipTo($this->denormalizer->denormalize($data['ShipTo'], 'ShipStream\\Ups\\Api\\Model\\ShipmentShipTo', 'json', $context));
                unset($data['ShipTo']);
            }
            elseif (\array_key_exists('ShipTo', $data) && $data['ShipTo'] === null) {
                $object->setShipTo(null);
            }
            if (\array_key_exists('AlternateDeliveryAddress', $data) && $data['AlternateDeliveryAddress'] !== null) {
                $object->setAlternateDeliveryAddress($this->denormalizer->denormalize($data['AlternateDeliveryAddress'], 'ShipStream\\Ups\\Api\\Model\\ShipmentAlternateDeliveryAddress', 'json', $context));
                unset($data['AlternateDeliveryAddress']);
            }
            elseif (\array_key_exists('AlternateDeliveryAddress', $data) && $data['AlternateDeliveryAddress'] === null) {
                $object->setAlternateDeliveryAddress(null);
            }
            if (\array_key_exists('ShipFrom', $data) && $data['ShipFrom'] !== null) {
                $object->setShipFrom($this->denormalizer->denormalize($data['ShipFrom'], 'ShipStream\\Ups\\Api\\Model\\ShipmentShipFrom', 'json', $context));
                unset($data['ShipFrom']);
            }
            elseif (\array_key_exists('ShipFrom', $data) && $data['ShipFrom'] === null) {
                $object->setShipFrom(null);
            }
            if (\array_key_exists('PaymentInformation', $data) && $data['PaymentInformation'] !== null) {
                $object->setPaymentInformation($this->denormalizer->denormalize($data['PaymentInformation'], 'ShipStream\\Ups\\Api\\Model\\ShipmentPaymentInformation', 'json', $context));
                unset($data['PaymentInformation']);
            }
            elseif (\array_key_exists('PaymentInformation', $data) && $data['PaymentInformation'] === null) {
                $object->setPaymentInformation(null);
            }
            if (\array_key_exists('FRSPaymentInformation', $data) && $data['FRSPaymentInformation'] !== null) {
                $object->setFRSPaymentInformation($this->denormalizer->denormalize($data['FRSPaymentInformation'], 'ShipStream\\Ups\\Api\\Model\\ShipmentFRSPaymentInformation', 'json', $context));
                unset($data['FRSPaymentInformation']);
            }
            elseif (\array_key_exists('FRSPaymentInformation', $data) && $data['FRSPaymentInformation'] === null) {
                $object->setFRSPaymentInformation(null);
            }
            if (\array_key_exists('FreightShipmentInformation', $data) && $data['FreightShipmentInformation'] !== null) {
                $object->setFreightShipmentInformation($this->denormalizer->denormalize($data['FreightShipmentInformation'], 'ShipStream\\Ups\\Api\\Model\\ShipmentFreightShipmentInformation', 'json', $context));
                unset($data['FreightShipmentInformation']);
            }
            elseif (\array_key_exists('FreightShipmentInformation', $data) && $data['FreightShipmentInformation'] === null) {
                $object->setFreightShipmentInformation(null);
            }
            if (\array_key_exists('GoodsNotInFreeCirculationIndicator', $data) && $data['GoodsNotInFreeCirculationIndicator'] !== null) {
                $object->setGoodsNotInFreeCirculationIndicator($data['GoodsNotInFreeCirculationIndicator']);
                unset($data['GoodsNotInFreeCirculationIndicator']);
            }
            elseif (\array_key_exists('GoodsNotInFreeCirculationIndicator', $data) && $data['GoodsNotInFreeCirculationIndicator'] === null) {
                $object->setGoodsNotInFreeCirculationIndicator(null);
            }
            if (\array_key_exists('PromotionalDiscountInformation', $data) && $data['PromotionalDiscountInformation'] !== null) {
                $object->setPromotionalDiscountInformation($this->denormalizer->denormalize($data['PromotionalDiscountInformation'], 'ShipStream\\Ups\\Api\\Model\\ShipmentPromotionalDiscountInformation', 'json', $context));
                unset($data['PromotionalDiscountInformation']);
            }
            elseif (\array_key_exists('PromotionalDiscountInformation', $data) && $data['PromotionalDiscountInformation'] === null) {
                $object->setPromotionalDiscountInformation(null);
            }
            if (\array_key_exists('DGSignatoryInfo', $data) && $data['DGSignatoryInfo'] !== null) {
                $object->setDGSignatoryInfo($this->denormalizer->denormalize($data['DGSignatoryInfo'], 'ShipStream\\Ups\\Api\\Model\\ShipmentDGSignatoryInfo', 'json', $context));
                unset($data['DGSignatoryInfo']);
            }
            elseif (\array_key_exists('DGSignatoryInfo', $data) && $data['DGSignatoryInfo'] === null) {
                $object->setDGSignatoryInfo(null);
            }
            if (\array_key_exists('ShipmentRatingOptions', $data) && $data['ShipmentRatingOptions'] !== null) {
                $object->setShipmentRatingOptions($this->denormalizer->denormalize($data['ShipmentRatingOptions'], 'ShipStream\\Ups\\Api\\Model\\ShipmentShipmentRatingOptions', 'json', $context));
                unset($data['ShipmentRatingOptions']);
            }
            elseif (\array_key_exists('ShipmentRatingOptions', $data) && $data['ShipmentRatingOptions'] === null) {
                $object->setShipmentRatingOptions(null);
            }
            if (\array_key_exists('MovementReferenceNumber', $data) && $data['MovementReferenceNumber'] !== null) {
                $object->setMovementReferenceNumber($data['MovementReferenceNumber']);
                unset($data['MovementReferenceNumber']);
            }
            elseif (\array_key_exists('MovementReferenceNumber', $data) && $data['MovementReferenceNumber'] === null) {
                $object->setMovementReferenceNumber(null);
            }
            if (\array_key_exists('ReferenceNumber', $data) && $data['ReferenceNumber'] !== null) {
                $values = [];
                foreach ($data['ReferenceNumber'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'ShipStream\\Ups\\Api\\Model\\ShipmentReferenceNumber', 'json', $context);
                }
                $object->setReferenceNumber($values);
                unset($data['ReferenceNumber']);
            }
            elseif (\array_key_exists('ReferenceNumber', $data) && $data['ReferenceNumber'] === null) {
                $object->setReferenceNumber(null);
            }
            if (\array_key_exists('Service', $data) && $data['Service'] !== null) {
                $object->setService($this->denormalizer->denormalize($data['Service'], 'ShipStream\\Ups\\Api\\Model\\ShipmentService', 'json', $context));
                unset($data['Service']);
            }
            elseif (\array_key_exists('Service', $data) && $data['Service'] === null) {
                $object->setService(null);
            }
            if (\array_key_exists('InvoiceLineTotal', $data) && $data['InvoiceLineTotal'] !== null) {
                $object->setInvoiceLineTotal($this->denormalizer->denormalize($data['InvoiceLineTotal'], 'ShipStream\\Ups\\Api\\Model\\ShipmentInvoiceLineTotal', 'json', $context));
                unset($data['InvoiceLineTotal']);
            }
            elseif (\array_key_exists('InvoiceLineTotal', $data) && $data['InvoiceLineTotal'] === null) {
                $object->setInvoiceLineTotal(null);
            }
            if (\array_key_exists('NumOfPiecesInShipment', $data) && $data['NumOfPiecesInShipment'] !== null) {
                $object->setNumOfPiecesInShipment($data['NumOfPiecesInShipment']);
                unset($data['NumOfPiecesInShipment']);
            }
            elseif (\array_key_exists('NumOfPiecesInShipment', $data) && $data['NumOfPiecesInShipment'] === null) {
                $object->setNumOfPiecesInShipment(null);
            }
            if (\array_key_exists('USPSEndorsement', $data) && $data['USPSEndorsement'] !== null) {
                $object->setUSPSEndorsement($data['USPSEndorsement']);
                unset($data['USPSEndorsement']);
            }
            elseif (\array_key_exists('USPSEndorsement', $data) && $data['USPSEndorsement'] === null) {
                $object->setUSPSEndorsement(null);
            }
            if (\array_key_exists('MILabelCN22Indicator', $data) && $data['MILabelCN22Indicator'] !== null) {
                $object->setMILabelCN22Indicator($data['MILabelCN22Indicator']);
                unset($data['MILabelCN22Indicator']);
            }
            elseif (\array_key_exists('MILabelCN22Indicator', $data) && $data['MILabelCN22Indicator'] === null) {
                $object->setMILabelCN22Indicator(null);
            }
            if (\array_key_exists('SubClassification', $data) && $data['SubClassification'] !== null) {
                $object->setSubClassification($data['SubClassification']);
                unset($data['SubClassification']);
            }
            elseif (\array_key_exists('SubClassification', $data) && $data['SubClassification'] === null) {
                $object->setSubClassification(null);
            }
            if (\array_key_exists('CostCenter', $data) && $data['CostCenter'] !== null) {
                $object->setCostCenter($data['CostCenter']);
                unset($data['CostCenter']);
            }
            elseif (\array_key_exists('CostCenter', $data) && $data['CostCenter'] === null) {
                $object->setCostCenter(null);
            }
            if (\array_key_exists('CostCenterBarcodeIndicator', $data) && $data['CostCenterBarcodeIndicator'] !== null) {
                $object->setCostCenterBarcodeIndicator($data['CostCenterBarcodeIndicator']);
                unset($data['CostCenterBarcodeIndicator']);
            }
            elseif (\array_key_exists('CostCenterBarcodeIndicator', $data) && $data['CostCenterBarcodeIndicator'] === null) {
                $object->setCostCenterBarcodeIndicator(null);
            }
            if (\array_key_exists('PackageID', $data) && $data['PackageID'] !== null) {
                $object->setPackageID($data['PackageID']);
                unset($data['PackageID']);
            }
            elseif (\array_key_exists('PackageID', $data) && $data['PackageID'] === null) {
                $object->setPackageID(null);
            }
            if (\array_key_exists('PackageIDBarcodeIndicator', $data) && $data['PackageIDBarcodeIndicator'] !== null) {
                $object->setPackageIDBarcodeIndicator($data['PackageIDBarcodeIndicator']);
                unset($data['PackageIDBarcodeIndicator']);
            }
            elseif (\array_key_exists('PackageIDBarcodeIndicator', $data) && $data['PackageIDBarcodeIndicator'] === null) {
                $object->setPackageIDBarcodeIndicator(null);
            }
            if (\array_key_exists('IrregularIndicator', $data) && $data['IrregularIndicator'] !== null) {
                $object->setIrregularIndicator($data['IrregularIndicator']);
                unset($data['IrregularIndicator']);
            }
            elseif (\array_key_exists('IrregularIndicator', $data) && $data['IrregularIndicator'] === null) {
                $object->setIrregularIndicator(null);
            }
            if (\array_key_exists('ShipmentIndicationType', $data) && $data['ShipmentIndicationType'] !== null) {
                $values_1 = [];
                foreach ($data['ShipmentIndicationType'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'ShipStream\\Ups\\Api\\Model\\ShipmentShipmentIndicationType', 'json', $context);
                }
                $object->setShipmentIndicationType($values_1);
                unset($data['ShipmentIndicationType']);
            }
            elseif (\array_key_exists('ShipmentIndicationType', $data) && $data['ShipmentIndicationType'] === null) {
                $object->setShipmentIndicationType(null);
            }
            if (\array_key_exists('MIDualReturnShipmentKey', $data) && $data['MIDualReturnShipmentKey'] !== null) {
                $object->setMIDualReturnShipmentKey($data['MIDualReturnShipmentKey']);
                unset($data['MIDualReturnShipmentKey']);
            }
            elseif (\array_key_exists('MIDualReturnShipmentKey', $data) && $data['MIDualReturnShipmentKey'] === null) {
                $object->setMIDualReturnShipmentKey(null);
            }
            if (\array_key_exists('MIDualReturnShipmentIndicator', $data) && $data['MIDualReturnShipmentIndicator'] !== null) {
                $object->setMIDualReturnShipmentIndicator($data['MIDualReturnShipmentIndicator']);
                unset($data['MIDualReturnShipmentIndicator']);
            }
            elseif (\array_key_exists('MIDualReturnShipmentIndicator', $data) && $data['MIDualReturnShipmentIndicator'] === null) {
                $object->setMIDualReturnShipmentIndicator(null);
            }
            if (\array_key_exists('RatingMethodRequestedIndicator', $data) && $data['RatingMethodRequestedIndicator'] !== null) {
                $object->setRatingMethodRequestedIndicator($data['RatingMethodRequestedIndicator']);
                unset($data['RatingMethodRequestedIndicator']);
            }
            elseif (\array_key_exists('RatingMethodRequestedIndicator', $data) && $data['RatingMethodRequestedIndicator'] === null) {
                $object->setRatingMethodRequestedIndicator(null);
            }
            if (\array_key_exists('TaxInformationIndicator', $data) && $data['TaxInformationIndicator'] !== null) {
                $object->setTaxInformationIndicator($data['TaxInformationIndicator']);
                unset($data['TaxInformationIndicator']);
            }
            elseif (\array_key_exists('TaxInformationIndicator', $data) && $data['TaxInformationIndicator'] === null) {
                $object->setTaxInformationIndicator(null);
            }
            if (\array_key_exists('ShipmentServiceOptions', $data) && $data['ShipmentServiceOptions'] !== null) {
                $object->setShipmentServiceOptions($this->denormalizer->denormalize($data['ShipmentServiceOptions'], 'ShipStream\\Ups\\Api\\Model\\ShipmentShipmentServiceOptions', 'json', $context));
                unset($data['ShipmentServiceOptions']);
            }
            elseif (\array_key_exists('ShipmentServiceOptions', $data) && $data['ShipmentServiceOptions'] === null) {
                $object->setShipmentServiceOptions(null);
            }
            if (\array_key_exists('Locale', $data) && $data['Locale'] !== null) {
                $object->setLocale($data['Locale']);
                unset($data['Locale']);
            }
            elseif (\array_key_exists('Locale', $data) && $data['Locale'] === null) {
                $object->setLocale(null);
            }
            if (\array_key_exists('ShipmentValueThresholdCode', $data) && $data['ShipmentValueThresholdCode'] !== null) {
                $object->setShipmentValueThresholdCode($data['ShipmentValueThresholdCode']);
                unset($data['ShipmentValueThresholdCode']);
            }
            elseif (\array_key_exists('ShipmentValueThresholdCode', $data) && $data['ShipmentValueThresholdCode'] === null) {
                $object->setShipmentValueThresholdCode(null);
            }
            if (\array_key_exists('MasterCartonID', $data) && $data['MasterCartonID'] !== null) {
                $object->setMasterCartonID($data['MasterCartonID']);
                unset($data['MasterCartonID']);
            }
            elseif (\array_key_exists('MasterCartonID', $data) && $data['MasterCartonID'] === null) {
                $object->setMasterCartonID(null);
            }
            if (\array_key_exists('MasterCartonIndicator', $data) && $data['MasterCartonIndicator'] !== null) {
                $object->setMasterCartonIndicator($data['MasterCartonIndicator']);
                unset($data['MasterCartonIndicator']);
            }
            elseif (\array_key_exists('MasterCartonIndicator', $data) && $data['MasterCartonIndicator'] === null) {
                $object->setMasterCartonIndicator(null);
            }
            if (\array_key_exists('ShipmentDate', $data) && $data['ShipmentDate'] !== null) {
                $object->setShipmentDate($data['ShipmentDate']);
                unset($data['ShipmentDate']);
            }
            elseif (\array_key_exists('ShipmentDate', $data) && $data['ShipmentDate'] === null) {
                $object->setShipmentDate(null);
            }
            if (\array_key_exists('Package', $data) && $data['Package'] !== null) {
                $values_2 = [];
                foreach ($data['Package'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, 'ShipStream\\Ups\\Api\\Model\\ShipmentPackage', 'json', $context);
                }
                $object->setPackage($values_2);
                unset($data['Package']);
            }
            elseif (\array_key_exists('Package', $data) && $data['Package'] === null) {
                $object->setPackage(null);
            }
            foreach ($data as $key => $value_3) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_3;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('description') && null !== $object->getDescription()) {
                $data['Description'] = $object->getDescription();
            }
            if ($object->isInitialized('returnService') && null !== $object->getReturnService()) {
                $data['ReturnService'] = $this->normalizer->normalize($object->getReturnService(), 'json', $context);
            }
            if ($object->isInitialized('documentsOnlyIndicator') && null !== $object->getDocumentsOnlyIndicator()) {
                $data['DocumentsOnlyIndicator'] = $object->getDocumentsOnlyIndicator();
            }
            $data['Shipper'] = $this->normalizer->normalize($object->getShipper(), 'json', $context);
            $data['ShipTo'] = $this->normalizer->normalize($object->getShipTo(), 'json', $context);
            if ($object->isInitialized('alternateDeliveryAddress') && null !== $object->getAlternateDeliveryAddress()) {
                $data['AlternateDeliveryAddress'] = $this->normalizer->normalize($object->getAlternateDeliveryAddress(), 'json', $context);
            }
            if ($object->isInitialized('shipFrom') && null !== $object->getShipFrom()) {
                $data['ShipFrom'] = $this->normalizer->normalize($object->getShipFrom(), 'json', $context);
            }
            if ($object->isInitialized('paymentInformation') && null !== $object->getPaymentInformation()) {
                $data['PaymentInformation'] = $this->normalizer->normalize($object->getPaymentInformation(), 'json', $context);
            }
            if ($object->isInitialized('fRSPaymentInformation') && null !== $object->getFRSPaymentInformation()) {
                $data['FRSPaymentInformation'] = $this->normalizer->normalize($object->getFRSPaymentInformation(), 'json', $context);
            }
            if ($object->isInitialized('freightShipmentInformation') && null !== $object->getFreightShipmentInformation()) {
                $data['FreightShipmentInformation'] = $this->normalizer->normalize($object->getFreightShipmentInformation(), 'json', $context);
            }
            if ($object->isInitialized('goodsNotInFreeCirculationIndicator') && null !== $object->getGoodsNotInFreeCirculationIndicator()) {
                $data['GoodsNotInFreeCirculationIndicator'] = $object->getGoodsNotInFreeCirculationIndicator();
            }
            if ($object->isInitialized('promotionalDiscountInformation') && null !== $object->getPromotionalDiscountInformation()) {
                $data['PromotionalDiscountInformation'] = $this->normalizer->normalize($object->getPromotionalDiscountInformation(), 'json', $context);
            }
            if ($object->isInitialized('dGSignatoryInfo') && null !== $object->getDGSignatoryInfo()) {
                $data['DGSignatoryInfo'] = $this->normalizer->normalize($object->getDGSignatoryInfo(), 'json', $context);
            }
            if ($object->isInitialized('shipmentRatingOptions') && null !== $object->getShipmentRatingOptions()) {
                $data['ShipmentRatingOptions'] = $this->normalizer->normalize($object->getShipmentRatingOptions(), 'json', $context);
            }
            if ($object->isInitialized('movementReferenceNumber') && null !== $object->getMovementReferenceNumber()) {
                $data['MovementReferenceNumber'] = $object->getMovementReferenceNumber();
            }
            if ($object->isInitialized('referenceNumber') && null !== $object->getReferenceNumber()) {
                $values = [];
                foreach ($object->getReferenceNumber() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['ReferenceNumber'] = $values;
            }
            $data['Service'] = $this->normalizer->normalize($object->getService(), 'json', $context);
            if ($object->isInitialized('invoiceLineTotal') && null !== $object->getInvoiceLineTotal()) {
                $data['InvoiceLineTotal'] = $this->normalizer->normalize($object->getInvoiceLineTotal(), 'json', $context);
            }
            if ($object->isInitialized('numOfPiecesInShipment') && null !== $object->getNumOfPiecesInShipment()) {
                $data['NumOfPiecesInShipment'] = $object->getNumOfPiecesInShipment();
            }
            if ($object->isInitialized('uSPSEndorsement') && null !== $object->getUSPSEndorsement()) {
                $data['USPSEndorsement'] = $object->getUSPSEndorsement();
            }
            if ($object->isInitialized('mILabelCN22Indicator') && null !== $object->getMILabelCN22Indicator()) {
                $data['MILabelCN22Indicator'] = $object->getMILabelCN22Indicator();
            }
            if ($object->isInitialized('subClassification') && null !== $object->getSubClassification()) {
                $data['SubClassification'] = $object->getSubClassification();
            }
            if ($object->isInitialized('costCenter') && null !== $object->getCostCenter()) {
                $data['CostCenter'] = $object->getCostCenter();
            }
            if ($object->isInitialized('costCenterBarcodeIndicator') && null !== $object->getCostCenterBarcodeIndicator()) {
                $data['CostCenterBarcodeIndicator'] = $object->getCostCenterBarcodeIndicator();
            }
            if ($object->isInitialized('packageID') && null !== $object->getPackageID()) {
                $data['PackageID'] = $object->getPackageID();
            }
            if ($object->isInitialized('packageIDBarcodeIndicator') && null !== $object->getPackageIDBarcodeIndicator()) {
                $data['PackageIDBarcodeIndicator'] = $object->getPackageIDBarcodeIndicator();
            }
            if ($object->isInitialized('irregularIndicator') && null !== $object->getIrregularIndicator()) {
                $data['IrregularIndicator'] = $object->getIrregularIndicator();
            }
            if ($object->isInitialized('shipmentIndicationType') && null !== $object->getShipmentIndicationType()) {
                $values_1 = [];
                foreach ($object->getShipmentIndicationType() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['ShipmentIndicationType'] = $values_1;
            }
            if ($object->isInitialized('mIDualReturnShipmentKey') && null !== $object->getMIDualReturnShipmentKey()) {
                $data['MIDualReturnShipmentKey'] = $object->getMIDualReturnShipmentKey();
            }
            if ($object->isInitialized('mIDualReturnShipmentIndicator') && null !== $object->getMIDualReturnShipmentIndicator()) {
                $data['MIDualReturnShipmentIndicator'] = $object->getMIDualReturnShipmentIndicator();
            }
            if ($object->isInitialized('ratingMethodRequestedIndicator') && null !== $object->getRatingMethodRequestedIndicator()) {
                $data['RatingMethodRequestedIndicator'] = $object->getRatingMethodRequestedIndicator();
            }
            if ($object->isInitialized('taxInformationIndicator') && null !== $object->getTaxInformationIndicator()) {
                $data['TaxInformationIndicator'] = $object->getTaxInformationIndicator();
            }
            if ($object->isInitialized('shipmentServiceOptions') && null !== $object->getShipmentServiceOptions()) {
                $data['ShipmentServiceOptions'] = $this->normalizer->normalize($object->getShipmentServiceOptions(), 'json', $context);
            }
            if ($object->isInitialized('locale') && null !== $object->getLocale()) {
                $data['Locale'] = $object->getLocale();
            }
            if ($object->isInitialized('shipmentValueThresholdCode') && null !== $object->getShipmentValueThresholdCode()) {
                $data['ShipmentValueThresholdCode'] = $object->getShipmentValueThresholdCode();
            }
            if ($object->isInitialized('masterCartonID') && null !== $object->getMasterCartonID()) {
                $data['MasterCartonID'] = $object->getMasterCartonID();
            }
            if ($object->isInitialized('masterCartonIndicator') && null !== $object->getMasterCartonIndicator()) {
                $data['MasterCartonIndicator'] = $object->getMasterCartonIndicator();
            }
            if ($object->isInitialized('shipmentDate') && null !== $object->getShipmentDate()) {
                $data['ShipmentDate'] = $object->getShipmentDate();
            }
            $values_2 = [];
            foreach ($object->getPackage() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data['Package'] = $values_2;
            foreach ($object as $key => $value_3) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_3;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['ShipStream\\Ups\\Api\\Model\\ShipmentRequestShipment' => false];
        }
    }
} else {
    class ShipmentRequestShipmentNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\ShipmentRequestShipment';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\ShipmentRequestShipment';
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
            $object = new \ShipStream\Ups\Api\Model\ShipmentRequestShipment();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Description', $data) && $data['Description'] !== null) {
                $object->setDescription($data['Description']);
                unset($data['Description']);
            }
            elseif (\array_key_exists('Description', $data) && $data['Description'] === null) {
                $object->setDescription(null);
            }
            if (\array_key_exists('ReturnService', $data) && $data['ReturnService'] !== null) {
                $object->setReturnService($this->denormalizer->denormalize($data['ReturnService'], 'ShipStream\\Ups\\Api\\Model\\ShipmentReturnService', 'json', $context));
                unset($data['ReturnService']);
            }
            elseif (\array_key_exists('ReturnService', $data) && $data['ReturnService'] === null) {
                $object->setReturnService(null);
            }
            if (\array_key_exists('DocumentsOnlyIndicator', $data) && $data['DocumentsOnlyIndicator'] !== null) {
                $object->setDocumentsOnlyIndicator($data['DocumentsOnlyIndicator']);
                unset($data['DocumentsOnlyIndicator']);
            }
            elseif (\array_key_exists('DocumentsOnlyIndicator', $data) && $data['DocumentsOnlyIndicator'] === null) {
                $object->setDocumentsOnlyIndicator(null);
            }
            if (\array_key_exists('Shipper', $data) && $data['Shipper'] !== null) {
                $object->setShipper($this->denormalizer->denormalize($data['Shipper'], 'ShipStream\\Ups\\Api\\Model\\ShipmentShipper', 'json', $context));
                unset($data['Shipper']);
            }
            elseif (\array_key_exists('Shipper', $data) && $data['Shipper'] === null) {
                $object->setShipper(null);
            }
            if (\array_key_exists('ShipTo', $data) && $data['ShipTo'] !== null) {
                $object->setShipTo($this->denormalizer->denormalize($data['ShipTo'], 'ShipStream\\Ups\\Api\\Model\\ShipmentShipTo', 'json', $context));
                unset($data['ShipTo']);
            }
            elseif (\array_key_exists('ShipTo', $data) && $data['ShipTo'] === null) {
                $object->setShipTo(null);
            }
            if (\array_key_exists('AlternateDeliveryAddress', $data) && $data['AlternateDeliveryAddress'] !== null) {
                $object->setAlternateDeliveryAddress($this->denormalizer->denormalize($data['AlternateDeliveryAddress'], 'ShipStream\\Ups\\Api\\Model\\ShipmentAlternateDeliveryAddress', 'json', $context));
                unset($data['AlternateDeliveryAddress']);
            }
            elseif (\array_key_exists('AlternateDeliveryAddress', $data) && $data['AlternateDeliveryAddress'] === null) {
                $object->setAlternateDeliveryAddress(null);
            }
            if (\array_key_exists('ShipFrom', $data) && $data['ShipFrom'] !== null) {
                $object->setShipFrom($this->denormalizer->denormalize($data['ShipFrom'], 'ShipStream\\Ups\\Api\\Model\\ShipmentShipFrom', 'json', $context));
                unset($data['ShipFrom']);
            }
            elseif (\array_key_exists('ShipFrom', $data) && $data['ShipFrom'] === null) {
                $object->setShipFrom(null);
            }
            if (\array_key_exists('PaymentInformation', $data) && $data['PaymentInformation'] !== null) {
                $object->setPaymentInformation($this->denormalizer->denormalize($data['PaymentInformation'], 'ShipStream\\Ups\\Api\\Model\\ShipmentPaymentInformation', 'json', $context));
                unset($data['PaymentInformation']);
            }
            elseif (\array_key_exists('PaymentInformation', $data) && $data['PaymentInformation'] === null) {
                $object->setPaymentInformation(null);
            }
            if (\array_key_exists('FRSPaymentInformation', $data) && $data['FRSPaymentInformation'] !== null) {
                $object->setFRSPaymentInformation($this->denormalizer->denormalize($data['FRSPaymentInformation'], 'ShipStream\\Ups\\Api\\Model\\ShipmentFRSPaymentInformation', 'json', $context));
                unset($data['FRSPaymentInformation']);
            }
            elseif (\array_key_exists('FRSPaymentInformation', $data) && $data['FRSPaymentInformation'] === null) {
                $object->setFRSPaymentInformation(null);
            }
            if (\array_key_exists('FreightShipmentInformation', $data) && $data['FreightShipmentInformation'] !== null) {
                $object->setFreightShipmentInformation($this->denormalizer->denormalize($data['FreightShipmentInformation'], 'ShipStream\\Ups\\Api\\Model\\ShipmentFreightShipmentInformation', 'json', $context));
                unset($data['FreightShipmentInformation']);
            }
            elseif (\array_key_exists('FreightShipmentInformation', $data) && $data['FreightShipmentInformation'] === null) {
                $object->setFreightShipmentInformation(null);
            }
            if (\array_key_exists('GoodsNotInFreeCirculationIndicator', $data) && $data['GoodsNotInFreeCirculationIndicator'] !== null) {
                $object->setGoodsNotInFreeCirculationIndicator($data['GoodsNotInFreeCirculationIndicator']);
                unset($data['GoodsNotInFreeCirculationIndicator']);
            }
            elseif (\array_key_exists('GoodsNotInFreeCirculationIndicator', $data) && $data['GoodsNotInFreeCirculationIndicator'] === null) {
                $object->setGoodsNotInFreeCirculationIndicator(null);
            }
            if (\array_key_exists('PromotionalDiscountInformation', $data) && $data['PromotionalDiscountInformation'] !== null) {
                $object->setPromotionalDiscountInformation($this->denormalizer->denormalize($data['PromotionalDiscountInformation'], 'ShipStream\\Ups\\Api\\Model\\ShipmentPromotionalDiscountInformation', 'json', $context));
                unset($data['PromotionalDiscountInformation']);
            }
            elseif (\array_key_exists('PromotionalDiscountInformation', $data) && $data['PromotionalDiscountInformation'] === null) {
                $object->setPromotionalDiscountInformation(null);
            }
            if (\array_key_exists('DGSignatoryInfo', $data) && $data['DGSignatoryInfo'] !== null) {
                $object->setDGSignatoryInfo($this->denormalizer->denormalize($data['DGSignatoryInfo'], 'ShipStream\\Ups\\Api\\Model\\ShipmentDGSignatoryInfo', 'json', $context));
                unset($data['DGSignatoryInfo']);
            }
            elseif (\array_key_exists('DGSignatoryInfo', $data) && $data['DGSignatoryInfo'] === null) {
                $object->setDGSignatoryInfo(null);
            }
            if (\array_key_exists('ShipmentRatingOptions', $data) && $data['ShipmentRatingOptions'] !== null) {
                $object->setShipmentRatingOptions($this->denormalizer->denormalize($data['ShipmentRatingOptions'], 'ShipStream\\Ups\\Api\\Model\\ShipmentShipmentRatingOptions', 'json', $context));
                unset($data['ShipmentRatingOptions']);
            }
            elseif (\array_key_exists('ShipmentRatingOptions', $data) && $data['ShipmentRatingOptions'] === null) {
                $object->setShipmentRatingOptions(null);
            }
            if (\array_key_exists('MovementReferenceNumber', $data) && $data['MovementReferenceNumber'] !== null) {
                $object->setMovementReferenceNumber($data['MovementReferenceNumber']);
                unset($data['MovementReferenceNumber']);
            }
            elseif (\array_key_exists('MovementReferenceNumber', $data) && $data['MovementReferenceNumber'] === null) {
                $object->setMovementReferenceNumber(null);
            }
            if (\array_key_exists('ReferenceNumber', $data) && $data['ReferenceNumber'] !== null) {
                $values = [];
                foreach ($data['ReferenceNumber'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'ShipStream\\Ups\\Api\\Model\\ShipmentReferenceNumber', 'json', $context);
                }
                $object->setReferenceNumber($values);
                unset($data['ReferenceNumber']);
            }
            elseif (\array_key_exists('ReferenceNumber', $data) && $data['ReferenceNumber'] === null) {
                $object->setReferenceNumber(null);
            }
            if (\array_key_exists('Service', $data) && $data['Service'] !== null) {
                $object->setService($this->denormalizer->denormalize($data['Service'], 'ShipStream\\Ups\\Api\\Model\\ShipmentService', 'json', $context));
                unset($data['Service']);
            }
            elseif (\array_key_exists('Service', $data) && $data['Service'] === null) {
                $object->setService(null);
            }
            if (\array_key_exists('InvoiceLineTotal', $data) && $data['InvoiceLineTotal'] !== null) {
                $object->setInvoiceLineTotal($this->denormalizer->denormalize($data['InvoiceLineTotal'], 'ShipStream\\Ups\\Api\\Model\\ShipmentInvoiceLineTotal', 'json', $context));
                unset($data['InvoiceLineTotal']);
            }
            elseif (\array_key_exists('InvoiceLineTotal', $data) && $data['InvoiceLineTotal'] === null) {
                $object->setInvoiceLineTotal(null);
            }
            if (\array_key_exists('NumOfPiecesInShipment', $data) && $data['NumOfPiecesInShipment'] !== null) {
                $object->setNumOfPiecesInShipment($data['NumOfPiecesInShipment']);
                unset($data['NumOfPiecesInShipment']);
            }
            elseif (\array_key_exists('NumOfPiecesInShipment', $data) && $data['NumOfPiecesInShipment'] === null) {
                $object->setNumOfPiecesInShipment(null);
            }
            if (\array_key_exists('USPSEndorsement', $data) && $data['USPSEndorsement'] !== null) {
                $object->setUSPSEndorsement($data['USPSEndorsement']);
                unset($data['USPSEndorsement']);
            }
            elseif (\array_key_exists('USPSEndorsement', $data) && $data['USPSEndorsement'] === null) {
                $object->setUSPSEndorsement(null);
            }
            if (\array_key_exists('MILabelCN22Indicator', $data) && $data['MILabelCN22Indicator'] !== null) {
                $object->setMILabelCN22Indicator($data['MILabelCN22Indicator']);
                unset($data['MILabelCN22Indicator']);
            }
            elseif (\array_key_exists('MILabelCN22Indicator', $data) && $data['MILabelCN22Indicator'] === null) {
                $object->setMILabelCN22Indicator(null);
            }
            if (\array_key_exists('SubClassification', $data) && $data['SubClassification'] !== null) {
                $object->setSubClassification($data['SubClassification']);
                unset($data['SubClassification']);
            }
            elseif (\array_key_exists('SubClassification', $data) && $data['SubClassification'] === null) {
                $object->setSubClassification(null);
            }
            if (\array_key_exists('CostCenter', $data) && $data['CostCenter'] !== null) {
                $object->setCostCenter($data['CostCenter']);
                unset($data['CostCenter']);
            }
            elseif (\array_key_exists('CostCenter', $data) && $data['CostCenter'] === null) {
                $object->setCostCenter(null);
            }
            if (\array_key_exists('CostCenterBarcodeIndicator', $data) && $data['CostCenterBarcodeIndicator'] !== null) {
                $object->setCostCenterBarcodeIndicator($data['CostCenterBarcodeIndicator']);
                unset($data['CostCenterBarcodeIndicator']);
            }
            elseif (\array_key_exists('CostCenterBarcodeIndicator', $data) && $data['CostCenterBarcodeIndicator'] === null) {
                $object->setCostCenterBarcodeIndicator(null);
            }
            if (\array_key_exists('PackageID', $data) && $data['PackageID'] !== null) {
                $object->setPackageID($data['PackageID']);
                unset($data['PackageID']);
            }
            elseif (\array_key_exists('PackageID', $data) && $data['PackageID'] === null) {
                $object->setPackageID(null);
            }
            if (\array_key_exists('PackageIDBarcodeIndicator', $data) && $data['PackageIDBarcodeIndicator'] !== null) {
                $object->setPackageIDBarcodeIndicator($data['PackageIDBarcodeIndicator']);
                unset($data['PackageIDBarcodeIndicator']);
            }
            elseif (\array_key_exists('PackageIDBarcodeIndicator', $data) && $data['PackageIDBarcodeIndicator'] === null) {
                $object->setPackageIDBarcodeIndicator(null);
            }
            if (\array_key_exists('IrregularIndicator', $data) && $data['IrregularIndicator'] !== null) {
                $object->setIrregularIndicator($data['IrregularIndicator']);
                unset($data['IrregularIndicator']);
            }
            elseif (\array_key_exists('IrregularIndicator', $data) && $data['IrregularIndicator'] === null) {
                $object->setIrregularIndicator(null);
            }
            if (\array_key_exists('ShipmentIndicationType', $data) && $data['ShipmentIndicationType'] !== null) {
                $values_1 = [];
                foreach ($data['ShipmentIndicationType'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'ShipStream\\Ups\\Api\\Model\\ShipmentShipmentIndicationType', 'json', $context);
                }
                $object->setShipmentIndicationType($values_1);
                unset($data['ShipmentIndicationType']);
            }
            elseif (\array_key_exists('ShipmentIndicationType', $data) && $data['ShipmentIndicationType'] === null) {
                $object->setShipmentIndicationType(null);
            }
            if (\array_key_exists('MIDualReturnShipmentKey', $data) && $data['MIDualReturnShipmentKey'] !== null) {
                $object->setMIDualReturnShipmentKey($data['MIDualReturnShipmentKey']);
                unset($data['MIDualReturnShipmentKey']);
            }
            elseif (\array_key_exists('MIDualReturnShipmentKey', $data) && $data['MIDualReturnShipmentKey'] === null) {
                $object->setMIDualReturnShipmentKey(null);
            }
            if (\array_key_exists('MIDualReturnShipmentIndicator', $data) && $data['MIDualReturnShipmentIndicator'] !== null) {
                $object->setMIDualReturnShipmentIndicator($data['MIDualReturnShipmentIndicator']);
                unset($data['MIDualReturnShipmentIndicator']);
            }
            elseif (\array_key_exists('MIDualReturnShipmentIndicator', $data) && $data['MIDualReturnShipmentIndicator'] === null) {
                $object->setMIDualReturnShipmentIndicator(null);
            }
            if (\array_key_exists('RatingMethodRequestedIndicator', $data) && $data['RatingMethodRequestedIndicator'] !== null) {
                $object->setRatingMethodRequestedIndicator($data['RatingMethodRequestedIndicator']);
                unset($data['RatingMethodRequestedIndicator']);
            }
            elseif (\array_key_exists('RatingMethodRequestedIndicator', $data) && $data['RatingMethodRequestedIndicator'] === null) {
                $object->setRatingMethodRequestedIndicator(null);
            }
            if (\array_key_exists('TaxInformationIndicator', $data) && $data['TaxInformationIndicator'] !== null) {
                $object->setTaxInformationIndicator($data['TaxInformationIndicator']);
                unset($data['TaxInformationIndicator']);
            }
            elseif (\array_key_exists('TaxInformationIndicator', $data) && $data['TaxInformationIndicator'] === null) {
                $object->setTaxInformationIndicator(null);
            }
            if (\array_key_exists('ShipmentServiceOptions', $data) && $data['ShipmentServiceOptions'] !== null) {
                $object->setShipmentServiceOptions($this->denormalizer->denormalize($data['ShipmentServiceOptions'], 'ShipStream\\Ups\\Api\\Model\\ShipmentShipmentServiceOptions', 'json', $context));
                unset($data['ShipmentServiceOptions']);
            }
            elseif (\array_key_exists('ShipmentServiceOptions', $data) && $data['ShipmentServiceOptions'] === null) {
                $object->setShipmentServiceOptions(null);
            }
            if (\array_key_exists('Locale', $data) && $data['Locale'] !== null) {
                $object->setLocale($data['Locale']);
                unset($data['Locale']);
            }
            elseif (\array_key_exists('Locale', $data) && $data['Locale'] === null) {
                $object->setLocale(null);
            }
            if (\array_key_exists('ShipmentValueThresholdCode', $data) && $data['ShipmentValueThresholdCode'] !== null) {
                $object->setShipmentValueThresholdCode($data['ShipmentValueThresholdCode']);
                unset($data['ShipmentValueThresholdCode']);
            }
            elseif (\array_key_exists('ShipmentValueThresholdCode', $data) && $data['ShipmentValueThresholdCode'] === null) {
                $object->setShipmentValueThresholdCode(null);
            }
            if (\array_key_exists('MasterCartonID', $data) && $data['MasterCartonID'] !== null) {
                $object->setMasterCartonID($data['MasterCartonID']);
                unset($data['MasterCartonID']);
            }
            elseif (\array_key_exists('MasterCartonID', $data) && $data['MasterCartonID'] === null) {
                $object->setMasterCartonID(null);
            }
            if (\array_key_exists('MasterCartonIndicator', $data) && $data['MasterCartonIndicator'] !== null) {
                $object->setMasterCartonIndicator($data['MasterCartonIndicator']);
                unset($data['MasterCartonIndicator']);
            }
            elseif (\array_key_exists('MasterCartonIndicator', $data) && $data['MasterCartonIndicator'] === null) {
                $object->setMasterCartonIndicator(null);
            }
            if (\array_key_exists('ShipmentDate', $data) && $data['ShipmentDate'] !== null) {
                $object->setShipmentDate($data['ShipmentDate']);
                unset($data['ShipmentDate']);
            }
            elseif (\array_key_exists('ShipmentDate', $data) && $data['ShipmentDate'] === null) {
                $object->setShipmentDate(null);
            }
            if (\array_key_exists('Package', $data) && $data['Package'] !== null) {
                $values_2 = [];
                foreach ($data['Package'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, 'ShipStream\\Ups\\Api\\Model\\ShipmentPackage', 'json', $context);
                }
                $object->setPackage($values_2);
                unset($data['Package']);
            }
            elseif (\array_key_exists('Package', $data) && $data['Package'] === null) {
                $object->setPackage(null);
            }
            foreach ($data as $key => $value_3) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_3;
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
            if ($object->isInitialized('description') && null !== $object->getDescription()) {
                $data['Description'] = $object->getDescription();
            }
            if ($object->isInitialized('returnService') && null !== $object->getReturnService()) {
                $data['ReturnService'] = $this->normalizer->normalize($object->getReturnService(), 'json', $context);
            }
            if ($object->isInitialized('documentsOnlyIndicator') && null !== $object->getDocumentsOnlyIndicator()) {
                $data['DocumentsOnlyIndicator'] = $object->getDocumentsOnlyIndicator();
            }
            $data['Shipper'] = $this->normalizer->normalize($object->getShipper(), 'json', $context);
            $data['ShipTo'] = $this->normalizer->normalize($object->getShipTo(), 'json', $context);
            if ($object->isInitialized('alternateDeliveryAddress') && null !== $object->getAlternateDeliveryAddress()) {
                $data['AlternateDeliveryAddress'] = $this->normalizer->normalize($object->getAlternateDeliveryAddress(), 'json', $context);
            }
            if ($object->isInitialized('shipFrom') && null !== $object->getShipFrom()) {
                $data['ShipFrom'] = $this->normalizer->normalize($object->getShipFrom(), 'json', $context);
            }
            if ($object->isInitialized('paymentInformation') && null !== $object->getPaymentInformation()) {
                $data['PaymentInformation'] = $this->normalizer->normalize($object->getPaymentInformation(), 'json', $context);
            }
            if ($object->isInitialized('fRSPaymentInformation') && null !== $object->getFRSPaymentInformation()) {
                $data['FRSPaymentInformation'] = $this->normalizer->normalize($object->getFRSPaymentInformation(), 'json', $context);
            }
            if ($object->isInitialized('freightShipmentInformation') && null !== $object->getFreightShipmentInformation()) {
                $data['FreightShipmentInformation'] = $this->normalizer->normalize($object->getFreightShipmentInformation(), 'json', $context);
            }
            if ($object->isInitialized('goodsNotInFreeCirculationIndicator') && null !== $object->getGoodsNotInFreeCirculationIndicator()) {
                $data['GoodsNotInFreeCirculationIndicator'] = $object->getGoodsNotInFreeCirculationIndicator();
            }
            if ($object->isInitialized('promotionalDiscountInformation') && null !== $object->getPromotionalDiscountInformation()) {
                $data['PromotionalDiscountInformation'] = $this->normalizer->normalize($object->getPromotionalDiscountInformation(), 'json', $context);
            }
            if ($object->isInitialized('dGSignatoryInfo') && null !== $object->getDGSignatoryInfo()) {
                $data['DGSignatoryInfo'] = $this->normalizer->normalize($object->getDGSignatoryInfo(), 'json', $context);
            }
            if ($object->isInitialized('shipmentRatingOptions') && null !== $object->getShipmentRatingOptions()) {
                $data['ShipmentRatingOptions'] = $this->normalizer->normalize($object->getShipmentRatingOptions(), 'json', $context);
            }
            if ($object->isInitialized('movementReferenceNumber') && null !== $object->getMovementReferenceNumber()) {
                $data['MovementReferenceNumber'] = $object->getMovementReferenceNumber();
            }
            if ($object->isInitialized('referenceNumber') && null !== $object->getReferenceNumber()) {
                $values = [];
                foreach ($object->getReferenceNumber() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['ReferenceNumber'] = $values;
            }
            $data['Service'] = $this->normalizer->normalize($object->getService(), 'json', $context);
            if ($object->isInitialized('invoiceLineTotal') && null !== $object->getInvoiceLineTotal()) {
                $data['InvoiceLineTotal'] = $this->normalizer->normalize($object->getInvoiceLineTotal(), 'json', $context);
            }
            if ($object->isInitialized('numOfPiecesInShipment') && null !== $object->getNumOfPiecesInShipment()) {
                $data['NumOfPiecesInShipment'] = $object->getNumOfPiecesInShipment();
            }
            if ($object->isInitialized('uSPSEndorsement') && null !== $object->getUSPSEndorsement()) {
                $data['USPSEndorsement'] = $object->getUSPSEndorsement();
            }
            if ($object->isInitialized('mILabelCN22Indicator') && null !== $object->getMILabelCN22Indicator()) {
                $data['MILabelCN22Indicator'] = $object->getMILabelCN22Indicator();
            }
            if ($object->isInitialized('subClassification') && null !== $object->getSubClassification()) {
                $data['SubClassification'] = $object->getSubClassification();
            }
            if ($object->isInitialized('costCenter') && null !== $object->getCostCenter()) {
                $data['CostCenter'] = $object->getCostCenter();
            }
            if ($object->isInitialized('costCenterBarcodeIndicator') && null !== $object->getCostCenterBarcodeIndicator()) {
                $data['CostCenterBarcodeIndicator'] = $object->getCostCenterBarcodeIndicator();
            }
            if ($object->isInitialized('packageID') && null !== $object->getPackageID()) {
                $data['PackageID'] = $object->getPackageID();
            }
            if ($object->isInitialized('packageIDBarcodeIndicator') && null !== $object->getPackageIDBarcodeIndicator()) {
                $data['PackageIDBarcodeIndicator'] = $object->getPackageIDBarcodeIndicator();
            }
            if ($object->isInitialized('irregularIndicator') && null !== $object->getIrregularIndicator()) {
                $data['IrregularIndicator'] = $object->getIrregularIndicator();
            }
            if ($object->isInitialized('shipmentIndicationType') && null !== $object->getShipmentIndicationType()) {
                $values_1 = [];
                foreach ($object->getShipmentIndicationType() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['ShipmentIndicationType'] = $values_1;
            }
            if ($object->isInitialized('mIDualReturnShipmentKey') && null !== $object->getMIDualReturnShipmentKey()) {
                $data['MIDualReturnShipmentKey'] = $object->getMIDualReturnShipmentKey();
            }
            if ($object->isInitialized('mIDualReturnShipmentIndicator') && null !== $object->getMIDualReturnShipmentIndicator()) {
                $data['MIDualReturnShipmentIndicator'] = $object->getMIDualReturnShipmentIndicator();
            }
            if ($object->isInitialized('ratingMethodRequestedIndicator') && null !== $object->getRatingMethodRequestedIndicator()) {
                $data['RatingMethodRequestedIndicator'] = $object->getRatingMethodRequestedIndicator();
            }
            if ($object->isInitialized('taxInformationIndicator') && null !== $object->getTaxInformationIndicator()) {
                $data['TaxInformationIndicator'] = $object->getTaxInformationIndicator();
            }
            if ($object->isInitialized('shipmentServiceOptions') && null !== $object->getShipmentServiceOptions()) {
                $data['ShipmentServiceOptions'] = $this->normalizer->normalize($object->getShipmentServiceOptions(), 'json', $context);
            }
            if ($object->isInitialized('locale') && null !== $object->getLocale()) {
                $data['Locale'] = $object->getLocale();
            }
            if ($object->isInitialized('shipmentValueThresholdCode') && null !== $object->getShipmentValueThresholdCode()) {
                $data['ShipmentValueThresholdCode'] = $object->getShipmentValueThresholdCode();
            }
            if ($object->isInitialized('masterCartonID') && null !== $object->getMasterCartonID()) {
                $data['MasterCartonID'] = $object->getMasterCartonID();
            }
            if ($object->isInitialized('masterCartonIndicator') && null !== $object->getMasterCartonIndicator()) {
                $data['MasterCartonIndicator'] = $object->getMasterCartonIndicator();
            }
            if ($object->isInitialized('shipmentDate') && null !== $object->getShipmentDate()) {
                $data['ShipmentDate'] = $object->getShipmentDate();
            }
            $values_2 = [];
            foreach ($object->getPackage() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data['Package'] = $values_2;
            foreach ($object as $key => $value_3) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_3;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['ShipStream\\Ups\\Api\\Model\\ShipmentRequestShipment' => false];
        }
    }
}