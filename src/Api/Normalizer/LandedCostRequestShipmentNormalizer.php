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
class LandedCostRequestShipmentNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \ShipStream\Ups\Api\Model\LandedCostRequestShipment::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \ShipStream\Ups\Api\Model\LandedCostRequestShipment::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \ShipStream\Ups\Api\Model\LandedCostRequestShipment();
        if (\array_key_exists('transportCost', $data) && \is_int($data['transportCost'])) {
            $data['transportCost'] = (double) $data['transportCost'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        if (\array_key_exists('importCountryCode', $data)) {
            $object->setImportCountryCode($data['importCountryCode']);
            unset($data['importCountryCode']);
        }
        if (\array_key_exists('importProvince', $data)) {
            $object->setImportProvince($data['importProvince']);
            unset($data['importProvince']);
        }
        if (\array_key_exists('shipDate', $data)) {
            $object->setShipDate($data['shipDate']);
            unset($data['shipDate']);
        }
        if (\array_key_exists('incoterms', $data)) {
            $object->setIncoterms($data['incoterms']);
            unset($data['incoterms']);
        }
        if (\array_key_exists('exportCountryCode', $data)) {
            $object->setExportCountryCode($data['exportCountryCode']);
            unset($data['exportCountryCode']);
        }
        if (\array_key_exists('transModes', $data)) {
            $object->setTransModes($data['transModes']);
            unset($data['transModes']);
        }
        if (\array_key_exists('transportCost', $data)) {
            $object->setTransportCost($data['transportCost']);
            unset($data['transportCost']);
        }
        if (\array_key_exists('shipmentType', $data)) {
            $object->setShipmentType($data['shipmentType']);
            unset($data['shipmentType']);
        }
        if (\array_key_exists('shipmentItems', $data)) {
            $values = [];
            foreach ($data['shipmentItems'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \ShipStream\Ups\Api\Model\RequestShipmentItems::class, 'json', $context);
            }
            $object->setShipmentItems($values);
            unset($data['shipmentItems']);
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
        $dataArray['id'] = $data->getId();
        $dataArray['importCountryCode'] = $data->getImportCountryCode();
        if ($data->isInitialized('importProvince') && null !== $data->getImportProvince()) {
            $dataArray['importProvince'] = $data->getImportProvince();
        }
        if ($data->isInitialized('shipDate') && null !== $data->getShipDate()) {
            $dataArray['shipDate'] = $data->getShipDate();
        }
        if ($data->isInitialized('incoterms') && null !== $data->getIncoterms()) {
            $dataArray['incoterms'] = $data->getIncoterms();
        }
        $dataArray['exportCountryCode'] = $data->getExportCountryCode();
        if ($data->isInitialized('transModes') && null !== $data->getTransModes()) {
            $dataArray['transModes'] = $data->getTransModes();
        }
        if ($data->isInitialized('transportCost') && null !== $data->getTransportCost()) {
            $dataArray['transportCost'] = $data->getTransportCost();
        }
        if ($data->isInitialized('shipmentType') && null !== $data->getShipmentType()) {
            $dataArray['shipmentType'] = $data->getShipmentType();
        }
        $values = [];
        foreach ($data->getShipmentItems() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $dataArray['shipmentItems'] = $values;
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_1;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\ShipStream\Ups\Api\Model\LandedCostRequestShipment::class => false];
    }
}