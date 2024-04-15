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
    class PackageServiceOptionsDeliveryConfirmationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\PackageServiceOptionsDeliveryConfirmation';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\PackageServiceOptionsDeliveryConfirmation';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \ShipStream\Ups\Api\Model\PackageServiceOptionsDeliveryConfirmation();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('DCISType', $data) && $data['DCISType'] !== null) {
                $object->setDCISType($data['DCISType']);
                unset($data['DCISType']);
            }
            elseif (\array_key_exists('DCISType', $data) && $data['DCISType'] === null) {
                $object->setDCISType(null);
            }
            if (\array_key_exists('DCISNumber', $data) && $data['DCISNumber'] !== null) {
                $object->setDCISNumber($data['DCISNumber']);
                unset($data['DCISNumber']);
            }
            elseif (\array_key_exists('DCISNumber', $data) && $data['DCISNumber'] === null) {
                $object->setDCISNumber(null);
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
            $data['DCISType'] = $object->getDCISType();
            if ($object->isInitialized('dCISNumber') && null !== $object->getDCISNumber()) {
                $data['DCISNumber'] = $object->getDCISNumber();
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
            return ['ShipStream\\Ups\\Api\\Model\\PackageServiceOptionsDeliveryConfirmation' => false];
        }
    }
} else {
    class PackageServiceOptionsDeliveryConfirmationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\PackageServiceOptionsDeliveryConfirmation';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\PackageServiceOptionsDeliveryConfirmation';
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
            $object = new \ShipStream\Ups\Api\Model\PackageServiceOptionsDeliveryConfirmation();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('DCISType', $data) && $data['DCISType'] !== null) {
                $object->setDCISType($data['DCISType']);
                unset($data['DCISType']);
            }
            elseif (\array_key_exists('DCISType', $data) && $data['DCISType'] === null) {
                $object->setDCISType(null);
            }
            if (\array_key_exists('DCISNumber', $data) && $data['DCISNumber'] !== null) {
                $object->setDCISNumber($data['DCISNumber']);
                unset($data['DCISNumber']);
            }
            elseif (\array_key_exists('DCISNumber', $data) && $data['DCISNumber'] === null) {
                $object->setDCISNumber(null);
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
            $data['DCISType'] = $object->getDCISType();
            if ($object->isInitialized('dCISNumber') && null !== $object->getDCISNumber()) {
                $data['DCISNumber'] = $object->getDCISNumber();
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
            return ['ShipStream\\Ups\\Api\\Model\\PackageServiceOptionsDeliveryConfirmation' => false];
        }
    }
}