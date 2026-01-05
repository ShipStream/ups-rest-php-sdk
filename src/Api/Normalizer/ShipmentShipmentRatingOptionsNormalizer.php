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
class ShipmentShipmentRatingOptionsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \ShipStream\Ups\Api\Model\ShipmentShipmentRatingOptions::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \ShipStream\Ups\Api\Model\ShipmentShipmentRatingOptions::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \ShipStream\Ups\Api\Model\ShipmentShipmentRatingOptions();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('NegotiatedRatesIndicator', $data)) {
            $object->setNegotiatedRatesIndicator($data['NegotiatedRatesIndicator']);
            unset($data['NegotiatedRatesIndicator']);
        }
        if (\array_key_exists('FRSShipmentIndicator', $data)) {
            $object->setFRSShipmentIndicator($data['FRSShipmentIndicator']);
            unset($data['FRSShipmentIndicator']);
        }
        if (\array_key_exists('RateChartIndicator', $data)) {
            $object->setRateChartIndicator($data['RateChartIndicator']);
            unset($data['RateChartIndicator']);
        }
        if (\array_key_exists('TPFCNegotiatedRatesIndicator', $data)) {
            $object->setTPFCNegotiatedRatesIndicator($data['TPFCNegotiatedRatesIndicator']);
            unset($data['TPFCNegotiatedRatesIndicator']);
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
        if ($data->isInitialized('negotiatedRatesIndicator') && null !== $data->getNegotiatedRatesIndicator()) {
            $dataArray['NegotiatedRatesIndicator'] = $data->getNegotiatedRatesIndicator();
        }
        if ($data->isInitialized('fRSShipmentIndicator') && null !== $data->getFRSShipmentIndicator()) {
            $dataArray['FRSShipmentIndicator'] = $data->getFRSShipmentIndicator();
        }
        if ($data->isInitialized('rateChartIndicator') && null !== $data->getRateChartIndicator()) {
            $dataArray['RateChartIndicator'] = $data->getRateChartIndicator();
        }
        if ($data->isInitialized('tPFCNegotiatedRatesIndicator') && null !== $data->getTPFCNegotiatedRatesIndicator()) {
            $dataArray['TPFCNegotiatedRatesIndicator'] = $data->getTPFCNegotiatedRatesIndicator();
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
        return [\ShipStream\Ups\Api\Model\ShipmentShipmentRatingOptions::class => false];
    }
}