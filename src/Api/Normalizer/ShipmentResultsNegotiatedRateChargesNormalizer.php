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
    class ShipmentResultsNegotiatedRateChargesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\ShipmentResultsNegotiatedRateCharges';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\ShipmentResultsNegotiatedRateCharges';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \ShipStream\Ups\Api\Model\ShipmentResultsNegotiatedRateCharges();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('ItemizedCharges', $data)) {
                $values = [];
                foreach ($data['ItemizedCharges'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'ShipStream\\Ups\\Api\\Model\\NegotiatedRateChargesItemizedCharges', 'json', $context);
                }
                $object->setItemizedCharges($values);
                unset($data['ItemizedCharges']);
            }
            if (\array_key_exists('TaxCharges', $data)) {
                $values_1 = [];
                foreach ($data['TaxCharges'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'ShipStream\\Ups\\Api\\Model\\NegotiatedRateChargesTaxCharges', 'json', $context);
                }
                $object->setTaxCharges($values_1);
                unset($data['TaxCharges']);
            }
            if (\array_key_exists('TotalCharge', $data)) {
                $object->setTotalCharge($this->denormalizer->denormalize($data['TotalCharge'], 'ShipStream\\Ups\\Api\\Model\\NegotiatedRateChargesTotalCharge', 'json', $context));
                unset($data['TotalCharge']);
            }
            if (\array_key_exists('TotalChargesWithTaxes', $data)) {
                $object->setTotalChargesWithTaxes($this->denormalizer->denormalize($data['TotalChargesWithTaxes'], 'ShipStream\\Ups\\Api\\Model\\NegotiatedRateChargesTotalChargesWithTaxes', 'json', $context));
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
            if ($object->isInitialized('itemizedCharges') && null !== $object->getItemizedCharges()) {
                $values = [];
                foreach ($object->getItemizedCharges() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['ItemizedCharges'] = $values;
            }
            if ($object->isInitialized('taxCharges') && null !== $object->getTaxCharges()) {
                $values_1 = [];
                foreach ($object->getTaxCharges() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['TaxCharges'] = $values_1;
            }
            if ($object->isInitialized('totalCharge') && null !== $object->getTotalCharge()) {
                $data['TotalCharge'] = $this->normalizer->normalize($object->getTotalCharge(), 'json', $context);
            }
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
            return ['ShipStream\\Ups\\Api\\Model\\ShipmentResultsNegotiatedRateCharges' => false];
        }
    }
} else {
    class ShipmentResultsNegotiatedRateChargesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\ShipmentResultsNegotiatedRateCharges';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\ShipmentResultsNegotiatedRateCharges';
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
            $object = new \ShipStream\Ups\Api\Model\ShipmentResultsNegotiatedRateCharges();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('ItemizedCharges', $data)) {
                $values = [];
                foreach ($data['ItemizedCharges'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'ShipStream\\Ups\\Api\\Model\\NegotiatedRateChargesItemizedCharges', 'json', $context);
                }
                $object->setItemizedCharges($values);
                unset($data['ItemizedCharges']);
            }
            if (\array_key_exists('TaxCharges', $data)) {
                $values_1 = [];
                foreach ($data['TaxCharges'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'ShipStream\\Ups\\Api\\Model\\NegotiatedRateChargesTaxCharges', 'json', $context);
                }
                $object->setTaxCharges($values_1);
                unset($data['TaxCharges']);
            }
            if (\array_key_exists('TotalCharge', $data)) {
                $object->setTotalCharge($this->denormalizer->denormalize($data['TotalCharge'], 'ShipStream\\Ups\\Api\\Model\\NegotiatedRateChargesTotalCharge', 'json', $context));
                unset($data['TotalCharge']);
            }
            if (\array_key_exists('TotalChargesWithTaxes', $data)) {
                $object->setTotalChargesWithTaxes($this->denormalizer->denormalize($data['TotalChargesWithTaxes'], 'ShipStream\\Ups\\Api\\Model\\NegotiatedRateChargesTotalChargesWithTaxes', 'json', $context));
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
            if ($object->isInitialized('itemizedCharges') && null !== $object->getItemizedCharges()) {
                $values = [];
                foreach ($object->getItemizedCharges() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['ItemizedCharges'] = $values;
            }
            if ($object->isInitialized('taxCharges') && null !== $object->getTaxCharges()) {
                $values_1 = [];
                foreach ($object->getTaxCharges() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['TaxCharges'] = $values_1;
            }
            if ($object->isInitialized('totalCharge') && null !== $object->getTotalCharge()) {
                $data['TotalCharge'] = $this->normalizer->normalize($object->getTotalCharge(), 'json', $context);
            }
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
            return ['ShipStream\\Ups\\Api\\Model\\ShipmentResultsNegotiatedRateCharges' => false];
        }
    }
}