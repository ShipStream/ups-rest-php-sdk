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
class VoidShipmentResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \ShipStream\Ups\Api\Model\VoidShipmentResponse::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \ShipStream\Ups\Api\Model\VoidShipmentResponse::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \ShipStream\Ups\Api\Model\VoidShipmentResponse();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('Response', $data)) {
            $object->setResponse($this->denormalizer->denormalize($data['Response'], \ShipStream\Ups\Api\Model\VoidShipmentResponseResponse::class, 'json', $context));
            unset($data['Response']);
        }
        if (\array_key_exists('SummaryResult', $data)) {
            $object->setSummaryResult($this->denormalizer->denormalize($data['SummaryResult'], \ShipStream\Ups\Api\Model\VoidShipmentResponseSummaryResult::class, 'json', $context));
            unset($data['SummaryResult']);
        }
        if (\array_key_exists('PackageLevelResult', $data)) {
            $values = [];
            foreach ($data['PackageLevelResult'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \ShipStream\Ups\Api\Model\VoidShipmentResponsePackageLevelResult::class, 'json', $context);
            }
            $object->setPackageLevelResult($values);
            unset($data['PackageLevelResult']);
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
        $dataArray['Response'] = $this->normalizer->normalize($data->getResponse(), 'json', $context);
        $dataArray['SummaryResult'] = $this->normalizer->normalize($data->getSummaryResult(), 'json', $context);
        if ($data->isInitialized('packageLevelResult') && null !== $data->getPackageLevelResult()) {
            $values = [];
            foreach ($data->getPackageLevelResult() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['PackageLevelResult'] = $values;
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
        return [\ShipStream\Ups\Api\Model\VoidShipmentResponse::class => false];
    }
}