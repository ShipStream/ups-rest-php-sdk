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
    class DocumentsImageNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\DocumentsImage';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\DocumentsImage';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \ShipStream\Ups\Api\Model\DocumentsImage();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Type', $data) && $data['Type'] !== null) {
                $object->setType($this->denormalizer->denormalize($data['Type'], 'ShipStream\\Ups\\Api\\Model\\ImageType', 'json', $context));
                unset($data['Type']);
            }
            elseif (\array_key_exists('Type', $data) && $data['Type'] === null) {
                $object->setType(null);
            }
            if (\array_key_exists('GraphicImage', $data) && $data['GraphicImage'] !== null) {
                $object->setGraphicImage($data['GraphicImage']);
                unset($data['GraphicImage']);
            }
            elseif (\array_key_exists('GraphicImage', $data) && $data['GraphicImage'] === null) {
                $object->setGraphicImage(null);
            }
            if (\array_key_exists('Format', $data) && $data['Format'] !== null) {
                $object->setFormat($this->denormalizer->denormalize($data['Format'], 'ShipStream\\Ups\\Api\\Model\\ImageFormat', 'json', $context));
                unset($data['Format']);
            }
            elseif (\array_key_exists('Format', $data) && $data['Format'] === null) {
                $object->setFormat(null);
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
            $data['Type'] = $this->normalizer->normalize($object->getType(), 'json', $context);
            $data['GraphicImage'] = $object->getGraphicImage();
            $data['Format'] = $this->normalizer->normalize($object->getFormat(), 'json', $context);
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['ShipStream\\Ups\\Api\\Model\\DocumentsImage' => false];
        }
    }
} else {
    class DocumentsImageNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\DocumentsImage';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\DocumentsImage';
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
            $object = new \ShipStream\Ups\Api\Model\DocumentsImage();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Type', $data) && $data['Type'] !== null) {
                $object->setType($this->denormalizer->denormalize($data['Type'], 'ShipStream\\Ups\\Api\\Model\\ImageType', 'json', $context));
                unset($data['Type']);
            }
            elseif (\array_key_exists('Type', $data) && $data['Type'] === null) {
                $object->setType(null);
            }
            if (\array_key_exists('GraphicImage', $data) && $data['GraphicImage'] !== null) {
                $object->setGraphicImage($data['GraphicImage']);
                unset($data['GraphicImage']);
            }
            elseif (\array_key_exists('GraphicImage', $data) && $data['GraphicImage'] === null) {
                $object->setGraphicImage(null);
            }
            if (\array_key_exists('Format', $data) && $data['Format'] !== null) {
                $object->setFormat($this->denormalizer->denormalize($data['Format'], 'ShipStream\\Ups\\Api\\Model\\ImageFormat', 'json', $context));
                unset($data['Format']);
            }
            elseif (\array_key_exists('Format', $data) && $data['Format'] === null) {
                $object->setFormat(null);
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
            $data['Type'] = $this->normalizer->normalize($object->getType(), 'json', $context);
            $data['GraphicImage'] = $object->getGraphicImage();
            $data['Format'] = $this->normalizer->normalize($object->getFormat(), 'json', $context);
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['ShipStream\\Ups\\Api\\Model\\DocumentsImage' => false];
        }
    }
}