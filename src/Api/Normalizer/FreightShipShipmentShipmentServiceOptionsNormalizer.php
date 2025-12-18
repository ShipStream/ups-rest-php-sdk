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
class FreightShipShipmentShipmentServiceOptionsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \ShipStream\Ups\Api\Model\FreightShipShipmentShipmentServiceOptions::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \ShipStream\Ups\Api\Model\FreightShipShipmentShipmentServiceOptions::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \ShipStream\Ups\Api\Model\FreightShipShipmentShipmentServiceOptions();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('EMailInformation', $data)) {
            $values = [];
            foreach ($data['EMailInformation'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \ShipStream\Ups\Api\Model\ShipmentServiceOptionsEMailInformation::class, 'json', $context);
            }
            $object->setEMailInformation($values);
            unset($data['EMailInformation']);
        }
        if (\array_key_exists('PickupOptions', $data)) {
            $object->setPickupOptions($this->denormalizer->denormalize($data['PickupOptions'], \ShipStream\Ups\Api\Model\FreightShipmentServiceOptionsPickupOptions::class, 'json', $context));
            unset($data['PickupOptions']);
        }
        if (\array_key_exists('DeliveryOptions', $data)) {
            $object->setDeliveryOptions($this->denormalizer->denormalize($data['DeliveryOptions'], \ShipStream\Ups\Api\Model\FreightShipmentServiceOptionsDeliveryOptions::class, 'json', $context));
            unset($data['DeliveryOptions']);
        }
        if (\array_key_exists('OverSeasLeg', $data)) {
            $object->setOverSeasLeg($this->denormalizer->denormalize($data['OverSeasLeg'], \ShipStream\Ups\Api\Model\ShipmentServiceOptionsOverSeasLeg::class, 'json', $context));
            unset($data['OverSeasLeg']);
        }
        if (\array_key_exists('COD', $data)) {
            $object->setCOD($this->denormalizer->denormalize($data['COD'], \ShipStream\Ups\Api\Model\FreightShipmentServiceOptionsCOD::class, 'json', $context));
            unset($data['COD']);
        }
        if (\array_key_exists('DangerousGoods', $data)) {
            $object->setDangerousGoods($this->denormalizer->denormalize($data['DangerousGoods'], \ShipStream\Ups\Api\Model\FreightShipShipmentServiceOptionsDangerousGoods::class, 'json', $context));
            unset($data['DangerousGoods']);
        }
        if (\array_key_exists('SortingAndSegregating', $data)) {
            $object->setSortingAndSegregating($this->denormalizer->denormalize($data['SortingAndSegregating'], \ShipStream\Ups\Api\Model\ShipmentServiceOptionsSortingAndSegregating::class, 'json', $context));
            unset($data['SortingAndSegregating']);
        }
        if (\array_key_exists('DeclaredValue', $data)) {
            $object->setDeclaredValue($this->denormalizer->denormalize($data['DeclaredValue'], \ShipStream\Ups\Api\Model\ShipmentServiceOptionsDeclaredValue::class, 'json', $context));
            unset($data['DeclaredValue']);
        }
        if (\array_key_exists('ExcessDeclaredValue', $data)) {
            $object->setExcessDeclaredValue($this->denormalizer->denormalize($data['ExcessDeclaredValue'], \ShipStream\Ups\Api\Model\ShipmentServiceOptionsExcessDeclaredValue::class, 'json', $context));
            unset($data['ExcessDeclaredValue']);
        }
        if (\array_key_exists('HandlingCharge', $data)) {
            $object->setHandlingCharge($this->denormalizer->denormalize($data['HandlingCharge'], \ShipStream\Ups\Api\Model\ShipmentServiceOptionsHandlingCharge::class, 'json', $context));
            unset($data['HandlingCharge']);
        }
        if (\array_key_exists('FreezableProtectionIndicator', $data)) {
            $object->setFreezableProtectionIndicator($data['FreezableProtectionIndicator']);
            unset($data['FreezableProtectionIndicator']);
        }
        if (\array_key_exists('ExtremeLengthIndicator', $data)) {
            $object->setExtremeLengthIndicator($data['ExtremeLengthIndicator']);
            unset($data['ExtremeLengthIndicator']);
        }
        if (\array_key_exists('LinearFeet', $data)) {
            $object->setLinearFeet($data['LinearFeet']);
            unset($data['LinearFeet']);
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
        if ($data->isInitialized('eMailInformation') && null !== $data->getEMailInformation()) {
            $values = [];
            foreach ($data->getEMailInformation() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['EMailInformation'] = $values;
        }
        if ($data->isInitialized('pickupOptions') && null !== $data->getPickupOptions()) {
            $dataArray['PickupOptions'] = $this->normalizer->normalize($data->getPickupOptions(), 'json', $context);
        }
        if ($data->isInitialized('deliveryOptions') && null !== $data->getDeliveryOptions()) {
            $dataArray['DeliveryOptions'] = $this->normalizer->normalize($data->getDeliveryOptions(), 'json', $context);
        }
        if ($data->isInitialized('overSeasLeg') && null !== $data->getOverSeasLeg()) {
            $dataArray['OverSeasLeg'] = $this->normalizer->normalize($data->getOverSeasLeg(), 'json', $context);
        }
        if ($data->isInitialized('cOD') && null !== $data->getCOD()) {
            $dataArray['COD'] = $this->normalizer->normalize($data->getCOD(), 'json', $context);
        }
        if ($data->isInitialized('dangerousGoods') && null !== $data->getDangerousGoods()) {
            $dataArray['DangerousGoods'] = $this->normalizer->normalize($data->getDangerousGoods(), 'json', $context);
        }
        if ($data->isInitialized('sortingAndSegregating') && null !== $data->getSortingAndSegregating()) {
            $dataArray['SortingAndSegregating'] = $this->normalizer->normalize($data->getSortingAndSegregating(), 'json', $context);
        }
        if ($data->isInitialized('declaredValue') && null !== $data->getDeclaredValue()) {
            $dataArray['DeclaredValue'] = $this->normalizer->normalize($data->getDeclaredValue(), 'json', $context);
        }
        if ($data->isInitialized('excessDeclaredValue') && null !== $data->getExcessDeclaredValue()) {
            $dataArray['ExcessDeclaredValue'] = $this->normalizer->normalize($data->getExcessDeclaredValue(), 'json', $context);
        }
        if ($data->isInitialized('handlingCharge') && null !== $data->getHandlingCharge()) {
            $dataArray['HandlingCharge'] = $this->normalizer->normalize($data->getHandlingCharge(), 'json', $context);
        }
        if ($data->isInitialized('freezableProtectionIndicator') && null !== $data->getFreezableProtectionIndicator()) {
            $dataArray['FreezableProtectionIndicator'] = $data->getFreezableProtectionIndicator();
        }
        if ($data->isInitialized('extremeLengthIndicator') && null !== $data->getExtremeLengthIndicator()) {
            $dataArray['ExtremeLengthIndicator'] = $data->getExtremeLengthIndicator();
        }
        if ($data->isInitialized('linearFeet') && null !== $data->getLinearFeet()) {
            $dataArray['LinearFeet'] = $data->getLinearFeet();
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
        return [\ShipStream\Ups\Api\Model\FreightShipShipmentShipmentServiceOptions::class => false];
    }
}