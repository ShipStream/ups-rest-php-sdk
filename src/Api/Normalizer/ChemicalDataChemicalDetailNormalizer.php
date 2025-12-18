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
class ChemicalDataChemicalDetailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \ShipStream\Ups\Api\Model\ChemicalDataChemicalDetail::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \ShipStream\Ups\Api\Model\ChemicalDataChemicalDetail::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
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
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('regulationSet') && null !== $data->getRegulationSet()) {
            $dataArray['RegulationSet'] = $data->getRegulationSet();
        }
        if ($data->isInitialized('iDNumber') && null !== $data->getIDNumber()) {
            $dataArray['IDNumber'] = $data->getIDNumber();
        }
        if ($data->isInitialized('hazardousMaterialsDescription') && null !== $data->getHazardousMaterialsDescription()) {
            $dataArray['HazardousMaterialsDescription'] = $data->getHazardousMaterialsDescription();
        }
        if ($data->isInitialized('classDivisionNumber') && null !== $data->getClassDivisionNumber()) {
            $dataArray['ClassDivisionNumber'] = $data->getClassDivisionNumber();
        }
        if ($data->isInitialized('subRiskClass') && null !== $data->getSubRiskClass()) {
            $dataArray['SubRiskClass'] = $data->getSubRiskClass();
        }
        if ($data->isInitialized('packagingGroupType') && null !== $data->getPackagingGroupType()) {
            $dataArray['PackagingGroupType'] = $data->getPackagingGroupType();
        }
        if ($data->isInitialized('specialPermit') && null !== $data->getSpecialPermit()) {
            $dataArray['SpecialPermit'] = $data->getSpecialPermit();
        }
        if ($data->isInitialized('technicalNameRequiredIndicator') && null !== $data->getTechnicalNameRequiredIndicator()) {
            $dataArray['TechnicalNameRequiredIndicator'] = $data->getTechnicalNameRequiredIndicator();
        }
        if ($data->isInitialized('additionalShippingInformationRequiredIndicator') && null !== $data->getAdditionalShippingInformationRequiredIndicator()) {
            $dataArray['AdditionalShippingInformationRequiredIndicator'] = $data->getAdditionalShippingInformationRequiredIndicator();
        }
        if ($data->isInitialized('tunnelRestrictionCode') && null !== $data->getTunnelRestrictionCode()) {
            $dataArray['TunnelRestrictionCode'] = $data->getTunnelRestrictionCode();
        }
        if ($data->isInitialized('transportCategory') && null !== $data->getTransportCategory()) {
            $dataArray['TransportCategory'] = $data->getTransportCategory();
        }
        if ($data->isInitialized('transportMultiplierQuantity') && null !== $data->getTransportMultiplierQuantity()) {
            $dataArray['TransportMultiplierQuantity'] = $data->getTransportMultiplierQuantity();
        }
        if ($data->isInitialized('channelTunnelAcceptedIndicator') && null !== $data->getChannelTunnelAcceptedIndicator()) {
            $dataArray['ChannelTunnelAcceptedIndicator'] = $data->getChannelTunnelAcceptedIndicator();
        }
        if ($data->isInitialized('chemicalType') && null !== $data->getChemicalType()) {
            $dataArray['ChemicalType'] = $data->getChemicalType();
        }
        if ($data->isInitialized('cAToUSShipmentAllowedIndicator') && null !== $data->getCAToUSShipmentAllowedIndicator()) {
            $dataArray['CAToUSShipmentAllowedIndicator'] = $data->getCAToUSShipmentAllowedIndicator();
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
        return [\ShipStream\Ups\Api\Model\ChemicalDataChemicalDetail::class => false];
    }
}