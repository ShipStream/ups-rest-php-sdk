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
class LocationSearchCriteriaServiceSearchNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \ShipStream\Ups\Api\Model\LocationSearchCriteriaServiceSearch::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \ShipStream\Ups\Api\Model\LocationSearchCriteriaServiceSearch::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \ShipStream\Ups\Api\Model\LocationSearchCriteriaServiceSearch();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('Time', $data)) {
            $object->setTime($data['Time']);
            unset($data['Time']);
        }
        if (\array_key_exists('ServiceCode', $data)) {
            $values = [];
            foreach ($data['ServiceCode'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \ShipStream\Ups\Api\Model\ServiceSearchServiceCode::class, 'json', $context);
            }
            $object->setServiceCode($values);
            unset($data['ServiceCode']);
        }
        if (\array_key_exists('ServiceOptionCode', $data)) {
            $values_1 = [];
            foreach ($data['ServiceOptionCode'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \ShipStream\Ups\Api\Model\ServiceSearchServiceOptionCode::class, 'json', $context);
            }
            $object->setServiceOptionCode($values_1);
            unset($data['ServiceOptionCode']);
        }
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_2;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('time') && null !== $data->getTime()) {
            $dataArray['Time'] = $data->getTime();
        }
        if ($data->isInitialized('serviceCode') && null !== $data->getServiceCode()) {
            $values = [];
            foreach ($data->getServiceCode() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['ServiceCode'] = $values;
        }
        if ($data->isInitialized('serviceOptionCode') && null !== $data->getServiceOptionCode()) {
            $values_1 = [];
            foreach ($data->getServiceOptionCode() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['ServiceOptionCode'] = $values_1;
        }
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_2;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\ShipStream\Ups\Api\Model\LocationSearchCriteriaServiceSearch::class => false];
    }
}