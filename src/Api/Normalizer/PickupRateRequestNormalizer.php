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
    class PickupRateRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\PickupRateRequest';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\PickupRateRequest';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \ShipStream\Ups\Api\Model\PickupRateRequest();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Request', $data)) {
                $object->setRequest($this->denormalizer->denormalize($data['Request'], 'ShipStream\\Ups\\Api\\Model\\PickupRateRequestRequest', 'json', $context));
                unset($data['Request']);
            }
            if (\array_key_exists('ShipperAccount', $data)) {
                $object->setShipperAccount($this->denormalizer->denormalize($data['ShipperAccount'], 'ShipStream\\Ups\\Api\\Model\\PickupRateRequestShipperAccount', 'json', $context));
                unset($data['ShipperAccount']);
            }
            if (\array_key_exists('PickupAddress', $data)) {
                $object->setPickupAddress($this->denormalizer->denormalize($data['PickupAddress'], 'ShipStream\\Ups\\Api\\Model\\PickupRateRequestPickupAddress', 'json', $context));
                unset($data['PickupAddress']);
            }
            if (\array_key_exists('AlternateAddressIndicator', $data)) {
                $object->setAlternateAddressIndicator($data['AlternateAddressIndicator']);
                unset($data['AlternateAddressIndicator']);
            }
            if (\array_key_exists('ServiceDateOption', $data)) {
                $object->setServiceDateOption($data['ServiceDateOption']);
                unset($data['ServiceDateOption']);
            }
            if (\array_key_exists('PickupDateInfo', $data)) {
                $object->setPickupDateInfo($this->denormalizer->denormalize($data['PickupDateInfo'], 'ShipStream\\Ups\\Api\\Model\\PickupRateRequestPickupDateInfo', 'json', $context));
                unset($data['PickupDateInfo']);
            }
            if (\array_key_exists('RateChartType', $data)) {
                $object->setRateChartType($data['RateChartType']);
                unset($data['RateChartType']);
            }
            if (\array_key_exists('TaxInformationIndicator', $data)) {
                $object->setTaxInformationIndicator($data['TaxInformationIndicator']);
                unset($data['TaxInformationIndicator']);
            }
            if (\array_key_exists('UserLevelDiscountIndicator', $data)) {
                $object->setUserLevelDiscountIndicator($data['UserLevelDiscountIndicator']);
                unset($data['UserLevelDiscountIndicator']);
            }
            foreach ($data as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            $data['Request'] = $this->normalizer->normalize($object->getRequest(), 'json', $context);
            if ($object->isInitialized('shipperAccount') && null !== $object->getShipperAccount()) {
                $data['ShipperAccount'] = $this->normalizer->normalize($object->getShipperAccount(), 'json', $context);
            }
            $data['PickupAddress'] = $this->normalizer->normalize($object->getPickupAddress(), 'json', $context);
            $data['AlternateAddressIndicator'] = $object->getAlternateAddressIndicator();
            $data['ServiceDateOption'] = $object->getServiceDateOption();
            if ($object->isInitialized('pickupDateInfo') && null !== $object->getPickupDateInfo()) {
                $data['PickupDateInfo'] = $this->normalizer->normalize($object->getPickupDateInfo(), 'json', $context);
            }
            if ($object->isInitialized('rateChartType') && null !== $object->getRateChartType()) {
                $data['RateChartType'] = $object->getRateChartType();
            }
            if ($object->isInitialized('taxInformationIndicator') && null !== $object->getTaxInformationIndicator()) {
                $data['TaxInformationIndicator'] = $object->getTaxInformationIndicator();
            }
            if ($object->isInitialized('userLevelDiscountIndicator') && null !== $object->getUserLevelDiscountIndicator()) {
                $data['UserLevelDiscountIndicator'] = $object->getUserLevelDiscountIndicator();
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
            return ['ShipStream\\Ups\\Api\\Model\\PickupRateRequest' => false];
        }
    }
} else {
    class PickupRateRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\PickupRateRequest';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\PickupRateRequest';
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
            $object = new \ShipStream\Ups\Api\Model\PickupRateRequest();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Request', $data)) {
                $object->setRequest($this->denormalizer->denormalize($data['Request'], 'ShipStream\\Ups\\Api\\Model\\PickupRateRequestRequest', 'json', $context));
                unset($data['Request']);
            }
            if (\array_key_exists('ShipperAccount', $data)) {
                $object->setShipperAccount($this->denormalizer->denormalize($data['ShipperAccount'], 'ShipStream\\Ups\\Api\\Model\\PickupRateRequestShipperAccount', 'json', $context));
                unset($data['ShipperAccount']);
            }
            if (\array_key_exists('PickupAddress', $data)) {
                $object->setPickupAddress($this->denormalizer->denormalize($data['PickupAddress'], 'ShipStream\\Ups\\Api\\Model\\PickupRateRequestPickupAddress', 'json', $context));
                unset($data['PickupAddress']);
            }
            if (\array_key_exists('AlternateAddressIndicator', $data)) {
                $object->setAlternateAddressIndicator($data['AlternateAddressIndicator']);
                unset($data['AlternateAddressIndicator']);
            }
            if (\array_key_exists('ServiceDateOption', $data)) {
                $object->setServiceDateOption($data['ServiceDateOption']);
                unset($data['ServiceDateOption']);
            }
            if (\array_key_exists('PickupDateInfo', $data)) {
                $object->setPickupDateInfo($this->denormalizer->denormalize($data['PickupDateInfo'], 'ShipStream\\Ups\\Api\\Model\\PickupRateRequestPickupDateInfo', 'json', $context));
                unset($data['PickupDateInfo']);
            }
            if (\array_key_exists('RateChartType', $data)) {
                $object->setRateChartType($data['RateChartType']);
                unset($data['RateChartType']);
            }
            if (\array_key_exists('TaxInformationIndicator', $data)) {
                $object->setTaxInformationIndicator($data['TaxInformationIndicator']);
                unset($data['TaxInformationIndicator']);
            }
            if (\array_key_exists('UserLevelDiscountIndicator', $data)) {
                $object->setUserLevelDiscountIndicator($data['UserLevelDiscountIndicator']);
                unset($data['UserLevelDiscountIndicator']);
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
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            $data['Request'] = $this->normalizer->normalize($object->getRequest(), 'json', $context);
            if ($object->isInitialized('shipperAccount') && null !== $object->getShipperAccount()) {
                $data['ShipperAccount'] = $this->normalizer->normalize($object->getShipperAccount(), 'json', $context);
            }
            $data['PickupAddress'] = $this->normalizer->normalize($object->getPickupAddress(), 'json', $context);
            $data['AlternateAddressIndicator'] = $object->getAlternateAddressIndicator();
            $data['ServiceDateOption'] = $object->getServiceDateOption();
            if ($object->isInitialized('pickupDateInfo') && null !== $object->getPickupDateInfo()) {
                $data['PickupDateInfo'] = $this->normalizer->normalize($object->getPickupDateInfo(), 'json', $context);
            }
            if ($object->isInitialized('rateChartType') && null !== $object->getRateChartType()) {
                $data['RateChartType'] = $object->getRateChartType();
            }
            if ($object->isInitialized('taxInformationIndicator') && null !== $object->getTaxInformationIndicator()) {
                $data['TaxInformationIndicator'] = $object->getTaxInformationIndicator();
            }
            if ($object->isInitialized('userLevelDiscountIndicator') && null !== $object->getUserLevelDiscountIndicator()) {
                $data['UserLevelDiscountIndicator'] = $object->getUserLevelDiscountIndicator();
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
            return ['ShipStream\\Ups\\Api\\Model\\PickupRateRequest' => false];
        }
    }
}