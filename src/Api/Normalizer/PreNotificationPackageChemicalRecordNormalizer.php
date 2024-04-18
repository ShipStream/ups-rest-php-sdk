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
            if (\array_key_exists('EmergencyPhone', $data)) {
                $object->setEmergencyPhone($data['EmergencyPhone']);
                unset($data['EmergencyPhone']);
            }
            if (\array_key_exists('EmergencyContact', $data)) {
                $object->setEmergencyContact($data['EmergencyContact']);
                unset($data['EmergencyContact']);
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
            if (\array_key_exists('QValue', $data)) {
                $object->setQValue($data['QValue']);
                unset($data['QValue']);
            }
            if (\array_key_exists('OverPackedIndicator', $data)) {
                $object->setOverPackedIndicator($data['OverPackedIndicator']);
                unset($data['OverPackedIndicator']);
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
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('reportableQuantity') && null !== $object->getReportableQuantity()) {
                $data['ReportableQuantity'] = $object->getReportableQuantity();
            }
            if ($object->isInitialized('classDivisionNumber') && null !== $object->getClassDivisionNumber()) {
                $data['ClassDivisionNumber'] = $object->getClassDivisionNumber();
            }
            if ($object->isInitialized('subRiskClass') && null !== $object->getSubRiskClass()) {
                $data['SubRiskClass'] = $object->getSubRiskClass();
            }
            if ($object->isInitialized('iDNumber') && null !== $object->getIDNumber()) {
                $data['IDNumber'] = $object->getIDNumber();
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
            if ($object->isInitialized('emergencyPhone') && null !== $object->getEmergencyPhone()) {
                $data['EmergencyPhone'] = $object->getEmergencyPhone();
            }
            if ($object->isInitialized('emergencyContact') && null !== $object->getEmergencyContact()) {
                $data['EmergencyContact'] = $object->getEmergencyContact();
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
            $data['CommodityRegulatedLevelCode'] = $object->getCommodityRegulatedLevelCode();
            if ($object->isInitialized('transportCategory') && null !== $object->getTransportCategory()) {
                $data['TransportCategory'] = $object->getTransportCategory();
            }
            if ($object->isInitialized('tunnelRestrictionCode') && null !== $object->getTunnelRestrictionCode()) {
                $data['TunnelRestrictionCode'] = $object->getTunnelRestrictionCode();
            }
            if ($object->isInitialized('qValue') && null !== $object->getQValue()) {
                $data['QValue'] = $object->getQValue();
            }
            if ($object->isInitialized('overPackedIndicator') && null !== $object->getOverPackedIndicator()) {
                $data['OverPackedIndicator'] = $object->getOverPackedIndicator();
            }
            if ($object->isInitialized('allPackedInOneIndicator') && null !== $object->getAllPackedInOneIndicator()) {
                $data['AllPackedInOneIndicator'] = $object->getAllPackedInOneIndicator();
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
            if (\array_key_exists('EmergencyPhone', $data)) {
                $object->setEmergencyPhone($data['EmergencyPhone']);
                unset($data['EmergencyPhone']);
            }
            if (\array_key_exists('EmergencyContact', $data)) {
                $object->setEmergencyContact($data['EmergencyContact']);
                unset($data['EmergencyContact']);
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
            if (\array_key_exists('QValue', $data)) {
                $object->setQValue($data['QValue']);
                unset($data['QValue']);
            }
            if (\array_key_exists('OverPackedIndicator', $data)) {
                $object->setOverPackedIndicator($data['OverPackedIndicator']);
                unset($data['OverPackedIndicator']);
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
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('reportableQuantity') && null !== $object->getReportableQuantity()) {
                $data['ReportableQuantity'] = $object->getReportableQuantity();
            }
            if ($object->isInitialized('classDivisionNumber') && null !== $object->getClassDivisionNumber()) {
                $data['ClassDivisionNumber'] = $object->getClassDivisionNumber();
            }
            if ($object->isInitialized('subRiskClass') && null !== $object->getSubRiskClass()) {
                $data['SubRiskClass'] = $object->getSubRiskClass();
            }
            if ($object->isInitialized('iDNumber') && null !== $object->getIDNumber()) {
                $data['IDNumber'] = $object->getIDNumber();
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
            if ($object->isInitialized('emergencyPhone') && null !== $object->getEmergencyPhone()) {
                $data['EmergencyPhone'] = $object->getEmergencyPhone();
            }
            if ($object->isInitialized('emergencyContact') && null !== $object->getEmergencyContact()) {
                $data['EmergencyContact'] = $object->getEmergencyContact();
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
            $data['CommodityRegulatedLevelCode'] = $object->getCommodityRegulatedLevelCode();
            if ($object->isInitialized('transportCategory') && null !== $object->getTransportCategory()) {
                $data['TransportCategory'] = $object->getTransportCategory();
            }
            if ($object->isInitialized('tunnelRestrictionCode') && null !== $object->getTunnelRestrictionCode()) {
                $data['TunnelRestrictionCode'] = $object->getTunnelRestrictionCode();
            }
            if ($object->isInitialized('qValue') && null !== $object->getQValue()) {
                $data['QValue'] = $object->getQValue();
            }
            if ($object->isInitialized('overPackedIndicator') && null !== $object->getOverPackedIndicator()) {
                $data['OverPackedIndicator'] = $object->getOverPackedIndicator();
            }
            if ($object->isInitialized('allPackedInOneIndicator') && null !== $object->getAllPackedInOneIndicator()) {
                $data['AllPackedInOneIndicator'] = $object->getAllPackedInOneIndicator();
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