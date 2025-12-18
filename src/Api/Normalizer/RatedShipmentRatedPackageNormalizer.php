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
class RatedShipmentRatedPackageNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \ShipStream\Ups\Api\Model\RatedShipmentRatedPackage::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \ShipStream\Ups\Api\Model\RatedShipmentRatedPackage::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \ShipStream\Ups\Api\Model\RatedShipmentRatedPackage();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('BaseServiceCharge', $data)) {
            $object->setBaseServiceCharge($this->denormalizer->denormalize($data['BaseServiceCharge'], \ShipStream\Ups\Api\Model\RatedPackageBaseServiceCharge::class, 'json', $context));
            unset($data['BaseServiceCharge']);
        }
        if (\array_key_exists('TransportationCharges', $data)) {
            $object->setTransportationCharges($this->denormalizer->denormalize($data['TransportationCharges'], \ShipStream\Ups\Api\Model\RatedPackageTransportationCharges::class, 'json', $context));
            unset($data['TransportationCharges']);
        }
        if (\array_key_exists('ServiceOptionsCharges', $data)) {
            $object->setServiceOptionsCharges($this->denormalizer->denormalize($data['ServiceOptionsCharges'], \ShipStream\Ups\Api\Model\RatedPackageServiceOptionsCharges::class, 'json', $context));
            unset($data['ServiceOptionsCharges']);
        }
        if (\array_key_exists('TotalCharges', $data)) {
            $object->setTotalCharges($this->denormalizer->denormalize($data['TotalCharges'], \ShipStream\Ups\Api\Model\RatedPackageTotalCharges::class, 'json', $context));
            unset($data['TotalCharges']);
        }
        if (\array_key_exists('Weight', $data)) {
            $object->setWeight($data['Weight']);
            unset($data['Weight']);
        }
        if (\array_key_exists('BillingWeight', $data)) {
            $object->setBillingWeight($this->denormalizer->denormalize($data['BillingWeight'], \ShipStream\Ups\Api\Model\RatedPackageBillingWeight::class, 'json', $context));
            unset($data['BillingWeight']);
        }
        if (\array_key_exists('Accessorial', $data)) {
            $values = [];
            foreach ($data['Accessorial'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \ShipStream\Ups\Api\Model\RatedPackageAccessorial::class, 'json', $context);
            }
            $object->setAccessorial($values);
            unset($data['Accessorial']);
        }
        if (\array_key_exists('ItemizedCharges', $data)) {
            $values_1 = [];
            foreach ($data['ItemizedCharges'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \ShipStream\Ups\Api\Model\RatedPackageItemizedCharges::class, 'json', $context);
            }
            $object->setItemizedCharges($values_1);
            unset($data['ItemizedCharges']);
        }
        if (\array_key_exists('NegotiatedCharges', $data)) {
            $object->setNegotiatedCharges($this->denormalizer->denormalize($data['NegotiatedCharges'], \ShipStream\Ups\Api\Model\RatedPackageNegotiatedCharges::class, 'json', $context));
            unset($data['NegotiatedCharges']);
        }
        if (\array_key_exists('SimpleRate', $data)) {
            $object->setSimpleRate($this->denormalizer->denormalize($data['SimpleRate'], \ShipStream\Ups\Api\Model\RatedPackageSimpleRate::class, 'json', $context));
            unset($data['SimpleRate']);
        }
        if (\array_key_exists('RateModifier', $data)) {
            $values_2 = [];
            foreach ($data['RateModifier'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \ShipStream\Ups\Api\Model\RatedPackageRateModifier::class, 'json', $context);
            }
            $object->setRateModifier($values_2);
            unset($data['RateModifier']);
        }
        foreach ($data as $key => $value_3) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_3;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('baseServiceCharge') && null !== $data->getBaseServiceCharge()) {
            $dataArray['BaseServiceCharge'] = $this->normalizer->normalize($data->getBaseServiceCharge(), 'json', $context);
        }
        if ($data->isInitialized('transportationCharges') && null !== $data->getTransportationCharges()) {
            $dataArray['TransportationCharges'] = $this->normalizer->normalize($data->getTransportationCharges(), 'json', $context);
        }
        if ($data->isInitialized('serviceOptionsCharges') && null !== $data->getServiceOptionsCharges()) {
            $dataArray['ServiceOptionsCharges'] = $this->normalizer->normalize($data->getServiceOptionsCharges(), 'json', $context);
        }
        if ($data->isInitialized('totalCharges') && null !== $data->getTotalCharges()) {
            $dataArray['TotalCharges'] = $this->normalizer->normalize($data->getTotalCharges(), 'json', $context);
        }
        if ($data->isInitialized('weight') && null !== $data->getWeight()) {
            $dataArray['Weight'] = $data->getWeight();
        }
        if ($data->isInitialized('billingWeight') && null !== $data->getBillingWeight()) {
            $dataArray['BillingWeight'] = $this->normalizer->normalize($data->getBillingWeight(), 'json', $context);
        }
        if ($data->isInitialized('accessorial') && null !== $data->getAccessorial()) {
            $values = [];
            foreach ($data->getAccessorial() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['Accessorial'] = $values;
        }
        if ($data->isInitialized('itemizedCharges') && null !== $data->getItemizedCharges()) {
            $values_1 = [];
            foreach ($data->getItemizedCharges() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['ItemizedCharges'] = $values_1;
        }
        if ($data->isInitialized('negotiatedCharges') && null !== $data->getNegotiatedCharges()) {
            $dataArray['NegotiatedCharges'] = $this->normalizer->normalize($data->getNegotiatedCharges(), 'json', $context);
        }
        if ($data->isInitialized('simpleRate') && null !== $data->getSimpleRate()) {
            $dataArray['SimpleRate'] = $this->normalizer->normalize($data->getSimpleRate(), 'json', $context);
        }
        if ($data->isInitialized('rateModifier') && null !== $data->getRateModifier()) {
            $values_2 = [];
            foreach ($data->getRateModifier() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $dataArray['RateModifier'] = $values_2;
        }
        foreach ($data as $key => $value_3) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_3;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\ShipStream\Ups\Api\Model\RatedShipmentRatedPackage::class => false];
    }
}