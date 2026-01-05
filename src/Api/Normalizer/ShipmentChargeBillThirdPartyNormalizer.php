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
class ShipmentChargeBillThirdPartyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \ShipStream\Ups\Api\Model\ShipmentChargeBillThirdParty::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \ShipStream\Ups\Api\Model\ShipmentChargeBillThirdParty::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \ShipStream\Ups\Api\Model\ShipmentChargeBillThirdParty();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('AccountNumber', $data)) {
            $object->setAccountNumber($data['AccountNumber']);
            unset($data['AccountNumber']);
        }
        if (\array_key_exists('CertifiedElectronicMail', $data)) {
            $object->setCertifiedElectronicMail($data['CertifiedElectronicMail']);
            unset($data['CertifiedElectronicMail']);
        }
        if (\array_key_exists('InterchangeSystemCode', $data)) {
            $object->setInterchangeSystemCode($data['InterchangeSystemCode']);
            unset($data['InterchangeSystemCode']);
        }
        if (\array_key_exists('Address', $data)) {
            $object->setAddress($this->denormalizer->denormalize($data['Address'], \ShipStream\Ups\Api\Model\BillThirdPartyAddress::class, 'json', $context));
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
        if ($data->isInitialized('accountNumber') && null !== $data->getAccountNumber()) {
            $dataArray['AccountNumber'] = $data->getAccountNumber();
        }
        if ($data->isInitialized('certifiedElectronicMail') && null !== $data->getCertifiedElectronicMail()) {
            $dataArray['CertifiedElectronicMail'] = $data->getCertifiedElectronicMail();
        }
        if ($data->isInitialized('interchangeSystemCode') && null !== $data->getInterchangeSystemCode()) {
            $dataArray['InterchangeSystemCode'] = $data->getInterchangeSystemCode();
        }
        $dataArray['Address'] = $this->normalizer->normalize($data->getAddress(), 'json', $context);
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\ShipStream\Ups\Api\Model\ShipmentChargeBillThirdParty::class => false];
    }
}