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
    class OriginAddressAddressKeyFormatNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\OriginAddressAddressKeyFormat';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\OriginAddressAddressKeyFormat';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \ShipStream\Ups\Api\Model\OriginAddressAddressKeyFormat();
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
            if (\array_key_exists('AddressLine', $data) && $data['AddressLine'] !== null) {
                $object->setAddressLine($data['AddressLine']);
                unset($data['AddressLine']);
            }
            elseif (\array_key_exists('AddressLine', $data) && $data['AddressLine'] === null) {
                $object->setAddressLine(null);
            }
            if (\array_key_exists('AddressLine2', $data) && $data['AddressLine2'] !== null) {
                $object->setAddressLine2($data['AddressLine2']);
                unset($data['AddressLine2']);
            }
            elseif (\array_key_exists('AddressLine2', $data) && $data['AddressLine2'] === null) {
                $object->setAddressLine2(null);
            }
            if (\array_key_exists('AddressLine3', $data) && $data['AddressLine3'] !== null) {
                $object->setAddressLine3($data['AddressLine3']);
                unset($data['AddressLine3']);
            }
            elseif (\array_key_exists('AddressLine3', $data) && $data['AddressLine3'] === null) {
                $object->setAddressLine3(null);
            }
            if (\array_key_exists('PoliticalDivision3', $data) && $data['PoliticalDivision3'] !== null) {
                $object->setPoliticalDivision3($data['PoliticalDivision3']);
                unset($data['PoliticalDivision3']);
            }
            elseif (\array_key_exists('PoliticalDivision3', $data) && $data['PoliticalDivision3'] === null) {
                $object->setPoliticalDivision3(null);
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
            if (\array_key_exists('CountryCode', $data) && $data['CountryCode'] !== null) {
                $object->setCountryCode($data['CountryCode']);
                unset($data['CountryCode']);
            }
            elseif (\array_key_exists('CountryCode', $data) && $data['CountryCode'] === null) {
                $object->setCountryCode(null);
            }
            if (\array_key_exists('SingleLineAddress', $data) && $data['SingleLineAddress'] !== null) {
                $object->setSingleLineAddress($data['SingleLineAddress']);
                unset($data['SingleLineAddress']);
            }
            elseif (\array_key_exists('SingleLineAddress', $data) && $data['SingleLineAddress'] === null) {
                $object->setSingleLineAddress(null);
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
            if ($object->isInitialized('consigneeName') && null !== $object->getConsigneeName()) {
                $data['ConsigneeName'] = $object->getConsigneeName();
            }
            $data['AddressLine'] = $object->getAddressLine();
            if ($object->isInitialized('addressLine2') && null !== $object->getAddressLine2()) {
                $data['AddressLine2'] = $object->getAddressLine2();
            }
            if ($object->isInitialized('addressLine3') && null !== $object->getAddressLine3()) {
                $data['AddressLine3'] = $object->getAddressLine3();
            }
            if ($object->isInitialized('politicalDivision3') && null !== $object->getPoliticalDivision3()) {
                $data['PoliticalDivision3'] = $object->getPoliticalDivision3();
            }
            $data['PoliticalDivision2'] = $object->getPoliticalDivision2();
            $data['PoliticalDivision1'] = $object->getPoliticalDivision1();
            $data['PostcodePrimaryLow'] = $object->getPostcodePrimaryLow();
            if ($object->isInitialized('postcodeExtendedLow') && null !== $object->getPostcodeExtendedLow()) {
                $data['PostcodeExtendedLow'] = $object->getPostcodeExtendedLow();
            }
            $data['CountryCode'] = $object->getCountryCode();
            if ($object->isInitialized('singleLineAddress') && null !== $object->getSingleLineAddress()) {
                $data['SingleLineAddress'] = $object->getSingleLineAddress();
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
            return ['ShipStream\\Ups\\Api\\Model\\OriginAddressAddressKeyFormat' => false];
        }
    }
} else {
    class OriginAddressAddressKeyFormatNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\OriginAddressAddressKeyFormat';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\OriginAddressAddressKeyFormat';
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
            $object = new \ShipStream\Ups\Api\Model\OriginAddressAddressKeyFormat();
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
            if (\array_key_exists('AddressLine', $data) && $data['AddressLine'] !== null) {
                $object->setAddressLine($data['AddressLine']);
                unset($data['AddressLine']);
            }
            elseif (\array_key_exists('AddressLine', $data) && $data['AddressLine'] === null) {
                $object->setAddressLine(null);
            }
            if (\array_key_exists('AddressLine2', $data) && $data['AddressLine2'] !== null) {
                $object->setAddressLine2($data['AddressLine2']);
                unset($data['AddressLine2']);
            }
            elseif (\array_key_exists('AddressLine2', $data) && $data['AddressLine2'] === null) {
                $object->setAddressLine2(null);
            }
            if (\array_key_exists('AddressLine3', $data) && $data['AddressLine3'] !== null) {
                $object->setAddressLine3($data['AddressLine3']);
                unset($data['AddressLine3']);
            }
            elseif (\array_key_exists('AddressLine3', $data) && $data['AddressLine3'] === null) {
                $object->setAddressLine3(null);
            }
            if (\array_key_exists('PoliticalDivision3', $data) && $data['PoliticalDivision3'] !== null) {
                $object->setPoliticalDivision3($data['PoliticalDivision3']);
                unset($data['PoliticalDivision3']);
            }
            elseif (\array_key_exists('PoliticalDivision3', $data) && $data['PoliticalDivision3'] === null) {
                $object->setPoliticalDivision3(null);
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
            if (\array_key_exists('CountryCode', $data) && $data['CountryCode'] !== null) {
                $object->setCountryCode($data['CountryCode']);
                unset($data['CountryCode']);
            }
            elseif (\array_key_exists('CountryCode', $data) && $data['CountryCode'] === null) {
                $object->setCountryCode(null);
            }
            if (\array_key_exists('SingleLineAddress', $data) && $data['SingleLineAddress'] !== null) {
                $object->setSingleLineAddress($data['SingleLineAddress']);
                unset($data['SingleLineAddress']);
            }
            elseif (\array_key_exists('SingleLineAddress', $data) && $data['SingleLineAddress'] === null) {
                $object->setSingleLineAddress(null);
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
            if ($object->isInitialized('consigneeName') && null !== $object->getConsigneeName()) {
                $data['ConsigneeName'] = $object->getConsigneeName();
            }
            $data['AddressLine'] = $object->getAddressLine();
            if ($object->isInitialized('addressLine2') && null !== $object->getAddressLine2()) {
                $data['AddressLine2'] = $object->getAddressLine2();
            }
            if ($object->isInitialized('addressLine3') && null !== $object->getAddressLine3()) {
                $data['AddressLine3'] = $object->getAddressLine3();
            }
            if ($object->isInitialized('politicalDivision3') && null !== $object->getPoliticalDivision3()) {
                $data['PoliticalDivision3'] = $object->getPoliticalDivision3();
            }
            $data['PoliticalDivision2'] = $object->getPoliticalDivision2();
            $data['PoliticalDivision1'] = $object->getPoliticalDivision1();
            $data['PostcodePrimaryLow'] = $object->getPostcodePrimaryLow();
            if ($object->isInitialized('postcodeExtendedLow') && null !== $object->getPostcodeExtendedLow()) {
                $data['PostcodeExtendedLow'] = $object->getPostcodeExtendedLow();
            }
            $data['CountryCode'] = $object->getCountryCode();
            if ($object->isInitialized('singleLineAddress') && null !== $object->getSingleLineAddress()) {
                $data['SingleLineAddress'] = $object->getSingleLineAddress();
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
            return ['ShipStream\\Ups\\Api\\Model\\OriginAddressAddressKeyFormat' => false];
        }
    }
}