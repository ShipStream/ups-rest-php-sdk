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
    class SubscriptionFileManifestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\SubscriptionFileManifest';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\SubscriptionFileManifest';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \ShipStream\Ups\Api\Model\SubscriptionFileManifest();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Shipper', $data)) {
                $object->setShipper($this->denormalizer->denormalize($data['Shipper'], 'ShipStream\\Ups\\Api\\Model\\ManifestShipper', 'json', $context));
                unset($data['Shipper']);
            }
            if (\array_key_exists('ShipTo', $data)) {
                $object->setShipTo($this->denormalizer->denormalize($data['ShipTo'], 'ShipStream\\Ups\\Api\\Model\\ManifestShipTo', 'json', $context));
                unset($data['ShipTo']);
            }
            if (\array_key_exists('ReferenceNumber', $data)) {
                $values = [];
                foreach ($data['ReferenceNumber'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'ShipStream\\Ups\\Api\\Model\\ManifestReferenceNumber', 'json', $context);
                }
                $object->setReferenceNumber($values);
                unset($data['ReferenceNumber']);
            }
            if (\array_key_exists('Service', $data)) {
                $object->setService($this->denormalizer->denormalize($data['Service'], 'ShipStream\\Ups\\Api\\Model\\ManifestService', 'json', $context));
                unset($data['Service']);
            }
            if (\array_key_exists('PickupDate', $data)) {
                $object->setPickupDate($data['PickupDate']);
                unset($data['PickupDate']);
            }
            if (\array_key_exists('ScheduledDeliveryDate', $data)) {
                $object->setScheduledDeliveryDate($data['ScheduledDeliveryDate']);
                unset($data['ScheduledDeliveryDate']);
            }
            if (\array_key_exists('ScheduledDeliveryTime', $data)) {
                $object->setScheduledDeliveryTime($data['ScheduledDeliveryTime']);
                unset($data['ScheduledDeliveryTime']);
            }
            if (\array_key_exists('DocumentsOnly', $data)) {
                $object->setDocumentsOnly($data['DocumentsOnly']);
                unset($data['DocumentsOnly']);
            }
            if (\array_key_exists('Package', $data)) {
                $values_1 = [];
                foreach ($data['Package'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'ShipStream\\Ups\\Api\\Model\\ManifestPackage', 'json', $context);
                }
                $object->setPackage($values_1);
                unset($data['Package']);
            }
            if (\array_key_exists('ShipmentServiceOptions', $data)) {
                $object->setShipmentServiceOptions($this->denormalizer->denormalize($data['ShipmentServiceOptions'], 'ShipStream\\Ups\\Api\\Model\\ManifestShipmentServiceOptions', 'json', $context));
                unset($data['ShipmentServiceOptions']);
            }
            if (\array_key_exists('ManufactureCountry', $data)) {
                $object->setManufactureCountry($data['ManufactureCountry']);
                unset($data['ManufactureCountry']);
            }
            if (\array_key_exists('HarmonizedCode', $data)) {
                $object->setHarmonizedCode($data['HarmonizedCode']);
                unset($data['HarmonizedCode']);
            }
            if (\array_key_exists('CustomsValue', $data)) {
                $object->setCustomsValue($this->denormalizer->denormalize($data['CustomsValue'], 'ShipStream\\Ups\\Api\\Model\\ManifestCustomsValue', 'json', $context));
                unset($data['CustomsValue']);
            }
            if (\array_key_exists('SpecialInstructions', $data)) {
                $object->setSpecialInstructions($data['SpecialInstructions']);
                unset($data['SpecialInstructions']);
            }
            if (\array_key_exists('ShipmentChargeType', $data)) {
                $object->setShipmentChargeType($data['ShipmentChargeType']);
                unset($data['ShipmentChargeType']);
            }
            if (\array_key_exists('BillToAccount', $data)) {
                $object->setBillToAccount($this->denormalizer->denormalize($data['BillToAccount'], 'ShipStream\\Ups\\Api\\Model\\ManifestBillToAccount', 'json', $context));
                unset($data['BillToAccount']);
            }
            if (\array_key_exists('ConsigneeBillIndicator', $data)) {
                $object->setConsigneeBillIndicator($data['ConsigneeBillIndicator']);
                unset($data['ConsigneeBillIndicator']);
            }
            if (\array_key_exists('CollectBillIndicator', $data)) {
                $object->setCollectBillIndicator($data['CollectBillIndicator']);
                unset($data['CollectBillIndicator']);
            }
            if (\array_key_exists('LocationAssured', $data)) {
                $object->setLocationAssured($data['LocationAssured']);
                unset($data['LocationAssured']);
            }
            if (\array_key_exists('ImportControl', $data)) {
                $object->setImportControl($data['ImportControl']);
                unset($data['ImportControl']);
            }
            if (\array_key_exists('LabelDeliveryMethod', $data)) {
                $object->setLabelDeliveryMethod($data['LabelDeliveryMethod']);
                unset($data['LabelDeliveryMethod']);
            }
            if (\array_key_exists('CommercialInvoiceRemoval', $data)) {
                $object->setCommercialInvoiceRemoval($data['CommercialInvoiceRemoval']);
                unset($data['CommercialInvoiceRemoval']);
            }
            if (\array_key_exists('PostalServiceTrackingID', $data)) {
                $object->setPostalServiceTrackingID($data['PostalServiceTrackingID']);
                unset($data['PostalServiceTrackingID']);
            }
            if (\array_key_exists('ReturnsFlexibleAccess', $data)) {
                $object->setReturnsFlexibleAccess($data['ReturnsFlexibleAccess']);
                unset($data['ReturnsFlexibleAccess']);
            }
            if (\array_key_exists('UPScarbonneutral', $data)) {
                $object->setUPScarbonneutral($data['UPScarbonneutral']);
                unset($data['UPScarbonneutral']);
            }
            if (\array_key_exists('Product', $data)) {
                $object->setProduct($data['Product']);
                unset($data['Product']);
            }
            if (\array_key_exists('UPSReturnsExchange', $data)) {
                $object->setUPSReturnsExchange($data['UPSReturnsExchange']);
                unset($data['UPSReturnsExchange']);
            }
            if (\array_key_exists('LiftGateOnDelivery', $data)) {
                $object->setLiftGateOnDelivery($data['LiftGateOnDelivery']);
                unset($data['LiftGateOnDelivery']);
            }
            if (\array_key_exists('LiftGateOnPickUp', $data)) {
                $object->setLiftGateOnPickUp($data['LiftGateOnPickUp']);
                unset($data['LiftGateOnPickUp']);
            }
            if (\array_key_exists('PickupPreference', $data)) {
                $object->setPickupPreference($data['PickupPreference']);
                unset($data['PickupPreference']);
            }
            if (\array_key_exists('DeliveryPreference', $data)) {
                $object->setDeliveryPreference($data['DeliveryPreference']);
                unset($data['DeliveryPreference']);
            }
            if (\array_key_exists('HoldForPickupAtUPSAccessPoint', $data)) {
                $object->setHoldForPickupAtUPSAccessPoint($data['HoldForPickupAtUPSAccessPoint']);
                unset($data['HoldForPickupAtUPSAccessPoint']);
            }
            if (\array_key_exists('UAPAddress', $data)) {
                $object->setUAPAddress($this->denormalizer->denormalize($data['UAPAddress'], 'ShipStream\\Ups\\Api\\Model\\ManifestUAPAddress', 'json', $context));
                unset($data['UAPAddress']);
            }
            if (\array_key_exists('DeliverToAddresseeOnlyIndicator', $data)) {
                $object->setDeliverToAddresseeOnlyIndicator($data['DeliverToAddresseeOnlyIndicator']);
                unset($data['DeliverToAddresseeOnlyIndicator']);
            }
            if (\array_key_exists('UPSAccessPointCODIndicator', $data)) {
                $object->setUPSAccessPointCODIndicator($data['UPSAccessPointCODIndicator']);
                unset($data['UPSAccessPointCODIndicator']);
            }
            if (\array_key_exists('ClinicalTrialIndicator', $data)) {
                $object->setClinicalTrialIndicator($data['ClinicalTrialIndicator']);
                unset($data['ClinicalTrialIndicator']);
            }
            if (\array_key_exists('ClinicalTrialIndicationNumber', $data)) {
                $object->setClinicalTrialIndicationNumber($data['ClinicalTrialIndicationNumber']);
                unset($data['ClinicalTrialIndicationNumber']);
            }
            if (\array_key_exists('CategoryAHazardousIndicator', $data)) {
                $object->setCategoryAHazardousIndicator($data['CategoryAHazardousIndicator']);
                unset($data['CategoryAHazardousIndicator']);
            }
            if (\array_key_exists('DirectDeliveryIndicator', $data)) {
                $object->setDirectDeliveryIndicator($data['DirectDeliveryIndicator']);
                unset($data['DirectDeliveryIndicator']);
            }
            if (\array_key_exists('PackageReleaseCodeIndicator', $data)) {
                $object->setPackageReleaseCodeIndicator($data['PackageReleaseCodeIndicator']);
                unset($data['PackageReleaseCodeIndicator']);
            }
            if (\array_key_exists('ProactiveResponseIndicator', $data)) {
                $object->setProactiveResponseIndicator($data['ProactiveResponseIndicator']);
                unset($data['ProactiveResponseIndicator']);
            }
            if (\array_key_exists('WhiteGloveDeliveryIndicator', $data)) {
                $object->setWhiteGloveDeliveryIndicator($data['WhiteGloveDeliveryIndicator']);
                unset($data['WhiteGloveDeliveryIndicator']);
            }
            if (\array_key_exists('RoomOfChoiceIndicator', $data)) {
                $object->setRoomOfChoiceIndicator($data['RoomOfChoiceIndicator']);
                unset($data['RoomOfChoiceIndicator']);
            }
            if (\array_key_exists('InstallationDeliveryIndicator', $data)) {
                $object->setInstallationDeliveryIndicator($data['InstallationDeliveryIndicator']);
                unset($data['InstallationDeliveryIndicator']);
            }
            if (\array_key_exists('ItemDisposalIndicator', $data)) {
                $object->setItemDisposalIndicator($data['ItemDisposalIndicator']);
                unset($data['ItemDisposalIndicator']);
            }
            if (\array_key_exists('LeadShipmentTrackingNumber', $data)) {
                $object->setLeadShipmentTrackingNumber($data['LeadShipmentTrackingNumber']);
                unset($data['LeadShipmentTrackingNumber']);
            }
            if (\array_key_exists('SaturdayNonPremiumCommercialDeliveryIndicator', $data)) {
                $object->setSaturdayNonPremiumCommercialDeliveryIndicator($data['SaturdayNonPremiumCommercialDeliveryIndicator']);
                unset($data['SaturdayNonPremiumCommercialDeliveryIndicator']);
            }
            if (\array_key_exists('SundayNonPremiumCommercialDeliveryIndicator', $data)) {
                $object->setSundayNonPremiumCommercialDeliveryIndicator($data['SundayNonPremiumCommercialDeliveryIndicator']);
                unset($data['SundayNonPremiumCommercialDeliveryIndicator']);
            }
            if (\array_key_exists('UPSPremierAccessorialIndicator', $data)) {
                $object->setUPSPremierAccessorialIndicator($data['UPSPremierAccessorialIndicator']);
                unset($data['UPSPremierAccessorialIndicator']);
            }
            if (\array_key_exists('UPSPremierCategoryCode', $data)) {
                $object->setUPSPremierCategoryCode($data['UPSPremierCategoryCode']);
                unset($data['UPSPremierCategoryCode']);
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
            $data['Shipper'] = $this->normalizer->normalize($object->getShipper(), 'json', $context);
            $data['ShipTo'] = $this->normalizer->normalize($object->getShipTo(), 'json', $context);
            if ($object->isInitialized('referenceNumber') && null !== $object->getReferenceNumber()) {
                $values = [];
                foreach ($object->getReferenceNumber() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['ReferenceNumber'] = $values;
            }
            if ($object->isInitialized('service') && null !== $object->getService()) {
                $data['Service'] = $this->normalizer->normalize($object->getService(), 'json', $context);
            }
            if ($object->isInitialized('pickupDate') && null !== $object->getPickupDate()) {
                $data['PickupDate'] = $object->getPickupDate();
            }
            if ($object->isInitialized('scheduledDeliveryDate') && null !== $object->getScheduledDeliveryDate()) {
                $data['ScheduledDeliveryDate'] = $object->getScheduledDeliveryDate();
            }
            if ($object->isInitialized('scheduledDeliveryTime') && null !== $object->getScheduledDeliveryTime()) {
                $data['ScheduledDeliveryTime'] = $object->getScheduledDeliveryTime();
            }
            if ($object->isInitialized('documentsOnly') && null !== $object->getDocumentsOnly()) {
                $data['DocumentsOnly'] = $object->getDocumentsOnly();
            }
            if ($object->isInitialized('package') && null !== $object->getPackage()) {
                $values_1 = [];
                foreach ($object->getPackage() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['Package'] = $values_1;
            }
            if ($object->isInitialized('shipmentServiceOptions') && null !== $object->getShipmentServiceOptions()) {
                $data['ShipmentServiceOptions'] = $this->normalizer->normalize($object->getShipmentServiceOptions(), 'json', $context);
            }
            if ($object->isInitialized('manufactureCountry') && null !== $object->getManufactureCountry()) {
                $data['ManufactureCountry'] = $object->getManufactureCountry();
            }
            if ($object->isInitialized('harmonizedCode') && null !== $object->getHarmonizedCode()) {
                $data['HarmonizedCode'] = $object->getHarmonizedCode();
            }
            if ($object->isInitialized('customsValue') && null !== $object->getCustomsValue()) {
                $data['CustomsValue'] = $this->normalizer->normalize($object->getCustomsValue(), 'json', $context);
            }
            if ($object->isInitialized('specialInstructions') && null !== $object->getSpecialInstructions()) {
                $data['SpecialInstructions'] = $object->getSpecialInstructions();
            }
            if ($object->isInitialized('shipmentChargeType') && null !== $object->getShipmentChargeType()) {
                $data['ShipmentChargeType'] = $object->getShipmentChargeType();
            }
            if ($object->isInitialized('billToAccount') && null !== $object->getBillToAccount()) {
                $data['BillToAccount'] = $this->normalizer->normalize($object->getBillToAccount(), 'json', $context);
            }
            $data['ConsigneeBillIndicator'] = $object->getConsigneeBillIndicator();
            $data['CollectBillIndicator'] = $object->getCollectBillIndicator();
            if ($object->isInitialized('locationAssured') && null !== $object->getLocationAssured()) {
                $data['LocationAssured'] = $object->getLocationAssured();
            }
            if ($object->isInitialized('importControl') && null !== $object->getImportControl()) {
                $data['ImportControl'] = $object->getImportControl();
            }
            if ($object->isInitialized('labelDeliveryMethod') && null !== $object->getLabelDeliveryMethod()) {
                $data['LabelDeliveryMethod'] = $object->getLabelDeliveryMethod();
            }
            if ($object->isInitialized('commercialInvoiceRemoval') && null !== $object->getCommercialInvoiceRemoval()) {
                $data['CommercialInvoiceRemoval'] = $object->getCommercialInvoiceRemoval();
            }
            if ($object->isInitialized('postalServiceTrackingID') && null !== $object->getPostalServiceTrackingID()) {
                $data['PostalServiceTrackingID'] = $object->getPostalServiceTrackingID();
            }
            if ($object->isInitialized('returnsFlexibleAccess') && null !== $object->getReturnsFlexibleAccess()) {
                $data['ReturnsFlexibleAccess'] = $object->getReturnsFlexibleAccess();
            }
            if ($object->isInitialized('uPScarbonneutral') && null !== $object->getUPScarbonneutral()) {
                $data['UPScarbonneutral'] = $object->getUPScarbonneutral();
            }
            if ($object->isInitialized('product') && null !== $object->getProduct()) {
                $data['Product'] = $object->getProduct();
            }
            if ($object->isInitialized('uPSReturnsExchange') && null !== $object->getUPSReturnsExchange()) {
                $data['UPSReturnsExchange'] = $object->getUPSReturnsExchange();
            }
            if ($object->isInitialized('liftGateOnDelivery') && null !== $object->getLiftGateOnDelivery()) {
                $data['LiftGateOnDelivery'] = $object->getLiftGateOnDelivery();
            }
            if ($object->isInitialized('liftGateOnPickUp') && null !== $object->getLiftGateOnPickUp()) {
                $data['LiftGateOnPickUp'] = $object->getLiftGateOnPickUp();
            }
            if ($object->isInitialized('pickupPreference') && null !== $object->getPickupPreference()) {
                $data['PickupPreference'] = $object->getPickupPreference();
            }
            if ($object->isInitialized('deliveryPreference') && null !== $object->getDeliveryPreference()) {
                $data['DeliveryPreference'] = $object->getDeliveryPreference();
            }
            if ($object->isInitialized('holdForPickupAtUPSAccessPoint') && null !== $object->getHoldForPickupAtUPSAccessPoint()) {
                $data['HoldForPickupAtUPSAccessPoint'] = $object->getHoldForPickupAtUPSAccessPoint();
            }
            if ($object->isInitialized('uAPAddress') && null !== $object->getUAPAddress()) {
                $data['UAPAddress'] = $this->normalizer->normalize($object->getUAPAddress(), 'json', $context);
            }
            if ($object->isInitialized('deliverToAddresseeOnlyIndicator') && null !== $object->getDeliverToAddresseeOnlyIndicator()) {
                $data['DeliverToAddresseeOnlyIndicator'] = $object->getDeliverToAddresseeOnlyIndicator();
            }
            if ($object->isInitialized('uPSAccessPointCODIndicator') && null !== $object->getUPSAccessPointCODIndicator()) {
                $data['UPSAccessPointCODIndicator'] = $object->getUPSAccessPointCODIndicator();
            }
            if ($object->isInitialized('clinicalTrialIndicator') && null !== $object->getClinicalTrialIndicator()) {
                $data['ClinicalTrialIndicator'] = $object->getClinicalTrialIndicator();
            }
            if ($object->isInitialized('clinicalTrialIndicationNumber') && null !== $object->getClinicalTrialIndicationNumber()) {
                $data['ClinicalTrialIndicationNumber'] = $object->getClinicalTrialIndicationNumber();
            }
            if ($object->isInitialized('categoryAHazardousIndicator') && null !== $object->getCategoryAHazardousIndicator()) {
                $data['CategoryAHazardousIndicator'] = $object->getCategoryAHazardousIndicator();
            }
            if ($object->isInitialized('directDeliveryIndicator') && null !== $object->getDirectDeliveryIndicator()) {
                $data['DirectDeliveryIndicator'] = $object->getDirectDeliveryIndicator();
            }
            if ($object->isInitialized('packageReleaseCodeIndicator') && null !== $object->getPackageReleaseCodeIndicator()) {
                $data['PackageReleaseCodeIndicator'] = $object->getPackageReleaseCodeIndicator();
            }
            if ($object->isInitialized('proactiveResponseIndicator') && null !== $object->getProactiveResponseIndicator()) {
                $data['ProactiveResponseIndicator'] = $object->getProactiveResponseIndicator();
            }
            if ($object->isInitialized('whiteGloveDeliveryIndicator') && null !== $object->getWhiteGloveDeliveryIndicator()) {
                $data['WhiteGloveDeliveryIndicator'] = $object->getWhiteGloveDeliveryIndicator();
            }
            if ($object->isInitialized('roomOfChoiceIndicator') && null !== $object->getRoomOfChoiceIndicator()) {
                $data['RoomOfChoiceIndicator'] = $object->getRoomOfChoiceIndicator();
            }
            if ($object->isInitialized('installationDeliveryIndicator') && null !== $object->getInstallationDeliveryIndicator()) {
                $data['InstallationDeliveryIndicator'] = $object->getInstallationDeliveryIndicator();
            }
            if ($object->isInitialized('itemDisposalIndicator') && null !== $object->getItemDisposalIndicator()) {
                $data['ItemDisposalIndicator'] = $object->getItemDisposalIndicator();
            }
            if ($object->isInitialized('leadShipmentTrackingNumber') && null !== $object->getLeadShipmentTrackingNumber()) {
                $data['LeadShipmentTrackingNumber'] = $object->getLeadShipmentTrackingNumber();
            }
            if ($object->isInitialized('saturdayNonPremiumCommercialDeliveryIndicator') && null !== $object->getSaturdayNonPremiumCommercialDeliveryIndicator()) {
                $data['SaturdayNonPremiumCommercialDeliveryIndicator'] = $object->getSaturdayNonPremiumCommercialDeliveryIndicator();
            }
            if ($object->isInitialized('sundayNonPremiumCommercialDeliveryIndicator') && null !== $object->getSundayNonPremiumCommercialDeliveryIndicator()) {
                $data['SundayNonPremiumCommercialDeliveryIndicator'] = $object->getSundayNonPremiumCommercialDeliveryIndicator();
            }
            if ($object->isInitialized('uPSPremierAccessorialIndicator') && null !== $object->getUPSPremierAccessorialIndicator()) {
                $data['UPSPremierAccessorialIndicator'] = $object->getUPSPremierAccessorialIndicator();
            }
            if ($object->isInitialized('uPSPremierCategoryCode') && null !== $object->getUPSPremierCategoryCode()) {
                $data['UPSPremierCategoryCode'] = $object->getUPSPremierCategoryCode();
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
            return ['ShipStream\\Ups\\Api\\Model\\SubscriptionFileManifest' => false];
        }
    }
} else {
    class SubscriptionFileManifestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\SubscriptionFileManifest';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\SubscriptionFileManifest';
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
            $object = new \ShipStream\Ups\Api\Model\SubscriptionFileManifest();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Shipper', $data)) {
                $object->setShipper($this->denormalizer->denormalize($data['Shipper'], 'ShipStream\\Ups\\Api\\Model\\ManifestShipper', 'json', $context));
                unset($data['Shipper']);
            }
            if (\array_key_exists('ShipTo', $data)) {
                $object->setShipTo($this->denormalizer->denormalize($data['ShipTo'], 'ShipStream\\Ups\\Api\\Model\\ManifestShipTo', 'json', $context));
                unset($data['ShipTo']);
            }
            if (\array_key_exists('ReferenceNumber', $data)) {
                $values = [];
                foreach ($data['ReferenceNumber'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'ShipStream\\Ups\\Api\\Model\\ManifestReferenceNumber', 'json', $context);
                }
                $object->setReferenceNumber($values);
                unset($data['ReferenceNumber']);
            }
            if (\array_key_exists('Service', $data)) {
                $object->setService($this->denormalizer->denormalize($data['Service'], 'ShipStream\\Ups\\Api\\Model\\ManifestService', 'json', $context));
                unset($data['Service']);
            }
            if (\array_key_exists('PickupDate', $data)) {
                $object->setPickupDate($data['PickupDate']);
                unset($data['PickupDate']);
            }
            if (\array_key_exists('ScheduledDeliveryDate', $data)) {
                $object->setScheduledDeliveryDate($data['ScheduledDeliveryDate']);
                unset($data['ScheduledDeliveryDate']);
            }
            if (\array_key_exists('ScheduledDeliveryTime', $data)) {
                $object->setScheduledDeliveryTime($data['ScheduledDeliveryTime']);
                unset($data['ScheduledDeliveryTime']);
            }
            if (\array_key_exists('DocumentsOnly', $data)) {
                $object->setDocumentsOnly($data['DocumentsOnly']);
                unset($data['DocumentsOnly']);
            }
            if (\array_key_exists('Package', $data)) {
                $values_1 = [];
                foreach ($data['Package'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'ShipStream\\Ups\\Api\\Model\\ManifestPackage', 'json', $context);
                }
                $object->setPackage($values_1);
                unset($data['Package']);
            }
            if (\array_key_exists('ShipmentServiceOptions', $data)) {
                $object->setShipmentServiceOptions($this->denormalizer->denormalize($data['ShipmentServiceOptions'], 'ShipStream\\Ups\\Api\\Model\\ManifestShipmentServiceOptions', 'json', $context));
                unset($data['ShipmentServiceOptions']);
            }
            if (\array_key_exists('ManufactureCountry', $data)) {
                $object->setManufactureCountry($data['ManufactureCountry']);
                unset($data['ManufactureCountry']);
            }
            if (\array_key_exists('HarmonizedCode', $data)) {
                $object->setHarmonizedCode($data['HarmonizedCode']);
                unset($data['HarmonizedCode']);
            }
            if (\array_key_exists('CustomsValue', $data)) {
                $object->setCustomsValue($this->denormalizer->denormalize($data['CustomsValue'], 'ShipStream\\Ups\\Api\\Model\\ManifestCustomsValue', 'json', $context));
                unset($data['CustomsValue']);
            }
            if (\array_key_exists('SpecialInstructions', $data)) {
                $object->setSpecialInstructions($data['SpecialInstructions']);
                unset($data['SpecialInstructions']);
            }
            if (\array_key_exists('ShipmentChargeType', $data)) {
                $object->setShipmentChargeType($data['ShipmentChargeType']);
                unset($data['ShipmentChargeType']);
            }
            if (\array_key_exists('BillToAccount', $data)) {
                $object->setBillToAccount($this->denormalizer->denormalize($data['BillToAccount'], 'ShipStream\\Ups\\Api\\Model\\ManifestBillToAccount', 'json', $context));
                unset($data['BillToAccount']);
            }
            if (\array_key_exists('ConsigneeBillIndicator', $data)) {
                $object->setConsigneeBillIndicator($data['ConsigneeBillIndicator']);
                unset($data['ConsigneeBillIndicator']);
            }
            if (\array_key_exists('CollectBillIndicator', $data)) {
                $object->setCollectBillIndicator($data['CollectBillIndicator']);
                unset($data['CollectBillIndicator']);
            }
            if (\array_key_exists('LocationAssured', $data)) {
                $object->setLocationAssured($data['LocationAssured']);
                unset($data['LocationAssured']);
            }
            if (\array_key_exists('ImportControl', $data)) {
                $object->setImportControl($data['ImportControl']);
                unset($data['ImportControl']);
            }
            if (\array_key_exists('LabelDeliveryMethod', $data)) {
                $object->setLabelDeliveryMethod($data['LabelDeliveryMethod']);
                unset($data['LabelDeliveryMethod']);
            }
            if (\array_key_exists('CommercialInvoiceRemoval', $data)) {
                $object->setCommercialInvoiceRemoval($data['CommercialInvoiceRemoval']);
                unset($data['CommercialInvoiceRemoval']);
            }
            if (\array_key_exists('PostalServiceTrackingID', $data)) {
                $object->setPostalServiceTrackingID($data['PostalServiceTrackingID']);
                unset($data['PostalServiceTrackingID']);
            }
            if (\array_key_exists('ReturnsFlexibleAccess', $data)) {
                $object->setReturnsFlexibleAccess($data['ReturnsFlexibleAccess']);
                unset($data['ReturnsFlexibleAccess']);
            }
            if (\array_key_exists('UPScarbonneutral', $data)) {
                $object->setUPScarbonneutral($data['UPScarbonneutral']);
                unset($data['UPScarbonneutral']);
            }
            if (\array_key_exists('Product', $data)) {
                $object->setProduct($data['Product']);
                unset($data['Product']);
            }
            if (\array_key_exists('UPSReturnsExchange', $data)) {
                $object->setUPSReturnsExchange($data['UPSReturnsExchange']);
                unset($data['UPSReturnsExchange']);
            }
            if (\array_key_exists('LiftGateOnDelivery', $data)) {
                $object->setLiftGateOnDelivery($data['LiftGateOnDelivery']);
                unset($data['LiftGateOnDelivery']);
            }
            if (\array_key_exists('LiftGateOnPickUp', $data)) {
                $object->setLiftGateOnPickUp($data['LiftGateOnPickUp']);
                unset($data['LiftGateOnPickUp']);
            }
            if (\array_key_exists('PickupPreference', $data)) {
                $object->setPickupPreference($data['PickupPreference']);
                unset($data['PickupPreference']);
            }
            if (\array_key_exists('DeliveryPreference', $data)) {
                $object->setDeliveryPreference($data['DeliveryPreference']);
                unset($data['DeliveryPreference']);
            }
            if (\array_key_exists('HoldForPickupAtUPSAccessPoint', $data)) {
                $object->setHoldForPickupAtUPSAccessPoint($data['HoldForPickupAtUPSAccessPoint']);
                unset($data['HoldForPickupAtUPSAccessPoint']);
            }
            if (\array_key_exists('UAPAddress', $data)) {
                $object->setUAPAddress($this->denormalizer->denormalize($data['UAPAddress'], 'ShipStream\\Ups\\Api\\Model\\ManifestUAPAddress', 'json', $context));
                unset($data['UAPAddress']);
            }
            if (\array_key_exists('DeliverToAddresseeOnlyIndicator', $data)) {
                $object->setDeliverToAddresseeOnlyIndicator($data['DeliverToAddresseeOnlyIndicator']);
                unset($data['DeliverToAddresseeOnlyIndicator']);
            }
            if (\array_key_exists('UPSAccessPointCODIndicator', $data)) {
                $object->setUPSAccessPointCODIndicator($data['UPSAccessPointCODIndicator']);
                unset($data['UPSAccessPointCODIndicator']);
            }
            if (\array_key_exists('ClinicalTrialIndicator', $data)) {
                $object->setClinicalTrialIndicator($data['ClinicalTrialIndicator']);
                unset($data['ClinicalTrialIndicator']);
            }
            if (\array_key_exists('ClinicalTrialIndicationNumber', $data)) {
                $object->setClinicalTrialIndicationNumber($data['ClinicalTrialIndicationNumber']);
                unset($data['ClinicalTrialIndicationNumber']);
            }
            if (\array_key_exists('CategoryAHazardousIndicator', $data)) {
                $object->setCategoryAHazardousIndicator($data['CategoryAHazardousIndicator']);
                unset($data['CategoryAHazardousIndicator']);
            }
            if (\array_key_exists('DirectDeliveryIndicator', $data)) {
                $object->setDirectDeliveryIndicator($data['DirectDeliveryIndicator']);
                unset($data['DirectDeliveryIndicator']);
            }
            if (\array_key_exists('PackageReleaseCodeIndicator', $data)) {
                $object->setPackageReleaseCodeIndicator($data['PackageReleaseCodeIndicator']);
                unset($data['PackageReleaseCodeIndicator']);
            }
            if (\array_key_exists('ProactiveResponseIndicator', $data)) {
                $object->setProactiveResponseIndicator($data['ProactiveResponseIndicator']);
                unset($data['ProactiveResponseIndicator']);
            }
            if (\array_key_exists('WhiteGloveDeliveryIndicator', $data)) {
                $object->setWhiteGloveDeliveryIndicator($data['WhiteGloveDeliveryIndicator']);
                unset($data['WhiteGloveDeliveryIndicator']);
            }
            if (\array_key_exists('RoomOfChoiceIndicator', $data)) {
                $object->setRoomOfChoiceIndicator($data['RoomOfChoiceIndicator']);
                unset($data['RoomOfChoiceIndicator']);
            }
            if (\array_key_exists('InstallationDeliveryIndicator', $data)) {
                $object->setInstallationDeliveryIndicator($data['InstallationDeliveryIndicator']);
                unset($data['InstallationDeliveryIndicator']);
            }
            if (\array_key_exists('ItemDisposalIndicator', $data)) {
                $object->setItemDisposalIndicator($data['ItemDisposalIndicator']);
                unset($data['ItemDisposalIndicator']);
            }
            if (\array_key_exists('LeadShipmentTrackingNumber', $data)) {
                $object->setLeadShipmentTrackingNumber($data['LeadShipmentTrackingNumber']);
                unset($data['LeadShipmentTrackingNumber']);
            }
            if (\array_key_exists('SaturdayNonPremiumCommercialDeliveryIndicator', $data)) {
                $object->setSaturdayNonPremiumCommercialDeliveryIndicator($data['SaturdayNonPremiumCommercialDeliveryIndicator']);
                unset($data['SaturdayNonPremiumCommercialDeliveryIndicator']);
            }
            if (\array_key_exists('SundayNonPremiumCommercialDeliveryIndicator', $data)) {
                $object->setSundayNonPremiumCommercialDeliveryIndicator($data['SundayNonPremiumCommercialDeliveryIndicator']);
                unset($data['SundayNonPremiumCommercialDeliveryIndicator']);
            }
            if (\array_key_exists('UPSPremierAccessorialIndicator', $data)) {
                $object->setUPSPremierAccessorialIndicator($data['UPSPremierAccessorialIndicator']);
                unset($data['UPSPremierAccessorialIndicator']);
            }
            if (\array_key_exists('UPSPremierCategoryCode', $data)) {
                $object->setUPSPremierCategoryCode($data['UPSPremierCategoryCode']);
                unset($data['UPSPremierCategoryCode']);
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
            $data['Shipper'] = $this->normalizer->normalize($object->getShipper(), 'json', $context);
            $data['ShipTo'] = $this->normalizer->normalize($object->getShipTo(), 'json', $context);
            if ($object->isInitialized('referenceNumber') && null !== $object->getReferenceNumber()) {
                $values = [];
                foreach ($object->getReferenceNumber() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['ReferenceNumber'] = $values;
            }
            if ($object->isInitialized('service') && null !== $object->getService()) {
                $data['Service'] = $this->normalizer->normalize($object->getService(), 'json', $context);
            }
            if ($object->isInitialized('pickupDate') && null !== $object->getPickupDate()) {
                $data['PickupDate'] = $object->getPickupDate();
            }
            if ($object->isInitialized('scheduledDeliveryDate') && null !== $object->getScheduledDeliveryDate()) {
                $data['ScheduledDeliveryDate'] = $object->getScheduledDeliveryDate();
            }
            if ($object->isInitialized('scheduledDeliveryTime') && null !== $object->getScheduledDeliveryTime()) {
                $data['ScheduledDeliveryTime'] = $object->getScheduledDeliveryTime();
            }
            if ($object->isInitialized('documentsOnly') && null !== $object->getDocumentsOnly()) {
                $data['DocumentsOnly'] = $object->getDocumentsOnly();
            }
            if ($object->isInitialized('package') && null !== $object->getPackage()) {
                $values_1 = [];
                foreach ($object->getPackage() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['Package'] = $values_1;
            }
            if ($object->isInitialized('shipmentServiceOptions') && null !== $object->getShipmentServiceOptions()) {
                $data['ShipmentServiceOptions'] = $this->normalizer->normalize($object->getShipmentServiceOptions(), 'json', $context);
            }
            if ($object->isInitialized('manufactureCountry') && null !== $object->getManufactureCountry()) {
                $data['ManufactureCountry'] = $object->getManufactureCountry();
            }
            if ($object->isInitialized('harmonizedCode') && null !== $object->getHarmonizedCode()) {
                $data['HarmonizedCode'] = $object->getHarmonizedCode();
            }
            if ($object->isInitialized('customsValue') && null !== $object->getCustomsValue()) {
                $data['CustomsValue'] = $this->normalizer->normalize($object->getCustomsValue(), 'json', $context);
            }
            if ($object->isInitialized('specialInstructions') && null !== $object->getSpecialInstructions()) {
                $data['SpecialInstructions'] = $object->getSpecialInstructions();
            }
            if ($object->isInitialized('shipmentChargeType') && null !== $object->getShipmentChargeType()) {
                $data['ShipmentChargeType'] = $object->getShipmentChargeType();
            }
            if ($object->isInitialized('billToAccount') && null !== $object->getBillToAccount()) {
                $data['BillToAccount'] = $this->normalizer->normalize($object->getBillToAccount(), 'json', $context);
            }
            $data['ConsigneeBillIndicator'] = $object->getConsigneeBillIndicator();
            $data['CollectBillIndicator'] = $object->getCollectBillIndicator();
            if ($object->isInitialized('locationAssured') && null !== $object->getLocationAssured()) {
                $data['LocationAssured'] = $object->getLocationAssured();
            }
            if ($object->isInitialized('importControl') && null !== $object->getImportControl()) {
                $data['ImportControl'] = $object->getImportControl();
            }
            if ($object->isInitialized('labelDeliveryMethod') && null !== $object->getLabelDeliveryMethod()) {
                $data['LabelDeliveryMethod'] = $object->getLabelDeliveryMethod();
            }
            if ($object->isInitialized('commercialInvoiceRemoval') && null !== $object->getCommercialInvoiceRemoval()) {
                $data['CommercialInvoiceRemoval'] = $object->getCommercialInvoiceRemoval();
            }
            if ($object->isInitialized('postalServiceTrackingID') && null !== $object->getPostalServiceTrackingID()) {
                $data['PostalServiceTrackingID'] = $object->getPostalServiceTrackingID();
            }
            if ($object->isInitialized('returnsFlexibleAccess') && null !== $object->getReturnsFlexibleAccess()) {
                $data['ReturnsFlexibleAccess'] = $object->getReturnsFlexibleAccess();
            }
            if ($object->isInitialized('uPScarbonneutral') && null !== $object->getUPScarbonneutral()) {
                $data['UPScarbonneutral'] = $object->getUPScarbonneutral();
            }
            if ($object->isInitialized('product') && null !== $object->getProduct()) {
                $data['Product'] = $object->getProduct();
            }
            if ($object->isInitialized('uPSReturnsExchange') && null !== $object->getUPSReturnsExchange()) {
                $data['UPSReturnsExchange'] = $object->getUPSReturnsExchange();
            }
            if ($object->isInitialized('liftGateOnDelivery') && null !== $object->getLiftGateOnDelivery()) {
                $data['LiftGateOnDelivery'] = $object->getLiftGateOnDelivery();
            }
            if ($object->isInitialized('liftGateOnPickUp') && null !== $object->getLiftGateOnPickUp()) {
                $data['LiftGateOnPickUp'] = $object->getLiftGateOnPickUp();
            }
            if ($object->isInitialized('pickupPreference') && null !== $object->getPickupPreference()) {
                $data['PickupPreference'] = $object->getPickupPreference();
            }
            if ($object->isInitialized('deliveryPreference') && null !== $object->getDeliveryPreference()) {
                $data['DeliveryPreference'] = $object->getDeliveryPreference();
            }
            if ($object->isInitialized('holdForPickupAtUPSAccessPoint') && null !== $object->getHoldForPickupAtUPSAccessPoint()) {
                $data['HoldForPickupAtUPSAccessPoint'] = $object->getHoldForPickupAtUPSAccessPoint();
            }
            if ($object->isInitialized('uAPAddress') && null !== $object->getUAPAddress()) {
                $data['UAPAddress'] = $this->normalizer->normalize($object->getUAPAddress(), 'json', $context);
            }
            if ($object->isInitialized('deliverToAddresseeOnlyIndicator') && null !== $object->getDeliverToAddresseeOnlyIndicator()) {
                $data['DeliverToAddresseeOnlyIndicator'] = $object->getDeliverToAddresseeOnlyIndicator();
            }
            if ($object->isInitialized('uPSAccessPointCODIndicator') && null !== $object->getUPSAccessPointCODIndicator()) {
                $data['UPSAccessPointCODIndicator'] = $object->getUPSAccessPointCODIndicator();
            }
            if ($object->isInitialized('clinicalTrialIndicator') && null !== $object->getClinicalTrialIndicator()) {
                $data['ClinicalTrialIndicator'] = $object->getClinicalTrialIndicator();
            }
            if ($object->isInitialized('clinicalTrialIndicationNumber') && null !== $object->getClinicalTrialIndicationNumber()) {
                $data['ClinicalTrialIndicationNumber'] = $object->getClinicalTrialIndicationNumber();
            }
            if ($object->isInitialized('categoryAHazardousIndicator') && null !== $object->getCategoryAHazardousIndicator()) {
                $data['CategoryAHazardousIndicator'] = $object->getCategoryAHazardousIndicator();
            }
            if ($object->isInitialized('directDeliveryIndicator') && null !== $object->getDirectDeliveryIndicator()) {
                $data['DirectDeliveryIndicator'] = $object->getDirectDeliveryIndicator();
            }
            if ($object->isInitialized('packageReleaseCodeIndicator') && null !== $object->getPackageReleaseCodeIndicator()) {
                $data['PackageReleaseCodeIndicator'] = $object->getPackageReleaseCodeIndicator();
            }
            if ($object->isInitialized('proactiveResponseIndicator') && null !== $object->getProactiveResponseIndicator()) {
                $data['ProactiveResponseIndicator'] = $object->getProactiveResponseIndicator();
            }
            if ($object->isInitialized('whiteGloveDeliveryIndicator') && null !== $object->getWhiteGloveDeliveryIndicator()) {
                $data['WhiteGloveDeliveryIndicator'] = $object->getWhiteGloveDeliveryIndicator();
            }
            if ($object->isInitialized('roomOfChoiceIndicator') && null !== $object->getRoomOfChoiceIndicator()) {
                $data['RoomOfChoiceIndicator'] = $object->getRoomOfChoiceIndicator();
            }
            if ($object->isInitialized('installationDeliveryIndicator') && null !== $object->getInstallationDeliveryIndicator()) {
                $data['InstallationDeliveryIndicator'] = $object->getInstallationDeliveryIndicator();
            }
            if ($object->isInitialized('itemDisposalIndicator') && null !== $object->getItemDisposalIndicator()) {
                $data['ItemDisposalIndicator'] = $object->getItemDisposalIndicator();
            }
            if ($object->isInitialized('leadShipmentTrackingNumber') && null !== $object->getLeadShipmentTrackingNumber()) {
                $data['LeadShipmentTrackingNumber'] = $object->getLeadShipmentTrackingNumber();
            }
            if ($object->isInitialized('saturdayNonPremiumCommercialDeliveryIndicator') && null !== $object->getSaturdayNonPremiumCommercialDeliveryIndicator()) {
                $data['SaturdayNonPremiumCommercialDeliveryIndicator'] = $object->getSaturdayNonPremiumCommercialDeliveryIndicator();
            }
            if ($object->isInitialized('sundayNonPremiumCommercialDeliveryIndicator') && null !== $object->getSundayNonPremiumCommercialDeliveryIndicator()) {
                $data['SundayNonPremiumCommercialDeliveryIndicator'] = $object->getSundayNonPremiumCommercialDeliveryIndicator();
            }
            if ($object->isInitialized('uPSPremierAccessorialIndicator') && null !== $object->getUPSPremierAccessorialIndicator()) {
                $data['UPSPremierAccessorialIndicator'] = $object->getUPSPremierAccessorialIndicator();
            }
            if ($object->isInitialized('uPSPremierCategoryCode') && null !== $object->getUPSPremierCategoryCode()) {
                $data['UPSPremierCategoryCode'] = $object->getUPSPremierCategoryCode();
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
            return ['ShipStream\\Ups\\Api\\Model\\SubscriptionFileManifest' => false];
        }
    }
}