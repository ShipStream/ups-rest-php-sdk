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
    class EmsResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\EmsResponse';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\EmsResponse';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \ShipStream\Ups\Api\Model\EmsResponse();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('shipDate', $data) && $data['shipDate'] !== null) {
                $object->setShipDate($data['shipDate']);
                unset($data['shipDate']);
            }
            elseif (\array_key_exists('shipDate', $data) && $data['shipDate'] === null) {
                $object->setShipDate(null);
            }
            if (\array_key_exists('shipTime', $data) && $data['shipTime'] !== null) {
                $object->setShipTime($data['shipTime']);
                unset($data['shipTime']);
            }
            elseif (\array_key_exists('shipTime', $data) && $data['shipTime'] === null) {
                $object->setShipTime(null);
            }
            if (\array_key_exists('serviceLevel', $data) && $data['serviceLevel'] !== null) {
                $object->setServiceLevel($data['serviceLevel']);
                unset($data['serviceLevel']);
            }
            elseif (\array_key_exists('serviceLevel', $data) && $data['serviceLevel'] === null) {
                $object->setServiceLevel(null);
            }
            if (\array_key_exists('billType', $data) && $data['billType'] !== null) {
                $object->setBillType($data['billType']);
                unset($data['billType']);
            }
            elseif (\array_key_exists('billType', $data) && $data['billType'] === null) {
                $object->setBillType(null);
            }
            if (\array_key_exists('dutyType', $data) && $data['dutyType'] !== null) {
                $object->setDutyType($data['dutyType']);
                unset($data['dutyType']);
            }
            elseif (\array_key_exists('dutyType', $data) && $data['dutyType'] === null) {
                $object->setDutyType(null);
            }
            if (\array_key_exists('residentialIndicator', $data) && $data['residentialIndicator'] !== null) {
                $object->setResidentialIndicator($data['residentialIndicator']);
                unset($data['residentialIndicator']);
            }
            elseif (\array_key_exists('residentialIndicator', $data) && $data['residentialIndicator'] === null) {
                $object->setResidentialIndicator(null);
            }
            if (\array_key_exists('destinationCountryName', $data) && $data['destinationCountryName'] !== null) {
                $object->setDestinationCountryName($data['destinationCountryName']);
                unset($data['destinationCountryName']);
            }
            elseif (\array_key_exists('destinationCountryName', $data) && $data['destinationCountryName'] === null) {
                $object->setDestinationCountryName(null);
            }
            if (\array_key_exists('destinationCountryCode', $data) && $data['destinationCountryCode'] !== null) {
                $object->setDestinationCountryCode($data['destinationCountryCode']);
                unset($data['destinationCountryCode']);
            }
            elseif (\array_key_exists('destinationCountryCode', $data) && $data['destinationCountryCode'] === null) {
                $object->setDestinationCountryCode(null);
            }
            if (\array_key_exists('destinationPostalCode', $data) && $data['destinationPostalCode'] !== null) {
                $object->setDestinationPostalCode($data['destinationPostalCode']);
                unset($data['destinationPostalCode']);
            }
            elseif (\array_key_exists('destinationPostalCode', $data) && $data['destinationPostalCode'] === null) {
                $object->setDestinationPostalCode(null);
            }
            if (\array_key_exists('destinationPostalCodeLow', $data) && $data['destinationPostalCodeLow'] !== null) {
                $object->setDestinationPostalCodeLow($data['destinationPostalCodeLow']);
                unset($data['destinationPostalCodeLow']);
            }
            elseif (\array_key_exists('destinationPostalCodeLow', $data) && $data['destinationPostalCodeLow'] === null) {
                $object->setDestinationPostalCodeLow(null);
            }
            if (\array_key_exists('destinationPostalCodeHigh', $data) && $data['destinationPostalCodeHigh'] !== null) {
                $object->setDestinationPostalCodeHigh($data['destinationPostalCodeHigh']);
                unset($data['destinationPostalCodeHigh']);
            }
            elseif (\array_key_exists('destinationPostalCodeHigh', $data) && $data['destinationPostalCodeHigh'] === null) {
                $object->setDestinationPostalCodeHigh(null);
            }
            if (\array_key_exists('destinationStateProvince', $data) && $data['destinationStateProvince'] !== null) {
                $object->setDestinationStateProvince($data['destinationStateProvince']);
                unset($data['destinationStateProvince']);
            }
            elseif (\array_key_exists('destinationStateProvince', $data) && $data['destinationStateProvince'] === null) {
                $object->setDestinationStateProvince(null);
            }
            if (\array_key_exists('destinationCityName', $data) && $data['destinationCityName'] !== null) {
                $object->setDestinationCityName($data['destinationCityName']);
                unset($data['destinationCityName']);
            }
            elseif (\array_key_exists('destinationCityName', $data) && $data['destinationCityName'] === null) {
                $object->setDestinationCityName(null);
            }
            if (\array_key_exists('originCountryName', $data) && $data['originCountryName'] !== null) {
                $object->setOriginCountryName($data['originCountryName']);
                unset($data['originCountryName']);
            }
            elseif (\array_key_exists('originCountryName', $data) && $data['originCountryName'] === null) {
                $object->setOriginCountryName(null);
            }
            if (\array_key_exists('originCountryCode', $data) && $data['originCountryCode'] !== null) {
                $object->setOriginCountryCode($data['originCountryCode']);
                unset($data['originCountryCode']);
            }
            elseif (\array_key_exists('originCountryCode', $data) && $data['originCountryCode'] === null) {
                $object->setOriginCountryCode(null);
            }
            if (\array_key_exists('originPostalCode', $data) && $data['originPostalCode'] !== null) {
                $object->setOriginPostalCode($data['originPostalCode']);
                unset($data['originPostalCode']);
            }
            elseif (\array_key_exists('originPostalCode', $data) && $data['originPostalCode'] === null) {
                $object->setOriginPostalCode(null);
            }
            if (\array_key_exists('originPostalCodeLow', $data) && $data['originPostalCodeLow'] !== null) {
                $object->setOriginPostalCodeLow($data['originPostalCodeLow']);
                unset($data['originPostalCodeLow']);
            }
            elseif (\array_key_exists('originPostalCodeLow', $data) && $data['originPostalCodeLow'] === null) {
                $object->setOriginPostalCodeLow(null);
            }
            if (\array_key_exists('originPostalCodeHigh', $data) && $data['originPostalCodeHigh'] !== null) {
                $object->setOriginPostalCodeHigh($data['originPostalCodeHigh']);
                unset($data['originPostalCodeHigh']);
            }
            elseif (\array_key_exists('originPostalCodeHigh', $data) && $data['originPostalCodeHigh'] === null) {
                $object->setOriginPostalCodeHigh(null);
            }
            if (\array_key_exists('originStateProvince', $data) && $data['originStateProvince'] !== null) {
                $object->setOriginStateProvince($data['originStateProvince']);
                unset($data['originStateProvince']);
            }
            elseif (\array_key_exists('originStateProvince', $data) && $data['originStateProvince'] === null) {
                $object->setOriginStateProvince(null);
            }
            if (\array_key_exists('originCityName', $data) && $data['originCityName'] !== null) {
                $object->setOriginCityName($data['originCityName']);
                unset($data['originCityName']);
            }
            elseif (\array_key_exists('originCityName', $data) && $data['originCityName'] === null) {
                $object->setOriginCityName(null);
            }
            if (\array_key_exists('weight', $data) && $data['weight'] !== null) {
                $object->setWeight($data['weight']);
                unset($data['weight']);
            }
            elseif (\array_key_exists('weight', $data) && $data['weight'] === null) {
                $object->setWeight(null);
            }
            if (\array_key_exists('weightUnitOfMeasure', $data) && $data['weightUnitOfMeasure'] !== null) {
                $object->setWeightUnitOfMeasure($data['weightUnitOfMeasure']);
                unset($data['weightUnitOfMeasure']);
            }
            elseif (\array_key_exists('weightUnitOfMeasure', $data) && $data['weightUnitOfMeasure'] === null) {
                $object->setWeightUnitOfMeasure(null);
            }
            if (\array_key_exists('shipmentContentsValue', $data) && $data['shipmentContentsValue'] !== null) {
                $object->setShipmentContentsValue($data['shipmentContentsValue']);
                unset($data['shipmentContentsValue']);
            }
            elseif (\array_key_exists('shipmentContentsValue', $data) && $data['shipmentContentsValue'] === null) {
                $object->setShipmentContentsValue(null);
            }
            if (\array_key_exists('shipmentContentsCurrencyCode', $data) && $data['shipmentContentsCurrencyCode'] !== null) {
                $object->setShipmentContentsCurrencyCode($data['shipmentContentsCurrencyCode']);
                unset($data['shipmentContentsCurrencyCode']);
            }
            elseif (\array_key_exists('shipmentContentsCurrencyCode', $data) && $data['shipmentContentsCurrencyCode'] === null) {
                $object->setShipmentContentsCurrencyCode(null);
            }
            if (\array_key_exists('guaranteeSuspended', $data) && $data['guaranteeSuspended'] !== null) {
                $object->setGuaranteeSuspended($data['guaranteeSuspended']);
                unset($data['guaranteeSuspended']);
            }
            elseif (\array_key_exists('guaranteeSuspended', $data) && $data['guaranteeSuspended'] === null) {
                $object->setGuaranteeSuspended(null);
            }
            if (\array_key_exists('numberOfServices', $data) && $data['numberOfServices'] !== null) {
                $object->setNumberOfServices($data['numberOfServices']);
                unset($data['numberOfServices']);
            }
            elseif (\array_key_exists('numberOfServices', $data) && $data['numberOfServices'] === null) {
                $object->setNumberOfServices(null);
            }
            if (\array_key_exists('services', $data) && $data['services'] !== null) {
                $values = [];
                foreach ($data['services'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'ShipStream\\Ups\\Api\\Model\\Services', 'json', $context);
                }
                $object->setServices($values);
                unset($data['services']);
            }
            elseif (\array_key_exists('services', $data) && $data['services'] === null) {
                $object->setServices(null);
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
            $data['shipDate'] = $object->getShipDate();
            $data['shipTime'] = $object->getShipTime();
            $data['serviceLevel'] = $object->getServiceLevel();
            $data['billType'] = $object->getBillType();
            if ($object->isInitialized('dutyType') && null !== $object->getDutyType()) {
                $data['dutyType'] = $object->getDutyType();
            }
            $data['residentialIndicator'] = $object->getResidentialIndicator();
            $data['destinationCountryName'] = $object->getDestinationCountryName();
            $data['destinationCountryCode'] = $object->getDestinationCountryCode();
            if ($object->isInitialized('destinationPostalCode') && null !== $object->getDestinationPostalCode()) {
                $data['destinationPostalCode'] = $object->getDestinationPostalCode();
            }
            if ($object->isInitialized('destinationPostalCodeLow') && null !== $object->getDestinationPostalCodeLow()) {
                $data['destinationPostalCodeLow'] = $object->getDestinationPostalCodeLow();
            }
            if ($object->isInitialized('destinationPostalCodeHigh') && null !== $object->getDestinationPostalCodeHigh()) {
                $data['destinationPostalCodeHigh'] = $object->getDestinationPostalCodeHigh();
            }
            if ($object->isInitialized('destinationStateProvince') && null !== $object->getDestinationStateProvince()) {
                $data['destinationStateProvince'] = $object->getDestinationStateProvince();
            }
            if ($object->isInitialized('destinationCityName') && null !== $object->getDestinationCityName()) {
                $data['destinationCityName'] = $object->getDestinationCityName();
            }
            $data['originCountryName'] = $object->getOriginCountryName();
            $data['originCountryCode'] = $object->getOriginCountryCode();
            if ($object->isInitialized('originPostalCode') && null !== $object->getOriginPostalCode()) {
                $data['originPostalCode'] = $object->getOriginPostalCode();
            }
            if ($object->isInitialized('originPostalCodeLow') && null !== $object->getOriginPostalCodeLow()) {
                $data['originPostalCodeLow'] = $object->getOriginPostalCodeLow();
            }
            if ($object->isInitialized('originPostalCodeHigh') && null !== $object->getOriginPostalCodeHigh()) {
                $data['originPostalCodeHigh'] = $object->getOriginPostalCodeHigh();
            }
            if ($object->isInitialized('originStateProvince') && null !== $object->getOriginStateProvince()) {
                $data['originStateProvince'] = $object->getOriginStateProvince();
            }
            if ($object->isInitialized('originCityName') && null !== $object->getOriginCityName()) {
                $data['originCityName'] = $object->getOriginCityName();
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
            $data['guaranteeSuspended'] = $object->getGuaranteeSuspended();
            $data['numberOfServices'] = $object->getNumberOfServices();
            if ($object->isInitialized('services') && null !== $object->getServices()) {
                $values = [];
                foreach ($object->getServices() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['services'] = $values;
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
            return ['ShipStream\\Ups\\Api\\Model\\EmsResponse' => false];
        }
    }
} else {
    class EmsResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\EmsResponse';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\EmsResponse';
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
            $object = new \ShipStream\Ups\Api\Model\EmsResponse();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('shipDate', $data) && $data['shipDate'] !== null) {
                $object->setShipDate($data['shipDate']);
                unset($data['shipDate']);
            }
            elseif (\array_key_exists('shipDate', $data) && $data['shipDate'] === null) {
                $object->setShipDate(null);
            }
            if (\array_key_exists('shipTime', $data) && $data['shipTime'] !== null) {
                $object->setShipTime($data['shipTime']);
                unset($data['shipTime']);
            }
            elseif (\array_key_exists('shipTime', $data) && $data['shipTime'] === null) {
                $object->setShipTime(null);
            }
            if (\array_key_exists('serviceLevel', $data) && $data['serviceLevel'] !== null) {
                $object->setServiceLevel($data['serviceLevel']);
                unset($data['serviceLevel']);
            }
            elseif (\array_key_exists('serviceLevel', $data) && $data['serviceLevel'] === null) {
                $object->setServiceLevel(null);
            }
            if (\array_key_exists('billType', $data) && $data['billType'] !== null) {
                $object->setBillType($data['billType']);
                unset($data['billType']);
            }
            elseif (\array_key_exists('billType', $data) && $data['billType'] === null) {
                $object->setBillType(null);
            }
            if (\array_key_exists('dutyType', $data) && $data['dutyType'] !== null) {
                $object->setDutyType($data['dutyType']);
                unset($data['dutyType']);
            }
            elseif (\array_key_exists('dutyType', $data) && $data['dutyType'] === null) {
                $object->setDutyType(null);
            }
            if (\array_key_exists('residentialIndicator', $data) && $data['residentialIndicator'] !== null) {
                $object->setResidentialIndicator($data['residentialIndicator']);
                unset($data['residentialIndicator']);
            }
            elseif (\array_key_exists('residentialIndicator', $data) && $data['residentialIndicator'] === null) {
                $object->setResidentialIndicator(null);
            }
            if (\array_key_exists('destinationCountryName', $data) && $data['destinationCountryName'] !== null) {
                $object->setDestinationCountryName($data['destinationCountryName']);
                unset($data['destinationCountryName']);
            }
            elseif (\array_key_exists('destinationCountryName', $data) && $data['destinationCountryName'] === null) {
                $object->setDestinationCountryName(null);
            }
            if (\array_key_exists('destinationCountryCode', $data) && $data['destinationCountryCode'] !== null) {
                $object->setDestinationCountryCode($data['destinationCountryCode']);
                unset($data['destinationCountryCode']);
            }
            elseif (\array_key_exists('destinationCountryCode', $data) && $data['destinationCountryCode'] === null) {
                $object->setDestinationCountryCode(null);
            }
            if (\array_key_exists('destinationPostalCode', $data) && $data['destinationPostalCode'] !== null) {
                $object->setDestinationPostalCode($data['destinationPostalCode']);
                unset($data['destinationPostalCode']);
            }
            elseif (\array_key_exists('destinationPostalCode', $data) && $data['destinationPostalCode'] === null) {
                $object->setDestinationPostalCode(null);
            }
            if (\array_key_exists('destinationPostalCodeLow', $data) && $data['destinationPostalCodeLow'] !== null) {
                $object->setDestinationPostalCodeLow($data['destinationPostalCodeLow']);
                unset($data['destinationPostalCodeLow']);
            }
            elseif (\array_key_exists('destinationPostalCodeLow', $data) && $data['destinationPostalCodeLow'] === null) {
                $object->setDestinationPostalCodeLow(null);
            }
            if (\array_key_exists('destinationPostalCodeHigh', $data) && $data['destinationPostalCodeHigh'] !== null) {
                $object->setDestinationPostalCodeHigh($data['destinationPostalCodeHigh']);
                unset($data['destinationPostalCodeHigh']);
            }
            elseif (\array_key_exists('destinationPostalCodeHigh', $data) && $data['destinationPostalCodeHigh'] === null) {
                $object->setDestinationPostalCodeHigh(null);
            }
            if (\array_key_exists('destinationStateProvince', $data) && $data['destinationStateProvince'] !== null) {
                $object->setDestinationStateProvince($data['destinationStateProvince']);
                unset($data['destinationStateProvince']);
            }
            elseif (\array_key_exists('destinationStateProvince', $data) && $data['destinationStateProvince'] === null) {
                $object->setDestinationStateProvince(null);
            }
            if (\array_key_exists('destinationCityName', $data) && $data['destinationCityName'] !== null) {
                $object->setDestinationCityName($data['destinationCityName']);
                unset($data['destinationCityName']);
            }
            elseif (\array_key_exists('destinationCityName', $data) && $data['destinationCityName'] === null) {
                $object->setDestinationCityName(null);
            }
            if (\array_key_exists('originCountryName', $data) && $data['originCountryName'] !== null) {
                $object->setOriginCountryName($data['originCountryName']);
                unset($data['originCountryName']);
            }
            elseif (\array_key_exists('originCountryName', $data) && $data['originCountryName'] === null) {
                $object->setOriginCountryName(null);
            }
            if (\array_key_exists('originCountryCode', $data) && $data['originCountryCode'] !== null) {
                $object->setOriginCountryCode($data['originCountryCode']);
                unset($data['originCountryCode']);
            }
            elseif (\array_key_exists('originCountryCode', $data) && $data['originCountryCode'] === null) {
                $object->setOriginCountryCode(null);
            }
            if (\array_key_exists('originPostalCode', $data) && $data['originPostalCode'] !== null) {
                $object->setOriginPostalCode($data['originPostalCode']);
                unset($data['originPostalCode']);
            }
            elseif (\array_key_exists('originPostalCode', $data) && $data['originPostalCode'] === null) {
                $object->setOriginPostalCode(null);
            }
            if (\array_key_exists('originPostalCodeLow', $data) && $data['originPostalCodeLow'] !== null) {
                $object->setOriginPostalCodeLow($data['originPostalCodeLow']);
                unset($data['originPostalCodeLow']);
            }
            elseif (\array_key_exists('originPostalCodeLow', $data) && $data['originPostalCodeLow'] === null) {
                $object->setOriginPostalCodeLow(null);
            }
            if (\array_key_exists('originPostalCodeHigh', $data) && $data['originPostalCodeHigh'] !== null) {
                $object->setOriginPostalCodeHigh($data['originPostalCodeHigh']);
                unset($data['originPostalCodeHigh']);
            }
            elseif (\array_key_exists('originPostalCodeHigh', $data) && $data['originPostalCodeHigh'] === null) {
                $object->setOriginPostalCodeHigh(null);
            }
            if (\array_key_exists('originStateProvince', $data) && $data['originStateProvince'] !== null) {
                $object->setOriginStateProvince($data['originStateProvince']);
                unset($data['originStateProvince']);
            }
            elseif (\array_key_exists('originStateProvince', $data) && $data['originStateProvince'] === null) {
                $object->setOriginStateProvince(null);
            }
            if (\array_key_exists('originCityName', $data) && $data['originCityName'] !== null) {
                $object->setOriginCityName($data['originCityName']);
                unset($data['originCityName']);
            }
            elseif (\array_key_exists('originCityName', $data) && $data['originCityName'] === null) {
                $object->setOriginCityName(null);
            }
            if (\array_key_exists('weight', $data) && $data['weight'] !== null) {
                $object->setWeight($data['weight']);
                unset($data['weight']);
            }
            elseif (\array_key_exists('weight', $data) && $data['weight'] === null) {
                $object->setWeight(null);
            }
            if (\array_key_exists('weightUnitOfMeasure', $data) && $data['weightUnitOfMeasure'] !== null) {
                $object->setWeightUnitOfMeasure($data['weightUnitOfMeasure']);
                unset($data['weightUnitOfMeasure']);
            }
            elseif (\array_key_exists('weightUnitOfMeasure', $data) && $data['weightUnitOfMeasure'] === null) {
                $object->setWeightUnitOfMeasure(null);
            }
            if (\array_key_exists('shipmentContentsValue', $data) && $data['shipmentContentsValue'] !== null) {
                $object->setShipmentContentsValue($data['shipmentContentsValue']);
                unset($data['shipmentContentsValue']);
            }
            elseif (\array_key_exists('shipmentContentsValue', $data) && $data['shipmentContentsValue'] === null) {
                $object->setShipmentContentsValue(null);
            }
            if (\array_key_exists('shipmentContentsCurrencyCode', $data) && $data['shipmentContentsCurrencyCode'] !== null) {
                $object->setShipmentContentsCurrencyCode($data['shipmentContentsCurrencyCode']);
                unset($data['shipmentContentsCurrencyCode']);
            }
            elseif (\array_key_exists('shipmentContentsCurrencyCode', $data) && $data['shipmentContentsCurrencyCode'] === null) {
                $object->setShipmentContentsCurrencyCode(null);
            }
            if (\array_key_exists('guaranteeSuspended', $data) && $data['guaranteeSuspended'] !== null) {
                $object->setGuaranteeSuspended($data['guaranteeSuspended']);
                unset($data['guaranteeSuspended']);
            }
            elseif (\array_key_exists('guaranteeSuspended', $data) && $data['guaranteeSuspended'] === null) {
                $object->setGuaranteeSuspended(null);
            }
            if (\array_key_exists('numberOfServices', $data) && $data['numberOfServices'] !== null) {
                $object->setNumberOfServices($data['numberOfServices']);
                unset($data['numberOfServices']);
            }
            elseif (\array_key_exists('numberOfServices', $data) && $data['numberOfServices'] === null) {
                $object->setNumberOfServices(null);
            }
            if (\array_key_exists('services', $data) && $data['services'] !== null) {
                $values = [];
                foreach ($data['services'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'ShipStream\\Ups\\Api\\Model\\Services', 'json', $context);
                }
                $object->setServices($values);
                unset($data['services']);
            }
            elseif (\array_key_exists('services', $data) && $data['services'] === null) {
                $object->setServices(null);
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
            $data['shipDate'] = $object->getShipDate();
            $data['shipTime'] = $object->getShipTime();
            $data['serviceLevel'] = $object->getServiceLevel();
            $data['billType'] = $object->getBillType();
            if ($object->isInitialized('dutyType') && null !== $object->getDutyType()) {
                $data['dutyType'] = $object->getDutyType();
            }
            $data['residentialIndicator'] = $object->getResidentialIndicator();
            $data['destinationCountryName'] = $object->getDestinationCountryName();
            $data['destinationCountryCode'] = $object->getDestinationCountryCode();
            if ($object->isInitialized('destinationPostalCode') && null !== $object->getDestinationPostalCode()) {
                $data['destinationPostalCode'] = $object->getDestinationPostalCode();
            }
            if ($object->isInitialized('destinationPostalCodeLow') && null !== $object->getDestinationPostalCodeLow()) {
                $data['destinationPostalCodeLow'] = $object->getDestinationPostalCodeLow();
            }
            if ($object->isInitialized('destinationPostalCodeHigh') && null !== $object->getDestinationPostalCodeHigh()) {
                $data['destinationPostalCodeHigh'] = $object->getDestinationPostalCodeHigh();
            }
            if ($object->isInitialized('destinationStateProvince') && null !== $object->getDestinationStateProvince()) {
                $data['destinationStateProvince'] = $object->getDestinationStateProvince();
            }
            if ($object->isInitialized('destinationCityName') && null !== $object->getDestinationCityName()) {
                $data['destinationCityName'] = $object->getDestinationCityName();
            }
            $data['originCountryName'] = $object->getOriginCountryName();
            $data['originCountryCode'] = $object->getOriginCountryCode();
            if ($object->isInitialized('originPostalCode') && null !== $object->getOriginPostalCode()) {
                $data['originPostalCode'] = $object->getOriginPostalCode();
            }
            if ($object->isInitialized('originPostalCodeLow') && null !== $object->getOriginPostalCodeLow()) {
                $data['originPostalCodeLow'] = $object->getOriginPostalCodeLow();
            }
            if ($object->isInitialized('originPostalCodeHigh') && null !== $object->getOriginPostalCodeHigh()) {
                $data['originPostalCodeHigh'] = $object->getOriginPostalCodeHigh();
            }
            if ($object->isInitialized('originStateProvince') && null !== $object->getOriginStateProvince()) {
                $data['originStateProvince'] = $object->getOriginStateProvince();
            }
            if ($object->isInitialized('originCityName') && null !== $object->getOriginCityName()) {
                $data['originCityName'] = $object->getOriginCityName();
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
            $data['guaranteeSuspended'] = $object->getGuaranteeSuspended();
            $data['numberOfServices'] = $object->getNumberOfServices();
            if ($object->isInitialized('services') && null !== $object->getServices()) {
                $values = [];
                foreach ($object->getServices() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['services'] = $values;
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
            return ['ShipStream\\Ups\\Api\\Model\\EmsResponse' => false];
        }
    }
}