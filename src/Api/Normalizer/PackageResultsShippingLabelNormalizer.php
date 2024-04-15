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
    class PackageResultsShippingLabelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\PackageResultsShippingLabel';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\PackageResultsShippingLabel';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \ShipStream\Ups\Api\Model\PackageResultsShippingLabel();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('ImageFormat', $data) && $data['ImageFormat'] !== null) {
                $object->setImageFormat($this->denormalizer->denormalize($data['ImageFormat'], 'ShipStream\\Ups\\Api\\Model\\ShippingLabelImageFormat', 'json', $context));
                unset($data['ImageFormat']);
            }
            elseif (\array_key_exists('ImageFormat', $data) && $data['ImageFormat'] === null) {
                $object->setImageFormat(null);
            }
            if (\array_key_exists('GraphicImage', $data) && $data['GraphicImage'] !== null) {
                $object->setGraphicImage($data['GraphicImage']);
                unset($data['GraphicImage']);
            }
            elseif (\array_key_exists('GraphicImage', $data) && $data['GraphicImage'] === null) {
                $object->setGraphicImage(null);
            }
            if (\array_key_exists('GraphicImagePart', $data) && $data['GraphicImagePart'] !== null) {
                $values = [];
                foreach ($data['GraphicImagePart'] as $value) {
                    $values[] = $value;
                }
                $object->setGraphicImagePart($values);
                unset($data['GraphicImagePart']);
            }
            elseif (\array_key_exists('GraphicImagePart', $data) && $data['GraphicImagePart'] === null) {
                $object->setGraphicImagePart(null);
            }
            if (\array_key_exists('InternationalSignatureGraphicImage', $data) && $data['InternationalSignatureGraphicImage'] !== null) {
                $object->setInternationalSignatureGraphicImage($data['InternationalSignatureGraphicImage']);
                unset($data['InternationalSignatureGraphicImage']);
            }
            elseif (\array_key_exists('InternationalSignatureGraphicImage', $data) && $data['InternationalSignatureGraphicImage'] === null) {
                $object->setInternationalSignatureGraphicImage(null);
            }
            if (\array_key_exists('HTMLImage', $data) && $data['HTMLImage'] !== null) {
                $object->setHTMLImage($data['HTMLImage']);
                unset($data['HTMLImage']);
            }
            elseif (\array_key_exists('HTMLImage', $data) && $data['HTMLImage'] === null) {
                $object->setHTMLImage(null);
            }
            if (\array_key_exists('PDF417', $data) && $data['PDF417'] !== null) {
                $object->setPDF417($data['PDF417']);
                unset($data['PDF417']);
            }
            elseif (\array_key_exists('PDF417', $data) && $data['PDF417'] === null) {
                $object->setPDF417(null);
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
            $data['ImageFormat'] = $this->normalizer->normalize($object->getImageFormat(), 'json', $context);
            $data['GraphicImage'] = $object->getGraphicImage();
            if ($object->isInitialized('graphicImagePart') && null !== $object->getGraphicImagePart()) {
                $values = [];
                foreach ($object->getGraphicImagePart() as $value) {
                    $values[] = $value;
                }
                $data['GraphicImagePart'] = $values;
            }
            if ($object->isInitialized('internationalSignatureGraphicImage') && null !== $object->getInternationalSignatureGraphicImage()) {
                $data['InternationalSignatureGraphicImage'] = $object->getInternationalSignatureGraphicImage();
            }
            if ($object->isInitialized('hTMLImage') && null !== $object->getHTMLImage()) {
                $data['HTMLImage'] = $object->getHTMLImage();
            }
            if ($object->isInitialized('pDF417') && null !== $object->getPDF417()) {
                $data['PDF417'] = $object->getPDF417();
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
            return ['ShipStream\\Ups\\Api\\Model\\PackageResultsShippingLabel' => false];
        }
    }
} else {
    class PackageResultsShippingLabelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\PackageResultsShippingLabel';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\PackageResultsShippingLabel';
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
            $object = new \ShipStream\Ups\Api\Model\PackageResultsShippingLabel();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('ImageFormat', $data) && $data['ImageFormat'] !== null) {
                $object->setImageFormat($this->denormalizer->denormalize($data['ImageFormat'], 'ShipStream\\Ups\\Api\\Model\\ShippingLabelImageFormat', 'json', $context));
                unset($data['ImageFormat']);
            }
            elseif (\array_key_exists('ImageFormat', $data) && $data['ImageFormat'] === null) {
                $object->setImageFormat(null);
            }
            if (\array_key_exists('GraphicImage', $data) && $data['GraphicImage'] !== null) {
                $object->setGraphicImage($data['GraphicImage']);
                unset($data['GraphicImage']);
            }
            elseif (\array_key_exists('GraphicImage', $data) && $data['GraphicImage'] === null) {
                $object->setGraphicImage(null);
            }
            if (\array_key_exists('GraphicImagePart', $data) && $data['GraphicImagePart'] !== null) {
                $values = [];
                foreach ($data['GraphicImagePart'] as $value) {
                    $values[] = $value;
                }
                $object->setGraphicImagePart($values);
                unset($data['GraphicImagePart']);
            }
            elseif (\array_key_exists('GraphicImagePart', $data) && $data['GraphicImagePart'] === null) {
                $object->setGraphicImagePart(null);
            }
            if (\array_key_exists('InternationalSignatureGraphicImage', $data) && $data['InternationalSignatureGraphicImage'] !== null) {
                $object->setInternationalSignatureGraphicImage($data['InternationalSignatureGraphicImage']);
                unset($data['InternationalSignatureGraphicImage']);
            }
            elseif (\array_key_exists('InternationalSignatureGraphicImage', $data) && $data['InternationalSignatureGraphicImage'] === null) {
                $object->setInternationalSignatureGraphicImage(null);
            }
            if (\array_key_exists('HTMLImage', $data) && $data['HTMLImage'] !== null) {
                $object->setHTMLImage($data['HTMLImage']);
                unset($data['HTMLImage']);
            }
            elseif (\array_key_exists('HTMLImage', $data) && $data['HTMLImage'] === null) {
                $object->setHTMLImage(null);
            }
            if (\array_key_exists('PDF417', $data) && $data['PDF417'] !== null) {
                $object->setPDF417($data['PDF417']);
                unset($data['PDF417']);
            }
            elseif (\array_key_exists('PDF417', $data) && $data['PDF417'] === null) {
                $object->setPDF417(null);
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
            $data['ImageFormat'] = $this->normalizer->normalize($object->getImageFormat(), 'json', $context);
            $data['GraphicImage'] = $object->getGraphicImage();
            if ($object->isInitialized('graphicImagePart') && null !== $object->getGraphicImagePart()) {
                $values = [];
                foreach ($object->getGraphicImagePart() as $value) {
                    $values[] = $value;
                }
                $data['GraphicImagePart'] = $values;
            }
            if ($object->isInitialized('internationalSignatureGraphicImage') && null !== $object->getInternationalSignatureGraphicImage()) {
                $data['InternationalSignatureGraphicImage'] = $object->getInternationalSignatureGraphicImage();
            }
            if ($object->isInitialized('hTMLImage') && null !== $object->getHTMLImage()) {
                $data['HTMLImage'] = $object->getHTMLImage();
            }
            if ($object->isInitialized('pDF417') && null !== $object->getPDF417()) {
                $data['PDF417'] = $object->getPDF417();
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
            return ['ShipStream\\Ups\\Api\\Model\\PackageResultsShippingLabel' => false];
        }
    }
}