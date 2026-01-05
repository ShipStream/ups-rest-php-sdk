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
class FreightShipResponseShipmentResultsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \ShipStream\Ups\Api\Model\FreightShipResponseShipmentResults::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \ShipStream\Ups\Api\Model\FreightShipResponseShipmentResults::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \ShipStream\Ups\Api\Model\FreightShipResponseShipmentResults();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('PickupRequestConfirmationNumber', $data)) {
            $object->setPickupRequestConfirmationNumber($data['PickupRequestConfirmationNumber']);
            unset($data['PickupRequestConfirmationNumber']);
        }
        if (\array_key_exists('DeliveryDate', $data)) {
            $object->setDeliveryDate($data['DeliveryDate']);
            unset($data['DeliveryDate']);
        }
        if (\array_key_exists('ShipmentNumber', $data)) {
            $object->setShipmentNumber($data['ShipmentNumber']);
            unset($data['ShipmentNumber']);
        }
        if (\array_key_exists('BOLID', $data)) {
            $object->setBOLID($data['BOLID']);
            unset($data['BOLID']);
        }
        if (\array_key_exists('GuaranteedIndicator', $data)) {
            $object->setGuaranteedIndicator($data['GuaranteedIndicator']);
            unset($data['GuaranteedIndicator']);
        }
        if (\array_key_exists('MinimumChargeAppliedIndicator', $data)) {
            $object->setMinimumChargeAppliedIndicator($data['MinimumChargeAppliedIndicator']);
            unset($data['MinimumChargeAppliedIndicator']);
        }
        if (\array_key_exists('Rate', $data)) {
            $values = [];
            foreach ($data['Rate'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \ShipStream\Ups\Api\Model\ShipmentResultsRate::class, 'json', $context);
            }
            $object->setRate($values);
            unset($data['Rate']);
        }
        if (\array_key_exists('FreightDensityRate', $data)) {
            $object->setFreightDensityRate($this->denormalizer->denormalize($data['FreightDensityRate'], \ShipStream\Ups\Api\Model\ShipmentResultsFreightDensityRate::class, 'json', $context));
            unset($data['FreightDensityRate']);
        }
        if (\array_key_exists('TotalShipmentCharge', $data)) {
            $object->setTotalShipmentCharge($this->denormalizer->denormalize($data['TotalShipmentCharge'], \ShipStream\Ups\Api\Model\ShipmentResultsTotalShipmentCharge::class, 'json', $context));
            unset($data['TotalShipmentCharge']);
        }
        if (\array_key_exists('BillableShipmentWeight', $data)) {
            $object->setBillableShipmentWeight($this->denormalizer->denormalize($data['BillableShipmentWeight'], \ShipStream\Ups\Api\Model\ShipmentResultsBillableShipmentWeight::class, 'json', $context));
            unset($data['BillableShipmentWeight']);
        }
        if (\array_key_exists('Service', $data)) {
            $object->setService($this->denormalizer->denormalize($data['Service'], \ShipStream\Ups\Api\Model\ShipmentResultsService::class, 'json', $context));
            unset($data['Service']);
        }
        if (\array_key_exists('Documents', $data)) {
            $object->setDocuments($this->denormalizer->denormalize($data['Documents'], \ShipStream\Ups\Api\Model\ShipmentResultsDocuments::class, 'json', $context));
            unset($data['Documents']);
        }
        if (\array_key_exists('TimeInTransit', $data)) {
            $object->setTimeInTransit($this->denormalizer->denormalize($data['TimeInTransit'], \ShipStream\Ups\Api\Model\ShipmentResultsTimeInTransit::class, 'json', $context));
            unset($data['TimeInTransit']);
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
        if ($data->isInitialized('pickupRequestConfirmationNumber') && null !== $data->getPickupRequestConfirmationNumber()) {
            $dataArray['PickupRequestConfirmationNumber'] = $data->getPickupRequestConfirmationNumber();
        }
        if ($data->isInitialized('deliveryDate') && null !== $data->getDeliveryDate()) {
            $dataArray['DeliveryDate'] = $data->getDeliveryDate();
        }
        if ($data->isInitialized('shipmentNumber') && null !== $data->getShipmentNumber()) {
            $dataArray['ShipmentNumber'] = $data->getShipmentNumber();
        }
        if ($data->isInitialized('bOLID') && null !== $data->getBOLID()) {
            $dataArray['BOLID'] = $data->getBOLID();
        }
        if ($data->isInitialized('guaranteedIndicator') && null !== $data->getGuaranteedIndicator()) {
            $dataArray['GuaranteedIndicator'] = $data->getGuaranteedIndicator();
        }
        if ($data->isInitialized('minimumChargeAppliedIndicator') && null !== $data->getMinimumChargeAppliedIndicator()) {
            $dataArray['MinimumChargeAppliedIndicator'] = $data->getMinimumChargeAppliedIndicator();
        }
        if ($data->isInitialized('rate') && null !== $data->getRate()) {
            $values = [];
            foreach ($data->getRate() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['Rate'] = $values;
        }
        if ($data->isInitialized('freightDensityRate') && null !== $data->getFreightDensityRate()) {
            $dataArray['FreightDensityRate'] = $this->normalizer->normalize($data->getFreightDensityRate(), 'json', $context);
        }
        if ($data->isInitialized('totalShipmentCharge') && null !== $data->getTotalShipmentCharge()) {
            $dataArray['TotalShipmentCharge'] = $this->normalizer->normalize($data->getTotalShipmentCharge(), 'json', $context);
        }
        if ($data->isInitialized('billableShipmentWeight') && null !== $data->getBillableShipmentWeight()) {
            $dataArray['BillableShipmentWeight'] = $this->normalizer->normalize($data->getBillableShipmentWeight(), 'json', $context);
        }
        if ($data->isInitialized('service') && null !== $data->getService()) {
            $dataArray['Service'] = $this->normalizer->normalize($data->getService(), 'json', $context);
        }
        if ($data->isInitialized('documents') && null !== $data->getDocuments()) {
            $dataArray['Documents'] = $this->normalizer->normalize($data->getDocuments(), 'json', $context);
        }
        if ($data->isInitialized('timeInTransit') && null !== $data->getTimeInTransit()) {
            $dataArray['TimeInTransit'] = $this->normalizer->normalize($data->getTimeInTransit(), 'json', $context);
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
        return [\ShipStream\Ups\Api\Model\FreightShipResponseShipmentResults::class => false];
    }
}