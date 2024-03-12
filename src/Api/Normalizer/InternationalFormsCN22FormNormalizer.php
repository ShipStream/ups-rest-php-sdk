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
    class InternationalFormsCN22FormNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\InternationalFormsCN22Form';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\InternationalFormsCN22Form';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \ShipStream\Ups\Api\Model\InternationalFormsCN22Form();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('LabelSize', $data)) {
                $object->setLabelSize($data['LabelSize']);
                unset($data['LabelSize']);
            }
            if (\array_key_exists('PrintsPerPage', $data)) {
                $object->setPrintsPerPage($data['PrintsPerPage']);
                unset($data['PrintsPerPage']);
            }
            if (\array_key_exists('LabelPrintType', $data)) {
                $object->setLabelPrintType($data['LabelPrintType']);
                unset($data['LabelPrintType']);
            }
            if (\array_key_exists('CN22Type', $data)) {
                $object->setCN22Type($data['CN22Type']);
                unset($data['CN22Type']);
            }
            if (\array_key_exists('CN22OtherDescription', $data)) {
                $object->setCN22OtherDescription($data['CN22OtherDescription']);
                unset($data['CN22OtherDescription']);
            }
            if (\array_key_exists('FoldHereText', $data)) {
                $object->setFoldHereText($data['FoldHereText']);
                unset($data['FoldHereText']);
            }
            if (\array_key_exists('CN22Content', $data)) {
                $values = [];
                foreach ($data['CN22Content'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'ShipStream\\Ups\\Api\\Model\\CN22FormCN22Content', 'json', $context);
                }
                $object->setCN22Content($values);
                unset($data['CN22Content']);
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
            $data['LabelSize'] = $object->getLabelSize();
            $data['PrintsPerPage'] = $object->getPrintsPerPage();
            $data['LabelPrintType'] = $object->getLabelPrintType();
            $data['CN22Type'] = $object->getCN22Type();
            if ($object->isInitialized('cN22OtherDescription') && null !== $object->getCN22OtherDescription()) {
                $data['CN22OtherDescription'] = $object->getCN22OtherDescription();
            }
            if ($object->isInitialized('foldHereText') && null !== $object->getFoldHereText()) {
                $data['FoldHereText'] = $object->getFoldHereText();
            }
            $values = [];
            foreach ($object->getCN22Content() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['CN22Content'] = $values;
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['ShipStream\\Ups\\Api\\Model\\InternationalFormsCN22Form' => false];
        }
    }
} else {
    class InternationalFormsCN22FormNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\InternationalFormsCN22Form';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\InternationalFormsCN22Form';
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
            $object = new \ShipStream\Ups\Api\Model\InternationalFormsCN22Form();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('LabelSize', $data)) {
                $object->setLabelSize($data['LabelSize']);
                unset($data['LabelSize']);
            }
            if (\array_key_exists('PrintsPerPage', $data)) {
                $object->setPrintsPerPage($data['PrintsPerPage']);
                unset($data['PrintsPerPage']);
            }
            if (\array_key_exists('LabelPrintType', $data)) {
                $object->setLabelPrintType($data['LabelPrintType']);
                unset($data['LabelPrintType']);
            }
            if (\array_key_exists('CN22Type', $data)) {
                $object->setCN22Type($data['CN22Type']);
                unset($data['CN22Type']);
            }
            if (\array_key_exists('CN22OtherDescription', $data)) {
                $object->setCN22OtherDescription($data['CN22OtherDescription']);
                unset($data['CN22OtherDescription']);
            }
            if (\array_key_exists('FoldHereText', $data)) {
                $object->setFoldHereText($data['FoldHereText']);
                unset($data['FoldHereText']);
            }
            if (\array_key_exists('CN22Content', $data)) {
                $values = [];
                foreach ($data['CN22Content'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'ShipStream\\Ups\\Api\\Model\\CN22FormCN22Content', 'json', $context);
                }
                $object->setCN22Content($values);
                unset($data['CN22Content']);
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
            $data['LabelSize'] = $object->getLabelSize();
            $data['PrintsPerPage'] = $object->getPrintsPerPage();
            $data['LabelPrintType'] = $object->getLabelPrintType();
            $data['CN22Type'] = $object->getCN22Type();
            if ($object->isInitialized('cN22OtherDescription') && null !== $object->getCN22OtherDescription()) {
                $data['CN22OtherDescription'] = $object->getCN22OtherDescription();
            }
            if ($object->isInitialized('foldHereText') && null !== $object->getFoldHereText()) {
                $data['FoldHereText'] = $object->getFoldHereText();
            }
            $values = [];
            foreach ($object->getCN22Content() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['CN22Content'] = $values;
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['ShipStream\\Ups\\Api\\Model\\InternationalFormsCN22Form' => false];
        }
    }
}