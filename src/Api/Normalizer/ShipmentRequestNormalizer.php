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
class ShipmentRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \ShipStream\Ups\Api\Model\ShipmentRequest::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \ShipStream\Ups\Api\Model\ShipmentRequest::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \ShipStream\Ups\Api\Model\ShipmentRequest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('Request', $data)) {
            $object->setRequest($this->denormalizer->denormalize($data['Request'], \ShipStream\Ups\Api\Model\ShipmentRequestRequest::class, 'json', $context));
            unset($data['Request']);
        }
        if (\array_key_exists('Shipment', $data)) {
            $object->setShipment($this->denormalizer->denormalize($data['Shipment'], \ShipStream\Ups\Api\Model\ShipmentRequestShipment::class, 'json', $context));
            unset($data['Shipment']);
        }
        if (\array_key_exists('LabelSpecification', $data)) {
            $object->setLabelSpecification($this->denormalizer->denormalize($data['LabelSpecification'], \ShipStream\Ups\Api\Model\ShipmentRequestLabelSpecification::class, 'json', $context));
            unset($data['LabelSpecification']);
        }
        if (\array_key_exists('ReceiptSpecification', $data)) {
            $object->setReceiptSpecification($this->denormalizer->denormalize($data['ReceiptSpecification'], \ShipStream\Ups\Api\Model\ShipmentRequestReceiptSpecification::class, 'json', $context));
            unset($data['ReceiptSpecification']);
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
        $dataArray['Request'] = $this->normalizer->normalize($data->getRequest(), 'json', $context);
        $dataArray['Shipment'] = $this->normalizer->normalize($data->getShipment(), 'json', $context);
        if ($data->isInitialized('labelSpecification') && null !== $data->getLabelSpecification()) {
            $dataArray['LabelSpecification'] = $this->normalizer->normalize($data->getLabelSpecification(), 'json', $context);
        }
        if ($data->isInitialized('receiptSpecification') && null !== $data->getReceiptSpecification()) {
            $dataArray['ReceiptSpecification'] = $this->normalizer->normalize($data->getReceiptSpecification(), 'json', $context);
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
        return [\ShipStream\Ups\Api\Model\ShipmentRequest::class => false];
    }
}