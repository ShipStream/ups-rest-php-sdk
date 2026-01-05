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
class AccessPointSearchIncludeCriteriaNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \ShipStream\Ups\Api\Model\AccessPointSearchIncludeCriteria::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \ShipStream\Ups\Api\Model\AccessPointSearchIncludeCriteria::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \ShipStream\Ups\Api\Model\AccessPointSearchIncludeCriteria();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('MerchantAccountNumberList', $data)) {
            $object->setMerchantAccountNumberList($this->denormalizer->denormalize($data['MerchantAccountNumberList'], \ShipStream\Ups\Api\Model\IncludeCriteriaMerchantAccountNumberList::class, 'json', $context));
            unset($data['MerchantAccountNumberList']);
        }
        if (\array_key_exists('SearchFilter', $data)) {
            $object->setSearchFilter($this->denormalizer->denormalize($data['SearchFilter'], \ShipStream\Ups\Api\Model\IncludeCriteriaSearchFilter::class, 'json', $context));
            unset($data['SearchFilter']);
        }
        if (\array_key_exists('ServiceOfferingList', $data)) {
            $object->setServiceOfferingList($this->denormalizer->denormalize($data['ServiceOfferingList'], \ShipStream\Ups\Api\Model\IncludeCriteriaServiceOfferingList::class, 'json', $context));
            unset($data['ServiceOfferingList']);
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
        if ($data->isInitialized('merchantAccountNumberList') && null !== $data->getMerchantAccountNumberList()) {
            $dataArray['MerchantAccountNumberList'] = $this->normalizer->normalize($data->getMerchantAccountNumberList(), 'json', $context);
        }
        if ($data->isInitialized('searchFilter') && null !== $data->getSearchFilter()) {
            $dataArray['SearchFilter'] = $this->normalizer->normalize($data->getSearchFilter(), 'json', $context);
        }
        if ($data->isInitialized('serviceOfferingList') && null !== $data->getServiceOfferingList()) {
            $dataArray['ServiceOfferingList'] = $this->normalizer->normalize($data->getServiceOfferingList(), 'json', $context);
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
        return [\ShipStream\Ups\Api\Model\AccessPointSearchIncludeCriteria::class => false];
    }
}