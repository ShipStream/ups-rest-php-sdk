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
            if (\array_key_exists('Shipper', $data) && $data['Shipper'] !== null) {
                $object->setShipper($this->denormalizer->denormalize($data['Shipper'], 'ShipStream\\Ups\\Api\\Model\\ManifestShipper', 'json', $context));
                unset($data['Shipper']);
            }
            elseif (\array_key_exists('Shipper', $data) && $data['Shipper'] === null) {
                $object->setShipper(null);
            }
            if (\array_key_exists('ShipTo', $data) && $data['ShipTo'] !== null) {
                $object->setShipTo($this->denormalizer->denormalize($data['ShipTo'], 'ShipStream\\Ups\\Api\\Model\\ManifestShipTo', 'json', $context));
                unset($data['ShipTo']);
            }
            elseif (\array_key_exists('ShipTo', $data) && $data['ShipTo'] === null) {
                $object->setShipTo(null);
            }
            if (\array_key_exists('ReferenceNumber', $data) && $data['ReferenceNumber'] !== null) {
                $values = [];
                foreach ($data['ReferenceNumber'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'ShipStream\\Ups\\Api\\Model\\ManifestReferenceNumber', 'json', $context);
                }
                $object->setReferenceNumber($values);
                unset($data['ReferenceNumber']);
            }
            elseif (\array_key_exists('ReferenceNumber', $data) && $data['ReferenceNumber'] === null) {
                $object->setReferenceNumber(null);
            }
            if (\array_key_exists('Service', $data) && $data['Service'] !== null) {
                $object->setService($this->denormalizer->denormalize($data['Service'], 'ShipStream\\Ups\\Api\\Model\\ManifestService', 'json', $context));
                unset($data['Service']);
            }
            elseif (\array_key_exists('Service', $data) && $data['Service'] === null) {
                $object->setService(null);
            }
            if (\array_key_exists('PickupDate', $data) && $data['PickupDate'] !== null) {
                $object->setPickupDate($data['PickupDate']);
                unset($data['PickupDate']);
            }
            elseif (\array_key_exists('PickupDate', $data) && $data['PickupDate'] === null) {
                $object->setPickupDate(null);
            }
            if (\array_key_exists('ScheduledDeliveryDate', $data) && $data['ScheduledDeliveryDate'] !== null) {
                $object->setScheduledDeliveryDate($data['ScheduledDeliveryDate']);
                unset($data['ScheduledDeliveryDate']);
            }
            elseif (\array_key_exists('ScheduledDeliveryDate', $data) && $data['ScheduledDeliveryDate'] === null) {
                $object->setScheduledDeliveryDate(null);
            }
            if (\array_key_exists('ScheduledDeliveryTime', $data) && $data['ScheduledDeliveryTime'] !== null) {
                $object->setScheduledDeliveryTime($data['ScheduledDeliveryTime']);
                unset($data['ScheduledDeliveryTime']);
            }
            elseif (\array_key_exists('ScheduledDeliveryTime', $data) && $data['ScheduledDeliveryTime'] === null) {
                $object->setScheduledDeliveryTime(null);
            }
            if (\array_key_exists('DocumentsOnly', $data) && $data['DocumentsOnly'] !== null) {
                $object->setDocumentsOnly($data['DocumentsOnly']);
                unset($data['DocumentsOnly']);
            }
            elseif (\array_key_exists('DocumentsOnly', $data) && $data['DocumentsOnly'] === null) {
                $object->setDocumentsOnly(null);
            }
            if (\array_key_exists('Package', $data) && $data['Package'] !== null) {
                $values_1 = [];
                foreach ($data['Package'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'ShipStream\\Ups\\Api\\Model\\ManifestPackage', 'json', $context);
                }
                $object->setPackage($values_1);
                unset($data['Package']);
            }
            elseif (\array_key_exists('Package', $data) && $data['Package'] === null) {
                $object->setPackage(null);
            }
            if (\array_key_exists('ShipmentServiceOptions', $data) && $data['ShipmentServiceOptions'] !== null) {
                $object->setShipmentServiceOptions($this->denormalizer->denormalize($data['ShipmentServiceOptions'], 'ShipStream\\Ups\\Api\\Model\\ManifestShipmentServiceOptions', 'json', $context));
                unset($data['ShipmentServiceOptions']);
            }
            elseif (\array_key_exists('ShipmentServiceOptions', $data) && $data['ShipmentServiceOptions'] === null) {
                $object->setShipmentServiceOptions(null);
            }
            if (\array_key_exists('ManufactureCountry', $data) && $data['ManufactureCountry'] !== null) {
                $object->setManufactureCountry($data['ManufactureCountry']);
                unset($data['ManufactureCountry']);
            }
            elseif (\array_key_exists('ManufactureCountry', $data) && $data['ManufactureCountry'] === null) {
                $object->setManufactureCountry(null);
            }
            if (\array_key_exists('HarmonizedCode', $data) && $data['HarmonizedCode'] !== null) {
                $object->setHarmonizedCode($data['HarmonizedCode']);
                unset($data['HarmonizedCode']);
            }
            elseif (\array_key_exists('HarmonizedCode', $data) && $data['HarmonizedCode'] === null) {
                $object->setHarmonizedCode(null);
            }
            if (\array_key_exists('CustomsValue', $data) && $data['CustomsValue'] !== null) {
                $object->setCustomsValue($this->denormalizer->denormalize($data['CustomsValue'], 'ShipStream\\Ups\\Api\\Model\\ManifestCustomsValue', 'json', $context));
                unset($data['CustomsValue']);
            }
            elseif (\array_key_exists('CustomsValue', $data) && $data['CustomsValue'] === null) {
                $object->setCustomsValue(null);
            }
            if (\array_key_exists('SpecialInstructions', $data) && $data['SpecialInstructions'] !== null) {
                $object->setSpecialInstructions($data['SpecialInstructions']);
                unset($data['SpecialInstructions']);
            }
            elseif (\array_key_exists('SpecialInstructions', $data) && $data['SpecialInstructions'] === null) {
                $object->setSpecialInstructions(null);
            }
            if (\array_key_exists('ShipmentChargeType', $data) && $data['ShipmentChargeType'] !== null) {
                $object->setShipmentChargeType($data['ShipmentChargeType']);
                unset($data['ShipmentChargeType']);
            }
            elseif (\array_key_exists('ShipmentChargeType', $data) && $data['ShipmentChargeType'] === null) {
                $object->setShipmentChargeType(null);
            }
            if (\array_key_exists('BillToAccount', $data) && $data['BillToAccount'] !== null) {
                $object->setBillToAccount($this->denormalizer->denormalize($data['BillToAccount'], 'ShipStream\\Ups\\Api\\Model\\ManifestBillToAccount', 'json', $context));
                unset($data['BillToAccount']);
            }
            elseif (\array_key_exists('BillToAccount', $data) && $data['BillToAccount'] === null) {
                $object->setBillToAccount(null);
            }
            if (\array_key_exists('ConsigneeBillIndicator', $data) && $data['ConsigneeBillIndicator'] !== null) {
                $object->setConsigneeBillIndicator($data['ConsigneeBillIndicator']);
                unset($data['ConsigneeBillIndicator']);
            }
            elseif (\array_key_exists('ConsigneeBillIndicator', $data) && $data['ConsigneeBillIndicator'] === null) {
                $object->setConsigneeBillIndicator(null);
            }
            if (\array_key_exists('CollectBillIndicator', $data) && $data['CollectBillIndicator'] !== null) {
                $object->setCollectBillIndicator($data['CollectBillIndicator']);
                unset($data['CollectBillIndicator']);
            }
            elseif (\array_key_exists('CollectBillIndicator', $data) && $data['CollectBillIndicator'] === null) {
                $object->setCollectBillIndicator(null);
            }
            if (\array_key_exists('LocationAssured', $data) && $data['LocationAssured'] !== null) {
                $object->setLocationAssured($data['LocationAssured']);
                unset($data['LocationAssured']);
            }
            elseif (\array_key_exists('LocationAssured', $data) && $data['LocationAssured'] === null) {
                $object->setLocationAssured(null);
            }
            if (\array_key_exists('ImportControl', $data) && $data['ImportControl'] !== null) {
                $object->setImportControl($data['ImportControl']);
                unset($data['ImportControl']);
            }
            elseif (\array_key_exists('ImportControl', $data) && $data['ImportControl'] === null) {
                $object->setImportControl(null);
            }
            if (\array_key_exists('LabelDeliveryMethod', $data) && $data['LabelDeliveryMethod'] !== null) {
                $object->setLabelDeliveryMethod($data['LabelDeliveryMethod']);
                unset($data['LabelDeliveryMethod']);
            }
            elseif (\array_key_exists('LabelDeliveryMethod', $data) && $data['LabelDeliveryMethod'] === null) {
                $object->setLabelDeliveryMethod(null);
            }
            if (\array_key_exists('CommercialInvoiceRemoval', $data) && $data['CommercialInvoiceRemoval'] !== null) {
                $object->setCommercialInvoiceRemoval($data['CommercialInvoiceRemoval']);
                unset($data['CommercialInvoiceRemoval']);
            }
            elseif (\array_key_exists('CommercialInvoiceRemoval', $data) && $data['CommercialInvoiceRemoval'] === null) {
                $object->setCommercialInvoiceRemoval(null);
            }
            if (\array_key_exists('PostalServiceTrackingID', $data) && $data['PostalServiceTrackingID'] !== null) {
                $object->setPostalServiceTrackingID($data['PostalServiceTrackingID']);
                unset($data['PostalServiceTrackingID']);
            }
            elseif (\array_key_exists('PostalServiceTrackingID', $data) && $data['PostalServiceTrackingID'] === null) {
                $object->setPostalServiceTrackingID(null);
            }
            if (\array_key_exists('ReturnsFlexibleAccess', $data) && $data['ReturnsFlexibleAccess'] !== null) {
                $object->setReturnsFlexibleAccess($data['ReturnsFlexibleAccess']);
                unset($data['ReturnsFlexibleAccess']);
            }
            elseif (\array_key_exists('ReturnsFlexibleAccess', $data) && $data['ReturnsFlexibleAccess'] === null) {
                $object->setReturnsFlexibleAccess(null);
            }
            if (\array_key_exists('UPScarbonneutral', $data) && $data['UPScarbonneutral'] !== null) {
                $object->setUPScarbonneutral($data['UPScarbonneutral']);
                unset($data['UPScarbonneutral']);
            }
            elseif (\array_key_exists('UPScarbonneutral', $data) && $data['UPScarbonneutral'] === null) {
                $object->setUPScarbonneutral(null);
            }
            if (\array_key_exists('Product', $data) && $data['Product'] !== null) {
                $object->setProduct($data['Product']);
                unset($data['Product']);
            }
            elseif (\array_key_exists('Product', $data) && $data['Product'] === null) {
                $object->setProduct(null);
            }
            if (\array_key_exists('UPSReturnsExchange', $data) && $data['UPSReturnsExchange'] !== null) {
                $object->setUPSReturnsExchange($data['UPSReturnsExchange']);
                unset($data['UPSReturnsExchange']);
            }
            elseif (\array_key_exists('UPSReturnsExchange', $data) && $data['UPSReturnsExchange'] === null) {
                $object->setUPSReturnsExchange(null);
            }
            if (\array_key_exists('LiftGateOnDelivery', $data) && $data['LiftGateOnDelivery'] !== null) {
                $object->setLiftGateOnDelivery($data['LiftGateOnDelivery']);
                unset($data['LiftGateOnDelivery']);
            }
            elseif (\array_key_exists('LiftGateOnDelivery', $data) && $data['LiftGateOnDelivery'] === null) {
                $object->setLiftGateOnDelivery(null);
            }
            if (\array_key_exists('LiftGateOnPickUp', $data) && $data['LiftGateOnPickUp'] !== null) {
                $object->setLiftGateOnPickUp($data['LiftGateOnPickUp']);
                unset($data['LiftGateOnPickUp']);
            }
            elseif (\array_key_exists('LiftGateOnPickUp', $data) && $data['LiftGateOnPickUp'] === null) {
                $object->setLiftGateOnPickUp(null);
            }
            if (\array_key_exists('PickupPreference', $data) && $data['PickupPreference'] !== null) {
                $object->setPickupPreference($data['PickupPreference']);
                unset($data['PickupPreference']);
            }
            elseif (\array_key_exists('PickupPreference', $data) && $data['PickupPreference'] === null) {
                $object->setPickupPreference(null);
            }
            if (\array_key_exists('DeliveryPreference', $data) && $data['DeliveryPreference'] !== null) {
                $object->setDeliveryPreference($data['DeliveryPreference']);
                unset($data['DeliveryPreference']);
            }
            elseif (\array_key_exists('DeliveryPreference', $data) && $data['DeliveryPreference'] === null) {
                $object->setDeliveryPreference(null);
            }
            if (\array_key_exists('HoldForPickupAtUPSAccessPoint', $data) && $data['HoldForPickupAtUPSAccessPoint'] !== null) {
                $object->setHoldForPickupAtUPSAccessPoint($data['HoldForPickupAtUPSAccessPoint']);
                unset($data['HoldForPickupAtUPSAccessPoint']);
            }
            elseif (\array_key_exists('HoldForPickupAtUPSAccessPoint', $data) && $data['HoldForPickupAtUPSAccessPoint'] === null) {
                $object->setHoldForPickupAtUPSAccessPoint(null);
            }
            if (\array_key_exists('UAPAddress', $data) && $data['UAPAddress'] !== null) {
                $object->setUAPAddress($this->denormalizer->denormalize($data['UAPAddress'], 'ShipStream\\Ups\\Api\\Model\\ManifestUAPAddress', 'json', $context));
                unset($data['UAPAddress']);
            }
            elseif (\array_key_exists('UAPAddress', $data) && $data['UAPAddress'] === null) {
                $object->setUAPAddress(null);
            }
            if (\array_key_exists('DeliverToAddresseeOnlyIndicator', $data) && $data['DeliverToAddresseeOnlyIndicator'] !== null) {
                $object->setDeliverToAddresseeOnlyIndicator($data['DeliverToAddresseeOnlyIndicator']);
                unset($data['DeliverToAddresseeOnlyIndicator']);
            }
            elseif (\array_key_exists('DeliverToAddresseeOnlyIndicator', $data) && $data['DeliverToAddresseeOnlyIndicator'] === null) {
                $object->setDeliverToAddresseeOnlyIndicator(null);
            }
            if (\array_key_exists('UPSAccessPointCODIndicator', $data) && $data['UPSAccessPointCODIndicator'] !== null) {
                $object->setUPSAccessPointCODIndicator($data['UPSAccessPointCODIndicator']);
                unset($data['UPSAccessPointCODIndicator']);
            }
            elseif (\array_key_exists('UPSAccessPointCODIndicator', $data) && $data['UPSAccessPointCODIndicator'] === null) {
                $object->setUPSAccessPointCODIndicator(null);
            }
            if (\array_key_exists('ClinicalTrialIndicator', $data) && $data['ClinicalTrialIndicator'] !== null) {
                $object->setClinicalTrialIndicator($data['ClinicalTrialIndicator']);
                unset($data['ClinicalTrialIndicator']);
            }
            elseif (\array_key_exists('ClinicalTrialIndicator', $data) && $data['ClinicalTrialIndicator'] === null) {
                $object->setClinicalTrialIndicator(null);
            }
            if (\array_key_exists('ClinicalTrialIndicationNumber', $data) && $data['ClinicalTrialIndicationNumber'] !== null) {
                $object->setClinicalTrialIndicationNumber($data['ClinicalTrialIndicationNumber']);
                unset($data['ClinicalTrialIndicationNumber']);
            }
            elseif (\array_key_exists('ClinicalTrialIndicationNumber', $data) && $data['ClinicalTrialIndicationNumber'] === null) {
                $object->setClinicalTrialIndicationNumber(null);
            }
            if (\array_key_exists('CategoryAHazardousIndicator', $data) && $data['CategoryAHazardousIndicator'] !== null) {
                $object->setCategoryAHazardousIndicator($data['CategoryAHazardousIndicator']);
                unset($data['CategoryAHazardousIndicator']);
            }
            elseif (\array_key_exists('CategoryAHazardousIndicator', $data) && $data['CategoryAHazardousIndicator'] === null) {
                $object->setCategoryAHazardousIndicator(null);
            }
            if (\array_key_exists('DirectDeliveryIndicator', $data) && $data['DirectDeliveryIndicator'] !== null) {
                $object->setDirectDeliveryIndicator($data['DirectDeliveryIndicator']);
                unset($data['DirectDeliveryIndicator']);
            }
            elseif (\array_key_exists('DirectDeliveryIndicator', $data) && $data['DirectDeliveryIndicator'] === null) {
                $object->setDirectDeliveryIndicator(null);
            }
            if (\array_key_exists('PackageReleaseCodeIndicator', $data) && $data['PackageReleaseCodeIndicator'] !== null) {
                $object->setPackageReleaseCodeIndicator($data['PackageReleaseCodeIndicator']);
                unset($data['PackageReleaseCodeIndicator']);
            }
            elseif (\array_key_exists('PackageReleaseCodeIndicator', $data) && $data['PackageReleaseCodeIndicator'] === null) {
                $object->setPackageReleaseCodeIndicator(null);
            }
            if (\array_key_exists('ProactiveResponseIndicator', $data) && $data['ProactiveResponseIndicator'] !== null) {
                $object->setProactiveResponseIndicator($data['ProactiveResponseIndicator']);
                unset($data['ProactiveResponseIndicator']);
            }
            elseif (\array_key_exists('ProactiveResponseIndicator', $data) && $data['ProactiveResponseIndicator'] === null) {
                $object->setProactiveResponseIndicator(null);
            }
            if (\array_key_exists('WhiteGloveDeliveryIndicator', $data) && $data['WhiteGloveDeliveryIndicator'] !== null) {
                $object->setWhiteGloveDeliveryIndicator($data['WhiteGloveDeliveryIndicator']);
                unset($data['WhiteGloveDeliveryIndicator']);
            }
            elseif (\array_key_exists('WhiteGloveDeliveryIndicator', $data) && $data['WhiteGloveDeliveryIndicator'] === null) {
                $object->setWhiteGloveDeliveryIndicator(null);
            }
            if (\array_key_exists('RoomOfChoiceIndicator', $data) && $data['RoomOfChoiceIndicator'] !== null) {
                $object->setRoomOfChoiceIndicator($data['RoomOfChoiceIndicator']);
                unset($data['RoomOfChoiceIndicator']);
            }
            elseif (\array_key_exists('RoomOfChoiceIndicator', $data) && $data['RoomOfChoiceIndicator'] === null) {
                $object->setRoomOfChoiceIndicator(null);
            }
            if (\array_key_exists('InstallationDeliveryIndicator', $data) && $data['InstallationDeliveryIndicator'] !== null) {
                $object->setInstallationDeliveryIndicator($data['InstallationDeliveryIndicator']);
                unset($data['InstallationDeliveryIndicator']);
            }
            elseif (\array_key_exists('InstallationDeliveryIndicator', $data) && $data['InstallationDeliveryIndicator'] === null) {
                $object->setInstallationDeliveryIndicator(null);
            }
            if (\array_key_exists('ItemDisposalIndicator', $data) && $data['ItemDisposalIndicator'] !== null) {
                $object->setItemDisposalIndicator($data['ItemDisposalIndicator']);
                unset($data['ItemDisposalIndicator']);
            }
            elseif (\array_key_exists('ItemDisposalIndicator', $data) && $data['ItemDisposalIndicator'] === null) {
                $object->setItemDisposalIndicator(null);
            }
            if (\array_key_exists('LeadShipmentTrackingNumber', $data) && $data['LeadShipmentTrackingNumber'] !== null) {
                $object->setLeadShipmentTrackingNumber($data['LeadShipmentTrackingNumber']);
                unset($data['LeadShipmentTrackingNumber']);
            }
            elseif (\array_key_exists('LeadShipmentTrackingNumber', $data) && $data['LeadShipmentTrackingNumber'] === null) {
                $object->setLeadShipmentTrackingNumber(null);
            }
            if (\array_key_exists('SaturdayNonPremiumCommercialDeliveryIndicator', $data) && $data['SaturdayNonPremiumCommercialDeliveryIndicator'] !== null) {
                $object->setSaturdayNonPremiumCommercialDeliveryIndicator($data['SaturdayNonPremiumCommercialDeliveryIndicator']);
                unset($data['SaturdayNonPremiumCommercialDeliveryIndicator']);
            }
            elseif (\array_key_exists('SaturdayNonPremiumCommercialDeliveryIndicator', $data) && $data['SaturdayNonPremiumCommercialDeliveryIndicator'] === null) {
                $object->setSaturdayNonPremiumCommercialDeliveryIndicator(null);
            }
            if (\array_key_exists('SundayNonPremiumCommercialDeliveryIndicator', $data) && $data['SundayNonPremiumCommercialDeliveryIndicator'] !== null) {
                $object->setSundayNonPremiumCommercialDeliveryIndicator($data['SundayNonPremiumCommercialDeliveryIndicator']);
                unset($data['SundayNonPremiumCommercialDeliveryIndicator']);
            }
            elseif (\array_key_exists('SundayNonPremiumCommercialDeliveryIndicator', $data) && $data['SundayNonPremiumCommercialDeliveryIndicator'] === null) {
                $object->setSundayNonPremiumCommercialDeliveryIndicator(null);
            }
            if (\array_key_exists('UPSPremierAccessorialIndicator', $data) && $data['UPSPremierAccessorialIndicator'] !== null) {
                $object->setUPSPremierAccessorialIndicator($data['UPSPremierAccessorialIndicator']);
                unset($data['UPSPremierAccessorialIndicator']);
            }
            elseif (\array_key_exists('UPSPremierAccessorialIndicator', $data) && $data['UPSPremierAccessorialIndicator'] === null) {
                $object->setUPSPremierAccessorialIndicator(null);
            }
            if (\array_key_exists('UPSPremierCategoryCode', $data) && $data['UPSPremierCategoryCode'] !== null) {
                $object->setUPSPremierCategoryCode($data['UPSPremierCategoryCode']);
                unset($data['UPSPremierCategoryCode']);
            }
            elseif (\array_key_exists('UPSPremierCategoryCode', $data) && $data['UPSPremierCategoryCode'] === null) {
                $object->setUPSPremierCategoryCode(null);
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
            if (\array_key_exists('Shipper', $data) && $data['Shipper'] !== null) {
                $object->setShipper($this->denormalizer->denormalize($data['Shipper'], 'ShipStream\\Ups\\Api\\Model\\ManifestShipper', 'json', $context));
                unset($data['Shipper']);
            }
            elseif (\array_key_exists('Shipper', $data) && $data['Shipper'] === null) {
                $object->setShipper(null);
            }
            if (\array_key_exists('ShipTo', $data) && $data['ShipTo'] !== null) {
                $object->setShipTo($this->denormalizer->denormalize($data['ShipTo'], 'ShipStream\\Ups\\Api\\Model\\ManifestShipTo', 'json', $context));
                unset($data['ShipTo']);
            }
            elseif (\array_key_exists('ShipTo', $data) && $data['ShipTo'] === null) {
                $object->setShipTo(null);
            }
            if (\array_key_exists('ReferenceNumber', $data) && $data['ReferenceNumber'] !== null) {
                $values = [];
                foreach ($data['ReferenceNumber'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'ShipStream\\Ups\\Api\\Model\\ManifestReferenceNumber', 'json', $context);
                }
                $object->setReferenceNumber($values);
                unset($data['ReferenceNumber']);
            }
            elseif (\array_key_exists('ReferenceNumber', $data) && $data['ReferenceNumber'] === null) {
                $object->setReferenceNumber(null);
            }
            if (\array_key_exists('Service', $data) && $data['Service'] !== null) {
                $object->setService($this->denormalizer->denormalize($data['Service'], 'ShipStream\\Ups\\Api\\Model\\ManifestService', 'json', $context));
                unset($data['Service']);
            }
            elseif (\array_key_exists('Service', $data) && $data['Service'] === null) {
                $object->setService(null);
            }
            if (\array_key_exists('PickupDate', $data) && $data['PickupDate'] !== null) {
                $object->setPickupDate($data['PickupDate']);
                unset($data['PickupDate']);
            }
            elseif (\array_key_exists('PickupDate', $data) && $data['PickupDate'] === null) {
                $object->setPickupDate(null);
            }
            if (\array_key_exists('ScheduledDeliveryDate', $data) && $data['ScheduledDeliveryDate'] !== null) {
                $object->setScheduledDeliveryDate($data['ScheduledDeliveryDate']);
                unset($data['ScheduledDeliveryDate']);
            }
            elseif (\array_key_exists('ScheduledDeliveryDate', $data) && $data['ScheduledDeliveryDate'] === null) {
                $object->setScheduledDeliveryDate(null);
            }
            if (\array_key_exists('ScheduledDeliveryTime', $data) && $data['ScheduledDeliveryTime'] !== null) {
                $object->setScheduledDeliveryTime($data['ScheduledDeliveryTime']);
                unset($data['ScheduledDeliveryTime']);
            }
            elseif (\array_key_exists('ScheduledDeliveryTime', $data) && $data['ScheduledDeliveryTime'] === null) {
                $object->setScheduledDeliveryTime(null);
            }
            if (\array_key_exists('DocumentsOnly', $data) && $data['DocumentsOnly'] !== null) {
                $object->setDocumentsOnly($data['DocumentsOnly']);
                unset($data['DocumentsOnly']);
            }
            elseif (\array_key_exists('DocumentsOnly', $data) && $data['DocumentsOnly'] === null) {
                $object->setDocumentsOnly(null);
            }
            if (\array_key_exists('Package', $data) && $data['Package'] !== null) {
                $values_1 = [];
                foreach ($data['Package'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'ShipStream\\Ups\\Api\\Model\\ManifestPackage', 'json', $context);
                }
                $object->setPackage($values_1);
                unset($data['Package']);
            }
            elseif (\array_key_exists('Package', $data) && $data['Package'] === null) {
                $object->setPackage(null);
            }
            if (\array_key_exists('ShipmentServiceOptions', $data) && $data['ShipmentServiceOptions'] !== null) {
                $object->setShipmentServiceOptions($this->denormalizer->denormalize($data['ShipmentServiceOptions'], 'ShipStream\\Ups\\Api\\Model\\ManifestShipmentServiceOptions', 'json', $context));
                unset($data['ShipmentServiceOptions']);
            }
            elseif (\array_key_exists('ShipmentServiceOptions', $data) && $data['ShipmentServiceOptions'] === null) {
                $object->setShipmentServiceOptions(null);
            }
            if (\array_key_exists('ManufactureCountry', $data) && $data['ManufactureCountry'] !== null) {
                $object->setManufactureCountry($data['ManufactureCountry']);
                unset($data['ManufactureCountry']);
            }
            elseif (\array_key_exists('ManufactureCountry', $data) && $data['ManufactureCountry'] === null) {
                $object->setManufactureCountry(null);
            }
            if (\array_key_exists('HarmonizedCode', $data) && $data['HarmonizedCode'] !== null) {
                $object->setHarmonizedCode($data['HarmonizedCode']);
                unset($data['HarmonizedCode']);
            }
            elseif (\array_key_exists('HarmonizedCode', $data) && $data['HarmonizedCode'] === null) {
                $object->setHarmonizedCode(null);
            }
            if (\array_key_exists('CustomsValue', $data) && $data['CustomsValue'] !== null) {
                $object->setCustomsValue($this->denormalizer->denormalize($data['CustomsValue'], 'ShipStream\\Ups\\Api\\Model\\ManifestCustomsValue', 'json', $context));
                unset($data['CustomsValue']);
            }
            elseif (\array_key_exists('CustomsValue', $data) && $data['CustomsValue'] === null) {
                $object->setCustomsValue(null);
            }
            if (\array_key_exists('SpecialInstructions', $data) && $data['SpecialInstructions'] !== null) {
                $object->setSpecialInstructions($data['SpecialInstructions']);
                unset($data['SpecialInstructions']);
            }
            elseif (\array_key_exists('SpecialInstructions', $data) && $data['SpecialInstructions'] === null) {
                $object->setSpecialInstructions(null);
            }
            if (\array_key_exists('ShipmentChargeType', $data) && $data['ShipmentChargeType'] !== null) {
                $object->setShipmentChargeType($data['ShipmentChargeType']);
                unset($data['ShipmentChargeType']);
            }
            elseif (\array_key_exists('ShipmentChargeType', $data) && $data['ShipmentChargeType'] === null) {
                $object->setShipmentChargeType(null);
            }
            if (\array_key_exists('BillToAccount', $data) && $data['BillToAccount'] !== null) {
                $object->setBillToAccount($this->denormalizer->denormalize($data['BillToAccount'], 'ShipStream\\Ups\\Api\\Model\\ManifestBillToAccount', 'json', $context));
                unset($data['BillToAccount']);
            }
            elseif (\array_key_exists('BillToAccount', $data) && $data['BillToAccount'] === null) {
                $object->setBillToAccount(null);
            }
            if (\array_key_exists('ConsigneeBillIndicator', $data) && $data['ConsigneeBillIndicator'] !== null) {
                $object->setConsigneeBillIndicator($data['ConsigneeBillIndicator']);
                unset($data['ConsigneeBillIndicator']);
            }
            elseif (\array_key_exists('ConsigneeBillIndicator', $data) && $data['ConsigneeBillIndicator'] === null) {
                $object->setConsigneeBillIndicator(null);
            }
            if (\array_key_exists('CollectBillIndicator', $data) && $data['CollectBillIndicator'] !== null) {
                $object->setCollectBillIndicator($data['CollectBillIndicator']);
                unset($data['CollectBillIndicator']);
            }
            elseif (\array_key_exists('CollectBillIndicator', $data) && $data['CollectBillIndicator'] === null) {
                $object->setCollectBillIndicator(null);
            }
            if (\array_key_exists('LocationAssured', $data) && $data['LocationAssured'] !== null) {
                $object->setLocationAssured($data['LocationAssured']);
                unset($data['LocationAssured']);
            }
            elseif (\array_key_exists('LocationAssured', $data) && $data['LocationAssured'] === null) {
                $object->setLocationAssured(null);
            }
            if (\array_key_exists('ImportControl', $data) && $data['ImportControl'] !== null) {
                $object->setImportControl($data['ImportControl']);
                unset($data['ImportControl']);
            }
            elseif (\array_key_exists('ImportControl', $data) && $data['ImportControl'] === null) {
                $object->setImportControl(null);
            }
            if (\array_key_exists('LabelDeliveryMethod', $data) && $data['LabelDeliveryMethod'] !== null) {
                $object->setLabelDeliveryMethod($data['LabelDeliveryMethod']);
                unset($data['LabelDeliveryMethod']);
            }
            elseif (\array_key_exists('LabelDeliveryMethod', $data) && $data['LabelDeliveryMethod'] === null) {
                $object->setLabelDeliveryMethod(null);
            }
            if (\array_key_exists('CommercialInvoiceRemoval', $data) && $data['CommercialInvoiceRemoval'] !== null) {
                $object->setCommercialInvoiceRemoval($data['CommercialInvoiceRemoval']);
                unset($data['CommercialInvoiceRemoval']);
            }
            elseif (\array_key_exists('CommercialInvoiceRemoval', $data) && $data['CommercialInvoiceRemoval'] === null) {
                $object->setCommercialInvoiceRemoval(null);
            }
            if (\array_key_exists('PostalServiceTrackingID', $data) && $data['PostalServiceTrackingID'] !== null) {
                $object->setPostalServiceTrackingID($data['PostalServiceTrackingID']);
                unset($data['PostalServiceTrackingID']);
            }
            elseif (\array_key_exists('PostalServiceTrackingID', $data) && $data['PostalServiceTrackingID'] === null) {
                $object->setPostalServiceTrackingID(null);
            }
            if (\array_key_exists('ReturnsFlexibleAccess', $data) && $data['ReturnsFlexibleAccess'] !== null) {
                $object->setReturnsFlexibleAccess($data['ReturnsFlexibleAccess']);
                unset($data['ReturnsFlexibleAccess']);
            }
            elseif (\array_key_exists('ReturnsFlexibleAccess', $data) && $data['ReturnsFlexibleAccess'] === null) {
                $object->setReturnsFlexibleAccess(null);
            }
            if (\array_key_exists('UPScarbonneutral', $data) && $data['UPScarbonneutral'] !== null) {
                $object->setUPScarbonneutral($data['UPScarbonneutral']);
                unset($data['UPScarbonneutral']);
            }
            elseif (\array_key_exists('UPScarbonneutral', $data) && $data['UPScarbonneutral'] === null) {
                $object->setUPScarbonneutral(null);
            }
            if (\array_key_exists('Product', $data) && $data['Product'] !== null) {
                $object->setProduct($data['Product']);
                unset($data['Product']);
            }
            elseif (\array_key_exists('Product', $data) && $data['Product'] === null) {
                $object->setProduct(null);
            }
            if (\array_key_exists('UPSReturnsExchange', $data) && $data['UPSReturnsExchange'] !== null) {
                $object->setUPSReturnsExchange($data['UPSReturnsExchange']);
                unset($data['UPSReturnsExchange']);
            }
            elseif (\array_key_exists('UPSReturnsExchange', $data) && $data['UPSReturnsExchange'] === null) {
                $object->setUPSReturnsExchange(null);
            }
            if (\array_key_exists('LiftGateOnDelivery', $data) && $data['LiftGateOnDelivery'] !== null) {
                $object->setLiftGateOnDelivery($data['LiftGateOnDelivery']);
                unset($data['LiftGateOnDelivery']);
            }
            elseif (\array_key_exists('LiftGateOnDelivery', $data) && $data['LiftGateOnDelivery'] === null) {
                $object->setLiftGateOnDelivery(null);
            }
            if (\array_key_exists('LiftGateOnPickUp', $data) && $data['LiftGateOnPickUp'] !== null) {
                $object->setLiftGateOnPickUp($data['LiftGateOnPickUp']);
                unset($data['LiftGateOnPickUp']);
            }
            elseif (\array_key_exists('LiftGateOnPickUp', $data) && $data['LiftGateOnPickUp'] === null) {
                $object->setLiftGateOnPickUp(null);
            }
            if (\array_key_exists('PickupPreference', $data) && $data['PickupPreference'] !== null) {
                $object->setPickupPreference($data['PickupPreference']);
                unset($data['PickupPreference']);
            }
            elseif (\array_key_exists('PickupPreference', $data) && $data['PickupPreference'] === null) {
                $object->setPickupPreference(null);
            }
            if (\array_key_exists('DeliveryPreference', $data) && $data['DeliveryPreference'] !== null) {
                $object->setDeliveryPreference($data['DeliveryPreference']);
                unset($data['DeliveryPreference']);
            }
            elseif (\array_key_exists('DeliveryPreference', $data) && $data['DeliveryPreference'] === null) {
                $object->setDeliveryPreference(null);
            }
            if (\array_key_exists('HoldForPickupAtUPSAccessPoint', $data) && $data['HoldForPickupAtUPSAccessPoint'] !== null) {
                $object->setHoldForPickupAtUPSAccessPoint($data['HoldForPickupAtUPSAccessPoint']);
                unset($data['HoldForPickupAtUPSAccessPoint']);
            }
            elseif (\array_key_exists('HoldForPickupAtUPSAccessPoint', $data) && $data['HoldForPickupAtUPSAccessPoint'] === null) {
                $object->setHoldForPickupAtUPSAccessPoint(null);
            }
            if (\array_key_exists('UAPAddress', $data) && $data['UAPAddress'] !== null) {
                $object->setUAPAddress($this->denormalizer->denormalize($data['UAPAddress'], 'ShipStream\\Ups\\Api\\Model\\ManifestUAPAddress', 'json', $context));
                unset($data['UAPAddress']);
            }
            elseif (\array_key_exists('UAPAddress', $data) && $data['UAPAddress'] === null) {
                $object->setUAPAddress(null);
            }
            if (\array_key_exists('DeliverToAddresseeOnlyIndicator', $data) && $data['DeliverToAddresseeOnlyIndicator'] !== null) {
                $object->setDeliverToAddresseeOnlyIndicator($data['DeliverToAddresseeOnlyIndicator']);
                unset($data['DeliverToAddresseeOnlyIndicator']);
            }
            elseif (\array_key_exists('DeliverToAddresseeOnlyIndicator', $data) && $data['DeliverToAddresseeOnlyIndicator'] === null) {
                $object->setDeliverToAddresseeOnlyIndicator(null);
            }
            if (\array_key_exists('UPSAccessPointCODIndicator', $data) && $data['UPSAccessPointCODIndicator'] !== null) {
                $object->setUPSAccessPointCODIndicator($data['UPSAccessPointCODIndicator']);
                unset($data['UPSAccessPointCODIndicator']);
            }
            elseif (\array_key_exists('UPSAccessPointCODIndicator', $data) && $data['UPSAccessPointCODIndicator'] === null) {
                $object->setUPSAccessPointCODIndicator(null);
            }
            if (\array_key_exists('ClinicalTrialIndicator', $data) && $data['ClinicalTrialIndicator'] !== null) {
                $object->setClinicalTrialIndicator($data['ClinicalTrialIndicator']);
                unset($data['ClinicalTrialIndicator']);
            }
            elseif (\array_key_exists('ClinicalTrialIndicator', $data) && $data['ClinicalTrialIndicator'] === null) {
                $object->setClinicalTrialIndicator(null);
            }
            if (\array_key_exists('ClinicalTrialIndicationNumber', $data) && $data['ClinicalTrialIndicationNumber'] !== null) {
                $object->setClinicalTrialIndicationNumber($data['ClinicalTrialIndicationNumber']);
                unset($data['ClinicalTrialIndicationNumber']);
            }
            elseif (\array_key_exists('ClinicalTrialIndicationNumber', $data) && $data['ClinicalTrialIndicationNumber'] === null) {
                $object->setClinicalTrialIndicationNumber(null);
            }
            if (\array_key_exists('CategoryAHazardousIndicator', $data) && $data['CategoryAHazardousIndicator'] !== null) {
                $object->setCategoryAHazardousIndicator($data['CategoryAHazardousIndicator']);
                unset($data['CategoryAHazardousIndicator']);
            }
            elseif (\array_key_exists('CategoryAHazardousIndicator', $data) && $data['CategoryAHazardousIndicator'] === null) {
                $object->setCategoryAHazardousIndicator(null);
            }
            if (\array_key_exists('DirectDeliveryIndicator', $data) && $data['DirectDeliveryIndicator'] !== null) {
                $object->setDirectDeliveryIndicator($data['DirectDeliveryIndicator']);
                unset($data['DirectDeliveryIndicator']);
            }
            elseif (\array_key_exists('DirectDeliveryIndicator', $data) && $data['DirectDeliveryIndicator'] === null) {
                $object->setDirectDeliveryIndicator(null);
            }
            if (\array_key_exists('PackageReleaseCodeIndicator', $data) && $data['PackageReleaseCodeIndicator'] !== null) {
                $object->setPackageReleaseCodeIndicator($data['PackageReleaseCodeIndicator']);
                unset($data['PackageReleaseCodeIndicator']);
            }
            elseif (\array_key_exists('PackageReleaseCodeIndicator', $data) && $data['PackageReleaseCodeIndicator'] === null) {
                $object->setPackageReleaseCodeIndicator(null);
            }
            if (\array_key_exists('ProactiveResponseIndicator', $data) && $data['ProactiveResponseIndicator'] !== null) {
                $object->setProactiveResponseIndicator($data['ProactiveResponseIndicator']);
                unset($data['ProactiveResponseIndicator']);
            }
            elseif (\array_key_exists('ProactiveResponseIndicator', $data) && $data['ProactiveResponseIndicator'] === null) {
                $object->setProactiveResponseIndicator(null);
            }
            if (\array_key_exists('WhiteGloveDeliveryIndicator', $data) && $data['WhiteGloveDeliveryIndicator'] !== null) {
                $object->setWhiteGloveDeliveryIndicator($data['WhiteGloveDeliveryIndicator']);
                unset($data['WhiteGloveDeliveryIndicator']);
            }
            elseif (\array_key_exists('WhiteGloveDeliveryIndicator', $data) && $data['WhiteGloveDeliveryIndicator'] === null) {
                $object->setWhiteGloveDeliveryIndicator(null);
            }
            if (\array_key_exists('RoomOfChoiceIndicator', $data) && $data['RoomOfChoiceIndicator'] !== null) {
                $object->setRoomOfChoiceIndicator($data['RoomOfChoiceIndicator']);
                unset($data['RoomOfChoiceIndicator']);
            }
            elseif (\array_key_exists('RoomOfChoiceIndicator', $data) && $data['RoomOfChoiceIndicator'] === null) {
                $object->setRoomOfChoiceIndicator(null);
            }
            if (\array_key_exists('InstallationDeliveryIndicator', $data) && $data['InstallationDeliveryIndicator'] !== null) {
                $object->setInstallationDeliveryIndicator($data['InstallationDeliveryIndicator']);
                unset($data['InstallationDeliveryIndicator']);
            }
            elseif (\array_key_exists('InstallationDeliveryIndicator', $data) && $data['InstallationDeliveryIndicator'] === null) {
                $object->setInstallationDeliveryIndicator(null);
            }
            if (\array_key_exists('ItemDisposalIndicator', $data) && $data['ItemDisposalIndicator'] !== null) {
                $object->setItemDisposalIndicator($data['ItemDisposalIndicator']);
                unset($data['ItemDisposalIndicator']);
            }
            elseif (\array_key_exists('ItemDisposalIndicator', $data) && $data['ItemDisposalIndicator'] === null) {
                $object->setItemDisposalIndicator(null);
            }
            if (\array_key_exists('LeadShipmentTrackingNumber', $data) && $data['LeadShipmentTrackingNumber'] !== null) {
                $object->setLeadShipmentTrackingNumber($data['LeadShipmentTrackingNumber']);
                unset($data['LeadShipmentTrackingNumber']);
            }
            elseif (\array_key_exists('LeadShipmentTrackingNumber', $data) && $data['LeadShipmentTrackingNumber'] === null) {
                $object->setLeadShipmentTrackingNumber(null);
            }
            if (\array_key_exists('SaturdayNonPremiumCommercialDeliveryIndicator', $data) && $data['SaturdayNonPremiumCommercialDeliveryIndicator'] !== null) {
                $object->setSaturdayNonPremiumCommercialDeliveryIndicator($data['SaturdayNonPremiumCommercialDeliveryIndicator']);
                unset($data['SaturdayNonPremiumCommercialDeliveryIndicator']);
            }
            elseif (\array_key_exists('SaturdayNonPremiumCommercialDeliveryIndicator', $data) && $data['SaturdayNonPremiumCommercialDeliveryIndicator'] === null) {
                $object->setSaturdayNonPremiumCommercialDeliveryIndicator(null);
            }
            if (\array_key_exists('SundayNonPremiumCommercialDeliveryIndicator', $data) && $data['SundayNonPremiumCommercialDeliveryIndicator'] !== null) {
                $object->setSundayNonPremiumCommercialDeliveryIndicator($data['SundayNonPremiumCommercialDeliveryIndicator']);
                unset($data['SundayNonPremiumCommercialDeliveryIndicator']);
            }
            elseif (\array_key_exists('SundayNonPremiumCommercialDeliveryIndicator', $data) && $data['SundayNonPremiumCommercialDeliveryIndicator'] === null) {
                $object->setSundayNonPremiumCommercialDeliveryIndicator(null);
            }
            if (\array_key_exists('UPSPremierAccessorialIndicator', $data) && $data['UPSPremierAccessorialIndicator'] !== null) {
                $object->setUPSPremierAccessorialIndicator($data['UPSPremierAccessorialIndicator']);
                unset($data['UPSPremierAccessorialIndicator']);
            }
            elseif (\array_key_exists('UPSPremierAccessorialIndicator', $data) && $data['UPSPremierAccessorialIndicator'] === null) {
                $object->setUPSPremierAccessorialIndicator(null);
            }
            if (\array_key_exists('UPSPremierCategoryCode', $data) && $data['UPSPremierCategoryCode'] !== null) {
                $object->setUPSPremierCategoryCode($data['UPSPremierCategoryCode']);
                unset($data['UPSPremierCategoryCode']);
            }
            elseif (\array_key_exists('UPSPremierCategoryCode', $data) && $data['UPSPremierCategoryCode'] === null) {
                $object->setUPSPremierCategoryCode(null);
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