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
class ChemicalDataPackageQuantityLimitDetailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \ShipStream\Ups\Api\Model\ChemicalDataPackageQuantityLimitDetail::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \ShipStream\Ups\Api\Model\ChemicalDataPackageQuantityLimitDetail::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \ShipStream\Ups\Api\Model\ChemicalDataPackageQuantityLimitDetail();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('PackageQuantityLimitTypeCode', $data)) {
            $object->setPackageQuantityLimitTypeCode($data['PackageQuantityLimitTypeCode']);
            unset($data['PackageQuantityLimitTypeCode']);
        }
        if (\array_key_exists('Quantity', $data)) {
            $object->setQuantity($data['Quantity']);
            unset($data['Quantity']);
        }
        if (\array_key_exists('UOM', $data)) {
            $object->setUOM($data['UOM']);
            unset($data['UOM']);
        }
        if (\array_key_exists('PackagingInstructionCode', $data)) {
            $object->setPackagingInstructionCode($data['PackagingInstructionCode']);
            unset($data['PackagingInstructionCode']);
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
        if ($data->isInitialized('packageQuantityLimitTypeCode') && null !== $data->getPackageQuantityLimitTypeCode()) {
            $dataArray['PackageQuantityLimitTypeCode'] = $data->getPackageQuantityLimitTypeCode();
        }
        if ($data->isInitialized('quantity') && null !== $data->getQuantity()) {
            $dataArray['Quantity'] = $data->getQuantity();
        }
        if ($data->isInitialized('uOM') && null !== $data->getUOM()) {
            $dataArray['UOM'] = $data->getUOM();
        }
        if ($data->isInitialized('packagingInstructionCode') && null !== $data->getPackagingInstructionCode()) {
            $dataArray['PackagingInstructionCode'] = $data->getPackagingInstructionCode();
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
        return [\ShipStream\Ups\Api\Model\ChemicalDataPackageQuantityLimitDetail::class => false];
    }
}