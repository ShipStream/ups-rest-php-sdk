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
    class FreightShipRequestShipmentNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\FreightShipRequestShipment';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\FreightShipRequestShipment';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \ShipStream\Ups\Api\Model\FreightShipRequestShipment();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('ShipFrom', $data) && $data['ShipFrom'] !== null) {
                $object->setShipFrom($this->denormalizer->denormalize($data['ShipFrom'], 'ShipStream\\Ups\\Api\\Model\\FreightShipShipmentShipFrom', 'json', $context));
                unset($data['ShipFrom']);
            }
            elseif (\array_key_exists('ShipFrom', $data) && $data['ShipFrom'] === null) {
                $object->setShipFrom(null);
            }
            if (\array_key_exists('ShipperNumber', $data) && $data['ShipperNumber'] !== null) {
                $object->setShipperNumber($data['ShipperNumber']);
                unset($data['ShipperNumber']);
            }
            elseif (\array_key_exists('ShipperNumber', $data) && $data['ShipperNumber'] === null) {
                $object->setShipperNumber(null);
            }
            if (\array_key_exists('ShipTo', $data) && $data['ShipTo'] !== null) {
                $object->setShipTo($this->denormalizer->denormalize($data['ShipTo'], 'ShipStream\\Ups\\Api\\Model\\FreightShipShipmentShipTo', 'json', $context));
                unset($data['ShipTo']);
            }
            elseif (\array_key_exists('ShipTo', $data) && $data['ShipTo'] === null) {
                $object->setShipTo(null);
            }
            if (\array_key_exists('PaymentInformation', $data) && $data['PaymentInformation'] !== null) {
                $object->setPaymentInformation($this->denormalizer->denormalize($data['PaymentInformation'], 'ShipStream\\Ups\\Api\\Model\\FreightShipShipmentPaymentInformation', 'json', $context));
                unset($data['PaymentInformation']);
            }
            elseif (\array_key_exists('PaymentInformation', $data) && $data['PaymentInformation'] === null) {
                $object->setPaymentInformation(null);
            }
            if (\array_key_exists('Service', $data) && $data['Service'] !== null) {
                $object->setService($this->denormalizer->denormalize($data['Service'], 'ShipStream\\Ups\\Api\\Model\\ShipmentService', 'json', $context));
                unset($data['Service']);
            }
            elseif (\array_key_exists('Service', $data) && $data['Service'] === null) {
                $object->setService(null);
            }
            if (\array_key_exists('HandlingUnitOne', $data) && $data['HandlingUnitOne'] !== null) {
                $object->setHandlingUnitOne($this->denormalizer->denormalize($data['HandlingUnitOne'], 'ShipStream\\Ups\\Api\\Model\\ShipmentHandlingUnitOne', 'json', $context));
                unset($data['HandlingUnitOne']);
            }
            elseif (\array_key_exists('HandlingUnitOne', $data) && $data['HandlingUnitOne'] === null) {
                $object->setHandlingUnitOne(null);
            }
            if (\array_key_exists('HandlingUnitTwo', $data) && $data['HandlingUnitTwo'] !== null) {
                $object->setHandlingUnitTwo($this->denormalizer->denormalize($data['HandlingUnitTwo'], 'ShipStream\\Ups\\Api\\Model\\ShipmentHandlingUnitTwo', 'json', $context));
                unset($data['HandlingUnitTwo']);
            }
            elseif (\array_key_exists('HandlingUnitTwo', $data) && $data['HandlingUnitTwo'] === null) {
                $object->setHandlingUnitTwo(null);
            }
            if (\array_key_exists('ExistingShipmentID', $data) && $data['ExistingShipmentID'] !== null) {
                $object->setExistingShipmentID($this->denormalizer->denormalize($data['ExistingShipmentID'], 'ShipStream\\Ups\\Api\\Model\\ShipmentExistingShipmentID', 'json', $context));
                unset($data['ExistingShipmentID']);
            }
            elseif (\array_key_exists('ExistingShipmentID', $data) && $data['ExistingShipmentID'] === null) {
                $object->setExistingShipmentID(null);
            }
            if (\array_key_exists('HandlingInstructions', $data) && $data['HandlingInstructions'] !== null) {
                $object->setHandlingInstructions($data['HandlingInstructions']);
                unset($data['HandlingInstructions']);
            }
            elseif (\array_key_exists('HandlingInstructions', $data) && $data['HandlingInstructions'] === null) {
                $object->setHandlingInstructions(null);
            }
            if (\array_key_exists('DeliveryInstructions', $data) && $data['DeliveryInstructions'] !== null) {
                $object->setDeliveryInstructions($data['DeliveryInstructions']);
                unset($data['DeliveryInstructions']);
            }
            elseif (\array_key_exists('DeliveryInstructions', $data) && $data['DeliveryInstructions'] === null) {
                $object->setDeliveryInstructions(null);
            }
            if (\array_key_exists('PickupInstructions', $data) && $data['PickupInstructions'] !== null) {
                $object->setPickupInstructions($data['PickupInstructions']);
                unset($data['PickupInstructions']);
            }
            elseif (\array_key_exists('PickupInstructions', $data) && $data['PickupInstructions'] === null) {
                $object->setPickupInstructions(null);
            }
            if (\array_key_exists('Commodity', $data) && $data['Commodity'] !== null) {
                $values = [];
                foreach ($data['Commodity'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'ShipStream\\Ups\\Api\\Model\\ShipmentCommodity', 'json', $context);
                }
                $object->setCommodity($values);
                unset($data['Commodity']);
            }
            elseif (\array_key_exists('Commodity', $data) && $data['Commodity'] === null) {
                $object->setCommodity(null);
            }
            if (\array_key_exists('Reference', $data) && $data['Reference'] !== null) {
                $values_1 = [];
                foreach ($data['Reference'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'ShipStream\\Ups\\Api\\Model\\ShipmentReference', 'json', $context);
                }
                $object->setReference($values_1);
                unset($data['Reference']);
            }
            elseif (\array_key_exists('Reference', $data) && $data['Reference'] === null) {
                $object->setReference(null);
            }
            if (\array_key_exists('ShipmentServiceOptions', $data) && $data['ShipmentServiceOptions'] !== null) {
                $object->setShipmentServiceOptions($this->denormalizer->denormalize($data['ShipmentServiceOptions'], 'ShipStream\\Ups\\Api\\Model\\FreightShipShipmentShipmentServiceOptions', 'json', $context));
                unset($data['ShipmentServiceOptions']);
            }
            elseif (\array_key_exists('ShipmentServiceOptions', $data) && $data['ShipmentServiceOptions'] === null) {
                $object->setShipmentServiceOptions(null);
            }
            if (\array_key_exists('PickupRequest', $data) && $data['PickupRequest'] !== null) {
                $object->setPickupRequest($this->denormalizer->denormalize($data['PickupRequest'], 'ShipStream\\Ups\\Api\\Model\\ShipmentPickupRequest', 'json', $context));
                unset($data['PickupRequest']);
            }
            elseif (\array_key_exists('PickupRequest', $data) && $data['PickupRequest'] === null) {
                $object->setPickupRequest(null);
            }
            if (\array_key_exists('Documents', $data) && $data['Documents'] !== null) {
                $object->setDocuments($this->denormalizer->denormalize($data['Documents'], 'ShipStream\\Ups\\Api\\Model\\ShipmentDocuments', 'json', $context));
                unset($data['Documents']);
            }
            elseif (\array_key_exists('Documents', $data) && $data['Documents'] === null) {
                $object->setDocuments(null);
            }
            if (\array_key_exists('TimeInTransitIndicator', $data) && $data['TimeInTransitIndicator'] !== null) {
                $object->setTimeInTransitIndicator($data['TimeInTransitIndicator']);
                unset($data['TimeInTransitIndicator']);
            }
            elseif (\array_key_exists('TimeInTransitIndicator', $data) && $data['TimeInTransitIndicator'] === null) {
                $object->setTimeInTransitIndicator(null);
            }
            if (\array_key_exists('HandlingUnits', $data) && $data['HandlingUnits'] !== null) {
                $object->setHandlingUnits($this->denormalizer->denormalize($data['HandlingUnits'], 'ShipStream\\Ups\\Api\\Model\\ShipmentHandlingUnits', 'json', $context));
                unset($data['HandlingUnits']);
            }
            elseif (\array_key_exists('HandlingUnits', $data) && $data['HandlingUnits'] === null) {
                $object->setHandlingUnits(null);
            }
            if (\array_key_exists('DensityEligibleIndicator', $data) && $data['DensityEligibleIndicator'] !== null) {
                $object->setDensityEligibleIndicator($data['DensityEligibleIndicator']);
                unset($data['DensityEligibleIndicator']);
            }
            elseif (\array_key_exists('DensityEligibleIndicator', $data) && $data['DensityEligibleIndicator'] === null) {
                $object->setDensityEligibleIndicator(null);
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
            $data['ShipFrom'] = $this->normalizer->normalize($object->getShipFrom(), 'json', $context);
            $data['ShipperNumber'] = $object->getShipperNumber();
            $data['ShipTo'] = $this->normalizer->normalize($object->getShipTo(), 'json', $context);
            $data['PaymentInformation'] = $this->normalizer->normalize($object->getPaymentInformation(), 'json', $context);
            $data['Service'] = $this->normalizer->normalize($object->getService(), 'json', $context);
            if ($object->isInitialized('handlingUnitOne') && null !== $object->getHandlingUnitOne()) {
                $data['HandlingUnitOne'] = $this->normalizer->normalize($object->getHandlingUnitOne(), 'json', $context);
            }
            if ($object->isInitialized('handlingUnitTwo') && null !== $object->getHandlingUnitTwo()) {
                $data['HandlingUnitTwo'] = $this->normalizer->normalize($object->getHandlingUnitTwo(), 'json', $context);
            }
            if ($object->isInitialized('existingShipmentID') && null !== $object->getExistingShipmentID()) {
                $data['ExistingShipmentID'] = $this->normalizer->normalize($object->getExistingShipmentID(), 'json', $context);
            }
            if ($object->isInitialized('handlingInstructions') && null !== $object->getHandlingInstructions()) {
                $data['HandlingInstructions'] = $object->getHandlingInstructions();
            }
            if ($object->isInitialized('deliveryInstructions') && null !== $object->getDeliveryInstructions()) {
                $data['DeliveryInstructions'] = $object->getDeliveryInstructions();
            }
            if ($object->isInitialized('pickupInstructions') && null !== $object->getPickupInstructions()) {
                $data['PickupInstructions'] = $object->getPickupInstructions();
            }
            $values = [];
            foreach ($object->getCommodity() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['Commodity'] = $values;
            if ($object->isInitialized('reference') && null !== $object->getReference()) {
                $values_1 = [];
                foreach ($object->getReference() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['Reference'] = $values_1;
            }
            if ($object->isInitialized('shipmentServiceOptions') && null !== $object->getShipmentServiceOptions()) {
                $data['ShipmentServiceOptions'] = $this->normalizer->normalize($object->getShipmentServiceOptions(), 'json', $context);
            }
            if ($object->isInitialized('pickupRequest') && null !== $object->getPickupRequest()) {
                $data['PickupRequest'] = $this->normalizer->normalize($object->getPickupRequest(), 'json', $context);
            }
            if ($object->isInitialized('documents') && null !== $object->getDocuments()) {
                $data['Documents'] = $this->normalizer->normalize($object->getDocuments(), 'json', $context);
            }
            if ($object->isInitialized('timeInTransitIndicator') && null !== $object->getTimeInTransitIndicator()) {
                $data['TimeInTransitIndicator'] = $object->getTimeInTransitIndicator();
            }
            if ($object->isInitialized('handlingUnits') && null !== $object->getHandlingUnits()) {
                $data['HandlingUnits'] = $this->normalizer->normalize($object->getHandlingUnits(), 'json', $context);
            }
            if ($object->isInitialized('densityEligibleIndicator') && null !== $object->getDensityEligibleIndicator()) {
                $data['DensityEligibleIndicator'] = $object->getDensityEligibleIndicator();
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
            return ['ShipStream\\Ups\\Api\\Model\\FreightShipRequestShipment' => false];
        }
    }
} else {
    class FreightShipRequestShipmentNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\FreightShipRequestShipment';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\FreightShipRequestShipment';
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
            $object = new \ShipStream\Ups\Api\Model\FreightShipRequestShipment();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('ShipFrom', $data) && $data['ShipFrom'] !== null) {
                $object->setShipFrom($this->denormalizer->denormalize($data['ShipFrom'], 'ShipStream\\Ups\\Api\\Model\\FreightShipShipmentShipFrom', 'json', $context));
                unset($data['ShipFrom']);
            }
            elseif (\array_key_exists('ShipFrom', $data) && $data['ShipFrom'] === null) {
                $object->setShipFrom(null);
            }
            if (\array_key_exists('ShipperNumber', $data) && $data['ShipperNumber'] !== null) {
                $object->setShipperNumber($data['ShipperNumber']);
                unset($data['ShipperNumber']);
            }
            elseif (\array_key_exists('ShipperNumber', $data) && $data['ShipperNumber'] === null) {
                $object->setShipperNumber(null);
            }
            if (\array_key_exists('ShipTo', $data) && $data['ShipTo'] !== null) {
                $object->setShipTo($this->denormalizer->denormalize($data['ShipTo'], 'ShipStream\\Ups\\Api\\Model\\FreightShipShipmentShipTo', 'json', $context));
                unset($data['ShipTo']);
            }
            elseif (\array_key_exists('ShipTo', $data) && $data['ShipTo'] === null) {
                $object->setShipTo(null);
            }
            if (\array_key_exists('PaymentInformation', $data) && $data['PaymentInformation'] !== null) {
                $object->setPaymentInformation($this->denormalizer->denormalize($data['PaymentInformation'], 'ShipStream\\Ups\\Api\\Model\\FreightShipShipmentPaymentInformation', 'json', $context));
                unset($data['PaymentInformation']);
            }
            elseif (\array_key_exists('PaymentInformation', $data) && $data['PaymentInformation'] === null) {
                $object->setPaymentInformation(null);
            }
            if (\array_key_exists('Service', $data) && $data['Service'] !== null) {
                $object->setService($this->denormalizer->denormalize($data['Service'], 'ShipStream\\Ups\\Api\\Model\\ShipmentService', 'json', $context));
                unset($data['Service']);
            }
            elseif (\array_key_exists('Service', $data) && $data['Service'] === null) {
                $object->setService(null);
            }
            if (\array_key_exists('HandlingUnitOne', $data) && $data['HandlingUnitOne'] !== null) {
                $object->setHandlingUnitOne($this->denormalizer->denormalize($data['HandlingUnitOne'], 'ShipStream\\Ups\\Api\\Model\\ShipmentHandlingUnitOne', 'json', $context));
                unset($data['HandlingUnitOne']);
            }
            elseif (\array_key_exists('HandlingUnitOne', $data) && $data['HandlingUnitOne'] === null) {
                $object->setHandlingUnitOne(null);
            }
            if (\array_key_exists('HandlingUnitTwo', $data) && $data['HandlingUnitTwo'] !== null) {
                $object->setHandlingUnitTwo($this->denormalizer->denormalize($data['HandlingUnitTwo'], 'ShipStream\\Ups\\Api\\Model\\ShipmentHandlingUnitTwo', 'json', $context));
                unset($data['HandlingUnitTwo']);
            }
            elseif (\array_key_exists('HandlingUnitTwo', $data) && $data['HandlingUnitTwo'] === null) {
                $object->setHandlingUnitTwo(null);
            }
            if (\array_key_exists('ExistingShipmentID', $data) && $data['ExistingShipmentID'] !== null) {
                $object->setExistingShipmentID($this->denormalizer->denormalize($data['ExistingShipmentID'], 'ShipStream\\Ups\\Api\\Model\\ShipmentExistingShipmentID', 'json', $context));
                unset($data['ExistingShipmentID']);
            }
            elseif (\array_key_exists('ExistingShipmentID', $data) && $data['ExistingShipmentID'] === null) {
                $object->setExistingShipmentID(null);
            }
            if (\array_key_exists('HandlingInstructions', $data) && $data['HandlingInstructions'] !== null) {
                $object->setHandlingInstructions($data['HandlingInstructions']);
                unset($data['HandlingInstructions']);
            }
            elseif (\array_key_exists('HandlingInstructions', $data) && $data['HandlingInstructions'] === null) {
                $object->setHandlingInstructions(null);
            }
            if (\array_key_exists('DeliveryInstructions', $data) && $data['DeliveryInstructions'] !== null) {
                $object->setDeliveryInstructions($data['DeliveryInstructions']);
                unset($data['DeliveryInstructions']);
            }
            elseif (\array_key_exists('DeliveryInstructions', $data) && $data['DeliveryInstructions'] === null) {
                $object->setDeliveryInstructions(null);
            }
            if (\array_key_exists('PickupInstructions', $data) && $data['PickupInstructions'] !== null) {
                $object->setPickupInstructions($data['PickupInstructions']);
                unset($data['PickupInstructions']);
            }
            elseif (\array_key_exists('PickupInstructions', $data) && $data['PickupInstructions'] === null) {
                $object->setPickupInstructions(null);
            }
            if (\array_key_exists('Commodity', $data) && $data['Commodity'] !== null) {
                $values = [];
                foreach ($data['Commodity'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'ShipStream\\Ups\\Api\\Model\\ShipmentCommodity', 'json', $context);
                }
                $object->setCommodity($values);
                unset($data['Commodity']);
            }
            elseif (\array_key_exists('Commodity', $data) && $data['Commodity'] === null) {
                $object->setCommodity(null);
            }
            if (\array_key_exists('Reference', $data) && $data['Reference'] !== null) {
                $values_1 = [];
                foreach ($data['Reference'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'ShipStream\\Ups\\Api\\Model\\ShipmentReference', 'json', $context);
                }
                $object->setReference($values_1);
                unset($data['Reference']);
            }
            elseif (\array_key_exists('Reference', $data) && $data['Reference'] === null) {
                $object->setReference(null);
            }
            if (\array_key_exists('ShipmentServiceOptions', $data) && $data['ShipmentServiceOptions'] !== null) {
                $object->setShipmentServiceOptions($this->denormalizer->denormalize($data['ShipmentServiceOptions'], 'ShipStream\\Ups\\Api\\Model\\FreightShipShipmentShipmentServiceOptions', 'json', $context));
                unset($data['ShipmentServiceOptions']);
            }
            elseif (\array_key_exists('ShipmentServiceOptions', $data) && $data['ShipmentServiceOptions'] === null) {
                $object->setShipmentServiceOptions(null);
            }
            if (\array_key_exists('PickupRequest', $data) && $data['PickupRequest'] !== null) {
                $object->setPickupRequest($this->denormalizer->denormalize($data['PickupRequest'], 'ShipStream\\Ups\\Api\\Model\\ShipmentPickupRequest', 'json', $context));
                unset($data['PickupRequest']);
            }
            elseif (\array_key_exists('PickupRequest', $data) && $data['PickupRequest'] === null) {
                $object->setPickupRequest(null);
            }
            if (\array_key_exists('Documents', $data) && $data['Documents'] !== null) {
                $object->setDocuments($this->denormalizer->denormalize($data['Documents'], 'ShipStream\\Ups\\Api\\Model\\ShipmentDocuments', 'json', $context));
                unset($data['Documents']);
            }
            elseif (\array_key_exists('Documents', $data) && $data['Documents'] === null) {
                $object->setDocuments(null);
            }
            if (\array_key_exists('TimeInTransitIndicator', $data) && $data['TimeInTransitIndicator'] !== null) {
                $object->setTimeInTransitIndicator($data['TimeInTransitIndicator']);
                unset($data['TimeInTransitIndicator']);
            }
            elseif (\array_key_exists('TimeInTransitIndicator', $data) && $data['TimeInTransitIndicator'] === null) {
                $object->setTimeInTransitIndicator(null);
            }
            if (\array_key_exists('HandlingUnits', $data) && $data['HandlingUnits'] !== null) {
                $object->setHandlingUnits($this->denormalizer->denormalize($data['HandlingUnits'], 'ShipStream\\Ups\\Api\\Model\\ShipmentHandlingUnits', 'json', $context));
                unset($data['HandlingUnits']);
            }
            elseif (\array_key_exists('HandlingUnits', $data) && $data['HandlingUnits'] === null) {
                $object->setHandlingUnits(null);
            }
            if (\array_key_exists('DensityEligibleIndicator', $data) && $data['DensityEligibleIndicator'] !== null) {
                $object->setDensityEligibleIndicator($data['DensityEligibleIndicator']);
                unset($data['DensityEligibleIndicator']);
            }
            elseif (\array_key_exists('DensityEligibleIndicator', $data) && $data['DensityEligibleIndicator'] === null) {
                $object->setDensityEligibleIndicator(null);
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
            $data['ShipFrom'] = $this->normalizer->normalize($object->getShipFrom(), 'json', $context);
            $data['ShipperNumber'] = $object->getShipperNumber();
            $data['ShipTo'] = $this->normalizer->normalize($object->getShipTo(), 'json', $context);
            $data['PaymentInformation'] = $this->normalizer->normalize($object->getPaymentInformation(), 'json', $context);
            $data['Service'] = $this->normalizer->normalize($object->getService(), 'json', $context);
            if ($object->isInitialized('handlingUnitOne') && null !== $object->getHandlingUnitOne()) {
                $data['HandlingUnitOne'] = $this->normalizer->normalize($object->getHandlingUnitOne(), 'json', $context);
            }
            if ($object->isInitialized('handlingUnitTwo') && null !== $object->getHandlingUnitTwo()) {
                $data['HandlingUnitTwo'] = $this->normalizer->normalize($object->getHandlingUnitTwo(), 'json', $context);
            }
            if ($object->isInitialized('existingShipmentID') && null !== $object->getExistingShipmentID()) {
                $data['ExistingShipmentID'] = $this->normalizer->normalize($object->getExistingShipmentID(), 'json', $context);
            }
            if ($object->isInitialized('handlingInstructions') && null !== $object->getHandlingInstructions()) {
                $data['HandlingInstructions'] = $object->getHandlingInstructions();
            }
            if ($object->isInitialized('deliveryInstructions') && null !== $object->getDeliveryInstructions()) {
                $data['DeliveryInstructions'] = $object->getDeliveryInstructions();
            }
            if ($object->isInitialized('pickupInstructions') && null !== $object->getPickupInstructions()) {
                $data['PickupInstructions'] = $object->getPickupInstructions();
            }
            $values = [];
            foreach ($object->getCommodity() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['Commodity'] = $values;
            if ($object->isInitialized('reference') && null !== $object->getReference()) {
                $values_1 = [];
                foreach ($object->getReference() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['Reference'] = $values_1;
            }
            if ($object->isInitialized('shipmentServiceOptions') && null !== $object->getShipmentServiceOptions()) {
                $data['ShipmentServiceOptions'] = $this->normalizer->normalize($object->getShipmentServiceOptions(), 'json', $context);
            }
            if ($object->isInitialized('pickupRequest') && null !== $object->getPickupRequest()) {
                $data['PickupRequest'] = $this->normalizer->normalize($object->getPickupRequest(), 'json', $context);
            }
            if ($object->isInitialized('documents') && null !== $object->getDocuments()) {
                $data['Documents'] = $this->normalizer->normalize($object->getDocuments(), 'json', $context);
            }
            if ($object->isInitialized('timeInTransitIndicator') && null !== $object->getTimeInTransitIndicator()) {
                $data['TimeInTransitIndicator'] = $object->getTimeInTransitIndicator();
            }
            if ($object->isInitialized('handlingUnits') && null !== $object->getHandlingUnits()) {
                $data['HandlingUnits'] = $this->normalizer->normalize($object->getHandlingUnits(), 'json', $context);
            }
            if ($object->isInitialized('densityEligibleIndicator') && null !== $object->getDensityEligibleIndicator()) {
                $data['DensityEligibleIndicator'] = $object->getDensityEligibleIndicator();
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
            return ['ShipStream\\Ups\\Api\\Model\\FreightShipRequestShipment' => false];
        }
    }
}