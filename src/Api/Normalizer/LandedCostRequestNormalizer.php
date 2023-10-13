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
class LandedCostRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'ShipStream\\Ups\\Api\\Model\\LandedCostRequest';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\LandedCostRequest';
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
        $object = new \ShipStream\Ups\Api\Model\LandedCostRequest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('Request', $data)) {
            $object->setRequest($this->denormalizer->denormalize($data['Request'], 'ShipStream\\Ups\\Api\\Model\\LandedCostRequestRequest', 'json', $context));
            unset($data['Request']);
        }
        if (\array_key_exists('QueryRequest', $data)) {
            $object->setQueryRequest($this->denormalizer->denormalize($data['QueryRequest'], 'ShipStream\\Ups\\Api\\Model\\LandedCostRequestQueryRequest', 'json', $context));
            unset($data['QueryRequest']);
        }
        if (\array_key_exists('EstimateRequest', $data)) {
            $object->setEstimateRequest($this->denormalizer->denormalize($data['EstimateRequest'], 'ShipStream\\Ups\\Api\\Model\\LandedCostRequestEstimateRequest', 'json', $context));
            unset($data['EstimateRequest']);
        }
        if (\array_key_exists('ShippingHistoryUserKey', $data)) {
            $object->setShippingHistoryUserKey($data['ShippingHistoryUserKey']);
            unset($data['ShippingHistoryUserKey']);
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
        $data['Request'] = $this->normalizer->normalize($object->getRequest(), 'json', $context);
        if ($object->isInitialized('queryRequest') && null !== $object->getQueryRequest()) {
            $data['QueryRequest'] = $this->normalizer->normalize($object->getQueryRequest(), 'json', $context);
        }
        if ($object->isInitialized('estimateRequest') && null !== $object->getEstimateRequest()) {
            $data['EstimateRequest'] = $this->normalizer->normalize($object->getEstimateRequest(), 'json', $context);
        }
        if ($object->isInitialized('shippingHistoryUserKey') && null !== $object->getShippingHistoryUserKey()) {
            $data['ShippingHistoryUserKey'] = $object->getShippingHistoryUserKey();
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
        return array('ShipStream\\Ups\\Api\\Model\\LandedCostRequest' => false);
    }
}