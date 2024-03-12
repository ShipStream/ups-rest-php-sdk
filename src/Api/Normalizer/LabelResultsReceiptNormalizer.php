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
    class LabelResultsReceiptNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\LabelResultsReceipt';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\LabelResultsReceipt';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \ShipStream\Ups\Api\Model\LabelResultsReceipt();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('HTMLImage', $data)) {
                $object->setHTMLImage($data['HTMLImage']);
                unset($data['HTMLImage']);
            }
            if (\array_key_exists('Image', $data)) {
                $object->setImage($this->denormalizer->denormalize($data['Image'], 'ShipStream\\Ups\\Api\\Model\\ReceiptImage', 'json', $context));
                unset($data['Image']);
            }
            if (\array_key_exists('URL', $data)) {
                $object->setURL($data['URL']);
                unset($data['URL']);
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
            if ($object->isInitialized('hTMLImage') && null !== $object->getHTMLImage()) {
                $data['HTMLImage'] = $object->getHTMLImage();
            }
            if ($object->isInitialized('image') && null !== $object->getImage()) {
                $data['Image'] = $this->normalizer->normalize($object->getImage(), 'json', $context);
            }
            if ($object->isInitialized('uRL') && null !== $object->getURL()) {
                $data['URL'] = $object->getURL();
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
            return ['ShipStream\\Ups\\Api\\Model\\LabelResultsReceipt' => false];
        }
    }
} else {
    class LabelResultsReceiptNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\LabelResultsReceipt';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\LabelResultsReceipt';
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
            $object = new \ShipStream\Ups\Api\Model\LabelResultsReceipt();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('HTMLImage', $data)) {
                $object->setHTMLImage($data['HTMLImage']);
                unset($data['HTMLImage']);
            }
            if (\array_key_exists('Image', $data)) {
                $object->setImage($this->denormalizer->denormalize($data['Image'], 'ShipStream\\Ups\\Api\\Model\\ReceiptImage', 'json', $context));
                unset($data['Image']);
            }
            if (\array_key_exists('URL', $data)) {
                $object->setURL($data['URL']);
                unset($data['URL']);
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
            if ($object->isInitialized('hTMLImage') && null !== $object->getHTMLImage()) {
                $data['HTMLImage'] = $object->getHTMLImage();
            }
            if ($object->isInitialized('image') && null !== $object->getImage()) {
                $data['Image'] = $this->normalizer->normalize($object->getImage(), 'json', $context);
            }
            if ($object->isInitialized('uRL') && null !== $object->getURL()) {
                $data['URL'] = $object->getURL();
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
            return ['ShipStream\\Ups\\Api\\Model\\LabelResultsReceipt' => false];
        }
    }
}