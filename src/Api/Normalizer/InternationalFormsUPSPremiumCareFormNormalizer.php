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
    class InternationalFormsUPSPremiumCareFormNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\InternationalFormsUPSPremiumCareForm';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\InternationalFormsUPSPremiumCareForm';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \ShipStream\Ups\Api\Model\InternationalFormsUPSPremiumCareForm();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('ShipmentDate', $data) && $data['ShipmentDate'] !== null) {
                $object->setShipmentDate($data['ShipmentDate']);
                unset($data['ShipmentDate']);
            }
            elseif (\array_key_exists('ShipmentDate', $data) && $data['ShipmentDate'] === null) {
                $object->setShipmentDate(null);
            }
            if (\array_key_exists('PageSize', $data) && $data['PageSize'] !== null) {
                $object->setPageSize($data['PageSize']);
                unset($data['PageSize']);
            }
            elseif (\array_key_exists('PageSize', $data) && $data['PageSize'] === null) {
                $object->setPageSize(null);
            }
            if (\array_key_exists('PrintType', $data) && $data['PrintType'] !== null) {
                $object->setPrintType($data['PrintType']);
                unset($data['PrintType']);
            }
            elseif (\array_key_exists('PrintType', $data) && $data['PrintType'] === null) {
                $object->setPrintType(null);
            }
            if (\array_key_exists('NumOfCopies', $data) && $data['NumOfCopies'] !== null) {
                $object->setNumOfCopies($data['NumOfCopies']);
                unset($data['NumOfCopies']);
            }
            elseif (\array_key_exists('NumOfCopies', $data) && $data['NumOfCopies'] === null) {
                $object->setNumOfCopies(null);
            }
            if (\array_key_exists('LanguageForUPSPremiumCare', $data) && $data['LanguageForUPSPremiumCare'] !== null) {
                $object->setLanguageForUPSPremiumCare($this->denormalizer->denormalize($data['LanguageForUPSPremiumCare'], 'ShipStream\\Ups\\Api\\Model\\UPSPremiumCareFormLanguageForUPSPremiumCare', 'json', $context));
                unset($data['LanguageForUPSPremiumCare']);
            }
            elseif (\array_key_exists('LanguageForUPSPremiumCare', $data) && $data['LanguageForUPSPremiumCare'] === null) {
                $object->setLanguageForUPSPremiumCare(null);
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
            $data['ShipmentDate'] = $object->getShipmentDate();
            $data['PageSize'] = $object->getPageSize();
            $data['PrintType'] = $object->getPrintType();
            $data['NumOfCopies'] = $object->getNumOfCopies();
            $data['LanguageForUPSPremiumCare'] = $this->normalizer->normalize($object->getLanguageForUPSPremiumCare(), 'json', $context);
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['ShipStream\\Ups\\Api\\Model\\InternationalFormsUPSPremiumCareForm' => false];
        }
    }
} else {
    class InternationalFormsUPSPremiumCareFormNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\InternationalFormsUPSPremiumCareForm';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\InternationalFormsUPSPremiumCareForm';
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
            $object = new \ShipStream\Ups\Api\Model\InternationalFormsUPSPremiumCareForm();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('ShipmentDate', $data) && $data['ShipmentDate'] !== null) {
                $object->setShipmentDate($data['ShipmentDate']);
                unset($data['ShipmentDate']);
            }
            elseif (\array_key_exists('ShipmentDate', $data) && $data['ShipmentDate'] === null) {
                $object->setShipmentDate(null);
            }
            if (\array_key_exists('PageSize', $data) && $data['PageSize'] !== null) {
                $object->setPageSize($data['PageSize']);
                unset($data['PageSize']);
            }
            elseif (\array_key_exists('PageSize', $data) && $data['PageSize'] === null) {
                $object->setPageSize(null);
            }
            if (\array_key_exists('PrintType', $data) && $data['PrintType'] !== null) {
                $object->setPrintType($data['PrintType']);
                unset($data['PrintType']);
            }
            elseif (\array_key_exists('PrintType', $data) && $data['PrintType'] === null) {
                $object->setPrintType(null);
            }
            if (\array_key_exists('NumOfCopies', $data) && $data['NumOfCopies'] !== null) {
                $object->setNumOfCopies($data['NumOfCopies']);
                unset($data['NumOfCopies']);
            }
            elseif (\array_key_exists('NumOfCopies', $data) && $data['NumOfCopies'] === null) {
                $object->setNumOfCopies(null);
            }
            if (\array_key_exists('LanguageForUPSPremiumCare', $data) && $data['LanguageForUPSPremiumCare'] !== null) {
                $object->setLanguageForUPSPremiumCare($this->denormalizer->denormalize($data['LanguageForUPSPremiumCare'], 'ShipStream\\Ups\\Api\\Model\\UPSPremiumCareFormLanguageForUPSPremiumCare', 'json', $context));
                unset($data['LanguageForUPSPremiumCare']);
            }
            elseif (\array_key_exists('LanguageForUPSPremiumCare', $data) && $data['LanguageForUPSPremiumCare'] === null) {
                $object->setLanguageForUPSPremiumCare(null);
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
            $data['ShipmentDate'] = $object->getShipmentDate();
            $data['PageSize'] = $object->getPageSize();
            $data['PrintType'] = $object->getPrintType();
            $data['NumOfCopies'] = $object->getNumOfCopies();
            $data['LanguageForUPSPremiumCare'] = $this->normalizer->normalize($object->getLanguageForUPSPremiumCare(), 'json', $context);
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['ShipStream\\Ups\\Api\\Model\\InternationalFormsUPSPremiumCareForm' => false];
        }
    }
}