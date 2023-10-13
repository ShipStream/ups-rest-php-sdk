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
class ShipmentEstimateShipmentChargesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'ShipStream\\Ups\\Api\\Model\\ShipmentEstimateShipmentCharges';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\ShipmentEstimateShipmentCharges';
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
        $object = new \ShipStream\Ups\Api\Model\ShipmentEstimateShipmentCharges();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('TaxesAndFees', $data)) {
            $object->setTaxesAndFees($data['TaxesAndFees']);
            unset($data['TaxesAndFees']);
        }
        if (\array_key_exists('AdditionalInsuranceCost', $data)) {
            $object->setAdditionalInsuranceCost($data['AdditionalInsuranceCost']);
            unset($data['AdditionalInsuranceCost']);
        }
        if (\array_key_exists('TransportationCost', $data)) {
            $object->setTransportationCost($data['TransportationCost']);
            unset($data['TransportationCost']);
        }
        if (\array_key_exists('SubTotal', $data)) {
            $object->setSubTotal($data['SubTotal']);
            unset($data['SubTotal']);
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
        $data['TaxesAndFees'] = $object->getTaxesAndFees();
        if ($object->isInitialized('additionalInsuranceCost') && null !== $object->getAdditionalInsuranceCost()) {
            $data['AdditionalInsuranceCost'] = $object->getAdditionalInsuranceCost();
        }
        if ($object->isInitialized('transportationCost') && null !== $object->getTransportationCost()) {
            $data['TransportationCost'] = $object->getTransportationCost();
        }
        $data['SubTotal'] = $object->getSubTotal();
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('ShipStream\\Ups\\Api\\Model\\ShipmentEstimateShipmentCharges' => false);
    }
}