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
class ShipmentShipmentServiceOptionsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \ShipStream\Ups\Api\Model\ShipmentShipmentServiceOptions::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \ShipStream\Ups\Api\Model\ShipmentShipmentServiceOptions::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \ShipStream\Ups\Api\Model\ShipmentShipmentServiceOptions();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('SaturdayDeliveryIndicator', $data)) {
            $object->setSaturdayDeliveryIndicator($data['SaturdayDeliveryIndicator']);
            unset($data['SaturdayDeliveryIndicator']);
        }
        if (\array_key_exists('SaturdayPickupIndicator', $data)) {
            $object->setSaturdayPickupIndicator($data['SaturdayPickupIndicator']);
            unset($data['SaturdayPickupIndicator']);
        }
        if (\array_key_exists('COD', $data)) {
            $object->setCOD($this->denormalizer->denormalize($data['COD'], \ShipStream\Ups\Api\Model\ShipmentServiceOptionsCOD::class, 'json', $context));
            unset($data['COD']);
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
        if (\array_key_exists('Notification', $data)) {
            $values = [];
            foreach ($data['Notification'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \ShipStream\Ups\Api\Model\ShipmentServiceOptionsNotification::class, 'json', $context);
            }
            $object->setNotification($values);
            unset($data['Notification']);
        }
        if (\array_key_exists('LabelDelivery', $data)) {
            $object->setLabelDelivery($this->denormalizer->denormalize($data['LabelDelivery'], \ShipStream\Ups\Api\Model\ShipmentServiceOptionsLabelDelivery::class, 'json', $context));
            unset($data['LabelDelivery']);
        }
        if (\array_key_exists('InternationalForms', $data)) {
            $object->setInternationalForms($this->denormalizer->denormalize($data['InternationalForms'], \ShipStream\Ups\Api\Model\ShipmentServiceOptionsInternationalForms::class, 'json', $context));
            unset($data['InternationalForms']);
        }
        if (\array_key_exists('DeliveryConfirmation', $data)) {
            $object->setDeliveryConfirmation($this->denormalizer->denormalize($data['DeliveryConfirmation'], \ShipStream\Ups\Api\Model\ShipmentServiceOptionsDeliveryConfirmation::class, 'json', $context));
            unset($data['DeliveryConfirmation']);
        }
        if (\array_key_exists('ReturnOfDocumentIndicator', $data)) {
            $object->setReturnOfDocumentIndicator($data['ReturnOfDocumentIndicator']);
            unset($data['ReturnOfDocumentIndicator']);
        }
        if (\array_key_exists('ImportControlIndicator', $data)) {
            $object->setImportControlIndicator($data['ImportControlIndicator']);
            unset($data['ImportControlIndicator']);
        }
        if (\array_key_exists('LabelMethod', $data)) {
            $object->setLabelMethod($this->denormalizer->denormalize($data['LabelMethod'], \ShipStream\Ups\Api\Model\ShipmentServiceOptionsLabelMethod::class, 'json', $context));
            unset($data['LabelMethod']);
        }
        if (\array_key_exists('CommercialInvoiceRemovalIndicator', $data)) {
            $object->setCommercialInvoiceRemovalIndicator($data['CommercialInvoiceRemovalIndicator']);
            unset($data['CommercialInvoiceRemovalIndicator']);
        }
        if (\array_key_exists('UPScarbonneutralIndicator', $data)) {
            $object->setUPScarbonneutralIndicator($data['UPScarbonneutralIndicator']);
            unset($data['UPScarbonneutralIndicator']);
        }
        if (\array_key_exists('PreAlertNotification', $data)) {
            $values_1 = [];
            foreach ($data['PreAlertNotification'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \ShipStream\Ups\Api\Model\ShipmentServiceOptionsPreAlertNotification::class, 'json', $context);
            }
            $object->setPreAlertNotification($values_1);
            unset($data['PreAlertNotification']);
        }
        if (\array_key_exists('ExchangeForwardIndicator', $data)) {
            $object->setExchangeForwardIndicator($data['ExchangeForwardIndicator']);
            unset($data['ExchangeForwardIndicator']);
        }
        if (\array_key_exists('HoldForPickupIndicator', $data)) {
            $object->setHoldForPickupIndicator($data['HoldForPickupIndicator']);
            unset($data['HoldForPickupIndicator']);
        }
        if (\array_key_exists('DropoffAtUPSFacilityIndicator', $data)) {
            $object->setDropoffAtUPSFacilityIndicator($data['DropoffAtUPSFacilityIndicator']);
            unset($data['DropoffAtUPSFacilityIndicator']);
        }
        if (\array_key_exists('LiftGateForPickUpIndicator', $data)) {
            $object->setLiftGateForPickUpIndicator($data['LiftGateForPickUpIndicator']);
            unset($data['LiftGateForPickUpIndicator']);
        }
        if (\array_key_exists('LiftGateForDeliveryIndicator', $data)) {
            $object->setLiftGateForDeliveryIndicator($data['LiftGateForDeliveryIndicator']);
            unset($data['LiftGateForDeliveryIndicator']);
        }
        if (\array_key_exists('SDLShipmentIndicator', $data)) {
            $object->setSDLShipmentIndicator($data['SDLShipmentIndicator']);
            unset($data['SDLShipmentIndicator']);
        }
        if (\array_key_exists('EPRAReleaseCode', $data)) {
            $object->setEPRAReleaseCode($data['EPRAReleaseCode']);
            unset($data['EPRAReleaseCode']);
        }
        if (\array_key_exists('RestrictedArticles', $data)) {
            $object->setRestrictedArticles($this->denormalizer->denormalize($data['RestrictedArticles'], \ShipStream\Ups\Api\Model\ShipmentServiceOptionsRestrictedArticles::class, 'json', $context));
            unset($data['RestrictedArticles']);
        }
        if (\array_key_exists('InsideDelivery', $data)) {
            $object->setInsideDelivery($data['InsideDelivery']);
            unset($data['InsideDelivery']);
        }
        if (\array_key_exists('ItemDisposal', $data)) {
            $object->setItemDisposal($data['ItemDisposal']);
            unset($data['ItemDisposal']);
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
        if ($data->isInitialized('saturdayDeliveryIndicator') && null !== $data->getSaturdayDeliveryIndicator()) {
            $dataArray['SaturdayDeliveryIndicator'] = $data->getSaturdayDeliveryIndicator();
        }
        if ($data->isInitialized('saturdayPickupIndicator') && null !== $data->getSaturdayPickupIndicator()) {
            $dataArray['SaturdayPickupIndicator'] = $data->getSaturdayPickupIndicator();
        }
        if ($data->isInitialized('cOD') && null !== $data->getCOD()) {
            $dataArray['COD'] = $this->normalizer->normalize($data->getCOD(), 'json', $context);
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
        if ($data->isInitialized('notification') && null !== $data->getNotification()) {
            $values = [];
            foreach ($data->getNotification() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['Notification'] = $values;
        }
        if ($data->isInitialized('labelDelivery') && null !== $data->getLabelDelivery()) {
            $dataArray['LabelDelivery'] = $this->normalizer->normalize($data->getLabelDelivery(), 'json', $context);
        }
        if ($data->isInitialized('internationalForms') && null !== $data->getInternationalForms()) {
            $dataArray['InternationalForms'] = $this->normalizer->normalize($data->getInternationalForms(), 'json', $context);
        }
        if ($data->isInitialized('deliveryConfirmation') && null !== $data->getDeliveryConfirmation()) {
            $dataArray['DeliveryConfirmation'] = $this->normalizer->normalize($data->getDeliveryConfirmation(), 'json', $context);
        }
        if ($data->isInitialized('returnOfDocumentIndicator') && null !== $data->getReturnOfDocumentIndicator()) {
            $dataArray['ReturnOfDocumentIndicator'] = $data->getReturnOfDocumentIndicator();
        }
        if ($data->isInitialized('importControlIndicator') && null !== $data->getImportControlIndicator()) {
            $dataArray['ImportControlIndicator'] = $data->getImportControlIndicator();
        }
        if ($data->isInitialized('labelMethod') && null !== $data->getLabelMethod()) {
            $dataArray['LabelMethod'] = $this->normalizer->normalize($data->getLabelMethod(), 'json', $context);
        }
        if ($data->isInitialized('commercialInvoiceRemovalIndicator') && null !== $data->getCommercialInvoiceRemovalIndicator()) {
            $dataArray['CommercialInvoiceRemovalIndicator'] = $data->getCommercialInvoiceRemovalIndicator();
        }
        if ($data->isInitialized('uPScarbonneutralIndicator') && null !== $data->getUPScarbonneutralIndicator()) {
            $dataArray['UPScarbonneutralIndicator'] = $data->getUPScarbonneutralIndicator();
        }
        if ($data->isInitialized('preAlertNotification') && null !== $data->getPreAlertNotification()) {
            $values_1 = [];
            foreach ($data->getPreAlertNotification() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['PreAlertNotification'] = $values_1;
        }
        if ($data->isInitialized('exchangeForwardIndicator') && null !== $data->getExchangeForwardIndicator()) {
            $dataArray['ExchangeForwardIndicator'] = $data->getExchangeForwardIndicator();
        }
        if ($data->isInitialized('holdForPickupIndicator') && null !== $data->getHoldForPickupIndicator()) {
            $dataArray['HoldForPickupIndicator'] = $data->getHoldForPickupIndicator();
        }
        if ($data->isInitialized('dropoffAtUPSFacilityIndicator') && null !== $data->getDropoffAtUPSFacilityIndicator()) {
            $dataArray['DropoffAtUPSFacilityIndicator'] = $data->getDropoffAtUPSFacilityIndicator();
        }
        if ($data->isInitialized('liftGateForPickUpIndicator') && null !== $data->getLiftGateForPickUpIndicator()) {
            $dataArray['LiftGateForPickUpIndicator'] = $data->getLiftGateForPickUpIndicator();
        }
        if ($data->isInitialized('liftGateForDeliveryIndicator') && null !== $data->getLiftGateForDeliveryIndicator()) {
            $dataArray['LiftGateForDeliveryIndicator'] = $data->getLiftGateForDeliveryIndicator();
        }
        if ($data->isInitialized('sDLShipmentIndicator') && null !== $data->getSDLShipmentIndicator()) {
            $dataArray['SDLShipmentIndicator'] = $data->getSDLShipmentIndicator();
        }
        if ($data->isInitialized('ePRAReleaseCode') && null !== $data->getEPRAReleaseCode()) {
            $dataArray['EPRAReleaseCode'] = $data->getEPRAReleaseCode();
        }
        if ($data->isInitialized('restrictedArticles') && null !== $data->getRestrictedArticles()) {
            $dataArray['RestrictedArticles'] = $this->normalizer->normalize($data->getRestrictedArticles(), 'json', $context);
        }
        if ($data->isInitialized('insideDelivery') && null !== $data->getInsideDelivery()) {
            $dataArray['InsideDelivery'] = $data->getInsideDelivery();
        }
        if ($data->isInitialized('itemDisposal') && null !== $data->getItemDisposal()) {
            $dataArray['ItemDisposal'] = $data->getItemDisposal();
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
        return [\ShipStream\Ups\Api\Model\ShipmentShipmentServiceOptions::class => false];
    }
}