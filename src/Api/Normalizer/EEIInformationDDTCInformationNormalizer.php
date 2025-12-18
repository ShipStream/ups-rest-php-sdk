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
class EEIInformationDDTCInformationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \ShipStream\Ups\Api\Model\EEIInformationDDTCInformation::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \ShipStream\Ups\Api\Model\EEIInformationDDTCInformation::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \ShipStream\Ups\Api\Model\EEIInformationDDTCInformation();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('ITARExemptionNumber', $data)) {
            $object->setITARExemptionNumber($data['ITARExemptionNumber']);
            unset($data['ITARExemptionNumber']);
        }
        if (\array_key_exists('USMLCategoryCode', $data)) {
            $object->setUSMLCategoryCode($data['USMLCategoryCode']);
            unset($data['USMLCategoryCode']);
        }
        if (\array_key_exists('EligiblePartyIndicator', $data)) {
            $object->setEligiblePartyIndicator($data['EligiblePartyIndicator']);
            unset($data['EligiblePartyIndicator']);
        }
        if (\array_key_exists('RegistrationNumber', $data)) {
            $object->setRegistrationNumber($data['RegistrationNumber']);
            unset($data['RegistrationNumber']);
        }
        if (\array_key_exists('Quantity', $data)) {
            $object->setQuantity($data['Quantity']);
            unset($data['Quantity']);
        }
        if (\array_key_exists('UnitOfMeasurement', $data)) {
            $object->setUnitOfMeasurement($this->denormalizer->denormalize($data['UnitOfMeasurement'], \ShipStream\Ups\Api\Model\DDTCInformationUnitOfMeasurement::class, 'json', $context));
            unset($data['UnitOfMeasurement']);
        }
        if (\array_key_exists('SignificantMilitaryEquipmentIndicator', $data)) {
            $object->setSignificantMilitaryEquipmentIndicator($data['SignificantMilitaryEquipmentIndicator']);
            unset($data['SignificantMilitaryEquipmentIndicator']);
        }
        if (\array_key_exists('ACMNumber', $data)) {
            $object->setACMNumber($data['ACMNumber']);
            unset($data['ACMNumber']);
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
        if ($data->isInitialized('iTARExemptionNumber') && null !== $data->getITARExemptionNumber()) {
            $dataArray['ITARExemptionNumber'] = $data->getITARExemptionNumber();
        }
        if ($data->isInitialized('uSMLCategoryCode') && null !== $data->getUSMLCategoryCode()) {
            $dataArray['USMLCategoryCode'] = $data->getUSMLCategoryCode();
        }
        if ($data->isInitialized('eligiblePartyIndicator') && null !== $data->getEligiblePartyIndicator()) {
            $dataArray['EligiblePartyIndicator'] = $data->getEligiblePartyIndicator();
        }
        if ($data->isInitialized('registrationNumber') && null !== $data->getRegistrationNumber()) {
            $dataArray['RegistrationNumber'] = $data->getRegistrationNumber();
        }
        if ($data->isInitialized('quantity') && null !== $data->getQuantity()) {
            $dataArray['Quantity'] = $data->getQuantity();
        }
        if ($data->isInitialized('unitOfMeasurement') && null !== $data->getUnitOfMeasurement()) {
            $dataArray['UnitOfMeasurement'] = $this->normalizer->normalize($data->getUnitOfMeasurement(), 'json', $context);
        }
        if ($data->isInitialized('significantMilitaryEquipmentIndicator') && null !== $data->getSignificantMilitaryEquipmentIndicator()) {
            $dataArray['SignificantMilitaryEquipmentIndicator'] = $data->getSignificantMilitaryEquipmentIndicator();
        }
        if ($data->isInitialized('aCMNumber') && null !== $data->getACMNumber()) {
            $dataArray['ACMNumber'] = $data->getACMNumber();
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
        return [\ShipStream\Ups\Api\Model\EEIInformationDDTCInformation::class => false];
    }
}