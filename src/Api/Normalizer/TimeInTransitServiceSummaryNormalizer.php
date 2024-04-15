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
    class TimeInTransitServiceSummaryNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\TimeInTransitServiceSummary';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\TimeInTransitServiceSummary';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
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
            if (\array_key_exists('Service', $data) && $data['Service'] !== null) {
                $object->setService($this->denormalizer->denormalize($data['Service'], 'ShipStream\\Ups\\Api\\Model\\ServiceSummaryService', 'json', $context));
                unset($data['Service']);
            }
            elseif (\array_key_exists('Service', $data) && $data['Service'] === null) {
                $object->setService(null);
            }
            if (\array_key_exists('GuaranteedIndicator', $data) && $data['GuaranteedIndicator'] !== null) {
                $object->setGuaranteedIndicator($data['GuaranteedIndicator']);
                unset($data['GuaranteedIndicator']);
            }
            elseif (\array_key_exists('GuaranteedIndicator', $data) && $data['GuaranteedIndicator'] === null) {
                $object->setGuaranteedIndicator(null);
            }
            if (\array_key_exists('Disclaimer', $data) && $data['Disclaimer'] !== null) {
                $object->setDisclaimer($data['Disclaimer']);
                unset($data['Disclaimer']);
            }
            elseif (\array_key_exists('Disclaimer', $data) && $data['Disclaimer'] === null) {
                $object->setDisclaimer(null);
            }
            if (\array_key_exists('EstimatedArrival', $data) && $data['EstimatedArrival'] !== null) {
                $object->setEstimatedArrival($this->denormalizer->denormalize($data['EstimatedArrival'], 'ShipStream\\Ups\\Api\\Model\\ServiceSummaryEstimatedArrival', 'json', $context));
                unset($data['EstimatedArrival']);
            }
            elseif (\array_key_exists('EstimatedArrival', $data) && $data['EstimatedArrival'] === null) {
                $object->setEstimatedArrival(null);
            }
            if (\array_key_exists('SaturdayDelivery', $data) && $data['SaturdayDelivery'] !== null) {
                $object->setSaturdayDelivery($data['SaturdayDelivery']);
                unset($data['SaturdayDelivery']);
            }
            elseif (\array_key_exists('SaturdayDelivery', $data) && $data['SaturdayDelivery'] === null) {
                $object->setSaturdayDelivery(null);
            }
            if (\array_key_exists('SaturdayDeliveryDisclaimer', $data) && $data['SaturdayDeliveryDisclaimer'] !== null) {
                $object->setSaturdayDeliveryDisclaimer($data['SaturdayDeliveryDisclaimer']);
                unset($data['SaturdayDeliveryDisclaimer']);
            }
            elseif (\array_key_exists('SaturdayDeliveryDisclaimer', $data) && $data['SaturdayDeliveryDisclaimer'] === null) {
                $object->setSaturdayDeliveryDisclaimer(null);
            }
            if (\array_key_exists('SundayDelivery', $data) && $data['SundayDelivery'] !== null) {
                $object->setSundayDelivery($data['SundayDelivery']);
                unset($data['SundayDelivery']);
            }
            elseif (\array_key_exists('SundayDelivery', $data) && $data['SundayDelivery'] === null) {
                $object->setSundayDelivery(null);
            }
            if (\array_key_exists('SundayDeliveryDisclaimer', $data) && $data['SundayDeliveryDisclaimer'] !== null) {
                $object->setSundayDeliveryDisclaimer($data['SundayDeliveryDisclaimer']);
                unset($data['SundayDeliveryDisclaimer']);
            }
            elseif (\array_key_exists('SundayDeliveryDisclaimer', $data) && $data['SundayDeliveryDisclaimer'] === null) {
                $object->setSundayDeliveryDisclaimer(null);
            }
            foreach ($data as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            $data['Service'] = $this->normalizer->normalize($object->getService(), 'json', $context);
            if ($object->isInitialized('guaranteedIndicator') && null !== $object->getGuaranteedIndicator()) {
                $data['GuaranteedIndicator'] = $object->getGuaranteedIndicator();
            }
            if ($object->isInitialized('disclaimer') && null !== $object->getDisclaimer()) {
                $data['Disclaimer'] = $object->getDisclaimer();
            }
            $data['EstimatedArrival'] = $this->normalizer->normalize($object->getEstimatedArrival(), 'json', $context);
            if ($object->isInitialized('saturdayDelivery') && null !== $object->getSaturdayDelivery()) {
                $data['SaturdayDelivery'] = $object->getSaturdayDelivery();
            }
            if ($object->isInitialized('saturdayDeliveryDisclaimer') && null !== $object->getSaturdayDeliveryDisclaimer()) {
                $data['SaturdayDeliveryDisclaimer'] = $object->getSaturdayDeliveryDisclaimer();
            }
            if ($object->isInitialized('sundayDelivery') && null !== $object->getSundayDelivery()) {
                $data['SundayDelivery'] = $object->getSundayDelivery();
            }
            if ($object->isInitialized('sundayDeliveryDisclaimer') && null !== $object->getSundayDeliveryDisclaimer()) {
                $data['SundayDeliveryDisclaimer'] = $object->getSundayDeliveryDisclaimer();
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['ShipStream\\Ups\\Api\\Model\\TimeInTransitServiceSummary' => false];
        }
    }
} else {
    class TimeInTransitServiceSummaryNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\TimeInTransitServiceSummary';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\TimeInTransitServiceSummary';
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
            $object = new \ShipStream\Ups\Api\Model\TimeInTransitServiceSummary();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Service', $data) && $data['Service'] !== null) {
                $object->setService($this->denormalizer->denormalize($data['Service'], 'ShipStream\\Ups\\Api\\Model\\ServiceSummaryService', 'json', $context));
                unset($data['Service']);
            }
            elseif (\array_key_exists('Service', $data) && $data['Service'] === null) {
                $object->setService(null);
            }
            if (\array_key_exists('GuaranteedIndicator', $data) && $data['GuaranteedIndicator'] !== null) {
                $object->setGuaranteedIndicator($data['GuaranteedIndicator']);
                unset($data['GuaranteedIndicator']);
            }
            elseif (\array_key_exists('GuaranteedIndicator', $data) && $data['GuaranteedIndicator'] === null) {
                $object->setGuaranteedIndicator(null);
            }
            if (\array_key_exists('Disclaimer', $data) && $data['Disclaimer'] !== null) {
                $object->setDisclaimer($data['Disclaimer']);
                unset($data['Disclaimer']);
            }
            elseif (\array_key_exists('Disclaimer', $data) && $data['Disclaimer'] === null) {
                $object->setDisclaimer(null);
            }
            if (\array_key_exists('EstimatedArrival', $data) && $data['EstimatedArrival'] !== null) {
                $object->setEstimatedArrival($this->denormalizer->denormalize($data['EstimatedArrival'], 'ShipStream\\Ups\\Api\\Model\\ServiceSummaryEstimatedArrival', 'json', $context));
                unset($data['EstimatedArrival']);
            }
            elseif (\array_key_exists('EstimatedArrival', $data) && $data['EstimatedArrival'] === null) {
                $object->setEstimatedArrival(null);
            }
            if (\array_key_exists('SaturdayDelivery', $data) && $data['SaturdayDelivery'] !== null) {
                $object->setSaturdayDelivery($data['SaturdayDelivery']);
                unset($data['SaturdayDelivery']);
            }
            elseif (\array_key_exists('SaturdayDelivery', $data) && $data['SaturdayDelivery'] === null) {
                $object->setSaturdayDelivery(null);
            }
            if (\array_key_exists('SaturdayDeliveryDisclaimer', $data) && $data['SaturdayDeliveryDisclaimer'] !== null) {
                $object->setSaturdayDeliveryDisclaimer($data['SaturdayDeliveryDisclaimer']);
                unset($data['SaturdayDeliveryDisclaimer']);
            }
            elseif (\array_key_exists('SaturdayDeliveryDisclaimer', $data) && $data['SaturdayDeliveryDisclaimer'] === null) {
                $object->setSaturdayDeliveryDisclaimer(null);
            }
            if (\array_key_exists('SundayDelivery', $data) && $data['SundayDelivery'] !== null) {
                $object->setSundayDelivery($data['SundayDelivery']);
                unset($data['SundayDelivery']);
            }
            elseif (\array_key_exists('SundayDelivery', $data) && $data['SundayDelivery'] === null) {
                $object->setSundayDelivery(null);
            }
            if (\array_key_exists('SundayDeliveryDisclaimer', $data) && $data['SundayDeliveryDisclaimer'] !== null) {
                $object->setSundayDeliveryDisclaimer($data['SundayDeliveryDisclaimer']);
                unset($data['SundayDeliveryDisclaimer']);
            }
            elseif (\array_key_exists('SundayDeliveryDisclaimer', $data) && $data['SundayDeliveryDisclaimer'] === null) {
                $object->setSundayDeliveryDisclaimer(null);
            }
            foreach ($data as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value;
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
            $data['Service'] = $this->normalizer->normalize($object->getService(), 'json', $context);
            if ($object->isInitialized('guaranteedIndicator') && null !== $object->getGuaranteedIndicator()) {
                $data['GuaranteedIndicator'] = $object->getGuaranteedIndicator();
            }
            if ($object->isInitialized('disclaimer') && null !== $object->getDisclaimer()) {
                $data['Disclaimer'] = $object->getDisclaimer();
            }
            $data['EstimatedArrival'] = $this->normalizer->normalize($object->getEstimatedArrival(), 'json', $context);
            if ($object->isInitialized('saturdayDelivery') && null !== $object->getSaturdayDelivery()) {
                $data['SaturdayDelivery'] = $object->getSaturdayDelivery();
            }
            if ($object->isInitialized('saturdayDeliveryDisclaimer') && null !== $object->getSaturdayDeliveryDisclaimer()) {
                $data['SaturdayDeliveryDisclaimer'] = $object->getSaturdayDeliveryDisclaimer();
            }
            if ($object->isInitialized('sundayDelivery') && null !== $object->getSundayDelivery()) {
                $data['SundayDelivery'] = $object->getSundayDelivery();
            }
            if ($object->isInitialized('sundayDeliveryDisclaimer') && null !== $object->getSundayDeliveryDisclaimer()) {
                $data['SundayDeliveryDisclaimer'] = $object->getSundayDeliveryDisclaimer();
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['ShipStream\\Ups\\Api\\Model\\TimeInTransitServiceSummary' => false];
        }
    }
}