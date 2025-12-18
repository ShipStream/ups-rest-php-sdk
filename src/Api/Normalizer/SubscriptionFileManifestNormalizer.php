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
class SubscriptionFileManifestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \ShipStream\Ups\Api\Model\SubscriptionFileManifest::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \ShipStream\Ups\Api\Model\SubscriptionFileManifest::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
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
            $object->setShipper($this->denormalizer->denormalize($data['Shipper'], \ShipStream\Ups\Api\Model\ManifestShipper::class, 'json', $context));
            unset($data['Shipper']);
        }
        if (\array_key_exists('ShipTo', $data)) {
            $object->setShipTo($this->denormalizer->denormalize($data['ShipTo'], \ShipStream\Ups\Api\Model\ManifestShipTo::class, 'json', $context));
            unset($data['ShipTo']);
        }
        if (\array_key_exists('ReferenceNumber', $data)) {
            $values = [];
            foreach ($data['ReferenceNumber'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \ShipStream\Ups\Api\Model\ManifestReferenceNumber::class, 'json', $context);
            }
            $object->setReferenceNumber($values);
            unset($data['ReferenceNumber']);
        }
        if (\array_key_exists('Service', $data)) {
            $object->setService($this->denormalizer->denormalize($data['Service'], \ShipStream\Ups\Api\Model\ManifestService::class, 'json', $context));
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
                $values_1[] = $this->denormalizer->denormalize($value_1, \ShipStream\Ups\Api\Model\ManifestPackage::class, 'json', $context);
            }
            $object->setPackage($values_1);
            unset($data['Package']);
        }
        if (\array_key_exists('ShipmentServiceOptions', $data)) {
            $object->setShipmentServiceOptions($this->denormalizer->denormalize($data['ShipmentServiceOptions'], \ShipStream\Ups\Api\Model\ManifestShipmentServiceOptions::class, 'json', $context));
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
            $object->setCustomsValue($this->denormalizer->denormalize($data['CustomsValue'], \ShipStream\Ups\Api\Model\ManifestCustomsValue::class, 'json', $context));
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
            $object->setBillToAccount($this->denormalizer->denormalize($data['BillToAccount'], \ShipStream\Ups\Api\Model\ManifestBillToAccount::class, 'json', $context));
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
            $object->setUAPAddress($this->denormalizer->denormalize($data['UAPAddress'], \ShipStream\Ups\Api\Model\ManifestUAPAddress::class, 'json', $context));
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
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['Shipper'] = $this->normalizer->normalize($data->getShipper(), 'json', $context);
        $dataArray['ShipTo'] = $this->normalizer->normalize($data->getShipTo(), 'json', $context);
        if ($data->isInitialized('referenceNumber') && null !== $data->getReferenceNumber()) {
            $values = [];
            foreach ($data->getReferenceNumber() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['ReferenceNumber'] = $values;
        }
        if ($data->isInitialized('service') && null !== $data->getService()) {
            $dataArray['Service'] = $this->normalizer->normalize($data->getService(), 'json', $context);
        }
        if ($data->isInitialized('pickupDate') && null !== $data->getPickupDate()) {
            $dataArray['PickupDate'] = $data->getPickupDate();
        }
        if ($data->isInitialized('scheduledDeliveryDate') && null !== $data->getScheduledDeliveryDate()) {
            $dataArray['ScheduledDeliveryDate'] = $data->getScheduledDeliveryDate();
        }
        if ($data->isInitialized('scheduledDeliveryTime') && null !== $data->getScheduledDeliveryTime()) {
            $dataArray['ScheduledDeliveryTime'] = $data->getScheduledDeliveryTime();
        }
        if ($data->isInitialized('documentsOnly') && null !== $data->getDocumentsOnly()) {
            $dataArray['DocumentsOnly'] = $data->getDocumentsOnly();
        }
        if ($data->isInitialized('package') && null !== $data->getPackage()) {
            $values_1 = [];
            foreach ($data->getPackage() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['Package'] = $values_1;
        }
        if ($data->isInitialized('shipmentServiceOptions') && null !== $data->getShipmentServiceOptions()) {
            $dataArray['ShipmentServiceOptions'] = $this->normalizer->normalize($data->getShipmentServiceOptions(), 'json', $context);
        }
        if ($data->isInitialized('manufactureCountry') && null !== $data->getManufactureCountry()) {
            $dataArray['ManufactureCountry'] = $data->getManufactureCountry();
        }
        if ($data->isInitialized('harmonizedCode') && null !== $data->getHarmonizedCode()) {
            $dataArray['HarmonizedCode'] = $data->getHarmonizedCode();
        }
        if ($data->isInitialized('customsValue') && null !== $data->getCustomsValue()) {
            $dataArray['CustomsValue'] = $this->normalizer->normalize($data->getCustomsValue(), 'json', $context);
        }
        if ($data->isInitialized('specialInstructions') && null !== $data->getSpecialInstructions()) {
            $dataArray['SpecialInstructions'] = $data->getSpecialInstructions();
        }
        if ($data->isInitialized('shipmentChargeType') && null !== $data->getShipmentChargeType()) {
            $dataArray['ShipmentChargeType'] = $data->getShipmentChargeType();
        }
        if ($data->isInitialized('billToAccount') && null !== $data->getBillToAccount()) {
            $dataArray['BillToAccount'] = $this->normalizer->normalize($data->getBillToAccount(), 'json', $context);
        }
        $dataArray['ConsigneeBillIndicator'] = $data->getConsigneeBillIndicator();
        $dataArray['CollectBillIndicator'] = $data->getCollectBillIndicator();
        if ($data->isInitialized('locationAssured') && null !== $data->getLocationAssured()) {
            $dataArray['LocationAssured'] = $data->getLocationAssured();
        }
        if ($data->isInitialized('importControl') && null !== $data->getImportControl()) {
            $dataArray['ImportControl'] = $data->getImportControl();
        }
        if ($data->isInitialized('labelDeliveryMethod') && null !== $data->getLabelDeliveryMethod()) {
            $dataArray['LabelDeliveryMethod'] = $data->getLabelDeliveryMethod();
        }
        if ($data->isInitialized('commercialInvoiceRemoval') && null !== $data->getCommercialInvoiceRemoval()) {
            $dataArray['CommercialInvoiceRemoval'] = $data->getCommercialInvoiceRemoval();
        }
        if ($data->isInitialized('postalServiceTrackingID') && null !== $data->getPostalServiceTrackingID()) {
            $dataArray['PostalServiceTrackingID'] = $data->getPostalServiceTrackingID();
        }
        if ($data->isInitialized('returnsFlexibleAccess') && null !== $data->getReturnsFlexibleAccess()) {
            $dataArray['ReturnsFlexibleAccess'] = $data->getReturnsFlexibleAccess();
        }
        if ($data->isInitialized('uPScarbonneutral') && null !== $data->getUPScarbonneutral()) {
            $dataArray['UPScarbonneutral'] = $data->getUPScarbonneutral();
        }
        if ($data->isInitialized('product') && null !== $data->getProduct()) {
            $dataArray['Product'] = $data->getProduct();
        }
        if ($data->isInitialized('uPSReturnsExchange') && null !== $data->getUPSReturnsExchange()) {
            $dataArray['UPSReturnsExchange'] = $data->getUPSReturnsExchange();
        }
        if ($data->isInitialized('liftGateOnDelivery') && null !== $data->getLiftGateOnDelivery()) {
            $dataArray['LiftGateOnDelivery'] = $data->getLiftGateOnDelivery();
        }
        if ($data->isInitialized('liftGateOnPickUp') && null !== $data->getLiftGateOnPickUp()) {
            $dataArray['LiftGateOnPickUp'] = $data->getLiftGateOnPickUp();
        }
        if ($data->isInitialized('pickupPreference') && null !== $data->getPickupPreference()) {
            $dataArray['PickupPreference'] = $data->getPickupPreference();
        }
        if ($data->isInitialized('deliveryPreference') && null !== $data->getDeliveryPreference()) {
            $dataArray['DeliveryPreference'] = $data->getDeliveryPreference();
        }
        if ($data->isInitialized('holdForPickupAtUPSAccessPoint') && null !== $data->getHoldForPickupAtUPSAccessPoint()) {
            $dataArray['HoldForPickupAtUPSAccessPoint'] = $data->getHoldForPickupAtUPSAccessPoint();
        }
        if ($data->isInitialized('uAPAddress') && null !== $data->getUAPAddress()) {
            $dataArray['UAPAddress'] = $this->normalizer->normalize($data->getUAPAddress(), 'json', $context);
        }
        if ($data->isInitialized('deliverToAddresseeOnlyIndicator') && null !== $data->getDeliverToAddresseeOnlyIndicator()) {
            $dataArray['DeliverToAddresseeOnlyIndicator'] = $data->getDeliverToAddresseeOnlyIndicator();
        }
        if ($data->isInitialized('uPSAccessPointCODIndicator') && null !== $data->getUPSAccessPointCODIndicator()) {
            $dataArray['UPSAccessPointCODIndicator'] = $data->getUPSAccessPointCODIndicator();
        }
        if ($data->isInitialized('clinicalTrialIndicator') && null !== $data->getClinicalTrialIndicator()) {
            $dataArray['ClinicalTrialIndicator'] = $data->getClinicalTrialIndicator();
        }
        if ($data->isInitialized('clinicalTrialIndicationNumber') && null !== $data->getClinicalTrialIndicationNumber()) {
            $dataArray['ClinicalTrialIndicationNumber'] = $data->getClinicalTrialIndicationNumber();
        }
        if ($data->isInitialized('categoryAHazardousIndicator') && null !== $data->getCategoryAHazardousIndicator()) {
            $dataArray['CategoryAHazardousIndicator'] = $data->getCategoryAHazardousIndicator();
        }
        if ($data->isInitialized('directDeliveryIndicator') && null !== $data->getDirectDeliveryIndicator()) {
            $dataArray['DirectDeliveryIndicator'] = $data->getDirectDeliveryIndicator();
        }
        if ($data->isInitialized('packageReleaseCodeIndicator') && null !== $data->getPackageReleaseCodeIndicator()) {
            $dataArray['PackageReleaseCodeIndicator'] = $data->getPackageReleaseCodeIndicator();
        }
        if ($data->isInitialized('proactiveResponseIndicator') && null !== $data->getProactiveResponseIndicator()) {
            $dataArray['ProactiveResponseIndicator'] = $data->getProactiveResponseIndicator();
        }
        if ($data->isInitialized('whiteGloveDeliveryIndicator') && null !== $data->getWhiteGloveDeliveryIndicator()) {
            $dataArray['WhiteGloveDeliveryIndicator'] = $data->getWhiteGloveDeliveryIndicator();
        }
        if ($data->isInitialized('roomOfChoiceIndicator') && null !== $data->getRoomOfChoiceIndicator()) {
            $dataArray['RoomOfChoiceIndicator'] = $data->getRoomOfChoiceIndicator();
        }
        if ($data->isInitialized('installationDeliveryIndicator') && null !== $data->getInstallationDeliveryIndicator()) {
            $dataArray['InstallationDeliveryIndicator'] = $data->getInstallationDeliveryIndicator();
        }
        if ($data->isInitialized('itemDisposalIndicator') && null !== $data->getItemDisposalIndicator()) {
            $dataArray['ItemDisposalIndicator'] = $data->getItemDisposalIndicator();
        }
        if ($data->isInitialized('leadShipmentTrackingNumber') && null !== $data->getLeadShipmentTrackingNumber()) {
            $dataArray['LeadShipmentTrackingNumber'] = $data->getLeadShipmentTrackingNumber();
        }
        if ($data->isInitialized('saturdayNonPremiumCommercialDeliveryIndicator') && null !== $data->getSaturdayNonPremiumCommercialDeliveryIndicator()) {
            $dataArray['SaturdayNonPremiumCommercialDeliveryIndicator'] = $data->getSaturdayNonPremiumCommercialDeliveryIndicator();
        }
        if ($data->isInitialized('sundayNonPremiumCommercialDeliveryIndicator') && null !== $data->getSundayNonPremiumCommercialDeliveryIndicator()) {
            $dataArray['SundayNonPremiumCommercialDeliveryIndicator'] = $data->getSundayNonPremiumCommercialDeliveryIndicator();
        }
        if ($data->isInitialized('uPSPremierAccessorialIndicator') && null !== $data->getUPSPremierAccessorialIndicator()) {
            $dataArray['UPSPremierAccessorialIndicator'] = $data->getUPSPremierAccessorialIndicator();
        }
        if ($data->isInitialized('uPSPremierCategoryCode') && null !== $data->getUPSPremierCategoryCode()) {
            $dataArray['UPSPremierCategoryCode'] = $data->getUPSPremierCategoryCode();
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
        return [\ShipStream\Ups\Api\Model\SubscriptionFileManifest::class => false];
    }
}