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
class ManifestShipperNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \ShipStream\Ups\Api\Model\ManifestShipper::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \ShipStream\Ups\Api\Model\ManifestShipper::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \ShipStream\Ups\Api\Model\ManifestShipper();
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
        if (\array_key_exists('TaxIdentificationNumber', $data)) {
            $object->setTaxIdentificationNumber($data['TaxIdentificationNumber']);
            unset($data['TaxIdentificationNumber']);
        }
        if (\array_key_exists('PhoneNumber', $data)) {
            $object->setPhoneNumber($data['PhoneNumber']);
            unset($data['PhoneNumber']);
        }
        if (\array_key_exists('FaxNumber', $data)) {
            $object->setFaxNumber($data['FaxNumber']);
            unset($data['FaxNumber']);
        }
        if (\array_key_exists('ShipperNumber', $data)) {
            $object->setShipperNumber($data['ShipperNumber']);
            unset($data['ShipperNumber']);
        }
        if (\array_key_exists('EMailAddress', $data)) {
            $object->setEMailAddress($data['EMailAddress']);
            unset($data['EMailAddress']);
        }
        if (\array_key_exists('Address', $data)) {
            $object->setAddress($this->denormalizer->denormalize($data['Address'], \ShipStream\Ups\Api\Model\ManifestShipperAddress::class, 'json', $context));
            unset($data['Address']);
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
        if ($data->isInitialized('taxIdentificationNumber') && null !== $data->getTaxIdentificationNumber()) {
            $dataArray['TaxIdentificationNumber'] = $data->getTaxIdentificationNumber();
        }
        if ($data->isInitialized('phoneNumber') && null !== $data->getPhoneNumber()) {
            $dataArray['PhoneNumber'] = $data->getPhoneNumber();
        }
        if ($data->isInitialized('faxNumber') && null !== $data->getFaxNumber()) {
            $dataArray['FaxNumber'] = $data->getFaxNumber();
        }
        if ($data->isInitialized('shipperNumber') && null !== $data->getShipperNumber()) {
            $dataArray['ShipperNumber'] = $data->getShipperNumber();
        }
        if ($data->isInitialized('eMailAddress') && null !== $data->getEMailAddress()) {
            $dataArray['EMailAddress'] = $data->getEMailAddress();
        }
        if ($data->isInitialized('address') && null !== $data->getAddress()) {
            $dataArray['Address'] = $this->normalizer->normalize($data->getAddress(), 'json', $context);
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
        return [\ShipStream\Ups\Api\Model\ManifestShipper::class => false];
    }
}