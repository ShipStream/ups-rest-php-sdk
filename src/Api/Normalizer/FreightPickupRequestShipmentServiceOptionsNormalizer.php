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
class FreightPickupRequestShipmentServiceOptionsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \ShipStream\Ups\Api\Model\FreightPickupRequestShipmentServiceOptions::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \ShipStream\Ups\Api\Model\FreightPickupRequestShipmentServiceOptions::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \ShipStream\Ups\Api\Model\FreightPickupRequestShipmentServiceOptions();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('FreezableProtectionIndicator', $data)) {
            $object->setFreezableProtectionIndicator($data['FreezableProtectionIndicator']);
            unset($data['FreezableProtectionIndicator']);
        }
        if (\array_key_exists('LimitedAccessPickupIndicator', $data)) {
            $object->setLimitedAccessPickupIndicator($data['LimitedAccessPickupIndicator']);
            unset($data['LimitedAccessPickupIndicator']);
        }
        if (\array_key_exists('LimitedAccessDeliveryIndicator', $data)) {
            $object->setLimitedAccessDeliveryIndicator($data['LimitedAccessDeliveryIndicator']);
            unset($data['LimitedAccessDeliveryIndicator']);
        }
        if (\array_key_exists('ExtremeLengthIndicator', $data)) {
            $object->setExtremeLengthIndicator($data['ExtremeLengthIndicator']);
            unset($data['ExtremeLengthIndicator']);
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
        if ($data->isInitialized('freezableProtectionIndicator') && null !== $data->getFreezableProtectionIndicator()) {
            $dataArray['FreezableProtectionIndicator'] = $data->getFreezableProtectionIndicator();
        }
        if ($data->isInitialized('limitedAccessPickupIndicator') && null !== $data->getLimitedAccessPickupIndicator()) {
            $dataArray['LimitedAccessPickupIndicator'] = $data->getLimitedAccessPickupIndicator();
        }
        if ($data->isInitialized('limitedAccessDeliveryIndicator') && null !== $data->getLimitedAccessDeliveryIndicator()) {
            $dataArray['LimitedAccessDeliveryIndicator'] = $data->getLimitedAccessDeliveryIndicator();
        }
        if ($data->isInitialized('extremeLengthIndicator') && null !== $data->getExtremeLengthIndicator()) {
            $dataArray['ExtremeLengthIndicator'] = $data->getExtremeLengthIndicator();
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
        return [\ShipStream\Ups\Api\Model\FreightPickupRequestShipmentServiceOptions::class => false];
    }
}