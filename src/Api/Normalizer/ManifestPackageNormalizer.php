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
class ManifestPackageNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \ShipStream\Ups\Api\Model\ManifestPackage::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \ShipStream\Ups\Api\Model\ManifestPackage::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \ShipStream\Ups\Api\Model\ManifestPackage();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('Activity', $data)) {
            $values = [];
            foreach ($data['Activity'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \ShipStream\Ups\Api\Model\PackageActivity::class, 'json', $context);
            }
            $object->setActivity($values);
            unset($data['Activity']);
        }
        if (\array_key_exists('Description', $data)) {
            $object->setDescription($data['Description']);
            unset($data['Description']);
        }
        if (\array_key_exists('Dimensions', $data)) {
            $object->setDimensions($this->denormalizer->denormalize($data['Dimensions'], \ShipStream\Ups\Api\Model\ManifestPackageDimensions::class, 'json', $context));
            unset($data['Dimensions']);
        }
        if (\array_key_exists('DimensionalWeight', $data)) {
            $object->setDimensionalWeight($this->denormalizer->denormalize($data['DimensionalWeight'], \ShipStream\Ups\Api\Model\PackageDimensionalWeight::class, 'json', $context));
            unset($data['DimensionalWeight']);
        }
        if (\array_key_exists('PackageWeight', $data)) {
            $object->setPackageWeight($this->denormalizer->denormalize($data['PackageWeight'], \ShipStream\Ups\Api\Model\ManifestPackagePackageWeight::class, 'json', $context));
            unset($data['PackageWeight']);
        }
        if (\array_key_exists('LargePackage', $data)) {
            $object->setLargePackage($data['LargePackage']);
            unset($data['LargePackage']);
        }
        if (\array_key_exists('TrackingNumber', $data)) {
            $object->setTrackingNumber($data['TrackingNumber']);
            unset($data['TrackingNumber']);
        }
        if (\array_key_exists('ReferenceNumber', $data)) {
            $values_1 = [];
            foreach ($data['ReferenceNumber'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \ShipStream\Ups\Api\Model\ManifestPackageReferenceNumber::class, 'json', $context);
            }
            $object->setReferenceNumber($values_1);
            unset($data['ReferenceNumber']);
        }
        if (\array_key_exists('PackageServiceOptions', $data)) {
            $object->setPackageServiceOptions($this->denormalizer->denormalize($data['PackageServiceOptions'], \ShipStream\Ups\Api\Model\ManifestPackagePackageServiceOptions::class, 'json', $context));
            unset($data['PackageServiceOptions']);
        }
        if (\array_key_exists('UPSPremiumCareIndicator', $data)) {
            $object->setUPSPremiumCareIndicator($data['UPSPremiumCareIndicator']);
            unset($data['UPSPremiumCareIndicator']);
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
        if ($data->isInitialized('activity') && null !== $data->getActivity()) {
            $values = [];
            foreach ($data->getActivity() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['Activity'] = $values;
        }
        if ($data->isInitialized('description') && null !== $data->getDescription()) {
            $dataArray['Description'] = $data->getDescription();
        }
        if ($data->isInitialized('dimensions') && null !== $data->getDimensions()) {
            $dataArray['Dimensions'] = $this->normalizer->normalize($data->getDimensions(), 'json', $context);
        }
        if ($data->isInitialized('dimensionalWeight') && null !== $data->getDimensionalWeight()) {
            $dataArray['DimensionalWeight'] = $this->normalizer->normalize($data->getDimensionalWeight(), 'json', $context);
        }
        if ($data->isInitialized('packageWeight') && null !== $data->getPackageWeight()) {
            $dataArray['PackageWeight'] = $this->normalizer->normalize($data->getPackageWeight(), 'json', $context);
        }
        if ($data->isInitialized('largePackage') && null !== $data->getLargePackage()) {
            $dataArray['LargePackage'] = $data->getLargePackage();
        }
        if ($data->isInitialized('trackingNumber') && null !== $data->getTrackingNumber()) {
            $dataArray['TrackingNumber'] = $data->getTrackingNumber();
        }
        if ($data->isInitialized('referenceNumber') && null !== $data->getReferenceNumber()) {
            $values_1 = [];
            foreach ($data->getReferenceNumber() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['ReferenceNumber'] = $values_1;
        }
        if ($data->isInitialized('packageServiceOptions') && null !== $data->getPackageServiceOptions()) {
            $dataArray['PackageServiceOptions'] = $this->normalizer->normalize($data->getPackageServiceOptions(), 'json', $context);
        }
        if ($data->isInitialized('uPSPremiumCareIndicator') && null !== $data->getUPSPremiumCareIndicator()) {
            $dataArray['UPSPremiumCareIndicator'] = $data->getUPSPremiumCareIndicator();
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
        return [\ShipStream\Ups\Api\Model\ManifestPackage::class => false];
    }
}