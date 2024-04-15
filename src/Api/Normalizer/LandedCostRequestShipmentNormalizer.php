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
    class LandedCostRequestShipmentNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\LandedCostRequestShipment';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\LandedCostRequestShipment';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \ShipStream\Ups\Api\Model\LandedCostRequestShipment();
            if (\array_key_exists('transportCost', $data) && \is_int($data['transportCost'])) {
                $data['transportCost'] = (double) $data['transportCost'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('id', $data) && $data['id'] !== null) {
                $object->setId($data['id']);
                unset($data['id']);
            }
            elseif (\array_key_exists('id', $data) && $data['id'] === null) {
                $object->setId(null);
            }
            if (\array_key_exists('importCountryCode', $data) && $data['importCountryCode'] !== null) {
                $object->setImportCountryCode($data['importCountryCode']);
                unset($data['importCountryCode']);
            }
            elseif (\array_key_exists('importCountryCode', $data) && $data['importCountryCode'] === null) {
                $object->setImportCountryCode(null);
            }
            if (\array_key_exists('importProvince', $data) && $data['importProvince'] !== null) {
                $object->setImportProvince($data['importProvince']);
                unset($data['importProvince']);
            }
            elseif (\array_key_exists('importProvince', $data) && $data['importProvince'] === null) {
                $object->setImportProvince(null);
            }
            if (\array_key_exists('shipDate', $data) && $data['shipDate'] !== null) {
                $object->setShipDate($data['shipDate']);
                unset($data['shipDate']);
            }
            elseif (\array_key_exists('shipDate', $data) && $data['shipDate'] === null) {
                $object->setShipDate(null);
            }
            if (\array_key_exists('incoterms', $data) && $data['incoterms'] !== null) {
                $object->setIncoterms($data['incoterms']);
                unset($data['incoterms']);
            }
            elseif (\array_key_exists('incoterms', $data) && $data['incoterms'] === null) {
                $object->setIncoterms(null);
            }
            if (\array_key_exists('exportCountryCode', $data) && $data['exportCountryCode'] !== null) {
                $object->setExportCountryCode($data['exportCountryCode']);
                unset($data['exportCountryCode']);
            }
            elseif (\array_key_exists('exportCountryCode', $data) && $data['exportCountryCode'] === null) {
                $object->setExportCountryCode(null);
            }
            if (\array_key_exists('transModes', $data) && $data['transModes'] !== null) {
                $object->setTransModes($data['transModes']);
                unset($data['transModes']);
            }
            elseif (\array_key_exists('transModes', $data) && $data['transModes'] === null) {
                $object->setTransModes(null);
            }
            if (\array_key_exists('transportCost', $data) && $data['transportCost'] !== null) {
                $object->setTransportCost($data['transportCost']);
                unset($data['transportCost']);
            }
            elseif (\array_key_exists('transportCost', $data) && $data['transportCost'] === null) {
                $object->setTransportCost(null);
            }
            if (\array_key_exists('shipmentType', $data) && $data['shipmentType'] !== null) {
                $object->setShipmentType($data['shipmentType']);
                unset($data['shipmentType']);
            }
            elseif (\array_key_exists('shipmentType', $data) && $data['shipmentType'] === null) {
                $object->setShipmentType(null);
            }
            if (\array_key_exists('shipmentItems', $data) && $data['shipmentItems'] !== null) {
                $values = [];
                foreach ($data['shipmentItems'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'ShipStream\\Ups\\Api\\Model\\RequestShipmentItems', 'json', $context);
                }
                $object->setShipmentItems($values);
                unset($data['shipmentItems']);
            }
            elseif (\array_key_exists('shipmentItems', $data) && $data['shipmentItems'] === null) {
                $object->setShipmentItems(null);
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
            $data['id'] = $object->getId();
            $data['importCountryCode'] = $object->getImportCountryCode();
            if ($object->isInitialized('importProvince') && null !== $object->getImportProvince()) {
                $data['importProvince'] = $object->getImportProvince();
            }
            if ($object->isInitialized('shipDate') && null !== $object->getShipDate()) {
                $data['shipDate'] = $object->getShipDate();
            }
            if ($object->isInitialized('incoterms') && null !== $object->getIncoterms()) {
                $data['incoterms'] = $object->getIncoterms();
            }
            $data['exportCountryCode'] = $object->getExportCountryCode();
            if ($object->isInitialized('transModes') && null !== $object->getTransModes()) {
                $data['transModes'] = $object->getTransModes();
            }
            if ($object->isInitialized('transportCost') && null !== $object->getTransportCost()) {
                $data['transportCost'] = $object->getTransportCost();
            }
            if ($object->isInitialized('shipmentType') && null !== $object->getShipmentType()) {
                $data['shipmentType'] = $object->getShipmentType();
            }
            $values = [];
            foreach ($object->getShipmentItems() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['shipmentItems'] = $values;
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['ShipStream\\Ups\\Api\\Model\\LandedCostRequestShipment' => false];
        }
    }
} else {
    class LandedCostRequestShipmentNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\LandedCostRequestShipment';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\LandedCostRequestShipment';
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
            $object = new \ShipStream\Ups\Api\Model\LandedCostRequestShipment();
            if (\array_key_exists('transportCost', $data) && \is_int($data['transportCost'])) {
                $data['transportCost'] = (double) $data['transportCost'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('id', $data) && $data['id'] !== null) {
                $object->setId($data['id']);
                unset($data['id']);
            }
            elseif (\array_key_exists('id', $data) && $data['id'] === null) {
                $object->setId(null);
            }
            if (\array_key_exists('importCountryCode', $data) && $data['importCountryCode'] !== null) {
                $object->setImportCountryCode($data['importCountryCode']);
                unset($data['importCountryCode']);
            }
            elseif (\array_key_exists('importCountryCode', $data) && $data['importCountryCode'] === null) {
                $object->setImportCountryCode(null);
            }
            if (\array_key_exists('importProvince', $data) && $data['importProvince'] !== null) {
                $object->setImportProvince($data['importProvince']);
                unset($data['importProvince']);
            }
            elseif (\array_key_exists('importProvince', $data) && $data['importProvince'] === null) {
                $object->setImportProvince(null);
            }
            if (\array_key_exists('shipDate', $data) && $data['shipDate'] !== null) {
                $object->setShipDate($data['shipDate']);
                unset($data['shipDate']);
            }
            elseif (\array_key_exists('shipDate', $data) && $data['shipDate'] === null) {
                $object->setShipDate(null);
            }
            if (\array_key_exists('incoterms', $data) && $data['incoterms'] !== null) {
                $object->setIncoterms($data['incoterms']);
                unset($data['incoterms']);
            }
            elseif (\array_key_exists('incoterms', $data) && $data['incoterms'] === null) {
                $object->setIncoterms(null);
            }
            if (\array_key_exists('exportCountryCode', $data) && $data['exportCountryCode'] !== null) {
                $object->setExportCountryCode($data['exportCountryCode']);
                unset($data['exportCountryCode']);
            }
            elseif (\array_key_exists('exportCountryCode', $data) && $data['exportCountryCode'] === null) {
                $object->setExportCountryCode(null);
            }
            if (\array_key_exists('transModes', $data) && $data['transModes'] !== null) {
                $object->setTransModes($data['transModes']);
                unset($data['transModes']);
            }
            elseif (\array_key_exists('transModes', $data) && $data['transModes'] === null) {
                $object->setTransModes(null);
            }
            if (\array_key_exists('transportCost', $data) && $data['transportCost'] !== null) {
                $object->setTransportCost($data['transportCost']);
                unset($data['transportCost']);
            }
            elseif (\array_key_exists('transportCost', $data) && $data['transportCost'] === null) {
                $object->setTransportCost(null);
            }
            if (\array_key_exists('shipmentType', $data) && $data['shipmentType'] !== null) {
                $object->setShipmentType($data['shipmentType']);
                unset($data['shipmentType']);
            }
            elseif (\array_key_exists('shipmentType', $data) && $data['shipmentType'] === null) {
                $object->setShipmentType(null);
            }
            if (\array_key_exists('shipmentItems', $data) && $data['shipmentItems'] !== null) {
                $values = [];
                foreach ($data['shipmentItems'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'ShipStream\\Ups\\Api\\Model\\RequestShipmentItems', 'json', $context);
                }
                $object->setShipmentItems($values);
                unset($data['shipmentItems']);
            }
            elseif (\array_key_exists('shipmentItems', $data) && $data['shipmentItems'] === null) {
                $object->setShipmentItems(null);
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
            $data['id'] = $object->getId();
            $data['importCountryCode'] = $object->getImportCountryCode();
            if ($object->isInitialized('importProvince') && null !== $object->getImportProvince()) {
                $data['importProvince'] = $object->getImportProvince();
            }
            if ($object->isInitialized('shipDate') && null !== $object->getShipDate()) {
                $data['shipDate'] = $object->getShipDate();
            }
            if ($object->isInitialized('incoterms') && null !== $object->getIncoterms()) {
                $data['incoterms'] = $object->getIncoterms();
            }
            $data['exportCountryCode'] = $object->getExportCountryCode();
            if ($object->isInitialized('transModes') && null !== $object->getTransModes()) {
                $data['transModes'] = $object->getTransModes();
            }
            if ($object->isInitialized('transportCost') && null !== $object->getTransportCost()) {
                $data['transportCost'] = $object->getTransportCost();
            }
            if ($object->isInitialized('shipmentType') && null !== $object->getShipmentType()) {
                $data['shipmentType'] = $object->getShipmentType();
            }
            $values = [];
            foreach ($object->getShipmentItems() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['shipmentItems'] = $values;
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['ShipStream\\Ups\\Api\\Model\\LandedCostRequestShipment' => false];
        }
    }
}