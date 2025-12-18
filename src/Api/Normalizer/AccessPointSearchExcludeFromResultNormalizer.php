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
class AccessPointSearchExcludeFromResultNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \ShipStream\Ups\Api\Model\AccessPointSearchExcludeFromResult::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \ShipStream\Ups\Api\Model\AccessPointSearchExcludeFromResult::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \ShipStream\Ups\Api\Model\AccessPointSearchExcludeFromResult();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('BusinessClassificationCode', $data)) {
            $values = [];
            foreach ($data['BusinessClassificationCode'] as $value) {
                $values[] = $value;
            }
            $object->setBusinessClassificationCode($values);
            unset($data['BusinessClassificationCode']);
        }
        if (\array_key_exists('BusinessName', $data)) {
            $object->setBusinessName($data['BusinessName']);
            unset($data['BusinessName']);
        }
        if (\array_key_exists('Radius', $data)) {
            $object->setRadius($data['Radius']);
            unset($data['Radius']);
        }
        if (\array_key_exists('PostalCodeList', $data)) {
            $object->setPostalCodeList($this->denormalizer->denormalize($data['PostalCodeList'], \ShipStream\Ups\Api\Model\ExcludeFromResultPostalCodeList::class, 'json', $context));
            unset($data['PostalCodeList']);
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
        if ($data->isInitialized('businessClassificationCode') && null !== $data->getBusinessClassificationCode()) {
            $values = [];
            foreach ($data->getBusinessClassificationCode() as $value) {
                $values[] = $value;
            }
            $dataArray['BusinessClassificationCode'] = $values;
        }
        if ($data->isInitialized('businessName') && null !== $data->getBusinessName()) {
            $dataArray['BusinessName'] = $data->getBusinessName();
        }
        if ($data->isInitialized('radius') && null !== $data->getRadius()) {
            $dataArray['Radius'] = $data->getRadius();
        }
        if ($data->isInitialized('postalCodeList') && null !== $data->getPostalCodeList()) {
            $dataArray['PostalCodeList'] = $this->normalizer->normalize($data->getPostalCodeList(), 'json', $context);
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
        return [\ShipStream\Ups\Api\Model\AccessPointSearchExcludeFromResult::class => false];
    }
}