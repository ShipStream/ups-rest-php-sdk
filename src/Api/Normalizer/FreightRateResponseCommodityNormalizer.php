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
    class FreightRateResponseCommodityNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\FreightRateResponseCommodity';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\FreightRateResponseCommodity';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \ShipStream\Ups\Api\Model\FreightRateResponseCommodity();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('CommodityID', $data)) {
                $object->setCommodityID($data['CommodityID']);
                unset($data['CommodityID']);
            }
            if (\array_key_exists('Description', $data)) {
                $object->setDescription($data['Description']);
                unset($data['Description']);
            }
            if (\array_key_exists('Weight', $data)) {
                $object->setWeight($this->denormalizer->denormalize($data['Weight'], 'ShipStream\\Ups\\Api\\Model\\CommodityWeight', 'json', $context));
                unset($data['Weight']);
            }
            if (\array_key_exists('AdjustedWeight', $data)) {
                $object->setAdjustedWeight($this->denormalizer->denormalize($data['AdjustedWeight'], 'ShipStream\\Ups\\Api\\Model\\CommodityAdjustedWeight', 'json', $context));
                unset($data['AdjustedWeight']);
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
            if ($object->isInitialized('commodityID') && null !== $object->getCommodityID()) {
                $data['CommodityID'] = $object->getCommodityID();
            }
            $data['Description'] = $object->getDescription();
            $data['Weight'] = $this->normalizer->normalize($object->getWeight(), 'json', $context);
            if ($object->isInitialized('adjustedWeight') && null !== $object->getAdjustedWeight()) {
                $data['AdjustedWeight'] = $this->normalizer->normalize($object->getAdjustedWeight(), 'json', $context);
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
            return ['ShipStream\\Ups\\Api\\Model\\FreightRateResponseCommodity' => false];
        }
    }
} else {
    class FreightRateResponseCommodityNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\FreightRateResponseCommodity';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\FreightRateResponseCommodity';
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
            $object = new \ShipStream\Ups\Api\Model\FreightRateResponseCommodity();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('CommodityID', $data)) {
                $object->setCommodityID($data['CommodityID']);
                unset($data['CommodityID']);
            }
            if (\array_key_exists('Description', $data)) {
                $object->setDescription($data['Description']);
                unset($data['Description']);
            }
            if (\array_key_exists('Weight', $data)) {
                $object->setWeight($this->denormalizer->denormalize($data['Weight'], 'ShipStream\\Ups\\Api\\Model\\CommodityWeight', 'json', $context));
                unset($data['Weight']);
            }
            if (\array_key_exists('AdjustedWeight', $data)) {
                $object->setAdjustedWeight($this->denormalizer->denormalize($data['AdjustedWeight'], 'ShipStream\\Ups\\Api\\Model\\CommodityAdjustedWeight', 'json', $context));
                unset($data['AdjustedWeight']);
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
            if ($object->isInitialized('commodityID') && null !== $object->getCommodityID()) {
                $data['CommodityID'] = $object->getCommodityID();
            }
            $data['Description'] = $object->getDescription();
            $data['Weight'] = $this->normalizer->normalize($object->getWeight(), 'json', $context);
            if ($object->isInitialized('adjustedWeight') && null !== $object->getAdjustedWeight()) {
                $data['AdjustedWeight'] = $this->normalizer->normalize($object->getAdjustedWeight(), 'json', $context);
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
            return ['ShipStream\\Ups\\Api\\Model\\FreightRateResponseCommodity' => false];
        }
    }
}