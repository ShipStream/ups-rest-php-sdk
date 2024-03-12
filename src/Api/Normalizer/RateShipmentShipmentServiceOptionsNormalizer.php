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
    class RateShipmentShipmentServiceOptionsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\RateShipmentShipmentServiceOptions';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\RateShipmentShipmentServiceOptions';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \ShipStream\Ups\Api\Model\RateShipmentShipmentServiceOptions();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('SaturdayPickupIndicator', $data)) {
                $object->setSaturdayPickupIndicator($data['SaturdayPickupIndicator']);
                unset($data['SaturdayPickupIndicator']);
            }
            if (\array_key_exists('SaturdayDeliveryIndicator', $data)) {
                $object->setSaturdayDeliveryIndicator($data['SaturdayDeliveryIndicator']);
                unset($data['SaturdayDeliveryIndicator']);
            }
            if (\array_key_exists('SundayDeliveryIndicator', $data)) {
                $object->setSundayDeliveryIndicator($data['SundayDeliveryIndicator']);
                unset($data['SundayDeliveryIndicator']);
            }
            if (\array_key_exists('AvailableServicesOption', $data)) {
                $object->setAvailableServicesOption($data['AvailableServicesOption']);
                unset($data['AvailableServicesOption']);
            }
            if (\array_key_exists('AccessPointCOD', $data)) {
                $object->setAccessPointCOD($this->denormalizer->denormalize($data['AccessPointCOD'], 'ShipStream\\Ups\\Api\\Model\\ShipmentServiceOptionsAccessPointCOD', 'json', $context));
                unset($data['AccessPointCOD']);
            }
            if (\array_key_exists('DeliverToAddresseeOnlyIndicator', $data)) {
                $object->setDeliverToAddresseeOnlyIndicator($data['DeliverToAddresseeOnlyIndicator']);
                unset($data['DeliverToAddresseeOnlyIndicator']);
            }
            if (\array_key_exists('DirectDeliveryOnlyIndicator', $data)) {
                $object->setDirectDeliveryOnlyIndicator($data['DirectDeliveryOnlyIndicator']);
                unset($data['DirectDeliveryOnlyIndicator']);
            }
            if (\array_key_exists('COD', $data)) {
                $object->setCOD($this->denormalizer->denormalize($data['COD'], 'ShipStream\\Ups\\Api\\Model\\ShipmentServiceOptionsCOD', 'json', $context));
                unset($data['COD']);
            }
            if (\array_key_exists('DeliveryConfirmation', $data)) {
                $object->setDeliveryConfirmation($this->denormalizer->denormalize($data['DeliveryConfirmation'], 'ShipStream\\Ups\\Api\\Model\\RateShipmentServiceOptionsDeliveryConfirmation', 'json', $context));
                unset($data['DeliveryConfirmation']);
            }
            if (\array_key_exists('ReturnOfDocumentIndicator', $data)) {
                $object->setReturnOfDocumentIndicator($data['ReturnOfDocumentIndicator']);
                unset($data['ReturnOfDocumentIndicator']);
            }
            if (\array_key_exists('UPScarbonneutralIndicator', $data)) {
                $object->setUPScarbonneutralIndicator($data['UPScarbonneutralIndicator']);
                unset($data['UPScarbonneutralIndicator']);
            }
            if (\array_key_exists('CertificateOfOriginIndicator', $data)) {
                $object->setCertificateOfOriginIndicator($data['CertificateOfOriginIndicator']);
                unset($data['CertificateOfOriginIndicator']);
            }
            if (\array_key_exists('PickupOptions', $data)) {
                $object->setPickupOptions($this->denormalizer->denormalize($data['PickupOptions'], 'ShipStream\\Ups\\Api\\Model\\ShipmentServiceOptionsPickupOptions', 'json', $context));
                unset($data['PickupOptions']);
            }
            if (\array_key_exists('DeliveryOptions', $data)) {
                $object->setDeliveryOptions($this->denormalizer->denormalize($data['DeliveryOptions'], 'ShipStream\\Ups\\Api\\Model\\ShipmentServiceOptionsDeliveryOptions', 'json', $context));
                unset($data['DeliveryOptions']);
            }
            if (\array_key_exists('RestrictedArticles', $data)) {
                $object->setRestrictedArticles($this->denormalizer->denormalize($data['RestrictedArticles'], 'ShipStream\\Ups\\Api\\Model\\RateShipmentServiceOptionsRestrictedArticles', 'json', $context));
                unset($data['RestrictedArticles']);
            }
            if (\array_key_exists('ShipperExportDeclarationIndicator', $data)) {
                $object->setShipperExportDeclarationIndicator($data['ShipperExportDeclarationIndicator']);
                unset($data['ShipperExportDeclarationIndicator']);
            }
            if (\array_key_exists('CommercialInvoiceRemovalIndicator', $data)) {
                $object->setCommercialInvoiceRemovalIndicator($data['CommercialInvoiceRemovalIndicator']);
                unset($data['CommercialInvoiceRemovalIndicator']);
            }
            if (\array_key_exists('ImportControl', $data)) {
                $object->setImportControl($this->denormalizer->denormalize($data['ImportControl'], 'ShipStream\\Ups\\Api\\Model\\ShipmentServiceOptionsImportControl', 'json', $context));
                unset($data['ImportControl']);
            }
            if (\array_key_exists('ReturnService', $data)) {
                $object->setReturnService($this->denormalizer->denormalize($data['ReturnService'], 'ShipStream\\Ups\\Api\\Model\\ShipmentServiceOptionsReturnService', 'json', $context));
                unset($data['ReturnService']);
            }
            if (\array_key_exists('SDLShipmentIndicator', $data)) {
                $object->setSDLShipmentIndicator($data['SDLShipmentIndicator']);
                unset($data['SDLShipmentIndicator']);
            }
            if (\array_key_exists('EPRAIndicator', $data)) {
                $object->setEPRAIndicator($data['EPRAIndicator']);
                unset($data['EPRAIndicator']);
            }
            if (\array_key_exists('InsideDelivery', $data)) {
                $object->setInsideDelivery($data['InsideDelivery']);
                unset($data['InsideDelivery']);
            }
            if (\array_key_exists('ItemDisposalIndicator', $data)) {
                $object->setItemDisposalIndicator($data['ItemDisposalIndicator']);
                unset($data['ItemDisposalIndicator']);
            }
            foreach ($data as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('saturdayPickupIndicator') && null !== $object->getSaturdayPickupIndicator()) {
                $data['SaturdayPickupIndicator'] = $object->getSaturdayPickupIndicator();
            }
            if ($object->isInitialized('saturdayDeliveryIndicator') && null !== $object->getSaturdayDeliveryIndicator()) {
                $data['SaturdayDeliveryIndicator'] = $object->getSaturdayDeliveryIndicator();
            }
            if ($object->isInitialized('sundayDeliveryIndicator') && null !== $object->getSundayDeliveryIndicator()) {
                $data['SundayDeliveryIndicator'] = $object->getSundayDeliveryIndicator();
            }
            if ($object->isInitialized('availableServicesOption') && null !== $object->getAvailableServicesOption()) {
                $data['AvailableServicesOption'] = $object->getAvailableServicesOption();
            }
            if ($object->isInitialized('accessPointCOD') && null !== $object->getAccessPointCOD()) {
                $data['AccessPointCOD'] = $this->normalizer->normalize($object->getAccessPointCOD(), 'json', $context);
            }
            if ($object->isInitialized('deliverToAddresseeOnlyIndicator') && null !== $object->getDeliverToAddresseeOnlyIndicator()) {
                $data['DeliverToAddresseeOnlyIndicator'] = $object->getDeliverToAddresseeOnlyIndicator();
            }
            if ($object->isInitialized('directDeliveryOnlyIndicator') && null !== $object->getDirectDeliveryOnlyIndicator()) {
                $data['DirectDeliveryOnlyIndicator'] = $object->getDirectDeliveryOnlyIndicator();
            }
            if ($object->isInitialized('cOD') && null !== $object->getCOD()) {
                $data['COD'] = $this->normalizer->normalize($object->getCOD(), 'json', $context);
            }
            if ($object->isInitialized('deliveryConfirmation') && null !== $object->getDeliveryConfirmation()) {
                $data['DeliveryConfirmation'] = $this->normalizer->normalize($object->getDeliveryConfirmation(), 'json', $context);
            }
            if ($object->isInitialized('returnOfDocumentIndicator') && null !== $object->getReturnOfDocumentIndicator()) {
                $data['ReturnOfDocumentIndicator'] = $object->getReturnOfDocumentIndicator();
            }
            if ($object->isInitialized('uPScarbonneutralIndicator') && null !== $object->getUPScarbonneutralIndicator()) {
                $data['UPScarbonneutralIndicator'] = $object->getUPScarbonneutralIndicator();
            }
            if ($object->isInitialized('certificateOfOriginIndicator') && null !== $object->getCertificateOfOriginIndicator()) {
                $data['CertificateOfOriginIndicator'] = $object->getCertificateOfOriginIndicator();
            }
            if ($object->isInitialized('pickupOptions') && null !== $object->getPickupOptions()) {
                $data['PickupOptions'] = $this->normalizer->normalize($object->getPickupOptions(), 'json', $context);
            }
            if ($object->isInitialized('deliveryOptions') && null !== $object->getDeliveryOptions()) {
                $data['DeliveryOptions'] = $this->normalizer->normalize($object->getDeliveryOptions(), 'json', $context);
            }
            if ($object->isInitialized('restrictedArticles') && null !== $object->getRestrictedArticles()) {
                $data['RestrictedArticles'] = $this->normalizer->normalize($object->getRestrictedArticles(), 'json', $context);
            }
            if ($object->isInitialized('shipperExportDeclarationIndicator') && null !== $object->getShipperExportDeclarationIndicator()) {
                $data['ShipperExportDeclarationIndicator'] = $object->getShipperExportDeclarationIndicator();
            }
            if ($object->isInitialized('commercialInvoiceRemovalIndicator') && null !== $object->getCommercialInvoiceRemovalIndicator()) {
                $data['CommercialInvoiceRemovalIndicator'] = $object->getCommercialInvoiceRemovalIndicator();
            }
            if ($object->isInitialized('importControl') && null !== $object->getImportControl()) {
                $data['ImportControl'] = $this->normalizer->normalize($object->getImportControl(), 'json', $context);
            }
            if ($object->isInitialized('returnService') && null !== $object->getReturnService()) {
                $data['ReturnService'] = $this->normalizer->normalize($object->getReturnService(), 'json', $context);
            }
            if ($object->isInitialized('sDLShipmentIndicator') && null !== $object->getSDLShipmentIndicator()) {
                $data['SDLShipmentIndicator'] = $object->getSDLShipmentIndicator();
            }
            if ($object->isInitialized('ePRAIndicator') && null !== $object->getEPRAIndicator()) {
                $data['EPRAIndicator'] = $object->getEPRAIndicator();
            }
            if ($object->isInitialized('insideDelivery') && null !== $object->getInsideDelivery()) {
                $data['InsideDelivery'] = $object->getInsideDelivery();
            }
            if ($object->isInitialized('itemDisposalIndicator') && null !== $object->getItemDisposalIndicator()) {
                $data['ItemDisposalIndicator'] = $object->getItemDisposalIndicator();
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['ShipStream\\Ups\\Api\\Model\\RateShipmentShipmentServiceOptions' => false];
        }
    }
} else {
    class RateShipmentShipmentServiceOptionsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\RateShipmentShipmentServiceOptions';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\RateShipmentShipmentServiceOptions';
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
            $object = new \ShipStream\Ups\Api\Model\RateShipmentShipmentServiceOptions();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('SaturdayPickupIndicator', $data)) {
                $object->setSaturdayPickupIndicator($data['SaturdayPickupIndicator']);
                unset($data['SaturdayPickupIndicator']);
            }
            if (\array_key_exists('SaturdayDeliveryIndicator', $data)) {
                $object->setSaturdayDeliveryIndicator($data['SaturdayDeliveryIndicator']);
                unset($data['SaturdayDeliveryIndicator']);
            }
            if (\array_key_exists('SundayDeliveryIndicator', $data)) {
                $object->setSundayDeliveryIndicator($data['SundayDeliveryIndicator']);
                unset($data['SundayDeliveryIndicator']);
            }
            if (\array_key_exists('AvailableServicesOption', $data)) {
                $object->setAvailableServicesOption($data['AvailableServicesOption']);
                unset($data['AvailableServicesOption']);
            }
            if (\array_key_exists('AccessPointCOD', $data)) {
                $object->setAccessPointCOD($this->denormalizer->denormalize($data['AccessPointCOD'], 'ShipStream\\Ups\\Api\\Model\\ShipmentServiceOptionsAccessPointCOD', 'json', $context));
                unset($data['AccessPointCOD']);
            }
            if (\array_key_exists('DeliverToAddresseeOnlyIndicator', $data)) {
                $object->setDeliverToAddresseeOnlyIndicator($data['DeliverToAddresseeOnlyIndicator']);
                unset($data['DeliverToAddresseeOnlyIndicator']);
            }
            if (\array_key_exists('DirectDeliveryOnlyIndicator', $data)) {
                $object->setDirectDeliveryOnlyIndicator($data['DirectDeliveryOnlyIndicator']);
                unset($data['DirectDeliveryOnlyIndicator']);
            }
            if (\array_key_exists('COD', $data)) {
                $object->setCOD($this->denormalizer->denormalize($data['COD'], 'ShipStream\\Ups\\Api\\Model\\ShipmentServiceOptionsCOD', 'json', $context));
                unset($data['COD']);
            }
            if (\array_key_exists('DeliveryConfirmation', $data)) {
                $object->setDeliveryConfirmation($this->denormalizer->denormalize($data['DeliveryConfirmation'], 'ShipStream\\Ups\\Api\\Model\\RateShipmentServiceOptionsDeliveryConfirmation', 'json', $context));
                unset($data['DeliveryConfirmation']);
            }
            if (\array_key_exists('ReturnOfDocumentIndicator', $data)) {
                $object->setReturnOfDocumentIndicator($data['ReturnOfDocumentIndicator']);
                unset($data['ReturnOfDocumentIndicator']);
            }
            if (\array_key_exists('UPScarbonneutralIndicator', $data)) {
                $object->setUPScarbonneutralIndicator($data['UPScarbonneutralIndicator']);
                unset($data['UPScarbonneutralIndicator']);
            }
            if (\array_key_exists('CertificateOfOriginIndicator', $data)) {
                $object->setCertificateOfOriginIndicator($data['CertificateOfOriginIndicator']);
                unset($data['CertificateOfOriginIndicator']);
            }
            if (\array_key_exists('PickupOptions', $data)) {
                $object->setPickupOptions($this->denormalizer->denormalize($data['PickupOptions'], 'ShipStream\\Ups\\Api\\Model\\ShipmentServiceOptionsPickupOptions', 'json', $context));
                unset($data['PickupOptions']);
            }
            if (\array_key_exists('DeliveryOptions', $data)) {
                $object->setDeliveryOptions($this->denormalizer->denormalize($data['DeliveryOptions'], 'ShipStream\\Ups\\Api\\Model\\ShipmentServiceOptionsDeliveryOptions', 'json', $context));
                unset($data['DeliveryOptions']);
            }
            if (\array_key_exists('RestrictedArticles', $data)) {
                $object->setRestrictedArticles($this->denormalizer->denormalize($data['RestrictedArticles'], 'ShipStream\\Ups\\Api\\Model\\RateShipmentServiceOptionsRestrictedArticles', 'json', $context));
                unset($data['RestrictedArticles']);
            }
            if (\array_key_exists('ShipperExportDeclarationIndicator', $data)) {
                $object->setShipperExportDeclarationIndicator($data['ShipperExportDeclarationIndicator']);
                unset($data['ShipperExportDeclarationIndicator']);
            }
            if (\array_key_exists('CommercialInvoiceRemovalIndicator', $data)) {
                $object->setCommercialInvoiceRemovalIndicator($data['CommercialInvoiceRemovalIndicator']);
                unset($data['CommercialInvoiceRemovalIndicator']);
            }
            if (\array_key_exists('ImportControl', $data)) {
                $object->setImportControl($this->denormalizer->denormalize($data['ImportControl'], 'ShipStream\\Ups\\Api\\Model\\ShipmentServiceOptionsImportControl', 'json', $context));
                unset($data['ImportControl']);
            }
            if (\array_key_exists('ReturnService', $data)) {
                $object->setReturnService($this->denormalizer->denormalize($data['ReturnService'], 'ShipStream\\Ups\\Api\\Model\\ShipmentServiceOptionsReturnService', 'json', $context));
                unset($data['ReturnService']);
            }
            if (\array_key_exists('SDLShipmentIndicator', $data)) {
                $object->setSDLShipmentIndicator($data['SDLShipmentIndicator']);
                unset($data['SDLShipmentIndicator']);
            }
            if (\array_key_exists('EPRAIndicator', $data)) {
                $object->setEPRAIndicator($data['EPRAIndicator']);
                unset($data['EPRAIndicator']);
            }
            if (\array_key_exists('InsideDelivery', $data)) {
                $object->setInsideDelivery($data['InsideDelivery']);
                unset($data['InsideDelivery']);
            }
            if (\array_key_exists('ItemDisposalIndicator', $data)) {
                $object->setItemDisposalIndicator($data['ItemDisposalIndicator']);
                unset($data['ItemDisposalIndicator']);
            }
            foreach ($data as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value;
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
            if ($object->isInitialized('saturdayPickupIndicator') && null !== $object->getSaturdayPickupIndicator()) {
                $data['SaturdayPickupIndicator'] = $object->getSaturdayPickupIndicator();
            }
            if ($object->isInitialized('saturdayDeliveryIndicator') && null !== $object->getSaturdayDeliveryIndicator()) {
                $data['SaturdayDeliveryIndicator'] = $object->getSaturdayDeliveryIndicator();
            }
            if ($object->isInitialized('sundayDeliveryIndicator') && null !== $object->getSundayDeliveryIndicator()) {
                $data['SundayDeliveryIndicator'] = $object->getSundayDeliveryIndicator();
            }
            if ($object->isInitialized('availableServicesOption') && null !== $object->getAvailableServicesOption()) {
                $data['AvailableServicesOption'] = $object->getAvailableServicesOption();
            }
            if ($object->isInitialized('accessPointCOD') && null !== $object->getAccessPointCOD()) {
                $data['AccessPointCOD'] = $this->normalizer->normalize($object->getAccessPointCOD(), 'json', $context);
            }
            if ($object->isInitialized('deliverToAddresseeOnlyIndicator') && null !== $object->getDeliverToAddresseeOnlyIndicator()) {
                $data['DeliverToAddresseeOnlyIndicator'] = $object->getDeliverToAddresseeOnlyIndicator();
            }
            if ($object->isInitialized('directDeliveryOnlyIndicator') && null !== $object->getDirectDeliveryOnlyIndicator()) {
                $data['DirectDeliveryOnlyIndicator'] = $object->getDirectDeliveryOnlyIndicator();
            }
            if ($object->isInitialized('cOD') && null !== $object->getCOD()) {
                $data['COD'] = $this->normalizer->normalize($object->getCOD(), 'json', $context);
            }
            if ($object->isInitialized('deliveryConfirmation') && null !== $object->getDeliveryConfirmation()) {
                $data['DeliveryConfirmation'] = $this->normalizer->normalize($object->getDeliveryConfirmation(), 'json', $context);
            }
            if ($object->isInitialized('returnOfDocumentIndicator') && null !== $object->getReturnOfDocumentIndicator()) {
                $data['ReturnOfDocumentIndicator'] = $object->getReturnOfDocumentIndicator();
            }
            if ($object->isInitialized('uPScarbonneutralIndicator') && null !== $object->getUPScarbonneutralIndicator()) {
                $data['UPScarbonneutralIndicator'] = $object->getUPScarbonneutralIndicator();
            }
            if ($object->isInitialized('certificateOfOriginIndicator') && null !== $object->getCertificateOfOriginIndicator()) {
                $data['CertificateOfOriginIndicator'] = $object->getCertificateOfOriginIndicator();
            }
            if ($object->isInitialized('pickupOptions') && null !== $object->getPickupOptions()) {
                $data['PickupOptions'] = $this->normalizer->normalize($object->getPickupOptions(), 'json', $context);
            }
            if ($object->isInitialized('deliveryOptions') && null !== $object->getDeliveryOptions()) {
                $data['DeliveryOptions'] = $this->normalizer->normalize($object->getDeliveryOptions(), 'json', $context);
            }
            if ($object->isInitialized('restrictedArticles') && null !== $object->getRestrictedArticles()) {
                $data['RestrictedArticles'] = $this->normalizer->normalize($object->getRestrictedArticles(), 'json', $context);
            }
            if ($object->isInitialized('shipperExportDeclarationIndicator') && null !== $object->getShipperExportDeclarationIndicator()) {
                $data['ShipperExportDeclarationIndicator'] = $object->getShipperExportDeclarationIndicator();
            }
            if ($object->isInitialized('commercialInvoiceRemovalIndicator') && null !== $object->getCommercialInvoiceRemovalIndicator()) {
                $data['CommercialInvoiceRemovalIndicator'] = $object->getCommercialInvoiceRemovalIndicator();
            }
            if ($object->isInitialized('importControl') && null !== $object->getImportControl()) {
                $data['ImportControl'] = $this->normalizer->normalize($object->getImportControl(), 'json', $context);
            }
            if ($object->isInitialized('returnService') && null !== $object->getReturnService()) {
                $data['ReturnService'] = $this->normalizer->normalize($object->getReturnService(), 'json', $context);
            }
            if ($object->isInitialized('sDLShipmentIndicator') && null !== $object->getSDLShipmentIndicator()) {
                $data['SDLShipmentIndicator'] = $object->getSDLShipmentIndicator();
            }
            if ($object->isInitialized('ePRAIndicator') && null !== $object->getEPRAIndicator()) {
                $data['EPRAIndicator'] = $object->getEPRAIndicator();
            }
            if ($object->isInitialized('insideDelivery') && null !== $object->getInsideDelivery()) {
                $data['InsideDelivery'] = $object->getInsideDelivery();
            }
            if ($object->isInitialized('itemDisposalIndicator') && null !== $object->getItemDisposalIndicator()) {
                $data['ItemDisposalIndicator'] = $object->getItemDisposalIndicator();
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['ShipStream\\Ups\\Api\\Model\\RateShipmentShipmentServiceOptions' => false];
        }
    }
}