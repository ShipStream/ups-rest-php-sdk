<?php

namespace ShipStream\Ups\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use ShipStream\Ups\Api\Runtime\Normalizer\CheckArray;
use ShipStream\Ups\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
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
    public function supportsDenormalization($data, $type, $format = null, array $context = []) : bool
    {
        return $type === 'ShipStream\\Ups\\Api\\Model\\PickupRateResponse';
    }
    public function supportsNormalization($data, $format = null, array $context = []) : bool
    {
        return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\PickupRateResponse';
    }
    /**
     * @return mixed
     */
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
            $object->setResponse($this->denormalizer->denormalize($data['Response'], 'ShipStream\\Ups\\Api\\Model\\PickupRateResponseResponse', 'json', $context));
            unset($data['Response']);
        }
        if (\array_key_exists('RateResult', $data)) {
            $object->setRateResult($this->denormalizer->denormalize($data['RateResult'], 'ShipStream\\Ups\\Api\\Model\\PickupRateResponseRateResult', 'json', $context));
            unset($data['RateResult']);
        }
        if (\array_key_exists('WeekendServiceTerritoryIndicator', $data)) {
            $object->setWeekendServiceTerritoryIndicator($data['WeekendServiceTerritoryIndicator']);
            unset($data['WeekendServiceTerritoryIndicator']);
        }
        if (\array_key_exists('WeekendServiceTerritory', $data)) {
            $object->setWeekendServiceTerritory($this->denormalizer->denormalize($data['WeekendServiceTerritory'], 'ShipStream\\Ups\\Api\\Model\\PickupRateResponseWeekendServiceTerritory', 'json', $context));
            unset($data['WeekendServiceTerritory']);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
            }
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize(mixed $object, ?string $format = null, array $context = []): \ArrayObject|array|string|int|float|bool|null
    {
        $data = [];
        $data['Response'] = $this->normalizer->normalize($object->getResponse(), 'json', $context);
        $data['RateResult'] = $this->normalizer->normalize($object->getRateResult(), 'json', $context);
        if ($object->isInitialized('weekendServiceTerritoryIndicator') && null !== $object->getWeekendServiceTerritoryIndicator()) {
            $data['WeekendServiceTerritoryIndicator'] = $object->getWeekendServiceTerritoryIndicator();
        }
        if ($object->isInitialized('weekendServiceTerritory') && null !== $object->getWeekendServiceTerritory()) {
            $data['WeekendServiceTerritory'] = $this->normalizer->normalize($object->getWeekendServiceTerritory(), 'json', $context);
        }
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('ShipStream\\Ups\\Api\\Model\\PickupRateResponse' => false);
    }
}