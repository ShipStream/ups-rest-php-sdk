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
class FreightOptionsShipmentServiceOptionsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \ShipStream\Ups\Api\Model\FreightOptionsShipmentServiceOptions::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \ShipStream\Ups\Api\Model\FreightOptionsShipmentServiceOptions::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \ShipStream\Ups\Api\Model\FreightOptionsShipmentServiceOptions();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('OriginLiftGateIndicator', $data)) {
            $object->setOriginLiftGateIndicator($data['OriginLiftGateIndicator']);
            unset($data['OriginLiftGateIndicator']);
        }
        if (\array_key_exists('DropoffAtUPSFacilityIndicator', $data)) {
            $object->setDropoffAtUPSFacilityIndicator($data['DropoffAtUPSFacilityIndicator']);
            unset($data['DropoffAtUPSFacilityIndicator']);
        }
        if (\array_key_exists('HoldForPickupIndicator', $data)) {
            $object->setHoldForPickupIndicator($data['HoldForPickupIndicator']);
            unset($data['HoldForPickupIndicator']);
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
        if ($data->isInitialized('originLiftGateIndicator') && null !== $data->getOriginLiftGateIndicator()) {
            $dataArray['OriginLiftGateIndicator'] = $data->getOriginLiftGateIndicator();
        }
        if ($data->isInitialized('dropoffAtUPSFacilityIndicator') && null !== $data->getDropoffAtUPSFacilityIndicator()) {
            $dataArray['DropoffAtUPSFacilityIndicator'] = $data->getDropoffAtUPSFacilityIndicator();
        }
        if ($data->isInitialized('holdForPickupIndicator') && null !== $data->getHoldForPickupIndicator()) {
            $dataArray['HoldForPickupIndicator'] = $data->getHoldForPickupIndicator();
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
        return [\ShipStream\Ups\Api\Model\FreightOptionsShipmentServiceOptions::class => false];
    }
}