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
    class FreightShipResponseShipmentResultsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\FreightShipResponseShipmentResults';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\FreightShipResponseShipmentResults';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \ShipStream\Ups\Api\Model\FreightShipResponseShipmentResults();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('PickupRequestConfirmationNumber', $data)) {
                $object->setPickupRequestConfirmationNumber($data['PickupRequestConfirmationNumber']);
                unset($data['PickupRequestConfirmationNumber']);
            }
            if (\array_key_exists('DeliveryDate', $data)) {
                $object->setDeliveryDate($data['DeliveryDate']);
                unset($data['DeliveryDate']);
            }
            if (\array_key_exists('ShipmentNumber', $data)) {
                $object->setShipmentNumber($data['ShipmentNumber']);
                unset($data['ShipmentNumber']);
            }
            if (\array_key_exists('BOLID', $data)) {
                $object->setBOLID($data['BOLID']);
                unset($data['BOLID']);
            }
            if (\array_key_exists('GuaranteedIndicator', $data)) {
                $object->setGuaranteedIndicator($data['GuaranteedIndicator']);
                unset($data['GuaranteedIndicator']);
            }
            if (\array_key_exists('MinimumChargeAppliedIndicator', $data)) {
                $object->setMinimumChargeAppliedIndicator($data['MinimumChargeAppliedIndicator']);
                unset($data['MinimumChargeAppliedIndicator']);
            }
            if (\array_key_exists('Rate', $data)) {
                $values = [];
                foreach ($data['Rate'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'ShipStream\\Ups\\Api\\Model\\ShipmentResultsRate', 'json', $context);
                }
                $object->setRate($values);
                unset($data['Rate']);
            }
            if (\array_key_exists('FreightDensityRate', $data)) {
                $object->setFreightDensityRate($this->denormalizer->denormalize($data['FreightDensityRate'], 'ShipStream\\Ups\\Api\\Model\\ShipmentResultsFreightDensityRate', 'json', $context));
                unset($data['FreightDensityRate']);
            }
            if (\array_key_exists('TotalShipmentCharge', $data)) {
                $object->setTotalShipmentCharge($this->denormalizer->denormalize($data['TotalShipmentCharge'], 'ShipStream\\Ups\\Api\\Model\\ShipmentResultsTotalShipmentCharge', 'json', $context));
                unset($data['TotalShipmentCharge']);
            }
            if (\array_key_exists('BillableShipmentWeight', $data)) {
                $object->setBillableShipmentWeight($this->denormalizer->denormalize($data['BillableShipmentWeight'], 'ShipStream\\Ups\\Api\\Model\\ShipmentResultsBillableShipmentWeight', 'json', $context));
                unset($data['BillableShipmentWeight']);
            }
            if (\array_key_exists('Service', $data)) {
                $object->setService($this->denormalizer->denormalize($data['Service'], 'ShipStream\\Ups\\Api\\Model\\ShipmentResultsService', 'json', $context));
                unset($data['Service']);
            }
            if (\array_key_exists('Documents', $data)) {
                $object->setDocuments($this->denormalizer->denormalize($data['Documents'], 'ShipStream\\Ups\\Api\\Model\\ShipmentResultsDocuments', 'json', $context));
                unset($data['Documents']);
            }
            if (\array_key_exists('TimeInTransit', $data)) {
                $object->setTimeInTransit($this->denormalizer->denormalize($data['TimeInTransit'], 'ShipStream\\Ups\\Api\\Model\\ShipmentResultsTimeInTransit', 'json', $context));
                unset($data['TimeInTransit']);
            }
            foreach ($data as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_1;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('pickupRequestConfirmationNumber') && null !== $object->getPickupRequestConfirmationNumber()) {
                $data['PickupRequestConfirmationNumber'] = $object->getPickupRequestConfirmationNumber();
            }
            if ($object->isInitialized('deliveryDate') && null !== $object->getDeliveryDate()) {
                $data['DeliveryDate'] = $object->getDeliveryDate();
            }
            if ($object->isInitialized('shipmentNumber') && null !== $object->getShipmentNumber()) {
                $data['ShipmentNumber'] = $object->getShipmentNumber();
            }
            if ($object->isInitialized('bOLID') && null !== $object->getBOLID()) {
                $data['BOLID'] = $object->getBOLID();
            }
            if ($object->isInitialized('guaranteedIndicator') && null !== $object->getGuaranteedIndicator()) {
                $data['GuaranteedIndicator'] = $object->getGuaranteedIndicator();
            }
            if ($object->isInitialized('minimumChargeAppliedIndicator') && null !== $object->getMinimumChargeAppliedIndicator()) {
                $data['MinimumChargeAppliedIndicator'] = $object->getMinimumChargeAppliedIndicator();
            }
            if ($object->isInitialized('rate') && null !== $object->getRate()) {
                $values = [];
                foreach ($object->getRate() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['Rate'] = $values;
            }
            if ($object->isInitialized('freightDensityRate') && null !== $object->getFreightDensityRate()) {
                $data['FreightDensityRate'] = $this->normalizer->normalize($object->getFreightDensityRate(), 'json', $context);
            }
            if ($object->isInitialized('totalShipmentCharge') && null !== $object->getTotalShipmentCharge()) {
                $data['TotalShipmentCharge'] = $this->normalizer->normalize($object->getTotalShipmentCharge(), 'json', $context);
            }
            if ($object->isInitialized('billableShipmentWeight') && null !== $object->getBillableShipmentWeight()) {
                $data['BillableShipmentWeight'] = $this->normalizer->normalize($object->getBillableShipmentWeight(), 'json', $context);
            }
            if ($object->isInitialized('service') && null !== $object->getService()) {
                $data['Service'] = $this->normalizer->normalize($object->getService(), 'json', $context);
            }
            if ($object->isInitialized('documents') && null !== $object->getDocuments()) {
                $data['Documents'] = $this->normalizer->normalize($object->getDocuments(), 'json', $context);
            }
            if ($object->isInitialized('timeInTransit') && null !== $object->getTimeInTransit()) {
                $data['TimeInTransit'] = $this->normalizer->normalize($object->getTimeInTransit(), 'json', $context);
            }
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['ShipStream\\Ups\\Api\\Model\\FreightShipResponseShipmentResults' => false];
        }
    }
} else {
    class FreightShipResponseShipmentResultsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\FreightShipResponseShipmentResults';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\FreightShipResponseShipmentResults';
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
            $object = new \ShipStream\Ups\Api\Model\FreightShipResponseShipmentResults();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('PickupRequestConfirmationNumber', $data)) {
                $object->setPickupRequestConfirmationNumber($data['PickupRequestConfirmationNumber']);
                unset($data['PickupRequestConfirmationNumber']);
            }
            if (\array_key_exists('DeliveryDate', $data)) {
                $object->setDeliveryDate($data['DeliveryDate']);
                unset($data['DeliveryDate']);
            }
            if (\array_key_exists('ShipmentNumber', $data)) {
                $object->setShipmentNumber($data['ShipmentNumber']);
                unset($data['ShipmentNumber']);
            }
            if (\array_key_exists('BOLID', $data)) {
                $object->setBOLID($data['BOLID']);
                unset($data['BOLID']);
            }
            if (\array_key_exists('GuaranteedIndicator', $data)) {
                $object->setGuaranteedIndicator($data['GuaranteedIndicator']);
                unset($data['GuaranteedIndicator']);
            }
            if (\array_key_exists('MinimumChargeAppliedIndicator', $data)) {
                $object->setMinimumChargeAppliedIndicator($data['MinimumChargeAppliedIndicator']);
                unset($data['MinimumChargeAppliedIndicator']);
            }
            if (\array_key_exists('Rate', $data)) {
                $values = [];
                foreach ($data['Rate'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'ShipStream\\Ups\\Api\\Model\\ShipmentResultsRate', 'json', $context);
                }
                $object->setRate($values);
                unset($data['Rate']);
            }
            if (\array_key_exists('FreightDensityRate', $data)) {
                $object->setFreightDensityRate($this->denormalizer->denormalize($data['FreightDensityRate'], 'ShipStream\\Ups\\Api\\Model\\ShipmentResultsFreightDensityRate', 'json', $context));
                unset($data['FreightDensityRate']);
            }
            if (\array_key_exists('TotalShipmentCharge', $data)) {
                $object->setTotalShipmentCharge($this->denormalizer->denormalize($data['TotalShipmentCharge'], 'ShipStream\\Ups\\Api\\Model\\ShipmentResultsTotalShipmentCharge', 'json', $context));
                unset($data['TotalShipmentCharge']);
            }
            if (\array_key_exists('BillableShipmentWeight', $data)) {
                $object->setBillableShipmentWeight($this->denormalizer->denormalize($data['BillableShipmentWeight'], 'ShipStream\\Ups\\Api\\Model\\ShipmentResultsBillableShipmentWeight', 'json', $context));
                unset($data['BillableShipmentWeight']);
            }
            if (\array_key_exists('Service', $data)) {
                $object->setService($this->denormalizer->denormalize($data['Service'], 'ShipStream\\Ups\\Api\\Model\\ShipmentResultsService', 'json', $context));
                unset($data['Service']);
            }
            if (\array_key_exists('Documents', $data)) {
                $object->setDocuments($this->denormalizer->denormalize($data['Documents'], 'ShipStream\\Ups\\Api\\Model\\ShipmentResultsDocuments', 'json', $context));
                unset($data['Documents']);
            }
            if (\array_key_exists('TimeInTransit', $data)) {
                $object->setTimeInTransit($this->denormalizer->denormalize($data['TimeInTransit'], 'ShipStream\\Ups\\Api\\Model\\ShipmentResultsTimeInTransit', 'json', $context));
                unset($data['TimeInTransit']);
            }
            foreach ($data as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_1;
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
            if ($object->isInitialized('pickupRequestConfirmationNumber') && null !== $object->getPickupRequestConfirmationNumber()) {
                $data['PickupRequestConfirmationNumber'] = $object->getPickupRequestConfirmationNumber();
            }
            if ($object->isInitialized('deliveryDate') && null !== $object->getDeliveryDate()) {
                $data['DeliveryDate'] = $object->getDeliveryDate();
            }
            if ($object->isInitialized('shipmentNumber') && null !== $object->getShipmentNumber()) {
                $data['ShipmentNumber'] = $object->getShipmentNumber();
            }
            if ($object->isInitialized('bOLID') && null !== $object->getBOLID()) {
                $data['BOLID'] = $object->getBOLID();
            }
            if ($object->isInitialized('guaranteedIndicator') && null !== $object->getGuaranteedIndicator()) {
                $data['GuaranteedIndicator'] = $object->getGuaranteedIndicator();
            }
            if ($object->isInitialized('minimumChargeAppliedIndicator') && null !== $object->getMinimumChargeAppliedIndicator()) {
                $data['MinimumChargeAppliedIndicator'] = $object->getMinimumChargeAppliedIndicator();
            }
            if ($object->isInitialized('rate') && null !== $object->getRate()) {
                $values = [];
                foreach ($object->getRate() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['Rate'] = $values;
            }
            if ($object->isInitialized('freightDensityRate') && null !== $object->getFreightDensityRate()) {
                $data['FreightDensityRate'] = $this->normalizer->normalize($object->getFreightDensityRate(), 'json', $context);
            }
            if ($object->isInitialized('totalShipmentCharge') && null !== $object->getTotalShipmentCharge()) {
                $data['TotalShipmentCharge'] = $this->normalizer->normalize($object->getTotalShipmentCharge(), 'json', $context);
            }
            if ($object->isInitialized('billableShipmentWeight') && null !== $object->getBillableShipmentWeight()) {
                $data['BillableShipmentWeight'] = $this->normalizer->normalize($object->getBillableShipmentWeight(), 'json', $context);
            }
            if ($object->isInitialized('service') && null !== $object->getService()) {
                $data['Service'] = $this->normalizer->normalize($object->getService(), 'json', $context);
            }
            if ($object->isInitialized('documents') && null !== $object->getDocuments()) {
                $data['Documents'] = $this->normalizer->normalize($object->getDocuments(), 'json', $context);
            }
            if ($object->isInitialized('timeInTransit') && null !== $object->getTimeInTransit()) {
                $data['TimeInTransit'] = $this->normalizer->normalize($object->getTimeInTransit(), 'json', $context);
            }
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['ShipStream\\Ups\\Api\\Model\\FreightShipResponseShipmentResults' => false];
        }
    }
}