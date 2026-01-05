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
class LocatorRequestLocationSearchCriteriaNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \ShipStream\Ups\Api\Model\LocatorRequestLocationSearchCriteria::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \ShipStream\Ups\Api\Model\LocatorRequestLocationSearchCriteria::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \ShipStream\Ups\Api\Model\LocatorRequestLocationSearchCriteria();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('SearchOption', $data)) {
            $values = [];
            foreach ($data['SearchOption'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \ShipStream\Ups\Api\Model\LocationSearchCriteriaSearchOption::class, 'json', $context);
            }
            $object->setSearchOption($values);
            unset($data['SearchOption']);
        }
        if (\array_key_exists('MaximumListSize', $data)) {
            $object->setMaximumListSize($data['MaximumListSize']);
            unset($data['MaximumListSize']);
        }
        if (\array_key_exists('SearchRadius', $data)) {
            $object->setSearchRadius($data['SearchRadius']);
            unset($data['SearchRadius']);
        }
        if (\array_key_exists('ServiceSearch', $data)) {
            $object->setServiceSearch($this->denormalizer->denormalize($data['ServiceSearch'], \ShipStream\Ups\Api\Model\LocationSearchCriteriaServiceSearch::class, 'json', $context));
            unset($data['ServiceSearch']);
        }
        if (\array_key_exists('FreightWillCallSearch', $data)) {
            $object->setFreightWillCallSearch($this->denormalizer->denormalize($data['FreightWillCallSearch'], \ShipStream\Ups\Api\Model\LocationSearchCriteriaFreightWillCallSearch::class, 'json', $context));
            unset($data['FreightWillCallSearch']);
        }
        if (\array_key_exists('AccessPointSearch', $data)) {
            $object->setAccessPointSearch($this->denormalizer->denormalize($data['AccessPointSearch'], \ShipStream\Ups\Api\Model\LocationSearchCriteriaAccessPointSearch::class, 'json', $context));
            unset($data['AccessPointSearch']);
        }
        if (\array_key_exists('OpenTimeCriteria', $data)) {
            $object->setOpenTimeCriteria($this->denormalizer->denormalize($data['OpenTimeCriteria'], \ShipStream\Ups\Api\Model\LocationSearchCriteriaOpenTimeCriteria::class, 'json', $context));
            unset($data['OpenTimeCriteria']);
        }
        if (\array_key_exists('BrexitFilter', $data)) {
            $object->setBrexitFilter($data['BrexitFilter']);
            unset($data['BrexitFilter']);
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
        if ($data->isInitialized('searchOption') && null !== $data->getSearchOption()) {
            $values = [];
            foreach ($data->getSearchOption() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['SearchOption'] = $values;
        }
        if ($data->isInitialized('maximumListSize') && null !== $data->getMaximumListSize()) {
            $dataArray['MaximumListSize'] = $data->getMaximumListSize();
        }
        if ($data->isInitialized('searchRadius') && null !== $data->getSearchRadius()) {
            $dataArray['SearchRadius'] = $data->getSearchRadius();
        }
        if ($data->isInitialized('serviceSearch') && null !== $data->getServiceSearch()) {
            $dataArray['ServiceSearch'] = $this->normalizer->normalize($data->getServiceSearch(), 'json', $context);
        }
        if ($data->isInitialized('freightWillCallSearch') && null !== $data->getFreightWillCallSearch()) {
            $dataArray['FreightWillCallSearch'] = $this->normalizer->normalize($data->getFreightWillCallSearch(), 'json', $context);
        }
        if ($data->isInitialized('accessPointSearch') && null !== $data->getAccessPointSearch()) {
            $dataArray['AccessPointSearch'] = $this->normalizer->normalize($data->getAccessPointSearch(), 'json', $context);
        }
        if ($data->isInitialized('openTimeCriteria') && null !== $data->getOpenTimeCriteria()) {
            $dataArray['OpenTimeCriteria'] = $this->normalizer->normalize($data->getOpenTimeCriteria(), 'json', $context);
        }
        if ($data->isInitialized('brexitFilter') && null !== $data->getBrexitFilter()) {
            $dataArray['BrexitFilter'] = $data->getBrexitFilter();
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
        return [\ShipStream\Ups\Api\Model\LocatorRequestLocationSearchCriteria::class => false];
    }
}