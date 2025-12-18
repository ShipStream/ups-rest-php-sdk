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
class PackageResultsChemicalRecordResultsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \ShipStream\Ups\Api\Model\PackageResultsChemicalRecordResults::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \ShipStream\Ups\Api\Model\PackageResultsChemicalRecordResults::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \ShipStream\Ups\Api\Model\PackageResultsChemicalRecordResults();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('ChemicalRecordIdentifier', $data)) {
            $object->setChemicalRecordIdentifier($data['ChemicalRecordIdentifier']);
            unset($data['ChemicalRecordIdentifier']);
        }
        if (\array_key_exists('ADRPoints', $data)) {
            $object->setADRPoints($data['ADRPoints']);
            unset($data['ADRPoints']);
        }
        if (\array_key_exists('TransportCategory', $data)) {
            $object->setTransportCategory($data['TransportCategory']);
            unset($data['TransportCategory']);
        }
        if (\array_key_exists('TunnelRestrictionCode', $data)) {
            $object->setTunnelRestrictionCode($data['TunnelRestrictionCode']);
            unset($data['TunnelRestrictionCode']);
        }
        if (\array_key_exists('ADRUnits', $data)) {
            $object->setADRUnits($data['ADRUnits']);
            unset($data['ADRUnits']);
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
        $dataArray['ChemicalRecordIdentifier'] = $data->getChemicalRecordIdentifier();
        if ($data->isInitialized('aDRPoints') && null !== $data->getADRPoints()) {
            $dataArray['ADRPoints'] = $data->getADRPoints();
        }
        if ($data->isInitialized('transportCategory') && null !== $data->getTransportCategory()) {
            $dataArray['TransportCategory'] = $data->getTransportCategory();
        }
        if ($data->isInitialized('tunnelRestrictionCode') && null !== $data->getTunnelRestrictionCode()) {
            $dataArray['TunnelRestrictionCode'] = $data->getTunnelRestrictionCode();
        }
        if ($data->isInitialized('aDRUnits') && null !== $data->getADRUnits()) {
            $dataArray['ADRUnits'] = $data->getADRUnits();
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
        return [\ShipStream\Ups\Api\Model\PackageResultsChemicalRecordResults::class => false];
    }
}