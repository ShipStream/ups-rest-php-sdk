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
            if (\array_key_exists('RegulationSet', $data)) {
                $object->setRegulationSet($data['RegulationSet']);
                unset($data['RegulationSet']);
            }
            if (\array_key_exists('IDNumber', $data)) {
                $object->setIDNumber($data['IDNumber']);
                unset($data['IDNumber']);
            }
            if (\array_key_exists('HazardousMaterialsDescription', $data)) {
                $object->setHazardousMaterialsDescription($data['HazardousMaterialsDescription']);
                unset($data['HazardousMaterialsDescription']);
            }
            if (\array_key_exists('ClassDivisionNumber', $data)) {
                $object->setClassDivisionNumber($data['ClassDivisionNumber']);
                unset($data['ClassDivisionNumber']);
            }
            if (\array_key_exists('SubRiskClass', $data)) {
                $object->setSubRiskClass($data['SubRiskClass']);
                unset($data['SubRiskClass']);
            }
            if (\array_key_exists('PackagingGroupType', $data)) {
                $object->setPackagingGroupType($data['PackagingGroupType']);
                unset($data['PackagingGroupType']);
            }
            if (\array_key_exists('SpecialPermit', $data)) {
                $object->setSpecialPermit($data['SpecialPermit']);
                unset($data['SpecialPermit']);
            }
            if (\array_key_exists('TechnicalNameRequiredIndicator', $data)) {
                $object->setTechnicalNameRequiredIndicator($data['TechnicalNameRequiredIndicator']);
                unset($data['TechnicalNameRequiredIndicator']);
            }
            if (\array_key_exists('AdditionalShippingInformationRequiredIndicator', $data)) {
                $object->setAdditionalShippingInformationRequiredIndicator($data['AdditionalShippingInformationRequiredIndicator']);
                unset($data['AdditionalShippingInformationRequiredIndicator']);
            }
            if (\array_key_exists('TunnelRestrictionCode', $data)) {
                $object->setTunnelRestrictionCode($data['TunnelRestrictionCode']);
                unset($data['TunnelRestrictionCode']);
            }
            if (\array_key_exists('TransportCategory', $data)) {
                $object->setTransportCategory($data['TransportCategory']);
                unset($data['TransportCategory']);
            }
            if (\array_key_exists('TransportMultiplierQuantity', $data)) {
                $object->setTransportMultiplierQuantity($data['TransportMultiplierQuantity']);
                unset($data['TransportMultiplierQuantity']);
            }
            if (\array_key_exists('ChannelTunnelAcceptedIndicator', $data)) {
                $object->setChannelTunnelAcceptedIndicator($data['ChannelTunnelAcceptedIndicator']);
                unset($data['ChannelTunnelAcceptedIndicator']);
            }
            if (\array_key_exists('ChemicalType', $data)) {
                $object->setChemicalType($data['ChemicalType']);
                unset($data['ChemicalType']);
            }
            if (\array_key_exists('CAToUSShipmentAllowedIndicator', $data)) {
                $object->setCAToUSShipmentAllowedIndicator($data['CAToUSShipmentAllowedIndicator']);
                unset($data['CAToUSShipmentAllowedIndicator']);
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
            if (\array_key_exists('RegulationSet', $data)) {
                $object->setRegulationSet($data['RegulationSet']);
                unset($data['RegulationSet']);
            }
            if (\array_key_exists('IDNumber', $data)) {
                $object->setIDNumber($data['IDNumber']);
                unset($data['IDNumber']);
            }
            if (\array_key_exists('HazardousMaterialsDescription', $data)) {
                $object->setHazardousMaterialsDescription($data['HazardousMaterialsDescription']);
                unset($data['HazardousMaterialsDescription']);
            }
            if (\array_key_exists('ClassDivisionNumber', $data)) {
                $object->setClassDivisionNumber($data['ClassDivisionNumber']);
                unset($data['ClassDivisionNumber']);
            }
            if (\array_key_exists('SubRiskClass', $data)) {
                $object->setSubRiskClass($data['SubRiskClass']);
                unset($data['SubRiskClass']);
            }
            if (\array_key_exists('PackagingGroupType', $data)) {
                $object->setPackagingGroupType($data['PackagingGroupType']);
                unset($data['PackagingGroupType']);
            }
            if (\array_key_exists('SpecialPermit', $data)) {
                $object->setSpecialPermit($data['SpecialPermit']);
                unset($data['SpecialPermit']);
            }
            if (\array_key_exists('TechnicalNameRequiredIndicator', $data)) {
                $object->setTechnicalNameRequiredIndicator($data['TechnicalNameRequiredIndicator']);
                unset($data['TechnicalNameRequiredIndicator']);
            }
            if (\array_key_exists('AdditionalShippingInformationRequiredIndicator', $data)) {
                $object->setAdditionalShippingInformationRequiredIndicator($data['AdditionalShippingInformationRequiredIndicator']);
                unset($data['AdditionalShippingInformationRequiredIndicator']);
            }
            if (\array_key_exists('TunnelRestrictionCode', $data)) {
                $object->setTunnelRestrictionCode($data['TunnelRestrictionCode']);
                unset($data['TunnelRestrictionCode']);
            }
            if (\array_key_exists('TransportCategory', $data)) {
                $object->setTransportCategory($data['TransportCategory']);
                unset($data['TransportCategory']);
            }
            if (\array_key_exists('TransportMultiplierQuantity', $data)) {
                $object->setTransportMultiplierQuantity($data['TransportMultiplierQuantity']);
                unset($data['TransportMultiplierQuantity']);
            }
            if (\array_key_exists('ChannelTunnelAcceptedIndicator', $data)) {
                $object->setChannelTunnelAcceptedIndicator($data['ChannelTunnelAcceptedIndicator']);
                unset($data['ChannelTunnelAcceptedIndicator']);
            }
            if (\array_key_exists('ChemicalType', $data)) {
                $object->setChemicalType($data['ChemicalType']);
                unset($data['ChemicalType']);
            }
            if (\array_key_exists('CAToUSShipmentAllowedIndicator', $data)) {
                $object->setCAToUSShipmentAllowedIndicator($data['CAToUSShipmentAllowedIndicator']);
                unset($data['CAToUSShipmentAllowedIndicator']);
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