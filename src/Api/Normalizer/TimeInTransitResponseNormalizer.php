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
class TimeInTransitResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'ShipStream\\Ups\\Api\\Model\\TimeInTransitResponse';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\TimeInTransitResponse';
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
        $object = new \ShipStream\Ups\Api\Model\TimeInTransitResponse();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('validationList', $data)) {
            $object->setValidationList($this->denormalizer->denormalize($data['validationList'], 'ShipStream\\Ups\\Api\\Model\\ValidationList', 'json', $context));
            unset($data['validationList']);
        }
        if (\array_key_exists('destinationPickList', $data)) {
            $values = array();
            foreach ($data['destinationPickList'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'ShipStream\\Ups\\Api\\Model\\CandidateAddress', 'json', $context);
            }
            $object->setDestinationPickList($values);
            unset($data['destinationPickList']);
        }
        if (\array_key_exists('originPickList', $data)) {
            $values_1 = array();
            foreach ($data['originPickList'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'ShipStream\\Ups\\Api\\Model\\CandidateAddress', 'json', $context);
            }
            $object->setOriginPickList($values_1);
            unset($data['originPickList']);
        }
        if (\array_key_exists('emsResponse', $data)) {
            $object->setEmsResponse($this->denormalizer->denormalize($data['emsResponse'], 'ShipStream\\Ups\\Api\\Model\\EmsResponse', 'json', $context));
            unset($data['emsResponse']);
        }
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_2;
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
        if ($object->isInitialized('validationList') && null !== $object->getValidationList()) {
            $data['validationList'] = $this->normalizer->normalize($object->getValidationList(), 'json', $context);
        }
        if ($object->isInitialized('destinationPickList') && null !== $object->getDestinationPickList()) {
            $values = array();
            foreach ($object->getDestinationPickList() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['destinationPickList'] = $values;
        }
        if ($object->isInitialized('originPickList') && null !== $object->getOriginPickList()) {
            $values_1 = array();
            foreach ($object->getOriginPickList() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['originPickList'] = $values_1;
        }
        if ($object->isInitialized('emsResponse') && null !== $object->getEmsResponse()) {
            $data['emsResponse'] = $this->normalizer->normalize($object->getEmsResponse(), 'json', $context);
        }
        foreach ($object as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value_2;
            }
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('ShipStream\\Ups\\Api\\Model\\TimeInTransitResponse' => false);
    }
}