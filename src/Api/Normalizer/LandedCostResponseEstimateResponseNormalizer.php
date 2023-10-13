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
class LandedCostResponseEstimateResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'ShipStream\\Ups\\Api\\Model\\LandedCostResponseEstimateResponse';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\LandedCostResponseEstimateResponse';
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
        $object = new \ShipStream\Ups\Api\Model\LandedCostResponseEstimateResponse();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('TransactionInfo', $data)) {
            $object->setTransactionInfo($this->denormalizer->denormalize($data['TransactionInfo'], 'ShipStream\\Ups\\Api\\Model\\EstimateResponseTransactionInfo', 'json', $context));
            unset($data['TransactionInfo']);
        }
        if (\array_key_exists('ShipmentEstimate', $data)) {
            $object->setShipmentEstimate($this->denormalizer->denormalize($data['ShipmentEstimate'], 'ShipStream\\Ups\\Api\\Model\\EstimateResponseShipmentEstimate', 'json', $context));
            unset($data['ShipmentEstimate']);
        }
        if (\array_key_exists('SuppressQuestionIndicator', $data)) {
            $object->setSuppressQuestionIndicator($data['SuppressQuestionIndicator']);
            unset($data['SuppressQuestionIndicator']);
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
        $data['TransactionInfo'] = $this->normalizer->normalize($object->getTransactionInfo(), 'json', $context);
        $data['ShipmentEstimate'] = $this->normalizer->normalize($object->getShipmentEstimate(), 'json', $context);
        if ($object->isInitialized('suppressQuestionIndicator') && null !== $object->getSuppressQuestionIndicator()) {
            $data['SuppressQuestionIndicator'] = $object->getSuppressQuestionIndicator();
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
        return array('ShipStream\\Ups\\Api\\Model\\LandedCostResponseEstimateResponse' => false);
    }
}