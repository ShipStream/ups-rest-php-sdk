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
class ContactsUltimateConsigneeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \ShipStream\Ups\Api\Model\ContactsUltimateConsignee::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \ShipStream\Ups\Api\Model\ContactsUltimateConsignee::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \ShipStream\Ups\Api\Model\ContactsUltimateConsignee();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('CompanyName', $data)) {
            $object->setCompanyName($data['CompanyName']);
            unset($data['CompanyName']);
        }
        if (\array_key_exists('Address', $data)) {
            $object->setAddress($this->denormalizer->denormalize($data['Address'], \ShipStream\Ups\Api\Model\UltimateConsigneeAddress::class, 'json', $context));
            unset($data['Address']);
        }
        if (\array_key_exists('UltimateConsigneeType', $data)) {
            $object->setUltimateConsigneeType($this->denormalizer->denormalize($data['UltimateConsigneeType'], \ShipStream\Ups\Api\Model\UltimateConsigneeUltimateConsigneeType::class, 'json', $context));
            unset($data['UltimateConsigneeType']);
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
        $dataArray['CompanyName'] = $data->getCompanyName();
        $dataArray['Address'] = $this->normalizer->normalize($data->getAddress(), 'json', $context);
        if ($data->isInitialized('ultimateConsigneeType') && null !== $data->getUltimateConsigneeType()) {
            $dataArray['UltimateConsigneeType'] = $this->normalizer->normalize($data->getUltimateConsigneeType(), 'json', $context);
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
        return [\ShipStream\Ups\Api\Model\ContactsUltimateConsignee::class => false];
    }
}