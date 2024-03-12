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
    class FreightRateResponseAlternateRatesResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\FreightRateResponseAlternateRatesResponse';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\FreightRateResponseAlternateRatesResponse';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
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
                $object->setAlternateRateType($this->denormalizer->denormalize($data['AlternateRateType'], 'ShipStream\\Ups\\Api\\Model\\AlternateRatesResponseAlternateRateType', 'json', $context));
                unset($data['AlternateRateType']);
            }
            if (\array_key_exists('Rate', $data)) {
                $values = [];
                foreach ($data['Rate'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'ShipStream\\Ups\\Api\\Model\\AlternateRatesResponseRate', 'json', $context);
                }
                $object->setRate($values);
                unset($data['Rate']);
            }
            if (\array_key_exists('FreightDensityRate', $data)) {
                $object->setFreightDensityRate($this->denormalizer->denormalize($data['FreightDensityRate'], 'ShipStream\\Ups\\Api\\Model\\AlternateRatesResponseFreightDensityRate', 'json', $context));
                unset($data['FreightDensityRate']);
            }
            if (\array_key_exists('BillableShipmentWeight', $data)) {
                $object->setBillableShipmentWeight($this->denormalizer->denormalize($data['BillableShipmentWeight'], 'ShipStream\\Ups\\Api\\Model\\AlternateRatesResponseBillableShipmentWeight', 'json', $context));
                unset($data['BillableShipmentWeight']);
            }
            if (\array_key_exists('TimeInTransit', $data)) {
                $object->setTimeInTransit($this->denormalizer->denormalize($data['TimeInTransit'], 'ShipStream\\Ups\\Api\\Model\\AlternateRatesResponseTimeInTransit', 'json', $context));
                unset($data['TimeInTransit']);
            }
            foreach ($data as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_1;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            $data['AlternateRateType'] = $this->normalizer->normalize($object->getAlternateRateType(), 'json', $context);
            $values = [];
            foreach ($object->getRate() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['Rate'] = $values;
            if ($object->isInitialized('freightDensityRate') && null !== $object->getFreightDensityRate()) {
                $data['FreightDensityRate'] = $this->normalizer->normalize($object->getFreightDensityRate(), 'json', $context);
            }
            if ($object->isInitialized('billableShipmentWeight') && null !== $object->getBillableShipmentWeight()) {
                $data['BillableShipmentWeight'] = $this->normalizer->normalize($object->getBillableShipmentWeight(), 'json', $context);
            }
            if ($object->isInitialized('timeInTransit') && null !== $object->getTimeInTransit()) {
                $data['TimeInTransit'] = $this->normalizer->normalize($object->getTimeInTransit(), 'json', $context);
            }
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['ShipStream\\Ups\\Api\\Model\\FreightRateResponseAlternateRatesResponse' => false];
        }
    }
} else {
    class FreightRateResponseAlternateRatesResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\FreightRateResponseAlternateRatesResponse';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\FreightRateResponseAlternateRatesResponse';
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
            $object = new \ShipStream\Ups\Api\Model\FreightRateResponseAlternateRatesResponse();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('AlternateRateType', $data)) {
                $object->setAlternateRateType($this->denormalizer->denormalize($data['AlternateRateType'], 'ShipStream\\Ups\\Api\\Model\\AlternateRatesResponseAlternateRateType', 'json', $context));
                unset($data['AlternateRateType']);
            }
            if (\array_key_exists('Rate', $data)) {
                $values = [];
                foreach ($data['Rate'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'ShipStream\\Ups\\Api\\Model\\AlternateRatesResponseRate', 'json', $context);
                }
                $object->setRate($values);
                unset($data['Rate']);
            }
            if (\array_key_exists('FreightDensityRate', $data)) {
                $object->setFreightDensityRate($this->denormalizer->denormalize($data['FreightDensityRate'], 'ShipStream\\Ups\\Api\\Model\\AlternateRatesResponseFreightDensityRate', 'json', $context));
                unset($data['FreightDensityRate']);
            }
            if (\array_key_exists('BillableShipmentWeight', $data)) {
                $object->setBillableShipmentWeight($this->denormalizer->denormalize($data['BillableShipmentWeight'], 'ShipStream\\Ups\\Api\\Model\\AlternateRatesResponseBillableShipmentWeight', 'json', $context));
                unset($data['BillableShipmentWeight']);
            }
            if (\array_key_exists('TimeInTransit', $data)) {
                $object->setTimeInTransit($this->denormalizer->denormalize($data['TimeInTransit'], 'ShipStream\\Ups\\Api\\Model\\AlternateRatesResponseTimeInTransit', 'json', $context));
                unset($data['TimeInTransit']);
            }
            foreach ($data as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_1;
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
            $data['AlternateRateType'] = $this->normalizer->normalize($object->getAlternateRateType(), 'json', $context);
            $values = [];
            foreach ($object->getRate() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['Rate'] = $values;
            if ($object->isInitialized('freightDensityRate') && null !== $object->getFreightDensityRate()) {
                $data['FreightDensityRate'] = $this->normalizer->normalize($object->getFreightDensityRate(), 'json', $context);
            }
            if ($object->isInitialized('billableShipmentWeight') && null !== $object->getBillableShipmentWeight()) {
                $data['BillableShipmentWeight'] = $this->normalizer->normalize($object->getBillableShipmentWeight(), 'json', $context);
            }
            if ($object->isInitialized('timeInTransit') && null !== $object->getTimeInTransit()) {
                $data['TimeInTransit'] = $this->normalizer->normalize($object->getTimeInTransit(), 'json', $context);
            }
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['ShipStream\\Ups\\Api\\Model\\FreightRateResponseAlternateRatesResponse' => false];
        }
    }
}