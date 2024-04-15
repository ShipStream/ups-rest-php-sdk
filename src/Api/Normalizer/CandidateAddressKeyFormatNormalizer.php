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
    class CandidateAddressKeyFormatNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\CandidateAddressKeyFormat';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\CandidateAddressKeyFormat';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \ShipStream\Ups\Api\Model\CandidateAddressKeyFormat();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('ConsigneeName', $data) && $data['ConsigneeName'] !== null) {
                $object->setConsigneeName($data['ConsigneeName']);
                unset($data['ConsigneeName']);
            }
            elseif (\array_key_exists('ConsigneeName', $data) && $data['ConsigneeName'] === null) {
                $object->setConsigneeName(null);
            }
            if (\array_key_exists('AttentionName', $data) && $data['AttentionName'] !== null) {
                $object->setAttentionName($data['AttentionName']);
                unset($data['AttentionName']);
            }
            elseif (\array_key_exists('AttentionName', $data) && $data['AttentionName'] === null) {
                $object->setAttentionName(null);
            }
            if (\array_key_exists('AddressLine', $data) && $data['AddressLine'] !== null) {
                $values = [];
                foreach ($data['AddressLine'] as $value) {
                    $values[] = $value;
                }
                $object->setAddressLine($values);
                unset($data['AddressLine']);
            }
            elseif (\array_key_exists('AddressLine', $data) && $data['AddressLine'] === null) {
                $object->setAddressLine(null);
            }
            if (\array_key_exists('Region', $data) && $data['Region'] !== null) {
                $object->setRegion($data['Region']);
                unset($data['Region']);
            }
            elseif (\array_key_exists('Region', $data) && $data['Region'] === null) {
                $object->setRegion(null);
            }
            if (\array_key_exists('PoliticalDivision2', $data) && $data['PoliticalDivision2'] !== null) {
                $object->setPoliticalDivision2($data['PoliticalDivision2']);
                unset($data['PoliticalDivision2']);
            }
            elseif (\array_key_exists('PoliticalDivision2', $data) && $data['PoliticalDivision2'] === null) {
                $object->setPoliticalDivision2(null);
            }
            if (\array_key_exists('PoliticalDivision1', $data) && $data['PoliticalDivision1'] !== null) {
                $object->setPoliticalDivision1($data['PoliticalDivision1']);
                unset($data['PoliticalDivision1']);
            }
            elseif (\array_key_exists('PoliticalDivision1', $data) && $data['PoliticalDivision1'] === null) {
                $object->setPoliticalDivision1(null);
            }
            if (\array_key_exists('PostcodePrimaryLow', $data) && $data['PostcodePrimaryLow'] !== null) {
                $object->setPostcodePrimaryLow($data['PostcodePrimaryLow']);
                unset($data['PostcodePrimaryLow']);
            }
            elseif (\array_key_exists('PostcodePrimaryLow', $data) && $data['PostcodePrimaryLow'] === null) {
                $object->setPostcodePrimaryLow(null);
            }
            if (\array_key_exists('PostcodeExtendedLow', $data) && $data['PostcodeExtendedLow'] !== null) {
                $object->setPostcodeExtendedLow($data['PostcodeExtendedLow']);
                unset($data['PostcodeExtendedLow']);
            }
            elseif (\array_key_exists('PostcodeExtendedLow', $data) && $data['PostcodeExtendedLow'] === null) {
                $object->setPostcodeExtendedLow(null);
            }
            if (\array_key_exists('Urbanization', $data) && $data['Urbanization'] !== null) {
                $object->setUrbanization($data['Urbanization']);
                unset($data['Urbanization']);
            }
            elseif (\array_key_exists('Urbanization', $data) && $data['Urbanization'] === null) {
                $object->setUrbanization(null);
            }
            if (\array_key_exists('CountryCode', $data) && $data['CountryCode'] !== null) {
                $object->setCountryCode($data['CountryCode']);
                unset($data['CountryCode']);
            }
            elseif (\array_key_exists('CountryCode', $data) && $data['CountryCode'] === null) {
                $object->setCountryCode(null);
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
            if ($object->isInitialized('consigneeName') && null !== $object->getConsigneeName()) {
                $data['ConsigneeName'] = $object->getConsigneeName();
            }
            if ($object->isInitialized('attentionName') && null !== $object->getAttentionName()) {
                $data['AttentionName'] = $object->getAttentionName();
            }
            if ($object->isInitialized('addressLine') && null !== $object->getAddressLine()) {
                $values = [];
                foreach ($object->getAddressLine() as $value) {
                    $values[] = $value;
                }
                $data['AddressLine'] = $values;
            }
            if ($object->isInitialized('region') && null !== $object->getRegion()) {
                $data['Region'] = $object->getRegion();
            }
            if ($object->isInitialized('politicalDivision2') && null !== $object->getPoliticalDivision2()) {
                $data['PoliticalDivision2'] = $object->getPoliticalDivision2();
            }
            if ($object->isInitialized('politicalDivision1') && null !== $object->getPoliticalDivision1()) {
                $data['PoliticalDivision1'] = $object->getPoliticalDivision1();
            }
            if ($object->isInitialized('postcodePrimaryLow') && null !== $object->getPostcodePrimaryLow()) {
                $data['PostcodePrimaryLow'] = $object->getPostcodePrimaryLow();
            }
            if ($object->isInitialized('postcodeExtendedLow') && null !== $object->getPostcodeExtendedLow()) {
                $data['PostcodeExtendedLow'] = $object->getPostcodeExtendedLow();
            }
            if ($object->isInitialized('urbanization') && null !== $object->getUrbanization()) {
                $data['Urbanization'] = $object->getUrbanization();
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
            return ['ShipStream\\Ups\\Api\\Model\\CandidateAddressKeyFormat' => false];
        }
    }
} else {
    class CandidateAddressKeyFormatNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\CandidateAddressKeyFormat';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\CandidateAddressKeyFormat';
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
            $object = new \ShipStream\Ups\Api\Model\CandidateAddressKeyFormat();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('ConsigneeName', $data) && $data['ConsigneeName'] !== null) {
                $object->setConsigneeName($data['ConsigneeName']);
                unset($data['ConsigneeName']);
            }
            elseif (\array_key_exists('ConsigneeName', $data) && $data['ConsigneeName'] === null) {
                $object->setConsigneeName(null);
            }
            if (\array_key_exists('AttentionName', $data) && $data['AttentionName'] !== null) {
                $object->setAttentionName($data['AttentionName']);
                unset($data['AttentionName']);
            }
            elseif (\array_key_exists('AttentionName', $data) && $data['AttentionName'] === null) {
                $object->setAttentionName(null);
            }
            if (\array_key_exists('AddressLine', $data) && $data['AddressLine'] !== null) {
                $values = [];
                foreach ($data['AddressLine'] as $value) {
                    $values[] = $value;
                }
                $object->setAddressLine($values);
                unset($data['AddressLine']);
            }
            elseif (\array_key_exists('AddressLine', $data) && $data['AddressLine'] === null) {
                $object->setAddressLine(null);
            }
            if (\array_key_exists('Region', $data) && $data['Region'] !== null) {
                $object->setRegion($data['Region']);
                unset($data['Region']);
            }
            elseif (\array_key_exists('Region', $data) && $data['Region'] === null) {
                $object->setRegion(null);
            }
            if (\array_key_exists('PoliticalDivision2', $data) && $data['PoliticalDivision2'] !== null) {
                $object->setPoliticalDivision2($data['PoliticalDivision2']);
                unset($data['PoliticalDivision2']);
            }
            elseif (\array_key_exists('PoliticalDivision2', $data) && $data['PoliticalDivision2'] === null) {
                $object->setPoliticalDivision2(null);
            }
            if (\array_key_exists('PoliticalDivision1', $data) && $data['PoliticalDivision1'] !== null) {
                $object->setPoliticalDivision1($data['PoliticalDivision1']);
                unset($data['PoliticalDivision1']);
            }
            elseif (\array_key_exists('PoliticalDivision1', $data) && $data['PoliticalDivision1'] === null) {
                $object->setPoliticalDivision1(null);
            }
            if (\array_key_exists('PostcodePrimaryLow', $data) && $data['PostcodePrimaryLow'] !== null) {
                $object->setPostcodePrimaryLow($data['PostcodePrimaryLow']);
                unset($data['PostcodePrimaryLow']);
            }
            elseif (\array_key_exists('PostcodePrimaryLow', $data) && $data['PostcodePrimaryLow'] === null) {
                $object->setPostcodePrimaryLow(null);
            }
            if (\array_key_exists('PostcodeExtendedLow', $data) && $data['PostcodeExtendedLow'] !== null) {
                $object->setPostcodeExtendedLow($data['PostcodeExtendedLow']);
                unset($data['PostcodeExtendedLow']);
            }
            elseif (\array_key_exists('PostcodeExtendedLow', $data) && $data['PostcodeExtendedLow'] === null) {
                $object->setPostcodeExtendedLow(null);
            }
            if (\array_key_exists('Urbanization', $data) && $data['Urbanization'] !== null) {
                $object->setUrbanization($data['Urbanization']);
                unset($data['Urbanization']);
            }
            elseif (\array_key_exists('Urbanization', $data) && $data['Urbanization'] === null) {
                $object->setUrbanization(null);
            }
            if (\array_key_exists('CountryCode', $data) && $data['CountryCode'] !== null) {
                $object->setCountryCode($data['CountryCode']);
                unset($data['CountryCode']);
            }
            elseif (\array_key_exists('CountryCode', $data) && $data['CountryCode'] === null) {
                $object->setCountryCode(null);
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
            if ($object->isInitialized('consigneeName') && null !== $object->getConsigneeName()) {
                $data['ConsigneeName'] = $object->getConsigneeName();
            }
            if ($object->isInitialized('attentionName') && null !== $object->getAttentionName()) {
                $data['AttentionName'] = $object->getAttentionName();
            }
            if ($object->isInitialized('addressLine') && null !== $object->getAddressLine()) {
                $values = [];
                foreach ($object->getAddressLine() as $value) {
                    $values[] = $value;
                }
                $data['AddressLine'] = $values;
            }
            if ($object->isInitialized('region') && null !== $object->getRegion()) {
                $data['Region'] = $object->getRegion();
            }
            if ($object->isInitialized('politicalDivision2') && null !== $object->getPoliticalDivision2()) {
                $data['PoliticalDivision2'] = $object->getPoliticalDivision2();
            }
            if ($object->isInitialized('politicalDivision1') && null !== $object->getPoliticalDivision1()) {
                $data['PoliticalDivision1'] = $object->getPoliticalDivision1();
            }
            if ($object->isInitialized('postcodePrimaryLow') && null !== $object->getPostcodePrimaryLow()) {
                $data['PostcodePrimaryLow'] = $object->getPostcodePrimaryLow();
            }
            if ($object->isInitialized('postcodeExtendedLow') && null !== $object->getPostcodeExtendedLow()) {
                $data['PostcodeExtendedLow'] = $object->getPostcodeExtendedLow();
            }
            if ($object->isInitialized('urbanization') && null !== $object->getUrbanization()) {
                $data['Urbanization'] = $object->getUrbanization();
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
            return ['ShipStream\\Ups\\Api\\Model\\CandidateAddressKeyFormat' => false];
        }
    }
}