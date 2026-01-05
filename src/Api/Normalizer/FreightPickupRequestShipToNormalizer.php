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
class FreightPickupRequestShipToNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \ShipStream\Ups\Api\Model\FreightPickupRequestShipTo::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \ShipStream\Ups\Api\Model\FreightPickupRequestShipTo::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \ShipStream\Ups\Api\Model\FreightPickupRequestShipTo();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('AttentionName', $data)) {
            $object->setAttentionName($data['AttentionName']);
            unset($data['AttentionName']);
        }
        if (\array_key_exists('Address', $data)) {
            $object->setAddress($this->denormalizer->denormalize($data['Address'], \ShipStream\Ups\Api\Model\FreightPickupShipToAddress::class, 'json', $context));
            unset($data['Address']);
        }
        if (\array_key_exists('Phone', $data)) {
            $object->setPhone($this->denormalizer->denormalize($data['Phone'], \ShipStream\Ups\Api\Model\ShipToPhone::class, 'json', $context));
            unset($data['Phone']);
        }
        if (\array_key_exists('EMailAddress', $data)) {
            $object->setEMailAddress($data['EMailAddress']);
            unset($data['EMailAddress']);
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
        if ($data->isInitialized('attentionName') && null !== $data->getAttentionName()) {
            $dataArray['AttentionName'] = $data->getAttentionName();
        }
        if ($data->isInitialized('address') && null !== $data->getAddress()) {
            $dataArray['Address'] = $this->normalizer->normalize($data->getAddress(), 'json', $context);
        }
        if ($data->isInitialized('phone') && null !== $data->getPhone()) {
            $dataArray['Phone'] = $this->normalizer->normalize($data->getPhone(), 'json', $context);
        }
        if ($data->isInitialized('eMailAddress') && null !== $data->getEMailAddress()) {
            $dataArray['EMailAddress'] = $data->getEMailAddress();
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
        return [\ShipStream\Ups\Api\Model\FreightPickupRequestShipTo::class => false];
    }
}