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
    class IncludeCriteriaSearchFilterNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\IncludeCriteriaSearchFilter';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\IncludeCriteriaSearchFilter';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \ShipStream\Ups\Api\Model\IncludeCriteriaSearchFilter();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('DCRIndicator', $data)) {
                $object->setDCRIndicator($data['DCRIndicator']);
                unset($data['DCRIndicator']);
            }
            if (\array_key_exists('ShippingAvailabilityIndicator', $data)) {
                $object->setShippingAvailabilityIndicator($data['ShippingAvailabilityIndicator']);
                unset($data['ShippingAvailabilityIndicator']);
            }
            if (\array_key_exists('ShipperPreparationDelay', $data)) {
                $object->setShipperPreparationDelay($data['ShipperPreparationDelay']);
                unset($data['ShipperPreparationDelay']);
            }
            if (\array_key_exists('ClickAndCollectSortWithDistance', $data)) {
                $object->setClickAndCollectSortWithDistance($data['ClickAndCollectSortWithDistance']);
                unset($data['ClickAndCollectSortWithDistance']);
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
            if ($object->isInitialized('dCRIndicator') && null !== $object->getDCRIndicator()) {
                $data['DCRIndicator'] = $object->getDCRIndicator();
            }
            if ($object->isInitialized('shippingAvailabilityIndicator') && null !== $object->getShippingAvailabilityIndicator()) {
                $data['ShippingAvailabilityIndicator'] = $object->getShippingAvailabilityIndicator();
            }
            if ($object->isInitialized('shipperPreparationDelay') && null !== $object->getShipperPreparationDelay()) {
                $data['ShipperPreparationDelay'] = $object->getShipperPreparationDelay();
            }
            if ($object->isInitialized('clickAndCollectSortWithDistance') && null !== $object->getClickAndCollectSortWithDistance()) {
                $data['ClickAndCollectSortWithDistance'] = $object->getClickAndCollectSortWithDistance();
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
            return ['ShipStream\\Ups\\Api\\Model\\IncludeCriteriaSearchFilter' => false];
        }
    }
} else {
    class IncludeCriteriaSearchFilterNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\IncludeCriteriaSearchFilter';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\IncludeCriteriaSearchFilter';
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
            $object = new \ShipStream\Ups\Api\Model\IncludeCriteriaSearchFilter();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('DCRIndicator', $data)) {
                $object->setDCRIndicator($data['DCRIndicator']);
                unset($data['DCRIndicator']);
            }
            if (\array_key_exists('ShippingAvailabilityIndicator', $data)) {
                $object->setShippingAvailabilityIndicator($data['ShippingAvailabilityIndicator']);
                unset($data['ShippingAvailabilityIndicator']);
            }
            if (\array_key_exists('ShipperPreparationDelay', $data)) {
                $object->setShipperPreparationDelay($data['ShipperPreparationDelay']);
                unset($data['ShipperPreparationDelay']);
            }
            if (\array_key_exists('ClickAndCollectSortWithDistance', $data)) {
                $object->setClickAndCollectSortWithDistance($data['ClickAndCollectSortWithDistance']);
                unset($data['ClickAndCollectSortWithDistance']);
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
            if ($object->isInitialized('dCRIndicator') && null !== $object->getDCRIndicator()) {
                $data['DCRIndicator'] = $object->getDCRIndicator();
            }
            if ($object->isInitialized('shippingAvailabilityIndicator') && null !== $object->getShippingAvailabilityIndicator()) {
                $data['ShippingAvailabilityIndicator'] = $object->getShippingAvailabilityIndicator();
            }
            if ($object->isInitialized('shipperPreparationDelay') && null !== $object->getShipperPreparationDelay()) {
                $data['ShipperPreparationDelay'] = $object->getShipperPreparationDelay();
            }
            if ($object->isInitialized('clickAndCollectSortWithDistance') && null !== $object->getClickAndCollectSortWithDistance()) {
                $data['ClickAndCollectSortWithDistance'] = $object->getClickAndCollectSortWithDistance();
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
            return ['ShipStream\\Ups\\Api\\Model\\IncludeCriteriaSearchFilter' => false];
        }
    }
}