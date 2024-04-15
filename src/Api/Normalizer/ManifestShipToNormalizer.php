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
    class ManifestShipToNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\ManifestShipTo';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\ManifestShipTo';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \ShipStream\Ups\Api\Model\ManifestShipTo();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('ShipperAssignedIdentificationNumber', $data) && $data['ShipperAssignedIdentificationNumber'] !== null) {
                $object->setShipperAssignedIdentificationNumber($data['ShipperAssignedIdentificationNumber']);
                unset($data['ShipperAssignedIdentificationNumber']);
            }
            elseif (\array_key_exists('ShipperAssignedIdentificationNumber', $data) && $data['ShipperAssignedIdentificationNumber'] === null) {
                $object->setShipperAssignedIdentificationNumber(null);
            }
            if (\array_key_exists('CompanyName', $data) && $data['CompanyName'] !== null) {
                $object->setCompanyName($data['CompanyName']);
                unset($data['CompanyName']);
            }
            elseif (\array_key_exists('CompanyName', $data) && $data['CompanyName'] === null) {
                $object->setCompanyName(null);
            }
            if (\array_key_exists('AttentionName', $data) && $data['AttentionName'] !== null) {
                $object->setAttentionName($data['AttentionName']);
                unset($data['AttentionName']);
            }
            elseif (\array_key_exists('AttentionName', $data) && $data['AttentionName'] === null) {
                $object->setAttentionName(null);
            }
            if (\array_key_exists('PhoneNumber', $data) && $data['PhoneNumber'] !== null) {
                $object->setPhoneNumber($data['PhoneNumber']);
                unset($data['PhoneNumber']);
            }
            elseif (\array_key_exists('PhoneNumber', $data) && $data['PhoneNumber'] === null) {
                $object->setPhoneNumber(null);
            }
            if (\array_key_exists('TaxIdentificationNumber', $data) && $data['TaxIdentificationNumber'] !== null) {
                $object->setTaxIdentificationNumber($data['TaxIdentificationNumber']);
                unset($data['TaxIdentificationNumber']);
            }
            elseif (\array_key_exists('TaxIdentificationNumber', $data) && $data['TaxIdentificationNumber'] === null) {
                $object->setTaxIdentificationNumber(null);
            }
            if (\array_key_exists('FaxNumber', $data) && $data['FaxNumber'] !== null) {
                $object->setFaxNumber($data['FaxNumber']);
                unset($data['FaxNumber']);
            }
            elseif (\array_key_exists('FaxNumber', $data) && $data['FaxNumber'] === null) {
                $object->setFaxNumber(null);
            }
            if (\array_key_exists('EMailAddress', $data) && $data['EMailAddress'] !== null) {
                $object->setEMailAddress($data['EMailAddress']);
                unset($data['EMailAddress']);
            }
            elseif (\array_key_exists('EMailAddress', $data) && $data['EMailAddress'] === null) {
                $object->setEMailAddress(null);
            }
            if (\array_key_exists('Address', $data) && $data['Address'] !== null) {
                $object->setAddress($this->denormalizer->denormalize($data['Address'], 'ShipStream\\Ups\\Api\\Model\\ManifestShipToAddress', 'json', $context));
                unset($data['Address']);
            }
            elseif (\array_key_exists('Address', $data) && $data['Address'] === null) {
                $object->setAddress(null);
            }
            if (\array_key_exists('LocationID', $data) && $data['LocationID'] !== null) {
                $object->setLocationID($data['LocationID']);
                unset($data['LocationID']);
            }
            elseif (\array_key_exists('LocationID', $data) && $data['LocationID'] === null) {
                $object->setLocationID(null);
            }
            if (\array_key_exists('ReceivingAddressName', $data) && $data['ReceivingAddressName'] !== null) {
                $object->setReceivingAddressName($data['ReceivingAddressName']);
                unset($data['ReceivingAddressName']);
            }
            elseif (\array_key_exists('ReceivingAddressName', $data) && $data['ReceivingAddressName'] === null) {
                $object->setReceivingAddressName(null);
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
            if ($object->isInitialized('shipperAssignedIdentificationNumber') && null !== $object->getShipperAssignedIdentificationNumber()) {
                $data['ShipperAssignedIdentificationNumber'] = $object->getShipperAssignedIdentificationNumber();
            }
            if ($object->isInitialized('companyName') && null !== $object->getCompanyName()) {
                $data['CompanyName'] = $object->getCompanyName();
            }
            if ($object->isInitialized('attentionName') && null !== $object->getAttentionName()) {
                $data['AttentionName'] = $object->getAttentionName();
            }
            if ($object->isInitialized('phoneNumber') && null !== $object->getPhoneNumber()) {
                $data['PhoneNumber'] = $object->getPhoneNumber();
            }
            if ($object->isInitialized('taxIdentificationNumber') && null !== $object->getTaxIdentificationNumber()) {
                $data['TaxIdentificationNumber'] = $object->getTaxIdentificationNumber();
            }
            if ($object->isInitialized('faxNumber') && null !== $object->getFaxNumber()) {
                $data['FaxNumber'] = $object->getFaxNumber();
            }
            if ($object->isInitialized('eMailAddress') && null !== $object->getEMailAddress()) {
                $data['EMailAddress'] = $object->getEMailAddress();
            }
            if ($object->isInitialized('address') && null !== $object->getAddress()) {
                $data['Address'] = $this->normalizer->normalize($object->getAddress(), 'json', $context);
            }
            if ($object->isInitialized('locationID') && null !== $object->getLocationID()) {
                $data['LocationID'] = $object->getLocationID();
            }
            if ($object->isInitialized('receivingAddressName') && null !== $object->getReceivingAddressName()) {
                $data['ReceivingAddressName'] = $object->getReceivingAddressName();
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
            return ['ShipStream\\Ups\\Api\\Model\\ManifestShipTo' => false];
        }
    }
} else {
    class ManifestShipToNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\ManifestShipTo';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\ManifestShipTo';
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
            $object = new \ShipStream\Ups\Api\Model\ManifestShipTo();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('ShipperAssignedIdentificationNumber', $data) && $data['ShipperAssignedIdentificationNumber'] !== null) {
                $object->setShipperAssignedIdentificationNumber($data['ShipperAssignedIdentificationNumber']);
                unset($data['ShipperAssignedIdentificationNumber']);
            }
            elseif (\array_key_exists('ShipperAssignedIdentificationNumber', $data) && $data['ShipperAssignedIdentificationNumber'] === null) {
                $object->setShipperAssignedIdentificationNumber(null);
            }
            if (\array_key_exists('CompanyName', $data) && $data['CompanyName'] !== null) {
                $object->setCompanyName($data['CompanyName']);
                unset($data['CompanyName']);
            }
            elseif (\array_key_exists('CompanyName', $data) && $data['CompanyName'] === null) {
                $object->setCompanyName(null);
            }
            if (\array_key_exists('AttentionName', $data) && $data['AttentionName'] !== null) {
                $object->setAttentionName($data['AttentionName']);
                unset($data['AttentionName']);
            }
            elseif (\array_key_exists('AttentionName', $data) && $data['AttentionName'] === null) {
                $object->setAttentionName(null);
            }
            if (\array_key_exists('PhoneNumber', $data) && $data['PhoneNumber'] !== null) {
                $object->setPhoneNumber($data['PhoneNumber']);
                unset($data['PhoneNumber']);
            }
            elseif (\array_key_exists('PhoneNumber', $data) && $data['PhoneNumber'] === null) {
                $object->setPhoneNumber(null);
            }
            if (\array_key_exists('TaxIdentificationNumber', $data) && $data['TaxIdentificationNumber'] !== null) {
                $object->setTaxIdentificationNumber($data['TaxIdentificationNumber']);
                unset($data['TaxIdentificationNumber']);
            }
            elseif (\array_key_exists('TaxIdentificationNumber', $data) && $data['TaxIdentificationNumber'] === null) {
                $object->setTaxIdentificationNumber(null);
            }
            if (\array_key_exists('FaxNumber', $data) && $data['FaxNumber'] !== null) {
                $object->setFaxNumber($data['FaxNumber']);
                unset($data['FaxNumber']);
            }
            elseif (\array_key_exists('FaxNumber', $data) && $data['FaxNumber'] === null) {
                $object->setFaxNumber(null);
            }
            if (\array_key_exists('EMailAddress', $data) && $data['EMailAddress'] !== null) {
                $object->setEMailAddress($data['EMailAddress']);
                unset($data['EMailAddress']);
            }
            elseif (\array_key_exists('EMailAddress', $data) && $data['EMailAddress'] === null) {
                $object->setEMailAddress(null);
            }
            if (\array_key_exists('Address', $data) && $data['Address'] !== null) {
                $object->setAddress($this->denormalizer->denormalize($data['Address'], 'ShipStream\\Ups\\Api\\Model\\ManifestShipToAddress', 'json', $context));
                unset($data['Address']);
            }
            elseif (\array_key_exists('Address', $data) && $data['Address'] === null) {
                $object->setAddress(null);
            }
            if (\array_key_exists('LocationID', $data) && $data['LocationID'] !== null) {
                $object->setLocationID($data['LocationID']);
                unset($data['LocationID']);
            }
            elseif (\array_key_exists('LocationID', $data) && $data['LocationID'] === null) {
                $object->setLocationID(null);
            }
            if (\array_key_exists('ReceivingAddressName', $data) && $data['ReceivingAddressName'] !== null) {
                $object->setReceivingAddressName($data['ReceivingAddressName']);
                unset($data['ReceivingAddressName']);
            }
            elseif (\array_key_exists('ReceivingAddressName', $data) && $data['ReceivingAddressName'] === null) {
                $object->setReceivingAddressName(null);
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
            if ($object->isInitialized('shipperAssignedIdentificationNumber') && null !== $object->getShipperAssignedIdentificationNumber()) {
                $data['ShipperAssignedIdentificationNumber'] = $object->getShipperAssignedIdentificationNumber();
            }
            if ($object->isInitialized('companyName') && null !== $object->getCompanyName()) {
                $data['CompanyName'] = $object->getCompanyName();
            }
            if ($object->isInitialized('attentionName') && null !== $object->getAttentionName()) {
                $data['AttentionName'] = $object->getAttentionName();
            }
            if ($object->isInitialized('phoneNumber') && null !== $object->getPhoneNumber()) {
                $data['PhoneNumber'] = $object->getPhoneNumber();
            }
            if ($object->isInitialized('taxIdentificationNumber') && null !== $object->getTaxIdentificationNumber()) {
                $data['TaxIdentificationNumber'] = $object->getTaxIdentificationNumber();
            }
            if ($object->isInitialized('faxNumber') && null !== $object->getFaxNumber()) {
                $data['FaxNumber'] = $object->getFaxNumber();
            }
            if ($object->isInitialized('eMailAddress') && null !== $object->getEMailAddress()) {
                $data['EMailAddress'] = $object->getEMailAddress();
            }
            if ($object->isInitialized('address') && null !== $object->getAddress()) {
                $data['Address'] = $this->normalizer->normalize($object->getAddress(), 'json', $context);
            }
            if ($object->isInitialized('locationID') && null !== $object->getLocationID()) {
                $data['LocationID'] = $object->getLocationID();
            }
            if ($object->isInitialized('receivingAddressName') && null !== $object->getReceivingAddressName()) {
                $data['ReceivingAddressName'] = $object->getReceivingAddressName();
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
            return ['ShipStream\\Ups\\Api\\Model\\ManifestShipTo' => false];
        }
    }
}