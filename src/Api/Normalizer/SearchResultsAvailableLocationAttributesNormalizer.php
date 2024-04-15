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
    class SearchResultsAvailableLocationAttributesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\SearchResultsAvailableLocationAttributes';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\SearchResultsAvailableLocationAttributes';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \ShipStream\Ups\Api\Model\SearchResultsAvailableLocationAttributes();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('OptionType', $data) && $data['OptionType'] !== null) {
                $object->setOptionType($this->denormalizer->denormalize($data['OptionType'], 'ShipStream\\Ups\\Api\\Model\\AvailableLocationAttributesOptionType', 'json', $context));
                unset($data['OptionType']);
            }
            elseif (\array_key_exists('OptionType', $data) && $data['OptionType'] === null) {
                $object->setOptionType(null);
            }
            if (\array_key_exists('OptionCode', $data) && $data['OptionCode'] !== null) {
                $object->setOptionCode($this->denormalizer->denormalize($data['OptionCode'], 'ShipStream\\Ups\\Api\\Model\\AvailableLocationAttributesOptionCode', 'json', $context));
                unset($data['OptionCode']);
            }
            elseif (\array_key_exists('OptionCode', $data) && $data['OptionCode'] === null) {
                $object->setOptionCode(null);
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
            $data['OptionType'] = $this->normalizer->normalize($object->getOptionType(), 'json', $context);
            $data['OptionCode'] = $this->normalizer->normalize($object->getOptionCode(), 'json', $context);
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['ShipStream\\Ups\\Api\\Model\\SearchResultsAvailableLocationAttributes' => false];
        }
    }
} else {
    class SearchResultsAvailableLocationAttributesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\SearchResultsAvailableLocationAttributes';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\SearchResultsAvailableLocationAttributes';
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
            $object = new \ShipStream\Ups\Api\Model\SearchResultsAvailableLocationAttributes();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('OptionType', $data) && $data['OptionType'] !== null) {
                $object->setOptionType($this->denormalizer->denormalize($data['OptionType'], 'ShipStream\\Ups\\Api\\Model\\AvailableLocationAttributesOptionType', 'json', $context));
                unset($data['OptionType']);
            }
            elseif (\array_key_exists('OptionType', $data) && $data['OptionType'] === null) {
                $object->setOptionType(null);
            }
            if (\array_key_exists('OptionCode', $data) && $data['OptionCode'] !== null) {
                $object->setOptionCode($this->denormalizer->denormalize($data['OptionCode'], 'ShipStream\\Ups\\Api\\Model\\AvailableLocationAttributesOptionCode', 'json', $context));
                unset($data['OptionCode']);
            }
            elseif (\array_key_exists('OptionCode', $data) && $data['OptionCode'] === null) {
                $object->setOptionCode(null);
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
            $data['OptionType'] = $this->normalizer->normalize($object->getOptionType(), 'json', $context);
            $data['OptionCode'] = $this->normalizer->normalize($object->getOptionCode(), 'json', $context);
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['ShipStream\\Ups\\Api\\Model\\SearchResultsAvailableLocationAttributes' => false];
        }
    }
}