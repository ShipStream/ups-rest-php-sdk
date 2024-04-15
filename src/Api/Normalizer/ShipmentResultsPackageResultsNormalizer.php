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
    class ShipmentResultsPackageResultsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\ShipmentResultsPackageResults';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\ShipmentResultsPackageResults';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \ShipStream\Ups\Api\Model\ShipmentResultsPackageResults();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('TrackingNumber', $data) && $data['TrackingNumber'] !== null) {
                $object->setTrackingNumber($data['TrackingNumber']);
                unset($data['TrackingNumber']);
            }
            elseif (\array_key_exists('TrackingNumber', $data) && $data['TrackingNumber'] === null) {
                $object->setTrackingNumber(null);
            }
            if (\array_key_exists('RateModifier', $data) && $data['RateModifier'] !== null) {
                $object->setRateModifier($this->denormalizer->denormalize($data['RateModifier'], 'ShipStream\\Ups\\Api\\Model\\PackageResultsRateModifier', 'json', $context));
                unset($data['RateModifier']);
            }
            elseif (\array_key_exists('RateModifier', $data) && $data['RateModifier'] === null) {
                $object->setRateModifier(null);
            }
            if (\array_key_exists('BaseServiceCharge', $data) && $data['BaseServiceCharge'] !== null) {
                $object->setBaseServiceCharge($this->denormalizer->denormalize($data['BaseServiceCharge'], 'ShipStream\\Ups\\Api\\Model\\PackageResultsBaseServiceCharge', 'json', $context));
                unset($data['BaseServiceCharge']);
            }
            elseif (\array_key_exists('BaseServiceCharge', $data) && $data['BaseServiceCharge'] === null) {
                $object->setBaseServiceCharge(null);
            }
            if (\array_key_exists('ServiceOptionsCharges', $data) && $data['ServiceOptionsCharges'] !== null) {
                $object->setServiceOptionsCharges($this->denormalizer->denormalize($data['ServiceOptionsCharges'], 'ShipStream\\Ups\\Api\\Model\\PackageResultsServiceOptionsCharges', 'json', $context));
                unset($data['ServiceOptionsCharges']);
            }
            elseif (\array_key_exists('ServiceOptionsCharges', $data) && $data['ServiceOptionsCharges'] === null) {
                $object->setServiceOptionsCharges(null);
            }
            if (\array_key_exists('ShippingLabel', $data) && $data['ShippingLabel'] !== null) {
                $object->setShippingLabel($this->denormalizer->denormalize($data['ShippingLabel'], 'ShipStream\\Ups\\Api\\Model\\PackageResultsShippingLabel', 'json', $context));
                unset($data['ShippingLabel']);
            }
            elseif (\array_key_exists('ShippingLabel', $data) && $data['ShippingLabel'] === null) {
                $object->setShippingLabel(null);
            }
            if (\array_key_exists('ShippingReceipt', $data) && $data['ShippingReceipt'] !== null) {
                $object->setShippingReceipt($this->denormalizer->denormalize($data['ShippingReceipt'], 'ShipStream\\Ups\\Api\\Model\\PackageResultsShippingReceipt', 'json', $context));
                unset($data['ShippingReceipt']);
            }
            elseif (\array_key_exists('ShippingReceipt', $data) && $data['ShippingReceipt'] === null) {
                $object->setShippingReceipt(null);
            }
            if (\array_key_exists('USPSPICNumber', $data) && $data['USPSPICNumber'] !== null) {
                $object->setUSPSPICNumber($data['USPSPICNumber']);
                unset($data['USPSPICNumber']);
            }
            elseif (\array_key_exists('USPSPICNumber', $data) && $data['USPSPICNumber'] === null) {
                $object->setUSPSPICNumber(null);
            }
            if (\array_key_exists('CN22Number', $data) && $data['CN22Number'] !== null) {
                $object->setCN22Number($data['CN22Number']);
                unset($data['CN22Number']);
            }
            elseif (\array_key_exists('CN22Number', $data) && $data['CN22Number'] === null) {
                $object->setCN22Number(null);
            }
            if (\array_key_exists('Accessorial', $data) && $data['Accessorial'] !== null) {
                $values = [];
                foreach ($data['Accessorial'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'ShipStream\\Ups\\Api\\Model\\PackageResultsAccessorial', 'json', $context);
                }
                $object->setAccessorial($values);
                unset($data['Accessorial']);
            }
            elseif (\array_key_exists('Accessorial', $data) && $data['Accessorial'] === null) {
                $object->setAccessorial(null);
            }
            if (\array_key_exists('SimpleRate', $data) && $data['SimpleRate'] !== null) {
                $object->setSimpleRate($this->denormalizer->denormalize($data['SimpleRate'], 'ShipStream\\Ups\\Api\\Model\\PackageResultsSimpleRate', 'json', $context));
                unset($data['SimpleRate']);
            }
            elseif (\array_key_exists('SimpleRate', $data) && $data['SimpleRate'] === null) {
                $object->setSimpleRate(null);
            }
            if (\array_key_exists('Form', $data) && $data['Form'] !== null) {
                $object->setForm($this->denormalizer->denormalize($data['Form'], 'ShipStream\\Ups\\Api\\Model\\PackageResultsForm', 'json', $context));
                unset($data['Form']);
            }
            elseif (\array_key_exists('Form', $data) && $data['Form'] === null) {
                $object->setForm(null);
            }
            if (\array_key_exists('ItemizedCharges', $data) && $data['ItemizedCharges'] !== null) {
                $values_1 = [];
                foreach ($data['ItemizedCharges'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'ShipStream\\Ups\\Api\\Model\\PackageResultsItemizedCharges', 'json', $context);
                }
                $object->setItemizedCharges($values_1);
                unset($data['ItemizedCharges']);
            }
            elseif (\array_key_exists('ItemizedCharges', $data) && $data['ItemizedCharges'] === null) {
                $object->setItemizedCharges(null);
            }
            if (\array_key_exists('NegotiatedCharges', $data) && $data['NegotiatedCharges'] !== null) {
                $object->setNegotiatedCharges($this->denormalizer->denormalize($data['NegotiatedCharges'], 'ShipStream\\Ups\\Api\\Model\\PackageResultsNegotiatedCharges', 'json', $context));
                unset($data['NegotiatedCharges']);
            }
            elseif (\array_key_exists('NegotiatedCharges', $data) && $data['NegotiatedCharges'] === null) {
                $object->setNegotiatedCharges(null);
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
            $data['TrackingNumber'] = $object->getTrackingNumber();
            if ($object->isInitialized('rateModifier') && null !== $object->getRateModifier()) {
                $data['RateModifier'] = $this->normalizer->normalize($object->getRateModifier(), 'json', $context);
            }
            if ($object->isInitialized('baseServiceCharge') && null !== $object->getBaseServiceCharge()) {
                $data['BaseServiceCharge'] = $this->normalizer->normalize($object->getBaseServiceCharge(), 'json', $context);
            }
            if ($object->isInitialized('serviceOptionsCharges') && null !== $object->getServiceOptionsCharges()) {
                $data['ServiceOptionsCharges'] = $this->normalizer->normalize($object->getServiceOptionsCharges(), 'json', $context);
            }
            if ($object->isInitialized('shippingLabel') && null !== $object->getShippingLabel()) {
                $data['ShippingLabel'] = $this->normalizer->normalize($object->getShippingLabel(), 'json', $context);
            }
            if ($object->isInitialized('shippingReceipt') && null !== $object->getShippingReceipt()) {
                $data['ShippingReceipt'] = $this->normalizer->normalize($object->getShippingReceipt(), 'json', $context);
            }
            if ($object->isInitialized('uSPSPICNumber') && null !== $object->getUSPSPICNumber()) {
                $data['USPSPICNumber'] = $object->getUSPSPICNumber();
            }
            if ($object->isInitialized('cN22Number') && null !== $object->getCN22Number()) {
                $data['CN22Number'] = $object->getCN22Number();
            }
            if ($object->isInitialized('accessorial') && null !== $object->getAccessorial()) {
                $values = [];
                foreach ($object->getAccessorial() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['Accessorial'] = $values;
            }
            if ($object->isInitialized('simpleRate') && null !== $object->getSimpleRate()) {
                $data['SimpleRate'] = $this->normalizer->normalize($object->getSimpleRate(), 'json', $context);
            }
            if ($object->isInitialized('form') && null !== $object->getForm()) {
                $data['Form'] = $this->normalizer->normalize($object->getForm(), 'json', $context);
            }
            if ($object->isInitialized('itemizedCharges') && null !== $object->getItemizedCharges()) {
                $values_1 = [];
                foreach ($object->getItemizedCharges() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['ItemizedCharges'] = $values_1;
            }
            if ($object->isInitialized('negotiatedCharges') && null !== $object->getNegotiatedCharges()) {
                $data['NegotiatedCharges'] = $this->normalizer->normalize($object->getNegotiatedCharges(), 'json', $context);
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
            return ['ShipStream\\Ups\\Api\\Model\\ShipmentResultsPackageResults' => false];
        }
    }
} else {
    class ShipmentResultsPackageResultsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\ShipmentResultsPackageResults';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\ShipmentResultsPackageResults';
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
            $object = new \ShipStream\Ups\Api\Model\ShipmentResultsPackageResults();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('TrackingNumber', $data) && $data['TrackingNumber'] !== null) {
                $object->setTrackingNumber($data['TrackingNumber']);
                unset($data['TrackingNumber']);
            }
            elseif (\array_key_exists('TrackingNumber', $data) && $data['TrackingNumber'] === null) {
                $object->setTrackingNumber(null);
            }
            if (\array_key_exists('RateModifier', $data) && $data['RateModifier'] !== null) {
                $object->setRateModifier($this->denormalizer->denormalize($data['RateModifier'], 'ShipStream\\Ups\\Api\\Model\\PackageResultsRateModifier', 'json', $context));
                unset($data['RateModifier']);
            }
            elseif (\array_key_exists('RateModifier', $data) && $data['RateModifier'] === null) {
                $object->setRateModifier(null);
            }
            if (\array_key_exists('BaseServiceCharge', $data) && $data['BaseServiceCharge'] !== null) {
                $object->setBaseServiceCharge($this->denormalizer->denormalize($data['BaseServiceCharge'], 'ShipStream\\Ups\\Api\\Model\\PackageResultsBaseServiceCharge', 'json', $context));
                unset($data['BaseServiceCharge']);
            }
            elseif (\array_key_exists('BaseServiceCharge', $data) && $data['BaseServiceCharge'] === null) {
                $object->setBaseServiceCharge(null);
            }
            if (\array_key_exists('ServiceOptionsCharges', $data) && $data['ServiceOptionsCharges'] !== null) {
                $object->setServiceOptionsCharges($this->denormalizer->denormalize($data['ServiceOptionsCharges'], 'ShipStream\\Ups\\Api\\Model\\PackageResultsServiceOptionsCharges', 'json', $context));
                unset($data['ServiceOptionsCharges']);
            }
            elseif (\array_key_exists('ServiceOptionsCharges', $data) && $data['ServiceOptionsCharges'] === null) {
                $object->setServiceOptionsCharges(null);
            }
            if (\array_key_exists('ShippingLabel', $data) && $data['ShippingLabel'] !== null) {
                $object->setShippingLabel($this->denormalizer->denormalize($data['ShippingLabel'], 'ShipStream\\Ups\\Api\\Model\\PackageResultsShippingLabel', 'json', $context));
                unset($data['ShippingLabel']);
            }
            elseif (\array_key_exists('ShippingLabel', $data) && $data['ShippingLabel'] === null) {
                $object->setShippingLabel(null);
            }
            if (\array_key_exists('ShippingReceipt', $data) && $data['ShippingReceipt'] !== null) {
                $object->setShippingReceipt($this->denormalizer->denormalize($data['ShippingReceipt'], 'ShipStream\\Ups\\Api\\Model\\PackageResultsShippingReceipt', 'json', $context));
                unset($data['ShippingReceipt']);
            }
            elseif (\array_key_exists('ShippingReceipt', $data) && $data['ShippingReceipt'] === null) {
                $object->setShippingReceipt(null);
            }
            if (\array_key_exists('USPSPICNumber', $data) && $data['USPSPICNumber'] !== null) {
                $object->setUSPSPICNumber($data['USPSPICNumber']);
                unset($data['USPSPICNumber']);
            }
            elseif (\array_key_exists('USPSPICNumber', $data) && $data['USPSPICNumber'] === null) {
                $object->setUSPSPICNumber(null);
            }
            if (\array_key_exists('CN22Number', $data) && $data['CN22Number'] !== null) {
                $object->setCN22Number($data['CN22Number']);
                unset($data['CN22Number']);
            }
            elseif (\array_key_exists('CN22Number', $data) && $data['CN22Number'] === null) {
                $object->setCN22Number(null);
            }
            if (\array_key_exists('Accessorial', $data) && $data['Accessorial'] !== null) {
                $values = [];
                foreach ($data['Accessorial'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'ShipStream\\Ups\\Api\\Model\\PackageResultsAccessorial', 'json', $context);
                }
                $object->setAccessorial($values);
                unset($data['Accessorial']);
            }
            elseif (\array_key_exists('Accessorial', $data) && $data['Accessorial'] === null) {
                $object->setAccessorial(null);
            }
            if (\array_key_exists('SimpleRate', $data) && $data['SimpleRate'] !== null) {
                $object->setSimpleRate($this->denormalizer->denormalize($data['SimpleRate'], 'ShipStream\\Ups\\Api\\Model\\PackageResultsSimpleRate', 'json', $context));
                unset($data['SimpleRate']);
            }
            elseif (\array_key_exists('SimpleRate', $data) && $data['SimpleRate'] === null) {
                $object->setSimpleRate(null);
            }
            if (\array_key_exists('Form', $data) && $data['Form'] !== null) {
                $object->setForm($this->denormalizer->denormalize($data['Form'], 'ShipStream\\Ups\\Api\\Model\\PackageResultsForm', 'json', $context));
                unset($data['Form']);
            }
            elseif (\array_key_exists('Form', $data) && $data['Form'] === null) {
                $object->setForm(null);
            }
            if (\array_key_exists('ItemizedCharges', $data) && $data['ItemizedCharges'] !== null) {
                $values_1 = [];
                foreach ($data['ItemizedCharges'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'ShipStream\\Ups\\Api\\Model\\PackageResultsItemizedCharges', 'json', $context);
                }
                $object->setItemizedCharges($values_1);
                unset($data['ItemizedCharges']);
            }
            elseif (\array_key_exists('ItemizedCharges', $data) && $data['ItemizedCharges'] === null) {
                $object->setItemizedCharges(null);
            }
            if (\array_key_exists('NegotiatedCharges', $data) && $data['NegotiatedCharges'] !== null) {
                $object->setNegotiatedCharges($this->denormalizer->denormalize($data['NegotiatedCharges'], 'ShipStream\\Ups\\Api\\Model\\PackageResultsNegotiatedCharges', 'json', $context));
                unset($data['NegotiatedCharges']);
            }
            elseif (\array_key_exists('NegotiatedCharges', $data) && $data['NegotiatedCharges'] === null) {
                $object->setNegotiatedCharges(null);
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
            $data['TrackingNumber'] = $object->getTrackingNumber();
            if ($object->isInitialized('rateModifier') && null !== $object->getRateModifier()) {
                $data['RateModifier'] = $this->normalizer->normalize($object->getRateModifier(), 'json', $context);
            }
            if ($object->isInitialized('baseServiceCharge') && null !== $object->getBaseServiceCharge()) {
                $data['BaseServiceCharge'] = $this->normalizer->normalize($object->getBaseServiceCharge(), 'json', $context);
            }
            if ($object->isInitialized('serviceOptionsCharges') && null !== $object->getServiceOptionsCharges()) {
                $data['ServiceOptionsCharges'] = $this->normalizer->normalize($object->getServiceOptionsCharges(), 'json', $context);
            }
            if ($object->isInitialized('shippingLabel') && null !== $object->getShippingLabel()) {
                $data['ShippingLabel'] = $this->normalizer->normalize($object->getShippingLabel(), 'json', $context);
            }
            if ($object->isInitialized('shippingReceipt') && null !== $object->getShippingReceipt()) {
                $data['ShippingReceipt'] = $this->normalizer->normalize($object->getShippingReceipt(), 'json', $context);
            }
            if ($object->isInitialized('uSPSPICNumber') && null !== $object->getUSPSPICNumber()) {
                $data['USPSPICNumber'] = $object->getUSPSPICNumber();
            }
            if ($object->isInitialized('cN22Number') && null !== $object->getCN22Number()) {
                $data['CN22Number'] = $object->getCN22Number();
            }
            if ($object->isInitialized('accessorial') && null !== $object->getAccessorial()) {
                $values = [];
                foreach ($object->getAccessorial() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['Accessorial'] = $values;
            }
            if ($object->isInitialized('simpleRate') && null !== $object->getSimpleRate()) {
                $data['SimpleRate'] = $this->normalizer->normalize($object->getSimpleRate(), 'json', $context);
            }
            if ($object->isInitialized('form') && null !== $object->getForm()) {
                $data['Form'] = $this->normalizer->normalize($object->getForm(), 'json', $context);
            }
            if ($object->isInitialized('itemizedCharges') && null !== $object->getItemizedCharges()) {
                $values_1 = [];
                foreach ($object->getItemizedCharges() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['ItemizedCharges'] = $values_1;
            }
            if ($object->isInitialized('negotiatedCharges') && null !== $object->getNegotiatedCharges()) {
                $data['NegotiatedCharges'] = $this->normalizer->normalize($object->getNegotiatedCharges(), 'json', $context);
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
            return ['ShipStream\\Ups\\Api\\Model\\ShipmentResultsPackageResults' => false];
        }
    }
}