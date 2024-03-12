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
    class ChemicalReferenceDataResponseChemicalDataNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\ChemicalReferenceDataResponseChemicalData';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\ChemicalReferenceDataResponseChemicalData';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
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
                $object->setChemicalDetail($this->denormalizer->denormalize($data['ChemicalDetail'], 'ShipStream\\Ups\\Api\\Model\\ChemicalDataChemicalDetail', 'json', $context));
                unset($data['ChemicalDetail']);
            }
            if (\array_key_exists('ProperShippingNameDetail', $data)) {
                $object->setProperShippingNameDetail($this->denormalizer->denormalize($data['ProperShippingNameDetail'], 'ShipStream\\Ups\\Api\\Model\\ChemicalDataProperShippingNameDetail', 'json', $context));
                unset($data['ProperShippingNameDetail']);
            }
            if (\array_key_exists('PackageQuantityLimitDetail', $data)) {
                $values = [];
                foreach ($data['PackageQuantityLimitDetail'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'ShipStream\\Ups\\Api\\Model\\ChemicalDataPackageQuantityLimitDetail', 'json', $context);
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
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('chemicalDetail') && null !== $object->getChemicalDetail()) {
                $data['ChemicalDetail'] = $this->normalizer->normalize($object->getChemicalDetail(), 'json', $context);
            }
            if ($object->isInitialized('properShippingNameDetail') && null !== $object->getProperShippingNameDetail()) {
                $data['ProperShippingNameDetail'] = $this->normalizer->normalize($object->getProperShippingNameDetail(), 'json', $context);
            }
            if ($object->isInitialized('packageQuantityLimitDetail') && null !== $object->getPackageQuantityLimitDetail()) {
                $values = [];
                foreach ($object->getPackageQuantityLimitDetail() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['PackageQuantityLimitDetail'] = $values;
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
            return ['ShipStream\\Ups\\Api\\Model\\ChemicalReferenceDataResponseChemicalData' => false];
        }
    }
} else {
    class ChemicalReferenceDataResponseChemicalDataNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\ChemicalReferenceDataResponseChemicalData';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\ChemicalReferenceDataResponseChemicalData';
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
            $object = new \ShipStream\Ups\Api\Model\ChemicalReferenceDataResponseChemicalData();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('ChemicalDetail', $data)) {
                $object->setChemicalDetail($this->denormalizer->denormalize($data['ChemicalDetail'], 'ShipStream\\Ups\\Api\\Model\\ChemicalDataChemicalDetail', 'json', $context));
                unset($data['ChemicalDetail']);
            }
            if (\array_key_exists('ProperShippingNameDetail', $data)) {
                $object->setProperShippingNameDetail($this->denormalizer->denormalize($data['ProperShippingNameDetail'], 'ShipStream\\Ups\\Api\\Model\\ChemicalDataProperShippingNameDetail', 'json', $context));
                unset($data['ProperShippingNameDetail']);
            }
            if (\array_key_exists('PackageQuantityLimitDetail', $data)) {
                $values = [];
                foreach ($data['PackageQuantityLimitDetail'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'ShipStream\\Ups\\Api\\Model\\ChemicalDataPackageQuantityLimitDetail', 'json', $context);
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
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('chemicalDetail') && null !== $object->getChemicalDetail()) {
                $data['ChemicalDetail'] = $this->normalizer->normalize($object->getChemicalDetail(), 'json', $context);
            }
            if ($object->isInitialized('properShippingNameDetail') && null !== $object->getProperShippingNameDetail()) {
                $data['ProperShippingNameDetail'] = $this->normalizer->normalize($object->getProperShippingNameDetail(), 'json', $context);
            }
            if ($object->isInitialized('packageQuantityLimitDetail') && null !== $object->getPackageQuantityLimitDetail()) {
                $values = [];
                foreach ($object->getPackageQuantityLimitDetail() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['PackageQuantityLimitDetail'] = $values;
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
            return ['ShipStream\\Ups\\Api\\Model\\ChemicalReferenceDataResponseChemicalData' => false];
        }
    }
}