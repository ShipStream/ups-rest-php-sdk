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
            if (\array_key_exists('OriginRecordTransactionTimestamp', $data)) {
                $object->setOriginRecordTransactionTimestamp($data['OriginRecordTransactionTimestamp']);
                unset($data['OriginRecordTransactionTimestamp']);
            }
            if (\array_key_exists('Shipper', $data)) {
                $object->setShipper($this->denormalizer->denormalize($data['Shipper'], 'ShipStream\\Ups\\Api\\Model\\RateShipmentShipper', 'json', $context));
                unset($data['Shipper']);
            }
            if (\array_key_exists('ShipTo', $data)) {
                $object->setShipTo($this->denormalizer->denormalize($data['ShipTo'], 'ShipStream\\Ups\\Api\\Model\\RateShipmentShipTo', 'json', $context));
                unset($data['ShipTo']);
            }
            if (\array_key_exists('ShipFrom', $data)) {
                $object->setShipFrom($this->denormalizer->denormalize($data['ShipFrom'], 'ShipStream\\Ups\\Api\\Model\\RateShipmentShipFrom', 'json', $context));
                unset($data['ShipFrom']);
            }
            if (\array_key_exists('AlternateDeliveryAddress', $data)) {
                $object->setAlternateDeliveryAddress($this->denormalizer->denormalize($data['AlternateDeliveryAddress'], 'ShipStream\\Ups\\Api\\Model\\RateShipmentAlternateDeliveryAddress', 'json', $context));
                unset($data['AlternateDeliveryAddress']);
            }
            if (\array_key_exists('ShipmentIndicationType', $data)) {
                $values = [];
                foreach ($data['ShipmentIndicationType'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'ShipStream\\Ups\\Api\\Model\\ShipmentShipmentIndicationType', 'json', $context);
                }
                $object->setShipmentIndicationType($values);
                unset($data['ShipmentIndicationType']);
            }
            if (\array_key_exists('PaymentDetails', $data)) {
                $object->setPaymentDetails($this->denormalizer->denormalize($data['PaymentDetails'], 'ShipStream\\Ups\\Api\\Model\\ShipmentPaymentDetails', 'json', $context));
                unset($data['PaymentDetails']);
            }
            if (\array_key_exists('FRSPaymentInformation', $data)) {
                $object->setFRSPaymentInformation($this->denormalizer->denormalize($data['FRSPaymentInformation'], 'ShipStream\\Ups\\Api\\Model\\RateShipmentFRSPaymentInformation', 'json', $context));
                unset($data['FRSPaymentInformation']);
            }
            if (\array_key_exists('FreightShipmentInformation', $data)) {
                $object->setFreightShipmentInformation($this->denormalizer->denormalize($data['FreightShipmentInformation'], 'ShipStream\\Ups\\Api\\Model\\ShipmentFreightShipmentInformation', 'json', $context));
                unset($data['FreightShipmentInformation']);
            }
            if (\array_key_exists('GoodsNotInFreeCirculationIndicator', $data)) {
                $object->setGoodsNotInFreeCirculationIndicator($data['GoodsNotInFreeCirculationIndicator']);
                unset($data['GoodsNotInFreeCirculationIndicator']);
            }
            if (\array_key_exists('Service', $data)) {
                $object->setService($this->denormalizer->denormalize($data['Service'], 'ShipStream\\Ups\\Api\\Model\\ShipmentService', 'json', $context));
                unset($data['Service']);
            }
            if (\array_key_exists('NumOfPieces', $data)) {
                $object->setNumOfPieces($data['NumOfPieces']);
                unset($data['NumOfPieces']);
            }
            if (\array_key_exists('ShipmentTotalWeight', $data)) {
                $object->setShipmentTotalWeight($this->denormalizer->denormalize($data['ShipmentTotalWeight'], 'ShipStream\\Ups\\Api\\Model\\ShipmentShipmentTotalWeight', 'json', $context));
                unset($data['ShipmentTotalWeight']);
            }
            if (\array_key_exists('DocumentsOnlyIndicator', $data)) {
                $object->setDocumentsOnlyIndicator($data['DocumentsOnlyIndicator']);
                unset($data['DocumentsOnlyIndicator']);
            }
            if (\array_key_exists('Package', $data)) {
                $values_1 = [];
                foreach ($data['Package'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'ShipStream\\Ups\\Api\\Model\\RateShipmentPackage', 'json', $context);
                }
                $object->setPackage($values_1);
                unset($data['Package']);
            }
            if (\array_key_exists('ShipmentServiceOptions', $data)) {
                $object->setShipmentServiceOptions($this->denormalizer->denormalize($data['ShipmentServiceOptions'], 'ShipStream\\Ups\\Api\\Model\\RateShipmentShipmentServiceOptions', 'json', $context));
                unset($data['ShipmentServiceOptions']);
            }
            if (\array_key_exists('ShipmentRatingOptions', $data)) {
                $object->setShipmentRatingOptions($this->denormalizer->denormalize($data['ShipmentRatingOptions'], 'ShipStream\\Ups\\Api\\Model\\ShipmentShipmentRatingOptions', 'json', $context));
                unset($data['ShipmentRatingOptions']);
            }
            if (\array_key_exists('InvoiceLineTotal', $data)) {
                $object->setInvoiceLineTotal($this->denormalizer->denormalize($data['InvoiceLineTotal'], 'ShipStream\\Ups\\Api\\Model\\ShipmentInvoiceLineTotal', 'json', $context));
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
                $object->setPromotionalDiscountInformation($this->denormalizer->denormalize($data['PromotionalDiscountInformation'], 'ShipStream\\Ups\\Api\\Model\\ShipmentPromotionalDiscountInformation', 'json', $context));
                unset($data['PromotionalDiscountInformation']);
            }
            if (\array_key_exists('DeliveryTimeInformation', $data)) {
                $object->setDeliveryTimeInformation($this->denormalizer->denormalize($data['DeliveryTimeInformation'], 'ShipStream\\Ups\\Api\\Model\\ShipmentDeliveryTimeInformation', 'json', $context));
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
            if (\array_key_exists('OriginRecordTransactionTimestamp', $data)) {
                $object->setOriginRecordTransactionTimestamp($data['OriginRecordTransactionTimestamp']);
                unset($data['OriginRecordTransactionTimestamp']);
            }
            if (\array_key_exists('Shipper', $data)) {
                $object->setShipper($this->denormalizer->denormalize($data['Shipper'], 'ShipStream\\Ups\\Api\\Model\\RateShipmentShipper', 'json', $context));
                unset($data['Shipper']);
            }
            if (\array_key_exists('ShipTo', $data)) {
                $object->setShipTo($this->denormalizer->denormalize($data['ShipTo'], 'ShipStream\\Ups\\Api\\Model\\RateShipmentShipTo', 'json', $context));
                unset($data['ShipTo']);
            }
            if (\array_key_exists('ShipFrom', $data)) {
                $object->setShipFrom($this->denormalizer->denormalize($data['ShipFrom'], 'ShipStream\\Ups\\Api\\Model\\RateShipmentShipFrom', 'json', $context));
                unset($data['ShipFrom']);
            }
            if (\array_key_exists('AlternateDeliveryAddress', $data)) {
                $object->setAlternateDeliveryAddress($this->denormalizer->denormalize($data['AlternateDeliveryAddress'], 'ShipStream\\Ups\\Api\\Model\\RateShipmentAlternateDeliveryAddress', 'json', $context));
                unset($data['AlternateDeliveryAddress']);
            }
            if (\array_key_exists('ShipmentIndicationType', $data)) {
                $values = [];
                foreach ($data['ShipmentIndicationType'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'ShipStream\\Ups\\Api\\Model\\ShipmentShipmentIndicationType', 'json', $context);
                }
                $object->setShipmentIndicationType($values);
                unset($data['ShipmentIndicationType']);
            }
            if (\array_key_exists('PaymentDetails', $data)) {
                $object->setPaymentDetails($this->denormalizer->denormalize($data['PaymentDetails'], 'ShipStream\\Ups\\Api\\Model\\ShipmentPaymentDetails', 'json', $context));
                unset($data['PaymentDetails']);
            }
            if (\array_key_exists('FRSPaymentInformation', $data)) {
                $object->setFRSPaymentInformation($this->denormalizer->denormalize($data['FRSPaymentInformation'], 'ShipStream\\Ups\\Api\\Model\\RateShipmentFRSPaymentInformation', 'json', $context));
                unset($data['FRSPaymentInformation']);
            }
            if (\array_key_exists('FreightShipmentInformation', $data)) {
                $object->setFreightShipmentInformation($this->denormalizer->denormalize($data['FreightShipmentInformation'], 'ShipStream\\Ups\\Api\\Model\\ShipmentFreightShipmentInformation', 'json', $context));
                unset($data['FreightShipmentInformation']);
            }
            if (\array_key_exists('GoodsNotInFreeCirculationIndicator', $data)) {
                $object->setGoodsNotInFreeCirculationIndicator($data['GoodsNotInFreeCirculationIndicator']);
                unset($data['GoodsNotInFreeCirculationIndicator']);
            }
            if (\array_key_exists('Service', $data)) {
                $object->setService($this->denormalizer->denormalize($data['Service'], 'ShipStream\\Ups\\Api\\Model\\ShipmentService', 'json', $context));
                unset($data['Service']);
            }
            if (\array_key_exists('NumOfPieces', $data)) {
                $object->setNumOfPieces($data['NumOfPieces']);
                unset($data['NumOfPieces']);
            }
            if (\array_key_exists('ShipmentTotalWeight', $data)) {
                $object->setShipmentTotalWeight($this->denormalizer->denormalize($data['ShipmentTotalWeight'], 'ShipStream\\Ups\\Api\\Model\\ShipmentShipmentTotalWeight', 'json', $context));
                unset($data['ShipmentTotalWeight']);
            }
            if (\array_key_exists('DocumentsOnlyIndicator', $data)) {
                $object->setDocumentsOnlyIndicator($data['DocumentsOnlyIndicator']);
                unset($data['DocumentsOnlyIndicator']);
            }
            if (\array_key_exists('Package', $data)) {
                $values_1 = [];
                foreach ($data['Package'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'ShipStream\\Ups\\Api\\Model\\RateShipmentPackage', 'json', $context);
                }
                $object->setPackage($values_1);
                unset($data['Package']);
            }
            if (\array_key_exists('ShipmentServiceOptions', $data)) {
                $object->setShipmentServiceOptions($this->denormalizer->denormalize($data['ShipmentServiceOptions'], 'ShipStream\\Ups\\Api\\Model\\RateShipmentShipmentServiceOptions', 'json', $context));
                unset($data['ShipmentServiceOptions']);
            }
            if (\array_key_exists('ShipmentRatingOptions', $data)) {
                $object->setShipmentRatingOptions($this->denormalizer->denormalize($data['ShipmentRatingOptions'], 'ShipStream\\Ups\\Api\\Model\\ShipmentShipmentRatingOptions', 'json', $context));
                unset($data['ShipmentRatingOptions']);
            }
            if (\array_key_exists('InvoiceLineTotal', $data)) {
                $object->setInvoiceLineTotal($this->denormalizer->denormalize($data['InvoiceLineTotal'], 'ShipStream\\Ups\\Api\\Model\\ShipmentInvoiceLineTotal', 'json', $context));
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
                $object->setPromotionalDiscountInformation($this->denormalizer->denormalize($data['PromotionalDiscountInformation'], 'ShipStream\\Ups\\Api\\Model\\ShipmentPromotionalDiscountInformation', 'json', $context));
                unset($data['PromotionalDiscountInformation']);
            }
            if (\array_key_exists('DeliveryTimeInformation', $data)) {
                $object->setDeliveryTimeInformation($this->denormalizer->denormalize($data['DeliveryTimeInformation'], 'ShipStream\\Ups\\Api\\Model\\ShipmentDeliveryTimeInformation', 'json', $context));
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