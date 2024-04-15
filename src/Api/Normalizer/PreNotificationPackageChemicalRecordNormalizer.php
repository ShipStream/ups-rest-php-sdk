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
    class PreNotificationPackageChemicalRecordNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\PreNotificationPackageChemicalRecord';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\PreNotificationPackageChemicalRecord';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \ShipStream\Ups\Api\Model\PreNotificationPackageChemicalRecord();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('ChemicalRecord_ReportableQuantity', $data) && $data['ChemicalRecord_ReportableQuantity'] !== null) {
                $object->setChemicalRecordReportableQuantity($data['ChemicalRecord_ReportableQuantity']);
                unset($data['ChemicalRecord_ReportableQuantity']);
            }
            elseif (\array_key_exists('ChemicalRecord_ReportableQuantity', $data) && $data['ChemicalRecord_ReportableQuantity'] === null) {
                $object->setChemicalRecordReportableQuantity(null);
            }
            if (\array_key_exists('ChemicalRecord_ClassDivisionNumber', $data) && $data['ChemicalRecord_ClassDivisionNumber'] !== null) {
                $object->setChemicalRecordClassDivisionNumber($data['ChemicalRecord_ClassDivisionNumber']);
                unset($data['ChemicalRecord_ClassDivisionNumber']);
            }
            elseif (\array_key_exists('ChemicalRecord_ClassDivisionNumber', $data) && $data['ChemicalRecord_ClassDivisionNumber'] === null) {
                $object->setChemicalRecordClassDivisionNumber(null);
            }
            if (\array_key_exists('ChemicalRecord_SubRiskClass', $data) && $data['ChemicalRecord_SubRiskClass'] !== null) {
                $object->setChemicalRecordSubRiskClass($data['ChemicalRecord_SubRiskClass']);
                unset($data['ChemicalRecord_SubRiskClass']);
            }
            elseif (\array_key_exists('ChemicalRecord_SubRiskClass', $data) && $data['ChemicalRecord_SubRiskClass'] === null) {
                $object->setChemicalRecordSubRiskClass(null);
            }
            if (\array_key_exists('ChemicalRecord_IDNumber', $data) && $data['ChemicalRecord_IDNumber'] !== null) {
                $object->setChemicalRecordIDNumber($data['ChemicalRecord_IDNumber']);
                unset($data['ChemicalRecord_IDNumber']);
            }
            elseif (\array_key_exists('ChemicalRecord_IDNumber', $data) && $data['ChemicalRecord_IDNumber'] === null) {
                $object->setChemicalRecordIDNumber(null);
            }
            if (\array_key_exists('ChemicalRecord_PackagingGroupType', $data) && $data['ChemicalRecord_PackagingGroupType'] !== null) {
                $object->setChemicalRecordPackagingGroupType($data['ChemicalRecord_PackagingGroupType']);
                unset($data['ChemicalRecord_PackagingGroupType']);
            }
            elseif (\array_key_exists('ChemicalRecord_PackagingGroupType', $data) && $data['ChemicalRecord_PackagingGroupType'] === null) {
                $object->setChemicalRecordPackagingGroupType(null);
            }
            if (\array_key_exists('ChemicalRecord_Quantity', $data) && $data['ChemicalRecord_Quantity'] !== null) {
                $object->setChemicalRecordQuantity($data['ChemicalRecord_Quantity']);
                unset($data['ChemicalRecord_Quantity']);
            }
            elseif (\array_key_exists('ChemicalRecord_Quantity', $data) && $data['ChemicalRecord_Quantity'] === null) {
                $object->setChemicalRecordQuantity(null);
            }
            if (\array_key_exists('ChemicalRecord_UOM', $data) && $data['ChemicalRecord_UOM'] !== null) {
                $object->setChemicalRecordUOM($data['ChemicalRecord_UOM']);
                unset($data['ChemicalRecord_UOM']);
            }
            elseif (\array_key_exists('ChemicalRecord_UOM', $data) && $data['ChemicalRecord_UOM'] === null) {
                $object->setChemicalRecordUOM(null);
            }
            if (\array_key_exists('ChemicalRecord_PackagingInstructionCode', $data) && $data['ChemicalRecord_PackagingInstructionCode'] !== null) {
                $object->setChemicalRecordPackagingInstructionCode($data['ChemicalRecord_PackagingInstructionCode']);
                unset($data['ChemicalRecord_PackagingInstructionCode']);
            }
            elseif (\array_key_exists('ChemicalRecord_PackagingInstructionCode', $data) && $data['ChemicalRecord_PackagingInstructionCode'] === null) {
                $object->setChemicalRecordPackagingInstructionCode(null);
            }
            if (\array_key_exists('ChemicalRecord_EmergencyPhone', $data) && $data['ChemicalRecord_EmergencyPhone'] !== null) {
                $object->setChemicalRecordEmergencyPhone($data['ChemicalRecord_EmergencyPhone']);
                unset($data['ChemicalRecord_EmergencyPhone']);
            }
            elseif (\array_key_exists('ChemicalRecord_EmergencyPhone', $data) && $data['ChemicalRecord_EmergencyPhone'] === null) {
                $object->setChemicalRecordEmergencyPhone(null);
            }
            if (\array_key_exists('ChemicalRecord_EmergencyContact', $data) && $data['ChemicalRecord_EmergencyContact'] !== null) {
                $object->setChemicalRecordEmergencyContact($data['ChemicalRecord_EmergencyContact']);
                unset($data['ChemicalRecord_EmergencyContact']);
            }
            elseif (\array_key_exists('ChemicalRecord_EmergencyContact', $data) && $data['ChemicalRecord_EmergencyContact'] === null) {
                $object->setChemicalRecordEmergencyContact(null);
            }
            if (\array_key_exists('ChemicalRecord_ProperShippingName', $data) && $data['ChemicalRecord_ProperShippingName'] !== null) {
                $object->setChemicalRecordProperShippingName($data['ChemicalRecord_ProperShippingName']);
                unset($data['ChemicalRecord_ProperShippingName']);
            }
            elseif (\array_key_exists('ChemicalRecord_ProperShippingName', $data) && $data['ChemicalRecord_ProperShippingName'] === null) {
                $object->setChemicalRecordProperShippingName(null);
            }
            if (\array_key_exists('ChemicalRecord_TechnicalName', $data) && $data['ChemicalRecord_TechnicalName'] !== null) {
                $object->setChemicalRecordTechnicalName($data['ChemicalRecord_TechnicalName']);
                unset($data['ChemicalRecord_TechnicalName']);
            }
            elseif (\array_key_exists('ChemicalRecord_TechnicalName', $data) && $data['ChemicalRecord_TechnicalName'] === null) {
                $object->setChemicalRecordTechnicalName(null);
            }
            if (\array_key_exists('ChemicalRecord_AdditionalDescription', $data) && $data['ChemicalRecord_AdditionalDescription'] !== null) {
                $object->setChemicalRecordAdditionalDescription($data['ChemicalRecord_AdditionalDescription']);
                unset($data['ChemicalRecord_AdditionalDescription']);
            }
            elseif (\array_key_exists('ChemicalRecord_AdditionalDescription', $data) && $data['ChemicalRecord_AdditionalDescription'] === null) {
                $object->setChemicalRecordAdditionalDescription(null);
            }
            if (\array_key_exists('ChemicalRecord_PackagingType', $data) && $data['ChemicalRecord_PackagingType'] !== null) {
                $object->setChemicalRecordPackagingType($data['ChemicalRecord_PackagingType']);
                unset($data['ChemicalRecord_PackagingType']);
            }
            elseif (\array_key_exists('ChemicalRecord_PackagingType', $data) && $data['ChemicalRecord_PackagingType'] === null) {
                $object->setChemicalRecordPackagingType(null);
            }
            if (\array_key_exists('ChemicalRecord_HazardLabelRequired', $data) && $data['ChemicalRecord_HazardLabelRequired'] !== null) {
                $object->setChemicalRecordHazardLabelRequired($data['ChemicalRecord_HazardLabelRequired']);
                unset($data['ChemicalRecord_HazardLabelRequired']);
            }
            elseif (\array_key_exists('ChemicalRecord_HazardLabelRequired', $data) && $data['ChemicalRecord_HazardLabelRequired'] === null) {
                $object->setChemicalRecordHazardLabelRequired(null);
            }
            if (\array_key_exists('ChemicalRecord_PackagingTypeQuantity', $data) && $data['ChemicalRecord_PackagingTypeQuantity'] !== null) {
                $object->setChemicalRecordPackagingTypeQuantity($data['ChemicalRecord_PackagingTypeQuantity']);
                unset($data['ChemicalRecord_PackagingTypeQuantity']);
            }
            elseif (\array_key_exists('ChemicalRecord_PackagingTypeQuantity', $data) && $data['ChemicalRecord_PackagingTypeQuantity'] === null) {
                $object->setChemicalRecordPackagingTypeQuantity(null);
            }
            if (\array_key_exists('ChemicalRecord_CommodityRegulatedLevelCode', $data) && $data['ChemicalRecord_CommodityRegulatedLevelCode'] !== null) {
                $object->setChemicalRecordCommodityRegulatedLevelCode($data['ChemicalRecord_CommodityRegulatedLevelCode']);
                unset($data['ChemicalRecord_CommodityRegulatedLevelCode']);
            }
            elseif (\array_key_exists('ChemicalRecord_CommodityRegulatedLevelCode', $data) && $data['ChemicalRecord_CommodityRegulatedLevelCode'] === null) {
                $object->setChemicalRecordCommodityRegulatedLevelCode(null);
            }
            if (\array_key_exists('ChemicalRecord_TransportCategory', $data) && $data['ChemicalRecord_TransportCategory'] !== null) {
                $object->setChemicalRecordTransportCategory($data['ChemicalRecord_TransportCategory']);
                unset($data['ChemicalRecord_TransportCategory']);
            }
            elseif (\array_key_exists('ChemicalRecord_TransportCategory', $data) && $data['ChemicalRecord_TransportCategory'] === null) {
                $object->setChemicalRecordTransportCategory(null);
            }
            if (\array_key_exists('ChemicalRecord_TunnelRestrictionCode', $data) && $data['ChemicalRecord_TunnelRestrictionCode'] !== null) {
                $object->setChemicalRecordTunnelRestrictionCode($data['ChemicalRecord_TunnelRestrictionCode']);
                unset($data['ChemicalRecord_TunnelRestrictionCode']);
            }
            elseif (\array_key_exists('ChemicalRecord_TunnelRestrictionCode', $data) && $data['ChemicalRecord_TunnelRestrictionCode'] === null) {
                $object->setChemicalRecordTunnelRestrictionCode(null);
            }
            if (\array_key_exists('ChemicalRecord_QValue', $data) && $data['ChemicalRecord_QValue'] !== null) {
                $object->setChemicalRecordQValue($data['ChemicalRecord_QValue']);
                unset($data['ChemicalRecord_QValue']);
            }
            elseif (\array_key_exists('ChemicalRecord_QValue', $data) && $data['ChemicalRecord_QValue'] === null) {
                $object->setChemicalRecordQValue(null);
            }
            if (\array_key_exists('ChemicalRecord_OverPackedIndicator', $data) && $data['ChemicalRecord_OverPackedIndicator'] !== null) {
                $object->setChemicalRecordOverPackedIndicator($data['ChemicalRecord_OverPackedIndicator']);
                unset($data['ChemicalRecord_OverPackedIndicator']);
            }
            elseif (\array_key_exists('ChemicalRecord_OverPackedIndicator', $data) && $data['ChemicalRecord_OverPackedIndicator'] === null) {
                $object->setChemicalRecordOverPackedIndicator(null);
            }
            if (\array_key_exists('ChemicalRecord_AllPackedInOneIndicator', $data) && $data['ChemicalRecord_AllPackedInOneIndicator'] !== null) {
                $object->setChemicalRecordAllPackedInOneIndicator($data['ChemicalRecord_AllPackedInOneIndicator']);
                unset($data['ChemicalRecord_AllPackedInOneIndicator']);
            }
            elseif (\array_key_exists('ChemicalRecord_AllPackedInOneIndicator', $data) && $data['ChemicalRecord_AllPackedInOneIndicator'] === null) {
                $object->setChemicalRecordAllPackedInOneIndicator(null);
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
            if ($object->isInitialized('chemicalRecordReportableQuantity') && null !== $object->getChemicalRecordReportableQuantity()) {
                $data['ChemicalRecord_ReportableQuantity'] = $object->getChemicalRecordReportableQuantity();
            }
            if ($object->isInitialized('chemicalRecordClassDivisionNumber') && null !== $object->getChemicalRecordClassDivisionNumber()) {
                $data['ChemicalRecord_ClassDivisionNumber'] = $object->getChemicalRecordClassDivisionNumber();
            }
            if ($object->isInitialized('chemicalRecordSubRiskClass') && null !== $object->getChemicalRecordSubRiskClass()) {
                $data['ChemicalRecord_SubRiskClass'] = $object->getChemicalRecordSubRiskClass();
            }
            if ($object->isInitialized('chemicalRecordIDNumber') && null !== $object->getChemicalRecordIDNumber()) {
                $data['ChemicalRecord_IDNumber'] = $object->getChemicalRecordIDNumber();
            }
            if ($object->isInitialized('chemicalRecordPackagingGroupType') && null !== $object->getChemicalRecordPackagingGroupType()) {
                $data['ChemicalRecord_PackagingGroupType'] = $object->getChemicalRecordPackagingGroupType();
            }
            if ($object->isInitialized('chemicalRecordQuantity') && null !== $object->getChemicalRecordQuantity()) {
                $data['ChemicalRecord_Quantity'] = $object->getChemicalRecordQuantity();
            }
            if ($object->isInitialized('chemicalRecordUOM') && null !== $object->getChemicalRecordUOM()) {
                $data['ChemicalRecord_UOM'] = $object->getChemicalRecordUOM();
            }
            if ($object->isInitialized('chemicalRecordPackagingInstructionCode') && null !== $object->getChemicalRecordPackagingInstructionCode()) {
                $data['ChemicalRecord_PackagingInstructionCode'] = $object->getChemicalRecordPackagingInstructionCode();
            }
            if ($object->isInitialized('chemicalRecordEmergencyPhone') && null !== $object->getChemicalRecordEmergencyPhone()) {
                $data['ChemicalRecord_EmergencyPhone'] = $object->getChemicalRecordEmergencyPhone();
            }
            if ($object->isInitialized('chemicalRecordEmergencyContact') && null !== $object->getChemicalRecordEmergencyContact()) {
                $data['ChemicalRecord_EmergencyContact'] = $object->getChemicalRecordEmergencyContact();
            }
            if ($object->isInitialized('chemicalRecordProperShippingName') && null !== $object->getChemicalRecordProperShippingName()) {
                $data['ChemicalRecord_ProperShippingName'] = $object->getChemicalRecordProperShippingName();
            }
            if ($object->isInitialized('chemicalRecordTechnicalName') && null !== $object->getChemicalRecordTechnicalName()) {
                $data['ChemicalRecord_TechnicalName'] = $object->getChemicalRecordTechnicalName();
            }
            if ($object->isInitialized('chemicalRecordAdditionalDescription') && null !== $object->getChemicalRecordAdditionalDescription()) {
                $data['ChemicalRecord_AdditionalDescription'] = $object->getChemicalRecordAdditionalDescription();
            }
            if ($object->isInitialized('chemicalRecordPackagingType') && null !== $object->getChemicalRecordPackagingType()) {
                $data['ChemicalRecord_PackagingType'] = $object->getChemicalRecordPackagingType();
            }
            if ($object->isInitialized('chemicalRecordHazardLabelRequired') && null !== $object->getChemicalRecordHazardLabelRequired()) {
                $data['ChemicalRecord_HazardLabelRequired'] = $object->getChemicalRecordHazardLabelRequired();
            }
            if ($object->isInitialized('chemicalRecordPackagingTypeQuantity') && null !== $object->getChemicalRecordPackagingTypeQuantity()) {
                $data['ChemicalRecord_PackagingTypeQuantity'] = $object->getChemicalRecordPackagingTypeQuantity();
            }
            if ($object->isInitialized('chemicalRecordCommodityRegulatedLevelCode') && null !== $object->getChemicalRecordCommodityRegulatedLevelCode()) {
                $data['ChemicalRecord_CommodityRegulatedLevelCode'] = $object->getChemicalRecordCommodityRegulatedLevelCode();
            }
            if ($object->isInitialized('chemicalRecordTransportCategory') && null !== $object->getChemicalRecordTransportCategory()) {
                $data['ChemicalRecord_TransportCategory'] = $object->getChemicalRecordTransportCategory();
            }
            if ($object->isInitialized('chemicalRecordTunnelRestrictionCode') && null !== $object->getChemicalRecordTunnelRestrictionCode()) {
                $data['ChemicalRecord_TunnelRestrictionCode'] = $object->getChemicalRecordTunnelRestrictionCode();
            }
            if ($object->isInitialized('chemicalRecordQValue') && null !== $object->getChemicalRecordQValue()) {
                $data['ChemicalRecord_QValue'] = $object->getChemicalRecordQValue();
            }
            if ($object->isInitialized('chemicalRecordOverPackedIndicator') && null !== $object->getChemicalRecordOverPackedIndicator()) {
                $data['ChemicalRecord_OverPackedIndicator'] = $object->getChemicalRecordOverPackedIndicator();
            }
            if ($object->isInitialized('chemicalRecordAllPackedInOneIndicator') && null !== $object->getChemicalRecordAllPackedInOneIndicator()) {
                $data['ChemicalRecord_AllPackedInOneIndicator'] = $object->getChemicalRecordAllPackedInOneIndicator();
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
            return ['ShipStream\\Ups\\Api\\Model\\PreNotificationPackageChemicalRecord' => false];
        }
    }
} else {
    class PreNotificationPackageChemicalRecordNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\PreNotificationPackageChemicalRecord';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\PreNotificationPackageChemicalRecord';
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
            $object = new \ShipStream\Ups\Api\Model\PreNotificationPackageChemicalRecord();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('ChemicalRecord_ReportableQuantity', $data) && $data['ChemicalRecord_ReportableQuantity'] !== null) {
                $object->setChemicalRecordReportableQuantity($data['ChemicalRecord_ReportableQuantity']);
                unset($data['ChemicalRecord_ReportableQuantity']);
            }
            elseif (\array_key_exists('ChemicalRecord_ReportableQuantity', $data) && $data['ChemicalRecord_ReportableQuantity'] === null) {
                $object->setChemicalRecordReportableQuantity(null);
            }
            if (\array_key_exists('ChemicalRecord_ClassDivisionNumber', $data) && $data['ChemicalRecord_ClassDivisionNumber'] !== null) {
                $object->setChemicalRecordClassDivisionNumber($data['ChemicalRecord_ClassDivisionNumber']);
                unset($data['ChemicalRecord_ClassDivisionNumber']);
            }
            elseif (\array_key_exists('ChemicalRecord_ClassDivisionNumber', $data) && $data['ChemicalRecord_ClassDivisionNumber'] === null) {
                $object->setChemicalRecordClassDivisionNumber(null);
            }
            if (\array_key_exists('ChemicalRecord_SubRiskClass', $data) && $data['ChemicalRecord_SubRiskClass'] !== null) {
                $object->setChemicalRecordSubRiskClass($data['ChemicalRecord_SubRiskClass']);
                unset($data['ChemicalRecord_SubRiskClass']);
            }
            elseif (\array_key_exists('ChemicalRecord_SubRiskClass', $data) && $data['ChemicalRecord_SubRiskClass'] === null) {
                $object->setChemicalRecordSubRiskClass(null);
            }
            if (\array_key_exists('ChemicalRecord_IDNumber', $data) && $data['ChemicalRecord_IDNumber'] !== null) {
                $object->setChemicalRecordIDNumber($data['ChemicalRecord_IDNumber']);
                unset($data['ChemicalRecord_IDNumber']);
            }
            elseif (\array_key_exists('ChemicalRecord_IDNumber', $data) && $data['ChemicalRecord_IDNumber'] === null) {
                $object->setChemicalRecordIDNumber(null);
            }
            if (\array_key_exists('ChemicalRecord_PackagingGroupType', $data) && $data['ChemicalRecord_PackagingGroupType'] !== null) {
                $object->setChemicalRecordPackagingGroupType($data['ChemicalRecord_PackagingGroupType']);
                unset($data['ChemicalRecord_PackagingGroupType']);
            }
            elseif (\array_key_exists('ChemicalRecord_PackagingGroupType', $data) && $data['ChemicalRecord_PackagingGroupType'] === null) {
                $object->setChemicalRecordPackagingGroupType(null);
            }
            if (\array_key_exists('ChemicalRecord_Quantity', $data) && $data['ChemicalRecord_Quantity'] !== null) {
                $object->setChemicalRecordQuantity($data['ChemicalRecord_Quantity']);
                unset($data['ChemicalRecord_Quantity']);
            }
            elseif (\array_key_exists('ChemicalRecord_Quantity', $data) && $data['ChemicalRecord_Quantity'] === null) {
                $object->setChemicalRecordQuantity(null);
            }
            if (\array_key_exists('ChemicalRecord_UOM', $data) && $data['ChemicalRecord_UOM'] !== null) {
                $object->setChemicalRecordUOM($data['ChemicalRecord_UOM']);
                unset($data['ChemicalRecord_UOM']);
            }
            elseif (\array_key_exists('ChemicalRecord_UOM', $data) && $data['ChemicalRecord_UOM'] === null) {
                $object->setChemicalRecordUOM(null);
            }
            if (\array_key_exists('ChemicalRecord_PackagingInstructionCode', $data) && $data['ChemicalRecord_PackagingInstructionCode'] !== null) {
                $object->setChemicalRecordPackagingInstructionCode($data['ChemicalRecord_PackagingInstructionCode']);
                unset($data['ChemicalRecord_PackagingInstructionCode']);
            }
            elseif (\array_key_exists('ChemicalRecord_PackagingInstructionCode', $data) && $data['ChemicalRecord_PackagingInstructionCode'] === null) {
                $object->setChemicalRecordPackagingInstructionCode(null);
            }
            if (\array_key_exists('ChemicalRecord_EmergencyPhone', $data) && $data['ChemicalRecord_EmergencyPhone'] !== null) {
                $object->setChemicalRecordEmergencyPhone($data['ChemicalRecord_EmergencyPhone']);
                unset($data['ChemicalRecord_EmergencyPhone']);
            }
            elseif (\array_key_exists('ChemicalRecord_EmergencyPhone', $data) && $data['ChemicalRecord_EmergencyPhone'] === null) {
                $object->setChemicalRecordEmergencyPhone(null);
            }
            if (\array_key_exists('ChemicalRecord_EmergencyContact', $data) && $data['ChemicalRecord_EmergencyContact'] !== null) {
                $object->setChemicalRecordEmergencyContact($data['ChemicalRecord_EmergencyContact']);
                unset($data['ChemicalRecord_EmergencyContact']);
            }
            elseif (\array_key_exists('ChemicalRecord_EmergencyContact', $data) && $data['ChemicalRecord_EmergencyContact'] === null) {
                $object->setChemicalRecordEmergencyContact(null);
            }
            if (\array_key_exists('ChemicalRecord_ProperShippingName', $data) && $data['ChemicalRecord_ProperShippingName'] !== null) {
                $object->setChemicalRecordProperShippingName($data['ChemicalRecord_ProperShippingName']);
                unset($data['ChemicalRecord_ProperShippingName']);
            }
            elseif (\array_key_exists('ChemicalRecord_ProperShippingName', $data) && $data['ChemicalRecord_ProperShippingName'] === null) {
                $object->setChemicalRecordProperShippingName(null);
            }
            if (\array_key_exists('ChemicalRecord_TechnicalName', $data) && $data['ChemicalRecord_TechnicalName'] !== null) {
                $object->setChemicalRecordTechnicalName($data['ChemicalRecord_TechnicalName']);
                unset($data['ChemicalRecord_TechnicalName']);
            }
            elseif (\array_key_exists('ChemicalRecord_TechnicalName', $data) && $data['ChemicalRecord_TechnicalName'] === null) {
                $object->setChemicalRecordTechnicalName(null);
            }
            if (\array_key_exists('ChemicalRecord_AdditionalDescription', $data) && $data['ChemicalRecord_AdditionalDescription'] !== null) {
                $object->setChemicalRecordAdditionalDescription($data['ChemicalRecord_AdditionalDescription']);
                unset($data['ChemicalRecord_AdditionalDescription']);
            }
            elseif (\array_key_exists('ChemicalRecord_AdditionalDescription', $data) && $data['ChemicalRecord_AdditionalDescription'] === null) {
                $object->setChemicalRecordAdditionalDescription(null);
            }
            if (\array_key_exists('ChemicalRecord_PackagingType', $data) && $data['ChemicalRecord_PackagingType'] !== null) {
                $object->setChemicalRecordPackagingType($data['ChemicalRecord_PackagingType']);
                unset($data['ChemicalRecord_PackagingType']);
            }
            elseif (\array_key_exists('ChemicalRecord_PackagingType', $data) && $data['ChemicalRecord_PackagingType'] === null) {
                $object->setChemicalRecordPackagingType(null);
            }
            if (\array_key_exists('ChemicalRecord_HazardLabelRequired', $data) && $data['ChemicalRecord_HazardLabelRequired'] !== null) {
                $object->setChemicalRecordHazardLabelRequired($data['ChemicalRecord_HazardLabelRequired']);
                unset($data['ChemicalRecord_HazardLabelRequired']);
            }
            elseif (\array_key_exists('ChemicalRecord_HazardLabelRequired', $data) && $data['ChemicalRecord_HazardLabelRequired'] === null) {
                $object->setChemicalRecordHazardLabelRequired(null);
            }
            if (\array_key_exists('ChemicalRecord_PackagingTypeQuantity', $data) && $data['ChemicalRecord_PackagingTypeQuantity'] !== null) {
                $object->setChemicalRecordPackagingTypeQuantity($data['ChemicalRecord_PackagingTypeQuantity']);
                unset($data['ChemicalRecord_PackagingTypeQuantity']);
            }
            elseif (\array_key_exists('ChemicalRecord_PackagingTypeQuantity', $data) && $data['ChemicalRecord_PackagingTypeQuantity'] === null) {
                $object->setChemicalRecordPackagingTypeQuantity(null);
            }
            if (\array_key_exists('ChemicalRecord_CommodityRegulatedLevelCode', $data) && $data['ChemicalRecord_CommodityRegulatedLevelCode'] !== null) {
                $object->setChemicalRecordCommodityRegulatedLevelCode($data['ChemicalRecord_CommodityRegulatedLevelCode']);
                unset($data['ChemicalRecord_CommodityRegulatedLevelCode']);
            }
            elseif (\array_key_exists('ChemicalRecord_CommodityRegulatedLevelCode', $data) && $data['ChemicalRecord_CommodityRegulatedLevelCode'] === null) {
                $object->setChemicalRecordCommodityRegulatedLevelCode(null);
            }
            if (\array_key_exists('ChemicalRecord_TransportCategory', $data) && $data['ChemicalRecord_TransportCategory'] !== null) {
                $object->setChemicalRecordTransportCategory($data['ChemicalRecord_TransportCategory']);
                unset($data['ChemicalRecord_TransportCategory']);
            }
            elseif (\array_key_exists('ChemicalRecord_TransportCategory', $data) && $data['ChemicalRecord_TransportCategory'] === null) {
                $object->setChemicalRecordTransportCategory(null);
            }
            if (\array_key_exists('ChemicalRecord_TunnelRestrictionCode', $data) && $data['ChemicalRecord_TunnelRestrictionCode'] !== null) {
                $object->setChemicalRecordTunnelRestrictionCode($data['ChemicalRecord_TunnelRestrictionCode']);
                unset($data['ChemicalRecord_TunnelRestrictionCode']);
            }
            elseif (\array_key_exists('ChemicalRecord_TunnelRestrictionCode', $data) && $data['ChemicalRecord_TunnelRestrictionCode'] === null) {
                $object->setChemicalRecordTunnelRestrictionCode(null);
            }
            if (\array_key_exists('ChemicalRecord_QValue', $data) && $data['ChemicalRecord_QValue'] !== null) {
                $object->setChemicalRecordQValue($data['ChemicalRecord_QValue']);
                unset($data['ChemicalRecord_QValue']);
            }
            elseif (\array_key_exists('ChemicalRecord_QValue', $data) && $data['ChemicalRecord_QValue'] === null) {
                $object->setChemicalRecordQValue(null);
            }
            if (\array_key_exists('ChemicalRecord_OverPackedIndicator', $data) && $data['ChemicalRecord_OverPackedIndicator'] !== null) {
                $object->setChemicalRecordOverPackedIndicator($data['ChemicalRecord_OverPackedIndicator']);
                unset($data['ChemicalRecord_OverPackedIndicator']);
            }
            elseif (\array_key_exists('ChemicalRecord_OverPackedIndicator', $data) && $data['ChemicalRecord_OverPackedIndicator'] === null) {
                $object->setChemicalRecordOverPackedIndicator(null);
            }
            if (\array_key_exists('ChemicalRecord_AllPackedInOneIndicator', $data) && $data['ChemicalRecord_AllPackedInOneIndicator'] !== null) {
                $object->setChemicalRecordAllPackedInOneIndicator($data['ChemicalRecord_AllPackedInOneIndicator']);
                unset($data['ChemicalRecord_AllPackedInOneIndicator']);
            }
            elseif (\array_key_exists('ChemicalRecord_AllPackedInOneIndicator', $data) && $data['ChemicalRecord_AllPackedInOneIndicator'] === null) {
                $object->setChemicalRecordAllPackedInOneIndicator(null);
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
            if ($object->isInitialized('chemicalRecordReportableQuantity') && null !== $object->getChemicalRecordReportableQuantity()) {
                $data['ChemicalRecord_ReportableQuantity'] = $object->getChemicalRecordReportableQuantity();
            }
            if ($object->isInitialized('chemicalRecordClassDivisionNumber') && null !== $object->getChemicalRecordClassDivisionNumber()) {
                $data['ChemicalRecord_ClassDivisionNumber'] = $object->getChemicalRecordClassDivisionNumber();
            }
            if ($object->isInitialized('chemicalRecordSubRiskClass') && null !== $object->getChemicalRecordSubRiskClass()) {
                $data['ChemicalRecord_SubRiskClass'] = $object->getChemicalRecordSubRiskClass();
            }
            if ($object->isInitialized('chemicalRecordIDNumber') && null !== $object->getChemicalRecordIDNumber()) {
                $data['ChemicalRecord_IDNumber'] = $object->getChemicalRecordIDNumber();
            }
            if ($object->isInitialized('chemicalRecordPackagingGroupType') && null !== $object->getChemicalRecordPackagingGroupType()) {
                $data['ChemicalRecord_PackagingGroupType'] = $object->getChemicalRecordPackagingGroupType();
            }
            if ($object->isInitialized('chemicalRecordQuantity') && null !== $object->getChemicalRecordQuantity()) {
                $data['ChemicalRecord_Quantity'] = $object->getChemicalRecordQuantity();
            }
            if ($object->isInitialized('chemicalRecordUOM') && null !== $object->getChemicalRecordUOM()) {
                $data['ChemicalRecord_UOM'] = $object->getChemicalRecordUOM();
            }
            if ($object->isInitialized('chemicalRecordPackagingInstructionCode') && null !== $object->getChemicalRecordPackagingInstructionCode()) {
                $data['ChemicalRecord_PackagingInstructionCode'] = $object->getChemicalRecordPackagingInstructionCode();
            }
            if ($object->isInitialized('chemicalRecordEmergencyPhone') && null !== $object->getChemicalRecordEmergencyPhone()) {
                $data['ChemicalRecord_EmergencyPhone'] = $object->getChemicalRecordEmergencyPhone();
            }
            if ($object->isInitialized('chemicalRecordEmergencyContact') && null !== $object->getChemicalRecordEmergencyContact()) {
                $data['ChemicalRecord_EmergencyContact'] = $object->getChemicalRecordEmergencyContact();
            }
            if ($object->isInitialized('chemicalRecordProperShippingName') && null !== $object->getChemicalRecordProperShippingName()) {
                $data['ChemicalRecord_ProperShippingName'] = $object->getChemicalRecordProperShippingName();
            }
            if ($object->isInitialized('chemicalRecordTechnicalName') && null !== $object->getChemicalRecordTechnicalName()) {
                $data['ChemicalRecord_TechnicalName'] = $object->getChemicalRecordTechnicalName();
            }
            if ($object->isInitialized('chemicalRecordAdditionalDescription') && null !== $object->getChemicalRecordAdditionalDescription()) {
                $data['ChemicalRecord_AdditionalDescription'] = $object->getChemicalRecordAdditionalDescription();
            }
            if ($object->isInitialized('chemicalRecordPackagingType') && null !== $object->getChemicalRecordPackagingType()) {
                $data['ChemicalRecord_PackagingType'] = $object->getChemicalRecordPackagingType();
            }
            if ($object->isInitialized('chemicalRecordHazardLabelRequired') && null !== $object->getChemicalRecordHazardLabelRequired()) {
                $data['ChemicalRecord_HazardLabelRequired'] = $object->getChemicalRecordHazardLabelRequired();
            }
            if ($object->isInitialized('chemicalRecordPackagingTypeQuantity') && null !== $object->getChemicalRecordPackagingTypeQuantity()) {
                $data['ChemicalRecord_PackagingTypeQuantity'] = $object->getChemicalRecordPackagingTypeQuantity();
            }
            if ($object->isInitialized('chemicalRecordCommodityRegulatedLevelCode') && null !== $object->getChemicalRecordCommodityRegulatedLevelCode()) {
                $data['ChemicalRecord_CommodityRegulatedLevelCode'] = $object->getChemicalRecordCommodityRegulatedLevelCode();
            }
            if ($object->isInitialized('chemicalRecordTransportCategory') && null !== $object->getChemicalRecordTransportCategory()) {
                $data['ChemicalRecord_TransportCategory'] = $object->getChemicalRecordTransportCategory();
            }
            if ($object->isInitialized('chemicalRecordTunnelRestrictionCode') && null !== $object->getChemicalRecordTunnelRestrictionCode()) {
                $data['ChemicalRecord_TunnelRestrictionCode'] = $object->getChemicalRecordTunnelRestrictionCode();
            }
            if ($object->isInitialized('chemicalRecordQValue') && null !== $object->getChemicalRecordQValue()) {
                $data['ChemicalRecord_QValue'] = $object->getChemicalRecordQValue();
            }
            if ($object->isInitialized('chemicalRecordOverPackedIndicator') && null !== $object->getChemicalRecordOverPackedIndicator()) {
                $data['ChemicalRecord_OverPackedIndicator'] = $object->getChemicalRecordOverPackedIndicator();
            }
            if ($object->isInitialized('chemicalRecordAllPackedInOneIndicator') && null !== $object->getChemicalRecordAllPackedInOneIndicator()) {
                $data['ChemicalRecord_AllPackedInOneIndicator'] = $object->getChemicalRecordAllPackedInOneIndicator();
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
            return ['ShipStream\\Ups\\Api\\Model\\PreNotificationPackageChemicalRecord' => false];
        }
    }
}