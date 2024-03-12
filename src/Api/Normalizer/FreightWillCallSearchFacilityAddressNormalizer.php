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
    class FreightWillCallSearchFacilityAddressNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\FreightWillCallSearchFacilityAddress';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\FreightWillCallSearchFacilityAddress';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \ShipStream\Ups\Api\Model\FreightWillCallSearchFacilityAddress();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('SLIC', $data)) {
                $object->setSLIC($data['SLIC']);
                unset($data['SLIC']);
            }
            if (\array_key_exists('AddressLine', $data)) {
                $values = [];
                foreach ($data['AddressLine'] as $value) {
                    $values[] = $value;
                }
                $object->setAddressLine($values);
                unset($data['AddressLine']);
            }
            if (\array_key_exists('City', $data)) {
                $object->setCity($data['City']);
                unset($data['City']);
            }
            if (\array_key_exists('PostalCodePrimaryLow', $data)) {
                $object->setPostalCodePrimaryLow($data['PostalCodePrimaryLow']);
                unset($data['PostalCodePrimaryLow']);
            }
            if (\array_key_exists('PostalCodeExtendedLow', $data)) {
                $object->setPostalCodeExtendedLow($data['PostalCodeExtendedLow']);
                unset($data['PostalCodeExtendedLow']);
            }
            if (\array_key_exists('State', $data)) {
                $object->setState($data['State']);
                unset($data['State']);
            }
            if (\array_key_exists('CountryCode', $data)) {
                $object->setCountryCode($data['CountryCode']);
                unset($data['CountryCode']);
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
            if ($object->isInitialized('sLIC') && null !== $object->getSLIC()) {
                $data['SLIC'] = $object->getSLIC();
            }
            if ($object->isInitialized('addressLine') && null !== $object->getAddressLine()) {
                $values = [];
                foreach ($object->getAddressLine() as $value) {
                    $values[] = $value;
                }
                $data['AddressLine'] = $values;
            }
            if ($object->isInitialized('city') && null !== $object->getCity()) {
                $data['City'] = $object->getCity();
            }
            if ($object->isInitialized('postalCodePrimaryLow') && null !== $object->getPostalCodePrimaryLow()) {
                $data['PostalCodePrimaryLow'] = $object->getPostalCodePrimaryLow();
            }
            if ($object->isInitialized('postalCodeExtendedLow') && null !== $object->getPostalCodeExtendedLow()) {
                $data['PostalCodeExtendedLow'] = $object->getPostalCodeExtendedLow();
            }
            if ($object->isInitialized('state') && null !== $object->getState()) {
                $data['State'] = $object->getState();
            }
            $data['CountryCode'] = $object->getCountryCode();
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['ShipStream\\Ups\\Api\\Model\\FreightWillCallSearchFacilityAddress' => false];
        }
    }
} else {
    class FreightWillCallSearchFacilityAddressNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\FreightWillCallSearchFacilityAddress';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\FreightWillCallSearchFacilityAddress';
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
            $object = new \ShipStream\Ups\Api\Model\FreightWillCallSearchFacilityAddress();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('SLIC', $data)) {
                $object->setSLIC($data['SLIC']);
                unset($data['SLIC']);
            }
            if (\array_key_exists('AddressLine', $data)) {
                $values = [];
                foreach ($data['AddressLine'] as $value) {
                    $values[] = $value;
                }
                $object->setAddressLine($values);
                unset($data['AddressLine']);
            }
            if (\array_key_exists('City', $data)) {
                $object->setCity($data['City']);
                unset($data['City']);
            }
            if (\array_key_exists('PostalCodePrimaryLow', $data)) {
                $object->setPostalCodePrimaryLow($data['PostalCodePrimaryLow']);
                unset($data['PostalCodePrimaryLow']);
            }
            if (\array_key_exists('PostalCodeExtendedLow', $data)) {
                $object->setPostalCodeExtendedLow($data['PostalCodeExtendedLow']);
                unset($data['PostalCodeExtendedLow']);
            }
            if (\array_key_exists('State', $data)) {
                $object->setState($data['State']);
                unset($data['State']);
            }
            if (\array_key_exists('CountryCode', $data)) {
                $object->setCountryCode($data['CountryCode']);
                unset($data['CountryCode']);
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
            if ($object->isInitialized('sLIC') && null !== $object->getSLIC()) {
                $data['SLIC'] = $object->getSLIC();
            }
            if ($object->isInitialized('addressLine') && null !== $object->getAddressLine()) {
                $values = [];
                foreach ($object->getAddressLine() as $value) {
                    $values[] = $value;
                }
                $data['AddressLine'] = $values;
            }
            if ($object->isInitialized('city') && null !== $object->getCity()) {
                $data['City'] = $object->getCity();
            }
            if ($object->isInitialized('postalCodePrimaryLow') && null !== $object->getPostalCodePrimaryLow()) {
                $data['PostalCodePrimaryLow'] = $object->getPostalCodePrimaryLow();
            }
            if ($object->isInitialized('postalCodeExtendedLow') && null !== $object->getPostalCodeExtendedLow()) {
                $data['PostalCodeExtendedLow'] = $object->getPostalCodeExtendedLow();
            }
            if ($object->isInitialized('state') && null !== $object->getState()) {
                $data['State'] = $object->getState();
            }
            $data['CountryCode'] = $object->getCountryCode();
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['ShipStream\\Ups\\Api\\Model\\FreightWillCallSearchFacilityAddress' => false];
        }
    }
}