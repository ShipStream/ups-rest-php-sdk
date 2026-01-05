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
class PackageChemicalRecordNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \ShipStream\Ups\Api\Model\PackageChemicalRecord::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \ShipStream\Ups\Api\Model\PackageChemicalRecord::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \ShipStream\Ups\Api\Model\PackageChemicalRecord();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('ChemicalRecordIdentifier', $data)) {
            $object->setChemicalRecordIdentifier($data['ChemicalRecordIdentifier']);
            unset($data['ChemicalRecordIdentifier']);
        }
        if (\array_key_exists('ReportableQuantity', $data)) {
            $object->setReportableQuantity($data['ReportableQuantity']);
            unset($data['ReportableQuantity']);
        }
        if (\array_key_exists('ClassDivisionNumber', $data)) {
            $object->setClassDivisionNumber($data['ClassDivisionNumber']);
            unset($data['ClassDivisionNumber']);
        }
        if (\array_key_exists('SubRiskClass', $data)) {
            $object->setSubRiskClass($data['SubRiskClass']);
            unset($data['SubRiskClass']);
        }
        if (\array_key_exists('IDNumber', $data)) {
            $object->setIDNumber($data['IDNumber']);
            unset($data['IDNumber']);
        }
        if (\array_key_exists('PackagingGroupType', $data)) {
            $object->setPackagingGroupType($data['PackagingGroupType']);
            unset($data['PackagingGroupType']);
        }
        if (\array_key_exists('Quantity', $data)) {
            $object->setQuantity($data['Quantity']);
            unset($data['Quantity']);
        }
        if (\array_key_exists('UOM', $data)) {
            $object->setUOM($data['UOM']);
            unset($data['UOM']);
        }
        if (\array_key_exists('PackagingInstructionCode', $data)) {
            $object->setPackagingInstructionCode($data['PackagingInstructionCode']);
            unset($data['PackagingInstructionCode']);
        }
        if (\array_key_exists('ProperShippingName', $data)) {
            $object->setProperShippingName($data['ProperShippingName']);
            unset($data['ProperShippingName']);
        }
        if (\array_key_exists('TechnicalName', $data)) {
            $object->setTechnicalName($data['TechnicalName']);
            unset($data['TechnicalName']);
        }
        if (\array_key_exists('AdditionalDescription', $data)) {
            $object->setAdditionalDescription($data['AdditionalDescription']);
            unset($data['AdditionalDescription']);
        }
        if (\array_key_exists('PackagingType', $data)) {
            $object->setPackagingType($data['PackagingType']);
            unset($data['PackagingType']);
        }
        if (\array_key_exists('HazardLabelRequired', $data)) {
            $object->setHazardLabelRequired($data['HazardLabelRequired']);
            unset($data['HazardLabelRequired']);
        }
        if (\array_key_exists('PackagingTypeQuantity', $data)) {
            $object->setPackagingTypeQuantity($data['PackagingTypeQuantity']);
            unset($data['PackagingTypeQuantity']);
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
        if (\array_key_exists('AllPackedInOneIndicator', $data)) {
            $object->setAllPackedInOneIndicator($data['AllPackedInOneIndicator']);
            unset($data['AllPackedInOneIndicator']);
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
        $dataArray['ChemicalRecordIdentifier'] = $data->getChemicalRecordIdentifier();
        if ($data->isInitialized('reportableQuantity') && null !== $data->getReportableQuantity()) {
            $dataArray['ReportableQuantity'] = $data->getReportableQuantity();
        }
        if ($data->isInitialized('classDivisionNumber') && null !== $data->getClassDivisionNumber()) {
            $dataArray['ClassDivisionNumber'] = $data->getClassDivisionNumber();
        }
        if ($data->isInitialized('subRiskClass') && null !== $data->getSubRiskClass()) {
            $dataArray['SubRiskClass'] = $data->getSubRiskClass();
        }
        if ($data->isInitialized('iDNumber') && null !== $data->getIDNumber()) {
            $dataArray['IDNumber'] = $data->getIDNumber();
        }
        if ($data->isInitialized('packagingGroupType') && null !== $data->getPackagingGroupType()) {
            $dataArray['PackagingGroupType'] = $data->getPackagingGroupType();
        }
        if ($data->isInitialized('quantity') && null !== $data->getQuantity()) {
            $dataArray['Quantity'] = $data->getQuantity();
        }
        if ($data->isInitialized('uOM') && null !== $data->getUOM()) {
            $dataArray['UOM'] = $data->getUOM();
        }
        if ($data->isInitialized('packagingInstructionCode') && null !== $data->getPackagingInstructionCode()) {
            $dataArray['PackagingInstructionCode'] = $data->getPackagingInstructionCode();
        }
        if ($data->isInitialized('properShippingName') && null !== $data->getProperShippingName()) {
            $dataArray['ProperShippingName'] = $data->getProperShippingName();
        }
        if ($data->isInitialized('technicalName') && null !== $data->getTechnicalName()) {
            $dataArray['TechnicalName'] = $data->getTechnicalName();
        }
        if ($data->isInitialized('additionalDescription') && null !== $data->getAdditionalDescription()) {
            $dataArray['AdditionalDescription'] = $data->getAdditionalDescription();
        }
        if ($data->isInitialized('packagingType') && null !== $data->getPackagingType()) {
            $dataArray['PackagingType'] = $data->getPackagingType();
        }
        if ($data->isInitialized('hazardLabelRequired') && null !== $data->getHazardLabelRequired()) {
            $dataArray['HazardLabelRequired'] = $data->getHazardLabelRequired();
        }
        if ($data->isInitialized('packagingTypeQuantity') && null !== $data->getPackagingTypeQuantity()) {
            $dataArray['PackagingTypeQuantity'] = $data->getPackagingTypeQuantity();
        }
        $dataArray['CommodityRegulatedLevelCode'] = $data->getCommodityRegulatedLevelCode();
        if ($data->isInitialized('transportCategory') && null !== $data->getTransportCategory()) {
            $dataArray['TransportCategory'] = $data->getTransportCategory();
        }
        if ($data->isInitialized('tunnelRestrictionCode') && null !== $data->getTunnelRestrictionCode()) {
            $dataArray['TunnelRestrictionCode'] = $data->getTunnelRestrictionCode();
        }
        if ($data->isInitialized('allPackedInOneIndicator') && null !== $data->getAllPackedInOneIndicator()) {
            $dataArray['AllPackedInOneIndicator'] = $data->getAllPackedInOneIndicator();
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
        return [\ShipStream\Ups\Api\Model\PackageChemicalRecord::class => false];
    }
}