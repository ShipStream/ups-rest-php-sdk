<?php

namespace ShipStream\Ups\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use ShipStream\Ups\Api\Runtime\Normalizer\CheckArray;
use ShipStream\Ups\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class HandlingUnitCommodityNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \ShipStream\Ups\Api\Model\HandlingUnitCommodity::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \ShipStream\Ups\Api\Model\HandlingUnitCommodity::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
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
        if (\array_key_exists('NumberOfPieces', $data)) {
            $object->setNumberOfPieces($data['NumberOfPieces']);
            unset($data['NumberOfPieces']);
        }
        if (\array_key_exists('PackagingType', $data)) {
            $object->setPackagingType($this->denormalizer->denormalize($data['PackagingType'], \ShipStream\Ups\Api\Model\CommodityPackagingType::class, 'json', $context));
            unset($data['PackagingType']);
        }
        if (\array_key_exists('DangerousGoodsIndicator', $data)) {
            $object->setDangerousGoodsIndicator($data['DangerousGoodsIndicator']);
            unset($data['DangerousGoodsIndicator']);
        }
        if (\array_key_exists('Description', $data)) {
            $object->setDescription($data['Description']);
            unset($data['Description']);
        }
        if (\array_key_exists('NMFCCommodityCode', $data)) {
            $object->setNMFCCommodityCode($data['NMFCCommodityCode']);
            unset($data['NMFCCommodityCode']);
        }
        if (\array_key_exists('FreightClass', $data)) {
            $object->setFreightClass($data['FreightClass']);
            unset($data['FreightClass']);
        }
        if (\array_key_exists('Dimensions', $data)) {
            $object->setDimensions($this->denormalizer->denormalize($data['Dimensions'], \ShipStream\Ups\Api\Model\FreightShipCommodityDimensions::class, 'json', $context));
            unset($data['Dimensions']);
        }
        if (\array_key_exists('Weight', $data)) {
            $object->setWeight($data['Weight']);
            unset($data['Weight']);
        }
        if (\array_key_exists('CommodityValue', $data)) {
            $object->setCommodityValue($data['CommodityValue']);
            unset($data['CommodityValue']);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('numberOfPieces') && null !== $data->getNumberOfPieces()) {
            $dataArray['NumberOfPieces'] = $data->getNumberOfPieces();
        }
        if ($data->isInitialized('packagingType') && null !== $data->getPackagingType()) {
            $dataArray['PackagingType'] = $this->normalizer->normalize($data->getPackagingType(), 'json', $context);
        }
        if ($data->isInitialized('dangerousGoodsIndicator') && null !== $data->getDangerousGoodsIndicator()) {
            $dataArray['DangerousGoodsIndicator'] = $data->getDangerousGoodsIndicator();
        }
        if ($data->isInitialized('description') && null !== $data->getDescription()) {
            $dataArray['Description'] = $data->getDescription();
        }
        if ($data->isInitialized('nMFCCommodityCode') && null !== $data->getNMFCCommodityCode()) {
            $dataArray['NMFCCommodityCode'] = $data->getNMFCCommodityCode();
        }
        $dataArray['FreightClass'] = $data->getFreightClass();
        if ($data->isInitialized('dimensions') && null !== $data->getDimensions()) {
            $dataArray['Dimensions'] = $this->normalizer->normalize($data->getDimensions(), 'json', $context);
        }
        if ($data->isInitialized('weight') && null !== $data->getWeight()) {
            $dataArray['Weight'] = $data->getWeight();
        }
        if ($data->isInitialized('commodityValue') && null !== $data->getCommodityValue()) {
            $dataArray['CommodityValue'] = $data->getCommodityValue();
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\ShipStream\Ups\Api\Model\HandlingUnitCommodity::class => false];
    }
}