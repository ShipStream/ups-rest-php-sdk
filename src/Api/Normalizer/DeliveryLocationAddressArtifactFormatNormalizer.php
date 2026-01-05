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
class DeliveryLocationAddressArtifactFormatNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \ShipStream\Ups\Api\Model\DeliveryLocationAddressArtifactFormat::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \ShipStream\Ups\Api\Model\DeliveryLocationAddressArtifactFormat::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \ShipStream\Ups\Api\Model\DeliveryLocationAddressArtifactFormat();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('ConsigneeName', $data)) {
            $object->setConsigneeName($data['ConsigneeName']);
            unset($data['ConsigneeName']);
        }
        if (\array_key_exists('StreetNumberLow', $data)) {
            $object->setStreetNumberLow($data['StreetNumberLow']);
            unset($data['StreetNumberLow']);
        }
        if (\array_key_exists('StreetPrefix', $data)) {
            $object->setStreetPrefix($data['StreetPrefix']);
            unset($data['StreetPrefix']);
        }
        if (\array_key_exists('StreetName', $data)) {
            $object->setStreetName($data['StreetName']);
            unset($data['StreetName']);
        }
        if (\array_key_exists('StreetType', $data)) {
            $object->setStreetType($data['StreetType']);
            unset($data['StreetType']);
        }
        if (\array_key_exists('StreetSuffix', $data)) {
            $object->setStreetSuffix($data['StreetSuffix']);
            unset($data['StreetSuffix']);
        }
        if (\array_key_exists('BuildingName', $data)) {
            $object->setBuildingName($data['BuildingName']);
            unset($data['BuildingName']);
        }
        if (\array_key_exists('AddressExtendedInformation', $data)) {
            $values = [];
            foreach ($data['AddressExtendedInformation'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \ShipStream\Ups\Api\Model\AddressArtifactFormatAddressExtendedInformation::class, 'json', $context);
            }
            $object->setAddressExtendedInformation($values);
            unset($data['AddressExtendedInformation']);
        }
        if (\array_key_exists('PoliticalDivision3', $data)) {
            $object->setPoliticalDivision3($data['PoliticalDivision3']);
            unset($data['PoliticalDivision3']);
        }
        if (\array_key_exists('PoliticalDivision2', $data)) {
            $object->setPoliticalDivision2($data['PoliticalDivision2']);
            unset($data['PoliticalDivision2']);
        }
        if (\array_key_exists('PoliticalDivision1', $data)) {
            $object->setPoliticalDivision1($data['PoliticalDivision1']);
            unset($data['PoliticalDivision1']);
        }
        if (\array_key_exists('CountryCode', $data)) {
            $object->setCountryCode($data['CountryCode']);
            unset($data['CountryCode']);
        }
        if (\array_key_exists('PostcodePrimaryLow', $data)) {
            $object->setPostcodePrimaryLow($data['PostcodePrimaryLow']);
            unset($data['PostcodePrimaryLow']);
        }
        if (\array_key_exists('PostcodeExtendedLow', $data)) {
            $object->setPostcodeExtendedLow($data['PostcodeExtendedLow']);
            unset($data['PostcodeExtendedLow']);
        }
        if (\array_key_exists('ResidentialAddressIndicator', $data)) {
            $object->setResidentialAddressIndicator($data['ResidentialAddressIndicator']);
            unset($data['ResidentialAddressIndicator']);
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_1;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('consigneeName') && null !== $data->getConsigneeName()) {
            $dataArray['ConsigneeName'] = $data->getConsigneeName();
        }
        if ($data->isInitialized('streetNumberLow') && null !== $data->getStreetNumberLow()) {
            $dataArray['StreetNumberLow'] = $data->getStreetNumberLow();
        }
        if ($data->isInitialized('streetPrefix') && null !== $data->getStreetPrefix()) {
            $dataArray['StreetPrefix'] = $data->getStreetPrefix();
        }
        if ($data->isInitialized('streetName') && null !== $data->getStreetName()) {
            $dataArray['StreetName'] = $data->getStreetName();
        }
        if ($data->isInitialized('streetType') && null !== $data->getStreetType()) {
            $dataArray['StreetType'] = $data->getStreetType();
        }
        if ($data->isInitialized('streetSuffix') && null !== $data->getStreetSuffix()) {
            $dataArray['StreetSuffix'] = $data->getStreetSuffix();
        }
        if ($data->isInitialized('buildingName') && null !== $data->getBuildingName()) {
            $dataArray['BuildingName'] = $data->getBuildingName();
        }
        if ($data->isInitialized('addressExtendedInformation') && null !== $data->getAddressExtendedInformation()) {
            $values = [];
            foreach ($data->getAddressExtendedInformation() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['AddressExtendedInformation'] = $values;
        }
        if ($data->isInitialized('politicalDivision3') && null !== $data->getPoliticalDivision3()) {
            $dataArray['PoliticalDivision3'] = $data->getPoliticalDivision3();
        }
        if ($data->isInitialized('politicalDivision2') && null !== $data->getPoliticalDivision2()) {
            $dataArray['PoliticalDivision2'] = $data->getPoliticalDivision2();
        }
        if ($data->isInitialized('politicalDivision1') && null !== $data->getPoliticalDivision1()) {
            $dataArray['PoliticalDivision1'] = $data->getPoliticalDivision1();
        }
        if ($data->isInitialized('countryCode') && null !== $data->getCountryCode()) {
            $dataArray['CountryCode'] = $data->getCountryCode();
        }
        if ($data->isInitialized('postcodePrimaryLow') && null !== $data->getPostcodePrimaryLow()) {
            $dataArray['PostcodePrimaryLow'] = $data->getPostcodePrimaryLow();
        }
        if ($data->isInitialized('postcodeExtendedLow') && null !== $data->getPostcodeExtendedLow()) {
            $dataArray['PostcodeExtendedLow'] = $data->getPostcodeExtendedLow();
        }
        $dataArray['ResidentialAddressIndicator'] = $data->getResidentialAddressIndicator();
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_1;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\ShipStream\Ups\Api\Model\DeliveryLocationAddressArtifactFormat::class => false];
    }
}