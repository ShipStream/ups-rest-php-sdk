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
class AddressNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \ShipStream\Ups\Api\Model\Address::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \ShipStream\Ups\Api\Model\Address::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \ShipStream\Ups\Api\Model\Address();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('addressLine1', $data) && $data['addressLine1'] !== null) {
            $object->setAddressLine1($data['addressLine1']);
            unset($data['addressLine1']);
        }
        elseif (\array_key_exists('addressLine1', $data) && $data['addressLine1'] === null) {
            $object->setAddressLine1(null);
        }
        if (\array_key_exists('addressLine2', $data) && $data['addressLine2'] !== null) {
            $object->setAddressLine2($data['addressLine2']);
            unset($data['addressLine2']);
        }
        elseif (\array_key_exists('addressLine2', $data) && $data['addressLine2'] === null) {
            $object->setAddressLine2(null);
        }
        if (\array_key_exists('addressLine3', $data) && $data['addressLine3'] !== null) {
            $object->setAddressLine3($data['addressLine3']);
            unset($data['addressLine3']);
        }
        elseif (\array_key_exists('addressLine3', $data) && $data['addressLine3'] === null) {
            $object->setAddressLine3(null);
        }
        if (\array_key_exists('city', $data) && $data['city'] !== null) {
            $object->setCity($data['city']);
            unset($data['city']);
        }
        elseif (\array_key_exists('city', $data) && $data['city'] === null) {
            $object->setCity(null);
        }
        if (\array_key_exists('country', $data)) {
            $object->setCountry($data['country']);
            unset($data['country']);
        }
        if (\array_key_exists('countryCode', $data)) {
            $object->setCountryCode($data['countryCode']);
            unset($data['countryCode']);
        }
        if (\array_key_exists('postalCode', $data) && $data['postalCode'] !== null) {
            $object->setPostalCode($data['postalCode']);
            unset($data['postalCode']);
        }
        elseif (\array_key_exists('postalCode', $data) && $data['postalCode'] === null) {
            $object->setPostalCode(null);
        }
        if (\array_key_exists('stateProvince', $data) && $data['stateProvince'] !== null) {
            $object->setStateProvince($data['stateProvince']);
            unset($data['stateProvince']);
        }
        elseif (\array_key_exists('stateProvince', $data) && $data['stateProvince'] === null) {
            $object->setStateProvince(null);
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
        if ($data->isInitialized('addressLine1')) {
            $dataArray['addressLine1'] = $data->getAddressLine1();
        }
        if ($data->isInitialized('addressLine2')) {
            $dataArray['addressLine2'] = $data->getAddressLine2();
        }
        if ($data->isInitialized('addressLine3')) {
            $dataArray['addressLine3'] = $data->getAddressLine3();
        }
        if ($data->isInitialized('city')) {
            $dataArray['city'] = $data->getCity();
        }
        if ($data->isInitialized('country') && null !== $data->getCountry()) {
            $dataArray['country'] = $data->getCountry();
        }
        if ($data->isInitialized('countryCode') && null !== $data->getCountryCode()) {
            $dataArray['countryCode'] = $data->getCountryCode();
        }
        if ($data->isInitialized('postalCode')) {
            $dataArray['postalCode'] = $data->getPostalCode();
        }
        if ($data->isInitialized('stateProvince')) {
            $dataArray['stateProvince'] = $data->getStateProvince();
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
        return [\ShipStream\Ups\Api\Model\Address::class => false];
    }
}