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
class ShipmentResultsFRSShipmentDataNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \ShipStream\Ups\Api\Model\ShipmentResultsFRSShipmentData::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \ShipStream\Ups\Api\Model\ShipmentResultsFRSShipmentData::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \ShipStream\Ups\Api\Model\ShipmentResultsFRSShipmentData();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('TransportationCharges', $data)) {
            $object->setTransportationCharges($this->denormalizer->denormalize($data['TransportationCharges'], \ShipStream\Ups\Api\Model\FRSShipmentDataTransportationCharges::class, 'json', $context));
            unset($data['TransportationCharges']);
        }
        if (\array_key_exists('FreightDensityRate', $data)) {
            $object->setFreightDensityRate($this->denormalizer->denormalize($data['FreightDensityRate'], \ShipStream\Ups\Api\Model\FRSShipmentDataFreightDensityRate::class, 'json', $context));
            unset($data['FreightDensityRate']);
        }
        if (\array_key_exists('HandlingUnits', $data)) {
            $values = [];
            foreach ($data['HandlingUnits'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \ShipStream\Ups\Api\Model\FRSShipmentDataHandlingUnits::class, 'json', $context);
            }
            $object->setHandlingUnits($values);
            unset($data['HandlingUnits']);
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
        $dataArray['TransportationCharges'] = $this->normalizer->normalize($data->getTransportationCharges(), 'json', $context);
        if ($data->isInitialized('freightDensityRate') && null !== $data->getFreightDensityRate()) {
            $dataArray['FreightDensityRate'] = $this->normalizer->normalize($data->getFreightDensityRate(), 'json', $context);
        }
        if ($data->isInitialized('handlingUnits') && null !== $data->getHandlingUnits()) {
            $values = [];
            foreach ($data->getHandlingUnits() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['HandlingUnits'] = $values;
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
        return [\ShipStream\Ups\Api\Model\ShipmentResultsFRSShipmentData::class => false];
    }
}