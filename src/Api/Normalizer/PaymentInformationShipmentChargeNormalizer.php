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
    class PaymentInformationShipmentChargeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\PaymentInformationShipmentCharge';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\PaymentInformationShipmentCharge';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \ShipStream\Ups\Api\Model\PaymentInformationShipmentCharge();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Type', $data) && $data['Type'] !== null) {
                $object->setType($data['Type']);
                unset($data['Type']);
            }
            elseif (\array_key_exists('Type', $data) && $data['Type'] === null) {
                $object->setType(null);
            }
            if (\array_key_exists('BillShipper', $data) && $data['BillShipper'] !== null) {
                $object->setBillShipper($this->denormalizer->denormalize($data['BillShipper'], 'ShipStream\\Ups\\Api\\Model\\ShipmentChargeBillShipper', 'json', $context));
                unset($data['BillShipper']);
            }
            elseif (\array_key_exists('BillShipper', $data) && $data['BillShipper'] === null) {
                $object->setBillShipper(null);
            }
            if (\array_key_exists('BillReceiver', $data) && $data['BillReceiver'] !== null) {
                $object->setBillReceiver($this->denormalizer->denormalize($data['BillReceiver'], 'ShipStream\\Ups\\Api\\Model\\ShipmentChargeBillReceiver', 'json', $context));
                unset($data['BillReceiver']);
            }
            elseif (\array_key_exists('BillReceiver', $data) && $data['BillReceiver'] === null) {
                $object->setBillReceiver(null);
            }
            if (\array_key_exists('BillThirdParty', $data) && $data['BillThirdParty'] !== null) {
                $object->setBillThirdParty($this->denormalizer->denormalize($data['BillThirdParty'], 'ShipStream\\Ups\\Api\\Model\\ShipmentChargeBillThirdParty', 'json', $context));
                unset($data['BillThirdParty']);
            }
            elseif (\array_key_exists('BillThirdParty', $data) && $data['BillThirdParty'] === null) {
                $object->setBillThirdParty(null);
            }
            if (\array_key_exists('ConsigneeBilledIndicator', $data) && $data['ConsigneeBilledIndicator'] !== null) {
                $object->setConsigneeBilledIndicator($data['ConsigneeBilledIndicator']);
                unset($data['ConsigneeBilledIndicator']);
            }
            elseif (\array_key_exists('ConsigneeBilledIndicator', $data) && $data['ConsigneeBilledIndicator'] === null) {
                $object->setConsigneeBilledIndicator(null);
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
            $data['Type'] = $object->getType();
            if ($object->isInitialized('billShipper') && null !== $object->getBillShipper()) {
                $data['BillShipper'] = $this->normalizer->normalize($object->getBillShipper(), 'json', $context);
            }
            if ($object->isInitialized('billReceiver') && null !== $object->getBillReceiver()) {
                $data['BillReceiver'] = $this->normalizer->normalize($object->getBillReceiver(), 'json', $context);
            }
            if ($object->isInitialized('billThirdParty') && null !== $object->getBillThirdParty()) {
                $data['BillThirdParty'] = $this->normalizer->normalize($object->getBillThirdParty(), 'json', $context);
            }
            if ($object->isInitialized('consigneeBilledIndicator') && null !== $object->getConsigneeBilledIndicator()) {
                $data['ConsigneeBilledIndicator'] = $object->getConsigneeBilledIndicator();
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
            return ['ShipStream\\Ups\\Api\\Model\\PaymentInformationShipmentCharge' => false];
        }
    }
} else {
    class PaymentInformationShipmentChargeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\PaymentInformationShipmentCharge';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\PaymentInformationShipmentCharge';
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
            $object = new \ShipStream\Ups\Api\Model\PaymentInformationShipmentCharge();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Type', $data) && $data['Type'] !== null) {
                $object->setType($data['Type']);
                unset($data['Type']);
            }
            elseif (\array_key_exists('Type', $data) && $data['Type'] === null) {
                $object->setType(null);
            }
            if (\array_key_exists('BillShipper', $data) && $data['BillShipper'] !== null) {
                $object->setBillShipper($this->denormalizer->denormalize($data['BillShipper'], 'ShipStream\\Ups\\Api\\Model\\ShipmentChargeBillShipper', 'json', $context));
                unset($data['BillShipper']);
            }
            elseif (\array_key_exists('BillShipper', $data) && $data['BillShipper'] === null) {
                $object->setBillShipper(null);
            }
            if (\array_key_exists('BillReceiver', $data) && $data['BillReceiver'] !== null) {
                $object->setBillReceiver($this->denormalizer->denormalize($data['BillReceiver'], 'ShipStream\\Ups\\Api\\Model\\ShipmentChargeBillReceiver', 'json', $context));
                unset($data['BillReceiver']);
            }
            elseif (\array_key_exists('BillReceiver', $data) && $data['BillReceiver'] === null) {
                $object->setBillReceiver(null);
            }
            if (\array_key_exists('BillThirdParty', $data) && $data['BillThirdParty'] !== null) {
                $object->setBillThirdParty($this->denormalizer->denormalize($data['BillThirdParty'], 'ShipStream\\Ups\\Api\\Model\\ShipmentChargeBillThirdParty', 'json', $context));
                unset($data['BillThirdParty']);
            }
            elseif (\array_key_exists('BillThirdParty', $data) && $data['BillThirdParty'] === null) {
                $object->setBillThirdParty(null);
            }
            if (\array_key_exists('ConsigneeBilledIndicator', $data) && $data['ConsigneeBilledIndicator'] !== null) {
                $object->setConsigneeBilledIndicator($data['ConsigneeBilledIndicator']);
                unset($data['ConsigneeBilledIndicator']);
            }
            elseif (\array_key_exists('ConsigneeBilledIndicator', $data) && $data['ConsigneeBilledIndicator'] === null) {
                $object->setConsigneeBilledIndicator(null);
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
            $data['Type'] = $object->getType();
            if ($object->isInitialized('billShipper') && null !== $object->getBillShipper()) {
                $data['BillShipper'] = $this->normalizer->normalize($object->getBillShipper(), 'json', $context);
            }
            if ($object->isInitialized('billReceiver') && null !== $object->getBillReceiver()) {
                $data['BillReceiver'] = $this->normalizer->normalize($object->getBillReceiver(), 'json', $context);
            }
            if ($object->isInitialized('billThirdParty') && null !== $object->getBillThirdParty()) {
                $data['BillThirdParty'] = $this->normalizer->normalize($object->getBillThirdParty(), 'json', $context);
            }
            if ($object->isInitialized('consigneeBilledIndicator') && null !== $object->getConsigneeBilledIndicator()) {
                $data['ConsigneeBilledIndicator'] = $object->getConsigneeBilledIndicator();
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
            return ['ShipStream\\Ups\\Api\\Model\\PaymentInformationShipmentCharge' => false];
        }
    }
}