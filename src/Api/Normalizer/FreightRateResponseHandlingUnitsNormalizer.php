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
class FreightRateResponseHandlingUnitsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \ShipStream\Ups\Api\Model\FreightRateResponseHandlingUnits::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \ShipStream\Ups\Api\Model\FreightRateResponseHandlingUnits::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \ShipStream\Ups\Api\Model\FreightRateResponseHandlingUnits();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('Quantity', $data)) {
            $object->setQuantity($data['Quantity']);
            unset($data['Quantity']);
        }
        if (\array_key_exists('Type', $data)) {
            $object->setType($this->denormalizer->denormalize($data['Type'], \ShipStream\Ups\Api\Model\HandlingUnitsType::class, 'json', $context));
            unset($data['Type']);
        }
        if (\array_key_exists('Dimensions', $data)) {
            $object->setDimensions($this->denormalizer->denormalize($data['Dimensions'], \ShipStream\Ups\Api\Model\HandlingUnitsDimensions::class, 'json', $context));
            unset($data['Dimensions']);
        }
        if (\array_key_exists('AdjustedHeight', $data)) {
            $object->setAdjustedHeight($this->denormalizer->denormalize($data['AdjustedHeight'], \ShipStream\Ups\Api\Model\HandlingUnitsAdjustedHeight::class, 'json', $context));
            unset($data['AdjustedHeight']);
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
        $dataArray['Quantity'] = $data->getQuantity();
        $dataArray['Type'] = $this->normalizer->normalize($data->getType(), 'json', $context);
        $dataArray['Dimensions'] = $this->normalizer->normalize($data->getDimensions(), 'json', $context);
        $dataArray['AdjustedHeight'] = $this->normalizer->normalize($data->getAdjustedHeight(), 'json', $context);
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\ShipStream\Ups\Api\Model\FreightRateResponseHandlingUnits::class => false];
    }
}