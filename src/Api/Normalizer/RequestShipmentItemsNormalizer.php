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
    class RequestShipmentItemsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\RequestShipmentItems';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\RequestShipmentItems';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \ShipStream\Ups\Api\Model\RequestShipmentItems();
            if (\array_key_exists('grossWeight', $data) && \is_int($data['grossWeight'])) {
                $data['grossWeight'] = (double) $data['grossWeight'];
            }
            if (\array_key_exists('priceEach', $data) && \is_int($data['priceEach'])) {
                $data['priceEach'] = (double) $data['priceEach'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('commodityId', $data)) {
                $object->setCommodityId($data['commodityId']);
                unset($data['commodityId']);
            }
            if (\array_key_exists('grossWeight', $data)) {
                $object->setGrossWeight($data['grossWeight']);
                unset($data['grossWeight']);
            }
            if (\array_key_exists('grossWeightUnit', $data)) {
                $object->setGrossWeightUnit($data['grossWeightUnit']);
                unset($data['grossWeightUnit']);
            }
            if (\array_key_exists('priceEach', $data)) {
                $object->setPriceEach($data['priceEach']);
                unset($data['priceEach']);
            }
            if (\array_key_exists('commodityCurrencyCode', $data)) {
                $object->setCommodityCurrencyCode($data['commodityCurrencyCode']);
                unset($data['commodityCurrencyCode']);
            }
            if (\array_key_exists('quantity', $data)) {
                $object->setQuantity($data['quantity']);
                unset($data['quantity']);
            }
            if (\array_key_exists('UOM', $data)) {
                $object->setUOM($data['UOM']);
                unset($data['UOM']);
            }
            if (\array_key_exists('hsCode', $data)) {
                $object->setHsCode($data['hsCode']);
                unset($data['hsCode']);
            }
            if (\array_key_exists('description', $data)) {
                $object->setDescription($data['description']);
                unset($data['description']);
            }
            if (\array_key_exists('originCountryCode', $data)) {
                $object->setOriginCountryCode($data['originCountryCode']);
                unset($data['originCountryCode']);
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
            $data['commodityId'] = $object->getCommodityId();
            if ($object->isInitialized('grossWeight') && null !== $object->getGrossWeight()) {
                $data['grossWeight'] = $object->getGrossWeight();
            }
            if ($object->isInitialized('grossWeightUnit') && null !== $object->getGrossWeightUnit()) {
                $data['grossWeightUnit'] = $object->getGrossWeightUnit();
            }
            $data['priceEach'] = $object->getPriceEach();
            $data['commodityCurrencyCode'] = $object->getCommodityCurrencyCode();
            $data['quantity'] = $object->getQuantity();
            $data['UOM'] = $object->getUOM();
            if ($object->isInitialized('hsCode') && null !== $object->getHsCode()) {
                $data['hsCode'] = $object->getHsCode();
            }
            if ($object->isInitialized('description') && null !== $object->getDescription()) {
                $data['description'] = $object->getDescription();
            }
            $data['originCountryCode'] = $object->getOriginCountryCode();
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['ShipStream\\Ups\\Api\\Model\\RequestShipmentItems' => false];
        }
    }
} else {
    class RequestShipmentItemsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\RequestShipmentItems';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\RequestShipmentItems';
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
            $object = new \ShipStream\Ups\Api\Model\RequestShipmentItems();
            if (\array_key_exists('grossWeight', $data) && \is_int($data['grossWeight'])) {
                $data['grossWeight'] = (double) $data['grossWeight'];
            }
            if (\array_key_exists('priceEach', $data) && \is_int($data['priceEach'])) {
                $data['priceEach'] = (double) $data['priceEach'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('commodityId', $data)) {
                $object->setCommodityId($data['commodityId']);
                unset($data['commodityId']);
            }
            if (\array_key_exists('grossWeight', $data)) {
                $object->setGrossWeight($data['grossWeight']);
                unset($data['grossWeight']);
            }
            if (\array_key_exists('grossWeightUnit', $data)) {
                $object->setGrossWeightUnit($data['grossWeightUnit']);
                unset($data['grossWeightUnit']);
            }
            if (\array_key_exists('priceEach', $data)) {
                $object->setPriceEach($data['priceEach']);
                unset($data['priceEach']);
            }
            if (\array_key_exists('commodityCurrencyCode', $data)) {
                $object->setCommodityCurrencyCode($data['commodityCurrencyCode']);
                unset($data['commodityCurrencyCode']);
            }
            if (\array_key_exists('quantity', $data)) {
                $object->setQuantity($data['quantity']);
                unset($data['quantity']);
            }
            if (\array_key_exists('UOM', $data)) {
                $object->setUOM($data['UOM']);
                unset($data['UOM']);
            }
            if (\array_key_exists('hsCode', $data)) {
                $object->setHsCode($data['hsCode']);
                unset($data['hsCode']);
            }
            if (\array_key_exists('description', $data)) {
                $object->setDescription($data['description']);
                unset($data['description']);
            }
            if (\array_key_exists('originCountryCode', $data)) {
                $object->setOriginCountryCode($data['originCountryCode']);
                unset($data['originCountryCode']);
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
            $data['commodityId'] = $object->getCommodityId();
            if ($object->isInitialized('grossWeight') && null !== $object->getGrossWeight()) {
                $data['grossWeight'] = $object->getGrossWeight();
            }
            if ($object->isInitialized('grossWeightUnit') && null !== $object->getGrossWeightUnit()) {
                $data['grossWeightUnit'] = $object->getGrossWeightUnit();
            }
            $data['priceEach'] = $object->getPriceEach();
            $data['commodityCurrencyCode'] = $object->getCommodityCurrencyCode();
            $data['quantity'] = $object->getQuantity();
            $data['UOM'] = $object->getUOM();
            if ($object->isInitialized('hsCode') && null !== $object->getHsCode()) {
                $data['hsCode'] = $object->getHsCode();
            }
            if ($object->isInitialized('description') && null !== $object->getDescription()) {
                $data['description'] = $object->getDescription();
            }
            $data['originCountryCode'] = $object->getOriginCountryCode();
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['ShipStream\\Ups\\Api\\Model\\RequestShipmentItems' => false];
        }
    }
}