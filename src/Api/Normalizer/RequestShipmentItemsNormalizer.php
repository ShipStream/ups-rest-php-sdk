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
class RequestShipmentItemsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \ShipStream\Ups\Api\Model\RequestShipmentItems::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \ShipStream\Ups\Api\Model\RequestShipmentItems::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
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
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['commodityId'] = $data->getCommodityId();
        if ($data->isInitialized('grossWeight') && null !== $data->getGrossWeight()) {
            $dataArray['grossWeight'] = $data->getGrossWeight();
        }
        if ($data->isInitialized('grossWeightUnit') && null !== $data->getGrossWeightUnit()) {
            $dataArray['grossWeightUnit'] = $data->getGrossWeightUnit();
        }
        $dataArray['priceEach'] = $data->getPriceEach();
        $dataArray['commodityCurrencyCode'] = $data->getCommodityCurrencyCode();
        $dataArray['quantity'] = $data->getQuantity();
        $dataArray['UOM'] = $data->getUOM();
        if ($data->isInitialized('hsCode') && null !== $data->getHsCode()) {
            $dataArray['hsCode'] = $data->getHsCode();
        }
        if ($data->isInitialized('description') && null !== $data->getDescription()) {
            $dataArray['description'] = $data->getDescription();
        }
        $dataArray['originCountryCode'] = $data->getOriginCountryCode();
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\ShipStream\Ups\Api\Model\RequestShipmentItems::class => false];
    }
}