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
    class CN22FormCN22ContentNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\CN22FormCN22Content';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\CN22FormCN22Content';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \ShipStream\Ups\Api\Model\CN22FormCN22Content();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('CN22ContentQuantity', $data)) {
                $object->setCN22ContentQuantity($data['CN22ContentQuantity']);
                unset($data['CN22ContentQuantity']);
            }
            if (\array_key_exists('CN22ContentDescription', $data)) {
                $object->setCN22ContentDescription($data['CN22ContentDescription']);
                unset($data['CN22ContentDescription']);
            }
            if (\array_key_exists('CN22ContentWeight', $data)) {
                $object->setCN22ContentWeight($this->denormalizer->denormalize($data['CN22ContentWeight'], 'ShipStream\\Ups\\Api\\Model\\CN22ContentCN22ContentWeight', 'json', $context));
                unset($data['CN22ContentWeight']);
            }
            if (\array_key_exists('CN22ContentTotalValue', $data)) {
                $object->setCN22ContentTotalValue($data['CN22ContentTotalValue']);
                unset($data['CN22ContentTotalValue']);
            }
            if (\array_key_exists('CN22ContentCurrencyCode', $data)) {
                $object->setCN22ContentCurrencyCode($data['CN22ContentCurrencyCode']);
                unset($data['CN22ContentCurrencyCode']);
            }
            if (\array_key_exists('CN22ContentCountryOfOrigin', $data)) {
                $object->setCN22ContentCountryOfOrigin($data['CN22ContentCountryOfOrigin']);
                unset($data['CN22ContentCountryOfOrigin']);
            }
            if (\array_key_exists('CN22ContentTariffNumber', $data)) {
                $object->setCN22ContentTariffNumber($data['CN22ContentTariffNumber']);
                unset($data['CN22ContentTariffNumber']);
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
            $data['CN22ContentQuantity'] = $object->getCN22ContentQuantity();
            $data['CN22ContentDescription'] = $object->getCN22ContentDescription();
            $data['CN22ContentWeight'] = $this->normalizer->normalize($object->getCN22ContentWeight(), 'json', $context);
            $data['CN22ContentTotalValue'] = $object->getCN22ContentTotalValue();
            $data['CN22ContentCurrencyCode'] = $object->getCN22ContentCurrencyCode();
            if ($object->isInitialized('cN22ContentCountryOfOrigin') && null !== $object->getCN22ContentCountryOfOrigin()) {
                $data['CN22ContentCountryOfOrigin'] = $object->getCN22ContentCountryOfOrigin();
            }
            if ($object->isInitialized('cN22ContentTariffNumber') && null !== $object->getCN22ContentTariffNumber()) {
                $data['CN22ContentTariffNumber'] = $object->getCN22ContentTariffNumber();
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
            return ['ShipStream\\Ups\\Api\\Model\\CN22FormCN22Content' => false];
        }
    }
} else {
    class CN22FormCN22ContentNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\CN22FormCN22Content';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\CN22FormCN22Content';
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
            $object = new \ShipStream\Ups\Api\Model\CN22FormCN22Content();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('CN22ContentQuantity', $data)) {
                $object->setCN22ContentQuantity($data['CN22ContentQuantity']);
                unset($data['CN22ContentQuantity']);
            }
            if (\array_key_exists('CN22ContentDescription', $data)) {
                $object->setCN22ContentDescription($data['CN22ContentDescription']);
                unset($data['CN22ContentDescription']);
            }
            if (\array_key_exists('CN22ContentWeight', $data)) {
                $object->setCN22ContentWeight($this->denormalizer->denormalize($data['CN22ContentWeight'], 'ShipStream\\Ups\\Api\\Model\\CN22ContentCN22ContentWeight', 'json', $context));
                unset($data['CN22ContentWeight']);
            }
            if (\array_key_exists('CN22ContentTotalValue', $data)) {
                $object->setCN22ContentTotalValue($data['CN22ContentTotalValue']);
                unset($data['CN22ContentTotalValue']);
            }
            if (\array_key_exists('CN22ContentCurrencyCode', $data)) {
                $object->setCN22ContentCurrencyCode($data['CN22ContentCurrencyCode']);
                unset($data['CN22ContentCurrencyCode']);
            }
            if (\array_key_exists('CN22ContentCountryOfOrigin', $data)) {
                $object->setCN22ContentCountryOfOrigin($data['CN22ContentCountryOfOrigin']);
                unset($data['CN22ContentCountryOfOrigin']);
            }
            if (\array_key_exists('CN22ContentTariffNumber', $data)) {
                $object->setCN22ContentTariffNumber($data['CN22ContentTariffNumber']);
                unset($data['CN22ContentTariffNumber']);
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
            $data['CN22ContentQuantity'] = $object->getCN22ContentQuantity();
            $data['CN22ContentDescription'] = $object->getCN22ContentDescription();
            $data['CN22ContentWeight'] = $this->normalizer->normalize($object->getCN22ContentWeight(), 'json', $context);
            $data['CN22ContentTotalValue'] = $object->getCN22ContentTotalValue();
            $data['CN22ContentCurrencyCode'] = $object->getCN22ContentCurrencyCode();
            if ($object->isInitialized('cN22ContentCountryOfOrigin') && null !== $object->getCN22ContentCountryOfOrigin()) {
                $data['CN22ContentCountryOfOrigin'] = $object->getCN22ContentCountryOfOrigin();
            }
            if ($object->isInitialized('cN22ContentTariffNumber') && null !== $object->getCN22ContentTariffNumber()) {
                $data['CN22ContentTariffNumber'] = $object->getCN22ContentTariffNumber();
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
            return ['ShipStream\\Ups\\Api\\Model\\CN22FormCN22Content' => false];
        }
    }
}