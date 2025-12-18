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
class PickupFacilitiesFacilityTimeDayOfWeekNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \ShipStream\Ups\Api\Model\PickupFacilitiesFacilityTimeDayOfWeek::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \ShipStream\Ups\Api\Model\PickupFacilitiesFacilityTimeDayOfWeek::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \ShipStream\Ups\Api\Model\PickupFacilitiesFacilityTimeDayOfWeek();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('Day', $data)) {
            $object->setDay($data['Day']);
            unset($data['Day']);
        }
        if (\array_key_exists('EarliestDropOfforPickup', $data)) {
            $object->setEarliestDropOfforPickup($data['EarliestDropOfforPickup']);
            unset($data['EarliestDropOfforPickup']);
        }
        if (\array_key_exists('LatestDropOfforPickup', $data)) {
            $object->setLatestDropOfforPickup($data['LatestDropOfforPickup']);
            unset($data['LatestDropOfforPickup']);
        }
        if (\array_key_exists('OpenHours', $data)) {
            $object->setOpenHours($data['OpenHours']);
            unset($data['OpenHours']);
        }
        if (\array_key_exists('CloseHours', $data)) {
            $object->setCloseHours($data['CloseHours']);
            unset($data['CloseHours']);
        }
        if (\array_key_exists('PrepTime', $data)) {
            $object->setPrepTime($data['PrepTime']);
            unset($data['PrepTime']);
        }
        if (\array_key_exists('LastDrop', $data)) {
            $object->setLastDrop($data['LastDrop']);
            unset($data['LastDrop']);
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
        $dataArray['Day'] = $data->getDay();
        if ($data->isInitialized('earliestDropOfforPickup') && null !== $data->getEarliestDropOfforPickup()) {
            $dataArray['EarliestDropOfforPickup'] = $data->getEarliestDropOfforPickup();
        }
        if ($data->isInitialized('latestDropOfforPickup') && null !== $data->getLatestDropOfforPickup()) {
            $dataArray['LatestDropOfforPickup'] = $data->getLatestDropOfforPickup();
        }
        $dataArray['OpenHours'] = $data->getOpenHours();
        $dataArray['CloseHours'] = $data->getCloseHours();
        if ($data->isInitialized('prepTime') && null !== $data->getPrepTime()) {
            $dataArray['PrepTime'] = $data->getPrepTime();
        }
        if ($data->isInitialized('lastDrop') && null !== $data->getLastDrop()) {
            $dataArray['LastDrop'] = $data->getLastDrop();
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
        return [\ShipStream\Ups\Api\Model\PickupFacilitiesFacilityTimeDayOfWeek::class => false];
    }
}