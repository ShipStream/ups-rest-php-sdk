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
    class ChemicalDataPackageQuantityLimitDetailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\ChemicalDataPackageQuantityLimitDetail';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\ChemicalDataPackageQuantityLimitDetail';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
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
            if (\array_key_exists('PackageQuantityLimitTypeCode', $data) && $data['PackageQuantityLimitTypeCode'] !== null) {
                $object->setPackageQuantityLimitTypeCode($data['PackageQuantityLimitTypeCode']);
                unset($data['PackageQuantityLimitTypeCode']);
            }
            elseif (\array_key_exists('PackageQuantityLimitTypeCode', $data) && $data['PackageQuantityLimitTypeCode'] === null) {
                $object->setPackageQuantityLimitTypeCode(null);
            }
            if (\array_key_exists('Quantity', $data) && $data['Quantity'] !== null) {
                $object->setQuantity($data['Quantity']);
                unset($data['Quantity']);
            }
            elseif (\array_key_exists('Quantity', $data) && $data['Quantity'] === null) {
                $object->setQuantity(null);
            }
            if (\array_key_exists('UOM', $data) && $data['UOM'] !== null) {
                $object->setUOM($data['UOM']);
                unset($data['UOM']);
            }
            elseif (\array_key_exists('UOM', $data) && $data['UOM'] === null) {
                $object->setUOM(null);
            }
            if (\array_key_exists('PackagingInstructionCode', $data) && $data['PackagingInstructionCode'] !== null) {
                $object->setPackagingInstructionCode($data['PackagingInstructionCode']);
                unset($data['PackagingInstructionCode']);
            }
            elseif (\array_key_exists('PackagingInstructionCode', $data) && $data['PackagingInstructionCode'] === null) {
                $object->setPackagingInstructionCode(null);
            }
            foreach ($data as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('packageQuantityLimitTypeCode') && null !== $object->getPackageQuantityLimitTypeCode()) {
                $data['PackageQuantityLimitTypeCode'] = $object->getPackageQuantityLimitTypeCode();
            }
            if ($object->isInitialized('quantity') && null !== $object->getQuantity()) {
                $data['Quantity'] = $object->getQuantity();
            }
            if ($object->isInitialized('uOM') && null !== $object->getUOM()) {
                $data['UOM'] = $object->getUOM();
            }
            if ($object->isInitialized('packagingInstructionCode') && null !== $object->getPackagingInstructionCode()) {
                $data['PackagingInstructionCode'] = $object->getPackagingInstructionCode();
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['ShipStream\\Ups\\Api\\Model\\ChemicalDataPackageQuantityLimitDetail' => false];
        }
    }
} else {
    class ChemicalDataPackageQuantityLimitDetailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\ChemicalDataPackageQuantityLimitDetail';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\ChemicalDataPackageQuantityLimitDetail';
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
            $object = new \ShipStream\Ups\Api\Model\ChemicalDataPackageQuantityLimitDetail();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('PackageQuantityLimitTypeCode', $data) && $data['PackageQuantityLimitTypeCode'] !== null) {
                $object->setPackageQuantityLimitTypeCode($data['PackageQuantityLimitTypeCode']);
                unset($data['PackageQuantityLimitTypeCode']);
            }
            elseif (\array_key_exists('PackageQuantityLimitTypeCode', $data) && $data['PackageQuantityLimitTypeCode'] === null) {
                $object->setPackageQuantityLimitTypeCode(null);
            }
            if (\array_key_exists('Quantity', $data) && $data['Quantity'] !== null) {
                $object->setQuantity($data['Quantity']);
                unset($data['Quantity']);
            }
            elseif (\array_key_exists('Quantity', $data) && $data['Quantity'] === null) {
                $object->setQuantity(null);
            }
            if (\array_key_exists('UOM', $data) && $data['UOM'] !== null) {
                $object->setUOM($data['UOM']);
                unset($data['UOM']);
            }
            elseif (\array_key_exists('UOM', $data) && $data['UOM'] === null) {
                $object->setUOM(null);
            }
            if (\array_key_exists('PackagingInstructionCode', $data) && $data['PackagingInstructionCode'] !== null) {
                $object->setPackagingInstructionCode($data['PackagingInstructionCode']);
                unset($data['PackagingInstructionCode']);
            }
            elseif (\array_key_exists('PackagingInstructionCode', $data) && $data['PackagingInstructionCode'] === null) {
                $object->setPackagingInstructionCode(null);
            }
            foreach ($data as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value;
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
            if ($object->isInitialized('packageQuantityLimitTypeCode') && null !== $object->getPackageQuantityLimitTypeCode()) {
                $data['PackageQuantityLimitTypeCode'] = $object->getPackageQuantityLimitTypeCode();
            }
            if ($object->isInitialized('quantity') && null !== $object->getQuantity()) {
                $data['Quantity'] = $object->getQuantity();
            }
            if ($object->isInitialized('uOM') && null !== $object->getUOM()) {
                $data['UOM'] = $object->getUOM();
            }
            if ($object->isInitialized('packagingInstructionCode') && null !== $object->getPackagingInstructionCode()) {
                $data['PackagingInstructionCode'] = $object->getPackagingInstructionCode();
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['ShipStream\\Ups\\Api\\Model\\ChemicalDataPackageQuantityLimitDetail' => false];
        }
    }
}