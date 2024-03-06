<?php

namespace ShipStream\Ups\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use ShipStream\Ups\Api\Runtime\Normalizer\CheckArray;
use ShipStream\Ups\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
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
    public function supportsDenormalization($data, $type, $format = null, array $context = []) : bool
    {
        return $type === 'ShipStream\\Ups\\Api\\Model\\AcceptanceAuditPreCheckResponsePackageResults';
    }
    public function supportsNormalization($data, $format = null, array $context = []) : bool
    {
        return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\AcceptanceAuditPreCheckResponsePackageResults';
    }
    /**
     * @return mixed
     */
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
                $values[] = $this->denormalizer->denormalize($value, 'ShipStream\\Ups\\Api\\Model\\PackageResultsChemicalRecordResults', 'json', $context);
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
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize(mixed $object, ?string $format = null, array $context = []): \ArrayObject|array|string|int|float|bool|null
    {
        $data = [];
        $data['PackageIdentifier'] = $object->getPackageIdentifier();
        if ($object->isInitialized('accessibleIndicator') && null !== $object->getAccessibleIndicator()) {
            $data['AccessibleIndicator'] = $object->getAccessibleIndicator();
        }
        if ($object->isInitialized('europeBUIndicator') && null !== $object->getEuropeBUIndicator()) {
            $data['EuropeBUIndicator'] = $object->getEuropeBUIndicator();
        }
        if ($object->isInitialized('chemicalRecordResults') && null !== $object->getChemicalRecordResults()) {
            $values = [];
            foreach ($object->getChemicalRecordResults() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['ChemicalRecordResults'] = $values;
        }
        foreach ($object as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value_1;
            }
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('ShipStream\\Ups\\Api\\Model\\AcceptanceAuditPreCheckResponsePackageResults' => false);
    }
}