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
use Symfony\Component\HttpKernel\Kernel;
if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class ManifestPackageNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\ManifestPackage';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\ManifestPackage';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
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
            if (\array_key_exists('Activity', $data) && $data['Activity'] !== null) {
                $values = [];
                foreach ($data['Activity'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'ShipStream\\Ups\\Api\\Model\\PackageActivity', 'json', $context);
                }
                $object->setActivity($values);
                unset($data['Activity']);
            }
            elseif (\array_key_exists('Activity', $data) && $data['Activity'] === null) {
                $object->setActivity(null);
            }
            if (\array_key_exists('Description', $data) && $data['Description'] !== null) {
                $object->setDescription($data['Description']);
                unset($data['Description']);
            }
            elseif (\array_key_exists('Description', $data) && $data['Description'] === null) {
                $object->setDescription(null);
            }
            if (\array_key_exists('Dimensions', $data) && $data['Dimensions'] !== null) {
                $object->setDimensions($this->denormalizer->denormalize($data['Dimensions'], 'ShipStream\\Ups\\Api\\Model\\ManifestPackageDimensions', 'json', $context));
                unset($data['Dimensions']);
            }
            elseif (\array_key_exists('Dimensions', $data) && $data['Dimensions'] === null) {
                $object->setDimensions(null);
            }
            if (\array_key_exists('DimensionalWeight', $data) && $data['DimensionalWeight'] !== null) {
                $object->setDimensionalWeight($this->denormalizer->denormalize($data['DimensionalWeight'], 'ShipStream\\Ups\\Api\\Model\\PackageDimensionalWeight', 'json', $context));
                unset($data['DimensionalWeight']);
            }
            elseif (\array_key_exists('DimensionalWeight', $data) && $data['DimensionalWeight'] === null) {
                $object->setDimensionalWeight(null);
            }
            if (\array_key_exists('PackageWeight', $data) && $data['PackageWeight'] !== null) {
                $object->setPackageWeight($this->denormalizer->denormalize($data['PackageWeight'], 'ShipStream\\Ups\\Api\\Model\\ManifestPackagePackageWeight', 'json', $context));
                unset($data['PackageWeight']);
            }
            elseif (\array_key_exists('PackageWeight', $data) && $data['PackageWeight'] === null) {
                $object->setPackageWeight(null);
            }
            if (\array_key_exists('LargePackage', $data) && $data['LargePackage'] !== null) {
                $object->setLargePackage($data['LargePackage']);
                unset($data['LargePackage']);
            }
            elseif (\array_key_exists('LargePackage', $data) && $data['LargePackage'] === null) {
                $object->setLargePackage(null);
            }
            if (\array_key_exists('TrackingNumber', $data) && $data['TrackingNumber'] !== null) {
                $object->setTrackingNumber($data['TrackingNumber']);
                unset($data['TrackingNumber']);
            }
            elseif (\array_key_exists('TrackingNumber', $data) && $data['TrackingNumber'] === null) {
                $object->setTrackingNumber(null);
            }
            if (\array_key_exists('ReferenceNumber', $data) && $data['ReferenceNumber'] !== null) {
                $object->setReferenceNumber($this->denormalizer->denormalize($data['ReferenceNumber'], 'ShipStream\\Ups\\Api\\Model\\ManifestPackageReferenceNumber', 'json', $context));
                unset($data['ReferenceNumber']);
            }
            elseif (\array_key_exists('ReferenceNumber', $data) && $data['ReferenceNumber'] === null) {
                $object->setReferenceNumber(null);
            }
            if (\array_key_exists('PackageServiceOptions', $data) && $data['PackageServiceOptions'] !== null) {
                $object->setPackageServiceOptions($this->denormalizer->denormalize($data['PackageServiceOptions'], 'ShipStream\\Ups\\Api\\Model\\ManifestPackagePackageServiceOptions', 'json', $context));
                unset($data['PackageServiceOptions']);
            }
            elseif (\array_key_exists('PackageServiceOptions', $data) && $data['PackageServiceOptions'] === null) {
                $object->setPackageServiceOptions(null);
            }
            if (\array_key_exists('UPSPremiumCareIndicator', $data) && $data['UPSPremiumCareIndicator'] !== null) {
                $object->setUPSPremiumCareIndicator($data['UPSPremiumCareIndicator']);
                unset($data['UPSPremiumCareIndicator']);
            }
            elseif (\array_key_exists('UPSPremiumCareIndicator', $data) && $data['UPSPremiumCareIndicator'] === null) {
                $object->setUPSPremiumCareIndicator(null);
            }
            foreach ($data as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_1;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('activity') && null !== $object->getActivity()) {
                $values = [];
                foreach ($object->getActivity() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['Activity'] = $values;
            }
            if ($object->isInitialized('description') && null !== $object->getDescription()) {
                $data['Description'] = $object->getDescription();
            }
            if ($object->isInitialized('dimensions') && null !== $object->getDimensions()) {
                $data['Dimensions'] = $this->normalizer->normalize($object->getDimensions(), 'json', $context);
            }
            if ($object->isInitialized('dimensionalWeight') && null !== $object->getDimensionalWeight()) {
                $data['DimensionalWeight'] = $this->normalizer->normalize($object->getDimensionalWeight(), 'json', $context);
            }
            if ($object->isInitialized('packageWeight') && null !== $object->getPackageWeight()) {
                $data['PackageWeight'] = $this->normalizer->normalize($object->getPackageWeight(), 'json', $context);
            }
            if ($object->isInitialized('largePackage') && null !== $object->getLargePackage()) {
                $data['LargePackage'] = $object->getLargePackage();
            }
            if ($object->isInitialized('trackingNumber') && null !== $object->getTrackingNumber()) {
                $data['TrackingNumber'] = $object->getTrackingNumber();
            }
            if ($object->isInitialized('referenceNumber') && null !== $object->getReferenceNumber()) {
                $data['ReferenceNumber'] = $this->normalizer->normalize($object->getReferenceNumber(), 'json', $context);
            }
            if ($object->isInitialized('packageServiceOptions') && null !== $object->getPackageServiceOptions()) {
                $data['PackageServiceOptions'] = $this->normalizer->normalize($object->getPackageServiceOptions(), 'json', $context);
            }
            if ($object->isInitialized('uPSPremiumCareIndicator') && null !== $object->getUPSPremiumCareIndicator()) {
                $data['UPSPremiumCareIndicator'] = $object->getUPSPremiumCareIndicator();
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
            return ['ShipStream\\Ups\\Api\\Model\\ManifestPackage' => false];
        }
    }
} else {
    class ManifestPackageNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\ManifestPackage';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\ManifestPackage';
        }
        /**
         * @return mixed
         */
        public function denormalize($data, $type, $format = null, array $context = [])
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
            if (\array_key_exists('Activity', $data) && $data['Activity'] !== null) {
                $values = [];
                foreach ($data['Activity'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'ShipStream\\Ups\\Api\\Model\\PackageActivity', 'json', $context);
                }
                $object->setActivity($values);
                unset($data['Activity']);
            }
            elseif (\array_key_exists('Activity', $data) && $data['Activity'] === null) {
                $object->setActivity(null);
            }
            if (\array_key_exists('Description', $data) && $data['Description'] !== null) {
                $object->setDescription($data['Description']);
                unset($data['Description']);
            }
            elseif (\array_key_exists('Description', $data) && $data['Description'] === null) {
                $object->setDescription(null);
            }
            if (\array_key_exists('Dimensions', $data) && $data['Dimensions'] !== null) {
                $object->setDimensions($this->denormalizer->denormalize($data['Dimensions'], 'ShipStream\\Ups\\Api\\Model\\ManifestPackageDimensions', 'json', $context));
                unset($data['Dimensions']);
            }
            elseif (\array_key_exists('Dimensions', $data) && $data['Dimensions'] === null) {
                $object->setDimensions(null);
            }
            if (\array_key_exists('DimensionalWeight', $data) && $data['DimensionalWeight'] !== null) {
                $object->setDimensionalWeight($this->denormalizer->denormalize($data['DimensionalWeight'], 'ShipStream\\Ups\\Api\\Model\\PackageDimensionalWeight', 'json', $context));
                unset($data['DimensionalWeight']);
            }
            elseif (\array_key_exists('DimensionalWeight', $data) && $data['DimensionalWeight'] === null) {
                $object->setDimensionalWeight(null);
            }
            if (\array_key_exists('PackageWeight', $data) && $data['PackageWeight'] !== null) {
                $object->setPackageWeight($this->denormalizer->denormalize($data['PackageWeight'], 'ShipStream\\Ups\\Api\\Model\\ManifestPackagePackageWeight', 'json', $context));
                unset($data['PackageWeight']);
            }
            elseif (\array_key_exists('PackageWeight', $data) && $data['PackageWeight'] === null) {
                $object->setPackageWeight(null);
            }
            if (\array_key_exists('LargePackage', $data) && $data['LargePackage'] !== null) {
                $object->setLargePackage($data['LargePackage']);
                unset($data['LargePackage']);
            }
            elseif (\array_key_exists('LargePackage', $data) && $data['LargePackage'] === null) {
                $object->setLargePackage(null);
            }
            if (\array_key_exists('TrackingNumber', $data) && $data['TrackingNumber'] !== null) {
                $object->setTrackingNumber($data['TrackingNumber']);
                unset($data['TrackingNumber']);
            }
            elseif (\array_key_exists('TrackingNumber', $data) && $data['TrackingNumber'] === null) {
                $object->setTrackingNumber(null);
            }
            if (\array_key_exists('ReferenceNumber', $data) && $data['ReferenceNumber'] !== null) {
                $object->setReferenceNumber($this->denormalizer->denormalize($data['ReferenceNumber'], 'ShipStream\\Ups\\Api\\Model\\ManifestPackageReferenceNumber', 'json', $context));
                unset($data['ReferenceNumber']);
            }
            elseif (\array_key_exists('ReferenceNumber', $data) && $data['ReferenceNumber'] === null) {
                $object->setReferenceNumber(null);
            }
            if (\array_key_exists('PackageServiceOptions', $data) && $data['PackageServiceOptions'] !== null) {
                $object->setPackageServiceOptions($this->denormalizer->denormalize($data['PackageServiceOptions'], 'ShipStream\\Ups\\Api\\Model\\ManifestPackagePackageServiceOptions', 'json', $context));
                unset($data['PackageServiceOptions']);
            }
            elseif (\array_key_exists('PackageServiceOptions', $data) && $data['PackageServiceOptions'] === null) {
                $object->setPackageServiceOptions(null);
            }
            if (\array_key_exists('UPSPremiumCareIndicator', $data) && $data['UPSPremiumCareIndicator'] !== null) {
                $object->setUPSPremiumCareIndicator($data['UPSPremiumCareIndicator']);
                unset($data['UPSPremiumCareIndicator']);
            }
            elseif (\array_key_exists('UPSPremiumCareIndicator', $data) && $data['UPSPremiumCareIndicator'] === null) {
                $object->setUPSPremiumCareIndicator(null);
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
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('activity') && null !== $object->getActivity()) {
                $values = [];
                foreach ($object->getActivity() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['Activity'] = $values;
            }
            if ($object->isInitialized('description') && null !== $object->getDescription()) {
                $data['Description'] = $object->getDescription();
            }
            if ($object->isInitialized('dimensions') && null !== $object->getDimensions()) {
                $data['Dimensions'] = $this->normalizer->normalize($object->getDimensions(), 'json', $context);
            }
            if ($object->isInitialized('dimensionalWeight') && null !== $object->getDimensionalWeight()) {
                $data['DimensionalWeight'] = $this->normalizer->normalize($object->getDimensionalWeight(), 'json', $context);
            }
            if ($object->isInitialized('packageWeight') && null !== $object->getPackageWeight()) {
                $data['PackageWeight'] = $this->normalizer->normalize($object->getPackageWeight(), 'json', $context);
            }
            if ($object->isInitialized('largePackage') && null !== $object->getLargePackage()) {
                $data['LargePackage'] = $object->getLargePackage();
            }
            if ($object->isInitialized('trackingNumber') && null !== $object->getTrackingNumber()) {
                $data['TrackingNumber'] = $object->getTrackingNumber();
            }
            if ($object->isInitialized('referenceNumber') && null !== $object->getReferenceNumber()) {
                $data['ReferenceNumber'] = $this->normalizer->normalize($object->getReferenceNumber(), 'json', $context);
            }
            if ($object->isInitialized('packageServiceOptions') && null !== $object->getPackageServiceOptions()) {
                $data['PackageServiceOptions'] = $this->normalizer->normalize($object->getPackageServiceOptions(), 'json', $context);
            }
            if ($object->isInitialized('uPSPremiumCareIndicator') && null !== $object->getUPSPremiumCareIndicator()) {
                $data['UPSPremiumCareIndicator'] = $object->getUPSPremiumCareIndicator();
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
            return ['ShipStream\\Ups\\Api\\Model\\ManifestPackage' => false];
        }
    }
}