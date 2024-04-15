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
    class FreightRateRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\FreightRateRequest';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\FreightRateRequest';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
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
            if (\array_key_exists('Request', $data) && $data['Request'] !== null) {
                $object->setRequest($this->denormalizer->denormalize($data['Request'], 'ShipStream\\Ups\\Api\\Model\\FreightRateRequestRequest', 'json', $context));
                unset($data['Request']);
            }
            elseif (\array_key_exists('Request', $data) && $data['Request'] === null) {
                $object->setRequest(null);
            }
            if (\array_key_exists('ShipFrom', $data) && $data['ShipFrom'] !== null) {
                $object->setShipFrom($this->denormalizer->denormalize($data['ShipFrom'], 'ShipStream\\Ups\\Api\\Model\\FreightRateRequestShipFrom', 'json', $context));
                unset($data['ShipFrom']);
            }
            elseif (\array_key_exists('ShipFrom', $data) && $data['ShipFrom'] === null) {
                $object->setShipFrom(null);
            }
            if (\array_key_exists('ShipTo', $data) && $data['ShipTo'] !== null) {
                $object->setShipTo($this->denormalizer->denormalize($data['ShipTo'], 'ShipStream\\Ups\\Api\\Model\\FreightRateRequestShipTo', 'json', $context));
                unset($data['ShipTo']);
            }
            elseif (\array_key_exists('ShipTo', $data) && $data['ShipTo'] === null) {
                $object->setShipTo(null);
            }
            if (\array_key_exists('PaymentInformation', $data) && $data['PaymentInformation'] !== null) {
                $object->setPaymentInformation($this->denormalizer->denormalize($data['PaymentInformation'], 'ShipStream\\Ups\\Api\\Model\\FreightRateRequestPaymentInformation', 'json', $context));
                unset($data['PaymentInformation']);
            }
            elseif (\array_key_exists('PaymentInformation', $data) && $data['PaymentInformation'] === null) {
                $object->setPaymentInformation(null);
            }
            if (\array_key_exists('Service', $data) && $data['Service'] !== null) {
                $object->setService($this->denormalizer->denormalize($data['Service'], 'ShipStream\\Ups\\Api\\Model\\FreightRateRequestService', 'json', $context));
                unset($data['Service']);
            }
            elseif (\array_key_exists('Service', $data) && $data['Service'] === null) {
                $object->setService(null);
            }
            if (\array_key_exists('HandlingUnitOne', $data) && $data['HandlingUnitOne'] !== null) {
                $object->setHandlingUnitOne($this->denormalizer->denormalize($data['HandlingUnitOne'], 'ShipStream\\Ups\\Api\\Model\\FreightRateRequestHandlingUnitOne', 'json', $context));
                unset($data['HandlingUnitOne']);
            }
            elseif (\array_key_exists('HandlingUnitOne', $data) && $data['HandlingUnitOne'] === null) {
                $object->setHandlingUnitOne(null);
            }
            if (\array_key_exists('HandlingUnitTwo', $data) && $data['HandlingUnitTwo'] !== null) {
                $object->setHandlingUnitTwo($this->denormalizer->denormalize($data['HandlingUnitTwo'], 'ShipStream\\Ups\\Api\\Model\\FreightRateRequestHandlingUnitTwo', 'json', $context));
                unset($data['HandlingUnitTwo']);
            }
            elseif (\array_key_exists('HandlingUnitTwo', $data) && $data['HandlingUnitTwo'] === null) {
                $object->setHandlingUnitTwo(null);
            }
            if (\array_key_exists('Commodity', $data) && $data['Commodity'] !== null) {
                $values = [];
                foreach ($data['Commodity'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'ShipStream\\Ups\\Api\\Model\\FreightRateRequestCommodity', 'json', $context);
                }
                $object->setCommodity($values);
                unset($data['Commodity']);
            }
            elseif (\array_key_exists('Commodity', $data) && $data['Commodity'] === null) {
                $object->setCommodity(null);
            }
            if (\array_key_exists('ShipmentServiceOptions', $data) && $data['ShipmentServiceOptions'] !== null) {
                $object->setShipmentServiceOptions($this->denormalizer->denormalize($data['ShipmentServiceOptions'], 'ShipStream\\Ups\\Api\\Model\\FreightRateRequestShipmentServiceOptions', 'json', $context));
                unset($data['ShipmentServiceOptions']);
            }
            elseif (\array_key_exists('ShipmentServiceOptions', $data) && $data['ShipmentServiceOptions'] === null) {
                $object->setShipmentServiceOptions(null);
            }
            if (\array_key_exists('PickupRequest', $data) && $data['PickupRequest'] !== null) {
                $object->setPickupRequest($this->denormalizer->denormalize($data['PickupRequest'], 'ShipStream\\Ups\\Api\\Model\\FreightRateRequestPickupRequest', 'json', $context));
                unset($data['PickupRequest']);
            }
            elseif (\array_key_exists('PickupRequest', $data) && $data['PickupRequest'] === null) {
                $object->setPickupRequest(null);
            }
            if (\array_key_exists('AlternateRateOptions', $data) && $data['AlternateRateOptions'] !== null) {
                $object->setAlternateRateOptions($this->denormalizer->denormalize($data['AlternateRateOptions'], 'ShipStream\\Ups\\Api\\Model\\FreightRateRequestAlternateRateOptions', 'json', $context));
                unset($data['AlternateRateOptions']);
            }
            elseif (\array_key_exists('AlternateRateOptions', $data) && $data['AlternateRateOptions'] === null) {
                $object->setAlternateRateOptions(null);
            }
            if (\array_key_exists('GFPOptions', $data) && $data['GFPOptions'] !== null) {
                $object->setGFPOptions($this->denormalizer->denormalize($data['GFPOptions'], 'ShipStream\\Ups\\Api\\Model\\FreightRateRequestGFPOptions', 'json', $context));
                unset($data['GFPOptions']);
            }
            elseif (\array_key_exists('GFPOptions', $data) && $data['GFPOptions'] === null) {
                $object->setGFPOptions(null);
            }
            if (\array_key_exists('HandlingUnitWeight', $data) && $data['HandlingUnitWeight'] !== null) {
                $object->setHandlingUnitWeight($this->denormalizer->denormalize($data['HandlingUnitWeight'], 'ShipStream\\Ups\\Api\\Model\\FreightRateRequestHandlingUnitWeight', 'json', $context));
                unset($data['HandlingUnitWeight']);
            }
            elseif (\array_key_exists('HandlingUnitWeight', $data) && $data['HandlingUnitWeight'] === null) {
                $object->setHandlingUnitWeight(null);
            }
            if (\array_key_exists('AdjustedWeightIndicator', $data) && $data['AdjustedWeightIndicator'] !== null) {
                $object->setAdjustedWeightIndicator($data['AdjustedWeightIndicator']);
                unset($data['AdjustedWeightIndicator']);
            }
            elseif (\array_key_exists('AdjustedWeightIndicator', $data) && $data['AdjustedWeightIndicator'] === null) {
                $object->setAdjustedWeightIndicator(null);
            }
            if (\array_key_exists('TimeInTransitIndicator', $data) && $data['TimeInTransitIndicator'] !== null) {
                $object->setTimeInTransitIndicator($data['TimeInTransitIndicator']);
                unset($data['TimeInTransitIndicator']);
            }
            elseif (\array_key_exists('TimeInTransitIndicator', $data) && $data['TimeInTransitIndicator'] === null) {
                $object->setTimeInTransitIndicator(null);
            }
            if (\array_key_exists('HandlingUnits', $data) && $data['HandlingUnits'] !== null) {
                $values_1 = [];
                foreach ($data['HandlingUnits'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'ShipStream\\Ups\\Api\\Model\\FreightRateRequestHandlingUnits', 'json', $context);
                }
                $object->setHandlingUnits($values_1);
                unset($data['HandlingUnits']);
            }
            elseif (\array_key_exists('HandlingUnits', $data) && $data['HandlingUnits'] === null) {
                $object->setHandlingUnits(null);
            }
            if (\array_key_exists('AdjustedHeightIndicator', $data) && $data['AdjustedHeightIndicator'] !== null) {
                $object->setAdjustedHeightIndicator($data['AdjustedHeightIndicator']);
                unset($data['AdjustedHeightIndicator']);
            }
            elseif (\array_key_exists('AdjustedHeightIndicator', $data) && $data['AdjustedHeightIndicator'] === null) {
                $object->setAdjustedHeightIndicator(null);
            }
            if (\array_key_exists('DensityEligibleIndicator', $data) && $data['DensityEligibleIndicator'] !== null) {
                $object->setDensityEligibleIndicator($data['DensityEligibleIndicator']);
                unset($data['DensityEligibleIndicator']);
            }
            elseif (\array_key_exists('DensityEligibleIndicator', $data) && $data['DensityEligibleIndicator'] === null) {
                $object->setDensityEligibleIndicator(null);
            }
            if (\array_key_exists('QuoteNumberIndicator', $data) && $data['QuoteNumberIndicator'] !== null) {
                $object->setQuoteNumberIndicator($data['QuoteNumberIndicator']);
                unset($data['QuoteNumberIndicator']);
            }
            elseif (\array_key_exists('QuoteNumberIndicator', $data) && $data['QuoteNumberIndicator'] === null) {
                $object->setQuoteNumberIndicator(null);
            }
            foreach ($data as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_2;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            $data['Request'] = $this->normalizer->normalize($object->getRequest(), 'json', $context);
            $data['ShipFrom'] = $this->normalizer->normalize($object->getShipFrom(), 'json', $context);
            $data['ShipTo'] = $this->normalizer->normalize($object->getShipTo(), 'json', $context);
            $data['PaymentInformation'] = $this->normalizer->normalize($object->getPaymentInformation(), 'json', $context);
            $data['Service'] = $this->normalizer->normalize($object->getService(), 'json', $context);
            if ($object->isInitialized('handlingUnitOne') && null !== $object->getHandlingUnitOne()) {
                $data['HandlingUnitOne'] = $this->normalizer->normalize($object->getHandlingUnitOne(), 'json', $context);
            }
            if ($object->isInitialized('handlingUnitTwo') && null !== $object->getHandlingUnitTwo()) {
                $data['HandlingUnitTwo'] = $this->normalizer->normalize($object->getHandlingUnitTwo(), 'json', $context);
            }
            $values = [];
            foreach ($object->getCommodity() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['Commodity'] = $values;
            if ($object->isInitialized('shipmentServiceOptions') && null !== $object->getShipmentServiceOptions()) {
                $data['ShipmentServiceOptions'] = $this->normalizer->normalize($object->getShipmentServiceOptions(), 'json', $context);
            }
            if ($object->isInitialized('pickupRequest') && null !== $object->getPickupRequest()) {
                $data['PickupRequest'] = $this->normalizer->normalize($object->getPickupRequest(), 'json', $context);
            }
            if ($object->isInitialized('alternateRateOptions') && null !== $object->getAlternateRateOptions()) {
                $data['AlternateRateOptions'] = $this->normalizer->normalize($object->getAlternateRateOptions(), 'json', $context);
            }
            if ($object->isInitialized('gFPOptions') && null !== $object->getGFPOptions()) {
                $data['GFPOptions'] = $this->normalizer->normalize($object->getGFPOptions(), 'json', $context);
            }
            if ($object->isInitialized('handlingUnitWeight') && null !== $object->getHandlingUnitWeight()) {
                $data['HandlingUnitWeight'] = $this->normalizer->normalize($object->getHandlingUnitWeight(), 'json', $context);
            }
            if ($object->isInitialized('adjustedWeightIndicator') && null !== $object->getAdjustedWeightIndicator()) {
                $data['AdjustedWeightIndicator'] = $object->getAdjustedWeightIndicator();
            }
            if ($object->isInitialized('timeInTransitIndicator') && null !== $object->getTimeInTransitIndicator()) {
                $data['TimeInTransitIndicator'] = $object->getTimeInTransitIndicator();
            }
            if ($object->isInitialized('handlingUnits') && null !== $object->getHandlingUnits()) {
                $values_1 = [];
                foreach ($object->getHandlingUnits() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['HandlingUnits'] = $values_1;
            }
            if ($object->isInitialized('adjustedHeightIndicator') && null !== $object->getAdjustedHeightIndicator()) {
                $data['AdjustedHeightIndicator'] = $object->getAdjustedHeightIndicator();
            }
            if ($object->isInitialized('densityEligibleIndicator') && null !== $object->getDensityEligibleIndicator()) {
                $data['DensityEligibleIndicator'] = $object->getDensityEligibleIndicator();
            }
            if ($object->isInitialized('quoteNumberIndicator') && null !== $object->getQuoteNumberIndicator()) {
                $data['QuoteNumberIndicator'] = $object->getQuoteNumberIndicator();
            }
            foreach ($object as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_2;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['ShipStream\\Ups\\Api\\Model\\FreightRateRequest' => false];
        }
    }
} else {
    class FreightRateRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\FreightRateRequest';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\FreightRateRequest';
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
            $object = new \ShipStream\Ups\Api\Model\FreightRateRequest();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Request', $data) && $data['Request'] !== null) {
                $object->setRequest($this->denormalizer->denormalize($data['Request'], 'ShipStream\\Ups\\Api\\Model\\FreightRateRequestRequest', 'json', $context));
                unset($data['Request']);
            }
            elseif (\array_key_exists('Request', $data) && $data['Request'] === null) {
                $object->setRequest(null);
            }
            if (\array_key_exists('ShipFrom', $data) && $data['ShipFrom'] !== null) {
                $object->setShipFrom($this->denormalizer->denormalize($data['ShipFrom'], 'ShipStream\\Ups\\Api\\Model\\FreightRateRequestShipFrom', 'json', $context));
                unset($data['ShipFrom']);
            }
            elseif (\array_key_exists('ShipFrom', $data) && $data['ShipFrom'] === null) {
                $object->setShipFrom(null);
            }
            if (\array_key_exists('ShipTo', $data) && $data['ShipTo'] !== null) {
                $object->setShipTo($this->denormalizer->denormalize($data['ShipTo'], 'ShipStream\\Ups\\Api\\Model\\FreightRateRequestShipTo', 'json', $context));
                unset($data['ShipTo']);
            }
            elseif (\array_key_exists('ShipTo', $data) && $data['ShipTo'] === null) {
                $object->setShipTo(null);
            }
            if (\array_key_exists('PaymentInformation', $data) && $data['PaymentInformation'] !== null) {
                $object->setPaymentInformation($this->denormalizer->denormalize($data['PaymentInformation'], 'ShipStream\\Ups\\Api\\Model\\FreightRateRequestPaymentInformation', 'json', $context));
                unset($data['PaymentInformation']);
            }
            elseif (\array_key_exists('PaymentInformation', $data) && $data['PaymentInformation'] === null) {
                $object->setPaymentInformation(null);
            }
            if (\array_key_exists('Service', $data) && $data['Service'] !== null) {
                $object->setService($this->denormalizer->denormalize($data['Service'], 'ShipStream\\Ups\\Api\\Model\\FreightRateRequestService', 'json', $context));
                unset($data['Service']);
            }
            elseif (\array_key_exists('Service', $data) && $data['Service'] === null) {
                $object->setService(null);
            }
            if (\array_key_exists('HandlingUnitOne', $data) && $data['HandlingUnitOne'] !== null) {
                $object->setHandlingUnitOne($this->denormalizer->denormalize($data['HandlingUnitOne'], 'ShipStream\\Ups\\Api\\Model\\FreightRateRequestHandlingUnitOne', 'json', $context));
                unset($data['HandlingUnitOne']);
            }
            elseif (\array_key_exists('HandlingUnitOne', $data) && $data['HandlingUnitOne'] === null) {
                $object->setHandlingUnitOne(null);
            }
            if (\array_key_exists('HandlingUnitTwo', $data) && $data['HandlingUnitTwo'] !== null) {
                $object->setHandlingUnitTwo($this->denormalizer->denormalize($data['HandlingUnitTwo'], 'ShipStream\\Ups\\Api\\Model\\FreightRateRequestHandlingUnitTwo', 'json', $context));
                unset($data['HandlingUnitTwo']);
            }
            elseif (\array_key_exists('HandlingUnitTwo', $data) && $data['HandlingUnitTwo'] === null) {
                $object->setHandlingUnitTwo(null);
            }
            if (\array_key_exists('Commodity', $data) && $data['Commodity'] !== null) {
                $values = [];
                foreach ($data['Commodity'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'ShipStream\\Ups\\Api\\Model\\FreightRateRequestCommodity', 'json', $context);
                }
                $object->setCommodity($values);
                unset($data['Commodity']);
            }
            elseif (\array_key_exists('Commodity', $data) && $data['Commodity'] === null) {
                $object->setCommodity(null);
            }
            if (\array_key_exists('ShipmentServiceOptions', $data) && $data['ShipmentServiceOptions'] !== null) {
                $object->setShipmentServiceOptions($this->denormalizer->denormalize($data['ShipmentServiceOptions'], 'ShipStream\\Ups\\Api\\Model\\FreightRateRequestShipmentServiceOptions', 'json', $context));
                unset($data['ShipmentServiceOptions']);
            }
            elseif (\array_key_exists('ShipmentServiceOptions', $data) && $data['ShipmentServiceOptions'] === null) {
                $object->setShipmentServiceOptions(null);
            }
            if (\array_key_exists('PickupRequest', $data) && $data['PickupRequest'] !== null) {
                $object->setPickupRequest($this->denormalizer->denormalize($data['PickupRequest'], 'ShipStream\\Ups\\Api\\Model\\FreightRateRequestPickupRequest', 'json', $context));
                unset($data['PickupRequest']);
            }
            elseif (\array_key_exists('PickupRequest', $data) && $data['PickupRequest'] === null) {
                $object->setPickupRequest(null);
            }
            if (\array_key_exists('AlternateRateOptions', $data) && $data['AlternateRateOptions'] !== null) {
                $object->setAlternateRateOptions($this->denormalizer->denormalize($data['AlternateRateOptions'], 'ShipStream\\Ups\\Api\\Model\\FreightRateRequestAlternateRateOptions', 'json', $context));
                unset($data['AlternateRateOptions']);
            }
            elseif (\array_key_exists('AlternateRateOptions', $data) && $data['AlternateRateOptions'] === null) {
                $object->setAlternateRateOptions(null);
            }
            if (\array_key_exists('GFPOptions', $data) && $data['GFPOptions'] !== null) {
                $object->setGFPOptions($this->denormalizer->denormalize($data['GFPOptions'], 'ShipStream\\Ups\\Api\\Model\\FreightRateRequestGFPOptions', 'json', $context));
                unset($data['GFPOptions']);
            }
            elseif (\array_key_exists('GFPOptions', $data) && $data['GFPOptions'] === null) {
                $object->setGFPOptions(null);
            }
            if (\array_key_exists('HandlingUnitWeight', $data) && $data['HandlingUnitWeight'] !== null) {
                $object->setHandlingUnitWeight($this->denormalizer->denormalize($data['HandlingUnitWeight'], 'ShipStream\\Ups\\Api\\Model\\FreightRateRequestHandlingUnitWeight', 'json', $context));
                unset($data['HandlingUnitWeight']);
            }
            elseif (\array_key_exists('HandlingUnitWeight', $data) && $data['HandlingUnitWeight'] === null) {
                $object->setHandlingUnitWeight(null);
            }
            if (\array_key_exists('AdjustedWeightIndicator', $data) && $data['AdjustedWeightIndicator'] !== null) {
                $object->setAdjustedWeightIndicator($data['AdjustedWeightIndicator']);
                unset($data['AdjustedWeightIndicator']);
            }
            elseif (\array_key_exists('AdjustedWeightIndicator', $data) && $data['AdjustedWeightIndicator'] === null) {
                $object->setAdjustedWeightIndicator(null);
            }
            if (\array_key_exists('TimeInTransitIndicator', $data) && $data['TimeInTransitIndicator'] !== null) {
                $object->setTimeInTransitIndicator($data['TimeInTransitIndicator']);
                unset($data['TimeInTransitIndicator']);
            }
            elseif (\array_key_exists('TimeInTransitIndicator', $data) && $data['TimeInTransitIndicator'] === null) {
                $object->setTimeInTransitIndicator(null);
            }
            if (\array_key_exists('HandlingUnits', $data) && $data['HandlingUnits'] !== null) {
                $values_1 = [];
                foreach ($data['HandlingUnits'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'ShipStream\\Ups\\Api\\Model\\FreightRateRequestHandlingUnits', 'json', $context);
                }
                $object->setHandlingUnits($values_1);
                unset($data['HandlingUnits']);
            }
            elseif (\array_key_exists('HandlingUnits', $data) && $data['HandlingUnits'] === null) {
                $object->setHandlingUnits(null);
            }
            if (\array_key_exists('AdjustedHeightIndicator', $data) && $data['AdjustedHeightIndicator'] !== null) {
                $object->setAdjustedHeightIndicator($data['AdjustedHeightIndicator']);
                unset($data['AdjustedHeightIndicator']);
            }
            elseif (\array_key_exists('AdjustedHeightIndicator', $data) && $data['AdjustedHeightIndicator'] === null) {
                $object->setAdjustedHeightIndicator(null);
            }
            if (\array_key_exists('DensityEligibleIndicator', $data) && $data['DensityEligibleIndicator'] !== null) {
                $object->setDensityEligibleIndicator($data['DensityEligibleIndicator']);
                unset($data['DensityEligibleIndicator']);
            }
            elseif (\array_key_exists('DensityEligibleIndicator', $data) && $data['DensityEligibleIndicator'] === null) {
                $object->setDensityEligibleIndicator(null);
            }
            if (\array_key_exists('QuoteNumberIndicator', $data) && $data['QuoteNumberIndicator'] !== null) {
                $object->setQuoteNumberIndicator($data['QuoteNumberIndicator']);
                unset($data['QuoteNumberIndicator']);
            }
            elseif (\array_key_exists('QuoteNumberIndicator', $data) && $data['QuoteNumberIndicator'] === null) {
                $object->setQuoteNumberIndicator(null);
            }
            foreach ($data as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_2;
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
            $data['Request'] = $this->normalizer->normalize($object->getRequest(), 'json', $context);
            $data['ShipFrom'] = $this->normalizer->normalize($object->getShipFrom(), 'json', $context);
            $data['ShipTo'] = $this->normalizer->normalize($object->getShipTo(), 'json', $context);
            $data['PaymentInformation'] = $this->normalizer->normalize($object->getPaymentInformation(), 'json', $context);
            $data['Service'] = $this->normalizer->normalize($object->getService(), 'json', $context);
            if ($object->isInitialized('handlingUnitOne') && null !== $object->getHandlingUnitOne()) {
                $data['HandlingUnitOne'] = $this->normalizer->normalize($object->getHandlingUnitOne(), 'json', $context);
            }
            if ($object->isInitialized('handlingUnitTwo') && null !== $object->getHandlingUnitTwo()) {
                $data['HandlingUnitTwo'] = $this->normalizer->normalize($object->getHandlingUnitTwo(), 'json', $context);
            }
            $values = [];
            foreach ($object->getCommodity() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['Commodity'] = $values;
            if ($object->isInitialized('shipmentServiceOptions') && null !== $object->getShipmentServiceOptions()) {
                $data['ShipmentServiceOptions'] = $this->normalizer->normalize($object->getShipmentServiceOptions(), 'json', $context);
            }
            if ($object->isInitialized('pickupRequest') && null !== $object->getPickupRequest()) {
                $data['PickupRequest'] = $this->normalizer->normalize($object->getPickupRequest(), 'json', $context);
            }
            if ($object->isInitialized('alternateRateOptions') && null !== $object->getAlternateRateOptions()) {
                $data['AlternateRateOptions'] = $this->normalizer->normalize($object->getAlternateRateOptions(), 'json', $context);
            }
            if ($object->isInitialized('gFPOptions') && null !== $object->getGFPOptions()) {
                $data['GFPOptions'] = $this->normalizer->normalize($object->getGFPOptions(), 'json', $context);
            }
            if ($object->isInitialized('handlingUnitWeight') && null !== $object->getHandlingUnitWeight()) {
                $data['HandlingUnitWeight'] = $this->normalizer->normalize($object->getHandlingUnitWeight(), 'json', $context);
            }
            if ($object->isInitialized('adjustedWeightIndicator') && null !== $object->getAdjustedWeightIndicator()) {
                $data['AdjustedWeightIndicator'] = $object->getAdjustedWeightIndicator();
            }
            if ($object->isInitialized('timeInTransitIndicator') && null !== $object->getTimeInTransitIndicator()) {
                $data['TimeInTransitIndicator'] = $object->getTimeInTransitIndicator();
            }
            if ($object->isInitialized('handlingUnits') && null !== $object->getHandlingUnits()) {
                $values_1 = [];
                foreach ($object->getHandlingUnits() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['HandlingUnits'] = $values_1;
            }
            if ($object->isInitialized('adjustedHeightIndicator') && null !== $object->getAdjustedHeightIndicator()) {
                $data['AdjustedHeightIndicator'] = $object->getAdjustedHeightIndicator();
            }
            if ($object->isInitialized('densityEligibleIndicator') && null !== $object->getDensityEligibleIndicator()) {
                $data['DensityEligibleIndicator'] = $object->getDensityEligibleIndicator();
            }
            if ($object->isInitialized('quoteNumberIndicator') && null !== $object->getQuoteNumberIndicator()) {
                $data['QuoteNumberIndicator'] = $object->getQuoteNumberIndicator();
            }
            foreach ($object as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_2;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['ShipStream\\Ups\\Api\\Model\\FreightRateRequest' => false];
        }
    }
}