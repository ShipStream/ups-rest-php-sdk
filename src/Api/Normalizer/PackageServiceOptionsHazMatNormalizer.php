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
class PackageServiceOptionsHazMatNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \ShipStream\Ups\Api\Model\PackageServiceOptionsHazMat::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \ShipStream\Ups\Api\Model\PackageServiceOptionsHazMat::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
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
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('packagingTypeQuantity') && null !== $data->getPackagingTypeQuantity()) {
            $dataArray['PackagingTypeQuantity'] = $data->getPackagingTypeQuantity();
        }
        if ($data->isInitialized('recordIdentifier1') && null !== $data->getRecordIdentifier1()) {
            $dataArray['RecordIdentifier1'] = $data->getRecordIdentifier1();
        }
        if ($data->isInitialized('recordIdentifier2') && null !== $data->getRecordIdentifier2()) {
            $dataArray['RecordIdentifier2'] = $data->getRecordIdentifier2();
        }
        if ($data->isInitialized('recordIdentifier3') && null !== $data->getRecordIdentifier3()) {
            $dataArray['RecordIdentifier3'] = $data->getRecordIdentifier3();
        }
        if ($data->isInitialized('subRiskClass') && null !== $data->getSubRiskClass()) {
            $dataArray['SubRiskClass'] = $data->getSubRiskClass();
        }
        if ($data->isInitialized('aDRItemNumber') && null !== $data->getADRItemNumber()) {
            $dataArray['aDRItemNumber'] = $data->getADRItemNumber();
        }
        if ($data->isInitialized('aDRPackingGroupLetter') && null !== $data->getADRPackingGroupLetter()) {
            $dataArray['aDRPackingGroupLetter'] = $data->getADRPackingGroupLetter();
        }
        if ($data->isInitialized('technicalName') && null !== $data->getTechnicalName()) {
            $dataArray['TechnicalName'] = $data->getTechnicalName();
        }
        if ($data->isInitialized('hazardLabelRequired') && null !== $data->getHazardLabelRequired()) {
            $dataArray['HazardLabelRequired'] = $data->getHazardLabelRequired();
        }
        if ($data->isInitialized('classDivisionNumber') && null !== $data->getClassDivisionNumber()) {
            $dataArray['ClassDivisionNumber'] = $data->getClassDivisionNumber();
        }
        if ($data->isInitialized('referenceNumber') && null !== $data->getReferenceNumber()) {
            $dataArray['ReferenceNumber'] = $data->getReferenceNumber();
        }
        if ($data->isInitialized('quantity') && null !== $data->getQuantity()) {
            $dataArray['Quantity'] = $data->getQuantity();
        }
        if ($data->isInitialized('uOM') && null !== $data->getUOM()) {
            $dataArray['UOM'] = $data->getUOM();
        }
        if ($data->isInitialized('packagingType') && null !== $data->getPackagingType()) {
            $dataArray['PackagingType'] = $data->getPackagingType();
        }
        if ($data->isInitialized('iDNumber') && null !== $data->getIDNumber()) {
            $dataArray['IDNumber'] = $data->getIDNumber();
        }
        $dataArray['ProperShippingName'] = $data->getProperShippingName();
        if ($data->isInitialized('additionalDescription') && null !== $data->getAdditionalDescription()) {
            $dataArray['AdditionalDescription'] = $data->getAdditionalDescription();
        }
        if ($data->isInitialized('packagingGroupType') && null !== $data->getPackagingGroupType()) {
            $dataArray['PackagingGroupType'] = $data->getPackagingGroupType();
        }
        if ($data->isInitialized('packagingInstructionCode') && null !== $data->getPackagingInstructionCode()) {
            $dataArray['PackagingInstructionCode'] = $data->getPackagingInstructionCode();
        }
        if ($data->isInitialized('emergencyPhone') && null !== $data->getEmergencyPhone()) {
            $dataArray['EmergencyPhone'] = $data->getEmergencyPhone();
        }
        if ($data->isInitialized('emergencyContact') && null !== $data->getEmergencyContact()) {
            $dataArray['EmergencyContact'] = $data->getEmergencyContact();
        }
        if ($data->isInitialized('reportableQuantity') && null !== $data->getReportableQuantity()) {
            $dataArray['ReportableQuantity'] = $data->getReportableQuantity();
        }
        $dataArray['RegulationSet'] = $data->getRegulationSet();
        $dataArray['TransportationMode'] = $data->getTransportationMode();
        if ($data->isInitialized('commodityRegulatedLevelCode') && null !== $data->getCommodityRegulatedLevelCode()) {
            $dataArray['CommodityRegulatedLevelCode'] = $data->getCommodityRegulatedLevelCode();
        }
        if ($data->isInitialized('transportCategory') && null !== $data->getTransportCategory()) {
            $dataArray['TransportCategory'] = $data->getTransportCategory();
        }
        if ($data->isInitialized('tunnelRestrictionCode') && null !== $data->getTunnelRestrictionCode()) {
            $dataArray['TunnelRestrictionCode'] = $data->getTunnelRestrictionCode();
        }
        if ($data->isInitialized('chemicalRecordIdentifier') && null !== $data->getChemicalRecordIdentifier()) {
            $dataArray['ChemicalRecordIdentifier'] = $data->getChemicalRecordIdentifier();
        }
        if ($data->isInitialized('localTechnicalName') && null !== $data->getLocalTechnicalName()) {
            $dataArray['LocalTechnicalName'] = $data->getLocalTechnicalName();
        }
        if ($data->isInitialized('localProperShippingName') && null !== $data->getLocalProperShippingName()) {
            $dataArray['LocalProperShippingName'] = $data->getLocalProperShippingName();
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
        return [\ShipStream\Ups\Api\Model\PackageServiceOptionsHazMat::class => false];
    }
}