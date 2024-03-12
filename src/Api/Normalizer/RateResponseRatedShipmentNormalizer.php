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
            if (\array_key_exists('Disclaimer', $data)) {
                $values = [];
                foreach ($data['Disclaimer'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'ShipStream\\Ups\\Api\\Model\\RatedShipmentDisclaimer', 'json', $context);
                }
                $object->setDisclaimer($values);
                unset($data['Disclaimer']);
            }
            if (\array_key_exists('Service', $data)) {
                $object->setService($this->denormalizer->denormalize($data['Service'], 'ShipStream\\Ups\\Api\\Model\\RatedShipmentService', 'json', $context));
                unset($data['Service']);
            }
            if (\array_key_exists('RateChart', $data)) {
                $object->setRateChart($data['RateChart']);
                unset($data['RateChart']);
            }
            if (\array_key_exists('RatedShipmentAlert', $data)) {
                $values_1 = [];
                foreach ($data['RatedShipmentAlert'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'ShipStream\\Ups\\Api\\Model\\RatedShipmentRatedShipmentAlert', 'json', $context);
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
                $object->setBillingWeight($this->denormalizer->denormalize($data['BillingWeight'], 'ShipStream\\Ups\\Api\\Model\\RatedShipmentBillingWeight', 'json', $context));
                unset($data['BillingWeight']);
            }
            if (\array_key_exists('TransportationCharges', $data)) {
                $object->setTransportationCharges($this->denormalizer->denormalize($data['TransportationCharges'], 'ShipStream\\Ups\\Api\\Model\\RatedShipmentTransportationCharges', 'json', $context));
                unset($data['TransportationCharges']);
            }
            if (\array_key_exists('BaseServiceCharge', $data)) {
                $object->setBaseServiceCharge($this->denormalizer->denormalize($data['BaseServiceCharge'], 'ShipStream\\Ups\\Api\\Model\\RatedShipmentBaseServiceCharge', 'json', $context));
                unset($data['BaseServiceCharge']);
            }
            if (\array_key_exists('ItemizedCharges', $data)) {
                $values_2 = [];
                foreach ($data['ItemizedCharges'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, 'ShipStream\\Ups\\Api\\Model\\RatedShipmentItemizedCharges', 'json', $context);
                }
                $object->setItemizedCharges($values_2);
                unset($data['ItemizedCharges']);
            }
            if (\array_key_exists('FRSShipmentData', $data)) {
                $object->setFRSShipmentData($this->denormalizer->denormalize($data['FRSShipmentData'], 'ShipStream\\Ups\\Api\\Model\\RatedShipmentFRSShipmentData', 'json', $context));
                unset($data['FRSShipmentData']);
            }
            if (\array_key_exists('ServiceOptionsCharges', $data)) {
                $object->setServiceOptionsCharges($this->denormalizer->denormalize($data['ServiceOptionsCharges'], 'ShipStream\\Ups\\Api\\Model\\RatedShipmentServiceOptionsCharges', 'json', $context));
                unset($data['ServiceOptionsCharges']);
            }
            if (\array_key_exists('TaxCharges', $data)) {
                $values_3 = [];
                foreach ($data['TaxCharges'] as $value_3) {
                    $values_3[] = $this->denormalizer->denormalize($value_3, 'ShipStream\\Ups\\Api\\Model\\RatedShipmentTaxCharges', 'json', $context);
                }
                $object->setTaxCharges($values_3);
                unset($data['TaxCharges']);
            }
            if (\array_key_exists('TotalCharges', $data)) {
                $object->setTotalCharges($this->denormalizer->denormalize($data['TotalCharges'], 'ShipStream\\Ups\\Api\\Model\\RatedShipmentTotalCharges', 'json', $context));
                unset($data['TotalCharges']);
            }
            if (\array_key_exists('TotalChargesWithTaxes', $data)) {
                $object->setTotalChargesWithTaxes($this->denormalizer->denormalize($data['TotalChargesWithTaxes'], 'ShipStream\\Ups\\Api\\Model\\RatedShipmentTotalChargesWithTaxes', 'json', $context));
                unset($data['TotalChargesWithTaxes']);
            }
            if (\array_key_exists('NegotiatedRateCharges', $data)) {
                $object->setNegotiatedRateCharges($this->denormalizer->denormalize($data['NegotiatedRateCharges'], 'ShipStream\\Ups\\Api\\Model\\RatedShipmentNegotiatedRateCharges', 'json', $context));
                unset($data['NegotiatedRateCharges']);
            }
            if (\array_key_exists('RatedPackage', $data)) {
                $values_4 = [];
                foreach ($data['RatedPackage'] as $value_4) {
                    $values_4[] = $this->denormalizer->denormalize($value_4, 'ShipStream\\Ups\\Api\\Model\\RatedShipmentRatedPackage', 'json', $context);
                }
                $object->setRatedPackage($values_4);
                unset($data['RatedPackage']);
            }
            if (\array_key_exists('TimeInTransit', $data)) {
                $object->setTimeInTransit($this->denormalizer->denormalize($data['TimeInTransit'], 'ShipStream\\Ups\\Api\\Model\\RatedShipmentTimeInTransit', 'json', $context));
                unset($data['TimeInTransit']);
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
            if (\array_key_exists('Disclaimer', $data)) {
                $values = [];
                foreach ($data['Disclaimer'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'ShipStream\\Ups\\Api\\Model\\RatedShipmentDisclaimer', 'json', $context);
                }
                $object->setDisclaimer($values);
                unset($data['Disclaimer']);
            }
            if (\array_key_exists('Service', $data)) {
                $object->setService($this->denormalizer->denormalize($data['Service'], 'ShipStream\\Ups\\Api\\Model\\RatedShipmentService', 'json', $context));
                unset($data['Service']);
            }
            if (\array_key_exists('RateChart', $data)) {
                $object->setRateChart($data['RateChart']);
                unset($data['RateChart']);
            }
            if (\array_key_exists('RatedShipmentAlert', $data)) {
                $values_1 = [];
                foreach ($data['RatedShipmentAlert'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'ShipStream\\Ups\\Api\\Model\\RatedShipmentRatedShipmentAlert', 'json', $context);
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
                $object->setBillingWeight($this->denormalizer->denormalize($data['BillingWeight'], 'ShipStream\\Ups\\Api\\Model\\RatedShipmentBillingWeight', 'json', $context));
                unset($data['BillingWeight']);
            }
            if (\array_key_exists('TransportationCharges', $data)) {
                $object->setTransportationCharges($this->denormalizer->denormalize($data['TransportationCharges'], 'ShipStream\\Ups\\Api\\Model\\RatedShipmentTransportationCharges', 'json', $context));
                unset($data['TransportationCharges']);
            }
            if (\array_key_exists('BaseServiceCharge', $data)) {
                $object->setBaseServiceCharge($this->denormalizer->denormalize($data['BaseServiceCharge'], 'ShipStream\\Ups\\Api\\Model\\RatedShipmentBaseServiceCharge', 'json', $context));
                unset($data['BaseServiceCharge']);
            }
            if (\array_key_exists('ItemizedCharges', $data)) {
                $values_2 = [];
                foreach ($data['ItemizedCharges'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, 'ShipStream\\Ups\\Api\\Model\\RatedShipmentItemizedCharges', 'json', $context);
                }
                $object->setItemizedCharges($values_2);
                unset($data['ItemizedCharges']);
            }
            if (\array_key_exists('FRSShipmentData', $data)) {
                $object->setFRSShipmentData($this->denormalizer->denormalize($data['FRSShipmentData'], 'ShipStream\\Ups\\Api\\Model\\RatedShipmentFRSShipmentData', 'json', $context));
                unset($data['FRSShipmentData']);
            }
            if (\array_key_exists('ServiceOptionsCharges', $data)) {
                $object->setServiceOptionsCharges($this->denormalizer->denormalize($data['ServiceOptionsCharges'], 'ShipStream\\Ups\\Api\\Model\\RatedShipmentServiceOptionsCharges', 'json', $context));
                unset($data['ServiceOptionsCharges']);
            }
            if (\array_key_exists('TaxCharges', $data)) {
                $values_3 = [];
                foreach ($data['TaxCharges'] as $value_3) {
                    $values_3[] = $this->denormalizer->denormalize($value_3, 'ShipStream\\Ups\\Api\\Model\\RatedShipmentTaxCharges', 'json', $context);
                }
                $object->setTaxCharges($values_3);
                unset($data['TaxCharges']);
            }
            if (\array_key_exists('TotalCharges', $data)) {
                $object->setTotalCharges($this->denormalizer->denormalize($data['TotalCharges'], 'ShipStream\\Ups\\Api\\Model\\RatedShipmentTotalCharges', 'json', $context));
                unset($data['TotalCharges']);
            }
            if (\array_key_exists('TotalChargesWithTaxes', $data)) {
                $object->setTotalChargesWithTaxes($this->denormalizer->denormalize($data['TotalChargesWithTaxes'], 'ShipStream\\Ups\\Api\\Model\\RatedShipmentTotalChargesWithTaxes', 'json', $context));
                unset($data['TotalChargesWithTaxes']);
            }
            if (\array_key_exists('NegotiatedRateCharges', $data)) {
                $object->setNegotiatedRateCharges($this->denormalizer->denormalize($data['NegotiatedRateCharges'], 'ShipStream\\Ups\\Api\\Model\\RatedShipmentNegotiatedRateCharges', 'json', $context));
                unset($data['NegotiatedRateCharges']);
            }
            if (\array_key_exists('RatedPackage', $data)) {
                $values_4 = [];
                foreach ($data['RatedPackage'] as $value_4) {
                    $values_4[] = $this->denormalizer->denormalize($value_4, 'ShipStream\\Ups\\Api\\Model\\RatedShipmentRatedPackage', 'json', $context);
                }
                $object->setRatedPackage($values_4);
                unset($data['RatedPackage']);
            }
            if (\array_key_exists('TimeInTransit', $data)) {
                $object->setTimeInTransit($this->denormalizer->denormalize($data['TimeInTransit'], 'ShipStream\\Ups\\Api\\Model\\RatedShipmentTimeInTransit', 'json', $context));
                unset($data['TimeInTransit']);
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