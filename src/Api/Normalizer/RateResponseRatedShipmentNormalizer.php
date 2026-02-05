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
class RateResponseRatedShipmentNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \ShipStream\Ups\Api\Model\RateResponseRatedShipment::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \ShipStream\Ups\Api\Model\RateResponseRatedShipment::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \ShipStream\Ups\Api\Model\RateResponseRatedShipment();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('Disclaimer', $data)) {
            $values = [];
            foreach ($data['Disclaimer'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \ShipStream\Ups\Api\Model\RatedShipmentDisclaimer::class, 'json', $context);
            }
            $object->setDisclaimer($values);
            unset($data['Disclaimer']);
        }
        if (\array_key_exists('Service', $data)) {
            $object->setService($this->denormalizer->denormalize($data['Service'], \ShipStream\Ups\Api\Model\RatedShipmentService::class, 'json', $context));
            unset($data['Service']);
        }
        if (\array_key_exists('RateChart', $data)) {
            $object->setRateChart($data['RateChart']);
            unset($data['RateChart']);
        }
        if (\array_key_exists('RatedShipmentAlert', $data)) {
            $values_1 = [];
            foreach ($data['RatedShipmentAlert'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \ShipStream\Ups\Api\Model\RatedShipmentRatedShipmentAlert::class, 'json', $context);
            }
            $object->setRatedShipmentAlert($values_1);
            unset($data['RatedShipmentAlert']);
        }
        if (\array_key_exists('BillableWeightCalculationMethod', $data)) {
            $object->setBillableWeightCalculationMethod($data['BillableWeightCalculationMethod']);
            unset($data['BillableWeightCalculationMethod']);
        }
        if (\array_key_exists('RatingMethod', $data)) {
            $object->setRatingMethod($data['RatingMethod']);
            unset($data['RatingMethod']);
        }
        if (\array_key_exists('BillingWeight', $data)) {
            $object->setBillingWeight($this->denormalizer->denormalize($data['BillingWeight'], \ShipStream\Ups\Api\Model\RatedShipmentBillingWeight::class, 'json', $context));
            unset($data['BillingWeight']);
        }
        if (\array_key_exists('TransportationCharges', $data)) {
            $object->setTransportationCharges($this->denormalizer->denormalize($data['TransportationCharges'], \ShipStream\Ups\Api\Model\RatedShipmentTransportationCharges::class, 'json', $context));
            unset($data['TransportationCharges']);
        }
        if (\array_key_exists('BaseServiceCharge', $data)) {
            $object->setBaseServiceCharge($this->denormalizer->denormalize($data['BaseServiceCharge'], \ShipStream\Ups\Api\Model\RatedShipmentBaseServiceCharge::class, 'json', $context));
            unset($data['BaseServiceCharge']);
        }
        if (\array_key_exists('ItemizedCharges', $data)) {
            $values_2 = [];
            foreach ($data['ItemizedCharges'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \ShipStream\Ups\Api\Model\RatedShipmentItemizedCharges::class, 'json', $context);
            }
            $object->setItemizedCharges($values_2);
            unset($data['ItemizedCharges']);
        }
        if (\array_key_exists('FRSShipmentData', $data)) {
            $object->setFRSShipmentData($this->denormalizer->denormalize($data['FRSShipmentData'], \ShipStream\Ups\Api\Model\RatedShipmentFRSShipmentData::class, 'json', $context));
            unset($data['FRSShipmentData']);
        }
        if (\array_key_exists('ServiceOptionsCharges', $data)) {
            $object->setServiceOptionsCharges($this->denormalizer->denormalize($data['ServiceOptionsCharges'], \ShipStream\Ups\Api\Model\RatedShipmentServiceOptionsCharges::class, 'json', $context));
            unset($data['ServiceOptionsCharges']);
        }
        if (\array_key_exists('TaxCharges', $data)) {
            $values_3 = [];
            foreach ($data['TaxCharges'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, \ShipStream\Ups\Api\Model\RatedShipmentTaxCharges::class, 'json', $context);
            }
            $object->setTaxCharges($values_3);
            unset($data['TaxCharges']);
        }
        if (\array_key_exists('TotalCharges', $data)) {
            $object->setTotalCharges($this->denormalizer->denormalize($data['TotalCharges'], \ShipStream\Ups\Api\Model\RatedShipmentTotalCharges::class, 'json', $context));
            unset($data['TotalCharges']);
        }
        if (\array_key_exists('TotalChargesWithTaxes', $data)) {
            $object->setTotalChargesWithTaxes($this->denormalizer->denormalize($data['TotalChargesWithTaxes'], \ShipStream\Ups\Api\Model\RatedShipmentTotalChargesWithTaxes::class, 'json', $context));
            unset($data['TotalChargesWithTaxes']);
        }
        if (\array_key_exists('NegotiatedRateCharges', $data) && $data['NegotiatedRateCharges'] !== null) {
            $object->setNegotiatedRateCharges($this->denormalizer->denormalize($data['NegotiatedRateCharges'], \ShipStream\Ups\Api\Model\RatedShipmentNegotiatedRateCharges::class, 'json', $context));
            unset($data['NegotiatedRateCharges']);
        }
        elseif (\array_key_exists('NegotiatedRateCharges', $data) && $data['NegotiatedRateCharges'] === null) {
            $object->setNegotiatedRateCharges(null);
        }
        if (\array_key_exists('RatedPackage', $data)) {
            $values_4 = [];
            foreach ($data['RatedPackage'] as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, \ShipStream\Ups\Api\Model\RatedShipmentRatedPackage::class, 'json', $context);
            }
            $object->setRatedPackage($values_4);
            unset($data['RatedPackage']);
        }
        if (\array_key_exists('TimeInTransit', $data) && $data['TimeInTransit'] !== null) {
            $object->setTimeInTransit($this->denormalizer->denormalize($data['TimeInTransit'], \ShipStream\Ups\Api\Model\RatedShipmentTimeInTransit::class, 'json', $context));
            unset($data['TimeInTransit']);
        }
        elseif (\array_key_exists('TimeInTransit', $data) && $data['TimeInTransit'] === null) {
            $object->setTimeInTransit(null);
        }
        if (\array_key_exists('ScheduledDeliveryDate', $data)) {
            $object->setScheduledDeliveryDate($data['ScheduledDeliveryDate']);
            unset($data['ScheduledDeliveryDate']);
        }
        if (\array_key_exists('RoarRatedIndicator', $data)) {
            $object->setRoarRatedIndicator($data['RoarRatedIndicator']);
            unset($data['RoarRatedIndicator']);
        }
        foreach ($data as $key => $value_5) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_5;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('disclaimer') && null !== $data->getDisclaimer()) {
            $values = [];
            foreach ($data->getDisclaimer() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['Disclaimer'] = $values;
        }
        $dataArray['Service'] = $this->normalizer->normalize($data->getService(), 'json', $context);
        if ($data->isInitialized('rateChart') && null !== $data->getRateChart()) {
            $dataArray['RateChart'] = $data->getRateChart();
        }
        if ($data->isInitialized('ratedShipmentAlert') && null !== $data->getRatedShipmentAlert()) {
            $values_1 = [];
            foreach ($data->getRatedShipmentAlert() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['RatedShipmentAlert'] = $values_1;
        }
        if ($data->isInitialized('billableWeightCalculationMethod') && null !== $data->getBillableWeightCalculationMethod()) {
            $dataArray['BillableWeightCalculationMethod'] = $data->getBillableWeightCalculationMethod();
        }
        if ($data->isInitialized('ratingMethod') && null !== $data->getRatingMethod()) {
            $dataArray['RatingMethod'] = $data->getRatingMethod();
        }
        $dataArray['BillingWeight'] = $this->normalizer->normalize($data->getBillingWeight(), 'json', $context);
        $dataArray['TransportationCharges'] = $this->normalizer->normalize($data->getTransportationCharges(), 'json', $context);
        if ($data->isInitialized('baseServiceCharge') && null !== $data->getBaseServiceCharge()) {
            $dataArray['BaseServiceCharge'] = $this->normalizer->normalize($data->getBaseServiceCharge(), 'json', $context);
        }
        if ($data->isInitialized('itemizedCharges') && null !== $data->getItemizedCharges()) {
            $values_2 = [];
            foreach ($data->getItemizedCharges() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $dataArray['ItemizedCharges'] = $values_2;
        }
        if ($data->isInitialized('fRSShipmentData') && null !== $data->getFRSShipmentData()) {
            $dataArray['FRSShipmentData'] = $this->normalizer->normalize($data->getFRSShipmentData(), 'json', $context);
        }
        $dataArray['ServiceOptionsCharges'] = $this->normalizer->normalize($data->getServiceOptionsCharges(), 'json', $context);
        if ($data->isInitialized('taxCharges') && null !== $data->getTaxCharges()) {
            $values_3 = [];
            foreach ($data->getTaxCharges() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $dataArray['TaxCharges'] = $values_3;
        }
        $dataArray['TotalCharges'] = $this->normalizer->normalize($data->getTotalCharges(), 'json', $context);
        if ($data->isInitialized('totalChargesWithTaxes') && null !== $data->getTotalChargesWithTaxes()) {
            $dataArray['TotalChargesWithTaxes'] = $this->normalizer->normalize($data->getTotalChargesWithTaxes(), 'json', $context);
        }
        if ($data->isInitialized('negotiatedRateCharges')) {
            $dataArray['NegotiatedRateCharges'] = $this->normalizer->normalize($data->getNegotiatedRateCharges(), 'json', $context);
        }
        $values_4 = [];
        foreach ($data->getRatedPackage() as $value_4) {
            $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
        }
        $dataArray['RatedPackage'] = $values_4;
        if ($data->isInitialized('timeInTransit')) {
            $dataArray['TimeInTransit'] = $this->normalizer->normalize($data->getTimeInTransit(), 'json', $context);
        }
        if ($data->isInitialized('scheduledDeliveryDate') && null !== $data->getScheduledDeliveryDate()) {
            $dataArray['ScheduledDeliveryDate'] = $data->getScheduledDeliveryDate();
        }
        if ($data->isInitialized('roarRatedIndicator') && null !== $data->getRoarRatedIndicator()) {
            $dataArray['RoarRatedIndicator'] = $data->getRoarRatedIndicator();
        }
        foreach ($data as $key => $value_5) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_5;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\ShipStream\Ups\Api\Model\RateResponseRatedShipment::class => false];
    }
}