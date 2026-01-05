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
class AvailabilityShippingAvailabilityNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \ShipStream\Ups\Api\Model\AvailabilityShippingAvailability::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \ShipStream\Ups\Api\Model\AvailabilityShippingAvailability::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \ShipStream\Ups\Api\Model\AvailabilityShippingAvailability();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('AvailableIndicator', $data)) {
            $object->setAvailableIndicator($data['AvailableIndicator']);
            unset($data['AvailableIndicator']);
        }
        if (\array_key_exists('UnavailableReason', $data)) {
            $object->setUnavailableReason($this->denormalizer->denormalize($data['UnavailableReason'], \ShipStream\Ups\Api\Model\ShippingAvailabilityUnavailableReason::class, 'json', $context));
            unset($data['UnavailableReason']);
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
        if ($data->isInitialized('availableIndicator') && null !== $data->getAvailableIndicator()) {
            $dataArray['AvailableIndicator'] = $data->getAvailableIndicator();
        }
        if ($data->isInitialized('unavailableReason') && null !== $data->getUnavailableReason()) {
            $dataArray['UnavailableReason'] = $this->normalizer->normalize($data->getUnavailableReason(), 'json', $context);
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
        return [\ShipStream\Ups\Api\Model\AvailabilityShippingAvailability::class => false];
    }
}