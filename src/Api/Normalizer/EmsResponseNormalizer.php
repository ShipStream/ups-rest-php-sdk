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
class EmsResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \ShipStream\Ups\Api\Model\EmsResponse::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \ShipStream\Ups\Api\Model\EmsResponse::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \ShipStream\Ups\Api\Model\EmsResponse();
        if (\array_key_exists('guaranteeSuspended', $data) && \is_int($data['guaranteeSuspended'])) {
            $data['guaranteeSuspended'] = (bool) $data['guaranteeSuspended'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('shipDate', $data)) {
            $object->setShipDate($data['shipDate']);
            unset($data['shipDate']);
        }
        if (\array_key_exists('shipTime', $data)) {
            $object->setShipTime($data['shipTime']);
            unset($data['shipTime']);
        }
        if (\array_key_exists('serviceLevel', $data)) {
            $object->setServiceLevel($data['serviceLevel']);
            unset($data['serviceLevel']);
        }
        if (\array_key_exists('billType', $data)) {
            $object->setBillType($data['billType']);
            unset($data['billType']);
        }
        if (\array_key_exists('dutyType', $data)) {
            $object->setDutyType($data['dutyType']);
            unset($data['dutyType']);
        }
        if (\array_key_exists('residentialIndicator', $data)) {
            $object->setResidentialIndicator($data['residentialIndicator']);
            unset($data['residentialIndicator']);
        }
        if (\array_key_exists('destinationCountryName', $data)) {
            $object->setDestinationCountryName($data['destinationCountryName']);
            unset($data['destinationCountryName']);
        }
        if (\array_key_exists('destinationCountryCode', $data)) {
            $object->setDestinationCountryCode($data['destinationCountryCode']);
            unset($data['destinationCountryCode']);
        }
        if (\array_key_exists('destinationPostalCode', $data)) {
            $object->setDestinationPostalCode($data['destinationPostalCode']);
            unset($data['destinationPostalCode']);
        }
        if (\array_key_exists('destinationPostalCodeLow', $data)) {
            $object->setDestinationPostalCodeLow($data['destinationPostalCodeLow']);
            unset($data['destinationPostalCodeLow']);
        }
        if (\array_key_exists('destinationPostalCodeHigh', $data)) {
            $object->setDestinationPostalCodeHigh($data['destinationPostalCodeHigh']);
            unset($data['destinationPostalCodeHigh']);
        }
        if (\array_key_exists('destinationStateProvince', $data)) {
            $object->setDestinationStateProvince($data['destinationStateProvince']);
            unset($data['destinationStateProvince']);
        }
        if (\array_key_exists('destinationCityName', $data)) {
            $object->setDestinationCityName($data['destinationCityName']);
            unset($data['destinationCityName']);
        }
        if (\array_key_exists('originCountryName', $data)) {
            $object->setOriginCountryName($data['originCountryName']);
            unset($data['originCountryName']);
        }
        if (\array_key_exists('originCountryCode', $data)) {
            $object->setOriginCountryCode($data['originCountryCode']);
            unset($data['originCountryCode']);
        }
        if (\array_key_exists('originPostalCode', $data)) {
            $object->setOriginPostalCode($data['originPostalCode']);
            unset($data['originPostalCode']);
        }
        if (\array_key_exists('originPostalCodeLow', $data)) {
            $object->setOriginPostalCodeLow($data['originPostalCodeLow']);
            unset($data['originPostalCodeLow']);
        }
        if (\array_key_exists('originPostalCodeHigh', $data)) {
            $object->setOriginPostalCodeHigh($data['originPostalCodeHigh']);
            unset($data['originPostalCodeHigh']);
        }
        if (\array_key_exists('originStateProvince', $data)) {
            $object->setOriginStateProvince($data['originStateProvince']);
            unset($data['originStateProvince']);
        }
        if (\array_key_exists('originCityName', $data)) {
            $object->setOriginCityName($data['originCityName']);
            unset($data['originCityName']);
        }
        if (\array_key_exists('weight', $data)) {
            $object->setWeight($data['weight']);
            unset($data['weight']);
        }
        if (\array_key_exists('weightUnitOfMeasure', $data)) {
            $object->setWeightUnitOfMeasure($data['weightUnitOfMeasure']);
            unset($data['weightUnitOfMeasure']);
        }
        if (\array_key_exists('shipmentContentsValue', $data)) {
            $object->setShipmentContentsValue($data['shipmentContentsValue']);
            unset($data['shipmentContentsValue']);
        }
        if (\array_key_exists('shipmentContentsCurrencyCode', $data)) {
            $object->setShipmentContentsCurrencyCode($data['shipmentContentsCurrencyCode']);
            unset($data['shipmentContentsCurrencyCode']);
        }
        if (\array_key_exists('guaranteeSuspended', $data)) {
            $object->setGuaranteeSuspended($data['guaranteeSuspended']);
            unset($data['guaranteeSuspended']);
        }
        if (\array_key_exists('numberOfServices', $data)) {
            $object->setNumberOfServices($data['numberOfServices']);
            unset($data['numberOfServices']);
        }
        if (\array_key_exists('services', $data)) {
            $values = [];
            foreach ($data['services'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \ShipStream\Ups\Api\Model\Services::class, 'json', $context);
            }
            $object->setServices($values);
            unset($data['services']);
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
        $dataArray['shipDate'] = $data->getShipDate();
        $dataArray['shipTime'] = $data->getShipTime();
        $dataArray['serviceLevel'] = $data->getServiceLevel();
        $dataArray['billType'] = $data->getBillType();
        if ($data->isInitialized('dutyType') && null !== $data->getDutyType()) {
            $dataArray['dutyType'] = $data->getDutyType();
        }
        $dataArray['residentialIndicator'] = $data->getResidentialIndicator();
        $dataArray['destinationCountryName'] = $data->getDestinationCountryName();
        $dataArray['destinationCountryCode'] = $data->getDestinationCountryCode();
        if ($data->isInitialized('destinationPostalCode') && null !== $data->getDestinationPostalCode()) {
            $dataArray['destinationPostalCode'] = $data->getDestinationPostalCode();
        }
        if ($data->isInitialized('destinationPostalCodeLow') && null !== $data->getDestinationPostalCodeLow()) {
            $dataArray['destinationPostalCodeLow'] = $data->getDestinationPostalCodeLow();
        }
        if ($data->isInitialized('destinationPostalCodeHigh') && null !== $data->getDestinationPostalCodeHigh()) {
            $dataArray['destinationPostalCodeHigh'] = $data->getDestinationPostalCodeHigh();
        }
        if ($data->isInitialized('destinationStateProvince') && null !== $data->getDestinationStateProvince()) {
            $dataArray['destinationStateProvince'] = $data->getDestinationStateProvince();
        }
        if ($data->isInitialized('destinationCityName') && null !== $data->getDestinationCityName()) {
            $dataArray['destinationCityName'] = $data->getDestinationCityName();
        }
        $dataArray['originCountryName'] = $data->getOriginCountryName();
        $dataArray['originCountryCode'] = $data->getOriginCountryCode();
        if ($data->isInitialized('originPostalCode') && null !== $data->getOriginPostalCode()) {
            $dataArray['originPostalCode'] = $data->getOriginPostalCode();
        }
        if ($data->isInitialized('originPostalCodeLow') && null !== $data->getOriginPostalCodeLow()) {
            $dataArray['originPostalCodeLow'] = $data->getOriginPostalCodeLow();
        }
        if ($data->isInitialized('originPostalCodeHigh') && null !== $data->getOriginPostalCodeHigh()) {
            $dataArray['originPostalCodeHigh'] = $data->getOriginPostalCodeHigh();
        }
        if ($data->isInitialized('originStateProvince') && null !== $data->getOriginStateProvince()) {
            $dataArray['originStateProvince'] = $data->getOriginStateProvince();
        }
        if ($data->isInitialized('originCityName') && null !== $data->getOriginCityName()) {
            $dataArray['originCityName'] = $data->getOriginCityName();
        }
        if ($data->isInitialized('weight') && null !== $data->getWeight()) {
            $dataArray['weight'] = $data->getWeight();
        }
        if ($data->isInitialized('weightUnitOfMeasure') && null !== $data->getWeightUnitOfMeasure()) {
            $dataArray['weightUnitOfMeasure'] = $data->getWeightUnitOfMeasure();
        }
        if ($data->isInitialized('shipmentContentsValue') && null !== $data->getShipmentContentsValue()) {
            $dataArray['shipmentContentsValue'] = $data->getShipmentContentsValue();
        }
        if ($data->isInitialized('shipmentContentsCurrencyCode') && null !== $data->getShipmentContentsCurrencyCode()) {
            $dataArray['shipmentContentsCurrencyCode'] = $data->getShipmentContentsCurrencyCode();
        }
        $dataArray['guaranteeSuspended'] = $data->getGuaranteeSuspended();
        $dataArray['numberOfServices'] = $data->getNumberOfServices();
        if ($data->isInitialized('services') && null !== $data->getServices()) {
            $values = [];
            foreach ($data->getServices() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['services'] = $values;
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
        return [\ShipStream\Ups\Api\Model\EmsResponse::class => false];
    }
}