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
    class LandedCostResponseShipmentNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\LandedCostResponseShipment';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\LandedCostResponseShipment';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \ShipStream\Ups\Api\Model\LandedCostResponseShipment();
            if (\array_key_exists('totalBrokerageFees', $data) && \is_int($data['totalBrokerageFees'])) {
                $data['totalBrokerageFees'] = (double) $data['totalBrokerageFees'];
            }
            if (\array_key_exists('totalDuties', $data) && \is_int($data['totalDuties'])) {
                $data['totalDuties'] = (double) $data['totalDuties'];
            }
            if (\array_key_exists('totalCommodityLevelTaxesAndFees', $data) && \is_int($data['totalCommodityLevelTaxesAndFees'])) {
                $data['totalCommodityLevelTaxesAndFees'] = (double) $data['totalCommodityLevelTaxesAndFees'];
            }
            if (\array_key_exists('totalShipmentLevelTaxesAndFees', $data) && \is_int($data['totalShipmentLevelTaxesAndFees'])) {
                $data['totalShipmentLevelTaxesAndFees'] = (double) $data['totalShipmentLevelTaxesAndFees'];
            }
            if (\array_key_exists('totalVAT', $data) && \is_int($data['totalVAT'])) {
                $data['totalVAT'] = (double) $data['totalVAT'];
            }
            if (\array_key_exists('totalDutyAndTax', $data) && \is_int($data['totalDutyAndTax'])) {
                $data['totalDutyAndTax'] = (double) $data['totalDutyAndTax'];
            }
            if (\array_key_exists('grandTotal', $data) && \is_int($data['grandTotal'])) {
                $data['grandTotal'] = (double) $data['grandTotal'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('currencyCode', $data)) {
                $object->setCurrencyCode($data['currencyCode']);
                unset($data['currencyCode']);
            }
            if (\array_key_exists('importCountryCode', $data)) {
                $object->setImportCountryCode($data['importCountryCode']);
                unset($data['importCountryCode']);
            }
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
                unset($data['id']);
            }
            if (\array_key_exists('brokerageFeeItems', $data)) {
                $values = [];
                foreach ($data['brokerageFeeItems'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'ShipStream\\Ups\\Api\\Model\\BrokerageFeeItems', 'json', $context);
                }
                $object->setBrokerageFeeItems($values);
                unset($data['brokerageFeeItems']);
            }
            if (\array_key_exists('totalBrokerageFees', $data)) {
                $object->setTotalBrokerageFees($data['totalBrokerageFees']);
                unset($data['totalBrokerageFees']);
            }
            if (\array_key_exists('totalDuties', $data)) {
                $object->setTotalDuties($data['totalDuties']);
                unset($data['totalDuties']);
            }
            if (\array_key_exists('totalCommodityLevelTaxesAndFees', $data)) {
                $object->setTotalCommodityLevelTaxesAndFees($data['totalCommodityLevelTaxesAndFees']);
                unset($data['totalCommodityLevelTaxesAndFees']);
            }
            if (\array_key_exists('totalShipmentLevelTaxesAndFees', $data)) {
                $object->setTotalShipmentLevelTaxesAndFees($data['totalShipmentLevelTaxesAndFees']);
                unset($data['totalShipmentLevelTaxesAndFees']);
            }
            if (\array_key_exists('totalVAT', $data)) {
                $object->setTotalVAT($data['totalVAT']);
                unset($data['totalVAT']);
            }
            if (\array_key_exists('totalDutyAndTax', $data)) {
                $object->setTotalDutyAndTax($data['totalDutyAndTax']);
                unset($data['totalDutyAndTax']);
            }
            if (\array_key_exists('grandTotal', $data)) {
                $object->setGrandTotal($data['grandTotal']);
                unset($data['grandTotal']);
            }
            if (\array_key_exists('shipmentItems', $data)) {
                $values_1 = [];
                foreach ($data['shipmentItems'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'ShipStream\\Ups\\Api\\Model\\ResponseShipmentItems', 'json', $context);
                }
                $object->setShipmentItems($values_1);
                unset($data['shipmentItems']);
            }
            if (\array_key_exists('transID', $data)) {
                $object->setTransID($data['transID']);
                unset($data['transID']);
            }
            if (\array_key_exists('perfStats', $data)) {
                $object->setPerfStats($this->denormalizer->denormalize($data['perfStats'], 'ShipStream\\Ups\\Api\\Model\\LandedCostResponseShipmentPerfStats', 'json', $context));
                unset($data['perfStats']);
            }
            if (\array_key_exists('alVersion', $data)) {
                $object->setAlVersion($data['alVersion']);
                unset($data['alVersion']);
            }
            if (\array_key_exists('errors', $data)) {
                $object->setErrors($this->denormalizer->denormalize($data['errors'], 'ShipStream\\Ups\\Api\\Model\\Errors', 'json', $context));
                unset($data['errors']);
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
            $data['currencyCode'] = $object->getCurrencyCode();
            $data['importCountryCode'] = $object->getImportCountryCode();
            $data['id'] = $object->getId();
            $values = [];
            foreach ($object->getBrokerageFeeItems() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['brokerageFeeItems'] = $values;
            $data['totalBrokerageFees'] = $object->getTotalBrokerageFees();
            $data['totalDuties'] = $object->getTotalDuties();
            $data['totalCommodityLevelTaxesAndFees'] = $object->getTotalCommodityLevelTaxesAndFees();
            $data['totalShipmentLevelTaxesAndFees'] = $object->getTotalShipmentLevelTaxesAndFees();
            $data['totalVAT'] = $object->getTotalVAT();
            $data['totalDutyAndTax'] = $object->getTotalDutyAndTax();
            $data['grandTotal'] = $object->getGrandTotal();
            $values_1 = [];
            foreach ($object->getShipmentItems() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['shipmentItems'] = $values_1;
            if ($object->isInitialized('transID') && null !== $object->getTransID()) {
                $data['transID'] = $object->getTransID();
            }
            if ($object->isInitialized('perfStats') && null !== $object->getPerfStats()) {
                $data['perfStats'] = $this->normalizer->normalize($object->getPerfStats(), 'json', $context);
            }
            if ($object->isInitialized('alVersion') && null !== $object->getAlVersion()) {
                $data['alVersion'] = $object->getAlVersion();
            }
            if ($object->isInitialized('errors') && null !== $object->getErrors()) {
                $data['errors'] = $this->normalizer->normalize($object->getErrors(), 'json', $context);
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
            return ['ShipStream\\Ups\\Api\\Model\\LandedCostResponseShipment' => false];
        }
    }
} else {
    class LandedCostResponseShipmentNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\LandedCostResponseShipment';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\LandedCostResponseShipment';
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
            $object = new \ShipStream\Ups\Api\Model\LandedCostResponseShipment();
            if (\array_key_exists('totalBrokerageFees', $data) && \is_int($data['totalBrokerageFees'])) {
                $data['totalBrokerageFees'] = (double) $data['totalBrokerageFees'];
            }
            if (\array_key_exists('totalDuties', $data) && \is_int($data['totalDuties'])) {
                $data['totalDuties'] = (double) $data['totalDuties'];
            }
            if (\array_key_exists('totalCommodityLevelTaxesAndFees', $data) && \is_int($data['totalCommodityLevelTaxesAndFees'])) {
                $data['totalCommodityLevelTaxesAndFees'] = (double) $data['totalCommodityLevelTaxesAndFees'];
            }
            if (\array_key_exists('totalShipmentLevelTaxesAndFees', $data) && \is_int($data['totalShipmentLevelTaxesAndFees'])) {
                $data['totalShipmentLevelTaxesAndFees'] = (double) $data['totalShipmentLevelTaxesAndFees'];
            }
            if (\array_key_exists('totalVAT', $data) && \is_int($data['totalVAT'])) {
                $data['totalVAT'] = (double) $data['totalVAT'];
            }
            if (\array_key_exists('totalDutyAndTax', $data) && \is_int($data['totalDutyAndTax'])) {
                $data['totalDutyAndTax'] = (double) $data['totalDutyAndTax'];
            }
            if (\array_key_exists('grandTotal', $data) && \is_int($data['grandTotal'])) {
                $data['grandTotal'] = (double) $data['grandTotal'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('currencyCode', $data)) {
                $object->setCurrencyCode($data['currencyCode']);
                unset($data['currencyCode']);
            }
            if (\array_key_exists('importCountryCode', $data)) {
                $object->setImportCountryCode($data['importCountryCode']);
                unset($data['importCountryCode']);
            }
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
                unset($data['id']);
            }
            if (\array_key_exists('brokerageFeeItems', $data)) {
                $values = [];
                foreach ($data['brokerageFeeItems'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'ShipStream\\Ups\\Api\\Model\\BrokerageFeeItems', 'json', $context);
                }
                $object->setBrokerageFeeItems($values);
                unset($data['brokerageFeeItems']);
            }
            if (\array_key_exists('totalBrokerageFees', $data)) {
                $object->setTotalBrokerageFees($data['totalBrokerageFees']);
                unset($data['totalBrokerageFees']);
            }
            if (\array_key_exists('totalDuties', $data)) {
                $object->setTotalDuties($data['totalDuties']);
                unset($data['totalDuties']);
            }
            if (\array_key_exists('totalCommodityLevelTaxesAndFees', $data)) {
                $object->setTotalCommodityLevelTaxesAndFees($data['totalCommodityLevelTaxesAndFees']);
                unset($data['totalCommodityLevelTaxesAndFees']);
            }
            if (\array_key_exists('totalShipmentLevelTaxesAndFees', $data)) {
                $object->setTotalShipmentLevelTaxesAndFees($data['totalShipmentLevelTaxesAndFees']);
                unset($data['totalShipmentLevelTaxesAndFees']);
            }
            if (\array_key_exists('totalVAT', $data)) {
                $object->setTotalVAT($data['totalVAT']);
                unset($data['totalVAT']);
            }
            if (\array_key_exists('totalDutyAndTax', $data)) {
                $object->setTotalDutyAndTax($data['totalDutyAndTax']);
                unset($data['totalDutyAndTax']);
            }
            if (\array_key_exists('grandTotal', $data)) {
                $object->setGrandTotal($data['grandTotal']);
                unset($data['grandTotal']);
            }
            if (\array_key_exists('shipmentItems', $data)) {
                $values_1 = [];
                foreach ($data['shipmentItems'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'ShipStream\\Ups\\Api\\Model\\ResponseShipmentItems', 'json', $context);
                }
                $object->setShipmentItems($values_1);
                unset($data['shipmentItems']);
            }
            if (\array_key_exists('transID', $data)) {
                $object->setTransID($data['transID']);
                unset($data['transID']);
            }
            if (\array_key_exists('perfStats', $data)) {
                $object->setPerfStats($this->denormalizer->denormalize($data['perfStats'], 'ShipStream\\Ups\\Api\\Model\\LandedCostResponseShipmentPerfStats', 'json', $context));
                unset($data['perfStats']);
            }
            if (\array_key_exists('alVersion', $data)) {
                $object->setAlVersion($data['alVersion']);
                unset($data['alVersion']);
            }
            if (\array_key_exists('errors', $data)) {
                $object->setErrors($this->denormalizer->denormalize($data['errors'], 'ShipStream\\Ups\\Api\\Model\\Errors', 'json', $context));
                unset($data['errors']);
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
            $data['currencyCode'] = $object->getCurrencyCode();
            $data['importCountryCode'] = $object->getImportCountryCode();
            $data['id'] = $object->getId();
            $values = [];
            foreach ($object->getBrokerageFeeItems() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['brokerageFeeItems'] = $values;
            $data['totalBrokerageFees'] = $object->getTotalBrokerageFees();
            $data['totalDuties'] = $object->getTotalDuties();
            $data['totalCommodityLevelTaxesAndFees'] = $object->getTotalCommodityLevelTaxesAndFees();
            $data['totalShipmentLevelTaxesAndFees'] = $object->getTotalShipmentLevelTaxesAndFees();
            $data['totalVAT'] = $object->getTotalVAT();
            $data['totalDutyAndTax'] = $object->getTotalDutyAndTax();
            $data['grandTotal'] = $object->getGrandTotal();
            $values_1 = [];
            foreach ($object->getShipmentItems() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['shipmentItems'] = $values_1;
            if ($object->isInitialized('transID') && null !== $object->getTransID()) {
                $data['transID'] = $object->getTransID();
            }
            if ($object->isInitialized('perfStats') && null !== $object->getPerfStats()) {
                $data['perfStats'] = $this->normalizer->normalize($object->getPerfStats(), 'json', $context);
            }
            if ($object->isInitialized('alVersion') && null !== $object->getAlVersion()) {
                $data['alVersion'] = $object->getAlVersion();
            }
            if ($object->isInitialized('errors') && null !== $object->getErrors()) {
                $data['errors'] = $this->normalizer->normalize($object->getErrors(), 'json', $context);
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
            return ['ShipStream\\Ups\\Api\\Model\\LandedCostResponseShipment' => false];
        }
    }
}