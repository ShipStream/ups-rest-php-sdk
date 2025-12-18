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
class LocatorResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \ShipStream\Ups\Api\Model\LocatorResponse::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \ShipStream\Ups\Api\Model\LocatorResponse::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \ShipStream\Ups\Api\Model\LocatorResponse();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('Response', $data)) {
            $object->setResponse($this->denormalizer->denormalize($data['Response'], \ShipStream\Ups\Api\Model\LocatorResponseResponse::class, 'json', $context));
            unset($data['Response']);
        }
        if (\array_key_exists('Geocode', $data)) {
            $object->setGeocode($this->denormalizer->denormalize($data['Geocode'], \ShipStream\Ups\Api\Model\LocatorResponseGeocode::class, 'json', $context));
            unset($data['Geocode']);
        }
        if (\array_key_exists('SearchResults', $data)) {
            $object->setSearchResults($this->denormalizer->denormalize($data['SearchResults'], \ShipStream\Ups\Api\Model\LocatorResponseSearchResults::class, 'json', $context));
            unset($data['SearchResults']);
        }
        if (\array_key_exists('AllowAllConfidenceLevels', $data)) {
            $object->setAllowAllConfidenceLevels($data['AllowAllConfidenceLevels']);
            unset($data['AllowAllConfidenceLevels']);
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
        $dataArray['Response'] = $this->normalizer->normalize($data->getResponse(), 'json', $context);
        if ($data->isInitialized('geocode') && null !== $data->getGeocode()) {
            $dataArray['Geocode'] = $this->normalizer->normalize($data->getGeocode(), 'json', $context);
        }
        $dataArray['SearchResults'] = $this->normalizer->normalize($data->getSearchResults(), 'json', $context);
        $dataArray['AllowAllConfidenceLevels'] = $data->getAllowAllConfidenceLevels();
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\ShipStream\Ups\Api\Model\LocatorResponse::class => false];
    }
}