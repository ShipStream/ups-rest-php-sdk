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
    class RatedShipmentRatedPackageNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\RatedShipmentRatedPackage';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\RatedShipmentRatedPackage';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \ShipStream\Ups\Api\Model\RatedShipmentRatedPackage();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('BaseServiceCharge', $data)) {
                $object->setBaseServiceCharge($this->denormalizer->denormalize($data['BaseServiceCharge'], 'ShipStream\\Ups\\Api\\Model\\RatedPackageBaseServiceCharge', 'json', $context));
                unset($data['BaseServiceCharge']);
            }
            if (\array_key_exists('TransportationCharges', $data)) {
                $object->setTransportationCharges($this->denormalizer->denormalize($data['TransportationCharges'], 'ShipStream\\Ups\\Api\\Model\\RatedPackageTransportationCharges', 'json', $context));
                unset($data['TransportationCharges']);
            }
            if (\array_key_exists('ServiceOptionsCharges', $data)) {
                $object->setServiceOptionsCharges($this->denormalizer->denormalize($data['ServiceOptionsCharges'], 'ShipStream\\Ups\\Api\\Model\\RatedPackageServiceOptionsCharges', 'json', $context));
                unset($data['ServiceOptionsCharges']);
            }
            if (\array_key_exists('TotalCharges', $data)) {
                $object->setTotalCharges($this->denormalizer->denormalize($data['TotalCharges'], 'ShipStream\\Ups\\Api\\Model\\RatedPackageTotalCharges', 'json', $context));
                unset($data['TotalCharges']);
            }
            if (\array_key_exists('Weight', $data)) {
                $object->setWeight($data['Weight']);
                unset($data['Weight']);
            }
            if (\array_key_exists('BillingWeight', $data)) {
                $object->setBillingWeight($this->denormalizer->denormalize($data['BillingWeight'], 'ShipStream\\Ups\\Api\\Model\\RatedPackageBillingWeight', 'json', $context));
                unset($data['BillingWeight']);
            }
            if (\array_key_exists('Accessorial', $data)) {
                $values = [];
                foreach ($data['Accessorial'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'ShipStream\\Ups\\Api\\Model\\RatedPackageAccessorial', 'json', $context);
                }
                $object->setAccessorial($values);
                unset($data['Accessorial']);
            }
            if (\array_key_exists('ItemizedCharges', $data)) {
                $values_1 = [];
                foreach ($data['ItemizedCharges'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'ShipStream\\Ups\\Api\\Model\\RatedPackageItemizedCharges', 'json', $context);
                }
                $object->setItemizedCharges($values_1);
                unset($data['ItemizedCharges']);
            }
            if (\array_key_exists('NegotiatedCharges', $data)) {
                $object->setNegotiatedCharges($this->denormalizer->denormalize($data['NegotiatedCharges'], 'ShipStream\\Ups\\Api\\Model\\RatedPackageNegotiatedCharges', 'json', $context));
                unset($data['NegotiatedCharges']);
            }
            if (\array_key_exists('SimpleRate', $data)) {
                $object->setSimpleRate($this->denormalizer->denormalize($data['SimpleRate'], 'ShipStream\\Ups\\Api\\Model\\RatedPackageSimpleRate', 'json', $context));
                unset($data['SimpleRate']);
            }
            if (\array_key_exists('RateModifier', $data)) {
                $values_2 = [];
                foreach ($data['RateModifier'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, 'ShipStream\\Ups\\Api\\Model\\RatedPackageRateModifier', 'json', $context);
                }
                $object->setRateModifier($values_2);
                unset($data['RateModifier']);
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
            if ($object->isInitialized('baseServiceCharge') && null !== $object->getBaseServiceCharge()) {
                $data['BaseServiceCharge'] = $this->normalizer->normalize($object->getBaseServiceCharge(), 'json', $context);
            }
            if ($object->isInitialized('transportationCharges') && null !== $object->getTransportationCharges()) {
                $data['TransportationCharges'] = $this->normalizer->normalize($object->getTransportationCharges(), 'json', $context);
            }
            if ($object->isInitialized('serviceOptionsCharges') && null !== $object->getServiceOptionsCharges()) {
                $data['ServiceOptionsCharges'] = $this->normalizer->normalize($object->getServiceOptionsCharges(), 'json', $context);
            }
            if ($object->isInitialized('totalCharges') && null !== $object->getTotalCharges()) {
                $data['TotalCharges'] = $this->normalizer->normalize($object->getTotalCharges(), 'json', $context);
            }
            if ($object->isInitialized('weight') && null !== $object->getWeight()) {
                $data['Weight'] = $object->getWeight();
            }
            if ($object->isInitialized('billingWeight') && null !== $object->getBillingWeight()) {
                $data['BillingWeight'] = $this->normalizer->normalize($object->getBillingWeight(), 'json', $context);
            }
            if ($object->isInitialized('accessorial') && null !== $object->getAccessorial()) {
                $values = [];
                foreach ($object->getAccessorial() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['Accessorial'] = $values;
            }
            if ($object->isInitialized('itemizedCharges') && null !== $object->getItemizedCharges()) {
                $values_1 = [];
                foreach ($object->getItemizedCharges() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['ItemizedCharges'] = $values_1;
            }
            if ($object->isInitialized('negotiatedCharges') && null !== $object->getNegotiatedCharges()) {
                $data['NegotiatedCharges'] = $this->normalizer->normalize($object->getNegotiatedCharges(), 'json', $context);
            }
            if ($object->isInitialized('simpleRate') && null !== $object->getSimpleRate()) {
                $data['SimpleRate'] = $this->normalizer->normalize($object->getSimpleRate(), 'json', $context);
            }
            if ($object->isInitialized('rateModifier') && null !== $object->getRateModifier()) {
                $values_2 = [];
                foreach ($object->getRateModifier() as $value_2) {
                    $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
                }
                $data['RateModifier'] = $values_2;
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
            return ['ShipStream\\Ups\\Api\\Model\\RatedShipmentRatedPackage' => false];
        }
    }
} else {
    class RatedShipmentRatedPackageNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\RatedShipmentRatedPackage';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\RatedShipmentRatedPackage';
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
            $object = new \ShipStream\Ups\Api\Model\RatedShipmentRatedPackage();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('BaseServiceCharge', $data)) {
                $object->setBaseServiceCharge($this->denormalizer->denormalize($data['BaseServiceCharge'], 'ShipStream\\Ups\\Api\\Model\\RatedPackageBaseServiceCharge', 'json', $context));
                unset($data['BaseServiceCharge']);
            }
            if (\array_key_exists('TransportationCharges', $data)) {
                $object->setTransportationCharges($this->denormalizer->denormalize($data['TransportationCharges'], 'ShipStream\\Ups\\Api\\Model\\RatedPackageTransportationCharges', 'json', $context));
                unset($data['TransportationCharges']);
            }
            if (\array_key_exists('ServiceOptionsCharges', $data)) {
                $object->setServiceOptionsCharges($this->denormalizer->denormalize($data['ServiceOptionsCharges'], 'ShipStream\\Ups\\Api\\Model\\RatedPackageServiceOptionsCharges', 'json', $context));
                unset($data['ServiceOptionsCharges']);
            }
            if (\array_key_exists('TotalCharges', $data)) {
                $object->setTotalCharges($this->denormalizer->denormalize($data['TotalCharges'], 'ShipStream\\Ups\\Api\\Model\\RatedPackageTotalCharges', 'json', $context));
                unset($data['TotalCharges']);
            }
            if (\array_key_exists('Weight', $data)) {
                $object->setWeight($data['Weight']);
                unset($data['Weight']);
            }
            if (\array_key_exists('BillingWeight', $data)) {
                $object->setBillingWeight($this->denormalizer->denormalize($data['BillingWeight'], 'ShipStream\\Ups\\Api\\Model\\RatedPackageBillingWeight', 'json', $context));
                unset($data['BillingWeight']);
            }
            if (\array_key_exists('Accessorial', $data)) {
                $values = [];
                foreach ($data['Accessorial'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'ShipStream\\Ups\\Api\\Model\\RatedPackageAccessorial', 'json', $context);
                }
                $object->setAccessorial($values);
                unset($data['Accessorial']);
            }
            if (\array_key_exists('ItemizedCharges', $data)) {
                $values_1 = [];
                foreach ($data['ItemizedCharges'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'ShipStream\\Ups\\Api\\Model\\RatedPackageItemizedCharges', 'json', $context);
                }
                $object->setItemizedCharges($values_1);
                unset($data['ItemizedCharges']);
            }
            if (\array_key_exists('NegotiatedCharges', $data)) {
                $object->setNegotiatedCharges($this->denormalizer->denormalize($data['NegotiatedCharges'], 'ShipStream\\Ups\\Api\\Model\\RatedPackageNegotiatedCharges', 'json', $context));
                unset($data['NegotiatedCharges']);
            }
            if (\array_key_exists('SimpleRate', $data)) {
                $object->setSimpleRate($this->denormalizer->denormalize($data['SimpleRate'], 'ShipStream\\Ups\\Api\\Model\\RatedPackageSimpleRate', 'json', $context));
                unset($data['SimpleRate']);
            }
            if (\array_key_exists('RateModifier', $data)) {
                $values_2 = [];
                foreach ($data['RateModifier'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, 'ShipStream\\Ups\\Api\\Model\\RatedPackageRateModifier', 'json', $context);
                }
                $object->setRateModifier($values_2);
                unset($data['RateModifier']);
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
            if ($object->isInitialized('baseServiceCharge') && null !== $object->getBaseServiceCharge()) {
                $data['BaseServiceCharge'] = $this->normalizer->normalize($object->getBaseServiceCharge(), 'json', $context);
            }
            if ($object->isInitialized('transportationCharges') && null !== $object->getTransportationCharges()) {
                $data['TransportationCharges'] = $this->normalizer->normalize($object->getTransportationCharges(), 'json', $context);
            }
            if ($object->isInitialized('serviceOptionsCharges') && null !== $object->getServiceOptionsCharges()) {
                $data['ServiceOptionsCharges'] = $this->normalizer->normalize($object->getServiceOptionsCharges(), 'json', $context);
            }
            if ($object->isInitialized('totalCharges') && null !== $object->getTotalCharges()) {
                $data['TotalCharges'] = $this->normalizer->normalize($object->getTotalCharges(), 'json', $context);
            }
            if ($object->isInitialized('weight') && null !== $object->getWeight()) {
                $data['Weight'] = $object->getWeight();
            }
            if ($object->isInitialized('billingWeight') && null !== $object->getBillingWeight()) {
                $data['BillingWeight'] = $this->normalizer->normalize($object->getBillingWeight(), 'json', $context);
            }
            if ($object->isInitialized('accessorial') && null !== $object->getAccessorial()) {
                $values = [];
                foreach ($object->getAccessorial() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['Accessorial'] = $values;
            }
            if ($object->isInitialized('itemizedCharges') && null !== $object->getItemizedCharges()) {
                $values_1 = [];
                foreach ($object->getItemizedCharges() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['ItemizedCharges'] = $values_1;
            }
            if ($object->isInitialized('negotiatedCharges') && null !== $object->getNegotiatedCharges()) {
                $data['NegotiatedCharges'] = $this->normalizer->normalize($object->getNegotiatedCharges(), 'json', $context);
            }
            if ($object->isInitialized('simpleRate') && null !== $object->getSimpleRate()) {
                $data['SimpleRate'] = $this->normalizer->normalize($object->getSimpleRate(), 'json', $context);
            }
            if ($object->isInitialized('rateModifier') && null !== $object->getRateModifier()) {
                $values_2 = [];
                foreach ($object->getRateModifier() as $value_2) {
                    $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
                }
                $data['RateModifier'] = $values_2;
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
            return ['ShipStream\\Ups\\Api\\Model\\RatedShipmentRatedPackage' => false];
        }
    }
}