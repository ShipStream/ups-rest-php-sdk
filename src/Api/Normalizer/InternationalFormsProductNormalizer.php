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
    class InternationalFormsProductNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\InternationalFormsProduct';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\InternationalFormsProduct';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \ShipStream\Ups\Api\Model\InternationalFormsProduct();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Description', $data)) {
                $values = [];
                foreach ($data['Description'] as $value) {
                    $values[] = $value;
                }
                $object->setDescription($values);
                unset($data['Description']);
            }
            if (\array_key_exists('Unit', $data)) {
                $object->setUnit($this->denormalizer->denormalize($data['Unit'], 'ShipStream\\Ups\\Api\\Model\\ProductUnit', 'json', $context));
                unset($data['Unit']);
            }
            if (\array_key_exists('CommodityCode', $data)) {
                $object->setCommodityCode($data['CommodityCode']);
                unset($data['CommodityCode']);
            }
            if (\array_key_exists('PartNumber', $data)) {
                $object->setPartNumber($data['PartNumber']);
                unset($data['PartNumber']);
            }
            if (\array_key_exists('OriginCountryCode', $data)) {
                $object->setOriginCountryCode($data['OriginCountryCode']);
                unset($data['OriginCountryCode']);
            }
            if (\array_key_exists('JointProductionIndicator', $data)) {
                $object->setJointProductionIndicator($data['JointProductionIndicator']);
                unset($data['JointProductionIndicator']);
            }
            if (\array_key_exists('NetCostCode', $data)) {
                $object->setNetCostCode($data['NetCostCode']);
                unset($data['NetCostCode']);
            }
            if (\array_key_exists('NetCostDateRange', $data)) {
                $object->setNetCostDateRange($this->denormalizer->denormalize($data['NetCostDateRange'], 'ShipStream\\Ups\\Api\\Model\\ProductNetCostDateRange', 'json', $context));
                unset($data['NetCostDateRange']);
            }
            if (\array_key_exists('PreferenceCriteria', $data)) {
                $object->setPreferenceCriteria($data['PreferenceCriteria']);
                unset($data['PreferenceCriteria']);
            }
            if (\array_key_exists('ProducerInfo', $data)) {
                $object->setProducerInfo($data['ProducerInfo']);
                unset($data['ProducerInfo']);
            }
            if (\array_key_exists('MarksAndNumbers', $data)) {
                $object->setMarksAndNumbers($data['MarksAndNumbers']);
                unset($data['MarksAndNumbers']);
            }
            if (\array_key_exists('NumberOfPackagesPerCommodity', $data)) {
                $object->setNumberOfPackagesPerCommodity($data['NumberOfPackagesPerCommodity']);
                unset($data['NumberOfPackagesPerCommodity']);
            }
            if (\array_key_exists('ProductWeight', $data)) {
                $object->setProductWeight($this->denormalizer->denormalize($data['ProductWeight'], 'ShipStream\\Ups\\Api\\Model\\ProductProductWeight', 'json', $context));
                unset($data['ProductWeight']);
            }
            if (\array_key_exists('VehicleID', $data)) {
                $object->setVehicleID($data['VehicleID']);
                unset($data['VehicleID']);
            }
            if (\array_key_exists('ScheduleB', $data)) {
                $object->setScheduleB($this->denormalizer->denormalize($data['ScheduleB'], 'ShipStream\\Ups\\Api\\Model\\ProductScheduleB', 'json', $context));
                unset($data['ScheduleB']);
            }
            if (\array_key_exists('ExportType', $data)) {
                $object->setExportType($data['ExportType']);
                unset($data['ExportType']);
            }
            if (\array_key_exists('SEDTotalValue', $data)) {
                $object->setSEDTotalValue($data['SEDTotalValue']);
                unset($data['SEDTotalValue']);
            }
            if (\array_key_exists('ExcludeFromForm', $data)) {
                $object->setExcludeFromForm($this->denormalizer->denormalize($data['ExcludeFromForm'], 'ShipStream\\Ups\\Api\\Model\\ProductExcludeFromForm', 'json', $context));
                unset($data['ExcludeFromForm']);
            }
            if (\array_key_exists('PackingListInfo', $data)) {
                $object->setPackingListInfo($this->denormalizer->denormalize($data['PackingListInfo'], 'ShipStream\\Ups\\Api\\Model\\ProductPackingListInfo', 'json', $context));
                unset($data['PackingListInfo']);
            }
            if (\array_key_exists('EEIInformation', $data)) {
                $object->setEEIInformation($this->denormalizer->denormalize($data['EEIInformation'], 'ShipStream\\Ups\\Api\\Model\\ProductEEIInformation', 'json', $context));
                unset($data['EEIInformation']);
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
            $values = [];
            foreach ($object->getDescription() as $value) {
                $values[] = $value;
            }
            $data['Description'] = $values;
            if ($object->isInitialized('unit') && null !== $object->getUnit()) {
                $data['Unit'] = $this->normalizer->normalize($object->getUnit(), 'json', $context);
            }
            if ($object->isInitialized('commodityCode') && null !== $object->getCommodityCode()) {
                $data['CommodityCode'] = $object->getCommodityCode();
            }
            if ($object->isInitialized('partNumber') && null !== $object->getPartNumber()) {
                $data['PartNumber'] = $object->getPartNumber();
            }
            if ($object->isInitialized('originCountryCode') && null !== $object->getOriginCountryCode()) {
                $data['OriginCountryCode'] = $object->getOriginCountryCode();
            }
            if ($object->isInitialized('jointProductionIndicator') && null !== $object->getJointProductionIndicator()) {
                $data['JointProductionIndicator'] = $object->getJointProductionIndicator();
            }
            if ($object->isInitialized('netCostCode') && null !== $object->getNetCostCode()) {
                $data['NetCostCode'] = $object->getNetCostCode();
            }
            if ($object->isInitialized('netCostDateRange') && null !== $object->getNetCostDateRange()) {
                $data['NetCostDateRange'] = $this->normalizer->normalize($object->getNetCostDateRange(), 'json', $context);
            }
            if ($object->isInitialized('preferenceCriteria') && null !== $object->getPreferenceCriteria()) {
                $data['PreferenceCriteria'] = $object->getPreferenceCriteria();
            }
            if ($object->isInitialized('producerInfo') && null !== $object->getProducerInfo()) {
                $data['ProducerInfo'] = $object->getProducerInfo();
            }
            if ($object->isInitialized('marksAndNumbers') && null !== $object->getMarksAndNumbers()) {
                $data['MarksAndNumbers'] = $object->getMarksAndNumbers();
            }
            if ($object->isInitialized('numberOfPackagesPerCommodity') && null !== $object->getNumberOfPackagesPerCommodity()) {
                $data['NumberOfPackagesPerCommodity'] = $object->getNumberOfPackagesPerCommodity();
            }
            if ($object->isInitialized('productWeight') && null !== $object->getProductWeight()) {
                $data['ProductWeight'] = $this->normalizer->normalize($object->getProductWeight(), 'json', $context);
            }
            if ($object->isInitialized('vehicleID') && null !== $object->getVehicleID()) {
                $data['VehicleID'] = $object->getVehicleID();
            }
            if ($object->isInitialized('scheduleB') && null !== $object->getScheduleB()) {
                $data['ScheduleB'] = $this->normalizer->normalize($object->getScheduleB(), 'json', $context);
            }
            if ($object->isInitialized('exportType') && null !== $object->getExportType()) {
                $data['ExportType'] = $object->getExportType();
            }
            if ($object->isInitialized('sEDTotalValue') && null !== $object->getSEDTotalValue()) {
                $data['SEDTotalValue'] = $object->getSEDTotalValue();
            }
            if ($object->isInitialized('excludeFromForm') && null !== $object->getExcludeFromForm()) {
                $data['ExcludeFromForm'] = $this->normalizer->normalize($object->getExcludeFromForm(), 'json', $context);
            }
            if ($object->isInitialized('packingListInfo') && null !== $object->getPackingListInfo()) {
                $data['PackingListInfo'] = $this->normalizer->normalize($object->getPackingListInfo(), 'json', $context);
            }
            if ($object->isInitialized('eEIInformation') && null !== $object->getEEIInformation()) {
                $data['EEIInformation'] = $this->normalizer->normalize($object->getEEIInformation(), 'json', $context);
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
            return ['ShipStream\\Ups\\Api\\Model\\InternationalFormsProduct' => false];
        }
    }
} else {
    class InternationalFormsProductNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\InternationalFormsProduct';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\InternationalFormsProduct';
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
            $object = new \ShipStream\Ups\Api\Model\InternationalFormsProduct();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Description', $data)) {
                $values = [];
                foreach ($data['Description'] as $value) {
                    $values[] = $value;
                }
                $object->setDescription($values);
                unset($data['Description']);
            }
            if (\array_key_exists('Unit', $data)) {
                $object->setUnit($this->denormalizer->denormalize($data['Unit'], 'ShipStream\\Ups\\Api\\Model\\ProductUnit', 'json', $context));
                unset($data['Unit']);
            }
            if (\array_key_exists('CommodityCode', $data)) {
                $object->setCommodityCode($data['CommodityCode']);
                unset($data['CommodityCode']);
            }
            if (\array_key_exists('PartNumber', $data)) {
                $object->setPartNumber($data['PartNumber']);
                unset($data['PartNumber']);
            }
            if (\array_key_exists('OriginCountryCode', $data)) {
                $object->setOriginCountryCode($data['OriginCountryCode']);
                unset($data['OriginCountryCode']);
            }
            if (\array_key_exists('JointProductionIndicator', $data)) {
                $object->setJointProductionIndicator($data['JointProductionIndicator']);
                unset($data['JointProductionIndicator']);
            }
            if (\array_key_exists('NetCostCode', $data)) {
                $object->setNetCostCode($data['NetCostCode']);
                unset($data['NetCostCode']);
            }
            if (\array_key_exists('NetCostDateRange', $data)) {
                $object->setNetCostDateRange($this->denormalizer->denormalize($data['NetCostDateRange'], 'ShipStream\\Ups\\Api\\Model\\ProductNetCostDateRange', 'json', $context));
                unset($data['NetCostDateRange']);
            }
            if (\array_key_exists('PreferenceCriteria', $data)) {
                $object->setPreferenceCriteria($data['PreferenceCriteria']);
                unset($data['PreferenceCriteria']);
            }
            if (\array_key_exists('ProducerInfo', $data)) {
                $object->setProducerInfo($data['ProducerInfo']);
                unset($data['ProducerInfo']);
            }
            if (\array_key_exists('MarksAndNumbers', $data)) {
                $object->setMarksAndNumbers($data['MarksAndNumbers']);
                unset($data['MarksAndNumbers']);
            }
            if (\array_key_exists('NumberOfPackagesPerCommodity', $data)) {
                $object->setNumberOfPackagesPerCommodity($data['NumberOfPackagesPerCommodity']);
                unset($data['NumberOfPackagesPerCommodity']);
            }
            if (\array_key_exists('ProductWeight', $data)) {
                $object->setProductWeight($this->denormalizer->denormalize($data['ProductWeight'], 'ShipStream\\Ups\\Api\\Model\\ProductProductWeight', 'json', $context));
                unset($data['ProductWeight']);
            }
            if (\array_key_exists('VehicleID', $data)) {
                $object->setVehicleID($data['VehicleID']);
                unset($data['VehicleID']);
            }
            if (\array_key_exists('ScheduleB', $data)) {
                $object->setScheduleB($this->denormalizer->denormalize($data['ScheduleB'], 'ShipStream\\Ups\\Api\\Model\\ProductScheduleB', 'json', $context));
                unset($data['ScheduleB']);
            }
            if (\array_key_exists('ExportType', $data)) {
                $object->setExportType($data['ExportType']);
                unset($data['ExportType']);
            }
            if (\array_key_exists('SEDTotalValue', $data)) {
                $object->setSEDTotalValue($data['SEDTotalValue']);
                unset($data['SEDTotalValue']);
            }
            if (\array_key_exists('ExcludeFromForm', $data)) {
                $object->setExcludeFromForm($this->denormalizer->denormalize($data['ExcludeFromForm'], 'ShipStream\\Ups\\Api\\Model\\ProductExcludeFromForm', 'json', $context));
                unset($data['ExcludeFromForm']);
            }
            if (\array_key_exists('PackingListInfo', $data)) {
                $object->setPackingListInfo($this->denormalizer->denormalize($data['PackingListInfo'], 'ShipStream\\Ups\\Api\\Model\\ProductPackingListInfo', 'json', $context));
                unset($data['PackingListInfo']);
            }
            if (\array_key_exists('EEIInformation', $data)) {
                $object->setEEIInformation($this->denormalizer->denormalize($data['EEIInformation'], 'ShipStream\\Ups\\Api\\Model\\ProductEEIInformation', 'json', $context));
                unset($data['EEIInformation']);
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
            $values = [];
            foreach ($object->getDescription() as $value) {
                $values[] = $value;
            }
            $data['Description'] = $values;
            if ($object->isInitialized('unit') && null !== $object->getUnit()) {
                $data['Unit'] = $this->normalizer->normalize($object->getUnit(), 'json', $context);
            }
            if ($object->isInitialized('commodityCode') && null !== $object->getCommodityCode()) {
                $data['CommodityCode'] = $object->getCommodityCode();
            }
            if ($object->isInitialized('partNumber') && null !== $object->getPartNumber()) {
                $data['PartNumber'] = $object->getPartNumber();
            }
            if ($object->isInitialized('originCountryCode') && null !== $object->getOriginCountryCode()) {
                $data['OriginCountryCode'] = $object->getOriginCountryCode();
            }
            if ($object->isInitialized('jointProductionIndicator') && null !== $object->getJointProductionIndicator()) {
                $data['JointProductionIndicator'] = $object->getJointProductionIndicator();
            }
            if ($object->isInitialized('netCostCode') && null !== $object->getNetCostCode()) {
                $data['NetCostCode'] = $object->getNetCostCode();
            }
            if ($object->isInitialized('netCostDateRange') && null !== $object->getNetCostDateRange()) {
                $data['NetCostDateRange'] = $this->normalizer->normalize($object->getNetCostDateRange(), 'json', $context);
            }
            if ($object->isInitialized('preferenceCriteria') && null !== $object->getPreferenceCriteria()) {
                $data['PreferenceCriteria'] = $object->getPreferenceCriteria();
            }
            if ($object->isInitialized('producerInfo') && null !== $object->getProducerInfo()) {
                $data['ProducerInfo'] = $object->getProducerInfo();
            }
            if ($object->isInitialized('marksAndNumbers') && null !== $object->getMarksAndNumbers()) {
                $data['MarksAndNumbers'] = $object->getMarksAndNumbers();
            }
            if ($object->isInitialized('numberOfPackagesPerCommodity') && null !== $object->getNumberOfPackagesPerCommodity()) {
                $data['NumberOfPackagesPerCommodity'] = $object->getNumberOfPackagesPerCommodity();
            }
            if ($object->isInitialized('productWeight') && null !== $object->getProductWeight()) {
                $data['ProductWeight'] = $this->normalizer->normalize($object->getProductWeight(), 'json', $context);
            }
            if ($object->isInitialized('vehicleID') && null !== $object->getVehicleID()) {
                $data['VehicleID'] = $object->getVehicleID();
            }
            if ($object->isInitialized('scheduleB') && null !== $object->getScheduleB()) {
                $data['ScheduleB'] = $this->normalizer->normalize($object->getScheduleB(), 'json', $context);
            }
            if ($object->isInitialized('exportType') && null !== $object->getExportType()) {
                $data['ExportType'] = $object->getExportType();
            }
            if ($object->isInitialized('sEDTotalValue') && null !== $object->getSEDTotalValue()) {
                $data['SEDTotalValue'] = $object->getSEDTotalValue();
            }
            if ($object->isInitialized('excludeFromForm') && null !== $object->getExcludeFromForm()) {
                $data['ExcludeFromForm'] = $this->normalizer->normalize($object->getExcludeFromForm(), 'json', $context);
            }
            if ($object->isInitialized('packingListInfo') && null !== $object->getPackingListInfo()) {
                $data['PackingListInfo'] = $this->normalizer->normalize($object->getPackingListInfo(), 'json', $context);
            }
            if ($object->isInitialized('eEIInformation') && null !== $object->getEEIInformation()) {
                $data['EEIInformation'] = $this->normalizer->normalize($object->getEEIInformation(), 'json', $context);
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
            return ['ShipStream\\Ups\\Api\\Model\\InternationalFormsProduct' => false];
        }
    }
}