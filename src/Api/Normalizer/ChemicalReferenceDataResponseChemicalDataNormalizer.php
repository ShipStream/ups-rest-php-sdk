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
class ChemicalReferenceDataResponseChemicalDataNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \ShipStream\Ups\Api\Model\ChemicalReferenceDataResponseChemicalData::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \ShipStream\Ups\Api\Model\ChemicalReferenceDataResponseChemicalData::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \ShipStream\Ups\Api\Model\ChemicalReferenceDataResponseChemicalData();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('ChemicalDetail', $data)) {
            $object->setChemicalDetail($this->denormalizer->denormalize($data['ChemicalDetail'], \ShipStream\Ups\Api\Model\ChemicalDataChemicalDetail::class, 'json', $context));
            unset($data['ChemicalDetail']);
        }
        if (\array_key_exists('ProperShippingNameDetail', $data)) {
            $object->setProperShippingNameDetail($this->denormalizer->denormalize($data['ProperShippingNameDetail'], \ShipStream\Ups\Api\Model\ChemicalDataProperShippingNameDetail::class, 'json', $context));
            unset($data['ProperShippingNameDetail']);
        }
        if (\array_key_exists('PackageQuantityLimitDetail', $data)) {
            $values = [];
            foreach ($data['PackageQuantityLimitDetail'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \ShipStream\Ups\Api\Model\ChemicalDataPackageQuantityLimitDetail::class, 'json', $context);
            }
            $object->setPackageQuantityLimitDetail($values);
            unset($data['PackageQuantityLimitDetail']);
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
        if ($data->isInitialized('chemicalDetail') && null !== $data->getChemicalDetail()) {
            $dataArray['ChemicalDetail'] = $this->normalizer->normalize($data->getChemicalDetail(), 'json', $context);
        }
        if ($data->isInitialized('properShippingNameDetail') && null !== $data->getProperShippingNameDetail()) {
            $dataArray['ProperShippingNameDetail'] = $this->normalizer->normalize($data->getProperShippingNameDetail(), 'json', $context);
        }
        if ($data->isInitialized('packageQuantityLimitDetail') && null !== $data->getPackageQuantityLimitDetail()) {
            $values = [];
            foreach ($data->getPackageQuantityLimitDetail() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['PackageQuantityLimitDetail'] = $values;
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
        return [\ShipStream\Ups\Api\Model\ChemicalReferenceDataResponseChemicalData::class => false];
    }
}