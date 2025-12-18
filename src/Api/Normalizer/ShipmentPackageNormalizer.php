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
class ShipmentPackageNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \ShipStream\Ups\Api\Model\ShipmentPackage::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \ShipStream\Ups\Api\Model\ShipmentPackage::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \ShipStream\Ups\Api\Model\ShipmentPackage();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('Description', $data)) {
            $object->setDescription($data['Description']);
            unset($data['Description']);
        }
        if (\array_key_exists('PalletDescription', $data)) {
            $object->setPalletDescription($data['PalletDescription']);
            unset($data['PalletDescription']);
        }
        if (\array_key_exists('NumOfPieces', $data)) {
            $object->setNumOfPieces($data['NumOfPieces']);
            unset($data['NumOfPieces']);
        }
        if (\array_key_exists('UnitPrice', $data)) {
            $object->setUnitPrice($data['UnitPrice']);
            unset($data['UnitPrice']);
        }
        if (\array_key_exists('Packaging', $data)) {
            $object->setPackaging($this->denormalizer->denormalize($data['Packaging'], \ShipStream\Ups\Api\Model\PackagePackaging::class, 'json', $context));
            unset($data['Packaging']);
        }
        if (\array_key_exists('Dimensions', $data)) {
            $object->setDimensions($this->denormalizer->denormalize($data['Dimensions'], \ShipStream\Ups\Api\Model\PackageDimensions::class, 'json', $context));
            unset($data['Dimensions']);
        }
        if (\array_key_exists('DimWeight', $data)) {
            $object->setDimWeight($this->denormalizer->denormalize($data['DimWeight'], \ShipStream\Ups\Api\Model\PackageDimWeight::class, 'json', $context));
            unset($data['DimWeight']);
        }
        if (\array_key_exists('PackageWeight', $data)) {
            $object->setPackageWeight($this->denormalizer->denormalize($data['PackageWeight'], \ShipStream\Ups\Api\Model\PackagePackageWeight::class, 'json', $context));
            unset($data['PackageWeight']);
        }
        if (\array_key_exists('LargePackageIndicator', $data)) {
            $object->setLargePackageIndicator($data['LargePackageIndicator']);
            unset($data['LargePackageIndicator']);
        }
        if (\array_key_exists('OversizeIndicator', $data)) {
            $object->setOversizeIndicator($data['OversizeIndicator']);
            unset($data['OversizeIndicator']);
        }
        if (\array_key_exists('MinimumBillableWeightIndicator', $data)) {
            $object->setMinimumBillableWeightIndicator($data['MinimumBillableWeightIndicator']);
            unset($data['MinimumBillableWeightIndicator']);
        }
        if (\array_key_exists('ReferenceNumber', $data)) {
            $values = [];
            foreach ($data['ReferenceNumber'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \ShipStream\Ups\Api\Model\PackageReferenceNumber::class, 'json', $context);
            }
            $object->setReferenceNumber($values);
            unset($data['ReferenceNumber']);
        }
        if (\array_key_exists('AdditionalHandlingIndicator', $data)) {
            $object->setAdditionalHandlingIndicator($data['AdditionalHandlingIndicator']);
            unset($data['AdditionalHandlingIndicator']);
        }
        if (\array_key_exists('SimpleRate', $data)) {
            $object->setSimpleRate($this->denormalizer->denormalize($data['SimpleRate'], \ShipStream\Ups\Api\Model\PackageSimpleRate::class, 'json', $context));
            unset($data['SimpleRate']);
        }
        if (\array_key_exists('UPSPremier', $data)) {
            $object->setUPSPremier($this->denormalizer->denormalize($data['UPSPremier'], \ShipStream\Ups\Api\Model\PackageUPSPremier::class, 'json', $context));
            unset($data['UPSPremier']);
        }
        if (\array_key_exists('PackageServiceOptions', $data)) {
            $object->setPackageServiceOptions($this->denormalizer->denormalize($data['PackageServiceOptions'], \ShipStream\Ups\Api\Model\PackagePackageServiceOptions::class, 'json', $context));
            unset($data['PackageServiceOptions']);
        }
        if (\array_key_exists('Commodity', $data)) {
            $object->setCommodity($this->denormalizer->denormalize($data['Commodity'], \ShipStream\Ups\Api\Model\PackageCommodity::class, 'json', $context));
            unset($data['Commodity']);
        }
        if (\array_key_exists('HazMatPackageInformation', $data)) {
            $object->setHazMatPackageInformation($this->denormalizer->denormalize($data['HazMatPackageInformation'], \ShipStream\Ups\Api\Model\PackageHazMatPackageInformation::class, 'json', $context));
            unset($data['HazMatPackageInformation']);
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
        if ($data->isInitialized('description') && null !== $data->getDescription()) {
            $dataArray['Description'] = $data->getDescription();
        }
        if ($data->isInitialized('palletDescription') && null !== $data->getPalletDescription()) {
            $dataArray['PalletDescription'] = $data->getPalletDescription();
        }
        if ($data->isInitialized('numOfPieces') && null !== $data->getNumOfPieces()) {
            $dataArray['NumOfPieces'] = $data->getNumOfPieces();
        }
        if ($data->isInitialized('unitPrice') && null !== $data->getUnitPrice()) {
            $dataArray['UnitPrice'] = $data->getUnitPrice();
        }
        $dataArray['Packaging'] = $this->normalizer->normalize($data->getPackaging(), 'json', $context);
        if ($data->isInitialized('dimensions') && null !== $data->getDimensions()) {
            $dataArray['Dimensions'] = $this->normalizer->normalize($data->getDimensions(), 'json', $context);
        }
        if ($data->isInitialized('dimWeight') && null !== $data->getDimWeight()) {
            $dataArray['DimWeight'] = $this->normalizer->normalize($data->getDimWeight(), 'json', $context);
        }
        if ($data->isInitialized('packageWeight') && null !== $data->getPackageWeight()) {
            $dataArray['PackageWeight'] = $this->normalizer->normalize($data->getPackageWeight(), 'json', $context);
        }
        if ($data->isInitialized('largePackageIndicator') && null !== $data->getLargePackageIndicator()) {
            $dataArray['LargePackageIndicator'] = $data->getLargePackageIndicator();
        }
        if ($data->isInitialized('oversizeIndicator') && null !== $data->getOversizeIndicator()) {
            $dataArray['OversizeIndicator'] = $data->getOversizeIndicator();
        }
        if ($data->isInitialized('minimumBillableWeightIndicator') && null !== $data->getMinimumBillableWeightIndicator()) {
            $dataArray['MinimumBillableWeightIndicator'] = $data->getMinimumBillableWeightIndicator();
        }
        if ($data->isInitialized('referenceNumber') && null !== $data->getReferenceNumber()) {
            $values = [];
            foreach ($data->getReferenceNumber() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['ReferenceNumber'] = $values;
        }
        if ($data->isInitialized('additionalHandlingIndicator') && null !== $data->getAdditionalHandlingIndicator()) {
            $dataArray['AdditionalHandlingIndicator'] = $data->getAdditionalHandlingIndicator();
        }
        if ($data->isInitialized('simpleRate') && null !== $data->getSimpleRate()) {
            $dataArray['SimpleRate'] = $this->normalizer->normalize($data->getSimpleRate(), 'json', $context);
        }
        if ($data->isInitialized('uPSPremier') && null !== $data->getUPSPremier()) {
            $dataArray['UPSPremier'] = $this->normalizer->normalize($data->getUPSPremier(), 'json', $context);
        }
        if ($data->isInitialized('packageServiceOptions') && null !== $data->getPackageServiceOptions()) {
            $dataArray['PackageServiceOptions'] = $this->normalizer->normalize($data->getPackageServiceOptions(), 'json', $context);
        }
        if ($data->isInitialized('commodity') && null !== $data->getCommodity()) {
            $dataArray['Commodity'] = $this->normalizer->normalize($data->getCommodity(), 'json', $context);
        }
        if ($data->isInitialized('hazMatPackageInformation') && null !== $data->getHazMatPackageInformation()) {
            $dataArray['HazMatPackageInformation'] = $this->normalizer->normalize($data->getHazMatPackageInformation(), 'json', $context);
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
        return [\ShipStream\Ups\Api\Model\ShipmentPackage::class => false];
    }
}