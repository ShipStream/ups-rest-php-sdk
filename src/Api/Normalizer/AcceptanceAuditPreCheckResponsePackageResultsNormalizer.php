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
class AcceptanceAuditPreCheckResponsePackageResultsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \ShipStream\Ups\Api\Model\AcceptanceAuditPreCheckResponsePackageResults::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \ShipStream\Ups\Api\Model\AcceptanceAuditPreCheckResponsePackageResults::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \ShipStream\Ups\Api\Model\AcceptanceAuditPreCheckResponsePackageResults();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('PackageIdentifier', $data)) {
            $object->setPackageIdentifier($data['PackageIdentifier']);
            unset($data['PackageIdentifier']);
        }
        if (\array_key_exists('AccessibleIndicator', $data)) {
            $object->setAccessibleIndicator($data['AccessibleIndicator']);
            unset($data['AccessibleIndicator']);
        }
        if (\array_key_exists('EuropeBUIndicator', $data)) {
            $object->setEuropeBUIndicator($data['EuropeBUIndicator']);
            unset($data['EuropeBUIndicator']);
        }
        if (\array_key_exists('ChemicalRecordResults', $data)) {
            $values = [];
            foreach ($data['ChemicalRecordResults'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \ShipStream\Ups\Api\Model\PackageResultsChemicalRecordResults::class, 'json', $context);
            }
            $object->setChemicalRecordResults($values);
            unset($data['ChemicalRecordResults']);
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
        $dataArray['PackageIdentifier'] = $data->getPackageIdentifier();
        if ($data->isInitialized('accessibleIndicator') && null !== $data->getAccessibleIndicator()) {
            $dataArray['AccessibleIndicator'] = $data->getAccessibleIndicator();
        }
        if ($data->isInitialized('europeBUIndicator') && null !== $data->getEuropeBUIndicator()) {
            $dataArray['EuropeBUIndicator'] = $data->getEuropeBUIndicator();
        }
        if ($data->isInitialized('chemicalRecordResults') && null !== $data->getChemicalRecordResults()) {
            $values = [];
            foreach ($data->getChemicalRecordResults() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['ChemicalRecordResults'] = $values;
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
        return [\ShipStream\Ups\Api\Model\AcceptanceAuditPreCheckResponsePackageResults::class => false];
    }
}