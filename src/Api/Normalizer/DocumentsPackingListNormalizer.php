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
class DocumentsPackingListNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'ShipStream\\Ups\\Api\\Model\\DocumentsPackingList';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\DocumentsPackingList';
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
        $object = new \ShipStream\Ups\Api\Model\DocumentsPackingList();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('ShipFrom', $data)) {
            $object->setShipFrom($this->denormalizer->denormalize($data['ShipFrom'], 'ShipStream\\Ups\\Api\\Model\\PackingListShipFrom', 'json', $context));
            unset($data['ShipFrom']);
        }
        if (\array_key_exists('ShipTo', $data)) {
            $object->setShipTo($this->denormalizer->denormalize($data['ShipTo'], 'ShipStream\\Ups\\Api\\Model\\PackingListShipTo', 'json', $context));
            unset($data['ShipTo']);
        }
        if (\array_key_exists('Reference', $data)) {
            $values = array();
            foreach ($data['Reference'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'ShipStream\\Ups\\Api\\Model\\PackingListReference', 'json', $context);
            }
            $object->setReference($values);
            unset($data['Reference']);
        }
        if (\array_key_exists('HandlingUnit', $data)) {
            $object->setHandlingUnit($this->denormalizer->denormalize($data['HandlingUnit'], 'ShipStream\\Ups\\Api\\Model\\PackingListHandlingUnit', 'json', $context));
            unset($data['HandlingUnit']);
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
        if ($object->isInitialized('shipFrom') && null !== $object->getShipFrom()) {
            $data['ShipFrom'] = $this->normalizer->normalize($object->getShipFrom(), 'json', $context);
        }
        if ($object->isInitialized('shipTo') && null !== $object->getShipTo()) {
            $data['ShipTo'] = $this->normalizer->normalize($object->getShipTo(), 'json', $context);
        }
        if ($object->isInitialized('reference') && null !== $object->getReference()) {
            $values = array();
            foreach ($object->getReference() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['Reference'] = $values;
        }
        if ($object->isInitialized('handlingUnit') && null !== $object->getHandlingUnit()) {
            $data['HandlingUnit'] = $this->normalizer->normalize($object->getHandlingUnit(), 'json', $context);
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
        return array('ShipStream\\Ups\\Api\\Model\\DocumentsPackingList' => false);
    }
}