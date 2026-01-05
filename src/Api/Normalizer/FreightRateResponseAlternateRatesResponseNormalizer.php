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
class FreightRateResponseAlternateRatesResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \ShipStream\Ups\Api\Model\FreightRateResponseAlternateRatesResponse::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \ShipStream\Ups\Api\Model\FreightRateResponseAlternateRatesResponse::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \ShipStream\Ups\Api\Model\FreightRateResponseAlternateRatesResponse();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('AlternateRateType', $data)) {
            $object->setAlternateRateType($this->denormalizer->denormalize($data['AlternateRateType'], \ShipStream\Ups\Api\Model\AlternateRatesResponseAlternateRateType::class, 'json', $context));
            unset($data['AlternateRateType']);
        }
        if (\array_key_exists('Rate', $data)) {
            $values = [];
            foreach ($data['Rate'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \ShipStream\Ups\Api\Model\AlternateRatesResponseRate::class, 'json', $context);
            }
            $object->setRate($values);
            unset($data['Rate']);
        }
        if (\array_key_exists('FreightDensityRate', $data)) {
            $object->setFreightDensityRate($this->denormalizer->denormalize($data['FreightDensityRate'], \ShipStream\Ups\Api\Model\AlternateRatesResponseFreightDensityRate::class, 'json', $context));
            unset($data['FreightDensityRate']);
        }
        if (\array_key_exists('BillableShipmentWeight', $data)) {
            $object->setBillableShipmentWeight($this->denormalizer->denormalize($data['BillableShipmentWeight'], \ShipStream\Ups\Api\Model\AlternateRatesResponseBillableShipmentWeight::class, 'json', $context));
            unset($data['BillableShipmentWeight']);
        }
        if (\array_key_exists('TimeInTransit', $data)) {
            $object->setTimeInTransit($this->denormalizer->denormalize($data['TimeInTransit'], \ShipStream\Ups\Api\Model\AlternateRatesResponseTimeInTransit::class, 'json', $context));
            unset($data['TimeInTransit']);
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
        $dataArray['AlternateRateType'] = $this->normalizer->normalize($data->getAlternateRateType(), 'json', $context);
        $values = [];
        foreach ($data->getRate() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $dataArray['Rate'] = $values;
        if ($data->isInitialized('freightDensityRate') && null !== $data->getFreightDensityRate()) {
            $dataArray['FreightDensityRate'] = $this->normalizer->normalize($data->getFreightDensityRate(), 'json', $context);
        }
        if ($data->isInitialized('billableShipmentWeight') && null !== $data->getBillableShipmentWeight()) {
            $dataArray['BillableShipmentWeight'] = $this->normalizer->normalize($data->getBillableShipmentWeight(), 'json', $context);
        }
        if ($data->isInitialized('timeInTransit') && null !== $data->getTimeInTransit()) {
            $dataArray['TimeInTransit'] = $this->normalizer->normalize($data->getTimeInTransit(), 'json', $context);
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
        return [\ShipStream\Ups\Api\Model\FreightRateResponseAlternateRatesResponse::class => false];
    }
}