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
class TrackSubsServiceResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \ShipStream\Ups\Api\Model\TrackSubsServiceResponse::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \ShipStream\Ups\Api\Model\TrackSubsServiceResponse::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \ShipStream\Ups\Api\Model\TrackSubsServiceResponse();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('validTrackingNumbers', $data)) {
            $values = [];
            foreach ($data['validTrackingNumbers'] as $value) {
                $values[] = $value;
            }
            $object->setValidTrackingNumbers($values);
            unset($data['validTrackingNumbers']);
        }
        if (\array_key_exists('invalidTrackingNumbers', $data)) {
            $values_1 = [];
            foreach ($data['invalidTrackingNumbers'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setInvalidTrackingNumbers($values_1);
            unset($data['invalidTrackingNumbers']);
        }
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_2;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('validTrackingNumbers') && null !== $data->getValidTrackingNumbers()) {
            $values = [];
            foreach ($data->getValidTrackingNumbers() as $value) {
                $values[] = $value;
            }
            $dataArray['validTrackingNumbers'] = $values;
        }
        if ($data->isInitialized('invalidTrackingNumbers') && null !== $data->getInvalidTrackingNumbers()) {
            $values_1 = [];
            foreach ($data->getInvalidTrackingNumbers() as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['invalidTrackingNumbers'] = $values_1;
        }
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_2;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\ShipStream\Ups\Api\Model\TrackSubsServiceResponse::class => false];
    }
}