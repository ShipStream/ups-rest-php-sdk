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
    class ChemicalDataChemicalDetailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\ChemicalDataChemicalDetail';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\ChemicalDataChemicalDetail';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \ShipStream\Ups\Api\Model\ChemicalDataChemicalDetail();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('RegulationSet', $data) && $data['RegulationSet'] !== null) {
                $object->setRegulationSet($data['RegulationSet']);
                unset($data['RegulationSet']);
            }
            elseif (\array_key_exists('RegulationSet', $data) && $data['RegulationSet'] === null) {
                $object->setRegulationSet(null);
            }
            if (\array_key_exists('IDNumber', $data) && $data['IDNumber'] !== null) {
                $object->setIDNumber($data['IDNumber']);
                unset($data['IDNumber']);
            }
            elseif (\array_key_exists('IDNumber', $data) && $data['IDNumber'] === null) {
                $object->setIDNumber(null);
            }
            if (\array_key_exists('HazardousMaterialsDescription', $data) && $data['HazardousMaterialsDescription'] !== null) {
                $object->setHazardousMaterialsDescription($data['HazardousMaterialsDescription']);
                unset($data['HazardousMaterialsDescription']);
            }
            elseif (\array_key_exists('HazardousMaterialsDescription', $data) && $data['HazardousMaterialsDescription'] === null) {
                $object->setHazardousMaterialsDescription(null);
            }
            if (\array_key_exists('ClassDivisionNumber', $data) && $data['ClassDivisionNumber'] !== null) {
                $object->setClassDivisionNumber($data['ClassDivisionNumber']);
                unset($data['ClassDivisionNumber']);
            }
            elseif (\array_key_exists('ClassDivisionNumber', $data) && $data['ClassDivisionNumber'] === null) {
                $object->setClassDivisionNumber(null);
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
            if (\array_key_exists('SpecialPermit', $data) && $data['SpecialPermit'] !== null) {
                $object->setSpecialPermit($data['SpecialPermit']);
                unset($data['SpecialPermit']);
            }
            elseif (\array_key_exists('SpecialPermit', $data) && $data['SpecialPermit'] === null) {
                $object->setSpecialPermit(null);
            }
            if (\array_key_exists('TechnicalNameRequiredIndicator', $data) && $data['TechnicalNameRequiredIndicator'] !== null) {
                $object->setTechnicalNameRequiredIndicator($data['TechnicalNameRequiredIndicator']);
                unset($data['TechnicalNameRequiredIndicator']);
            }
            elseif (\array_key_exists('TechnicalNameRequiredIndicator', $data) && $data['TechnicalNameRequiredIndicator'] === null) {
                $object->setTechnicalNameRequiredIndicator(null);
            }
            if (\array_key_exists('AdditionalShippingInformationRequiredIndicator', $data) && $data['AdditionalShippingInformationRequiredIndicator'] !== null) {
                $object->setAdditionalShippingInformationRequiredIndicator($data['AdditionalShippingInformationRequiredIndicator']);
                unset($data['AdditionalShippingInformationRequiredIndicator']);
            }
            elseif (\array_key_exists('AdditionalShippingInformationRequiredIndicator', $data) && $data['AdditionalShippingInformationRequiredIndicator'] === null) {
                $object->setAdditionalShippingInformationRequiredIndicator(null);
            }
            if (\array_key_exists('TunnelRestrictionCode', $data) && $data['TunnelRestrictionCode'] !== null) {
                $object->setTunnelRestrictionCode($data['TunnelRestrictionCode']);
                unset($data['TunnelRestrictionCode']);
            }
            elseif (\array_key_exists('TunnelRestrictionCode', $data) && $data['TunnelRestrictionCode'] === null) {
                $object->setTunnelRestrictionCode(null);
            }
            if (\array_key_exists('TransportCategory', $data) && $data['TransportCategory'] !== null) {
                $object->setTransportCategory($data['TransportCategory']);
                unset($data['TransportCategory']);
            }
            elseif (\array_key_exists('TransportCategory', $data) && $data['TransportCategory'] === null) {
                $object->setTransportCategory(null);
            }
            if (\array_key_exists('TransportMultiplierQuantity', $data) && $data['TransportMultiplierQuantity'] !== null) {
                $object->setTransportMultiplierQuantity($data['TransportMultiplierQuantity']);
                unset($data['TransportMultiplierQuantity']);
            }
            elseif (\array_key_exists('TransportMultiplierQuantity', $data) && $data['TransportMultiplierQuantity'] === null) {
                $object->setTransportMultiplierQuantity(null);
            }
            if (\array_key_exists('ChannelTunnelAcceptedIndicator', $data) && $data['ChannelTunnelAcceptedIndicator'] !== null) {
                $object->setChannelTunnelAcceptedIndicator($data['ChannelTunnelAcceptedIndicator']);
                unset($data['ChannelTunnelAcceptedIndicator']);
            }
            elseif (\array_key_exists('ChannelTunnelAcceptedIndicator', $data) && $data['ChannelTunnelAcceptedIndicator'] === null) {
                $object->setChannelTunnelAcceptedIndicator(null);
            }
            if (\array_key_exists('ChemicalType', $data) && $data['ChemicalType'] !== null) {
                $object->setChemicalType($data['ChemicalType']);
                unset($data['ChemicalType']);
            }
            elseif (\array_key_exists('ChemicalType', $data) && $data['ChemicalType'] === null) {
                $object->setChemicalType(null);
            }
            if (\array_key_exists('CAToUSShipmentAllowedIndicator', $data) && $data['CAToUSShipmentAllowedIndicator'] !== null) {
                $object->setCAToUSShipmentAllowedIndicator($data['CAToUSShipmentAllowedIndicator']);
                unset($data['CAToUSShipmentAllowedIndicator']);
            }
            elseif (\array_key_exists('CAToUSShipmentAllowedIndicator', $data) && $data['CAToUSShipmentAllowedIndicator'] === null) {
                $object->setCAToUSShipmentAllowedIndicator(null);
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
            if ($object->isInitialized('regulationSet') && null !== $object->getRegulationSet()) {
                $data['RegulationSet'] = $object->getRegulationSet();
            }
            if ($object->isInitialized('iDNumber') && null !== $object->getIDNumber()) {
                $data['IDNumber'] = $object->getIDNumber();
            }
            if ($object->isInitialized('hazardousMaterialsDescription') && null !== $object->getHazardousMaterialsDescription()) {
                $data['HazardousMaterialsDescription'] = $object->getHazardousMaterialsDescription();
            }
            if ($object->isInitialized('classDivisionNumber') && null !== $object->getClassDivisionNumber()) {
                $data['ClassDivisionNumber'] = $object->getClassDivisionNumber();
            }
            if ($object->isInitialized('subRiskClass') && null !== $object->getSubRiskClass()) {
                $data['SubRiskClass'] = $object->getSubRiskClass();
            }
            if ($object->isInitialized('packagingGroupType') && null !== $object->getPackagingGroupType()) {
                $data['PackagingGroupType'] = $object->getPackagingGroupType();
            }
            if ($object->isInitialized('specialPermit') && null !== $object->getSpecialPermit()) {
                $data['SpecialPermit'] = $object->getSpecialPermit();
            }
            if ($object->isInitialized('technicalNameRequiredIndicator') && null !== $object->getTechnicalNameRequiredIndicator()) {
                $data['TechnicalNameRequiredIndicator'] = $object->getTechnicalNameRequiredIndicator();
            }
            if ($object->isInitialized('additionalShippingInformationRequiredIndicator') && null !== $object->getAdditionalShippingInformationRequiredIndicator()) {
                $data['AdditionalShippingInformationRequiredIndicator'] = $object->getAdditionalShippingInformationRequiredIndicator();
            }
            if ($object->isInitialized('tunnelRestrictionCode') && null !== $object->getTunnelRestrictionCode()) {
                $data['TunnelRestrictionCode'] = $object->getTunnelRestrictionCode();
            }
            if ($object->isInitialized('transportCategory') && null !== $object->getTransportCategory()) {
                $data['TransportCategory'] = $object->getTransportCategory();
            }
            if ($object->isInitialized('transportMultiplierQuantity') && null !== $object->getTransportMultiplierQuantity()) {
                $data['TransportMultiplierQuantity'] = $object->getTransportMultiplierQuantity();
            }
            if ($object->isInitialized('channelTunnelAcceptedIndicator') && null !== $object->getChannelTunnelAcceptedIndicator()) {
                $data['ChannelTunnelAcceptedIndicator'] = $object->getChannelTunnelAcceptedIndicator();
            }
            if ($object->isInitialized('chemicalType') && null !== $object->getChemicalType()) {
                $data['ChemicalType'] = $object->getChemicalType();
            }
            if ($object->isInitialized('cAToUSShipmentAllowedIndicator') && null !== $object->getCAToUSShipmentAllowedIndicator()) {
                $data['CAToUSShipmentAllowedIndicator'] = $object->getCAToUSShipmentAllowedIndicator();
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
            return ['ShipStream\\Ups\\Api\\Model\\ChemicalDataChemicalDetail' => false];
        }
    }
} else {
    class ChemicalDataChemicalDetailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\ChemicalDataChemicalDetail';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\ChemicalDataChemicalDetail';
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
            $object = new \ShipStream\Ups\Api\Model\ChemicalDataChemicalDetail();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('RegulationSet', $data) && $data['RegulationSet'] !== null) {
                $object->setRegulationSet($data['RegulationSet']);
                unset($data['RegulationSet']);
            }
            elseif (\array_key_exists('RegulationSet', $data) && $data['RegulationSet'] === null) {
                $object->setRegulationSet(null);
            }
            if (\array_key_exists('IDNumber', $data) && $data['IDNumber'] !== null) {
                $object->setIDNumber($data['IDNumber']);
                unset($data['IDNumber']);
            }
            elseif (\array_key_exists('IDNumber', $data) && $data['IDNumber'] === null) {
                $object->setIDNumber(null);
            }
            if (\array_key_exists('HazardousMaterialsDescription', $data) && $data['HazardousMaterialsDescription'] !== null) {
                $object->setHazardousMaterialsDescription($data['HazardousMaterialsDescription']);
                unset($data['HazardousMaterialsDescription']);
            }
            elseif (\array_key_exists('HazardousMaterialsDescription', $data) && $data['HazardousMaterialsDescription'] === null) {
                $object->setHazardousMaterialsDescription(null);
            }
            if (\array_key_exists('ClassDivisionNumber', $data) && $data['ClassDivisionNumber'] !== null) {
                $object->setClassDivisionNumber($data['ClassDivisionNumber']);
                unset($data['ClassDivisionNumber']);
            }
            elseif (\array_key_exists('ClassDivisionNumber', $data) && $data['ClassDivisionNumber'] === null) {
                $object->setClassDivisionNumber(null);
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
            if (\array_key_exists('SpecialPermit', $data) && $data['SpecialPermit'] !== null) {
                $object->setSpecialPermit($data['SpecialPermit']);
                unset($data['SpecialPermit']);
            }
            elseif (\array_key_exists('SpecialPermit', $data) && $data['SpecialPermit'] === null) {
                $object->setSpecialPermit(null);
            }
            if (\array_key_exists('TechnicalNameRequiredIndicator', $data) && $data['TechnicalNameRequiredIndicator'] !== null) {
                $object->setTechnicalNameRequiredIndicator($data['TechnicalNameRequiredIndicator']);
                unset($data['TechnicalNameRequiredIndicator']);
            }
            elseif (\array_key_exists('TechnicalNameRequiredIndicator', $data) && $data['TechnicalNameRequiredIndicator'] === null) {
                $object->setTechnicalNameRequiredIndicator(null);
            }
            if (\array_key_exists('AdditionalShippingInformationRequiredIndicator', $data) && $data['AdditionalShippingInformationRequiredIndicator'] !== null) {
                $object->setAdditionalShippingInformationRequiredIndicator($data['AdditionalShippingInformationRequiredIndicator']);
                unset($data['AdditionalShippingInformationRequiredIndicator']);
            }
            elseif (\array_key_exists('AdditionalShippingInformationRequiredIndicator', $data) && $data['AdditionalShippingInformationRequiredIndicator'] === null) {
                $object->setAdditionalShippingInformationRequiredIndicator(null);
            }
            if (\array_key_exists('TunnelRestrictionCode', $data) && $data['TunnelRestrictionCode'] !== null) {
                $object->setTunnelRestrictionCode($data['TunnelRestrictionCode']);
                unset($data['TunnelRestrictionCode']);
            }
            elseif (\array_key_exists('TunnelRestrictionCode', $data) && $data['TunnelRestrictionCode'] === null) {
                $object->setTunnelRestrictionCode(null);
            }
            if (\array_key_exists('TransportCategory', $data) && $data['TransportCategory'] !== null) {
                $object->setTransportCategory($data['TransportCategory']);
                unset($data['TransportCategory']);
            }
            elseif (\array_key_exists('TransportCategory', $data) && $data['TransportCategory'] === null) {
                $object->setTransportCategory(null);
            }
            if (\array_key_exists('TransportMultiplierQuantity', $data) && $data['TransportMultiplierQuantity'] !== null) {
                $object->setTransportMultiplierQuantity($data['TransportMultiplierQuantity']);
                unset($data['TransportMultiplierQuantity']);
            }
            elseif (\array_key_exists('TransportMultiplierQuantity', $data) && $data['TransportMultiplierQuantity'] === null) {
                $object->setTransportMultiplierQuantity(null);
            }
            if (\array_key_exists('ChannelTunnelAcceptedIndicator', $data) && $data['ChannelTunnelAcceptedIndicator'] !== null) {
                $object->setChannelTunnelAcceptedIndicator($data['ChannelTunnelAcceptedIndicator']);
                unset($data['ChannelTunnelAcceptedIndicator']);
            }
            elseif (\array_key_exists('ChannelTunnelAcceptedIndicator', $data) && $data['ChannelTunnelAcceptedIndicator'] === null) {
                $object->setChannelTunnelAcceptedIndicator(null);
            }
            if (\array_key_exists('ChemicalType', $data) && $data['ChemicalType'] !== null) {
                $object->setChemicalType($data['ChemicalType']);
                unset($data['ChemicalType']);
            }
            elseif (\array_key_exists('ChemicalType', $data) && $data['ChemicalType'] === null) {
                $object->setChemicalType(null);
            }
            if (\array_key_exists('CAToUSShipmentAllowedIndicator', $data) && $data['CAToUSShipmentAllowedIndicator'] !== null) {
                $object->setCAToUSShipmentAllowedIndicator($data['CAToUSShipmentAllowedIndicator']);
                unset($data['CAToUSShipmentAllowedIndicator']);
            }
            elseif (\array_key_exists('CAToUSShipmentAllowedIndicator', $data) && $data['CAToUSShipmentAllowedIndicator'] === null) {
                $object->setCAToUSShipmentAllowedIndicator(null);
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
            if ($object->isInitialized('regulationSet') && null !== $object->getRegulationSet()) {
                $data['RegulationSet'] = $object->getRegulationSet();
            }
            if ($object->isInitialized('iDNumber') && null !== $object->getIDNumber()) {
                $data['IDNumber'] = $object->getIDNumber();
            }
            if ($object->isInitialized('hazardousMaterialsDescription') && null !== $object->getHazardousMaterialsDescription()) {
                $data['HazardousMaterialsDescription'] = $object->getHazardousMaterialsDescription();
            }
            if ($object->isInitialized('classDivisionNumber') && null !== $object->getClassDivisionNumber()) {
                $data['ClassDivisionNumber'] = $object->getClassDivisionNumber();
            }
            if ($object->isInitialized('subRiskClass') && null !== $object->getSubRiskClass()) {
                $data['SubRiskClass'] = $object->getSubRiskClass();
            }
            if ($object->isInitialized('packagingGroupType') && null !== $object->getPackagingGroupType()) {
                $data['PackagingGroupType'] = $object->getPackagingGroupType();
            }
            if ($object->isInitialized('specialPermit') && null !== $object->getSpecialPermit()) {
                $data['SpecialPermit'] = $object->getSpecialPermit();
            }
            if ($object->isInitialized('technicalNameRequiredIndicator') && null !== $object->getTechnicalNameRequiredIndicator()) {
                $data['TechnicalNameRequiredIndicator'] = $object->getTechnicalNameRequiredIndicator();
            }
            if ($object->isInitialized('additionalShippingInformationRequiredIndicator') && null !== $object->getAdditionalShippingInformationRequiredIndicator()) {
                $data['AdditionalShippingInformationRequiredIndicator'] = $object->getAdditionalShippingInformationRequiredIndicator();
            }
            if ($object->isInitialized('tunnelRestrictionCode') && null !== $object->getTunnelRestrictionCode()) {
                $data['TunnelRestrictionCode'] = $object->getTunnelRestrictionCode();
            }
            if ($object->isInitialized('transportCategory') && null !== $object->getTransportCategory()) {
                $data['TransportCategory'] = $object->getTransportCategory();
            }
            if ($object->isInitialized('transportMultiplierQuantity') && null !== $object->getTransportMultiplierQuantity()) {
                $data['TransportMultiplierQuantity'] = $object->getTransportMultiplierQuantity();
            }
            if ($object->isInitialized('channelTunnelAcceptedIndicator') && null !== $object->getChannelTunnelAcceptedIndicator()) {
                $data['ChannelTunnelAcceptedIndicator'] = $object->getChannelTunnelAcceptedIndicator();
            }
            if ($object->isInitialized('chemicalType') && null !== $object->getChemicalType()) {
                $data['ChemicalType'] = $object->getChemicalType();
            }
            if ($object->isInitialized('cAToUSShipmentAllowedIndicator') && null !== $object->getCAToUSShipmentAllowedIndicator()) {
                $data['CAToUSShipmentAllowedIndicator'] = $object->getCAToUSShipmentAllowedIndicator();
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
            return ['ShipStream\\Ups\\Api\\Model\\ChemicalDataChemicalDetail' => false];
        }
    }
}