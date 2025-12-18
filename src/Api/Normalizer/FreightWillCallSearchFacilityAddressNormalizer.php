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
class FreightWillCallSearchFacilityAddressNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \ShipStream\Ups\Api\Model\FreightWillCallSearchFacilityAddress::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \ShipStream\Ups\Api\Model\FreightWillCallSearchFacilityAddress::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \ShipStream\Ups\Api\Model\FreightWillCallSearchFacilityAddress();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('SLIC', $data)) {
            $object->setSLIC($data['SLIC']);
            unset($data['SLIC']);
        }
        if (\array_key_exists('AddressLine', $data)) {
            $values = [];
            foreach ($data['AddressLine'] as $value) {
                $values[] = $value;
            }
            $object->setAddressLine($values);
            unset($data['AddressLine']);
        }
        if (\array_key_exists('City', $data)) {
            $object->setCity($data['City']);
            unset($data['City']);
        }
        if (\array_key_exists('PostalCodePrimaryLow', $data)) {
            $object->setPostalCodePrimaryLow($data['PostalCodePrimaryLow']);
            unset($data['PostalCodePrimaryLow']);
        }
        if (\array_key_exists('PostalCodeExtendedLow', $data)) {
            $object->setPostalCodeExtendedLow($data['PostalCodeExtendedLow']);
            unset($data['PostalCodeExtendedLow']);
        }
        if (\array_key_exists('State', $data)) {
            $object->setState($data['State']);
            unset($data['State']);
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
        if ($data->isInitialized('sLIC') && null !== $data->getSLIC()) {
            $dataArray['SLIC'] = $data->getSLIC();
        }
        if ($data->isInitialized('addressLine') && null !== $data->getAddressLine()) {
            $values = [];
            foreach ($data->getAddressLine() as $value) {
                $values[] = $value;
            }
            $dataArray['AddressLine'] = $values;
        }
        if ($data->isInitialized('city') && null !== $data->getCity()) {
            $dataArray['City'] = $data->getCity();
        }
        if ($data->isInitialized('postalCodePrimaryLow') && null !== $data->getPostalCodePrimaryLow()) {
            $dataArray['PostalCodePrimaryLow'] = $data->getPostalCodePrimaryLow();
        }
        if ($data->isInitialized('postalCodeExtendedLow') && null !== $data->getPostalCodeExtendedLow()) {
            $dataArray['PostalCodeExtendedLow'] = $data->getPostalCodeExtendedLow();
        }
        if ($data->isInitialized('state') && null !== $data->getState()) {
            $dataArray['State'] = $data->getState();
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
        return [\ShipStream\Ups\Api\Model\FreightWillCallSearchFacilityAddress::class => false];
    }
}