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
    class FreightRateRequestCommodityNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\FreightRateRequestCommodity';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\FreightRateRequestCommodity';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \ShipStream\Ups\Api\Model\FreightRateRequestCommodity();
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
            if (\array_key_exists('Dimensions', $data)) {
                $object->setDimensions($this->denormalizer->denormalize($data['Dimensions'], 'ShipStream\\Ups\\Api\\Model\\CommodityDimensions', 'json', $context));
                unset($data['Dimensions']);
            }
            if (\array_key_exists('NumberOfPieces', $data)) {
                $object->setNumberOfPieces($data['NumberOfPieces']);
                unset($data['NumberOfPieces']);
            }
            if (\array_key_exists('PackagingType', $data)) {
                $object->setPackagingType($this->denormalizer->denormalize($data['PackagingType'], 'ShipStream\\Ups\\Api\\Model\\CommodityPackagingType', 'json', $context));
                unset($data['PackagingType']);
            }
            if (\array_key_exists('DangerousGoodsIndicator', $data)) {
                $object->setDangerousGoodsIndicator($data['DangerousGoodsIndicator']);
                unset($data['DangerousGoodsIndicator']);
            }
            if (\array_key_exists('CommodityValue', $data)) {
                $object->setCommodityValue($this->denormalizer->denormalize($data['CommodityValue'], 'ShipStream\\Ups\\Api\\Model\\CommodityCommodityValue', 'json', $context));
                unset($data['CommodityValue']);
            }
            if (\array_key_exists('FreightClass', $data)) {
                $object->setFreightClass($data['FreightClass']);
                unset($data['FreightClass']);
            }
            if (\array_key_exists('NMFCCommodityCode', $data)) {
                $object->setNMFCCommodityCode($data['NMFCCommodityCode']);
                unset($data['NMFCCommodityCode']);
            }
            if (\array_key_exists('NMFCCommodity', $data)) {
                $object->setNMFCCommodity($this->denormalizer->denormalize($data['NMFCCommodity'], 'ShipStream\\Ups\\Api\\Model\\CommodityNMFCCommodity', 'json', $context));
                unset($data['NMFCCommodity']);
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
            if ($object->isInitialized('dimensions') && null !== $object->getDimensions()) {
                $data['Dimensions'] = $this->normalizer->normalize($object->getDimensions(), 'json', $context);
            }
            $data['NumberOfPieces'] = $object->getNumberOfPieces();
            $data['PackagingType'] = $this->normalizer->normalize($object->getPackagingType(), 'json', $context);
            if ($object->isInitialized('dangerousGoodsIndicator') && null !== $object->getDangerousGoodsIndicator()) {
                $data['DangerousGoodsIndicator'] = $object->getDangerousGoodsIndicator();
            }
            if ($object->isInitialized('commodityValue') && null !== $object->getCommodityValue()) {
                $data['CommodityValue'] = $this->normalizer->normalize($object->getCommodityValue(), 'json', $context);
            }
            if ($object->isInitialized('freightClass') && null !== $object->getFreightClass()) {
                $data['FreightClass'] = $object->getFreightClass();
            }
            if ($object->isInitialized('nMFCCommodityCode') && null !== $object->getNMFCCommodityCode()) {
                $data['NMFCCommodityCode'] = $object->getNMFCCommodityCode();
            }
            if ($object->isInitialized('nMFCCommodity') && null !== $object->getNMFCCommodity()) {
                $data['NMFCCommodity'] = $this->normalizer->normalize($object->getNMFCCommodity(), 'json', $context);
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
            return ['ShipStream\\Ups\\Api\\Model\\FreightRateRequestCommodity' => false];
        }
    }
} else {
    class FreightRateRequestCommodityNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\FreightRateRequestCommodity';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\FreightRateRequestCommodity';
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
            $object = new \ShipStream\Ups\Api\Model\FreightRateRequestCommodity();
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
            if (\array_key_exists('Dimensions', $data)) {
                $object->setDimensions($this->denormalizer->denormalize($data['Dimensions'], 'ShipStream\\Ups\\Api\\Model\\CommodityDimensions', 'json', $context));
                unset($data['Dimensions']);
            }
            if (\array_key_exists('NumberOfPieces', $data)) {
                $object->setNumberOfPieces($data['NumberOfPieces']);
                unset($data['NumberOfPieces']);
            }
            if (\array_key_exists('PackagingType', $data)) {
                $object->setPackagingType($this->denormalizer->denormalize($data['PackagingType'], 'ShipStream\\Ups\\Api\\Model\\CommodityPackagingType', 'json', $context));
                unset($data['PackagingType']);
            }
            if (\array_key_exists('DangerousGoodsIndicator', $data)) {
                $object->setDangerousGoodsIndicator($data['DangerousGoodsIndicator']);
                unset($data['DangerousGoodsIndicator']);
            }
            if (\array_key_exists('CommodityValue', $data)) {
                $object->setCommodityValue($this->denormalizer->denormalize($data['CommodityValue'], 'ShipStream\\Ups\\Api\\Model\\CommodityCommodityValue', 'json', $context));
                unset($data['CommodityValue']);
            }
            if (\array_key_exists('FreightClass', $data)) {
                $object->setFreightClass($data['FreightClass']);
                unset($data['FreightClass']);
            }
            if (\array_key_exists('NMFCCommodityCode', $data)) {
                $object->setNMFCCommodityCode($data['NMFCCommodityCode']);
                unset($data['NMFCCommodityCode']);
            }
            if (\array_key_exists('NMFCCommodity', $data)) {
                $object->setNMFCCommodity($this->denormalizer->denormalize($data['NMFCCommodity'], 'ShipStream\\Ups\\Api\\Model\\CommodityNMFCCommodity', 'json', $context));
                unset($data['NMFCCommodity']);
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
            if ($object->isInitialized('dimensions') && null !== $object->getDimensions()) {
                $data['Dimensions'] = $this->normalizer->normalize($object->getDimensions(), 'json', $context);
            }
            $data['NumberOfPieces'] = $object->getNumberOfPieces();
            $data['PackagingType'] = $this->normalizer->normalize($object->getPackagingType(), 'json', $context);
            if ($object->isInitialized('dangerousGoodsIndicator') && null !== $object->getDangerousGoodsIndicator()) {
                $data['DangerousGoodsIndicator'] = $object->getDangerousGoodsIndicator();
            }
            if ($object->isInitialized('commodityValue') && null !== $object->getCommodityValue()) {
                $data['CommodityValue'] = $this->normalizer->normalize($object->getCommodityValue(), 'json', $context);
            }
            if ($object->isInitialized('freightClass') && null !== $object->getFreightClass()) {
                $data['FreightClass'] = $object->getFreightClass();
            }
            if ($object->isInitialized('nMFCCommodityCode') && null !== $object->getNMFCCommodityCode()) {
                $data['NMFCCommodityCode'] = $object->getNMFCCommodityCode();
            }
            if ($object->isInitialized('nMFCCommodity') && null !== $object->getNMFCCommodity()) {
                $data['NMFCCommodity'] = $this->normalizer->normalize($object->getNMFCCommodity(), 'json', $context);
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
            return ['ShipStream\\Ups\\Api\\Model\\FreightRateRequestCommodity' => false];
        }
    }
}