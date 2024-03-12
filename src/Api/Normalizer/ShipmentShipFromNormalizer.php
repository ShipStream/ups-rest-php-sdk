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
    class ShipmentShipFromNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\ShipmentShipFrom';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\ShipmentShipFrom';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \ShipStream\Ups\Api\Model\ShipmentShipFrom();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Name', $data)) {
                $object->setName($data['Name']);
                unset($data['Name']);
            }
            if (\array_key_exists('AttentionName', $data)) {
                $object->setAttentionName($data['AttentionName']);
                unset($data['AttentionName']);
            }
            if (\array_key_exists('CompanyDisplayableName', $data)) {
                $object->setCompanyDisplayableName($data['CompanyDisplayableName']);
                unset($data['CompanyDisplayableName']);
            }
            if (\array_key_exists('TaxIdentificationNumber', $data)) {
                $object->setTaxIdentificationNumber($data['TaxIdentificationNumber']);
                unset($data['TaxIdentificationNumber']);
            }
            if (\array_key_exists('TaxIDType', $data)) {
                $object->setTaxIDType($this->denormalizer->denormalize($data['TaxIDType'], 'ShipStream\\Ups\\Api\\Model\\ShipFromTaxIDType', 'json', $context));
                unset($data['TaxIDType']);
            }
            if (\array_key_exists('Phone', $data)) {
                $object->setPhone($this->denormalizer->denormalize($data['Phone'], 'ShipStream\\Ups\\Api\\Model\\ShipFromPhone', 'json', $context));
                unset($data['Phone']);
            }
            if (\array_key_exists('FaxNumber', $data)) {
                $object->setFaxNumber($data['FaxNumber']);
                unset($data['FaxNumber']);
            }
            if (\array_key_exists('Address', $data)) {
                $object->setAddress($this->denormalizer->denormalize($data['Address'], 'ShipStream\\Ups\\Api\\Model\\ShipFromAddress', 'json', $context));
                unset($data['Address']);
            }
            if (\array_key_exists('VendorInfo', $data)) {
                $object->setVendorInfo($this->denormalizer->denormalize($data['VendorInfo'], 'ShipStream\\Ups\\Api\\Model\\ShipFromVendorInfo', 'json', $context));
                unset($data['VendorInfo']);
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
            $data['Name'] = $object->getName();
            if ($object->isInitialized('attentionName') && null !== $object->getAttentionName()) {
                $data['AttentionName'] = $object->getAttentionName();
            }
            if ($object->isInitialized('companyDisplayableName') && null !== $object->getCompanyDisplayableName()) {
                $data['CompanyDisplayableName'] = $object->getCompanyDisplayableName();
            }
            if ($object->isInitialized('taxIdentificationNumber') && null !== $object->getTaxIdentificationNumber()) {
                $data['TaxIdentificationNumber'] = $object->getTaxIdentificationNumber();
            }
            if ($object->isInitialized('taxIDType') && null !== $object->getTaxIDType()) {
                $data['TaxIDType'] = $this->normalizer->normalize($object->getTaxIDType(), 'json', $context);
            }
            if ($object->isInitialized('phone') && null !== $object->getPhone()) {
                $data['Phone'] = $this->normalizer->normalize($object->getPhone(), 'json', $context);
            }
            if ($object->isInitialized('faxNumber') && null !== $object->getFaxNumber()) {
                $data['FaxNumber'] = $object->getFaxNumber();
            }
            $data['Address'] = $this->normalizer->normalize($object->getAddress(), 'json', $context);
            if ($object->isInitialized('vendorInfo') && null !== $object->getVendorInfo()) {
                $data['VendorInfo'] = $this->normalizer->normalize($object->getVendorInfo(), 'json', $context);
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
            return ['ShipStream\\Ups\\Api\\Model\\ShipmentShipFrom' => false];
        }
    }
} else {
    class ShipmentShipFromNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\ShipmentShipFrom';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\ShipmentShipFrom';
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
            $object = new \ShipStream\Ups\Api\Model\ShipmentShipFrom();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Name', $data)) {
                $object->setName($data['Name']);
                unset($data['Name']);
            }
            if (\array_key_exists('AttentionName', $data)) {
                $object->setAttentionName($data['AttentionName']);
                unset($data['AttentionName']);
            }
            if (\array_key_exists('CompanyDisplayableName', $data)) {
                $object->setCompanyDisplayableName($data['CompanyDisplayableName']);
                unset($data['CompanyDisplayableName']);
            }
            if (\array_key_exists('TaxIdentificationNumber', $data)) {
                $object->setTaxIdentificationNumber($data['TaxIdentificationNumber']);
                unset($data['TaxIdentificationNumber']);
            }
            if (\array_key_exists('TaxIDType', $data)) {
                $object->setTaxIDType($this->denormalizer->denormalize($data['TaxIDType'], 'ShipStream\\Ups\\Api\\Model\\ShipFromTaxIDType', 'json', $context));
                unset($data['TaxIDType']);
            }
            if (\array_key_exists('Phone', $data)) {
                $object->setPhone($this->denormalizer->denormalize($data['Phone'], 'ShipStream\\Ups\\Api\\Model\\ShipFromPhone', 'json', $context));
                unset($data['Phone']);
            }
            if (\array_key_exists('FaxNumber', $data)) {
                $object->setFaxNumber($data['FaxNumber']);
                unset($data['FaxNumber']);
            }
            if (\array_key_exists('Address', $data)) {
                $object->setAddress($this->denormalizer->denormalize($data['Address'], 'ShipStream\\Ups\\Api\\Model\\ShipFromAddress', 'json', $context));
                unset($data['Address']);
            }
            if (\array_key_exists('VendorInfo', $data)) {
                $object->setVendorInfo($this->denormalizer->denormalize($data['VendorInfo'], 'ShipStream\\Ups\\Api\\Model\\ShipFromVendorInfo', 'json', $context));
                unset($data['VendorInfo']);
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
            $data['Name'] = $object->getName();
            if ($object->isInitialized('attentionName') && null !== $object->getAttentionName()) {
                $data['AttentionName'] = $object->getAttentionName();
            }
            if ($object->isInitialized('companyDisplayableName') && null !== $object->getCompanyDisplayableName()) {
                $data['CompanyDisplayableName'] = $object->getCompanyDisplayableName();
            }
            if ($object->isInitialized('taxIdentificationNumber') && null !== $object->getTaxIdentificationNumber()) {
                $data['TaxIdentificationNumber'] = $object->getTaxIdentificationNumber();
            }
            if ($object->isInitialized('taxIDType') && null !== $object->getTaxIDType()) {
                $data['TaxIDType'] = $this->normalizer->normalize($object->getTaxIDType(), 'json', $context);
            }
            if ($object->isInitialized('phone') && null !== $object->getPhone()) {
                $data['Phone'] = $this->normalizer->normalize($object->getPhone(), 'json', $context);
            }
            if ($object->isInitialized('faxNumber') && null !== $object->getFaxNumber()) {
                $data['FaxNumber'] = $object->getFaxNumber();
            }
            $data['Address'] = $this->normalizer->normalize($object->getAddress(), 'json', $context);
            if ($object->isInitialized('vendorInfo') && null !== $object->getVendorInfo()) {
                $data['VendorInfo'] = $this->normalizer->normalize($object->getVendorInfo(), 'json', $context);
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
            return ['ShipStream\\Ups\\Api\\Model\\ShipmentShipFrom' => false];
        }
    }
}