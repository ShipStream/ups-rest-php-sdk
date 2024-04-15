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
    class RateRequestShipmentNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\RateRequestShipment';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\RateRequestShipment';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
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
            if (\array_key_exists('OriginRecordTransactionTimestamp', $data) && $data['OriginRecordTransactionTimestamp'] !== null) {
                $object->setOriginRecordTransactionTimestamp($data['OriginRecordTransactionTimestamp']);
                unset($data['OriginRecordTransactionTimestamp']);
            }
            elseif (\array_key_exists('OriginRecordTransactionTimestamp', $data) && $data['OriginRecordTransactionTimestamp'] === null) {
                $object->setOriginRecordTransactionTimestamp(null);
            }
            if (\array_key_exists('Shipper', $data) && $data['Shipper'] !== null) {
                $object->setShipper($this->denormalizer->denormalize($data['Shipper'], 'ShipStream\\Ups\\Api\\Model\\RateShipmentShipper', 'json', $context));
                unset($data['Shipper']);
            }
            elseif (\array_key_exists('Shipper', $data) && $data['Shipper'] === null) {
                $object->setShipper(null);
            }
            if (\array_key_exists('ShipTo', $data) && $data['ShipTo'] !== null) {
                $object->setShipTo($this->denormalizer->denormalize($data['ShipTo'], 'ShipStream\\Ups\\Api\\Model\\RateShipmentShipTo', 'json', $context));
                unset($data['ShipTo']);
            }
            elseif (\array_key_exists('ShipTo', $data) && $data['ShipTo'] === null) {
                $object->setShipTo(null);
            }
            if (\array_key_exists('ShipFrom', $data) && $data['ShipFrom'] !== null) {
                $object->setShipFrom($this->denormalizer->denormalize($data['ShipFrom'], 'ShipStream\\Ups\\Api\\Model\\RateShipmentShipFrom', 'json', $context));
                unset($data['ShipFrom']);
            }
            elseif (\array_key_exists('ShipFrom', $data) && $data['ShipFrom'] === null) {
                $object->setShipFrom(null);
            }
            if (\array_key_exists('AlternateDeliveryAddress', $data) && $data['AlternateDeliveryAddress'] !== null) {
                $object->setAlternateDeliveryAddress($this->denormalizer->denormalize($data['AlternateDeliveryAddress'], 'ShipStream\\Ups\\Api\\Model\\RateShipmentAlternateDeliveryAddress', 'json', $context));
                unset($data['AlternateDeliveryAddress']);
            }
            elseif (\array_key_exists('AlternateDeliveryAddress', $data) && $data['AlternateDeliveryAddress'] === null) {
                $object->setAlternateDeliveryAddress(null);
            }
            if (\array_key_exists('ShipmentIndicationType', $data) && $data['ShipmentIndicationType'] !== null) {
                $values = [];
                foreach ($data['ShipmentIndicationType'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'ShipStream\\Ups\\Api\\Model\\ShipmentShipmentIndicationType', 'json', $context);
                }
                $object->setShipmentIndicationType($values);
                unset($data['ShipmentIndicationType']);
            }
            elseif (\array_key_exists('ShipmentIndicationType', $data) && $data['ShipmentIndicationType'] === null) {
                $object->setShipmentIndicationType(null);
            }
            if (\array_key_exists('PaymentDetails', $data) && $data['PaymentDetails'] !== null) {
                $object->setPaymentDetails($this->denormalizer->denormalize($data['PaymentDetails'], 'ShipStream\\Ups\\Api\\Model\\ShipmentPaymentDetails', 'json', $context));
                unset($data['PaymentDetails']);
            }
            elseif (\array_key_exists('PaymentDetails', $data) && $data['PaymentDetails'] === null) {
                $object->setPaymentDetails(null);
            }
            if (\array_key_exists('FRSPaymentInformation', $data) && $data['FRSPaymentInformation'] !== null) {
                $object->setFRSPaymentInformation($this->denormalizer->denormalize($data['FRSPaymentInformation'], 'ShipStream\\Ups\\Api\\Model\\RateShipmentFRSPaymentInformation', 'json', $context));
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
            if (\array_key_exists('Service', $data) && $data['Service'] !== null) {
                $object->setService($this->denormalizer->denormalize($data['Service'], 'ShipStream\\Ups\\Api\\Model\\ShipmentService', 'json', $context));
                unset($data['Service']);
            }
            elseif (\array_key_exists('Service', $data) && $data['Service'] === null) {
                $object->setService(null);
            }
            if (\array_key_exists('NumOfPieces', $data) && $data['NumOfPieces'] !== null) {
                $object->setNumOfPieces($data['NumOfPieces']);
                unset($data['NumOfPieces']);
            }
            elseif (\array_key_exists('NumOfPieces', $data) && $data['NumOfPieces'] === null) {
                $object->setNumOfPieces(null);
            }
            if (\array_key_exists('ShipmentTotalWeight', $data) && $data['ShipmentTotalWeight'] !== null) {
                $object->setShipmentTotalWeight($this->denormalizer->denormalize($data['ShipmentTotalWeight'], 'ShipStream\\Ups\\Api\\Model\\ShipmentShipmentTotalWeight', 'json', $context));
                unset($data['ShipmentTotalWeight']);
            }
            elseif (\array_key_exists('ShipmentTotalWeight', $data) && $data['ShipmentTotalWeight'] === null) {
                $object->setShipmentTotalWeight(null);
            }
            if (\array_key_exists('DocumentsOnlyIndicator', $data) && $data['DocumentsOnlyIndicator'] !== null) {
                $object->setDocumentsOnlyIndicator($data['DocumentsOnlyIndicator']);
                unset($data['DocumentsOnlyIndicator']);
            }
            elseif (\array_key_exists('DocumentsOnlyIndicator', $data) && $data['DocumentsOnlyIndicator'] === null) {
                $object->setDocumentsOnlyIndicator(null);
            }
            if (\array_key_exists('Package', $data) && $data['Package'] !== null) {
                $values_1 = [];
                foreach ($data['Package'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'ShipStream\\Ups\\Api\\Model\\RateShipmentPackage', 'json', $context);
                }
                $object->setPackage($values_1);
                unset($data['Package']);
            }
            elseif (\array_key_exists('Package', $data) && $data['Package'] === null) {
                $object->setPackage(null);
            }
            if (\array_key_exists('ShipmentServiceOptions', $data) && $data['ShipmentServiceOptions'] !== null) {
                $object->setShipmentServiceOptions($this->denormalizer->denormalize($data['ShipmentServiceOptions'], 'ShipStream\\Ups\\Api\\Model\\RateShipmentShipmentServiceOptions', 'json', $context));
                unset($data['ShipmentServiceOptions']);
            }
            elseif (\array_key_exists('ShipmentServiceOptions', $data) && $data['ShipmentServiceOptions'] === null) {
                $object->setShipmentServiceOptions(null);
            }
            if (\array_key_exists('ShipmentRatingOptions', $data) && $data['ShipmentRatingOptions'] !== null) {
                $object->setShipmentRatingOptions($this->denormalizer->denormalize($data['ShipmentRatingOptions'], 'ShipStream\\Ups\\Api\\Model\\ShipmentShipmentRatingOptions', 'json', $context));
                unset($data['ShipmentRatingOptions']);
            }
            elseif (\array_key_exists('ShipmentRatingOptions', $data) && $data['ShipmentRatingOptions'] === null) {
                $object->setShipmentRatingOptions(null);
            }
            if (\array_key_exists('InvoiceLineTotal', $data) && $data['InvoiceLineTotal'] !== null) {
                $object->setInvoiceLineTotal($this->denormalizer->denormalize($data['InvoiceLineTotal'], 'ShipStream\\Ups\\Api\\Model\\ShipmentInvoiceLineTotal', 'json', $context));
                unset($data['InvoiceLineTotal']);
            }
            elseif (\array_key_exists('InvoiceLineTotal', $data) && $data['InvoiceLineTotal'] === null) {
                $object->setInvoiceLineTotal(null);
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
            if (\array_key_exists('PromotionalDiscountInformation', $data) && $data['PromotionalDiscountInformation'] !== null) {
                $object->setPromotionalDiscountInformation($this->denormalizer->denormalize($data['PromotionalDiscountInformation'], 'ShipStream\\Ups\\Api\\Model\\ShipmentPromotionalDiscountInformation', 'json', $context));
                unset($data['PromotionalDiscountInformation']);
            }
            elseif (\array_key_exists('PromotionalDiscountInformation', $data) && $data['PromotionalDiscountInformation'] === null) {
                $object->setPromotionalDiscountInformation(null);
            }
            if (\array_key_exists('DeliveryTimeInformation', $data) && $data['DeliveryTimeInformation'] !== null) {
                $object->setDeliveryTimeInformation($this->denormalizer->denormalize($data['DeliveryTimeInformation'], 'ShipStream\\Ups\\Api\\Model\\ShipmentDeliveryTimeInformation', 'json', $context));
                unset($data['DeliveryTimeInformation']);
            }
            elseif (\array_key_exists('DeliveryTimeInformation', $data) && $data['DeliveryTimeInformation'] === null) {
                $object->setDeliveryTimeInformation(null);
            }
            if (\array_key_exists('MasterCartonIndicator', $data) && $data['MasterCartonIndicator'] !== null) {
                $object->setMasterCartonIndicator($data['MasterCartonIndicator']);
                unset($data['MasterCartonIndicator']);
            }
            elseif (\array_key_exists('MasterCartonIndicator', $data) && $data['MasterCartonIndicator'] === null) {
                $object->setMasterCartonIndicator(null);
            }
            if (\array_key_exists('WWEShipmentIndicator', $data) && $data['WWEShipmentIndicator'] !== null) {
                $object->setWWEShipmentIndicator($data['WWEShipmentIndicator']);
                unset($data['WWEShipmentIndicator']);
            }
            elseif (\array_key_exists('WWEShipmentIndicator', $data) && $data['WWEShipmentIndicator'] === null) {
                $object->setWWEShipmentIndicator(null);
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
            if ($object->isInitialized('originRecordTransactionTimestamp') && null !== $object->getOriginRecordTransactionTimestamp()) {
                $data['OriginRecordTransactionTimestamp'] = $object->getOriginRecordTransactionTimestamp();
            }
            $data['Shipper'] = $this->normalizer->normalize($object->getShipper(), 'json', $context);
            $data['ShipTo'] = $this->normalizer->normalize($object->getShipTo(), 'json', $context);
            if ($object->isInitialized('shipFrom') && null !== $object->getShipFrom()) {
                $data['ShipFrom'] = $this->normalizer->normalize($object->getShipFrom(), 'json', $context);
            }
            if ($object->isInitialized('alternateDeliveryAddress') && null !== $object->getAlternateDeliveryAddress()) {
                $data['AlternateDeliveryAddress'] = $this->normalizer->normalize($object->getAlternateDeliveryAddress(), 'json', $context);
            }
            if ($object->isInitialized('shipmentIndicationType') && null !== $object->getShipmentIndicationType()) {
                $values = [];
                foreach ($object->getShipmentIndicationType() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['ShipmentIndicationType'] = $values;
            }
            if ($object->isInitialized('paymentDetails') && null !== $object->getPaymentDetails()) {
                $data['PaymentDetails'] = $this->normalizer->normalize($object->getPaymentDetails(), 'json', $context);
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
            if ($object->isInitialized('service') && null !== $object->getService()) {
                $data['Service'] = $this->normalizer->normalize($object->getService(), 'json', $context);
            }
            if ($object->isInitialized('numOfPieces') && null !== $object->getNumOfPieces()) {
                $data['NumOfPieces'] = $object->getNumOfPieces();
            }
            if ($object->isInitialized('shipmentTotalWeight') && null !== $object->getShipmentTotalWeight()) {
                $data['ShipmentTotalWeight'] = $this->normalizer->normalize($object->getShipmentTotalWeight(), 'json', $context);
            }
            if ($object->isInitialized('documentsOnlyIndicator') && null !== $object->getDocumentsOnlyIndicator()) {
                $data['DocumentsOnlyIndicator'] = $object->getDocumentsOnlyIndicator();
            }
            $values_1 = [];
            foreach ($object->getPackage() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['Package'] = $values_1;
            if ($object->isInitialized('shipmentServiceOptions') && null !== $object->getShipmentServiceOptions()) {
                $data['ShipmentServiceOptions'] = $this->normalizer->normalize($object->getShipmentServiceOptions(), 'json', $context);
            }
            if ($object->isInitialized('shipmentRatingOptions') && null !== $object->getShipmentRatingOptions()) {
                $data['ShipmentRatingOptions'] = $this->normalizer->normalize($object->getShipmentRatingOptions(), 'json', $context);
            }
            if ($object->isInitialized('invoiceLineTotal') && null !== $object->getInvoiceLineTotal()) {
                $data['InvoiceLineTotal'] = $this->normalizer->normalize($object->getInvoiceLineTotal(), 'json', $context);
            }
            if ($object->isInitialized('ratingMethodRequestedIndicator') && null !== $object->getRatingMethodRequestedIndicator()) {
                $data['RatingMethodRequestedIndicator'] = $object->getRatingMethodRequestedIndicator();
            }
            if ($object->isInitialized('taxInformationIndicator') && null !== $object->getTaxInformationIndicator()) {
                $data['TaxInformationIndicator'] = $object->getTaxInformationIndicator();
            }
            if ($object->isInitialized('promotionalDiscountInformation') && null !== $object->getPromotionalDiscountInformation()) {
                $data['PromotionalDiscountInformation'] = $this->normalizer->normalize($object->getPromotionalDiscountInformation(), 'json', $context);
            }
            if ($object->isInitialized('deliveryTimeInformation') && null !== $object->getDeliveryTimeInformation()) {
                $data['DeliveryTimeInformation'] = $this->normalizer->normalize($object->getDeliveryTimeInformation(), 'json', $context);
            }
            if ($object->isInitialized('masterCartonIndicator') && null !== $object->getMasterCartonIndicator()) {
                $data['MasterCartonIndicator'] = $object->getMasterCartonIndicator();
            }
            if ($object->isInitialized('wWEShipmentIndicator') && null !== $object->getWWEShipmentIndicator()) {
                $data['WWEShipmentIndicator'] = $object->getWWEShipmentIndicator();
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
            return ['ShipStream\\Ups\\Api\\Model\\RateRequestShipment' => false];
        }
    }
} else {
    class RateRequestShipmentNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\RateRequestShipment';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\RateRequestShipment';
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
            $object = new \ShipStream\Ups\Api\Model\RateRequestShipment();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('OriginRecordTransactionTimestamp', $data) && $data['OriginRecordTransactionTimestamp'] !== null) {
                $object->setOriginRecordTransactionTimestamp($data['OriginRecordTransactionTimestamp']);
                unset($data['OriginRecordTransactionTimestamp']);
            }
            elseif (\array_key_exists('OriginRecordTransactionTimestamp', $data) && $data['OriginRecordTransactionTimestamp'] === null) {
                $object->setOriginRecordTransactionTimestamp(null);
            }
            if (\array_key_exists('Shipper', $data) && $data['Shipper'] !== null) {
                $object->setShipper($this->denormalizer->denormalize($data['Shipper'], 'ShipStream\\Ups\\Api\\Model\\RateShipmentShipper', 'json', $context));
                unset($data['Shipper']);
            }
            elseif (\array_key_exists('Shipper', $data) && $data['Shipper'] === null) {
                $object->setShipper(null);
            }
            if (\array_key_exists('ShipTo', $data) && $data['ShipTo'] !== null) {
                $object->setShipTo($this->denormalizer->denormalize($data['ShipTo'], 'ShipStream\\Ups\\Api\\Model\\RateShipmentShipTo', 'json', $context));
                unset($data['ShipTo']);
            }
            elseif (\array_key_exists('ShipTo', $data) && $data['ShipTo'] === null) {
                $object->setShipTo(null);
            }
            if (\array_key_exists('ShipFrom', $data) && $data['ShipFrom'] !== null) {
                $object->setShipFrom($this->denormalizer->denormalize($data['ShipFrom'], 'ShipStream\\Ups\\Api\\Model\\RateShipmentShipFrom', 'json', $context));
                unset($data['ShipFrom']);
            }
            elseif (\array_key_exists('ShipFrom', $data) && $data['ShipFrom'] === null) {
                $object->setShipFrom(null);
            }
            if (\array_key_exists('AlternateDeliveryAddress', $data) && $data['AlternateDeliveryAddress'] !== null) {
                $object->setAlternateDeliveryAddress($this->denormalizer->denormalize($data['AlternateDeliveryAddress'], 'ShipStream\\Ups\\Api\\Model\\RateShipmentAlternateDeliveryAddress', 'json', $context));
                unset($data['AlternateDeliveryAddress']);
            }
            elseif (\array_key_exists('AlternateDeliveryAddress', $data) && $data['AlternateDeliveryAddress'] === null) {
                $object->setAlternateDeliveryAddress(null);
            }
            if (\array_key_exists('ShipmentIndicationType', $data) && $data['ShipmentIndicationType'] !== null) {
                $values = [];
                foreach ($data['ShipmentIndicationType'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'ShipStream\\Ups\\Api\\Model\\ShipmentShipmentIndicationType', 'json', $context);
                }
                $object->setShipmentIndicationType($values);
                unset($data['ShipmentIndicationType']);
            }
            elseif (\array_key_exists('ShipmentIndicationType', $data) && $data['ShipmentIndicationType'] === null) {
                $object->setShipmentIndicationType(null);
            }
            if (\array_key_exists('PaymentDetails', $data) && $data['PaymentDetails'] !== null) {
                $object->setPaymentDetails($this->denormalizer->denormalize($data['PaymentDetails'], 'ShipStream\\Ups\\Api\\Model\\ShipmentPaymentDetails', 'json', $context));
                unset($data['PaymentDetails']);
            }
            elseif (\array_key_exists('PaymentDetails', $data) && $data['PaymentDetails'] === null) {
                $object->setPaymentDetails(null);
            }
            if (\array_key_exists('FRSPaymentInformation', $data) && $data['FRSPaymentInformation'] !== null) {
                $object->setFRSPaymentInformation($this->denormalizer->denormalize($data['FRSPaymentInformation'], 'ShipStream\\Ups\\Api\\Model\\RateShipmentFRSPaymentInformation', 'json', $context));
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
            if (\array_key_exists('Service', $data) && $data['Service'] !== null) {
                $object->setService($this->denormalizer->denormalize($data['Service'], 'ShipStream\\Ups\\Api\\Model\\ShipmentService', 'json', $context));
                unset($data['Service']);
            }
            elseif (\array_key_exists('Service', $data) && $data['Service'] === null) {
                $object->setService(null);
            }
            if (\array_key_exists('NumOfPieces', $data) && $data['NumOfPieces'] !== null) {
                $object->setNumOfPieces($data['NumOfPieces']);
                unset($data['NumOfPieces']);
            }
            elseif (\array_key_exists('NumOfPieces', $data) && $data['NumOfPieces'] === null) {
                $object->setNumOfPieces(null);
            }
            if (\array_key_exists('ShipmentTotalWeight', $data) && $data['ShipmentTotalWeight'] !== null) {
                $object->setShipmentTotalWeight($this->denormalizer->denormalize($data['ShipmentTotalWeight'], 'ShipStream\\Ups\\Api\\Model\\ShipmentShipmentTotalWeight', 'json', $context));
                unset($data['ShipmentTotalWeight']);
            }
            elseif (\array_key_exists('ShipmentTotalWeight', $data) && $data['ShipmentTotalWeight'] === null) {
                $object->setShipmentTotalWeight(null);
            }
            if (\array_key_exists('DocumentsOnlyIndicator', $data) && $data['DocumentsOnlyIndicator'] !== null) {
                $object->setDocumentsOnlyIndicator($data['DocumentsOnlyIndicator']);
                unset($data['DocumentsOnlyIndicator']);
            }
            elseif (\array_key_exists('DocumentsOnlyIndicator', $data) && $data['DocumentsOnlyIndicator'] === null) {
                $object->setDocumentsOnlyIndicator(null);
            }
            if (\array_key_exists('Package', $data) && $data['Package'] !== null) {
                $values_1 = [];
                foreach ($data['Package'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'ShipStream\\Ups\\Api\\Model\\RateShipmentPackage', 'json', $context);
                }
                $object->setPackage($values_1);
                unset($data['Package']);
            }
            elseif (\array_key_exists('Package', $data) && $data['Package'] === null) {
                $object->setPackage(null);
            }
            if (\array_key_exists('ShipmentServiceOptions', $data) && $data['ShipmentServiceOptions'] !== null) {
                $object->setShipmentServiceOptions($this->denormalizer->denormalize($data['ShipmentServiceOptions'], 'ShipStream\\Ups\\Api\\Model\\RateShipmentShipmentServiceOptions', 'json', $context));
                unset($data['ShipmentServiceOptions']);
            }
            elseif (\array_key_exists('ShipmentServiceOptions', $data) && $data['ShipmentServiceOptions'] === null) {
                $object->setShipmentServiceOptions(null);
            }
            if (\array_key_exists('ShipmentRatingOptions', $data) && $data['ShipmentRatingOptions'] !== null) {
                $object->setShipmentRatingOptions($this->denormalizer->denormalize($data['ShipmentRatingOptions'], 'ShipStream\\Ups\\Api\\Model\\ShipmentShipmentRatingOptions', 'json', $context));
                unset($data['ShipmentRatingOptions']);
            }
            elseif (\array_key_exists('ShipmentRatingOptions', $data) && $data['ShipmentRatingOptions'] === null) {
                $object->setShipmentRatingOptions(null);
            }
            if (\array_key_exists('InvoiceLineTotal', $data) && $data['InvoiceLineTotal'] !== null) {
                $object->setInvoiceLineTotal($this->denormalizer->denormalize($data['InvoiceLineTotal'], 'ShipStream\\Ups\\Api\\Model\\ShipmentInvoiceLineTotal', 'json', $context));
                unset($data['InvoiceLineTotal']);
            }
            elseif (\array_key_exists('InvoiceLineTotal', $data) && $data['InvoiceLineTotal'] === null) {
                $object->setInvoiceLineTotal(null);
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
            if (\array_key_exists('PromotionalDiscountInformation', $data) && $data['PromotionalDiscountInformation'] !== null) {
                $object->setPromotionalDiscountInformation($this->denormalizer->denormalize($data['PromotionalDiscountInformation'], 'ShipStream\\Ups\\Api\\Model\\ShipmentPromotionalDiscountInformation', 'json', $context));
                unset($data['PromotionalDiscountInformation']);
            }
            elseif (\array_key_exists('PromotionalDiscountInformation', $data) && $data['PromotionalDiscountInformation'] === null) {
                $object->setPromotionalDiscountInformation(null);
            }
            if (\array_key_exists('DeliveryTimeInformation', $data) && $data['DeliveryTimeInformation'] !== null) {
                $object->setDeliveryTimeInformation($this->denormalizer->denormalize($data['DeliveryTimeInformation'], 'ShipStream\\Ups\\Api\\Model\\ShipmentDeliveryTimeInformation', 'json', $context));
                unset($data['DeliveryTimeInformation']);
            }
            elseif (\array_key_exists('DeliveryTimeInformation', $data) && $data['DeliveryTimeInformation'] === null) {
                $object->setDeliveryTimeInformation(null);
            }
            if (\array_key_exists('MasterCartonIndicator', $data) && $data['MasterCartonIndicator'] !== null) {
                $object->setMasterCartonIndicator($data['MasterCartonIndicator']);
                unset($data['MasterCartonIndicator']);
            }
            elseif (\array_key_exists('MasterCartonIndicator', $data) && $data['MasterCartonIndicator'] === null) {
                $object->setMasterCartonIndicator(null);
            }
            if (\array_key_exists('WWEShipmentIndicator', $data) && $data['WWEShipmentIndicator'] !== null) {
                $object->setWWEShipmentIndicator($data['WWEShipmentIndicator']);
                unset($data['WWEShipmentIndicator']);
            }
            elseif (\array_key_exists('WWEShipmentIndicator', $data) && $data['WWEShipmentIndicator'] === null) {
                $object->setWWEShipmentIndicator(null);
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
            if ($object->isInitialized('originRecordTransactionTimestamp') && null !== $object->getOriginRecordTransactionTimestamp()) {
                $data['OriginRecordTransactionTimestamp'] = $object->getOriginRecordTransactionTimestamp();
            }
            $data['Shipper'] = $this->normalizer->normalize($object->getShipper(), 'json', $context);
            $data['ShipTo'] = $this->normalizer->normalize($object->getShipTo(), 'json', $context);
            if ($object->isInitialized('shipFrom') && null !== $object->getShipFrom()) {
                $data['ShipFrom'] = $this->normalizer->normalize($object->getShipFrom(), 'json', $context);
            }
            if ($object->isInitialized('alternateDeliveryAddress') && null !== $object->getAlternateDeliveryAddress()) {
                $data['AlternateDeliveryAddress'] = $this->normalizer->normalize($object->getAlternateDeliveryAddress(), 'json', $context);
            }
            if ($object->isInitialized('shipmentIndicationType') && null !== $object->getShipmentIndicationType()) {
                $values = [];
                foreach ($object->getShipmentIndicationType() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['ShipmentIndicationType'] = $values;
            }
            if ($object->isInitialized('paymentDetails') && null !== $object->getPaymentDetails()) {
                $data['PaymentDetails'] = $this->normalizer->normalize($object->getPaymentDetails(), 'json', $context);
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
            if ($object->isInitialized('service') && null !== $object->getService()) {
                $data['Service'] = $this->normalizer->normalize($object->getService(), 'json', $context);
            }
            if ($object->isInitialized('numOfPieces') && null !== $object->getNumOfPieces()) {
                $data['NumOfPieces'] = $object->getNumOfPieces();
            }
            if ($object->isInitialized('shipmentTotalWeight') && null !== $object->getShipmentTotalWeight()) {
                $data['ShipmentTotalWeight'] = $this->normalizer->normalize($object->getShipmentTotalWeight(), 'json', $context);
            }
            if ($object->isInitialized('documentsOnlyIndicator') && null !== $object->getDocumentsOnlyIndicator()) {
                $data['DocumentsOnlyIndicator'] = $object->getDocumentsOnlyIndicator();
            }
            $values_1 = [];
            foreach ($object->getPackage() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['Package'] = $values_1;
            if ($object->isInitialized('shipmentServiceOptions') && null !== $object->getShipmentServiceOptions()) {
                $data['ShipmentServiceOptions'] = $this->normalizer->normalize($object->getShipmentServiceOptions(), 'json', $context);
            }
            if ($object->isInitialized('shipmentRatingOptions') && null !== $object->getShipmentRatingOptions()) {
                $data['ShipmentRatingOptions'] = $this->normalizer->normalize($object->getShipmentRatingOptions(), 'json', $context);
            }
            if ($object->isInitialized('invoiceLineTotal') && null !== $object->getInvoiceLineTotal()) {
                $data['InvoiceLineTotal'] = $this->normalizer->normalize($object->getInvoiceLineTotal(), 'json', $context);
            }
            if ($object->isInitialized('ratingMethodRequestedIndicator') && null !== $object->getRatingMethodRequestedIndicator()) {
                $data['RatingMethodRequestedIndicator'] = $object->getRatingMethodRequestedIndicator();
            }
            if ($object->isInitialized('taxInformationIndicator') && null !== $object->getTaxInformationIndicator()) {
                $data['TaxInformationIndicator'] = $object->getTaxInformationIndicator();
            }
            if ($object->isInitialized('promotionalDiscountInformation') && null !== $object->getPromotionalDiscountInformation()) {
                $data['PromotionalDiscountInformation'] = $this->normalizer->normalize($object->getPromotionalDiscountInformation(), 'json', $context);
            }
            if ($object->isInitialized('deliveryTimeInformation') && null !== $object->getDeliveryTimeInformation()) {
                $data['DeliveryTimeInformation'] = $this->normalizer->normalize($object->getDeliveryTimeInformation(), 'json', $context);
            }
            if ($object->isInitialized('masterCartonIndicator') && null !== $object->getMasterCartonIndicator()) {
                $data['MasterCartonIndicator'] = $object->getMasterCartonIndicator();
            }
            if ($object->isInitialized('wWEShipmentIndicator') && null !== $object->getWWEShipmentIndicator()) {
                $data['WWEShipmentIndicator'] = $object->getWWEShipmentIndicator();
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
            return ['ShipStream\\Ups\\Api\\Model\\RateRequestShipment' => false];
        }
    }
}