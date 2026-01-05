<?php

namespace ShipStream\Ups\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use ShipStream\Ups\Api\Runtime\Normalizer\CheckArray;
use ShipStream\Ups\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class InternationalFormsProductNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \ShipStream\Ups\Api\Model\InternationalFormsProduct::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \ShipStream\Ups\Api\Model\InternationalFormsProduct::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
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
            $object->setUnit($this->denormalizer->denormalize($data['Unit'], \ShipStream\Ups\Api\Model\ProductUnit::class, 'json', $context));
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
            $object->setNetCostDateRange($this->denormalizer->denormalize($data['NetCostDateRange'], \ShipStream\Ups\Api\Model\ProductNetCostDateRange::class, 'json', $context));
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
            $object->setProductWeight($this->denormalizer->denormalize($data['ProductWeight'], \ShipStream\Ups\Api\Model\ProductProductWeight::class, 'json', $context));
            unset($data['ProductWeight']);
        }
        if (\array_key_exists('VehicleID', $data)) {
            $object->setVehicleID($data['VehicleID']);
            unset($data['VehicleID']);
        }
        if (\array_key_exists('ScheduleB', $data)) {
            $object->setScheduleB($this->denormalizer->denormalize($data['ScheduleB'], \ShipStream\Ups\Api\Model\ProductScheduleB::class, 'json', $context));
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
            $object->setExcludeFromForm($this->denormalizer->denormalize($data['ExcludeFromForm'], \ShipStream\Ups\Api\Model\ProductExcludeFromForm::class, 'json', $context));
            unset($data['ExcludeFromForm']);
        }
        if (\array_key_exists('PackingListInfo', $data)) {
            $object->setPackingListInfo($this->denormalizer->denormalize($data['PackingListInfo'], \ShipStream\Ups\Api\Model\ProductPackingListInfo::class, 'json', $context));
            unset($data['PackingListInfo']);
        }
        if (\array_key_exists('EEIInformation', $data)) {
            $object->setEEIInformation($this->denormalizer->denormalize($data['EEIInformation'], \ShipStream\Ups\Api\Model\ProductEEIInformation::class, 'json', $context));
            unset($data['EEIInformation']);
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_1;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $values = [];
        foreach ($data->getDescription() as $value) {
            $values[] = $value;
        }
        $dataArray['Description'] = $values;
        if ($data->isInitialized('unit') && null !== $data->getUnit()) {
            $dataArray['Unit'] = $this->normalizer->normalize($data->getUnit(), 'json', $context);
        }
        if ($data->isInitialized('commodityCode') && null !== $data->getCommodityCode()) {
            $dataArray['CommodityCode'] = $data->getCommodityCode();
        }
        if ($data->isInitialized('partNumber') && null !== $data->getPartNumber()) {
            $dataArray['PartNumber'] = $data->getPartNumber();
        }
        if ($data->isInitialized('originCountryCode') && null !== $data->getOriginCountryCode()) {
            $dataArray['OriginCountryCode'] = $data->getOriginCountryCode();
        }
        if ($data->isInitialized('jointProductionIndicator') && null !== $data->getJointProductionIndicator()) {
            $dataArray['JointProductionIndicator'] = $data->getJointProductionIndicator();
        }
        if ($data->isInitialized('netCostCode') && null !== $data->getNetCostCode()) {
            $dataArray['NetCostCode'] = $data->getNetCostCode();
        }
        if ($data->isInitialized('netCostDateRange') && null !== $data->getNetCostDateRange()) {
            $dataArray['NetCostDateRange'] = $this->normalizer->normalize($data->getNetCostDateRange(), 'json', $context);
        }
        if ($data->isInitialized('preferenceCriteria') && null !== $data->getPreferenceCriteria()) {
            $dataArray['PreferenceCriteria'] = $data->getPreferenceCriteria();
        }
        if ($data->isInitialized('producerInfo') && null !== $data->getProducerInfo()) {
            $dataArray['ProducerInfo'] = $data->getProducerInfo();
        }
        if ($data->isInitialized('marksAndNumbers') && null !== $data->getMarksAndNumbers()) {
            $dataArray['MarksAndNumbers'] = $data->getMarksAndNumbers();
        }
        if ($data->isInitialized('numberOfPackagesPerCommodity') && null !== $data->getNumberOfPackagesPerCommodity()) {
            $dataArray['NumberOfPackagesPerCommodity'] = $data->getNumberOfPackagesPerCommodity();
        }
        if ($data->isInitialized('productWeight') && null !== $data->getProductWeight()) {
            $dataArray['ProductWeight'] = $this->normalizer->normalize($data->getProductWeight(), 'json', $context);
        }
        if ($data->isInitialized('vehicleID') && null !== $data->getVehicleID()) {
            $dataArray['VehicleID'] = $data->getVehicleID();
        }
        if ($data->isInitialized('scheduleB') && null !== $data->getScheduleB()) {
            $dataArray['ScheduleB'] = $this->normalizer->normalize($data->getScheduleB(), 'json', $context);
        }
        if ($data->isInitialized('exportType') && null !== $data->getExportType()) {
            $dataArray['ExportType'] = $data->getExportType();
        }
        if ($data->isInitialized('sEDTotalValue') && null !== $data->getSEDTotalValue()) {
            $dataArray['SEDTotalValue'] = $data->getSEDTotalValue();
        }
        if ($data->isInitialized('excludeFromForm') && null !== $data->getExcludeFromForm()) {
            $dataArray['ExcludeFromForm'] = $this->normalizer->normalize($data->getExcludeFromForm(), 'json', $context);
        }
        if ($data->isInitialized('packingListInfo') && null !== $data->getPackingListInfo()) {
            $dataArray['PackingListInfo'] = $this->normalizer->normalize($data->getPackingListInfo(), 'json', $context);
        }
        if ($data->isInitialized('eEIInformation') && null !== $data->getEEIInformation()) {
            $dataArray['EEIInformation'] = $this->normalizer->normalize($data->getEEIInformation(), 'json', $context);
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_1;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\ShipStream\Ups\Api\Model\InternationalFormsProduct::class => false];
    }
}