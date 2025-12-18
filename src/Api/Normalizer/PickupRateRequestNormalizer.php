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
class PickupRateRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \ShipStream\Ups\Api\Model\PickupRateRequest::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \ShipStream\Ups\Api\Model\PickupRateRequest::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \ShipStream\Ups\Api\Model\PickupRateRequest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('Request', $data)) {
            $object->setRequest($this->denormalizer->denormalize($data['Request'], \ShipStream\Ups\Api\Model\PickupRateRequestRequest::class, 'json', $context));
            unset($data['Request']);
        }
        if (\array_key_exists('ShipperAccount', $data)) {
            $object->setShipperAccount($this->denormalizer->denormalize($data['ShipperAccount'], \ShipStream\Ups\Api\Model\PickupRateRequestShipperAccount::class, 'json', $context));
            unset($data['ShipperAccount']);
        }
        if (\array_key_exists('PickupAddress', $data)) {
            $object->setPickupAddress($this->denormalizer->denormalize($data['PickupAddress'], \ShipStream\Ups\Api\Model\PickupRateRequestPickupAddress::class, 'json', $context));
            unset($data['PickupAddress']);
        }
        if (\array_key_exists('AlternateAddressIndicator', $data)) {
            $object->setAlternateAddressIndicator($data['AlternateAddressIndicator']);
            unset($data['AlternateAddressIndicator']);
        }
        if (\array_key_exists('ServiceDateOption', $data)) {
            $object->setServiceDateOption($data['ServiceDateOption']);
            unset($data['ServiceDateOption']);
        }
        if (\array_key_exists('PickupDateInfo', $data)) {
            $object->setPickupDateInfo($this->denormalizer->denormalize($data['PickupDateInfo'], \ShipStream\Ups\Api\Model\PickupRateRequestPickupDateInfo::class, 'json', $context));
            unset($data['PickupDateInfo']);
        }
        if (\array_key_exists('RateChartType', $data)) {
            $object->setRateChartType($data['RateChartType']);
            unset($data['RateChartType']);
        }
        if (\array_key_exists('TaxInformationIndicator', $data)) {
            $object->setTaxInformationIndicator($data['TaxInformationIndicator']);
            unset($data['TaxInformationIndicator']);
        }
        if (\array_key_exists('UserLevelDiscountIndicator', $data)) {
            $object->setUserLevelDiscountIndicator($data['UserLevelDiscountIndicator']);
            unset($data['UserLevelDiscountIndicator']);
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
        $dataArray['Request'] = $this->normalizer->normalize($data->getRequest(), 'json', $context);
        if ($data->isInitialized('shipperAccount') && null !== $data->getShipperAccount()) {
            $dataArray['ShipperAccount'] = $this->normalizer->normalize($data->getShipperAccount(), 'json', $context);
        }
        $dataArray['PickupAddress'] = $this->normalizer->normalize($data->getPickupAddress(), 'json', $context);
        $dataArray['AlternateAddressIndicator'] = $data->getAlternateAddressIndicator();
        $dataArray['ServiceDateOption'] = $data->getServiceDateOption();
        if ($data->isInitialized('pickupDateInfo') && null !== $data->getPickupDateInfo()) {
            $dataArray['PickupDateInfo'] = $this->normalizer->normalize($data->getPickupDateInfo(), 'json', $context);
        }
        if ($data->isInitialized('rateChartType') && null !== $data->getRateChartType()) {
            $dataArray['RateChartType'] = $data->getRateChartType();
        }
        if ($data->isInitialized('taxInformationIndicator') && null !== $data->getTaxInformationIndicator()) {
            $dataArray['TaxInformationIndicator'] = $data->getTaxInformationIndicator();
        }
        if ($data->isInitialized('userLevelDiscountIndicator') && null !== $data->getUserLevelDiscountIndicator()) {
            $dataArray['UserLevelDiscountIndicator'] = $data->getUserLevelDiscountIndicator();
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
        return [\ShipStream\Ups\Api\Model\PickupRateRequest::class => false];
    }
}