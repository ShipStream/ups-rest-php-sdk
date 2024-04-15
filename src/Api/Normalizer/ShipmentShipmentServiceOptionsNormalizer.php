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
    class ShipmentShipmentServiceOptionsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\ShipmentShipmentServiceOptions';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\ShipmentShipmentServiceOptions';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
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
            if (\array_key_exists('SaturdayDeliveryIndicator', $data) && $data['SaturdayDeliveryIndicator'] !== null) {
                $object->setSaturdayDeliveryIndicator($data['SaturdayDeliveryIndicator']);
                unset($data['SaturdayDeliveryIndicator']);
            }
            elseif (\array_key_exists('SaturdayDeliveryIndicator', $data) && $data['SaturdayDeliveryIndicator'] === null) {
                $object->setSaturdayDeliveryIndicator(null);
            }
            if (\array_key_exists('SaturdayPickupIndicator', $data) && $data['SaturdayPickupIndicator'] !== null) {
                $object->setSaturdayPickupIndicator($data['SaturdayPickupIndicator']);
                unset($data['SaturdayPickupIndicator']);
            }
            elseif (\array_key_exists('SaturdayPickupIndicator', $data) && $data['SaturdayPickupIndicator'] === null) {
                $object->setSaturdayPickupIndicator(null);
            }
            if (\array_key_exists('COD', $data) && $data['COD'] !== null) {
                $object->setCOD($this->denormalizer->denormalize($data['COD'], 'ShipStream\\Ups\\Api\\Model\\ShipmentServiceOptionsCOD', 'json', $context));
                unset($data['COD']);
            }
            elseif (\array_key_exists('COD', $data) && $data['COD'] === null) {
                $object->setCOD(null);
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
            if (\array_key_exists('Notification', $data) && $data['Notification'] !== null) {
                $values = [];
                foreach ($data['Notification'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'ShipStream\\Ups\\Api\\Model\\ShipmentServiceOptionsNotification', 'json', $context);
                }
                $object->setNotification($values);
                unset($data['Notification']);
            }
            elseif (\array_key_exists('Notification', $data) && $data['Notification'] === null) {
                $object->setNotification(null);
            }
            if (\array_key_exists('LabelDelivery', $data) && $data['LabelDelivery'] !== null) {
                $object->setLabelDelivery($this->denormalizer->denormalize($data['LabelDelivery'], 'ShipStream\\Ups\\Api\\Model\\ShipmentServiceOptionsLabelDelivery', 'json', $context));
                unset($data['LabelDelivery']);
            }
            elseif (\array_key_exists('LabelDelivery', $data) && $data['LabelDelivery'] === null) {
                $object->setLabelDelivery(null);
            }
            if (\array_key_exists('InternationalForms', $data) && $data['InternationalForms'] !== null) {
                $object->setInternationalForms($this->denormalizer->denormalize($data['InternationalForms'], 'ShipStream\\Ups\\Api\\Model\\ShipmentServiceOptionsInternationalForms', 'json', $context));
                unset($data['InternationalForms']);
            }
            elseif (\array_key_exists('InternationalForms', $data) && $data['InternationalForms'] === null) {
                $object->setInternationalForms(null);
            }
            if (\array_key_exists('DeliveryConfirmation', $data) && $data['DeliveryConfirmation'] !== null) {
                $object->setDeliveryConfirmation($this->denormalizer->denormalize($data['DeliveryConfirmation'], 'ShipStream\\Ups\\Api\\Model\\ShipmentServiceOptionsDeliveryConfirmation', 'json', $context));
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
            if (\array_key_exists('ImportControlIndicator', $data) && $data['ImportControlIndicator'] !== null) {
                $object->setImportControlIndicator($data['ImportControlIndicator']);
                unset($data['ImportControlIndicator']);
            }
            elseif (\array_key_exists('ImportControlIndicator', $data) && $data['ImportControlIndicator'] === null) {
                $object->setImportControlIndicator(null);
            }
            if (\array_key_exists('LabelMethod', $data) && $data['LabelMethod'] !== null) {
                $object->setLabelMethod($this->denormalizer->denormalize($data['LabelMethod'], 'ShipStream\\Ups\\Api\\Model\\ShipmentServiceOptionsLabelMethod', 'json', $context));
                unset($data['LabelMethod']);
            }
            elseif (\array_key_exists('LabelMethod', $data) && $data['LabelMethod'] === null) {
                $object->setLabelMethod(null);
            }
            if (\array_key_exists('CommercialInvoiceRemovalIndicator', $data) && $data['CommercialInvoiceRemovalIndicator'] !== null) {
                $object->setCommercialInvoiceRemovalIndicator($data['CommercialInvoiceRemovalIndicator']);
                unset($data['CommercialInvoiceRemovalIndicator']);
            }
            elseif (\array_key_exists('CommercialInvoiceRemovalIndicator', $data) && $data['CommercialInvoiceRemovalIndicator'] === null) {
                $object->setCommercialInvoiceRemovalIndicator(null);
            }
            if (\array_key_exists('UPScarbonneutralIndicator', $data) && $data['UPScarbonneutralIndicator'] !== null) {
                $object->setUPScarbonneutralIndicator($data['UPScarbonneutralIndicator']);
                unset($data['UPScarbonneutralIndicator']);
            }
            elseif (\array_key_exists('UPScarbonneutralIndicator', $data) && $data['UPScarbonneutralIndicator'] === null) {
                $object->setUPScarbonneutralIndicator(null);
            }
            if (\array_key_exists('PreAlertNotification', $data) && $data['PreAlertNotification'] !== null) {
                $values_1 = [];
                foreach ($data['PreAlertNotification'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'ShipStream\\Ups\\Api\\Model\\ShipmentServiceOptionsPreAlertNotification', 'json', $context);
                }
                $object->setPreAlertNotification($values_1);
                unset($data['PreAlertNotification']);
            }
            elseif (\array_key_exists('PreAlertNotification', $data) && $data['PreAlertNotification'] === null) {
                $object->setPreAlertNotification(null);
            }
            if (\array_key_exists('ExchangeForwardIndicator', $data) && $data['ExchangeForwardIndicator'] !== null) {
                $object->setExchangeForwardIndicator($data['ExchangeForwardIndicator']);
                unset($data['ExchangeForwardIndicator']);
            }
            elseif (\array_key_exists('ExchangeForwardIndicator', $data) && $data['ExchangeForwardIndicator'] === null) {
                $object->setExchangeForwardIndicator(null);
            }
            if (\array_key_exists('HoldForPickupIndicator', $data) && $data['HoldForPickupIndicator'] !== null) {
                $object->setHoldForPickupIndicator($data['HoldForPickupIndicator']);
                unset($data['HoldForPickupIndicator']);
            }
            elseif (\array_key_exists('HoldForPickupIndicator', $data) && $data['HoldForPickupIndicator'] === null) {
                $object->setHoldForPickupIndicator(null);
            }
            if (\array_key_exists('DropoffAtUPSFacilityIndicator', $data) && $data['DropoffAtUPSFacilityIndicator'] !== null) {
                $object->setDropoffAtUPSFacilityIndicator($data['DropoffAtUPSFacilityIndicator']);
                unset($data['DropoffAtUPSFacilityIndicator']);
            }
            elseif (\array_key_exists('DropoffAtUPSFacilityIndicator', $data) && $data['DropoffAtUPSFacilityIndicator'] === null) {
                $object->setDropoffAtUPSFacilityIndicator(null);
            }
            if (\array_key_exists('LiftGateForPickUpIndicator', $data) && $data['LiftGateForPickUpIndicator'] !== null) {
                $object->setLiftGateForPickUpIndicator($data['LiftGateForPickUpIndicator']);
                unset($data['LiftGateForPickUpIndicator']);
            }
            elseif (\array_key_exists('LiftGateForPickUpIndicator', $data) && $data['LiftGateForPickUpIndicator'] === null) {
                $object->setLiftGateForPickUpIndicator(null);
            }
            if (\array_key_exists('LiftGateForDeliveryIndicator', $data) && $data['LiftGateForDeliveryIndicator'] !== null) {
                $object->setLiftGateForDeliveryIndicator($data['LiftGateForDeliveryIndicator']);
                unset($data['LiftGateForDeliveryIndicator']);
            }
            elseif (\array_key_exists('LiftGateForDeliveryIndicator', $data) && $data['LiftGateForDeliveryIndicator'] === null) {
                $object->setLiftGateForDeliveryIndicator(null);
            }
            if (\array_key_exists('SDLShipmentIndicator', $data) && $data['SDLShipmentIndicator'] !== null) {
                $object->setSDLShipmentIndicator($data['SDLShipmentIndicator']);
                unset($data['SDLShipmentIndicator']);
            }
            elseif (\array_key_exists('SDLShipmentIndicator', $data) && $data['SDLShipmentIndicator'] === null) {
                $object->setSDLShipmentIndicator(null);
            }
            if (\array_key_exists('EPRAReleaseCode', $data) && $data['EPRAReleaseCode'] !== null) {
                $object->setEPRAReleaseCode($data['EPRAReleaseCode']);
                unset($data['EPRAReleaseCode']);
            }
            elseif (\array_key_exists('EPRAReleaseCode', $data) && $data['EPRAReleaseCode'] === null) {
                $object->setEPRAReleaseCode(null);
            }
            if (\array_key_exists('RestrictedArticles', $data) && $data['RestrictedArticles'] !== null) {
                $object->setRestrictedArticles($this->denormalizer->denormalize($data['RestrictedArticles'], 'ShipStream\\Ups\\Api\\Model\\ShipmentServiceOptionsRestrictedArticles', 'json', $context));
                unset($data['RestrictedArticles']);
            }
            elseif (\array_key_exists('RestrictedArticles', $data) && $data['RestrictedArticles'] === null) {
                $object->setRestrictedArticles(null);
            }
            if (\array_key_exists('InsideDelivery', $data) && $data['InsideDelivery'] !== null) {
                $object->setInsideDelivery($data['InsideDelivery']);
                unset($data['InsideDelivery']);
            }
            elseif (\array_key_exists('InsideDelivery', $data) && $data['InsideDelivery'] === null) {
                $object->setInsideDelivery(null);
            }
            if (\array_key_exists('ItemDisposal', $data) && $data['ItemDisposal'] !== null) {
                $object->setItemDisposal($data['ItemDisposal']);
                unset($data['ItemDisposal']);
            }
            elseif (\array_key_exists('ItemDisposal', $data) && $data['ItemDisposal'] === null) {
                $object->setItemDisposal(null);
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
            if ($object->isInitialized('saturdayDeliveryIndicator') && null !== $object->getSaturdayDeliveryIndicator()) {
                $data['SaturdayDeliveryIndicator'] = $object->getSaturdayDeliveryIndicator();
            }
            if ($object->isInitialized('saturdayPickupIndicator') && null !== $object->getSaturdayPickupIndicator()) {
                $data['SaturdayPickupIndicator'] = $object->getSaturdayPickupIndicator();
            }
            if ($object->isInitialized('cOD') && null !== $object->getCOD()) {
                $data['COD'] = $this->normalizer->normalize($object->getCOD(), 'json', $context);
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
            if ($object->isInitialized('notification') && null !== $object->getNotification()) {
                $values = [];
                foreach ($object->getNotification() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['Notification'] = $values;
            }
            if ($object->isInitialized('labelDelivery') && null !== $object->getLabelDelivery()) {
                $data['LabelDelivery'] = $this->normalizer->normalize($object->getLabelDelivery(), 'json', $context);
            }
            if ($object->isInitialized('internationalForms') && null !== $object->getInternationalForms()) {
                $data['InternationalForms'] = $this->normalizer->normalize($object->getInternationalForms(), 'json', $context);
            }
            if ($object->isInitialized('deliveryConfirmation') && null !== $object->getDeliveryConfirmation()) {
                $data['DeliveryConfirmation'] = $this->normalizer->normalize($object->getDeliveryConfirmation(), 'json', $context);
            }
            if ($object->isInitialized('returnOfDocumentIndicator') && null !== $object->getReturnOfDocumentIndicator()) {
                $data['ReturnOfDocumentIndicator'] = $object->getReturnOfDocumentIndicator();
            }
            if ($object->isInitialized('importControlIndicator') && null !== $object->getImportControlIndicator()) {
                $data['ImportControlIndicator'] = $object->getImportControlIndicator();
            }
            if ($object->isInitialized('labelMethod') && null !== $object->getLabelMethod()) {
                $data['LabelMethod'] = $this->normalizer->normalize($object->getLabelMethod(), 'json', $context);
            }
            if ($object->isInitialized('commercialInvoiceRemovalIndicator') && null !== $object->getCommercialInvoiceRemovalIndicator()) {
                $data['CommercialInvoiceRemovalIndicator'] = $object->getCommercialInvoiceRemovalIndicator();
            }
            if ($object->isInitialized('uPScarbonneutralIndicator') && null !== $object->getUPScarbonneutralIndicator()) {
                $data['UPScarbonneutralIndicator'] = $object->getUPScarbonneutralIndicator();
            }
            if ($object->isInitialized('preAlertNotification') && null !== $object->getPreAlertNotification()) {
                $values_1 = [];
                foreach ($object->getPreAlertNotification() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['PreAlertNotification'] = $values_1;
            }
            if ($object->isInitialized('exchangeForwardIndicator') && null !== $object->getExchangeForwardIndicator()) {
                $data['ExchangeForwardIndicator'] = $object->getExchangeForwardIndicator();
            }
            if ($object->isInitialized('holdForPickupIndicator') && null !== $object->getHoldForPickupIndicator()) {
                $data['HoldForPickupIndicator'] = $object->getHoldForPickupIndicator();
            }
            if ($object->isInitialized('dropoffAtUPSFacilityIndicator') && null !== $object->getDropoffAtUPSFacilityIndicator()) {
                $data['DropoffAtUPSFacilityIndicator'] = $object->getDropoffAtUPSFacilityIndicator();
            }
            if ($object->isInitialized('liftGateForPickUpIndicator') && null !== $object->getLiftGateForPickUpIndicator()) {
                $data['LiftGateForPickUpIndicator'] = $object->getLiftGateForPickUpIndicator();
            }
            if ($object->isInitialized('liftGateForDeliveryIndicator') && null !== $object->getLiftGateForDeliveryIndicator()) {
                $data['LiftGateForDeliveryIndicator'] = $object->getLiftGateForDeliveryIndicator();
            }
            if ($object->isInitialized('sDLShipmentIndicator') && null !== $object->getSDLShipmentIndicator()) {
                $data['SDLShipmentIndicator'] = $object->getSDLShipmentIndicator();
            }
            if ($object->isInitialized('ePRAReleaseCode') && null !== $object->getEPRAReleaseCode()) {
                $data['EPRAReleaseCode'] = $object->getEPRAReleaseCode();
            }
            if ($object->isInitialized('restrictedArticles') && null !== $object->getRestrictedArticles()) {
                $data['RestrictedArticles'] = $this->normalizer->normalize($object->getRestrictedArticles(), 'json', $context);
            }
            if ($object->isInitialized('insideDelivery') && null !== $object->getInsideDelivery()) {
                $data['InsideDelivery'] = $object->getInsideDelivery();
            }
            if ($object->isInitialized('itemDisposal') && null !== $object->getItemDisposal()) {
                $data['ItemDisposal'] = $object->getItemDisposal();
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
            return ['ShipStream\\Ups\\Api\\Model\\ShipmentShipmentServiceOptions' => false];
        }
    }
} else {
    class ShipmentShipmentServiceOptionsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\ShipmentShipmentServiceOptions';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\ShipmentShipmentServiceOptions';
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
            $object = new \ShipStream\Ups\Api\Model\ShipmentShipmentServiceOptions();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('SaturdayDeliveryIndicator', $data) && $data['SaturdayDeliveryIndicator'] !== null) {
                $object->setSaturdayDeliveryIndicator($data['SaturdayDeliveryIndicator']);
                unset($data['SaturdayDeliveryIndicator']);
            }
            elseif (\array_key_exists('SaturdayDeliveryIndicator', $data) && $data['SaturdayDeliveryIndicator'] === null) {
                $object->setSaturdayDeliveryIndicator(null);
            }
            if (\array_key_exists('SaturdayPickupIndicator', $data) && $data['SaturdayPickupIndicator'] !== null) {
                $object->setSaturdayPickupIndicator($data['SaturdayPickupIndicator']);
                unset($data['SaturdayPickupIndicator']);
            }
            elseif (\array_key_exists('SaturdayPickupIndicator', $data) && $data['SaturdayPickupIndicator'] === null) {
                $object->setSaturdayPickupIndicator(null);
            }
            if (\array_key_exists('COD', $data) && $data['COD'] !== null) {
                $object->setCOD($this->denormalizer->denormalize($data['COD'], 'ShipStream\\Ups\\Api\\Model\\ShipmentServiceOptionsCOD', 'json', $context));
                unset($data['COD']);
            }
            elseif (\array_key_exists('COD', $data) && $data['COD'] === null) {
                $object->setCOD(null);
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
            if (\array_key_exists('Notification', $data) && $data['Notification'] !== null) {
                $values = [];
                foreach ($data['Notification'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'ShipStream\\Ups\\Api\\Model\\ShipmentServiceOptionsNotification', 'json', $context);
                }
                $object->setNotification($values);
                unset($data['Notification']);
            }
            elseif (\array_key_exists('Notification', $data) && $data['Notification'] === null) {
                $object->setNotification(null);
            }
            if (\array_key_exists('LabelDelivery', $data) && $data['LabelDelivery'] !== null) {
                $object->setLabelDelivery($this->denormalizer->denormalize($data['LabelDelivery'], 'ShipStream\\Ups\\Api\\Model\\ShipmentServiceOptionsLabelDelivery', 'json', $context));
                unset($data['LabelDelivery']);
            }
            elseif (\array_key_exists('LabelDelivery', $data) && $data['LabelDelivery'] === null) {
                $object->setLabelDelivery(null);
            }
            if (\array_key_exists('InternationalForms', $data) && $data['InternationalForms'] !== null) {
                $object->setInternationalForms($this->denormalizer->denormalize($data['InternationalForms'], 'ShipStream\\Ups\\Api\\Model\\ShipmentServiceOptionsInternationalForms', 'json', $context));
                unset($data['InternationalForms']);
            }
            elseif (\array_key_exists('InternationalForms', $data) && $data['InternationalForms'] === null) {
                $object->setInternationalForms(null);
            }
            if (\array_key_exists('DeliveryConfirmation', $data) && $data['DeliveryConfirmation'] !== null) {
                $object->setDeliveryConfirmation($this->denormalizer->denormalize($data['DeliveryConfirmation'], 'ShipStream\\Ups\\Api\\Model\\ShipmentServiceOptionsDeliveryConfirmation', 'json', $context));
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
            if (\array_key_exists('ImportControlIndicator', $data) && $data['ImportControlIndicator'] !== null) {
                $object->setImportControlIndicator($data['ImportControlIndicator']);
                unset($data['ImportControlIndicator']);
            }
            elseif (\array_key_exists('ImportControlIndicator', $data) && $data['ImportControlIndicator'] === null) {
                $object->setImportControlIndicator(null);
            }
            if (\array_key_exists('LabelMethod', $data) && $data['LabelMethod'] !== null) {
                $object->setLabelMethod($this->denormalizer->denormalize($data['LabelMethod'], 'ShipStream\\Ups\\Api\\Model\\ShipmentServiceOptionsLabelMethod', 'json', $context));
                unset($data['LabelMethod']);
            }
            elseif (\array_key_exists('LabelMethod', $data) && $data['LabelMethod'] === null) {
                $object->setLabelMethod(null);
            }
            if (\array_key_exists('CommercialInvoiceRemovalIndicator', $data) && $data['CommercialInvoiceRemovalIndicator'] !== null) {
                $object->setCommercialInvoiceRemovalIndicator($data['CommercialInvoiceRemovalIndicator']);
                unset($data['CommercialInvoiceRemovalIndicator']);
            }
            elseif (\array_key_exists('CommercialInvoiceRemovalIndicator', $data) && $data['CommercialInvoiceRemovalIndicator'] === null) {
                $object->setCommercialInvoiceRemovalIndicator(null);
            }
            if (\array_key_exists('UPScarbonneutralIndicator', $data) && $data['UPScarbonneutralIndicator'] !== null) {
                $object->setUPScarbonneutralIndicator($data['UPScarbonneutralIndicator']);
                unset($data['UPScarbonneutralIndicator']);
            }
            elseif (\array_key_exists('UPScarbonneutralIndicator', $data) && $data['UPScarbonneutralIndicator'] === null) {
                $object->setUPScarbonneutralIndicator(null);
            }
            if (\array_key_exists('PreAlertNotification', $data) && $data['PreAlertNotification'] !== null) {
                $values_1 = [];
                foreach ($data['PreAlertNotification'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'ShipStream\\Ups\\Api\\Model\\ShipmentServiceOptionsPreAlertNotification', 'json', $context);
                }
                $object->setPreAlertNotification($values_1);
                unset($data['PreAlertNotification']);
            }
            elseif (\array_key_exists('PreAlertNotification', $data) && $data['PreAlertNotification'] === null) {
                $object->setPreAlertNotification(null);
            }
            if (\array_key_exists('ExchangeForwardIndicator', $data) && $data['ExchangeForwardIndicator'] !== null) {
                $object->setExchangeForwardIndicator($data['ExchangeForwardIndicator']);
                unset($data['ExchangeForwardIndicator']);
            }
            elseif (\array_key_exists('ExchangeForwardIndicator', $data) && $data['ExchangeForwardIndicator'] === null) {
                $object->setExchangeForwardIndicator(null);
            }
            if (\array_key_exists('HoldForPickupIndicator', $data) && $data['HoldForPickupIndicator'] !== null) {
                $object->setHoldForPickupIndicator($data['HoldForPickupIndicator']);
                unset($data['HoldForPickupIndicator']);
            }
            elseif (\array_key_exists('HoldForPickupIndicator', $data) && $data['HoldForPickupIndicator'] === null) {
                $object->setHoldForPickupIndicator(null);
            }
            if (\array_key_exists('DropoffAtUPSFacilityIndicator', $data) && $data['DropoffAtUPSFacilityIndicator'] !== null) {
                $object->setDropoffAtUPSFacilityIndicator($data['DropoffAtUPSFacilityIndicator']);
                unset($data['DropoffAtUPSFacilityIndicator']);
            }
            elseif (\array_key_exists('DropoffAtUPSFacilityIndicator', $data) && $data['DropoffAtUPSFacilityIndicator'] === null) {
                $object->setDropoffAtUPSFacilityIndicator(null);
            }
            if (\array_key_exists('LiftGateForPickUpIndicator', $data) && $data['LiftGateForPickUpIndicator'] !== null) {
                $object->setLiftGateForPickUpIndicator($data['LiftGateForPickUpIndicator']);
                unset($data['LiftGateForPickUpIndicator']);
            }
            elseif (\array_key_exists('LiftGateForPickUpIndicator', $data) && $data['LiftGateForPickUpIndicator'] === null) {
                $object->setLiftGateForPickUpIndicator(null);
            }
            if (\array_key_exists('LiftGateForDeliveryIndicator', $data) && $data['LiftGateForDeliveryIndicator'] !== null) {
                $object->setLiftGateForDeliveryIndicator($data['LiftGateForDeliveryIndicator']);
                unset($data['LiftGateForDeliveryIndicator']);
            }
            elseif (\array_key_exists('LiftGateForDeliveryIndicator', $data) && $data['LiftGateForDeliveryIndicator'] === null) {
                $object->setLiftGateForDeliveryIndicator(null);
            }
            if (\array_key_exists('SDLShipmentIndicator', $data) && $data['SDLShipmentIndicator'] !== null) {
                $object->setSDLShipmentIndicator($data['SDLShipmentIndicator']);
                unset($data['SDLShipmentIndicator']);
            }
            elseif (\array_key_exists('SDLShipmentIndicator', $data) && $data['SDLShipmentIndicator'] === null) {
                $object->setSDLShipmentIndicator(null);
            }
            if (\array_key_exists('EPRAReleaseCode', $data) && $data['EPRAReleaseCode'] !== null) {
                $object->setEPRAReleaseCode($data['EPRAReleaseCode']);
                unset($data['EPRAReleaseCode']);
            }
            elseif (\array_key_exists('EPRAReleaseCode', $data) && $data['EPRAReleaseCode'] === null) {
                $object->setEPRAReleaseCode(null);
            }
            if (\array_key_exists('RestrictedArticles', $data) && $data['RestrictedArticles'] !== null) {
                $object->setRestrictedArticles($this->denormalizer->denormalize($data['RestrictedArticles'], 'ShipStream\\Ups\\Api\\Model\\ShipmentServiceOptionsRestrictedArticles', 'json', $context));
                unset($data['RestrictedArticles']);
            }
            elseif (\array_key_exists('RestrictedArticles', $data) && $data['RestrictedArticles'] === null) {
                $object->setRestrictedArticles(null);
            }
            if (\array_key_exists('InsideDelivery', $data) && $data['InsideDelivery'] !== null) {
                $object->setInsideDelivery($data['InsideDelivery']);
                unset($data['InsideDelivery']);
            }
            elseif (\array_key_exists('InsideDelivery', $data) && $data['InsideDelivery'] === null) {
                $object->setInsideDelivery(null);
            }
            if (\array_key_exists('ItemDisposal', $data) && $data['ItemDisposal'] !== null) {
                $object->setItemDisposal($data['ItemDisposal']);
                unset($data['ItemDisposal']);
            }
            elseif (\array_key_exists('ItemDisposal', $data) && $data['ItemDisposal'] === null) {
                $object->setItemDisposal(null);
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
            if ($object->isInitialized('saturdayDeliveryIndicator') && null !== $object->getSaturdayDeliveryIndicator()) {
                $data['SaturdayDeliveryIndicator'] = $object->getSaturdayDeliveryIndicator();
            }
            if ($object->isInitialized('saturdayPickupIndicator') && null !== $object->getSaturdayPickupIndicator()) {
                $data['SaturdayPickupIndicator'] = $object->getSaturdayPickupIndicator();
            }
            if ($object->isInitialized('cOD') && null !== $object->getCOD()) {
                $data['COD'] = $this->normalizer->normalize($object->getCOD(), 'json', $context);
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
            if ($object->isInitialized('notification') && null !== $object->getNotification()) {
                $values = [];
                foreach ($object->getNotification() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['Notification'] = $values;
            }
            if ($object->isInitialized('labelDelivery') && null !== $object->getLabelDelivery()) {
                $data['LabelDelivery'] = $this->normalizer->normalize($object->getLabelDelivery(), 'json', $context);
            }
            if ($object->isInitialized('internationalForms') && null !== $object->getInternationalForms()) {
                $data['InternationalForms'] = $this->normalizer->normalize($object->getInternationalForms(), 'json', $context);
            }
            if ($object->isInitialized('deliveryConfirmation') && null !== $object->getDeliveryConfirmation()) {
                $data['DeliveryConfirmation'] = $this->normalizer->normalize($object->getDeliveryConfirmation(), 'json', $context);
            }
            if ($object->isInitialized('returnOfDocumentIndicator') && null !== $object->getReturnOfDocumentIndicator()) {
                $data['ReturnOfDocumentIndicator'] = $object->getReturnOfDocumentIndicator();
            }
            if ($object->isInitialized('importControlIndicator') && null !== $object->getImportControlIndicator()) {
                $data['ImportControlIndicator'] = $object->getImportControlIndicator();
            }
            if ($object->isInitialized('labelMethod') && null !== $object->getLabelMethod()) {
                $data['LabelMethod'] = $this->normalizer->normalize($object->getLabelMethod(), 'json', $context);
            }
            if ($object->isInitialized('commercialInvoiceRemovalIndicator') && null !== $object->getCommercialInvoiceRemovalIndicator()) {
                $data['CommercialInvoiceRemovalIndicator'] = $object->getCommercialInvoiceRemovalIndicator();
            }
            if ($object->isInitialized('uPScarbonneutralIndicator') && null !== $object->getUPScarbonneutralIndicator()) {
                $data['UPScarbonneutralIndicator'] = $object->getUPScarbonneutralIndicator();
            }
            if ($object->isInitialized('preAlertNotification') && null !== $object->getPreAlertNotification()) {
                $values_1 = [];
                foreach ($object->getPreAlertNotification() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['PreAlertNotification'] = $values_1;
            }
            if ($object->isInitialized('exchangeForwardIndicator') && null !== $object->getExchangeForwardIndicator()) {
                $data['ExchangeForwardIndicator'] = $object->getExchangeForwardIndicator();
            }
            if ($object->isInitialized('holdForPickupIndicator') && null !== $object->getHoldForPickupIndicator()) {
                $data['HoldForPickupIndicator'] = $object->getHoldForPickupIndicator();
            }
            if ($object->isInitialized('dropoffAtUPSFacilityIndicator') && null !== $object->getDropoffAtUPSFacilityIndicator()) {
                $data['DropoffAtUPSFacilityIndicator'] = $object->getDropoffAtUPSFacilityIndicator();
            }
            if ($object->isInitialized('liftGateForPickUpIndicator') && null !== $object->getLiftGateForPickUpIndicator()) {
                $data['LiftGateForPickUpIndicator'] = $object->getLiftGateForPickUpIndicator();
            }
            if ($object->isInitialized('liftGateForDeliveryIndicator') && null !== $object->getLiftGateForDeliveryIndicator()) {
                $data['LiftGateForDeliveryIndicator'] = $object->getLiftGateForDeliveryIndicator();
            }
            if ($object->isInitialized('sDLShipmentIndicator') && null !== $object->getSDLShipmentIndicator()) {
                $data['SDLShipmentIndicator'] = $object->getSDLShipmentIndicator();
            }
            if ($object->isInitialized('ePRAReleaseCode') && null !== $object->getEPRAReleaseCode()) {
                $data['EPRAReleaseCode'] = $object->getEPRAReleaseCode();
            }
            if ($object->isInitialized('restrictedArticles') && null !== $object->getRestrictedArticles()) {
                $data['RestrictedArticles'] = $this->normalizer->normalize($object->getRestrictedArticles(), 'json', $context);
            }
            if ($object->isInitialized('insideDelivery') && null !== $object->getInsideDelivery()) {
                $data['InsideDelivery'] = $object->getInsideDelivery();
            }
            if ($object->isInitialized('itemDisposal') && null !== $object->getItemDisposal()) {
                $data['ItemDisposal'] = $object->getItemDisposal();
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
            return ['ShipStream\\Ups\\Api\\Model\\ShipmentShipmentServiceOptions' => false];
        }
    }
}