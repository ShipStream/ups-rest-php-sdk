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
class PickupRateResponseResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'ShipStream\\Ups\\Api\\Model\\PickupRateResponseResponse';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\PickupRateResponseResponse';
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
        $object = new \ShipStream\Ups\Api\Model\PickupRateResponseResponse();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('ResponseStatus', $data)) {
            $object->setResponseStatus($this->denormalizer->denormalize($data['ResponseStatus'], 'ShipStream\\Ups\\Api\\Model\\ResponseResponseStatus', 'json', $context));
            unset($data['ResponseStatus']);
        }
        if (\array_key_exists('Alert', $data)) {
            $values = array();
            foreach ($data['Alert'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'ShipStream\\Ups\\Api\\Model\\ResponseAlert', 'json', $context);
            }
            $object->setAlert($values);
            unset($data['Alert']);
        }
        if (\array_key_exists('TransactionReference', $data)) {
            $object->setTransactionReference($this->denormalizer->denormalize($data['TransactionReference'], 'ShipStream\\Ups\\Api\\Model\\ResponseTransactionReference', 'json', $context));
            unset($data['TransactionReference']);
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
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['ResponseStatus'] = $this->normalizer->normalize($object->getResponseStatus(), 'json', $context);
        if ($object->isInitialized('alert') && null !== $object->getAlert()) {
            $values = array();
            foreach ($object->getAlert() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['Alert'] = $values;
        }
        if ($object->isInitialized('transactionReference') && null !== $object->getTransactionReference()) {
            $data['TransactionReference'] = $this->normalizer->normalize($object->getTransactionReference(), 'json', $context);
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
        return array('ShipStream\\Ups\\Api\\Model\\PickupRateResponseResponse' => false);
    }
}