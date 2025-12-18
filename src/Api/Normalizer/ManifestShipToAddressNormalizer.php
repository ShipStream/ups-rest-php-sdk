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
class ManifestShipToAddressNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \ShipStream\Ups\Api\Model\ManifestShipToAddress::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \ShipStream\Ups\Api\Model\ManifestShipToAddress::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \ShipStream\Ups\Api\Model\ManifestShipToAddress();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('ConsigneeName', $data)) {
            $object->setConsigneeName($data['ConsigneeName']);
            unset($data['ConsigneeName']);
        }
        if (\array_key_exists('AddressLine1', $data)) {
            $object->setAddressLine1($data['AddressLine1']);
            unset($data['AddressLine1']);
        }
        if (\array_key_exists('AddressLine2', $data)) {
            $object->setAddressLine2($data['AddressLine2']);
            unset($data['AddressLine2']);
        }
        if (\array_key_exists('AddressLine3', $data)) {
            $object->setAddressLine3($data['AddressLine3']);
            unset($data['AddressLine3']);
        }
        if (\array_key_exists('City', $data)) {
            $object->setCity($data['City']);
            unset($data['City']);
        }
        if (\array_key_exists('StateProvinceCode', $data)) {
            $object->setStateProvinceCode($data['StateProvinceCode']);
            unset($data['StateProvinceCode']);
        }
        if (\array_key_exists('PostalCode', $data)) {
            $object->setPostalCode($data['PostalCode']);
            unset($data['PostalCode']);
        }
        if (\array_key_exists('CountryCode', $data)) {
            $object->setCountryCode($data['CountryCode']);
            unset($data['CountryCode']);
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
        if ($data->isInitialized('addressLine1') && null !== $data->getAddressLine1()) {
            $dataArray['AddressLine1'] = $data->getAddressLine1();
        }
        if ($data->isInitialized('addressLine2') && null !== $data->getAddressLine2()) {
            $dataArray['AddressLine2'] = $data->getAddressLine2();
        }
        if ($data->isInitialized('addressLine3') && null !== $data->getAddressLine3()) {
            $dataArray['AddressLine3'] = $data->getAddressLine3();
        }
        if ($data->isInitialized('city') && null !== $data->getCity()) {
            $dataArray['City'] = $data->getCity();
        }
        if ($data->isInitialized('stateProvinceCode') && null !== $data->getStateProvinceCode()) {
            $dataArray['StateProvinceCode'] = $data->getStateProvinceCode();
        }
        if ($data->isInitialized('postalCode') && null !== $data->getPostalCode()) {
            $dataArray['PostalCode'] = $data->getPostalCode();
        }
        if ($data->isInitialized('countryCode') && null !== $data->getCountryCode()) {
            $dataArray['CountryCode'] = $data->getCountryCode();
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
        return [\ShipStream\Ups\Api\Model\ManifestShipToAddress::class => false];
    }
}