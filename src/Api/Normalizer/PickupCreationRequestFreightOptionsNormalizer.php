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
class PickupCreationRequestFreightOptionsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \ShipStream\Ups\Api\Model\PickupCreationRequestFreightOptions::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \ShipStream\Ups\Api\Model\PickupCreationRequestFreightOptions::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \ShipStream\Ups\Api\Model\PickupCreationRequestFreightOptions();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('ShipmentServiceOptions', $data)) {
            $object->setShipmentServiceOptions($this->denormalizer->denormalize($data['ShipmentServiceOptions'], \ShipStream\Ups\Api\Model\FreightOptionsShipmentServiceOptions::class, 'json', $context));
            unset($data['ShipmentServiceOptions']);
        }
        if (\array_key_exists('OriginServiceCenterCode', $data)) {
            $object->setOriginServiceCenterCode($data['OriginServiceCenterCode']);
            unset($data['OriginServiceCenterCode']);
        }
        if (\array_key_exists('OriginServiceCountryCode', $data)) {
            $object->setOriginServiceCountryCode($data['OriginServiceCountryCode']);
            unset($data['OriginServiceCountryCode']);
        }
        if (\array_key_exists('DestinationAddress', $data)) {
            $object->setDestinationAddress($this->denormalizer->denormalize($data['DestinationAddress'], \ShipStream\Ups\Api\Model\FreightOptionsDestinationAddress::class, 'json', $context));
            unset($data['DestinationAddress']);
        }
        if (\array_key_exists('ShipmentDetail', $data)) {
            $object->setShipmentDetail($this->denormalizer->denormalize($data['ShipmentDetail'], \ShipStream\Ups\Api\Model\FreightOptionsShipmentDetail::class, 'json', $context));
            unset($data['ShipmentDetail']);
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
        if ($data->isInitialized('shipmentServiceOptions') && null !== $data->getShipmentServiceOptions()) {
            $dataArray['ShipmentServiceOptions'] = $this->normalizer->normalize($data->getShipmentServiceOptions(), 'json', $context);
        }
        if ($data->isInitialized('originServiceCenterCode') && null !== $data->getOriginServiceCenterCode()) {
            $dataArray['OriginServiceCenterCode'] = $data->getOriginServiceCenterCode();
        }
        if ($data->isInitialized('originServiceCountryCode') && null !== $data->getOriginServiceCountryCode()) {
            $dataArray['OriginServiceCountryCode'] = $data->getOriginServiceCountryCode();
        }
        if ($data->isInitialized('destinationAddress') && null !== $data->getDestinationAddress()) {
            $dataArray['DestinationAddress'] = $this->normalizer->normalize($data->getDestinationAddress(), 'json', $context);
        }
        $dataArray['ShipmentDetail'] = $this->normalizer->normalize($data->getShipmentDetail(), 'json', $context);
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\ShipStream\Ups\Api\Model\PickupCreationRequestFreightOptions::class => false];
    }
}