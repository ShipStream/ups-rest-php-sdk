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
class FreightShipRequestShipmentNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \ShipStream\Ups\Api\Model\FreightShipRequestShipment::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \ShipStream\Ups\Api\Model\FreightShipRequestShipment::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \ShipStream\Ups\Api\Model\FreightShipRequestShipment();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('ShipFrom', $data)) {
            $object->setShipFrom($this->denormalizer->denormalize($data['ShipFrom'], \ShipStream\Ups\Api\Model\FreightShipShipmentShipFrom::class, 'json', $context));
            unset($data['ShipFrom']);
        }
        if (\array_key_exists('ShipperNumber', $data)) {
            $object->setShipperNumber($data['ShipperNumber']);
            unset($data['ShipperNumber']);
        }
        if (\array_key_exists('ShipTo', $data)) {
            $object->setShipTo($this->denormalizer->denormalize($data['ShipTo'], \ShipStream\Ups\Api\Model\FreightShipShipmentShipTo::class, 'json', $context));
            unset($data['ShipTo']);
        }
        if (\array_key_exists('PaymentInformation', $data)) {
            $object->setPaymentInformation($this->denormalizer->denormalize($data['PaymentInformation'], \ShipStream\Ups\Api\Model\FreightShipShipmentPaymentInformation::class, 'json', $context));
            unset($data['PaymentInformation']);
        }
        if (\array_key_exists('Service', $data)) {
            $object->setService($this->denormalizer->denormalize($data['Service'], \ShipStream\Ups\Api\Model\ShipmentService::class, 'json', $context));
            unset($data['Service']);
        }
        if (\array_key_exists('HandlingUnitOne', $data)) {
            $object->setHandlingUnitOne($this->denormalizer->denormalize($data['HandlingUnitOne'], \ShipStream\Ups\Api\Model\ShipmentHandlingUnitOne::class, 'json', $context));
            unset($data['HandlingUnitOne']);
        }
        if (\array_key_exists('HandlingUnitTwo', $data)) {
            $object->setHandlingUnitTwo($this->denormalizer->denormalize($data['HandlingUnitTwo'], \ShipStream\Ups\Api\Model\ShipmentHandlingUnitTwo::class, 'json', $context));
            unset($data['HandlingUnitTwo']);
        }
        if (\array_key_exists('ExistingShipmentID', $data)) {
            $object->setExistingShipmentID($this->denormalizer->denormalize($data['ExistingShipmentID'], \ShipStream\Ups\Api\Model\ShipmentExistingShipmentID::class, 'json', $context));
            unset($data['ExistingShipmentID']);
        }
        if (\array_key_exists('HandlingInstructions', $data)) {
            $object->setHandlingInstructions($data['HandlingInstructions']);
            unset($data['HandlingInstructions']);
        }
        if (\array_key_exists('DeliveryInstructions', $data)) {
            $object->setDeliveryInstructions($data['DeliveryInstructions']);
            unset($data['DeliveryInstructions']);
        }
        if (\array_key_exists('PickupInstructions', $data)) {
            $object->setPickupInstructions($data['PickupInstructions']);
            unset($data['PickupInstructions']);
        }
        if (\array_key_exists('Commodity', $data)) {
            $values = [];
            foreach ($data['Commodity'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \ShipStream\Ups\Api\Model\ShipmentCommodity::class, 'json', $context);
            }
            $object->setCommodity($values);
            unset($data['Commodity']);
        }
        if (\array_key_exists('Reference', $data)) {
            $values_1 = [];
            foreach ($data['Reference'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \ShipStream\Ups\Api\Model\ShipmentReference::class, 'json', $context);
            }
            $object->setReference($values_1);
            unset($data['Reference']);
        }
        if (\array_key_exists('ShipmentServiceOptions', $data)) {
            $object->setShipmentServiceOptions($this->denormalizer->denormalize($data['ShipmentServiceOptions'], \ShipStream\Ups\Api\Model\FreightShipShipmentShipmentServiceOptions::class, 'json', $context));
            unset($data['ShipmentServiceOptions']);
        }
        if (\array_key_exists('PickupRequest', $data)) {
            $object->setPickupRequest($this->denormalizer->denormalize($data['PickupRequest'], \ShipStream\Ups\Api\Model\ShipmentPickupRequest::class, 'json', $context));
            unset($data['PickupRequest']);
        }
        if (\array_key_exists('Documents', $data)) {
            $object->setDocuments($this->denormalizer->denormalize($data['Documents'], \ShipStream\Ups\Api\Model\ShipmentDocuments::class, 'json', $context));
            unset($data['Documents']);
        }
        if (\array_key_exists('TimeInTransitIndicator', $data)) {
            $object->setTimeInTransitIndicator($data['TimeInTransitIndicator']);
            unset($data['TimeInTransitIndicator']);
        }
        if (\array_key_exists('HandlingUnits', $data)) {
            $object->setHandlingUnits($this->denormalizer->denormalize($data['HandlingUnits'], \ShipStream\Ups\Api\Model\ShipmentHandlingUnits::class, 'json', $context));
            unset($data['HandlingUnits']);
        }
        if (\array_key_exists('DensityEligibleIndicator', $data)) {
            $object->setDensityEligibleIndicator($data['DensityEligibleIndicator']);
            unset($data['DensityEligibleIndicator']);
        }
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_2;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['ShipFrom'] = $this->normalizer->normalize($data->getShipFrom(), 'json', $context);
        $dataArray['ShipperNumber'] = $data->getShipperNumber();
        $dataArray['ShipTo'] = $this->normalizer->normalize($data->getShipTo(), 'json', $context);
        $dataArray['PaymentInformation'] = $this->normalizer->normalize($data->getPaymentInformation(), 'json', $context);
        $dataArray['Service'] = $this->normalizer->normalize($data->getService(), 'json', $context);
        if ($data->isInitialized('handlingUnitOne') && null !== $data->getHandlingUnitOne()) {
            $dataArray['HandlingUnitOne'] = $this->normalizer->normalize($data->getHandlingUnitOne(), 'json', $context);
        }
        if ($data->isInitialized('handlingUnitTwo') && null !== $data->getHandlingUnitTwo()) {
            $dataArray['HandlingUnitTwo'] = $this->normalizer->normalize($data->getHandlingUnitTwo(), 'json', $context);
        }
        if ($data->isInitialized('existingShipmentID') && null !== $data->getExistingShipmentID()) {
            $dataArray['ExistingShipmentID'] = $this->normalizer->normalize($data->getExistingShipmentID(), 'json', $context);
        }
        if ($data->isInitialized('handlingInstructions') && null !== $data->getHandlingInstructions()) {
            $dataArray['HandlingInstructions'] = $data->getHandlingInstructions();
        }
        if ($data->isInitialized('deliveryInstructions') && null !== $data->getDeliveryInstructions()) {
            $dataArray['DeliveryInstructions'] = $data->getDeliveryInstructions();
        }
        if ($data->isInitialized('pickupInstructions') && null !== $data->getPickupInstructions()) {
            $dataArray['PickupInstructions'] = $data->getPickupInstructions();
        }
        $values = [];
        foreach ($data->getCommodity() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $dataArray['Commodity'] = $values;
        if ($data->isInitialized('reference') && null !== $data->getReference()) {
            $values_1 = [];
            foreach ($data->getReference() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['Reference'] = $values_1;
        }
        if ($data->isInitialized('shipmentServiceOptions') && null !== $data->getShipmentServiceOptions()) {
            $dataArray['ShipmentServiceOptions'] = $this->normalizer->normalize($data->getShipmentServiceOptions(), 'json', $context);
        }
        if ($data->isInitialized('pickupRequest') && null !== $data->getPickupRequest()) {
            $dataArray['PickupRequest'] = $this->normalizer->normalize($data->getPickupRequest(), 'json', $context);
        }
        if ($data->isInitialized('documents') && null !== $data->getDocuments()) {
            $dataArray['Documents'] = $this->normalizer->normalize($data->getDocuments(), 'json', $context);
        }
        if ($data->isInitialized('timeInTransitIndicator') && null !== $data->getTimeInTransitIndicator()) {
            $dataArray['TimeInTransitIndicator'] = $data->getTimeInTransitIndicator();
        }
        if ($data->isInitialized('handlingUnits') && null !== $data->getHandlingUnits()) {
            $dataArray['HandlingUnits'] = $this->normalizer->normalize($data->getHandlingUnits(), 'json', $context);
        }
        if ($data->isInitialized('densityEligibleIndicator') && null !== $data->getDensityEligibleIndicator()) {
            $dataArray['DensityEligibleIndicator'] = $data->getDensityEligibleIndicator();
        }
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_2;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\ShipStream\Ups\Api\Model\FreightShipRequestShipment::class => false];
    }
}