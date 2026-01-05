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
class RateShipmentShipmentServiceOptionsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \ShipStream\Ups\Api\Model\RateShipmentShipmentServiceOptions::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \ShipStream\Ups\Api\Model\RateShipmentShipmentServiceOptions::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
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
            $object->setAccessPointCOD($this->denormalizer->denormalize($data['AccessPointCOD'], \ShipStream\Ups\Api\Model\ShipmentServiceOptionsAccessPointCOD::class, 'json', $context));
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
            $object->setCOD($this->denormalizer->denormalize($data['COD'], \ShipStream\Ups\Api\Model\ShipmentServiceOptionsCOD::class, 'json', $context));
            unset($data['COD']);
        }
        if (\array_key_exists('DeliveryConfirmation', $data)) {
            $object->setDeliveryConfirmation($this->denormalizer->denormalize($data['DeliveryConfirmation'], \ShipStream\Ups\Api\Model\RateShipmentServiceOptionsDeliveryConfirmation::class, 'json', $context));
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
            $object->setPickupOptions($this->denormalizer->denormalize($data['PickupOptions'], \ShipStream\Ups\Api\Model\ShipmentServiceOptionsPickupOptions::class, 'json', $context));
            unset($data['PickupOptions']);
        }
        if (\array_key_exists('DeliveryOptions', $data)) {
            $object->setDeliveryOptions($this->denormalizer->denormalize($data['DeliveryOptions'], \ShipStream\Ups\Api\Model\ShipmentServiceOptionsDeliveryOptions::class, 'json', $context));
            unset($data['DeliveryOptions']);
        }
        if (\array_key_exists('RestrictedArticles', $data)) {
            $object->setRestrictedArticles($this->denormalizer->denormalize($data['RestrictedArticles'], \ShipStream\Ups\Api\Model\RateShipmentServiceOptionsRestrictedArticles::class, 'json', $context));
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
            $object->setImportControl($this->denormalizer->denormalize($data['ImportControl'], \ShipStream\Ups\Api\Model\ShipmentServiceOptionsImportControl::class, 'json', $context));
            unset($data['ImportControl']);
        }
        if (\array_key_exists('ReturnService', $data)) {
            $object->setReturnService($this->denormalizer->denormalize($data['ReturnService'], \ShipStream\Ups\Api\Model\ShipmentServiceOptionsReturnService::class, 'json', $context));
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
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('saturdayPickupIndicator') && null !== $data->getSaturdayPickupIndicator()) {
            $dataArray['SaturdayPickupIndicator'] = $data->getSaturdayPickupIndicator();
        }
        if ($data->isInitialized('saturdayDeliveryIndicator') && null !== $data->getSaturdayDeliveryIndicator()) {
            $dataArray['SaturdayDeliveryIndicator'] = $data->getSaturdayDeliveryIndicator();
        }
        if ($data->isInitialized('sundayDeliveryIndicator') && null !== $data->getSundayDeliveryIndicator()) {
            $dataArray['SundayDeliveryIndicator'] = $data->getSundayDeliveryIndicator();
        }
        if ($data->isInitialized('availableServicesOption') && null !== $data->getAvailableServicesOption()) {
            $dataArray['AvailableServicesOption'] = $data->getAvailableServicesOption();
        }
        if ($data->isInitialized('accessPointCOD') && null !== $data->getAccessPointCOD()) {
            $dataArray['AccessPointCOD'] = $this->normalizer->normalize($data->getAccessPointCOD(), 'json', $context);
        }
        if ($data->isInitialized('deliverToAddresseeOnlyIndicator') && null !== $data->getDeliverToAddresseeOnlyIndicator()) {
            $dataArray['DeliverToAddresseeOnlyIndicator'] = $data->getDeliverToAddresseeOnlyIndicator();
        }
        if ($data->isInitialized('directDeliveryOnlyIndicator') && null !== $data->getDirectDeliveryOnlyIndicator()) {
            $dataArray['DirectDeliveryOnlyIndicator'] = $data->getDirectDeliveryOnlyIndicator();
        }
        if ($data->isInitialized('cOD') && null !== $data->getCOD()) {
            $dataArray['COD'] = $this->normalizer->normalize($data->getCOD(), 'json', $context);
        }
        if ($data->isInitialized('deliveryConfirmation') && null !== $data->getDeliveryConfirmation()) {
            $dataArray['DeliveryConfirmation'] = $this->normalizer->normalize($data->getDeliveryConfirmation(), 'json', $context);
        }
        if ($data->isInitialized('returnOfDocumentIndicator') && null !== $data->getReturnOfDocumentIndicator()) {
            $dataArray['ReturnOfDocumentIndicator'] = $data->getReturnOfDocumentIndicator();
        }
        if ($data->isInitialized('uPScarbonneutralIndicator') && null !== $data->getUPScarbonneutralIndicator()) {
            $dataArray['UPScarbonneutralIndicator'] = $data->getUPScarbonneutralIndicator();
        }
        if ($data->isInitialized('certificateOfOriginIndicator') && null !== $data->getCertificateOfOriginIndicator()) {
            $dataArray['CertificateOfOriginIndicator'] = $data->getCertificateOfOriginIndicator();
        }
        if ($data->isInitialized('pickupOptions') && null !== $data->getPickupOptions()) {
            $dataArray['PickupOptions'] = $this->normalizer->normalize($data->getPickupOptions(), 'json', $context);
        }
        if ($data->isInitialized('deliveryOptions') && null !== $data->getDeliveryOptions()) {
            $dataArray['DeliveryOptions'] = $this->normalizer->normalize($data->getDeliveryOptions(), 'json', $context);
        }
        if ($data->isInitialized('restrictedArticles') && null !== $data->getRestrictedArticles()) {
            $dataArray['RestrictedArticles'] = $this->normalizer->normalize($data->getRestrictedArticles(), 'json', $context);
        }
        if ($data->isInitialized('shipperExportDeclarationIndicator') && null !== $data->getShipperExportDeclarationIndicator()) {
            $dataArray['ShipperExportDeclarationIndicator'] = $data->getShipperExportDeclarationIndicator();
        }
        if ($data->isInitialized('commercialInvoiceRemovalIndicator') && null !== $data->getCommercialInvoiceRemovalIndicator()) {
            $dataArray['CommercialInvoiceRemovalIndicator'] = $data->getCommercialInvoiceRemovalIndicator();
        }
        if ($data->isInitialized('importControl') && null !== $data->getImportControl()) {
            $dataArray['ImportControl'] = $this->normalizer->normalize($data->getImportControl(), 'json', $context);
        }
        if ($data->isInitialized('returnService') && null !== $data->getReturnService()) {
            $dataArray['ReturnService'] = $this->normalizer->normalize($data->getReturnService(), 'json', $context);
        }
        if ($data->isInitialized('sDLShipmentIndicator') && null !== $data->getSDLShipmentIndicator()) {
            $dataArray['SDLShipmentIndicator'] = $data->getSDLShipmentIndicator();
        }
        if ($data->isInitialized('ePRAIndicator') && null !== $data->getEPRAIndicator()) {
            $dataArray['EPRAIndicator'] = $data->getEPRAIndicator();
        }
        if ($data->isInitialized('insideDelivery') && null !== $data->getInsideDelivery()) {
            $dataArray['InsideDelivery'] = $data->getInsideDelivery();
        }
        if ($data->isInitialized('itemDisposalIndicator') && null !== $data->getItemDisposalIndicator()) {
            $dataArray['ItemDisposalIndicator'] = $data->getItemDisposalIndicator();
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\ShipStream\Ups\Api\Model\RateShipmentShipmentServiceOptions::class => false];
    }
}