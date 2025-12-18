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
class ShipmentResultsShipmentChargesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \ShipStream\Ups\Api\Model\ShipmentResultsShipmentCharges::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \ShipStream\Ups\Api\Model\ShipmentResultsShipmentCharges::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \ShipStream\Ups\Api\Model\ShipmentResultsShipmentCharges();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('RateChart', $data)) {
            $object->setRateChart($data['RateChart']);
            unset($data['RateChart']);
        }
        if (\array_key_exists('BaseServiceCharge', $data)) {
            $object->setBaseServiceCharge($this->denormalizer->denormalize($data['BaseServiceCharge'], \ShipStream\Ups\Api\Model\ShipmentChargesBaseServiceCharge::class, 'json', $context));
            unset($data['BaseServiceCharge']);
        }
        if (\array_key_exists('TransportationCharges', $data)) {
            $object->setTransportationCharges($this->denormalizer->denormalize($data['TransportationCharges'], \ShipStream\Ups\Api\Model\ShipmentChargesTransportationCharges::class, 'json', $context));
            unset($data['TransportationCharges']);
        }
        if (\array_key_exists('ItemizedCharges', $data)) {
            $values = [];
            foreach ($data['ItemizedCharges'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \ShipStream\Ups\Api\Model\ShipmentChargesItemizedCharges::class, 'json', $context);
            }
            $object->setItemizedCharges($values);
            unset($data['ItemizedCharges']);
        }
        if (\array_key_exists('ServiceOptionsCharges', $data)) {
            $object->setServiceOptionsCharges($this->denormalizer->denormalize($data['ServiceOptionsCharges'], \ShipStream\Ups\Api\Model\ShipmentChargesServiceOptionsCharges::class, 'json', $context));
            unset($data['ServiceOptionsCharges']);
        }
        if (\array_key_exists('TaxCharges', $data)) {
            $values_1 = [];
            foreach ($data['TaxCharges'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \ShipStream\Ups\Api\Model\ShipmentChargesTaxCharges::class, 'json', $context);
            }
            $object->setTaxCharges($values_1);
            unset($data['TaxCharges']);
        }
        if (\array_key_exists('TotalCharges', $data)) {
            $object->setTotalCharges($this->denormalizer->denormalize($data['TotalCharges'], \ShipStream\Ups\Api\Model\ShipmentChargesTotalCharges::class, 'json', $context));
            unset($data['TotalCharges']);
        }
        if (\array_key_exists('TotalChargesWithTaxes', $data)) {
            $object->setTotalChargesWithTaxes($this->denormalizer->denormalize($data['TotalChargesWithTaxes'], \ShipStream\Ups\Api\Model\ShipmentChargesTotalChargesWithTaxes::class, 'json', $context));
            unset($data['TotalChargesWithTaxes']);
        }
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_2;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('rateChart') && null !== $data->getRateChart()) {
            $dataArray['RateChart'] = $data->getRateChart();
        }
        if ($data->isInitialized('baseServiceCharge') && null !== $data->getBaseServiceCharge()) {
            $dataArray['BaseServiceCharge'] = $this->normalizer->normalize($data->getBaseServiceCharge(), 'json', $context);
        }
        $dataArray['TransportationCharges'] = $this->normalizer->normalize($data->getTransportationCharges(), 'json', $context);
        if ($data->isInitialized('itemizedCharges') && null !== $data->getItemizedCharges()) {
            $values = [];
            foreach ($data->getItemizedCharges() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['ItemizedCharges'] = $values;
        }
        $dataArray['ServiceOptionsCharges'] = $this->normalizer->normalize($data->getServiceOptionsCharges(), 'json', $context);
        if ($data->isInitialized('taxCharges') && null !== $data->getTaxCharges()) {
            $values_1 = [];
            foreach ($data->getTaxCharges() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['TaxCharges'] = $values_1;
        }
        $dataArray['TotalCharges'] = $this->normalizer->normalize($data->getTotalCharges(), 'json', $context);
        if ($data->isInitialized('totalChargesWithTaxes') && null !== $data->getTotalChargesWithTaxes()) {
            $dataArray['TotalChargesWithTaxes'] = $this->normalizer->normalize($data->getTotalChargesWithTaxes(), 'json', $context);
        }
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_2;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\ShipStream\Ups\Api\Model\ShipmentResultsShipmentCharges::class => false];
    }
}