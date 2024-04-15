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
    class HandlingUnitCommodityNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\HandlingUnitCommodity';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\HandlingUnitCommodity';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \ShipStream\Ups\Api\Model\HandlingUnitCommodity();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('NumberOfPieces', $data) && $data['NumberOfPieces'] !== null) {
                $object->setNumberOfPieces($data['NumberOfPieces']);
                unset($data['NumberOfPieces']);
            }
            elseif (\array_key_exists('NumberOfPieces', $data) && $data['NumberOfPieces'] === null) {
                $object->setNumberOfPieces(null);
            }
            if (\array_key_exists('PackagingType', $data) && $data['PackagingType'] !== null) {
                $object->setPackagingType($this->denormalizer->denormalize($data['PackagingType'], 'ShipStream\\Ups\\Api\\Model\\CommodityPackagingType', 'json', $context));
                unset($data['PackagingType']);
            }
            elseif (\array_key_exists('PackagingType', $data) && $data['PackagingType'] === null) {
                $object->setPackagingType(null);
            }
            if (\array_key_exists('DangerousGoodsIndicator', $data) && $data['DangerousGoodsIndicator'] !== null) {
                $object->setDangerousGoodsIndicator($data['DangerousGoodsIndicator']);
                unset($data['DangerousGoodsIndicator']);
            }
            elseif (\array_key_exists('DangerousGoodsIndicator', $data) && $data['DangerousGoodsIndicator'] === null) {
                $object->setDangerousGoodsIndicator(null);
            }
            if (\array_key_exists('Description', $data) && $data['Description'] !== null) {
                $object->setDescription($data['Description']);
                unset($data['Description']);
            }
            elseif (\array_key_exists('Description', $data) && $data['Description'] === null) {
                $object->setDescription(null);
            }
            if (\array_key_exists('NMFCCommodityCode', $data) && $data['NMFCCommodityCode'] !== null) {
                $object->setNMFCCommodityCode($data['NMFCCommodityCode']);
                unset($data['NMFCCommodityCode']);
            }
            elseif (\array_key_exists('NMFCCommodityCode', $data) && $data['NMFCCommodityCode'] === null) {
                $object->setNMFCCommodityCode(null);
            }
            if (\array_key_exists('FreightClass', $data) && $data['FreightClass'] !== null) {
                $object->setFreightClass($data['FreightClass']);
                unset($data['FreightClass']);
            }
            elseif (\array_key_exists('FreightClass', $data) && $data['FreightClass'] === null) {
                $object->setFreightClass(null);
            }
            if (\array_key_exists('Dimensions', $data) && $data['Dimensions'] !== null) {
                $object->setDimensions($this->denormalizer->denormalize($data['Dimensions'], 'ShipStream\\Ups\\Api\\Model\\FreightShipCommodityDimensions', 'json', $context));
                unset($data['Dimensions']);
            }
            elseif (\array_key_exists('Dimensions', $data) && $data['Dimensions'] === null) {
                $object->setDimensions(null);
            }
            if (\array_key_exists('Weight', $data) && $data['Weight'] !== null) {
                $object->setWeight($data['Weight']);
                unset($data['Weight']);
            }
            elseif (\array_key_exists('Weight', $data) && $data['Weight'] === null) {
                $object->setWeight(null);
            }
            if (\array_key_exists('CommodityValue', $data) && $data['CommodityValue'] !== null) {
                $object->setCommodityValue($data['CommodityValue']);
                unset($data['CommodityValue']);
            }
            elseif (\array_key_exists('CommodityValue', $data) && $data['CommodityValue'] === null) {
                $object->setCommodityValue(null);
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
            if ($object->isInitialized('numberOfPieces') && null !== $object->getNumberOfPieces()) {
                $data['NumberOfPieces'] = $object->getNumberOfPieces();
            }
            if ($object->isInitialized('packagingType') && null !== $object->getPackagingType()) {
                $data['PackagingType'] = $this->normalizer->normalize($object->getPackagingType(), 'json', $context);
            }
            if ($object->isInitialized('dangerousGoodsIndicator') && null !== $object->getDangerousGoodsIndicator()) {
                $data['DangerousGoodsIndicator'] = $object->getDangerousGoodsIndicator();
            }
            if ($object->isInitialized('description') && null !== $object->getDescription()) {
                $data['Description'] = $object->getDescription();
            }
            if ($object->isInitialized('nMFCCommodityCode') && null !== $object->getNMFCCommodityCode()) {
                $data['NMFCCommodityCode'] = $object->getNMFCCommodityCode();
            }
            $data['FreightClass'] = $object->getFreightClass();
            if ($object->isInitialized('dimensions') && null !== $object->getDimensions()) {
                $data['Dimensions'] = $this->normalizer->normalize($object->getDimensions(), 'json', $context);
            }
            if ($object->isInitialized('weight') && null !== $object->getWeight()) {
                $data['Weight'] = $object->getWeight();
            }
            if ($object->isInitialized('commodityValue') && null !== $object->getCommodityValue()) {
                $data['CommodityValue'] = $object->getCommodityValue();
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
            return ['ShipStream\\Ups\\Api\\Model\\HandlingUnitCommodity' => false];
        }
    }
} else {
    class HandlingUnitCommodityNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\HandlingUnitCommodity';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\HandlingUnitCommodity';
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
            $object = new \ShipStream\Ups\Api\Model\HandlingUnitCommodity();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('NumberOfPieces', $data) && $data['NumberOfPieces'] !== null) {
                $object->setNumberOfPieces($data['NumberOfPieces']);
                unset($data['NumberOfPieces']);
            }
            elseif (\array_key_exists('NumberOfPieces', $data) && $data['NumberOfPieces'] === null) {
                $object->setNumberOfPieces(null);
            }
            if (\array_key_exists('PackagingType', $data) && $data['PackagingType'] !== null) {
                $object->setPackagingType($this->denormalizer->denormalize($data['PackagingType'], 'ShipStream\\Ups\\Api\\Model\\CommodityPackagingType', 'json', $context));
                unset($data['PackagingType']);
            }
            elseif (\array_key_exists('PackagingType', $data) && $data['PackagingType'] === null) {
                $object->setPackagingType(null);
            }
            if (\array_key_exists('DangerousGoodsIndicator', $data) && $data['DangerousGoodsIndicator'] !== null) {
                $object->setDangerousGoodsIndicator($data['DangerousGoodsIndicator']);
                unset($data['DangerousGoodsIndicator']);
            }
            elseif (\array_key_exists('DangerousGoodsIndicator', $data) && $data['DangerousGoodsIndicator'] === null) {
                $object->setDangerousGoodsIndicator(null);
            }
            if (\array_key_exists('Description', $data) && $data['Description'] !== null) {
                $object->setDescription($data['Description']);
                unset($data['Description']);
            }
            elseif (\array_key_exists('Description', $data) && $data['Description'] === null) {
                $object->setDescription(null);
            }
            if (\array_key_exists('NMFCCommodityCode', $data) && $data['NMFCCommodityCode'] !== null) {
                $object->setNMFCCommodityCode($data['NMFCCommodityCode']);
                unset($data['NMFCCommodityCode']);
            }
            elseif (\array_key_exists('NMFCCommodityCode', $data) && $data['NMFCCommodityCode'] === null) {
                $object->setNMFCCommodityCode(null);
            }
            if (\array_key_exists('FreightClass', $data) && $data['FreightClass'] !== null) {
                $object->setFreightClass($data['FreightClass']);
                unset($data['FreightClass']);
            }
            elseif (\array_key_exists('FreightClass', $data) && $data['FreightClass'] === null) {
                $object->setFreightClass(null);
            }
            if (\array_key_exists('Dimensions', $data) && $data['Dimensions'] !== null) {
                $object->setDimensions($this->denormalizer->denormalize($data['Dimensions'], 'ShipStream\\Ups\\Api\\Model\\FreightShipCommodityDimensions', 'json', $context));
                unset($data['Dimensions']);
            }
            elseif (\array_key_exists('Dimensions', $data) && $data['Dimensions'] === null) {
                $object->setDimensions(null);
            }
            if (\array_key_exists('Weight', $data) && $data['Weight'] !== null) {
                $object->setWeight($data['Weight']);
                unset($data['Weight']);
            }
            elseif (\array_key_exists('Weight', $data) && $data['Weight'] === null) {
                $object->setWeight(null);
            }
            if (\array_key_exists('CommodityValue', $data) && $data['CommodityValue'] !== null) {
                $object->setCommodityValue($data['CommodityValue']);
                unset($data['CommodityValue']);
            }
            elseif (\array_key_exists('CommodityValue', $data) && $data['CommodityValue'] === null) {
                $object->setCommodityValue(null);
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
            if ($object->isInitialized('numberOfPieces') && null !== $object->getNumberOfPieces()) {
                $data['NumberOfPieces'] = $object->getNumberOfPieces();
            }
            if ($object->isInitialized('packagingType') && null !== $object->getPackagingType()) {
                $data['PackagingType'] = $this->normalizer->normalize($object->getPackagingType(), 'json', $context);
            }
            if ($object->isInitialized('dangerousGoodsIndicator') && null !== $object->getDangerousGoodsIndicator()) {
                $data['DangerousGoodsIndicator'] = $object->getDangerousGoodsIndicator();
            }
            if ($object->isInitialized('description') && null !== $object->getDescription()) {
                $data['Description'] = $object->getDescription();
            }
            if ($object->isInitialized('nMFCCommodityCode') && null !== $object->getNMFCCommodityCode()) {
                $data['NMFCCommodityCode'] = $object->getNMFCCommodityCode();
            }
            $data['FreightClass'] = $object->getFreightClass();
            if ($object->isInitialized('dimensions') && null !== $object->getDimensions()) {
                $data['Dimensions'] = $this->normalizer->normalize($object->getDimensions(), 'json', $context);
            }
            if ($object->isInitialized('weight') && null !== $object->getWeight()) {
                $data['Weight'] = $object->getWeight();
            }
            if ($object->isInitialized('commodityValue') && null !== $object->getCommodityValue()) {
                $data['CommodityValue'] = $object->getCommodityValue();
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
            return ['ShipStream\\Ups\\Api\\Model\\HandlingUnitCommodity' => false];
        }
    }
}