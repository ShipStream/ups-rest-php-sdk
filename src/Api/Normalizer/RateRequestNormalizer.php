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
class RateRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \ShipStream\Ups\Api\Model\RateRequest::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \ShipStream\Ups\Api\Model\RateRequest::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \ShipStream\Ups\Api\Model\RateRequest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('Request', $data)) {
            $object->setRequest($this->denormalizer->denormalize($data['Request'], \ShipStream\Ups\Api\Model\RateRequestRequest::class, 'json', $context));
            unset($data['Request']);
        }
        if (\array_key_exists('PickupType', $data)) {
            $object->setPickupType($this->denormalizer->denormalize($data['PickupType'], \ShipStream\Ups\Api\Model\RateRequestPickupType::class, 'json', $context));
            unset($data['PickupType']);
        }
        if (\array_key_exists('CustomerClassification', $data)) {
            $object->setCustomerClassification($this->denormalizer->denormalize($data['CustomerClassification'], \ShipStream\Ups\Api\Model\RateRequestCustomerClassification::class, 'json', $context));
            unset($data['CustomerClassification']);
        }
        if (\array_key_exists('Shipment', $data)) {
            $object->setShipment($this->denormalizer->denormalize($data['Shipment'], \ShipStream\Ups\Api\Model\RateRequestShipment::class, 'json', $context));
            unset($data['Shipment']);
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
        $dataArray['Request'] = $this->normalizer->normalize($data->getRequest(), 'json', $context);
        if ($data->isInitialized('pickupType') && null !== $data->getPickupType()) {
            $dataArray['PickupType'] = $this->normalizer->normalize($data->getPickupType(), 'json', $context);
        }
        if ($data->isInitialized('customerClassification') && null !== $data->getCustomerClassification()) {
            $dataArray['CustomerClassification'] = $this->normalizer->normalize($data->getCustomerClassification(), 'json', $context);
        }
        $dataArray['Shipment'] = $this->normalizer->normalize($data->getShipment(), 'json', $context);
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\ShipStream\Ups\Api\Model\RateRequest::class => false];
    }
}