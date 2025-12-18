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
class AcceptanceAuditPreCheckShipmentPackageNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \ShipStream\Ups\Api\Model\AcceptanceAuditPreCheckShipmentPackage::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \ShipStream\Ups\Api\Model\AcceptanceAuditPreCheckShipmentPackage::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \ShipStream\Ups\Api\Model\AcceptanceAuditPreCheckShipmentPackage();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('PackageIdentifier', $data)) {
            $object->setPackageIdentifier($data['PackageIdentifier']);
            unset($data['PackageIdentifier']);
        }
        if (\array_key_exists('PackageWeight', $data)) {
            $object->setPackageWeight($this->denormalizer->denormalize($data['PackageWeight'], \ShipStream\Ups\Api\Model\PackagePackageWeight::class, 'json', $context));
            unset($data['PackageWeight']);
        }
        if (\array_key_exists('QValue', $data)) {
            $object->setQValue($data['QValue']);
            unset($data['QValue']);
        }
        if (\array_key_exists('OverPackedIndicator', $data)) {
            $object->setOverPackedIndicator($data['OverPackedIndicator']);
            unset($data['OverPackedIndicator']);
        }
        if (\array_key_exists('TransportationMode', $data)) {
            $object->setTransportationMode($data['TransportationMode']);
            unset($data['TransportationMode']);
        }
        if (\array_key_exists('EmergencyPhone', $data)) {
            $object->setEmergencyPhone($data['EmergencyPhone']);
            unset($data['EmergencyPhone']);
        }
        if (\array_key_exists('EmergencyContact', $data)) {
            $object->setEmergencyContact($data['EmergencyContact']);
            unset($data['EmergencyContact']);
        }
        if (\array_key_exists('ChemicalRecord', $data)) {
            $values = [];
            foreach ($data['ChemicalRecord'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \ShipStream\Ups\Api\Model\PackageChemicalRecord::class, 'json', $context);
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
        $dataArray['PackageIdentifier'] = $data->getPackageIdentifier();
        $dataArray['PackageWeight'] = $this->normalizer->normalize($data->getPackageWeight(), 'json', $context);
        if ($data->isInitialized('qValue') && null !== $data->getQValue()) {
            $dataArray['QValue'] = $data->getQValue();
        }
        if ($data->isInitialized('overPackedIndicator') && null !== $data->getOverPackedIndicator()) {
            $dataArray['OverPackedIndicator'] = $data->getOverPackedIndicator();
        }
        if ($data->isInitialized('transportationMode') && null !== $data->getTransportationMode()) {
            $dataArray['TransportationMode'] = $data->getTransportationMode();
        }
        if ($data->isInitialized('emergencyPhone') && null !== $data->getEmergencyPhone()) {
            $dataArray['EmergencyPhone'] = $data->getEmergencyPhone();
        }
        if ($data->isInitialized('emergencyContact') && null !== $data->getEmergencyContact()) {
            $dataArray['EmergencyContact'] = $data->getEmergencyContact();
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
        return [\ShipStream\Ups\Api\Model\AcceptanceAuditPreCheckShipmentPackage::class => false];
    }
}