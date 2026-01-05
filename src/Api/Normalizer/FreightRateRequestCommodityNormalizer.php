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
class FreightRateRequestCommodityNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \ShipStream\Ups\Api\Model\FreightRateRequestCommodity::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \ShipStream\Ups\Api\Model\FreightRateRequestCommodity::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
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
            $object->setWeight($this->denormalizer->denormalize($data['Weight'], \ShipStream\Ups\Api\Model\CommodityWeight::class, 'json', $context));
            unset($data['Weight']);
        }
        if (\array_key_exists('AdjustedWeight', $data)) {
            $object->setAdjustedWeight($this->denormalizer->denormalize($data['AdjustedWeight'], \ShipStream\Ups\Api\Model\CommodityAdjustedWeight::class, 'json', $context));
            unset($data['AdjustedWeight']);
        }
        if (\array_key_exists('Dimensions', $data)) {
            $object->setDimensions($this->denormalizer->denormalize($data['Dimensions'], \ShipStream\Ups\Api\Model\CommodityDimensions::class, 'json', $context));
            unset($data['Dimensions']);
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
        if (\array_key_exists('CommodityValue', $data)) {
            $object->setCommodityValue($this->denormalizer->denormalize($data['CommodityValue'], \ShipStream\Ups\Api\Model\CommodityCommodityValue::class, 'json', $context));
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
            $object->setNMFCCommodity($this->denormalizer->denormalize($data['NMFCCommodity'], \ShipStream\Ups\Api\Model\CommodityNMFCCommodity::class, 'json', $context));
            unset($data['NMFCCommodity']);
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
        if ($data->isInitialized('commodityID') && null !== $data->getCommodityID()) {
            $dataArray['CommodityID'] = $data->getCommodityID();
        }
        $dataArray['Description'] = $data->getDescription();
        $dataArray['Weight'] = $this->normalizer->normalize($data->getWeight(), 'json', $context);
        if ($data->isInitialized('adjustedWeight') && null !== $data->getAdjustedWeight()) {
            $dataArray['AdjustedWeight'] = $this->normalizer->normalize($data->getAdjustedWeight(), 'json', $context);
        }
        if ($data->isInitialized('dimensions') && null !== $data->getDimensions()) {
            $dataArray['Dimensions'] = $this->normalizer->normalize($data->getDimensions(), 'json', $context);
        }
        $dataArray['NumberOfPieces'] = $data->getNumberOfPieces();
        $dataArray['PackagingType'] = $this->normalizer->normalize($data->getPackagingType(), 'json', $context);
        if ($data->isInitialized('dangerousGoodsIndicator') && null !== $data->getDangerousGoodsIndicator()) {
            $dataArray['DangerousGoodsIndicator'] = $data->getDangerousGoodsIndicator();
        }
        if ($data->isInitialized('commodityValue') && null !== $data->getCommodityValue()) {
            $dataArray['CommodityValue'] = $this->normalizer->normalize($data->getCommodityValue(), 'json', $context);
        }
        if ($data->isInitialized('freightClass') && null !== $data->getFreightClass()) {
            $dataArray['FreightClass'] = $data->getFreightClass();
        }
        if ($data->isInitialized('nMFCCommodityCode') && null !== $data->getNMFCCommodityCode()) {
            $dataArray['NMFCCommodityCode'] = $data->getNMFCCommodityCode();
        }
        if ($data->isInitialized('nMFCCommodity') && null !== $data->getNMFCCommodity()) {
            $dataArray['NMFCCommodity'] = $this->normalizer->normalize($data->getNMFCCommodity(), 'json', $context);
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
        return [\ShipStream\Ups\Api\Model\FreightRateRequestCommodity::class => false];
    }
}