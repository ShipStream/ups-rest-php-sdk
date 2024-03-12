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
    class XAVRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\XAVRequest';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\XAVRequest';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \ShipStream\Ups\Api\Model\XAVRequest();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Request', $data)) {
                $object->setRequest($this->denormalizer->denormalize($data['Request'], 'ShipStream\\Ups\\Api\\Model\\XAVRequestRequest', 'json', $context));
                unset($data['Request']);
            }
            if (\array_key_exists('RegionalRequestIndicator', $data)) {
                $object->setRegionalRequestIndicator($data['RegionalRequestIndicator']);
                unset($data['RegionalRequestIndicator']);
            }
            if (\array_key_exists('MaximumCandidateListSize', $data)) {
                $object->setMaximumCandidateListSize($data['MaximumCandidateListSize']);
                unset($data['MaximumCandidateListSize']);
            }
            if (\array_key_exists('AddressKeyFormat', $data)) {
                $values = [];
                foreach ($data['AddressKeyFormat'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'ShipStream\\Ups\\Api\\Model\\XAVRequestAddressKeyFormat', 'json', $context);
                }
                $object->setAddressKeyFormat($values);
                unset($data['AddressKeyFormat']);
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
            $data['Request'] = $this->normalizer->normalize($object->getRequest(), 'json', $context);
            if ($object->isInitialized('regionalRequestIndicator') && null !== $object->getRegionalRequestIndicator()) {
                $data['RegionalRequestIndicator'] = $object->getRegionalRequestIndicator();
            }
            if ($object->isInitialized('maximumCandidateListSize') && null !== $object->getMaximumCandidateListSize()) {
                $data['MaximumCandidateListSize'] = $object->getMaximumCandidateListSize();
            }
            $values = [];
            foreach ($object->getAddressKeyFormat() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['AddressKeyFormat'] = $values;
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['ShipStream\\Ups\\Api\\Model\\XAVRequest' => false];
        }
    }
} else {
    class XAVRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\XAVRequest';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\XAVRequest';
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
            $object = new \ShipStream\Ups\Api\Model\XAVRequest();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Request', $data)) {
                $object->setRequest($this->denormalizer->denormalize($data['Request'], 'ShipStream\\Ups\\Api\\Model\\XAVRequestRequest', 'json', $context));
                unset($data['Request']);
            }
            if (\array_key_exists('RegionalRequestIndicator', $data)) {
                $object->setRegionalRequestIndicator($data['RegionalRequestIndicator']);
                unset($data['RegionalRequestIndicator']);
            }
            if (\array_key_exists('MaximumCandidateListSize', $data)) {
                $object->setMaximumCandidateListSize($data['MaximumCandidateListSize']);
                unset($data['MaximumCandidateListSize']);
            }
            if (\array_key_exists('AddressKeyFormat', $data)) {
                $values = [];
                foreach ($data['AddressKeyFormat'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'ShipStream\\Ups\\Api\\Model\\XAVRequestAddressKeyFormat', 'json', $context);
                }
                $object->setAddressKeyFormat($values);
                unset($data['AddressKeyFormat']);
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
            $data['Request'] = $this->normalizer->normalize($object->getRequest(), 'json', $context);
            if ($object->isInitialized('regionalRequestIndicator') && null !== $object->getRegionalRequestIndicator()) {
                $data['RegionalRequestIndicator'] = $object->getRegionalRequestIndicator();
            }
            if ($object->isInitialized('maximumCandidateListSize') && null !== $object->getMaximumCandidateListSize()) {
                $data['MaximumCandidateListSize'] = $object->getMaximumCandidateListSize();
            }
            $values = [];
            foreach ($object->getAddressKeyFormat() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['AddressKeyFormat'] = $values;
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['ShipStream\\Ups\\Api\\Model\\XAVRequest' => false];
        }
    }
}