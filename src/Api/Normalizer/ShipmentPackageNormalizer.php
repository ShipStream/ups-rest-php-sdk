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
    class ShipmentPackageNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\ShipmentPackage';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\ShipmentPackage';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
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
            if (\array_key_exists('Description', $data) && $data['Description'] !== null) {
                $object->setDescription($data['Description']);
                unset($data['Description']);
            }
            elseif (\array_key_exists('Description', $data) && $data['Description'] === null) {
                $object->setDescription(null);
            }
            if (\array_key_exists('PalletDescription', $data) && $data['PalletDescription'] !== null) {
                $object->setPalletDescription($data['PalletDescription']);
                unset($data['PalletDescription']);
            }
            elseif (\array_key_exists('PalletDescription', $data) && $data['PalletDescription'] === null) {
                $object->setPalletDescription(null);
            }
            if (\array_key_exists('NumOfPieces', $data) && $data['NumOfPieces'] !== null) {
                $object->setNumOfPieces($data['NumOfPieces']);
                unset($data['NumOfPieces']);
            }
            elseif (\array_key_exists('NumOfPieces', $data) && $data['NumOfPieces'] === null) {
                $object->setNumOfPieces(null);
            }
            if (\array_key_exists('UnitPrice', $data) && $data['UnitPrice'] !== null) {
                $object->setUnitPrice($data['UnitPrice']);
                unset($data['UnitPrice']);
            }
            elseif (\array_key_exists('UnitPrice', $data) && $data['UnitPrice'] === null) {
                $object->setUnitPrice(null);
            }
            if (\array_key_exists('Packaging', $data) && $data['Packaging'] !== null) {
                $object->setPackaging($this->denormalizer->denormalize($data['Packaging'], 'ShipStream\\Ups\\Api\\Model\\PackagePackaging', 'json', $context));
                unset($data['Packaging']);
            }
            elseif (\array_key_exists('Packaging', $data) && $data['Packaging'] === null) {
                $object->setPackaging(null);
            }
            if (\array_key_exists('Dimensions', $data) && $data['Dimensions'] !== null) {
                $object->setDimensions($this->denormalizer->denormalize($data['Dimensions'], 'ShipStream\\Ups\\Api\\Model\\PackageDimensions', 'json', $context));
                unset($data['Dimensions']);
            }
            elseif (\array_key_exists('Dimensions', $data) && $data['Dimensions'] === null) {
                $object->setDimensions(null);
            }
            if (\array_key_exists('DimWeight', $data) && $data['DimWeight'] !== null) {
                $object->setDimWeight($this->denormalizer->denormalize($data['DimWeight'], 'ShipStream\\Ups\\Api\\Model\\PackageDimWeight', 'json', $context));
                unset($data['DimWeight']);
            }
            elseif (\array_key_exists('DimWeight', $data) && $data['DimWeight'] === null) {
                $object->setDimWeight(null);
            }
            if (\array_key_exists('PackageWeight', $data) && $data['PackageWeight'] !== null) {
                $object->setPackageWeight($this->denormalizer->denormalize($data['PackageWeight'], 'ShipStream\\Ups\\Api\\Model\\PackagePackageWeight', 'json', $context));
                unset($data['PackageWeight']);
            }
            elseif (\array_key_exists('PackageWeight', $data) && $data['PackageWeight'] === null) {
                $object->setPackageWeight(null);
            }
            if (\array_key_exists('LargePackageIndicator', $data) && $data['LargePackageIndicator'] !== null) {
                $object->setLargePackageIndicator($data['LargePackageIndicator']);
                unset($data['LargePackageIndicator']);
            }
            elseif (\array_key_exists('LargePackageIndicator', $data) && $data['LargePackageIndicator'] === null) {
                $object->setLargePackageIndicator(null);
            }
            if (\array_key_exists('ReferenceNumber', $data) && $data['ReferenceNumber'] !== null) {
                $values = [];
                foreach ($data['ReferenceNumber'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'ShipStream\\Ups\\Api\\Model\\PackageReferenceNumber', 'json', $context);
                }
                $object->setReferenceNumber($values);
                unset($data['ReferenceNumber']);
            }
            elseif (\array_key_exists('ReferenceNumber', $data) && $data['ReferenceNumber'] === null) {
                $object->setReferenceNumber(null);
            }
            if (\array_key_exists('AdditionalHandlingIndicator', $data) && $data['AdditionalHandlingIndicator'] !== null) {
                $object->setAdditionalHandlingIndicator($data['AdditionalHandlingIndicator']);
                unset($data['AdditionalHandlingIndicator']);
            }
            elseif (\array_key_exists('AdditionalHandlingIndicator', $data) && $data['AdditionalHandlingIndicator'] === null) {
                $object->setAdditionalHandlingIndicator(null);
            }
            if (\array_key_exists('SimpleRate', $data) && $data['SimpleRate'] !== null) {
                $object->setSimpleRate($this->denormalizer->denormalize($data['SimpleRate'], 'ShipStream\\Ups\\Api\\Model\\PackageSimpleRate', 'json', $context));
                unset($data['SimpleRate']);
            }
            elseif (\array_key_exists('SimpleRate', $data) && $data['SimpleRate'] === null) {
                $object->setSimpleRate(null);
            }
            if (\array_key_exists('UPSPremier', $data) && $data['UPSPremier'] !== null) {
                $object->setUPSPremier($this->denormalizer->denormalize($data['UPSPremier'], 'ShipStream\\Ups\\Api\\Model\\PackageUPSPremier', 'json', $context));
                unset($data['UPSPremier']);
            }
            elseif (\array_key_exists('UPSPremier', $data) && $data['UPSPremier'] === null) {
                $object->setUPSPremier(null);
            }
            if (\array_key_exists('PackageServiceOptions', $data) && $data['PackageServiceOptions'] !== null) {
                $object->setPackageServiceOptions($this->denormalizer->denormalize($data['PackageServiceOptions'], 'ShipStream\\Ups\\Api\\Model\\PackagePackageServiceOptions', 'json', $context));
                unset($data['PackageServiceOptions']);
            }
            elseif (\array_key_exists('PackageServiceOptions', $data) && $data['PackageServiceOptions'] === null) {
                $object->setPackageServiceOptions(null);
            }
            if (\array_key_exists('Commodity', $data) && $data['Commodity'] !== null) {
                $object->setCommodity($this->denormalizer->denormalize($data['Commodity'], 'ShipStream\\Ups\\Api\\Model\\PackageCommodity', 'json', $context));
                unset($data['Commodity']);
            }
            elseif (\array_key_exists('Commodity', $data) && $data['Commodity'] === null) {
                $object->setCommodity(null);
            }
            if (\array_key_exists('HazMatPackageInformation', $data) && $data['HazMatPackageInformation'] !== null) {
                $object->setHazMatPackageInformation($this->denormalizer->denormalize($data['HazMatPackageInformation'], 'ShipStream\\Ups\\Api\\Model\\PackageHazMatPackageInformation', 'json', $context));
                unset($data['HazMatPackageInformation']);
            }
            elseif (\array_key_exists('HazMatPackageInformation', $data) && $data['HazMatPackageInformation'] === null) {
                $object->setHazMatPackageInformation(null);
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
            if ($object->isInitialized('description') && null !== $object->getDescription()) {
                $data['Description'] = $object->getDescription();
            }
            if ($object->isInitialized('palletDescription') && null !== $object->getPalletDescription()) {
                $data['PalletDescription'] = $object->getPalletDescription();
            }
            if ($object->isInitialized('numOfPieces') && null !== $object->getNumOfPieces()) {
                $data['NumOfPieces'] = $object->getNumOfPieces();
            }
            if ($object->isInitialized('unitPrice') && null !== $object->getUnitPrice()) {
                $data['UnitPrice'] = $object->getUnitPrice();
            }
            $data['Packaging'] = $this->normalizer->normalize($object->getPackaging(), 'json', $context);
            if ($object->isInitialized('dimensions') && null !== $object->getDimensions()) {
                $data['Dimensions'] = $this->normalizer->normalize($object->getDimensions(), 'json', $context);
            }
            if ($object->isInitialized('dimWeight') && null !== $object->getDimWeight()) {
                $data['DimWeight'] = $this->normalizer->normalize($object->getDimWeight(), 'json', $context);
            }
            if ($object->isInitialized('packageWeight') && null !== $object->getPackageWeight()) {
                $data['PackageWeight'] = $this->normalizer->normalize($object->getPackageWeight(), 'json', $context);
            }
            if ($object->isInitialized('largePackageIndicator') && null !== $object->getLargePackageIndicator()) {
                $data['LargePackageIndicator'] = $object->getLargePackageIndicator();
            }
            if ($object->isInitialized('referenceNumber') && null !== $object->getReferenceNumber()) {
                $values = [];
                foreach ($object->getReferenceNumber() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['ReferenceNumber'] = $values;
            }
            if ($object->isInitialized('additionalHandlingIndicator') && null !== $object->getAdditionalHandlingIndicator()) {
                $data['AdditionalHandlingIndicator'] = $object->getAdditionalHandlingIndicator();
            }
            if ($object->isInitialized('simpleRate') && null !== $object->getSimpleRate()) {
                $data['SimpleRate'] = $this->normalizer->normalize($object->getSimpleRate(), 'json', $context);
            }
            if ($object->isInitialized('uPSPremier') && null !== $object->getUPSPremier()) {
                $data['UPSPremier'] = $this->normalizer->normalize($object->getUPSPremier(), 'json', $context);
            }
            if ($object->isInitialized('packageServiceOptions') && null !== $object->getPackageServiceOptions()) {
                $data['PackageServiceOptions'] = $this->normalizer->normalize($object->getPackageServiceOptions(), 'json', $context);
            }
            if ($object->isInitialized('commodity') && null !== $object->getCommodity()) {
                $data['Commodity'] = $this->normalizer->normalize($object->getCommodity(), 'json', $context);
            }
            if ($object->isInitialized('hazMatPackageInformation') && null !== $object->getHazMatPackageInformation()) {
                $data['HazMatPackageInformation'] = $this->normalizer->normalize($object->getHazMatPackageInformation(), 'json', $context);
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
            return ['ShipStream\\Ups\\Api\\Model\\ShipmentPackage' => false];
        }
    }
} else {
    class ShipmentPackageNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\ShipmentPackage';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\ShipmentPackage';
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
            $object = new \ShipStream\Ups\Api\Model\ShipmentPackage();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Description', $data) && $data['Description'] !== null) {
                $object->setDescription($data['Description']);
                unset($data['Description']);
            }
            elseif (\array_key_exists('Description', $data) && $data['Description'] === null) {
                $object->setDescription(null);
            }
            if (\array_key_exists('PalletDescription', $data) && $data['PalletDescription'] !== null) {
                $object->setPalletDescription($data['PalletDescription']);
                unset($data['PalletDescription']);
            }
            elseif (\array_key_exists('PalletDescription', $data) && $data['PalletDescription'] === null) {
                $object->setPalletDescription(null);
            }
            if (\array_key_exists('NumOfPieces', $data) && $data['NumOfPieces'] !== null) {
                $object->setNumOfPieces($data['NumOfPieces']);
                unset($data['NumOfPieces']);
            }
            elseif (\array_key_exists('NumOfPieces', $data) && $data['NumOfPieces'] === null) {
                $object->setNumOfPieces(null);
            }
            if (\array_key_exists('UnitPrice', $data) && $data['UnitPrice'] !== null) {
                $object->setUnitPrice($data['UnitPrice']);
                unset($data['UnitPrice']);
            }
            elseif (\array_key_exists('UnitPrice', $data) && $data['UnitPrice'] === null) {
                $object->setUnitPrice(null);
            }
            if (\array_key_exists('Packaging', $data) && $data['Packaging'] !== null) {
                $object->setPackaging($this->denormalizer->denormalize($data['Packaging'], 'ShipStream\\Ups\\Api\\Model\\PackagePackaging', 'json', $context));
                unset($data['Packaging']);
            }
            elseif (\array_key_exists('Packaging', $data) && $data['Packaging'] === null) {
                $object->setPackaging(null);
            }
            if (\array_key_exists('Dimensions', $data) && $data['Dimensions'] !== null) {
                $object->setDimensions($this->denormalizer->denormalize($data['Dimensions'], 'ShipStream\\Ups\\Api\\Model\\PackageDimensions', 'json', $context));
                unset($data['Dimensions']);
            }
            elseif (\array_key_exists('Dimensions', $data) && $data['Dimensions'] === null) {
                $object->setDimensions(null);
            }
            if (\array_key_exists('DimWeight', $data) && $data['DimWeight'] !== null) {
                $object->setDimWeight($this->denormalizer->denormalize($data['DimWeight'], 'ShipStream\\Ups\\Api\\Model\\PackageDimWeight', 'json', $context));
                unset($data['DimWeight']);
            }
            elseif (\array_key_exists('DimWeight', $data) && $data['DimWeight'] === null) {
                $object->setDimWeight(null);
            }
            if (\array_key_exists('PackageWeight', $data) && $data['PackageWeight'] !== null) {
                $object->setPackageWeight($this->denormalizer->denormalize($data['PackageWeight'], 'ShipStream\\Ups\\Api\\Model\\PackagePackageWeight', 'json', $context));
                unset($data['PackageWeight']);
            }
            elseif (\array_key_exists('PackageWeight', $data) && $data['PackageWeight'] === null) {
                $object->setPackageWeight(null);
            }
            if (\array_key_exists('LargePackageIndicator', $data) && $data['LargePackageIndicator'] !== null) {
                $object->setLargePackageIndicator($data['LargePackageIndicator']);
                unset($data['LargePackageIndicator']);
            }
            elseif (\array_key_exists('LargePackageIndicator', $data) && $data['LargePackageIndicator'] === null) {
                $object->setLargePackageIndicator(null);
            }
            if (\array_key_exists('ReferenceNumber', $data) && $data['ReferenceNumber'] !== null) {
                $values = [];
                foreach ($data['ReferenceNumber'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'ShipStream\\Ups\\Api\\Model\\PackageReferenceNumber', 'json', $context);
                }
                $object->setReferenceNumber($values);
                unset($data['ReferenceNumber']);
            }
            elseif (\array_key_exists('ReferenceNumber', $data) && $data['ReferenceNumber'] === null) {
                $object->setReferenceNumber(null);
            }
            if (\array_key_exists('AdditionalHandlingIndicator', $data) && $data['AdditionalHandlingIndicator'] !== null) {
                $object->setAdditionalHandlingIndicator($data['AdditionalHandlingIndicator']);
                unset($data['AdditionalHandlingIndicator']);
            }
            elseif (\array_key_exists('AdditionalHandlingIndicator', $data) && $data['AdditionalHandlingIndicator'] === null) {
                $object->setAdditionalHandlingIndicator(null);
            }
            if (\array_key_exists('SimpleRate', $data) && $data['SimpleRate'] !== null) {
                $object->setSimpleRate($this->denormalizer->denormalize($data['SimpleRate'], 'ShipStream\\Ups\\Api\\Model\\PackageSimpleRate', 'json', $context));
                unset($data['SimpleRate']);
            }
            elseif (\array_key_exists('SimpleRate', $data) && $data['SimpleRate'] === null) {
                $object->setSimpleRate(null);
            }
            if (\array_key_exists('UPSPremier', $data) && $data['UPSPremier'] !== null) {
                $object->setUPSPremier($this->denormalizer->denormalize($data['UPSPremier'], 'ShipStream\\Ups\\Api\\Model\\PackageUPSPremier', 'json', $context));
                unset($data['UPSPremier']);
            }
            elseif (\array_key_exists('UPSPremier', $data) && $data['UPSPremier'] === null) {
                $object->setUPSPremier(null);
            }
            if (\array_key_exists('PackageServiceOptions', $data) && $data['PackageServiceOptions'] !== null) {
                $object->setPackageServiceOptions($this->denormalizer->denormalize($data['PackageServiceOptions'], 'ShipStream\\Ups\\Api\\Model\\PackagePackageServiceOptions', 'json', $context));
                unset($data['PackageServiceOptions']);
            }
            elseif (\array_key_exists('PackageServiceOptions', $data) && $data['PackageServiceOptions'] === null) {
                $object->setPackageServiceOptions(null);
            }
            if (\array_key_exists('Commodity', $data) && $data['Commodity'] !== null) {
                $object->setCommodity($this->denormalizer->denormalize($data['Commodity'], 'ShipStream\\Ups\\Api\\Model\\PackageCommodity', 'json', $context));
                unset($data['Commodity']);
            }
            elseif (\array_key_exists('Commodity', $data) && $data['Commodity'] === null) {
                $object->setCommodity(null);
            }
            if (\array_key_exists('HazMatPackageInformation', $data) && $data['HazMatPackageInformation'] !== null) {
                $object->setHazMatPackageInformation($this->denormalizer->denormalize($data['HazMatPackageInformation'], 'ShipStream\\Ups\\Api\\Model\\PackageHazMatPackageInformation', 'json', $context));
                unset($data['HazMatPackageInformation']);
            }
            elseif (\array_key_exists('HazMatPackageInformation', $data) && $data['HazMatPackageInformation'] === null) {
                $object->setHazMatPackageInformation(null);
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
            if ($object->isInitialized('description') && null !== $object->getDescription()) {
                $data['Description'] = $object->getDescription();
            }
            if ($object->isInitialized('palletDescription') && null !== $object->getPalletDescription()) {
                $data['PalletDescription'] = $object->getPalletDescription();
            }
            if ($object->isInitialized('numOfPieces') && null !== $object->getNumOfPieces()) {
                $data['NumOfPieces'] = $object->getNumOfPieces();
            }
            if ($object->isInitialized('unitPrice') && null !== $object->getUnitPrice()) {
                $data['UnitPrice'] = $object->getUnitPrice();
            }
            $data['Packaging'] = $this->normalizer->normalize($object->getPackaging(), 'json', $context);
            if ($object->isInitialized('dimensions') && null !== $object->getDimensions()) {
                $data['Dimensions'] = $this->normalizer->normalize($object->getDimensions(), 'json', $context);
            }
            if ($object->isInitialized('dimWeight') && null !== $object->getDimWeight()) {
                $data['DimWeight'] = $this->normalizer->normalize($object->getDimWeight(), 'json', $context);
            }
            if ($object->isInitialized('packageWeight') && null !== $object->getPackageWeight()) {
                $data['PackageWeight'] = $this->normalizer->normalize($object->getPackageWeight(), 'json', $context);
            }
            if ($object->isInitialized('largePackageIndicator') && null !== $object->getLargePackageIndicator()) {
                $data['LargePackageIndicator'] = $object->getLargePackageIndicator();
            }
            if ($object->isInitialized('referenceNumber') && null !== $object->getReferenceNumber()) {
                $values = [];
                foreach ($object->getReferenceNumber() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['ReferenceNumber'] = $values;
            }
            if ($object->isInitialized('additionalHandlingIndicator') && null !== $object->getAdditionalHandlingIndicator()) {
                $data['AdditionalHandlingIndicator'] = $object->getAdditionalHandlingIndicator();
            }
            if ($object->isInitialized('simpleRate') && null !== $object->getSimpleRate()) {
                $data['SimpleRate'] = $this->normalizer->normalize($object->getSimpleRate(), 'json', $context);
            }
            if ($object->isInitialized('uPSPremier') && null !== $object->getUPSPremier()) {
                $data['UPSPremier'] = $this->normalizer->normalize($object->getUPSPremier(), 'json', $context);
            }
            if ($object->isInitialized('packageServiceOptions') && null !== $object->getPackageServiceOptions()) {
                $data['PackageServiceOptions'] = $this->normalizer->normalize($object->getPackageServiceOptions(), 'json', $context);
            }
            if ($object->isInitialized('commodity') && null !== $object->getCommodity()) {
                $data['Commodity'] = $this->normalizer->normalize($object->getCommodity(), 'json', $context);
            }
            if ($object->isInitialized('hazMatPackageInformation') && null !== $object->getHazMatPackageInformation()) {
                $data['HazMatPackageInformation'] = $this->normalizer->normalize($object->getHazMatPackageInformation(), 'json', $context);
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
            return ['ShipStream\\Ups\\Api\\Model\\ShipmentPackage' => false];
        }
    }
}