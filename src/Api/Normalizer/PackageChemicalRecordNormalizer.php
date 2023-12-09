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
class PackageChemicalRecordNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'ShipStream\\Ups\\Api\\Model\\PackageChemicalRecord';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\PackageChemicalRecord';
    }
    /**
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = array())
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
        if (\array_key_exists('ChemicalRecord_ReportableQuantity', $data)) {
            $object->setChemicalRecordReportableQuantity($data['ChemicalRecord_ReportableQuantity']);
            unset($data['ChemicalRecord_ReportableQuantity']);
        }
        if (\array_key_exists('ChemicalRecord_ClassDivisionNumber', $data)) {
            $object->setChemicalRecordClassDivisionNumber($data['ChemicalRecord_ClassDivisionNumber']);
            unset($data['ChemicalRecord_ClassDivisionNumber']);
        }
        if (\array_key_exists('ChemicalRecord_SubRiskClass', $data)) {
            $object->setChemicalRecordSubRiskClass($data['ChemicalRecord_SubRiskClass']);
            unset($data['ChemicalRecord_SubRiskClass']);
        }
        if (\array_key_exists('ChemicalRecord_IDNumber', $data)) {
            $object->setChemicalRecordIDNumber($data['ChemicalRecord_IDNumber']);
            unset($data['ChemicalRecord_IDNumber']);
        }
        if (\array_key_exists('ChemicalRecord_PackagingGroupType', $data)) {
            $object->setChemicalRecordPackagingGroupType($data['ChemicalRecord_PackagingGroupType']);
            unset($data['ChemicalRecord_PackagingGroupType']);
        }
        if (\array_key_exists('ChemicalRecord_Quantity', $data)) {
            $object->setChemicalRecordQuantity($data['ChemicalRecord_Quantity']);
            unset($data['ChemicalRecord_Quantity']);
        }
        if (\array_key_exists('ChemicalRecord_UOM', $data)) {
            $object->setChemicalRecordUOM($data['ChemicalRecord_UOM']);
            unset($data['ChemicalRecord_UOM']);
        }
        if (\array_key_exists('ChemicalRecord_PackagingInstructionCode', $data)) {
            $object->setChemicalRecordPackagingInstructionCode($data['ChemicalRecord_PackagingInstructionCode']);
            unset($data['ChemicalRecord_PackagingInstructionCode']);
        }
        if (\array_key_exists('ChemicalRecord_EmergencyPhone', $data)) {
            $object->setChemicalRecordEmergencyPhone($data['ChemicalRecord_EmergencyPhone']);
            unset($data['ChemicalRecord_EmergencyPhone']);
        }
        if (\array_key_exists('ChemicalRecord_EmergencyContact', $data)) {
            $object->setChemicalRecordEmergencyContact($data['ChemicalRecord_EmergencyContact']);
            unset($data['ChemicalRecord_EmergencyContact']);
        }
        if (\array_key_exists('ChemicalRecord_ProperShippingName', $data)) {
            $object->setChemicalRecordProperShippingName($data['ChemicalRecord_ProperShippingName']);
            unset($data['ChemicalRecord_ProperShippingName']);
        }
        if (\array_key_exists('ChemicalRecord_TechnicalName', $data)) {
            $object->setChemicalRecordTechnicalName($data['ChemicalRecord_TechnicalName']);
            unset($data['ChemicalRecord_TechnicalName']);
        }
        if (\array_key_exists('ChemicalRecord_AdditionalDescription', $data)) {
            $object->setChemicalRecordAdditionalDescription($data['ChemicalRecord_AdditionalDescription']);
            unset($data['ChemicalRecord_AdditionalDescription']);
        }
        if (\array_key_exists('ChemicalRecord_PackagingType', $data)) {
            $object->setChemicalRecordPackagingType($data['ChemicalRecord_PackagingType']);
            unset($data['ChemicalRecord_PackagingType']);
        }
        if (\array_key_exists('ChemicalRecord_HazardLabelRequired', $data)) {
            $object->setChemicalRecordHazardLabelRequired($data['ChemicalRecord_HazardLabelRequired']);
            unset($data['ChemicalRecord_HazardLabelRequired']);
        }
        if (\array_key_exists('ChemicalRecord_PackagingTypeQuantity', $data)) {
            $object->setChemicalRecordPackagingTypeQuantity($data['ChemicalRecord_PackagingTypeQuantity']);
            unset($data['ChemicalRecord_PackagingTypeQuantity']);
        }
        if (\array_key_exists('ChemicalRecord_CommodityRegulatedLevelCode', $data)) {
            $object->setChemicalRecordCommodityRegulatedLevelCode($data['ChemicalRecord_CommodityRegulatedLevelCode']);
            unset($data['ChemicalRecord_CommodityRegulatedLevelCode']);
        }
        if (\array_key_exists('ChemicalRecord_TransportCategory', $data)) {
            $object->setChemicalRecordTransportCategory($data['ChemicalRecord_TransportCategory']);
            unset($data['ChemicalRecord_TransportCategory']);
        }
        if (\array_key_exists('ChemicalRecord_TunnelRestrictionCode', $data)) {
            $object->setChemicalRecordTunnelRestrictionCode($data['ChemicalRecord_TunnelRestrictionCode']);
            unset($data['ChemicalRecord_TunnelRestrictionCode']);
        }
        if (\array_key_exists('ChemicalRecord_QValue', $data)) {
            $object->setChemicalRecordQValue($data['ChemicalRecord_QValue']);
            unset($data['ChemicalRecord_QValue']);
        }
        if (\array_key_exists('ChemicalRecord_OverPackedIndicator', $data)) {
            $object->setChemicalRecordOverPackedIndicator($data['ChemicalRecord_OverPackedIndicator']);
            unset($data['ChemicalRecord_OverPackedIndicator']);
        }
        if (\array_key_exists('ChemicalRecord_AllPackedInOneIndicator', $data)) {
            $object->setChemicalRecordAllPackedInOneIndicator($data['ChemicalRecord_AllPackedInOneIndicator']);
            unset($data['ChemicalRecord_AllPackedInOneIndicator']);
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
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
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
        return array('ShipStream\\Ups\\Api\\Model\\PackageChemicalRecord' => false);
    }
}