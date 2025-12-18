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
class PickupGetServiceCenterFacilitiesRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \ShipStream\Ups\Api\Model\PickupGetServiceCenterFacilitiesRequest::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \ShipStream\Ups\Api\Model\PickupGetServiceCenterFacilitiesRequest::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \ShipStream\Ups\Api\Model\PickupGetServiceCenterFacilitiesRequest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('Request', $data)) {
            $object->setRequest($this->denormalizer->denormalize($data['Request'], \ShipStream\Ups\Api\Model\PickupGetServiceCenterFacilitiesRequestRequest::class, 'json', $context));
            unset($data['Request']);
        }
        if (\array_key_exists('PickupPiece', $data)) {
            $values = [];
            foreach ($data['PickupPiece'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \ShipStream\Ups\Api\Model\PickupGetServiceCenterFacilitiesRequestPickupPiece::class, 'json', $context);
            }
            $object->setPickupPiece($values);
            unset($data['PickupPiece']);
        }
        if (\array_key_exists('OriginAddress', $data)) {
            $object->setOriginAddress($this->denormalizer->denormalize($data['OriginAddress'], \ShipStream\Ups\Api\Model\PickupGetServiceCenterFacilitiesRequestOriginAddress::class, 'json', $context));
            unset($data['OriginAddress']);
        }
        if (\array_key_exists('DestinationAddress', $data)) {
            $object->setDestinationAddress($this->denormalizer->denormalize($data['DestinationAddress'], \ShipStream\Ups\Api\Model\PickupGetServiceCenterFacilitiesRequestDestinationAddress::class, 'json', $context));
            unset($data['DestinationAddress']);
        }
        if (\array_key_exists('Locale', $data)) {
            $object->setLocale($data['Locale']);
            unset($data['Locale']);
        }
        if (\array_key_exists('ProximitySearchIndicator', $data)) {
            $object->setProximitySearchIndicator($data['ProximitySearchIndicator']);
            unset($data['ProximitySearchIndicator']);
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
        $dataArray['Request'] = $this->normalizer->normalize($data->getRequest(), 'json', $context);
        $values = [];
        foreach ($data->getPickupPiece() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $dataArray['PickupPiece'] = $values;
        if ($data->isInitialized('originAddress') && null !== $data->getOriginAddress()) {
            $dataArray['OriginAddress'] = $this->normalizer->normalize($data->getOriginAddress(), 'json', $context);
        }
        if ($data->isInitialized('destinationAddress') && null !== $data->getDestinationAddress()) {
            $dataArray['DestinationAddress'] = $this->normalizer->normalize($data->getDestinationAddress(), 'json', $context);
        }
        $dataArray['Locale'] = $data->getLocale();
        if ($data->isInitialized('proximitySearchIndicator') && null !== $data->getProximitySearchIndicator()) {
            $dataArray['ProximitySearchIndicator'] = $data->getProximitySearchIndicator();
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
        return [\ShipStream\Ups\Api\Model\PickupGetServiceCenterFacilitiesRequest::class => false];
    }
}