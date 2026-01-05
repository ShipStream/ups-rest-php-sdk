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
class LocationSearchCriteriaAccessPointSearchNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \ShipStream\Ups\Api\Model\LocationSearchCriteriaAccessPointSearch::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \ShipStream\Ups\Api\Model\LocationSearchCriteriaAccessPointSearch::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \ShipStream\Ups\Api\Model\LocationSearchCriteriaAccessPointSearch();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('PublicAccessPointID', $data)) {
            $object->setPublicAccessPointID($data['PublicAccessPointID']);
            unset($data['PublicAccessPointID']);
        }
        if (\array_key_exists('AccessPointStatus', $data)) {
            $object->setAccessPointStatus($data['AccessPointStatus']);
            unset($data['AccessPointStatus']);
        }
        if (\array_key_exists('AccountNumber', $data)) {
            $object->setAccountNumber($data['AccountNumber']);
            unset($data['AccountNumber']);
        }
        if (\array_key_exists('IncludeCriteria', $data)) {
            $object->setIncludeCriteria($this->denormalizer->denormalize($data['IncludeCriteria'], \ShipStream\Ups\Api\Model\AccessPointSearchIncludeCriteria::class, 'json', $context));
            unset($data['IncludeCriteria']);
        }
        if (\array_key_exists('ExcludeFromResult', $data)) {
            $object->setExcludeFromResult($this->denormalizer->denormalize($data['ExcludeFromResult'], \ShipStream\Ups\Api\Model\AccessPointSearchExcludeFromResult::class, 'json', $context));
            unset($data['ExcludeFromResult']);
        }
        if (\array_key_exists('ExactMatchIndicator', $data)) {
            $object->setExactMatchIndicator($data['ExactMatchIndicator']);
            unset($data['ExactMatchIndicator']);
        }
        if (\array_key_exists('ExistIndicator', $data)) {
            $object->setExistIndicator($data['ExistIndicator']);
            unset($data['ExistIndicator']);
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
        if ($data->isInitialized('publicAccessPointID') && null !== $data->getPublicAccessPointID()) {
            $dataArray['PublicAccessPointID'] = $data->getPublicAccessPointID();
        }
        if ($data->isInitialized('accessPointStatus') && null !== $data->getAccessPointStatus()) {
            $dataArray['AccessPointStatus'] = $data->getAccessPointStatus();
        }
        if ($data->isInitialized('accountNumber') && null !== $data->getAccountNumber()) {
            $dataArray['AccountNumber'] = $data->getAccountNumber();
        }
        if ($data->isInitialized('includeCriteria') && null !== $data->getIncludeCriteria()) {
            $dataArray['IncludeCriteria'] = $this->normalizer->normalize($data->getIncludeCriteria(), 'json', $context);
        }
        if ($data->isInitialized('excludeFromResult') && null !== $data->getExcludeFromResult()) {
            $dataArray['ExcludeFromResult'] = $this->normalizer->normalize($data->getExcludeFromResult(), 'json', $context);
        }
        if ($data->isInitialized('exactMatchIndicator') && null !== $data->getExactMatchIndicator()) {
            $dataArray['ExactMatchIndicator'] = $data->getExactMatchIndicator();
        }
        if ($data->isInitialized('existIndicator') && null !== $data->getExistIndicator()) {
            $dataArray['ExistIndicator'] = $data->getExistIndicator();
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
        return [\ShipStream\Ups\Api\Model\LocationSearchCriteriaAccessPointSearch::class => false];
    }
}