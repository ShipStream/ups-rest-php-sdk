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
class FreightPickupRequestPOMNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \ShipStream\Ups\Api\Model\FreightPickupRequestPOM::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \ShipStream\Ups\Api\Model\FreightPickupRequestPOM::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \ShipStream\Ups\Api\Model\FreightPickupRequestPOM();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('POMNumber', $data)) {
            $object->setPOMNumber($data['POMNumber']);
            unset($data['POMNumber']);
        }
        if (\array_key_exists('POMNumberType', $data)) {
            $object->setPOMNumberType($data['POMNumberType']);
            unset($data['POMNumberType']);
        }
        if (\array_key_exists('PickupNotifications', $data)) {
            $object->setPickupNotifications($this->denormalizer->denormalize($data['PickupNotifications'], \ShipStream\Ups\Api\Model\POMPickupNotifications::class, 'json', $context));
            unset($data['PickupNotifications']);
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
        if ($data->isInitialized('pOMNumber') && null !== $data->getPOMNumber()) {
            $dataArray['POMNumber'] = $data->getPOMNumber();
        }
        if ($data->isInitialized('pOMNumberType') && null !== $data->getPOMNumberType()) {
            $dataArray['POMNumberType'] = $data->getPOMNumberType();
        }
        if ($data->isInitialized('pickupNotifications') && null !== $data->getPickupNotifications()) {
            $dataArray['PickupNotifications'] = $this->normalizer->normalize($data->getPickupNotifications(), 'json', $context);
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
        return [\ShipStream\Ups\Api\Model\FreightPickupRequestPOM::class => false];
    }
}