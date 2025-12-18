<?php

namespace ShipStream\Ups\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use ShipStream\Ups\Api\Runtime\Normalizer\CheckArray;
use ShipStream\Ups\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class ShipmentShipFromNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \ShipStream\Ups\Api\Model\ShipmentShipFrom::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \ShipStream\Ups\Api\Model\ShipmentShipFrom::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
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
            $object->setTaxIDType($this->denormalizer->denormalize($data['TaxIDType'], \ShipStream\Ups\Api\Model\ShipFromTaxIDType::class, 'json', $context));
            unset($data['TaxIDType']);
        }
        if (\array_key_exists('Phone', $data)) {
            $object->setPhone($this->denormalizer->denormalize($data['Phone'], \ShipStream\Ups\Api\Model\ShipFromPhone::class, 'json', $context));
            unset($data['Phone']);
        }
        if (\array_key_exists('FaxNumber', $data)) {
            $object->setFaxNumber($data['FaxNumber']);
            unset($data['FaxNumber']);
        }
        if (\array_key_exists('Address', $data)) {
            $object->setAddress($this->denormalizer->denormalize($data['Address'], \ShipStream\Ups\Api\Model\ShipFromAddress::class, 'json', $context));
            unset($data['Address']);
        }
        if (\array_key_exists('VendorInfo', $data)) {
            $object->setVendorInfo($this->denormalizer->denormalize($data['VendorInfo'], \ShipStream\Ups\Api\Model\ShipFromVendorInfo::class, 'json', $context));
            unset($data['VendorInfo']);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['Name'] = $data->getName();
        if ($data->isInitialized('attentionName') && null !== $data->getAttentionName()) {
            $dataArray['AttentionName'] = $data->getAttentionName();
        }
        if ($data->isInitialized('companyDisplayableName') && null !== $data->getCompanyDisplayableName()) {
            $dataArray['CompanyDisplayableName'] = $data->getCompanyDisplayableName();
        }
        if ($data->isInitialized('taxIdentificationNumber') && null !== $data->getTaxIdentificationNumber()) {
            $dataArray['TaxIdentificationNumber'] = $data->getTaxIdentificationNumber();
        }
        if ($data->isInitialized('taxIDType') && null !== $data->getTaxIDType()) {
            $dataArray['TaxIDType'] = $this->normalizer->normalize($data->getTaxIDType(), 'json', $context);
        }
        if ($data->isInitialized('phone') && null !== $data->getPhone()) {
            $dataArray['Phone'] = $this->normalizer->normalize($data->getPhone(), 'json', $context);
        }
        if ($data->isInitialized('faxNumber') && null !== $data->getFaxNumber()) {
            $dataArray['FaxNumber'] = $data->getFaxNumber();
        }
        $dataArray['Address'] = $this->normalizer->normalize($data->getAddress(), 'json', $context);
        if ($data->isInitialized('vendorInfo') && null !== $data->getVendorInfo()) {
            $dataArray['VendorInfo'] = $this->normalizer->normalize($data->getVendorInfo(), 'json', $context);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\ShipStream\Ups\Api\Model\ShipmentShipFrom::class => false];
    }
}