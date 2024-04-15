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
    class FreightShipShipmentShipmentServiceOptionsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\FreightShipShipmentShipmentServiceOptions';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\FreightShipShipmentShipmentServiceOptions';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \ShipStream\Ups\Api\Model\FreightShipShipmentShipmentServiceOptions();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('EMailInformation', $data) && $data['EMailInformation'] !== null) {
                $values = [];
                foreach ($data['EMailInformation'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'ShipStream\\Ups\\Api\\Model\\ShipmentServiceOptionsEMailInformation', 'json', $context);
                }
                $object->setEMailInformation($values);
                unset($data['EMailInformation']);
            }
            elseif (\array_key_exists('EMailInformation', $data) && $data['EMailInformation'] === null) {
                $object->setEMailInformation(null);
            }
            if (\array_key_exists('PickupOptions', $data) && $data['PickupOptions'] !== null) {
                $object->setPickupOptions($this->denormalizer->denormalize($data['PickupOptions'], 'ShipStream\\Ups\\Api\\Model\\FreightShipmentServiceOptionsPickupOptions', 'json', $context));
                unset($data['PickupOptions']);
            }
            elseif (\array_key_exists('PickupOptions', $data) && $data['PickupOptions'] === null) {
                $object->setPickupOptions(null);
            }
            if (\array_key_exists('DeliveryOptions', $data) && $data['DeliveryOptions'] !== null) {
                $object->setDeliveryOptions($this->denormalizer->denormalize($data['DeliveryOptions'], 'ShipStream\\Ups\\Api\\Model\\FreightShipmentServiceOptionsDeliveryOptions', 'json', $context));
                unset($data['DeliveryOptions']);
            }
            elseif (\array_key_exists('DeliveryOptions', $data) && $data['DeliveryOptions'] === null) {
                $object->setDeliveryOptions(null);
            }
            if (\array_key_exists('OverSeasLeg', $data) && $data['OverSeasLeg'] !== null) {
                $object->setOverSeasLeg($this->denormalizer->denormalize($data['OverSeasLeg'], 'ShipStream\\Ups\\Api\\Model\\ShipmentServiceOptionsOverSeasLeg', 'json', $context));
                unset($data['OverSeasLeg']);
            }
            elseif (\array_key_exists('OverSeasLeg', $data) && $data['OverSeasLeg'] === null) {
                $object->setOverSeasLeg(null);
            }
            if (\array_key_exists('COD', $data) && $data['COD'] !== null) {
                $object->setCOD($this->denormalizer->denormalize($data['COD'], 'ShipStream\\Ups\\Api\\Model\\FreightShipmentServiceOptionsCOD', 'json', $context));
                unset($data['COD']);
            }
            elseif (\array_key_exists('COD', $data) && $data['COD'] === null) {
                $object->setCOD(null);
            }
            if (\array_key_exists('DangerousGoods', $data) && $data['DangerousGoods'] !== null) {
                $object->setDangerousGoods($this->denormalizer->denormalize($data['DangerousGoods'], 'ShipStream\\Ups\\Api\\Model\\FreightShipShipmentServiceOptionsDangerousGoods', 'json', $context));
                unset($data['DangerousGoods']);
            }
            elseif (\array_key_exists('DangerousGoods', $data) && $data['DangerousGoods'] === null) {
                $object->setDangerousGoods(null);
            }
            if (\array_key_exists('SortingAndSegregating', $data) && $data['SortingAndSegregating'] !== null) {
                $object->setSortingAndSegregating($this->denormalizer->denormalize($data['SortingAndSegregating'], 'ShipStream\\Ups\\Api\\Model\\ShipmentServiceOptionsSortingAndSegregating', 'json', $context));
                unset($data['SortingAndSegregating']);
            }
            elseif (\array_key_exists('SortingAndSegregating', $data) && $data['SortingAndSegregating'] === null) {
                $object->setSortingAndSegregating(null);
            }
            if (\array_key_exists('DeclaredValue', $data) && $data['DeclaredValue'] !== null) {
                $object->setDeclaredValue($this->denormalizer->denormalize($data['DeclaredValue'], 'ShipStream\\Ups\\Api\\Model\\ShipmentServiceOptionsDeclaredValue', 'json', $context));
                unset($data['DeclaredValue']);
            }
            elseif (\array_key_exists('DeclaredValue', $data) && $data['DeclaredValue'] === null) {
                $object->setDeclaredValue(null);
            }
            if (\array_key_exists('ExcessDeclaredValue', $data) && $data['ExcessDeclaredValue'] !== null) {
                $object->setExcessDeclaredValue($this->denormalizer->denormalize($data['ExcessDeclaredValue'], 'ShipStream\\Ups\\Api\\Model\\ShipmentServiceOptionsExcessDeclaredValue', 'json', $context));
                unset($data['ExcessDeclaredValue']);
            }
            elseif (\array_key_exists('ExcessDeclaredValue', $data) && $data['ExcessDeclaredValue'] === null) {
                $object->setExcessDeclaredValue(null);
            }
            if (\array_key_exists('HandlingCharge', $data) && $data['HandlingCharge'] !== null) {
                $object->setHandlingCharge($this->denormalizer->denormalize($data['HandlingCharge'], 'ShipStream\\Ups\\Api\\Model\\ShipmentServiceOptionsHandlingCharge', 'json', $context));
                unset($data['HandlingCharge']);
            }
            elseif (\array_key_exists('HandlingCharge', $data) && $data['HandlingCharge'] === null) {
                $object->setHandlingCharge(null);
            }
            if (\array_key_exists('FreezableProtectionIndicator', $data) && $data['FreezableProtectionIndicator'] !== null) {
                $object->setFreezableProtectionIndicator($data['FreezableProtectionIndicator']);
                unset($data['FreezableProtectionIndicator']);
            }
            elseif (\array_key_exists('FreezableProtectionIndicator', $data) && $data['FreezableProtectionIndicator'] === null) {
                $object->setFreezableProtectionIndicator(null);
            }
            if (\array_key_exists('ExtremeLengthIndicator', $data) && $data['ExtremeLengthIndicator'] !== null) {
                $object->setExtremeLengthIndicator($data['ExtremeLengthIndicator']);
                unset($data['ExtremeLengthIndicator']);
            }
            elseif (\array_key_exists('ExtremeLengthIndicator', $data) && $data['ExtremeLengthIndicator'] === null) {
                $object->setExtremeLengthIndicator(null);
            }
            if (\array_key_exists('LinearFeet', $data) && $data['LinearFeet'] !== null) {
                $object->setLinearFeet($data['LinearFeet']);
                unset($data['LinearFeet']);
            }
            elseif (\array_key_exists('LinearFeet', $data) && $data['LinearFeet'] === null) {
                $object->setLinearFeet(null);
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
            if ($object->isInitialized('eMailInformation') && null !== $object->getEMailInformation()) {
                $values = [];
                foreach ($object->getEMailInformation() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['EMailInformation'] = $values;
            }
            if ($object->isInitialized('pickupOptions') && null !== $object->getPickupOptions()) {
                $data['PickupOptions'] = $this->normalizer->normalize($object->getPickupOptions(), 'json', $context);
            }
            if ($object->isInitialized('deliveryOptions') && null !== $object->getDeliveryOptions()) {
                $data['DeliveryOptions'] = $this->normalizer->normalize($object->getDeliveryOptions(), 'json', $context);
            }
            if ($object->isInitialized('overSeasLeg') && null !== $object->getOverSeasLeg()) {
                $data['OverSeasLeg'] = $this->normalizer->normalize($object->getOverSeasLeg(), 'json', $context);
            }
            if ($object->isInitialized('cOD') && null !== $object->getCOD()) {
                $data['COD'] = $this->normalizer->normalize($object->getCOD(), 'json', $context);
            }
            if ($object->isInitialized('dangerousGoods') && null !== $object->getDangerousGoods()) {
                $data['DangerousGoods'] = $this->normalizer->normalize($object->getDangerousGoods(), 'json', $context);
            }
            if ($object->isInitialized('sortingAndSegregating') && null !== $object->getSortingAndSegregating()) {
                $data['SortingAndSegregating'] = $this->normalizer->normalize($object->getSortingAndSegregating(), 'json', $context);
            }
            if ($object->isInitialized('declaredValue') && null !== $object->getDeclaredValue()) {
                $data['DeclaredValue'] = $this->normalizer->normalize($object->getDeclaredValue(), 'json', $context);
            }
            if ($object->isInitialized('excessDeclaredValue') && null !== $object->getExcessDeclaredValue()) {
                $data['ExcessDeclaredValue'] = $this->normalizer->normalize($object->getExcessDeclaredValue(), 'json', $context);
            }
            if ($object->isInitialized('handlingCharge') && null !== $object->getHandlingCharge()) {
                $data['HandlingCharge'] = $this->normalizer->normalize($object->getHandlingCharge(), 'json', $context);
            }
            if ($object->isInitialized('freezableProtectionIndicator') && null !== $object->getFreezableProtectionIndicator()) {
                $data['FreezableProtectionIndicator'] = $object->getFreezableProtectionIndicator();
            }
            if ($object->isInitialized('extremeLengthIndicator') && null !== $object->getExtremeLengthIndicator()) {
                $data['ExtremeLengthIndicator'] = $object->getExtremeLengthIndicator();
            }
            if ($object->isInitialized('linearFeet') && null !== $object->getLinearFeet()) {
                $data['LinearFeet'] = $object->getLinearFeet();
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
            return ['ShipStream\\Ups\\Api\\Model\\FreightShipShipmentShipmentServiceOptions' => false];
        }
    }
} else {
    class FreightShipShipmentShipmentServiceOptionsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\FreightShipShipmentShipmentServiceOptions';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\FreightShipShipmentShipmentServiceOptions';
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
            $object = new \ShipStream\Ups\Api\Model\FreightShipShipmentShipmentServiceOptions();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('EMailInformation', $data) && $data['EMailInformation'] !== null) {
                $values = [];
                foreach ($data['EMailInformation'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'ShipStream\\Ups\\Api\\Model\\ShipmentServiceOptionsEMailInformation', 'json', $context);
                }
                $object->setEMailInformation($values);
                unset($data['EMailInformation']);
            }
            elseif (\array_key_exists('EMailInformation', $data) && $data['EMailInformation'] === null) {
                $object->setEMailInformation(null);
            }
            if (\array_key_exists('PickupOptions', $data) && $data['PickupOptions'] !== null) {
                $object->setPickupOptions($this->denormalizer->denormalize($data['PickupOptions'], 'ShipStream\\Ups\\Api\\Model\\FreightShipmentServiceOptionsPickupOptions', 'json', $context));
                unset($data['PickupOptions']);
            }
            elseif (\array_key_exists('PickupOptions', $data) && $data['PickupOptions'] === null) {
                $object->setPickupOptions(null);
            }
            if (\array_key_exists('DeliveryOptions', $data) && $data['DeliveryOptions'] !== null) {
                $object->setDeliveryOptions($this->denormalizer->denormalize($data['DeliveryOptions'], 'ShipStream\\Ups\\Api\\Model\\FreightShipmentServiceOptionsDeliveryOptions', 'json', $context));
                unset($data['DeliveryOptions']);
            }
            elseif (\array_key_exists('DeliveryOptions', $data) && $data['DeliveryOptions'] === null) {
                $object->setDeliveryOptions(null);
            }
            if (\array_key_exists('OverSeasLeg', $data) && $data['OverSeasLeg'] !== null) {
                $object->setOverSeasLeg($this->denormalizer->denormalize($data['OverSeasLeg'], 'ShipStream\\Ups\\Api\\Model\\ShipmentServiceOptionsOverSeasLeg', 'json', $context));
                unset($data['OverSeasLeg']);
            }
            elseif (\array_key_exists('OverSeasLeg', $data) && $data['OverSeasLeg'] === null) {
                $object->setOverSeasLeg(null);
            }
            if (\array_key_exists('COD', $data) && $data['COD'] !== null) {
                $object->setCOD($this->denormalizer->denormalize($data['COD'], 'ShipStream\\Ups\\Api\\Model\\FreightShipmentServiceOptionsCOD', 'json', $context));
                unset($data['COD']);
            }
            elseif (\array_key_exists('COD', $data) && $data['COD'] === null) {
                $object->setCOD(null);
            }
            if (\array_key_exists('DangerousGoods', $data) && $data['DangerousGoods'] !== null) {
                $object->setDangerousGoods($this->denormalizer->denormalize($data['DangerousGoods'], 'ShipStream\\Ups\\Api\\Model\\FreightShipShipmentServiceOptionsDangerousGoods', 'json', $context));
                unset($data['DangerousGoods']);
            }
            elseif (\array_key_exists('DangerousGoods', $data) && $data['DangerousGoods'] === null) {
                $object->setDangerousGoods(null);
            }
            if (\array_key_exists('SortingAndSegregating', $data) && $data['SortingAndSegregating'] !== null) {
                $object->setSortingAndSegregating($this->denormalizer->denormalize($data['SortingAndSegregating'], 'ShipStream\\Ups\\Api\\Model\\ShipmentServiceOptionsSortingAndSegregating', 'json', $context));
                unset($data['SortingAndSegregating']);
            }
            elseif (\array_key_exists('SortingAndSegregating', $data) && $data['SortingAndSegregating'] === null) {
                $object->setSortingAndSegregating(null);
            }
            if (\array_key_exists('DeclaredValue', $data) && $data['DeclaredValue'] !== null) {
                $object->setDeclaredValue($this->denormalizer->denormalize($data['DeclaredValue'], 'ShipStream\\Ups\\Api\\Model\\ShipmentServiceOptionsDeclaredValue', 'json', $context));
                unset($data['DeclaredValue']);
            }
            elseif (\array_key_exists('DeclaredValue', $data) && $data['DeclaredValue'] === null) {
                $object->setDeclaredValue(null);
            }
            if (\array_key_exists('ExcessDeclaredValue', $data) && $data['ExcessDeclaredValue'] !== null) {
                $object->setExcessDeclaredValue($this->denormalizer->denormalize($data['ExcessDeclaredValue'], 'ShipStream\\Ups\\Api\\Model\\ShipmentServiceOptionsExcessDeclaredValue', 'json', $context));
                unset($data['ExcessDeclaredValue']);
            }
            elseif (\array_key_exists('ExcessDeclaredValue', $data) && $data['ExcessDeclaredValue'] === null) {
                $object->setExcessDeclaredValue(null);
            }
            if (\array_key_exists('HandlingCharge', $data) && $data['HandlingCharge'] !== null) {
                $object->setHandlingCharge($this->denormalizer->denormalize($data['HandlingCharge'], 'ShipStream\\Ups\\Api\\Model\\ShipmentServiceOptionsHandlingCharge', 'json', $context));
                unset($data['HandlingCharge']);
            }
            elseif (\array_key_exists('HandlingCharge', $data) && $data['HandlingCharge'] === null) {
                $object->setHandlingCharge(null);
            }
            if (\array_key_exists('FreezableProtectionIndicator', $data) && $data['FreezableProtectionIndicator'] !== null) {
                $object->setFreezableProtectionIndicator($data['FreezableProtectionIndicator']);
                unset($data['FreezableProtectionIndicator']);
            }
            elseif (\array_key_exists('FreezableProtectionIndicator', $data) && $data['FreezableProtectionIndicator'] === null) {
                $object->setFreezableProtectionIndicator(null);
            }
            if (\array_key_exists('ExtremeLengthIndicator', $data) && $data['ExtremeLengthIndicator'] !== null) {
                $object->setExtremeLengthIndicator($data['ExtremeLengthIndicator']);
                unset($data['ExtremeLengthIndicator']);
            }
            elseif (\array_key_exists('ExtremeLengthIndicator', $data) && $data['ExtremeLengthIndicator'] === null) {
                $object->setExtremeLengthIndicator(null);
            }
            if (\array_key_exists('LinearFeet', $data) && $data['LinearFeet'] !== null) {
                $object->setLinearFeet($data['LinearFeet']);
                unset($data['LinearFeet']);
            }
            elseif (\array_key_exists('LinearFeet', $data) && $data['LinearFeet'] === null) {
                $object->setLinearFeet(null);
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
            if ($object->isInitialized('eMailInformation') && null !== $object->getEMailInformation()) {
                $values = [];
                foreach ($object->getEMailInformation() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['EMailInformation'] = $values;
            }
            if ($object->isInitialized('pickupOptions') && null !== $object->getPickupOptions()) {
                $data['PickupOptions'] = $this->normalizer->normalize($object->getPickupOptions(), 'json', $context);
            }
            if ($object->isInitialized('deliveryOptions') && null !== $object->getDeliveryOptions()) {
                $data['DeliveryOptions'] = $this->normalizer->normalize($object->getDeliveryOptions(), 'json', $context);
            }
            if ($object->isInitialized('overSeasLeg') && null !== $object->getOverSeasLeg()) {
                $data['OverSeasLeg'] = $this->normalizer->normalize($object->getOverSeasLeg(), 'json', $context);
            }
            if ($object->isInitialized('cOD') && null !== $object->getCOD()) {
                $data['COD'] = $this->normalizer->normalize($object->getCOD(), 'json', $context);
            }
            if ($object->isInitialized('dangerousGoods') && null !== $object->getDangerousGoods()) {
                $data['DangerousGoods'] = $this->normalizer->normalize($object->getDangerousGoods(), 'json', $context);
            }
            if ($object->isInitialized('sortingAndSegregating') && null !== $object->getSortingAndSegregating()) {
                $data['SortingAndSegregating'] = $this->normalizer->normalize($object->getSortingAndSegregating(), 'json', $context);
            }
            if ($object->isInitialized('declaredValue') && null !== $object->getDeclaredValue()) {
                $data['DeclaredValue'] = $this->normalizer->normalize($object->getDeclaredValue(), 'json', $context);
            }
            if ($object->isInitialized('excessDeclaredValue') && null !== $object->getExcessDeclaredValue()) {
                $data['ExcessDeclaredValue'] = $this->normalizer->normalize($object->getExcessDeclaredValue(), 'json', $context);
            }
            if ($object->isInitialized('handlingCharge') && null !== $object->getHandlingCharge()) {
                $data['HandlingCharge'] = $this->normalizer->normalize($object->getHandlingCharge(), 'json', $context);
            }
            if ($object->isInitialized('freezableProtectionIndicator') && null !== $object->getFreezableProtectionIndicator()) {
                $data['FreezableProtectionIndicator'] = $object->getFreezableProtectionIndicator();
            }
            if ($object->isInitialized('extremeLengthIndicator') && null !== $object->getExtremeLengthIndicator()) {
                $data['ExtremeLengthIndicator'] = $object->getExtremeLengthIndicator();
            }
            if ($object->isInitialized('linearFeet') && null !== $object->getLinearFeet()) {
                $data['LinearFeet'] = $object->getLinearFeet();
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
            return ['ShipStream\\Ups\\Api\\Model\\FreightShipShipmentShipmentServiceOptions' => false];
        }
    }
}