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
class LocatorRequestOriginAddressNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \ShipStream\Ups\Api\Model\LocatorRequestOriginAddress::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \ShipStream\Ups\Api\Model\LocatorRequestOriginAddress::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \ShipStream\Ups\Api\Model\LocatorRequestOriginAddress();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('Geocode', $data)) {
            $object->setGeocode($this->denormalizer->denormalize($data['Geocode'], \ShipStream\Ups\Api\Model\OriginAddressGeocode::class, 'json', $context));
            unset($data['Geocode']);
        }
        if (\array_key_exists('AddressKeyFormat', $data)) {
            $object->setAddressKeyFormat($this->denormalizer->denormalize($data['AddressKeyFormat'], \ShipStream\Ups\Api\Model\OriginAddressAddressKeyFormat::class, 'json', $context));
            unset($data['AddressKeyFormat']);
        }
        if (\array_key_exists('MaximumListSize', $data)) {
            $object->setMaximumListSize($data['MaximumListSize']);
            unset($data['MaximumListSize']);
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
        if ($data->isInitialized('geocode') && null !== $data->getGeocode()) {
            $dataArray['Geocode'] = $this->normalizer->normalize($data->getGeocode(), 'json', $context);
        }
        $dataArray['AddressKeyFormat'] = $this->normalizer->normalize($data->getAddressKeyFormat(), 'json', $context);
        if ($data->isInitialized('maximumListSize') && null !== $data->getMaximumListSize()) {
            $dataArray['MaximumListSize'] = $data->getMaximumListSize();
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
        return [\ShipStream\Ups\Api\Model\LocatorRequestOriginAddress::class => false];
    }
}