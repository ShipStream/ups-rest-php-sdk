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
    class FreightPickupRequestRequesterNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\FreightPickupRequestRequester';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\FreightPickupRequestRequester';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \ShipStream\Ups\Api\Model\FreightPickupRequestRequester();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('ThirdPartyIndicator', $data) && $data['ThirdPartyIndicator'] !== null) {
                $object->setThirdPartyIndicator($data['ThirdPartyIndicator']);
                unset($data['ThirdPartyIndicator']);
            }
            elseif (\array_key_exists('ThirdPartyIndicator', $data) && $data['ThirdPartyIndicator'] === null) {
                $object->setThirdPartyIndicator(null);
            }
            if (\array_key_exists('AttentionName', $data) && $data['AttentionName'] !== null) {
                $object->setAttentionName($data['AttentionName']);
                unset($data['AttentionName']);
            }
            elseif (\array_key_exists('AttentionName', $data) && $data['AttentionName'] === null) {
                $object->setAttentionName(null);
            }
            if (\array_key_exists('EMailAddress', $data) && $data['EMailAddress'] !== null) {
                $object->setEMailAddress($data['EMailAddress']);
                unset($data['EMailAddress']);
            }
            elseif (\array_key_exists('EMailAddress', $data) && $data['EMailAddress'] === null) {
                $object->setEMailAddress(null);
            }
            if (\array_key_exists('Name', $data) && $data['Name'] !== null) {
                $object->setName($data['Name']);
                unset($data['Name']);
            }
            elseif (\array_key_exists('Name', $data) && $data['Name'] === null) {
                $object->setName(null);
            }
            if (\array_key_exists('Phone', $data) && $data['Phone'] !== null) {
                $object->setPhone($this->denormalizer->denormalize($data['Phone'], 'ShipStream\\Ups\\Api\\Model\\RequesterPhone', 'json', $context));
                unset($data['Phone']);
            }
            elseif (\array_key_exists('Phone', $data) && $data['Phone'] === null) {
                $object->setPhone(null);
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
            if ($object->isInitialized('thirdPartyIndicator') && null !== $object->getThirdPartyIndicator()) {
                $data['ThirdPartyIndicator'] = $object->getThirdPartyIndicator();
            }
            $data['AttentionName'] = $object->getAttentionName();
            $data['EMailAddress'] = $object->getEMailAddress();
            $data['Name'] = $object->getName();
            $data['Phone'] = $this->normalizer->normalize($object->getPhone(), 'json', $context);
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['ShipStream\\Ups\\Api\\Model\\FreightPickupRequestRequester' => false];
        }
    }
} else {
    class FreightPickupRequestRequesterNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\FreightPickupRequestRequester';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\FreightPickupRequestRequester';
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
            $object = new \ShipStream\Ups\Api\Model\FreightPickupRequestRequester();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('ThirdPartyIndicator', $data) && $data['ThirdPartyIndicator'] !== null) {
                $object->setThirdPartyIndicator($data['ThirdPartyIndicator']);
                unset($data['ThirdPartyIndicator']);
            }
            elseif (\array_key_exists('ThirdPartyIndicator', $data) && $data['ThirdPartyIndicator'] === null) {
                $object->setThirdPartyIndicator(null);
            }
            if (\array_key_exists('AttentionName', $data) && $data['AttentionName'] !== null) {
                $object->setAttentionName($data['AttentionName']);
                unset($data['AttentionName']);
            }
            elseif (\array_key_exists('AttentionName', $data) && $data['AttentionName'] === null) {
                $object->setAttentionName(null);
            }
            if (\array_key_exists('EMailAddress', $data) && $data['EMailAddress'] !== null) {
                $object->setEMailAddress($data['EMailAddress']);
                unset($data['EMailAddress']);
            }
            elseif (\array_key_exists('EMailAddress', $data) && $data['EMailAddress'] === null) {
                $object->setEMailAddress(null);
            }
            if (\array_key_exists('Name', $data) && $data['Name'] !== null) {
                $object->setName($data['Name']);
                unset($data['Name']);
            }
            elseif (\array_key_exists('Name', $data) && $data['Name'] === null) {
                $object->setName(null);
            }
            if (\array_key_exists('Phone', $data) && $data['Phone'] !== null) {
                $object->setPhone($this->denormalizer->denormalize($data['Phone'], 'ShipStream\\Ups\\Api\\Model\\RequesterPhone', 'json', $context));
                unset($data['Phone']);
            }
            elseif (\array_key_exists('Phone', $data) && $data['Phone'] === null) {
                $object->setPhone(null);
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
            if ($object->isInitialized('thirdPartyIndicator') && null !== $object->getThirdPartyIndicator()) {
                $data['ThirdPartyIndicator'] = $object->getThirdPartyIndicator();
            }
            $data['AttentionName'] = $object->getAttentionName();
            $data['EMailAddress'] = $object->getEMailAddress();
            $data['Name'] = $object->getName();
            $data['Phone'] = $this->normalizer->normalize($object->getPhone(), 'json', $context);
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['ShipStream\\Ups\\Api\\Model\\FreightPickupRequestRequester' => false];
        }
    }
}