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
class OriginAddressAddressKeyFormatNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \ShipStream\Ups\Api\Model\OriginAddressAddressKeyFormat::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \ShipStream\Ups\Api\Model\OriginAddressAddressKeyFormat::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \ShipStream\Ups\Api\Model\OriginAddressAddressKeyFormat();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('ConsigneeName', $data)) {
            $object->setConsigneeName($data['ConsigneeName']);
            unset($data['ConsigneeName']);
        }
        if (\array_key_exists('AddressLine', $data)) {
            $object->setAddressLine($data['AddressLine']);
            unset($data['AddressLine']);
        }
        if (\array_key_exists('AddressLine2', $data)) {
            $object->setAddressLine2($data['AddressLine2']);
            unset($data['AddressLine2']);
        }
        if (\array_key_exists('AddressLine3', $data)) {
            $object->setAddressLine3($data['AddressLine3']);
            unset($data['AddressLine3']);
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
        if (\array_key_exists('PostcodePrimaryLow', $data)) {
            $object->setPostcodePrimaryLow($data['PostcodePrimaryLow']);
            unset($data['PostcodePrimaryLow']);
        }
        if (\array_key_exists('PostcodeExtendedLow', $data)) {
            $object->setPostcodeExtendedLow($data['PostcodeExtendedLow']);
            unset($data['PostcodeExtendedLow']);
        }
        if (\array_key_exists('CountryCode', $data)) {
            $object->setCountryCode($data['CountryCode']);
            unset($data['CountryCode']);
        }
        if (\array_key_exists('SingleLineAddress', $data)) {
            $object->setSingleLineAddress($data['SingleLineAddress']);
            unset($data['SingleLineAddress']);
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
        if ($data->isInitialized('consigneeName') && null !== $data->getConsigneeName()) {
            $dataArray['ConsigneeName'] = $data->getConsigneeName();
        }
        $dataArray['AddressLine'] = $data->getAddressLine();
        if ($data->isInitialized('addressLine2') && null !== $data->getAddressLine2()) {
            $dataArray['AddressLine2'] = $data->getAddressLine2();
        }
        if ($data->isInitialized('addressLine3') && null !== $data->getAddressLine3()) {
            $dataArray['AddressLine3'] = $data->getAddressLine3();
        }
        if ($data->isInitialized('politicalDivision3') && null !== $data->getPoliticalDivision3()) {
            $dataArray['PoliticalDivision3'] = $data->getPoliticalDivision3();
        }
        $dataArray['PoliticalDivision2'] = $data->getPoliticalDivision2();
        $dataArray['PoliticalDivision1'] = $data->getPoliticalDivision1();
        $dataArray['PostcodePrimaryLow'] = $data->getPostcodePrimaryLow();
        if ($data->isInitialized('postcodeExtendedLow') && null !== $data->getPostcodeExtendedLow()) {
            $dataArray['PostcodeExtendedLow'] = $data->getPostcodeExtendedLow();
        }
        $dataArray['CountryCode'] = $data->getCountryCode();
        if ($data->isInitialized('singleLineAddress') && null !== $data->getSingleLineAddress()) {
            $dataArray['SingleLineAddress'] = $data->getSingleLineAddress();
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
        return [\ShipStream\Ups\Api\Model\OriginAddressAddressKeyFormat::class => false];
    }
}