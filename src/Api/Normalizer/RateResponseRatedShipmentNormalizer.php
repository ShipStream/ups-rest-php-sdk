<?php

namespace ShipStream\Ups\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use ShipStream\Ups\Api\Runtime\Normalizer\CheckArray;
use ShipStream\Ups\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\HttpKernel\Kernel;
if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class RateResponseRatedShipmentNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\RateResponseRatedShipment';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\RateResponseRatedShipment';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
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
            if (\array_key_exists('Disclaimer', $data) && $data['Disclaimer'] !== null) {
                $values = [];
                foreach ($data['Disclaimer'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'ShipStream\\Ups\\Api\\Model\\RatedShipmentDisclaimer', 'json', $context);
                }
                $object->setDisclaimer($values);
                unset($data['Disclaimer']);
            }
            elseif (\array_key_exists('Disclaimer', $data) && $data['Disclaimer'] === null) {
                $object->setDisclaimer(null);
            }
            if (\array_key_exists('Service', $data) && $data['Service'] !== null) {
                $object->setService($this->denormalizer->denormalize($data['Service'], 'ShipStream\\Ups\\Api\\Model\\RatedShipmentService', 'json', $context));
                unset($data['Service']);
            }
            elseif (\array_key_exists('Service', $data) && $data['Service'] === null) {
                $object->setService(null);
            }
            if (\array_key_exists('RateChart', $data) && $data['RateChart'] !== null) {
                $object->setRateChart($data['RateChart']);
                unset($data['RateChart']);
            }
            elseif (\array_key_exists('RateChart', $data) && $data['RateChart'] === null) {
                $object->setRateChart(null);
            }
            if (\array_key_exists('RatedShipmentAlert', $data) && $data['RatedShipmentAlert'] !== null) {
                $values_1 = [];
                foreach ($data['RatedShipmentAlert'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'ShipStream\\Ups\\Api\\Model\\RatedShipmentRatedShipmentAlert', 'json', $context);
                }
                $object->setRatedShipmentAlert($values_1);
                unset($data['RatedShipmentAlert']);
            }
            elseif (\array_key_exists('RatedShipmentAlert', $data) && $data['RatedShipmentAlert'] === null) {
                $object->setRatedShipmentAlert(null);
            }
            if (\array_key_exists('BillableWeightCalculationMethod', $data) && $data['BillableWeightCalculationMethod'] !== null) {
                $object->setBillableWeightCalculationMethod($data['BillableWeightCalculationMethod']);
                unset($data['BillableWeightCalculationMethod']);
            }
            elseif (\array_key_exists('BillableWeightCalculationMethod', $data) && $data['BillableWeightCalculationMethod'] === null) {
                $object->setBillableWeightCalculationMethod(null);
            }
            if (\array_key_exists('RatingMethod', $data) && $data['RatingMethod'] !== null) {
                $object->setRatingMethod($data['RatingMethod']);
                unset($data['RatingMethod']);
            }
            elseif (\array_key_exists('RatingMethod', $data) && $data['RatingMethod'] === null) {
                $object->setRatingMethod(null);
            }
            if (\array_key_exists('BillingWeight', $data) && $data['BillingWeight'] !== null) {
                $object->setBillingWeight($this->denormalizer->denormalize($data['BillingWeight'], 'ShipStream\\Ups\\Api\\Model\\RatedShipmentBillingWeight', 'json', $context));
                unset($data['BillingWeight']);
            }
            elseif (\array_key_exists('BillingWeight', $data) && $data['BillingWeight'] === null) {
                $object->setBillingWeight(null);
            }
            if (\array_key_exists('TransportationCharges', $data) && $data['TransportationCharges'] !== null) {
                $object->setTransportationCharges($this->denormalizer->denormalize($data['TransportationCharges'], 'ShipStream\\Ups\\Api\\Model\\RatedShipmentTransportationCharges', 'json', $context));
                unset($data['TransportationCharges']);
            }
            elseif (\array_key_exists('TransportationCharges', $data) && $data['TransportationCharges'] === null) {
                $object->setTransportationCharges(null);
            }
            if (\array_key_exists('BaseServiceCharge', $data) && $data['BaseServiceCharge'] !== null) {
                $object->setBaseServiceCharge($this->denormalizer->denormalize($data['BaseServiceCharge'], 'ShipStream\\Ups\\Api\\Model\\RatedShipmentBaseServiceCharge', 'json', $context));
                unset($data['BaseServiceCharge']);
            }
            elseif (\array_key_exists('BaseServiceCharge', $data) && $data['BaseServiceCharge'] === null) {
                $object->setBaseServiceCharge(null);
            }
            if (\array_key_exists('ItemizedCharges', $data) && $data['ItemizedCharges'] !== null) {
                $values_2 = [];
                foreach ($data['ItemizedCharges'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, 'ShipStream\\Ups\\Api\\Model\\RatedShipmentItemizedCharges', 'json', $context);
                }
                $object->setItemizedCharges($values_2);
                unset($data['ItemizedCharges']);
            }
            elseif (\array_key_exists('ItemizedCharges', $data) && $data['ItemizedCharges'] === null) {
                $object->setItemizedCharges(null);
            }
            if (\array_key_exists('FRSShipmentData', $data) && $data['FRSShipmentData'] !== null) {
                $object->setFRSShipmentData($this->denormalizer->denormalize($data['FRSShipmentData'], 'ShipStream\\Ups\\Api\\Model\\RatedShipmentFRSShipmentData', 'json', $context));
                unset($data['FRSShipmentData']);
            }
            elseif (\array_key_exists('FRSShipmentData', $data) && $data['FRSShipmentData'] === null) {
                $object->setFRSShipmentData(null);
            }
            if (\array_key_exists('ServiceOptionsCharges', $data) && $data['ServiceOptionsCharges'] !== null) {
                $object->setServiceOptionsCharges($this->denormalizer->denormalize($data['ServiceOptionsCharges'], 'ShipStream\\Ups\\Api\\Model\\RatedShipmentServiceOptionsCharges', 'json', $context));
                unset($data['ServiceOptionsCharges']);
            }
            elseif (\array_key_exists('ServiceOptionsCharges', $data) && $data['ServiceOptionsCharges'] === null) {
                $object->setServiceOptionsCharges(null);
            }
            if (\array_key_exists('TaxCharges', $data) && $data['TaxCharges'] !== null) {
                $values_3 = [];
                foreach ($data['TaxCharges'] as $value_3) {
                    $values_3[] = $this->denormalizer->denormalize($value_3, 'ShipStream\\Ups\\Api\\Model\\RatedShipmentTaxCharges', 'json', $context);
                }
                $object->setTaxCharges($values_3);
                unset($data['TaxCharges']);
            }
            elseif (\array_key_exists('TaxCharges', $data) && $data['TaxCharges'] === null) {
                $object->setTaxCharges(null);
            }
            if (\array_key_exists('TotalCharges', $data) && $data['TotalCharges'] !== null) {
                $object->setTotalCharges($this->denormalizer->denormalize($data['TotalCharges'], 'ShipStream\\Ups\\Api\\Model\\RatedShipmentTotalCharges', 'json', $context));
                unset($data['TotalCharges']);
            }
            elseif (\array_key_exists('TotalCharges', $data) && $data['TotalCharges'] === null) {
                $object->setTotalCharges(null);
            }
            if (\array_key_exists('TotalChargesWithTaxes', $data) && $data['TotalChargesWithTaxes'] !== null) {
                $object->setTotalChargesWithTaxes($this->denormalizer->denormalize($data['TotalChargesWithTaxes'], 'ShipStream\\Ups\\Api\\Model\\RatedShipmentTotalChargesWithTaxes', 'json', $context));
                unset($data['TotalChargesWithTaxes']);
            }
            elseif (\array_key_exists('TotalChargesWithTaxes', $data) && $data['TotalChargesWithTaxes'] === null) {
                $object->setTotalChargesWithTaxes(null);
            }
            if (\array_key_exists('NegotiatedRateCharges', $data) && $data['NegotiatedRateCharges'] !== null) {
                $object->setNegotiatedRateCharges($this->denormalizer->denormalize($data['NegotiatedRateCharges'], 'ShipStream\\Ups\\Api\\Model\\RatedShipmentNegotiatedRateCharges', 'json', $context));
                unset($data['NegotiatedRateCharges']);
            }
            elseif (\array_key_exists('NegotiatedRateCharges', $data) && $data['NegotiatedRateCharges'] === null) {
                $object->setNegotiatedRateCharges(null);
            }
            if (\array_key_exists('RatedPackage', $data) && $data['RatedPackage'] !== null) {
                $values_4 = [];
                foreach ($data['RatedPackage'] as $value_4) {
                    $values_4[] = $this->denormalizer->denormalize($value_4, 'ShipStream\\Ups\\Api\\Model\\RatedShipmentRatedPackage', 'json', $context);
                }
                $object->setRatedPackage($values_4);
                unset($data['RatedPackage']);
            }
            elseif (\array_key_exists('RatedPackage', $data) && $data['RatedPackage'] === null) {
                $object->setRatedPackage(null);
            }
            if (\array_key_exists('TimeInTransit', $data) && $data['TimeInTransit'] !== null) {
                $object->setTimeInTransit($this->denormalizer->denormalize($data['TimeInTransit'], 'ShipStream\\Ups\\Api\\Model\\RatedShipmentTimeInTransit', 'json', $context));
                unset($data['TimeInTransit']);
            }
            elseif (\array_key_exists('TimeInTransit', $data) && $data['TimeInTransit'] === null) {
                $object->setTimeInTransit(null);
            }
            if (\array_key_exists('ScheduledDeliveryDate', $data) && $data['ScheduledDeliveryDate'] !== null) {
                $object->setScheduledDeliveryDate($data['ScheduledDeliveryDate']);
                unset($data['ScheduledDeliveryDate']);
            }
            elseif (\array_key_exists('ScheduledDeliveryDate', $data) && $data['ScheduledDeliveryDate'] === null) {
                $object->setScheduledDeliveryDate(null);
            }
            if (\array_key_exists('RoarRatedIndicator', $data) && $data['RoarRatedIndicator'] !== null) {
                $object->setRoarRatedIndicator($data['RoarRatedIndicator']);
                unset($data['RoarRatedIndicator']);
            }
            elseif (\array_key_exists('RoarRatedIndicator', $data) && $data['RoarRatedIndicator'] === null) {
                $object->setRoarRatedIndicator(null);
            }
            foreach ($data as $key => $value_5) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_5;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('disclaimer') && null !== $object->getDisclaimer()) {
                $values = [];
                foreach ($object->getDisclaimer() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['Disclaimer'] = $values;
            }
            $data['Service'] = $this->normalizer->normalize($object->getService(), 'json', $context);
            if ($object->isInitialized('rateChart') && null !== $object->getRateChart()) {
                $data['RateChart'] = $object->getRateChart();
            }
            if ($object->isInitialized('ratedShipmentAlert') && null !== $object->getRatedShipmentAlert()) {
                $values_1 = [];
                foreach ($object->getRatedShipmentAlert() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['RatedShipmentAlert'] = $values_1;
            }
            if ($object->isInitialized('billableWeightCalculationMethod') && null !== $object->getBillableWeightCalculationMethod()) {
                $data['BillableWeightCalculationMethod'] = $object->getBillableWeightCalculationMethod();
            }
            if ($object->isInitialized('ratingMethod') && null !== $object->getRatingMethod()) {
                $data['RatingMethod'] = $object->getRatingMethod();
            }
            $data['BillingWeight'] = $this->normalizer->normalize($object->getBillingWeight(), 'json', $context);
            $data['TransportationCharges'] = $this->normalizer->normalize($object->getTransportationCharges(), 'json', $context);
            if ($object->isInitialized('baseServiceCharge') && null !== $object->getBaseServiceCharge()) {
                $data['BaseServiceCharge'] = $this->normalizer->normalize($object->getBaseServiceCharge(), 'json', $context);
            }
            if ($object->isInitialized('itemizedCharges') && null !== $object->getItemizedCharges()) {
                $values_2 = [];
                foreach ($object->getItemizedCharges() as $value_2) {
                    $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
                }
                $data['ItemizedCharges'] = $values_2;
            }
            if ($object->isInitialized('fRSShipmentData') && null !== $object->getFRSShipmentData()) {
                $data['FRSShipmentData'] = $this->normalizer->normalize($object->getFRSShipmentData(), 'json', $context);
            }
            $data['ServiceOptionsCharges'] = $this->normalizer->normalize($object->getServiceOptionsCharges(), 'json', $context);
            if ($object->isInitialized('taxCharges') && null !== $object->getTaxCharges()) {
                $values_3 = [];
                foreach ($object->getTaxCharges() as $value_3) {
                    $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
                }
                $data['TaxCharges'] = $values_3;
            }
            $data['TotalCharges'] = $this->normalizer->normalize($object->getTotalCharges(), 'json', $context);
            if ($object->isInitialized('totalChargesWithTaxes') && null !== $object->getTotalChargesWithTaxes()) {
                $data['TotalChargesWithTaxes'] = $this->normalizer->normalize($object->getTotalChargesWithTaxes(), 'json', $context);
            }
            if ($object->isInitialized('negotiatedRateCharges') && null !== $object->getNegotiatedRateCharges()) {
                $data['NegotiatedRateCharges'] = $this->normalizer->normalize($object->getNegotiatedRateCharges(), 'json', $context);
            }
            $values_4 = [];
            foreach ($object->getRatedPackage() as $value_4) {
                $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
            }
            $data['RatedPackage'] = $values_4;
            if ($object->isInitialized('timeInTransit') && null !== $object->getTimeInTransit()) {
                $data['TimeInTransit'] = $this->normalizer->normalize($object->getTimeInTransit(), 'json', $context);
            }
            if ($object->isInitialized('scheduledDeliveryDate') && null !== $object->getScheduledDeliveryDate()) {
                $data['ScheduledDeliveryDate'] = $object->getScheduledDeliveryDate();
            }
            if ($object->isInitialized('roarRatedIndicator') && null !== $object->getRoarRatedIndicator()) {
                $data['RoarRatedIndicator'] = $object->getRoarRatedIndicator();
            }
            foreach ($object as $key => $value_5) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_5;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['ShipStream\\Ups\\Api\\Model\\RateResponseRatedShipment' => false];
        }
    }
} else {
    class RateResponseRatedShipmentNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\RateResponseRatedShipment';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\RateResponseRatedShipment';
        }
        /**
         * @return mixed
         */
        public function denormalize($data, $type, $format = null, array $context = [])
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
            if (\array_key_exists('Disclaimer', $data) && $data['Disclaimer'] !== null) {
                $values = [];
                foreach ($data['Disclaimer'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'ShipStream\\Ups\\Api\\Model\\RatedShipmentDisclaimer', 'json', $context);
                }
                $object->setDisclaimer($values);
                unset($data['Disclaimer']);
            }
            elseif (\array_key_exists('Disclaimer', $data) && $data['Disclaimer'] === null) {
                $object->setDisclaimer(null);
            }
            if (\array_key_exists('Service', $data) && $data['Service'] !== null) {
                $object->setService($this->denormalizer->denormalize($data['Service'], 'ShipStream\\Ups\\Api\\Model\\RatedShipmentService', 'json', $context));
                unset($data['Service']);
            }
            elseif (\array_key_exists('Service', $data) && $data['Service'] === null) {
                $object->setService(null);
            }
            if (\array_key_exists('RateChart', $data) && $data['RateChart'] !== null) {
                $object->setRateChart($data['RateChart']);
                unset($data['RateChart']);
            }
            elseif (\array_key_exists('RateChart', $data) && $data['RateChart'] === null) {
                $object->setRateChart(null);
            }
            if (\array_key_exists('RatedShipmentAlert', $data) && $data['RatedShipmentAlert'] !== null) {
                $values_1 = [];
                foreach ($data['RatedShipmentAlert'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'ShipStream\\Ups\\Api\\Model\\RatedShipmentRatedShipmentAlert', 'json', $context);
                }
                $object->setRatedShipmentAlert($values_1);
                unset($data['RatedShipmentAlert']);
            }
            elseif (\array_key_exists('RatedShipmentAlert', $data) && $data['RatedShipmentAlert'] === null) {
                $object->setRatedShipmentAlert(null);
            }
            if (\array_key_exists('BillableWeightCalculationMethod', $data) && $data['BillableWeightCalculationMethod'] !== null) {
                $object->setBillableWeightCalculationMethod($data['BillableWeightCalculationMethod']);
                unset($data['BillableWeightCalculationMethod']);
            }
            elseif (\array_key_exists('BillableWeightCalculationMethod', $data) && $data['BillableWeightCalculationMethod'] === null) {
                $object->setBillableWeightCalculationMethod(null);
            }
            if (\array_key_exists('RatingMethod', $data) && $data['RatingMethod'] !== null) {
                $object->setRatingMethod($data['RatingMethod']);
                unset($data['RatingMethod']);
            }
            elseif (\array_key_exists('RatingMethod', $data) && $data['RatingMethod'] === null) {
                $object->setRatingMethod(null);
            }
            if (\array_key_exists('BillingWeight', $data) && $data['BillingWeight'] !== null) {
                $object->setBillingWeight($this->denormalizer->denormalize($data['BillingWeight'], 'ShipStream\\Ups\\Api\\Model\\RatedShipmentBillingWeight', 'json', $context));
                unset($data['BillingWeight']);
            }
            elseif (\array_key_exists('BillingWeight', $data) && $data['BillingWeight'] === null) {
                $object->setBillingWeight(null);
            }
            if (\array_key_exists('TransportationCharges', $data) && $data['TransportationCharges'] !== null) {
                $object->setTransportationCharges($this->denormalizer->denormalize($data['TransportationCharges'], 'ShipStream\\Ups\\Api\\Model\\RatedShipmentTransportationCharges', 'json', $context));
                unset($data['TransportationCharges']);
            }
            elseif (\array_key_exists('TransportationCharges', $data) && $data['TransportationCharges'] === null) {
                $object->setTransportationCharges(null);
            }
            if (\array_key_exists('BaseServiceCharge', $data) && $data['BaseServiceCharge'] !== null) {
                $object->setBaseServiceCharge($this->denormalizer->denormalize($data['BaseServiceCharge'], 'ShipStream\\Ups\\Api\\Model\\RatedShipmentBaseServiceCharge', 'json', $context));
                unset($data['BaseServiceCharge']);
            }
            elseif (\array_key_exists('BaseServiceCharge', $data) && $data['BaseServiceCharge'] === null) {
                $object->setBaseServiceCharge(null);
            }
            if (\array_key_exists('ItemizedCharges', $data) && $data['ItemizedCharges'] !== null) {
                $values_2 = [];
                foreach ($data['ItemizedCharges'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, 'ShipStream\\Ups\\Api\\Model\\RatedShipmentItemizedCharges', 'json', $context);
                }
                $object->setItemizedCharges($values_2);
                unset($data['ItemizedCharges']);
            }
            elseif (\array_key_exists('ItemizedCharges', $data) && $data['ItemizedCharges'] === null) {
                $object->setItemizedCharges(null);
            }
            if (\array_key_exists('FRSShipmentData', $data) && $data['FRSShipmentData'] !== null) {
                $object->setFRSShipmentData($this->denormalizer->denormalize($data['FRSShipmentData'], 'ShipStream\\Ups\\Api\\Model\\RatedShipmentFRSShipmentData', 'json', $context));
                unset($data['FRSShipmentData']);
            }
            elseif (\array_key_exists('FRSShipmentData', $data) && $data['FRSShipmentData'] === null) {
                $object->setFRSShipmentData(null);
            }
            if (\array_key_exists('ServiceOptionsCharges', $data) && $data['ServiceOptionsCharges'] !== null) {
                $object->setServiceOptionsCharges($this->denormalizer->denormalize($data['ServiceOptionsCharges'], 'ShipStream\\Ups\\Api\\Model\\RatedShipmentServiceOptionsCharges', 'json', $context));
                unset($data['ServiceOptionsCharges']);
            }
            elseif (\array_key_exists('ServiceOptionsCharges', $data) && $data['ServiceOptionsCharges'] === null) {
                $object->setServiceOptionsCharges(null);
            }
            if (\array_key_exists('TaxCharges', $data) && $data['TaxCharges'] !== null) {
                $values_3 = [];
                foreach ($data['TaxCharges'] as $value_3) {
                    $values_3[] = $this->denormalizer->denormalize($value_3, 'ShipStream\\Ups\\Api\\Model\\RatedShipmentTaxCharges', 'json', $context);
                }
                $object->setTaxCharges($values_3);
                unset($data['TaxCharges']);
            }
            elseif (\array_key_exists('TaxCharges', $data) && $data['TaxCharges'] === null) {
                $object->setTaxCharges(null);
            }
            if (\array_key_exists('TotalCharges', $data) && $data['TotalCharges'] !== null) {
                $object->setTotalCharges($this->denormalizer->denormalize($data['TotalCharges'], 'ShipStream\\Ups\\Api\\Model\\RatedShipmentTotalCharges', 'json', $context));
                unset($data['TotalCharges']);
            }
            elseif (\array_key_exists('TotalCharges', $data) && $data['TotalCharges'] === null) {
                $object->setTotalCharges(null);
            }
            if (\array_key_exists('TotalChargesWithTaxes', $data) && $data['TotalChargesWithTaxes'] !== null) {
                $object->setTotalChargesWithTaxes($this->denormalizer->denormalize($data['TotalChargesWithTaxes'], 'ShipStream\\Ups\\Api\\Model\\RatedShipmentTotalChargesWithTaxes', 'json', $context));
                unset($data['TotalChargesWithTaxes']);
            }
            elseif (\array_key_exists('TotalChargesWithTaxes', $data) && $data['TotalChargesWithTaxes'] === null) {
                $object->setTotalChargesWithTaxes(null);
            }
            if (\array_key_exists('NegotiatedRateCharges', $data) && $data['NegotiatedRateCharges'] !== null) {
                $object->setNegotiatedRateCharges($this->denormalizer->denormalize($data['NegotiatedRateCharges'], 'ShipStream\\Ups\\Api\\Model\\RatedShipmentNegotiatedRateCharges', 'json', $context));
                unset($data['NegotiatedRateCharges']);
            }
            elseif (\array_key_exists('NegotiatedRateCharges', $data) && $data['NegotiatedRateCharges'] === null) {
                $object->setNegotiatedRateCharges(null);
            }
            if (\array_key_exists('RatedPackage', $data) && $data['RatedPackage'] !== null) {
                $values_4 = [];
                foreach ($data['RatedPackage'] as $value_4) {
                    $values_4[] = $this->denormalizer->denormalize($value_4, 'ShipStream\\Ups\\Api\\Model\\RatedShipmentRatedPackage', 'json', $context);
                }
                $object->setRatedPackage($values_4);
                unset($data['RatedPackage']);
            }
            elseif (\array_key_exists('RatedPackage', $data) && $data['RatedPackage'] === null) {
                $object->setRatedPackage(null);
            }
            if (\array_key_exists('TimeInTransit', $data) && $data['TimeInTransit'] !== null) {
                $object->setTimeInTransit($this->denormalizer->denormalize($data['TimeInTransit'], 'ShipStream\\Ups\\Api\\Model\\RatedShipmentTimeInTransit', 'json', $context));
                unset($data['TimeInTransit']);
            }
            elseif (\array_key_exists('TimeInTransit', $data) && $data['TimeInTransit'] === null) {
                $object->setTimeInTransit(null);
            }
            if (\array_key_exists('ScheduledDeliveryDate', $data) && $data['ScheduledDeliveryDate'] !== null) {
                $object->setScheduledDeliveryDate($data['ScheduledDeliveryDate']);
                unset($data['ScheduledDeliveryDate']);
            }
            elseif (\array_key_exists('ScheduledDeliveryDate', $data) && $data['ScheduledDeliveryDate'] === null) {
                $object->setScheduledDeliveryDate(null);
            }
            if (\array_key_exists('RoarRatedIndicator', $data) && $data['RoarRatedIndicator'] !== null) {
                $object->setRoarRatedIndicator($data['RoarRatedIndicator']);
                unset($data['RoarRatedIndicator']);
            }
            elseif (\array_key_exists('RoarRatedIndicator', $data) && $data['RoarRatedIndicator'] === null) {
                $object->setRoarRatedIndicator(null);
            }
            foreach ($data as $key => $value_5) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_5;
                }
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('disclaimer') && null !== $object->getDisclaimer()) {
                $values = [];
                foreach ($object->getDisclaimer() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['Disclaimer'] = $values;
            }
            $data['Service'] = $this->normalizer->normalize($object->getService(), 'json', $context);
            if ($object->isInitialized('rateChart') && null !== $object->getRateChart()) {
                $data['RateChart'] = $object->getRateChart();
            }
            if ($object->isInitialized('ratedShipmentAlert') && null !== $object->getRatedShipmentAlert()) {
                $values_1 = [];
                foreach ($object->getRatedShipmentAlert() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['RatedShipmentAlert'] = $values_1;
            }
            if ($object->isInitialized('billableWeightCalculationMethod') && null !== $object->getBillableWeightCalculationMethod()) {
                $data['BillableWeightCalculationMethod'] = $object->getBillableWeightCalculationMethod();
            }
            if ($object->isInitialized('ratingMethod') && null !== $object->getRatingMethod()) {
                $data['RatingMethod'] = $object->getRatingMethod();
            }
            $data['BillingWeight'] = $this->normalizer->normalize($object->getBillingWeight(), 'json', $context);
            $data['TransportationCharges'] = $this->normalizer->normalize($object->getTransportationCharges(), 'json', $context);
            if ($object->isInitialized('baseServiceCharge') && null !== $object->getBaseServiceCharge()) {
                $data['BaseServiceCharge'] = $this->normalizer->normalize($object->getBaseServiceCharge(), 'json', $context);
            }
            if ($object->isInitialized('itemizedCharges') && null !== $object->getItemizedCharges()) {
                $values_2 = [];
                foreach ($object->getItemizedCharges() as $value_2) {
                    $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
                }
                $data['ItemizedCharges'] = $values_2;
            }
            if ($object->isInitialized('fRSShipmentData') && null !== $object->getFRSShipmentData()) {
                $data['FRSShipmentData'] = $this->normalizer->normalize($object->getFRSShipmentData(), 'json', $context);
            }
            $data['ServiceOptionsCharges'] = $this->normalizer->normalize($object->getServiceOptionsCharges(), 'json', $context);
            if ($object->isInitialized('taxCharges') && null !== $object->getTaxCharges()) {
                $values_3 = [];
                foreach ($object->getTaxCharges() as $value_3) {
                    $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
                }
                $data['TaxCharges'] = $values_3;
            }
            $data['TotalCharges'] = $this->normalizer->normalize($object->getTotalCharges(), 'json', $context);
            if ($object->isInitialized('totalChargesWithTaxes') && null !== $object->getTotalChargesWithTaxes()) {
                $data['TotalChargesWithTaxes'] = $this->normalizer->normalize($object->getTotalChargesWithTaxes(), 'json', $context);
            }
            if ($object->isInitialized('negotiatedRateCharges') && null !== $object->getNegotiatedRateCharges()) {
                $data['NegotiatedRateCharges'] = $this->normalizer->normalize($object->getNegotiatedRateCharges(), 'json', $context);
            }
            $values_4 = [];
            foreach ($object->getRatedPackage() as $value_4) {
                $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
            }
            $data['RatedPackage'] = $values_4;
            if ($object->isInitialized('timeInTransit') && null !== $object->getTimeInTransit()) {
                $data['TimeInTransit'] = $this->normalizer->normalize($object->getTimeInTransit(), 'json', $context);
            }
            if ($object->isInitialized('scheduledDeliveryDate') && null !== $object->getScheduledDeliveryDate()) {
                $data['ScheduledDeliveryDate'] = $object->getScheduledDeliveryDate();
            }
            if ($object->isInitialized('roarRatedIndicator') && null !== $object->getRoarRatedIndicator()) {
                $data['RoarRatedIndicator'] = $object->getRoarRatedIndicator();
            }
            foreach ($object as $key => $value_5) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_5;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['ShipStream\\Ups\\Api\\Model\\RateResponseRatedShipment' => false];
        }
    }
}