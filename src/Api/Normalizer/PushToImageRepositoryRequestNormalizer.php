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
class PushToImageRepositoryRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \ShipStream\Ups\Api\Model\PushToImageRepositoryRequest::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \ShipStream\Ups\Api\Model\PushToImageRepositoryRequest::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \ShipStream\Ups\Api\Model\PushToImageRepositoryRequest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('Request', $data)) {
            $object->setRequest($this->denormalizer->denormalize($data['Request'], \ShipStream\Ups\Api\Model\PushToImageRepositoryRequestRequest::class, 'json', $context));
            unset($data['Request']);
        }
        if (\array_key_exists('ShipperNumber', $data)) {
            $object->setShipperNumber($data['ShipperNumber']);
            unset($data['ShipperNumber']);
        }
        if (\array_key_exists('FormsHistoryDocumentID', $data)) {
            $object->setFormsHistoryDocumentID($this->denormalizer->denormalize($data['FormsHistoryDocumentID'], \ShipStream\Ups\Api\Model\PushToImageRepositoryRequestFormsHistoryDocumentID::class, 'json', $context));
            unset($data['FormsHistoryDocumentID']);
        }
        if (\array_key_exists('FormsGroupID', $data)) {
            $object->setFormsGroupID($data['FormsGroupID']);
            unset($data['FormsGroupID']);
        }
        if (\array_key_exists('ShipmentIdentifier', $data)) {
            $object->setShipmentIdentifier($data['ShipmentIdentifier']);
            unset($data['ShipmentIdentifier']);
        }
        if (\array_key_exists('ShipmentDateAndTime', $data)) {
            $object->setShipmentDateAndTime($data['ShipmentDateAndTime']);
            unset($data['ShipmentDateAndTime']);
        }
        if (\array_key_exists('ShipmentType', $data)) {
            $object->setShipmentType($data['ShipmentType']);
            unset($data['ShipmentType']);
        }
        if (\array_key_exists('PRQConfirmationNumber', $data)) {
            $object->setPRQConfirmationNumber($data['PRQConfirmationNumber']);
            unset($data['PRQConfirmationNumber']);
        }
        if (\array_key_exists('TrackingNumber', $data)) {
            $values = [];
            foreach ($data['TrackingNumber'] as $value) {
                $values[] = $value;
            }
            $object->setTrackingNumber($values);
            unset($data['TrackingNumber']);
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_1;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['Request'] = $this->normalizer->normalize($data->getRequest(), 'json', $context);
        $dataArray['ShipperNumber'] = $data->getShipperNumber();
        $dataArray['FormsHistoryDocumentID'] = $this->normalizer->normalize($data->getFormsHistoryDocumentID(), 'json', $context);
        if ($data->isInitialized('formsGroupID') && null !== $data->getFormsGroupID()) {
            $dataArray['FormsGroupID'] = $data->getFormsGroupID();
        }
        $dataArray['ShipmentIdentifier'] = $data->getShipmentIdentifier();
        if ($data->isInitialized('shipmentDateAndTime') && null !== $data->getShipmentDateAndTime()) {
            $dataArray['ShipmentDateAndTime'] = $data->getShipmentDateAndTime();
        }
        $dataArray['ShipmentType'] = $data->getShipmentType();
        if ($data->isInitialized('pRQConfirmationNumber') && null !== $data->getPRQConfirmationNumber()) {
            $dataArray['PRQConfirmationNumber'] = $data->getPRQConfirmationNumber();
        }
        if ($data->isInitialized('trackingNumber') && null !== $data->getTrackingNumber()) {
            $values = [];
            foreach ($data->getTrackingNumber() as $value) {
                $values[] = $value;
            }
            $dataArray['TrackingNumber'] = $values;
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_1;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\ShipStream\Ups\Api\Model\PushToImageRepositoryRequest::class => false];
    }
}