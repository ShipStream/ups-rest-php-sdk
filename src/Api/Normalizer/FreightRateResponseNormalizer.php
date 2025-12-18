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
class FreightRateResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \ShipStream\Ups\Api\Model\FreightRateResponse::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \ShipStream\Ups\Api\Model\FreightRateResponse::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \ShipStream\Ups\Api\Model\FreightRateResponse();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('Response', $data)) {
            $object->setResponse($this->denormalizer->denormalize($data['Response'], \ShipStream\Ups\Api\Model\FreightRateResponseResponse::class, 'json', $context));
            unset($data['Response']);
        }
        if (\array_key_exists('Rate', $data)) {
            $values = [];
            foreach ($data['Rate'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \ShipStream\Ups\Api\Model\FreightRateResponseRate::class, 'json', $context);
            }
            $object->setRate($values);
            unset($data['Rate']);
        }
        if (\array_key_exists('FreightDensityRate', $data)) {
            $object->setFreightDensityRate($this->denormalizer->denormalize($data['FreightDensityRate'], \ShipStream\Ups\Api\Model\FreightRateResponseFreightDensityRate::class, 'json', $context));
            unset($data['FreightDensityRate']);
        }
        if (\array_key_exists('Commodity', $data)) {
            $values_1 = [];
            foreach ($data['Commodity'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \ShipStream\Ups\Api\Model\FreightRateResponseCommodity::class, 'json', $context);
            }
            $object->setCommodity($values_1);
            unset($data['Commodity']);
        }
        if (\array_key_exists('TotalShipmentCharge', $data)) {
            $object->setTotalShipmentCharge($this->denormalizer->denormalize($data['TotalShipmentCharge'], \ShipStream\Ups\Api\Model\FreightRateResponseTotalShipmentCharge::class, 'json', $context));
            unset($data['TotalShipmentCharge']);
        }
        if (\array_key_exists('BillableShipmentWeight', $data)) {
            $object->setBillableShipmentWeight($this->denormalizer->denormalize($data['BillableShipmentWeight'], \ShipStream\Ups\Api\Model\FreightRateResponseBillableShipmentWeight::class, 'json', $context));
            unset($data['BillableShipmentWeight']);
        }
        if (\array_key_exists('DimensionalWeight', $data)) {
            $object->setDimensionalWeight($this->denormalizer->denormalize($data['DimensionalWeight'], \ShipStream\Ups\Api\Model\FreightRateResponseDimensionalWeight::class, 'json', $context));
            unset($data['DimensionalWeight']);
        }
        if (\array_key_exists('Service', $data)) {
            $object->setService($this->denormalizer->denormalize($data['Service'], \ShipStream\Ups\Api\Model\FreightRateResponseService::class, 'json', $context));
            unset($data['Service']);
        }
        if (\array_key_exists('GuaranteedIndicator', $data)) {
            $object->setGuaranteedIndicator($data['GuaranteedIndicator']);
            unset($data['GuaranteedIndicator']);
        }
        if (\array_key_exists('MinimumChargeAppliedIndicator', $data)) {
            $object->setMinimumChargeAppliedIndicator($data['MinimumChargeAppliedIndicator']);
            unset($data['MinimumChargeAppliedIndicator']);
        }
        if (\array_key_exists('AlternateRatesResponse', $data)) {
            $values_2 = [];
            foreach ($data['AlternateRatesResponse'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \ShipStream\Ups\Api\Model\FreightRateResponseAlternateRatesResponse::class, 'json', $context);
            }
            $object->setAlternateRatesResponse($values_2);
            unset($data['AlternateRatesResponse']);
        }
        if (\array_key_exists('TimeInTransit', $data)) {
            $object->setTimeInTransit($this->denormalizer->denormalize($data['TimeInTransit'], \ShipStream\Ups\Api\Model\FreightRateResponseTimeInTransit::class, 'json', $context));
            unset($data['TimeInTransit']);
        }
        if (\array_key_exists('HandlingUnits', $data)) {
            $object->setHandlingUnits($this->denormalizer->denormalize($data['HandlingUnits'], \ShipStream\Ups\Api\Model\FreightRateResponseHandlingUnits::class, 'json', $context));
            unset($data['HandlingUnits']);
        }
        if (\array_key_exists('QuoteNumber', $data)) {
            $object->setQuoteNumber($data['QuoteNumber']);
            unset($data['QuoteNumber']);
        }
        foreach ($data as $key => $value_3) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_3;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['Response'] = $this->normalizer->normalize($data->getResponse(), 'json', $context);
        if ($data->isInitialized('rate') && null !== $data->getRate()) {
            $values = [];
            foreach ($data->getRate() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['Rate'] = $values;
        }
        if ($data->isInitialized('freightDensityRate') && null !== $data->getFreightDensityRate()) {
            $dataArray['FreightDensityRate'] = $this->normalizer->normalize($data->getFreightDensityRate(), 'json', $context);
        }
        $values_1 = [];
        foreach ($data->getCommodity() as $value_1) {
            $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
        }
        $dataArray['Commodity'] = $values_1;
        if ($data->isInitialized('totalShipmentCharge') && null !== $data->getTotalShipmentCharge()) {
            $dataArray['TotalShipmentCharge'] = $this->normalizer->normalize($data->getTotalShipmentCharge(), 'json', $context);
        }
        if ($data->isInitialized('billableShipmentWeight') && null !== $data->getBillableShipmentWeight()) {
            $dataArray['BillableShipmentWeight'] = $this->normalizer->normalize($data->getBillableShipmentWeight(), 'json', $context);
        }
        if ($data->isInitialized('dimensionalWeight') && null !== $data->getDimensionalWeight()) {
            $dataArray['DimensionalWeight'] = $this->normalizer->normalize($data->getDimensionalWeight(), 'json', $context);
        }
        if ($data->isInitialized('service') && null !== $data->getService()) {
            $dataArray['Service'] = $this->normalizer->normalize($data->getService(), 'json', $context);
        }
        if ($data->isInitialized('guaranteedIndicator') && null !== $data->getGuaranteedIndicator()) {
            $dataArray['GuaranteedIndicator'] = $data->getGuaranteedIndicator();
        }
        if ($data->isInitialized('minimumChargeAppliedIndicator') && null !== $data->getMinimumChargeAppliedIndicator()) {
            $dataArray['MinimumChargeAppliedIndicator'] = $data->getMinimumChargeAppliedIndicator();
        }
        if ($data->isInitialized('alternateRatesResponse') && null !== $data->getAlternateRatesResponse()) {
            $values_2 = [];
            foreach ($data->getAlternateRatesResponse() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $dataArray['AlternateRatesResponse'] = $values_2;
        }
        if ($data->isInitialized('timeInTransit') && null !== $data->getTimeInTransit()) {
            $dataArray['TimeInTransit'] = $this->normalizer->normalize($data->getTimeInTransit(), 'json', $context);
        }
        if ($data->isInitialized('handlingUnits') && null !== $data->getHandlingUnits()) {
            $dataArray['HandlingUnits'] = $this->normalizer->normalize($data->getHandlingUnits(), 'json', $context);
        }
        if ($data->isInitialized('quoteNumber') && null !== $data->getQuoteNumber()) {
            $dataArray['QuoteNumber'] = $data->getQuoteNumber();
        }
        foreach ($data as $key => $value_3) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_3;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\ShipStream\Ups\Api\Model\FreightRateResponse::class => false];
    }
}