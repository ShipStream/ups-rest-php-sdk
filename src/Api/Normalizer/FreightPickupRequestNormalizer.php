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
class FreightPickupRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \ShipStream\Ups\Api\Model\FreightPickupRequest::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \ShipStream\Ups\Api\Model\FreightPickupRequest::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \ShipStream\Ups\Api\Model\FreightPickupRequest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('Request', $data)) {
            $object->setRequest($this->denormalizer->denormalize($data['Request'], \ShipStream\Ups\Api\Model\FreightPickupRequestRequest::class, 'json', $context));
            unset($data['Request']);
        }
        if (\array_key_exists('PickupRequestConfirmationNumber', $data)) {
            $object->setPickupRequestConfirmationNumber($data['PickupRequestConfirmationNumber']);
            unset($data['PickupRequestConfirmationNumber']);
        }
        if (\array_key_exists('DestinationPostalCode', $data)) {
            $object->setDestinationPostalCode($data['DestinationPostalCode']);
            unset($data['DestinationPostalCode']);
        }
        if (\array_key_exists('DestinationCountryCode', $data)) {
            $object->setDestinationCountryCode($data['DestinationCountryCode']);
            unset($data['DestinationCountryCode']);
        }
        if (\array_key_exists('Requester', $data)) {
            $object->setRequester($this->denormalizer->denormalize($data['Requester'], \ShipStream\Ups\Api\Model\FreightPickupRequestRequester::class, 'json', $context));
            unset($data['Requester']);
        }
        if (\array_key_exists('ShipFrom', $data)) {
            $object->setShipFrom($this->denormalizer->denormalize($data['ShipFrom'], \ShipStream\Ups\Api\Model\FreightPickupRequestShipFrom::class, 'json', $context));
            unset($data['ShipFrom']);
        }
        if (\array_key_exists('ShipTo', $data)) {
            $object->setShipTo($this->denormalizer->denormalize($data['ShipTo'], \ShipStream\Ups\Api\Model\FreightPickupRequestShipTo::class, 'json', $context));
            unset($data['ShipTo']);
        }
        if (\array_key_exists('PickupDate', $data)) {
            $object->setPickupDate($data['PickupDate']);
            unset($data['PickupDate']);
        }
        if (\array_key_exists('EarliestTimeReady', $data)) {
            $object->setEarliestTimeReady($data['EarliestTimeReady']);
            unset($data['EarliestTimeReady']);
        }
        if (\array_key_exists('LatestTimeReady', $data)) {
            $object->setLatestTimeReady($data['LatestTimeReady']);
            unset($data['LatestTimeReady']);
        }
        if (\array_key_exists('ShipmentServiceOptions', $data)) {
            $object->setShipmentServiceOptions($this->denormalizer->denormalize($data['ShipmentServiceOptions'], \ShipStream\Ups\Api\Model\FreightPickupRequestShipmentServiceOptions::class, 'json', $context));
            unset($data['ShipmentServiceOptions']);
        }
        if (\array_key_exists('ShipmentDetail', $data)) {
            $values = [];
            foreach ($data['ShipmentDetail'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \ShipStream\Ups\Api\Model\FreightPickupRequestShipmentDetail::class, 'json', $context);
            }
            $object->setShipmentDetail($values);
            unset($data['ShipmentDetail']);
        }
        if (\array_key_exists('ExistingShipmentID', $data)) {
            $object->setExistingShipmentID($this->denormalizer->denormalize($data['ExistingShipmentID'], \ShipStream\Ups\Api\Model\FreightPickupRequestExistingShipmentID::class, 'json', $context));
            unset($data['ExistingShipmentID']);
        }
        if (\array_key_exists('POM', $data)) {
            $object->setPOM($this->denormalizer->denormalize($data['POM'], \ShipStream\Ups\Api\Model\FreightPickupRequestPOM::class, 'json', $context));
            unset($data['POM']);
        }
        if (\array_key_exists('PickupInstructions', $data)) {
            $object->setPickupInstructions($data['PickupInstructions']);
            unset($data['PickupInstructions']);
        }
        if (\array_key_exists('AdditionalComments', $data)) {
            $object->setAdditionalComments($data['AdditionalComments']);
            unset($data['AdditionalComments']);
        }
        if (\array_key_exists('HandlingInstructions', $data)) {
            $object->setHandlingInstructions($data['HandlingInstructions']);
            unset($data['HandlingInstructions']);
        }
        if (\array_key_exists('SpecialInstructions', $data)) {
            $object->setSpecialInstructions($data['SpecialInstructions']);
            unset($data['SpecialInstructions']);
        }
        if (\array_key_exists('DeliveryInstructions', $data)) {
            $object->setDeliveryInstructions($data['DeliveryInstructions']);
            unset($data['DeliveryInstructions']);
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
        $dataArray['Request'] = $this->normalizer->normalize($data->getRequest(), 'json', $context);
        if ($data->isInitialized('pickupRequestConfirmationNumber') && null !== $data->getPickupRequestConfirmationNumber()) {
            $dataArray['PickupRequestConfirmationNumber'] = $data->getPickupRequestConfirmationNumber();
        }
        if ($data->isInitialized('destinationPostalCode') && null !== $data->getDestinationPostalCode()) {
            $dataArray['DestinationPostalCode'] = $data->getDestinationPostalCode();
        }
        $dataArray['DestinationCountryCode'] = $data->getDestinationCountryCode();
        $dataArray['Requester'] = $this->normalizer->normalize($data->getRequester(), 'json', $context);
        $dataArray['ShipFrom'] = $this->normalizer->normalize($data->getShipFrom(), 'json', $context);
        if ($data->isInitialized('shipTo') && null !== $data->getShipTo()) {
            $dataArray['ShipTo'] = $this->normalizer->normalize($data->getShipTo(), 'json', $context);
        }
        $dataArray['PickupDate'] = $data->getPickupDate();
        $dataArray['EarliestTimeReady'] = $data->getEarliestTimeReady();
        $dataArray['LatestTimeReady'] = $data->getLatestTimeReady();
        if ($data->isInitialized('shipmentServiceOptions') && null !== $data->getShipmentServiceOptions()) {
            $dataArray['ShipmentServiceOptions'] = $this->normalizer->normalize($data->getShipmentServiceOptions(), 'json', $context);
        }
        if ($data->isInitialized('shipmentDetail') && null !== $data->getShipmentDetail()) {
            $values = [];
            foreach ($data->getShipmentDetail() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['ShipmentDetail'] = $values;
        }
        if ($data->isInitialized('existingShipmentID') && null !== $data->getExistingShipmentID()) {
            $dataArray['ExistingShipmentID'] = $this->normalizer->normalize($data->getExistingShipmentID(), 'json', $context);
        }
        if ($data->isInitialized('pOM') && null !== $data->getPOM()) {
            $dataArray['POM'] = $this->normalizer->normalize($data->getPOM(), 'json', $context);
        }
        if ($data->isInitialized('pickupInstructions') && null !== $data->getPickupInstructions()) {
            $dataArray['PickupInstructions'] = $data->getPickupInstructions();
        }
        if ($data->isInitialized('additionalComments') && null !== $data->getAdditionalComments()) {
            $dataArray['AdditionalComments'] = $data->getAdditionalComments();
        }
        if ($data->isInitialized('handlingInstructions') && null !== $data->getHandlingInstructions()) {
            $dataArray['HandlingInstructions'] = $data->getHandlingInstructions();
        }
        if ($data->isInitialized('specialInstructions') && null !== $data->getSpecialInstructions()) {
            $dataArray['SpecialInstructions'] = $data->getSpecialInstructions();
        }
        if ($data->isInitialized('deliveryInstructions') && null !== $data->getDeliveryInstructions()) {
            $dataArray['DeliveryInstructions'] = $data->getDeliveryInstructions();
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
        return [\ShipStream\Ups\Api\Model\FreightPickupRequest::class => false];
    }
}