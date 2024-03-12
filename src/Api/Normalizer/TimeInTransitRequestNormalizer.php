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
    class TimeInTransitRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\TimeInTransitRequest';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\TimeInTransitRequest';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
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
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            $data['originCountryCode'] = $object->getOriginCountryCode();
            if ($object->isInitialized('originStateProvince') && null !== $object->getOriginStateProvince()) {
                $data['originStateProvince'] = $object->getOriginStateProvince();
            }
            if ($object->isInitialized('originCityName') && null !== $object->getOriginCityName()) {
                $data['originCityName'] = $object->getOriginCityName();
            }
            if ($object->isInitialized('originTownName') && null !== $object->getOriginTownName()) {
                $data['originTownName'] = $object->getOriginTownName();
            }
            if ($object->isInitialized('originPostalCode') && null !== $object->getOriginPostalCode()) {
                $data['originPostalCode'] = $object->getOriginPostalCode();
            }
            if ($object->isInitialized('destinationCountryCode') && null !== $object->getDestinationCountryCode()) {
                $data['destinationCountryCode'] = $object->getDestinationCountryCode();
            }
            if ($object->isInitialized('destinationStateProvince') && null !== $object->getDestinationStateProvince()) {
                $data['destinationStateProvince'] = $object->getDestinationStateProvince();
            }
            if ($object->isInitialized('destinationCityName') && null !== $object->getDestinationCityName()) {
                $data['destinationCityName'] = $object->getDestinationCityName();
            }
            if ($object->isInitialized('destinationTownName') && null !== $object->getDestinationTownName()) {
                $data['destinationTownName'] = $object->getDestinationTownName();
            }
            if ($object->isInitialized('destinationPostalCode') && null !== $object->getDestinationPostalCode()) {
                $data['destinationPostalCode'] = $object->getDestinationPostalCode();
            }
            if ($object->isInitialized('residentialIndicator') && null !== $object->getResidentialIndicator()) {
                $data['residentialIndicator'] = $object->getResidentialIndicator();
            }
            if ($object->isInitialized('shipDate') && null !== $object->getShipDate()) {
                $data['shipDate'] = $object->getShipDate();
            }
            if ($object->isInitialized('shipTime') && null !== $object->getShipTime()) {
                $data['shipTime'] = $object->getShipTime();
            }
            if ($object->isInitialized('weight') && null !== $object->getWeight()) {
                $data['weight'] = $object->getWeight();
            }
            if ($object->isInitialized('weightUnitOfMeasure') && null !== $object->getWeightUnitOfMeasure()) {
                $data['weightUnitOfMeasure'] = $object->getWeightUnitOfMeasure();
            }
            if ($object->isInitialized('shipmentContentsValue') && null !== $object->getShipmentContentsValue()) {
                $data['shipmentContentsValue'] = $object->getShipmentContentsValue();
            }
            if ($object->isInitialized('shipmentContentsCurrencyCode') && null !== $object->getShipmentContentsCurrencyCode()) {
                $data['shipmentContentsCurrencyCode'] = $object->getShipmentContentsCurrencyCode();
            }
            if ($object->isInitialized('billType') && null !== $object->getBillType()) {
                $data['billType'] = $object->getBillType();
            }
            if ($object->isInitialized('avvFlag') && null !== $object->getAvvFlag()) {
                $data['avvFlag'] = $object->getAvvFlag();
            }
            if ($object->isInitialized('numberOfPackages') && null !== $object->getNumberOfPackages()) {
                $data['numberOfPackages'] = $object->getNumberOfPackages();
            }
            if ($object->isInitialized('dropOffAtFacilityIndicator') && null !== $object->getDropOffAtFacilityIndicator()) {
                $data['dropOffAtFacilityIndicator'] = $object->getDropOffAtFacilityIndicator();
            }
            if ($object->isInitialized('holdForPickupIndicator') && null !== $object->getHoldForPickupIndicator()) {
                $data['holdForPickupIndicator'] = $object->getHoldForPickupIndicator();
            }
            if ($object->isInitialized('returnUnfilterdServices') && null !== $object->getReturnUnfilterdServices()) {
                $data['returnUnfilterdServices'] = $object->getReturnUnfilterdServices();
            }
            if ($object->isInitialized('maxList') && null !== $object->getMaxList()) {
                $data['maxList'] = $object->getMaxList();
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
            return ['ShipStream\\Ups\\Api\\Model\\TimeInTransitRequest' => false];
        }
    }
} else {
    class TimeInTransitRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\TimeInTransitRequest';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\TimeInTransitRequest';
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
            $object = new \ShipStream\Ups\Api\Model\TimeInTransitRequest();
            if (\array_key_exists('weight', $data) && \is_int($data['weight'])) {
                $data['weight'] = (double) $data['weight'];
            }
            if (\array_key_exists('shipmentContentsValue', $data) && \is_int($data['shipmentContentsValue'])) {
                $data['shipmentContentsValue'] = (double) $data['shipmentContentsValue'];
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
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            $data['originCountryCode'] = $object->getOriginCountryCode();
            if ($object->isInitialized('originStateProvince') && null !== $object->getOriginStateProvince()) {
                $data['originStateProvince'] = $object->getOriginStateProvince();
            }
            if ($object->isInitialized('originCityName') && null !== $object->getOriginCityName()) {
                $data['originCityName'] = $object->getOriginCityName();
            }
            if ($object->isInitialized('originTownName') && null !== $object->getOriginTownName()) {
                $data['originTownName'] = $object->getOriginTownName();
            }
            if ($object->isInitialized('originPostalCode') && null !== $object->getOriginPostalCode()) {
                $data['originPostalCode'] = $object->getOriginPostalCode();
            }
            if ($object->isInitialized('destinationCountryCode') && null !== $object->getDestinationCountryCode()) {
                $data['destinationCountryCode'] = $object->getDestinationCountryCode();
            }
            if ($object->isInitialized('destinationStateProvince') && null !== $object->getDestinationStateProvince()) {
                $data['destinationStateProvince'] = $object->getDestinationStateProvince();
            }
            if ($object->isInitialized('destinationCityName') && null !== $object->getDestinationCityName()) {
                $data['destinationCityName'] = $object->getDestinationCityName();
            }
            if ($object->isInitialized('destinationTownName') && null !== $object->getDestinationTownName()) {
                $data['destinationTownName'] = $object->getDestinationTownName();
            }
            if ($object->isInitialized('destinationPostalCode') && null !== $object->getDestinationPostalCode()) {
                $data['destinationPostalCode'] = $object->getDestinationPostalCode();
            }
            if ($object->isInitialized('residentialIndicator') && null !== $object->getResidentialIndicator()) {
                $data['residentialIndicator'] = $object->getResidentialIndicator();
            }
            if ($object->isInitialized('shipDate') && null !== $object->getShipDate()) {
                $data['shipDate'] = $object->getShipDate();
            }
            if ($object->isInitialized('shipTime') && null !== $object->getShipTime()) {
                $data['shipTime'] = $object->getShipTime();
            }
            if ($object->isInitialized('weight') && null !== $object->getWeight()) {
                $data['weight'] = $object->getWeight();
            }
            if ($object->isInitialized('weightUnitOfMeasure') && null !== $object->getWeightUnitOfMeasure()) {
                $data['weightUnitOfMeasure'] = $object->getWeightUnitOfMeasure();
            }
            if ($object->isInitialized('shipmentContentsValue') && null !== $object->getShipmentContentsValue()) {
                $data['shipmentContentsValue'] = $object->getShipmentContentsValue();
            }
            if ($object->isInitialized('shipmentContentsCurrencyCode') && null !== $object->getShipmentContentsCurrencyCode()) {
                $data['shipmentContentsCurrencyCode'] = $object->getShipmentContentsCurrencyCode();
            }
            if ($object->isInitialized('billType') && null !== $object->getBillType()) {
                $data['billType'] = $object->getBillType();
            }
            if ($object->isInitialized('avvFlag') && null !== $object->getAvvFlag()) {
                $data['avvFlag'] = $object->getAvvFlag();
            }
            if ($object->isInitialized('numberOfPackages') && null !== $object->getNumberOfPackages()) {
                $data['numberOfPackages'] = $object->getNumberOfPackages();
            }
            if ($object->isInitialized('dropOffAtFacilityIndicator') && null !== $object->getDropOffAtFacilityIndicator()) {
                $data['dropOffAtFacilityIndicator'] = $object->getDropOffAtFacilityIndicator();
            }
            if ($object->isInitialized('holdForPickupIndicator') && null !== $object->getHoldForPickupIndicator()) {
                $data['holdForPickupIndicator'] = $object->getHoldForPickupIndicator();
            }
            if ($object->isInitialized('returnUnfilterdServices') && null !== $object->getReturnUnfilterdServices()) {
                $data['returnUnfilterdServices'] = $object->getReturnUnfilterdServices();
            }
            if ($object->isInitialized('maxList') && null !== $object->getMaxList()) {
                $data['maxList'] = $object->getMaxList();
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
            return ['ShipStream\\Ups\\Api\\Model\\TimeInTransitRequest' => false];
        }
    }
}