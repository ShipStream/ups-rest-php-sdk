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
    class ShipmentRequestLabelSpecificationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\ShipmentRequestLabelSpecification';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\ShipmentRequestLabelSpecification';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \ShipStream\Ups\Api\Model\ShipmentRequestLabelSpecification();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('LabelImageFormat', $data) && $data['LabelImageFormat'] !== null) {
                $object->setLabelImageFormat($this->denormalizer->denormalize($data['LabelImageFormat'], 'ShipStream\\Ups\\Api\\Model\\LabelSpecificationLabelImageFormat', 'json', $context));
                unset($data['LabelImageFormat']);
            }
            elseif (\array_key_exists('LabelImageFormat', $data) && $data['LabelImageFormat'] === null) {
                $object->setLabelImageFormat(null);
            }
            if (\array_key_exists('HTTPUserAgent', $data) && $data['HTTPUserAgent'] !== null) {
                $object->setHTTPUserAgent($data['HTTPUserAgent']);
                unset($data['HTTPUserAgent']);
            }
            elseif (\array_key_exists('HTTPUserAgent', $data) && $data['HTTPUserAgent'] === null) {
                $object->setHTTPUserAgent(null);
            }
            if (\array_key_exists('LabelStockSize', $data) && $data['LabelStockSize'] !== null) {
                $object->setLabelStockSize($this->denormalizer->denormalize($data['LabelStockSize'], 'ShipStream\\Ups\\Api\\Model\\LabelSpecificationLabelStockSize', 'json', $context));
                unset($data['LabelStockSize']);
            }
            elseif (\array_key_exists('LabelStockSize', $data) && $data['LabelStockSize'] === null) {
                $object->setLabelStockSize(null);
            }
            if (\array_key_exists('Instruction', $data) && $data['Instruction'] !== null) {
                $values = [];
                foreach ($data['Instruction'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'ShipStream\\Ups\\Api\\Model\\LabelSpecificationInstruction', 'json', $context);
                }
                $object->setInstruction($values);
                unset($data['Instruction']);
            }
            elseif (\array_key_exists('Instruction', $data) && $data['Instruction'] === null) {
                $object->setInstruction(null);
            }
            if (\array_key_exists('CharacterSet', $data) && $data['CharacterSet'] !== null) {
                $object->setCharacterSet($data['CharacterSet']);
                unset($data['CharacterSet']);
            }
            elseif (\array_key_exists('CharacterSet', $data) && $data['CharacterSet'] === null) {
                $object->setCharacterSet(null);
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
            $data['LabelImageFormat'] = $this->normalizer->normalize($object->getLabelImageFormat(), 'json', $context);
            if ($object->isInitialized('hTTPUserAgent') && null !== $object->getHTTPUserAgent()) {
                $data['HTTPUserAgent'] = $object->getHTTPUserAgent();
            }
            $data['LabelStockSize'] = $this->normalizer->normalize($object->getLabelStockSize(), 'json', $context);
            if ($object->isInitialized('instruction') && null !== $object->getInstruction()) {
                $values = [];
                foreach ($object->getInstruction() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['Instruction'] = $values;
            }
            if ($object->isInitialized('characterSet') && null !== $object->getCharacterSet()) {
                $data['CharacterSet'] = $object->getCharacterSet();
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
            return ['ShipStream\\Ups\\Api\\Model\\ShipmentRequestLabelSpecification' => false];
        }
    }
} else {
    class ShipmentRequestLabelSpecificationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\ShipmentRequestLabelSpecification';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\ShipmentRequestLabelSpecification';
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
            $object = new \ShipStream\Ups\Api\Model\ShipmentRequestLabelSpecification();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('LabelImageFormat', $data) && $data['LabelImageFormat'] !== null) {
                $object->setLabelImageFormat($this->denormalizer->denormalize($data['LabelImageFormat'], 'ShipStream\\Ups\\Api\\Model\\LabelSpecificationLabelImageFormat', 'json', $context));
                unset($data['LabelImageFormat']);
            }
            elseif (\array_key_exists('LabelImageFormat', $data) && $data['LabelImageFormat'] === null) {
                $object->setLabelImageFormat(null);
            }
            if (\array_key_exists('HTTPUserAgent', $data) && $data['HTTPUserAgent'] !== null) {
                $object->setHTTPUserAgent($data['HTTPUserAgent']);
                unset($data['HTTPUserAgent']);
            }
            elseif (\array_key_exists('HTTPUserAgent', $data) && $data['HTTPUserAgent'] === null) {
                $object->setHTTPUserAgent(null);
            }
            if (\array_key_exists('LabelStockSize', $data) && $data['LabelStockSize'] !== null) {
                $object->setLabelStockSize($this->denormalizer->denormalize($data['LabelStockSize'], 'ShipStream\\Ups\\Api\\Model\\LabelSpecificationLabelStockSize', 'json', $context));
                unset($data['LabelStockSize']);
            }
            elseif (\array_key_exists('LabelStockSize', $data) && $data['LabelStockSize'] === null) {
                $object->setLabelStockSize(null);
            }
            if (\array_key_exists('Instruction', $data) && $data['Instruction'] !== null) {
                $values = [];
                foreach ($data['Instruction'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'ShipStream\\Ups\\Api\\Model\\LabelSpecificationInstruction', 'json', $context);
                }
                $object->setInstruction($values);
                unset($data['Instruction']);
            }
            elseif (\array_key_exists('Instruction', $data) && $data['Instruction'] === null) {
                $object->setInstruction(null);
            }
            if (\array_key_exists('CharacterSet', $data) && $data['CharacterSet'] !== null) {
                $object->setCharacterSet($data['CharacterSet']);
                unset($data['CharacterSet']);
            }
            elseif (\array_key_exists('CharacterSet', $data) && $data['CharacterSet'] === null) {
                $object->setCharacterSet(null);
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
            $data['LabelImageFormat'] = $this->normalizer->normalize($object->getLabelImageFormat(), 'json', $context);
            if ($object->isInitialized('hTTPUserAgent') && null !== $object->getHTTPUserAgent()) {
                $data['HTTPUserAgent'] = $object->getHTTPUserAgent();
            }
            $data['LabelStockSize'] = $this->normalizer->normalize($object->getLabelStockSize(), 'json', $context);
            if ($object->isInitialized('instruction') && null !== $object->getInstruction()) {
                $values = [];
                foreach ($object->getInstruction() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['Instruction'] = $values;
            }
            if ($object->isInitialized('characterSet') && null !== $object->getCharacterSet()) {
                $data['CharacterSet'] = $object->getCharacterSet();
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
            return ['ShipStream\\Ups\\Api\\Model\\ShipmentRequestLabelSpecification' => false];
        }
    }
}