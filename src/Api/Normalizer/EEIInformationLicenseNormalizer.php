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
    class EEIInformationLicenseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\EEIInformationLicense';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\EEIInformationLicense';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \ShipStream\Ups\Api\Model\EEIInformationLicense();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Number', $data) && $data['Number'] !== null) {
                $object->setNumber($data['Number']);
                unset($data['Number']);
            }
            elseif (\array_key_exists('Number', $data) && $data['Number'] === null) {
                $object->setNumber(null);
            }
            if (\array_key_exists('Code', $data) && $data['Code'] !== null) {
                $object->setCode($data['Code']);
                unset($data['Code']);
            }
            elseif (\array_key_exists('Code', $data) && $data['Code'] === null) {
                $object->setCode(null);
            }
            if (\array_key_exists('LicenseLineValue', $data) && $data['LicenseLineValue'] !== null) {
                $object->setLicenseLineValue($data['LicenseLineValue']);
                unset($data['LicenseLineValue']);
            }
            elseif (\array_key_exists('LicenseLineValue', $data) && $data['LicenseLineValue'] === null) {
                $object->setLicenseLineValue(null);
            }
            if (\array_key_exists('ECCNNumber', $data) && $data['ECCNNumber'] !== null) {
                $object->setECCNNumber($data['ECCNNumber']);
                unset($data['ECCNNumber']);
            }
            elseif (\array_key_exists('ECCNNumber', $data) && $data['ECCNNumber'] === null) {
                $object->setECCNNumber(null);
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
            if ($object->isInitialized('number') && null !== $object->getNumber()) {
                $data['Number'] = $object->getNumber();
            }
            if ($object->isInitialized('code') && null !== $object->getCode()) {
                $data['Code'] = $object->getCode();
            }
            if ($object->isInitialized('licenseLineValue') && null !== $object->getLicenseLineValue()) {
                $data['LicenseLineValue'] = $object->getLicenseLineValue();
            }
            if ($object->isInitialized('eCCNNumber') && null !== $object->getECCNNumber()) {
                $data['ECCNNumber'] = $object->getECCNNumber();
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
            return ['ShipStream\\Ups\\Api\\Model\\EEIInformationLicense' => false];
        }
    }
} else {
    class EEIInformationLicenseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\EEIInformationLicense';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\EEIInformationLicense';
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
            $object = new \ShipStream\Ups\Api\Model\EEIInformationLicense();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Number', $data) && $data['Number'] !== null) {
                $object->setNumber($data['Number']);
                unset($data['Number']);
            }
            elseif (\array_key_exists('Number', $data) && $data['Number'] === null) {
                $object->setNumber(null);
            }
            if (\array_key_exists('Code', $data) && $data['Code'] !== null) {
                $object->setCode($data['Code']);
                unset($data['Code']);
            }
            elseif (\array_key_exists('Code', $data) && $data['Code'] === null) {
                $object->setCode(null);
            }
            if (\array_key_exists('LicenseLineValue', $data) && $data['LicenseLineValue'] !== null) {
                $object->setLicenseLineValue($data['LicenseLineValue']);
                unset($data['LicenseLineValue']);
            }
            elseif (\array_key_exists('LicenseLineValue', $data) && $data['LicenseLineValue'] === null) {
                $object->setLicenseLineValue(null);
            }
            if (\array_key_exists('ECCNNumber', $data) && $data['ECCNNumber'] !== null) {
                $object->setECCNNumber($data['ECCNNumber']);
                unset($data['ECCNNumber']);
            }
            elseif (\array_key_exists('ECCNNumber', $data) && $data['ECCNNumber'] === null) {
                $object->setECCNNumber(null);
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
            if ($object->isInitialized('number') && null !== $object->getNumber()) {
                $data['Number'] = $object->getNumber();
            }
            if ($object->isInitialized('code') && null !== $object->getCode()) {
                $data['Code'] = $object->getCode();
            }
            if ($object->isInitialized('licenseLineValue') && null !== $object->getLicenseLineValue()) {
                $data['LicenseLineValue'] = $object->getLicenseLineValue();
            }
            if ($object->isInitialized('eCCNNumber') && null !== $object->getECCNNumber()) {
                $data['ECCNNumber'] = $object->getECCNNumber();
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
            return ['ShipStream\\Ups\\Api\\Model\\EEIInformationLicense' => false];
        }
    }
}