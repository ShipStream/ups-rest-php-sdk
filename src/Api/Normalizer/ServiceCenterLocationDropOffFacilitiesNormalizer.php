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
class ServiceCenterLocationDropOffFacilitiesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \ShipStream\Ups\Api\Model\ServiceCenterLocationDropOffFacilities::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \ShipStream\Ups\Api\Model\ServiceCenterLocationDropOffFacilities::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \ShipStream\Ups\Api\Model\ServiceCenterLocationDropOffFacilities();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('Name', $data)) {
            $object->setName($data['Name']);
            unset($data['Name']);
        }
        if (\array_key_exists('Address', $data)) {
            $object->setAddress($this->denormalizer->denormalize($data['Address'], \ShipStream\Ups\Api\Model\DropOffFacilitiesAddress::class, 'json', $context));
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
            $object->setFacilityTime($this->denormalizer->denormalize($data['FacilityTime'], \ShipStream\Ups\Api\Model\DropOffFacilitiesFacilityTime::class, 'json', $context));
            unset($data['FacilityTime']);
        }
        if (\array_key_exists('OriginOrDestination', $data)) {
            $object->setOriginOrDestination($data['OriginOrDestination']);
            unset($data['OriginOrDestination']);
        }
        if (\array_key_exists('LocalizedInstruction', $data)) {
            $values = [];
            foreach ($data['LocalizedInstruction'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \ShipStream\Ups\Api\Model\DropOffFacilitiesLocalizedInstruction::class, 'json', $context);
            }
            $object->setLocalizedInstruction($values);
            unset($data['LocalizedInstruction']);
        }
        if (\array_key_exists('Distance', $data)) {
            $object->setDistance($this->denormalizer->denormalize($data['Distance'], \ShipStream\Ups\Api\Model\DropOffFacilitiesDistance::class, 'json', $context));
            unset($data['Distance']);
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
        $dataArray['OriginOrDestination'] = $data->getOriginOrDestination();
        if ($data->isInitialized('localizedInstruction') && null !== $data->getLocalizedInstruction()) {
            $values = [];
            foreach ($data->getLocalizedInstruction() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['LocalizedInstruction'] = $values;
        }
        if ($data->isInitialized('distance') && null !== $data->getDistance()) {
            $dataArray['Distance'] = $this->normalizer->normalize($data->getDistance(), 'json', $context);
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_1;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\ShipStream\Ups\Api\Model\ServiceCenterLocationDropOffFacilities::class => false];
    }
}