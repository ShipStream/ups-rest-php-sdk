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
use Symfony\Component\HttpKernel\Kernel;
if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class FreightRateResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\FreightRateResponse';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\FreightRateResponse';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
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
            if (\array_key_exists('Response', $data) && $data['Response'] !== null) {
                $object->setResponse($this->denormalizer->denormalize($data['Response'], 'ShipStream\\Ups\\Api\\Model\\FreightRateResponseResponse', 'json', $context));
                unset($data['Response']);
            }
            elseif (\array_key_exists('Response', $data) && $data['Response'] === null) {
                $object->setResponse(null);
            }
            if (\array_key_exists('Rate', $data) && $data['Rate'] !== null) {
                $values = [];
                foreach ($data['Rate'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'ShipStream\\Ups\\Api\\Model\\FreightRateResponseRate', 'json', $context);
                }
                $object->setRate($values);
                unset($data['Rate']);
            }
            elseif (\array_key_exists('Rate', $data) && $data['Rate'] === null) {
                $object->setRate(null);
            }
            if (\array_key_exists('FreightDensityRate', $data) && $data['FreightDensityRate'] !== null) {
                $object->setFreightDensityRate($this->denormalizer->denormalize($data['FreightDensityRate'], 'ShipStream\\Ups\\Api\\Model\\FreightRateResponseFreightDensityRate', 'json', $context));
                unset($data['FreightDensityRate']);
            }
            elseif (\array_key_exists('FreightDensityRate', $data) && $data['FreightDensityRate'] === null) {
                $object->setFreightDensityRate(null);
            }
            if (\array_key_exists('Commodity', $data) && $data['Commodity'] !== null) {
                $values_1 = [];
                foreach ($data['Commodity'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'ShipStream\\Ups\\Api\\Model\\FreightRateResponseCommodity', 'json', $context);
                }
                $object->setCommodity($values_1);
                unset($data['Commodity']);
            }
            elseif (\array_key_exists('Commodity', $data) && $data['Commodity'] === null) {
                $object->setCommodity(null);
            }
            if (\array_key_exists('TotalShipmentCharge', $data) && $data['TotalShipmentCharge'] !== null) {
                $object->setTotalShipmentCharge($this->denormalizer->denormalize($data['TotalShipmentCharge'], 'ShipStream\\Ups\\Api\\Model\\FreightRateResponseTotalShipmentCharge', 'json', $context));
                unset($data['TotalShipmentCharge']);
            }
            elseif (\array_key_exists('TotalShipmentCharge', $data) && $data['TotalShipmentCharge'] === null) {
                $object->setTotalShipmentCharge(null);
            }
            if (\array_key_exists('BillableShipmentWeight', $data) && $data['BillableShipmentWeight'] !== null) {
                $object->setBillableShipmentWeight($this->denormalizer->denormalize($data['BillableShipmentWeight'], 'ShipStream\\Ups\\Api\\Model\\FreightRateResponseBillableShipmentWeight', 'json', $context));
                unset($data['BillableShipmentWeight']);
            }
            elseif (\array_key_exists('BillableShipmentWeight', $data) && $data['BillableShipmentWeight'] === null) {
                $object->setBillableShipmentWeight(null);
            }
            if (\array_key_exists('DimensionalWeight', $data) && $data['DimensionalWeight'] !== null) {
                $object->setDimensionalWeight($this->denormalizer->denormalize($data['DimensionalWeight'], 'ShipStream\\Ups\\Api\\Model\\FreightRateResponseDimensionalWeight', 'json', $context));
                unset($data['DimensionalWeight']);
            }
            elseif (\array_key_exists('DimensionalWeight', $data) && $data['DimensionalWeight'] === null) {
                $object->setDimensionalWeight(null);
            }
            if (\array_key_exists('Service', $data) && $data['Service'] !== null) {
                $object->setService($this->denormalizer->denormalize($data['Service'], 'ShipStream\\Ups\\Api\\Model\\FreightRateResponseService', 'json', $context));
                unset($data['Service']);
            }
            elseif (\array_key_exists('Service', $data) && $data['Service'] === null) {
                $object->setService(null);
            }
            if (\array_key_exists('GuaranteedIndicator', $data) && $data['GuaranteedIndicator'] !== null) {
                $object->setGuaranteedIndicator($data['GuaranteedIndicator']);
                unset($data['GuaranteedIndicator']);
            }
            elseif (\array_key_exists('GuaranteedIndicator', $data) && $data['GuaranteedIndicator'] === null) {
                $object->setGuaranteedIndicator(null);
            }
            if (\array_key_exists('MinimumChargeAppliedIndicator', $data) && $data['MinimumChargeAppliedIndicator'] !== null) {
                $object->setMinimumChargeAppliedIndicator($data['MinimumChargeAppliedIndicator']);
                unset($data['MinimumChargeAppliedIndicator']);
            }
            elseif (\array_key_exists('MinimumChargeAppliedIndicator', $data) && $data['MinimumChargeAppliedIndicator'] === null) {
                $object->setMinimumChargeAppliedIndicator(null);
            }
            if (\array_key_exists('AlternateRatesResponse', $data) && $data['AlternateRatesResponse'] !== null) {
                $values_2 = [];
                foreach ($data['AlternateRatesResponse'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, 'ShipStream\\Ups\\Api\\Model\\FreightRateResponseAlternateRatesResponse', 'json', $context);
                }
                $object->setAlternateRatesResponse($values_2);
                unset($data['AlternateRatesResponse']);
            }
            elseif (\array_key_exists('AlternateRatesResponse', $data) && $data['AlternateRatesResponse'] === null) {
                $object->setAlternateRatesResponse(null);
            }
            if (\array_key_exists('TimeInTransit', $data) && $data['TimeInTransit'] !== null) {
                $object->setTimeInTransit($this->denormalizer->denormalize($data['TimeInTransit'], 'ShipStream\\Ups\\Api\\Model\\FreightRateResponseTimeInTransit', 'json', $context));
                unset($data['TimeInTransit']);
            }
            elseif (\array_key_exists('TimeInTransit', $data) && $data['TimeInTransit'] === null) {
                $object->setTimeInTransit(null);
            }
            if (\array_key_exists('HandlingUnits', $data) && $data['HandlingUnits'] !== null) {
                $object->setHandlingUnits($this->denormalizer->denormalize($data['HandlingUnits'], 'ShipStream\\Ups\\Api\\Model\\FreightRateResponseHandlingUnits', 'json', $context));
                unset($data['HandlingUnits']);
            }
            elseif (\array_key_exists('HandlingUnits', $data) && $data['HandlingUnits'] === null) {
                $object->setHandlingUnits(null);
            }
            if (\array_key_exists('QuoteNumber', $data) && $data['QuoteNumber'] !== null) {
                $object->setQuoteNumber($data['QuoteNumber']);
                unset($data['QuoteNumber']);
            }
            elseif (\array_key_exists('QuoteNumber', $data) && $data['QuoteNumber'] === null) {
                $object->setQuoteNumber(null);
            }
            foreach ($data as $key => $value_3) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_3;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            $data['Response'] = $this->normalizer->normalize($object->getResponse(), 'json', $context);
            if ($object->isInitialized('rate') && null !== $object->getRate()) {
                $values = [];
                foreach ($object->getRate() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['Rate'] = $values;
            }
            if ($object->isInitialized('freightDensityRate') && null !== $object->getFreightDensityRate()) {
                $data['FreightDensityRate'] = $this->normalizer->normalize($object->getFreightDensityRate(), 'json', $context);
            }
            $values_1 = [];
            foreach ($object->getCommodity() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['Commodity'] = $values_1;
            if ($object->isInitialized('totalShipmentCharge') && null !== $object->getTotalShipmentCharge()) {
                $data['TotalShipmentCharge'] = $this->normalizer->normalize($object->getTotalShipmentCharge(), 'json', $context);
            }
            if ($object->isInitialized('billableShipmentWeight') && null !== $object->getBillableShipmentWeight()) {
                $data['BillableShipmentWeight'] = $this->normalizer->normalize($object->getBillableShipmentWeight(), 'json', $context);
            }
            if ($object->isInitialized('dimensionalWeight') && null !== $object->getDimensionalWeight()) {
                $data['DimensionalWeight'] = $this->normalizer->normalize($object->getDimensionalWeight(), 'json', $context);
            }
            if ($object->isInitialized('service') && null !== $object->getService()) {
                $data['Service'] = $this->normalizer->normalize($object->getService(), 'json', $context);
            }
            if ($object->isInitialized('guaranteedIndicator') && null !== $object->getGuaranteedIndicator()) {
                $data['GuaranteedIndicator'] = $object->getGuaranteedIndicator();
            }
            if ($object->isInitialized('minimumChargeAppliedIndicator') && null !== $object->getMinimumChargeAppliedIndicator()) {
                $data['MinimumChargeAppliedIndicator'] = $object->getMinimumChargeAppliedIndicator();
            }
            if ($object->isInitialized('alternateRatesResponse') && null !== $object->getAlternateRatesResponse()) {
                $values_2 = [];
                foreach ($object->getAlternateRatesResponse() as $value_2) {
                    $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
                }
                $data['AlternateRatesResponse'] = $values_2;
            }
            if ($object->isInitialized('timeInTransit') && null !== $object->getTimeInTransit()) {
                $data['TimeInTransit'] = $this->normalizer->normalize($object->getTimeInTransit(), 'json', $context);
            }
            if ($object->isInitialized('handlingUnits') && null !== $object->getHandlingUnits()) {
                $data['HandlingUnits'] = $this->normalizer->normalize($object->getHandlingUnits(), 'json', $context);
            }
            if ($object->isInitialized('quoteNumber') && null !== $object->getQuoteNumber()) {
                $data['QuoteNumber'] = $object->getQuoteNumber();
            }
            foreach ($object as $key => $value_3) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_3;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['ShipStream\\Ups\\Api\\Model\\FreightRateResponse' => false];
        }
    }
} else {
    class FreightRateResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\FreightRateResponse';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\FreightRateResponse';
        }
        /**
         * @return mixed
         */
        public function denormalize($data, $type, $format = null, array $context = [])
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
            if (\array_key_exists('Response', $data) && $data['Response'] !== null) {
                $object->setResponse($this->denormalizer->denormalize($data['Response'], 'ShipStream\\Ups\\Api\\Model\\FreightRateResponseResponse', 'json', $context));
                unset($data['Response']);
            }
            elseif (\array_key_exists('Response', $data) && $data['Response'] === null) {
                $object->setResponse(null);
            }
            if (\array_key_exists('Rate', $data) && $data['Rate'] !== null) {
                $values = [];
                foreach ($data['Rate'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'ShipStream\\Ups\\Api\\Model\\FreightRateResponseRate', 'json', $context);
                }
                $object->setRate($values);
                unset($data['Rate']);
            }
            elseif (\array_key_exists('Rate', $data) && $data['Rate'] === null) {
                $object->setRate(null);
            }
            if (\array_key_exists('FreightDensityRate', $data) && $data['FreightDensityRate'] !== null) {
                $object->setFreightDensityRate($this->denormalizer->denormalize($data['FreightDensityRate'], 'ShipStream\\Ups\\Api\\Model\\FreightRateResponseFreightDensityRate', 'json', $context));
                unset($data['FreightDensityRate']);
            }
            elseif (\array_key_exists('FreightDensityRate', $data) && $data['FreightDensityRate'] === null) {
                $object->setFreightDensityRate(null);
            }
            if (\array_key_exists('Commodity', $data) && $data['Commodity'] !== null) {
                $values_1 = [];
                foreach ($data['Commodity'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'ShipStream\\Ups\\Api\\Model\\FreightRateResponseCommodity', 'json', $context);
                }
                $object->setCommodity($values_1);
                unset($data['Commodity']);
            }
            elseif (\array_key_exists('Commodity', $data) && $data['Commodity'] === null) {
                $object->setCommodity(null);
            }
            if (\array_key_exists('TotalShipmentCharge', $data) && $data['TotalShipmentCharge'] !== null) {
                $object->setTotalShipmentCharge($this->denormalizer->denormalize($data['TotalShipmentCharge'], 'ShipStream\\Ups\\Api\\Model\\FreightRateResponseTotalShipmentCharge', 'json', $context));
                unset($data['TotalShipmentCharge']);
            }
            elseif (\array_key_exists('TotalShipmentCharge', $data) && $data['TotalShipmentCharge'] === null) {
                $object->setTotalShipmentCharge(null);
            }
            if (\array_key_exists('BillableShipmentWeight', $data) && $data['BillableShipmentWeight'] !== null) {
                $object->setBillableShipmentWeight($this->denormalizer->denormalize($data['BillableShipmentWeight'], 'ShipStream\\Ups\\Api\\Model\\FreightRateResponseBillableShipmentWeight', 'json', $context));
                unset($data['BillableShipmentWeight']);
            }
            elseif (\array_key_exists('BillableShipmentWeight', $data) && $data['BillableShipmentWeight'] === null) {
                $object->setBillableShipmentWeight(null);
            }
            if (\array_key_exists('DimensionalWeight', $data) && $data['DimensionalWeight'] !== null) {
                $object->setDimensionalWeight($this->denormalizer->denormalize($data['DimensionalWeight'], 'ShipStream\\Ups\\Api\\Model\\FreightRateResponseDimensionalWeight', 'json', $context));
                unset($data['DimensionalWeight']);
            }
            elseif (\array_key_exists('DimensionalWeight', $data) && $data['DimensionalWeight'] === null) {
                $object->setDimensionalWeight(null);
            }
            if (\array_key_exists('Service', $data) && $data['Service'] !== null) {
                $object->setService($this->denormalizer->denormalize($data['Service'], 'ShipStream\\Ups\\Api\\Model\\FreightRateResponseService', 'json', $context));
                unset($data['Service']);
            }
            elseif (\array_key_exists('Service', $data) && $data['Service'] === null) {
                $object->setService(null);
            }
            if (\array_key_exists('GuaranteedIndicator', $data) && $data['GuaranteedIndicator'] !== null) {
                $object->setGuaranteedIndicator($data['GuaranteedIndicator']);
                unset($data['GuaranteedIndicator']);
            }
            elseif (\array_key_exists('GuaranteedIndicator', $data) && $data['GuaranteedIndicator'] === null) {
                $object->setGuaranteedIndicator(null);
            }
            if (\array_key_exists('MinimumChargeAppliedIndicator', $data) && $data['MinimumChargeAppliedIndicator'] !== null) {
                $object->setMinimumChargeAppliedIndicator($data['MinimumChargeAppliedIndicator']);
                unset($data['MinimumChargeAppliedIndicator']);
            }
            elseif (\array_key_exists('MinimumChargeAppliedIndicator', $data) && $data['MinimumChargeAppliedIndicator'] === null) {
                $object->setMinimumChargeAppliedIndicator(null);
            }
            if (\array_key_exists('AlternateRatesResponse', $data) && $data['AlternateRatesResponse'] !== null) {
                $values_2 = [];
                foreach ($data['AlternateRatesResponse'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, 'ShipStream\\Ups\\Api\\Model\\FreightRateResponseAlternateRatesResponse', 'json', $context);
                }
                $object->setAlternateRatesResponse($values_2);
                unset($data['AlternateRatesResponse']);
            }
            elseif (\array_key_exists('AlternateRatesResponse', $data) && $data['AlternateRatesResponse'] === null) {
                $object->setAlternateRatesResponse(null);
            }
            if (\array_key_exists('TimeInTransit', $data) && $data['TimeInTransit'] !== null) {
                $object->setTimeInTransit($this->denormalizer->denormalize($data['TimeInTransit'], 'ShipStream\\Ups\\Api\\Model\\FreightRateResponseTimeInTransit', 'json', $context));
                unset($data['TimeInTransit']);
            }
            elseif (\array_key_exists('TimeInTransit', $data) && $data['TimeInTransit'] === null) {
                $object->setTimeInTransit(null);
            }
            if (\array_key_exists('HandlingUnits', $data) && $data['HandlingUnits'] !== null) {
                $object->setHandlingUnits($this->denormalizer->denormalize($data['HandlingUnits'], 'ShipStream\\Ups\\Api\\Model\\FreightRateResponseHandlingUnits', 'json', $context));
                unset($data['HandlingUnits']);
            }
            elseif (\array_key_exists('HandlingUnits', $data) && $data['HandlingUnits'] === null) {
                $object->setHandlingUnits(null);
            }
            if (\array_key_exists('QuoteNumber', $data) && $data['QuoteNumber'] !== null) {
                $object->setQuoteNumber($data['QuoteNumber']);
                unset($data['QuoteNumber']);
            }
            elseif (\array_key_exists('QuoteNumber', $data) && $data['QuoteNumber'] === null) {
                $object->setQuoteNumber(null);
            }
            foreach ($data as $key => $value_3) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_3;
                }
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            $data['Response'] = $this->normalizer->normalize($object->getResponse(), 'json', $context);
            if ($object->isInitialized('rate') && null !== $object->getRate()) {
                $values = [];
                foreach ($object->getRate() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['Rate'] = $values;
            }
            if ($object->isInitialized('freightDensityRate') && null !== $object->getFreightDensityRate()) {
                $data['FreightDensityRate'] = $this->normalizer->normalize($object->getFreightDensityRate(), 'json', $context);
            }
            $values_1 = [];
            foreach ($object->getCommodity() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['Commodity'] = $values_1;
            if ($object->isInitialized('totalShipmentCharge') && null !== $object->getTotalShipmentCharge()) {
                $data['TotalShipmentCharge'] = $this->normalizer->normalize($object->getTotalShipmentCharge(), 'json', $context);
            }
            if ($object->isInitialized('billableShipmentWeight') && null !== $object->getBillableShipmentWeight()) {
                $data['BillableShipmentWeight'] = $this->normalizer->normalize($object->getBillableShipmentWeight(), 'json', $context);
            }
            if ($object->isInitialized('dimensionalWeight') && null !== $object->getDimensionalWeight()) {
                $data['DimensionalWeight'] = $this->normalizer->normalize($object->getDimensionalWeight(), 'json', $context);
            }
            if ($object->isInitialized('service') && null !== $object->getService()) {
                $data['Service'] = $this->normalizer->normalize($object->getService(), 'json', $context);
            }
            if ($object->isInitialized('guaranteedIndicator') && null !== $object->getGuaranteedIndicator()) {
                $data['GuaranteedIndicator'] = $object->getGuaranteedIndicator();
            }
            if ($object->isInitialized('minimumChargeAppliedIndicator') && null !== $object->getMinimumChargeAppliedIndicator()) {
                $data['MinimumChargeAppliedIndicator'] = $object->getMinimumChargeAppliedIndicator();
            }
            if ($object->isInitialized('alternateRatesResponse') && null !== $object->getAlternateRatesResponse()) {
                $values_2 = [];
                foreach ($object->getAlternateRatesResponse() as $value_2) {
                    $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
                }
                $data['AlternateRatesResponse'] = $values_2;
            }
            if ($object->isInitialized('timeInTransit') && null !== $object->getTimeInTransit()) {
                $data['TimeInTransit'] = $this->normalizer->normalize($object->getTimeInTransit(), 'json', $context);
            }
            if ($object->isInitialized('handlingUnits') && null !== $object->getHandlingUnits()) {
                $data['HandlingUnits'] = $this->normalizer->normalize($object->getHandlingUnits(), 'json', $context);
            }
            if ($object->isInitialized('quoteNumber') && null !== $object->getQuoteNumber()) {
                $data['QuoteNumber'] = $object->getQuoteNumber();
            }
            foreach ($object as $key => $value_3) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_3;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['ShipStream\\Ups\\Api\\Model\\FreightRateResponse' => false];
        }
    }
}