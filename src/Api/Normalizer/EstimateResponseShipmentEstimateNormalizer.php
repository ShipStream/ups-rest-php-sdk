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
class EstimateResponseShipmentEstimateNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'ShipStream\\Ups\\Api\\Model\\EstimateResponseShipmentEstimate';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\EstimateResponseShipmentEstimate';
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
        $object = new \ShipStream\Ups\Api\Model\EstimateResponseShipmentEstimate();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('CurrencyCode', $data)) {
            $object->setCurrencyCode($data['CurrencyCode']);
            unset($data['CurrencyCode']);
        }
        if (\array_key_exists('ShipmentCharges', $data)) {
            $object->setShipmentCharges($this->denormalizer->denormalize($data['ShipmentCharges'], 'ShipStream\\Ups\\Api\\Model\\ShipmentEstimateShipmentCharges', 'json', $context));
            unset($data['ShipmentCharges']);
        }
        if (\array_key_exists('ProductsCharges', $data)) {
            $object->setProductsCharges($this->denormalizer->denormalize($data['ProductsCharges'], 'ShipStream\\Ups\\Api\\Model\\ShipmentEstimateProductsCharges', 'json', $context));
            unset($data['ProductsCharges']);
        }
        if (\array_key_exists('TotalLandedCost', $data)) {
            $object->setTotalLandedCost($data['TotalLandedCost']);
            unset($data['TotalLandedCost']);
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
        $data['CurrencyCode'] = $object->getCurrencyCode();
        $data['ShipmentCharges'] = $this->normalizer->normalize($object->getShipmentCharges(), 'json', $context);
        $data['ProductsCharges'] = $this->normalizer->normalize($object->getProductsCharges(), 'json', $context);
        $data['TotalLandedCost'] = $object->getTotalLandedCost();
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('ShipStream\\Ups\\Api\\Model\\EstimateResponseShipmentEstimate' => false);
    }
}