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
    class ManifestPackagePackageServiceOptionsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\ManifestPackagePackageServiceOptions';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\ManifestPackagePackageServiceOptions';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \ShipStream\Ups\Api\Model\ManifestPackagePackageServiceOptions();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('COD', $data)) {
                $object->setCOD($this->denormalizer->denormalize($data['COD'], 'ShipStream\\Ups\\Api\\Model\\ManifestPackageServiceOptionsCOD', 'json', $context));
                unset($data['COD']);
            }
            if (\array_key_exists('InsuredValue', $data)) {
                $object->setInsuredValue($this->denormalizer->denormalize($data['InsuredValue'], 'ShipStream\\Ups\\Api\\Model\\PackageServiceOptionsInsuredValue', 'json', $context));
                unset($data['InsuredValue']);
            }
            if (\array_key_exists('EarliestDeliveryTime', $data)) {
                $object->setEarliestDeliveryTime($data['EarliestDeliveryTime']);
                unset($data['EarliestDeliveryTime']);
            }
            if (\array_key_exists('HazardousMaterialsCode', $data)) {
                $object->setHazardousMaterialsCode($data['HazardousMaterialsCode']);
                unset($data['HazardousMaterialsCode']);
            }
            if (\array_key_exists('HoldForPickup', $data)) {
                $object->setHoldForPickup($data['HoldForPickup']);
                unset($data['HoldForPickup']);
            }
            if (\array_key_exists('AddShippingChargesToCODIndicator', $data)) {
                $object->setAddShippingChargesToCODIndicator($data['AddShippingChargesToCODIndicator']);
                unset($data['AddShippingChargesToCODIndicator']);
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
            if ($object->isInitialized('cOD') && null !== $object->getCOD()) {
                $data['COD'] = $this->normalizer->normalize($object->getCOD(), 'json', $context);
            }
            if ($object->isInitialized('insuredValue') && null !== $object->getInsuredValue()) {
                $data['InsuredValue'] = $this->normalizer->normalize($object->getInsuredValue(), 'json', $context);
            }
            if ($object->isInitialized('earliestDeliveryTime') && null !== $object->getEarliestDeliveryTime()) {
                $data['EarliestDeliveryTime'] = $object->getEarliestDeliveryTime();
            }
            if ($object->isInitialized('hazardousMaterialsCode') && null !== $object->getHazardousMaterialsCode()) {
                $data['HazardousMaterialsCode'] = $object->getHazardousMaterialsCode();
            }
            $data['HoldForPickup'] = $object->getHoldForPickup();
            if ($object->isInitialized('addShippingChargesToCODIndicator') && null !== $object->getAddShippingChargesToCODIndicator()) {
                $data['AddShippingChargesToCODIndicator'] = $object->getAddShippingChargesToCODIndicator();
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
            return ['ShipStream\\Ups\\Api\\Model\\ManifestPackagePackageServiceOptions' => false];
        }
    }
} else {
    class ManifestPackagePackageServiceOptionsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\ManifestPackagePackageServiceOptions';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\ManifestPackagePackageServiceOptions';
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
            $object = new \ShipStream\Ups\Api\Model\ManifestPackagePackageServiceOptions();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('COD', $data)) {
                $object->setCOD($this->denormalizer->denormalize($data['COD'], 'ShipStream\\Ups\\Api\\Model\\ManifestPackageServiceOptionsCOD', 'json', $context));
                unset($data['COD']);
            }
            if (\array_key_exists('InsuredValue', $data)) {
                $object->setInsuredValue($this->denormalizer->denormalize($data['InsuredValue'], 'ShipStream\\Ups\\Api\\Model\\PackageServiceOptionsInsuredValue', 'json', $context));
                unset($data['InsuredValue']);
            }
            if (\array_key_exists('EarliestDeliveryTime', $data)) {
                $object->setEarliestDeliveryTime($data['EarliestDeliveryTime']);
                unset($data['EarliestDeliveryTime']);
            }
            if (\array_key_exists('HazardousMaterialsCode', $data)) {
                $object->setHazardousMaterialsCode($data['HazardousMaterialsCode']);
                unset($data['HazardousMaterialsCode']);
            }
            if (\array_key_exists('HoldForPickup', $data)) {
                $object->setHoldForPickup($data['HoldForPickup']);
                unset($data['HoldForPickup']);
            }
            if (\array_key_exists('AddShippingChargesToCODIndicator', $data)) {
                $object->setAddShippingChargesToCODIndicator($data['AddShippingChargesToCODIndicator']);
                unset($data['AddShippingChargesToCODIndicator']);
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
            if ($object->isInitialized('cOD') && null !== $object->getCOD()) {
                $data['COD'] = $this->normalizer->normalize($object->getCOD(), 'json', $context);
            }
            if ($object->isInitialized('insuredValue') && null !== $object->getInsuredValue()) {
                $data['InsuredValue'] = $this->normalizer->normalize($object->getInsuredValue(), 'json', $context);
            }
            if ($object->isInitialized('earliestDeliveryTime') && null !== $object->getEarliestDeliveryTime()) {
                $data['EarliestDeliveryTime'] = $object->getEarliestDeliveryTime();
            }
            if ($object->isInitialized('hazardousMaterialsCode') && null !== $object->getHazardousMaterialsCode()) {
                $data['HazardousMaterialsCode'] = $object->getHazardousMaterialsCode();
            }
            $data['HoldForPickup'] = $object->getHoldForPickup();
            if ($object->isInitialized('addShippingChargesToCODIndicator') && null !== $object->getAddShippingChargesToCODIndicator()) {
                $data['AddShippingChargesToCODIndicator'] = $object->getAddShippingChargesToCODIndicator();
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
            return ['ShipStream\\Ups\\Api\\Model\\ManifestPackagePackageServiceOptions' => false];
        }
    }
}