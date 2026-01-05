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
class LocatorResponseSearchResultsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \ShipStream\Ups\Api\Model\LocatorResponseSearchResults::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \ShipStream\Ups\Api\Model\LocatorResponseSearchResults::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \ShipStream\Ups\Api\Model\LocatorResponseSearchResults();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('GeocodeCandidate', $data)) {
            $values = [];
            foreach ($data['GeocodeCandidate'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \ShipStream\Ups\Api\Model\SearchResultsGeocodeCandidate::class, 'json', $context);
            }
            $object->setGeocodeCandidate($values);
            unset($data['GeocodeCandidate']);
        }
        if (\array_key_exists('Disclaimer', $data)) {
            $object->setDisclaimer($data['Disclaimer']);
            unset($data['Disclaimer']);
        }
        if (\array_key_exists('DropLocation', $data)) {
            $values_1 = [];
            foreach ($data['DropLocation'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \ShipStream\Ups\Api\Model\SearchResultsDropLocation::class, 'json', $context);
            }
            $object->setDropLocation($values_1);
            unset($data['DropLocation']);
        }
        if (\array_key_exists('AvailableLocationAttributes', $data)) {
            $values_2 = [];
            foreach ($data['AvailableLocationAttributes'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \ShipStream\Ups\Api\Model\SearchResultsAvailableLocationAttributes::class, 'json', $context);
            }
            $object->setAvailableLocationAttributes($values_2);
            unset($data['AvailableLocationAttributes']);
        }
        if (\array_key_exists('ActiveAvailableAccessPointIndicator', $data)) {
            $object->setActiveAvailableAccessPointIndicator($data['ActiveAvailableAccessPointIndicator']);
            unset($data['ActiveAvailableAccessPointIndicator']);
        }
        foreach ($data as $key => $value_3) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_3;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('geocodeCandidate') && null !== $data->getGeocodeCandidate()) {
            $values = [];
            foreach ($data->getGeocodeCandidate() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['GeocodeCandidate'] = $values;
        }
        if ($data->isInitialized('disclaimer') && null !== $data->getDisclaimer()) {
            $dataArray['Disclaimer'] = $data->getDisclaimer();
        }
        if ($data->isInitialized('dropLocation') && null !== $data->getDropLocation()) {
            $values_1 = [];
            foreach ($data->getDropLocation() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['DropLocation'] = $values_1;
        }
        if ($data->isInitialized('availableLocationAttributes') && null !== $data->getAvailableLocationAttributes()) {
            $values_2 = [];
            foreach ($data->getAvailableLocationAttributes() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $dataArray['AvailableLocationAttributes'] = $values_2;
        }
        if ($data->isInitialized('activeAvailableAccessPointIndicator') && null !== $data->getActiveAvailableAccessPointIndicator()) {
            $dataArray['ActiveAvailableAccessPointIndicator'] = $data->getActiveAvailableAccessPointIndicator();
        }
        foreach ($data as $key => $value_3) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_3;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\ShipStream\Ups\Api\Model\LocatorResponseSearchResults::class => false];
    }
}