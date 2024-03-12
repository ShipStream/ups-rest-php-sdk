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
    class ResponseShipmentItemsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\ResponseShipmentItems';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\ResponseShipmentItems';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \ShipStream\Ups\Api\Model\ResponseShipmentItems();
            if (\array_key_exists('commodityDuty', $data) && \is_int($data['commodityDuty'])) {
                $data['commodityDuty'] = (double) $data['commodityDuty'];
            }
            if (\array_key_exists('totalCommodityTaxAndFee', $data) && \is_int($data['totalCommodityTaxAndFee'])) {
                $data['totalCommodityTaxAndFee'] = (double) $data['totalCommodityTaxAndFee'];
            }
            if (\array_key_exists('commodityVAT', $data) && \is_int($data['commodityVAT'])) {
                $data['commodityVAT'] = (double) $data['commodityVAT'];
            }
            if (\array_key_exists('totalCommodityDutyAndTax', $data) && \is_int($data['totalCommodityDutyAndTax'])) {
                $data['totalCommodityDutyAndTax'] = (double) $data['totalCommodityDutyAndTax'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('commodityID', $data)) {
                $object->setCommodityID($data['commodityID']);
                unset($data['commodityID']);
            }
            if (\array_key_exists('hsCode', $data)) {
                $object->setHsCode($data['hsCode']);
                unset($data['hsCode']);
            }
            if (\array_key_exists('commodityDuty', $data)) {
                $object->setCommodityDuty($data['commodityDuty']);
                unset($data['commodityDuty']);
            }
            if (\array_key_exists('totalCommodityTaxAndFee', $data)) {
                $object->setTotalCommodityTaxAndFee($data['totalCommodityTaxAndFee']);
                unset($data['totalCommodityTaxAndFee']);
            }
            if (\array_key_exists('commodityVAT', $data)) {
                $object->setCommodityVAT($data['commodityVAT']);
                unset($data['commodityVAT']);
            }
            if (\array_key_exists('totalCommodityDutyAndTax', $data)) {
                $object->setTotalCommodityDutyAndTax($data['totalCommodityDutyAndTax']);
                unset($data['totalCommodityDutyAndTax']);
            }
            if (\array_key_exists('commodityCurrencyCode', $data)) {
                $object->setCommodityCurrencyCode($data['commodityCurrencyCode']);
                unset($data['commodityCurrencyCode']);
            }
            if (\array_key_exists('isCalculable', $data)) {
                $object->setIsCalculable($data['isCalculable']);
                unset($data['isCalculable']);
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
            $data['commodityID'] = $object->getCommodityID();
            $data['hsCode'] = $object->getHsCode();
            $data['commodityDuty'] = $object->getCommodityDuty();
            if ($object->isInitialized('totalCommodityTaxAndFee') && null !== $object->getTotalCommodityTaxAndFee()) {
                $data['totalCommodityTaxAndFee'] = $object->getTotalCommodityTaxAndFee();
            }
            $data['commodityVAT'] = $object->getCommodityVAT();
            $data['totalCommodityDutyAndTax'] = $object->getTotalCommodityDutyAndTax();
            $data['commodityCurrencyCode'] = $object->getCommodityCurrencyCode();
            $data['isCalculable'] = $object->getIsCalculable();
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['ShipStream\\Ups\\Api\\Model\\ResponseShipmentItems' => false];
        }
    }
} else {
    class ResponseShipmentItemsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\ResponseShipmentItems';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\ResponseShipmentItems';
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
            $object = new \ShipStream\Ups\Api\Model\ResponseShipmentItems();
            if (\array_key_exists('commodityDuty', $data) && \is_int($data['commodityDuty'])) {
                $data['commodityDuty'] = (double) $data['commodityDuty'];
            }
            if (\array_key_exists('totalCommodityTaxAndFee', $data) && \is_int($data['totalCommodityTaxAndFee'])) {
                $data['totalCommodityTaxAndFee'] = (double) $data['totalCommodityTaxAndFee'];
            }
            if (\array_key_exists('commodityVAT', $data) && \is_int($data['commodityVAT'])) {
                $data['commodityVAT'] = (double) $data['commodityVAT'];
            }
            if (\array_key_exists('totalCommodityDutyAndTax', $data) && \is_int($data['totalCommodityDutyAndTax'])) {
                $data['totalCommodityDutyAndTax'] = (double) $data['totalCommodityDutyAndTax'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('commodityID', $data)) {
                $object->setCommodityID($data['commodityID']);
                unset($data['commodityID']);
            }
            if (\array_key_exists('hsCode', $data)) {
                $object->setHsCode($data['hsCode']);
                unset($data['hsCode']);
            }
            if (\array_key_exists('commodityDuty', $data)) {
                $object->setCommodityDuty($data['commodityDuty']);
                unset($data['commodityDuty']);
            }
            if (\array_key_exists('totalCommodityTaxAndFee', $data)) {
                $object->setTotalCommodityTaxAndFee($data['totalCommodityTaxAndFee']);
                unset($data['totalCommodityTaxAndFee']);
            }
            if (\array_key_exists('commodityVAT', $data)) {
                $object->setCommodityVAT($data['commodityVAT']);
                unset($data['commodityVAT']);
            }
            if (\array_key_exists('totalCommodityDutyAndTax', $data)) {
                $object->setTotalCommodityDutyAndTax($data['totalCommodityDutyAndTax']);
                unset($data['totalCommodityDutyAndTax']);
            }
            if (\array_key_exists('commodityCurrencyCode', $data)) {
                $object->setCommodityCurrencyCode($data['commodityCurrencyCode']);
                unset($data['commodityCurrencyCode']);
            }
            if (\array_key_exists('isCalculable', $data)) {
                $object->setIsCalculable($data['isCalculable']);
                unset($data['isCalculable']);
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
            $data['commodityID'] = $object->getCommodityID();
            $data['hsCode'] = $object->getHsCode();
            $data['commodityDuty'] = $object->getCommodityDuty();
            if ($object->isInitialized('totalCommodityTaxAndFee') && null !== $object->getTotalCommodityTaxAndFee()) {
                $data['totalCommodityTaxAndFee'] = $object->getTotalCommodityTaxAndFee();
            }
            $data['commodityVAT'] = $object->getCommodityVAT();
            $data['totalCommodityDutyAndTax'] = $object->getTotalCommodityDutyAndTax();
            $data['commodityCurrencyCode'] = $object->getCommodityCurrencyCode();
            $data['isCalculable'] = $object->getIsCalculable();
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['ShipStream\\Ups\\Api\\Model\\ResponseShipmentItems' => false];
        }
    }
}