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
class XAVRequestAddressKeyFormatNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \ShipStream\Ups\Api\Model\XAVRequestAddressKeyFormat::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \ShipStream\Ups\Api\Model\XAVRequestAddressKeyFormat::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \ShipStream\Ups\Api\Model\XAVRequestAddressKeyFormat();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('ConsigneeName', $data)) {
            $object->setConsigneeName($data['ConsigneeName']);
            unset($data['ConsigneeName']);
        }
        if (\array_key_exists('AttentionName', $data)) {
            $object->setAttentionName($data['AttentionName']);
            unset($data['AttentionName']);
        }
        if (\array_key_exists('AddressLine', $data)) {
            $values = [];
            foreach ($data['AddressLine'] as $value) {
                $values[] = $value;
            }
            $object->setAddressLine($values);
            unset($data['AddressLine']);
        }
        if (\array_key_exists('Region', $data)) {
            $object->setRegion($data['Region']);
            unset($data['Region']);
        }
        if (\array_key_exists('PoliticalDivision2', $data) && $data['PoliticalDivision2'] !== null) {
            $object->setPoliticalDivision2($data['PoliticalDivision2']);
            unset($data['PoliticalDivision2']);
        }
        elseif (\array_key_exists('PoliticalDivision2', $data) && $data['PoliticalDivision2'] === null) {
            $object->setPoliticalDivision2(null);
        }
        if (\array_key_exists('PoliticalDivision1', $data)) {
            $object->setPoliticalDivision1($data['PoliticalDivision1']);
            unset($data['PoliticalDivision1']);
        }
        if (\array_key_exists('PostcodePrimaryLow', $data)) {
            $object->setPostcodePrimaryLow($data['PostcodePrimaryLow']);
            unset($data['PostcodePrimaryLow']);
        }
        if (\array_key_exists('PostcodeExtendedLow', $data) && $data['PostcodeExtendedLow'] !== null) {
            $object->setPostcodeExtendedLow($data['PostcodeExtendedLow']);
            unset($data['PostcodeExtendedLow']);
        }
        elseif (\array_key_exists('PostcodeExtendedLow', $data) && $data['PostcodeExtendedLow'] === null) {
            $object->setPostcodeExtendedLow(null);
        }
        if (\array_key_exists('Urbanization', $data)) {
            $object->setUrbanization($data['Urbanization']);
            unset($data['Urbanization']);
        }
        if (\array_key_exists('CountryCode', $data)) {
            $object->setCountryCode($data['CountryCode']);
            unset($data['CountryCode']);
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
        if ($data->isInitialized('attentionName') && null !== $data->getAttentionName()) {
            $dataArray['AttentionName'] = $data->getAttentionName();
        }
        if ($data->isInitialized('addressLine') && null !== $data->getAddressLine()) {
            $values = [];
            foreach ($data->getAddressLine() as $value) {
                $values[] = $value;
            }
            $dataArray['AddressLine'] = $values;
        }
        if ($data->isInitialized('region') && null !== $data->getRegion()) {
            $dataArray['Region'] = $data->getRegion();
        }
        if ($data->isInitialized('politicalDivision2')) {
            $dataArray['PoliticalDivision2'] = $data->getPoliticalDivision2();
        }
        if ($data->isInitialized('politicalDivision1') && null !== $data->getPoliticalDivision1()) {
            $dataArray['PoliticalDivision1'] = $data->getPoliticalDivision1();
        }
        if ($data->isInitialized('postcodePrimaryLow') && null !== $data->getPostcodePrimaryLow()) {
            $dataArray['PostcodePrimaryLow'] = $data->getPostcodePrimaryLow();
        }
        if ($data->isInitialized('postcodeExtendedLow')) {
            $dataArray['PostcodeExtendedLow'] = $data->getPostcodeExtendedLow();
        }
        if ($data->isInitialized('urbanization') && null !== $data->getUrbanization()) {
            $dataArray['Urbanization'] = $data->getUrbanization();
        }
        $dataArray['CountryCode'] = $data->getCountryCode();
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_1;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\ShipStream\Ups\Api\Model\XAVRequestAddressKeyFormat::class => false];
    }
}