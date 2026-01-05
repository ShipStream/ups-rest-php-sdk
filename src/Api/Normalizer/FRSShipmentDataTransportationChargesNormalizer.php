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
class FRSShipmentDataTransportationChargesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \ShipStream\Ups\Api\Model\FRSShipmentDataTransportationCharges::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \ShipStream\Ups\Api\Model\FRSShipmentDataTransportationCharges::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \ShipStream\Ups\Api\Model\FRSShipmentDataTransportationCharges();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('GrossCharge', $data)) {
            $object->setGrossCharge($this->denormalizer->denormalize($data['GrossCharge'], \ShipStream\Ups\Api\Model\TransportationChargesGrossCharge::class, 'json', $context));
            unset($data['GrossCharge']);
        }
        if (\array_key_exists('DiscountAmount', $data)) {
            $object->setDiscountAmount($this->denormalizer->denormalize($data['DiscountAmount'], \ShipStream\Ups\Api\Model\TransportationChargesDiscountAmount::class, 'json', $context));
            unset($data['DiscountAmount']);
        }
        if (\array_key_exists('DiscountPercentage', $data)) {
            $object->setDiscountPercentage($data['DiscountPercentage']);
            unset($data['DiscountPercentage']);
        }
        if (\array_key_exists('NetCharge', $data)) {
            $object->setNetCharge($this->denormalizer->denormalize($data['NetCharge'], \ShipStream\Ups\Api\Model\TransportationChargesNetCharge::class, 'json', $context));
            unset($data['NetCharge']);
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
        $dataArray['GrossCharge'] = $this->normalizer->normalize($data->getGrossCharge(), 'json', $context);
        $dataArray['DiscountAmount'] = $this->normalizer->normalize($data->getDiscountAmount(), 'json', $context);
        $dataArray['DiscountPercentage'] = $data->getDiscountPercentage();
        $dataArray['NetCharge'] = $this->normalizer->normalize($data->getNetCharge(), 'json', $context);
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\ShipStream\Ups\Api\Model\FRSShipmentDataTransportationCharges::class => false];
    }
}