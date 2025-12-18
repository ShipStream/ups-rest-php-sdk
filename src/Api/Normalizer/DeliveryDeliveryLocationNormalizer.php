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
class DeliveryDeliveryLocationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \ShipStream\Ups\Api\Model\DeliveryDeliveryLocation::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \ShipStream\Ups\Api\Model\DeliveryDeliveryLocation::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \ShipStream\Ups\Api\Model\DeliveryDeliveryLocation();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('AddressArtifactFormat', $data)) {
            $object->setAddressArtifactFormat($this->denormalizer->denormalize($data['AddressArtifactFormat'], \ShipStream\Ups\Api\Model\DeliveryLocationAddressArtifactFormat::class, 'json', $context));
            unset($data['AddressArtifactFormat']);
        }
        if (\array_key_exists('Code', $data)) {
            $object->setCode($data['Code']);
            unset($data['Code']);
        }
        if (\array_key_exists('Description', $data)) {
            $object->setDescription($data['Description']);
            unset($data['Description']);
        }
        if (\array_key_exists('SignedForByName', $data)) {
            $object->setSignedForByName($data['SignedForByName']);
            unset($data['SignedForByName']);
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
        $dataArray['AddressArtifactFormat'] = $this->normalizer->normalize($data->getAddressArtifactFormat(), 'json', $context);
        if ($data->isInitialized('code') && null !== $data->getCode()) {
            $dataArray['Code'] = $data->getCode();
        }
        if ($data->isInitialized('description') && null !== $data->getDescription()) {
            $dataArray['Description'] = $data->getDescription();
        }
        if ($data->isInitialized('signedForByName') && null !== $data->getSignedForByName()) {
            $dataArray['SignedForByName'] = $data->getSignedForByName();
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
        return [\ShipStream\Ups\Api\Model\DeliveryDeliveryLocation::class => false];
    }
}