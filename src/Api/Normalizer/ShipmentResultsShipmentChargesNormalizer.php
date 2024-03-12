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
    class ShipmentResultsShipmentChargesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\ShipmentResultsShipmentCharges';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\ShipmentResultsShipmentCharges';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \ShipStream\Ups\Api\Model\ShipmentResultsShipmentCharges();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('RateChart', $data)) {
                $object->setRateChart($data['RateChart']);
                unset($data['RateChart']);
            }
            if (\array_key_exists('BaseServiceCharge', $data)) {
                $object->setBaseServiceCharge($this->denormalizer->denormalize($data['BaseServiceCharge'], 'ShipStream\\Ups\\Api\\Model\\ShipmentChargesBaseServiceCharge', 'json', $context));
                unset($data['BaseServiceCharge']);
            }
            if (\array_key_exists('TransportationCharges', $data)) {
                $object->setTransportationCharges($this->denormalizer->denormalize($data['TransportationCharges'], 'ShipStream\\Ups\\Api\\Model\\ShipmentChargesTransportationCharges', 'json', $context));
                unset($data['TransportationCharges']);
            }
            if (\array_key_exists('ItemizedCharges', $data)) {
                $values = [];
                foreach ($data['ItemizedCharges'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'ShipStream\\Ups\\Api\\Model\\ShipmentChargesItemizedCharges', 'json', $context);
                }
                $object->setItemizedCharges($values);
                unset($data['ItemizedCharges']);
            }
            if (\array_key_exists('ServiceOptionsCharges', $data)) {
                $object->setServiceOptionsCharges($this->denormalizer->denormalize($data['ServiceOptionsCharges'], 'ShipStream\\Ups\\Api\\Model\\ShipmentChargesServiceOptionsCharges', 'json', $context));
                unset($data['ServiceOptionsCharges']);
            }
            if (\array_key_exists('TaxCharges', $data)) {
                $values_1 = [];
                foreach ($data['TaxCharges'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'ShipStream\\Ups\\Api\\Model\\ShipmentChargesTaxCharges', 'json', $context);
                }
                $object->setTaxCharges($values_1);
                unset($data['TaxCharges']);
            }
            if (\array_key_exists('TotalCharges', $data)) {
                $object->setTotalCharges($this->denormalizer->denormalize($data['TotalCharges'], 'ShipStream\\Ups\\Api\\Model\\ShipmentChargesTotalCharges', 'json', $context));
                unset($data['TotalCharges']);
            }
            if (\array_key_exists('TotalChargesWithTaxes', $data)) {
                $object->setTotalChargesWithTaxes($this->denormalizer->denormalize($data['TotalChargesWithTaxes'], 'ShipStream\\Ups\\Api\\Model\\ShipmentChargesTotalChargesWithTaxes', 'json', $context));
                unset($data['TotalChargesWithTaxes']);
            }
            foreach ($data as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_2;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('rateChart') && null !== $object->getRateChart()) {
                $data['RateChart'] = $object->getRateChart();
            }
            if ($object->isInitialized('baseServiceCharge') && null !== $object->getBaseServiceCharge()) {
                $data['BaseServiceCharge'] = $this->normalizer->normalize($object->getBaseServiceCharge(), 'json', $context);
            }
            $data['TransportationCharges'] = $this->normalizer->normalize($object->getTransportationCharges(), 'json', $context);
            if ($object->isInitialized('itemizedCharges') && null !== $object->getItemizedCharges()) {
                $values = [];
                foreach ($object->getItemizedCharges() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['ItemizedCharges'] = $values;
            }
            $data['ServiceOptionsCharges'] = $this->normalizer->normalize($object->getServiceOptionsCharges(), 'json', $context);
            if ($object->isInitialized('taxCharges') && null !== $object->getTaxCharges()) {
                $values_1 = [];
                foreach ($object->getTaxCharges() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['TaxCharges'] = $values_1;
            }
            $data['TotalCharges'] = $this->normalizer->normalize($object->getTotalCharges(), 'json', $context);
            if ($object->isInitialized('totalChargesWithTaxes') && null !== $object->getTotalChargesWithTaxes()) {
                $data['TotalChargesWithTaxes'] = $this->normalizer->normalize($object->getTotalChargesWithTaxes(), 'json', $context);
            }
            foreach ($object as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_2;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['ShipStream\\Ups\\Api\\Model\\ShipmentResultsShipmentCharges' => false];
        }
    }
} else {
    class ShipmentResultsShipmentChargesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\ShipmentResultsShipmentCharges';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\ShipmentResultsShipmentCharges';
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
            $object = new \ShipStream\Ups\Api\Model\ShipmentResultsShipmentCharges();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('RateChart', $data)) {
                $object->setRateChart($data['RateChart']);
                unset($data['RateChart']);
            }
            if (\array_key_exists('BaseServiceCharge', $data)) {
                $object->setBaseServiceCharge($this->denormalizer->denormalize($data['BaseServiceCharge'], 'ShipStream\\Ups\\Api\\Model\\ShipmentChargesBaseServiceCharge', 'json', $context));
                unset($data['BaseServiceCharge']);
            }
            if (\array_key_exists('TransportationCharges', $data)) {
                $object->setTransportationCharges($this->denormalizer->denormalize($data['TransportationCharges'], 'ShipStream\\Ups\\Api\\Model\\ShipmentChargesTransportationCharges', 'json', $context));
                unset($data['TransportationCharges']);
            }
            if (\array_key_exists('ItemizedCharges', $data)) {
                $values = [];
                foreach ($data['ItemizedCharges'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'ShipStream\\Ups\\Api\\Model\\ShipmentChargesItemizedCharges', 'json', $context);
                }
                $object->setItemizedCharges($values);
                unset($data['ItemizedCharges']);
            }
            if (\array_key_exists('ServiceOptionsCharges', $data)) {
                $object->setServiceOptionsCharges($this->denormalizer->denormalize($data['ServiceOptionsCharges'], 'ShipStream\\Ups\\Api\\Model\\ShipmentChargesServiceOptionsCharges', 'json', $context));
                unset($data['ServiceOptionsCharges']);
            }
            if (\array_key_exists('TaxCharges', $data)) {
                $values_1 = [];
                foreach ($data['TaxCharges'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'ShipStream\\Ups\\Api\\Model\\ShipmentChargesTaxCharges', 'json', $context);
                }
                $object->setTaxCharges($values_1);
                unset($data['TaxCharges']);
            }
            if (\array_key_exists('TotalCharges', $data)) {
                $object->setTotalCharges($this->denormalizer->denormalize($data['TotalCharges'], 'ShipStream\\Ups\\Api\\Model\\ShipmentChargesTotalCharges', 'json', $context));
                unset($data['TotalCharges']);
            }
            if (\array_key_exists('TotalChargesWithTaxes', $data)) {
                $object->setTotalChargesWithTaxes($this->denormalizer->denormalize($data['TotalChargesWithTaxes'], 'ShipStream\\Ups\\Api\\Model\\ShipmentChargesTotalChargesWithTaxes', 'json', $context));
                unset($data['TotalChargesWithTaxes']);
            }
            foreach ($data as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_2;
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
            if ($object->isInitialized('rateChart') && null !== $object->getRateChart()) {
                $data['RateChart'] = $object->getRateChart();
            }
            if ($object->isInitialized('baseServiceCharge') && null !== $object->getBaseServiceCharge()) {
                $data['BaseServiceCharge'] = $this->normalizer->normalize($object->getBaseServiceCharge(), 'json', $context);
            }
            $data['TransportationCharges'] = $this->normalizer->normalize($object->getTransportationCharges(), 'json', $context);
            if ($object->isInitialized('itemizedCharges') && null !== $object->getItemizedCharges()) {
                $values = [];
                foreach ($object->getItemizedCharges() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['ItemizedCharges'] = $values;
            }
            $data['ServiceOptionsCharges'] = $this->normalizer->normalize($object->getServiceOptionsCharges(), 'json', $context);
            if ($object->isInitialized('taxCharges') && null !== $object->getTaxCharges()) {
                $values_1 = [];
                foreach ($object->getTaxCharges() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['TaxCharges'] = $values_1;
            }
            $data['TotalCharges'] = $this->normalizer->normalize($object->getTotalCharges(), 'json', $context);
            if ($object->isInitialized('totalChargesWithTaxes') && null !== $object->getTotalChargesWithTaxes()) {
                $data['TotalChargesWithTaxes'] = $this->normalizer->normalize($object->getTotalChargesWithTaxes(), 'json', $context);
            }
            foreach ($object as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_2;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['ShipStream\\Ups\\Api\\Model\\ShipmentResultsShipmentCharges' => false];
        }
    }
}