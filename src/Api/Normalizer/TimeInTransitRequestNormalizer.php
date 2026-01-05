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
class TimeInTransitRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \ShipStream\Ups\Api\Model\TimeInTransitRequest::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \ShipStream\Ups\Api\Model\TimeInTransitRequest::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \ShipStream\Ups\Api\Model\TimeInTransitRequest();
        if (\array_key_exists('weight', $data) && \is_int($data['weight'])) {
            $data['weight'] = (double) $data['weight'];
        }
        if (\array_key_exists('shipmentContentsValue', $data) && \is_int($data['shipmentContentsValue'])) {
            $data['shipmentContentsValue'] = (double) $data['shipmentContentsValue'];
        }
        if (\array_key_exists('avvFlag', $data) && \is_int($data['avvFlag'])) {
            $data['avvFlag'] = (bool) $data['avvFlag'];
        }
        if (\array_key_exists('returnUnfilterdServices', $data) && \is_int($data['returnUnfilterdServices'])) {
            $data['returnUnfilterdServices'] = (bool) $data['returnUnfilterdServices'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('originCountryCode', $data)) {
            $object->setOriginCountryCode($data['originCountryCode']);
            unset($data['originCountryCode']);
        }
        if (\array_key_exists('originStateProvince', $data)) {
            $object->setOriginStateProvince($data['originStateProvince']);
            unset($data['originStateProvince']);
        }
        if (\array_key_exists('originCityName', $data)) {
            $object->setOriginCityName($data['originCityName']);
            unset($data['originCityName']);
        }
        if (\array_key_exists('originTownName', $data)) {
            $object->setOriginTownName($data['originTownName']);
            unset($data['originTownName']);
        }
        if (\array_key_exists('originPostalCode', $data)) {
            $object->setOriginPostalCode($data['originPostalCode']);
            unset($data['originPostalCode']);
        }
        if (\array_key_exists('destinationCountryCode', $data)) {
            $object->setDestinationCountryCode($data['destinationCountryCode']);
            unset($data['destinationCountryCode']);
        }
        if (\array_key_exists('destinationStateProvince', $data)) {
            $object->setDestinationStateProvince($data['destinationStateProvince']);
            unset($data['destinationStateProvince']);
        }
        if (\array_key_exists('destinationCityName', $data)) {
            $object->setDestinationCityName($data['destinationCityName']);
            unset($data['destinationCityName']);
        }
        if (\array_key_exists('destinationTownName', $data)) {
            $object->setDestinationTownName($data['destinationTownName']);
            unset($data['destinationTownName']);
        }
        if (\array_key_exists('destinationPostalCode', $data)) {
            $object->setDestinationPostalCode($data['destinationPostalCode']);
            unset($data['destinationPostalCode']);
        }
        if (\array_key_exists('residentialIndicator', $data)) {
            $object->setResidentialIndicator($data['residentialIndicator']);
            unset($data['residentialIndicator']);
        }
        if (\array_key_exists('shipDate', $data)) {
            $object->setShipDate($data['shipDate']);
            unset($data['shipDate']);
        }
        if (\array_key_exists('shipTime', $data)) {
            $object->setShipTime($data['shipTime']);
            unset($data['shipTime']);
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
        if (\array_key_exists('billType', $data)) {
            $object->setBillType($data['billType']);
            unset($data['billType']);
        }
        if (\array_key_exists('avvFlag', $data)) {
            $object->setAvvFlag($data['avvFlag']);
            unset($data['avvFlag']);
        }
        if (\array_key_exists('numberOfPackages', $data)) {
            $object->setNumberOfPackages($data['numberOfPackages']);
            unset($data['numberOfPackages']);
        }
        if (\array_key_exists('dropOffAtFacilityIndicator', $data)) {
            $object->setDropOffAtFacilityIndicator($data['dropOffAtFacilityIndicator']);
            unset($data['dropOffAtFacilityIndicator']);
        }
        if (\array_key_exists('holdForPickupIndicator', $data)) {
            $object->setHoldForPickupIndicator($data['holdForPickupIndicator']);
            unset($data['holdForPickupIndicator']);
        }
        if (\array_key_exists('returnUnfilterdServices', $data)) {
            $object->setReturnUnfilterdServices($data['returnUnfilterdServices']);
            unset($data['returnUnfilterdServices']);
        }
        if (\array_key_exists('maxList', $data)) {
            $object->setMaxList($data['maxList']);
            unset($data['maxList']);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['originCountryCode'] = $data->getOriginCountryCode();
        if ($data->isInitialized('originStateProvince') && null !== $data->getOriginStateProvince()) {
            $dataArray['originStateProvince'] = $data->getOriginStateProvince();
        }
        if ($data->isInitialized('originCityName') && null !== $data->getOriginCityName()) {
            $dataArray['originCityName'] = $data->getOriginCityName();
        }
        if ($data->isInitialized('originTownName') && null !== $data->getOriginTownName()) {
            $dataArray['originTownName'] = $data->getOriginTownName();
        }
        if ($data->isInitialized('originPostalCode') && null !== $data->getOriginPostalCode()) {
            $dataArray['originPostalCode'] = $data->getOriginPostalCode();
        }
        if ($data->isInitialized('destinationCountryCode') && null !== $data->getDestinationCountryCode()) {
            $dataArray['destinationCountryCode'] = $data->getDestinationCountryCode();
        }
        if ($data->isInitialized('destinationStateProvince') && null !== $data->getDestinationStateProvince()) {
            $dataArray['destinationStateProvince'] = $data->getDestinationStateProvince();
        }
        if ($data->isInitialized('destinationCityName') && null !== $data->getDestinationCityName()) {
            $dataArray['destinationCityName'] = $data->getDestinationCityName();
        }
        if ($data->isInitialized('destinationTownName') && null !== $data->getDestinationTownName()) {
            $dataArray['destinationTownName'] = $data->getDestinationTownName();
        }
        if ($data->isInitialized('destinationPostalCode') && null !== $data->getDestinationPostalCode()) {
            $dataArray['destinationPostalCode'] = $data->getDestinationPostalCode();
        }
        if ($data->isInitialized('residentialIndicator') && null !== $data->getResidentialIndicator()) {
            $dataArray['residentialIndicator'] = $data->getResidentialIndicator();
        }
        if ($data->isInitialized('shipDate') && null !== $data->getShipDate()) {
            $dataArray['shipDate'] = $data->getShipDate();
        }
        if ($data->isInitialized('shipTime') && null !== $data->getShipTime()) {
            $dataArray['shipTime'] = $data->getShipTime();
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
        if ($data->isInitialized('billType') && null !== $data->getBillType()) {
            $dataArray['billType'] = $data->getBillType();
        }
        if ($data->isInitialized('avvFlag') && null !== $data->getAvvFlag()) {
            $dataArray['avvFlag'] = $data->getAvvFlag();
        }
        if ($data->isInitialized('numberOfPackages') && null !== $data->getNumberOfPackages()) {
            $dataArray['numberOfPackages'] = $data->getNumberOfPackages();
        }
        if ($data->isInitialized('dropOffAtFacilityIndicator') && null !== $data->getDropOffAtFacilityIndicator()) {
            $dataArray['dropOffAtFacilityIndicator'] = $data->getDropOffAtFacilityIndicator();
        }
        if ($data->isInitialized('holdForPickupIndicator') && null !== $data->getHoldForPickupIndicator()) {
            $dataArray['holdForPickupIndicator'] = $data->getHoldForPickupIndicator();
        }
        if ($data->isInitialized('returnUnfilterdServices') && null !== $data->getReturnUnfilterdServices()) {
            $dataArray['returnUnfilterdServices'] = $data->getReturnUnfilterdServices();
        }
        if ($data->isInitialized('maxList') && null !== $data->getMaxList()) {
            $dataArray['maxList'] = $data->getMaxList();
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\ShipStream\Ups\Api\Model\TimeInTransitRequest::class => false];
    }
}