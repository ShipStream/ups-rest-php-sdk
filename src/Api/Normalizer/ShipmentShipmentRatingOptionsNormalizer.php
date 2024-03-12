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
    class ShipmentShipmentRatingOptionsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\ShipmentShipmentRatingOptions';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\ShipmentShipmentRatingOptions';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \ShipStream\Ups\Api\Model\ShipmentShipmentRatingOptions();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('NegotiatedRatesIndicator', $data)) {
                $object->setNegotiatedRatesIndicator($data['NegotiatedRatesIndicator']);
                unset($data['NegotiatedRatesIndicator']);
            }
            if (\array_key_exists('FRSShipmentIndicator', $data)) {
                $object->setFRSShipmentIndicator($data['FRSShipmentIndicator']);
                unset($data['FRSShipmentIndicator']);
            }
            if (\array_key_exists('RateChartIndicator', $data)) {
                $object->setRateChartIndicator($data['RateChartIndicator']);
                unset($data['RateChartIndicator']);
            }
            if (\array_key_exists('TPFCNegotiatedRatesIndicator', $data)) {
                $object->setTPFCNegotiatedRatesIndicator($data['TPFCNegotiatedRatesIndicator']);
                unset($data['TPFCNegotiatedRatesIndicator']);
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
            if ($object->isInitialized('negotiatedRatesIndicator') && null !== $object->getNegotiatedRatesIndicator()) {
                $data['NegotiatedRatesIndicator'] = $object->getNegotiatedRatesIndicator();
            }
            if ($object->isInitialized('fRSShipmentIndicator') && null !== $object->getFRSShipmentIndicator()) {
                $data['FRSShipmentIndicator'] = $object->getFRSShipmentIndicator();
            }
            if ($object->isInitialized('rateChartIndicator') && null !== $object->getRateChartIndicator()) {
                $data['RateChartIndicator'] = $object->getRateChartIndicator();
            }
            if ($object->isInitialized('tPFCNegotiatedRatesIndicator') && null !== $object->getTPFCNegotiatedRatesIndicator()) {
                $data['TPFCNegotiatedRatesIndicator'] = $object->getTPFCNegotiatedRatesIndicator();
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
            return ['ShipStream\\Ups\\Api\\Model\\ShipmentShipmentRatingOptions' => false];
        }
    }
} else {
    class ShipmentShipmentRatingOptionsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\ShipmentShipmentRatingOptions';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\ShipmentShipmentRatingOptions';
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
            $object = new \ShipStream\Ups\Api\Model\ShipmentShipmentRatingOptions();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('NegotiatedRatesIndicator', $data)) {
                $object->setNegotiatedRatesIndicator($data['NegotiatedRatesIndicator']);
                unset($data['NegotiatedRatesIndicator']);
            }
            if (\array_key_exists('FRSShipmentIndicator', $data)) {
                $object->setFRSShipmentIndicator($data['FRSShipmentIndicator']);
                unset($data['FRSShipmentIndicator']);
            }
            if (\array_key_exists('RateChartIndicator', $data)) {
                $object->setRateChartIndicator($data['RateChartIndicator']);
                unset($data['RateChartIndicator']);
            }
            if (\array_key_exists('TPFCNegotiatedRatesIndicator', $data)) {
                $object->setTPFCNegotiatedRatesIndicator($data['TPFCNegotiatedRatesIndicator']);
                unset($data['TPFCNegotiatedRatesIndicator']);
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
            if ($object->isInitialized('negotiatedRatesIndicator') && null !== $object->getNegotiatedRatesIndicator()) {
                $data['NegotiatedRatesIndicator'] = $object->getNegotiatedRatesIndicator();
            }
            if ($object->isInitialized('fRSShipmentIndicator') && null !== $object->getFRSShipmentIndicator()) {
                $data['FRSShipmentIndicator'] = $object->getFRSShipmentIndicator();
            }
            if ($object->isInitialized('rateChartIndicator') && null !== $object->getRateChartIndicator()) {
                $data['RateChartIndicator'] = $object->getRateChartIndicator();
            }
            if ($object->isInitialized('tPFCNegotiatedRatesIndicator') && null !== $object->getTPFCNegotiatedRatesIndicator()) {
                $data['TPFCNegotiatedRatesIndicator'] = $object->getTPFCNegotiatedRatesIndicator();
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
            return ['ShipStream\\Ups\\Api\\Model\\ShipmentShipmentRatingOptions' => false];
        }
    }
}