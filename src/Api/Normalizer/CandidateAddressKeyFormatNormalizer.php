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
class CandidateAddressKeyFormatNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \ShipStream\Ups\Api\Model\CandidateAddressKeyFormat::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \ShipStream\Ups\Api\Model\CandidateAddressKeyFormat::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \ShipStream\Ups\Api\Model\CandidateAddressKeyFormat();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('ConsigneeName', $data) && $data['ConsigneeName'] !== null) {
            $object->setConsigneeName($data['ConsigneeName']);
            unset($data['ConsigneeName']);
        }
        elseif (\array_key_exists('ConsigneeName', $data) && $data['ConsigneeName'] === null) {
            $object->setConsigneeName(null);
        }
        if (\array_key_exists('AttentionName', $data) && $data['AttentionName'] !== null) {
            $object->setAttentionName($data['AttentionName']);
            unset($data['AttentionName']);
        }
        elseif (\array_key_exists('AttentionName', $data) && $data['AttentionName'] === null) {
            $object->setAttentionName(null);
        }
        if (\array_key_exists('AddressLine', $data) && $data['AddressLine'] !== null) {
            $values = [];
            foreach ($data['AddressLine'] as $value) {
                $values[] = $value;
            }
            $object->setAddressLine($values);
            unset($data['AddressLine']);
        }
        elseif (\array_key_exists('AddressLine', $data) && $data['AddressLine'] === null) {
            $object->setAddressLine(null);
        }
        if (\array_key_exists('Region', $data) && $data['Region'] !== null) {
            $object->setRegion($data['Region']);
            unset($data['Region']);
        }
        elseif (\array_key_exists('Region', $data) && $data['Region'] === null) {
            $object->setRegion(null);
        }
        if (\array_key_exists('PoliticalDivision2', $data) && $data['PoliticalDivision2'] !== null) {
            $object->setPoliticalDivision2($data['PoliticalDivision2']);
            unset($data['PoliticalDivision2']);
        }
        elseif (\array_key_exists('PoliticalDivision2', $data) && $data['PoliticalDivision2'] === null) {
            $object->setPoliticalDivision2(null);
        }
        if (\array_key_exists('PoliticalDivision1', $data) && $data['PoliticalDivision1'] !== null) {
            $object->setPoliticalDivision1($data['PoliticalDivision1']);
            unset($data['PoliticalDivision1']);
        }
        elseif (\array_key_exists('PoliticalDivision1', $data) && $data['PoliticalDivision1'] === null) {
            $object->setPoliticalDivision1(null);
        }
        if (\array_key_exists('PostcodePrimaryLow', $data) && $data['PostcodePrimaryLow'] !== null) {
            $object->setPostcodePrimaryLow($data['PostcodePrimaryLow']);
            unset($data['PostcodePrimaryLow']);
        }
        elseif (\array_key_exists('PostcodePrimaryLow', $data) && $data['PostcodePrimaryLow'] === null) {
            $object->setPostcodePrimaryLow(null);
        }
        if (\array_key_exists('PostcodeExtendedLow', $data) && $data['PostcodeExtendedLow'] !== null) {
            $object->setPostcodeExtendedLow($data['PostcodeExtendedLow']);
            unset($data['PostcodeExtendedLow']);
        }
        elseif (\array_key_exists('PostcodeExtendedLow', $data) && $data['PostcodeExtendedLow'] === null) {
            $object->setPostcodeExtendedLow(null);
        }
        if (\array_key_exists('Urbanization', $data) && $data['Urbanization'] !== null) {
            $object->setUrbanization($data['Urbanization']);
            unset($data['Urbanization']);
        }
        elseif (\array_key_exists('Urbanization', $data) && $data['Urbanization'] === null) {
            $object->setUrbanization(null);
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
        if ($data->isInitialized('consigneeName')) {
            $dataArray['ConsigneeName'] = $data->getConsigneeName();
        }
        if ($data->isInitialized('attentionName')) {
            $dataArray['AttentionName'] = $data->getAttentionName();
        }
        if ($data->isInitialized('addressLine')) {
            $values = [];
            foreach ($data->getAddressLine() as $value) {
                $values[] = $value;
            }
            $dataArray['AddressLine'] = $values;
        }
        if ($data->isInitialized('region')) {
            $dataArray['Region'] = $data->getRegion();
        }
        if ($data->isInitialized('politicalDivision2')) {
            $dataArray['PoliticalDivision2'] = $data->getPoliticalDivision2();
        }
        if ($data->isInitialized('politicalDivision1')) {
            $dataArray['PoliticalDivision1'] = $data->getPoliticalDivision1();
        }
        if ($data->isInitialized('postcodePrimaryLow')) {
            $dataArray['PostcodePrimaryLow'] = $data->getPostcodePrimaryLow();
        }
        if ($data->isInitialized('postcodeExtendedLow')) {
            $dataArray['PostcodeExtendedLow'] = $data->getPostcodeExtendedLow();
        }
        if ($data->isInitialized('urbanization')) {
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
        return [\ShipStream\Ups\Api\Model\CandidateAddressKeyFormat::class => false];
    }
}