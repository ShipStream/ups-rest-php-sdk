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
    class CandidateAddressNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\CandidateAddress';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\CandidateAddress';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \ShipStream\Ups\Api\Model\CandidateAddress();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('countryName', $data) && $data['countryName'] !== null) {
                $object->setCountryName($data['countryName']);
                unset($data['countryName']);
            }
            elseif (\array_key_exists('countryName', $data) && $data['countryName'] === null) {
                $object->setCountryName(null);
            }
            if (\array_key_exists('countryCode', $data) && $data['countryCode'] !== null) {
                $object->setCountryCode($data['countryCode']);
                unset($data['countryCode']);
            }
            elseif (\array_key_exists('countryCode', $data) && $data['countryCode'] === null) {
                $object->setCountryCode(null);
            }
            if (\array_key_exists('stateProvince', $data) && $data['stateProvince'] !== null) {
                $object->setStateProvince($data['stateProvince']);
                unset($data['stateProvince']);
            }
            elseif (\array_key_exists('stateProvince', $data) && $data['stateProvince'] === null) {
                $object->setStateProvince(null);
            }
            if (\array_key_exists('city', $data) && $data['city'] !== null) {
                $object->setCity($data['city']);
                unset($data['city']);
            }
            elseif (\array_key_exists('city', $data) && $data['city'] === null) {
                $object->setCity(null);
            }
            if (\array_key_exists('town', $data) && $data['town'] !== null) {
                $object->setTown($data['town']);
                unset($data['town']);
            }
            elseif (\array_key_exists('town', $data) && $data['town'] === null) {
                $object->setTown(null);
            }
            if (\array_key_exists('postalCode', $data) && $data['postalCode'] !== null) {
                $object->setPostalCode($data['postalCode']);
                unset($data['postalCode']);
            }
            elseif (\array_key_exists('postalCode', $data) && $data['postalCode'] === null) {
                $object->setPostalCode(null);
            }
            if (\array_key_exists('postalCodeLow', $data) && $data['postalCodeLow'] !== null) {
                $object->setPostalCodeLow($data['postalCodeLow']);
                unset($data['postalCodeLow']);
            }
            elseif (\array_key_exists('postalCodeLow', $data) && $data['postalCodeLow'] === null) {
                $object->setPostalCodeLow(null);
            }
            if (\array_key_exists('postalCodeHigh', $data) && $data['postalCodeHigh'] !== null) {
                $object->setPostalCodeHigh($data['postalCodeHigh']);
                unset($data['postalCodeHigh']);
            }
            elseif (\array_key_exists('postalCodeHigh', $data) && $data['postalCodeHigh'] === null) {
                $object->setPostalCodeHigh(null);
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
            $data['countryName'] = $object->getCountryName();
            if ($object->isInitialized('countryCode') && null !== $object->getCountryCode()) {
                $data['countryCode'] = $object->getCountryCode();
            }
            if ($object->isInitialized('stateProvince') && null !== $object->getStateProvince()) {
                $data['stateProvince'] = $object->getStateProvince();
            }
            if ($object->isInitialized('city') && null !== $object->getCity()) {
                $data['city'] = $object->getCity();
            }
            if ($object->isInitialized('town') && null !== $object->getTown()) {
                $data['town'] = $object->getTown();
            }
            if ($object->isInitialized('postalCode') && null !== $object->getPostalCode()) {
                $data['postalCode'] = $object->getPostalCode();
            }
            if ($object->isInitialized('postalCodeLow') && null !== $object->getPostalCodeLow()) {
                $data['postalCodeLow'] = $object->getPostalCodeLow();
            }
            if ($object->isInitialized('postalCodeHigh') && null !== $object->getPostalCodeHigh()) {
                $data['postalCodeHigh'] = $object->getPostalCodeHigh();
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
            return ['ShipStream\\Ups\\Api\\Model\\CandidateAddress' => false];
        }
    }
} else {
    class CandidateAddressNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\CandidateAddress';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\CandidateAddress';
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
            $object = new \ShipStream\Ups\Api\Model\CandidateAddress();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('countryName', $data) && $data['countryName'] !== null) {
                $object->setCountryName($data['countryName']);
                unset($data['countryName']);
            }
            elseif (\array_key_exists('countryName', $data) && $data['countryName'] === null) {
                $object->setCountryName(null);
            }
            if (\array_key_exists('countryCode', $data) && $data['countryCode'] !== null) {
                $object->setCountryCode($data['countryCode']);
                unset($data['countryCode']);
            }
            elseif (\array_key_exists('countryCode', $data) && $data['countryCode'] === null) {
                $object->setCountryCode(null);
            }
            if (\array_key_exists('stateProvince', $data) && $data['stateProvince'] !== null) {
                $object->setStateProvince($data['stateProvince']);
                unset($data['stateProvince']);
            }
            elseif (\array_key_exists('stateProvince', $data) && $data['stateProvince'] === null) {
                $object->setStateProvince(null);
            }
            if (\array_key_exists('city', $data) && $data['city'] !== null) {
                $object->setCity($data['city']);
                unset($data['city']);
            }
            elseif (\array_key_exists('city', $data) && $data['city'] === null) {
                $object->setCity(null);
            }
            if (\array_key_exists('town', $data) && $data['town'] !== null) {
                $object->setTown($data['town']);
                unset($data['town']);
            }
            elseif (\array_key_exists('town', $data) && $data['town'] === null) {
                $object->setTown(null);
            }
            if (\array_key_exists('postalCode', $data) && $data['postalCode'] !== null) {
                $object->setPostalCode($data['postalCode']);
                unset($data['postalCode']);
            }
            elseif (\array_key_exists('postalCode', $data) && $data['postalCode'] === null) {
                $object->setPostalCode(null);
            }
            if (\array_key_exists('postalCodeLow', $data) && $data['postalCodeLow'] !== null) {
                $object->setPostalCodeLow($data['postalCodeLow']);
                unset($data['postalCodeLow']);
            }
            elseif (\array_key_exists('postalCodeLow', $data) && $data['postalCodeLow'] === null) {
                $object->setPostalCodeLow(null);
            }
            if (\array_key_exists('postalCodeHigh', $data) && $data['postalCodeHigh'] !== null) {
                $object->setPostalCodeHigh($data['postalCodeHigh']);
                unset($data['postalCodeHigh']);
            }
            elseif (\array_key_exists('postalCodeHigh', $data) && $data['postalCodeHigh'] === null) {
                $object->setPostalCodeHigh(null);
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
            $data['countryName'] = $object->getCountryName();
            if ($object->isInitialized('countryCode') && null !== $object->getCountryCode()) {
                $data['countryCode'] = $object->getCountryCode();
            }
            if ($object->isInitialized('stateProvince') && null !== $object->getStateProvince()) {
                $data['stateProvince'] = $object->getStateProvince();
            }
            if ($object->isInitialized('city') && null !== $object->getCity()) {
                $data['city'] = $object->getCity();
            }
            if ($object->isInitialized('town') && null !== $object->getTown()) {
                $data['town'] = $object->getTown();
            }
            if ($object->isInitialized('postalCode') && null !== $object->getPostalCode()) {
                $data['postalCode'] = $object->getPostalCode();
            }
            if ($object->isInitialized('postalCodeLow') && null !== $object->getPostalCodeLow()) {
                $data['postalCodeLow'] = $object->getPostalCodeLow();
            }
            if ($object->isInitialized('postalCodeHigh') && null !== $object->getPostalCodeHigh()) {
                $data['postalCodeHigh'] = $object->getPostalCodeHigh();
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
            return ['ShipStream\\Ups\\Api\\Model\\CandidateAddress' => false];
        }
    }
}