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
    class ShipmentResultsFormNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\ShipmentResultsForm';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\ShipmentResultsForm';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \ShipStream\Ups\Api\Model\ShipmentResultsForm();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Code', $data) && $data['Code'] !== null) {
                $object->setCode($data['Code']);
                unset($data['Code']);
            }
            elseif (\array_key_exists('Code', $data) && $data['Code'] === null) {
                $object->setCode(null);
            }
            if (\array_key_exists('Description', $data) && $data['Description'] !== null) {
                $object->setDescription($data['Description']);
                unset($data['Description']);
            }
            elseif (\array_key_exists('Description', $data) && $data['Description'] === null) {
                $object->setDescription(null);
            }
            if (\array_key_exists('Image', $data) && $data['Image'] !== null) {
                $object->setImage($this->denormalizer->denormalize($data['Image'], 'ShipStream\\Ups\\Api\\Model\\FormImage', 'json', $context));
                unset($data['Image']);
            }
            elseif (\array_key_exists('Image', $data) && $data['Image'] === null) {
                $object->setImage(null);
            }
            if (\array_key_exists('FormGroupId', $data) && $data['FormGroupId'] !== null) {
                $object->setFormGroupId($data['FormGroupId']);
                unset($data['FormGroupId']);
            }
            elseif (\array_key_exists('FormGroupId', $data) && $data['FormGroupId'] === null) {
                $object->setFormGroupId(null);
            }
            if (\array_key_exists('FormGroupIdName', $data) && $data['FormGroupIdName'] !== null) {
                $object->setFormGroupIdName($data['FormGroupIdName']);
                unset($data['FormGroupIdName']);
            }
            elseif (\array_key_exists('FormGroupIdName', $data) && $data['FormGroupIdName'] === null) {
                $object->setFormGroupIdName(null);
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
            $data['Code'] = $object->getCode();
            $data['Description'] = $object->getDescription();
            if ($object->isInitialized('image') && null !== $object->getImage()) {
                $data['Image'] = $this->normalizer->normalize($object->getImage(), 'json', $context);
            }
            if ($object->isInitialized('formGroupId') && null !== $object->getFormGroupId()) {
                $data['FormGroupId'] = $object->getFormGroupId();
            }
            if ($object->isInitialized('formGroupIdName') && null !== $object->getFormGroupIdName()) {
                $data['FormGroupIdName'] = $object->getFormGroupIdName();
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
            return ['ShipStream\\Ups\\Api\\Model\\ShipmentResultsForm' => false];
        }
    }
} else {
    class ShipmentResultsFormNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\ShipmentResultsForm';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\ShipmentResultsForm';
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
            $object = new \ShipStream\Ups\Api\Model\ShipmentResultsForm();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Code', $data) && $data['Code'] !== null) {
                $object->setCode($data['Code']);
                unset($data['Code']);
            }
            elseif (\array_key_exists('Code', $data) && $data['Code'] === null) {
                $object->setCode(null);
            }
            if (\array_key_exists('Description', $data) && $data['Description'] !== null) {
                $object->setDescription($data['Description']);
                unset($data['Description']);
            }
            elseif (\array_key_exists('Description', $data) && $data['Description'] === null) {
                $object->setDescription(null);
            }
            if (\array_key_exists('Image', $data) && $data['Image'] !== null) {
                $object->setImage($this->denormalizer->denormalize($data['Image'], 'ShipStream\\Ups\\Api\\Model\\FormImage', 'json', $context));
                unset($data['Image']);
            }
            elseif (\array_key_exists('Image', $data) && $data['Image'] === null) {
                $object->setImage(null);
            }
            if (\array_key_exists('FormGroupId', $data) && $data['FormGroupId'] !== null) {
                $object->setFormGroupId($data['FormGroupId']);
                unset($data['FormGroupId']);
            }
            elseif (\array_key_exists('FormGroupId', $data) && $data['FormGroupId'] === null) {
                $object->setFormGroupId(null);
            }
            if (\array_key_exists('FormGroupIdName', $data) && $data['FormGroupIdName'] !== null) {
                $object->setFormGroupIdName($data['FormGroupIdName']);
                unset($data['FormGroupIdName']);
            }
            elseif (\array_key_exists('FormGroupIdName', $data) && $data['FormGroupIdName'] === null) {
                $object->setFormGroupIdName(null);
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
            $data['Code'] = $object->getCode();
            $data['Description'] = $object->getDescription();
            if ($object->isInitialized('image') && null !== $object->getImage()) {
                $data['Image'] = $this->normalizer->normalize($object->getImage(), 'json', $context);
            }
            if ($object->isInitialized('formGroupId') && null !== $object->getFormGroupId()) {
                $data['FormGroupId'] = $object->getFormGroupId();
            }
            if ($object->isInitialized('formGroupIdName') && null !== $object->getFormGroupIdName()) {
                $data['FormGroupIdName'] = $object->getFormGroupIdName();
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
            return ['ShipStream\\Ups\\Api\\Model\\ShipmentResultsForm' => false];
        }
    }
}