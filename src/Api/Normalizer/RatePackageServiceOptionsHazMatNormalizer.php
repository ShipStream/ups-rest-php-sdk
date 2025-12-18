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
class RatePackageServiceOptionsHazMatNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \ShipStream\Ups\Api\Model\RatePackageServiceOptionsHazMat::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \ShipStream\Ups\Api\Model\RatePackageServiceOptionsHazMat::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \ShipStream\Ups\Api\Model\RatePackageServiceOptionsHazMat();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('PackageIdentifier', $data)) {
            $object->setPackageIdentifier($data['PackageIdentifier']);
            unset($data['PackageIdentifier']);
        }
        if (\array_key_exists('QValue', $data)) {
            $object->setQValue($data['QValue']);
            unset($data['QValue']);
        }
        if (\array_key_exists('OverPackedIndicator', $data)) {
            $object->setOverPackedIndicator($data['OverPackedIndicator']);
            unset($data['OverPackedIndicator']);
        }
        if (\array_key_exists('AllPackedInOneIndicator', $data)) {
            $object->setAllPackedInOneIndicator($data['AllPackedInOneIndicator']);
            unset($data['AllPackedInOneIndicator']);
        }
        if (\array_key_exists('HazMatChemicalRecord', $data)) {
            $values = [];
            foreach ($data['HazMatChemicalRecord'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \ShipStream\Ups\Api\Model\HazMatHazMatChemicalRecord::class, 'json', $context);
            }
            $object->setHazMatChemicalRecord($values);
            unset($data['HazMatChemicalRecord']);
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
        if ($data->isInitialized('packageIdentifier') && null !== $data->getPackageIdentifier()) {
            $dataArray['PackageIdentifier'] = $data->getPackageIdentifier();
        }
        if ($data->isInitialized('qValue') && null !== $data->getQValue()) {
            $dataArray['QValue'] = $data->getQValue();
        }
        if ($data->isInitialized('overPackedIndicator') && null !== $data->getOverPackedIndicator()) {
            $dataArray['OverPackedIndicator'] = $data->getOverPackedIndicator();
        }
        if ($data->isInitialized('allPackedInOneIndicator') && null !== $data->getAllPackedInOneIndicator()) {
            $dataArray['AllPackedInOneIndicator'] = $data->getAllPackedInOneIndicator();
        }
        $values = [];
        foreach ($data->getHazMatChemicalRecord() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $dataArray['HazMatChemicalRecord'] = $values;
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_1;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\ShipStream\Ups\Api\Model\RatePackageServiceOptionsHazMat::class => false];
    }
}