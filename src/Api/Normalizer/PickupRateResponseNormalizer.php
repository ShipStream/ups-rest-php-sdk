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
class PickupRateResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \ShipStream\Ups\Api\Model\PickupRateResponse::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \ShipStream\Ups\Api\Model\PickupRateResponse::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \ShipStream\Ups\Api\Model\PickupRateResponse();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('Response', $data)) {
            $object->setResponse($this->denormalizer->denormalize($data['Response'], \ShipStream\Ups\Api\Model\PickupRateResponseResponse::class, 'json', $context));
            unset($data['Response']);
        }
        if (\array_key_exists('RateResult', $data)) {
            $object->setRateResult($this->denormalizer->denormalize($data['RateResult'], \ShipStream\Ups\Api\Model\PickupRateResponseRateResult::class, 'json', $context));
            unset($data['RateResult']);
        }
        if (\array_key_exists('WeekendServiceTerritoryIndicator', $data)) {
            $object->setWeekendServiceTerritoryIndicator($data['WeekendServiceTerritoryIndicator']);
            unset($data['WeekendServiceTerritoryIndicator']);
        }
        if (\array_key_exists('WeekendServiceTerritory', $data)) {
            $object->setWeekendServiceTerritory($this->denormalizer->denormalize($data['WeekendServiceTerritory'], \ShipStream\Ups\Api\Model\PickupRateResponseWeekendServiceTerritory::class, 'json', $context));
            unset($data['WeekendServiceTerritory']);
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
        $dataArray['Response'] = $this->normalizer->normalize($data->getResponse(), 'json', $context);
        $dataArray['RateResult'] = $this->normalizer->normalize($data->getRateResult(), 'json', $context);
        if ($data->isInitialized('weekendServiceTerritoryIndicator') && null !== $data->getWeekendServiceTerritoryIndicator()) {
            $dataArray['WeekendServiceTerritoryIndicator'] = $data->getWeekendServiceTerritoryIndicator();
        }
        if ($data->isInitialized('weekendServiceTerritory') && null !== $data->getWeekendServiceTerritory()) {
            $dataArray['WeekendServiceTerritory'] = $this->normalizer->normalize($data->getWeekendServiceTerritory(), 'json', $context);
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
        return [\ShipStream\Ups\Api\Model\PickupRateResponse::class => false];
    }
}