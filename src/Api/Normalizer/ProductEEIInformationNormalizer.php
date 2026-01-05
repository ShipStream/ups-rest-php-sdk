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
class ProductEEIInformationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \ShipStream\Ups\Api\Model\ProductEEIInformation::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \ShipStream\Ups\Api\Model\ProductEEIInformation::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \ShipStream\Ups\Api\Model\ProductEEIInformation();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('ExportInformation', $data)) {
            $object->setExportInformation($data['ExportInformation']);
            unset($data['ExportInformation']);
        }
        if (\array_key_exists('License', $data)) {
            $object->setLicense($this->denormalizer->denormalize($data['License'], \ShipStream\Ups\Api\Model\EEIInformationLicense::class, 'json', $context));
            unset($data['License']);
        }
        if (\array_key_exists('DDTCInformation', $data)) {
            $object->setDDTCInformation($this->denormalizer->denormalize($data['DDTCInformation'], \ShipStream\Ups\Api\Model\EEIInformationDDTCInformation::class, 'json', $context));
            unset($data['DDTCInformation']);
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
        if ($data->isInitialized('exportInformation') && null !== $data->getExportInformation()) {
            $dataArray['ExportInformation'] = $data->getExportInformation();
        }
        if ($data->isInitialized('license') && null !== $data->getLicense()) {
            $dataArray['License'] = $this->normalizer->normalize($data->getLicense(), 'json', $context);
        }
        if ($data->isInitialized('dDTCInformation') && null !== $data->getDDTCInformation()) {
            $dataArray['DDTCInformation'] = $this->normalizer->normalize($data->getDDTCInformation(), 'json', $context);
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
        return [\ShipStream\Ups\Api\Model\ProductEEIInformation::class => false];
    }
}