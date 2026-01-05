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
class FreightRateRequestGFPOptionsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \ShipStream\Ups\Api\Model\FreightRateRequestGFPOptions::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \ShipStream\Ups\Api\Model\FreightRateRequestGFPOptions::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \ShipStream\Ups\Api\Model\FreightRateRequestGFPOptions();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('GPFAccesorialRateIndicator', $data)) {
            $object->setGPFAccesorialRateIndicator($data['GPFAccesorialRateIndicator']);
            unset($data['GPFAccesorialRateIndicator']);
        }
        if (\array_key_exists('OnCallInformation', $data)) {
            $object->setOnCallInformation($this->denormalizer->denormalize($data['OnCallInformation'], \ShipStream\Ups\Api\Model\GFPOptionsOnCallInformation::class, 'json', $context));
            unset($data['OnCallInformation']);
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
        if ($data->isInitialized('gPFAccesorialRateIndicator') && null !== $data->getGPFAccesorialRateIndicator()) {
            $dataArray['GPFAccesorialRateIndicator'] = $data->getGPFAccesorialRateIndicator();
        }
        if ($data->isInitialized('onCallInformation') && null !== $data->getOnCallInformation()) {
            $dataArray['OnCallInformation'] = $this->normalizer->normalize($data->getOnCallInformation(), 'json', $context);
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
        return [\ShipStream\Ups\Api\Model\FreightRateRequestGFPOptions::class => false];
    }
}