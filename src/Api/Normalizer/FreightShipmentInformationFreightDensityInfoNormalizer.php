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
class FreightShipmentInformationFreightDensityInfoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \ShipStream\Ups\Api\Model\FreightShipmentInformationFreightDensityInfo::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \ShipStream\Ups\Api\Model\FreightShipmentInformationFreightDensityInfo::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \ShipStream\Ups\Api\Model\FreightShipmentInformationFreightDensityInfo();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('AdjustedHeightIndicator', $data)) {
            $object->setAdjustedHeightIndicator($data['AdjustedHeightIndicator']);
            unset($data['AdjustedHeightIndicator']);
        }
        if (\array_key_exists('AdjustedHeight', $data)) {
            $object->setAdjustedHeight($this->denormalizer->denormalize($data['AdjustedHeight'], \ShipStream\Ups\Api\Model\FreightDensityInfoAdjustedHeight::class, 'json', $context));
            unset($data['AdjustedHeight']);
        }
        if (\array_key_exists('HandlingUnits', $data)) {
            $values = [];
            foreach ($data['HandlingUnits'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \ShipStream\Ups\Api\Model\FreightDensityInfoHandlingUnits::class, 'json', $context);
            }
            $object->setHandlingUnits($values);
            unset($data['HandlingUnits']);
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_1;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('adjustedHeightIndicator') && null !== $data->getAdjustedHeightIndicator()) {
            $dataArray['AdjustedHeightIndicator'] = $data->getAdjustedHeightIndicator();
        }
        if ($data->isInitialized('adjustedHeight') && null !== $data->getAdjustedHeight()) {
            $dataArray['AdjustedHeight'] = $this->normalizer->normalize($data->getAdjustedHeight(), 'json', $context);
        }
        if ($data->isInitialized('handlingUnits') && null !== $data->getHandlingUnits()) {
            $values = [];
            foreach ($data->getHandlingUnits() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['HandlingUnits'] = $values;
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_1;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\ShipStream\Ups\Api\Model\FreightShipmentInformationFreightDensityInfo::class => false];
    }
}