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
class DeliveryLocationAddressArtifactFormatNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = []) : bool
    {
        return $type === 'ShipStream\\Ups\\Api\\Model\\DeliveryLocationAddressArtifactFormat';
    }
    public function supportsNormalization($data, $format = null, array $context = []) : bool
    {
        return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\DeliveryLocationAddressArtifactFormat';
    }
    /**
     * @return mixed
     */
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
                $values[] = $this->denormalizer->denormalize($value, 'ShipStream\\Ups\\Api\\Model\\AddressArtifactFormatAddressExtendedInformation', 'json', $context);
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
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize(mixed $object, ?string $format = null, array $context = []): \ArrayObject|array|string|int|float|bool|null
    {
        $data = [];
        if ($object->isInitialized('consigneeName') && null !== $object->getConsigneeName()) {
            $data['ConsigneeName'] = $object->getConsigneeName();
        }
        if ($object->isInitialized('streetNumberLow') && null !== $object->getStreetNumberLow()) {
            $data['StreetNumberLow'] = $object->getStreetNumberLow();
        }
        if ($object->isInitialized('streetPrefix') && null !== $object->getStreetPrefix()) {
            $data['StreetPrefix'] = $object->getStreetPrefix();
        }
        if ($object->isInitialized('streetName') && null !== $object->getStreetName()) {
            $data['StreetName'] = $object->getStreetName();
        }
        if ($object->isInitialized('streetType') && null !== $object->getStreetType()) {
            $data['StreetType'] = $object->getStreetType();
        }
        if ($object->isInitialized('streetSuffix') && null !== $object->getStreetSuffix()) {
            $data['StreetSuffix'] = $object->getStreetSuffix();
        }
        if ($object->isInitialized('buildingName') && null !== $object->getBuildingName()) {
            $data['BuildingName'] = $object->getBuildingName();
        }
        if ($object->isInitialized('addressExtendedInformation') && null !== $object->getAddressExtendedInformation()) {
            $values = [];
            foreach ($object->getAddressExtendedInformation() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['AddressExtendedInformation'] = $values;
        }
        if ($object->isInitialized('politicalDivision3') && null !== $object->getPoliticalDivision3()) {
            $data['PoliticalDivision3'] = $object->getPoliticalDivision3();
        }
        if ($object->isInitialized('politicalDivision2') && null !== $object->getPoliticalDivision2()) {
            $data['PoliticalDivision2'] = $object->getPoliticalDivision2();
        }
        if ($object->isInitialized('politicalDivision1') && null !== $object->getPoliticalDivision1()) {
            $data['PoliticalDivision1'] = $object->getPoliticalDivision1();
        }
        if ($object->isInitialized('countryCode') && null !== $object->getCountryCode()) {
            $data['CountryCode'] = $object->getCountryCode();
        }
        if ($object->isInitialized('postcodePrimaryLow') && null !== $object->getPostcodePrimaryLow()) {
            $data['PostcodePrimaryLow'] = $object->getPostcodePrimaryLow();
        }
        if ($object->isInitialized('postcodeExtendedLow') && null !== $object->getPostcodeExtendedLow()) {
            $data['PostcodeExtendedLow'] = $object->getPostcodeExtendedLow();
        }
        $data['ResidentialAddressIndicator'] = $object->getResidentialAddressIndicator();
        foreach ($object as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value_1;
            }
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('ShipStream\\Ups\\Api\\Model\\DeliveryLocationAddressArtifactFormat' => false);
    }
}