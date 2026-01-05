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
class PaymentInformationShipmentChargeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \ShipStream\Ups\Api\Model\PaymentInformationShipmentCharge::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \ShipStream\Ups\Api\Model\PaymentInformationShipmentCharge::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \ShipStream\Ups\Api\Model\PaymentInformationShipmentCharge();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('Type', $data)) {
            $object->setType($data['Type']);
            unset($data['Type']);
        }
        if (\array_key_exists('BillShipper', $data)) {
            $object->setBillShipper($this->denormalizer->denormalize($data['BillShipper'], \ShipStream\Ups\Api\Model\ShipmentChargeBillShipper::class, 'json', $context));
            unset($data['BillShipper']);
        }
        if (\array_key_exists('BillReceiver', $data)) {
            $object->setBillReceiver($this->denormalizer->denormalize($data['BillReceiver'], \ShipStream\Ups\Api\Model\ShipmentChargeBillReceiver::class, 'json', $context));
            unset($data['BillReceiver']);
        }
        if (\array_key_exists('BillThirdParty', $data)) {
            $object->setBillThirdParty($this->denormalizer->denormalize($data['BillThirdParty'], \ShipStream\Ups\Api\Model\ShipmentChargeBillThirdParty::class, 'json', $context));
            unset($data['BillThirdParty']);
        }
        if (\array_key_exists('ConsigneeBilledIndicator', $data)) {
            $object->setConsigneeBilledIndicator($data['ConsigneeBilledIndicator']);
            unset($data['ConsigneeBilledIndicator']);
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
        $dataArray['Type'] = $data->getType();
        if ($data->isInitialized('billShipper') && null !== $data->getBillShipper()) {
            $dataArray['BillShipper'] = $this->normalizer->normalize($data->getBillShipper(), 'json', $context);
        }
        if ($data->isInitialized('billReceiver') && null !== $data->getBillReceiver()) {
            $dataArray['BillReceiver'] = $this->normalizer->normalize($data->getBillReceiver(), 'json', $context);
        }
        if ($data->isInitialized('billThirdParty') && null !== $data->getBillThirdParty()) {
            $dataArray['BillThirdParty'] = $this->normalizer->normalize($data->getBillThirdParty(), 'json', $context);
        }
        if ($data->isInitialized('consigneeBilledIndicator') && null !== $data->getConsigneeBilledIndicator()) {
            $dataArray['ConsigneeBilledIndicator'] = $data->getConsigneeBilledIndicator();
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
        return [\ShipStream\Ups\Api\Model\PaymentInformationShipmentCharge::class => false];
    }
}