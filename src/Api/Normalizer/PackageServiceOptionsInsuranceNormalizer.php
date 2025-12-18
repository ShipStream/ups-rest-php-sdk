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
class PackageServiceOptionsInsuranceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \ShipStream\Ups\Api\Model\PackageServiceOptionsInsurance::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \ShipStream\Ups\Api\Model\PackageServiceOptionsInsurance::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \ShipStream\Ups\Api\Model\PackageServiceOptionsInsurance();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('BasicFlexibleParcelIndicator', $data)) {
            $object->setBasicFlexibleParcelIndicator($this->denormalizer->denormalize($data['BasicFlexibleParcelIndicator'], \ShipStream\Ups\Api\Model\InsuranceBasicFlexibleParcelIndicator::class, 'json', $context));
            unset($data['BasicFlexibleParcelIndicator']);
        }
        if (\array_key_exists('ExtendedFlexibleParcelIndicator', $data)) {
            $object->setExtendedFlexibleParcelIndicator($this->denormalizer->denormalize($data['ExtendedFlexibleParcelIndicator'], \ShipStream\Ups\Api\Model\InsuranceExtendedFlexibleParcelIndicator::class, 'json', $context));
            unset($data['ExtendedFlexibleParcelIndicator']);
        }
        if (\array_key_exists('TimeInTransitFlexibleParcelIndicator', $data)) {
            $object->setTimeInTransitFlexibleParcelIndicator($this->denormalizer->denormalize($data['TimeInTransitFlexibleParcelIndicator'], \ShipStream\Ups\Api\Model\InsuranceTimeInTransitFlexibleParcelIndicator::class, 'json', $context));
            unset($data['TimeInTransitFlexibleParcelIndicator']);
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
        if ($data->isInitialized('basicFlexibleParcelIndicator') && null !== $data->getBasicFlexibleParcelIndicator()) {
            $dataArray['BasicFlexibleParcelIndicator'] = $this->normalizer->normalize($data->getBasicFlexibleParcelIndicator(), 'json', $context);
        }
        if ($data->isInitialized('extendedFlexibleParcelIndicator') && null !== $data->getExtendedFlexibleParcelIndicator()) {
            $dataArray['ExtendedFlexibleParcelIndicator'] = $this->normalizer->normalize($data->getExtendedFlexibleParcelIndicator(), 'json', $context);
        }
        if ($data->isInitialized('timeInTransitFlexibleParcelIndicator') && null !== $data->getTimeInTransitFlexibleParcelIndicator()) {
            $dataArray['TimeInTransitFlexibleParcelIndicator'] = $this->normalizer->normalize($data->getTimeInTransitFlexibleParcelIndicator(), 'json', $context);
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
        return [\ShipStream\Ups\Api\Model\PackageServiceOptionsInsurance::class => false];
    }
}