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
class PickupCreationRequestFreightOptionsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'ShipStream\\Ups\\Api\\Model\\PickupCreationRequestFreightOptions';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\PickupCreationRequestFreightOptions';
    }
    /**
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \ShipStream\Ups\Api\Model\PickupCreationRequestFreightOptions();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('ShipmentServiceOptions', $data)) {
            $object->setShipmentServiceOptions($this->denormalizer->denormalize($data['ShipmentServiceOptions'], 'ShipStream\\Ups\\Api\\Model\\FreightOptionsShipmentServiceOptions', 'json', $context));
            unset($data['ShipmentServiceOptions']);
        }
        if (\array_key_exists('OriginServiceCenterCode', $data)) {
            $object->setOriginServiceCenterCode($data['OriginServiceCenterCode']);
            unset($data['OriginServiceCenterCode']);
        }
        if (\array_key_exists('OriginServiceCountryCode', $data)) {
            $object->setOriginServiceCountryCode($data['OriginServiceCountryCode']);
            unset($data['OriginServiceCountryCode']);
        }
        if (\array_key_exists('DestinationAddress', $data)) {
            $object->setDestinationAddress($this->denormalizer->denormalize($data['DestinationAddress'], 'ShipStream\\Ups\\Api\\Model\\FreightOptionsDestinationAddress', 'json', $context));
            unset($data['DestinationAddress']);
        }
        if (\array_key_exists('ShipmentDetail', $data)) {
            $object->setShipmentDetail($this->denormalizer->denormalize($data['ShipmentDetail'], 'ShipStream\\Ups\\Api\\Model\\FreightOptionsShipmentDetail', 'json', $context));
            unset($data['ShipmentDetail']);
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
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if ($object->isInitialized('shipmentServiceOptions') && null !== $object->getShipmentServiceOptions()) {
            $data['ShipmentServiceOptions'] = $this->normalizer->normalize($object->getShipmentServiceOptions(), 'json', $context);
        }
        if ($object->isInitialized('originServiceCenterCode') && null !== $object->getOriginServiceCenterCode()) {
            $data['OriginServiceCenterCode'] = $object->getOriginServiceCenterCode();
        }
        if ($object->isInitialized('originServiceCountryCode') && null !== $object->getOriginServiceCountryCode()) {
            $data['OriginServiceCountryCode'] = $object->getOriginServiceCountryCode();
        }
        if ($object->isInitialized('destinationAddress') && null !== $object->getDestinationAddress()) {
            $data['DestinationAddress'] = $this->normalizer->normalize($object->getDestinationAddress(), 'json', $context);
        }
        $data['ShipmentDetail'] = $this->normalizer->normalize($object->getShipmentDetail(), 'json', $context);
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('ShipStream\\Ups\\Api\\Model\\PickupCreationRequestFreightOptions' => false);
    }
}