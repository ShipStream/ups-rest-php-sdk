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
class PickupPendingStatusResponsePendingStatusNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \ShipStream\Ups\Api\Model\PickupPendingStatusResponsePendingStatus::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \ShipStream\Ups\Api\Model\PickupPendingStatusResponsePendingStatus::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \ShipStream\Ups\Api\Model\PickupPendingStatusResponsePendingStatus();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('PickupType', $data)) {
            $object->setPickupType($data['PickupType']);
            unset($data['PickupType']);
        }
        if (\array_key_exists('ServiceDate', $data)) {
            $object->setServiceDate($data['ServiceDate']);
            unset($data['ServiceDate']);
        }
        if (\array_key_exists('PRN', $data)) {
            $object->setPRN($data['PRN']);
            unset($data['PRN']);
        }
        if (\array_key_exists('GWNStatusCode', $data)) {
            $object->setGWNStatusCode($data['GWNStatusCode']);
            unset($data['GWNStatusCode']);
        }
        if (\array_key_exists('OnCallStatusCode', $data)) {
            $object->setOnCallStatusCode($data['OnCallStatusCode']);
            unset($data['OnCallStatusCode']);
        }
        if (\array_key_exists('PickupStatusMessage', $data)) {
            $object->setPickupStatusMessage($data['PickupStatusMessage']);
            unset($data['PickupStatusMessage']);
        }
        if (\array_key_exists('BillingCode', $data)) {
            $object->setBillingCode($data['BillingCode']);
            unset($data['BillingCode']);
        }
        if (\array_key_exists('ContactName', $data)) {
            $object->setContactName($data['ContactName']);
            unset($data['ContactName']);
        }
        if (\array_key_exists('ReferenceNumber', $data)) {
            $object->setReferenceNumber($data['ReferenceNumber']);
            unset($data['ReferenceNumber']);
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
        $dataArray['PickupType'] = $data->getPickupType();
        $dataArray['ServiceDate'] = $data->getServiceDate();
        $dataArray['PRN'] = $data->getPRN();
        if ($data->isInitialized('gWNStatusCode') && null !== $data->getGWNStatusCode()) {
            $dataArray['GWNStatusCode'] = $data->getGWNStatusCode();
        }
        if ($data->isInitialized('onCallStatusCode') && null !== $data->getOnCallStatusCode()) {
            $dataArray['OnCallStatusCode'] = $data->getOnCallStatusCode();
        }
        $dataArray['PickupStatusMessage'] = $data->getPickupStatusMessage();
        if ($data->isInitialized('billingCode') && null !== $data->getBillingCode()) {
            $dataArray['BillingCode'] = $data->getBillingCode();
        }
        if ($data->isInitialized('contactName') && null !== $data->getContactName()) {
            $dataArray['ContactName'] = $data->getContactName();
        }
        if ($data->isInitialized('referenceNumber') && null !== $data->getReferenceNumber()) {
            $dataArray['ReferenceNumber'] = $data->getReferenceNumber();
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
        return [\ShipStream\Ups\Api\Model\PickupPendingStatusResponsePendingStatus::class => false];
    }
}