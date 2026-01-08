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
class ShipmentResultsPackageResultsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \ShipStream\Ups\Api\Model\ShipmentResultsPackageResults::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \ShipStream\Ups\Api\Model\ShipmentResultsPackageResults::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \ShipStream\Ups\Api\Model\ShipmentResultsPackageResults();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('TrackingNumber', $data)) {
            $object->setTrackingNumber($data['TrackingNumber']);
            unset($data['TrackingNumber']);
        }
        if (\array_key_exists('RateModifier', $data)) {
            $object->setRateModifier($this->denormalizer->denormalize($data['RateModifier'], \ShipStream\Ups\Api\Model\PackageResultsRateModifier::class, 'json', $context));
            unset($data['RateModifier']);
        }
        if (\array_key_exists('BaseServiceCharge', $data)) {
            $object->setBaseServiceCharge($this->denormalizer->denormalize($data['BaseServiceCharge'], \ShipStream\Ups\Api\Model\PackageResultsBaseServiceCharge::class, 'json', $context));
            unset($data['BaseServiceCharge']);
        }
        if (\array_key_exists('ServiceOptionsCharges', $data)) {
            $object->setServiceOptionsCharges($this->denormalizer->denormalize($data['ServiceOptionsCharges'], \ShipStream\Ups\Api\Model\PackageResultsServiceOptionsCharges::class, 'json', $context));
            unset($data['ServiceOptionsCharges']);
        }
        if (\array_key_exists('ShippingLabel', $data) && $data['ShippingLabel'] !== null) {
            $object->setShippingLabel($this->denormalizer->denormalize($data['ShippingLabel'], \ShipStream\Ups\Api\Model\PackageResultsShippingLabel::class, 'json', $context));
            unset($data['ShippingLabel']);
        }
        elseif (\array_key_exists('ShippingLabel', $data) && $data['ShippingLabel'] === null) {
            $object->setShippingLabel(null);
        }
        if (\array_key_exists('ShippingReceipt', $data)) {
            $object->setShippingReceipt($this->denormalizer->denormalize($data['ShippingReceipt'], \ShipStream\Ups\Api\Model\PackageResultsShippingReceipt::class, 'json', $context));
            unset($data['ShippingReceipt']);
        }
        if (\array_key_exists('USPSPICNumber', $data)) {
            $object->setUSPSPICNumber($data['USPSPICNumber']);
            unset($data['USPSPICNumber']);
        }
        if (\array_key_exists('CN22Number', $data)) {
            $object->setCN22Number($data['CN22Number']);
            unset($data['CN22Number']);
        }
        if (\array_key_exists('Accessorial', $data)) {
            $values = [];
            foreach ($data['Accessorial'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \ShipStream\Ups\Api\Model\PackageResultsAccessorial::class, 'json', $context);
            }
            $object->setAccessorial($values);
            unset($data['Accessorial']);
        }
        if (\array_key_exists('SimpleRate', $data)) {
            $object->setSimpleRate($this->denormalizer->denormalize($data['SimpleRate'], \ShipStream\Ups\Api\Model\PackageResultsSimpleRate::class, 'json', $context));
            unset($data['SimpleRate']);
        }
        if (\array_key_exists('Form', $data) && $data['Form'] !== null) {
            $object->setForm($this->denormalizer->denormalize($data['Form'], \ShipStream\Ups\Api\Model\PackageResultsForm::class, 'json', $context));
            unset($data['Form']);
        }
        elseif (\array_key_exists('Form', $data) && $data['Form'] === null) {
            $object->setForm(null);
        }
        if (\array_key_exists('ItemizedCharges', $data)) {
            $values_1 = [];
            foreach ($data['ItemizedCharges'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \ShipStream\Ups\Api\Model\PackageResultsItemizedCharges::class, 'json', $context);
            }
            $object->setItemizedCharges($values_1);
            unset($data['ItemizedCharges']);
        }
        if (\array_key_exists('NegotiatedCharges', $data)) {
            $object->setNegotiatedCharges($this->denormalizer->denormalize($data['NegotiatedCharges'], \ShipStream\Ups\Api\Model\PackageResultsNegotiatedCharges::class, 'json', $context));
            unset($data['NegotiatedCharges']);
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
        $dataArray['TrackingNumber'] = $data->getTrackingNumber();
        if ($data->isInitialized('rateModifier') && null !== $data->getRateModifier()) {
            $dataArray['RateModifier'] = $this->normalizer->normalize($data->getRateModifier(), 'json', $context);
        }
        if ($data->isInitialized('baseServiceCharge') && null !== $data->getBaseServiceCharge()) {
            $dataArray['BaseServiceCharge'] = $this->normalizer->normalize($data->getBaseServiceCharge(), 'json', $context);
        }
        if ($data->isInitialized('serviceOptionsCharges') && null !== $data->getServiceOptionsCharges()) {
            $dataArray['ServiceOptionsCharges'] = $this->normalizer->normalize($data->getServiceOptionsCharges(), 'json', $context);
        }
        if ($data->isInitialized('shippingLabel')) {
            $dataArray['ShippingLabel'] = $this->normalizer->normalize($data->getShippingLabel(), 'json', $context);
        }
        if ($data->isInitialized('shippingReceipt') && null !== $data->getShippingReceipt()) {
            $dataArray['ShippingReceipt'] = $this->normalizer->normalize($data->getShippingReceipt(), 'json', $context);
        }
        if ($data->isInitialized('uSPSPICNumber') && null !== $data->getUSPSPICNumber()) {
            $dataArray['USPSPICNumber'] = $data->getUSPSPICNumber();
        }
        if ($data->isInitialized('cN22Number') && null !== $data->getCN22Number()) {
            $dataArray['CN22Number'] = $data->getCN22Number();
        }
        if ($data->isInitialized('accessorial') && null !== $data->getAccessorial()) {
            $values = [];
            foreach ($data->getAccessorial() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['Accessorial'] = $values;
        }
        if ($data->isInitialized('simpleRate') && null !== $data->getSimpleRate()) {
            $dataArray['SimpleRate'] = $this->normalizer->normalize($data->getSimpleRate(), 'json', $context);
        }
        if ($data->isInitialized('form')) {
            $dataArray['Form'] = $this->normalizer->normalize($data->getForm(), 'json', $context);
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
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_2;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\ShipStream\Ups\Api\Model\ShipmentResultsPackageResults::class => false];
    }
}