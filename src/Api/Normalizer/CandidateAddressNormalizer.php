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
class CandidateAddressNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \ShipStream\Ups\Api\Model\CandidateAddress::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \ShipStream\Ups\Api\Model\CandidateAddress::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \ShipStream\Ups\Api\Model\CandidateAddress();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('countryName', $data)) {
            $object->setCountryName($data['countryName']);
            unset($data['countryName']);
        }
        if (\array_key_exists('countryCode', $data)) {
            $object->setCountryCode($data['countryCode']);
            unset($data['countryCode']);
        }
        if (\array_key_exists('stateProvince', $data)) {
            $object->setStateProvince($data['stateProvince']);
            unset($data['stateProvince']);
        }
        if (\array_key_exists('city', $data)) {
            $object->setCity($data['city']);
            unset($data['city']);
        }
        if (\array_key_exists('town', $data)) {
            $object->setTown($data['town']);
            unset($data['town']);
        }
        if (\array_key_exists('postalCode', $data)) {
            $object->setPostalCode($data['postalCode']);
            unset($data['postalCode']);
        }
        if (\array_key_exists('postalCodeLow', $data)) {
            $object->setPostalCodeLow($data['postalCodeLow']);
            unset($data['postalCodeLow']);
        }
        if (\array_key_exists('postalCodeHigh', $data)) {
            $object->setPostalCodeHigh($data['postalCodeHigh']);
            unset($data['postalCodeHigh']);
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
        $dataArray['countryName'] = $data->getCountryName();
        if ($data->isInitialized('countryCode') && null !== $data->getCountryCode()) {
            $dataArray['countryCode'] = $data->getCountryCode();
        }
        if ($data->isInitialized('stateProvince') && null !== $data->getStateProvince()) {
            $dataArray['stateProvince'] = $data->getStateProvince();
        }
        if ($data->isInitialized('city') && null !== $data->getCity()) {
            $dataArray['city'] = $data->getCity();
        }
        if ($data->isInitialized('town') && null !== $data->getTown()) {
            $dataArray['town'] = $data->getTown();
        }
        if ($data->isInitialized('postalCode') && null !== $data->getPostalCode()) {
            $dataArray['postalCode'] = $data->getPostalCode();
        }
        if ($data->isInitialized('postalCodeLow') && null !== $data->getPostalCodeLow()) {
            $dataArray['postalCodeLow'] = $data->getPostalCodeLow();
        }
        if ($data->isInitialized('postalCodeHigh') && null !== $data->getPostalCodeHigh()) {
            $dataArray['postalCodeHigh'] = $data->getPostalCodeHigh();
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
        return [\ShipStream\Ups\Api\Model\CandidateAddress::class => false];
    }
}