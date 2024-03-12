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
    class AddressNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\Address';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\Address';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \ShipStream\Ups\Api\Model\Address();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('addressLine1', $data) && $data['addressLine1'] !== null) {
                $object->setAddressLine1($data['addressLine1']);
                unset($data['addressLine1']);
            }
            elseif (\array_key_exists('addressLine1', $data) && $data['addressLine1'] === null) {
                $object->setAddressLine1(null);
            }
            if (\array_key_exists('addressLine2', $data) && $data['addressLine2'] !== null) {
                $object->setAddressLine2($data['addressLine2']);
                unset($data['addressLine2']);
            }
            elseif (\array_key_exists('addressLine2', $data) && $data['addressLine2'] === null) {
                $object->setAddressLine2(null);
            }
            if (\array_key_exists('addressLine3', $data) && $data['addressLine3'] !== null) {
                $object->setAddressLine3($data['addressLine3']);
                unset($data['addressLine3']);
            }
            elseif (\array_key_exists('addressLine3', $data) && $data['addressLine3'] === null) {
                $object->setAddressLine3(null);
            }
            if (\array_key_exists('city', $data) && $data['city'] !== null) {
                $object->setCity($data['city']);
                unset($data['city']);
            }
            elseif (\array_key_exists('city', $data) && $data['city'] === null) {
                $object->setCity(null);
            }
            if (\array_key_exists('country', $data)) {
                $object->setCountry($data['country']);
                unset($data['country']);
            }
            if (\array_key_exists('countryCode', $data)) {
                $object->setCountryCode($data['countryCode']);
                unset($data['countryCode']);
            }
            if (\array_key_exists('postalCode', $data) && $data['postalCode'] !== null) {
                $object->setPostalCode($data['postalCode']);
                unset($data['postalCode']);
            }
            elseif (\array_key_exists('postalCode', $data) && $data['postalCode'] === null) {
                $object->setPostalCode(null);
            }
            if (\array_key_exists('stateProvince', $data) && $data['stateProvince'] !== null) {
                $object->setStateProvince($data['stateProvince']);
                unset($data['stateProvince']);
            }
            elseif (\array_key_exists('stateProvince', $data) && $data['stateProvince'] === null) {
                $object->setStateProvince(null);
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
            if ($object->isInitialized('addressLine1') && null !== $object->getAddressLine1()) {
                $data['addressLine1'] = $object->getAddressLine1();
            }
            if ($object->isInitialized('addressLine2') && null !== $object->getAddressLine2()) {
                $data['addressLine2'] = $object->getAddressLine2();
            }
            if ($object->isInitialized('addressLine3') && null !== $object->getAddressLine3()) {
                $data['addressLine3'] = $object->getAddressLine3();
            }
            if ($object->isInitialized('city') && null !== $object->getCity()) {
                $data['city'] = $object->getCity();
            }
            if ($object->isInitialized('country') && null !== $object->getCountry()) {
                $data['country'] = $object->getCountry();
            }
            if ($object->isInitialized('countryCode') && null !== $object->getCountryCode()) {
                $data['countryCode'] = $object->getCountryCode();
            }
            if ($object->isInitialized('postalCode') && null !== $object->getPostalCode()) {
                $data['postalCode'] = $object->getPostalCode();
            }
            if ($object->isInitialized('stateProvince') && null !== $object->getStateProvince()) {
                $data['stateProvince'] = $object->getStateProvince();
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
            return ['ShipStream\\Ups\\Api\\Model\\Address' => false];
        }
    }
} else {
    class AddressNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\Address';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\Address';
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
            $object = new \ShipStream\Ups\Api\Model\Address();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('addressLine1', $data) && $data['addressLine1'] !== null) {
                $object->setAddressLine1($data['addressLine1']);
                unset($data['addressLine1']);
            }
            elseif (\array_key_exists('addressLine1', $data) && $data['addressLine1'] === null) {
                $object->setAddressLine1(null);
            }
            if (\array_key_exists('addressLine2', $data) && $data['addressLine2'] !== null) {
                $object->setAddressLine2($data['addressLine2']);
                unset($data['addressLine2']);
            }
            elseif (\array_key_exists('addressLine2', $data) && $data['addressLine2'] === null) {
                $object->setAddressLine2(null);
            }
            if (\array_key_exists('addressLine3', $data) && $data['addressLine3'] !== null) {
                $object->setAddressLine3($data['addressLine3']);
                unset($data['addressLine3']);
            }
            elseif (\array_key_exists('addressLine3', $data) && $data['addressLine3'] === null) {
                $object->setAddressLine3(null);
            }
            if (\array_key_exists('city', $data) && $data['city'] !== null) {
                $object->setCity($data['city']);
                unset($data['city']);
            }
            elseif (\array_key_exists('city', $data) && $data['city'] === null) {
                $object->setCity(null);
            }
            if (\array_key_exists('country', $data)) {
                $object->setCountry($data['country']);
                unset($data['country']);
            }
            if (\array_key_exists('countryCode', $data)) {
                $object->setCountryCode($data['countryCode']);
                unset($data['countryCode']);
            }
            if (\array_key_exists('postalCode', $data) && $data['postalCode'] !== null) {
                $object->setPostalCode($data['postalCode']);
                unset($data['postalCode']);
            }
            elseif (\array_key_exists('postalCode', $data) && $data['postalCode'] === null) {
                $object->setPostalCode(null);
            }
            if (\array_key_exists('stateProvince', $data) && $data['stateProvince'] !== null) {
                $object->setStateProvince($data['stateProvince']);
                unset($data['stateProvince']);
            }
            elseif (\array_key_exists('stateProvince', $data) && $data['stateProvince'] === null) {
                $object->setStateProvince(null);
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
            if ($object->isInitialized('addressLine1') && null !== $object->getAddressLine1()) {
                $data['addressLine1'] = $object->getAddressLine1();
            }
            if ($object->isInitialized('addressLine2') && null !== $object->getAddressLine2()) {
                $data['addressLine2'] = $object->getAddressLine2();
            }
            if ($object->isInitialized('addressLine3') && null !== $object->getAddressLine3()) {
                $data['addressLine3'] = $object->getAddressLine3();
            }
            if ($object->isInitialized('city') && null !== $object->getCity()) {
                $data['city'] = $object->getCity();
            }
            if ($object->isInitialized('country') && null !== $object->getCountry()) {
                $data['country'] = $object->getCountry();
            }
            if ($object->isInitialized('countryCode') && null !== $object->getCountryCode()) {
                $data['countryCode'] = $object->getCountryCode();
            }
            if ($object->isInitialized('postalCode') && null !== $object->getPostalCode()) {
                $data['postalCode'] = $object->getPostalCode();
            }
            if ($object->isInitialized('stateProvince') && null !== $object->getStateProvince()) {
                $data['stateProvince'] = $object->getStateProvince();
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
            return ['ShipStream\\Ups\\Api\\Model\\Address' => false];
        }
    }
}