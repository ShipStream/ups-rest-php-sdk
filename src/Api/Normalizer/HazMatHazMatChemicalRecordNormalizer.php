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
    class HazMatHazMatChemicalRecordNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\HazMatHazMatChemicalRecord';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\HazMatHazMatChemicalRecord';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \ShipStream\Ups\Api\Model\HazMatHazMatChemicalRecord();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('ChemicalRecordIdentifier', $data) && $data['ChemicalRecordIdentifier'] !== null) {
                $object->setChemicalRecordIdentifier($data['ChemicalRecordIdentifier']);
                unset($data['ChemicalRecordIdentifier']);
            }
            elseif (\array_key_exists('ChemicalRecordIdentifier', $data) && $data['ChemicalRecordIdentifier'] === null) {
                $object->setChemicalRecordIdentifier(null);
            }
            if (\array_key_exists('ClassDivisionNumber', $data) && $data['ClassDivisionNumber'] !== null) {
                $object->setClassDivisionNumber($data['ClassDivisionNumber']);
                unset($data['ClassDivisionNumber']);
            }
            elseif (\array_key_exists('ClassDivisionNumber', $data) && $data['ClassDivisionNumber'] === null) {
                $object->setClassDivisionNumber(null);
            }
            if (\array_key_exists('IDNumber', $data) && $data['IDNumber'] !== null) {
                $object->setIDNumber($data['IDNumber']);
                unset($data['IDNumber']);
            }
            elseif (\array_key_exists('IDNumber', $data) && $data['IDNumber'] === null) {
                $object->setIDNumber(null);
            }
            if (\array_key_exists('TransportationMode', $data) && $data['TransportationMode'] !== null) {
                $object->setTransportationMode($data['TransportationMode']);
                unset($data['TransportationMode']);
            }
            elseif (\array_key_exists('TransportationMode', $data) && $data['TransportationMode'] === null) {
                $object->setTransportationMode(null);
            }
            if (\array_key_exists('RegulationSet', $data) && $data['RegulationSet'] !== null) {
                $object->setRegulationSet($data['RegulationSet']);
                unset($data['RegulationSet']);
            }
            elseif (\array_key_exists('RegulationSet', $data) && $data['RegulationSet'] === null) {
                $object->setRegulationSet(null);
            }
            if (\array_key_exists('EmergencyPhone', $data) && $data['EmergencyPhone'] !== null) {
                $object->setEmergencyPhone($data['EmergencyPhone']);
                unset($data['EmergencyPhone']);
            }
            elseif (\array_key_exists('EmergencyPhone', $data) && $data['EmergencyPhone'] === null) {
                $object->setEmergencyPhone(null);
            }
            if (\array_key_exists('EmergencyContact', $data) && $data['EmergencyContact'] !== null) {
                $object->setEmergencyContact($data['EmergencyContact']);
                unset($data['EmergencyContact']);
            }
            elseif (\array_key_exists('EmergencyContact', $data) && $data['EmergencyContact'] === null) {
                $object->setEmergencyContact(null);
            }
            if (\array_key_exists('ReportableQuantity', $data) && $data['ReportableQuantity'] !== null) {
                $object->setReportableQuantity($data['ReportableQuantity']);
                unset($data['ReportableQuantity']);
            }
            elseif (\array_key_exists('ReportableQuantity', $data) && $data['ReportableQuantity'] === null) {
                $object->setReportableQuantity(null);
            }
            if (\array_key_exists('SubRiskClass', $data) && $data['SubRiskClass'] !== null) {
                $object->setSubRiskClass($data['SubRiskClass']);
                unset($data['SubRiskClass']);
            }
            elseif (\array_key_exists('SubRiskClass', $data) && $data['SubRiskClass'] === null) {
                $object->setSubRiskClass(null);
            }
            if (\array_key_exists('PackagingGroupType', $data) && $data['PackagingGroupType'] !== null) {
                $object->setPackagingGroupType($data['PackagingGroupType']);
                unset($data['PackagingGroupType']);
            }
            elseif (\array_key_exists('PackagingGroupType', $data) && $data['PackagingGroupType'] === null) {
                $object->setPackagingGroupType(null);
            }
            if (\array_key_exists('Quantity', $data) && $data['Quantity'] !== null) {
                $object->setQuantity($data['Quantity']);
                unset($data['Quantity']);
            }
            elseif (\array_key_exists('Quantity', $data) && $data['Quantity'] === null) {
                $object->setQuantity(null);
            }
            if (\array_key_exists('UOM', $data) && $data['UOM'] !== null) {
                $object->setUOM($data['UOM']);
                unset($data['UOM']);
            }
            elseif (\array_key_exists('UOM', $data) && $data['UOM'] === null) {
                $object->setUOM(null);
            }
            if (\array_key_exists('PackagingInstructionCode', $data) && $data['PackagingInstructionCode'] !== null) {
                $object->setPackagingInstructionCode($data['PackagingInstructionCode']);
                unset($data['PackagingInstructionCode']);
            }
            elseif (\array_key_exists('PackagingInstructionCode', $data) && $data['PackagingInstructionCode'] === null) {
                $object->setPackagingInstructionCode(null);
            }
            if (\array_key_exists('ProperShippingName', $data) && $data['ProperShippingName'] !== null) {
                $object->setProperShippingName($data['ProperShippingName']);
                unset($data['ProperShippingName']);
            }
            elseif (\array_key_exists('ProperShippingName', $data) && $data['ProperShippingName'] === null) {
                $object->setProperShippingName(null);
            }
            if (\array_key_exists('TechnicalName', $data) && $data['TechnicalName'] !== null) {
                $object->setTechnicalName($data['TechnicalName']);
                unset($data['TechnicalName']);
            }
            elseif (\array_key_exists('TechnicalName', $data) && $data['TechnicalName'] === null) {
                $object->setTechnicalName(null);
            }
            if (\array_key_exists('AdditionalDescription', $data) && $data['AdditionalDescription'] !== null) {
                $object->setAdditionalDescription($data['AdditionalDescription']);
                unset($data['AdditionalDescription']);
            }
            elseif (\array_key_exists('AdditionalDescription', $data) && $data['AdditionalDescription'] === null) {
                $object->setAdditionalDescription(null);
            }
            if (\array_key_exists('PackagingType', $data) && $data['PackagingType'] !== null) {
                $object->setPackagingType($data['PackagingType']);
                unset($data['PackagingType']);
            }
            elseif (\array_key_exists('PackagingType', $data) && $data['PackagingType'] === null) {
                $object->setPackagingType(null);
            }
            if (\array_key_exists('HazardLabelRequired', $data) && $data['HazardLabelRequired'] !== null) {
                $object->setHazardLabelRequired($data['HazardLabelRequired']);
                unset($data['HazardLabelRequired']);
            }
            elseif (\array_key_exists('HazardLabelRequired', $data) && $data['HazardLabelRequired'] === null) {
                $object->setHazardLabelRequired(null);
            }
            if (\array_key_exists('PackagingTypeQuantity', $data) && $data['PackagingTypeQuantity'] !== null) {
                $object->setPackagingTypeQuantity($data['PackagingTypeQuantity']);
                unset($data['PackagingTypeQuantity']);
            }
            elseif (\array_key_exists('PackagingTypeQuantity', $data) && $data['PackagingTypeQuantity'] === null) {
                $object->setPackagingTypeQuantity(null);
            }
            if (\array_key_exists('CommodityRegulatedLevelCode', $data) && $data['CommodityRegulatedLevelCode'] !== null) {
                $object->setCommodityRegulatedLevelCode($data['CommodityRegulatedLevelCode']);
                unset($data['CommodityRegulatedLevelCode']);
            }
            elseif (\array_key_exists('CommodityRegulatedLevelCode', $data) && $data['CommodityRegulatedLevelCode'] === null) {
                $object->setCommodityRegulatedLevelCode(null);
            }
            if (\array_key_exists('TransportCategory', $data) && $data['TransportCategory'] !== null) {
                $object->setTransportCategory($data['TransportCategory']);
                unset($data['TransportCategory']);
            }
            elseif (\array_key_exists('TransportCategory', $data) && $data['TransportCategory'] === null) {
                $object->setTransportCategory(null);
            }
            if (\array_key_exists('TunnelRestrictionCode', $data) && $data['TunnelRestrictionCode'] !== null) {
                $object->setTunnelRestrictionCode($data['TunnelRestrictionCode']);
                unset($data['TunnelRestrictionCode']);
            }
            elseif (\array_key_exists('TunnelRestrictionCode', $data) && $data['TunnelRestrictionCode'] === null) {
                $object->setTunnelRestrictionCode(null);
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
            if ($object->isInitialized('chemicalRecordIdentifier') && null !== $object->getChemicalRecordIdentifier()) {
                $data['ChemicalRecordIdentifier'] = $object->getChemicalRecordIdentifier();
            }
            if ($object->isInitialized('classDivisionNumber') && null !== $object->getClassDivisionNumber()) {
                $data['ClassDivisionNumber'] = $object->getClassDivisionNumber();
            }
            if ($object->isInitialized('iDNumber') && null !== $object->getIDNumber()) {
                $data['IDNumber'] = $object->getIDNumber();
            }
            $data['TransportationMode'] = $object->getTransportationMode();
            $data['RegulationSet'] = $object->getRegulationSet();
            if ($object->isInitialized('emergencyPhone') && null !== $object->getEmergencyPhone()) {
                $data['EmergencyPhone'] = $object->getEmergencyPhone();
            }
            if ($object->isInitialized('emergencyContact') && null !== $object->getEmergencyContact()) {
                $data['EmergencyContact'] = $object->getEmergencyContact();
            }
            if ($object->isInitialized('reportableQuantity') && null !== $object->getReportableQuantity()) {
                $data['ReportableQuantity'] = $object->getReportableQuantity();
            }
            if ($object->isInitialized('subRiskClass') && null !== $object->getSubRiskClass()) {
                $data['SubRiskClass'] = $object->getSubRiskClass();
            }
            if ($object->isInitialized('packagingGroupType') && null !== $object->getPackagingGroupType()) {
                $data['PackagingGroupType'] = $object->getPackagingGroupType();
            }
            if ($object->isInitialized('quantity') && null !== $object->getQuantity()) {
                $data['Quantity'] = $object->getQuantity();
            }
            if ($object->isInitialized('uOM') && null !== $object->getUOM()) {
                $data['UOM'] = $object->getUOM();
            }
            if ($object->isInitialized('packagingInstructionCode') && null !== $object->getPackagingInstructionCode()) {
                $data['PackagingInstructionCode'] = $object->getPackagingInstructionCode();
            }
            if ($object->isInitialized('properShippingName') && null !== $object->getProperShippingName()) {
                $data['ProperShippingName'] = $object->getProperShippingName();
            }
            if ($object->isInitialized('technicalName') && null !== $object->getTechnicalName()) {
                $data['TechnicalName'] = $object->getTechnicalName();
            }
            if ($object->isInitialized('additionalDescription') && null !== $object->getAdditionalDescription()) {
                $data['AdditionalDescription'] = $object->getAdditionalDescription();
            }
            if ($object->isInitialized('packagingType') && null !== $object->getPackagingType()) {
                $data['PackagingType'] = $object->getPackagingType();
            }
            if ($object->isInitialized('hazardLabelRequired') && null !== $object->getHazardLabelRequired()) {
                $data['HazardLabelRequired'] = $object->getHazardLabelRequired();
            }
            if ($object->isInitialized('packagingTypeQuantity') && null !== $object->getPackagingTypeQuantity()) {
                $data['PackagingTypeQuantity'] = $object->getPackagingTypeQuantity();
            }
            if ($object->isInitialized('commodityRegulatedLevelCode') && null !== $object->getCommodityRegulatedLevelCode()) {
                $data['CommodityRegulatedLevelCode'] = $object->getCommodityRegulatedLevelCode();
            }
            if ($object->isInitialized('transportCategory') && null !== $object->getTransportCategory()) {
                $data['TransportCategory'] = $object->getTransportCategory();
            }
            if ($object->isInitialized('tunnelRestrictionCode') && null !== $object->getTunnelRestrictionCode()) {
                $data['TunnelRestrictionCode'] = $object->getTunnelRestrictionCode();
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
            return ['ShipStream\\Ups\\Api\\Model\\HazMatHazMatChemicalRecord' => false];
        }
    }
} else {
    class HazMatHazMatChemicalRecordNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\HazMatHazMatChemicalRecord';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\HazMatHazMatChemicalRecord';
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
            $object = new \ShipStream\Ups\Api\Model\HazMatHazMatChemicalRecord();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('ChemicalRecordIdentifier', $data) && $data['ChemicalRecordIdentifier'] !== null) {
                $object->setChemicalRecordIdentifier($data['ChemicalRecordIdentifier']);
                unset($data['ChemicalRecordIdentifier']);
            }
            elseif (\array_key_exists('ChemicalRecordIdentifier', $data) && $data['ChemicalRecordIdentifier'] === null) {
                $object->setChemicalRecordIdentifier(null);
            }
            if (\array_key_exists('ClassDivisionNumber', $data) && $data['ClassDivisionNumber'] !== null) {
                $object->setClassDivisionNumber($data['ClassDivisionNumber']);
                unset($data['ClassDivisionNumber']);
            }
            elseif (\array_key_exists('ClassDivisionNumber', $data) && $data['ClassDivisionNumber'] === null) {
                $object->setClassDivisionNumber(null);
            }
            if (\array_key_exists('IDNumber', $data) && $data['IDNumber'] !== null) {
                $object->setIDNumber($data['IDNumber']);
                unset($data['IDNumber']);
            }
            elseif (\array_key_exists('IDNumber', $data) && $data['IDNumber'] === null) {
                $object->setIDNumber(null);
            }
            if (\array_key_exists('TransportationMode', $data) && $data['TransportationMode'] !== null) {
                $object->setTransportationMode($data['TransportationMode']);
                unset($data['TransportationMode']);
            }
            elseif (\array_key_exists('TransportationMode', $data) && $data['TransportationMode'] === null) {
                $object->setTransportationMode(null);
            }
            if (\array_key_exists('RegulationSet', $data) && $data['RegulationSet'] !== null) {
                $object->setRegulationSet($data['RegulationSet']);
                unset($data['RegulationSet']);
            }
            elseif (\array_key_exists('RegulationSet', $data) && $data['RegulationSet'] === null) {
                $object->setRegulationSet(null);
            }
            if (\array_key_exists('EmergencyPhone', $data) && $data['EmergencyPhone'] !== null) {
                $object->setEmergencyPhone($data['EmergencyPhone']);
                unset($data['EmergencyPhone']);
            }
            elseif (\array_key_exists('EmergencyPhone', $data) && $data['EmergencyPhone'] === null) {
                $object->setEmergencyPhone(null);
            }
            if (\array_key_exists('EmergencyContact', $data) && $data['EmergencyContact'] !== null) {
                $object->setEmergencyContact($data['EmergencyContact']);
                unset($data['EmergencyContact']);
            }
            elseif (\array_key_exists('EmergencyContact', $data) && $data['EmergencyContact'] === null) {
                $object->setEmergencyContact(null);
            }
            if (\array_key_exists('ReportableQuantity', $data) && $data['ReportableQuantity'] !== null) {
                $object->setReportableQuantity($data['ReportableQuantity']);
                unset($data['ReportableQuantity']);
            }
            elseif (\array_key_exists('ReportableQuantity', $data) && $data['ReportableQuantity'] === null) {
                $object->setReportableQuantity(null);
            }
            if (\array_key_exists('SubRiskClass', $data) && $data['SubRiskClass'] !== null) {
                $object->setSubRiskClass($data['SubRiskClass']);
                unset($data['SubRiskClass']);
            }
            elseif (\array_key_exists('SubRiskClass', $data) && $data['SubRiskClass'] === null) {
                $object->setSubRiskClass(null);
            }
            if (\array_key_exists('PackagingGroupType', $data) && $data['PackagingGroupType'] !== null) {
                $object->setPackagingGroupType($data['PackagingGroupType']);
                unset($data['PackagingGroupType']);
            }
            elseif (\array_key_exists('PackagingGroupType', $data) && $data['PackagingGroupType'] === null) {
                $object->setPackagingGroupType(null);
            }
            if (\array_key_exists('Quantity', $data) && $data['Quantity'] !== null) {
                $object->setQuantity($data['Quantity']);
                unset($data['Quantity']);
            }
            elseif (\array_key_exists('Quantity', $data) && $data['Quantity'] === null) {
                $object->setQuantity(null);
            }
            if (\array_key_exists('UOM', $data) && $data['UOM'] !== null) {
                $object->setUOM($data['UOM']);
                unset($data['UOM']);
            }
            elseif (\array_key_exists('UOM', $data) && $data['UOM'] === null) {
                $object->setUOM(null);
            }
            if (\array_key_exists('PackagingInstructionCode', $data) && $data['PackagingInstructionCode'] !== null) {
                $object->setPackagingInstructionCode($data['PackagingInstructionCode']);
                unset($data['PackagingInstructionCode']);
            }
            elseif (\array_key_exists('PackagingInstructionCode', $data) && $data['PackagingInstructionCode'] === null) {
                $object->setPackagingInstructionCode(null);
            }
            if (\array_key_exists('ProperShippingName', $data) && $data['ProperShippingName'] !== null) {
                $object->setProperShippingName($data['ProperShippingName']);
                unset($data['ProperShippingName']);
            }
            elseif (\array_key_exists('ProperShippingName', $data) && $data['ProperShippingName'] === null) {
                $object->setProperShippingName(null);
            }
            if (\array_key_exists('TechnicalName', $data) && $data['TechnicalName'] !== null) {
                $object->setTechnicalName($data['TechnicalName']);
                unset($data['TechnicalName']);
            }
            elseif (\array_key_exists('TechnicalName', $data) && $data['TechnicalName'] === null) {
                $object->setTechnicalName(null);
            }
            if (\array_key_exists('AdditionalDescription', $data) && $data['AdditionalDescription'] !== null) {
                $object->setAdditionalDescription($data['AdditionalDescription']);
                unset($data['AdditionalDescription']);
            }
            elseif (\array_key_exists('AdditionalDescription', $data) && $data['AdditionalDescription'] === null) {
                $object->setAdditionalDescription(null);
            }
            if (\array_key_exists('PackagingType', $data) && $data['PackagingType'] !== null) {
                $object->setPackagingType($data['PackagingType']);
                unset($data['PackagingType']);
            }
            elseif (\array_key_exists('PackagingType', $data) && $data['PackagingType'] === null) {
                $object->setPackagingType(null);
            }
            if (\array_key_exists('HazardLabelRequired', $data) && $data['HazardLabelRequired'] !== null) {
                $object->setHazardLabelRequired($data['HazardLabelRequired']);
                unset($data['HazardLabelRequired']);
            }
            elseif (\array_key_exists('HazardLabelRequired', $data) && $data['HazardLabelRequired'] === null) {
                $object->setHazardLabelRequired(null);
            }
            if (\array_key_exists('PackagingTypeQuantity', $data) && $data['PackagingTypeQuantity'] !== null) {
                $object->setPackagingTypeQuantity($data['PackagingTypeQuantity']);
                unset($data['PackagingTypeQuantity']);
            }
            elseif (\array_key_exists('PackagingTypeQuantity', $data) && $data['PackagingTypeQuantity'] === null) {
                $object->setPackagingTypeQuantity(null);
            }
            if (\array_key_exists('CommodityRegulatedLevelCode', $data) && $data['CommodityRegulatedLevelCode'] !== null) {
                $object->setCommodityRegulatedLevelCode($data['CommodityRegulatedLevelCode']);
                unset($data['CommodityRegulatedLevelCode']);
            }
            elseif (\array_key_exists('CommodityRegulatedLevelCode', $data) && $data['CommodityRegulatedLevelCode'] === null) {
                $object->setCommodityRegulatedLevelCode(null);
            }
            if (\array_key_exists('TransportCategory', $data) && $data['TransportCategory'] !== null) {
                $object->setTransportCategory($data['TransportCategory']);
                unset($data['TransportCategory']);
            }
            elseif (\array_key_exists('TransportCategory', $data) && $data['TransportCategory'] === null) {
                $object->setTransportCategory(null);
            }
            if (\array_key_exists('TunnelRestrictionCode', $data) && $data['TunnelRestrictionCode'] !== null) {
                $object->setTunnelRestrictionCode($data['TunnelRestrictionCode']);
                unset($data['TunnelRestrictionCode']);
            }
            elseif (\array_key_exists('TunnelRestrictionCode', $data) && $data['TunnelRestrictionCode'] === null) {
                $object->setTunnelRestrictionCode(null);
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
            if ($object->isInitialized('chemicalRecordIdentifier') && null !== $object->getChemicalRecordIdentifier()) {
                $data['ChemicalRecordIdentifier'] = $object->getChemicalRecordIdentifier();
            }
            if ($object->isInitialized('classDivisionNumber') && null !== $object->getClassDivisionNumber()) {
                $data['ClassDivisionNumber'] = $object->getClassDivisionNumber();
            }
            if ($object->isInitialized('iDNumber') && null !== $object->getIDNumber()) {
                $data['IDNumber'] = $object->getIDNumber();
            }
            $data['TransportationMode'] = $object->getTransportationMode();
            $data['RegulationSet'] = $object->getRegulationSet();
            if ($object->isInitialized('emergencyPhone') && null !== $object->getEmergencyPhone()) {
                $data['EmergencyPhone'] = $object->getEmergencyPhone();
            }
            if ($object->isInitialized('emergencyContact') && null !== $object->getEmergencyContact()) {
                $data['EmergencyContact'] = $object->getEmergencyContact();
            }
            if ($object->isInitialized('reportableQuantity') && null !== $object->getReportableQuantity()) {
                $data['ReportableQuantity'] = $object->getReportableQuantity();
            }
            if ($object->isInitialized('subRiskClass') && null !== $object->getSubRiskClass()) {
                $data['SubRiskClass'] = $object->getSubRiskClass();
            }
            if ($object->isInitialized('packagingGroupType') && null !== $object->getPackagingGroupType()) {
                $data['PackagingGroupType'] = $object->getPackagingGroupType();
            }
            if ($object->isInitialized('quantity') && null !== $object->getQuantity()) {
                $data['Quantity'] = $object->getQuantity();
            }
            if ($object->isInitialized('uOM') && null !== $object->getUOM()) {
                $data['UOM'] = $object->getUOM();
            }
            if ($object->isInitialized('packagingInstructionCode') && null !== $object->getPackagingInstructionCode()) {
                $data['PackagingInstructionCode'] = $object->getPackagingInstructionCode();
            }
            if ($object->isInitialized('properShippingName') && null !== $object->getProperShippingName()) {
                $data['ProperShippingName'] = $object->getProperShippingName();
            }
            if ($object->isInitialized('technicalName') && null !== $object->getTechnicalName()) {
                $data['TechnicalName'] = $object->getTechnicalName();
            }
            if ($object->isInitialized('additionalDescription') && null !== $object->getAdditionalDescription()) {
                $data['AdditionalDescription'] = $object->getAdditionalDescription();
            }
            if ($object->isInitialized('packagingType') && null !== $object->getPackagingType()) {
                $data['PackagingType'] = $object->getPackagingType();
            }
            if ($object->isInitialized('hazardLabelRequired') && null !== $object->getHazardLabelRequired()) {
                $data['HazardLabelRequired'] = $object->getHazardLabelRequired();
            }
            if ($object->isInitialized('packagingTypeQuantity') && null !== $object->getPackagingTypeQuantity()) {
                $data['PackagingTypeQuantity'] = $object->getPackagingTypeQuantity();
            }
            if ($object->isInitialized('commodityRegulatedLevelCode') && null !== $object->getCommodityRegulatedLevelCode()) {
                $data['CommodityRegulatedLevelCode'] = $object->getCommodityRegulatedLevelCode();
            }
            if ($object->isInitialized('transportCategory') && null !== $object->getTransportCategory()) {
                $data['TransportCategory'] = $object->getTransportCategory();
            }
            if ($object->isInitialized('tunnelRestrictionCode') && null !== $object->getTunnelRestrictionCode()) {
                $data['TunnelRestrictionCode'] = $object->getTunnelRestrictionCode();
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
            return ['ShipStream\\Ups\\Api\\Model\\HazMatHazMatChemicalRecord' => false];
        }
    }
}