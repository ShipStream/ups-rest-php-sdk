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
    class PackageServiceOptionsHazMatNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\PackageServiceOptionsHazMat';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\PackageServiceOptionsHazMat';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \ShipStream\Ups\Api\Model\PackageServiceOptionsHazMat();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('PackagingTypeQuantity', $data)) {
                $object->setPackagingTypeQuantity($data['PackagingTypeQuantity']);
                unset($data['PackagingTypeQuantity']);
            }
            if (\array_key_exists('RecordIdentifier1', $data)) {
                $object->setRecordIdentifier1($data['RecordIdentifier1']);
                unset($data['RecordIdentifier1']);
            }
            if (\array_key_exists('RecordIdentifier2', $data)) {
                $object->setRecordIdentifier2($data['RecordIdentifier2']);
                unset($data['RecordIdentifier2']);
            }
            if (\array_key_exists('RecordIdentifier3', $data)) {
                $object->setRecordIdentifier3($data['RecordIdentifier3']);
                unset($data['RecordIdentifier3']);
            }
            if (\array_key_exists('SubRiskClass', $data)) {
                $object->setSubRiskClass($data['SubRiskClass']);
                unset($data['SubRiskClass']);
            }
            if (\array_key_exists('aDRItemNumber', $data)) {
                $object->setADRItemNumber($data['aDRItemNumber']);
                unset($data['aDRItemNumber']);
            }
            if (\array_key_exists('aDRPackingGroupLetter', $data)) {
                $object->setADRPackingGroupLetter($data['aDRPackingGroupLetter']);
                unset($data['aDRPackingGroupLetter']);
            }
            if (\array_key_exists('TechnicalName', $data)) {
                $object->setTechnicalName($data['TechnicalName']);
                unset($data['TechnicalName']);
            }
            if (\array_key_exists('HazardLabelRequired', $data)) {
                $object->setHazardLabelRequired($data['HazardLabelRequired']);
                unset($data['HazardLabelRequired']);
            }
            if (\array_key_exists('ClassDivisionNumber', $data)) {
                $object->setClassDivisionNumber($data['ClassDivisionNumber']);
                unset($data['ClassDivisionNumber']);
            }
            if (\array_key_exists('ReferenceNumber', $data)) {
                $object->setReferenceNumber($data['ReferenceNumber']);
                unset($data['ReferenceNumber']);
            }
            if (\array_key_exists('Quantity', $data)) {
                $object->setQuantity($data['Quantity']);
                unset($data['Quantity']);
            }
            if (\array_key_exists('UOM', $data)) {
                $object->setUOM($data['UOM']);
                unset($data['UOM']);
            }
            if (\array_key_exists('PackagingType', $data)) {
                $object->setPackagingType($data['PackagingType']);
                unset($data['PackagingType']);
            }
            if (\array_key_exists('IDNumber', $data)) {
                $object->setIDNumber($data['IDNumber']);
                unset($data['IDNumber']);
            }
            if (\array_key_exists('ProperShippingName', $data)) {
                $object->setProperShippingName($data['ProperShippingName']);
                unset($data['ProperShippingName']);
            }
            if (\array_key_exists('AdditionalDescription', $data)) {
                $object->setAdditionalDescription($data['AdditionalDescription']);
                unset($data['AdditionalDescription']);
            }
            if (\array_key_exists('PackagingGroupType', $data)) {
                $object->setPackagingGroupType($data['PackagingGroupType']);
                unset($data['PackagingGroupType']);
            }
            if (\array_key_exists('PackagingInstructionCode', $data)) {
                $object->setPackagingInstructionCode($data['PackagingInstructionCode']);
                unset($data['PackagingInstructionCode']);
            }
            if (\array_key_exists('EmergencyPhone', $data)) {
                $object->setEmergencyPhone($data['EmergencyPhone']);
                unset($data['EmergencyPhone']);
            }
            if (\array_key_exists('EmergencyContact', $data)) {
                $object->setEmergencyContact($data['EmergencyContact']);
                unset($data['EmergencyContact']);
            }
            if (\array_key_exists('ReportableQuantity', $data)) {
                $object->setReportableQuantity($data['ReportableQuantity']);
                unset($data['ReportableQuantity']);
            }
            if (\array_key_exists('RegulationSet', $data)) {
                $object->setRegulationSet($data['RegulationSet']);
                unset($data['RegulationSet']);
            }
            if (\array_key_exists('TransportationMode', $data)) {
                $object->setTransportationMode($data['TransportationMode']);
                unset($data['TransportationMode']);
            }
            if (\array_key_exists('CommodityRegulatedLevelCode', $data)) {
                $object->setCommodityRegulatedLevelCode($data['CommodityRegulatedLevelCode']);
                unset($data['CommodityRegulatedLevelCode']);
            }
            if (\array_key_exists('TransportCategory', $data)) {
                $object->setTransportCategory($data['TransportCategory']);
                unset($data['TransportCategory']);
            }
            if (\array_key_exists('TunnelRestrictionCode', $data)) {
                $object->setTunnelRestrictionCode($data['TunnelRestrictionCode']);
                unset($data['TunnelRestrictionCode']);
            }
            if (\array_key_exists('ChemicalRecordIdentifier', $data)) {
                $object->setChemicalRecordIdentifier($data['ChemicalRecordIdentifier']);
                unset($data['ChemicalRecordIdentifier']);
            }
            if (\array_key_exists('LocalTechnicalName', $data)) {
                $object->setLocalTechnicalName($data['LocalTechnicalName']);
                unset($data['LocalTechnicalName']);
            }
            if (\array_key_exists('LocalProperShippingName', $data)) {
                $object->setLocalProperShippingName($data['LocalProperShippingName']);
                unset($data['LocalProperShippingName']);
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
            if ($object->isInitialized('packagingTypeQuantity') && null !== $object->getPackagingTypeQuantity()) {
                $data['PackagingTypeQuantity'] = $object->getPackagingTypeQuantity();
            }
            if ($object->isInitialized('recordIdentifier1') && null !== $object->getRecordIdentifier1()) {
                $data['RecordIdentifier1'] = $object->getRecordIdentifier1();
            }
            if ($object->isInitialized('recordIdentifier2') && null !== $object->getRecordIdentifier2()) {
                $data['RecordIdentifier2'] = $object->getRecordIdentifier2();
            }
            if ($object->isInitialized('recordIdentifier3') && null !== $object->getRecordIdentifier3()) {
                $data['RecordIdentifier3'] = $object->getRecordIdentifier3();
            }
            if ($object->isInitialized('subRiskClass') && null !== $object->getSubRiskClass()) {
                $data['SubRiskClass'] = $object->getSubRiskClass();
            }
            if ($object->isInitialized('aDRItemNumber') && null !== $object->getADRItemNumber()) {
                $data['aDRItemNumber'] = $object->getADRItemNumber();
            }
            if ($object->isInitialized('aDRPackingGroupLetter') && null !== $object->getADRPackingGroupLetter()) {
                $data['aDRPackingGroupLetter'] = $object->getADRPackingGroupLetter();
            }
            if ($object->isInitialized('technicalName') && null !== $object->getTechnicalName()) {
                $data['TechnicalName'] = $object->getTechnicalName();
            }
            if ($object->isInitialized('hazardLabelRequired') && null !== $object->getHazardLabelRequired()) {
                $data['HazardLabelRequired'] = $object->getHazardLabelRequired();
            }
            if ($object->isInitialized('classDivisionNumber') && null !== $object->getClassDivisionNumber()) {
                $data['ClassDivisionNumber'] = $object->getClassDivisionNumber();
            }
            if ($object->isInitialized('referenceNumber') && null !== $object->getReferenceNumber()) {
                $data['ReferenceNumber'] = $object->getReferenceNumber();
            }
            if ($object->isInitialized('quantity') && null !== $object->getQuantity()) {
                $data['Quantity'] = $object->getQuantity();
            }
            if ($object->isInitialized('uOM') && null !== $object->getUOM()) {
                $data['UOM'] = $object->getUOM();
            }
            if ($object->isInitialized('packagingType') && null !== $object->getPackagingType()) {
                $data['PackagingType'] = $object->getPackagingType();
            }
            if ($object->isInitialized('iDNumber') && null !== $object->getIDNumber()) {
                $data['IDNumber'] = $object->getIDNumber();
            }
            $data['ProperShippingName'] = $object->getProperShippingName();
            if ($object->isInitialized('additionalDescription') && null !== $object->getAdditionalDescription()) {
                $data['AdditionalDescription'] = $object->getAdditionalDescription();
            }
            if ($object->isInitialized('packagingGroupType') && null !== $object->getPackagingGroupType()) {
                $data['PackagingGroupType'] = $object->getPackagingGroupType();
            }
            if ($object->isInitialized('packagingInstructionCode') && null !== $object->getPackagingInstructionCode()) {
                $data['PackagingInstructionCode'] = $object->getPackagingInstructionCode();
            }
            if ($object->isInitialized('emergencyPhone') && null !== $object->getEmergencyPhone()) {
                $data['EmergencyPhone'] = $object->getEmergencyPhone();
            }
            if ($object->isInitialized('emergencyContact') && null !== $object->getEmergencyContact()) {
                $data['EmergencyContact'] = $object->getEmergencyContact();
            }
            if ($object->isInitialized('reportableQuantity') && null !== $object->getReportableQuantity()) {
                $data['ReportableQuantity'] = $object->getReportableQuantity();
            }
            $data['RegulationSet'] = $object->getRegulationSet();
            $data['TransportationMode'] = $object->getTransportationMode();
            if ($object->isInitialized('commodityRegulatedLevelCode') && null !== $object->getCommodityRegulatedLevelCode()) {
                $data['CommodityRegulatedLevelCode'] = $object->getCommodityRegulatedLevelCode();
            }
            if ($object->isInitialized('transportCategory') && null !== $object->getTransportCategory()) {
                $data['TransportCategory'] = $object->getTransportCategory();
            }
            if ($object->isInitialized('tunnelRestrictionCode') && null !== $object->getTunnelRestrictionCode()) {
                $data['TunnelRestrictionCode'] = $object->getTunnelRestrictionCode();
            }
            if ($object->isInitialized('chemicalRecordIdentifier') && null !== $object->getChemicalRecordIdentifier()) {
                $data['ChemicalRecordIdentifier'] = $object->getChemicalRecordIdentifier();
            }
            if ($object->isInitialized('localTechnicalName') && null !== $object->getLocalTechnicalName()) {
                $data['LocalTechnicalName'] = $object->getLocalTechnicalName();
            }
            if ($object->isInitialized('localProperShippingName') && null !== $object->getLocalProperShippingName()) {
                $data['LocalProperShippingName'] = $object->getLocalProperShippingName();
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
            return ['ShipStream\\Ups\\Api\\Model\\PackageServiceOptionsHazMat' => false];
        }
    }
} else {
    class PackageServiceOptionsHazMatNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\PackageServiceOptionsHazMat';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\PackageServiceOptionsHazMat';
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
            $object = new \ShipStream\Ups\Api\Model\PackageServiceOptionsHazMat();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('PackagingTypeQuantity', $data)) {
                $object->setPackagingTypeQuantity($data['PackagingTypeQuantity']);
                unset($data['PackagingTypeQuantity']);
            }
            if (\array_key_exists('RecordIdentifier1', $data)) {
                $object->setRecordIdentifier1($data['RecordIdentifier1']);
                unset($data['RecordIdentifier1']);
            }
            if (\array_key_exists('RecordIdentifier2', $data)) {
                $object->setRecordIdentifier2($data['RecordIdentifier2']);
                unset($data['RecordIdentifier2']);
            }
            if (\array_key_exists('RecordIdentifier3', $data)) {
                $object->setRecordIdentifier3($data['RecordIdentifier3']);
                unset($data['RecordIdentifier3']);
            }
            if (\array_key_exists('SubRiskClass', $data)) {
                $object->setSubRiskClass($data['SubRiskClass']);
                unset($data['SubRiskClass']);
            }
            if (\array_key_exists('aDRItemNumber', $data)) {
                $object->setADRItemNumber($data['aDRItemNumber']);
                unset($data['aDRItemNumber']);
            }
            if (\array_key_exists('aDRPackingGroupLetter', $data)) {
                $object->setADRPackingGroupLetter($data['aDRPackingGroupLetter']);
                unset($data['aDRPackingGroupLetter']);
            }
            if (\array_key_exists('TechnicalName', $data)) {
                $object->setTechnicalName($data['TechnicalName']);
                unset($data['TechnicalName']);
            }
            if (\array_key_exists('HazardLabelRequired', $data)) {
                $object->setHazardLabelRequired($data['HazardLabelRequired']);
                unset($data['HazardLabelRequired']);
            }
            if (\array_key_exists('ClassDivisionNumber', $data)) {
                $object->setClassDivisionNumber($data['ClassDivisionNumber']);
                unset($data['ClassDivisionNumber']);
            }
            if (\array_key_exists('ReferenceNumber', $data)) {
                $object->setReferenceNumber($data['ReferenceNumber']);
                unset($data['ReferenceNumber']);
            }
            if (\array_key_exists('Quantity', $data)) {
                $object->setQuantity($data['Quantity']);
                unset($data['Quantity']);
            }
            if (\array_key_exists('UOM', $data)) {
                $object->setUOM($data['UOM']);
                unset($data['UOM']);
            }
            if (\array_key_exists('PackagingType', $data)) {
                $object->setPackagingType($data['PackagingType']);
                unset($data['PackagingType']);
            }
            if (\array_key_exists('IDNumber', $data)) {
                $object->setIDNumber($data['IDNumber']);
                unset($data['IDNumber']);
            }
            if (\array_key_exists('ProperShippingName', $data)) {
                $object->setProperShippingName($data['ProperShippingName']);
                unset($data['ProperShippingName']);
            }
            if (\array_key_exists('AdditionalDescription', $data)) {
                $object->setAdditionalDescription($data['AdditionalDescription']);
                unset($data['AdditionalDescription']);
            }
            if (\array_key_exists('PackagingGroupType', $data)) {
                $object->setPackagingGroupType($data['PackagingGroupType']);
                unset($data['PackagingGroupType']);
            }
            if (\array_key_exists('PackagingInstructionCode', $data)) {
                $object->setPackagingInstructionCode($data['PackagingInstructionCode']);
                unset($data['PackagingInstructionCode']);
            }
            if (\array_key_exists('EmergencyPhone', $data)) {
                $object->setEmergencyPhone($data['EmergencyPhone']);
                unset($data['EmergencyPhone']);
            }
            if (\array_key_exists('EmergencyContact', $data)) {
                $object->setEmergencyContact($data['EmergencyContact']);
                unset($data['EmergencyContact']);
            }
            if (\array_key_exists('ReportableQuantity', $data)) {
                $object->setReportableQuantity($data['ReportableQuantity']);
                unset($data['ReportableQuantity']);
            }
            if (\array_key_exists('RegulationSet', $data)) {
                $object->setRegulationSet($data['RegulationSet']);
                unset($data['RegulationSet']);
            }
            if (\array_key_exists('TransportationMode', $data)) {
                $object->setTransportationMode($data['TransportationMode']);
                unset($data['TransportationMode']);
            }
            if (\array_key_exists('CommodityRegulatedLevelCode', $data)) {
                $object->setCommodityRegulatedLevelCode($data['CommodityRegulatedLevelCode']);
                unset($data['CommodityRegulatedLevelCode']);
            }
            if (\array_key_exists('TransportCategory', $data)) {
                $object->setTransportCategory($data['TransportCategory']);
                unset($data['TransportCategory']);
            }
            if (\array_key_exists('TunnelRestrictionCode', $data)) {
                $object->setTunnelRestrictionCode($data['TunnelRestrictionCode']);
                unset($data['TunnelRestrictionCode']);
            }
            if (\array_key_exists('ChemicalRecordIdentifier', $data)) {
                $object->setChemicalRecordIdentifier($data['ChemicalRecordIdentifier']);
                unset($data['ChemicalRecordIdentifier']);
            }
            if (\array_key_exists('LocalTechnicalName', $data)) {
                $object->setLocalTechnicalName($data['LocalTechnicalName']);
                unset($data['LocalTechnicalName']);
            }
            if (\array_key_exists('LocalProperShippingName', $data)) {
                $object->setLocalProperShippingName($data['LocalProperShippingName']);
                unset($data['LocalProperShippingName']);
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
            if ($object->isInitialized('packagingTypeQuantity') && null !== $object->getPackagingTypeQuantity()) {
                $data['PackagingTypeQuantity'] = $object->getPackagingTypeQuantity();
            }
            if ($object->isInitialized('recordIdentifier1') && null !== $object->getRecordIdentifier1()) {
                $data['RecordIdentifier1'] = $object->getRecordIdentifier1();
            }
            if ($object->isInitialized('recordIdentifier2') && null !== $object->getRecordIdentifier2()) {
                $data['RecordIdentifier2'] = $object->getRecordIdentifier2();
            }
            if ($object->isInitialized('recordIdentifier3') && null !== $object->getRecordIdentifier3()) {
                $data['RecordIdentifier3'] = $object->getRecordIdentifier3();
            }
            if ($object->isInitialized('subRiskClass') && null !== $object->getSubRiskClass()) {
                $data['SubRiskClass'] = $object->getSubRiskClass();
            }
            if ($object->isInitialized('aDRItemNumber') && null !== $object->getADRItemNumber()) {
                $data['aDRItemNumber'] = $object->getADRItemNumber();
            }
            if ($object->isInitialized('aDRPackingGroupLetter') && null !== $object->getADRPackingGroupLetter()) {
                $data['aDRPackingGroupLetter'] = $object->getADRPackingGroupLetter();
            }
            if ($object->isInitialized('technicalName') && null !== $object->getTechnicalName()) {
                $data['TechnicalName'] = $object->getTechnicalName();
            }
            if ($object->isInitialized('hazardLabelRequired') && null !== $object->getHazardLabelRequired()) {
                $data['HazardLabelRequired'] = $object->getHazardLabelRequired();
            }
            if ($object->isInitialized('classDivisionNumber') && null !== $object->getClassDivisionNumber()) {
                $data['ClassDivisionNumber'] = $object->getClassDivisionNumber();
            }
            if ($object->isInitialized('referenceNumber') && null !== $object->getReferenceNumber()) {
                $data['ReferenceNumber'] = $object->getReferenceNumber();
            }
            if ($object->isInitialized('quantity') && null !== $object->getQuantity()) {
                $data['Quantity'] = $object->getQuantity();
            }
            if ($object->isInitialized('uOM') && null !== $object->getUOM()) {
                $data['UOM'] = $object->getUOM();
            }
            if ($object->isInitialized('packagingType') && null !== $object->getPackagingType()) {
                $data['PackagingType'] = $object->getPackagingType();
            }
            if ($object->isInitialized('iDNumber') && null !== $object->getIDNumber()) {
                $data['IDNumber'] = $object->getIDNumber();
            }
            $data['ProperShippingName'] = $object->getProperShippingName();
            if ($object->isInitialized('additionalDescription') && null !== $object->getAdditionalDescription()) {
                $data['AdditionalDescription'] = $object->getAdditionalDescription();
            }
            if ($object->isInitialized('packagingGroupType') && null !== $object->getPackagingGroupType()) {
                $data['PackagingGroupType'] = $object->getPackagingGroupType();
            }
            if ($object->isInitialized('packagingInstructionCode') && null !== $object->getPackagingInstructionCode()) {
                $data['PackagingInstructionCode'] = $object->getPackagingInstructionCode();
            }
            if ($object->isInitialized('emergencyPhone') && null !== $object->getEmergencyPhone()) {
                $data['EmergencyPhone'] = $object->getEmergencyPhone();
            }
            if ($object->isInitialized('emergencyContact') && null !== $object->getEmergencyContact()) {
                $data['EmergencyContact'] = $object->getEmergencyContact();
            }
            if ($object->isInitialized('reportableQuantity') && null !== $object->getReportableQuantity()) {
                $data['ReportableQuantity'] = $object->getReportableQuantity();
            }
            $data['RegulationSet'] = $object->getRegulationSet();
            $data['TransportationMode'] = $object->getTransportationMode();
            if ($object->isInitialized('commodityRegulatedLevelCode') && null !== $object->getCommodityRegulatedLevelCode()) {
                $data['CommodityRegulatedLevelCode'] = $object->getCommodityRegulatedLevelCode();
            }
            if ($object->isInitialized('transportCategory') && null !== $object->getTransportCategory()) {
                $data['TransportCategory'] = $object->getTransportCategory();
            }
            if ($object->isInitialized('tunnelRestrictionCode') && null !== $object->getTunnelRestrictionCode()) {
                $data['TunnelRestrictionCode'] = $object->getTunnelRestrictionCode();
            }
            if ($object->isInitialized('chemicalRecordIdentifier') && null !== $object->getChemicalRecordIdentifier()) {
                $data['ChemicalRecordIdentifier'] = $object->getChemicalRecordIdentifier();
            }
            if ($object->isInitialized('localTechnicalName') && null !== $object->getLocalTechnicalName()) {
                $data['LocalTechnicalName'] = $object->getLocalTechnicalName();
            }
            if ($object->isInitialized('localProperShippingName') && null !== $object->getLocalProperShippingName()) {
                $data['LocalProperShippingName'] = $object->getLocalProperShippingName();
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
            return ['ShipStream\\Ups\\Api\\Model\\PackageServiceOptionsHazMat' => false];
        }
    }
}