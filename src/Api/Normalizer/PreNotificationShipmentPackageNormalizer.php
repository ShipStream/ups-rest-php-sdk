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
class PreNotificationShipmentPackageNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \ShipStream\Ups\Api\Model\PreNotificationShipmentPackage::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \ShipStream\Ups\Api\Model\PreNotificationShipmentPackage::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \ShipStream\Ups\Api\Model\PreNotificationShipmentPackage();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('TrackingNumber', $data)) {
            $object->setTrackingNumber($data['TrackingNumber']);
            unset($data['TrackingNumber']);
        }
        if (\array_key_exists('PackageWeight', $data)) {
            $object->setPackageWeight($this->denormalizer->denormalize($data['PackageWeight'], \ShipStream\Ups\Api\Model\PackagePackageWeight::class, 'json', $context));
            unset($data['PackageWeight']);
        }
        if (\array_key_exists('TransportationMode', $data)) {
            $object->setTransportationMode($data['TransportationMode']);
            unset($data['TransportationMode']);
        }
        if (\array_key_exists('VoidIndicator', $data)) {
            $object->setVoidIndicator($data['VoidIndicator']);
            unset($data['VoidIndicator']);
        }
        if (\array_key_exists('PackagePoints', $data)) {
            $object->setPackagePoints($data['PackagePoints']);
            unset($data['PackagePoints']);
        }
        if (\array_key_exists('ChemicalRecord', $data)) {
            $values = [];
            foreach ($data['ChemicalRecord'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \ShipStream\Ups\Api\Model\PreNotificationPackageChemicalRecord::class, 'json', $context);
            }
            $object->setChemicalRecord($values);
            unset($data['ChemicalRecord']);
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
        $dataArray['TrackingNumber'] = $data->getTrackingNumber();
        $dataArray['PackageWeight'] = $this->normalizer->normalize($data->getPackageWeight(), 'json', $context);
        if ($data->isInitialized('transportationMode') && null !== $data->getTransportationMode()) {
            $dataArray['TransportationMode'] = $data->getTransportationMode();
        }
        if ($data->isInitialized('voidIndicator') && null !== $data->getVoidIndicator()) {
            $dataArray['VoidIndicator'] = $data->getVoidIndicator();
        }
        if ($data->isInitialized('packagePoints') && null !== $data->getPackagePoints()) {
            $dataArray['PackagePoints'] = $data->getPackagePoints();
        }
        $values = [];
        foreach ($data->getChemicalRecord() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $dataArray['ChemicalRecord'] = $values;
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_1;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\ShipStream\Ups\Api\Model\PreNotificationShipmentPackage::class => false];
    }
}