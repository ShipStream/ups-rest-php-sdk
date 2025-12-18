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
class ServiceCenterLocationPickupFacilitiesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \ShipStream\Ups\Api\Model\ServiceCenterLocationPickupFacilities::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \ShipStream\Ups\Api\Model\ServiceCenterLocationPickupFacilities::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \ShipStream\Ups\Api\Model\ServiceCenterLocationPickupFacilities();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('Name', $data)) {
            $object->setName($data['Name']);
            unset($data['Name']);
        }
        if (\array_key_exists('Address', $data)) {
            $object->setAddress($this->denormalizer->denormalize($data['Address'], \ShipStream\Ups\Api\Model\PickupFacilitiesAddress::class, 'json', $context));
            unset($data['Address']);
        }
        if (\array_key_exists('SLIC', $data)) {
            $object->setSLIC($data['SLIC']);
            unset($data['SLIC']);
        }
        if (\array_key_exists('Type', $data)) {
            $object->setType($data['Type']);
            unset($data['Type']);
        }
        if (\array_key_exists('Timezone', $data)) {
            $object->setTimezone($data['Timezone']);
            unset($data['Timezone']);
        }
        if (\array_key_exists('Phone', $data)) {
            $object->setPhone($data['Phone']);
            unset($data['Phone']);
        }
        if (\array_key_exists('Fax', $data)) {
            $object->setFax($data['Fax']);
            unset($data['Fax']);
        }
        if (\array_key_exists('FacilityTime', $data)) {
            $object->setFacilityTime($this->denormalizer->denormalize($data['FacilityTime'], \ShipStream\Ups\Api\Model\PickupFacilitiesFacilityTime::class, 'json', $context));
            unset($data['FacilityTime']);
        }
        if (\array_key_exists('AirportCode', $data)) {
            $object->setAirportCode($data['AirportCode']);
            unset($data['AirportCode']);
        }
        if (\array_key_exists('SortCode', $data)) {
            $object->setSortCode($data['SortCode']);
            unset($data['SortCode']);
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
        $dataArray['Name'] = $data->getName();
        $dataArray['Address'] = $this->normalizer->normalize($data->getAddress(), 'json', $context);
        $dataArray['SLIC'] = $data->getSLIC();
        $dataArray['Type'] = $data->getType();
        $dataArray['Timezone'] = $data->getTimezone();
        $dataArray['Phone'] = $data->getPhone();
        $dataArray['Fax'] = $data->getFax();
        if ($data->isInitialized('facilityTime') && null !== $data->getFacilityTime()) {
            $dataArray['FacilityTime'] = $this->normalizer->normalize($data->getFacilityTime(), 'json', $context);
        }
        if ($data->isInitialized('airportCode') && null !== $data->getAirportCode()) {
            $dataArray['AirportCode'] = $data->getAirportCode();
        }
        if ($data->isInitialized('sortCode') && null !== $data->getSortCode()) {
            $dataArray['SortCode'] = $data->getSortCode();
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
        return [\ShipStream\Ups\Api\Model\ServiceCenterLocationPickupFacilities::class => false];
    }
}