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
class TimeInTransitServiceSummaryNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \ShipStream\Ups\Api\Model\TimeInTransitServiceSummary::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \ShipStream\Ups\Api\Model\TimeInTransitServiceSummary::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \ShipStream\Ups\Api\Model\TimeInTransitServiceSummary();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('Service', $data)) {
            $object->setService($this->denormalizer->denormalize($data['Service'], \ShipStream\Ups\Api\Model\ServiceSummaryService::class, 'json', $context));
            unset($data['Service']);
        }
        if (\array_key_exists('GuaranteedIndicator', $data)) {
            $object->setGuaranteedIndicator($data['GuaranteedIndicator']);
            unset($data['GuaranteedIndicator']);
        }
        if (\array_key_exists('Disclaimer', $data)) {
            $object->setDisclaimer($data['Disclaimer']);
            unset($data['Disclaimer']);
        }
        if (\array_key_exists('EstimatedArrival', $data)) {
            $object->setEstimatedArrival($this->denormalizer->denormalize($data['EstimatedArrival'], \ShipStream\Ups\Api\Model\ServiceSummaryEstimatedArrival::class, 'json', $context));
            unset($data['EstimatedArrival']);
        }
        if (\array_key_exists('SaturdayDelivery', $data)) {
            $object->setSaturdayDelivery($data['SaturdayDelivery']);
            unset($data['SaturdayDelivery']);
        }
        if (\array_key_exists('SaturdayDeliveryDisclaimer', $data)) {
            $object->setSaturdayDeliveryDisclaimer($data['SaturdayDeliveryDisclaimer']);
            unset($data['SaturdayDeliveryDisclaimer']);
        }
        if (\array_key_exists('SundayDelivery', $data)) {
            $object->setSundayDelivery($data['SundayDelivery']);
            unset($data['SundayDelivery']);
        }
        if (\array_key_exists('SundayDeliveryDisclaimer', $data)) {
            $object->setSundayDeliveryDisclaimer($data['SundayDeliveryDisclaimer']);
            unset($data['SundayDeliveryDisclaimer']);
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
        $dataArray['Service'] = $this->normalizer->normalize($data->getService(), 'json', $context);
        if ($data->isInitialized('guaranteedIndicator') && null !== $data->getGuaranteedIndicator()) {
            $dataArray['GuaranteedIndicator'] = $data->getGuaranteedIndicator();
        }
        if ($data->isInitialized('disclaimer') && null !== $data->getDisclaimer()) {
            $dataArray['Disclaimer'] = $data->getDisclaimer();
        }
        $dataArray['EstimatedArrival'] = $this->normalizer->normalize($data->getEstimatedArrival(), 'json', $context);
        if ($data->isInitialized('saturdayDelivery') && null !== $data->getSaturdayDelivery()) {
            $dataArray['SaturdayDelivery'] = $data->getSaturdayDelivery();
        }
        if ($data->isInitialized('saturdayDeliveryDisclaimer') && null !== $data->getSaturdayDeliveryDisclaimer()) {
            $dataArray['SaturdayDeliveryDisclaimer'] = $data->getSaturdayDeliveryDisclaimer();
        }
        if ($data->isInitialized('sundayDelivery') && null !== $data->getSundayDelivery()) {
            $dataArray['SundayDelivery'] = $data->getSundayDelivery();
        }
        if ($data->isInitialized('sundayDeliveryDisclaimer') && null !== $data->getSundayDeliveryDisclaimer()) {
            $dataArray['SundayDeliveryDisclaimer'] = $data->getSundayDeliveryDisclaimer();
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
        return [\ShipStream\Ups\Api\Model\TimeInTransitServiceSummary::class => false];
    }
}