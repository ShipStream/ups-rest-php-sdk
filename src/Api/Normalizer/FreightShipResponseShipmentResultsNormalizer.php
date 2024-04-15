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
            if (\array_key_exists('PickupRequestConfirmationNumber', $data) && $data['PickupRequestConfirmationNumber'] !== null) {
                $object->setPickupRequestConfirmationNumber($data['PickupRequestConfirmationNumber']);
                unset($data['PickupRequestConfirmationNumber']);
            }
            elseif (\array_key_exists('PickupRequestConfirmationNumber', $data) && $data['PickupRequestConfirmationNumber'] === null) {
                $object->setPickupRequestConfirmationNumber(null);
            }
            if (\array_key_exists('DeliveryDate', $data) && $data['DeliveryDate'] !== null) {
                $object->setDeliveryDate($data['DeliveryDate']);
                unset($data['DeliveryDate']);
            }
            elseif (\array_key_exists('DeliveryDate', $data) && $data['DeliveryDate'] === null) {
                $object->setDeliveryDate(null);
            }
            if (\array_key_exists('ShipmentNumber', $data) && $data['ShipmentNumber'] !== null) {
                $object->setShipmentNumber($data['ShipmentNumber']);
                unset($data['ShipmentNumber']);
            }
            elseif (\array_key_exists('ShipmentNumber', $data) && $data['ShipmentNumber'] === null) {
                $object->setShipmentNumber(null);
            }
            if (\array_key_exists('BOLID', $data) && $data['BOLID'] !== null) {
                $object->setBOLID($data['BOLID']);
                unset($data['BOLID']);
            }
            elseif (\array_key_exists('BOLID', $data) && $data['BOLID'] === null) {
                $object->setBOLID(null);
            }
            if (\array_key_exists('GuaranteedIndicator', $data) && $data['GuaranteedIndicator'] !== null) {
                $object->setGuaranteedIndicator($data['GuaranteedIndicator']);
                unset($data['GuaranteedIndicator']);
            }
            elseif (\array_key_exists('GuaranteedIndicator', $data) && $data['GuaranteedIndicator'] === null) {
                $object->setGuaranteedIndicator(null);
            }
            if (\array_key_exists('MinimumChargeAppliedIndicator', $data) && $data['MinimumChargeAppliedIndicator'] !== null) {
                $object->setMinimumChargeAppliedIndicator($data['MinimumChargeAppliedIndicator']);
                unset($data['MinimumChargeAppliedIndicator']);
            }
            elseif (\array_key_exists('MinimumChargeAppliedIndicator', $data) && $data['MinimumChargeAppliedIndicator'] === null) {
                $object->setMinimumChargeAppliedIndicator(null);
            }
            if (\array_key_exists('Rate', $data) && $data['Rate'] !== null) {
                $values = [];
                foreach ($data['Rate'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'ShipStream\\Ups\\Api\\Model\\ShipmentResultsRate', 'json', $context);
                }
                $object->setRate($values);
                unset($data['Rate']);
            }
            elseif (\array_key_exists('Rate', $data) && $data['Rate'] === null) {
                $object->setRate(null);
            }
            if (\array_key_exists('FreightDensityRate', $data) && $data['FreightDensityRate'] !== null) {
                $object->setFreightDensityRate($this->denormalizer->denormalize($data['FreightDensityRate'], 'ShipStream\\Ups\\Api\\Model\\ShipmentResultsFreightDensityRate', 'json', $context));
                unset($data['FreightDensityRate']);
            }
            elseif (\array_key_exists('FreightDensityRate', $data) && $data['FreightDensityRate'] === null) {
                $object->setFreightDensityRate(null);
            }
            if (\array_key_exists('TotalShipmentCharge', $data) && $data['TotalShipmentCharge'] !== null) {
                $object->setTotalShipmentCharge($this->denormalizer->denormalize($data['TotalShipmentCharge'], 'ShipStream\\Ups\\Api\\Model\\ShipmentResultsTotalShipmentCharge', 'json', $context));
                unset($data['TotalShipmentCharge']);
            }
            elseif (\array_key_exists('TotalShipmentCharge', $data) && $data['TotalShipmentCharge'] === null) {
                $object->setTotalShipmentCharge(null);
            }
            if (\array_key_exists('BillableShipmentWeight', $data) && $data['BillableShipmentWeight'] !== null) {
                $object->setBillableShipmentWeight($this->denormalizer->denormalize($data['BillableShipmentWeight'], 'ShipStream\\Ups\\Api\\Model\\ShipmentResultsBillableShipmentWeight', 'json', $context));
                unset($data['BillableShipmentWeight']);
            }
            elseif (\array_key_exists('BillableShipmentWeight', $data) && $data['BillableShipmentWeight'] === null) {
                $object->setBillableShipmentWeight(null);
            }
            if (\array_key_exists('Service', $data) && $data['Service'] !== null) {
                $object->setService($this->denormalizer->denormalize($data['Service'], 'ShipStream\\Ups\\Api\\Model\\ShipmentResultsService', 'json', $context));
                unset($data['Service']);
            }
            elseif (\array_key_exists('Service', $data) && $data['Service'] === null) {
                $object->setService(null);
            }
            if (\array_key_exists('Documents', $data) && $data['Documents'] !== null) {
                $object->setDocuments($this->denormalizer->denormalize($data['Documents'], 'ShipStream\\Ups\\Api\\Model\\ShipmentResultsDocuments', 'json', $context));
                unset($data['Documents']);
            }
            elseif (\array_key_exists('Documents', $data) && $data['Documents'] === null) {
                $object->setDocuments(null);
            }
            if (\array_key_exists('TimeInTransit', $data) && $data['TimeInTransit'] !== null) {
                $object->setTimeInTransit($this->denormalizer->denormalize($data['TimeInTransit'], 'ShipStream\\Ups\\Api\\Model\\ShipmentResultsTimeInTransit', 'json', $context));
                unset($data['TimeInTransit']);
            }
            elseif (\array_key_exists('TimeInTransit', $data) && $data['TimeInTransit'] === null) {
                $object->setTimeInTransit(null);
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
            if (\array_key_exists('PickupRequestConfirmationNumber', $data) && $data['PickupRequestConfirmationNumber'] !== null) {
                $object->setPickupRequestConfirmationNumber($data['PickupRequestConfirmationNumber']);
                unset($data['PickupRequestConfirmationNumber']);
            }
            elseif (\array_key_exists('PickupRequestConfirmationNumber', $data) && $data['PickupRequestConfirmationNumber'] === null) {
                $object->setPickupRequestConfirmationNumber(null);
            }
            if (\array_key_exists('DeliveryDate', $data) && $data['DeliveryDate'] !== null) {
                $object->setDeliveryDate($data['DeliveryDate']);
                unset($data['DeliveryDate']);
            }
            elseif (\array_key_exists('DeliveryDate', $data) && $data['DeliveryDate'] === null) {
                $object->setDeliveryDate(null);
            }
            if (\array_key_exists('ShipmentNumber', $data) && $data['ShipmentNumber'] !== null) {
                $object->setShipmentNumber($data['ShipmentNumber']);
                unset($data['ShipmentNumber']);
            }
            elseif (\array_key_exists('ShipmentNumber', $data) && $data['ShipmentNumber'] === null) {
                $object->setShipmentNumber(null);
            }
            if (\array_key_exists('BOLID', $data) && $data['BOLID'] !== null) {
                $object->setBOLID($data['BOLID']);
                unset($data['BOLID']);
            }
            elseif (\array_key_exists('BOLID', $data) && $data['BOLID'] === null) {
                $object->setBOLID(null);
            }
            if (\array_key_exists('GuaranteedIndicator', $data) && $data['GuaranteedIndicator'] !== null) {
                $object->setGuaranteedIndicator($data['GuaranteedIndicator']);
                unset($data['GuaranteedIndicator']);
            }
            elseif (\array_key_exists('GuaranteedIndicator', $data) && $data['GuaranteedIndicator'] === null) {
                $object->setGuaranteedIndicator(null);
            }
            if (\array_key_exists('MinimumChargeAppliedIndicator', $data) && $data['MinimumChargeAppliedIndicator'] !== null) {
                $object->setMinimumChargeAppliedIndicator($data['MinimumChargeAppliedIndicator']);
                unset($data['MinimumChargeAppliedIndicator']);
            }
            elseif (\array_key_exists('MinimumChargeAppliedIndicator', $data) && $data['MinimumChargeAppliedIndicator'] === null) {
                $object->setMinimumChargeAppliedIndicator(null);
            }
            if (\array_key_exists('Rate', $data) && $data['Rate'] !== null) {
                $values = [];
                foreach ($data['Rate'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'ShipStream\\Ups\\Api\\Model\\ShipmentResultsRate', 'json', $context);
                }
                $object->setRate($values);
                unset($data['Rate']);
            }
            elseif (\array_key_exists('Rate', $data) && $data['Rate'] === null) {
                $object->setRate(null);
            }
            if (\array_key_exists('FreightDensityRate', $data) && $data['FreightDensityRate'] !== null) {
                $object->setFreightDensityRate($this->denormalizer->denormalize($data['FreightDensityRate'], 'ShipStream\\Ups\\Api\\Model\\ShipmentResultsFreightDensityRate', 'json', $context));
                unset($data['FreightDensityRate']);
            }
            elseif (\array_key_exists('FreightDensityRate', $data) && $data['FreightDensityRate'] === null) {
                $object->setFreightDensityRate(null);
            }
            if (\array_key_exists('TotalShipmentCharge', $data) && $data['TotalShipmentCharge'] !== null) {
                $object->setTotalShipmentCharge($this->denormalizer->denormalize($data['TotalShipmentCharge'], 'ShipStream\\Ups\\Api\\Model\\ShipmentResultsTotalShipmentCharge', 'json', $context));
                unset($data['TotalShipmentCharge']);
            }
            elseif (\array_key_exists('TotalShipmentCharge', $data) && $data['TotalShipmentCharge'] === null) {
                $object->setTotalShipmentCharge(null);
            }
            if (\array_key_exists('BillableShipmentWeight', $data) && $data['BillableShipmentWeight'] !== null) {
                $object->setBillableShipmentWeight($this->denormalizer->denormalize($data['BillableShipmentWeight'], 'ShipStream\\Ups\\Api\\Model\\ShipmentResultsBillableShipmentWeight', 'json', $context));
                unset($data['BillableShipmentWeight']);
            }
            elseif (\array_key_exists('BillableShipmentWeight', $data) && $data['BillableShipmentWeight'] === null) {
                $object->setBillableShipmentWeight(null);
            }
            if (\array_key_exists('Service', $data) && $data['Service'] !== null) {
                $object->setService($this->denormalizer->denormalize($data['Service'], 'ShipStream\\Ups\\Api\\Model\\ShipmentResultsService', 'json', $context));
                unset($data['Service']);
            }
            elseif (\array_key_exists('Service', $data) && $data['Service'] === null) {
                $object->setService(null);
            }
            if (\array_key_exists('Documents', $data) && $data['Documents'] !== null) {
                $object->setDocuments($this->denormalizer->denormalize($data['Documents'], 'ShipStream\\Ups\\Api\\Model\\ShipmentResultsDocuments', 'json', $context));
                unset($data['Documents']);
            }
            elseif (\array_key_exists('Documents', $data) && $data['Documents'] === null) {
                $object->setDocuments(null);
            }
            if (\array_key_exists('TimeInTransit', $data) && $data['TimeInTransit'] !== null) {
                $object->setTimeInTransit($this->denormalizer->denormalize($data['TimeInTransit'], 'ShipStream\\Ups\\Api\\Model\\ShipmentResultsTimeInTransit', 'json', $context));
                unset($data['TimeInTransit']);
            }
            elseif (\array_key_exists('TimeInTransit', $data) && $data['TimeInTransit'] === null) {
                $object->setTimeInTransit(null);
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