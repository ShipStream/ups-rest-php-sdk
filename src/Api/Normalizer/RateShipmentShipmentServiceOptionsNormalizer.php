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
            if (\array_key_exists('SaturdayPickupIndicator', $data) && $data['SaturdayPickupIndicator'] !== null) {
                $object->setSaturdayPickupIndicator($data['SaturdayPickupIndicator']);
                unset($data['SaturdayPickupIndicator']);
            }
            elseif (\array_key_exists('SaturdayPickupIndicator', $data) && $data['SaturdayPickupIndicator'] === null) {
                $object->setSaturdayPickupIndicator(null);
            }
            if (\array_key_exists('SaturdayDeliveryIndicator', $data) && $data['SaturdayDeliveryIndicator'] !== null) {
                $object->setSaturdayDeliveryIndicator($data['SaturdayDeliveryIndicator']);
                unset($data['SaturdayDeliveryIndicator']);
            }
            elseif (\array_key_exists('SaturdayDeliveryIndicator', $data) && $data['SaturdayDeliveryIndicator'] === null) {
                $object->setSaturdayDeliveryIndicator(null);
            }
            if (\array_key_exists('SundayDeliveryIndicator', $data) && $data['SundayDeliveryIndicator'] !== null) {
                $object->setSundayDeliveryIndicator($data['SundayDeliveryIndicator']);
                unset($data['SundayDeliveryIndicator']);
            }
            elseif (\array_key_exists('SundayDeliveryIndicator', $data) && $data['SundayDeliveryIndicator'] === null) {
                $object->setSundayDeliveryIndicator(null);
            }
            if (\array_key_exists('AvailableServicesOption', $data) && $data['AvailableServicesOption'] !== null) {
                $object->setAvailableServicesOption($data['AvailableServicesOption']);
                unset($data['AvailableServicesOption']);
            }
            elseif (\array_key_exists('AvailableServicesOption', $data) && $data['AvailableServicesOption'] === null) {
                $object->setAvailableServicesOption(null);
            }
            if (\array_key_exists('AccessPointCOD', $data) && $data['AccessPointCOD'] !== null) {
                $object->setAccessPointCOD($this->denormalizer->denormalize($data['AccessPointCOD'], 'ShipStream\\Ups\\Api\\Model\\ShipmentServiceOptionsAccessPointCOD', 'json', $context));
                unset($data['AccessPointCOD']);
            }
            elseif (\array_key_exists('AccessPointCOD', $data) && $data['AccessPointCOD'] === null) {
                $object->setAccessPointCOD(null);
            }
            if (\array_key_exists('DeliverToAddresseeOnlyIndicator', $data) && $data['DeliverToAddresseeOnlyIndicator'] !== null) {
                $object->setDeliverToAddresseeOnlyIndicator($data['DeliverToAddresseeOnlyIndicator']);
                unset($data['DeliverToAddresseeOnlyIndicator']);
            }
            elseif (\array_key_exists('DeliverToAddresseeOnlyIndicator', $data) && $data['DeliverToAddresseeOnlyIndicator'] === null) {
                $object->setDeliverToAddresseeOnlyIndicator(null);
            }
            if (\array_key_exists('DirectDeliveryOnlyIndicator', $data) && $data['DirectDeliveryOnlyIndicator'] !== null) {
                $object->setDirectDeliveryOnlyIndicator($data['DirectDeliveryOnlyIndicator']);
                unset($data['DirectDeliveryOnlyIndicator']);
            }
            elseif (\array_key_exists('DirectDeliveryOnlyIndicator', $data) && $data['DirectDeliveryOnlyIndicator'] === null) {
                $object->setDirectDeliveryOnlyIndicator(null);
            }
            if (\array_key_exists('COD', $data) && $data['COD'] !== null) {
                $object->setCOD($this->denormalizer->denormalize($data['COD'], 'ShipStream\\Ups\\Api\\Model\\ShipmentServiceOptionsCOD', 'json', $context));
                unset($data['COD']);
            }
            elseif (\array_key_exists('COD', $data) && $data['COD'] === null) {
                $object->setCOD(null);
            }
            if (\array_key_exists('DeliveryConfirmation', $data) && $data['DeliveryConfirmation'] !== null) {
                $object->setDeliveryConfirmation($this->denormalizer->denormalize($data['DeliveryConfirmation'], 'ShipStream\\Ups\\Api\\Model\\RateShipmentServiceOptionsDeliveryConfirmation', 'json', $context));
                unset($data['DeliveryConfirmation']);
            }
            elseif (\array_key_exists('DeliveryConfirmation', $data) && $data['DeliveryConfirmation'] === null) {
                $object->setDeliveryConfirmation(null);
            }
            if (\array_key_exists('ReturnOfDocumentIndicator', $data) && $data['ReturnOfDocumentIndicator'] !== null) {
                $object->setReturnOfDocumentIndicator($data['ReturnOfDocumentIndicator']);
                unset($data['ReturnOfDocumentIndicator']);
            }
            elseif (\array_key_exists('ReturnOfDocumentIndicator', $data) && $data['ReturnOfDocumentIndicator'] === null) {
                $object->setReturnOfDocumentIndicator(null);
            }
            if (\array_key_exists('UPScarbonneutralIndicator', $data) && $data['UPScarbonneutralIndicator'] !== null) {
                $object->setUPScarbonneutralIndicator($data['UPScarbonneutralIndicator']);
                unset($data['UPScarbonneutralIndicator']);
            }
            elseif (\array_key_exists('UPScarbonneutralIndicator', $data) && $data['UPScarbonneutralIndicator'] === null) {
                $object->setUPScarbonneutralIndicator(null);
            }
            if (\array_key_exists('CertificateOfOriginIndicator', $data) && $data['CertificateOfOriginIndicator'] !== null) {
                $object->setCertificateOfOriginIndicator($data['CertificateOfOriginIndicator']);
                unset($data['CertificateOfOriginIndicator']);
            }
            elseif (\array_key_exists('CertificateOfOriginIndicator', $data) && $data['CertificateOfOriginIndicator'] === null) {
                $object->setCertificateOfOriginIndicator(null);
            }
            if (\array_key_exists('PickupOptions', $data) && $data['PickupOptions'] !== null) {
                $object->setPickupOptions($this->denormalizer->denormalize($data['PickupOptions'], 'ShipStream\\Ups\\Api\\Model\\ShipmentServiceOptionsPickupOptions', 'json', $context));
                unset($data['PickupOptions']);
            }
            elseif (\array_key_exists('PickupOptions', $data) && $data['PickupOptions'] === null) {
                $object->setPickupOptions(null);
            }
            if (\array_key_exists('DeliveryOptions', $data) && $data['DeliveryOptions'] !== null) {
                $object->setDeliveryOptions($this->denormalizer->denormalize($data['DeliveryOptions'], 'ShipStream\\Ups\\Api\\Model\\ShipmentServiceOptionsDeliveryOptions', 'json', $context));
                unset($data['DeliveryOptions']);
            }
            elseif (\array_key_exists('DeliveryOptions', $data) && $data['DeliveryOptions'] === null) {
                $object->setDeliveryOptions(null);
            }
            if (\array_key_exists('RestrictedArticles', $data) && $data['RestrictedArticles'] !== null) {
                $object->setRestrictedArticles($this->denormalizer->denormalize($data['RestrictedArticles'], 'ShipStream\\Ups\\Api\\Model\\RateShipmentServiceOptionsRestrictedArticles', 'json', $context));
                unset($data['RestrictedArticles']);
            }
            elseif (\array_key_exists('RestrictedArticles', $data) && $data['RestrictedArticles'] === null) {
                $object->setRestrictedArticles(null);
            }
            if (\array_key_exists('ShipperExportDeclarationIndicator', $data) && $data['ShipperExportDeclarationIndicator'] !== null) {
                $object->setShipperExportDeclarationIndicator($data['ShipperExportDeclarationIndicator']);
                unset($data['ShipperExportDeclarationIndicator']);
            }
            elseif (\array_key_exists('ShipperExportDeclarationIndicator', $data) && $data['ShipperExportDeclarationIndicator'] === null) {
                $object->setShipperExportDeclarationIndicator(null);
            }
            if (\array_key_exists('CommercialInvoiceRemovalIndicator', $data) && $data['CommercialInvoiceRemovalIndicator'] !== null) {
                $object->setCommercialInvoiceRemovalIndicator($data['CommercialInvoiceRemovalIndicator']);
                unset($data['CommercialInvoiceRemovalIndicator']);
            }
            elseif (\array_key_exists('CommercialInvoiceRemovalIndicator', $data) && $data['CommercialInvoiceRemovalIndicator'] === null) {
                $object->setCommercialInvoiceRemovalIndicator(null);
            }
            if (\array_key_exists('ImportControl', $data) && $data['ImportControl'] !== null) {
                $object->setImportControl($this->denormalizer->denormalize($data['ImportControl'], 'ShipStream\\Ups\\Api\\Model\\ShipmentServiceOptionsImportControl', 'json', $context));
                unset($data['ImportControl']);
            }
            elseif (\array_key_exists('ImportControl', $data) && $data['ImportControl'] === null) {
                $object->setImportControl(null);
            }
            if (\array_key_exists('ReturnService', $data) && $data['ReturnService'] !== null) {
                $object->setReturnService($this->denormalizer->denormalize($data['ReturnService'], 'ShipStream\\Ups\\Api\\Model\\ShipmentServiceOptionsReturnService', 'json', $context));
                unset($data['ReturnService']);
            }
            elseif (\array_key_exists('ReturnService', $data) && $data['ReturnService'] === null) {
                $object->setReturnService(null);
            }
            if (\array_key_exists('SDLShipmentIndicator', $data) && $data['SDLShipmentIndicator'] !== null) {
                $object->setSDLShipmentIndicator($data['SDLShipmentIndicator']);
                unset($data['SDLShipmentIndicator']);
            }
            elseif (\array_key_exists('SDLShipmentIndicator', $data) && $data['SDLShipmentIndicator'] === null) {
                $object->setSDLShipmentIndicator(null);
            }
            if (\array_key_exists('EPRAIndicator', $data) && $data['EPRAIndicator'] !== null) {
                $object->setEPRAIndicator($data['EPRAIndicator']);
                unset($data['EPRAIndicator']);
            }
            elseif (\array_key_exists('EPRAIndicator', $data) && $data['EPRAIndicator'] === null) {
                $object->setEPRAIndicator(null);
            }
            if (\array_key_exists('InsideDelivery', $data) && $data['InsideDelivery'] !== null) {
                $object->setInsideDelivery($data['InsideDelivery']);
                unset($data['InsideDelivery']);
            }
            elseif (\array_key_exists('InsideDelivery', $data) && $data['InsideDelivery'] === null) {
                $object->setInsideDelivery(null);
            }
            if (\array_key_exists('ItemDisposalIndicator', $data) && $data['ItemDisposalIndicator'] !== null) {
                $object->setItemDisposalIndicator($data['ItemDisposalIndicator']);
                unset($data['ItemDisposalIndicator']);
            }
            elseif (\array_key_exists('ItemDisposalIndicator', $data) && $data['ItemDisposalIndicator'] === null) {
                $object->setItemDisposalIndicator(null);
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
            if (\array_key_exists('SaturdayPickupIndicator', $data) && $data['SaturdayPickupIndicator'] !== null) {
                $object->setSaturdayPickupIndicator($data['SaturdayPickupIndicator']);
                unset($data['SaturdayPickupIndicator']);
            }
            elseif (\array_key_exists('SaturdayPickupIndicator', $data) && $data['SaturdayPickupIndicator'] === null) {
                $object->setSaturdayPickupIndicator(null);
            }
            if (\array_key_exists('SaturdayDeliveryIndicator', $data) && $data['SaturdayDeliveryIndicator'] !== null) {
                $object->setSaturdayDeliveryIndicator($data['SaturdayDeliveryIndicator']);
                unset($data['SaturdayDeliveryIndicator']);
            }
            elseif (\array_key_exists('SaturdayDeliveryIndicator', $data) && $data['SaturdayDeliveryIndicator'] === null) {
                $object->setSaturdayDeliveryIndicator(null);
            }
            if (\array_key_exists('SundayDeliveryIndicator', $data) && $data['SundayDeliveryIndicator'] !== null) {
                $object->setSundayDeliveryIndicator($data['SundayDeliveryIndicator']);
                unset($data['SundayDeliveryIndicator']);
            }
            elseif (\array_key_exists('SundayDeliveryIndicator', $data) && $data['SundayDeliveryIndicator'] === null) {
                $object->setSundayDeliveryIndicator(null);
            }
            if (\array_key_exists('AvailableServicesOption', $data) && $data['AvailableServicesOption'] !== null) {
                $object->setAvailableServicesOption($data['AvailableServicesOption']);
                unset($data['AvailableServicesOption']);
            }
            elseif (\array_key_exists('AvailableServicesOption', $data) && $data['AvailableServicesOption'] === null) {
                $object->setAvailableServicesOption(null);
            }
            if (\array_key_exists('AccessPointCOD', $data) && $data['AccessPointCOD'] !== null) {
                $object->setAccessPointCOD($this->denormalizer->denormalize($data['AccessPointCOD'], 'ShipStream\\Ups\\Api\\Model\\ShipmentServiceOptionsAccessPointCOD', 'json', $context));
                unset($data['AccessPointCOD']);
            }
            elseif (\array_key_exists('AccessPointCOD', $data) && $data['AccessPointCOD'] === null) {
                $object->setAccessPointCOD(null);
            }
            if (\array_key_exists('DeliverToAddresseeOnlyIndicator', $data) && $data['DeliverToAddresseeOnlyIndicator'] !== null) {
                $object->setDeliverToAddresseeOnlyIndicator($data['DeliverToAddresseeOnlyIndicator']);
                unset($data['DeliverToAddresseeOnlyIndicator']);
            }
            elseif (\array_key_exists('DeliverToAddresseeOnlyIndicator', $data) && $data['DeliverToAddresseeOnlyIndicator'] === null) {
                $object->setDeliverToAddresseeOnlyIndicator(null);
            }
            if (\array_key_exists('DirectDeliveryOnlyIndicator', $data) && $data['DirectDeliveryOnlyIndicator'] !== null) {
                $object->setDirectDeliveryOnlyIndicator($data['DirectDeliveryOnlyIndicator']);
                unset($data['DirectDeliveryOnlyIndicator']);
            }
            elseif (\array_key_exists('DirectDeliveryOnlyIndicator', $data) && $data['DirectDeliveryOnlyIndicator'] === null) {
                $object->setDirectDeliveryOnlyIndicator(null);
            }
            if (\array_key_exists('COD', $data) && $data['COD'] !== null) {
                $object->setCOD($this->denormalizer->denormalize($data['COD'], 'ShipStream\\Ups\\Api\\Model\\ShipmentServiceOptionsCOD', 'json', $context));
                unset($data['COD']);
            }
            elseif (\array_key_exists('COD', $data) && $data['COD'] === null) {
                $object->setCOD(null);
            }
            if (\array_key_exists('DeliveryConfirmation', $data) && $data['DeliveryConfirmation'] !== null) {
                $object->setDeliveryConfirmation($this->denormalizer->denormalize($data['DeliveryConfirmation'], 'ShipStream\\Ups\\Api\\Model\\RateShipmentServiceOptionsDeliveryConfirmation', 'json', $context));
                unset($data['DeliveryConfirmation']);
            }
            elseif (\array_key_exists('DeliveryConfirmation', $data) && $data['DeliveryConfirmation'] === null) {
                $object->setDeliveryConfirmation(null);
            }
            if (\array_key_exists('ReturnOfDocumentIndicator', $data) && $data['ReturnOfDocumentIndicator'] !== null) {
                $object->setReturnOfDocumentIndicator($data['ReturnOfDocumentIndicator']);
                unset($data['ReturnOfDocumentIndicator']);
            }
            elseif (\array_key_exists('ReturnOfDocumentIndicator', $data) && $data['ReturnOfDocumentIndicator'] === null) {
                $object->setReturnOfDocumentIndicator(null);
            }
            if (\array_key_exists('UPScarbonneutralIndicator', $data) && $data['UPScarbonneutralIndicator'] !== null) {
                $object->setUPScarbonneutralIndicator($data['UPScarbonneutralIndicator']);
                unset($data['UPScarbonneutralIndicator']);
            }
            elseif (\array_key_exists('UPScarbonneutralIndicator', $data) && $data['UPScarbonneutralIndicator'] === null) {
                $object->setUPScarbonneutralIndicator(null);
            }
            if (\array_key_exists('CertificateOfOriginIndicator', $data) && $data['CertificateOfOriginIndicator'] !== null) {
                $object->setCertificateOfOriginIndicator($data['CertificateOfOriginIndicator']);
                unset($data['CertificateOfOriginIndicator']);
            }
            elseif (\array_key_exists('CertificateOfOriginIndicator', $data) && $data['CertificateOfOriginIndicator'] === null) {
                $object->setCertificateOfOriginIndicator(null);
            }
            if (\array_key_exists('PickupOptions', $data) && $data['PickupOptions'] !== null) {
                $object->setPickupOptions($this->denormalizer->denormalize($data['PickupOptions'], 'ShipStream\\Ups\\Api\\Model\\ShipmentServiceOptionsPickupOptions', 'json', $context));
                unset($data['PickupOptions']);
            }
            elseif (\array_key_exists('PickupOptions', $data) && $data['PickupOptions'] === null) {
                $object->setPickupOptions(null);
            }
            if (\array_key_exists('DeliveryOptions', $data) && $data['DeliveryOptions'] !== null) {
                $object->setDeliveryOptions($this->denormalizer->denormalize($data['DeliveryOptions'], 'ShipStream\\Ups\\Api\\Model\\ShipmentServiceOptionsDeliveryOptions', 'json', $context));
                unset($data['DeliveryOptions']);
            }
            elseif (\array_key_exists('DeliveryOptions', $data) && $data['DeliveryOptions'] === null) {
                $object->setDeliveryOptions(null);
            }
            if (\array_key_exists('RestrictedArticles', $data) && $data['RestrictedArticles'] !== null) {
                $object->setRestrictedArticles($this->denormalizer->denormalize($data['RestrictedArticles'], 'ShipStream\\Ups\\Api\\Model\\RateShipmentServiceOptionsRestrictedArticles', 'json', $context));
                unset($data['RestrictedArticles']);
            }
            elseif (\array_key_exists('RestrictedArticles', $data) && $data['RestrictedArticles'] === null) {
                $object->setRestrictedArticles(null);
            }
            if (\array_key_exists('ShipperExportDeclarationIndicator', $data) && $data['ShipperExportDeclarationIndicator'] !== null) {
                $object->setShipperExportDeclarationIndicator($data['ShipperExportDeclarationIndicator']);
                unset($data['ShipperExportDeclarationIndicator']);
            }
            elseif (\array_key_exists('ShipperExportDeclarationIndicator', $data) && $data['ShipperExportDeclarationIndicator'] === null) {
                $object->setShipperExportDeclarationIndicator(null);
            }
            if (\array_key_exists('CommercialInvoiceRemovalIndicator', $data) && $data['CommercialInvoiceRemovalIndicator'] !== null) {
                $object->setCommercialInvoiceRemovalIndicator($data['CommercialInvoiceRemovalIndicator']);
                unset($data['CommercialInvoiceRemovalIndicator']);
            }
            elseif (\array_key_exists('CommercialInvoiceRemovalIndicator', $data) && $data['CommercialInvoiceRemovalIndicator'] === null) {
                $object->setCommercialInvoiceRemovalIndicator(null);
            }
            if (\array_key_exists('ImportControl', $data) && $data['ImportControl'] !== null) {
                $object->setImportControl($this->denormalizer->denormalize($data['ImportControl'], 'ShipStream\\Ups\\Api\\Model\\ShipmentServiceOptionsImportControl', 'json', $context));
                unset($data['ImportControl']);
            }
            elseif (\array_key_exists('ImportControl', $data) && $data['ImportControl'] === null) {
                $object->setImportControl(null);
            }
            if (\array_key_exists('ReturnService', $data) && $data['ReturnService'] !== null) {
                $object->setReturnService($this->denormalizer->denormalize($data['ReturnService'], 'ShipStream\\Ups\\Api\\Model\\ShipmentServiceOptionsReturnService', 'json', $context));
                unset($data['ReturnService']);
            }
            elseif (\array_key_exists('ReturnService', $data) && $data['ReturnService'] === null) {
                $object->setReturnService(null);
            }
            if (\array_key_exists('SDLShipmentIndicator', $data) && $data['SDLShipmentIndicator'] !== null) {
                $object->setSDLShipmentIndicator($data['SDLShipmentIndicator']);
                unset($data['SDLShipmentIndicator']);
            }
            elseif (\array_key_exists('SDLShipmentIndicator', $data) && $data['SDLShipmentIndicator'] === null) {
                $object->setSDLShipmentIndicator(null);
            }
            if (\array_key_exists('EPRAIndicator', $data) && $data['EPRAIndicator'] !== null) {
                $object->setEPRAIndicator($data['EPRAIndicator']);
                unset($data['EPRAIndicator']);
            }
            elseif (\array_key_exists('EPRAIndicator', $data) && $data['EPRAIndicator'] === null) {
                $object->setEPRAIndicator(null);
            }
            if (\array_key_exists('InsideDelivery', $data) && $data['InsideDelivery'] !== null) {
                $object->setInsideDelivery($data['InsideDelivery']);
                unset($data['InsideDelivery']);
            }
            elseif (\array_key_exists('InsideDelivery', $data) && $data['InsideDelivery'] === null) {
                $object->setInsideDelivery(null);
            }
            if (\array_key_exists('ItemDisposalIndicator', $data) && $data['ItemDisposalIndicator'] !== null) {
                $object->setItemDisposalIndicator($data['ItemDisposalIndicator']);
                unset($data['ItemDisposalIndicator']);
            }
            elseif (\array_key_exists('ItemDisposalIndicator', $data) && $data['ItemDisposalIndicator'] === null) {
                $object->setItemDisposalIndicator(null);
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