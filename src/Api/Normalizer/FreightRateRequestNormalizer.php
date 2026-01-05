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
class FreightRateRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \ShipStream\Ups\Api\Model\FreightRateRequest::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \ShipStream\Ups\Api\Model\FreightRateRequest::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \ShipStream\Ups\Api\Model\FreightRateRequest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('Request', $data)) {
            $object->setRequest($this->denormalizer->denormalize($data['Request'], \ShipStream\Ups\Api\Model\FreightRateRequestRequest::class, 'json', $context));
            unset($data['Request']);
        }
        if (\array_key_exists('ShipFrom', $data)) {
            $object->setShipFrom($this->denormalizer->denormalize($data['ShipFrom'], \ShipStream\Ups\Api\Model\FreightRateRequestShipFrom::class, 'json', $context));
            unset($data['ShipFrom']);
        }
        if (\array_key_exists('ShipTo', $data)) {
            $object->setShipTo($this->denormalizer->denormalize($data['ShipTo'], \ShipStream\Ups\Api\Model\FreightRateRequestShipTo::class, 'json', $context));
            unset($data['ShipTo']);
        }
        if (\array_key_exists('PaymentInformation', $data)) {
            $object->setPaymentInformation($this->denormalizer->denormalize($data['PaymentInformation'], \ShipStream\Ups\Api\Model\FreightRateRequestPaymentInformation::class, 'json', $context));
            unset($data['PaymentInformation']);
        }
        if (\array_key_exists('Service', $data)) {
            $object->setService($this->denormalizer->denormalize($data['Service'], \ShipStream\Ups\Api\Model\FreightRateRequestService::class, 'json', $context));
            unset($data['Service']);
        }
        if (\array_key_exists('HandlingUnitOne', $data)) {
            $object->setHandlingUnitOne($this->denormalizer->denormalize($data['HandlingUnitOne'], \ShipStream\Ups\Api\Model\FreightRateRequestHandlingUnitOne::class, 'json', $context));
            unset($data['HandlingUnitOne']);
        }
        if (\array_key_exists('HandlingUnitTwo', $data)) {
            $object->setHandlingUnitTwo($this->denormalizer->denormalize($data['HandlingUnitTwo'], \ShipStream\Ups\Api\Model\FreightRateRequestHandlingUnitTwo::class, 'json', $context));
            unset($data['HandlingUnitTwo']);
        }
        if (\array_key_exists('Commodity', $data)) {
            $values = [];
            foreach ($data['Commodity'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \ShipStream\Ups\Api\Model\FreightRateRequestCommodity::class, 'json', $context);
            }
            $object->setCommodity($values);
            unset($data['Commodity']);
        }
        if (\array_key_exists('ShipmentServiceOptions', $data)) {
            $object->setShipmentServiceOptions($this->denormalizer->denormalize($data['ShipmentServiceOptions'], \ShipStream\Ups\Api\Model\FreightRateRequestShipmentServiceOptions::class, 'json', $context));
            unset($data['ShipmentServiceOptions']);
        }
        if (\array_key_exists('PickupRequest', $data)) {
            $object->setPickupRequest($this->denormalizer->denormalize($data['PickupRequest'], \ShipStream\Ups\Api\Model\FreightRateRequestPickupRequest::class, 'json', $context));
            unset($data['PickupRequest']);
        }
        if (\array_key_exists('AlternateRateOptions', $data)) {
            $object->setAlternateRateOptions($this->denormalizer->denormalize($data['AlternateRateOptions'], \ShipStream\Ups\Api\Model\FreightRateRequestAlternateRateOptions::class, 'json', $context));
            unset($data['AlternateRateOptions']);
        }
        if (\array_key_exists('GFPOptions', $data)) {
            $object->setGFPOptions($this->denormalizer->denormalize($data['GFPOptions'], \ShipStream\Ups\Api\Model\FreightRateRequestGFPOptions::class, 'json', $context));
            unset($data['GFPOptions']);
        }
        if (\array_key_exists('HandlingUnitWeight', $data)) {
            $object->setHandlingUnitWeight($this->denormalizer->denormalize($data['HandlingUnitWeight'], \ShipStream\Ups\Api\Model\FreightRateRequestHandlingUnitWeight::class, 'json', $context));
            unset($data['HandlingUnitWeight']);
        }
        if (\array_key_exists('AdjustedWeightIndicator', $data)) {
            $object->setAdjustedWeightIndicator($data['AdjustedWeightIndicator']);
            unset($data['AdjustedWeightIndicator']);
        }
        if (\array_key_exists('TimeInTransitIndicator', $data)) {
            $object->setTimeInTransitIndicator($data['TimeInTransitIndicator']);
            unset($data['TimeInTransitIndicator']);
        }
        if (\array_key_exists('HandlingUnits', $data)) {
            $values_1 = [];
            foreach ($data['HandlingUnits'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \ShipStream\Ups\Api\Model\FreightRateRequestHandlingUnits::class, 'json', $context);
            }
            $object->setHandlingUnits($values_1);
            unset($data['HandlingUnits']);
        }
        if (\array_key_exists('AdjustedHeightIndicator', $data)) {
            $object->setAdjustedHeightIndicator($data['AdjustedHeightIndicator']);
            unset($data['AdjustedHeightIndicator']);
        }
        if (\array_key_exists('DensityEligibleIndicator', $data)) {
            $object->setDensityEligibleIndicator($data['DensityEligibleIndicator']);
            unset($data['DensityEligibleIndicator']);
        }
        if (\array_key_exists('QuoteNumberIndicator', $data)) {
            $object->setQuoteNumberIndicator($data['QuoteNumberIndicator']);
            unset($data['QuoteNumberIndicator']);
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
        $dataArray['Request'] = $this->normalizer->normalize($data->getRequest(), 'json', $context);
        $dataArray['ShipFrom'] = $this->normalizer->normalize($data->getShipFrom(), 'json', $context);
        $dataArray['ShipTo'] = $this->normalizer->normalize($data->getShipTo(), 'json', $context);
        $dataArray['PaymentInformation'] = $this->normalizer->normalize($data->getPaymentInformation(), 'json', $context);
        $dataArray['Service'] = $this->normalizer->normalize($data->getService(), 'json', $context);
        if ($data->isInitialized('handlingUnitOne') && null !== $data->getHandlingUnitOne()) {
            $dataArray['HandlingUnitOne'] = $this->normalizer->normalize($data->getHandlingUnitOne(), 'json', $context);
        }
        if ($data->isInitialized('handlingUnitTwo') && null !== $data->getHandlingUnitTwo()) {
            $dataArray['HandlingUnitTwo'] = $this->normalizer->normalize($data->getHandlingUnitTwo(), 'json', $context);
        }
        $values = [];
        foreach ($data->getCommodity() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $dataArray['Commodity'] = $values;
        if ($data->isInitialized('shipmentServiceOptions') && null !== $data->getShipmentServiceOptions()) {
            $dataArray['ShipmentServiceOptions'] = $this->normalizer->normalize($data->getShipmentServiceOptions(), 'json', $context);
        }
        if ($data->isInitialized('pickupRequest') && null !== $data->getPickupRequest()) {
            $dataArray['PickupRequest'] = $this->normalizer->normalize($data->getPickupRequest(), 'json', $context);
        }
        if ($data->isInitialized('alternateRateOptions') && null !== $data->getAlternateRateOptions()) {
            $dataArray['AlternateRateOptions'] = $this->normalizer->normalize($data->getAlternateRateOptions(), 'json', $context);
        }
        if ($data->isInitialized('gFPOptions') && null !== $data->getGFPOptions()) {
            $dataArray['GFPOptions'] = $this->normalizer->normalize($data->getGFPOptions(), 'json', $context);
        }
        if ($data->isInitialized('handlingUnitWeight') && null !== $data->getHandlingUnitWeight()) {
            $dataArray['HandlingUnitWeight'] = $this->normalizer->normalize($data->getHandlingUnitWeight(), 'json', $context);
        }
        if ($data->isInitialized('adjustedWeightIndicator') && null !== $data->getAdjustedWeightIndicator()) {
            $dataArray['AdjustedWeightIndicator'] = $data->getAdjustedWeightIndicator();
        }
        if ($data->isInitialized('timeInTransitIndicator') && null !== $data->getTimeInTransitIndicator()) {
            $dataArray['TimeInTransitIndicator'] = $data->getTimeInTransitIndicator();
        }
        if ($data->isInitialized('handlingUnits') && null !== $data->getHandlingUnits()) {
            $values_1 = [];
            foreach ($data->getHandlingUnits() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['HandlingUnits'] = $values_1;
        }
        if ($data->isInitialized('adjustedHeightIndicator') && null !== $data->getAdjustedHeightIndicator()) {
            $dataArray['AdjustedHeightIndicator'] = $data->getAdjustedHeightIndicator();
        }
        if ($data->isInitialized('densityEligibleIndicator') && null !== $data->getDensityEligibleIndicator()) {
            $dataArray['DensityEligibleIndicator'] = $data->getDensityEligibleIndicator();
        }
        if ($data->isInitialized('quoteNumberIndicator') && null !== $data->getQuoteNumberIndicator()) {
            $dataArray['QuoteNumberIndicator'] = $data->getQuoteNumberIndicator();
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
        return [\ShipStream\Ups\Api\Model\FreightRateRequest::class => false];
    }
}