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
class VoidShipmentRequestVoidShipmentNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \ShipStream\Ups\Api\Model\VoidShipmentRequestVoidShipment::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \ShipStream\Ups\Api\Model\VoidShipmentRequestVoidShipment::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \ShipStream\Ups\Api\Model\VoidShipmentRequestVoidShipment();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('ShippingHistoryUserKey', $data)) {
            $object->setShippingHistoryUserKey($data['ShippingHistoryUserKey']);
            unset($data['ShippingHistoryUserKey']);
        }
        if (\array_key_exists('ShipmentIdentificationNumber', $data)) {
            $object->setShipmentIdentificationNumber($data['ShipmentIdentificationNumber']);
            unset($data['ShipmentIdentificationNumber']);
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
        if ($data->isInitialized('shippingHistoryUserKey') && null !== $data->getShippingHistoryUserKey()) {
            $dataArray['ShippingHistoryUserKey'] = $data->getShippingHistoryUserKey();
        }
        $dataArray['ShipmentIdentificationNumber'] = $data->getShipmentIdentificationNumber();
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
        return [\ShipStream\Ups\Api\Model\VoidShipmentRequestVoidShipment::class => false];
    }
}